<?php declare(strict_types=1);

namespace Ka\XmChart\Modules\Chart\Models\Dto;

use Ka\XmChart\Modules\Chart\Models\Company;

class CompanyData
{
    /**
     * @var
     */
    private $data = [];

    /**
     * @var Company
     */
    private $company;

    /**
     * CompanyData constructor.
     * @param Company $company
     */
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    /**
     * @param CompanyChart $chart
     */
    public function add(CompanyChart $chart): void
    {
        $this->data[] = $chart;
    }

    /**
     * @return CompanyChart[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }
}
