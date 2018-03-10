<?php
/**
 * Created by PhpStorm.
 * User: niluxer
 * Date: 3/7/18
 * Time: 20:35
 */

class Faq
{
    private $id;
    private $question;
    private $answare;

    /**
     * FaqDao constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getAnsware()
    {
        return $this->answare;
    }

    /**
     * @param mixed $answare
     */
    public function setAnsware($answare)
    {
        $this->answare = $answare;
    }




}