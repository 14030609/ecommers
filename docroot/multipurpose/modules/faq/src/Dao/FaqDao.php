<?php

namespace Drupal\faq\Dao;

use Drupal\Core\Database\Database;

class FaqDao {

	static function getAll()
	{
        $conn = Database::getConnection();
        $result = $conn->query('select * from {faq}')->fetchAllAssoc('id');

		return $result;
	}

    /*static function getOne()
    {
        //$conn = Database::getConnection();
        //$result = $conn->query('select * from {faq}')->fe
        $result = db_query('select * from {faq}')->fetchAllAssoc('id');
        return $result;
    }*/

    static function exists($id) {
        $conn = Database::getConnection();
        $result = $conn->query('SELECT 1 FROM {faq} WHERE id = :id', array(':id' => $id))->fetchField();

        //$result = db_query('SELECT 1 FROM {faq} WHERE id = :id', array(':id' => $id))->fetchField();
        return (bool) $result;
    }

    static function add($question, $answare) {
        $conn = Database::getConnection();
        $conn->insert('faq')->fields(
            array(
                'question' => $question,
                'answare' => $answare,
            )
        )->execute();

    }

    static function update($id, $question, $answare) {
        $conn = Database::getConnection();
        $conn->update('faq')->fields(
            array(
                'question' => $question,
                'answare' => $answare,
            )
        )->condition('id', $id, '=')->execute();
        /*db_update('faq')
        ->fields(array(
          'question' => $question,
          'answare' => $answare,
        ))
        ->condition('id', $id, '=')
        ->execute();*/
    }

    static function delete($id) {
        //db_delete('faq')->condition('id', $id)->execute();
        $conn = Database::getConnection();
        $conn->delete('faq')->condition('id', $id, '=')->execute();

    }

}