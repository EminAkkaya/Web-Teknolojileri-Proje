<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    $cinsiyet = $_POST["cinsiyet"][0];
    $alan = "";
    for ($i = 0; $i <= count($_POST["alan"])-1; $i++) { 
        $alan = $alan." ".$_POST["alan"][$i];
    }

    echo"Datalar alındı.<br><br><br>";
    echo"<pre>
        <table class=\"table table-success table-striped table-hover\">
            <tr>
                <td>Ad</td>
                <td>:</td>
                <td>".$_POST["name"]."</td>
            </tr>
            <tr>
                <td>Soyad</td>
                <td>:</td>
                <td>".$_POST["surname"]."</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td>".$_POST["email"]."</td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td>:</td>
                <td>".$_POST["phone"]."</td>
            </tr>
            <tr>
                <td>Çalışma Durumu</td>
                <td>:</td>
                <td>".$_POST["is"]."</td>
            </tr>
            <tr>
                <td>Üniversite</td>
                <td>:</td>
                <td>".$_POST["okul"]."</td>
            </tr>
            <tr>
                <td>Cinsiyet</td>
                <td>:</td>
                <td>".$cinsiyet."</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>:</td>
                <td>".$alan."</td>
            </tr>
            <tr>
                <td>Mesaj</td>
                <td>:</td>
                <td>".$_POST["message"]."</td>
            </tr>
        </table>
    ";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
</body>
</html>