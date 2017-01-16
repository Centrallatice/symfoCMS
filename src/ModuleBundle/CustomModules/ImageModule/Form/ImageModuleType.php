<?php

namespace ModuleBundle\CustomModules\ImageModule\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichFileType;

class ImageModuleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('description',TextType::class,array("label"=>"Description"))
                ->add('alt', TextType::class,array("label"=>"Texte de remplacement"))
                ->add('title', TextType::class,array("label"=>"Titre"))
                ->add('imageFile', VichFileType::class, [
                        'required' => true,
                        'allow_delete' => true,
                        'download_link' => true,
                        "label"=>"Image"
                ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ModuleBundle\CustomModules\ImageModule\Entity\ImageModule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'modulebundle_imagemodule';
    }


}
