<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Insert users data into the table</h1>
</head>
<body>
    <center>
        <?php
        require "dbconnect.php";
        $title = $_REQUEST['title'];
        $author = $_REQUEST['author']; 
        $genre = $_REQUEST['genre'];
        $isbn = $_REQUEST['isbn'];
        

        $sql = "INSERT INTO books (title, author, genre, isbn) VALUES ('$title', '$author', '$genre', '$isbn')";


        if($conn->query($sql)===true){
            echo 'records inserted';
        }else{
            echo 'error';
        }
        ?>
    </center>
</body>
</html>