<h1>Trocas realizadas</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nº Troca.</th>
                <th>Reciclado</th>
                <th>Cliente</th>
                <th>Qtd. Reciclado</th>
                <th>Pontuação</th>
                <th>Func. Resp.</th>
                <th>Data troca</th>
                <th><a href="?controller=TrocaController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($trocas) {
                foreach ($trocas as $troca) {
            ?>
                    <tr>
                        <td><?php echo $troca->id_troca; ?></td>
                        <td><?php echo $troca->idReciclado_troca; ?></td>
                        <td><?php echo $troca->cliente_troca; ?></td>
                        <td><?php echo $troca->qtdReciclado_troca; ?></td>
                        <td><?php echo $troca->qtdPonto_troca; ?></td>
                        <td><?php echo $troca->funcionario_troca; ?></td>
                        <td><?php echo $troca->data_troca; ?></td>
                        <td>
                            <a href="?controller=TrocaController&method=editar&id=<?php echo $troca->id_troca; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=TrocaController&method=excluir&id=<?php echo $troca->id_troca; ?>" class="btn btn-danger btn-sm">Excluir</a>
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