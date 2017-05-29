<?php

namespace dcwq\extracms\models;

use Yii;

/**
 * This is the model class for table "cms_fields".
 *
 * @property integer $id
 * @property string $type
 * @property integer $cms_id
 * @property string $name
 * @property string $label
 * @property string $content
 *
 * @property Cms $cms
 */
class CmsFields extends \yii\db\ActiveRecord
{
    public $required;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_fields';
    }

    public function behaviors()
    {
        return [

        ];

    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $requiredFields = [['type', 'cms_id', 'name', 'label'], 'required'];

        if ($this->required) {

            if ('image' == $this->type) {
                $requiredFields = [['type', 'cms_id', 'name', 'label'], 'required'];
            } else {
                $requiredFields = [['type', 'cms_id', 'name', 'label', 'content'], 'required'];
            }
        }

        return [
            $requiredFields,
            [['cms_id'], 'integer'],
            [['content', 'type', 'name', 'label'], 'string'],
            [['cms_id'], 'exist', 'skipOnError' => true, 'targetClass' => $this->module->modelMap['CmsModel']::className(), 'targetAttribute' => ['cms_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'cms_id' => 'Cms ID',
            'name' => 'Name',
            'label' => 'Label',
            'content' => 'Content',
        ];
    }

    public static function createNewObjects($type)
    {
        $customFieldsConfigFile = __DIR__ . '/../config/custom-fields.php';

        if (file_exists($customFieldsConfigFile))
        {
            $fields = include $customFieldsConfigFile;

            if (is_array($fields)) {

                $config = array();

                $definitions = isset($fields[$type]) ? $fields[$type] : [];

                foreach ($definitions as $fields)
                {
                    $config[] = self::createNewObject($fields);
                }

                return $config;
            }
        }

        return array();
    }

    public static function createNewObject($params)
    {
        $field = new CmsFields();

        foreach ($params as $index => $value)
        {
            $field->$index = $value;
        }

        return $field;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCms()
    {
        return $this->hasOne(CmsModel::className(), ['id' => 'cms_id']);
    }
}
