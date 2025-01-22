<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Amizades Model
 *
 * @method \App\Model\Entity\Amizade newEmptyEntity()
 * @method \App\Model\Entity\Amizade newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Amizade> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Amizade get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Amizade findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Amizade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Amizade> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Amizade|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Amizade saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Amizade>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Amizade>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Amizade>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Amizade> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Amizade>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Amizade>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Amizade>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Amizade> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AmizadesTable extends Table
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

        $this->setTable('amizades');
        $this->setDisplayField(['idJogador1', 'idJogador2']);
        $this->setPrimaryKey(['idJogador1', 'idJogador2']);
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
            ->date('dataAmizade')
            ->allowEmptyDate('dataAmizade');

        return $validator;
    }
}
