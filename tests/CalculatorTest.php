<?php

// テスト対象のCalculatorクラスファイルを読み込む
require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {

	public function setUp()
	{
		// Calculatorクラスのインスタンスを生成
		$this->calc = new Calculator;
	}

	public function test_add_引数の和を返す()
	{
		// Calculatorクラスのaddメソッドをテスト
		$result = $this->calc->add(1, 2);
		$this->assertSame(3, $result);
	}

}
