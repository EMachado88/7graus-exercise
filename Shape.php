<?php

class Shape
{

  public string $name = '';

  protected float $width;

  protected float $height;

  private $id;

  const SHAPE_TYPE = 1;

  function __construct(float $length, float $width)
  {
    $this->width = $width;
    $this->height = $length;
    $this->id = uniqid();
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): string
  {
    $this->name = $name;
    return $this->name;
  }

  public function getArea(): float
  {
    return $this->width * $this->height;
  }

  public function getShapeType(): int
  {
    return static::SHAPE_TYPE;
  }

  public function getObject(): array
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'width' => $this->width,
      'length' => $this->height,
    ];
  }
}