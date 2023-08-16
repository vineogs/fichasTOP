<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichas TOP</title>
</head>
<body>

    <H1>FICHAS TOP</H1>

    <p>Rolagem teste</p>
    <form method="post">
        <input type="submit", name="button1", class="button", value="D20">
    </form>

    <?php
        if(array_key_exists('button1', $_POST)){
            button1();
        }
        function button1(){
            ?> <span> asda </span> <?php
        }
    ?>
</body>
</html>