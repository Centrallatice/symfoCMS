<?php

namespace PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class PageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                ->add('description')
                ->add('isHomepage',CheckboxType::class,
                        array(
                            "required"=>false,
                            "label"=>"Cette page est la page d'accueil du site"
                     ))
                ->add('category',EntityType::class,array(
                    "label"=>"Catégorie",
                    'required'    => false,
                    'placeholder' => '-- Aucune catégorie --',
                    'empty_data'  => null,
                    'empty_value'  => "",
                    "class" => "CategoryBundle:Category",
                    'choice_label' => 'nom'
                 ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Page'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pagebundle_page';
    }


}
