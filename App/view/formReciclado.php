<div class="container">
    <form action="?controller=RecicladoController&<?php echo isset($reciclado->id_reciclado) ? "method=atualizar&id={$reciclado->id_reciclado}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Reciclado</span>
            </div>
            <div class="card-body">
            </div>
            <div class="cx-1">
                <label class="lbl-1">Nome do reciclado:</label>
                <input type="text" class="input-1" name="nome_reciclado" id="nome_reciclado" value="<?php
                echo isset($reciclado->nome_reciclado) ? $reciclado->nome_reciclado : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Tipo de Reciclado:</label>
                <input type="text" class="input-1" name="tipo_reciclado" id="tipo_reciclado" value="<?php
                echo isset($reciclado->tipo_reciclado) ? $reciclado->tipo_reciclado : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Pontuação do reciclado:</label>
                <input type="text" class="input-1" name="ponto_reciclado" id="ponto_reciclado" value="<?php
                echo isset($reciclado->ponto_reciclado) ? $reciclado->ponto_reciclado : null;
                ?>" />
            </div>
            <div class="cx-1">
                <label class="lbl-1">Unidade do reciclado:</label>
                <input type="text" class="input-1" name="un_reciclado" id="un_reciclado" value="<?php
                echo isset($reciclado->un_reciclado) ? $reciclado->un_reciclado : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($reciclado->id_reciclado) ? $reciclado->id_reciclado : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=RecicladoController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>