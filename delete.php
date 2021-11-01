<?php
include('functions.php');
$user = (isset($_GET['id'])) ? deletar($_GET['id']) : exit();