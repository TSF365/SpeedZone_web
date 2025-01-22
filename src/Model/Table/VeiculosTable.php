<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veiculos Model
 *
 * @method \App\Model\Entity\Veiculo newEmptyEntity()
 * @method \App\Model\Entity\Veiculo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Veiculo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Veiculo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Veiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Veiculo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Veiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo> deleteManyOrFail(iterable $entities, array $options = [])
 */
class VeiculosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('veiculos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('idVeiculo');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->numeric('velocidadeMaxima')
            ->requirePresence('velocidadeMaxima', 'create')
            ->notEmptyString('velocidadeMaxima');

        $validator
            ->numeric('aceleracao')
            ->requirePresence('aceleracao', 'create')
            ->notEmptyString('aceleracao');

        $validator
            ->numeric('manobralidade')
            ->requirePresence('manobralidade', 'create')
            ->notEmptyString('manobralidade');

        $validator
            ->scalar('categoria')
            ->maxLength('categoria', 30)
            ->requirePresence('categoria', 'create')
            ->notEmptyString('categoria');

        return $validator;
    }
}
