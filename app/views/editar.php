<div class="row container">
    <div class="col s12">
        <h3 class="light">
            Página de Edição de Registros
        </h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/alterar/" method="post">
        <?php foreach ($editarForm as $registro) {
        ?>
            <input type="hidden" name="id" id="id" value="<?=$registro["id"]?>" required>

            <div class="input-field col s12 m6">
                <input type="text" name="nome" id="nome" value="<?=$registro["nome"]?>" required>
                <label for="nome">Digite seu nome</label>
            </div>

            <div class="input-field col s12 m6">
                <input type="text" name="email" id="email"  value="<?=$registro["email"]?>" required>
                <label for="email">Digite seu e-mail</label>
            </div>

            <div class="input-field col s12">
                <input type="submit" value="salvar alterações" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
        <?php
        } ?>
        </form>
    </div>
</div>