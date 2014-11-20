<?php
/* @var $this PupController */

$this->breadcrumbs=array(
	'Pup',
);

$this->menu=array(
	array('label'=>'Create Puppy', 'url'=>array('create')),
	array('label'=>'Manage Puppy', 'url'=>array('admin')),
);
?>

<h1>Pets for adoption!</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
