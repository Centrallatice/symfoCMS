<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RowType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreAdmin',TextType::class,array("label"=>"Titre administrateur","required"=>false))
                ->add('titreClient',TextType::class,array("label"=>"Titre d'entête","required"=>false))
                ->add('disposition',EntityType::class,array(
                    "label"=>"Disposition",
                    "class" => "PageBundle:DispositionRow",
                    'choice_label' => 'description'))
                ->add('page',EntityType::class,array(
                    "class" => "PageBundle:Page",
                    "attr" => array("class"=>"hide"),
                    'choice_label' => 'id'))
                ->add('enteteType', 'choice', 
                        array('choices' => array(
                            1 => "H1",
                            2 => "H2",
                            3 => "H3",
                            4 => "H4",
                            5 => "H5",
                            6 => "H6",
                        ),
                        'label' => 'Balise du titre',
                        'multiple' => false,
                        'expanded' => false))
                ->add('cssClass',TextType::class,array("label"=>"Balise HTML 'class'","required"=>false))
                ->add('cssId',TextType::class,array("label"=>"Balise HTML 'id'","required"=>false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Row'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pagebundle_row';
    }
}
