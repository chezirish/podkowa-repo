<?php
/*
Template Name: wypalanie
*/

?>


<?php
get_header(); ?>




<section class="section section-image1 page-2">
    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/4/Page-1-Image-1.png" alt="nature">
    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/4/Page-1-Image-2.png" alt="nature">
</section>

<section class="section section-info4 "  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-6.png);background-size:cover;background-position:center">
    <div class="section-content info">
        <h1>Wypalanie</h1>
        <p>W Podkawie wypalamy kawę metodą rzemieślniczą. W ten sposób mamy 100% kontrolę
nad efektem końcowym. Naszym głównym celem jest stworzenie oryginalnego smaku
w filiżance, aby nasi klienci mogli z radością pić każdą filiżankę.</p>
<p>Staramy się wydobyć pełny potencjał każdej poszczególnej kawy jak np kwaskowatość,
czekoladę, nuty ziołowe itp. Wypalamy kawę tylko na tyle, aby uzyskać idealny balans
między słodyczą i cielistością, bez nadmiernego przepalenia ziaren.</p>
<p>Wypalanie wszystkich kaw na „jedno kopyto”? To nie zadziała. Wypalanie dla koloru,
a nie smaku? Lepiej tego nie robić, ponieważ te ziarna wędrowały po całym świecie, a
najważniejsze jest to, że plantatorzy wykonali tak wiele pracy, aby wyprodukować wysokiej
jakości produkt, który zasługuje na najwyższą uwagę.</p>
         <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>
    </div>
</section>

<section class="section section-products">
    <div class="section-content">
        <h1>Posmakuj naszego świata / sklep</h1>
        <div class="product-item-wrapper">
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
            <div class="product-item">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-2.png" alt="product">
                <p>espresso roast</p>
                <span>69.99 PLN</span>
            </div>
        </div>
          <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>"> <button type="button" class="button">WIĘCEJ</button></a>
    </div>
</section>





<?php get_footer();