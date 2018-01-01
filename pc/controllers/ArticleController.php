<?php
namespace pc\controllers;

/**
 * 文章控制器
 */
use common\models\Cats;
use pc\models\ArticleForm;
use Yii;
use yii\base\Controller;

class ArticleController extends BaseController
{
    //文件上传扩展
    public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ],
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }

    /**
     * @return string 文章列表页
     */
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionCreate(){
        $model = new ArticleForm();
        $cats = Cats::getAllcats();
        return $this->render('create',['model'=>$model,'cats'=>$cats]);
    }


}