<?php

header('Application: Belajar PHP Web');
header("Author: Arief Hermawan");
header("API-X-TOKEN: belum-ada");

$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello $client";
