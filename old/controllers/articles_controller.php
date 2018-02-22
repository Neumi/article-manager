<?php

class ArticlesController
{
    public function index()
    {
        $articles = Article::all();
        require_once('views/articles/index.php');
    }

    public function show()
    {
        if (!isset($_GET['id']))
            return call('pages', 'error');

        $article = Article::findBy($_GET['id']);

        require_once('views/articles/show.php');
    }


    public function addEntryToDb()
    {
        $artikelnummer = $_POST['artikelnummer'];
        $bezeichnung = $_POST['bezeichnung'];
        $beschreibung = $_POST['beschreibung'];
        $einkaufspreis = $_POST['einkaufspreis'];
        $verkaufspreis = $_POST['verkaufspreis'];

        $answer = Article::addEntryToDb($artikelnummer, $bezeichnung, $beschreibung, $einkaufspreis, $verkaufspreis);

        if ($answer == 1) {
            $_POST['notification'] = "Successfully added article to db!";
            return call('pages', 'home');
        } else {
            $_POST['error_message'] = "error while adding article!";
            return call('pages', 'error');
        }
    }

    public function add()
    {
        require_once('views/articles/add.php');
    }

    public function deleteEntryById()
    {
        Article::deleteEntryById($_GET['id']);
    }
}


