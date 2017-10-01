<?php

namespace Entity;

/**
 * @Entity
 * @Table(name="users_info")
 */
class UserInfo
{
  /**
  * @Id @Column(type="integer")
  * @GeneratedValue
  */
  private $id;

  /**
  * @Column(type="string")
  */
  private $email;

  /**
  * @Column(type="string")
  */
  private $phone;

  /**
  * @Column(type="datetime", name="created_at")
  */
  private $created;

  /**
  * @Column(type="datetime", name="last_login")
  */
  private $lastLogin;

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($value)
  {
    $this->email = $value;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setPhone($value)
  {
    $this->phone = $value;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function getLastLogin()
  {
    return $this->lastLogin;
  }

  public function setLastLogin($value)
  {
    $this->lastLogin = $value;
  }
}
