<?php

namespace Drupal\faq\Controller;

use Drupal\faq\Dao\FaqDao;
use Drupal\Core\Url;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Link;
use Drupal\Core\Render\RendererInterface;

class FaqController extends ControllerBase
{

  public function add()
  {
    $extra = '612-123-4567';
    $form = \Drupal::formBuilder()->getForm('Drupal\faq\Form\FaqAddForm', $extra);
    return array(
      '#title'   => 'FAQ',
      '#type'    => 'markup',
      '#markup'  => RendererInterface::render($form),
    );

  }


  public function lista()
  {
    //$link = Link::fromTextAndUrl('Nuevo', Url::fromRoute('/faq/add'));
    $new_link = "";
    if(\Drupal::currentUser()->hasPermission('faq add')
) {
      $url = Url::fromRoute('faqAdd');
      $link_options = array(
        'attributes' => array(
            'class' => array(
                'btn',
                'btn-primary',
            ),
        ),
      );
      $url->setOptions($link_options);
      $new_link = Link::fromTextAndUrl(t('Nuevo'), $url);

    }

    $header = array(
      'id' => t('Id'),
      'pregunta' => t('Pregunta'),
      'respuesta' => t('Respuesta'),
      'eliminar' => t('Eliminar'),
      'actualizar' => t('Actualizar'),
    );
    
    $rows = array();
    
    foreach(FaqDao::getAll() as $id=> $content) {
      $url = Url::fromRoute('faqDelete', ['id' => $content->id]);
      $delete_link = \Drupal::l(t('Eliminar'), $url);
      $url = Url::fromRoute('faqUpdate', ['id' => $content->id]);
      $update_link = \Drupal::l(t('Modificar'), $url);
      $rows[] = array(
        'data' => array($id, $content->question, $content->answare, $delete_link, $update_link)
      );
    }


    $table = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#attributes' => array(
        'id' => 'bd-faq-table',
      ),
    );

    return array(
      '#title'   => 'FAQ',
      '#theme'    => 'faq_list',
      '#new_faq'  => $new_link,
      '#tabla_lista' => \Drupal::service('renderer')->render($table),
    );
  }

  public function lista2()
  {
    //$link = Link::fromTextAndUrl('Nuevo', Url::fromRoute('/faq/add'));
    $new_link = "";
    if(\Drupal::currentUser()->hasPermission('faq add')
) {
      $url = Url::fromRoute('faqAdd');
      $new_link = \Drupal::l(t('Nuevo'), $url);
    }
    
    //$data = FaqDao::getAll();
    //$data = db_query('select * from {faq}')->fetchAll();
    $conn = Database::getConnection();
    $data = $conn->query('select * from {faq}')->fetchAll();

    return array(
      '#title'   => 'FAQ',
      '#theme'    => 'faq_list2',
      '#tabla_lista' => $data,
    );
  }


}