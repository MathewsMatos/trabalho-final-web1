<div class="container">
    <form action="?controller=ResgateController&<?php echo isset($resgate->id_resgate) ? "method=atualizar&id={$resgate->id_resgate}" : "method=salvar"; ?>" method="post" >
        <div class="card">
            <div class="card-header">
                <span class="card-title">Novo Resgate</span>
            </div>
            <div class="card-body">
            </div>
            <div class="cx-1">
                <label class="lbl-1">Informe o id do cliente</label>
                <input type="text" class="input-1" name="id_user" id="id_user" value="<?php
                echo isset($resgate->id_user) ? $resgate->id_user : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Selecione o produto a ser resgatado</label>
                <input type="text" class="input-1" name="id_produto" id="id_produto" value="<?php
                echo isset($resgate->id_product) ? $resgate->id_product : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Selecione a loja de retirada</label>
                <input type="text" class="input-1" name="id_loja" id="id_loja" value="<?php
                echo isset($resgate->id_loja) ? $resgate->id_loja : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($resgate->id_resgate) ? $resgate->id_resgate : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=ResgateController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>