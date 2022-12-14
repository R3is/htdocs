<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WebController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['index', 'contato']);
    }

    public function initialize(): void
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->viewBuilder()->setLayout('website');

        $usuarioAtual = $this->Authentication->getIdentity();

        $membros = $this->fetchTable('Users');
        $queryMembros = $membros->find('all',['fields' => array('amount' => 'MAX(id)'),])->toArray();
        $queryMembros = $queryMembros[0]->amount;
        $queryMembros = strval($queryMembros);

        $eventos = $this->fetchTable('Events');
        $queryEventos = $eventos->find('all',['fields' => array('amount' => 'MAX(id)'),])->toArray();
        $queryEventos = $queryEventos[0]->amount;
        $queryEventos = strval($queryEventos);

        $reciclagem = $this->fetchTable('Receive');
        $queryReciclagem = $reciclagem->find('all',['fields' => array('amount' => 'MAX(id)'),])->toArray();
        $queryReciclagem = $queryReciclagem[0]->amount;
        $queryReciclagem = strval($queryReciclagem);

        $this->set(compact('queryMembros', 'queryEventos', 'queryReciclagem', 'usuarioAtual'));

    }

    public function index()
    {

    }

    public function contato()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->viewBuilder()->setLayout('website');
        $usuarioAtual = $this->Authentication->getIdentity();
        $this->set(compact('usuarioAtual'));
    }

    public function events()
    {
        $usuarioAtual = $this->Authentication->getIdentity();
        $this->set(compact('usuarioAtual'));
    }

}
