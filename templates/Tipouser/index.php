<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipouser> $tipouser
 */
?>
<div class="tipouser index content">
    <?= $this->Html->link(__('New Tipouser'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipouser') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idTipoUser') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipouser as $tipouser): ?>
                <tr>
                    <td><?= $this->Number->format($tipouser->idTipoUser) ?></td>
                    <td><?= h($tipouser->nome) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipouser->idTipoUser]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipouser->idTipoUser]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipouser->idTipoUser], ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->idTipoUser)]) ?>
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