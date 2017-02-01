<?php
namespace PTRO\RencontresBundle\Form;

use Craue\FormFlowBundle\Form\FormFlow;
use Craue\FormFlowBundle\Form\FormFlowInterface;

class CreateUtilisateurFlow extends FormFlow {

    protected $allowDynamicStepNavigation = true;

    protected function loadStepsConfig() {
        return array(
            array(
                'label' => 'Informations générales',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
            ),
            array(
                'label' => 'Informations physique',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
            ),
            array(
                'label' => 'Style de vie',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
            ),
            array(
                'label' => 'Presentez-vous',
                'form_type' => 'PTRO\RencontresBundle\Form\CreateUtilisateurForm',
            ),
        );
    }

}