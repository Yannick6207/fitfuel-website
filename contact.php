<?php
$pageTitle = 'Contact';
require 'header.php';
?>

<section class="contact-section">
    <div class="container contact-grid">
        <div class="contact-content">
            <span class="eyebrow">We helpen je graag</span>
            <h1>Contact</h1>
            <p>We helpen je graag verder! Neem contact met ons op via onderstaande gegevens of vul het formulier in.</p>

            <address class="contact-list">
                <div>
                    <i class="bi bi-envelope" aria-hidden="true"></i>
                    <span><strong>E-mail</strong><a href="mailto:info@fitfuel.nl">info@fitfuel.nl</a></span>
                </div>
                <div>
                    <i class="bi bi-telephone" aria-hidden="true"></i>
                    <span><strong>Telefoon</strong><a href="tel:+31612345678">06 12345678</a><br><small>Ma - Vr 09:00 - 17:00</small></span>
                </div>
                <div>
                    <i class="bi bi-geo-alt" aria-hidden="true"></i>
                    <span><strong>Adres</strong>FitFuel<br>Energieweg 12<br>1234 AB Amsterdam</span>
                </div>
            </address>
        </div>

        <form class="contact-form" action="#" method="post">
            <label for="naam">Naam</label>
            <input id="naam" type="text" name="naam" autocomplete="name" required>

            <label for="email">E-mailadres</label>
            <input id="email" type="email" name="email" autocomplete="email" required>

            <label for="onderwerp">Onderwerp</label>
            <input id="onderwerp" type="text" name="onderwerp">

            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht" rows="6" required></textarea>

            <button class="button" type="submit">Verstuur bericht</button>
        </form>
    </div>
</section>

<section class="map-section" aria-label="Kaart met de locatie van FitFuel">
    <div id="fitfuel-map"></div>
    <div class="map-card">
        <span class="map-card-dot" aria-hidden="true"></span>
        <span><strong>FitFuel</strong>Energieweg 12, Amsterdam</span>
        <a href="https://www.google.com/maps/search/?api=1&amp;query=Energieweg+12+Amsterdam" target="_blank" rel="noopener noreferrer">
            Route <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
        </a>
    </div>
</section>

<?php require 'footer.php'; ?>
