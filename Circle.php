<?php

require_once './Shape.php';

class Circle extends Shape
{
  const SHAPE_TYPE = 3;

  protected float $radius;

  function __construct(float $radius)
  {
    $this->radius = $radius;
    $this->id = uniqid();
  }

  public function getArea(): float
  {
    return pi() * pow($this->radius, 2);
  }

  public function getObject(): array
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'radius' => $this->radius,
    ];
  }
}
