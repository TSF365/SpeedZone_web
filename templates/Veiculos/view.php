<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Veiculo $veiculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Veiculo'), ['action' => 'edit', $veiculo->idVeiculo], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Veiculo'), ['action' => 'delete', $veiculo->idVeiculo], ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->idVeiculo), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Veiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Veiculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="veiculos view content">
            <h3><?= h($veiculo->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($veiculo->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= h($veiculo->categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdVeiculo') ?></th>
                    <td><?= $this->Number->format($veiculo->idVeiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('VelocidadeMaxima') ?></th>
                    <td><?= $this->Number->format($veiculo->velocidadeMaxima) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aceleracao') ?></th>
                    <td><?= $this->Number->format($veiculo->aceleracao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Manobralidade') ?></th>
                    <td><?= $this->Number->format($veiculo->manobralidade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>