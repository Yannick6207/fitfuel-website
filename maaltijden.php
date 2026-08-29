<?php
$pageTitle = 'Maaltijden';

$meals = [
    [
        'name' => 'Kip Teriyaki',
        'summary' => 'Rijst, broccoli, paprika',
        'calories' => 512,
        'protein' => 42,
        'carbs' => 58,
        'fat' => 12,
        'price' => '6,49',
        'category' => 'all afvallen',
        'image' => 'kip-teriyaki-v2.png',
        'ingredients' => ['150 g kipfilet', '75 g zilvervliesrijst', '100 g broccoli', '75 g rode paprika', '2 el teriyakisaus', '1 tl sesamzaad', '1 bosui'],
        'preparation' => 'Kook de rijst volgens de verpakking. Snijd de kip en paprika in reepjes en verdeel de broccoli in roosjes. Bak de kip goudbruin, voeg de groenten toe en roerbak tot ze beetgaar zijn. Schenk de teriyakisaus erbij en laat kort inkoken. Serveer met de rijst, sesamzaad en fijngesneden bosui.',
    ],
    [
        'name' => 'Zalm Citroen',
        'summary' => 'Quinoa, sperziebonen',
        'calories' => 518,
        'protein' => 34,
        'carbs' => 43,
        'fat' => 22,
        'price' => '6,99',
        'category' => 'all onderhoud',
        'image' => 'zalm-citroen-v2.png',
        'ingredients' => ['150 g zalmfilet', '70 g quinoa', '150 g sperziebonen', '1/2 citroen', '1 tl olijfolie', '1 teen knoflook', 'Verse peterselie'],
        'preparation' => 'Kook de quinoa en sperziebonen afzonderlijk beetgaar. Bestrijk de zalm met olijfolie, knoflook, citroensap, peper en zout. Bak de zalm op de huid en keer hem kort om tot hij net gaar is. Serveer op de quinoa met de bonen en werk af met citroenrasp en peterselie.',
    ],
    [
        'name' => 'Runderreepjes',
        'summary' => 'Aardappel, groenten',
        'calories' => 603,
        'protein' => 40,
        'carbs' => 55,
        'fat' => 23,
        'price' => '6,49',
        'category' => 'all spieropbouw',
        'image' => 'runderreepjes-v2.png',
        'ingredients' => ['160 g runderreepjes', '220 g krieltjes', '75 g rode paprika', '75 g courgette', '1/2 ui', '1 tl olijfolie', 'Paprikapoeder en tijm'],
        'preparation' => 'Halveer de krieltjes en rooster ze met olie, tijm en paprikapoeder in de oven. Snijd de groenten grof en bak ze beetgaar. Schroei de runderreepjes op hoog vuur kort rondom bruin. Meng alles vlak voor het serveren en breng op smaak met peper en zout.',
    ],
    [
        'name' => 'Kip Pesto Pasta',
        'summary' => 'Pasta, pesto, zongedroogde tomaat',
        'calories' => 532,
        'protein' => 39,
        'carbs' => 57,
        'fat' => 16,
        'price' => '6,49',
        'category' => 'all onderhoud',
        'image' => 'kip-pesto-pasta-v2.png',
        'ingredients' => ['150 g kipfilet', '80 g volkoren pasta', '25 g groene pesto', '40 g zongedroogde tomaat', '50 g spinazie', '10 g Parmezaanse kaas', 'Verse basilicum'],
        'preparation' => 'Kook de pasta al dente en bewaar een scheut kookvocht. Bak de kip in blokjes goudbruin en gaar. Voeg spinazie en zongedroogde tomaat toe. Schep de pasta, pesto en een beetje kookvocht erdoor. Garneer met Parmezaanse kaas en basilicum.',
    ],
    [
        'name' => 'Gehaktballetjes',
        'summary' => 'Rijst, groenten, tomatensaus',
        'calories' => 554,
        'protein' => 37,
        'carbs' => 61,
        'fat' => 17,
        'price' => '6,49',
        'category' => 'all spieropbouw',
        'image' => 'gehaktballetjes-v2.png',
        'ingredients' => ['160 g mager rundergehakt', '70 g zilvervliesrijst', '150 g tomatenblokjes', '75 g courgette', '50 g wortel', '1/2 ui', 'Italiaanse kruiden'],
        'preparation' => 'Kook de rijst volgens de verpakking. Meng het gehakt met de helft van de kruiden en vorm kleine balletjes. Bak ze rondom bruin. Fruit ui, wortel en courgette, voeg de tomaten toe en laat de saus zacht inkoken. Laat de balletjes in de saus gaar worden en serveer met de rijst.',
    ],
    [
        'name' => 'Veggie Power Bowl',
        'summary' => 'Quinoa, bonen, avocado',
        'calories' => 486,
        'protein' => 25,
        'carbs' => 59,
        'fat' => 17,
        'price' => '6,49',
        'category' => 'all afvallen',
        'image' => 'veggie-power-bowl-v2.png',
        'ingredients' => ['70 g quinoa', '120 g zwarte bonen', '1/2 avocado', '75 g cherrytomaten', '50 g mais', '1/2 limoen', 'Verse koriander'],
        'preparation' => 'Kook de quinoa en laat hem kort uitdampen. Spoel de bonen en mais af en halveer de tomaten. Verdeel alles over een kom en voeg de avocado in plakjes toe. Besprenkel met limoensap en breng op smaak met peper, zout en verse koriander.',
    ],
];

