<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tipouser Model
 *
 * @method \App\Model\Entity\Tipouser newEmptyEntity()
 * @method \App\Model\Entity\Tipouser newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tipouser> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tipouser get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tipouser findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tipouser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tipouser> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tipouser|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tipouser saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tipouser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipouser>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipouser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipouser> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipouser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipouser>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tipouser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tipouser> deleteManyOrFail(iterable $entities, array $options = [])
 */
class TipouserTable extends Table
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

        $this->setTable('tipouser');
        $this->setDisplayField('idTipoUser');
        $this->setPrimaryKey('idTipoUser');
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
            ->maxLength('nome', 20)
            ->allowEmptyString('nome');

        return $validator;
    }
}
