<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once 'include/Webservices/Utils.php';
include_once 'modules/Mobile/Mobile.php';
include_once dirname(__FILE__) . '/Utils.php';
session_start();

class Mobile_WS_Controller {
	function requireLogin() {
		return true;
	}
	
	private $activeUser = false;
	public function initActiveUser($user) {
		$this->activeUser = $user;
	}
	
	protected function setActiveUser($user) {
	
		
		// Add debugging output
		
		$this->sessionSet('_authenticated_user_id', $user->id);
		$this->initActiveUser($user);
	}
	
	protected function getActiveUser() {
		
		
		if ($this->activeUser === false) {
			$userid = $this->sessionGet('_authenticated_user_id');
			// Add debugging output
		
			if (!empty($userid)) {
				$this->activeUser = CRMEntity::getInstance('Users');
				$this->activeUser->retrieveCurrentUserInfoFromFile($userid);
				global $current_user;
				$current_user = $this->activeUser;
			}
		}
		return $this->activeUser;
	}
	
	
	function hasActiveUser() {
		$user = $this->getActiveUser();
		return ($user !== false);
	}
	
	function sessionGet($key, $defvaule = '') {
		return Mobile_API_Session::get($key, $defvalue);
	}
	
	function sessionSet($key, $value) {
		Mobile_API_Session::set($key, $value);
	}
}