<?php

namespace IMIE\IMIEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IMIE\IMIEBundle\Entity\CommandeRepository")
 */
class Commande
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
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\Client")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $client;	
	
    /**
     * @var string
     *
     * @ORM\Column(name="numeroCommande", type="string", length=20)
     */
    private $numeroCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime")
     */
    private $dateCommande;


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
     * Set numeroCommande
     *
     * @param string $numeroCommande
     * @return Commande
     */
    public function setNumeroCommande($numeroCommande)
    {
        $this->numeroCommande = $numeroCommande;

        return $this;
    }

    /**
     * Get numeroCommande
     *
     * @return string 
     */
    public function getNumeroCommande()
    {
        return $this->numeroCommande;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set client
     *
     * @param \IMIE\IMIEBundle\Entity\Client $client
     * @return Commande
     */
    public function setClient(\IMIE\IMIEBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \IMIE\IMIEBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
}
