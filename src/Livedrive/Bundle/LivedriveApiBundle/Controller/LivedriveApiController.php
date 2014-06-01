<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Livedrive\Bundle\LivedriveApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Findx\Bundle\AddressBundle\Entity\Address;
//use Findx\Bundle\AddressBundle\Form\AddressType;


/**
 * LivedriveApi controller.
 *
 * @Route("/livedriveapi")
 */

class LivedriveApiController extends Controller{


    /**
     * Lists all Address entities.
     *
     * @Route("/", name="admin_address")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

//        $entities = $em->getRepository('LivedriveApiBundle:Address')->findAll();

        return array(
            'name' => "hi"
//            'entities' => $entities,
        );
    }
}