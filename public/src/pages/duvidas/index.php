<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../global.css">
    <title>Gcycle - Dúvidas</title>
</head>

<body>
    <?php include '../../header.html'; ?>
    <div id="container">
        <div class="w-layout-grid grid">
            <div id="o-que-e" class="div-duvidas-azul">
                <h1 class="tit-duvidas">O que é o Gcycle?</h1>
                <p class="txt-duvidas">O Gcycle é um programa que premia a ação consciente de retornar os materiais recicláveis,
                    cuidando de forma responsável do consumo e da natureza, contribuindo para um futuro melhor.</p>
            </div>
            <div id="por-que-participar" class="div-duvidas-amarelo">
                <h1 class="tit-duvidas">Por que participar?</h1>
                <p class="txt-duvidas">Nos últimos anos, a população brasileira e a produção de lixo cresceram. Porém, a
                    situação do descarte de resíduos no Brasil pouco mudou. Apenas 4% do total dos resíduos sólidos são
                    reciclados hoje. Mesmo com a consciência ambiental do brasileiro avançando, esbarramos na falta de
                    mobilização social.<br><br> O Gcycle surgiu para engajar as pessoas em uma mentalidade
                    sustentável, criando um ciclo positivo que gera benefícios para todos.</p>
            </div>
            <div id="pode-ser-descartado" class="div-duvidas-verde">
                <h1 class="tit-duvidas">O que PODE ser descartado?</h1>
                <ul role="list" class="list-duvidas">
                    <li>Embalagens de plástico como garrafas de água e refrigerante, embalagens de manteiga e margarina,
                        sacos plásticos, frascos de shampoo e material de limpeza, etc.<br><strong></strong></li>
                    <li>Embalagens de aço e alumínio como latas de refrigerante e cerveja, latas aerossol vazias,
                        etc.<br><strong></strong></li>
                    <li>Embalagens cartonadas para líquidos como caixas de leite, suco e polpa de tomate,
                        etc.<br><strong></strong></li>
                    <li>Embalagens de vidro como conservas, além de garrafas de cerveja, de suco,
                        etc.<strong></strong><br></li>
                    <li>Óleo de cozinha<strong></strong><br></li>
                    <li>Eletrônicos como celulares, tablets, notebooks, impressoras, TVs, aparelhos de DVD,
                        etc.<strong></strong><br></li>
                    <li>Eletroportáteis como secadores de cabelo, aspiradores de pó, liquidificadores,
                        etc.<strong></strong><br></li>
                    <li>Pilhas e baterias em geral - <strong>EXCETO níquel-cadmio</strong><br></li>
                    <li>Lâmpadas em geral - <strong>EXCETO fluorescentes tubulares</strong><br></li>
                    <li>Linha branca: geladeiras, máquina de lavar, etc.<br></li>
                </ul>
            </div>
            <div id="nao-descartado" class="div-duvidas-vermelho">
                <h1 class="tit-duvidas">O que NÃO pode ser descartado?</h1>
                <ul role="list" class="list-duvidas">
                    <li>Lixo orgânico: resto de comida, cascas de legumes, frutas, cascas de ovo, etc.</li>
                    <li>Rejeitos: lenços, papel higiênico, absorventes e guardanapos de papel, etc.</li>
                    <li>Alguns tipos de papel: carbono, celofane, encerados ou plastificados, além de fotografias</li>
                    <li>Materiais como isopor de bandejinha (que contém carne, peixe, frango etc.), espuma, acrílico,
                        espelhos, cerâmica, porcelana, tijolos, etc.<br></li>
                    <li>Lâmpadas fluorescentes tubulares<br></li>
                    <li>Pilhas e baterias níquel-cadmio<br></li>
                    <li>Móveis<br></li>
                    <li>Roupas e outros tecidos<br></li>
                    <li>Madeira</li>
                    <li>Cerâmica e entulho em geral<br></li>
                </ul>
            </div>
            <div id="como-participar" class="div-duvidas-azul">
                <h1 class="tit-duvidas">Como participar?</h1>
                <p class="txt-duvidas">1. Cadastre-se no Gcycle<br> <br>2. Leve seus recicláveis limpos e separados à
                    loja Gcycle mais próxima<br> <br>3. Acumule pontos de fidelidade em troca de seus recicláveis<br>
                    <br>4. acompanhe e resgate seus pontos para trocá-los por benefícios<br><br><em>*você pode resgatar
                        diversos produtos, entre itens de supermercado, lazer, esportes e muitos outros *</em></p>
            </div>
        </div>
    </div>
    <?php include '../../footer.html'; ?>
</body>

</html>