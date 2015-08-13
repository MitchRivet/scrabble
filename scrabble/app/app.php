<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('scrabble.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $new_scrabble = new Scrabble;
        $scrabble_result = $new_scrabble->scoreScrabble($_GET['input']);

        return $app['twig']->render('results.html.twig', array('result' => $scrabble_result));
    });

    return $app;

?>
