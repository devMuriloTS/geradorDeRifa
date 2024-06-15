<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRifa.css">
    <title>Rifa</title>
</head>
<body>
    <?php
        $premio="Um beijo e um abraço";
        $valor=5.00;
        $quantNum=16;
    ?>
    <!-- inicializando a parte das variáveis uma delas vai ser usada pra gerar o loop de rifas -->
    <!-- as outras duas ficam responsáveis por exibir o premio e o valor de cada rifa -->
    <div class="container">
        <h1 class="titulo"> Rifa - Ação entre amigos </h1>
        <div class="rifas">
            <?php 
            for($c=1; $c<=$quantNum; $c++){
                echo"<center>  
                <table> 
                <td class='esquerdo'> Número: $c <br>
                Nome: ................................................. <br>
                Telefone: ............................................. <br>
                E-mail: ................................................ <br></td>

                <td class='direito'> Ação entre amigos <br>
                Prêmio: $premio <br>
                Valor: R$ $valor <br>
                <img src='meucoracao.png' width='300' height='150'>
                </td>
                </table> </center>";
            }
            
            ?> 
        </div>
        <!-- fechando as divs com o HTML da table dentro de um looping -->
    </div>
    
</body>
</html>