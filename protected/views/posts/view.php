<?php
/* @var $this PostsController */
/* @var $model Posts */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List Posts', 'url' => array('index')),
    array('label' => 'Create Posts', 'url' => array('create')),
    array('label' => 'Update Posts', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Posts', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Posts', 'url' => array('admin')),
);
?>
<?php
$this->renderPartial('_view',array('data'=>$model));
?>
