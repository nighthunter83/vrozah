<?php
/* @var $this DeliveryInfoController */
/* @var $model DeliveryInfo */

$this->breadcrumbs=array(
	'Delivery Infos'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeliveryInfo', 'url'=>array('index')),
	array('label'=>'Create DeliveryInfo', 'url'=>array('create')),
	array('label'=>'View DeliveryInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeliveryInfo', 'url'=>array('admin')),
);
?>

<h1>Update DeliveryInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>