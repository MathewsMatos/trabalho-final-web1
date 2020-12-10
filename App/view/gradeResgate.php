<h1>Resgates</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>nº Resgate</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Loja</th>
                <th>Custo</th>
                <th>Data Solic.</th>
                <th>Resgatado?</th>
                <th>Cupom</th>
                <th>Validade</th>
                <th><a href="?controller=ResgateController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resgates) {
                foreach ($resgates as $resgate) {
            ?>
                    <tr>
                        <td><?php echo $resgate->id_resgate; ?></td>
                        <td><?php echo $resgate->id_cliente; ?></td>
                        <td><?php echo $resgate->id_produto; ?></td>
                        <td><?php echo $resgate->id_loja; ?></td>
                        <td><?php echo $resgate->custo_resgate; ?></td>
                        <td><?php echo $resgate->data_resgate; ?></td>
                        <td><?php echo $resgate->resgatado; ?></td>
                        <td><?php echo $resgate->cupom_resgate; ?></td>
                        <td><?php echo $resgate->exp_resgate; ?></td>
                        <td>
                            <a href="?controller=ResgateController&method=editar&id=<?php echo $resgate->id_resgate; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ResgateController&method=excluir&id=<?php echo $resgate->id_resgate; ?>" class="btn btn-danger btn-sm">Excluir</a>
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