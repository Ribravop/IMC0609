<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Resultado do cálculo do IMC</h2>
        <div class="conteudo-painel">
            <div class='sucesso'>
                <h3>O valor total gasto será de</h3>
                <ul>
                    <li><b>Gasolina:</b> R$ {{$valor}}</li>
                </ul>
            </div>
            <a class="btn btn-danger" href="{{URL('/')}}" title="voltar">Voltar</a>
        </div>
    </div>
</body>
</html>
