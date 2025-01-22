<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pista $pista
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pista'), ['action' => 'edit', $pista->idPista], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pista'), ['action' => 'delete', $pista->idPista], ['confirm' => __('Are you sure you want to delete # {0}?', $pista->idPista), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pistas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pista'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pistas view content">
            <h3><?= h($pista->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($pista->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdPista') ?></th>
                    <td><?= $this->Number->format($pista->idPista) ?></td>
                </tr>
                <tr>
                    <th><?= __('Distancia') ?></th>
                    <td><?= $this->Number->format($pista->distancia) ?></td>
                </tr>
                <tr>
                    <th><?= __('NivelDificuldade') ?></th>
                    <td><?= $this->Number->format($pista->nivelDificuldade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>