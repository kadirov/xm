<?php

use yii\db\Migration;

/**
 * Class m181014_190604_insert_companySymbols_data
 */
class m181014_190604_insert_company_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $csv = array_map('str_getcsv', file(Yii::getAlias('@app/resource/company_list.csv')));

        foreach ($csv as $key => $item) {
            if ($key === 0) {
                continue;
            }

            if (!isset($item[0], $item[1])) {
                continue;
            }

            $this->insert('company', [
                'symbol' => $item[0],
                'name' => $item[1],
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('company');
    }
}
