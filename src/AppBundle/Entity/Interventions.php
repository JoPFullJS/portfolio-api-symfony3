<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Interventions
 *
 * @ORM\Table(name="interventions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InterventionsRepository")
 * @ExclusionPolicy("all")
 */
class Interventions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     * @Groups({"interventions"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_inter", type="integer")
     * @Expose
     * @Groups({"interventions"})
     */
    private $idCatInter;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     * @Expose
     * @Groups({"interventions"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=30)
     * @Expose
     * @Groups({"interventions"})
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="text")
     * @Expose
     * @Groups({"interventions"})
     */
    private $definition;

    /**
     * @var string
     *
     * @ORM\Column(name="utilite", type="text")
     * @Expose
     * @Groups({"interventions"})
     */
    private $utilite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     * @Expose
     * @Groups({"interventions"})
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Expose
     * @Groups({"interventions"})
     */
    private $description;

    /**
    *
    * Many interventions have one categorie
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="interventions")
    * @ORM\JoinColumn(name="id_cat_inter", referencedColumnName="id")
    * 
    * 
    * @Expose
    * 
    */
    private $categories;


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
     * Set idCatInter
     *
     * @param integer $idCatInter
     *
     * @return Interventions
     */
    public function setIdCatInter($idCatInter)
    {
        $this->idCatInter = $idCatInter;

        return $this;
    }

    /**
     * Get idCatInter
     *
     * @return int
     */
    public function getIdCatInter()
    {
        return $this->idCatInter;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Interventions
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
     * @return Interventions
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
     * Set definition
     *
     * @param string $definition
     *
     * @return Interventions
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Set utilite
     *
     * @param string $utilite
     *
     * @return Interventions
     */
    public function setUtilite($utilite)
    {
        $this->utilite = $utilite;

        return $this;
    }

    /**
     * Get utilite
     *
     * @return string
     */
    public function getUtilite()
    {
        return $this->utilite;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Interventions
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
     * @return Interventions
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

