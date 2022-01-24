<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Criar Produto</h1>
    <form action="/products/store" method="post">
        @csrf
        <input name="name" placeholder="Nome"><br><br>
        <textarea name="description" placeholder="Descrição" rows="4"></textarea><br><br>
        <input type="number" name="price" placeholder="Preço"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>