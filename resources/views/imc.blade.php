<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Cálculo IMC</h2>
            <div class="conteudo-painel">
                <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.

                    O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

                    Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.
                </p>
            </div>
        </div>

        <div class="painel">
            <h3>Calcular:</h3>
            <div>
                <form action="{{url('/calculo')}}" method="get">
                    <div class="row">
                        <div class="cell-1">
                            <label class="form-label" for="peso">Peso da pessoa que será realizado o cálculo (quilogramas)</label>
                            <input class="form-control" type="text" name="peso" required/>
                        </div>

                        <div class="cell-1">
                            <label class="form-label" for="altura"> altura da pessoa que será realizado o cálculo (metros)</label>
                            <input class="form-control" type="text" name="altura" required/>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Calcular</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>
