<?php

/* @var $this yii\web\View */
/* @var $companyData \Ka\XmChart\Modules\Chart\Models\Dto\CompanyData */
?>

<style>
    table {
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
<div class="index">
    <h1><?= $companyData->getCompany()->name ?></h1>

    <table class="table table-striped">
        <tr>
            <th class="bg-primary">Date</th>
            <th class="bg-primary">Open</th>
            <th class="bg-primary">High</th>
            <th class="bg-primary">Low</th>
            <th class="bg-primary">Close</th>
            <th class="bg-primary">Volume</th>
        </tr>
    <?php foreach ($companyData->getData() as $companyChart): ?>
        <tr>
            <td><?= $companyChart->getDate() ?></td>
            <td><?= $companyChart->getOpen() ?></td>
            <td><?= $companyChart->getHigh() ?></td>
            <td><?= $companyChart->getLow() ?></td>
            <td><?= $companyChart->getClose() ?></td>
            <td><?= $companyChart->getVolume() ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
