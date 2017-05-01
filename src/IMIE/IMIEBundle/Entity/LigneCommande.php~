<?php

namespace IMIE\IMIEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IMIE\IMIEBundle\Entity\LigneCommandeRepository")
 */
class LigneCommande
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
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\Commande")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $commande;
	
    /**
     * @ORM\ManyToOne(targetEntity="IMIE\IMIEBundle\Entity\Article")
	 * @ORM\JoinColumn(nullable=false)
     */
    private $article;
	
    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float")
     */
    private $quantite;

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
     * Set quantite
     *
     * @param float $quantite
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     * @return LigneCommande
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
     * Set commande
     *
     * @param \IMIE\IMIEBundle\Entity\Commande $commande
     * @return LigneCommande
     */
    public function setCommande(\IMIE\IMIEBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \IMIE\IMIEBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set article
     *
     * @param \IMIE\IMIEBundle\Entity\Article $article
     * @return LigneCommande
     */
    public function setArticle(\IMIE\IMIEBundle\Entity\Article $article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \IMIE\IMIEBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
