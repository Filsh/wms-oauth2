<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\authclient\AuthAction;
use yii\authclient\ClientInterface;
use yii\web\NotFoundHttpException;
use dektrium\user\Finder;
use dektrium\user\models\User;
use dektrium\user\models\Account;

class ConnectController extends Controller
{
    public $successUrlParam = 'successUrl';
    
    /** @var Finder */
    protected $finder;
    
    public function __construct($id, $module, Finder $finder, $config = [])
    {
        $this->finder = $finder;
        parent::__construct($id, $module, $config);
    }
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'auth' => [
                'class' => AuthAction::className(),
                'successCallback' => [$this, 'successCollback'],
            ]
        ];
    }
    
    public function successCollback(ClientInterface $client)
    {
        $account = forward_static_call([
            \Yii::$app->getModule('user')->modelMap['Account'],
            'createFromClient'
        ], $client);
        
        if (null === ($user = $account->user)) {
            $url = Url::to([
                'connect/connect',
                'id' => $account->id,
                $this->successUrlParam => \Yii::$app->request->get($this->successUrlParam)
            ]);
        } else {
            $this->checkUserAvatar($account, $user);
            $url = $this->getSuccessUrl($user);
        }
        
        \Yii::$app->getResponse()->redirect($url);
    }
    
    public function actionConnect($id)
    {
        $account = $this->finder->findAccountById($id);

        if ($account === null || $account->getIsConnected()) {
            throw new NotFoundHttpException;
        }

        /** @var User $user */
        $user = \Yii::createObject([
            'class'    => User::class,
            'scenario' => 'connect',
        ]);
        
        if ($user->load(\Yii::$app->request->post()) && $user->create()) {
            $account->link('user', $user);
            $this->checkUserAvatar($account, $user);
            
            \Yii::$app->user->login($user, \Yii::$app->getModule('user')->rememberFor);
            return \Yii::$app->getResponse()->redirect($this->getSuccessUrl($user));
        }
        
        return $this->render('connect', [
            'model'   => $user,
            'account' => $account
        ]);
    }
    
    protected function getSuccessUrl(\dektrium\user\models\User $user)
    {
        if(($successUrl = \Yii::$app->request->get($this->successUrlParam)) !== null) {
            \Yii::$app->getUrlManager()->addRules([
                $successUrl => 'connect/success',
            ]);
        }

        return Url::to([
            'connect/success',
            'id' => $user->getId(),
            'authKey' => $user->getAuthKey()
        ]);
    }
    
    protected function checkUserAvatar(Account $account, User $user)
    {
        var_dump(Yii::$app->configManager->get('commonDomain'));exit;
        if($user->avatar === null && ($link = $account->getAvatarLink()) !== null) {
            $user->createAvatar($link, 'lookinday.dev', false);
        }
    }
}