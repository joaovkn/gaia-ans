<?php

namespace app\controllers;

use Yii;
use app\models\IdService;
use app\models\IdServiceSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mPDF;

/**
 * IdServiceController implements the CRUD actions for IdService model.
 */
class IdServiceController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionReport() {
        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('_reportView');
        
        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_CORE, 
            // A4 paper format
            'format' => Pdf::FORMAT_A4, 
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT, 
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER, 
            // your html content input
            'content' => $content,  
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting 
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required
            'cssInline' => '.kv-heading-1{font-size:18px}', 
             // set mPDF properties on the fly
            'options' => ['title' => 'Krajee Report Title'],
             // call mPDF methods on the fly
            'methods' => [ 
                'SetHeader'=>['Krajee Report Header'], 
                'SetFooter'=>['{PAGENO}'],
            ]
        ]);
        
        // return the pdf output as per the destination setting
        return $pdf->render(); 
    }

    /**
     * Lists all IdService models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IdServiceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //$newvar->abrangency = strip_tags($newvar->abrangency);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IdService model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionView($id)
    {
        $newvar = $this->findModel($id);
        $newvar->service_title = strip_tags($newvar->service_title);
        $newvar->abrangency = strip_tags($newvar->abrangency);
        $newvar->business_area = strip_tags($newvar->business_area);
        $newvar->atended_client = strip_tags($newvar->atended_client);
        $newvar->version = strip_tags($newvar->version);
        $newvar->repository = strip_tags($newvar->repository);
        $newvar->pubalvo = strip_tags($newvar->pubalvo);
        $newvar->finalidade = strip_tags($newvar->finalidade);
        $newvar->description = strip_tags($newvar->description);
        $newvar->objective = strip_tags($newvar->objective);
        $newvar->responsability = strip_tags($newvar->responsability);
        $newvar->disponibility_hour = strip_tags($newvar->disponibility_hour);
        $newvar->support_time = strip_tags($newvar->support_time);
        $newvar->support_level = strip_tags($newvar->support_level);
        $newvar->obrigation = strip_tags($newvar->obrigation);
        $newvar->prereq = strip_tags($newvar->prereq);
        $newvar->restrition = strip_tags($newvar->restrition);
        $newvar->critical_analisis = strip_tags($newvar->critical_analisis);
        $newvar->analise_desempenho= strip_tags($newvar->analise_desempenho);
        $newvar->action_plan = strip_tags($newvar->action_plan);
        $newvar->pms = strip_tags($newvar->pms);
        $newvar->cobranca = strip_tags($newvar->cobranca);
        $newvar->reajustes = strip_tags($newvar->reajustes);
        $newvar->price = strip_tags($newvar->price);
        $newvar->descount = strip_tags($newvar->descount);
        $newvar->penality = strip_tags($newvar->penality);
        $newvar->finish_time = strip_tags($newvar->finish_time);
        $newvar->comunication = strip_tags($newvar->comunication);
        $newvar->term = strip_tags($newvar->term);
        $newvar->juridico= strip_tags($newvar->juridico);
        $newvar->apoio = strip_tags($newvar->apoio);
        $newvar->treinamento = strip_tags($newvar->treinamento);
        $newvar->incidente = strip_tags($newvar->incidente);
        $newvar->problema = strip_tags($newvar->problema);
        $newvar->mudanca = strip_tags($newvar->mudanca);
        $newvar->seguranca = strip_tags($newvar->seguranca);
        $newvar->confidencialidade = strip_tags($newvar->confidencialidade);
        $newvar->disponibilidade = strip_tags($newvar->disponibilidade);
        $newvar->performance = strip_tags($newvar->performance);
        $newvar->capacidade = strip_tags($newvar->capacidade);
        $newvar->continuidade = strip_tags($newvar->continuidade);
        return $this->render('view', [
            //'model' => $this->findModel($id),
            'model' => $newvar, 
        ]);
    }

    public function actionGenPdf($id){
        $newvar = $this->findModel($id);
        $newvar->service_title = strip_tags($newvar->service_title);
        $newvar->abrangency = strip_tags($newvar->abrangency);
        $newvar->business_area = strip_tags($newvar->business_area);
        $newvar->atended_client = strip_tags($newvar->atended_client);
        $newvar->version = strip_tags($newvar->version);
        $newvar->repository = strip_tags($newvar->repository);
        $newvar->pubalvo = strip_tags($newvar->pubalvo);
        $newvar->finalidade = strip_tags($newvar->finalidade);
        $newvar->description = strip_tags($newvar->description);
        $newvar->objective = strip_tags($newvar->objective);
        $newvar->responsability = strip_tags($newvar->responsability);
        $newvar->disponibility_hour = strip_tags($newvar->disponibility_hour);
        $newvar->support_time = strip_tags($newvar->support_time);
        $newvar->support_level = strip_tags($newvar->support_level);
        $newvar->obrigation = strip_tags($newvar->obrigation);
        $newvar->prereq = strip_tags($newvar->prereq);
        $newvar->restrition = strip_tags($newvar->restrition);
        $newvar->critical_analisis = strip_tags($newvar->critical_analisis);
        $newvar->analise_desempenho= strip_tags($newvar->analise_desempenho);
        $newvar->action_plan = strip_tags($newvar->action_plan);
        $newvar->pms = strip_tags($newvar->pms);
        $newvar->cobranca = strip_tags($newvar->cobranca);
        $newvar->reajustes = strip_tags($newvar->reajustes);
        $newvar->price = strip_tags($newvar->price);
        $newvar->descount = strip_tags($newvar->descount);
        $newvar->penality = strip_tags($newvar->penality);
        $newvar->finish_time = strip_tags($newvar->finish_time);
        $newvar->comunication = strip_tags($newvar->comunication);
        $newvar->term = strip_tags($newvar->term);
        $newvar->juridico= strip_tags($newvar->juridico);
        $newvar->apoio = strip_tags($newvar->apoio);
        $newvar->treinamento = strip_tags($newvar->treinamento);
        $newvar->incidente = strip_tags($newvar->incidente);
        $newvar->problema = strip_tags($newvar->problema);
        $newvar->mudanca = strip_tags($newvar->mudanca);
        $newvar->seguranca = strip_tags($newvar->seguranca);
        $newvar->confidencialidade = strip_tags($newvar->confidencialidade);
        $newvar->disponibilidade = strip_tags($newvar->disponibilidade);
        $newvar->performance = strip_tags($newvar->performance);
        $newvar->capacidade = strip_tags($newvar->capacidade);
        $newvar->continuidade = strip_tags($newvar->continuidade);
        $pdf_content = $this->renderPartial('view-pdf', [
            'model' => $newvar, 
        ]);
        //ob_start();
        //$html = ob_get_clean();
        //$html = utf8_encode($html);
        //$html .= '';
        $mpdf = new \Mpdf\Mpdf();
        //$mpdf->allow_charset_conversion = true;
        //$mpdf->charset_in = 'UTF-8';
        $mpdf->WriteHTML($pdf_content);
        $mpdf->Output();
        exit();
    }
    /**
     * Creates a new IdService model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IdService();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->service_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing IdService model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->service_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing IdService model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the IdService model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return IdService the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IdService::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
