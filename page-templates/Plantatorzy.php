<?php
/*
Template Name: Plantatorzy
*/

?>


<?php
get_header(); ?>

<section class="section section-info3">
    <div class="section-content ">
        <div class="info">
            <h1>Plantatorzy</h1>
            <p>Ogromne podziękowania dla ludzi, którzy ciężko pracują na każdym etapie procesu.
W naszym przypadku nie nazywamy ich rolnikami, tylko chcemy nazywać ich naszymi
Plantatorami. Dlaczego nie rolnicy? W krajach producentów kawy bardzo często rolnicy
są kojarzeni z biedą i brakami w wykształceniu. </p>
            <p>Dlatego chcielibyśmy docenić tych ludzi i dodatkowo zwrócić uwagę na fakt, że to oni
sprawiają, że kawa w Twojej filiżance jest tak wspaniała. Oprócz ciężkiej pracy są również
narażeni na duże zagrożenia, takie jak: nieurodzaj, spadek cen surowców, klęski żywiołowe,
mniejsze grunty rolne co jest równoznaczne zmniejszeniem zbiorów.</p>
            <p>Plantatorzy są głównym rdzeniem branży kawowej. Ich umiejętności, doświadczenie i wiedza
kształtują różnicę między zwykłą kawą a kawą, której nigdy wcześniej nie piłeś. W naszym
przypadku polegamy na plantatorach właśnie takich cennych ziaren. Dobra palarnia dokłada
wszelkich starań, aby zachować wszystkie integralne cechy tej kawy.</p>
             <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>
        </div>
        <div class="section-info3-images">
            <div class="image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-20.png" alt="coffe">
            </div>
            <div class="image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-19.png" alt="coffe">
            </div>
            <div class="image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-3.png" alt="coffe">
            </div>
            <div class="image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-5.png" alt="coffe">
            </div>
            <div class="image-wrapper">
                <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-4.png" alt="coffe">
            </div>
            <div class="image-wrapper circle">
                <p>więcej zdjęć</p>
            </div>
        </div>
    </div>
</section>


<section class="section section-image2">
    <div class="section-content">

    </div>
    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-18.png" alt="coffe">
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
          <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>
    </div>
</section>


<?php get_footer();