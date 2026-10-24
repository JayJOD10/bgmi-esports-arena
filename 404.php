<?php
http_response_code(404);
$pageTitle = '404 — Arena not found';
require __DIR__.'/includes/header.php';
?>
<section class="page-hero compact" style="text-align:center;padding:clamp(4rem,12vw,9rem) 1rem;">
  <div class="eyebrow">ERROR 404 / OUT OF BOUNDS</div>
  <h1 style="font-size:clamp(5rem,18vw,12rem);line-height:.85;margin:1rem 0;color:#ff6b35;">404<span>.</span></h1>
  <h2>YOU'RE OFF THE MAP.</h2>
  <p class="muted" style="max-width:560px;margin:1rem auto 2rem;">This page isn't in the arena. The link may be broken, or the page may have moved.</p>
  <div class="hero-actions" style="justify-content:center;display:flex;gap:.75rem;flex-wrap:wrap;">
    <a class="btn btn-hot btn-lg rounded-pill" href="/bgmi-esports-arena/index.php">Return to base ↗</a>
    <a class="btn btn-quiet btn-lg rounded-pill" href="/bgmi-esports-arena/tournaments.php">Explore tournaments</a>
  </div>
</section>
<?php require __DIR__.'/includes/footer.php'; ?>
