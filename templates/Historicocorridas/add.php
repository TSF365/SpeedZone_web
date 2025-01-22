<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historicocorrida $historicocorrida
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Historicocorridas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="historicocorridas form content">
            <?= $this->Form->create($historicocorrida) ?>
            <fieldset>
                <legend><?= __('Add Historicocorrida') ?></legend>
                <?php
                    echo $this->Form->control('idJogador');
                    echo $this->Form->control('idPista');
                    echo $this->Form->control('idVeiculo');
                    echo $this->Form->control('tempoFinal');
                    echo $this->Form->control('dataCorrida', ['empty' => true]);
                    echo $this->Form->control('pontuacaocorrida');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
