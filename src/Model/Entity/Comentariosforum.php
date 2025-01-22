<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comentariosforum Entity
 *
 * @property int $idComentario
 * @property int|null $idUser
 * @property int|null $idTopico
 * @property string|null $conteudo
 * @property \Cake\I18n\Date|null $dataComentario
 */
class Comentariosforum extends Entity
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
        'idUser' => true,
        'idTopico' => true,
        'conteudo' => true,
        'dataComentario' => true,
    ];
}
