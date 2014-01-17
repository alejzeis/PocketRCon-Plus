<?php
/*
__PocketMine Plugin__
name=PocketRCon-Plus
description=A remote control plugin
version=0.1
author=jython234
class=RConPlugin
apiversion=11
*/

class RConPlugin implements Plugin{
	private $api;
	
	public function __construct(ServerAPI $api, $server = false){
		//TODO: Class construction
		$this->$api = $api;
	}
	
	public function init(){
		//TODO: Get all config loaded, put plugin enable stuff here
		console("PocketRcon-Plus is enabling");
		
	}
	
	public function __destruct(){
		//TODO: Plugin Disable
	}
}