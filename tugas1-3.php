<?php
$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('Regina','reginaa@gmail.com','Janji Temu')";

if (mysqli_query($conn, $sql)) {
	echo "<br>";
} else {
	echo "Error : ". $sql . "<br>" . mysqli_error($conn);
}
?>