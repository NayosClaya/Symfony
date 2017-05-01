<?php

namespace IMIE\IMIEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IMIE\IMIEBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\Image")
	 * @ORM\JoinColumn(nullable=true)
     */
    private $image;


	
    /**
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\Categorie")
	 * @ORM\JoinColumn(nullable=true)
     */
    private $categorie;

	

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20)
     */
    private $code;
	

	 
    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var float
     *
     * @ORM\Column(name="prixUnitaire", type="float")
     */
    private $prixUnitaire;


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
     * Set code
     *
     * @param string $code
     * @return Article
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Article
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     * @return Article
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return float 
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }



    /**
     * Set categorie
     *
     * @param \IMIE\IMIEBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\IMIE\IMIEBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \IMIE\IMIEBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set image
     *
     * @param \IMIE\IMIEBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\IMIE\IMIEBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \IMIE\IMIEBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}
