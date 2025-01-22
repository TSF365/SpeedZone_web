<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Historicocorridas Model
 *
 * @method \App\Model\Entity\Historicocorrida newEmptyEntity()
 * @method \App\Model\Entity\Historicocorrida newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Historicocorrida> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historicocorrida get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Historicocorrida findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Historicocorrida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Historicocorrida> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historicocorrida|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Historicocorrida saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Historicocorrida>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historicocorrida>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historicocorrida>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historicocorrida> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historicocorrida>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historicocorrida>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Historicocorrida>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Historicocorrida> deleteManyOrFail(iterable $entities, array $options = [])
 */
class HistoricocorridasTable extends Table
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

        $this->setTable('historicocorridas');
        $this->setDisplayField('idCorrida');
        $this->setPrimaryKey('idCorrida');
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
            ->numeric('tempoFinal')
            ->allowEmptyString('tempoFinal');

        $validator
            ->dateTime('dataCorrida')
            ->allowEmptyDateTime('dataCorrida');

        $validator
            ->integer('pontuacaocorrida')
            ->allowEmptyString('pontuacaocorrida');

        return $validator;
    }
}
