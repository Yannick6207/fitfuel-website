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
                <a class="button button-outline" href="/maaltijden.php">Stel je pakket samen</a>
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
        <article>
            <span class="trust-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M17.596 12.768a2 2 0 1 0 2.829-2.829l-1.768-1.767a2 2 0 0 0 2.828-2.829l-2.828-2.828a2 2 0 0 0-2.829 2.828l-1.767-1.768a2 2 0 1 0-2.829 2.829z"/><path d="m2.5 21.5 1.4-1.4"/><path d="m20.1 3.9 1.4-1.4"/><path d="M5.343 21.485a2 2 0 1 0 2.829-2.828l1.767 1.768a2 2 0 1 0 2.829-2.829l-6.364-6.364a2 2 0 1 0-2.829 2.829l1.768 1.767a2 2 0 0 0-2.828 2.829z"/><path d="m9.6 14.4 4.8-4.8"/></svg>
            </span>
            <span><strong>Hoge eiwitwaarde</strong>Voor spieropbouw en herstel</span>
        </article>
        <article>
            <span class="trust-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M7 20h10"/><path d="M10 20c5.5-2.5.8-6.4 3-10"/><path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/><path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/></svg>
            </span>
            <span><strong>100% vers</strong>Dagelijks vers bereid</span>
        </article>
        <article>
            <span class="trust-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 6v6h4"/><circle cx="12" cy="12" r="10"/></svg>
            </span>
            <span><strong>Tijd besparen</strong>Binnen 2 minuten klaar</span>
        </article>
        <article>
            <span class="trust-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M12 22V12"/><path d="m16 17 2 2 4-4"/><path d="M21 11.127V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.729l7 4a2 2 0 0 0 2 .001l1.32-.753"/><path d="M3.29 7 12 12l8.71-5"/><path d="m7.5 4.27 8.997 5.148"/></svg>
            </span>
            <span><strong>Flexibel &amp; makkelijk</strong>Wij bezorgen, jij geniet</span>
        </article>
    </div>
</section>

<section class="light-section" id="doelen">
    <div class="container">
        <header class="section-heading dark-heading">
            <h2>Kies wat <em>bij jou</em> past</h2>
            <p>Of je nu wilt afvallen, aankomen of gewoon gezond wilt eten &mdash; wij hebben een pakket dat bij jou past.</p>
        </header>

        <div class="goal-grid">
            <article class="goal-card">
                <img class="goal-card__image" src="assets/images/kip-teriyaki-v2.png" alt="Kip teriyaki met rijst en groenten" width="768" height="768" loading="lazy">
                <h3>Afvallen</h3>
                <p>Caloriearm en gebalanceerd voor vetverlies.</p>
                <a href="maaltijden.php?filter=afvallen">Bekijk &rarr;</a>
            </article>
            <article class="goal-card">
                <img class="goal-card__image" src="assets/images/runderreepjes-v2.png" alt="Runderreepjes met aardappelen en groenten" width="768" height="768" loading="lazy">
                <h3>Spieropbouw</h3>
                <p>Rijk aan eiwitten voor maximale resultaten.</p>
                <a href="maaltijden.php?filter=spieropbouw">Bekijk &rarr;</a>
            </article>
            <article class="goal-card">
                <img class="goal-card__image" src="assets/images/zalm-citroen-v2.png" alt="Zalm met quinoa en sperziebonen" width="768" height="768" loading="lazy">
                <h3>Onderhoud</h3>
                <p>Gezond, gevarieerd en perfect in balans.</p>
                <a href="maaltijden.php?filter=onderhoud">Bekijk &rarr;</a>
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
