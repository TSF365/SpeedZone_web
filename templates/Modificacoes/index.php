<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Modificaco> $modificacoes
 */
?>
<div class="modificacoes index content">
    <?= $this->Html->link(__('New Modificaco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modificacoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idModificacao') ?></th>
                    <th><?= $this->Paginator->sort('idJogador') ?></th>
                    <th><?= $this->Paginator->sort('nomeModificacao') ?></th>
                    <th><?= $this->Paginator->sort('dataSubmissao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modificacoes as $modificaco): ?>
                <tr>
                    <td><?= $this->Number->format($modificaco->idModificacao) ?></td>
                    <td><?= $modificaco->idJogador === null ? '' : $this->Number->format($modificaco->idJogador) ?></td>
                    <td><?= h($modificaco->nomeModificacao) ?></td>
                    <td><?= h($modificaco->dataSubmissao) ?></td>
                    <td><?= h($modificaco->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $modificaco->idModificacao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modificaco->idModificacao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modificaco->idModificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $modificaco->idModificacao)]) ?>
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