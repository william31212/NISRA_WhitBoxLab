<?php

function authenticate() {
  if( isset( $_POST[ 'Connect' ] ) ) {
    $login = $_POST[ 'login' ];
    $pass = $_POST[ 'pass' ];

    $query = "SELECT * FROM users WHERE login = :login AND pass = :pass"; // Safe regarding sql injection

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":pass", $pass);
    $stmt->execute();

    $authenticated = false;
    if ( $stmt->rowCount() == 1 ) {
      $authenticated = true;
    }

    return $authenticated;
  }
}