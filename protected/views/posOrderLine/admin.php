<?php
/* @var $this PosOrderLineController */
/* @var $model PosOrderLine */

$this->breadcrumbs=array(
	'Pos Order Lines'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PosOrderLine', 'url'=>array('index')),
	array('label'=>'Create PosOrderLine', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pos-order-line-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pos Order Lines</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pos-order-line-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'create_uid',
		'create_date',
		'write_date',
		'write_uid',
		'notice',
		/*
		'product_id',
		'order_id',
		'price_unit',
		'price_subtotal',
		'company_id',
		'price_subtotal_incl',
		'qty',
		'discount',
		'name',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
