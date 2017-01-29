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
		            ->add('genre', EntityType::class, array('class' => 'PTRORencontresBundle:Genre', 'choice_label' => 'nom'))
		            ->add('relation', EntityType::class, array('class' => 'PTRORencontresBundle:Relation', 'choice_label' => 'nom'))
		            ->add('orientation', EntityType::class, array('class' => 'PTRORencontresBundle:Orientation', 'choice_label' => 'nom'))
					->add('etatCivil', EntityType::class, array('class' => 'PTRORencontresBundle:EtatCivil', 'choice_label' => 'nom'))
		            ->add('dateNaissance', DateTimeType::class, array('widget' => 'single_text','format' => 'dd-MM-yyyy',))
		            ->add('emploi', TextType::class)
		            ->add('departement', EntityType::class, array('class' => 'PTRORencontresBundle:Departement', 'choice_label' => 'nom'))
            		;
                break;
            case 2:
		        $builder
		            ->add('physique', EntityType::class, array('class' => 'PTRORencontresBundle:Physique', 'choice_label' => 'nom'))
		            ->add('taille', IntegerType::class)
		            ->add('poids', IntegerType::class)
		            ->add('couleurYeux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurYeux', 'choice_label' => 'nom'))
            		->add('couleurCheveux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurCheveux', 'choice_label' => 'nom'))
	            	;
	            break;
            case 3:
		        $builder
		            ->add('hobbies', CollectionType::class)
		            ->add('sports', CollectionType::class)
		            ->add('qualites', CollectionType::class)
		            ->add('defauts', CollectionType::class)
		            ->add('alcool', EntityType::class, array('class' => 'PTRORencontresBundle:Alcool', 'choice_label' => 'nom'))
            		->add('cigarette', EntityType::class, array('class' => 'PTRORencontresBundle:Cigarette', 'choice_label' => 'nom'))
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