<?php
$pageTitle = 'Home';
require 'header.php';
?>

<section class="hero">
    <div class="container hero-content">
        <div class="hero-copy">
            <span class="eyebrow">Elke dag vers bereid</span>
            <h1>Gezond, makkelijk &amp;<br><em>vol energie</em></h1>
            <p>FitFuel maakt het jou makkelijk om elke dag gezond te eten. Eiwitrijk, vers en precies passend bij jouw doelen.</p>

            <ul class="check-list">
                <li>Hoge kwaliteit ingredi&euml;nten</li>
                <li>Rijk aan eiwitten</li>
                <li>Vers bereid, nooit bevroren</li>
                <li>Thuisbezorgd door heel Nederland</li>
            </ul>

            <div class="button-row">
                <a class="button" href="maaltijden.php">Bekijk maaltijden</a>
                <a class="button button-outline" href="#doelen">Stel je pakket samen</a>
            </div>
        </div>

        <div class="price-badge">
            <small>Vanaf</small>
            <strong>&euro;6,49</strong>
            <span>per maaltijd</span>
        </div>
    </div>
</section>

<section class="trust-strip" aria-label="Voordelen van FitFuel">
    <div class="container trust-grid">
        <article><b>&harr;</b><span><strong>Hoge eiwitwaarde</strong>Voor spieropbouw en herstel</span></article>
        <article><b>&#9827;</b><span><strong>100% vers</strong>Dagelijks vers bereid</span></article>
        <article><b>&#9687;</b><span><strong>Tijd besparen</strong>Binnen 2 minuten klaar</span></article>
        <article><b>&#9649;</b><span><strong>Flexibel &amp; makkelijk</strong>Wij bezorgen, jij geniet</span></article>
    </div>
</section>

<section class="light-section" id="doelen">
    <div class="container">
        <header class="section-heading dark-heading">
            <h2>Kies wat <em>bij jou</em> past</h2>
            <p>Of je nu wilt afvallen, aankomen of gewoon gezond wilt eten &mdash; wij hebben een pakket dat bij jou past.</p>
        </header>

        <div class="goal-grid">
            <article class="goal-card crop-1">
                <h3>Afvallen</h3>
                <p>Caloriearm en gebalanceerd voor vetverlies.</p>
                <a href="maaltijden.php">Bekijk &rarr;</a>
            </article>
            <article class="goal-card crop-2">
                <h3>Spieropbouw</h3>
                <p>Rijk aan eiwitten voor maximale resultaten.</p>
                <a href="maaltijden.php">Bekijk &rarr;</a>
            </article>
            <article class="goal-card crop-3">
                <h3>Onderhoud</h3>
                <p>Gezond, gevarieerd en perfect in balans.</p>
                <a href="maaltijden.php">Bekijk &rarr;</a>
            </article>
        </div>

        <article class="coach-card">
            <div>
                <span class="eyebrow">Jouw doelen, onze brandstof</span>
                <h2>Klaar om jouw doelen<br>te bereiken?</h2>
                <p>Bestel vandaag nog jouw favoriete maaltijden en ervaar het gemak van FitFuel.</p>
                <a class="button" href="maaltijden.php">Bestel nu &rarr;</a>
            </div>
        </article>
    </div>
</section>

<?php require 'footer.php'; ?>
