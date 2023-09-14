<?php
include 'save.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    <form method="post">
        <input class="yo" type="text" name="key" placeholder="entrez le nombre de cle que vous voulez generer"><br>
        <!-- <input type="text" name="result" value=""> -->
        <input type="text" class="in" value="<?php if(isset($ok)){ echo $ok; }?>" disabled>
        <button name="save" id="sa">Cliquer pour generer le nombre de cle que vous avez demander</button>
    </form>
    <script src="script.js"></script>
</body>
</html>