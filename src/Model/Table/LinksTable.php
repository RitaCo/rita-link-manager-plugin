<?php
namespace Rita\Links\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Rita\Core\ORM\Table;
use Rita\Links\Model\Entity\Link;


/**
 * LinksLinks Model
 */
class LinksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('links_links');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', [
            'Categories' => ['link_count']
        ]);
     
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'Rita/Links.Categories'
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
            ->add('category_id', 'valid', ['rule' => 'numeric'])
            ->notEmpty('category_id','موضوع را انتخاب نمایید')
            ->requirePresence('title', true)
            ->notEmpty('title','گزینه را کامل نمایید.')
            ->add('url',[
                'valid' => [
                    'rule' => ['url',true],
                    'message' => 'آدرس وب صحیحی نیست (فرمت صحیح : http://domain.ir)'   
                ]
            ])
            ->add('hits', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('hits');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }
 
}
