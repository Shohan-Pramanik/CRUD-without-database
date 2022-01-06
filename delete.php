
<?php
$books="";
if (file_exists('book.json')){
    $booksJson = file_get_contents('book.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}


$key = $_GET['id'];

array_splice($books, $key, 1);


$enjson = json_encode($books);
file_put_contents('book.json', $enjson);
header('Location: index.php');
exit();
?>
