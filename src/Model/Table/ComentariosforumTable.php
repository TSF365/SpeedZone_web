<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comentariosforum Model
 *
 * @method \App\Model\Entity\Comentariosforum newEmptyEntity()
 * @method \App\Model\Entity\Comentariosforum newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Comentariosforum> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comentariosforum get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Comentariosforum findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Comentariosforum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Comentariosforum> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comentariosforum|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Comentariosforum saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Comentariosforum>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comentariosforum>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comentariosforum>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comentariosforum> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comentariosforum>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comentariosforum>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Comentariosforum>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Comentariosforum> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ComentariosforumTable extends Table
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

        $this->setTable('comentariosforum');
        $this->setDisplayField('idComentario');
        $this->setPrimaryKey('idComentario');
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
            ->integer('idUser')
            ->allowEmptyString('idUser');

        $validator
            ->integer('idTopico')
            ->allowEmptyString('idTopico');

        $validator
            ->scalar('conteudo')
            ->allowEmptyString('conteudo');

        $validator
            ->date('dataComentario')
            ->allowEmptyDate('dataComentario');

        return $validator;
    }
}
