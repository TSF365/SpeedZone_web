<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comentariosforum $comentariosforum
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comentariosforum'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comentariosforum form content">
            <?= $this->Form->create($comentariosforum) ?>
            <fieldset>
                <legend><?= __('Add Comentariosforum') ?></legend>
                <?php
                    echo $this->Form->control('idUser');
                    echo $this->Form->control('idTopico');
                    echo $this->Form->control('conteudo');
                    echo $this->Form->control('dataComentario', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
