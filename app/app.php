<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/player1", function() use ($app) {
        return $app['twig']->render('player1.twig');
    });

    $app->get("/player2", function() use ($app) {
        $_SESSION['player1'] = $_GET['player1'];
        return $app['twig']->render('player2.twig');
    });

    $app->get("/results", function() use ($app) {
        $rockpaperscissors = new RockPaperScissor;
        $player_inputs = $rockpaperscissors->gameRockPaperScissor($_SESSION['player1'], $_GET['player2']);
        return $app['twig']->render('results.twig', array('result' => $player_inputs));
    });

    return $app;
?>
