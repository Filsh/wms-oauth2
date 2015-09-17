<?php

namespace common\base;

use Yii;
use bupy7\config\components\ConfigManager as BaseConfigManager;

class ConfigManager extends BaseConfigManager
{
    public $rules = [];
    
    protected $module = null;
    
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
        if($this->module === null) {
            foreach($this->rules as $module => $config) {
                /* @var $rule Rule */
                $rule = Yii::createObject($config);
                if($rule->isValid()) {
                    $this->module = $module;
                    break;
                }
            }
            
            if($this->module === null) {
                throw new \yii\base\Exception('Sandbox not detected.');
            }
        }
        
        return $this->module;
    }
}