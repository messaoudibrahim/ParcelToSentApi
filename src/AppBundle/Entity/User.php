<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;
    /**
     * @ORM\Column(type="string", length=500)
     */
    private $password;
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('Sender', 'Transporter')")
     */
    private $typeUser;


    /**
     * @ORM\Column(type="string", length=25, unique=false, nullable=true)
     */
    private $number;
    /**
     * @ORM\Column(type="string", length=25, unique=false, nullable=true)
     */
    private $email;
    /**
     * @ORM\Column(type="string", length=25, unique=false, nullable=true)
     */
    private $firstname;
    /**
     * @ORM\Column(type="string", length=25, unique=false,nullable=true)
     */
    private $lastname;


    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }


    /**
     * @return mixed
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * @param mixed $typeUser
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    public function __construct($username)
    {
        $this->isActive = true;
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getSalt()
    {
        return null;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getRoles()
    {
        return array('ROLE_USER');
    }
    public function eraseCredentials()
    {
    }
}