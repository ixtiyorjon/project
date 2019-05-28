<?php 
	namespace model;

	class Buttons{
		public function InlineKeyboard($arr = []){

			$keyboard=array("inline_keyboard"=>$arr);

    		return json_encode($keyboard);
		}
		public function Keyboard($arr[]){
			$replyMarkup = ['keyboard' => $arr];

			return json_encode($replyMarkup);
		}
	}



 ?>