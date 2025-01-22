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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $amizade->idJogador1],
                ['confirm' => __('Are you sure you want to delete # {0}?', $amizade->idJogador1), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Amizades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="amizades form content">
            <?= $this->Form->create($amizade) ?>
            <fieldset>
                <legend><?= __('Edit Amizade') ?></legend>
                <?php
                    echo $this->Form->control('dataAmizade', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
