<?php
/* @var $this PupController */
/* @var $model Puppy */

$this->breadcrumbs=array(
	'Puppies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Puppy', 'url'=>array('index')),
	array('label'=>'Create Puppy', 'url'=>array('create')),
	array('label'=>'View Puppy', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Puppy', 'url'=>array('admin')),
);
?>

<h1>Update Puppy <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>