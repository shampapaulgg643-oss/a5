<?php
// Ratchet Violet — homepage
date_default_timezone_set('America/New_York');
$serverTime = date('H:i:s');
$flash = ''; $okay = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['report_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'report_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['pager'])) { $okay = true; $flash = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $okay = true; $flash = 'You are subscribed. The next Ratchet Report lands on the first Friday of the month.';
    } else { $flash = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ratchet Violet | How Mechanical Watches Work, Complications &amp; Care</title>
<meta name="description" content="An independent guide to mechanical watches: how movements work, the ratchet wheel and escapement, complications, water resistance, straps and watch care.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.ratchetviolet.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Ratchet Violet">
<meta property="og:title" content="Ratchet Violet | How Mechanical Watches Work, Complications &amp; Care"><meta property="og:description" content="An independent guide to mechanical watches: how movements work, the ratchet wheel and escapement, complications, water resistance, straps and watch care.">
<meta property="og:url" content="https://www.ratchetviolet.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#5B3FD1">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Ccircle cx='20' cy='20' r='18' fill='%235B3FD1'/%3E%3Ccircle cx='20' cy='20' r='9' fill='%232A1B5E'/%3E%3Cpath d='M20 20 L20 12' stroke='%23FF7A1A' stroke-width='3' stroke-linecap='round'/%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;600&family=IBM+Plex+Sans:wght@400;500;600&family=Unbounded:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Ratchet Violet", "url": "https://www.ratchetviolet.com/", "email": "hello@ratchetviolet.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What does “ratchet wheel” mean on a watch?", "acceptedAnswer": {"@type": "Answer", "text": "The ratchet wheel is a toothed wheel fixed to the mainspring barrel arbor. When you wind the crown, the ratchet wheel turns and tightens the mainspring. A small spring-loaded pawl, called the click, stops it from slipping back, so the stored energy cannot escape the wrong way."}}, {"@type": "Question", "name": "Is a mechanical watch more accurate than quartz?", "acceptedAnswer": {"@type": "Answer", "text": "No. A good quartz watch is typically accurate to within about 15 seconds a month, while a well-adjusted mechanical watch may gain or lose several seconds a day. People choose mechanical watches for craftsmanship and longevity, not superior precision."}}, {"@type": "Question", "name": "How often should a mechanical watch be serviced?", "acceptedAnswer": {"@type": "Answer", "text": "Many manufacturers suggest a full service roughly every five to ten years, depending on the movement and how it is used. Follow the recommendation for your specific watch, and have it checked sooner if it starts running erratically."}}, {"@type": "Question", "name": "Can I wear an automatic watch while sleeping or exercising?", "acceptedAnswer": {"@type": "Answer", "text": "You can, though impacts during sport are not ideal for any mechanical watch. Most automatics have enough power reserve to keep running overnight if they are taken off, typically around 38 to 80 hours depending on the movement."}}, {"@type": "Question", "name": "Do magnets affect watches?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Strong magnetic fields from speakers, laptop closures, phone cases or bag clasps can magnetise a mechanical watch’s hairspring, making it run very fast. A watchmaker can demagnetise it quickly and inexpensively."}}, {"@type": "Question", "name": "Does Ratchet Violet sell watches?", "acceptedAnswer": {"@type": "Answer", "text": "No. We are an independent educational guide. We do not sell watches and we are not affiliated with any watch brand or retailer."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Ratchet Violet home"><svg viewBox="0 0 40 40" aria-hidden="true"><circle cx="20" cy="20" r="17" fill="#5B3FD1"/><g fill="#FAFAF7"><rect x="19" y="2.5" width="2" height="5" transform="rotate(0 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(30 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(60 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(90 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(120 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(150 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(180 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(210 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(240 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(270 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(300 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(330 20 20)"/></g><circle cx="20" cy="20" r="9" fill="#2A1B5E"/><path d="M20 20 L20 13" stroke="#FF7A1A" stroke-width="2.2" stroke-linecap="round"/></svg><span>Ratchet<b>Violet</b></span></a>
    <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page">Home</a></li><li><a href="how-watches-work.html">How Watches Work</a></li><li><a href="watch-care.html">Watch Care</a></li><li><a href="about.html">About</a></li><li><a href="contact.html">Contact</a></li></ul></nav>
    <span class="clock" id="hdr-clock" aria-label="Current local time"><?php echo $serverTime; ?></span>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero grid-bg">
  <div class="wrap">
    <div class="hero-grid">
      <div>
        <span class="code">Mechanical watches, explained</span>
        <h1>Every tick has a <em>story</em> behind it.</h1>
        <p class="lead">Ratchet Violet is an independent guide to how watches work. We take apart the movement, decode the complications and share practical care advice, so you can understand and enjoy the watch on your wrist.</p>
        <div class="ctas"><a class="btn" href="how-watches-work.html">How a watch works &rarr;</a><a class="btn btn--o" href="watch-care.html">Care guide</a></div>
      </div>
      <div class="dial-card">
        <div class="photo"><img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=700&q=75" alt="silver chronograph wristwatch with a brown leather strap" width="700" height="933" fetchpriority="high"></div>
        <div class="dial"><svg viewBox="0 0 300 300" role="img" aria-label="Live watch dial showing the current time">
<circle cx="150" cy="150" r="146" fill="#2A1B5E"/><circle cx="150" cy="150" r="136" fill="#FAFAF7"/>
<circle cx="150" cy="150" r="128" fill="none" stroke="#E6E0FF" stroke-width="1"/>
<line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(0 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(6 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(12 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(18 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(24 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(30 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(36 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(42 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(48 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(54 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(60 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(66 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(72 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(78 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(84 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(90 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(96 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(102 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(108 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(114 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(120 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(126 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(132 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(138 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(144 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(150 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(156 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(162 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(168 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(174 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(180 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(186 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(192 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(198 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(204 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(210 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(216 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(222 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(228 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(234 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(240 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(246 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(252 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(258 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(264 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(270 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(276 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(282 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(288 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(294 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(300 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(306 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(312 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(318 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(324 150 150)"/><line x1="150" y1="22" x2="150" y2="36" stroke="#2A1B5E" stroke-width="4" transform="rotate(330 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(336 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(342 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(348 150 150)"/><line x1="150" y1="26" x2="150" y2="36" stroke="#B9AEE6" stroke-width="1.5" transform="rotate(354 150 150)"/>
<text x="150" y="98" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="11" fill="#5B3FD1" letter-spacing="2">RATCHET VIOLET</text>
<text x="150" y="214" text-anchor="middle" font-family="IBM Plex Mono, monospace" font-size="9" fill="#5E5A66" letter-spacing="1.5">28,800 A/H</text>
<g id="h-hour"><path d="M146 160 L148 82 L152 82 L154 160 Z" fill="#121014"/></g>
<g id="h-min"><path d="M147.5 162 L149 48 L151 48 L152.5 162 Z" fill="#121014"/></g>
<g id="h-sec"><line x1="150" y1="176" x2="150" y2="40" stroke="#FF7A1A" stroke-width="2"/><circle cx="150" cy="58" r="5" fill="none" stroke="#FF7A1A" stroke-width="2"/></g>
<circle cx="150" cy="150" r="7" fill="#5B3FD1"/><circle cx="150" cy="150" r="2.5" fill="#FAFAF7"/>
</svg><span class="label">Live: your local time, 8 beats per second</span></div>
      </div>
    </div>
    <div class="specs">
      <div><strong>28,800</strong><span>vibrations per hour in many modern movements (4 Hz)</span></div>
      <div><strong>~130</strong><span>individual parts in a typical automatic movement</span></div>
      <div><strong>38&ndash;80 h</strong><span>common power reserve once fully wound</span></div>
      <div><strong>5&ndash;10 yrs</strong><span>typical recommended service interval</span></div>
    </div>
  </div>
</section>

<section class="sec" aria-labelledby="mv-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">01 / Inside the movement</span><h2 id="mv-t">Six parts that turn a spring into time</h2></div><p>A mechanical watch has no battery. Energy stored in a coiled spring is released in tiny, perfectly regular steps. These are the components that make it happen.</p></div>
    <div class="parts">
      <div class="parts-img">
        <div class="pic"><img src="https://images.unsplash.com/photo-1633451238042-85d93d267866?auto=format&fit=crop&w=900&q=75" alt="close-up of a watch dial with the movement gears visible" width="900" height="600" loading="lazy"></div>
        <div class="row">
          <div class="pic"><img src="https://images.unsplash.com/photo-1583198432859-635beb4e8600?auto=format&fit=crop&w=600&q=75" alt="gold and silver watch gears and round components" width="600" height="400" loading="lazy"></div>
          <div class="pic"><img src="https://images.unsplash.com/photo-1593062037896-764e9f52029e?auto=format&fit=crop&w=600&q=75" alt="interlocking metal cogs and gears" width="600" height="400" loading="lazy"></div>
        </div>
      </div>
      <div class="part-list">
        <div class="part"><span class="n">01</span><h3>Mainspring</h3><p>A long, coiled ribbon of alloy inside a drum called the barrel. Winding it stores the energy that powers the watch.</p></div>
        <div class="part key"><span class="n">02</span><h3>Ratchet wheel &amp; click</h3><p>The ratchet wheel tightens the mainspring as you wind. The click, a small pawl, lets it turn only one way.</p></div>
        <div class="part"><span class="n">03</span><h3>Gear train</h3><p>A series of wheels carries energy from the barrel toward the escapement and sets the speed of the hands.</p></div>
        <div class="part"><span class="n">04</span><h3>Escapement</h3><p>The escape wheel and pallet fork release energy in tiny, equal portions. This is the source of the &ldquo;tick&rdquo;.</p></div>
        <div class="part"><span class="n">05</span><h3>Balance wheel</h3><p>With its hairspring, it swings back and forth at a steady rate. It is the watch&#8217;s heartbeat and timekeeper.</p></div>
        <div class="part"><span class="n">06</span><h3>Keyless works</h3><p>The levers and wheels behind the crown that let you wind the watch and set the time without opening the case.</p></div>
      </div>
    </div>
    <p style="margin-top:30px"><a class="btn btn--o" href="how-watches-work.html">Read the full movement guide</a></p>
  </div>
</section>

<section class="sec" style="background:var(--paper2);border-top:1px solid var(--line);border-bottom:1px solid var(--line)" aria-labelledby="ty-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">02 / Movement types</span><h2 id="ty-t">Manual, automatic or quartz?</h2></div><p>The movement is the engine of the watch. Each type has its own character, upkeep and appeal.</p></div>
    <div class="types">
      <article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1646724684583-764bb3f47c1f?auto=format&fit=crop&w=700&q=75" alt="close-up view of a classic analog watch face" width="700" height="480" loading="lazy"></div><div class="t"><h3>Manual (hand-wound)</h3><p class="muted">The traditional approach. You wind the crown every day or two to keep it running, a small ritual many owners love.</p><dl><dt>Power</dt><dd>Wind by hand</dd><dt>Feel</dt><dd>Thin cases, classic look</dd><dt>Upkeep</dt><dd>Periodic service</dd></dl></div></article>
      <article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1611243705491-71487c2ed137?auto=format&fit=crop&w=700&q=75" alt="blue and silver round analog wristwatch" width="700" height="480" loading="lazy"></div><div class="t"><h3>Automatic</h3><p class="muted">A weighted rotor spins with the motion of your wrist and winds the mainspring for you. Worn daily, it rarely stops.</p><dl><dt>Power</dt><dd>Wrist movement</dd><dt>Feel</dt><dd>Smooth sweeping seconds</dd><dt>Upkeep</dt><dd>Periodic service</dd></dl></div></article>
      <article class="type"><div class="pic"><img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&w=700&q=75" alt="person holding an analog watch in their hand" width="700" height="480" loading="lazy"></div><div class="t"><h3>Quartz</h3><p class="muted">A battery sends current through a tiny quartz crystal that vibrates 32,768 times a second. Very accurate and low maintenance.</p><dl><dt>Power</dt><dd>Battery</dd><dt>Feel</dt><dd>One-step seconds hand</dd><dt>Upkeep</dt><dd>Battery every few years</dd></dl></div></article>
    </div>
  </div>
</section>

<section class="sec dark grid-bg" id="complications" aria-labelledby="cp-t" style="--grid:rgba(255,255,255,.04)">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">03 / Complications</span><h2 id="cp-t">Anything a watch does beyond telling time</h2></div><p>In watchmaking, a &ldquo;complication&rdquo; is any extra function. Here are the eight you are most likely to meet, and what they are actually for.</p></div>
    <div class="comps"><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="24" r="16"/><path d="M22 8V4M18 4h8M36 12l2-2M22 24l6-6"/></svg><h3>Chronograph</h3><p>A built-in stopwatch, started and stopped with pushers on the side of the case. Small sub-dials count elapsed minutes and hours.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="22" r="17"/><path d="M5 22h34M22 5c6 5 6 29 0 34M22 5c-6 5-6 29 0 34"/></svg><h3>GMT / dual time</h3><p>An extra hand, usually circling the dial once every 24 hours, shows a second time zone. A favourite with frequent travellers.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><rect x="7" y="9" width="30" height="27" rx="3"/><path d="M7 17h30M14 5v8M30 5v8"/><text x="22" y="31" text-anchor="middle" font-size="10" fill="#FF7A1A" stroke="none" font-family="monospace">31</text></svg><h3>Date</h3><p>The most common complication. A printed disc turns once a day, shown through a small window, usually at 3 or 6 o&#8217;clock.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="22" r="17"/><path d="M26 11a11 11 0 1 0 0 22 13 13 0 0 1 0-22z" fill="#FF7A1A" stroke="none"/></svg><h3>Moon phase</h3><p>A rotating disc shows the moon waxing and waning. Good mechanisms stay accurate for years before needing a one-day correction.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><path d="M8 32a16 16 0 0 1 28 0"/><path d="M22 32l7-11"/><circle cx="22" cy="32" r="2.5" fill="#FF7A1A"/></svg><h3>Power reserve</h3><p>A gauge that shows how much energy remains in the mainspring, so you know when a manual watch needs winding.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="22" r="17"/><circle cx="22" cy="22" r="11"/><path d="M22 5v4M39 22h-4M22 39v-4M5 22h4"/></svg><h3>Tachymeter</h3><p>A scale on the bezel or dial that, used with a chronograph, converts elapsed time over a known distance into speed.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="22" r="17"/><path d="M22 5v8" stroke-width="3"/><path d="M22 22l8 4"/><circle cx="22" cy="22" r="10" stroke-dasharray="2 3"/></svg><h3>Dive bezel</h3><p>A rotating bezel that turns only one way. Divers align it with the minute hand to track elapsed time safely.</p></div><div class="comp"><svg viewBox="0 0 44 44" fill="none" stroke="#FF7A1A" stroke-width="2" aria-hidden="true"><circle cx="22" cy="22" r="17"/><circle cx="22" cy="30" r="5"/><path d="M22 22V10M22 30l2-3"/></svg><h3>Small seconds</h3><p>Running seconds shown in a little sub-dial instead of a central hand, a classic look on many hand-wound watches.</p></div></div>
  </div>
</section>

<section class="sec" aria-labelledby="wr-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">04 / On the wrist</span><h2 id="wr-t">Size, fit and proportion</h2></div><p>A watch should suit your wrist. As a rough guide, the lugs should not overhang the edges of your wrist, and the case should sit flat without rocking.</p></div>
    <div class="band">
      <figure><img src="https://images.unsplash.com/photo-1472417583565-62e7bdeda490?auto=format&fit=crop&w=900&q=75" alt="person in a teal suit adjusting a leather-strap watch" width="900" height="1200" loading="lazy"><figcaption>Dress: slim case, leather strap</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1590736969955-71cc94801759?auto=format&fit=crop&w=600&q=75" alt="wrist wearing a two-tone silver and gold analog watch" width="600" height="800" loading="lazy"><figcaption>Everyday: 36&ndash;40 mm</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1507680434567-5739c80be1ac?auto=format&fit=crop&w=600&q=75" alt="person in a black jacket and white shirt wearing a wristwatch" width="600" height="800" loading="lazy"><figcaption>Under a cuff: thin wins</figcaption></figure>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="cr-t">
  <div class="wrap care">
    <div class="pic"><img src="https://images.unsplash.com/photo-1786501135828-6927a8612593?auto=format&fit=crop&w=800&q=75" alt="watchmaker tools and small parts laid out on a wooden table" width="800" height="880" loading="lazy"></div>
    <div>
      <span class="code">05 / Care rhythm</span>
      <h2 id="cr-t">Keep it running for decades</h2>
      <p class="muted">A quality watch can outlive its first owner. These habits make the biggest difference.</p>
      <ol class="tl">
        <li><span class="when">Daily</span><h3>Wind gently, set carefully</h3><p>Wind a manual watch at the same time each day until you feel resistance, then stop. Avoid changing the date between about 9 pm and 3 am, when many date mechanisms are engaged.</p></li>
        <li><span class="when">Weekly</span><h3>Wipe it down</h3><p>Clean the case and bracelet with a soft microfibre cloth to remove skin oils and dust that collect around links and lugs.</p></li>
        <li><span class="when">Every 6&ndash;12 months</span><h3>Check timekeeping and seals</h3><p>Note how many seconds it gains or loses each day. If it changes suddenly or you swim with it, have the water resistance tested.</p></li>
        <li><span class="when">Every 5&ndash;10 years</span><h3>Full service</h3><p>A watchmaker dismantles, cleans, lubricates and regulates the movement and replaces worn gaskets. Follow your maker&#8217;s guidance.</p></li>
      </ol>
      <a class="btn" href="watch-care.html">Open the care guide &rarr;</a>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="wa-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">06 / Water resistance</span><h2 id="wa-t">What the numbers really mean</h2></div><p>Ratings are based on static pressure tests in a lab, not real-world depth. Movement in water, temperature changes and ageing seals all reduce protection.</p></div>
    <div class="tbl-wrap"><table class="tbl">
      <thead><tr><th>Marking</th><th>Generally suitable for</th><th>Avoid</th></tr></thead>
      <tbody>
        <tr><td>30 m / 3 ATM</td><td>Rain, splashes, hand washing</td><td>Showering, swimming</td></tr>
        <tr><td>50 m / 5 ATM</td><td>Brief, light swimming in calm water</td><td>Diving, water sports, hot tubs</td></tr>
        <tr><td>100 m / 10 ATM</td><td>Swimming and snorkelling</td><td>Scuba diving</td></tr>
        <tr><td>200 m / 20 ATM</td><td>Most water sports and recreational diving</td><td>Using the crown or pushers underwater</td></tr>
        <tr><td>Diver&#8217;s (ISO 6425)</td><td>Scuba diving; meets a dedicated international standard</td><td>Skipping regular seal checks</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="qs-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">07 / Before you buy</span><h2 id="qs-t">Six questions worth asking</h2></div><p>Whether new, pre-owned or vintage, these questions help you choose a watch you will still enjoy years from now.</p></div>
    <div class="qs">
      <div class="q"><span class="num">01</span><h3>Which movement is inside?</h3><p>Ask for the calibre name or number. It tells you about accuracy, power reserve and how easy servicing will be.</p></div>
      <div class="q"><span class="num">02</span><h3>Can it be serviced locally?</h3><p>Check whether independent watchmakers can work on it and whether spare parts are available.</p></div>
      <div class="q"><span class="num">03</span><h3>Does it fit your wrist?</h3><p>Try it on or compare lug-to-lug measurements with a watch you already find comfortable.</p></div>
      <div class="q"><span class="num">04</span><h3>Is it legible?</h3><p>Contrast between hands, markers and dial matters more than you think, especially in low light.</p></div>
      <div class="q"><span class="num">05</span><h3>What about the paperwork?</h3><p>For pre-owned watches, service records, original documents and a clear return policy add peace of mind.</p></div>
      <div class="q"><span class="num">06</span><h3>Will you actually wear it?</h3><p>Think about your daily routine. A rugged sports watch and a slim dress watch suit very different lives.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="st-t">
  <div class="wrap">
    <div class="sec-head"><div><span class="code">08 / Straps</span><h2 id="st-t">Change the strap, change the watch</h2></div><p>Most watches use standard lug widths, so a quick strap swap can take the same watch from office to beach.</p></div>
    <div class="straps">
      <div class="strap"><div class="pic"><img src="https://images.unsplash.com/photo-1612817159623-0399784fd0ce?auto=format&fit=crop&w=500&q=75" alt="silver watch on a brown leather strap" width="500" height="500" loading="lazy"></div><h3>Leather</h3><p>Warm and classic. Keep it dry and rotate it to let it breathe.</p></div>
      <div class="strap"><div class="pic"><img src="https://images.unsplash.com/photo-1606666877726-4fc01ca8d331?auto=format&fit=crop&w=500&q=75" alt="silver link bracelet watch on a wrist" width="500" height="500" loading="lazy"></div><h3>Metal bracelet</h3><p>Durable and dressy. Clean between links with a soft brush.</p></div>
      <div class="strap"><div class="pic"><img src="https://images.unsplash.com/photo-1542816340-4d3de5047cfd?auto=format&fit=crop&w=500&q=75" alt="black chronograph watch with a sporty strap" width="500" height="500" loading="lazy"></div><h3>Rubber</h3><p>Ideal for swimming and sport. Rinse in fresh water after the sea.</p></div>
      <div class="strap"><div class="pic"><img src="https://images.unsplash.com/photo-1641060311626-9362cbf0c7a8?auto=format&fit=crop&w=500&q=75" alt="watch resting on a brown leather bag" width="500" height="500" loading="lazy"></div><h3>Fabric</h3><p>Light, colourful and easy to wash. Great for travel and summer.</p></div>
    </div>
  </div>
</section>

<section class="sec" style="padding-top:0" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="code">09 / FAQ</span><h2 id="fq-t">Questions we hear a lot</h2><p class="muted">Can&#8217;t find an answer? Send us a note and we will do our best to help.</p><a class="btn btn--o" href="contact.html">Ask a question</a><div class="pic"><img src="https://images.unsplash.com/photo-1635462684825-3621c1df5403?auto=format&fit=crop&w=800&q=75" alt="several wristwatches arranged in a display case" width="800" height="600" loading="lazy"></div></div>
    <div class="faq"><details open><summary>What does &ldquo;ratchet wheel&rdquo; mean on a watch?</summary><p>The ratchet wheel is a toothed wheel fixed to the mainspring barrel arbor. When you wind the crown, the ratchet wheel turns and tightens the mainspring. A small spring-loaded pawl, called the click, stops it from slipping back, so the stored energy cannot escape the wrong way.</p></details><details><summary>Is a mechanical watch more accurate than quartz?</summary><p>No. A good quartz watch is typically accurate to within about 15 seconds a month, while a well-adjusted mechanical watch may gain or lose several seconds a day. People choose mechanical watches for craftsmanship and longevity, not superior precision.</p></details><details><summary>How often should a mechanical watch be serviced?</summary><p>Many manufacturers suggest a full service roughly every five to ten years, depending on the movement and how it is used. Follow the recommendation for your specific watch, and have it checked sooner if it starts running erratically.</p></details><details><summary>Can I wear an automatic watch while sleeping or exercising?</summary><p>You can, though impacts during sport are not ideal for any mechanical watch. Most automatics have enough power reserve to keep running overnight if they are taken off, typically around 38 to 80 hours depending on the movement.</p></details><details><summary>Do magnets affect watches?</summary><p>Yes. Strong magnetic fields from speakers, laptop closures, phone cases or bag clasps can magnetise a mechanical watch&#8217;s hairspring, making it run very fast. A watchmaker can demagnetise it quickly and inexpensively.</p></details><details><summary>Does Ratchet Violet sell watches?</summary><p>No. We are an independent educational guide. We do not sell watches and we are not affiliated with any watch brand or retailer.</p></details></div>
  </div>
</section>

<section class="sec" style="padding-top:0" id="report" aria-labelledby="rp-t">
  <div class="wrap">
    <div class="report">
      <div class="pic"><img src="https://images.unsplash.com/photo-1508962914676-134849a727f0?auto=format&fit=crop&w=900&q=75" alt="macro close-up of a silver watch face" width="900" height="600" loading="lazy"></div>
      <div class="in">
        <span class="code" style="color:#C9BDFF">Monthly newsletter</span>
        <h2 id="rp-t">The Ratchet Report</h2>
        <p>One email a month: a movement explained, a care tip and a complication decoded. No sales pitches, ever.</p>
        <?php if ($flash): ?><p class="<?php echo $okay ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($flash, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
        <form method="post" action="index.php#report">
          <label for="re" class="skip">Email address</label>
          <input type="email" id="re" name="report_email" placeholder="you@example.com" required autocomplete="email">
          <input type="text" name="pager" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
          <button class="btn" type="submit">Subscribe</button>
        </form>
        <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
      </div>
    </div>
  </div>
</section>
</main>
<footer class="ftr grid-bg">
  <div class="wrap">
    <div class="ftr-grid">
      <div><a class="logo" href="index.php"><svg viewBox="0 0 40 40" aria-hidden="true"><circle cx="20" cy="20" r="17" fill="#5B3FD1"/><g fill="#FAFAF7"><rect x="19" y="2.5" width="2" height="5" transform="rotate(0 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(30 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(60 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(90 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(120 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(150 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(180 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(210 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(240 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(270 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(300 20 20)"/><rect x="19" y="2.5" width="2" height="5" transform="rotate(330 20 20)"/></g><circle cx="20" cy="20" r="9" fill="#2A1B5E"/><path d="M20 20 L20 13" stroke="#FF7A1A" stroke-width="2.2" stroke-linecap="round"/></svg><span>Ratchet<b>Violet</b></span></a><p style="margin-top:14px">An independent guide to mechanical watches: how they work, what the complications do, and how to keep a watch ticking for generations.</p></div>
      <div><h4>Learn</h4><a href="how-watches-work.html">How Watches Work</a><a href="watch-care.html">Watch Care</a><a href="index.php#complications">Complications</a><a href="about.html">About</a><a href="contact.html">Contact</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Contact</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@ratchetviolet.com">hello@ratchetviolet.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Ratchet Violet. All rights reserved.</span><span>Photos: Unsplash (Unsplash License). Not affiliated with any watch brand.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your consent, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
