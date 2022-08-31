<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receive $receive
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $delivery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Receive'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="receive form content">
            <?= $this->Form->create($receive) ?>
            <fieldset>
                <legend><?= __('Add Receive') ?></legend>
                <?php
                    echo $this->Form->control('users_id', ['options' => $users]);
                    echo $this->Form->control('delivery_id', ['options' => $delivery]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
