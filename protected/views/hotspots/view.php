<?php
$this->breadcrumbs=array(
	'Hotspots'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Hotspots', 'url'=>array('index')),
	array('label'=>'Create Hotspots', 'url'=>array('create')),
	array('label'=>'Update Hotspots', 'url'=>array('update', 'id'=>$model->HotspotId)),
	array('label'=>'Delete Hotspots', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HotspotId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hotspots', 'url'=>array('admin')),
);
?>

<h1>View Hotspots #<?php echo $model->HotspotId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HotspotId',
		'LocationId',
		'Name',
		'Alturl',
		'Keep',
		'Devices',
		'Visible',
		'Enabled',
		'Scale9grid',
		'Zorder',
		'Capture',
		'Children',
		'Preload',
		'Blendmode',
		'Edge',
		'Ox',
		'Oy',
		'Zoom',
		'Distorted',
		'Rx',
		'Ry',
		'Rz',
		'Inverserotation',
		'Flying',
		'Width',
		'Height',
		'Scale',
		'Altscale',
		'Rotate',
		'Smoothing',
		'Accuracy',
		'Alpha',
		'Usecontentsize',
		'Type',
		'Meta',
		'Url',
		'Ath',
		'Atv',
		'Onover',
		'Onout',
		'Onclick',
		'Crop',
		'Onovercrop',
		'Ondowncrop',
		'Scalechildren',
		'Mask',
		'Effect',
		'Onhover',
		'Ondown',
		'Onup',
		'Onloaded',
		'Altonloaded',
		'Handcursor',
		'Style',
		'Effects',
	),
)); ?>
