<?php

namespace PTRO\RencontresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;


class UtilisateurInscription1Type extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class)
            ->add('password', PasswordType::class)
            ->add('dateNaissance', DateTimeType::class, array('widget' => 'single_text','format' => 'dd-MM-yyyy',))
            ->add('emploi', TextType::class)
            ->add('taille', IntegerType::class)
            ->add('poids', IntegerType::class)
            ->add('hobbies', CollectionType::class)
            ->add('sports', CollectionType::class)
            ->add('qualites', CollectionType::class)
            ->add('defauts', CollectionType::class)
            ->add('titre', TextType::class)
            ->add('description', TextType::class)
            ->add('genre', EntityType::class, array('class' => 'PTRORencontresBundle:Genre', 'choice_label' => 'nom'))
            ->add('etatCivil', EntityType::class, array('class' => 'PTRORencontresBundle:EtatCivil', 'choice_label' => 'nom'))
            ->add('relation', EntityType::class, array('class' => 'PTRORencontresBundle:Relation', 'choice_label' => 'nom'))
            ->add('departement', EntityType::class, array('class' => 'PTRORencontresBundle:Departement', 'choice_label' => 'nom'))
            ->add('orientation', EntityType::class, array('class' => 'PTRORencontresBundle:Orientation', 'choice_label' => 'nom'))
            ->add('physique', EntityType::class, array('class' => 'PTRORencontresBundle:Physique', 'choice_label' => 'nom'))
            ->add('cigarette', EntityType::class, array('class' => 'PTRORencontresBundle:Cigarette', 'choice_label' => 'nom'))
            ->add('couleurYeux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurYeux', 'choice_label' => 'nom'))
            ->add('couleurCheveux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurCheveux', 'choice_label' => 'nom'))
            ->add('alcool', EntityType::class, array('class' => 'PTRORencontresBundle:Alcool', 'choice_label' => 'nom'))
            ->add('save', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PTRO\RencontresBundle\Entity\Utilisateur',
            'validation_groups' => array('inscription_etape_1'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ptro_rencontresbundle_utilisateur';
    }


}
