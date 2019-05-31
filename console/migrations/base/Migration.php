<?php

namespace console\migrations\base;

use Yii;
use yii\db\Migration as MigrationBase;

/**
 * Class Migration
 * @package console\migrations\base
 * @see https://github.com/yiisoft/yii/issues/3148
 */
class Migration extends MigrationBase
{

    public function tableExists($tableName)
    {
        return in_array($tableName, Yii::$app->db->schema->tableNames);
    }

    public function createTable($table, $columns, $options = null)
    {
        if ($this->tableExists($table)) {
            echo "    > table '$table' already exists\n";
            $this->completeColumns($table, $columns);
        } else {
            parent::createTable($table, $columns, $options);
        }
    }

    public function completeColumns($table, $columns)
    {
        $schema = $this->getDb()->getTableSchema($table);
        /* @var $column string */
        foreach ($columns as $column => $type) {
            if (is_int($column)) {
                continue;
            }
            if (is_null($schema->getColumn($column))) {
                $this->addColumn($table, $column, $type);
                echo "        > column '$column' added\n";
            }
        }
    }

    public function enum($values = null, $notNull = true, $default = null)
    {
        $notNullValue = $notNull ? ' NOT NULL' : '';
        $defaultValue = $default ? " DEFAULT '{$default}'" : '';
        return "enum ('" . implode("', '", $values) . "'){$notNullValue}{$defaultValue}";
    }

    public function getDefaultTableOptions()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        return $tableOptions;
    }
}
