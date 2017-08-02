<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ebooks Model
 *
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\SubTopicsTable|\Cake\ORM\Association\BelongsTo $SubTopics
 *
 * @method \App\Model\Entity\Ebook get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ebook newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ebook[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ebook|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ebook patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ebook[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ebook findOrCreate($search, callable $callback = null, $options = [])
 */
class EbooksTable extends Table
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

        $this->setTable('ebooks');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Languages', [
            'foreignKey' => 'language_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('SubTopics', [
            'foreignKey' => 'sub_topic_id',
            'joinType' => 'INNER'
        ]);
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('book_title', 'create')
            ->notEmpty('book_title');

        $validator
            ->dateTime('uploaded_at')
            ->requirePresence('uploaded_at', 'create')
            ->notEmpty('uploaded_at');

        $validator
            ->requirePresence('file_name', 'create')
            ->notEmpty('file_name');

        $validator
            ->requirePresence('file_description', 'create')
            ->notEmpty('file_description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['language_id'], 'Languages'));
        $rules->add($rules->existsIn(['sub_topic_id'], 'SubTopics'));

        return $rules;
    }
}
