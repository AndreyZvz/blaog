<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use backend\models\form\MakingForm;
use backend\models\form\DynamicForm;
use backend\models\Making;
use backend\models\Catalog;
use backend\models\Color;


/**
 * Site controller
 */
class SiteController extends Controller
{
//***************************************************************  

    public function actionMakingadd()
    {
        $model = new MakingForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            
            $making = new Making();
           
            $values = [
                'date' => $model->date,
                'Produced' => implode(',', $model->Produced),
                'ProductId' => $model->ProductId,
                'ColorId' => $model->ColorId,
                'FormulaId' => Catalog::findOne($model->ProductId)->FormulaId,
                'Product' => Catalog::findOne($model->ProductId)->ProductName.' - '.Color::findOne($model->ColorId)->ColorName,
                'Amount'=> $model->Amount,
                'AmountArea' => $model->Amount*Catalog::findOne($model->ProductId)->PcsArea,
                ];

            $making->attributes = $values;
            $making->save(false);
            return $this->render('makingForm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('makingForm', ['model' => $model]);
        }
    }
//***************************************************************   
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
