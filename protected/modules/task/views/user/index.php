<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('TaskModule.user','Users'),
);

$this->menu=array(
	array('label'=>Yii::t('TaskModule.user','Create User'), 'url'=>array('create')),
	array('label'=>Yii::t('TaskModule.user','Manage Users'), 'url'=>array('admin')),
);
?>

<h1><?=Yii::t('TaskModule.user','Users');?></h1>

<div>
	<?php echo CHtml::link('APIGetList', array('APIGetList')); ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
