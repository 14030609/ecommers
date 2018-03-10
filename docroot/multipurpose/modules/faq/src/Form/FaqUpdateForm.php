<?php

namespace Drupal\faq\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\Html;
use Drupal\faq\Dao\FaqDao;

class FaqUpdateForm extends FormBase
{

	protected $id;

	function getFormID() {
		return 'bd_faq_update';
	}

	function buildForm(array $form, FormStateInterface $form_state, $id = '') {
		$this->id = $id;
		$pregunta = db_query("SELECT * FROM {faq} WHERE id = :id", array(':id' => $id))->fetchObject();
		$form['question'] = array(
		  '#type' => 'textfield',
		  '#title' => t('Question'),
		  '#default_value' => $pregunta->question,
		);
		$form['answare'] = array(
		  '#type' => 'textarea',
		  '#title' => t('Message'),
		  '#default_value' => $pregunta->answare,
		);
		$form['actions'] = array('#type' => 'actions');
		$form['actions']['submit'] = array(
		  '#type' => 'submit',
		  '#value' => t('Guardar'),
		);
		return $form;
	}

	function validateForm(array &$form, FormStateInterface $form_state) {

	    if (strlen($form_state->getValue('question')) <= 0) {
            $form_state->setErrorByName('question', $this->t('Please enter question'));
        }
        if (strlen($form_state->getValue('answare')) <= 0) {
            $form_state->setErrorByName('answare', $this->t('Please enter answare'));
        }

    }

	function submitForm(array &$form, FormStateInterface $form_state) {
		$question = $form_state->getValue('question');
		$answare = $form_state->getValue('answare');
		FaqDao::update($this->id, Html::escape($question), Html::escape($answare));

		drupal_set_message(t('Tu pregunta ha sido actualizada.'));
		$form_state->setRedirect('faqList');
		return;
	}
}