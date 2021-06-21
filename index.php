<?php $classMain = ""; include(__DIR__."/partes/cabecalho.php"); ?>
            <section class="main__markt">
                <div class="main__markt__info">
                    <div class="main__markt__info__content">
                        <h1 class="main__markt__info__content__title">Encontre o melhor negócio no mundo do ciclismo.</h1>
                    </div>
                </div>
                <div class="main__markt__image">
                    <img src="assets/imagens/homesection.webp">
                </div>
            </section>

            <section class="category">
                <h2 class="category__title">Busque por sua modalidade</h2>
                <span class="category__desc">Escolha a sua categoria de acordo com o seu orçamento</span>
                <div class="category__container">
                    <div class="category__content">
                        <img src="assets/imagens/avancada.webp" alt="">
                        <span>Avançada</span>
                    </div>
                    <div class="category__content">
                        <img src="assets/imagens/intermediaria.webp" alt="">
                        <span>Intermediaria</span>
                    </div>
                    <div class="category__content">
                        <img src="assets/imagens/basica.webp" alt="">
                        <span>Basica</span>
                    </div>
                </div>
            </section>

            <section class="list_bike">
                <h2 class="list_bike__title">Seleção dos especialistas</h2>
                <span>Escolhidas a dedo pelos nossos experts.</span>

                <?php include(__DIR__."/partes/lista-produtos.php"); ?>
            </section>
<?php include(__DIR__."/partes/rodape.php"); ?>
