<?php

namespace CleanWater\MapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MapController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('CleanWaterMapBundle:Map:index.html.twig');

    }
    public function aproposAction()
    {
        
        return $this->render('CleanWaterMapBundle:Map:apropos.html.twig');

    }
    
    public function listeCommentairesAction() {
        $em = $this->getDoctrine()
                ->getManager();

        $commentaires = $em->getRepository('CleanWaterMapBundle:Commentaire')
                ->findAll();

        return $this->render('CleanWaterMapBundle:Map:listeCommentaires.html.twig', array(
                    'commentaires' => $commentaires,
        ));
    }
}

