<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>If you are looking to adopt a loving pet, look no further! We have a multitude of available animals looking to get adopting into warm homes.</p>
<p>In order to adopt a pet, you first must fill out an application!
<?php $this->widget('zii.widgets.jui.CJuiButton', array(
    'buttonType'=>'link',
    'name'=>'btnGo',
    'caption'=>'Get Started',
    'url'=>array('site/contact'),
)); ?></p>
<p><img src="images/image.jpg" title="dog" /></p>
