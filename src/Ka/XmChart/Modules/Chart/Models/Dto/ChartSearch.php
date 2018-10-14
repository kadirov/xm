<?php

namespace Ka\XmChart\Modules\Chart\Models\Dto;

use Ka\XmChart\Modules\Chart\Models\Company;
use yii\base\Model;

/**
 * This is the model class for table "chart".
 */
class ChartSearch extends Model
{
    /**
     * @var string
     */
    private $companySymbol = '';

    /**
     * @var string
     */
    private $startDate;

    /**
     * @var string
     */
    private $endDate;

    /**
     * @var string
     */
    private $email = '';

    /**
     * ChartSearch constructor.
     */
    public function __construct()
    {
        $this->startDate = date('Y-m-d', strtotime('-1 year'));
        $this->endDate = date('Y-m-d');

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['companySymbol', 'startDate', 'endDate', 'email'], 'required'],
            [['startDate', 'endDate'], 'safe'],
            [['companySymbol'], 'string', 'max' => 10],
            [['email'], 'string', 'max' => 255],
            [['email'], 'email'],
            [
                'companySymbol',
                function (string $attribute) {
                    if (Company::find()->bySymbol($this->$attribute) === null) {
                        $this->addError($attribute, 'Company is not found');
                    }
                }
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'companySymbol' => 'Company Symbol',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'email' => 'Email',
        ];
    }

    /**
     * @return string
     */
    public function getCompanySymbol(): string
    {
        return $this->companySymbol;
    }

    /**
     * @param string $companySymbol
     */
    public function setCompanySymbol(string $companySymbol): void
    {
        $this->companySymbol = $companySymbol;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}
