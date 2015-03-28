<?php
/* @var $this PostsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Posts',
);

$this->menu = array(
    array('label' => 'Create Posts', 'url' => array('create')),
    array('label' => 'Manage Posts', 'url' => array('admin')),
);
?>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'summaryText'=>''
));
?>
