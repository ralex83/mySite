<?php
class getParams {
	private $controller;
	public function getController() {
       return $this->controller;
	}
	public function setController($x) {
       $this->controller = $x;
	}
   
	private $action;
	public function getAction() {
       return $this->action;
	}
	public function setAction($y) {
       $this->action = $y;
	}
 
	private $check;
	public function getCheck() {
       return $this->check;
	}
	public function setCheck($z) {
       $this->check = $z;
	}  
   
}
?>