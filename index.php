<?php
$dbh = new PDO('mysql:host=localhost;dbname=KiraIJenya', 'root','1234567');
if(isset($_POST['name']) && isset($_POST['age'])){
    $name = $_POST['name'];
    $age = $_POST['age'];

    $query = $dbh->prepare("INSERT INTO tests (NAME, AGE) values (:name, :age)");
    $query->bindValue(':name', $name);
    $query->bindValue(':age', $age);
    $result = $query->execute();
    if ($result) {
	echo "Успех. Информация занесена";
     } else {
	echo "No";
    }
}
?>

<form method = "post">
Имя<br>
<input name = "name" type = "text"><br>
Возраст<br>
<input name = "age" type = "number"><br>
<input type = "submit">
</form>

#гыг