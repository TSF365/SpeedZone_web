<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estatisticasjogador $estatisticasjogador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estatisticasjogador'), ['action' => 'edit', $estatisticasjogador->idEstatistica], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estatisticasjogador'), ['action' => 'delete', $estatisticasjogador->idEstatistica], ['confirm' => __('Are you sure you want to delete # {0}?', $estatisticasjogador->idEstatistica), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estatisticasjogador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estatisticasjogador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estatisticasjogador view content">
            <h3><?= h($estatisticasjogador->idEstatistica) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdEstatistica') ?></th>
                    <td><?= $this->Number->format($estatisticasjogador->idEstatistica) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJogador') ?></th>
                    <td><?= $estatisticasjogador->idJogador === null ? '' : $this->Number->format($estatisticasjogador->idJogador) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPista') ?></th>
                    <td><?= $estatisticasjogador->idPista === null ? '' : $this->Number->format($estatisticasjogador->idPista) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVeiculo') ?></th>
                    <td><?= $estatisticasjogador->idVeiculo === null ? '' : $this->Number->format($estatisticasjogador->idVeiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('MelhorTempo') ?></th>
                    <td><?= $estatisticasjogador->melhorTempo === null ? '' : $this->Number->format($estatisticasjogador->melhorTempo) ?></td>
                </tr>
                <tr>
                    <th><?= __('PistasUsadas') ?></th>
                    <td><?= $estatisticasjogador->pistasUsadas === null ? '' : $this->Number->format($estatisticasjogador->pistasUsadas) ?></td>
                </tr>
                <tr>
                    <th><?= __('CorridasGanhas') ?></th>
                    <td><?= $estatisticasjogador->corridasGanhas === null ? '' : $this->Number->format($estatisticasjogador->corridasGanhas) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>