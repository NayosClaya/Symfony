<?php

namespace IMIE\IMIEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IMIE\IMIEBundle\Entity\Article;
use IMIE\IMIEBundle\Entity\Produit;
use IMIE\IMIEBundle\Entity\PhotoIdentite;
use IMIE\IMIEBundle\Entity\Fournisseur;
//---------------------------
use IMIE\IMIEBundle\Form\ProduitType;
use IMIE\IMIEBundle\Form\PhotoIdentiteType;
use IMIE\IMIEBundle\Form\FournisseurType;
//-----------Extra--
//use IMIE\IMIEBundle\Extra\ExtraFonction;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IMIEBundle:Default:index.html.twig');
    }
    public function tableauAction()
    {
        return $this->render('IMIEBundle:Default:tableau.html.twig');
    }

    public function ajoutartAction(){
		$em=$this->getDoctrine()->getManager();
		$article=new Article();
		$formBuilder=$this->createFormBuilder($article);
		$formBuilder
		->add('code','text')
		->add('designation','text', array(
		 'required'=>true,
		))
		->add('categorie','entity', array(
		 'class'=>'IMIEBundle:Categorie',
		 'property'=>'libelle',
		 'multiple'=>false,
		 'empty_value'=>"Choisir une categorie",
		))
		->add('prixUnitaire','text');
		$form=$formBuilder->getForm();
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($article);
				$em->flush();
				return $this->redirect($this->generateUrl('article'));
			}

		}
		return $this->render('IMIEBundle:Default:ajoutart.html.twig', array(
			'form'=>$form->createView(),

		));
    }

	public function listartAction(){
		$em=$this->getDoctrine()->getManager();
		$articles=$em->getRepository("IMIEBundle:Article")->findAll();
		return $this->render("IMIEBundle:Default:listart.html.twig", array(
			'articles'=>$articles,
		));
	}

/* 	public function ajoutmodif_ancienne_Action($id){
		$em=$this->getDoctrine()->getManager();
		$article=$em->getRepository("IMIEBundle:Article")->find($id);
		if(!$article){
			$article=new Article();
		}
		$formBuilder=$this->createFormBuilder($article);
		$formBuilder
			->add('code','text')
			->add('designation','text')
			->add('prixUnitaire','text')
		;
		$form=$formBuilder->getForm();
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method=="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($article);
				$em->flush();
				return $this->redirect($this->generateUrl('imie_list_article'));
			}
		}
		return $this->render("IMIEBundle:Default:ajoutmodif2.html.twig", array(
			'form'=>$form->createView(),
		));
	} */
	public function suppArtAction($id){
		$em=$this->getDoctrine()->getManager();
		$article=$em->getRepository("IMIEBundle:Article")->find($id);

		$message="Article inexisant";
		$id=0;
		if ($article){
			$message="Article exuiste";
			$id=$article->getId();
		}
		$request=$this->getRequest();
		$method=$request->getMethod();

		if ($method=="POST"){

			if($id!=0){
				$em->remove($article);
				$em->persist($article);
				$em->flush();
			}
			return $this->redirect($this->generateUrl('imie_list_article'));
		}
		return $this->render("IMIEBundle:Default:suppArticle.html.twig", array(
			'article'=>$article,
			'id'=>$id,
			'message'=>$message,
		));
	}
