<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Modificaco Entity
 *
 * @property int $idModificacao
 * @property int|null $idJogador
 * @property string|null $nomeModificacao
 * @property string $descricao
 * @property \Cake\I18n\DateTime|null $dataSubmissao
 * @property string|resource|null $ficheiros
 * @property bool|null $status
 */
class Modificaco extends Entity
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
        'nomeModificacao' => true,
        'descricao' => true,
        'dataSubmissao' => true,
        'ficheiros' => true,
        'status' => true,
    ];
}
