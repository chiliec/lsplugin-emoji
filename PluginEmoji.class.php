<?php
/*
* @Module Name: Emoji
* @Description: Emoji for LiveStreet
* @Version: 1.0
* @Author: Chiliec
*/

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginEmoji extends Plugin {

    protected $aInherits=array(
		'module'=>array('ModuleText'=>'_ModuleText'),
    );

    public function Activate() {
        return true;
    }

    public function Deactivate(){
        return true;
    }

    public function Init() {
		$this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/style.css"); // Добавление своего CSS
		$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."js/emo.js"); // Добавление своего JS
    }
}
?>
