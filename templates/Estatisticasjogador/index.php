<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Estatisticasjogador> $estatisticasjogador
 */
?>
<div class="estatisticasjogador index content">
    <?= $this->Html->link(__('New Estatisticasjogador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estatisticasjogador') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idEstatistica') ?></th>
                    <th><?= $this->Paginator->sort('idJogador') ?></th>
                    <th><?= $this->Paginator->sort('idPista') ?></th>
                    <th><?= $this->Paginator->sort('idVeiculo') ?></th>
                    <th><?= $this->Paginator->sort('melhorTempo') ?></th>
                    <th><?= $this->Paginator->sort('pistasUsadas') ?></th>
                    <th><?= $this->Paginator->sort('corridasGanhas') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estatisticasjogador as $estatisticasjogador): ?>
                <tr>
                    <td><?= $this->Number->format($estatisticasjogador->idEstatistica) ?></td>
                    <td><?= $estatisticasjogador->idJogador === null ? '' : $this->Number->format($estatisticasjogador->idJogador) ?></td>
                    <td><?= $estatisticasjogador->idPista === null ? '' : $this->Number->format($estatisticasjogador->idPista) ?></td>
                    <td><?= $estatisticasjogador->idVeiculo === null ? '' : $this->Number->format($estatisticasjogador->idVeiculo) ?></td>
                    <td><?= $estatisticasjogador->melhorTempo === null ? '' : $this->Number->format($estatisticasjogador->melhorTempo) ?></td>
                    <td><?= $estatisticasjogador->pistasUsadas === null ? '' : $this->Number->format($estatisticasjogador->pistasUsadas) ?></td>
                    <td><?= $estatisticasjogador->corridasGanhas === null ? '' : $this->Number->format($estatisticasjogador->corridasGanhas) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estatisticasjogador->idEstatistica]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estatisticasjogador->idEstatistica]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estatisticasjogador->idEstatistica], ['confirm' => __('Are you sure you want to delete # {0}?', $estatisticasjogador->idEstatistica)]) ?>
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