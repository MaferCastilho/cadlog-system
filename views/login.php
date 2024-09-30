<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <title>Login</title>
</head>
<body>
    <main>
        <h2>Login de Usuário</h2>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required><br>
            </section>
            <section>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </section><br>
            <button class="glow-on-hover" type="button">Login</button><br>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>