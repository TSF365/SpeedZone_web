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
            <?= $this->Html->link(__('Edit Ranking'), ['action' => 'edit', $ranking->idRanking], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ranking'), ['action' => 'delete', $ranking->idRanking], ['confirm' => __('Are you sure you want to delete # {0}?', $ranking->idRanking), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ranking'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ranking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ranking view content">
            <h3><?= h($ranking->idRanking) ?></h3>
            <table>
                <tr>
                    <th><?= __('IdRanking') ?></th>
                    <td><?= $this->Number->format($ranking->idRanking) ?></td>
                </tr>
                <tr>
                    <th><?= __('IdJogador') ?></th>
                    <td><?= $ranking->idJogador === null ? '' : $this->Number->format($ranking->idJogador) ?></td>
                </tr>
                <tr>
                    <th><?= __('PontuacaoTotal') ?></th>
                    <td><?= $ranking->pontuacaoTotal === null ? '' : $this->Number->format($ranking->pontuacaoTotal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Posicao') ?></th>
                    <td><?= $ranking->posicao === null ? '' : $this->Number->format($ranking->posicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataAtualizacao') ?></th>
                    <td><?= h($ranking->dataAtualizacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>