/* 	public function ajoutmodifAction($id){
		$em=$this->getDoctrine()->getManager();
		$article=$em->getRepository("IMIEBundle:Article")->find($id);
		if(!$article){
			$article=new Article();
		}
		$formBuilder=$this->createFormBuilder($article);
		$formBuilder
			->add('code','text')
			->add('designation','text')
			->add('prixUnitaire','text')
			->add('categorie','entity', array(
				'class'=>"IMIEBundle:Categorie",
				'property'=>'libelle',
				'multiple'=>false,
				'empty_value'=>'Choisir la categorie'
			))
		;
		$form=$formBuilder->getForm();
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method=="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($article);
				$em->flush();
				return $this->redirect($this->generateUrl('imie_list_article'));
			}
		}
		return $this->render("IMIEBundle:Default:ajoutmodif2.html.twig", array(
			'form'=>$form->createView(),
		));
	} */
	public function ajoutmodifAction($id){
		$em=$this->getDoctrine()->getManager();
		$article=$em->getRepository("IMIEBundle:Article")->find($id);
		if(!$article){
			$article=new Article();
		}
		$formBuilder=$this->createFormBuilder($article);
		$formBuilder
			->add('code','text')
			->add('designation','text')
			->add('prixUnitaire','text')
			->add('categorie','entity', array(
				'class'=>"IMIEBundle:Categorie",
				'property'=>'libelle',
				'multiple'=>false,
				'empty_value'=>'Choisir la categorie'
			))
		;
		$form=$formBuilder->getForm();
		$request=$this->getRequest();
		$method=$request->getMethod();

		if($method=="POST"){
			$varForm=$request->request->get('form');
		     $codebarre=$request->request->get('codebarre');
			$code=$varForm['code'];
			$designation=$varForm['designation'];
			$prixUnitaire=$varForm['prixUnitaire'];
			$categorie_id=$varForm['categorie'];

			$categorie=$em->getRepository("IMIEBundle:Categorie")->find($categorie_id);
            $article->setCode($code);
			$article->setDesignation($designation);
			$article->setPrixUnitaire($prixUnitaire);
			$article->setCategorie($categorie);
			$em->persist($article);
			$em->flush();
			return $this->redirect($this->generateUrl('imie_list_article'));
		}
		return $this->render("IMIEBundle:Default:ajoutmodif2.html.twig", array(
			'form'=>$form->createView(),
		));
	}
	public function ajoutProduitAction($id){

		$em=$this->getDoctrine()->getManager();
		//$fct=new IMIEFonction();
		$fct=$this->get('imie.fct');
		$z=$fct->mutiplication(10,55);
		$jour=$fct->jour(new \DateTime());
/* 		echo $jour ;
		die; */

		$produit=$em->getREpository("IMIEBundle:Produit")->find($id);
		if(!$produit){
			$produit=new Produit();
		}
		$form=$this->createForm(new ProduitType(),$produit);
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method=="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($produit);
				$em->flush();
				return $this->redirect($this->generateUrl("imie_homepage"));
			}


		}
		return $this->render("IMIEBundle:Default:ajoutProduit.html.twig", array(
			"form"=>$form->createView(),
		));
	}
	public function renderAction(){
		$em=$this->getDoctrine()->getManager();
		$articles=$em->getRepository("IMIE\IMIEBundle\Entity\Article")->findBy(array(),array('id'=>"DESC"),3,0);
		return $this->render("IMIEBundle:Default:render.html.twig", array(
		 "articles"=>$articles,
		));

	}
	public function ajoutphotoAction($id){
		$em=$this->getDoctrine()->getManager();
		$photo=$em->getRepository("IMIEBundle:PhotoIdentite")->find($id);
		if(!$photo){
			$photo=new PhotoIdentite();
		}
		$form=$this->createForm(new PhotoIdentiteType(), $photo);
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method=="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($photo);
				$em->flush();
				return $this->redirect($this->generateUrl('imie_homepage'));
			}else{
				throw new \Exception("Formulaire non valide");
			}
		}
		return $this->render("IMIEBundle:Default:ajoutphoto.html.twig",array(
			'form'=>$form->createView(),
		));
	}
	public function ajoutfournisseurAction($id){
		$em=$this->getDoctrine()->getManager();
		$fournisseur=$em->getRepository("IMIEBundle:Fournisseur")->find($id);
		if(!$fournisseur){
			$fournisseur=new Fournisseur();
		}
/* 		//$extra=new ExtraFonction();
		$extra=$this->get('imie.extra');
		$date=new \DateTime();
		$z=$extra->jour($date);
		echo $z;
		die; */
		$form=$this->createForm(new FournisseurType(), $fournisseur);
		$request=$this->getRequest();
		$method=$request->getMethod();
		if($method=="POST"){
			$form->bind($request);
			if($form->isValid()){
				$em->persist($fournisseur);
				$em->flush();
				return $this->redirect($this->generateUrl('imie_homepage'));
			}
		}
		return $this->render("IMIEBundle:Default:ajoutfournisseur.html.twig",array(
			'form'=>$form->createView(),
			'fournisseur'=>$fournisseur,
		));
	}
	public function arrivageAction(){
		$em=$this->getDoctrine()->getManager();
		$articles=$em->getRepository("IMIEBundle:Article")
		->findBy(array(),array('id'=>'DESC'),3,0);
		return $this->render("IMIEBundle:Default:arrivage.html.twig", array(
			'articles'=>$articles,
		));
	}
  public function listCommandeAction()
  {
    $em=$this->getDoctrine()->getManager();
    $my_commandes = $em->getRepository("IMIEBundle:Commande")
    ->findBy(array(),array('id'=>'DESC'));
    $commandes = array();
    foreach ($my_commandes as $my_commande)
    {
    $montant = $this->getMontant($em,$my_commande);
    $client=$my_commande->getClient();
    $commandes[] = array(
      'commande_id'=>$my_commande->getId(),
      'numeroCommande'=>$my_commande->getNumeroCommande(),
      'dateCommande' =>$my_commande->getDateCommande(),
      'nom'=>$client->getNom(),
      'adresse'=>$client->getAdresse(),
      'montant'=>$montant,
    );
    }
    return $this->render("IMIEBundle:Default:listCommande.html.twig", array(
      'commandes'=>$commandes,
    ));
  }
  public function getMontant($em,$commande)
  {
    $montant = 0;
    $ligneCommandes = $em->getRepository("IMIEBundle:ligneCommande")->findBy(array('commande'=>$commande));

    foreach ($lignecommandes as $ligneCommande){
      $article=$ligneCommande->getArticle();
      $montant+=($ligneCommande->getQuantite()*$article->getPrixUnitaure());
    }
    return $montant;

  }
  public function ajoutLigneCommandeAction($commande_id, Request $request)
  {
    $em=$this->getDoctrine()->getManager();
    $commande = $em->getRepository("IMIEBundle:Commande")
    ->findBy($commande_id);
    $ligneCOmmande = new LigneCommande();
    $ligneCommande->setCommande($commande);
    $form = $this->createForm(new LigneCommandeType(),$ligneCommande);
    if ($form->isValid()){
      $article = $form['article']->getDate();
      $prixUnitaire = $article->getPrixUnitaire();
      $ligneCommande->setPrixUnitaire($prixUnitaire);
      $em->persist($ligneCommande);
      $em->flush();
      return $this->redirect($this->generateUrl('imie_list_commande'));

    }
    return $this->render("IMIEBundle:Default:ajoutLigneCommande.html.twig", array(
      'commande'=>$commande,
      'form'=>$form->createView(),
    ));
  }
}
