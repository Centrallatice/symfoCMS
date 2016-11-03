<?php

namespace ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
                ->add('etat', 'choice', 
                        array('choices' => array(
                            true => "Publier",
                            false => "Dépublier"
                ),
                'label' => 'Publier ou dépublier à la sauvegarde ?',
                'multiple' => false,
                'expanded' => false))
                ->add('category',EntityType::class,array(
                    "label"=>"Catégorie",
                    'required'    => false,
                    'placeholder' => '-- Non catégoriser --',
                    'empty_data'  => null,
                    'empty_value'  => "",
                    "class" => "ArticleBundle:Category",
                    'choice_label' => 'nom'
                 ))
                ->add('resume',TextareaType::class,array(
                    "label"=>"Résumé de l'article",
                    "attr"=>array("rows"=>6)
                 ))
                ->add('contenu',TextareaType::class,array("label"=>"Contenu de l'article"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ArticleBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'articlebundle_article';
    }


}
