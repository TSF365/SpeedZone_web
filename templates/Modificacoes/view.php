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
            <?= $this->Html->link(__('Edit Modificaco'), ['action' => 'edit', $modificaco->idModificacao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Modificaco'), ['action' => 'delete', $modificaco->idModificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $modificaco->idModificacao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Modificacoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Modificaco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="modificacoes view content">
            <h3><?= h($modificaco->idModificacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('NomeModificacao') ?></th>
                    <td><?= h($modificaco->nomeModificacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdModificacao') ?></th>
                    <td><?= $this->Number->format($modificaco->idModificacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJogador') ?></th>
                    <td><?= $modificaco->idJogador === null ? '' : $this->Number->format($modificaco->idJogador) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataSubmissao') ?></th>
                    <td><?= h($modificaco->dataSubmissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $modificaco->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($modificaco->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>