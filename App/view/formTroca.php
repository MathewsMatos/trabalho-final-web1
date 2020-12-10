<div class="container">
    <form action="?controller=TrocaController&<?php echo isset($troca->id_troca) ? "method=atualizar&id={$troca->id_troca}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Novo Troca</span>
            </div>
            <div class="card-body">
            </div>
            <div class="cx-1">
                <label class="lbl-1">Digite o id do cliente:</label>
                <input type="text" class="ipt-1" name="id_user" id="id_user" value="<?php
                echo isset($troca->id_user) ? $troca->id_user : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Selecione o reciclado</label>
                <input type="text" class="ipt-1" name="id_reciclado" id="id_reciclado" value="<?php
                echo isset($troca->id_reciclado) ? $troca->id_reciclado : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Quantidade de reciclado:</label>
                <input type="text" class="ipt-1" name="qtdReciclado_troca" id="qtdReciclado_troca" value="<?php
                echo isset($troca->qtdReciclado_troca) ? $troca->qtdReciclado_troca : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Pontuação a ser obtida:</label>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($troca->id_troca) ? $troca->id_troca : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=TrocaController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>

