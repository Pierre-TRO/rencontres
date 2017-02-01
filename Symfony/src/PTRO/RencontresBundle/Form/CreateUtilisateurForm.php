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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CreateUtilisateurForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        switch ($options['flow_step']) {
            case 1:
		        $builder
		            ->add('pseudo', TextType::class)
		            ->add('password', PasswordType::class)
		            ->add('genre', EntityType::class, array('class' => 'PTRORencontresBundle:Genre', 'choice_label' => 'nom', 'placeholder' => ''))
		            ->add('relation', EntityType::class, array('class' => 'PTRORencontresBundle:Relation', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('orientation', EntityType::class, array('class' => 'PTRORencontresBundle:Orientation', 'choice_label' => 'nom','required' => true, 'empty_data'  => null, 'placeholder' => ''))
					->add('etatCivil', EntityType::class, array('class' => 'PTRORencontresBundle:EtatCivil', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('dateNaissance', DateTimeType::class, array('widget' => 'single_text','format' => 'dd-MM-yyyy','required' => false))
		            ->add('emploi', TextType::class,array('required' => false, 'empty_data'  => null))
		            ->add('departement', EntityType::class, array('class' => 'PTRORencontresBundle:Departement', 'choice_label' => 'nom','required' => true, 'empty_data'  => null, 'placeholder' => ''))
            		;
                break;
            case 2:
		        $builder
		            ->add('physique', EntityType::class, array('class' => 'PTRORencontresBundle:Physique', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('taille', IntegerType::class,array('data' => 175, 'required' => false))
		            ->add('poids', IntegerType::class,array('data' => 70, 'required' => false))
		            ->add('couleurYeux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurYeux', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
            		->add('couleurCheveux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurCheveux', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
	            	;
	            break;
            case 3:
		        $builder
		            ->add('hobbies', CollectionType::class)
		            ->add('sports', CollectionType::class)
		            ->add('qualites', CollectionType::class)
		            ->add('defauts', CollectionType::class)
		            ->add('alcool', EntityType::class, array('class' => 'PTRORencontresBundle:Alcool', 'choice_label' => 'nom', 'expanded' => true, 'multiple' =>false,'required' => false))
            		->add('cigarette', EntityType::class, array('class' => 'PTRORencontresBundle:Cigarette', 'choice_label' => 'nom', 'expanded' => true, 'multiple' =>false,'required' => false))
            		;
                break;
            case 4:
		        $builder
		            ->add('titre', TextType::class)
		            ->add('description', TextType::class)
		            ;
                break;
        }
    }

    public function getBlockPrefix() {
        return 'CreateUtilisateur';
    }

}