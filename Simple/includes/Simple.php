<?php
/*
	Simple.php - Application Controller for "Simple" PHPainfree Recipe
	Author: Eric Ryan Harrison <me@ericharrison.info>
*/	
	$Simple = new Simple();
	
	class Simple {
		public function title() {
			global $Painfree;
			return $Painfree->view() . ' | Simple PHPainfree Recipe';
		}
	
		public function __construct() {
			global $Painfree;
			
			// $this->db = $Painfree->db;
			$this->path = $Painfree->path;
		}
	}
	
