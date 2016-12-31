<?php

namespace ModuleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ModuleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->moduleService = $options['moduleService']->getModulesType();
        
        $choice = array();
        foreach($this->moduleService as $k=>$v):
            $choice[$k]=$this->moduleService[$k]['Nom'];
        endforeach;
        $builder->add('nom')->add('type', ChoiceType::class, 
            array(
                'choices' => $choice,
                'choice_attr' => function($value, $key, $index) use($options) {
//                    return ['data-desc' => $options['moduleType'][$index]['Description']];
                },
                'choice_label' => function ($value, $key, $index)  use($options){
//                    return $options['moduleType'][$index]['Nom'];
                },
                'label' => 'Type du module',
                'multiple' => false,
                'expanded' => false
            ));
        }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ModuleBundle\Entity\Module',
            'moduleService'=>null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'modulebundle_module';
    }


}
