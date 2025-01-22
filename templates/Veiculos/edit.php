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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $veiculo->idVeiculo],
                ['confirm' => __('Are you sure you want to delete # {0}?', $veiculo->idVeiculo), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Veiculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="veiculos form content">
            <?= $this->Form->create($veiculo) ?>
            <fieldset>
                <legend><?= __('Edit Veiculo') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('velocidadeMaxima');
                    echo $this->Form->control('aceleracao');
                    echo $this->Form->control('manobralidade');
                    echo $this->Form->control('categoria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
