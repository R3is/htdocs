<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery[]|\Cake\Collection\CollectionInterface $deivery1
 */
?>

<?php
$array = [];
$logic1 = false;
$logic2 = false;
?>

<div class="b-title-page area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="b-title-page__title"><?= __('Reciclagem') ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="/TI.WEB.SITE/">Inicio</a></li>
                        <li class="active">Reciclagem</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="delivery index content container">
    <?php if ($usuarioAtual != null): ?>
        <?php if ($usuarioAtual->role_id == 5): ?>
            <div
                style="text-align: center"><?= $this->Html->link(__('Cadastrar'), ['action' => 'add'], ['class' => 'main-slider__btn btn btn-primary btn_header_search', 'style' => 'margin-top: 40px ;border-radius: 20px;width: 180;']) ?></div>
        <?php endif ?>
        <center style="padding-top: 20px"><?= $this->Flash->render() ?></center>
    <?php endif ?>
    <div class="table-responsive" style="margin-top: 20px">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('driver', 'Motorista') ?></th>
                <th><?= $this->Paginator->sort('date', 'Data') ?></th>
                <th><?= $this->Paginator->sort('time_start', 'Inicio') ?></th>
                <th><?= $this->Paginator->sort('time_end', 'Fim') ?></th>
                <th>Vagas</th>
                <?php if ($usuarioAtual != null): ?>
                    <?php if ($usuarioAtual->role_id != 2): ?>
                        <th class="actions"><?= __('Acoes') ?></th>
                    <?php endif ?>
                <?php endif ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($delivery1 as $delivery2): ?>
                <?php $logic1 = false ?>
                <tr>
                    <td><?= h($delivery2->driver) ?></td>
                    <td><?= h($delivery2->date->format('d/m/y')) ?></td>
                    <td><?= h(substr($delivery2->time_start,0,5)) ?></td>
                    <td><?= h(substr($delivery2->time_end,0,5)) ?></td>
                    <td><?= h(10 - count($delivery2->receive)) ?></td>
                    <?php if ($usuarioAtual != null): ?>
                        <?php if ($usuarioAtual->role_id != 2): ?>
                            <td class="actions">
                                <?php if ($usuarioAtual->role_id != 5): ?>
                                    <?php foreach ($delivery2->receive as $delivery3): ?>
                                        <?php if ($delivery3->users_id == $usuarioAtual->id): ?>
                                            <?php $logic1 = true?>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                    <?php if ($logic1 == false): ?>
                                        <?= $this->Form->postLink('SOLICITAR', ['action' => 'solicitar', $delivery2->id], ['confirm' => 'Deseja participar?', 'class' => 'btn btn-success']) ?>
                                    <?php else: ?>
                                        <?= $this->Form->postLink('CANCELAR', ['action' => 'cancelar', $delivery3->delivery_id], ['confirm' => 'Deseja cancelar sua participação?', 'class' => 'btn btn-warning']) ?>
                                    <?php endif ?>
                                <?php endif ?>
                                <?php if ($usuarioAtual->role_id == 5): ?>
                                    <?= $this->Form->postLink(__('EXCLUIR'), ['action' => 'delete', $delivery2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery2->id), 'class' => 'btn btn-danger']) ?>
                                <?php endif ?>
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
                            <?= $this->Form->create($delivery) ?>
                            <?php foreach ($motorista as $temp): ?>
                                <?php array_push($array, "$temp->name"); ?>
                            <?php endforeach; ?>

                            <fieldset>
                                <legend style="text-align: center"><?= __('CADASTRAR RECICLAGEM') ?></legend>
                                <label style="font-size: x-large; font-weight: bolder; color: black">
                                    Motorista: </label>
                                <?php echo $this->Form->select('driver', $array, ['class' => 'form-control', 'placeholder' => 'Nome do Motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Data: </label>
                                <?php echo $this->Form->control('date', ['class' => 'form-control', 'placeholder' => 'Data da Coleta', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Horario
                                    Inicio: </label>
                                <?php echo $this->Form->control('time_start', ['class' => 'form-control', 'placeholder' => 'Horario inicio da coleta', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Horario
                                    Fim: </label>
                                <?php echo $this->Form->control('time_end', ['class' => 'form-control', 'placeholder' => 'Horario fim da coleta', 'label' => false, 'required' => true]); ?>
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
