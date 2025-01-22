<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pistas Model
 *
 * @method \App\Model\Entity\Pista newEmptyEntity()
 * @method \App\Model\Entity\Pista newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Pista> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pista get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Pista findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Pista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Pista> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pista|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Pista saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Pista>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pista>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pista>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pista> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pista>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pista>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Pista>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Pista> deleteManyOrFail(iterable $entities, array $options = [])
 */
class PistasTable extends Table
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

        $this->setTable('pistas');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('idPista');
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
            ->numeric('distancia')
            ->requirePresence('distancia', 'create')
            ->notEmptyString('distancia');

        $validator
            ->integer('nivelDificuldade')
            ->requirePresence('nivelDificuldade', 'create')
            ->notEmptyString('nivelDificuldade');

        return $validator;
    }
}
