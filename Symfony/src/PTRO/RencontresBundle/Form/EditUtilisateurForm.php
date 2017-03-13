<?php
namespace PTRO\RencontresBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use FOS\UserBundle\Util\LegacyFormHelper;

class EditUtilisateurForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        switch ($options['flow_step']) {
            case 1 :
                $builder
                    ->remove('email')
                    ->remove('username')
                    ->remove('plainPassword')
                    ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle','required' => false))
                    ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle','required' => false))
                ;
                break;
            case 2:
		        $builder
		            //->add('pseudo', TextType::class, array('required' => false))
		            //->add('password', PasswordType::class)
                    ->remove('email')
                    ->remove('username')
                    ->remove('plainPassword')
		            ->add('genre', EntityType::class, array('class' => 'PTRORencontresBundle:Genre', 'choice_label' => 'nom', 'placeholder' => '','required' => false))
		            ->add('relation', EntityType::class, array('class' => 'PTRORencontresBundle:Relation', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('orientation', EntityType::class, array('class' => 'PTRORencontresBundle:Orientation', 'choice_label' => 'nom','required' => false, 'empty_data'  => null, 'placeholder' => ''))
					->add('etatCivil', EntityType::class, array('class' => 'PTRORencontresBundle:EtatCivil', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('dateNaissance', DateTimeType::class, array('widget' => 'single_text','format' => 'dd/MM/yyyy','required' => false))
		            ->add('emploi', TextType::class,array('required' => false, 'empty_data'  => null))
		            ->add('departement', EntityType::class, array('class' => 'PTRORencontresBundle:Departement', 'choice_label' => 'nom','required' => false, 'empty_data'  => null, 'placeholder' => ''))
            		;
                break;
            case 3:
		        $builder
                    ->remove('email')
                    ->remove('username')
                    ->remove('plainPassword')
		            ->add('physique', EntityType::class, array('class' => 'PTRORencontresBundle:Physique', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
		            ->add('taille', IntegerType::class,array('required' => false))
		            ->add('poids', IntegerType::class,array('required' => false))
		            ->add('couleurYeux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurYeux', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
            		->add('couleurCheveux', EntityType::class, array('class' => 'PTRORencontresBundle:CouleurCheveux', 'choice_label' => 'nom','required' => false, 'empty_data'  => null))
	            	;
	            break;
            case 4:
		        $builder
                    ->remove('email')
                    ->remove('username')
                    ->remove('plainPassword')
		            ->add('hobbies', CollectionType::class, array(
		                'entry_type' => TextType::class,
                        'allow_add'    => true,
                        'required' => false,
                    ))
		            ->add('sports', CollectionType::class, array(
                        'entry_type'   => TextType::class,
                        'allow_add'    => true,
                        'required' => false,
                    ))
		            ->add('qualites', CollectionType::class, array(
                        'entry_type'   => TextType::class,
                        'allow_add'    => true,
                        'required' => false,
                    ))
		            ->add('defauts', CollectionType::class, array(
                        'entry_type'   => TextType::class,
                        'allow_add'    => true,
                        'required' => false,
                    ))
		            ->add('alcool', EntityType::class, array('class' => 'PTRORencontresBundle:Alcool', 'choice_label' => 'nom', 'expanded' => true, 'multiple' =>false,'required' => false, 'empty_data' => null, 'placeholder' => 'Ne se prononce pas'))
            		->add('cigarette', EntityType::class, array('class' => 'PTRORencontresBundle:Cigarette', 'choice_label' => 'nom', 'expanded' => true, 'multiple' =>false,'required' => false, 'empty_data' => null, 'placeholder' => 'Ne se prononce pas'))
            		;
                break;
            case 5:
		        $builder
                    ->remove('email')
                    ->remove('username')
                    ->remove('plainPassword')
		            ->add('titre', TextType::class, array('required' => false))
		            ->add('description', CKEditorType::class, array(
		                'required' => false, 'config' => array(
                        'uiColor' => '#ffffff', 'toolbar' => 'standard',
                        ),
                        ))
		            ;
                break;
        }
    }
/*
    public function getBlockPrefix() {
        return 'CreateUtilisateur';
    }*/

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_edit';
    }
/*
    public function getName()
    {
        return 'app_user_registration';
    }*/

}