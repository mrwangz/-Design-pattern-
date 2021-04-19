<?php
/**
 * 抽象工厂类
 */

//抽象产品
interface Button{
    public function display();
}

//Spring按钮类:具体产品
class SpringButton implements Button {
    public function display() {
        echo '显示浅绿色按钮;';
    }
}

//summer按钮类：具体产品
class SummerButton implements Button {
    public function display() {
        echo '显示浅蓝色按钮;';
    }
}

//文本框接口：抽象产品
interface TextField {
    public function display();
}

//Spring文本框类：具体产品
class SpringTextField implements TextField {
    public function display() {
        echo"显示绿色边框文本框;";
    }
}

//Summer文本框类：具体产品
class SummerTextField implements TextField {
    public function display() {
        echo "显示蓝色边框文本框;";
    }
}

//组合框接口：抽象产品
interface ComboBox {
    public function display();
}

//Spring组合框类：具体产品
class SpringComboBox implements ComboBox {
    public function display() {
        echo "显示绿色边框组合框;";
    }
}

//Summer组合框类：具体产品
class SummerComboBox implements ComboBox {
    public function display() {
        echo "显示蓝色边框组合框;";
    }
}

interface SkinFactory {
    public function createButton();
    public function createTextField();
    public function createComboBox();
}

//Spring皮肤工厂：具体工厂
class SpringSkinFactory implements SkinFactory {
    public function createButton() {
        return new SpringButton();
    }

    public function createTextField() {
		return new SpringTextField();
	}

	public function createComboBox() {
		return new SpringComboBox();
	}
}

//Summer皮肤工厂：具体工厂
class SummerSkinFactory implements SkinFactory {
    public function createButton() {
        return new SummerButton();
    }

	public function createTextField() {
		return new SummerTextField();
	}

	public function createComboBox() {
		return new SummerComboBox();
	}
}

(new SpringSkinFactory())->createButton()->display();
(new SpringSkinFactory())->createTextField()->display();
(new SpringSkinFactory())->createComboBox()->display();

(new SummerSkinFactory())->createButton()->display();
(new SummerSkinFactory())->createTextField()->display();
(new SummerSkinFactory())->createComboBox()->display();