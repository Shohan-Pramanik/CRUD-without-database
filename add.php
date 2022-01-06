<form action="add.php" method="POST">
    ID: <input type="text" name="id" placeholder="number"/><br>
    Title: <input type="text" name="title" placeholder="text"/><br>
    Author: <input type="text" name="author" placeholder="text"/><br>
    Available: <input type="text" name="available" placeholder="yes/no"/><br>
    Pages: <input type="text" name="pages" placeholder="text"/><br>
    ISBN: <input type="text" name="isbn" placeholder="number"/><br>
    <input type="submit" name="add"/>
</form>
<?php
if (isset($_POST["add"])) {
    $file = file_get_contents('book.json');
    $books = json_decode($file, true);
    unset($_POST["add"]);
    $books = array_values($books);
    array_push($books, $_POST);
    file_put_contents("book.json", json_encode($books));
    header("Location: index.php");
}
?>