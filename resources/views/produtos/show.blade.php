<html>

<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>

<body>
    <div class="container">


        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <tbody>

            </tbody>
        </table>
        <td>{{ $products->nome }}</td><br>
        <td>{{ $products->valor }}</td><br>
        <td>{{ $products->descricao }}</td><br>
        <td>{{ $products->quantidade }}</td><br>



    </div>
</body>

</html>
