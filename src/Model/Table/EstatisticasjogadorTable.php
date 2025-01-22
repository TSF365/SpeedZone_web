<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estatisticasjogador Model
 *
 * @method \App\Model\Entity\Estatisticasjogador newEmptyEntity()
 * @method \App\Model\Entity\Estatisticasjogador newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Estatisticasjogador> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estatisticasjogador get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Estatisticasjogador findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Estatisticasjogador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Estatisticasjogador> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estatisticasjogador|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Estatisticasjogador saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Estatisticasjogador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estatisticasjogador>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estatisticasjogador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estatisticasjogador> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estatisticasjogador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estatisticasjogador>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Estatisticasjogador>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Estatisticasjogador> deleteManyOrFail(iterable $entities, array $options = [])
 */
class EstatisticasjogadorTable extends Table
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

        $this->setTable('estatisticasjogador');
        $this->setDisplayField('idEstatistica');
        $this->setPrimaryKey('idEstatistica');
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
            ->integer('idPista')
            ->allowEmptyString('idPista');

        $validator
            ->integer('idVeiculo')
            ->allowEmptyString('idVeiculo');

        $validator
            ->numeric('melhorTempo')
            ->allowEmptyString('melhorTempo');

        $validator
            ->integer('pistasUsadas')
            ->allowEmptyString('pistasUsadas');

        $validator
            ->integer('corridasGanhas')
            ->allowEmptyString('corridasGanhas');

        return $validator;
    }
}
