<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'datetime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'account_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'debit',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'credit',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'reference',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
