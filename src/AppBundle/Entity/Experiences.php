<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Experiences
 *
 * @ORM\Table(name="experiences")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExperiencesRepository")
 * @ExclusionPolicy("all")
 */
class Experiences
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     * @Groups({"experience"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_exp", type="integer")
     * @Expose
     * @Groups({"experience"})
     */
    private $idCatExp;

    /**
     * @var string
     *
     * @ORM\Column(name="entreprise", type="string", length=150)
     * @Expose
     * @Groups({"experience"})
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=50)
     * @Expose
     * @Groups({"experience"})
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=60)
     * @Expose
     * @Groups({"experience"})
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="techno_poste", type="string", length=25)
     * @Expose
     * @Groups({"experience"})
     */
    private $technoPoste;

    /**
     * @var string
     *
     * @ORM\Column(name="environement", type="string", length=250)
     * @Expose
     * @Groups({"experience"})
     */
    private $environement;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_mission", type="string", length=250)
     * @Expose
     * @Groups({"experience"})
     */
    private $titreMission;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Expose
     * @Groups({"experience"})
     */
    private $description;

    /**
    *
    * Many experiences have one categorie
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="experiences")
    * @ORM\JoinColumn(name="id_cat_exp", referencedColumnName="id")
    * 
    * 
    * @Expose
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
     * Set idCatExp
     *
     * @param integer $idCatExp
     *
     * @return Experiences
     */
    public function setIdCatExp($idCatExp)
    {
        $this->idCatExp = $idCatExp;

        return $this;
    }

    /**
     * Get idCatExp
     *
     * @return int
     */
    public function getIdCatExp()
    {
        return $this->idCatExp;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Experiences
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set periode
     *
     * @param string $periode
     *
     * @return Experiences
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Experiences
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set technoPoste
     *
     * @param string $technoPoste
     *
     * @return Experiences
     */
    public function setTechnoPoste($technoPoste)
    {
        $this->technoPoste = $technoPoste;

        return $this;
    }

    /**
     * Get technoPoste
     *
     * @return string
     */
    public function getTechnoPoste()
    {
        return $this->technoPoste;
    }

    /**
     * Set environement
     *
     * @param string $environement
     *
     * @return Experiences
     */
    public function setEnvironement($environement)
    {
        $this->environement = $environement;

        return $this;
    }

    /**
     * Get environement
     *
     * @return string
     */
    public function getEnvironement()
    {
        return $this->environement;
    }

    /**
     * Set titreMission
     *
     * @param string $titreMission
     *
     * @return Experiences
     */
    public function setTitreMission($titreMission)
    {
        $this->titreMission = $titreMission;

        return $this;
    }

    /**
     * Get titreMission
     *
     * @return string
     */
    public function getTitreMission()
    {
        return $this->titreMission;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Experiences
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

