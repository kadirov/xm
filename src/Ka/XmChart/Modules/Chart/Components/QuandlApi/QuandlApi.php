<?php declare(strict_types=1);

namespace Ka\XmChart\Modules\Chart\Components\QuandlApi;

use linslin\yii2\curl\Curl;

class QuandlApi
{
    private const API_URL = 'https://www.quandl.com/api/v3/datasets/WIKI/{company}.csv';
//    private const URL = 'https://www.quandl.com/api/v3/datasets/WIKI/GOOG.csv?start_date=2017-10-01&end_date=2018-11-01'

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * QuandlApi constructor.
     * @param string $company
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(string $company, string $startDate, string $endDate)
    {
        $this->company = $company;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        $curl = new Curl();
        $curl->setGetParams([
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        $response = $curl->get(str_replace('{company}', $this->company, self::API_URL));

        $result = [];

        foreach (explode(PHP_EOL, $response) as $csvLine) {
            $result[] = str_getcsv($csvLine);
        }

        return $result;
    }

}
