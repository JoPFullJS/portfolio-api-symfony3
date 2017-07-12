<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Travaux;

class TravauxController extends FOSRestController
{
	 /**
     * @Rest\View(serializerGroups={"travaux"})
     * @Rest\Get("/travaux")
     */
    public function getTravaux()
    {
        $singleTravaux = $this->getDoctrine()->getRepository("AppBundle:Travaux")->findAll();
        if($singleTravaux === null)
        {
            return new view("Travaux not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleTravaux;
    }
     /**
     * @Rest\View(serializerGroups={"travaux"})
     * @Rest\Get("/travaux/{slugTravx}")
     */
    public function idTravaux($slugTravx)
    {
        $Travaux = $this->getDoctrine()->getRepository("AppBundle:Travaux")->find($slugTravx);
        if($Travaux === null)
        {
            return new view("Travaux not found !", Response::HTTP_NOT_FOUND);
        }
        return $Travaux;
    }
    /**
     * @Rest\View(serializerGroups={"travaux"})
     * @Rest\Get("/competences/list/{idCompTravx}")
     */
    public function idTravauxCompetence($idCompTravx)
    {
        $travauxCompetence = $this->getDoctrine()->getRepository("AppBundle:Travaux")->findBy(['idCompTravx' => $idCompTravx]);
        if($travauxCompetence === null)
        {
            return new view("Travaux not found !", Response::HTTP_NOT_FOUND);
        }
        return $travauxCompetence;
    }
    /**
     * @Rest\View(serializerGroups={"travaux"})
     * @Rest\Get("/domaines/list/{idCatTravx}")
     */
    public function idTravauxDomaine($idCatTravx)
    {
        $travauxDomaine = $this->getDoctrine()->getRepository("AppBundle:Travaux")->findBy(['idCatTravx' => $idCatTravx]);
        if($travauxDomaine === null)
        {
            return new view("Travaux not found !", Response::HTTP_NOT_FOUND);
        }
        return $travauxDomaine;
    }
}
