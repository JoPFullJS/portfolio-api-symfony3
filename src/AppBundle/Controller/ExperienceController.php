<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Experiences;

class ExperienceController extends FOSRestController
{
	/**
     * @Rest\View(serializerGroups={"experience"})
     * @Rest\Get("/experiences")
     */
    public function getExperiences()
    {
        $singleExperience = $this->getDoctrine()->getRepository("AppBundle:Experiences")->findAll();
        if($singleExperience === null)
        {
            return new view("Experience not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleExperience;
    }
}
