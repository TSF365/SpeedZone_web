<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ranking Entity
 *
 * @property int $idRanking
 * @property int|null $idJogador
 * @property int|null $pontuacaoTotal
 * @property int|null $posicao
 * @property \Cake\I18n\DateTime|null $dataAtualizacao
 */
class Ranking extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'idJogador' => true,
        'pontuacaoTotal' => true,
        'posicao' => true,
        'dataAtualizacao' => true,
    ];
}
