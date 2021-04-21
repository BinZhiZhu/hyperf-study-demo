<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 */
class ExampleCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * 测试根目录.
     */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/index');
        $I->see('Hello World');
    }

    /**
     * 测试毒鸡汤页面.
     */
    public function tryToTestChickenSoup(AcceptanceTester $I)
    {
        $I->amOnPage('/soul/index');
        $I->see('毒鸡汤');
        $I->see('再来一碗');
    }
}
