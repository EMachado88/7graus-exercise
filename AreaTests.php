<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AreaTests extends TestCase {
  public function testShapeArea(): void
  {
    $shape = new Shape(10, 10);
    $this->assertEquals(
      $shape->getArea(),
      10 * 10
    );
  }

  public function testRectangleArea(): void
  {
    $rectangle = new Rectangle(20, 10);
    $this->assertEquals(
      $rectangle->getArea(),
      20 * 10
    );
  }

  public function testCircleArea(): void
  {
    $circle = new Circle(10);
    $this->assertEquals(
      $circle->getArea(),
      pi() * pow(10, 2)
    );
  }
}
