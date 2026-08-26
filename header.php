<?php
$pageTitle = $pageTitle ?? 'FitFuel';
$currentPage = basename($_SERVER['PHP_SELF']);
$navItems = ['index.php'=>'Home','maaltijden.php'=>'Maaltijden','over-ons.php'=>'Over ons','gezonde-voeding.php'=>'Gezonde voeding','contact.php'=>'Contact'];
?>
<!doctype html>
<html lang="nl"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Gezonde, verse maaltijden van FitFuel - afgestemd op jouw doelen.">
<title><?= htmlspecialchars($pageTitle) ?> | FitFuel</title>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<?php if ($currentPage === 'contact.php'): ?><link rel="stylesheet" href="assets/vendor/leaflet/leaflet.css"><?php endif; ?>
<link rel="stylesheet" href="assets/css/style.css?v=<?= filemtime(__DIR__.'/assets/css/style.css') ?>">
</head><body>
<header class="site-header" id="top"><div class="container header-inner">
<a class="brand" href="index.php" aria-label="FitFuel home"><span class="brand-mark" aria-hidden="true"><i></i><i></i></span><span>FITFUEL</span></a>
<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav" aria-label="Menu openen"><span></span><span></span><span></span></button>
<nav class="main-nav" id="main-nav" aria-label="Hoofdnavigatie">
<?php foreach ($navItems as $file=>$label): ?><a href="<?= $file ?>" <?= $currentPage === $file ? 'class="active" aria-current="page"' : '' ?>><?= $label ?></a><?php endforeach; ?>
</nav><a class="button button-small header-cta" href="maaltijden.php">Bestel nu</a>
</div></header><main>
