<?php

namespace CategoryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
class CategoryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder->add('nom',TextType::class,array("label"=>"Nom de la catégorie"))
                ->add('categoryParente',EntityType::class,array(
                    "label"=>"Catégorie Parente",
                    "class" => "CategoryBundle:Category",
                    'choice_label' => 'nom',
                    'placeholder' => '-- Catégorie Principale --',
                    'empty_data'  => null,
                    'required' => false,
                    'query_builder' => function (EntityRepository $er) use($options){
                        return $er->createQueryBuilder('C')
                            ->where('C.type = :type')
                            ->andWhere('C.id != :id')
                                ->setParameter("type",$options['type'])
                                ->setParameter("id",$options['notId']);
                    },
                ))
                ->add('isActive','choice', 
                        array(
                            "label"=>"État de la catégorie",
                            'choices' => array(
                            true => "Publier",
                            false => "Dépublier"
                )));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CategoryBundle\Entity\Category',
            'type' => null,
            'notId' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'articlebundle_category';
    }


}
