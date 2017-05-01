<?php

namespace IMIE\IMIEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="imie_fournisseur")
 * @ORM\Entity(repositoryClass="IMIE\IMIEBundle\Entity\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\PhotoIdentite")
	 * @ORM\JoinColumn(nullable=true)
     */
    private $photoIdentite;
	
	
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


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
     * Set nom
     *
     * @param string $nom
     * @return Fournisseur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Fournisseur
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set photoIdentite
     *
     * @param \IMIE\IMIEBundle\Entity\PhotoIdentite $photoIdentite
     * @return Fournisseur
     */
    public function setPhotoIdentite(\IMIE\IMIEBundle\Entity\PhotoIdentite $photoIdentite = null)
    {
        $this->photoIdentite = $photoIdentite;

        return $this;
    }

    /**
     * Get photoIdentite
     *
     * @return \IMIE\IMIEBundle\Entity\PhotoIdentite 
     */
    public function getPhotoIdentite()
    {
        return $this->photoIdentite;
    }
}
