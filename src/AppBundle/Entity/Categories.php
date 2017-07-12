<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriesRepository")
 * @ExclusionPolicy("all")
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     *
     * @Groups({"travaux","List","experience","services","interventions"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     * @Expose
     *
     * @Groups({"travaux","List","experience","services","interventions"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=50)
     * @Expose
     *
     * @Groups({"travaux","List","experience","services","interventions"})
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     * @Expose
     * @Groups({"List"})
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200)
     * @Expose
     * @Groups({"List"})
     */
    private $description;

     /**
     *
     * One categorie has Many experiences
     *
     * @ORM\OneToMany(targetEntity="Experiences", mappedBy="categories")
     * @var experiences[]
     * @Expose
     * 
     */
    private $experiences;

     /**
     *
     * One categorie has Many competences
     *
     * @ORM\OneToMany(targetEntity="Competences", mappedBy="categories")
     * @var competences[]
     * @Expose
     * @Groups({"List"})
     * 
     */
    private $competences;

    /**
     *
     * One categorie has Many services
     *
     * @ORM\OneToMany(targetEntity="Services", mappedBy="categories")
     * @var services[]
     * @Expose
     * 
     */
    private $services;

    /**
     *
     * One categorie has Many interventions
     *
     * @ORM\OneToMany(targetEntity="Interventions", mappedBy="categories")
     * @var intervention[]
     * @Expose
     * 
     */
    private $interventions;

    /**
     *
     * One categorie has Many travaux
     *
     * @ORM\OneToMany(targetEntity="Travaux", mappedBy="categories")
     * @var travaux[]
     * @Expose
     * 
     */
    private $travaux;


    public function __construct() {

        $this->experiences = new ArrayCollection();
        $this->competences = new ArrayCollection();
        $this->services = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->travaux = new ArrayCollection();
    }

    /**
    * Get experiences
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
    * Get competences
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
    * Get services
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getServices()
    {
        return $this->services;
    }

    /**
    * Get interventions
    *
    * @return Doctrine\Common\Collections\Collection
    */
    public function getInterventions()
    {
        return $this->interventions;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Categories
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
     * @return Categories
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Categories
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
     * @return Categories
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
}

