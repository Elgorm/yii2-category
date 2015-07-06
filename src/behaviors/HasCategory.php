<?php

namespace nullref\category\behaviors;

use nullref\category\models\Category;
use nullref\core\behaviors\HasOneRelation;
use yii\db\ActiveRecord;

/**
 * Behavior which provide connection with category
 * @author    Dmytro Karpovych
 *
 * @package nullref\category\behaviors
 *
 * @property ActiveRecord $owner
 * @property Category $category
 */
class HasCategory extends HasOneRelation
{

    public $entityModuleId = 'category';
    public $entityManagerName = 'categoryManager';
    public $keyName = 'categoryId';
    public $fieldName = 'categoryId';

    public function getKeyName()
    {
        return $this->keyName;
    }

    public function getFieldName()
    {
        return $this->fieldName;
    }

}