<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receive $motorista
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receive[]|\Cake\Collection\CollectionInterface $motoristas
 */
?>

<?php $count = 0 ?>

<div class="b-title-page area-bg area-bg_dark parallax">
    <div class="area-bg__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="b-title-page__title"><?= __('Motorista') ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="/TI.WEB.SITE/">Inicio</a></li>
                        <li class="active">Motorista</li>
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
                style="text-align: center"><?= $this->Html->link(__('Cadastrar Motorista'), ['action' => 'add'], ['class' => 'main-slider__btn btn btn-primary btn_header_search', 'style' => 'margin-top: 40px ;border-radius: 20px;width: 240px;']) ?></div>
            <center style="padding-top: 20px"><?= $this->Flash->render() ?></center>
        <?php endif ?>
    <?php endif ?>
    <div class="table-responsive" style="margin-top: 20px">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('Delivery.id', 'Entrega') ?></th>
                <th><?= $this->Paginator->sort('Delivery.date', 'Data') ?></th>
                <th><?= $this->Paginator->sort('Delivery.time_start', 'Inicio') ?></th>
                <th><?= $this->Paginator->sort('Delivery.time_end', 'Fim') ?></th>
                <th><?= $this->Paginator->sort('Delivery.driver', 'Motorista') ?></th>
                <th><?= $this->Paginator->sort('Users.name', 'Cliente') ?></th>
                <th><?= $this->Paginator->sort('Users.address', 'Endereco') ?></th>
                <?php if ($usuarioAtual != null): ?>
                    <?php if ($usuarioAtual->role_id == 2 || $usuarioAtual->role_id == 5): ?>
                        <th class="actions"><?= __('Acoes') ?></th>
                    <?php endif ?>
                <?php endif ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($motoristas as $motorista1): $count++ ?>
                    <tr>
                        <td><?= h($motorista1->delivery->id) . '  -  ' . ($count) ?></td>
                        <td><?= h($motorista1->delivery->date->format('d/m/Y')) ?></td>
                        <td><?= h(substr($motorista1->delivery->time_start, 0, 5)) ?></td>
                        <td><?= h(substr($motorista1->delivery->time_end, 0, 5)) ?></td>
                        <td><?= h($motorista1->delivery->driver) ?></td>
                        <td><?= h($motorista1->user->name) ?></td>
                        <td><?= h($motorista1->user->address) ?></td>
                        <?php if ($usuarioAtual != null): ?>
                            <?php if ($usuarioAtual->role_id == 2 || $usuarioAtual->role_id == 5): ?>
                                <td class="actions">
                                    <?= $this->Form->postLink(__('EXCLUIR'), ['action' => 'delete', $motorista1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $motorista1->id), 'class' => 'btn btn-danger']) ?>
                                </td>
                        <?php endif ?>
                    </tr>
                <?php endif ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="mb-5" style="margin-bottom: 50px"> <?= $this->element('paginator') ?></div>
</div>

<div class="container" style="padding-bottom: 50px" onload="calcRoute()">
    <div class="row">
        <div class="col-md-12">
            <h1 style="text-align: center"> Calculo da rota para o dia: </h1>
        </div>
        <div class="col-md-12">
            <div class="container-fluid">
                <div id="googleMap">
                    <!--                    imprime a rota-->
                </div>
                <div id="output">
                    <!--                    imprime a rota-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="header-search open-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 modal-perso">
                <div class="row"
                     style="background-color: white; border: 1px solid black; margin-top: 40px;border-radius: 10px; padding: 20px 20px 20px 20px; display: block !important;">
                    <div class="column-responsive column-80" style="overflow-y: initial !important">
                        <div class="events form content" style="height: 80vh; overflow-y: auto;">
                            <button type="button" class="search-close close"
                                    style="margin-top: 42px;margin-right: 5px;height: 49px"><i class="fa fa-times"></i>
                            </button>
                            <?= $this->Form->create($motorista) ?>
                            <fieldset>
                                <legend style="text-align: center"><?= __('CADASTRAR MOTORISTA') ?></legend>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Nome: </label>
                                <?php echo $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome do motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Email: </label>
                                <?php echo $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Email do motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Senha: </label>
                                <?php echo $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Senha do motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Veiculo: </label>
                                <?php echo $this->Form->control('vehicle', ['class' => 'form-control', 'placeholder' => 'Veiculo do motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Placa: </label>
                                <?php echo $this->Form->control('vehicle_plate', ['class' => 'form-control', 'placeholder' => 'Placa do motorista', 'label' => false, 'required' => true]); ?>
                                <label style="font-size: x-large; font-weight: bolder; color: black"> Contato: </label>
                                <?php echo $this->Form->control('contact', ['class' => 'form-control', 'placeholder' => 'Contato do motorista', 'label' => false, 'required' => true]); ?>
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
<?php $string_array = implode('|', $enderecos); ?>

<!-- Maps customization-->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQuNo40o-zdlK7U5Mrahis9eVAMsldTJ8&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/maps.js"></script>
<script>
    var enderecos = "<?php echo $string_array ?>"
</script>























