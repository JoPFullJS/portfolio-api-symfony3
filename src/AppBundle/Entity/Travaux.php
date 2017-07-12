<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Travaux
 *
 * @ORM\Table(name="travaux")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TravauxRepository")
 * @ExclusionPolicy("all")
 */
class Travaux
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     * @Groups({"travaux"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_travx", type="integer")
     * @Expose
     * @Groups({"travaux"})
     */
    private $idCatTravx;

    /**
     * @var int
     *
     * @ORM\Column(name="id_comp_travx", type="integer")
     * @Expose
     * @Groups({"travaux"})
     */
    private $idCompTravx;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=155)
     * @Expose
     * @Groups({"travaux"})
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=200)
     * @Expose
     * @Groups({"travaux"})
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     * @Expose
     * @Groups({"travaux"})
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="projet", type="text")
     * @Expose
     * @Groups({"travaux"})
     */
    private $projet;

    /**
     * @var string
     *
     * @ORM\Column(name="technique", type="text")
     * @Expose
     * @Groups({"travaux"})
     */
    private $technique;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionnel", type="text")
     * @Expose
     * @Groups({"travaux"})
     */
    private $fonctionnel;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text")
     * @Expose
     * @Groups({"travaux"})
     */
    private $source;

    /**
     * @var bool
     *
     * @ORM\Column(name="affichage", type="boolean")
     * @Expose
     * @Groups({"travaux"})
     */
    private $affichage;

    /**
    *
    * Many travaux have one categorie
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="travaux")
    * @ORM\JoinColumn(name="id_cat_travx", referencedColumnName="id")
    * 
    * 
    * @Expose
    * @Groups({"travaux"})
    */
    private $categories;

    /**
    *
    * Many travaux have one competence
    * @ORM\ManyToOne(targetEntity="Competences", inversedBy="travaux")
    * @ORM\JoinColumn(name="id_comp_travx", referencedColumnName="id")
    * 
    * 
    * @Expose
    * @Groups({"travaux"})
    */
    private $competences;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCatTravx
     *
     * @param integer $idCatTravx
     *
     * @return Travaux
     */
    public function setIdCatTravx($idCatTravx)
    {
        $this->idCatTravx = $idCatTravx;

        return $this;
    }

    /**
     * Get idCatTravx
     *
     * @return int
     */
    public function getIdCatTravx()
    {
        return $this->idCatTravx;
    }

    /**
     * Set idCompTravx
     *
     * @param integer $idCompTravx
     *
     * @return Travaux
     */
    public function setIdCompTravx($idCompTravx)
    {
        $this->idCompTravx = $idCompTravx;

        return $this;
    }

    /**
     * Get idCompTravx
     *
     * @return int
     */
    public function getIdCompTravx()
    {
        return $this->idCompTravx;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Travaux
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Travaux
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Travaux
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set projet
     *
     * @param string $projet
     *
     * @return Travaux
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return string
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set technique
     *
     * @param string $technique
     *
     * @return Travaux
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;

        return $this;
    }

    /**
     * Get technique
     *
     * @return string
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Set fonctionnel
     *
     * @param string $fonctionnel
     *
     * @return Travaux
     */
    public function setFonctionnel($fonctionnel)
    {
        $this->fonctionnel = $fonctionnel;

        return $this;
    }

    /**
     * Get fonctionnel
     *
     * @return string
     */
    public function getFonctionnel()
    {
        return $this->fonctionnel;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Travaux
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set affichage
     *
     * @param boolean $affichage
     *
     * @return Travaux
     */
    public function setAffichage($affichage)
    {
        $this->affichage = $affichage;

        return $this;
    }

    /**
     * Get affichage
     *
     * @return bool
     */
    public function getAffichage()
    {
        return $this->affichage;
    }
}

