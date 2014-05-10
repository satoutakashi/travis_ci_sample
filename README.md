# travis_ci_sample
Travis CIをさわってみるためのサンプル

----
## 入っているもの
### Calculator.php
テスト対象のクラスファイル。  
2個の引数の和を返すaddメソッドを持つ。

### tests/CalculatorTest.php
Calculatorクラスのテスト。  
addメソッドに引数1と2を渡し、3が返ってくるかどうかのテストケースが入っている。

### vendor/
composerで入れたphpunitとかtestrunnerとか。

----
## とりあえず手動でphpunitでテストするには
`./vendor/bin/phpunit tests/CalculatorTest.php`

----
## それをtestrunnerでテストするには

`./vendor/bin/testrunner phpunit -p vendor/autoload.php -a tests`
