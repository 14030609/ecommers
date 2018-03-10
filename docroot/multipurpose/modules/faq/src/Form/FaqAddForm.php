<?php

namespace Drupal\faq\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\faq\Dao\FaqDao;

class FaqAddForm extends FormBase
{

	function getFormID() {
		return 'bd_faq_add2';
	}

	function buildForm(array $form, FormStateInterface $form_state, $extra=null) {
		$form['question'] = array(
		  '#type' => 'textfield',
		  '#title' => t('Question'),
		  //'#value' => $extra,
		);
		$form['answare'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Message'),
		);
		$form['actions'] = array('#type' => 'actions');
		$form['actions']['submit'] = array(
		  '#type' => 'submit',
		  '#value' => t('Agregar'),
		);
		$form['actions']['cancel'] = array(
		  '#type' => 'submit',
		  '#value' => t('Cancel'),
		);
		return $form;
	}

	function validateForm(array &$form, FormStateInterface $form_state) {

        $input = $form_state->getUserInput();

        if (isset($input['op']) && $input['op'] === 'Cancel') {
            return;
        }

        if (strlen($form_state->getValue('question')) <= 0) {
            $form_state->setErrorByName('question', $this->t('Please enter question'));
        }
        if (strlen($form_state->getValue('answare')) <= 0) {
            $form_state->setErrorByName('answare', $this->t('Please enter answare'));
        }

	}

	function submitForm(array &$form, FormStateInterface $form_state) {

        $input = $form_state->getUserInput();

        if (isset($input['op']) && $input['op'] === 'Cancel') {
            $form_state->setRedirect('faqList');
            return;
        }

		$question = $form_state->getValue('question');
		$answare = $form_state->getValue('answare');
		FaqDao::add(Html::escape($question), Html::escape($answare));

		drupal_set_message(t('Tu pregunta ha sido agregada.'));
		$form_state->setRedirect('faqList');
		return;
	}
}