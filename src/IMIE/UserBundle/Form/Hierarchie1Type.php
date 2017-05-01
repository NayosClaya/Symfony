<?php

namespace IMIE\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hierarchie1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('role','text', array(
				'attr'=>array(
				   'class'=>'form-control input-md',
				)
			))
            ->add('hierarchie','textarea', array(
				'attr'=>array(
				   'class'=>'form-control input-md',
				)
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IMIE\UserBundle\Entity\Hierarchie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_userbundle_hierarchie1';
    }
}