require 'header.php';
?>

<section class="page-hero compact">
    <div class="container">
        <header class="section-heading">
            <span class="eyebrow">Vers op jouw bord</span>
            <h1>Onze <em>maaltijden</em></h1>
            <p>Heerlijke, voedzame maaltijden met alleen de beste ingredi&euml;nten. Kies jouw favorieten of stel je eigen pakket samen.</p>
        </header>
    </div>
</section>

<section class="meals-section">
    <div class="container">
        <div class="filters" role="group" aria-label="Filter maaltijden">
            <button class="active" type="button" data-filter="all">Alle maaltijden</button>
            <button type="button" data-filter="afvallen">Afvallen</button>
            <button type="button" data-filter="spieropbouw">Spieropbouw</button>
            <button type="button" data-filter="onderhoud">Onderhoud</button>
        </div>

        <div class="meal-grid">
            <?php foreach ($meals as $index => $meal): ?>
                <article class="meal-card" data-category="<?= htmlspecialchars($meal['category']) ?>" data-meal-index="<?= $index ?>" role="button" tabindex="0" aria-haspopup="dialog" aria-label="Bekijk het recept voor <?= htmlspecialchars($meal['name']) ?>">
                    <div class="meal-image">
                        <img src="assets/images/<?= htmlspecialchars($meal['image']) ?>" alt="<?= htmlspecialchars($meal['name']) ?>" width="768" height="768" loading="lazy">
                    </div>
                    <div class="meal-info">
                        <h2><?= htmlspecialchars($meal['name']) ?></h2>
                        <p><?= htmlspecialchars($meal['summary']) ?></p>
                        <div class="meal-meta">
                            <span>&#9673; <?= $meal['calories'] ?> kcal</span>
                            <span>&#9673; <?= $meal['protein'] ?>g eiwit</span>
                            <strong>&euro;<?= htmlspecialchars($meal['price']) ?></strong>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="center">
            <button class="button button-wide" id="open-meal-builder" type="button" aria-haspopup="dialog">Stel je eigen pakket samen</button>
        </div>
    </div>
</section>

