<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Categorias</title>
</head>

<body>

    <h1>Lista de Categorias</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Ações</th>

            </tr>
        </thead>

        <tbody>

            <?php foreach ($categorias as $categoria): ?>

                <tr>
                    <td><?= $categoria['cat_cod']; ?></td>
                    <td><?= $categoria['cat_nome']; ?></td>
                    <td>
                        <a href="#">Editar</a>
                        |
                        <a href="#">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>