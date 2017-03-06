<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Member;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        echo phpinfo();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }


    /**
     * @Route("/about/{name}", name="aboutpage", defaults={"name":null})
     */
    public function aboutAction($name)
    {

        if($name){
            $user = $this->getDoctrine()->getRepository('AppBundle:Member')->findOneBy(array('name'=>$name));
            if (false === $user instanceof Member) {
                throw $this->createNotFoundException('No user named '.$name.' found!');
            }
        }
        return $this->render('about/index.html.twig', array('user' => $user));
    }
}
