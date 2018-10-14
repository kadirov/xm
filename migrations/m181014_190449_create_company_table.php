<?php

use yii\db\Migration;

/**
 * Handles the creation of table `companySymbols`.
 */
class m181014_190449_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'symbol' => $this->string(20)->notNull(),
            'name' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('company');
    }
}
