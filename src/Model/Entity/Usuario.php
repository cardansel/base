<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $usuario
 * @property string $password
 * @property string $estado
 * @property int $Personas_id
 * @property int $Perfiles_id
 * @property \Cake\I18n\FrozenTime $create
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\Perfile $perfile
 */
class Usuario extends Entity
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
        'usuario' => true,
        'password' => true,
        'estado' => true,
        'Personas_id' => true,
        'Perfiles_id' => true,
        'create' => true,
        'modified' => true,
        'persona' => true,
        'perfile' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
