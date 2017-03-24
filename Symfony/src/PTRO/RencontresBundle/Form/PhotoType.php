<?php

namespace PTRO\RencontresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class PhotoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', FileType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PTRO\RencontresBundle\Entity\Photo',//
        ));
    }
/*
    /**
     * {@inheritdoc}
     *//*
    public function getBlockPrefix()
    {
        return 'ptro_rencontresbundle_utilisateur';
    }
*/

}
