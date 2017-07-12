<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Services;


class ServiceController extends FOSRestController
{
	/**
     * @Rest\View(serializerGroups={"services"})
     * @Rest\Get("/services")
     */
    public function getServices()
    {
        $singleServices = $this->getDoctrine()->getRepository("AppBundle:Services")->findAll();
        if($singleServices === null)
        {
            return new view("Services not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleServices;
    }
}
