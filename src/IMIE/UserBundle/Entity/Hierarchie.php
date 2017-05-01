<?php

namespace IMIE\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hierarchie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IMIE\UserBundle\Entity\HierarchieRepository")
 */
class Hierarchie
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
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="hierarchie", type="text")
     */
    private $hierarchie;


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
     * Set role
     *
     * @param string $role
     * @return Hierarchie
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set hierarchie
     *
     * @param string $hierarchie
     * @return Hierarchie
     */
    public function setHierarchie($hierarchie)
    {
        $this->hierarchie = $hierarchie;

        return $this;
    }

    /**
     * Get hierarchie
     *
     * @return string 
     */
    public function getHierarchie()
    {
        return $this->hierarchie;
    }
}
