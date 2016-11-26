<?php
namespace Home\Controller;
use Think\Controller;
class LogController extends Controller {
	public function log(){
		echo "string";
		// $this->write('test','__PUBLIC__/log/commonLog.txt');
	}
}