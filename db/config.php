<?php
namespace db;

	class Db{
		protected $db_login = 'root';
		protected $db_pass = '';
		protected $db_name = 'bot';
		protected $db = new mysqli("localhost", $this->$db_login, $this->$db_pass, $this->$db_name)
															->query("SET NAMES `utf8`");

		public function index(){

		}

		public function Create(){
			$this->$db->query("INSERT INTO `post` VALUES(null,'{$post}',$user_id)");
			exit;
		}

		public function Delete($id){
			$this->$db->query("DELETE FROM `post` WHERE `id`=".$id);
			exit;
		}
		
		public function Update($id){
			$this->$db->query("UPDATE `post` SET `post` = '{$post}', `user_id`=".$user_id." WHERE `id`=".$post_id) or die($db->error);
			exit;
		}


	}
?>