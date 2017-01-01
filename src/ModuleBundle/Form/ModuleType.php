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
            $choice[$this->moduleService[$k]['id']]=$this->moduleService[$k]['Nom'];
        endforeach;
       
        $builder->add('type', ChoiceType::class, 
            array(
                'choices' => $choice,
                'choice_attr' => function($value, $key, $index) use($options) {
                    $datas = $options['moduleService']->getModulesType();
                    return ['data-desc' => $datas[$index]['Description']];
                },
                'choice_label' => function ($value, $key, $index)  use($options){
                    $datas = $options['moduleService']->getModulesType();
                    return $datas[$index]['Nom'];
                },
                'label' => 'Type du module',
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
            'data_class' => null,
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
