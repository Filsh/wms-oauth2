<?php

namespace common\base;

use Yii;
use bupy7\config\components\ConfigManager as BaseConfigManager;

class ConfigManager extends BaseConfigManager
{
    public $rules = [];
    
    /**
     * @inheritdoc
     */
    public function get($name)
    {
        $module = $this->detectModule();
        return parent::get($module, $name);
    }
    
    protected function detectModule()
    {
        foreach($this->rules as $config) {
            /* @var $rule Rule */
            $rule = Yii::createObject($config);
            if($rule->isValid()) {
                return $rule->name;
            }
        }
        
        throw new NotDetectingException('Sandbox not detected.');
    }
}