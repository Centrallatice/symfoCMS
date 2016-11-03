<?php

namespace PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ColType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreAdmin',TextType::class,array("label"=>"Titre administrateur","required"=>false))
                ->add('titreClient',TextType::class,array("label"=>"Titre d'entête","required"=>false))
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
                ->add('cssId',TextType::class,array("label"=>"Balise HTML 'id'","required"=>false))
                ->add('htmlContent','froala',array("height"=>350));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Col'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'pagebundle_col';
    }


}
