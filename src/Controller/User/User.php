<?php
namespace Js\ApiN\Controller\User;

class Users
{
  private int $id;
  private string $name;

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId():int
  {
    return $this->id;
  }
  public function setName(string $name)
  {
    $this->name = $name;
  }
  public function getName():string
  {
    return $this->name;
  }
}
