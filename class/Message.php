<?php


class Message
{
    private $id;
    private $author;
    private $words;
    private $date;
    private $statut;

    public function __construct($id, $author, $date, $words, $statut)
    {
        $this->id = $id;
        $this->author = $author;
        $this->date = $date;
        $this->words = $words;
        $this->statut = $statut;
    }

    /**
     * @return string
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

}