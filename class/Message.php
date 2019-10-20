<?php


class Message
{
    private $id;
    private $author;
    private $words;
    private $date;

    public function __construct($id, $author, $date, $words)
    {
        $this->id = $id;
        $this->author = $author;
        $this->date = $date;
        $this->words = $words;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getWords()
    {
        return $this->words;
    }

}