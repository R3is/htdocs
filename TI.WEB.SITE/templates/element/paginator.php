<nav class="row mb-4">
    <div class="col-lg-12" style="text-align: center"
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} de {{count}}')) ?></p>
        <ul class="pagination justify-content-end">
            <?= $this->Paginator->first() ?>
            <?= $this->Paginator->prev('<') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('>') ?>
            <?= $this->Paginator->last() ?>
        </ul>
    </div>
</nav>
