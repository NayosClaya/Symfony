<?php

namespace IMIE\IMIEBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroCommande')
            ->add('dateCommande','date')
            ->add('client','entity', array(
				'class'=>'IMIEBundle:Client',
				'property'=>'nom',
				'multiple'=>false,
				'empty_value'=>'Choisir le Client',
				'required'=>true
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IMIE\IMIEBundle\Entity\Commande'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_imiebundle_commande';
    }
}
