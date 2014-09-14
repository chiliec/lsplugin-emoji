<?php
/*
* @Module Name: Emoji
* @Description: Emoji for LiveStreet
* @Version: 1.0
* @Author: Chiliec
*/
class PluginEmoji_ModuleText extends PluginEmoji_Inherit_ModuleText {

	public function Parser($sText) {
		$sResult=parent::Parser($sText);
		$sResult=$this->Emojify($sResult);
		return $sResult;
	}

	public function Emojify($sText) {
		$sText = preg_replace(
			'/:([-\w]+):/', 
			'<span class="emoji"><img src="'.Plugin::GetTemplateWebPath().'img/$1.png" height="22" width="22"></span>',
			$sText
		);
		return $sText;
	}
}