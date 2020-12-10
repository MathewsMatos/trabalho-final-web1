<?php
    include "../header.php";
?>

<div class="container">
    <form action="?controller=ClienteController&<?php echo isset($cliente->id_cliente) ? "method=atualizar&id={$cliente->id_cliente}" : "method=salvar"; ?>" method="post" >
        <div class="card">
            <div class="card-header">
                <span>Novo Cliente/ Alterar cliente</span>
            </div>
            <div class="card-body">
            </div>
            <div class="cx-1">
                <label class="lbl-1">Informe o nome do cliente</label>
                <input type="text" class="input-1" name="nome_cliente" id="nome_cliente" value="<?php
                echo isset($cliente->nome_cliente) ? $cliente->nome_cliente : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Informe o endereço do cliente</label>
                <input type="text" class="input-1" name="endereco_cliente" id="endereco_cliente" value="<?php
                echo isset($cliente->endereco_cliente) ? $cliente->endereco_cliente : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Informe o email do cliente</label>
                <input type="email" class="input-1" name="email_cliente" id="email_cliente" value="<?php
                echo isset($cliente->email_cliente) ? $cliente->email_cliente : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Informe o telefone do cliente</label>
                <input type="text" class="input-1" name="fone_cliente" id="fone_cliente" value="<?php
                echo isset($cliente->id_product) ? $cliente->id_product : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id_cliente) ? $cliente->id_cliente : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=ResgateController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>