<?php

class Article
{
    public $id;
    public $artikelnummer;
    public $bezeichnung;
    public $einkaufspreis;
    public $verkaufspreis;
    public $beschreibung;
    public $erstellungsdatum;

    public function __construct($id, $artikelnummer, $bezeichnung, $einkaufspreis, $verkaufspreis, $beschreibung, $erstellungsdatum)
    {
        $this->id = $id;
        $this->artikelnummer = $artikelnummer;
        $this->bezeichnung = $bezeichnung;
        $this->einkaufspreis = $einkaufspreis;
        $this->verkaufspreis = $verkaufspreis;
        $this->beschreibung = $beschreibung;
        $this->erstellungsdatum = $erstellungsdatum;
    }

    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM artikel');

        foreach ($req->fetchAll() as $article) {
            $list[] = new Article($article['id'], $article['artikelnummer'], $article['bezeichnung'], $article['beschreibung'], $article['einkaufspreis'], $article['verkaufspreis'], $article['erstellungsdatum']);
        }
        return $list;
    }

    public static function findBy($id)
    {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM artikel WHERE id = :id');
        $req->execute(array('id' => $id));
        $article = $req->fetch();

        return new Article($article['id'], $article['artikelnummer'], $article['bezeichnung'], $article['beschreibung'], $article['einkaufspreis'], $article['verkaufspreis'], $article['erstellungsdatum']);
    }

    public static function addEntryToDb($artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis)
    {
        $db = Db::getInstance();
        $sql = sprintf('INSERT INTO artikel (artikelnummer, bezeichnung, beschreibung, einkaufspreis, verkaufspreis, erstellungsdatum) VALUES ("%s", "%s", "%s", "%s", "%s", now())', $artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis);
        $db->query($sql);

        return 1;
    }

    public static function deleteEntryById($id)
    {
        $db = Db::getInstance();
        $sql = sprintf('DELETE FROM artikel WHERE id =  %s', $id);
        echo $sql;
        $db->query($sql);
    }

}
