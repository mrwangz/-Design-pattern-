<?php
/**
 * 观察者模式
 */

//抽象目标类
abstract class Subject {
    //定一个观察者集合用于存储所有观察者对象
    protected $observers = [];

    //注册方法，用于向观察者集合中增加一个观察者
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    //注销方法，用于再观察者集合中删除一个观察者
    public function detach(Observer $observer) {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    //声明抽象通知方法
    abstract public function notify();
}

//具体目标类
class ConcreteSubject extends Subject {
    public function notify() {
       foreach ($this->observers as $observer) {
           $observer->update();
       }
    }
}

//观察者接口
interface Observer {
    //声明响应方法
    public function update();
}

class ConcreteObserver implements Observer {
    //实现响应方法
    public function update() {

    }
}

