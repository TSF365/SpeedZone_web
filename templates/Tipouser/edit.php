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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipouser->idTipoUser],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipouser->idTipoUser), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipouser'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tipouser form content">
            <?= $this->Form->create($tipouser) ?>
            <fieldset>
                <legend><?= __('Edit Tipouser') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
