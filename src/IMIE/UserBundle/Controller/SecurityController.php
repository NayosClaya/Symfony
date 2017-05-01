<?php

namespace IMIE\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use IMIE\UserBundle\Entity\User;
/* -----------------form------------- */
use IMIE\UserBundle\Form\User1Type;

class SecurityController extends Controller{
	public function loginAction(){
		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMENBERED')){
			return $this->redirect($this->generateUrl('imie_homepage'));
		}
        $request = $this->getRequest();
        $session = $request->getSession();
        // On verifie s'il ya des erreurs d'une precedente soumission du formulaire
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('UserBundle:Security:login.html.twig', array(
            // Valeur du précedent nom d'utilisateur entré l'internaute 
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
	}
	public function ajoutUserAction($id, Request $request){
		 $em=$this->getDoctrine()->getManager();
		 $user=new User();
		 //$roles=array('ROLE_USER','ROLE_ADMIN','ROLE_IMIE');
		 /*$salt='';
		 $user->setSalt($salt); */
		 $form=$this->createForm(new User1Type(),$user);
		 //$request=$this->getRequest();
		 $form->handleRequest($request);
		 if($form->isValid()){
			$password=$form['password']->getData();
			$hierarchie=$form['hierarchie']->getData();
			$roles=$hierarchie->getHierarchie();

			$roles=explode(',',$roles);
			$encoder = $this->get('security.encoder_factory')
			->getEncoder($user);	
			$user->setPassword(
			   $encoder->encodePassword($password, $user->getSalt())
			);
			$user->setRoles($roles);
/* 			 $password=sha1($password);
			 $user->setPassword($password); */
			 $em->persist($user);
			 $em->flush();
			 return $this->redirect($this->generateUrl('user'));
		 }
		 return $this->render("UserBundle:Security:ajoutUser.html.twig", array(
			'form'=>$form->createView(),
		 ));
	}
}
