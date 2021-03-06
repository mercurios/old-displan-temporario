<div class="container-fluid">
    <h1 class="ls-title-intro">Operadoras</h1>

    <div class="ls-box col-md-12">
        <form enctype="multipart/form-data" action="<?= base_url('operadoras/update/' . $resultado[0]->id); ?>" method="post">
            <fieldset class="row">
                <div class="col-md-3">
                    <?php
                    if (!empty($resultado[0]->logo)) {
                        echo $this->images->thumb('operadoras/' . $resultado[0]->logo, 200, 200, '', 'image-thumb');
                    } else {
                        echo $this->images->thumb('default/default.jpg', '', 'image-thumb');
                    }
                    ?>
                </div>

                <div class="col-md-12">
                    <label class="ls-label">
                        <b class="ls-label-text">Logo</b>
                        <input type="file" name="imagem" />
                    </label>
                </div>

                <div class="col-md-12">
                    <label class="ls-label">
                        <b class="ls-label-text">Nome *</b>
                        <input type="text" name="name" value="<?= $resultado[0]->name ?>" title="O nome da operadora é obrigatório" required>
                    </label>
                </div>

                <div class="col-md-12">
                    <b class="ls-label-text">Essa operadora tem planos:</b>
                    <p></p>
                    <?php $cat = unserialize($resultado[0]->categoria); ?>
                    <label class="checkbox-inline">
                        <input type="checkbox" <?= (in_array('individuais', $cat)) ? 'checked' : '' ?> name="categorias[]" id="Individuais" value="individuais"> Individuais
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" <?= (in_array('empresariais', $cat)) ? 'checked' : '' ?> name="categorias[]" id="Empresariais" value="empresariais"> Empresariais
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" <?= (in_array('especiais', $cat)) ? 'checked' : '' ?> name="categorias[]" id="Especiais" value="especiais"> Especiais
                    </label>
                </div>

                <div class="col-md-12">
                    <br>
                    <input type="hidden" name="logo" value="<?= $resultado[0]->logo ?>" />
                    <input type="submit" class="btn btn-default" value="Salvar" />
                </div>
            </fieldset>
        </form>
    </div>
</div>
