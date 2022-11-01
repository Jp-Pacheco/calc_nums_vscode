<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio1 </title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action="exer1.php" method="POST">
            <p id="n1">
                INFORME O PRIMEIRO VALOR XIRUZIN:  <input type="number" name="n1" />
            </p>
            <p id="n2">
                INFORME O SEGUNDO VALOR XIRUZIN:  <input type="number" name="n2"  />
            </p>
            <select name="op" id="selecao">
                <option value="a">Adição</option>
                <option value="s">Subtração</option>
                <option value="m">Multiplicação</option>
                <option value="d">Divisão</option>
</select>
<input type="submit" value="Calcular" name='calc' id="calc">
        </form>

    </body>
</html>