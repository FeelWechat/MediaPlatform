<?php
/************************************************
 * AutoResponder
 * Created by Liyang on 2016-03-29
 * Copyright © 2016年 Liyang. All rights reserved
 ************************************************/

class AutoResponder {

	public $phraseArr = array();
	public  $phraseCount = 0;

	function __construct() {

		array_push($this->phraseArr,  "应无所住，而生其心！");

		array_push($this->phraseArr, "每一个不曾起舞的日子，都是对生命的辜负。--尼采");
		array_push($this->phraseArr, "一个人有两个我，一个在黑暗中醒着，一个在光明中睡着。--纪伯伦");
		array_push($this->phraseArr, "若我会见到你，事隔经年。我如何向你招呼，以眼泪，以沉默。--拜伦");

		array_push($this->phraseArr, "心脏是一座有两间卧室的房子，一间住着痛苦，另一间住着欢乐，人不能笑得太响。否则笑声会吵醒隔壁房间的痛苦。--卡夫卡");
		array_push($this->phraseArr, "最大的悲剧不是坏人的嚣张，而是好人的过度沉默。--马丁·路德·金");
		array_push($this->phraseArr, "到头来，我们记住的，不是敌人的攻击，而是朋友的沉默。--马丁·路德·金");
		array_push($this->phraseArr, "人生是个含泪的微笑。--欧·亨利");

		array_push($this->phraseArr, "也许是天生懦弱的关系,我对所有的喜悦都掺杂着不祥的预感。--三岛由纪夫");

		$this->phraseCount = count($this->phraseArr);
	}


	private function getRandNo() {
		$randNo = rand(0, $this->phraseCount - 1);
		return $randNo;
	}
	

	public function getResponse() {
		$responseText = $this->phraseArr[$this->getRandNo()];
		return $responseText;
	}
}
?>
