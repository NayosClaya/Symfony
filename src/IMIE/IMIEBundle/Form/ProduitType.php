<?php

namespace IMIE\IMIEBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use IMIE\IMIEBundle\Form\CategorieType;

class ProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('designation')
			->add('photo','entity',array(
				'class'=>'IMIE\IMIEBundle\Entity\Photo',
				'property'=>'url',
				'multiple'=>false,
			))
/* 			->add('categories','collection', array(
				'type'=>new CategorieType(),
				'allow_add'=>true,
				'allow_delete'=>true,
			)) */
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IMIE\IMIEBundle\Entity\Produit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'imie_imiebundle_produit';
    }
}
