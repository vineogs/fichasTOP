<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Fichas TOP</title>
</head>
<body>
    <header>
        <h1>Fichas TOP</h1>
    </header>
    
    <div class="dados">
        <form method="post">
            <div id="bt_força">
                <input type="submit" name="bt_forca" value="Força"/>
            </div>
        </form>  
        <?php 
            $resultado = 0;
            $valores = [];

            function rodarDados($lados, $quantidade){
                global $valores;
                for($i = 0; $i <= $quantidade; $i++){
                    array_push($valores, rand(1, $lados));
                }
                return max($valores);
            }

            if(isset($_POST['bt_forca'])){
                echo $resultado = rodarDados(20, 3);
            }
        ?>  
    </div>
</body>
</html>