<?php

$this->title="文章创建";
$this->params['breadcrumbs'][] = ['label'=>'文章','url'=>['article/index']];  //页面的面包屑导航
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9">
        <div class="panel-title box-title">
            <span>创建文章</span>
        </div>
        <div class="panel-body">
            <?php $form = \yii\bootstrap\ActiveForm::begin()?>
            <?=$form->field($model,'title')->textInput(['maxlength'=>true])?>
            <?=$form->field($model,'cat_id')->dropDownList($cats)?>
            <?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[
                    //图片上传的一些配置，不写调用默认配置
                ]
            ]) ?>
            <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
                'options'=>[
                ]
            ]) ?>
            <?=$form->field($model,'tags')->widget('common\widgets\tags\TagWidget')?>
            <div class="form-group">
                <?=\yii\bootstrap\Html::submitButton("提交",['class'=>'btn btn-success'])?>
            </div>
            <?php \yii\bootstrap\ActiveForm::end()?>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="panel-title box-title">
            <span>注意事项</span>
        </div>
        <div class="panel-body">
            1.sada
            <br/>
            2.asdafsdf
            <br/>
        </div>
    </div>
</div>

