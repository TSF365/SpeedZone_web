<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comentariosforum> $comentariosforum
 */
?>
<div class="comentariosforum index content">
    <?= $this->Html->link(__('New Comentariosforum'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comentariosforum') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idComentario') ?></th>
                    <th><?= $this->Paginator->sort('idUser') ?></th>
                    <th><?= $this->Paginator->sort('idTopico') ?></th>
                    <th><?= $this->Paginator->sort('dataComentario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comentariosforum as $comentariosforum): ?>
                <tr>
                    <td><?= $this->Number->format($comentariosforum->idComentario) ?></td>
                    <td><?= $comentariosforum->idUser === null ? '' : $this->Number->format($comentariosforum->idUser) ?></td>
                    <td><?= $comentariosforum->idTopico === null ? '' : $this->Number->format($comentariosforum->idTopico) ?></td>
                    <td><?= h($comentariosforum->dataComentario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comentariosforum->idComentario]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comentariosforum->idComentario]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comentariosforum->idComentario], ['confirm' => __('Are you sure you want to delete # {0}?', $comentariosforum->idComentario)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>