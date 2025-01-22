<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ranking> $ranking
 */
?>
<div class="ranking index content">
    <?= $this->Html->link(__('New Ranking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ranking') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idRanking') ?></th>
                    <th><?= $this->Paginator->sort('idJogador') ?></th>
                    <th><?= $this->Paginator->sort('pontuacaoTotal') ?></th>
                    <th><?= $this->Paginator->sort('posicao') ?></th>
                    <th><?= $this->Paginator->sort('dataAtualizacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ranking as $ranking): ?>
                <tr>
                    <td><?= $this->Number->format($ranking->idRanking) ?></td>
                    <td><?= $ranking->idJogador === null ? '' : $this->Number->format($ranking->idJogador) ?></td>
                    <td><?= $ranking->pontuacaoTotal === null ? '' : $this->Number->format($ranking->pontuacaoTotal) ?></td>
                    <td><?= $ranking->posicao === null ? '' : $this->Number->format($ranking->posicao) ?></td>
                    <td><?= h($ranking->dataAtualizacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ranking->idRanking]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ranking->idRanking]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ranking->idRanking], ['confirm' => __('Are you sure you want to delete # {0}?', $ranking->idRanking)]) ?>
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