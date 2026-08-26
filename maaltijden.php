<?php
$pageTitle = 'Maaltijden';

$meals = [
    ['Kip Teriyaki', 'Rijst, broccoli, paprika', '512 kcal', '42g eiwit', '6,49', 'all afvallen', 'pos-1'],
    ['Zalm Citroen', 'Quinoa, sperziebonen', '518 kcal', '34g eiwit', '6,99', 'all onderhoud', 'pos-2'],
    ['Runderreepjes', 'Aardappel, groenten', '603 kcal', '40g eiwit', '6,49', 'all spieropbouw', 'pos-3'],
    ['Kip Pesto Pasta', 'Pasta, pesto, zongedroogde tomaat', '532 kcal', '39g eiwit', '6,49', 'all onderhoud', 'pos-4'],
    ['Gehaktballetjes', 'Rijst, groenten, tomatensaus', '554 kcal', '37g eiwit', '6,49', 'all spieropbouw', 'pos-5'],
    ['Veggie Power Bowl', 'Quinoa, bonen, avocado', '486 kcal', '25g eiwit', '6,49', 'all afvallen', 'pos-6'],
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
            <?php foreach ($meals as $meal): ?>
                <article class="meal-card" data-category="<?= $meal[5] ?>">
                    <div class="meal-image <?= $meal[6] ?>" role="img" aria-label="<?= htmlspecialchars($meal[0]) ?>"></div>
                    <div class="meal-info">
                        <h2><?= htmlspecialchars($meal[0]) ?></h2>
                        <p><?= htmlspecialchars($meal[1]) ?></p>
                        <div class="meal-meta">
                            <span>&#9673; <?= htmlspecialchars($meal[2]) ?></span>
                            <span>&#9673; <?= htmlspecialchars($meal[3]) ?></span>
                            <strong>&euro;<?= htmlspecialchars($meal[4]) ?></strong>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="center">
            <a class="button button-wide" href="contact.php">Stel je eigen pakket samen</a>
        </div>
    </div>
</section>

<?php require 'footer.php'; ?>
