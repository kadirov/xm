<?php declare(strict_types=1);

namespace Ka\XmChart\Modules\Chart\Models\Dto;

class CompanyChart
{
    /**
     * @var string
     */
    private $date;

    /**
     * @var float
     */
    private $open;

    /**
     * @var float
     */
    private $high;

    /**
     * @var float
     */
    private $low;

    /**
     * @var float
     */
    private $close;

    /**
     * @var float
     */
    private $volume;

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return CompanyChart
     */
    public function setDate(string $date): CompanyChart
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpen(): float
    {
        return $this->open;
    }

    /**
     * @param float $open
     * @return CompanyChart
     */
    public function setOpen(float $open): CompanyChart
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return float
     */
    public function getHigh(): float
    {
        return $this->high;
    }

    /**
     * @param float $high
     * @return CompanyChart
     */
    public function setHigh(float $high): CompanyChart
    {
        $this->high = $high;
        return $this;
    }

    /**
     * @return float
     */
    public function getLow(): float
    {
        return $this->low;
    }

    /**
     * @param float $low
     * @return CompanyChart
     */
    public function setLow(float $low): CompanyChart
    {
        $this->low = $low;
        return $this;
    }

    /**
     * @return float
     */
    public function getClose(): float
    {
        return $this->close;
    }

    /**
     * @param float $close
     * @return CompanyChart
     */
    public function setClose(float $close): CompanyChart
    {
        $this->close = $close;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     * @return CompanyChart
     */
    public function setVolume(float $volume): CompanyChart
    {
        $this->volume = $volume;
        return $this;
    }
}
