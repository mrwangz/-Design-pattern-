<?php
/**
 * 2017-10-19
 * 简单工厂(静态工厂模式)
 *
 * 优点:
 * 不需要直接去创建对象，只需要根据类型创建
 * 调用简单
 * 减少引入文件,增加灵活性
 *
 * 缺点:
 * 添加新对对象需要修改工厂类,产品过多则不利于维护,不符合'开闭原则'
 * 工厂模式使用类静态方法，无法被继承
 */

abstract class Product {
    public function common() {
        return 'common value';
    }
    abstract public function make();
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

