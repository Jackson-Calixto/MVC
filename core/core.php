<?php
class Core {	

	public function run() {

		$url = isset($_GET['URL'])?$_GET['URL']:'';
		$url = (substr($url, strlen($url)-1)=='/')?substr($url, 0, strlen($url)-1):$url;

		$params = array();

		if(!empty($url)) {
			$url = explode('/', $url);
			
			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}			

			if(count($url) > 0) {
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';			
		}

		require_once 'core/controller.php';

		$c = new $currentController();
		call_user_func_array(array($c, $currentAction), $params);
	}
}
?>