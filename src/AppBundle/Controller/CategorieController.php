<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\CategoriesType;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Categories;
use AppBundle\Entity\Competences;

class CategorieController extends FOSRestController
{
	 /**
     * @Rest\View(serializerGroups={"List"})
     * @Rest\Get("/categorie")
     */
    public function getCategories()
    {
        $singleCategorie = $this->getDoctrine()->getRepository("AppBundle:Categories")->findAll();
        if($singleCategorie === null)
        {
            return new view("Categorie not found !", Response::HTTP_NOT_FOUND);
        }
        return $singleCategorie;
    }
    /**
     * @Rest\View(serializerGroups={"List"})
     * @Rest\Get("/domaine/{id}")
     */
    public function idCategories($id)
    {
        $Categorie = $this->getDoctrine()->getRepository("AppBundle:Categories")->find($id);
        if($Categorie === null)
        {
            return new view("Categorie not found !", Response::HTTP_NOT_FOUND);
        }
        return $Categorie;
    }

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/domaine/{postId}/new")
     * @ParamConverter("competence", options={"mapping": {"postId": "idCatCompet"}})
     */
    public function postCategorie(Request $request, Competences $competence)
    {

        $categories = new Categories();
        $nom = $request->get("nom");
        $slug = $request->get("slug");
        $titre = $request->get("titre");
        $description = $request->get("description");

        //si certainevaleur son vide on revoie une reponse Response::HTTP_NOT_ACCEPTABLE
        if(empty($nom) || empty($slug) || empty($titre) || empty($description))
         {
           return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
         } 

        $categories->setNom($nom); 
        $categories->setSlug($slug); 
        $categories->setTitre($titre); 
        $categories->setDescription($description); 
        $competence->setCategories($categories);

        $form = $this->createForm(CategoriesType::class, $categories);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categories);
            $em->flush();
            return $categorie;
        } else {
            return $form;
        }
    }
    
}
