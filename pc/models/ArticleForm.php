<?php
namespace pc\models;

use yii\base\Model;
use Yii;

/**
 * Class ArticleForm
 * @package pc\models
 * 文章表单模型
 */
class ArticleForm extends Model {

    public $id;
    public $title; //标题
    public $content; //内容
    public $label_img; //标签图
    public $cat_id; // 分类id
    public $tags; //标签

    public $_lastError = "";

    public function rules(){
        return[
            [['id','title','content','cat_id'],'required'],
            [['id','cat_id'],'integer'],
            ['title','string','min'=>4 ,'max'=>50],
        ];
    }

    public function attributeLabels()
    {
        return[
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'cat_id'=>Yii::t('app','Cat_id'),
            'content' => Yii::t('app', 'Content'),
            'label_img' => Yii::t('app', 'Label_Img'),
            'tags' => Yii::t('app', 'Tags'),
        ];
    }

}