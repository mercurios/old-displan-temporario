<!--banner-->
<div class="outer-banner">
    <img class="static-banner" src="<?= base_url('assets/img/banner.png') ?>" alt="imagem do bannner 1" />
    <div class="darken"></div>
</div>

 <div id="wrapper" class="container-fluid">
    <div class="bloco-plano row-fluid">
        <div class="title blue-title col-md-10 check-pattern">
            <img src="<?= base_url('assets/img/icon-home.png') ?>" alt="Check" class=" offset1" />
            <h1 class="titulo-grande">Planos Empresariais</h1>
            <h3 class="titulo-grande">ESCOLHA ABAIXO A OPERADORA DE SUA PREFERÊNCIA.</h3>
        </div>

        <div class="content col-md-10">
            <div class="plano-text col-md-10">
                <p class="explain">Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família. Faça um plano de saúde e garanta já sua saúde e de sua família.</p>
            </div>

            <?php
            foreach ($operadoras as $o) :

                $cat = unserialize($o->categoria);

                if (in_array('empresariais', $cat)) :
            ?>

            <div class="plano-box border-right col-md-3">
                <h2 class="titulo-medio"><?= $o->name ?></h2>
                <?= $this->images->thumb('operadoras/' . $o->logo, 199, 64, 'empresariais', 'col-md-12 no-padding'); ?>

                <div class="operadoras">
                    <p class="col-md-12">Faça um plano de saúde e garanta já sua saúde e de sua família.</p>
                    <a href="<?= base_url('planos-empresariais/' . $o->slug) ?>" class="btn-more">Ver mais</a>
                </div>
            </div>

            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
</div>