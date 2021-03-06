<div class="container-fluid">
    <h1 class="ls-title-intro">Operadoras</h1>
    <h2 class="ls-title-3 ">
        <a href="<?= base_url('operadoras/add') ?>" class="pull-right ls-btn-default ls-ico-plus">Adicionar operadora</a>
    </h2>

    <hr>

    <?php if (empty($resultado)) : ?>
    <div class="ls-box ls-lg-space ls-ico-globe ls-ico-bg">
        <h1 class="ls-title-1 ls-color-theme">Nenhuma operadora cadastrada...</h1>
        <p>Está esperando o que? Cadastre uma nova operadora clicando no botão ai do lado.</p>
    </div>
    <?php else : ?>

        <table class="ls-table ls-table-striped ls-bg-header" id="tabela-de-precos">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th width="150">Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($resultado as $res) : ?>
                <tr>
                    <td><?= $res->name ?></td>
                    <td>
                        <a href="<?= base_url('operadoras/edit/' . $res->id) ?>" class="btn btn-default ls-ico-pencil"></a>
                        <a href="<?= base_url('operadoras/delete/' . $res->id) ?>" class="btn btn-default ls-ico-close"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
</div>
