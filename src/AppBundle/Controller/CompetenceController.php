<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Competences;

class CompetenceController extends FOSRestController
{
	/**
     * @Rest\View(serializerGroups={"competences"})
     * @Rest\Get("/competences")
     */
    public function getCompetnces()
    {
        $singleCompetence = $this->getDoctrine()->getRepository("AppBundle:Competences")->findAll();
        if($singleCompetence === null)
        {
            return new view("Competence not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleCompetence;
    }
    /**
     * @Rest\View(serializerGroups={"competences"})
     * @Rest\Get("/competences/{id}")
     */
    public function idCompetnces($id)
    {
        $Competence = $this->getDoctrine()->getRepository("AppBundle:Competences")->find($id);
        if($Competence === null)
        {
            return new view("Competence not found !", Response::HTTP_NOT_FOUND);
        }
        return $Competence;
    }
}
