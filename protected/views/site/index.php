<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php
$this->beginWidget(
    'booster.widgets.TbJumbotron',

    array(
        'heading' => "Welcome to Jake's Local Animal Shelter!"
    )
); ?>
    <p>If you are looking to adopt a loving pet, look no further! We have a multitude of available animals looking to get adopting into warm homes.</p>
	<p>In order to adopt a pet, you first must fill out an application!
	<?php $this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnGo',
    'caption'=>'Get Started',
    'url'=>array('site/contact'),
	)); ?></p>

<?php $this->endWidget(); ?>
<?php
$this->beginWidget('booster.widgets.TbCarousel', array(
	'items' => array(
		array('image' => 'images/dog1.jpg', 'label' => '', 'caption' => 'Missy', 'active' => true),
		array('image' => 'images/dog2.jpg', 'label' => '', 'caption' => 'Bud'),
		array('image' => 'images/dog3.jpg', 'label' => '', 'caption' => 'Bob'),
		array('image' => 'images/dog4.jpg', 'label' => '', 'caption' => 'Stella'),
	),
	//'interval' => 6000,
	//'infinite' => false,
	'htmlOptions' => array(),
));

?>

<?php $this->endWidget(); ?>