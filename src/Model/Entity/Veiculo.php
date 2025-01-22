<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $idVeiculo
 * @property string $nome
 * @property float $velocidadeMaxima
 * @property float $aceleracao
 * @property float $manobralidade
 * @property string $categoria
 */
class Veiculo extends Entity
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
        'nome' => true,
        'velocidadeMaxima' => true,
        'aceleracao' => true,
        'manobralidade' => true,
        'categoria' => true,
    ];
}
