<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estatisticasjogador $estatisticasjogador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Estatisticasjogador'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estatisticasjogador form content">
            <?= $this->Form->create($estatisticasjogador) ?>
            <fieldset>
                <legend><?= __('Add Estatisticasjogador') ?></legend>
                <?php
                    echo $this->Form->control('idJogador');
                    echo $this->Form->control('idPista');
                    echo $this->Form->control('idVeiculo');
                    echo $this->Form->control('melhorTempo');
                    echo $this->Form->control('pistasUsadas');
                    echo $this->Form->control('corridasGanhas');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
