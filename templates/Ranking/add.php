<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ranking $ranking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ranking'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ranking form content">
            <?= $this->Form->create($ranking) ?>
            <fieldset>
                <legend><?= __('Add Ranking') ?></legend>
                <?php
                    echo $this->Form->control('idJogador');
                    echo $this->Form->control('pontuacaoTotal');
                    echo $this->Form->control('posicao');
                    echo $this->Form->control('dataAtualizacao', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
