<?php
$getfile = file_get_contents('book.json');
$books = json_decode($getfile,true);
?>
<h2>To add data on the table <a href="add.php">click here</a></h2>
<h2>Search: </h2>
<form action="search.php" method="post">
	<input type="text" name="search" id="search" placeholder="Search by Title"><br><br>
    <input class="batton" type ="submit" name="submit">
</form>
<table border="1" align="left">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>ISBN</th>
        <th>Action</th>
    </tr>
    <tbody>
        <?php foreach ($books as $key => $value): ?>
            <tr>
                <td><?php echo ($value['id']); ?></td>
                <td><?php echo ($value['title']); ?></td>
                <td><?php echo ($value['author']); ?></td>
                <td><?php echo ($value['available']); ?></td>
                <td><?php echo ($value['pages']); ?></td>
                <td><?php echo ($value['isbn']); ?></td>
                <td>
                    <a href="delete.php?id=<?php echo $key; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

