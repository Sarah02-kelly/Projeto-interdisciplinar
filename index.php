<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastro de Usuário</h2>

        <form action="./inserir.php" method="post">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input name="cpf" type="text" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>