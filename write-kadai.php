アンケート結果

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
    <?php
$name = $_POST["name"];
$mail = $_POST["mail"];
?>
</head>

<body>

    <p>お名前： <?=$name?></p>
    <p>EMAIL：  <?=$mail?></p>
    
    
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
