<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <label for="lblNome">Nome:</label>
    <input type="text" name="nome" value="<?php echo e($produto->nome); ?>" >
    <br>
    <label for="lblValor">Valor:</label>
    <input type="text" name="Valor" value="<?php echo e($produto->valor); ?>">
    <br>
    <label for="lblQuantidade">Quantidade:</label>
    <input type="text" name="estoque" value="<?php echo e($produto->estoque); ?>">
    <br>
</body>
</html><?php /**PATH C:\xampp\htdocs\biblioteca_laravel\resources\views/listar.blade.php ENDPATH**/ ?>