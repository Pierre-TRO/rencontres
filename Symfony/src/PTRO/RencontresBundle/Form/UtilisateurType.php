<?php

namespace PTRO\RencontresBundle\Form;

//use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class UtilisateurType extends AbstractType
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
            ->add('genre', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Genre', 'choice_label' => 'nom'))
            ->add('etatCivil', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:EtatCivil', 'choice_label' => 'nom'))
            ->add('relation', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Relation', 'choice_label' => 'nom'))
            ->add('departement', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Departement', 'choice_label' => 'nom'))
            ->add('orientation', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Orientation', 'choice_label' => 'nom'))
            ->add('physique', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Physique', 'choice_label' => 'nom'))
            ->add('cigarette', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Cigarette', 'choice_label' => 'nom'))
            ->add('couleurYeux', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:CouleurYeux', 'choice_label' => 'nom'))
            ->add('couleurCheveux', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:CouleurCheveux', 'choice_label' => 'nom'))
            ->add('alcool', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array('class' => 'PTRORencontresBundle:Alcool', 'choice_label' => 'nom'))
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
