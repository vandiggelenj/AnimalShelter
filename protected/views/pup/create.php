<?php
/* @var $this PupController */
/* @var $model Puppy */

$this->breadcrumbs=array(
	'Puppies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puppy', 'url'=>array('index')),
	array('label'=>'Manage Puppy', 'url'=>array('admin')),
);
?>

<h1>Create Puppy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>