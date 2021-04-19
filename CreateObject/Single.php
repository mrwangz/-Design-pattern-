<?php 
/**
 * 2017-10-19
 * 单例模式
 * 特点:单例模式的特点:
 * 	1.某个类只能有一个实例；
 *  2.它必须自行创建这个实例；
 *  3.它必须自行向整个系统提供这个实例。
 * 应用场景: 当一个只需要一个实例的时候;
 * 
 */
 class single {
    protected static $_instance;
	private function __construct() {
		
	}
	
	public static function getInstance() {
		if (null === self::$_instance) {
			self::$_instance = new self;
		}	
		return self::$_instance;
	}
	
	private function __clone() {
		echo 'error';
	}
 }

 class client {
    public function main() {
        single::getInstance();
    }
 }
