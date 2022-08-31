<?php
/**
 * @var \App\View\AppView $this
 * @var Users $user
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */

use App\Model\Entity\Users;

?>

<div class="container-principal"
     style="display: flex;flex: 1;justify-content: center; background-color: #fe3e01; height: 100vh; overflow-y: auto">
    <div
        style="background: #ffffff;margin: 20px;padding: 60px;width: 70%; box-shadow: 0 0 5px 2px rgba(143, 143, 143, 0.5);">
        <center><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>"> Já possui conta?
                Clique aqui e faça login.</a></center>
        <h4 style="color:#54667A;">Cadastro de Usúario</h4>
        <hr/>
        <div id="sucess" class="sucess"></div>
        <div id="error" class="error"></div>
        <?= $this->Form->create($user) ?>
        <div class="row input-register">
            <div class="col-12 col-md-6">
                <?= $this->Form->control('name', ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Nome Completo', 'label' => 'Digite seu nome completo', 'required' => true]) ?>
                <span id="instrucoes"></span>
            </div>
            <div class="col-12 col-md-6">
                <?= $this->Form->control('email', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Digite seu email', 'label' => 'Email', 'required' => true]) ?>
                <span id="msgemail"></span>
            </div>
        </div>
        <div class="row input-register">
            <div class="col-12 col-md-6">
                <div class="form-check1">
                    <br>
                    <?= $this->Form->control('receive', ['type' => 'checkbox', 'label' => ' Deseja retirar em casa']); ?>
                    <br>
                </div>
            </div>
        </div>
        <div class="row input-register">
            <div class="col-12 col-md-6">
                <?= $this->Form->control('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Digite sua senha', 'label' => 'Senha', 'required' => true]) ?>
                <small class="form-text text-muted">Verifique sua capslock</small>
            </div>
            <div class="col-12 col-md-6">
                <?= $this->Form->control('contact', ['class' => 'form-control contact', 'id' => 'contact', 'placeholder' => 'Telefone de contato', 'label' => 'Contato', 'required' => true]) ?>
            </div>
        </div>

        <div class="row input-register">
            <div class="col-12 col-md-6">
                <?= $this->Form->control('address', ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Digite seu endereco', 'label' => 'Endereço completo', 'required' => true]) ?>
            </div>
            <div class="col-12 col-md-6">
                <?= $this->Form->control('address_cep', ['class' => 'form-control cep', 'id' => 'address_cep', 'placeholder' => 'Digite seu CEP', 'label' => 'CEP', 'required' => true]) ?>
            </div>
        </div>

        <div class="row" style="justify-content: center">
            <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn', 'style' => 'background: #FFA21F;margin: 20px;border-radius: 20px;']) ?>
        </div>
        <div class="row"><center style="padding-top: 20px"><?= $this->Flash->render() ?></center></div>
        <?= $this->Form->end() ?>
    </div>
</div>
