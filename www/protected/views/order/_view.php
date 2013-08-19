<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_add')); ?>:</b>
	<?php echo CHtml::encode($data->date_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_info')); ?>:</b>
	<?php echo CHtml::encode($data->user_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_info')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_items')); ?>:</b>
	<?php echo CHtml::encode($data->order_items); ?>
	<br />


</div>