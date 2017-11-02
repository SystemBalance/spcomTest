<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	Yii::t('TaskModule.user','Users')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('TaskModule.user','List User'), 'url'=>array('index')),
	array('label'=>Yii::t('TaskModule.user','Create User'), 'url'=>array('create')),
	array('label'=>Yii::t('TaskModule.user','Update User'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('TaskModule.user','Delete User'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('TaskModule.user','Are you sure you want to delete this item?'))),
	array('label'=>Yii::t('TaskModule.user','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?=Yii::t('TaskModule.user','View User')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
