<?php

namespace Entity;

/**
* @Entity
* @Table(name="users")
*/
class User
{
  /**
  * @Id @Column(type="integer")
  * @GeneratedValue
  */
  private $id;

  /**
  * @OneToOne(targetEntity="Entity\UserInfo")
  * @JoinColumn(name="user_info_id", referencedColumnName="id")
  */
  private $userInfo;

  /**
  * @Column(type="string", nullable=false)
  */
  private $login;

  /**
  * @Column(type="string", nullable=false)
  */
  private $password;

  function __construct($login)
  {
    $this->login = $login;
  }

  public function getLogin()
  {
    return $this->login;
  }

  public function setLogin($new_login)
  {
    $this->login = $new_login;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($new_pass)
  {
    $this->password = $new_pass;
  }

  public function getUserInfo()
  {
    return $this->userInfo;
  }

  public function setUserInfo($value)
  {
    $this->userInfo = $value;
  }
}
