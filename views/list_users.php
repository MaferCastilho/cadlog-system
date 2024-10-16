<?php
    session_start();
 
    if(isset($_SESSION['perfil'])):
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
</head>
<body class="<?= $_SESSION['perfil']?>"> <!-- Define a classe com base no perfil do usuário -->
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
            <>
                <?php foreach($user as $user) ?>
                <tr>
                    <td><?php $user['id'] ?></td>
                    <td><?php $user['nome'] ?></td>
                    <td><?php $user['email'] ?></td>
                    <td><?php $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'):?>
                        <a href="">Editar</a>
                        <?php endif; ?>
                        <?php if($_SESSION['perfil'] == 'admin'):?>
                        <a href="">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
</html>
<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página. </p>
<?php endif; ?>