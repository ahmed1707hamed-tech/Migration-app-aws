<?php
$conn = mysqli_connect("localhost", "root", "", "migrationdb");
$result = mysqli_query($conn, "SELECT * FROM items ORDER BY id DESC");
?>

<h1>Items List</h1>
<a href="add.php">Add New Item</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Image</th>
    <th>Created</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td>
        <?php if ($row["image"]) { ?>
            <img src="uploads/<?php echo $row["image"]; ?>" width="80">
        <?php } ?>
    </td>
    <td><?php echo $row["created_at"]; ?></td>
</tr>
<?php } ?>
</table>