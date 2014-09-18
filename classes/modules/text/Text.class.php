<?php
/*
* @Module Name: Emoji
* @Description: Emoji for LiveStreet
* @Version: 2.0
* @Author: Chiliec
*/
class PluginEmoji_ModuleText extends PluginEmoji_Inherit_ModuleText {

	public function Parser($sText) {
		$sResult=parent::Parser($sText);
		$sResult=$this->Emojify($sResult);
		return $sResult;
	}

	public function Emojify($sText) {	
		$sText=Emojione::toImage($sText);
		return $sText;
	}
}