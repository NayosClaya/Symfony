<?php

namespace IMIE\IMIEBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use IMIE\IMIEBundle\Entity\LigneCommande;
use IMIE\IMIEBundle\Form\LigneCommandeType;

/**
 * LigneCommande controller.
 *
 */
class LigneCommandeController extends Controller
{

    /**
     * Lists all LigneCommande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IMIEBundle:LigneCommande')->findAll();

        return $this->render('IMIEBundle:LigneCommande:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new LigneCommande entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new LigneCommande();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lignecommande_show', array('id' => $entity->getId())));
        }

        return $this->render('IMIEBundle:LigneCommande:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a LigneCommande entity.
     *
     * @param LigneCommande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(LigneCommande $entity)
    {
        $form = $this->createForm(new LigneCommandeType(), $entity, array(
            'action' => $this->generateUrl('lignecommande_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new LigneCommande entity.
     *
     */
    public function newAction()
    {
        $entity = new LigneCommande();
        $form   = $this->createCreateForm($entity);

        return $this->render('IMIEBundle:LigneCommande:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a LigneCommande entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IMIEBundle:LigneCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LigneCommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IMIEBundle:LigneCommande:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing LigneCommande entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IMIEBundle:LigneCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LigneCommande entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IMIEBundle:LigneCommande:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a LigneCommande entity.
    *
    * @param LigneCommande $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(LigneCommande $entity)
    {
        $form = $this->createForm(new LigneCommandeType(), $entity, array(
            'action' => $this->generateUrl('lignecommande_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing LigneCommande entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IMIEBundle:LigneCommande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find LigneCommande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lignecommande_edit', array('id' => $id)));
        }

        return $this->render('IMIEBundle:LigneCommande:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a LigneCommande entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IMIEBundle:LigneCommande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find LigneCommande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lignecommande'));
    }

    /**
     * Creates a form to delete a LigneCommande entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lignecommande_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
