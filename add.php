<?php
$conn = mysqli_connect("localhost", "root", "", "migrationdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];

    $imageName = null;
    if (!empty($_FILES["image"]["name"])) {
        $imageName = basename($_FILES["image"]["name"]);
        $target = "uploads/" . $imageName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target);
    }

    $sql = "INSERT INTO items (name, image) VALUES ('$name', '$imageName')";
    mysqli_query($conn, $sql);

    header("Location: items.php");
}
?>

<h1>Add New Item</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Item name" required>
    <br><br>
    <input type="file" name="image">
    <br><br>
    <button type="submit">Add</button>
</form>