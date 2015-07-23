<?php
class Admin extends Application {

	
	private $_table = 'admins';
	public $_id;
	
	
	
	
	
	
	public function isUser($email = null, $password = null) {
		if (!empty($email) && !empty($password)) {
			$password = Login::string2hash($password);
			$sql = "SELECT * FROM `{$this->_table}`
					WHERE `email` = '".$this->db->escape($email)."'
					AND `password` = '".$this->db->escape($password)."'";
			$result = $this->db->fetchOne($sql);
			if (!empty($result)) {
				$this->_id = $result['id'];
				return true;
			}
			return false;
		}
	}
	
	public function getAdmin() {
		$sql = "SELECT * FROM `{$this->_table}`
				WHERE `id` = 1";
		return $this->db->fetchOne($sql);
	}
	
	
	
	public function updateAdmin($vars = null) {
		if (!empty($vars)) {
		$vars['password'] = Login::string2hash($vars['password']);
			$this->db->prepareUpdate($vars);
			return $this->db->update($this->_table, 1);
		}
	}
	




}