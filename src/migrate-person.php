<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo "failed";
  die();
};
require_once "./pdo.php";

//TODO created at and updated at columns

$sql =
  '
      DROP TABLE IF EXISTS person;
      CREATE TABLE person( 
         person_id INT AUTO_INCREMENT,
         personal_information LONGTEXT NOT NULL, 
         creator_node_name VARCHAR(100) NOT NULL,
         creator_node_key VARCHAR(100) NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
         updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
         PRIMARY KEY(person_id)
       );';
pdo()->exec($sql);

header("Location: http://" . $_ENV["HOST_ADRESS"] . ':' . $_ENV["HOST_PORT"]);
die();