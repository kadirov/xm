<?php declare(strict_types=1);

namespace Ka\XmChart\Modules\Chart\Components;

use Ka\XmChart\Modules\Chart\Models\Company;
use Ka\XmChart\Modules\Chart\Models\Dto\CompanyChart;
use Ka\XmChart\Modules\Chart\Models\Dto\CompanyData;

class CompanyDataFactory
{
    /**
     * @param Company $companyName
     * @param array $data
     * @return \Ka\XmChart\Modules\Chart\Models\Dto\CompanyData
     */
    public static function createFromArray(Company $companyName, array $data): CompanyData
    {
        $companyData = new CompanyData($companyName);

        foreach ($data as $key => $item) {
            if ($key === 0) {
                continue;
            }

            if (!isset($item[0], $item[1], $item[2], $item[3], $item[4], $item[5])) {
                continue;
            }

            $chart = new CompanyChart();
            $chart->setDate($item[0]);
            $chart->setOpen((float)$item[1]);
            $chart->setHigh((float)$item[2]);
            $chart->setLow((float)$item[3]);
            $chart->setClose((float)$item[4]);
            $chart->setVolume((float)$item[5]);

            $companyData ->add($chart);
        }

        return $companyData;
    }
}
