<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Services
 *
 * @ORM\Table(name="services")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServicesRepository")
 * @ExclusionPolicy("all")
 */
class Services
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Expose
     * @Groups({"services"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cat_serv", type="integer")
     * @Expose
     * @Groups({"services"})
     */
    private $idCatServ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     * @Expose
     * @Groups({"services"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=50)
     * @Expose
     * @Groups({"services"})
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=150)
     * @Expose
     * @Groups({"services"})
     */
    private $description;

    /**
    *
    * Many services have one categorie
    * @ORM\ManyToOne(targetEntity="Categories", inversedBy="services")
    * @ORM\JoinColumn(name="id_cat_serv", referencedColumnName="id")
    * 
    * 
    * @Expose
    * @Groups({"services"})
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
     * Set idCatServ
     *
     * @param integer $idCatServ
     *
     * @return Services
     */
    public function setIdCatServ($idCatServ)
    {
        $this->idCatServ = $idCatServ;

        return $this;
    }

    /**
     * Get idCatServ
     *
     * @return int
     */
    public function getIdCatServ()
    {
        return $this->idCatServ;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Services
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
     * @return Services
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
     * Set description
     *
     * @param string $description
     *
     * @return Services
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

