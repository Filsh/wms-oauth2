<?php

namespace common\models;

use yii\authclient\ClientInterface;

class Account extends \dektrium\user\models\Account
{
    /**
     * @inheritdoc
     */
    public function fields()
    {
        return [
            'id',
            'userId' => 'user_id',
            'provider',
            'clientId' => 'client_id'
        ];
    }
    
    public function getAvatarLink()
    {
        $link = null;
        $decodedData = $this->getDecodedData();
        switch($this->provider) {
            case 'facebook':
                $content = file_get_contents('https://graph.facebook.com/' . $decodedData->id . '/picture?width=9999&height=9999&redirect=false');
                $image = json_decode($content, true);
                $link = isset($image['data'], $image['data']['is_silhouette']) && $image['data']['is_silhouette'] === false
                    ? $image['data']['url']
                    : null;
                break;
            case 'twitter':
                $url = property_exists($decodedData, 'profile_image_url_https') ? $decodedData->profile_image_url_https : null;
                $link = str_replace(['_normal', '_bigger', '_mini'], '', $url);
                break;
            case 'google':
                $image = property_exists($decodedData, 'image') ? (array) $decodedData->image : [];
                $link = isset($image['url'], $image['isDefault']) && $image['isDefault'] === false
                    ? $image['url']
                    : null;
                break;
            default:
                throw new \yii\base\Exception('Not support \'' . $this->provider . '\' provider.');
        }
        
        return empty($link) ? null : $link;
    }
}