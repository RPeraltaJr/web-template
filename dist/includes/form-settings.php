<?php 

$searchTerm = ""; 
if( isset($_GET['q']) ): 
    $searchTerm = htmlspecialchars($_GET['q']);
endif;

$query = $db->prepare("SELECT title, price FROM books WHERE title LIKE ?");
$query->execute(array("%$searchTerm%"));
$rows = $query->fetchAll(PDO::FETCH_ASSOC);