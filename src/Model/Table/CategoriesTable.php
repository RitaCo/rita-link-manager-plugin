<?php
namespace Rita\Links\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Rita\Core\ORM\Table;
use Rita\Links\Model\Entity\Category;

/**
 * LinksCategories Model
 */
class CategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('links_categories');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Links', [
            'foreignKey' => 'category_id',
            'className' => 'Rita/Links.Links'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->requirePresence('note', 'create')
            ->notEmpty('note')
            ->requirePresence('slug', 'create')
            ->notEmpty('slug');

        return $validator;
    }
}
