<h1>Reciclado</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Nome rec.</th>
                <th>Tipo</th>
                <th>Ponto</th>
                <th>Un.</th>
                <th><a href="?controller=RecicladoController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($reciclados) {
                foreach ($reciclados as $reciclado) {
            ?>
                    <tr>
                        <td><?php echo $reciclado->nome_reciclado; ?></td>
                        <td><?php echo $reciclado->tipo_reciclado; ?></td>
                        <td><?php echo $reciclado->ponto_reciclado; ?></td>
                        <td><?php echo $reciclado->un_reciclado; ?></td>
                        <td>
                            <a href="?controller=RecicladoController&method=editar&id=<?php echo $reciclado->id_reciclado; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=RecicladoController&method=excluir&id=<?php echo $reciclado->id_reciclado; ?>" class="btn btn-danger btn-sm">Excluir</a>
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