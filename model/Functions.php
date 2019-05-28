<?php 

	namespace model;

	class Functions{
		protected $token = '890706485:AAGuTk_GAGhK9DQFBrRiJxJCROlwienTkWM';

		public function sendMessage($chat_id){
			$text = "salom";
			$url = "https://api.telegram.org/bot" . $this->token . "/sendMessage?chat_id=" . $chat_id;
		    $url = $url . "&text=" . urlencode($text);
		    $ch = curl_init();
		    $optArray = array(
		            CURLOPT_URL => $url,
		            CURLOPT_RETURNTRANSFER => true
		    );
		    curl_setopt_array($ch, $optArray);
		    $result = curl_exec($ch);
		    curl_close($ch);
		    return $result;
		}	
	}


 ?>