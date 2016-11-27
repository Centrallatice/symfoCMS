<?php

namespace ModuleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->moduleType = $options['moduleType'];
        $this->moduleType = $options['moduleType'];
        $choice = array();
        foreach($this->moduleType as $k=>$v):
            $choice[$k]=$this->moduleType[$k]['Nom'];
        endforeach;
        $builder->add('type', 'choice', 
            array(
                'choices' => $choice,
                'choice_attr' => function($value, $key, $index) use($options) {
                    return ['data-desc' => $options['moduleType'][$index]['Description']];
                },
                'choice_label' => function ($value, $key, $index)  use($options){
                    return $options['moduleType'][$index]['Nom']." - ".$options['moduleType'][$index]['Description'];
                },
                'label' => false,
                'multiple' => false,
                'expanded' => true
            ));
        }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ModuleBundle\Entity\Module',
            'moduleType'=>null
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
