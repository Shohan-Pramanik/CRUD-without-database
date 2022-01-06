<?php
$books="";
if (file_exists('book.json')){
    $booksJson = file_get_contents('book.json');
    $books = json_decode($booksJson, true);
}
else{
    $books=arrar();
}

$search = $_POST['search'];
$result=array();
#print_r($search);

foreach ($books as $key => $value) {
    if($value['title']==$search){
        array_push($result,$value);
    }
}

?>

<table border="1" align="left">
	<tr>
		<th> ID </th>
		<th> Title </th>
		<th> Author </th>
		<th> Available </th>
        <th> Pages </th>
        <th> ISBN </th>
		<th> Action </th>

	</tr>
	<?php foreach ($result as $key => $book): ?>
	<tr>
	    <td><?php echo ($book['id']); ?></td>
		<td><?php echo ($book['title']); ?></td>
		<td><?php echo ($book['author']); ?></td>
        <td><?php echo ($book['available']); ?></td>
		<td><?php echo ($book['pages']); ?></td>
        <td><?php echo ($book['isbn']); ?></td>
		<td><a href="delete.php?id=<?php echo $key; ?>">Delete</a></td>

	</tr>
	<?php endforeach; ?>