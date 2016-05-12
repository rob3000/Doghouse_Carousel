<?php

$installer = $this;
$installer->startSetup();

$installer->getConnection()->modifyColumn(
    $installer->getTable('dhcarousel/item'),
    'group_id',
    array(
        'TYPE'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'UNSIGNED'  => true,
        'NULLABLE'  => true,
        'COMMENT'   => 'Group ID',
        'AFTER'     => 'product_id'
    )
);

$installer->endSetup();
