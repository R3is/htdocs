<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Delivery Controller
 *
 * @property \App\Model\Table\DeliveryTable $Delivery
 * @method \App\Model\Entity\Delivery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DeliveryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index']);
    }

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->viewBuilder()->setLayout('website');
    }

    public function index()
    {
        $usuarioAtual = $this->Authentication->getIdentity();
        $delivery1 = $this->paginate($this->Delivery, ['contain' => 'Receive', 'limit' => 10]);
        $delivery = $this->Delivery->newEmptyEntity();
        $motoristaTable = $this->fetchTable('Users');
        $motorista = $motoristaTable->find('all', array('name' => array('DISTINCT (name) AS nome_motorista'), 'conditions' => array('role_id' => 2)));
        $motorista = $motorista->toArray();

        if ($this->request->is('post')) {

            $delivery = $this->Delivery->patchEntity($delivery, $this->request->getData());

            $delivery->driver = $motorista[$delivery->driver]->name;
            if ($this->Delivery->save($delivery)) {
                $this->Flash->success(__('Data de coleta cadastrada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel cadastrar a data de coleta'));
        }

        $this->set(compact('delivery1', 'usuarioAtual', 'delivery', 'motorista'));
    }

    /**
     * View method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $delivery = $this->Delivery->get($id, [
            'contain' => ['Receive'],
        ]);

        $this->set(compact('delivery'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $delivery = $this->Delivery->newEmptyEntity();
        if ($this->request->is('post')) {
            $delivery = $this->Delivery->patchEntity($delivery, $this->request->getData());
            if ($this->Delivery->save($delivery)) {
                $this->Flash->success(__('Motorista cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Náo foi possivel cadastrar o motorista!'));
        }
        $this->set(compact('delivery'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $delivery = $this->Delivery->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $delivery = $this->Delivery->patchEntity($delivery, $this->request->getData());
            if ($this->Delivery->save($delivery)) {
                $this->Flash->success(__('The delivery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The delivery could not be saved. Please, try again.'));
        }
        $this->set(compact('delivery'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Delivery id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tableFilha = $this->fetchTable('Receive');
        $query = $tableFilha->find('all', array('conditions' => array('delivery_id' => $id)))->toArray();
        if (count($query) > 0) {
            if ($tableFilha->deleteAll(array('delivery_id' => $id))) {
                $delivery = $this->Delivery->get($id);
                if ($this->Delivery->delete($delivery)) {
                    $this->Flash->success(__('Pedido de reciclagem deletado com sucesso!'));
                } else {
                    $this->Flash->error(__('Não foi possivel deletar o pedido de reciclagem!'));
                }
            } else {
                $this->Flash->error(__('Não foi possivel deletar o pedido de reciclagem!'));
            }
        } else {
            $delivery = $this->Delivery->get($id);
            if ($this->Delivery->delete($delivery)) {
                $this->Flash->success(__('Pedido de reciclagem deletado com sucesso!'));
            } else {
                $this->Flash->error(__('Não foi possivel deletar o pedido de reciclagem.'));
            }
        }


        return $this->redirect(['action' => 'index']);
    }

    public function solicitar($id = null)
    {
        $this->autoRender = false;
        $receiveTable = $this->fetchTable('Receive');
        $query = $receiveTable->find('all')->where(['delivery_id' => $id]);
        $query = count($query->toArray());
        $cadastrado = $receiveTable->find('all')->where(['delivery_id' => $id, 'users_id' => $this->Authentication->getIdentity()->id]);
        $cadastrado = count($cadastrado->toArray());

        if ($cadastrado > 0) {
            $this->Flash->error(__('Você já esta cadastrado nessa busca!'));
            return $this->redirect(['action' => 'index']);
        }

        if ($query >= 10) {
            $this->Flash->error(__('Essa data já atingiu o limite de solicitações!'));
            return $this->redirect(['action' => 'index']);
        }

        if ($id == null) {
            $this->Flash->error(__('Data não encontrada!'));
            return $this->redirect(['action' => 'index']);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receive = $receiveTable->newEmptyEntity();
            $receive->delivery_id = $id;
            $receive->users_id = $this->Authentication->getIdentity()->id;

            if ($receiveTable->save($receive)) {
                $this->Flash->success(__('Solicitação realizada com sucesso, caso queira cancelar basta clicar em cancelar!'));
                echo "teste";
            } else {
                $this->Flash->error(__('A solicitação não pode ser realizada. Por favor, tente novamente.'));
                echo "fail";
            }
        }
        return $this->redirect(['action' => 'index']);
    }

    public function cancelar($delivery_id = null)
    {
        if ($delivery_id == null) {
            $this->Flash->error(__('Data não encontrada!'));
            return $this->redirect(['action' => 'index']);
        }

        $this->autoRender = false;
        $receiveTable = $this->fetchTable('Receive');
        $query = $receiveTable->find('all')->where(['delivery_id' => $delivery_id, 'users_id' => $this->Authentication->getIdentity()->id])->toArray();
        $deleta = $receiveTable->get($query[0]->id);

        if ($receiveTable->delete($deleta)) {
            $this->Flash->success(__('A solicitação foi cancelada com sucesso!'));
        }
        return $this->redirect(['action' => 'index']);
    }
}

