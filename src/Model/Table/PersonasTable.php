<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personas Model
 *
 * @method \App\Model\Entity\Persona get($primaryKey, $options = [])
 * @method \App\Model\Entity\Persona newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Persona[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Persona|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Persona patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Persona[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Persona findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('personas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('Nombres')
            ->maxLength('Nombres', 45)
            ->requirePresence('Nombres', 'create')
            ->notEmpty('Nombres');

        $validator
            ->scalar('Apellidos')
            ->maxLength('Apellidos', 45)
            ->requirePresence('Apellidos', 'create')
            ->notEmpty('Apellidos');

        $validator
            ->scalar('FechaNac')
            ->maxLength('FechaNac', 45)
            ->requirePresence('FechaNac', 'create')
            ->notEmpty('FechaNac');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 45)
            ->requirePresence('Email', 'create')
            ->notEmpty('Email')
            ->add('Email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('Telefonos')
            ->maxLength('Telefonos', 45)
            ->requirePresence('Telefonos', 'create')
            ->notEmpty('Telefonos');

        $validator
            ->scalar('Direccion')
            ->maxLength('Direccion', 45)
            ->requirePresence('Direccion', 'create')
            ->notEmpty('Direccion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['Email']));

        return $rules;
    }
}
