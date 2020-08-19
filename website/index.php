
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Docker -> MySQL, Node e PHP</title>
    </head>
    <body>
        <?php
            $result = file_get_contents("http://node-container:9876/produtos");
            $produtos = json_decode($result);
        ?>

        <div class="container">
            <table class="table">
            <thead>
                <tr>
                <th>Produto</th>
                <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><?php echo $produto->nome; ?></td>
                    <td><?php echo $produto->preco; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </body>
</html>
