<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Coin.php";

    $app = new Silex\Application();

    $app->register( new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

    $app['debug'] = true;

    $app->get("/",function() use ($app) {
        return $app['twig']->render('change_input.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $coin = new Coin;

        return $app['twig']->render('results.html.twig', array('change_array'=> $coin->getCoinage($_POST['input'],$_POST["goal"])));
    });

    return $app;
?>
