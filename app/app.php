<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissor.php";

    $app = new Silex\Application();

    $app->reqister(new Seilx\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/results", function() use ($app) {
        $rockpaperscissors = new RockPaperScissor;
        $player_inputs = $rockpaperscissors->gameRockPaperScissor($_GET['player1'], $_GET['player2']);
        return $app['twig']->render('results.twig', array('result' => $player_inputs));
    });

    return $app;
?>
