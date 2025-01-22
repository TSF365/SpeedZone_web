<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Veiculo> $veiculos
 */
?>
<div class="veiculos index content">
    <?= $this->Html->link(__('New Veiculo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Veiculos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idVeiculo') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('velocidadeMaxima') ?></th>
                    <th><?= $this->Paginator->sort('aceleracao') ?></th>
                    <th><?= $this->Paginator->sort('manobralidade') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($veiculos as $veiculo): ?>
                <tr>
                    <td><?= $this->Number->format($veiculo->idVeiculo) ?></td>
                    <td><?= h($veiculo->nome) ?></td>
                    <td><?= $this->Number->format($veiculo->velocidadeMaxima) ?></td>
                    <td><?= $this->Number->format($veiculo->aceleracao) ?></td>
                    <td><?= $this->Number->format($veiculo->manobralidade) ?></td>
                    <td><?= h($veiculo->categoria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $veiculo->idVeiculo]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $veiculo->idVeiculo]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $veiculo->idVeiculo], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->idVeiculo)]) ?>
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