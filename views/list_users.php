<?php
session_start(); // Inicia a sessão, caso não tenha sido iniciada

// Verifica se o array $_SESSION e a chave 'perfil' estão definidos
if (isset($_SESSION['perfil'])):
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=".//css/list.css">
        <title>Lista de Usuários</title>
        
    </head>

    <body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
        <div class="container">
            <h2>Lista de Usuários</h2>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['nome'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['perfil'] ?></td>
                            <td>
                                <!-- Permitir que admin e gestor editem -->
                                <?php if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                                    <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn">Editar</a>
                                <?php endif; ?>

                                <!-- Permitir que apenas admin exclua -->
                                <?php if ($_SESSION['perfil'] == 'admin'): ?>
                                    <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

            <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
        </div>
    </body>

    </html>

<?php else: ?>
    <!-- Se $_SESSION['perfil'] não estiver definido, exibe uma mensagem -->
    <p>Erro: Você não tem permissão para visualizar esta página.</p>
<?php endif; ?>