<?php

$response = @file_get_contents( "https://www.instagram.com/uefrance/?__a=1" );

if ( $response !== false ) {
  $data = json_decode( $response, true );

  if ( $data !== null ) {
    $follower  = $data['graphql']['user']['edge_followed_by']['count'];

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    echo json_encode(['number' => $follower], JSON_FORCE_OBJECT);
  }
} else {
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  echo json_encode(['number' => 0, 'error' => 'Username not found'], JSON_FORCE_OBJECT);
}

?>
