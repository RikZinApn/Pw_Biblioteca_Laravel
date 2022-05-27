<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>Produtos</title>
    </head>
    <body>
        <h1>Produtos</h1>
        
        <form action="/editar-produto/<?php echo e($produto-> id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="lblNome">Nome:</label>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>">
        <br><br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" value="<?php echo e($produto->valor); ?>">
        <br><br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="<?php echo e($produto->estoque); ?>">
        <br><br>
        <button>editar</button>
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\biblioteca_laravel\resources\views/editar.blade.php ENDPATH**/ ?>