<?php

namespace PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ColType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->moduleService = $options['moduleService']->getModulesType();
        $choices = array();
        foreach($this->moduleService as $k=>$v):
            $choices[$this->moduleService[$k]['id']]=$this->moduleService[$k]['Nom'];
        endforeach;
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
                ->add('cssClassPerso',TextType::class,array("label"=>"Balise HTML 'class'","required"=>false))
                ->add('cssId',TextType::class,array("label"=>"Balise HTML 'id'","required"=>false))
                ->add('typemodule', ChoiceType::class,
                        array(
                            'choices' => $choices,
                            'label' => 'Type du module',
                            'choice_attr' => function($value, $key, $index) use($options) {
                                $datas = $options['moduleService']->getModulesType();
                                return ['data-desc' => $datas[$index]['Description']];
                            },
                            'choice_label' => function ($value, $key, $index)  use($options){
                                $datas = $options['moduleService']->getModulesType();
                                return $datas[$index]['Nom'];
                            },
                            'multiple' => false,
                            'mapped' => false,
                            'expanded' => false
                       ))
                ->add('modules',ChoiceType::class,
                        array(
                            "label"=>"Quel module souhaitez vous accrocher",
                            "choices"=>array(),
                            'multiple' => false,
                            'mapped' => false,
                            'expanded' => false
                 ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PageBundle\Entity\Col',
            "moduleService"=>null
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
