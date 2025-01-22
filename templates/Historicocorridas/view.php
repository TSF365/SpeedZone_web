<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historicocorrida $historicocorrida
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Historicocorrida'), ['action' => 'edit', $historicocorrida->idCorrida], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Historicocorrida'), ['action' => 'delete', $historicocorrida->idCorrida], ['confirm' => __('Are you sure you want to delete # {0}?', $historicocorrida->idCorrida), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Historicocorridas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Historicocorrida'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="historicocorridas view content">
            <h3><?= h($historicocorrida->idCorrida) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdCorrida') ?></th>
                    <td><?= $this->Number->format($historicocorrida->idCorrida) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJogador') ?></th>
                    <td><?= $historicocorrida->idJogador === null ? '' : $this->Number->format($historicocorrida->idJogador) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPista') ?></th>
                    <td><?= $historicocorrida->idPista === null ? '' : $this->Number->format($historicocorrida->idPista) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVeiculo') ?></th>
                    <td><?= $historicocorrida->idVeiculo === null ? '' : $this->Number->format($historicocorrida->idVeiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('TempoFinal') ?></th>
                    <td><?= $historicocorrida->tempoFinal === null ? '' : $this->Number->format($historicocorrida->tempoFinal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pontuacaocorrida') ?></th>
                    <td><?= $historicocorrida->pontuacaocorrida === null ? '' : $this->Number->format($historicocorrida->pontuacaocorrida) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataCorrida') ?></th>
                    <td><?= h($historicocorrida->dataCorrida) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>