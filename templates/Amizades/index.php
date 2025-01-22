<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Amizade> $amizades
 */
?>
<div class="amizades index content">
    <?= $this->Html->link(__('New Amizade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Amizades') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idJogador1') ?></th>
                    <th><?= $this->Paginator->sort('idJogador2') ?></th>
                    <th><?= $this->Paginator->sort('dataAmizade') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($amizades as $amizade): ?>
                <tr>
                    <td><?= $this->Number->format($amizade->idJogador1) ?></td>
                    <td><?= $this->Number->format($amizade->idJogador2) ?></td>
                    <td><?= h($amizade->dataAmizade) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $amizade->idJogador1]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $amizade->idJogador1]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $amizade->idJogador1], ['confirm' => __('Are you sure you want to delete # {0}?', $amizade->idJogador1)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>