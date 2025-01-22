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
            <?= $this->Html->link(__('List Pistas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pistas form content">
            <?= $this->Form->create($pista) ?>
            <fieldset>
                <legend><?= __('Add Pista') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('distancia');
                    echo $this->Form->control('nivelDificuldade');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
