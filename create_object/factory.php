<?php
/**
 * 2017-10-19
 * 工厂方法
 * 
 */

abstract class Product {
    abstract function make();
}

class aProduct extends Product {
    public function make() {
      return 'this is a product';
    }
}

class bProduct extends Product{
    public function make() {
        return 'this is b product';
    }
}

class Factory {
    public static function getInstance($type) {
        switch($type) {
            case 'a':
                return new aProduct();
            case 'b':
                return new bProduct();
            default:
                return 'not exists '.$type.' type product';
        }
    }
}

echo Factory::getInstance('a')->make()."<br>";
echo Factory::getInstance('b')->make()."<br>";
echo Factory::getInstance('c');

