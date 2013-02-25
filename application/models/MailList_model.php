<?php

	class MailList_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_maillist(){
			$query = $this->db->get('mailing_list');
			return $query->result_array();
		}

	}

?>