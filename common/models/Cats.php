<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property integer $id
 * @property string $cat_name
 */
class Cats extends Base
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cat_name' => Yii::t('app', 'Cat Name'),
        ];
    }

    public static function getAllcats()
    {
        $cats = ['0'=>'暂无分类'];
        $res = self::find()->asArray()->all();
        if($res){
            foreach ($res as $k => $value ){
                $cats[$value['id']] = $value['cat_name'];
            }
        }
        return $cats;
    }
}
