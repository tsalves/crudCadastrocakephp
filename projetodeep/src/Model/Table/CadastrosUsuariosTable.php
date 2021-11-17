<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CadastrosUsuarios Model
 *
 * @method \App\Model\Entity\CadastrosUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\CadastrosUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CadastrosUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadastrosUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CadastrosUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CadastrosUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class CadastrosUsuariosTable extends Table
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

        $this->setTable('cadastros_usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_usuario')
            ->maxLength('nome_usuario', 255)
            ->requirePresence('nome_usuario', 'create')
            ->notEmptyString('nome_usuario');

        $validator
            ->scalar('email_usuario')
            ->maxLength('email_usuario', 220)
            ->requirePresence('email_usuario', 'create')
            ->notEmptyString('email_usuario');

        $validator
            ->scalar('area_usuario')
            ->maxLength('area_usuario', 220)
            ->requirePresence('area_usuario', 'create')
            ->notEmptyString('area_usuario');

        $validator
            ->scalar('senha_usuario')
            ->maxLength('senha_usuario', 50)
            ->requirePresence('senha_usuario', 'create')
            ->notEmptyString('senha_usuario');

        return $validator;
    }
}
