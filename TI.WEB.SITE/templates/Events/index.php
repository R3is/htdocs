<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>

<div class="b-title-page area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="b-title-page__title"><?= __('Eventos') ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="/TI.WEB.SITE/">Inicio</a></li>
                        <li class="active">Eventos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="events index content container">
    <?php if ($usuarioAtual != null): ?>
        <?php if ($usuarioAtual->role_id == 5): ?>
            <div
                style="text-align: center"><?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'main-slider__btn btn btn-primary btn_header_search', 'style' => 'margin-top: 40px ;border-radius: 20px;width: 180;']) ?></div>
        <?php endif ?>
    <?php endif ?>
    <center style="padding-top: 20px"><?= $this->Flash->render() ?></center>
    <div class="table-responsive" style="margin-top: 20px">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('title', 'Nome') ?></th>
                <th><?= $this->Paginator->sort('description', 'Descrição') ?></th>
                <th><?= $this->Paginator->sort('location', 'Local') ?></th>
                <th><?= $this->Paginator->sort('date', 'Data') ?></th>
                <th><?= $this->Paginator->sort('time', 'Hora') ?></th>
                <?php if ($usuarioAtual != null): ?>
                    <?php if ($usuarioAtual->role_id == 5): ?>
                        <th class="actions"><?= __('Ações') ?></th>
                    <?php endif ?>
                <?php endif ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($events as $event1): ?>
                <tr>
                    <td><?= h($event1->title) ?></td>
                    <td><?= h($event1->description) ?></td>
                    <td><?= h($event1->location)?></td>
                    <td><?= h($event1->date->format('d/m/y')) ?></td>
                    <td><?= h(substr($event1->time,0,5)) ?></td>
                    <?php if ($usuarioAtual != null): ?>
                        <?php if ($usuarioAtual->role_id == 5): ?>
                            <td class="actions">
                                <?= $this->Form->postLink(__('EXCLUIR'), ['action' => 'delete', $event1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event1->id), 'class' => 'btn btn-danger']) ?>
                            </td>
                        <?php endif ?>
                    <?php endif ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="mb-5" style="margin-bottom: 50px"> <?= $this->element('paginator') ?></div>
</div>


<div class="header-search open-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                <div class="row"
                     style="background-color: white; border: 1px solid black; margin-top: 40px;border-radius: 10px; padding: 20px 20px 20px 20px">
                    <div class="column-responsive column-80">
                        <div class="events form content">
                            <button type="button" class="search-close close"
                                    style="margin-top: 42px;margin-right: 5px;height: 49px"><i class="fa fa-times"></i>
                            </button>
                            <?= $this->Form->create($event) ?>
                            <fieldset>
                                <legend style="text-align: center"><?= __('CADASTRAR EVENTO') ?></legend>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Nome: </label>
                                <?php echo $this->Form->control('title', ['class' => 'form-control', 'placeholder' => 'Nome do evento', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black">
                                    Descricao: </label>
                                <?php echo $this->Form->control('description', ['class' => 'form-control', 'placeholder' => 'Descricao do evento', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Local: </label>
                                <?php echo $this->Form->control('location', ['class' => 'form-control', 'placeholder' => 'Localizacao do evento', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Data: </label>
                                <?php echo $this->Form->control('date', ['class' => 'form-control', 'placeholder' => 'Data do evento', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Hora: </label>
                                <?php echo $this->Form->control('time', ['class' => 'form-control', 'placeholder' => 'Horario do evento', 'label' => false, 'required' => true]); ?>
                            </fieldset>
                            <div
                                style="text-align: center"><?= $this->Form->button(__('Cadastrar'), ['class' => 'main-slider__btn btn btn-success', 'style' => 'width: "100px !important"']) ?></div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
