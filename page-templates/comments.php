<?php
/*
Template Name: comments
*/

?>


<?php
get_header(); ?>

<section class="section section-comments">
    <div class="section-content info">
        <h1>Piszą o nas</h1>
        <div class="comments-container">
            
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-1.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Robert Moczywąs</h4>   
                    <p>Wreszcie można kupić
                        w Polsce prawdziwa kawę
                        która uprawiana jest...</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-2.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Weronika Latte</h4>   
                    <p>W mojej restauracji podajemy
tylko kawę od sprawdzonych
dostawców, są jedynym
niezmiennie przez nas...</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-3.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Miklosz
Czechosłowacki</h4>   
                    <p>Kupiłem wszystkie rodzaje
i do dzisiaj nie mogę
się zdecydować
na tą jedną...</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-4.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Krzysztof
Aeropresowski</h4>   
                    <p>Ooo mamo, jestem w szoku!
nie zdawaem sobie zprawy
jak może smakować
prawdziwa..</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-5.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Małgosia
Kawiarenkowska</h4>   
                    <p>Kupiłam eum eariscidi aut veni
sit laccatisqui de accus quos
excea prepeliquo temporem
harum dendips undebit,
conescia que sim quatiis es
cus es et quidesequos di sunt
officatatur? Umquia vella
si core dolum erum fugiasi
officiumque volore apis eos
aspel ipsum, te non experibus,
id ut aces eatur audam faccabo.
Ut aliquib usdaest, tentis illabor
roreprae nonseque nisinullab
ipsa dolupta tinulpa volum erro
istior reptatint, qui sum vid es
di cupta volles demporibus ex
eturiam estrum aut</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-6.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Szymon
Jakatakawa</h4>   
                    <p>Ooo mamo, jestem w szoku!
nie zdawaem sobie zprawy
jak może smakować
prawdziwa...</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>
            <div class="item">
                <div class="comments-image-wrapper"  >
                    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/5/Page-1-Image-7.png" alt="avatar">
                </div>
                <div class="item-content">
                    <h4>Joanna
Degustatowicka</h4>   
                    <p>Ooo mamo, jestem w szoku!
nie zdawaem sobie zprawy
jak może smakować
prawdziwa...</p>
                    <button type="button" class="button">WIĘCEJ</button>
                </div>
            </div>

        </div>


      
          <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>

    </div>
</section>

<?php get_footer();