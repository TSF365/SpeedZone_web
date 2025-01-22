<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modificaco $modificaco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Modificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="modificacoes form content">
            <?= $this->Form->create($modificaco) ?>
            <fieldset>
                <legend><?= __('Add Modificaco') ?></legend>
                <?php
                    echo $this->Form->control('idJogador');
                    echo $this->Form->control('nomeModificacao');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('dataSubmissao', ['empty' => true]);
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
