<!DOCTYPE html>
<html>
<head>
    <title>Lista de Comandas</title>
</head>
<body>

    <h1>Comandas</h1>

    <form method="POST">
        <input type="text" name="cliente" placeholder="Nome do cliente" required>
        <input type="number" step="0.01" name="valor" placeholder="Valor" required>
        <button type="submit">Criar Comanda</button>
    </form>

    <ul>
        <?php foreach ($comandas as $comanda): ?>
            <li>
                <?= $comanda['cliente'] ?> - R$ <?= $comanda['valor'] ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>