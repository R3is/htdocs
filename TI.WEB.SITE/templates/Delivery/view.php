<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delivery $delivery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Delivery'), ['action' => 'edit', $delivery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Delivery'), ['action' => 'delete', $delivery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delivery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Delivery'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Delivery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="delivery view content">
            <h3><?= h($delivery->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Driver') ?></th>
                    <td><?= h($delivery->driver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($delivery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($delivery->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time Start') ?></th>
                    <td><?= h($delivery->time_start) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time End') ?></th>
                    <td><?= h($delivery->time_end) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Receive') ?></h4>
                <?php if (!empty($delivery->receive)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Users Id') ?></th>
                            <th><?= __('Delivery Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($delivery->receive as $receive) : ?>
                        <tr>
                            <td><?= h($receive->id) ?></td>
                            <td><?= h($receive->users_id) ?></td>
                            <td><?= h($receive->delivery_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Receive', 'action' => 'view', $receive->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Receive', 'action' => 'edit', $receive->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Receive', 'action' => 'delete', $receive->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receive->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