<div class="recipe-modal" id="recipe-modal" hidden>
    <div class="recipe-modal__backdrop"></div>
    <section class="recipe-dialog" role="dialog" aria-modal="true" aria-labelledby="recipe-title" tabindex="-1">
        <button class="recipe-dialog__close" type="button" aria-label="Recept sluiten">
            <span aria-hidden="true"></span>
        </button>

        <div class="recipe-dialog__image">
            <img src="" alt="" width="768" height="768">
        </div>

        <div class="recipe-dialog__content">
            <span class="eyebrow">FitFuel recept</span>
            <h2 id="recipe-title"></h2>

            <div class="recipe-nutrition" aria-label="Voedingswaarden per maaltijd">
                <div><strong data-nutrition="calories"></strong><span>Calorie&euml;n</span></div>
                <div><strong data-nutrition="protein"></strong><span>Eiwitten</span></div>
                <div><strong data-nutrition="carbs"></strong><span>Koolhydraten</span></div>
                <div><strong data-nutrition="fat"></strong><span>Vetten</span></div>
            </div>

            <div class="recipe-details">
                <div>
                    <h3>Ingredi&euml;nten</h3>
                    <ul id="recipe-ingredients"></ul>
                </div>
                <div>
                    <h3>Bereidingswijze</h3>
                    <p id="recipe-preparation"></p>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="meal-builder-modal recipe-modal" id="meal-builder-modal" hidden>
    <div class="recipe-modal__backdrop"></div>
    <section class="meal-builder-dialog" role="dialog" aria-modal="true" aria-labelledby="meal-builder-title" tabindex="-1">
        <button class="recipe-dialog__close meal-builder-dialog__close" type="button" aria-label="Maaltijdsamensteller sluiten">
            <span aria-hidden="true"></span>
        </button>

        <header class="meal-builder-header">
            <span class="eyebrow">Maak hem helemaal van jou</span>
            <h2 id="meal-builder-title">Stel je eigen <em>maaltijd</em> samen</h2>
            <p>Kies per onderdeel jouw favoriet. De geschatte voedingswaarden worden direct voor je berekend.</p>
        </header>

        <form class="meal-builder-form">
            <div class="meal-builder-choices">
                <fieldset class="builder-group">
                    <legend><span>01</span> Kies je eiwitbron</legend>
                    <div class="builder-options">
                        <button class="builder-option selected" type="button" data-builder-option data-group="protein" data-name="Kipfilet" data-calories="248" data-protein="46" data-carbs="0" data-fat="5" aria-pressed="true">Kipfilet</button>
                        <button class="builder-option" type="button" data-builder-option data-group="protein" data-name="Biefstuk" data-calories="300" data-protein="42" data-carbs="0" data-fat="14" aria-pressed="false">Biefstuk</button>
                        <button class="builder-option" type="button" data-builder-option data-group="protein" data-name="Gehakt" data-calories="330" data-protein="35" data-carbs="0" data-fat="21" aria-pressed="false">Gehakt</button>
                        <button class="builder-option" type="button" data-builder-option data-group="protein" data-name="Garnalen" data-calories="170" data-protein="36" data-carbs="1" data-fat="2" aria-pressed="false">Garnalen</button>
                        <button class="builder-option" type="button" data-builder-option data-group="protein" data-name="Zalm" data-calories="310" data-protein="34" data-carbs="0" data-fat="19" aria-pressed="false">Zalm</button>
                        <button class="builder-option" type="button" data-builder-option data-group="protein" data-name="Vegetarische optie" data-calories="220" data-protein="24" data-carbs="8" data-fat="11" aria-pressed="false">Vegetarisch</button>
                    </div>
                </fieldset>

                <fieldset class="builder-group">
                    <legend><span>02</span> Kies je koolhydraatbron</legend>
                    <div class="builder-options">
                        <button class="builder-option selected" type="button" data-builder-option data-group="carbs" data-name="Rijst" data-calories="260" data-protein="5" data-carbs="56" data-fat="1" aria-pressed="true">Rijst</button>
                        <button class="builder-option" type="button" data-builder-option data-group="carbs" data-name="Pasta" data-calories="280" data-protein="10" data-carbs="55" data-fat="2" aria-pressed="false">Pasta</button>
                        <button class="builder-option" type="button" data-builder-option data-group="carbs" data-name="Aardappelen" data-calories="180" data-protein="4" data-carbs="39" data-fat="0" aria-pressed="false">Aardappelen</button>
                        <button class="builder-option" type="button" data-builder-option data-group="carbs" data-name="Zoete aardappel" data-calories="190" data-protein="4" data-carbs="44" data-fat="0" aria-pressed="false">Zoete aardappel</button>
                        <button class="builder-option" type="button" data-builder-option data-group="carbs" data-name="Quinoa" data-calories="220" data-protein="8" data-carbs="39" data-fat="4" aria-pressed="false">Quinoa</button>
                    </div>
                </fieldset>

                <fieldset class="builder-group">
                    <legend><span>03</span> Kies je groenten</legend>
                    <div class="builder-options">
                        <button class="builder-option selected" type="button" data-builder-option data-group="vegetables" data-name="Broccoli" data-calories="55" data-protein="4" data-carbs="7" data-fat="1" aria-pressed="true">Broccoli</button>
                        <button class="builder-option" type="button" data-builder-option data-group="vegetables" data-name="Paprika" data-calories="45" data-protein="2" data-carbs="9" data-fat="0" aria-pressed="false">Paprika</button>
                        <button class="builder-option" type="button" data-builder-option data-group="vegetables" data-name="Sperziebonen" data-calories="50" data-protein="3" data-carbs="8" data-fat="0" aria-pressed="false">Sperziebonen</button>
                        <button class="builder-option" type="button" data-builder-option data-group="vegetables" data-name="Wortel" data-calories="50" data-protein="1" data-carbs="11" data-fat="0" aria-pressed="false">Wortel</button>
                        <button class="builder-option" type="button" data-builder-option data-group="vegetables" data-name="Courgette" data-calories="35" data-protein="2" data-carbs="5" data-fat="0" aria-pressed="false">Courgette</button>
                        <button class="builder-option" type="button" data-builder-option data-group="vegetables" data-name="Gemengde groenten" data-calories="60" data-protein="3" data-carbs="10" data-fat="1" aria-pressed="false">Gemengde groenten</button>
                    </div>
                </fieldset>

                <fieldset class="builder-group">
                    <legend><span>04</span> Kies eventueel een saus</legend>
                    <div class="builder-options">
                        <button class="builder-option" type="button" data-builder-option data-group="sauce" data-name="Pesto" data-calories="120" data-protein="2" data-carbs="2" data-fat="12" aria-pressed="false">Pesto</button>
                        <button class="builder-option selected" type="button" data-builder-option data-group="sauce" data-name="Teriyakisaus" data-calories="65" data-protein="1" data-carbs="14" data-fat="0" aria-pressed="true">Teriyaki</button>
                        <button class="builder-option" type="button" data-builder-option data-group="sauce" data-name="Tomatensaus" data-calories="40" data-protein="1" data-carbs="7" data-fat="1" aria-pressed="false">Tomatensaus</button>
                        <button class="builder-option" type="button" data-builder-option data-group="sauce" data-name="Knoflooksaus" data-calories="110" data-protein="1" data-carbs="4" data-fat="10" aria-pressed="false">Knoflooksaus</button>
                        <button class="builder-option" type="button" data-builder-option data-group="sauce" data-name="Geen saus" data-calories="0" data-protein="0" data-carbs="0" data-fat="0" aria-pressed="false">Geen saus</button>
                    </div>
                </fieldset>
            </div>

            <aside class="meal-builder-summary" aria-live="polite">
                <span class="eyebrow">Jouw selectie</span>
                <h3>Jouw maaltijd</h3>
                <ul class="builder-selection">
                    <li><span>Eiwitbron</span><strong data-selection="protein">Kipfilet</strong></li>
                    <li><span>Koolhydraten</span><strong data-selection="carbs">Rijst</strong></li>
                    <li><span>Groenten</span><strong data-selection="vegetables">Broccoli</strong></li>
                    <li><span>Saus</span><strong data-selection="sauce">Teriyakisaus</strong></li>
                </ul>

                <div class="recipe-nutrition builder-nutrition" aria-label="Geschatte voedingswaarden">
                    <div><strong data-builder-nutrition="calories">628</strong><span>Calorie&euml;n</span></div>
                    <div><strong data-builder-nutrition="protein">56g</strong><span>Eiwitten</span></div>
                    <div><strong data-builder-nutrition="carbs">77g</strong><span>Koolhydraten</span></div>
                    <div><strong data-builder-nutrition="fat">7g</strong><span>Vetten</span></div>
                </div>

                <button class="button builder-submit" type="submit">Voeg mijn maaltijd toe</button>
                <p class="builder-confirmation" role="status" hidden>Je FitFuel-maaltijd is samengesteld!</p>
                <small>Voedingswaarden zijn een schatting per portie.</small>
            </aside>
        </form>
    </section>
</div>

<script type="application/json" id="meal-recipes"><?= json_encode($meals, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?></script>

<?php require 'footer.php'; ?>
