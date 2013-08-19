<?php
/* @var $this DeliveryInfoController */
/* @var $model DeliveryInfo */

$this->breadcrumbs=array(
	'Delivery Infos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DeliveryInfo', 'url'=>array('index')),
	array('label'=>'Create DeliveryInfo', 'url'=>array('create')),
	array('label'=>'Update DeliveryInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeliveryInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeliveryInfo', 'url'=>array('admin')),
);
?>

<h1>View DeliveryInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'phone',
		'address_type',
		'street',
		'house',
		'body',
		'structure',
		'porch',
		'floor',
		'subway',
		'company_name',
		'additional_info',
	),
)); ?>
