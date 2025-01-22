<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ranking Model
 *
 * @method \App\Model\Entity\Ranking newEmptyEntity()
 * @method \App\Model\Entity\Ranking newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ranking> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ranking get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ranking findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ranking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ranking> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ranking|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ranking saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ranking>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ranking>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ranking>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ranking> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ranking>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ranking>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ranking>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ranking> deleteManyOrFail(iterable $entities, array $options = [])
 */
class RankingTable extends Table
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

        $this->setTable('ranking');
        $this->setDisplayField('idRanking');
        $this->setPrimaryKey('idRanking');
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
            ->integer('idJogador')
            ->allowEmptyString('idJogador');

        $validator
            ->integer('pontuacaoTotal')
            ->allowEmptyString('pontuacaoTotal');

        $validator
            ->integer('posicao')
            ->allowEmptyString('posicao');

        $validator
            ->dateTime('dataAtualizacao')
            ->allowEmptyDateTime('dataAtualizacao');

        return $validator;
    }
}
