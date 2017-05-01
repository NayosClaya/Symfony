<?php

namespace IMIE\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class User1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password','password')
            ->add('email')
            ->add('isActive')
			->add('hierarchie','entity',array(
				'class'=>'UserBundle:Hierarchie',
				'property'=>'role',
				'multiple'=>false,
				'empty_value'=>'',
				'required'=>false,
				'attr'=>array(
				   'class'=>'form-control input-md',
				
				)
			))
			->add('submit','submit', array(
			   'label'=>'Valider',
			   'attr' =>array('class'=>'btn btn-primary btn-lg pull-right')
			))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IMIE\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_userbundle_user1';
    }
}
