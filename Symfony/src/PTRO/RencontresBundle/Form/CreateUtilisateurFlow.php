<?php
namespace PTRO\RencontresBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;

class CreateUtilisateurFlow extends FormFlow {

    protected $allowDynamicStepNavigation = true;

    protected function loadStepsConfig() {
        return array(
            array(
                'label' => 'Informations d\'authentification',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
                'form_options' => array(
                    'validation_groups' => array('Registration'),
                )
            ),
            array(
                'label' => 'Informations générales',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
                'form_options' => array(
                    'validation_groups' => array('Registration2'),
                )
            ),
            array(
                'label' => 'Informations physique',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
                'form_options' => array(
                    'validation_groups' => array('Registration3'),
                )
            ),
            array(
                'label' => 'Style de vie',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
                //'form_options' => array(
                //    'validation_groups' => array('Registration4'),
                //)
            ),
            array(
                'label' => 'Presentez-vous',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
                'form_options' => array(
                    'validation_groups' => array('Registration5'),
                )
            ),
        );
    }

}