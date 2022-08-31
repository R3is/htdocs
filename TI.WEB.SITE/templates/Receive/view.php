<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receive $receive
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Receive'), ['action' => 'edit', $receive->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Receive'), ['action' => 'delete', $receive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receive->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Receive'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Receive'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="receive view content">
            <h3><?= h($receive->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $receive->has('user') ? $this->Html->link($receive->user->name, ['controller' => 'Users', 'action' => 'view', $receive->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Delivery') ?></th>
                    <td><?= $receive->has('delivery') ? $this->Html->link($receive->delivery->id, ['controller' => 'Delivery', 'action' => 'view', $receive->delivery->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($receive->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
