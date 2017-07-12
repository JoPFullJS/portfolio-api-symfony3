<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Interventions;


class InterventionController extends FOSRestController
{
	 /**
     * @Rest\View(serializerGroups={"interventions"})
     * @Rest\Get("/interventions")
     */
    public function getInterventions()
    {
        $singleInterventions = $this->getDoctrine()->getRepository("AppBundle:Interventions")->findAll();
        if($singleInterventions === null)
        {
            return new view("Interventions not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleInterventions;
    }
	/** 
     * @Rest\View(serializerGroups={"interventions"})
     * @Rest\Get("/interventions/{id}")
     */
    public function idInterventions($id)
    {
        $Interventions = $this->getDoctrine()->getRepository("AppBundle:Interventions")->find($id);
        if($Interventions === null)
        {
            return new view("Intervention not found !", Response::HTTP_NOT_FOUND);
        }
        return $Interventions;
    }
}
