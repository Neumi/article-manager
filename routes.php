<?php
function call($controller, $action)
{
    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'articles':
            require_once('models/article.php');
            $controller = new ArticlesController();
            break;
    }

    $controller->{$action}();
}
$controllers = array('pages' => ['home', 'error'],
    'articles' => ['index', 'show', 'add', 'addEntryToDb', 'deleteEntryById']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}

