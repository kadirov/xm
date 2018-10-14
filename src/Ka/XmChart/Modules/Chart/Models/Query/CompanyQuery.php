<?php

namespace Ka\XmChart\Modules\Chart\Models\Query;

use Ka\XmChart\Modules\Chart\Models\Company;

/**
 * This is the ActiveQuery class for [[\Ka\XmChart\Modules\Chart\Models\Company]].
 *
 * @see \Ka\XmChart\Modules\Chart\Models\Company
 */
class CompanyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Company[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Company|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /**
     * @param string $symbol
     * @return Company|null
     */
    public function bySymbol(string $symbol): ?Company
    {
        return $this->where(['symbol' => $symbol])->one();
    }
}
