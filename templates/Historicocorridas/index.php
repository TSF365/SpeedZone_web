<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Historicocorrida> $historicocorridas
 */
?>
<div class="historicocorridas index content">
    <?= $this->Html->link(__('New Historicocorrida'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Historicocorridas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCorrida') ?></th>
                    <th><?= $this->Paginator->sort('idJogador') ?></th>
                    <th><?= $this->Paginator->sort('idPista') ?></th>
                    <th><?= $this->Paginator->sort('idVeiculo') ?></th>
                    <th><?= $this->Paginator->sort('tempoFinal') ?></th>
                    <th><?= $this->Paginator->sort('dataCorrida') ?></th>
                    <th><?= $this->Paginator->sort('pontuacaocorrida') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historicocorridas as $historicocorrida): ?>
                <tr>
                    <td><?= $this->Number->format($historicocorrida->idCorrida) ?></td>
                    <td><?= $historicocorrida->idJogador === null ? '' : $this->Number->format($historicocorrida->idJogador) ?></td>
                    <td><?= $historicocorrida->idPista === null ? '' : $this->Number->format($historicocorrida->idPista) ?></td>
                    <td><?= $historicocorrida->idVeiculo === null ? '' : $this->Number->format($historicocorrida->idVeiculo) ?></td>
                    <td><?= $historicocorrida->tempoFinal === null ? '' : $this->Number->format($historicocorrida->tempoFinal) ?></td>
                    <td><?= h($historicocorrida->dataCorrida) ?></td>
                    <td><?= $historicocorrida->pontuacaocorrida === null ? '' : $this->Number->format($historicocorrida->pontuacaocorrida) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $historicocorrida->idCorrida]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historicocorrida->idCorrida]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicocorrida->idCorrida], ['confirm' => __('Are you sure you want to delete # {0}?', $historicocorrida->idCorrida)]) ?>
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