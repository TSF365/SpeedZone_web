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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pista->idPista],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pista->idPista), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pistas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pistas form content">
            <?= $this->Form->create($pista) ?>
            <fieldset>
                <legend><?= __('Edit Pista') ?></legend>
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
