<?php
/**
 * Progetti Digital Startup landing page template.
 *
 * This file is loaded by the Progetti Digital Homepage must-use plugin.
 *
 * @package WordPress
 */

defined( 'ABSPATH' ) || exit;

$pds_logo_url = content_url( '/mu-plugins/assets/progetti-digital-startup-logo.png' );
$pds_header_logo_url = content_url( '/mu-plugins/assets/progetti-digital-header-logo-white.png' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches){document.documentElement.classList.add('pds-motion');}</script>
	<?php wp_head(); ?>
	<style>
		:root { --pds-navy:#061a3b; --pds-blue:#146ee8; --pds-sky:#31a9ff; --pds-gold:#ffb82e; --pds-ink:#10203d; --pds-muted:#5d6b82; --pds-paper:#f7faff; }
		body.pds-body { margin:0; background:#edf5ff; color:var(--pds-ink); font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif; }
		.pds-site, .pds-site * { box-sizing:border-box; }
		.pds-site { position:relative; overflow:hidden; isolation:isolate; }
		.pds-shell { width:min(1160px,calc(100% - 40px)); margin:0 auto; }
		.pds-header { position:relative; z-index:3; background:linear-gradient(105deg,#031127 0%,var(--pds-navy) 56%,#092c62 100%); color:#fff; box-shadow:0 8px 26px rgba(3,17,39,.22); }
		.pds-nav { min-height:92px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
		.pds-brand { display:flex; align-items:center; gap:11px; color:#fff; font-weight:800; font-size:19px; letter-spacing:-.03em; text-decoration:none; white-space:nowrap; }
		.pds-header-logo { display:block; width:270px; height:auto; max-height:none; object-fit:contain; object-position:left center; filter:drop-shadow(0 7px 13px rgba(16,112,255,.2)); transition:filter .25s ease; }
		.pds-brand:hover .pds-header-logo { filter:drop-shadow(0 8px 18px rgba(49,169,255,.5)); }
		.pds-brand-mark { display:grid; place-items:center; width:33px; height:33px; border-radius:10px; background:linear-gradient(135deg,var(--pds-sky),var(--pds-blue)); color:#fff; box-shadow:0 8px 20px rgba(49,169,255,.28); }
		.pds-brand-mark::before { content:"↗"; font-size:22px; line-height:1; transform:translateY(-1px); }
		.pds-nav-links { display:flex; align-items:center; gap:28px; }
		.pds-nav-links a { color:#dfeaff; text-decoration:none; font-size:14px; font-weight:650; }
		.pds-nav-links a:hover { color:#fff; }
		.pds-button { display:inline-flex; align-items:center; justify-content:center; gap:9px; border:0; border-radius:999px; padding:14px 22px; background:var(--pds-gold); color:#13223f; font-size:14px; font-weight:800; text-decoration:none; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-button:hover { color:#13223f; transform:translateY(-2px); box-shadow:0 12px 22px rgba(255,184,46,.25); }
		.pds-button--light { background:#fff; color:var(--pds-navy); }
		.pds-button--ghost { border:1px solid rgba(255,255,255,.42); background:transparent; color:#fff; }
		.pds-hero { position:relative; background:linear-gradient(rgba(255,255,255,.045) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.045) 1px,transparent 1px),radial-gradient(circle at 82% 24%,#1879ec 0,#0d55bc 28%,var(--pds-navy) 70%); background-size:64px 64px,64px 64px,auto; color:#fff; padding:86px 0 94px; }
		.pds-hero::before { content:""; position:absolute; width:600px; height:600px; border:1px solid rgba(255,255,255,.12); border-radius:50%; right:-235px; top:-355px; }
		.pds-hero::after { content:""; position:absolute; width:430px; height:430px; border:58px solid rgba(49,169,255,.19); border-radius:50%; left:-210px; bottom:-270px; }
		.pds-hero-grid { position:relative; z-index:1; display:grid; grid-template-columns:1.05fr .95fr; align-items:center; gap:68px; }
		.pds-eyebrow { display:flex; align-items:center; gap:10px; margin:0 0 19px; color:#b8d5ff; font-size:12px; font-weight:800; letter-spacing:.15em; text-transform:uppercase; }
		.pds-eyebrow::before { content:""; width:10px; height:10px; border-radius:50%; background:var(--pds-gold); box-shadow:0 0 0 6px rgba(255,184,46,.12); }
		.pds-hero h1 { max-width:650px; margin:0; font-size:clamp(42px,5vw,68px); line-height:1.04; letter-spacing:-.055em; color:#fff; }
		.pds-hero p { max-width:580px; margin:25px 0 32px; color:#d5e6ff; font-size:18px; line-height:1.65; }
		.pds-actions { display:flex; flex-wrap:wrap; gap:13px; }
		.pds-logo-card { position:relative; isolation:isolate; padding:18px; border-radius:28px; background:rgba(255,255,255,.96); box-shadow:0 28px 70px rgba(0,9,35,.32); transform:rotate(2deg); }
		.pds-logo-card::before { content:""; position:absolute; z-index:-1; inset:-45px; border-radius:50%; background:radial-gradient(circle,rgba(94,193,255,.55),rgba(45,122,255,.12) 45%,transparent 70%); filter:blur(10px); }
		.pds-logo-card::after { content:""; position:absolute; z-index:2; inset:13px; border:1px solid rgba(20,110,232,.15); border-radius:20px; pointer-events:none; }
		.pds-logo-card img { position:relative; z-index:1; display:block; width:100%; height:auto; border-radius:17px; }
		.pds-logo-caption { position:absolute; z-index:3; left:-31px; bottom:32px; padding:12px 16px; border-radius:12px; background:var(--pds-gold); color:var(--pds-navy); font-size:12px; font-weight:850; box-shadow:0 14px 30px rgba(0,0,0,.2); transform:rotate(-4deg); }
		.pds-section { position:relative; overflow:hidden; padding:98px 0; }
		.pds-section--white { background:linear-gradient(135deg,#fff 0%,#f4f9ff 100%); }
		.pds-section--white::before { content:""; position:absolute; inset:0; opacity:.42; pointer-events:none; background-image:linear-gradient(rgba(20,110,232,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(20,110,232,.06) 1px,transparent 1px),radial-gradient(circle at 90% 18%,rgba(49,169,255,.18),transparent 26%); background-size:44px 44px,44px 44px,auto; }
		.pds-section--white > .pds-shell { position:relative; z-index:1; }
		.pds-section-heading { max-width:670px; margin-bottom:44px; }
		.pds-section-heading h2 { margin:0 0 15px; color:var(--pds-ink); font-size:clamp(32px,4vw,47px); line-height:1.1; letter-spacing:-.045em; }
		.pds-section-heading p { margin:0; color:var(--pds-muted); font-size:17px; line-height:1.7; }
		.pds-detail-link { display:inline-flex; align-items:center; gap:8px; margin-top:22px; color:var(--pds-blue); font-size:14px; font-weight:850; text-decoration:none; }
		.pds-detail-link:hover { color:#0a4ea8; transform:translateX(3px); }
		.pds-services-dark .pds-detail-link { color:#85cbff; }
		.pds-band .pds-detail-link { color:var(--pds-gold); }
		.pds-service-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
		.pds-service { min-height:245px; padding:29px; border:1px solid #deebfa; border-radius:20px; background:rgba(255,255,255,.9); box-shadow:0 10px 28px rgba(21,68,129,.035); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-service:hover { transform:translateY(-7px); border-color:rgba(20,110,232,.32); box-shadow:0 22px 40px rgba(21,68,129,.13); }
		.pds-service-icon { display:grid; place-items:center; width:46px; height:46px; margin-bottom:25px; border-radius:13px; background:#e8f3ff; color:var(--pds-blue); font-size:22px; font-weight:900; }
		.pds-service h3 { margin:0 0 11px; font-size:21px; letter-spacing:-.025em; color:var(--pds-ink); }
		.pds-service p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.65; }
		.pds-band { background:linear-gradient(120deg,#031127 0%,var(--pds-navy) 55%,#0a3d85 100%); color:#fff; }
		.pds-band-grid { display:grid; grid-template-columns:1fr 1fr; gap:80px; align-items:center; }
		.pds-band h2 { margin:0 0 18px; color:#fff; font-size:clamp(31px,3.8vw,46px); line-height:1.11; letter-spacing:-.045em; }
		.pds-band p { margin:0; color:#c8dbfa; font-size:16px; line-height:1.75; }
		.pds-list { display:grid; gap:16px; margin:27px 0 0; padding:0; list-style:none; }
		.pds-list li { display:flex; align-items:flex-start; gap:12px; color:#eaf3ff; font-size:15px; line-height:1.5; }
		.pds-list li::before { content:"✓"; display:grid; place-items:center; flex:0 0 22px; width:22px; height:22px; border-radius:50%; background:rgba(49,169,255,.22); color:#70c4ff; font-size:13px; font-weight:900; }
		.pds-process { display:grid; grid-template-columns:repeat(4,1fr); gap:20px; counter-reset:process; }
		.pds-step { position:relative; padding:27px 19px 0 0; counter-increment:process; }
		.pds-step:not(:last-child)::after { content:""; position:absolute; top:44px; right:-3px; width:25px; height:1px; background:#c8d9f0; }
		.pds-step-number { display:grid; place-items:center; width:43px; height:43px; margin-bottom:20px; border-radius:50%; background:var(--pds-blue); color:#fff; font-size:15px; font-weight:850; }
		.pds-step-number::before { content:"0" counter(process); }
		.pds-step h3 { margin:0 0 9px; color:var(--pds-ink); font-size:20px; }
		.pds-step p { margin:0; color:var(--pds-muted); font-size:14px; line-height:1.65; }
		.pds-contact { position:relative; overflow:hidden; padding:76px 0; background:radial-gradient(circle at 88% 30%,rgba(75,186,255,.38),transparent 28%),linear-gradient(120deg,#0c4fae,var(--pds-blue)); color:#fff; }
		.pds-contact::before { content:""; position:absolute; inset:0; opacity:.23; pointer-events:none; background-image:linear-gradient(rgba(255,255,255,.2) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.2) 1px,transparent 1px); background-size:48px 48px; }
		.pds-contact > .pds-shell { position:relative; z-index:1; }
		.pds-contact-grid { display:flex; align-items:center; justify-content:space-between; gap:28px; }
		.pds-contact h2 { max-width:650px; margin:0 0 11px; color:#fff; font-size:clamp(32px,4vw,48px); letter-spacing:-.05em; line-height:1.08; }
		.pds-contact p { margin:0; color:#dcebff; font-size:16px; line-height:1.6; }
		.pds-footer { padding:29px 0; background:#031126; color:#a9beda; font-size:13px; }
		.pds-footer-content { display:flex; align-items:center; justify-content:space-between; gap:15px; }
		.pds-footer strong { color:#fff; }
		.pds-footer a { color:#d9e9ff; text-decoration:none; }
		.pds-footer a:hover { color:#fff; }
		/* Homepage showcase layout. */
		.pds-culture { background:linear-gradient(135deg,#f9fcff 0%,#eaf4ff 100%); }
		.pds-culture-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:20px; }
		.pds-culture-card { padding:29px; border:1px solid #dbe9fb; border-radius:17px; background:rgba(255,255,255,.92); box-shadow:0 14px 30px rgba(23,74,137,.08); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-culture-card:hover { transform:translateY(-7px); border-color:rgba(20,110,232,.32); box-shadow:0 22px 40px rgba(23,74,137,.14); }
		.pds-culture-icon { display:grid; place-items:center; width:50px; height:50px; margin-bottom:22px; border-radius:14px; background:linear-gradient(135deg,#eaf5ff,#dbeaff); color:var(--pds-blue); font-size:25px; font-weight:900; box-shadow:inset 0 0 0 1px rgba(20,110,232,.08); }
		.pds-culture-card h3 { margin:0 0 10px; color:var(--pds-ink); font-size:20px; letter-spacing:-.03em; }
		.pds-culture-card h3::after { content:""; display:block; width:30px; height:2px; margin-top:13px; border-radius:999px; background:linear-gradient(90deg,var(--pds-gold),var(--pds-blue)); }
		.pds-culture-card p { margin:0; color:var(--pds-muted); font-size:14px; line-height:1.65; }
		.pds-culture-callout { position:relative; display:grid; grid-template-columns:100px minmax(0,1fr) auto; align-items:center; gap:28px; margin-top:25px; padding:30px 35px; overflow:hidden; border:1px solid rgba(65,157,255,.6); border-radius:18px; background:radial-gradient(circle at 86% 12%,rgba(28,127,255,.38),transparent 25%),linear-gradient(115deg,#031329,var(--pds-navy) 62%,#0b459a); box-shadow:0 20px 34px rgba(5,29,71,.26); color:#fff; }
		.pds-culture-callout::before { content:""; position:absolute; inset:0; opacity:.2; pointer-events:none; background-image:radial-gradient(circle,rgba(255,184,46,.95) 1px,transparent 2px); background-size:20px 20px; mask-image:linear-gradient(90deg,transparent,black 28%,black 75%,transparent); }
		.pds-culture-callout > * { position:relative; z-index:1; }
		.pds-callout-icon { display:grid; place-items:center; width:78px; height:78px; border:1px dashed rgba(86,179,255,.7); border-radius:50%; background:rgba(20,110,232,.21); color:var(--pds-gold); font-size:30px; }
		.pds-culture-callout h2 { margin:0 0 8px; color:#fff; font-size:28px; letter-spacing:-.04em; }
		.pds-culture-callout h2::after { content:""; display:block; width:34px; height:2px; margin-top:11px; border-radius:999px; background:var(--pds-gold); }
		.pds-culture-callout p { max-width:600px; margin:0; color:#cce1ff; font-size:14px; line-height:1.6; }
		.pds-services-dark { background:radial-gradient(circle at 86% 10%,rgba(13,121,247,.44),transparent 25%),radial-gradient(circle at 7% 78%,rgba(255,184,46,.16),transparent 17%),linear-gradient(130deg,#03132d 0%,#082a61 53%,#041a3e 100%); color:#fff; }
		.pds-services-dark::before { content:""; position:absolute; inset:0; opacity:.28; pointer-events:none; background-image:linear-gradient(rgba(85,169,255,.17) 1px,transparent 1px),linear-gradient(90deg,rgba(85,169,255,.17) 1px,transparent 1px),radial-gradient(circle at 78% 30%,rgba(255,255,255,.95) 1px,transparent 2px); background-size:48px 48px,48px 48px,23px 23px; }
		.pds-services-dark > .pds-shell { position:relative; z-index:1; }
		.pds-services-dark .pds-section-heading h2,.pds-services-dark .pds-service h3 { color:#fff; }
		.pds-services-dark .pds-section-heading p,.pds-services-dark .pds-service p { color:#c8ddfb; }
		.pds-services-dark .pds-service-grid { gap:16px; }
		.pds-services-dark .pds-service { min-height:225px; border-color:rgba(54,147,255,.58); background:linear-gradient(145deg,rgba(9,48,109,.86),rgba(4,26,61,.82)); box-shadow:inset 0 1px 0 rgba(151,213,255,.1),0 10px 24px rgba(0,10,40,.18); }
		.pds-services-dark .pds-service:hover { border-color:#57b2ff; box-shadow:inset 0 1px 0 rgba(151,213,255,.22),0 22px 38px rgba(0,8,34,.42),0 0 24px rgba(29,137,255,.16); }
		.pds-services-dark .pds-service-icon { background:rgba(20,110,232,.22); color:#72c5ff; box-shadow:inset 0 0 0 1px rgba(101,190,255,.23); }
		.pds-band { background:radial-gradient(circle at 10% 12%,rgba(28,120,236,.26),transparent 25%),linear-gradient(120deg,#031127 0%,#061a3b 54%,#0a3679 100%); }
		.pds-band::before { content:""; position:absolute; inset:0; opacity:.2; pointer-events:none; background-image:linear-gradient(rgba(121,191,255,.14) 1px,transparent 1px),linear-gradient(90deg,rgba(121,191,255,.14) 1px,transparent 1px); background-size:58px 58px; }
		.pds-band > .pds-shell { position:relative; z-index:1; }
		.pds-section-heading h2 span,.pds-band h2 span,.pds-contact h2 span { color:#31a9ff; }
		.pds-process { position:relative; gap:28px; }
		.pds-process::before { content:""; position:absolute; z-index:0; top:48px; left:8%; right:8%; border-top:2px dashed #c7e0ff; }
		.pds-step { z-index:1; padding:0; text-align:center; }
		.pds-step:not(:last-child)::after { display:none; }
		.pds-step-number { position:relative; width:76px; height:76px; margin:0 auto 18px; border:11px solid #fff; background:linear-gradient(145deg,#1681f3,var(--pds-blue)); box-shadow:0 0 0 1px #d5e8ff,0 10px 25px rgba(20,110,232,.17); }
		.pds-step h3 { font-size:18px; }
		.pds-step p { max-width:210px; margin:0 auto; font-size:13px; }
		.pds-contact { background:radial-gradient(circle at 3% 40%,rgba(255,184,46,.72),transparent 11%),radial-gradient(circle at 97% 86%,rgba(59,152,255,.75),transparent 18%),linear-gradient(115deg,#031127,#0b4cac 68%,#126ee5); }
		.pds-footer { padding:54px 0 18px; background:linear-gradient(120deg,#020b1a,#031329 54%,#061f45); }
		.pds-footer:not(.pds-footer--showcase) { display:none; }
		.pds-footer-grid { display:grid; grid-template-columns:1.5fr repeat(3,.75fr) 1fr; gap:30px; padding-bottom:31px; border-bottom:1px solid rgba(165,206,255,.17); }
		.pds-footer-brand img { display:block; width:215px; height:auto; margin-bottom:12px; filter:drop-shadow(0 5px 10px rgba(20,110,232,.2)); }
		.pds-footer-brand p { max-width:225px; margin:0; color:#a9beda; font-size:13px; line-height:1.6; }
		.pds-footer-heading { margin:4px 0 13px; color:#fff; font-size:12px; font-weight:850; letter-spacing:.02em; }
		.pds-footer-column { display:grid; align-content:start; gap:9px; }
		.pds-footer-column a { color:#b9ceea; font-size:12px; }
		.pds-footer-bottom { display:flex; align-items:center; justify-content:space-between; gap:18px; padding-top:17px; color:#8fa9c8; font-size:11px; }
		.pds-footer-bottom nav { display:flex; flex-wrap:wrap; gap:15px; }
		/* Reference-style visual polish: soft space lighting replaces the rigid grid. */
		.pds-hero { min-height:540px; display:grid; align-items:center; overflow:hidden; background:radial-gradient(circle at 76% 18%,rgba(104,187,255,.88) 0 1px,transparent 2px),radial-gradient(circle at 90% 37%,rgba(255,255,255,.65) 0 1px,transparent 2px),radial-gradient(circle at 62% 55%,rgba(94,175,255,.54) 0 1px,transparent 2px),radial-gradient(circle at 78% 26%,#166fdb 0,#0d3c88 27%,transparent 52%),linear-gradient(112deg,#020b1d 0%,#041a3e 43%,#0b55bb 100%); background-size:91px 91px,127px 127px,73px 73px,auto,auto; }
		.pds-hero::before { width:370px; height:370px; right:-145px; top:-154px; border:0; background:radial-gradient(circle at 34% 39%,rgba(166,208,255,.86),rgba(58,118,255,.94) 19%,rgba(25,67,186,.97) 49%,rgba(5,22,74,.18) 70%,transparent 72%); box-shadow:0 0 55px rgba(78,148,255,.64),inset 16px -16px 30px rgba(4,18,90,.48); }
		.pds-hero::after { width:250px; height:250px; left:-126px; bottom:-142px; border:0; background:radial-gradient(circle at 65% 33%,#ffe484 0,#ffbe28 16%,#8f5815 37%,rgba(9,24,57,.16) 61%,transparent 63%); box-shadow:0 0 36px rgba(255,184,46,.45); }
		.pds-hero-grid { gap:74px; }
		.pds-hero h1 { max-width:610px; font-size:clamp(44px,5vw,72px); }
		.pds-typewriter strong { color:var(--pds-sky); font-weight:inherit; }
		.pds-typewriter i { color:var(--pds-gold); font-style:normal; }
		.pds-logo-card { width:min(100%,555px); justify-self:end; padding:13px; border:2px solid rgba(119,194,255,.72); border-radius:30px; box-shadow:0 32px 78px rgba(0,7,35,.43),0 0 35px rgba(26,133,255,.27); }
		.pds-logo-card::before { inset:-62px; background:radial-gradient(circle,rgba(111,195,255,.67),rgba(36,110,255,.18) 46%,transparent 71%); }
		.pds-logo-card::after { inset:10px; border-color:rgba(20,110,232,.23); }
		.pds-section--white::before { opacity:.34; background-image:radial-gradient(circle,rgba(20,110,232,.16) 1px,transparent 1.6px),radial-gradient(circle at 86% 12%,rgba(61,172,255,.2),transparent 27%),radial-gradient(circle at 11% 88%,rgba(255,184,46,.11),transparent 19%); background-size:37px 37px,auto,auto; }
		.pds-culture { padding:106px 0 102px; }
		.pds-culture-card { min-height:205px; padding:34px; border-radius:18px; box-shadow:0 18px 38px rgba(23,74,137,.1); }
		.pds-culture-icon { width:57px; height:57px; margin-bottom:24px; border-radius:16px; box-shadow:0 9px 20px rgba(20,110,232,.12),inset 0 0 0 1px rgba(20,110,232,.08); }
		.pds-culture-card h3 { font-size:21px; }
		.pds-culture-callout { min-height:154px; margin-top:29px; padding:37px 43px; border-radius:19px; box-shadow:0 25px 43px rgba(5,29,71,.32),0 0 22px rgba(38,135,255,.15); }
		.pds-callout-icon { width:88px; height:88px; font-size:34px; box-shadow:inset 0 0 20px rgba(64,161,255,.15); }
		.pds-culture-callout h2 { font-size:31px; }
		.pds-services-dark { padding:116px 0 122px; background:radial-gradient(circle at 88% 9%,rgba(32,134,255,.5),transparent 23%),radial-gradient(circle at 8% 78%,rgba(255,184,46,.18),transparent 15%),linear-gradient(130deg,#020b1d 0%,#06275d 53%,#031a3d 100%); }
		.pds-services-dark::before { opacity:.5; background-image:radial-gradient(circle,rgba(112,193,255,.7) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.48) 1px,transparent 1.6px); background-size:25px 25px,73px 73px; }
		.pds-services-dark .pds-section-heading { max-width:720px; margin-bottom:51px; }
		.pds-services-dark .pds-service-grid { gap:20px; }
		.pds-services-dark .pds-service { min-height:252px; padding:31px; border-radius:17px; background:linear-gradient(145deg,rgba(9,53,122,.91),rgba(3,22,56,.88)); }
		.pds-services-dark .pds-service-icon { width:52px; height:52px; margin-bottom:26px; border-radius:15px; box-shadow:0 8px 18px rgba(5,18,62,.25),inset 0 0 0 1px rgba(101,190,255,.28); }
		.pds-band { padding:110px 0; background:radial-gradient(circle at 12% 14%,rgba(30,129,247,.31),transparent 22%),radial-gradient(circle at 82% 62%,rgba(29,120,231,.16),transparent 29%),linear-gradient(120deg,#020b1d,#061a3b 57%,#0a3679); }
		.pds-band::before { opacity:.25; background-image:radial-gradient(circle,rgba(111,193,255,.58) 1px,transparent 1.6px); background-size:42px 42px; }
		.pds-process { gap:36px; }
		.pds-process::before { top:63px; left:9%; right:9%; border-color:#bddcff; }
		.pds-step-number { width:112px; height:112px; margin-bottom:23px; border:17px solid #fff; background:#f5faff; color:var(--pds-blue); box-shadow:0 0 0 1px #d7e9ff,0 15px 31px rgba(20,110,232,.19); }
		.pds-step-number::before { position:absolute; top:-27px; left:50%; display:grid; place-items:center; width:38px; height:38px; border-radius:50%; background:var(--pds-blue); color:#fff; box-shadow:0 5px 12px rgba(20,110,232,.25); font-size:12px; transform:translateX(-50%); }
		.pds-step-number::after { content:"\2315"; font-size:30px; font-weight:850; line-height:1; }
		.pds-step:nth-child(2) .pds-step-number::after { content:"\2261"; }
		.pds-step:nth-child(3) .pds-step-number::after { content:"{}"; }
		.pds-step:nth-child(4) .pds-step-number::after { content:"\2197"; }
		.pds-step h3 { font-size:19px; }
		.pds-step p { max-width:228px; font-size:13px; }
		.pds-contact { min-height:224px; padding:82px 0; background:radial-gradient(circle at 1% 48%,rgba(255,220,91,.94) 0,rgba(255,184,46,.55) 7%,transparent 16%),radial-gradient(circle at 100% 92%,rgba(88,172,255,.95) 0,rgba(19,86,215,.72) 14%,transparent 25%),radial-gradient(circle,rgba(115,191,255,.55) 1px,transparent 1.7px),linear-gradient(115deg,#020b1d,#0a469c 64%,#0f73e9); background-size:auto,auto,55px 55px,auto; }
		.pds-contact::before { opacity:.22; background-image:radial-gradient(circle,rgba(255,255,255,.75) 1px,transparent 1.6px); background-size:24px 24px; }
		.pds-contact .pds-button--light { background:var(--pds-gold); color:var(--pds-navy); box-shadow:0 13px 26px rgba(0,20,64,.26); }
		.pds-footer { padding:69px 0 23px; }
		.pds-footer-grid { gap:38px; padding-bottom:39px; }
		.pds-footer-brand img { width:255px; margin-bottom:15px; }
		.pds-footer-brand p { max-width:250px; font-size:14px; }
		.pds-footer-heading { margin-bottom:16px; font-size:14px; }
		.pds-footer-column { gap:11px; }
		.pds-footer-column a { font-size:13px; }
		.pds-footer-bottom { padding-top:20px; font-size:12px; }
		.pds-motion .pds-reveal { opacity:0; transform:translateY(30px); transition:opacity .72s cubic-bezier(.16,1,.3,1),transform .72s cubic-bezier(.16,1,.3,1); transition-delay:var(--pds-delay,0ms); }
		.pds-motion .pds-reveal.pds-visible { opacity:1; transform:translateY(0); }
		.pds-motion .pds-logo-card.pds-reveal { transform:translateY(34px) rotate(2deg); }
		.pds-motion .pds-logo-card.pds-reveal.pds-visible { transform:translateY(0) rotate(2deg); animation:pds-logo-float 5.5s 1s ease-in-out infinite; }
		.pds-motion .pds-header-logo { animation:pds-header-logo-float 4.8s ease-in-out infinite; transform-origin:left center; }
		.pds-motion .pds-logo-card::before { animation:pds-logo-aura 5s ease-in-out infinite; }
		.pds-motion .pds-section--white::before { animation:pds-grid-drift 26s linear infinite; }
		.pds-motion .pds-service:nth-child(2),.pds-motion .pds-step:nth-child(2) { --pds-delay:80ms; }
		.pds-motion .pds-service:nth-child(3),.pds-motion .pds-step:nth-child(3) { --pds-delay:160ms; }
		.pds-motion .pds-service:nth-child(4),.pds-motion .pds-step:nth-child(4) { --pds-delay:240ms; }
		.pds-motion .pds-service:nth-child(5) { --pds-delay:320ms; }
		.pds-motion .pds-service:nth-child(6) { --pds-delay:400ms; }
		.pds-motion .pds-culture-card:nth-child(2) { --pds-delay:100ms; }
		.pds-motion .pds-culture-card:nth-child(3) { --pds-delay:200ms; }
		.pds-motion .pds-services-dark::before { animation:pds-services-grid 28s linear infinite; }
		.pds-motion .pds-culture-callout::before { animation:pds-callout-stars 15s linear infinite; }
		.pds-motion .pds-hero::before { animation:pds-orbit 14s ease-in-out infinite; }
		.pds-motion .pds-hero::after { animation:pds-drift 10s ease-in-out infinite; }
		.pds-motion .pds-brand-mark { animation:pds-mark-glow 2.8s ease-in-out infinite; }
		.pds-motion .pds-typewriter.is-typing::after { content:"|"; display:inline-block; margin-left:7px; color:var(--pds-gold); font-weight:400; animation:pds-cursor-blink .8s steps(1,end) infinite; }
		@keyframes pds-logo-float { 0%,100% { transform:translateY(0) rotate(2deg); } 50% { transform:translateY(-12px) rotate(1deg); } }
		@keyframes pds-header-logo-float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-2px); } }
		@keyframes pds-logo-aura { 0%,100% { opacity:.7; transform:scale(.96); } 50% { opacity:1; transform:scale(1.06); } }
		@keyframes pds-grid-drift { from { background-position:0 0,0 0,0 0; } to { background-position:44px 44px,44px 44px,0 0; } }
		@keyframes pds-services-grid { from { background-position:0 0,0 0,0 0; } to { background-position:48px 48px,48px 48px,0 0; } }
		@keyframes pds-callout-stars { from { background-position:0 0; } to { background-position:80px -80px; } }
		@keyframes pds-orbit { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(-16px,22px) scale(1.05); } }
		@keyframes pds-drift { 0%,100% { transform:translate(0,0) rotate(0); } 50% { transform:translate(26px,-18px) rotate(8deg); } }
		@keyframes pds-mark-glow { 0%,100% { box-shadow:0 8px 20px rgba(49,169,255,.28); } 50% { box-shadow:0 8px 30px rgba(49,169,255,.62); } }
		@keyframes pds-cursor-blink { 50% { opacity:0; } }
		@media (prefers-reduced-motion:reduce) { *,*::before,*::after { scroll-behavior:auto!important; animation-duration:.01ms!important; animation-iteration-count:1!important; transition-duration:.01ms!important; } }
		@media (max-width:900px) { .pds-nav-links { display:none; } .pds-hero-grid,.pds-band-grid { grid-template-columns:1fr; gap:45px; } .pds-logo-card { max-width:480px; margin:0 auto; } .pds-service-grid,.pds-culture-grid { grid-template-columns:repeat(2,1fr); } .pds-process { grid-template-columns:repeat(2,1fr); row-gap:46px; } .pds-process::before { display:none; } .pds-culture-callout { grid-template-columns:78px 1fr; } .pds-culture-callout .pds-button { grid-column:2; justify-self:start; } .pds-footer-grid { grid-template-columns:repeat(3,1fr); } .pds-footer-brand { grid-column:1/-1; } }
		@media (max-width:590px) { .pds-shell { width:min(100% - 30px,1160px); } .pds-nav { min-height:78px; } .pds-nav .pds-button { padding:11px 15px; font-size:12px; } .pds-brand { font-size:16px; } .pds-header-logo { width:178px; max-height:none; } .pds-hero { padding:64px 0 72px; } .pds-hero h1 { font-size:42px; } .pds-hero p { font-size:16px; } .pds-section { padding:70px 0; } .pds-service-grid,.pds-process,.pds-culture-grid { grid-template-columns:1fr; } .pds-step { padding-right:0; } .pds-step::after { display:none; } .pds-contact-grid,.pds-footer-content,.pds-footer-bottom { align-items:flex-start; flex-direction:column; } .pds-logo-caption { left:8px; bottom:-18px; } .pds-culture-callout { grid-template-columns:1fr; gap:17px; padding:27px; } .pds-culture-callout .pds-button { grid-column:auto; } .pds-footer-grid { grid-template-columns:repeat(2,1fr); gap:25px 18px; } .pds-footer-brand { grid-column:1/-1; } }
	</style>
</head>
<body <?php body_class( 'pds-body' ); ?>>
<?php wp_body_open(); ?>
<div class="pds-site">
	<header class="pds-header">
		<div class="pds-shell pds-nav pds-reveal">
			<a class="pds-brand" href="#top" aria-label="Progetti Digital Startup home"><img class="pds-header-logo" src="<?php echo esc_url( $pds_header_logo_url ); ?>" alt="Progetti Digital"></a>
			<nav class="pds-nav-links" aria-label="Primary navigation">
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>">Process</a><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
			</nav>
			<a class="pds-button" href="#contact">Start a project <span aria-hidden="true">→</span></a>
		</div>
	</header>

	<main id="top">
		<section class="pds-hero">
			<div class="pds-shell pds-hero-grid">
				<div class="pds-reveal">
					<p class="pds-eyebrow">Digital product studio</p>
					<h1 aria-label="Software that turns bold ideas into real momentum."><span class="pds-typewriter" data-pds-typewriter="Software that turns bold ideas into real momentum." data-pds-final-markup="Software that&lt;br&gt;turns &lt;strong&gt;bold ideas&lt;/strong&gt;&lt;br&gt;into real&lt;br&gt;momentum&lt;i&gt;.&lt;/i&gt;" aria-hidden="true">Software that turns bold ideas into real momentum.</span></h1>
					<p>Progetti Digital Startup designs and builds reliable web, mobile, and custom software products for teams ready to grow.</p>
					<div class="pds-actions"><a class="pds-button" href="#contact">Build with us <span aria-hidden="true">→</span></a><a class="pds-button pds-button--ghost" href="#services">Explore services</a></div>
				</div>
				<div class="pds-logo-card pds-reveal" style="--pds-delay:140ms"><img src="<?php echo esc_url( $pds_logo_url ); ?>" alt="Progetti Digital Startup logo" width="1456" height="1088"><span class="pds-logo-caption">Imagine. Build. Grow.</span></div>
			</div>
		</section>

		<section class="pds-section pds-section--white pds-culture" id="culture">
			<div class="pds-shell">
				<div class="pds-culture-grid">
					<article class="pds-culture-card pds-reveal"><div class="pds-culture-icon" aria-hidden="true">&#9673;</div><h3>Own the outcome</h3><p>We value curiosity, clear thinking, and people who care about the product beyond their individual task.</p></article>
					<article class="pds-culture-card pds-reveal"><div class="pds-culture-icon" aria-hidden="true">&#8599;</div><h3>Learn in the work</h3><p>Every project brings a fresh problem to understand, a better way to collaborate, and room to grow your craft.</p></article>
					<article class="pds-culture-card pds-reveal"><div class="pds-culture-icon" aria-hidden="true">&#10022;</div><h3>Build with respect</h3><p>We communicate directly, share credit, and make space for the thoughtful work that good software needs.</p></article>
				</div>
				<div class="pds-culture-callout pds-reveal" style="--pds-delay:120ms"><div class="pds-callout-icon" aria-hidden="true">&#10148;</div><div><h2>Don&rsquo;t see the right role today?</h2><p>We are always interested in meeting people who care deeply about products, design, and engineering. Send us a short note about what you do best.</p></div><a class="pds-button" href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Introduce yourself &#8594;</a></div>
			</div>
		</section>

		<section class="pds-section pds-services-dark" id="services">
			<div class="pds-shell">
				<div class="pds-section-heading pds-reveal"><p class="pds-eyebrow">What we do</p><h2>One product partner from first sketch to <span>confident launch.</span></h2><p>We bring strategy, experience design, and engineering together so your product is useful, scalable, and ready for the next stage.</p><a class="pds-detail-link" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Explore all services &rarr;</a></div>
				<div class="pds-service-grid">
					<article class="pds-service pds-reveal"><div class="pds-service-icon">⌘</div><h3>Custom Software</h3><p>Purpose-built platforms, internal tools, and SaaS products designed around the way your business actually works.</p></article>
					<article class="pds-service pds-reveal"><div class="pds-service-icon">◫</div><h3>Web Applications</h3><p>Fast, intuitive web experiences that help customers act, teams collaborate, and businesses scale online.</p></article>
					<article class="pds-service pds-reveal"><div class="pds-service-icon">⌁</div><h3>Mobile Products</h3><p>Focused mobile apps and cross-platform experiences that keep your service close to your customers.</p></article>
					<article class="pds-service pds-reveal"><div class="pds-service-icon">✦</div><h3>UI/UX Design</h3><p>Clear product journeys, useful interfaces, and flexible design systems built for people—not just screens.</p></article>
					<article class="pds-service pds-reveal"><div class="pds-service-icon">↗</div><h3>Cloud & Automation</h3><p>Connected workflows, integrations, and cloud-ready foundations that remove manual work and reduce friction.</p></article>
					<article class="pds-service pds-reveal"><div class="pds-service-icon">◎</div><h3>Product Support</h3><p>Iterative improvements, performance care, and a practical roadmap after launch to keep moving forward.</p></article>
				</div>
			</div>
		</section>

		<section class="pds-section pds-band" id="about">
			<div class="pds-shell pds-band-grid">
				<div class="pds-reveal"><p class="pds-eyebrow">Why Progetti Digital</p><h2>Startup speed.<br><span>Engineering discipline.</span></h2><p>Great software starts with listening. We work alongside your team, make the hard decisions visible, and deliver in small, valuable steps.</p></div>
				<div class="pds-reveal" style="--pds-delay:140ms"><ul class="pds-list"><li>A focused team that speaks in outcomes, not buzzwords.</li><li>Transparent delivery from scope and architecture through launch.</li><li>Flexible engagement for a new idea, a product rebuild, or an ambitious next release.</li></ul><a class="pds-detail-link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Meet our approach &rarr;</a></div>
			</div>
		</section>

		<section class="pds-section pds-section--white" id="process">
			<div class="pds-shell">
				<div class="pds-section-heading pds-reveal"><p class="pds-eyebrow" style="color:#146ee8">How we work</p><h2>A clear path from opportunity to <span>working software.</span></h2><a class="pds-detail-link" href="<?php echo esc_url( home_url( '/process/' ) ); ?>">See the full process &rarr;</a></div>
				<div class="pds-process">
					<article class="pds-step pds-reveal"><div class="pds-step-number"></div><h3>Discover</h3><p>Understand your customers, goals, constraints, and the opportunity worth solving.</p></article>
					<article class="pds-step pds-reveal"><div class="pds-step-number"></div><h3>Define</h3><p>Shape the roadmap, user flows, and technical plan around the highest-value release.</p></article>
					<article class="pds-step pds-reveal"><div class="pds-step-number"></div><h3>Build</h3><p>Design, develop, test, and review in practical cycles with shared visibility.</p></article>
					<article class="pds-step pds-reveal"><div class="pds-step-number"></div><h3>Launch & Grow</h3><p>Release with confidence, learn from real use, and improve the product with purpose.</p></article>
				</div>
			</div>
		</section>

		<section class="pds-contact" id="contact">
			<div class="pds-shell pds-contact-grid pds-reveal"><div><h2>Have a product idea worth moving forward?</h2><p>Tell us where you are today. We’ll help you identify the next smart step.</p></div><a class="pds-button pds-button--light" href="#top">Start the conversation <span aria-hidden="true">↑</span></a></div>
		</section>
	</main>

	<footer class="pds-footer pds-footer--showcase"><div class="pds-shell"><div class="pds-footer-grid"><div class="pds-footer-brand"><img src="<?php echo esc_url( $pds_header_logo_url ); ?>" alt="Progetti Digital"><p>Software built for forward movement.</p></div><div class="pds-footer-column"><p class="pds-footer-heading">Company</p><a href="#about">About</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="#contact">Contact</a></div><div class="pds-footer-column"><p class="pds-footer-heading">Services</p><a href="#services">Custom Software</a><a href="#services">Web Applications</a><a href="#services">Mobile Products</a><a href="#services">UI/UX Design</a><a href="#services">Cloud &amp; Automation</a></div><div class="pds-footer-column"><p class="pds-footer-heading">Resources</p><a href="#process">Process</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Case Studies</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></div><div class="pds-footer-column"><p class="pds-footer-heading">Let&rsquo;s connect</p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Start a project</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">hello@progettidigital.com</a></div></div><div class="pds-footer-bottom"><span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Progetti Digital Startup. All rights reserved.</span><nav aria-label="Footer navigation"><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms</a><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></nav></div></div></footer>

	<footer class="pds-footer"><div class="pds-shell pds-footer-content"><span><strong>Progetti Digital Startup</strong> — software built for forward movement.</span><span><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms</a> · <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a> · © <?php echo esc_html( gmdate( 'Y' ) ); ?> Progetti Digital Startup</span></div></footer>
</div>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded',function(){
	if(!document.documentElement.classList.contains('pds-motion')){return;}
	var typewriter=document.querySelector('[data-pds-typewriter]');
	if(typewriter){
		var text=typewriter.getAttribute('data-pds-typewriter');
		var finalMarkup=typewriter.getAttribute('data-pds-final-markup');
		var position=0;
		typewriter.textContent='';
		typewriter.classList.add('is-typing');
		window.setTimeout(function writeNextCharacter(){
			typewriter.textContent+=text.charAt(position++);
			if(position<text.length){window.setTimeout(writeNextCharacter,text.charAt(position-1)===' '?85:42);}
			else{window.setTimeout(function(){if(finalMarkup){typewriter.innerHTML=finalMarkup;}typewriter.classList.remove('is-typing');},1200);}
		},350);
	}
	var items=document.querySelectorAll('.pds-reveal');
	if(!('IntersectionObserver' in window)){items.forEach(function(item){item.classList.add('pds-visible');});return;}
	var observer=new IntersectionObserver(function(entries){entries.forEach(function(entry){if(entry.isIntersecting){entry.target.classList.add('pds-visible');observer.unobserve(entry.target);}});},{threshold:.12,rootMargin:'0px 0px -40px'});
	items.forEach(function(item){observer.observe(item);});
});
</script>
</body>
</html>
