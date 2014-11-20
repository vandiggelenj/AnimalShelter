<?php
/* @var $this GameStartController */

$this->breadcrumbs=array(
    'Game Start',
);
?>
<?php $this->beginWidget(
    'booster.widgets.TbJumbotron',

    array(
        'heading' => 'Welcome!'
    )
); ?>
    <p>Start a new Risk game now!</p>

<?php
echo CHtml::ajaxButton('Create Game', $this->createUrl('ui/create'),array(
    'type'=>'POST',
    'success'=>'function(data){
            $("#modal").html(data);
        }',
),array('id'=>'CreateBtn', 'class'=>'btn btn-primary'));
?>

    <div id="modal"></div>

    <p>Join an open game!</p>

<?php
echo CHtml::ajaxButton('Join Game', $this->createUrl('ui/join'),array(
    'type'=>'POST',
    'success'=>'function(data){
            $("#modal").html(data);
        }',
),array('id'=>'JoinBtn', 'class'=>'btn btn-primary'));
?>

<?php $this->endWidget(); ?>