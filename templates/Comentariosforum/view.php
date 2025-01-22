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
            <?= $this->Html->link(__('Edit Comentariosforum'), ['action' => 'edit', $comentariosforum->idComentario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comentariosforum'), ['action' => 'delete', $comentariosforum->idComentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentariosforum->idComentario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comentariosforum'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comentariosforum'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comentariosforum view content">
            <h3><?= h($comentariosforum->idComentario) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdComentario') ?></th>
                    <td><?= $this->Number->format($comentariosforum->idComentario) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdUser') ?></th>
                    <td><?= $comentariosforum->idUser === null ? '' : $this->Number->format($comentariosforum->idUser) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdTopico') ?></th>
                    <td><?= $comentariosforum->idTopico === null ? '' : $this->Number->format($comentariosforum->idTopico) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataComentario') ?></th>
                    <td><?= h($comentariosforum->dataComentario) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Conteudo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comentariosforum->conteudo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>