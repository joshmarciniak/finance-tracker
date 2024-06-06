<?php
  $host = "127.0.0.1";
  $db = "finance-tracker";
  $username = "root";
  $password = "12341234";
  $charset = 'utf8mb4';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];

  try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Failed to connect: " . $e->getMessage();
  }
