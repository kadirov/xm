<?php

namespace Ka\XmChart\Modules\Chart\Controllers;

use Ka\XmChart\Modules\Chart\Components\CompanyDataFactory;
use Ka\XmChart\Modules\Chart\Components\QuandlApi\QuandlApi;
use Ka\XmChart\Modules\Chart\Models\Company;
use Ka\XmChart\Modules\Chart\Models\Dto\ChartSearch;
use Ka\XmChart\Modules\Mail\Component\Mail;
use yii\web\Controller;

/**
 * Default controller for the `chart` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex(): string
    {
        $search = new ChartSearch();

        if ($search->load(\Yii::$app->request->post()) && $search->validate()) {
            $company = Company::find()->bySymbol($search->getCompanySymbol());
            $api = new QuandlApi($search->getCompanySymbol(), $search->getStartDate(), $search->getEndDate());
            $companyData = CompanyDataFactory::createFromArray($company, $api->getResult());

            $html = $this->renderPartial('list', [
                'companyData' => $companyData,
            ]);

            Mail::send($search->getEmail(), $html);

            return $this->renderContent($html);
        }

        return $this->render('index', [
            'model' => $search,
        ]);
    }
}
