<?php

namespace Drupal\faq\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Url;
use Drupal\Core\Form\FormStateInterface;
use Drupal\faq\Dao\FaqDao;

class FaqDeleteForm extends ConfirmFormBase {

  protected $id;

  function getFormID() {
    return 'bd_faq_delete';
  }

  function getQuestion() {
    return t('¿Seguro de querer eliminar registro con id %id?', array('%id' => $this->id));
  }

  function getConfirmText() {
    return t('Eliminar');
  }

  function getCancelUrl() {
    return new Url('faqList');
  }

  function buildForm(array $form, FormStateInterface $form_state, $id = '') {
    $this->id = $id;
    $pregunta = db_query("SELECT * FROM {faq} WHERE id = :id", array(':id' => $id))->fetchObject();
    $form['question'] = array(
      '#type' => 'textfield',
      '#title' => t('Pregunta'),
      '#attributes' => array('readonly' => 'readonly'),
      '#default_value' => $pregunta->question,
    );
    $form['answare'] = array(
      '#type' => 'textarea',
      '#title' => t('Respuesta'),
      '#attributes' => array('readonly' => 'readonly'),
      '#default_value' => $pregunta->answare,
    );
    /*$form['actions'] = array('#type' => 'actions');
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Eliminar'),
    );*/
    return parent::buildForm($form, $form_state);
    //return $form;
  }

  function submitForm(array &$form, FormStateInterface $form_state) {
    FaqDao::delete($this->id);
    drupal_set_message(t('Registro con id %id ha sido eliminado.', array('%id' => $this->id)));
    $form_state->setRedirect('faqList');
  }
}