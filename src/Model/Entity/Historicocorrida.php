<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Historicocorrida Entity
 *
 * @property int $idCorrida
 * @property int|null $idJogador
 * @property int|null $idPista
 * @property int|null $idVeiculo
 * @property float|null $tempoFinal
 * @property \Cake\I18n\DateTime|null $dataCorrida
 * @property int|null $pontuacaocorrida
 */
class Historicocorrida extends Entity
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
        'tempoFinal' => true,
        'dataCorrida' => true,
        'pontuacaocorrida' => true,
    ];
}
