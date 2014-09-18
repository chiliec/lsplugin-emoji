<?php
/*
* @Module Name: Emoji
* @Description: Emoji for LiveStreet
* @Version: 2.0
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
		Emojione::$ascii = Config::Get('plugin.emoji.use_ascii');
		if(!Config::Get('plugin.emoji.use_cdn')) {
			Emojione::$imagePathPNG = Plugin::GetTemplateWebPath(__CLASS__).'images/';
		}		
		$this->Viewer_AppendStyle(Plugin::GetTemplatePath(__CLASS__)."css/style.css");
		$this->Viewer_AppendScript(Plugin::GetTemplatePath(__CLASS__)."js/emo.js");
	}
}
