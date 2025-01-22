<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipouser $tipouser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipouser'), ['action' => 'edit', $tipouser->idTipoUser], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipouser'), ['action' => 'delete', $tipouser->idTipoUser], ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->idTipoUser), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipouser'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipouser'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tipouser view content">
            <h3><?= h($tipouser->idTipoUser) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($tipouser->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTipoUser') ?></th>
                    <td><?= $this->Number->format($tipouser->idTipoUser) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>