<?php
/*
Template Name: Page Number
*/

?>


<?php
get_header(); ?>




<section class="section section-image1 page-2">
    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/2/Page-1-Image-1.png" alt="nature">
    <img src="<?= get_template_directory_uri() ?>/dist/assets/images/2/Page-1-Image-2.png" alt="nature">
</section>

<section class="section section-info4 "  style="background-image:url(<?= get_template_directory_uri() ?>/dist/assets/images/1/Page-1-Image-6.png);background-size:cover;background-position:center">
    <div class="section-content info">
        <h1>Wypalanie</h1>
        <p>Jakość kawy nie zależy tylko od regionu geograficznego, z którego pochodzi, lecz również
od całego procesu jej uprawy. Najlepsza kawa pochodzi z miejsc gdzie kultywowane jest
poświecenie i ciężka praca w utrzymaniu plantacji oraz obróbki zbiorów.
Nie chcemy znaleźć łatwego wyjścia, którym byłoby po prostu kupowanie ton
kilogramów średniej jakości ziaren kawy dostępnych na rynku. Zamiast tego jedziemy
prosto do źródła aby osobiście zadbać o jak najlepszy surowiec. Każdego roku spędzamy
dobrych kilka tygodni z plantatorami w okresie zbiorów i pomagamy im w codziennych
czynnościach jak zbieranie wisienek z drzew kawowca, znoszeniu ich ze zboczy góry,
czy przewożeniu bambusa do rozbudowy łóżek słonecznych, na których kawa się suszy.
Zwieńczeniem każdego dnia jest wspólna kolacja, która daje poczucie bycia częścią
lokalnej społeczności.
Zależy nam na odwiedzaniu plantacji jak najczęściej. Głównie rozmawiamy o zbiorach i
wprowadzaniu nowych technik upraw i obróbki, które mogą doprowadzić do zwiększenia
produkcji i jakości kawy. Podczas spotkań poruszane są również kwestie społeczne, z
których wykluwają się pomysły w jaki sposób możemy pomoc lokalnej społeczności.
Przede wszystkim naszym celem jest pomoc plantatorom w osiągnięciu bardziej
zrównoważonego rozwoju i ustanowieniu silnych relacji biznesowych , które pomogą
również ulepszyć ich społeczność i co roku produkować najwyższej jakości kawę. Obecnie
nasi główni plantatorzy znajdują się na wyspie Flores w Indonezji. Współpracując ramie
w ramię z Jaramite, przetwarzamy owoce kawowca na zielone ziarno. W przyszłości
naszym planem jest współpraca z innymi plantatorami z różnych obszarów na całym
świecie.</p>
          <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>
    </div>
</section>


<section class="section section-info3">
    <div class="section-content ">
        <div class="info">
            <h1>Plantatorzy</h1>
            <p>Ogromne podziękowania dla ludzi, którzy ciężko pracują na każdym etapie procesu.
            W naszym przypadku nie nazywamy ich rolnikami, tylko chcemy nazywać ich naszymi
            Plantatorami. Dlaczego nie rolnicy? W krajach producentów kawy bardzo często rolnicy
            są kojarzeni z biedą i brakami w wykształceniu. </p>
              <a href="<?php echo get_home_url(); ?>"> <button type="button" class="button">POWRÓT</button></a>
        </div>
    </div>
</section>




<?php get_footer();