<?php
class SumText {
    function __construct(){
		$this->nText = array();
		$this->nnText = "";
		$this->ta = array(
			'0'=>"",
			'1'=>"bir",
			'2'=>"ikki",
			'3'=>"uch",
			'4'=>"to'rt",
			'5'=>"besh",
			'6'=>"olti",
			'7'=>"yetti",
			'8'=>"sakkiz",
			'9'=>"to'qqiz");
		$this->tb = array(
			'0'=>"",
			'1'=>"o'n",
			'2'=>"yigirma",
			'3'=>"o'ttiz",
			'4'=>"qiriq",
			'5'=>"ellik",
			'6'=>"oltmish",
			'7'=>"yetmish",
			'8'=>"sakson",
			'9'=>"to'qson");
		$this->yuz = " yuz";
		$this->ming = " ming";
		$this->million = " million";
		$this->milliard = " milliard";
			
    }
	function Text($number){
		$data = str_split($number);
		$count = strlen($number);
		//1
		if ($count >= 1){$this->nText[] = $this->ta[$data[$count-1]];}
		//10
		if ($count >= 2){$this->nText[] = $this->tb[$data[$count-2]];}
		//100
		if ($count >= 3){ 
			if($data[$count-3] != 0){
				$this->nText[] = $this->ta[$data[$count-3]].$this->yuz;
			}
		}
		//1.000
		if ($count >= 4){
			if($data[$count-4] != 0){
				$this->nText[] = $this->ta[$data[$count-4]].$this->ming;
			}
		}
		//10.000
		if ($count >= 5){$this->nText[] = $this->tb[$data[$count-5]];}
		//100.000
		if ($count >= 6){
			if($data[$count-6] != 0){
				$this->nText[] = $this->ta[$data[$count-6]].$this->yuz;
			}
		}
		//1.000.000
		if ($count >= 7){$this->nText[] = $this->ta[$data[$count-7]].$this->million;}
		//10.000.000
		if ($count >= 8){$this->nText[] = $this->tb[$data[$count-8]];}
		//100.000.000
		if ($count >= 9){
			if($data[$count-9] != 0){
				$this->nText[] = $this->ta[$data[$count-9]].$this->yuz;
			}
		}
		//1.000.000.000
		if ($count >= 10){$this->nText[] = $this->ta[$data[$count-10]].$this->milliard;}
		//10.000.000.000
		if ($count >= 11){$this->nText[] = $this->tb[$data[$count-11]];}
		//100.000.000.000
		if ($count >= 12){$this->nText[] = $this->ta[$data[$count-12]].$this->yuz;}
		$nText = array_reverse($this->nText);
		 foreach($nText as $item){
			$this->nnText .=' '.$item;
		 }
		return $this->nnText;
	} 
}
$arr = new SumText();
echo $arr->Text(104000010);