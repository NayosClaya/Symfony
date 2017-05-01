<?php

namespace IMIE\IMIEBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FournisseurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('photoIdentite','entity',array(
				'class'=>'IMIEBundle:PhotoIdentite',
				'property'=>'url',
				'required'=>false,
				'empty_value'=>'Choisir URL',
				'multiple'=>false,
			
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IMIE\IMIEBundle\Entity\Fournisseur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_imiebundle_fournisseur';
    }
}
