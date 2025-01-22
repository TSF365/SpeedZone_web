<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Amizade $amizade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Amizade'), ['action' => 'edit', $amizade->idJogador1], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Amizade'), ['action' => 'delete', $amizade->idJogador1], ['confirm' => __('Are you sure you want to delete # {0}?', $amizade->idJogador1), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Amizades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Amizade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="amizades view content">
            <h3><?= h($amizade->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdJogador1') ?></th>
                    <td><?= $this->Number->format($amizade->idJogador1) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJogador2') ?></th>
                    <td><?= $this->Number->format($amizade->idJogador2) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataAmizade') ?></th>
                    <td><?= h($amizade->dataAmizade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>