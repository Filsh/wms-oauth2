<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\authclient\AuthAction;
use yii\authclient\ClientInterface;

class ConnectController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'auth' => [
                'class' => AuthAction::className(),
                'cancelUrl' =>  Url::to(['connect/cancel']),
                'successCallback' => [$this, 'successCollback'],
            ]
        ];
    }
    
    public function successCollback(ClientInterface $client)
    {
        $account = forward_static_call([
            Yii::$app->getModule('user')->modelMap['Account'],
            'createFromClient'
        ], $client);
        
        if (null === ($user = $account->user)) {
            $url = Url::to([
                'connect/account',
                'id' => $account->id
            ]);
        } else {
            $url = Url::to([
                'connect/success',
                'id' => $user->getId(),
                'authKey' => $user->getAuthKey()
            ]);
        }
        
        Yii::$app->getResponse()->redirect($url);
    }
}