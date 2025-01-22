<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Modificacoes Model
 *
 * @method \App\Model\Entity\Modificaco newEmptyEntity()
 * @method \App\Model\Entity\Modificaco newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Modificaco> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Modificaco get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Modificaco findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Modificaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Modificaco> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Modificaco|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Modificaco saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Modificaco>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modificaco>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modificaco>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modificaco> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modificaco>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modificaco>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Modificaco>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Modificaco> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ModificacoesTable extends Table
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

        $this->setTable('modificacoes');
        $this->setDisplayField('idModificacao');
        $this->setPrimaryKey('idModificacao');
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
            ->scalar('nomeModificacao')
            ->maxLength('nomeModificacao', 50)
            ->allowEmptyString('nomeModificacao');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->dateTime('dataSubmissao')
            ->allowEmptyDateTime('dataSubmissao');

        $validator
            ->allowEmptyString('ficheiros');

        $validator
            ->boolean('status')
            ->allowEmptyString('status');

        return $validator;
    }
}
