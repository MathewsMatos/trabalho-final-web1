<?php /** Falta modificar */ ?>
<h1>Cliente</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome Cliente</th>
                <th>Pontuação</th>
                <th>Fone</th>
                <th>Email</th>
                <th><a href="?controller=ClienteController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($clientes) {
                foreach ($clientes as $cliente) {
            ?>
                    <tr>
                        <td><?php echo $cliente->nome_cliente; ?></td>
                        <td><?php echo $cliente->pontuacao_cliente; ?></td>
                        <td><?php echo $cliente->phone; ?></td>
                        <td><?php echo $cliente->email_cliente; ?></td>
                        <td>
                            <a href="?controller=ClienteController&method=editar&id=<?php echo $cliente->id_cliente; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ClienteController&method=excluir&id=<?php echo $cliente->id_cliente; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>