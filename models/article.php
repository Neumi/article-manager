<?php

class Article
{
    /** @var */
    public $id;
    /** @var */
    public $artikelnummer;
    /** @var */
    public $bezeichnung;
    /** @var */
    public $einkaufspreis;
    /** @var */
    public $verkaufspreis;
    /** @var */
    public $beschreibung;
    /** @var */
    public $erstellungsdatum;

    /**
     * Article constructor.
     * @param $id
     * @param $artikelnummer
     * @param $bezeichnung
     * @param $beschreibung
     * @param $einkaufspreis
     * @param $verkaufspreis
     * @param $erstellungsdatum
     */
    public function __construct($id, $artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis, $erstellungsdatum)
    {
        $this->id = $id;
        $this->artikelnummer = $artikelnummer;
        $this->bezeichnung = $bezeichnung;
        $this->beschreibung = $beschreibung;
        $this->einkaufspreis = $einkaufspreis;
        $this->verkaufspreis = $verkaufspreis;
        $this->erstellungsdatum = $erstellungsdatum;
    }

    /**
     * @return array
     */
    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM artikel ORDER BY id DESC');

        foreach ($req->fetchAll() as $article) {
            $list[] = new Article($article['id'], $article['artikelnummer'], $article['bezeichnung'], $article['beschreibung'],
                $article['einkaufspreis'], $article['verkaufspreis'], $article['erstellungsdatum']);
        }
        return $list;
    }

    /**
     * @param $id
     * @return Article
     */
    public static function findBy($id)
    {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM artikel WHERE id = :id');
        $req->execute(array('id' => $id));
        $article = $req->fetch();

        $articleObject = new Article($article['id'], $article['artikelnummer'], $article['bezeichnung'], $article['beschreibung'], $article['einkaufspreis'], $article['verkaufspreis'], $article['erstellungsdatum']);

        return $articleObject;
    }

    /**
     * @param $artikelnummer
     * @param $bezeichnung
     * @param $beschreibung
     * @param $einkaufspreis
     * @param $verkaufspreis
     * @return int
     */
    public static function addEntryToDb($artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis)
    {
        $db = Db::getInstance();
        $sql = sprintf('INSERT INTO artikel (artikelnummer, bezeichnung, beschreibung, einkaufspreis, verkaufspreis, erstellungsdatum) 
            VALUES ("%s", "%s", "%s", "%s", "%s", now())', $artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis);
        $db->query($sql);

        return 1;
    }

    /**
     * @param $id
     * @return int
     */
    public static function deleteEntryById($id)
    {
        $db = Db::getInstance();
        $sql = sprintf('DELETE FROM artikel WHERE id =  %s', $id);
        $db->query($sql);

        return 1;
    }

}
