<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CadastrosUsuario Entity
 *
 * @property int $id
 * @property string $nome_usuario
 * @property string $email_usuario
 * @property string $area_usuario
 * @property string $senha_usuario
 */
class CadastrosUsuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_usuario' => true,
        'email_usuario' => true,
        'area_usuario' => true,
        'senha_usuario' => true,
    ];
}
