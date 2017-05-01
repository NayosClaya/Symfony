<?php

namespace IMIE\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use IMIE\UserBundle\Entity\Hierarchie;
use IMIE\UserBundle\Form\Hierarchie1Type;

/**
 * Hierarchie controller.
 *
 */
class HierarchieController extends Controller
{

    /**
     * Lists all Hierarchie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserBundle:Hierarchie')->findAll();

        return $this->render('UserBundle:Hierarchie:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hierarchie entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hierarchie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hierarchie_show', array('id' => $entity->getId())));
        }

        return $this->render('UserBundle:Hierarchie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hierarchie entity.
     *
     * @param Hierarchie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hierarchie $entity)
    {
        $form = $this->createForm(new HierarchieType(), $entity, array(
            'action' => $this->generateUrl('hierarchie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hierarchie entity.
     *
     */
    public function newAction()
    {
        $entity = new Hierarchie();
        $form   = $this->createCreateForm($entity);

        return $this->render('UserBundle:Hierarchie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hierarchie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Hierarchie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hierarchie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:Hierarchie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hierarchie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Hierarchie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hierarchie entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:Hierarchie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hierarchie entity.
    *
    * @param Hierarchie $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hierarchie $entity)
    {
        $form = $this->createForm(new HierarchieType(), $entity, array(
            'action' => $this->generateUrl('hierarchie_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hierarchie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:Hierarchie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hierarchie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hierarchie_edit', array('id' => $id)));
        }

        return $this->render('UserBundle:Hierarchie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hierarchie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UserBundle:Hierarchie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hierarchie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hierarchie'));
    }

    /**
     * Creates a form to delete a Hierarchie entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hierarchie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
	/* ---------------------------our actions------- */
	public function ajoutAction($id, Request $request){
		$em=$this->getDoctrine()->getManager();
		$hierarchie=$em->getRepository("UserBundle:Hierarchie")->find($id);
		if(!$hierarchie){
			$hierarchie=new Hierarchie();
		}
		$form=$this->createForm(new Hierarchie1Type(),$hierarchie);
		//$request=$this->getRequest();
		$form->handleRequest($request);
		if($form->isValid()){
			$em->persist($hierarchie);
			$em->flush();
			return $this->redirect($this->generateUrl('hierarchie'));
		}
		return $this->render("UserBundle:Hierarchie:ajout.html.twig",array(
			"form"=>$form->createView(),
		));
	}
}
