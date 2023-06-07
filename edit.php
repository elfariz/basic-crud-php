<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
	include 'connect.php';
	$id = $_GET['id'];
	$data = mysqli_query($konek,"select * from kontak where id='$id'");
	while($show = mysqli_fetch_array($data)){
		?>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $show["id"]; ?>">
        <label for="name">Nama: <input type="text" id="name" name="nama" value="<?php echo $show["nama"] ?>"></label><br/>
        <label for="age">Umur: <input type="number" name="umur" id="age" value="<?php echo $show["umur"] ?>"></label><br/>
        <label for="submit"><input type="submit" value="Edit Kontak" id="submit"></label>
    </form>
    <?php } ?>
    </div>
    <div>
</body>
</html>