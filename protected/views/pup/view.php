<?php
/* @var $this PupController */
/* @var $model Puppy */

$this->breadcrumbs=array(
	'Puppies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Puppy', 'url'=>array('index')),
	array('label'=>'Create Puppy', 'url'=>array('create')),
	array('label'=>'Update Puppy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Puppy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Puppy', 'url'=>array('admin')),
);
?>

<h1>View Puppy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'age',
		'name',
		'breed',
		'status',
		'gender',
		'details',
		'image',
	),
)); ?>
<?php 
	echo CHtml::image(Yii::app()->request->baseUrl.'/'.$model->image, 'alt',  array('style' => 'width:600px;'));    	
?>