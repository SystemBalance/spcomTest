<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	Yii::t('TaskModule.user','Users')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('TaskModule.user','Update')
);

$this->menu=array(
	array('label'=>Yii::t('TaskModule.user','List User'), 'url'=>array('index')),
	array('label'=>Yii::t('TaskModule.user','Create User'), 'url'=>array('create')),
	array('label'=>Yii::t('TaskModule.user','View User'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>Yii::t('TaskModule.user','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?=Yii::t('TaskModule.user','Updating User');?> <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>