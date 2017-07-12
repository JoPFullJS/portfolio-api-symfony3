<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Competences
 *
 * @ORM\Table(name="competences")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompetencesRepository")
 * @ExclusionPolicy("all")
 */
class Competences
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     * 
     * @Groups({"travaux","competences","List"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_compet", type="integer")
     * @Expose
     * 
     * @Groups({"competences","travaux"})
     */
    private $idCatCompet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150)
     * @Expose
     * 
     * 
     * @Groups({"competences","travaux","List"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=160)
     * @Expose
     *
     * @Groups({"competences","List","travaux"})
     */
    private $slug;

    /**
     * @var int
     *
     * @ORM\Column(name="taux", type="integer")
     * @Expose
     * 
     * @Groups({"competences"})
     */
    private $taux;

    /**
     * @var bool
     *
     * @ORM\Column(name="technique_key", type="boolean")
     * @Expose
     * 
     * @Groups({"competences"})
     */
    private $techniqueKey;

    /**
     * @var bool
     *
     * @ORM\Column(name="travaux_key", type="boolean")
     * @Expose
     * 
     * @Groups({"competences"})
     */
    private $travauxKey;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     * @Expose
     *
     * @Groups({"competences"})
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200)
     * @Expose
     * 
     * @Groups({"competences"})
     */
    private $description;

    /**
    *
    * Many competences have one categorie
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="competences")
    * @ORM\JoinColumn(name="id_cat_compet", referencedColumnName="id")
    * 
    * @Expose
    * @Groups({"List"})
    * 
    */
    private $categories;

    /**
     *
     * One categorie has Many travaux
     *
     * @ORM\OneToMany(targetEntity="Travaux", mappedBy="competences")
     * @var travaux[]
     * @Expose
     * 
     */
    private $travaux;

    public function __construct() {

        parent::__construct();
        $this->travaux = new Doctrine\Common\Collections\ArrayCollection();
    }

    /**
    * Get travaux
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getTravaux()
    {
        return $this->travaux;
    }

    




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
     * Set idCatCompet
     *
     * @param integer $idCatCompet
     *
     * @return Competences
     */
    public function setIdCatCompet($idCatCompet)
    {
        $this->idCatCompet = $idCatCompet;

        return $this;
    }

    /**
     * Get idCatCompet
     *
     * @return int
     */
    public function getIdCatCompet()
    {
        return $this->idCatCompet;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Competences
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Competences
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
     * Set taux
     *
     * @param integer $taux
     *
     * @return Competences
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return int
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set techniqueKey
     *
     * @param boolean $techniqueKey
     *
     * @return Competences
     */
    public function setTechniqueKey($techniqueKey)
    {
        $this->techniqueKey = $techniqueKey;

        return $this;
    }

    /**
     * Get techniqueKey
     *
     * @return bool
     */
    public function getTechniqueKey()
    {
        return $this->techniqueKey;
    }

    /**
     * Set travauxKey
     *
     * @param boolean $travauxKey
     *
     * @return Competences
     */
    public function setTravauxKey($travauxKey)
    {
        $this->travauxKey = $travauxKey;

        return $this;
    }

    /**
     * Get travauxKey
     *
     * @return bool
     */
    public function getTravauxKey()
    {
        return $this->travauxKey;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Competences
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
     * Set description
     *
     * @param string $description
     *
     * @return Competences
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories(Categories $categories)
    {
        $this->categories = $categories;
    }
}

