<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estatisticasjogador Entity
 *
 * @property int $idEstatistica
 * @property int|null $idJogador
 * @property int|null $idPista
 * @property int|null $idVeiculo
 * @property float|null $melhorTempo
 * @property int|null $pistasUsadas
 * @property int|null $corridasGanhas
 */
class Estatisticasjogador extends Entity
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
        'idPista' => true,
        'idVeiculo' => true,
        'melhorTempo' => true,
        'pistasUsadas' => true,
        'corridasGanhas' => true,
    ];
}
