<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\App;

class MyTest extends TestCase{

  /**
    * @covers \BalancedBrackets
  */
  public function testValidBalanced(): void
  {
    self::assertTrue(App::isBalancedBrackets("(){}[]"));
  }
  /**
    * @covers \BalancedBrackets
  */
  public function testOtherValidBalanced(): void
  {
    self::assertTrue(App::isBalancedBrackets("[{()}](){}"));
  }
  /**
    * @covers \NoBalancedBrackets
  */
  public function testInvalidBalanced(): void
  {
    self::assertFalse(App::isBalancedBrackets("[]{()"));
  }
  /**
    * @covers \NoBalancedBrackets
  */
  public function testOtherIvalidBalanced(): void
  {
    self::assertFalse(App::isBalancedBrackets("[{)]"));
  }
}