    <div id="wrapper" class="container-fluid">
        <div class="bloco row-fluid">
                    <div class="title blue-title col-md-10 check-pattern">
                        <img src="<?= base_url('assets/img/icon-home.png'); ?>" alt="Check" class=" offset1" />
                        <h1 class="titulo-grande">ESCOLHA AQUI SEU PLANO DE SAÚDE!</h1>
                        <h3 class="titulo-grande">ESCOLHA ABAIXO QUAL TIPO DE PLANO VOCÊ PROCURA.</h3>
                    </div>
                <div class="content col-md-10">
                    <div class="border-right inside col-md-4">
                        <h2 class="titulo-medio">Planos individuais</h2>
                        <img class="col-md-12 no-padding" src="<?= base_url('assets/img/individuais.jpg'); ?>" alt="individuais" title="Planos Individuais">
                        <div class="operadoras full">
                            <p class="col-md-12">Faça um plano de saúde e garanta já sua saúde e de sua família.</p>
                            <div class="lista mini" estado="fechado">
                                <ul class="col-md-12">
                                    <?php
                                    foreach ($operadoras as $o) :
                                        $cat = unserialize($o->categoria);
                                        if (in_array('individuais', $cat)) :
                                    ?>
                                        <li>
                                            <a href="<?= base_url('planos-individuais/' . $o->slug) ?>">
                                                <?= $this->images->thumb('operadoras/' . $o->logo, 130, 50, '', 'operadora-img'); ?>
                                                <h5><?= $o->name ?></h5>
                                            </a>
                                        </li>
                                    <?php endif; endforeach; ?>
                                </ul>
                            </div>
                            <div class="btnAbrir" id="btnAbrir"></div>
                        </div>
                    </div>
                    <div class="border-right inside col-md-4">
                        <h2 class="titulo-medio">Planos empresriais</h2>
                        <img class="col-md-12 no-padding" src="<?= base_url('assets/img/empresas.png'); ?>" alt="empresas" title="Planos Individuais">
                        <div class="operadoras full">
                            <p class="col-md-12">Faça seus funcionários trabalharem melhor. Veja qual é o plano de saúde que melhor se enquadra ao perfil de sua empresa.</p>
                            <div class="lista mini" estado="fechado">
                                <ul class="col-md-12">
                                    <?php
                                    foreach ($operadoras as $o) :
                                        $cat = unserialize($o->categoria);
                                        if (in_array('empresariais', $cat)) :
                                    ?>
                                        <li>
                                            <a href="<?= base_url('planos-empresariais/' . $o->slug) ?>">
                                                <?= $this->images->thumb('operadoras/' . $o->logo, 130, 50, '', 'operadora-img'); ?>
                                                <h5><?= $o->name ?></h5>
                                            </a>
                                        </li>
                                    <?php endif; endforeach; ?>
                                </ul>
                            </div>
                            <div class="btnAbrir" id="btnAbrir"></div>
                        </div>
                    </div>
                    <div class="inside col-md-4">
                        <h2 class="titulo-medio">Planos para profissionais</h2>
                        <img class="col-md-12 no-padding" src="<?= base_url('assets/img/profissionais.png'); ?>" alt="profissionais" title="Planos Individuais">
                        <div class="operadoras full">
                            <p class="col-md-12">Temos planos com condições especiais para várias categorias de profissionais. Veja todas as opções abaixo e escolha a sua.</p>
                            <div class="lista mini" estado="fechado">
                                <ul class="col-md-12">
                                    <?php foreach ($categorias as $c) : ?>
                                        <li>
                                            <a href="<?= base_url('planos-especiais/' . $c->slug) ?>">
                                                <h5><?= $c->name ?></h5>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="btnAbrir" id="btnAbrir2"></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>