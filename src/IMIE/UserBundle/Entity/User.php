<?php

namespace IMIE\UserBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="imie_user")
 * @ORM\Entity(repositoryClass="IMIE\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
    /**
	 *
     * @ORM\ManyToOne(targetEntity="IMIE\UserBundle\Entity\Hierarchie")
     * @ORM\JoinColumn(nullable=true)
	 */
    private $hierarchie;	
	
	//---------------Debut Implements---------
	
    /**
     * @var array
	 *
     * @ORM\Column(name="roles", type="array",nullable=true)
     */
    private $roles;
	
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=40,nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $email;


	
    /**
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;
	
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }


    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

   /**
     * Set roles
     *
     * @param array $roles
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
		if (is_array($this->roles)){
			return $this->roles;
		}else{
			return array('ROLE_USER');
		};
       
    }
	
    public function addRoles($role)
    {
        $role = strtoupper($role);
        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }
        return $this;
    }
    public function hasRoles($role)
    {
        return in_array(strtoupper($role), $this->getRoles(), true);
    }	
    public function removeRoles($role)
    {
        if (false !== $key = array_search(strtoupper($role), $this->roles, true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }
        return $this;
    }	

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

   /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set hierarchie
     *
     * @param \IMIE\UserBundle\Entity\Hierarchie $hierarchie
     * @return User
     */
    public function setHierarchie(\IMIE\UserBundle\Entity\Hierarchie $hierarchie = null)
    {
        $this->hierarchie = $hierarchie;

        return $this;
    }

    /**
     * Get hierarchie
     *
     * @return \IMIE\UserBundle\Entity\Hierarchie 
     */
    public function getHierarchie()
    {
        return $this->hierarchie;
    }
}
