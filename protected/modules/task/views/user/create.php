<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	Yii::t('TaskModule.user','Users')=>array('index'),
	Yii::t('TaskModule.user','Creating'),
);

$this->menu=array(
	array('label'=>Yii::t('TaskModule.user','List User'), 'url'=>array('index')),
	array('label'=>Yii::t('TaskModule.user','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?=Yii::t('TaskModule.user','Creating User');?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>