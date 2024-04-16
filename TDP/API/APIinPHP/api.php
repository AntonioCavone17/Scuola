<?php
    require_once("connect.php");
    if ($_SERVER['PATH_INFO'] == '/movies') {
        if ( isset($_GET['title'])){
          $movies = get_movies($_GET ['title']);
        } else $movies = get_movies(NULL);
        http_response_code(200);
        header('Content-Type: application/json');
        echo json_encode([
        'status' => 200,
        'message' => 'method allowed by Matteo Messina Denaro',
        'payload' => $movies
        ]);
    }

    if ($_SERVER['PATH_INFO'] == '/actors') {
      if (isset($_GET['cognome'])){
        $actors = get_actors($_GET ['cognome']);
      } else $actors = get_actors(NULL);
      http_response_code(200);
      header('Content-Type: application/json');
      echo json_encode([
      'status' => 200,
      'message' => 'method allowed by Matteo Messina Denaro',
      'payload' => $actors
      ]);
  }


    if ($_SERVER['PATH_INFO'] == '/directors') {
      if (isset($_GET['cognome'])){
        $directors = get_directors($_GET ['cognome']);
      } else $directors = get_directors(NULL);
      http_response_code(200);
      header('Content-Type: application/json');
      echo json_encode([
      'status' => 200,
      'message' => 'method allowed by Matteo Messina Denaro',
      'payload' => $directors
      ]);
  }
  

  if ($_SERVER['PATH_INFO'] == '/genres') {
    if (isset($_GET['nome'])){
      $genres = get_genres($_GET ['nome']);
    } else $genres = get_genres(NULL);
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
    'status' => 200,
    'message' => 'method allowed by Matteo Messina Denaro',
    'payload' => $genres
    ]);
  }
  exit;
?>