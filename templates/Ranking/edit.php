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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ranking->idRanking],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ranking->idRanking), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ranking'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ranking form content">
            <?= $this->Form->create($ranking) ?>
            <fieldset>
                <legend><?= __('Edit Ranking') ?></legend>
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
