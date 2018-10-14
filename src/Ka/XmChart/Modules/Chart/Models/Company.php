<?php

namespace Ka\XmChart\Modules\Chart\Models;

use Ka\XmChart\Modules\Chart\Models\Query\CompanyQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $symbol
 * @property string $name
 */
class Company extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     * @return CompanyQuery the active query used by this AR class.
     */
    public static function find(): CompanyQuery
    {
        return new CompanyQuery(static::class);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSymbol(): string
    {
        return $this->symbol;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['symbol', 'name'], 'required'],
            [['symbol'], 'string', 'max' => 20],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'symbol' => 'Symbol',
            'name' => 'Name',
        ];
    }
}
