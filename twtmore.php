<?php
	class Twtmore{
		public $apiKey = false;
		public function tweet($username, $content, $staging = true, $return = false){
			if($this->apiKey === false){
				die('<b>Twtmore:</b> No api key set!');
			}
			if(!$content > 140){
				die('<b>Twtmore:</b> Content must be >140 characters');
			}
			$curl = curl_init('http://api.twtmore.com/shorten/' . $this->apiKey);
			curl_setopt($curl, CURLOPT_POST, 1);
			$post = "user=".$username."&tweet=".$content;
			if($staging){
				$post .= "&staging=true";
			}
			if($return){
				$post .= "&return=url";
			}
			curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
		public function get($code){
			$curl = curl_init('http://twtm.in/'.$code.'/content/');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);
			curl_close($curl);
			return $response;
		}
	}
?>