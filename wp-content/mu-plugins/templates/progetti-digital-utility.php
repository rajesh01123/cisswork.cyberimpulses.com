<?php
/**
 * Progetti Digital Startup utility-page template.
 *
 * @package WordPress
 */

defined( 'ABSPATH' ) || exit;

$pds_page     = isset( $pds_utility_page ) ? $pds_utility_page : 'contact';
$pds_home_url = home_url( '/' );
$pds_pages    = array(
	'terms'   => array( 'eyebrow' => 'Terms & Conditions', 'title' => 'Clear terms for confident collaboration.', 'intro' => 'These terms describe how Progetti Digital Startup works with clients, visitors, and project partners.' ),
	'privacy' => array( 'eyebrow' => 'Privacy Policy', 'title' => 'Your information deserves thoughtful care.', 'intro' => 'We collect only what helps us communicate, deliver our services, and improve your experience.' ),
	'contact' => array( 'eyebrow' => 'Start a conversation', 'title' => 'Tell us what you want to build next.', 'intro' => 'Whether you are shaping a new product or improving an existing one, we would love to hear the opportunity.' ),
	'services' => array( 'eyebrow' => 'Software services', 'title' => 'The right product capability for what comes next.', 'intro' => 'From a focused first release to a complex platform, we bring strategy, design, and engineering into one practical delivery team.' ),
	'process'  => array( 'eyebrow' => 'How we work', 'title' => 'A clear path from idea to lasting momentum.', 'intro' => 'Our delivery process keeps the highest-value decisions visible, the work collaborative, and the next release moving forward.' ),
	'about'    => array( 'eyebrow' => 'About Progetti Digital', 'title' => 'Product-minded people building useful software.', 'intro' => 'We partner with ambitious teams to turn complex ideas into focused digital products that people can use with confidence.' ),
	'blog'    => array( 'eyebrow' => 'Progetti Insights', 'title' => 'Useful thinking for teams building what is next.', 'intro' => 'Practical notes on digital products, software delivery, design, and sustainable growth.' ),
	'careers' => array( 'eyebrow' => 'Careers', 'title' => 'Do work that moves products—and people—forward.', 'intro' => 'We are building a thoughtful team of product-minded designers, developers, and problem solvers.' ),
);
$pds_content  = $pds_pages[ $pds_page ];
$pds_status   = isset( $_GET['pds_contact'] ) ? sanitize_key( wp_unslash( $_GET['pds_contact'] ) ) : '';
$pds_header_logo_url = content_url( '/mu-plugins/assets/progetti-digital-header-logo-white.png' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches){document.documentElement.classList.add('pds-u-motion');}</script>
	<?php wp_head(); ?>
	<style>
		:root { --pds-navy:#061a3b; --pds-blue:#146ee8; --pds-sky:#31a9ff; --pds-gold:#ffb82e; --pds-ink:#10203d; --pds-muted:#5d6b82; --pds-line:#dce8f7; --pds-paper:#f7faff; }
		body.pds-utility-body { margin:0; background:#edf5ff; color:var(--pds-ink); font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif; }
		.pds-utility, .pds-utility * { box-sizing:border-box; }
		.pds-utility { position:relative; overflow:hidden; isolation:isolate; }
		.pds-wrap { width:min(1120px,calc(100% - 40px)); margin:0 auto; }
		.pds-u-header { position:relative; z-index:3; background:linear-gradient(105deg,#031127 0%,var(--pds-navy) 56%,#092c62 100%); color:#fff; box-shadow:0 8px 26px rgba(3,17,39,.22); }
		.pds-u-nav { min-height:90px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
		.pds-u-brand { display:flex; align-items:center; gap:10px; color:#fff; font-weight:850; font-size:19px; letter-spacing:-.03em; text-decoration:none; white-space:nowrap; }
		.pds-u-header-logo { display:block; width:270px; height:auto; max-height:none; object-fit:contain; object-position:left center; filter:drop-shadow(0 7px 13px rgba(16,112,255,.2)); transition:filter .25s ease; }
		.pds-u-brand:hover .pds-u-header-logo { filter:drop-shadow(0 8px 18px rgba(49,169,255,.5)); }
		.pds-u-brand span { display:grid; place-items:center; width:32px; height:32px; border-radius:10px; background:linear-gradient(135deg,var(--pds-sky),var(--pds-blue)); box-shadow:0 8px 20px rgba(49,169,255,.28); }
		.pds-u-brand span::after { content:"↗"; font-size:22px; line-height:1; }
		.pds-u-links { display:flex; align-items:center; gap:24px; }
		.pds-u-links a { color:#dfeaff; text-decoration:none; font-size:14px; font-weight:700; }
		.pds-u-links a:hover { color:#fff; }
		.pds-u-button { display:inline-flex; align-items:center; justify-content:center; border:0; border-radius:999px; padding:13px 20px; background:var(--pds-gold); color:#13223f; font-size:14px; font-weight:850; text-decoration:none; cursor:pointer; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-u-button:hover { color:#13223f; transform:translateY(-2px); box-shadow:0 12px 24px rgba(255,184,46,.28); }
		.pds-u-button--blue { background:var(--pds-blue); color:#fff; }
		.pds-u-button--blue:hover { color:#fff; box-shadow:0 13px 26px rgba(20,110,232,.25); }
		.pds-u-hero { position:relative; overflow:hidden; padding:82px 0 88px; background:linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px),linear-gradient(125deg,#051630 0%,#0c4fab 66%,#1677ed 100%); background-size:64px 64px,64px 64px,auto; color:#fff; }
		.pds-u-hero::before { content:""; position:absolute; width:520px; height:520px; right:-210px; top:-350px; border:58px solid rgba(255,255,255,.1); border-radius:50%; }
		.pds-u-hero::after { content:""; position:absolute; width:250px; height:250px; left:8%; bottom:-165px; border-radius:50%; background:radial-gradient(circle,rgba(255,184,46,.28) 0 3px,transparent 4px); background-size:26px 26px; opacity:.8; }
		.pds-u-hero-content { position:relative; z-index:1; max-width:760px; }
		.pds-u-eyebrow { display:flex; align-items:center; gap:10px; margin:0 0 18px; color:#bdd9ff; font-size:12px; font-weight:850; letter-spacing:.15em; text-transform:uppercase; }
		.pds-u-eyebrow::before { content:""; width:9px; height:9px; border-radius:50%; background:var(--pds-gold); }
		.pds-u-hero h1 { margin:0; color:#fff; font-size:clamp(40px,5.5vw,66px); line-height:1.05; letter-spacing:-.055em; }
		.pds-u-hero p:not(.pds-u-eyebrow) { max-width:665px; margin:23px 0 0; color:#d8e8ff; font-size:18px; line-height:1.65; }
		.pds-u-main { position:relative; overflow:hidden; padding:84px 0 94px; background:linear-gradient(135deg,#fff 0%,#f2f8ff 100%); }
		.pds-u-main::before { content:""; position:absolute; inset:0; opacity:.46; pointer-events:none; background-image:linear-gradient(rgba(20,110,232,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(20,110,232,.06) 1px,transparent 1px),radial-gradient(circle at 92% 15%,rgba(49,169,255,.18),transparent 24%); background-size:44px 44px,44px 44px,auto; }
		.pds-u-main > .pds-wrap { position:relative; z-index:1; }
		.pds-u-layout { display:grid; grid-template-columns:minmax(0,1fr) 286px; gap:64px; align-items:start; }
		.pds-u-content h2 { margin:0 0 14px; color:var(--pds-ink); font-size:28px; letter-spacing:-.035em; }
		.pds-u-content h3 { margin:32px 0 10px; color:var(--pds-ink); font-size:19px; }
		.pds-u-content p,.pds-u-content li { color:var(--pds-muted); font-size:16px; line-height:1.75; }
		.pds-u-content p { margin:0 0 17px; }
		.pds-u-content ul { margin:0; padding-left:21px; }
		.pds-u-policy { display:grid; gap:17px; }
		.pds-u-policy-card { padding:27px 29px; border:1px solid var(--pds-line); border-radius:18px; background:rgba(255,255,255,.9); box-shadow:0 12px 30px rgba(19,66,124,.04); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-u-policy-card:hover { transform:translateY(-4px); border-color:rgba(20,110,232,.3); box-shadow:0 18px 34px rgba(19,66,124,.1); }
		.pds-u-policy-card h2 { display:flex; align-items:center; gap:12px; }
		.pds-u-policy-card h2 span { display:grid; place-items:center; width:31px; height:31px; border-radius:9px; background:#e8f3ff; color:var(--pds-blue); font-size:13px; }
		.pds-u-aside { position:sticky; top:28px; padding:25px; border-radius:18px; background:#eaf4ff; }
		.pds-u-aside h3 { margin:0 0 10px; font-size:19px; }
		.pds-u-aside p { margin:0 0 19px; color:var(--pds-muted); font-size:14px; line-height:1.65; }
		.pds-u-aside a:not(.pds-u-button) { color:var(--pds-blue); font-weight:800; text-decoration:none; }
		.pds-u-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; margin-bottom:54px; }
		.pds-u-card { padding:27px; border:1px solid var(--pds-line); border-radius:18px; background:rgba(255,255,255,.9); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-u-card:hover { transform:translateY(-6px); border-color:rgba(20,110,232,.3); box-shadow:0 20px 38px rgba(19,66,124,.11); }
		.pds-u-card-icon { display:grid; place-items:center; width:45px; height:45px; margin-bottom:21px; border-radius:13px; background:#e8f3ff; color:var(--pds-blue); font-size:22px; font-weight:900; }
		.pds-u-card h3 { margin:0 0 10px; font-size:20px; letter-spacing:-.025em; }
		.pds-u-card p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.65; }
		.pds-u-form-shell { padding:33px; border:1px solid var(--pds-line); border-radius:21px; background:rgba(255,255,255,.94); box-shadow:0 18px 46px rgba(19,66,124,.07); }
		.pds-u-form-shell h2 { margin:0 0 9px; font-size:30px; letter-spacing:-.04em; }
		.pds-u-form-shell > p { margin:0 0 26px; color:var(--pds-muted); line-height:1.6; }
		.pds-u-form-grid { display:grid; grid-template-columns:1fr 1fr; gap:17px; }
		.pds-u-field { display:grid; gap:7px; }
		.pds-u-field--full { grid-column:1/-1; }
		.pds-u-field label { color:var(--pds-ink); font-size:13px; font-weight:800; }
		.pds-u-field input,.pds-u-field textarea { width:100%; border:1px solid #cfdff3; border-radius:10px; padding:13px 14px; outline:none; color:var(--pds-ink); font:inherit; font-size:15px; transition:border-color .2s ease,box-shadow .2s ease; }
		.pds-u-field textarea { min-height:138px; resize:vertical; }
		.pds-u-field input:focus,.pds-u-field textarea:focus { border-color:var(--pds-blue); box-shadow:0 0 0 4px rgba(20,110,232,.11); }
		.pds-u-honeypot { position:absolute!important; left:-9999px!important; width:1px!important; height:1px!important; overflow:hidden!important; }
		.pds-u-notice { margin:0 0 20px; padding:13px 15px; border-radius:10px; font-size:14px; font-weight:700; }
		.pds-u-notice--success { background:#e4f8ed; color:#12633a; }
		.pds-u-notice--error { background:#fff0f0; color:#aa2f2f; }
		.pds-u-post-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
		.pds-u-post { display:flex; flex-direction:column; min-height:270px; padding:28px; border:1px solid var(--pds-line); border-radius:18px; background:rgba(255,255,255,.9); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-u-post:hover { transform:translateY(-6px); border-color:rgba(20,110,232,.3); box-shadow:0 20px 38px rgba(19,66,124,.11); }
		.pds-u-post time { color:var(--pds-blue); font-size:12px; font-weight:850; letter-spacing:.08em; text-transform:uppercase; }
		.pds-u-post h2 { margin:18px 0 11px; font-size:22px; line-height:1.18; }
		.pds-u-post h2 a { color:var(--pds-ink); text-decoration:none; }
		.pds-u-post p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.65; }
		.pds-u-post a.pds-u-read { margin-top:auto; padding-top:22px; color:var(--pds-blue); font-size:14px; font-weight:850; text-decoration:none; }
		.pds-u-empty { padding:46px; border:1px dashed #b9d1ed; border-radius:18px; background:#fff; text-align:center; }
		.pds-u-empty h2 { margin:0 0 10px; }
		.pds-u-empty p { margin:0; color:var(--pds-muted); line-height:1.65; }
		.pds-u-career-callout { margin-top:24px; padding:32px; border-radius:18px; background:var(--pds-navy); color:#fff; }
		.pds-u-career-callout h2 { margin:0 0 10px; color:#fff; font-size:28px; }
		.pds-u-career-callout p { margin:0 0 22px; color:#cfdef4; line-height:1.65; }
		.pds-u-footer { padding:28px 0; background:#031126; color:#a9beda; font-size:13px; }
		.pds-u-footer-inner { display:flex; align-items:center; justify-content:space-between; gap:15px; }
		.pds-u-footer strong { color:#fff; }
		.pds-u-footer a { color:#d9e9ff; text-decoration:none; }
		.pds-u-footer a:hover { color:#fff; }
		/* Careers-only dark space presentation. Other utility pages retain their existing design. */
		.pds-utility--careers { background:#020d24; }
		.pds-utility--careers .pds-u-header { background:linear-gradient(105deg,#020917,#041530 64%,#061f4b); border-bottom:1px solid rgba(92,172,255,.23); box-shadow:none; }
		.pds-utility--careers .pds-u-links a[href*="careers"] { position:relative; color:#fff; }
		.pds-utility--careers .pds-u-links a[href*="careers"]::after { content:""; position:absolute; right:15%; bottom:-18px; left:15%; height:3px; border-radius:999px; background:var(--pds-gold); box-shadow:0 0 11px rgba(255,184,46,.75); }
		.pds-utility--careers .pds-u-hero { min-height:635px; padding:116px 0 121px; background:radial-gradient(circle at 8% 10%,rgba(76,170,255,.9) 0 1px,transparent 2px),radial-gradient(circle at 66% 42%,rgba(131,210,255,.78) 0 1px,transparent 2px),radial-gradient(circle at 92% 61%,rgba(61,148,255,.75) 0 1px,transparent 2px),radial-gradient(circle at 75% 34%,rgba(34,137,255,.45),transparent 25%),linear-gradient(110deg,#020a1e 0%,#031a44 51%,#0b55bf 100%); background-size:91px 91px,67px 67px,113px 113px,auto,auto; }
		.pds-utility--careers .pds-u-hero::before { width:390px; height:390px; right:-142px; top:-130px; border:0; background:radial-gradient(circle at 34% 37%,#bdd9ff 0,#3a83ff 19%,#143ba1 49%,rgba(4,20,73,.18) 70%,transparent 72%); box-shadow:0 0 57px rgba(65,145,255,.68),inset 18px -16px 31px rgba(3,14,75,.55); }
		.pds-utility--careers .pds-u-hero::after { width:255px; height:255px; left:-142px; bottom:-142px; border-radius:50%; background:radial-gradient(circle at 66% 31%,#ffe588 0,#ffba25 16%,#845016 38%,rgba(7,19,51,.2) 61%,transparent 63%); box-shadow:0 0 38px rgba(255,184,46,.48); opacity:1; }
		.pds-utility--careers .pds-u-hero-content { max-width:690px; }
		.pds-utility--careers .pds-u-eyebrow { color:#ffc84b; }
		.pds-utility--careers .pds-u-eyebrow::before { box-shadow:0 0 0 5px rgba(255,184,46,.1); }
		.pds-utility--careers .pds-u-hero h1 { max-width:670px; font-size:clamp(48px,6vw,80px); line-height:1.01; }
		.pds-utility--careers .pds-u-hero h1 span { color:var(--pds-sky); }
		.pds-utility--careers .pds-u-hero p:not(.pds-u-eyebrow) { max-width:650px; margin-top:30px; color:#d3e5ff; font-size:20px; }
		.pds-utility--careers .pds-u-main { padding:72px 0 102px; margin-top:-1px; background:radial-gradient(circle at 7% 62%,rgba(37,130,255,.19),transparent 22%),radial-gradient(circle at 93% 24%,rgba(38,132,255,.25),transparent 20%),linear-gradient(120deg,#020a1c,#031b45 54%,#041633); }
		.pds-utility--careers .pds-u-main::before { opacity:.47; background-image:radial-gradient(circle,rgba(109,190,255,.66) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.5) 1px,transparent 1.6px); background-size:27px 27px,79px 79px; }
		.pds-utility--careers .pds-u-grid { gap:22px; margin-bottom:32px; }
		.pds-utility--careers .pds-u-card { display:flex; min-height:326px; flex-direction:column; align-items:center; padding:38px 31px; border-color:rgba(64,148,255,.78); border-radius:20px; background:linear-gradient(145deg,rgba(8,45,105,.78),rgba(3,18,50,.9)); box-shadow:inset 0 1px 0 rgba(139,207,255,.12),0 14px 30px rgba(0,5,30,.23); text-align:center; }
		.pds-utility--careers .pds-u-card:hover { border-color:#5cb3ff; box-shadow:inset 0 1px 0 rgba(139,207,255,.23),0 23px 42px rgba(0,5,30,.42),0 0 25px rgba(20,110,232,.18); }
		.pds-utility--careers .pds-u-card-icon { width:96px; height:96px; margin:0 auto 28px; border:1px solid rgba(73,158,255,.36); border-radius:50%; background:radial-gradient(circle at 35% 32%,rgba(51,143,255,.42),rgba(8,49,114,.6)); color:var(--pds-gold); font-size:35px; box-shadow:0 0 0 15px rgba(18,84,183,.1),inset 0 0 22px rgba(48,151,255,.14); }
		.pds-utility--careers .pds-u-card h3 { margin-bottom:16px; color:#fff; font-size:23px; }
		.pds-utility--careers .pds-u-card h3::after { content:""; display:block; width:34px; height:2px; margin:15px auto 0; border-radius:999px; background:var(--pds-gold); }
		.pds-utility--careers .pds-u-card p { color:#cedfff; font-size:16px; line-height:1.7; }
		.pds-utility--careers .pds-u-grid:not(.pds-u-careers-grid),.pds-utility--careers .pds-u-career-callout:not(.pds-u-careers-callout) { display:none; }
		.pds-utility--careers .pds-u-careers-grid { align-items:stretch; }
		.pds-utility--careers .pds-u-careers-grid .pds-u-card-icon { padding:21px; }
		.pds-utility--careers .pds-u-careers-grid .pds-u-card-icon svg { display:block; width:100%; height:100%; fill:none; stroke:currentColor; stroke-linecap:round; stroke-linejoin:round; stroke-width:1.8; }
		.pds-utility--careers .pds-u-careers-grid .pds-u-card:nth-child(2) .pds-u-card-icon { color:#78c5ff; }
		.pds-utility--careers .pds-u-careers-grid .pds-u-card:nth-child(3) .pds-u-card-icon { color:#ffd252; }
		.pds-utility--careers .pds-u-career-callout { position:relative; min-height:282px; margin-top:31px; padding:52px 52px 48px 310px; overflow:hidden; border:1px solid rgba(56,154,255,.92); border-radius:22px; background:radial-gradient(circle at 78% 19%,rgba(16,94,209,.29),transparent 25%),linear-gradient(115deg,#020b20,#051a43 64%,#061d45); box-shadow:inset 0 1px 0 rgba(135,210,255,.13),0 22px 42px rgba(0,5,30,.35); }
		.pds-utility--careers .pds-u-career-callout::before { content:""; position:absolute; top:50%; left:57px; width:166px; height:166px; border:1px solid rgba(60,160,255,.82); border-radius:50%; background:radial-gradient(circle at 33% 31%,rgba(24,111,235,.48),rgba(3,28,76,.93)); box-shadow:0 0 0 14px rgba(11,85,190,.11),0 0 24px rgba(24,123,255,.26); transform:translateY(-50%); }
		.pds-utility--careers .pds-u-career-callout::after { content:"\2197"; position:absolute; top:50%; left:112px; z-index:1; color:var(--pds-gold); font-size:58px; font-weight:850; transform:translateY(-50%) rotate(-26deg); text-shadow:0 7px 18px rgba(0,0,0,.3); }
		.pds-utility--careers .pds-u-career-callout h2,.pds-utility--careers .pds-u-career-callout p,.pds-utility--careers .pds-u-career-callout .pds-u-button { position:relative; z-index:2; }
		.pds-utility--careers .pds-u-career-callout h2 { margin-bottom:15px; font-size:36px; }
		.pds-utility--careers .pds-u-career-callout h2::after { content:""; display:block; width:43px; height:3px; margin-top:16px; border-radius:99px; background:var(--pds-gold); }
		.pds-utility--careers .pds-u-career-callout p { max-width:600px; margin-bottom:27px; color:#d2e4ff; font-size:17px; }
		.pds-utility--careers .pds-u-career-callout .pds-u-button { padding:15px 25px; font-size:15px; }
		.pds-utility--careers .pds-u-footer { position:relative; overflow:hidden; background:radial-gradient(circle at -4% 108%,rgba(255,184,46,.52),transparent 15%),radial-gradient(circle at 95% 55%,rgba(14,103,239,.32),transparent 24%),linear-gradient(112deg,#020918,#031630 58%,#061c43); }
		.pds-utility--careers .pds-u-footer::before { content:""; position:absolute; inset:0; opacity:.2; pointer-events:none; background-image:radial-gradient(circle,rgba(107,188,255,.75) 1px,transparent 1.6px); background-size:37px 37px; }
		.pds-utility--careers .pds-u-footer-inner { position:relative; z-index:1; }
		.pds-utility--careers .pds-u-footer:not(.pds-u-footer--showcase) { display:none; }
		.pds-utility--careers .pds-u-footer--showcase { padding:62px 0 21px; background:radial-gradient(circle at -4% 108%,rgba(255,184,46,.52),transparent 15%),radial-gradient(circle at 95% 55%,rgba(14,103,239,.32),transparent 24%),linear-gradient(112deg,#020918,#031630 58%,#061c43); }
		.pds-utility--careers .pds-u-footer--showcase::before { content:""; position:absolute; inset:0; opacity:.22; pointer-events:none; background-image:radial-gradient(circle,rgba(107,188,255,.75) 1px,transparent 1.6px); background-size:37px 37px; }
		.pds-utility--careers .pds-u-footer-showcase-inner { position:relative; z-index:1; }
		.pds-utility--careers .pds-u-footer-grid { display:grid; grid-template-columns:1.5fr repeat(3,.78fr) 1fr; gap:32px; padding-bottom:35px; border-bottom:1px solid rgba(165,206,255,.17); }
		.pds-utility--careers .pds-u-footer-brand img { display:block; width:245px; height:auto; margin-bottom:14px; filter:drop-shadow(0 5px 10px rgba(20,110,232,.2)); }
		.pds-utility--careers .pds-u-footer-brand p { max-width:245px; margin:0; color:#a9beda; font-size:14px; line-height:1.6; }
		.pds-utility--careers .pds-u-footer-column { display:grid; align-content:start; gap:10px; }
		.pds-utility--careers .pds-u-footer-column h2 { margin:4px 0 7px; color:#fff; font-size:14px; font-weight:850; letter-spacing:.02em; }
		.pds-utility--careers .pds-u-footer-column a { color:#b9ceea; font-size:13px; text-decoration:none; }
		.pds-utility--careers .pds-u-footer-column a:hover { color:#fff; }
		.pds-utility--careers .pds-u-footer-bottom { display:flex; align-items:center; justify-content:space-between; gap:18px; padding-top:20px; color:#8fa9c8; font-size:12px; }
		.pds-utility--careers .pds-u-footer-bottom nav { display:flex; flex-wrap:wrap; gap:15px; }
		/* Shared Home-style footer for every utility page. */
		.pds-utility .pds-u-footer:not(.pds-u-footer--showcase) { display:none; }
		.pds-utility .pds-u-footer--showcase { position:relative; overflow:hidden; padding:62px 0 21px; background:radial-gradient(circle at -4% 108%,rgba(255,184,46,.52),transparent 15%),radial-gradient(circle at 95% 55%,rgba(14,103,239,.32),transparent 24%),linear-gradient(112deg,#020918,#031630 58%,#061c43); color:#a9beda; }
		.pds-utility .pds-u-footer--showcase::before { content:""; position:absolute; inset:0; opacity:.22; pointer-events:none; background-image:radial-gradient(circle,rgba(107,188,255,.75) 1px,transparent 1.6px); background-size:37px 37px; }
		.pds-utility .pds-u-footer-showcase-inner { position:relative; z-index:1; }
		.pds-utility .pds-u-footer-grid { display:grid; grid-template-columns:1.5fr repeat(3,.78fr) 1fr; gap:32px; padding-bottom:35px; border-bottom:1px solid rgba(165,206,255,.17); }
		.pds-utility .pds-u-footer-brand img { display:block; width:245px; height:auto; margin-bottom:14px; filter:drop-shadow(0 5px 10px rgba(20,110,232,.2)); }
		.pds-utility .pds-u-footer-brand p { max-width:245px; margin:0; color:#a9beda; font-size:14px; line-height:1.6; }
		.pds-utility .pds-u-footer-column { display:grid; align-content:start; gap:10px; }
		.pds-utility .pds-u-footer-column h2 { margin:4px 0 7px; color:#fff; font-size:14px; font-weight:850; letter-spacing:.02em; }
		.pds-utility .pds-u-footer-column a { color:#b9ceea; font-size:13px; text-decoration:none; }
		.pds-utility .pds-u-footer-column a:hover { color:#fff; }
		.pds-utility .pds-u-footer-bottom { display:flex; align-items:center; justify-content:space-between; gap:18px; padding-top:20px; color:#8fa9c8; font-size:12px; }
		.pds-utility .pds-u-footer-bottom nav { display:flex; flex-wrap:wrap; gap:15px; }
		/* Services, process, and about detail pages. */
		.pds-utility--services .pds-u-links a[href*="services"],.pds-utility--process .pds-u-links a[href*="process"],.pds-utility--about .pds-u-links a[href*="about"] { position:relative; color:#fff; }
		.pds-utility--services .pds-u-links a[href*="services"]::after,.pds-utility--process .pds-u-links a[href*="process"]::after,.pds-utility--about .pds-u-links a[href*="about"]::after { content:""; position:absolute; right:14%; bottom:-18px; left:14%; height:3px; border-radius:99px; background:var(--pds-gold); box-shadow:0 0 11px rgba(255,184,46,.72); }
		.pds-utility--services .pds-u-hero,.pds-utility--process .pds-u-hero,.pds-utility--about .pds-u-hero { min-height:480px; display:grid; align-items:center; background:radial-gradient(circle at 76% 18%,rgba(104,187,255,.88) 0 1px,transparent 2px),radial-gradient(circle at 90% 37%,rgba(255,255,255,.65) 0 1px,transparent 2px),radial-gradient(circle at 62% 55%,rgba(94,175,255,.54) 0 1px,transparent 2px),radial-gradient(circle at 78% 26%,#166fdb 0,#0d3c88 27%,transparent 52%),linear-gradient(112deg,#020b1d 0%,#041a3e 43%,#0b55bb 100%); background-size:91px 91px,127px 127px,73px 73px,auto,auto; }
		.pds-utility--services .pds-u-hero::before,.pds-utility--process .pds-u-hero::before,.pds-utility--about .pds-u-hero::before { width:350px; height:350px; right:-135px; top:-142px; border:0; background:radial-gradient(circle at 34% 39%,rgba(166,208,255,.86),rgba(58,118,255,.94) 19%,rgba(25,67,186,.97) 49%,rgba(5,22,74,.18) 70%,transparent 72%); box-shadow:0 0 55px rgba(78,148,255,.64),inset 16px -16px 30px rgba(4,18,90,.48); }
		.pds-utility--services .pds-u-hero::after,.pds-utility--process .pds-u-hero::after,.pds-utility--about .pds-u-hero::after { width:226px; height:226px; left:-118px; bottom:-130px; border-radius:50%; background:radial-gradient(circle at 65% 33%,#ffe484 0,#ffbe28 16%,#8f5815 37%,rgba(9,24,57,.16) 61%,transparent 63%); box-shadow:0 0 36px rgba(255,184,46,.45); opacity:1; }
		.pds-utility--services .pds-u-hero-content,.pds-utility--process .pds-u-hero-content,.pds-utility--about .pds-u-hero-content { max-width:770px; }
		.pds-utility--services .pds-u-main { padding:102px 0 112px; background:radial-gradient(circle at 88% 12%,rgba(20,123,244,.47),transparent 25%),radial-gradient(circle at 8% 84%,rgba(255,184,46,.16),transparent 17%),linear-gradient(132deg,#020b1d,#06275d 55%,#031a3d); color:#fff; }
		.pds-utility--services .pds-u-main::before { opacity:.43; background-image:radial-gradient(circle,rgba(113,194,255,.72) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.48) 1px,transparent 1.6px); background-size:26px 26px,79px 79px; }
		.pds-u-detail-lead { max-width:710px; margin:0 0 45px; }
		.pds-u-detail-lead h2 { margin:0 0 13px; font-size:clamp(30px,3.6vw,46px); line-height:1.1; letter-spacing:-.045em; }
		.pds-u-detail-lead p { margin:0; font-size:17px; line-height:1.7; }
		.pds-utility--services .pds-u-detail-lead h2 { color:#fff; }
		.pds-utility--services .pds-u-detail-lead p { color:#c7ddfb; }
		.pds-u-service-detail-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:19px; }
		.pds-u-service-detail { position:relative; min-height:278px; padding:31px; overflow:hidden; border:1px solid rgba(65,158,255,.62); border-radius:19px; background:linear-gradient(145deg,rgba(8,52,121,.9),rgba(3,22,56,.9)); box-shadow:inset 0 1px 0 rgba(151,213,255,.1),0 12px 27px rgba(0,5,32,.2); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-u-service-detail:hover { transform:translateY(-8px); border-color:#66bbff; box-shadow:inset 0 1px 0 rgba(151,213,255,.22),0 24px 42px rgba(0,5,32,.42),0 0 28px rgba(22,127,255,.18); }
		.pds-u-service-number { position:absolute; top:24px; right:25px; color:rgba(157,213,255,.45); font-size:12px; font-weight:850; letter-spacing:.09em; }
		.pds-u-detail-icon { display:grid; place-items:center; width:53px; height:53px; margin-bottom:24px; border-radius:15px; background:rgba(20,110,232,.23); color:#77c7ff; box-shadow:inset 0 0 0 1px rgba(101,190,255,.27); font-size:24px; font-weight:900; }
		.pds-u-service-detail h2 { margin:0 0 12px; color:#fff; font-size:22px; letter-spacing:-.03em; }
		.pds-u-service-detail p { margin:0; color:#c8ddfb; font-size:15px; line-height:1.68; }
		.pds-u-detail-cta { display:flex; align-items:center; justify-content:space-between; gap:28px; margin-top:28px; padding:30px 34px; border:1px solid rgba(80,171,255,.7); border-radius:19px; background:radial-gradient(circle at 88% 20%,rgba(35,145,255,.34),transparent 27%),linear-gradient(120deg,#031126,#082c64); box-shadow:0 18px 38px rgba(0,5,32,.25); }
		.pds-u-detail-cta h2 { margin:0 0 8px; color:#fff; font-size:28px; letter-spacing:-.04em; }
		.pds-u-detail-cta p { margin:0; color:#cee2ff; font-size:15px; line-height:1.6; }
		.pds-utility--process .pds-u-main { padding:102px 0 112px; background:radial-gradient(circle at 91% 13%,rgba(72,174,255,.2),transparent 22%),radial-gradient(circle at 8% 86%,rgba(255,184,46,.11),transparent 17%),linear-gradient(135deg,#fff 0%,#edf6ff 100%); }
		.pds-utility--process .pds-u-main::before { opacity:.42; background-image:radial-gradient(circle,rgba(20,110,232,.16) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.16) 1px,transparent 1.6px); background-size:35px 35px,91px 91px; }
		.pds-utility--process .pds-u-detail-lead h2 { color:var(--pds-ink); }
		.pds-utility--process .pds-u-detail-lead p { color:var(--pds-muted); }
		.pds-u-process-roadmap { position:relative; display:grid; grid-template-columns:repeat(4,1fr); gap:22px; counter-reset:delivery; }
		.pds-u-process-roadmap::before { content:""; position:absolute; top:53px; right:10%; left:10%; border-top:2px dashed #b9dcff; }
		.pds-u-process-step { position:relative; z-index:1; min-height:288px; padding:86px 24px 27px; border:1px solid #d9e9fb; border-radius:19px; background:rgba(255,255,255,.88); box-shadow:0 14px 32px rgba(19,66,124,.07); text-align:center; transition:transform .25s ease,box-shadow .25s ease; counter-increment:delivery; }
		.pds-u-process-step:hover { transform:translateY(-7px); box-shadow:0 22px 40px rgba(19,66,124,.13); }
		.pds-u-process-step::before { content:"0" counter(delivery); position:absolute; top:25px; left:50%; display:grid; place-items:center; width:57px; height:57px; border:10px solid #fff; border-radius:50%; background:var(--pds-blue); color:#fff; box-shadow:0 0 0 1px #cfe5ff,0 9px 20px rgba(20,110,232,.17); font-size:12px; font-weight:850; transform:translateX(-50%); }
		.pds-u-process-step h2 { margin:0 0 10px; color:var(--pds-ink); font-size:21px; letter-spacing:-.03em; }
		.pds-u-process-step p { margin:0; color:var(--pds-muted); font-size:14px; line-height:1.68; }
		.pds-u-process-note { display:grid; grid-template-columns:1fr auto; align-items:center; gap:28px; margin-top:30px; padding:32px 35px; border-radius:20px; background:linear-gradient(120deg,#031127,#0b4dac); box-shadow:0 20px 38px rgba(5,33,81,.2); color:#fff; }
		.pds-u-process-note h2 { margin:0 0 8px; color:#fff; font-size:28px; font-weight:850; letter-spacing:-.04em; text-shadow:0 2px 13px rgba(0,0,0,.28); }
		.pds-u-process-note p { max-width:690px; margin:0; color:#d1e5ff; font-size:15px; line-height:1.65; }
		.pds-utility--about .pds-u-main { padding:102px 0 112px; background:radial-gradient(circle at 91% 14%,rgba(49,169,255,.19),transparent 22%),radial-gradient(circle at 6% 87%,rgba(255,184,46,.12),transparent 18%),linear-gradient(135deg,#fff 0%,#edf6ff 100%); }
		.pds-utility--about .pds-u-main::before { opacity:.4; background-image:radial-gradient(circle,rgba(20,110,232,.15) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.16) 1px,transparent 1.6px); background-size:36px 36px,93px 93px; }
		.pds-u-about-split { display:grid; grid-template-columns:1.08fr .92fr; gap:66px; align-items:center; margin-bottom:68px; }
		.pds-u-about-copy h2 { margin:0 0 17px; color:var(--pds-ink); font-size:clamp(32px,4vw,49px); line-height:1.1; letter-spacing:-.05em; }
		.pds-u-about-copy h2 span { color:var(--pds-blue); }
		.pds-u-about-copy p { margin:0 0 16px; color:var(--pds-muted); font-size:17px; line-height:1.72; }
		.pds-u-about-panel { position:relative; min-height:340px; padding:40px; overflow:hidden; border:1px solid rgba(64,155,255,.66); border-radius:25px; background:radial-gradient(circle at 78% 20%,rgba(39,145,255,.45),transparent 27%),linear-gradient(140deg,#031329,#092e68); box-shadow:0 22px 43px rgba(5,33,81,.25); color:#fff; }
		.pds-u-about-panel::before { content:""; position:absolute; width:240px; height:240px; right:-98px; bottom:-109px; border:30px solid rgba(76,176,255,.2); border-radius:50%; }
		.pds-u-about-panel > * { position:relative; z-index:1; }
		.pds-u-about-panel p { margin:0 0 12px; color:#9fd4ff; font-size:12px; font-weight:850; letter-spacing:.12em; text-transform:uppercase; }
		.pds-u-about-panel h2 { max-width:330px; margin:0 0 19px; color:#fff; font-size:34px; line-height:1.08; letter-spacing:-.05em; }
		.pds-u-about-panel ul { display:grid; gap:11px; margin:0; padding:0; list-style:none; }
		.pds-u-about-panel li { display:flex; gap:10px; color:#d6e9ff; font-size:14px; line-height:1.55; }
		.pds-u-about-panel li::before { content:"\2713"; color:var(--pds-gold); font-weight:900; }
		.pds-u-about-values { display:grid; grid-template-columns:repeat(3,1fr); gap:19px; }
		.pds-u-about-value { padding:29px; border:1px solid #d8e9fb; border-radius:19px; background:rgba(255,255,255,.9); box-shadow:0 13px 30px rgba(19,66,124,.06); transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease; }
		.pds-u-about-value:hover { transform:translateY(-7px); border-color:rgba(20,110,232,.36); box-shadow:0 22px 40px rgba(19,66,124,.13); }
		.pds-u-about-value span { display:grid; place-items:center; width:49px; height:49px; margin-bottom:23px; border-radius:14px; background:#e8f4ff; color:var(--pds-blue); font-size:21px; font-weight:900; }
		.pds-u-about-value h2 { margin:0 0 11px; color:var(--pds-ink); font-size:22px; letter-spacing:-.03em; }
		.pds-u-about-value p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.67; }
		.pds-u-motion .pds-utility--services .pds-u-main::before,.pds-u-motion .pds-utility--process .pds-u-main::before,.pds-u-motion .pds-utility--about .pds-u-main::before { animation:pds-u-detail-drift 25s linear infinite; }
		.pds-u-motion .pds-utility--about .pds-u-about-panel::before { animation:pds-u-about-orbit 12s ease-in-out infinite; }
		@keyframes pds-u-detail-drift { from { background-position:0 0,0 0; } to { background-position:36px 36px,93px -93px; } }
		@keyframes pds-u-about-orbit { 0%,100% { transform:translate(0,0) rotate(0); } 50% { transform:translate(-16px,-12px) rotate(12deg); } }
		@media (max-width:850px) { .pds-u-service-detail-grid,.pds-u-about-values { grid-template-columns:repeat(2,1fr); } .pds-u-process-roadmap { grid-template-columns:repeat(2,1fr); } .pds-u-process-roadmap::before { display:none; } .pds-u-about-split { grid-template-columns:1fr; gap:38px; } }
		@media (max-width:560px) { .pds-utility--services .pds-u-hero,.pds-utility--process .pds-u-hero,.pds-utility--about .pds-u-hero { min-height:0; padding:80px 0 96px; } .pds-utility--services .pds-u-main,.pds-utility--process .pds-u-main,.pds-utility--about .pds-u-main { padding:66px 0 76px; } .pds-u-service-detail-grid,.pds-u-process-roadmap,.pds-u-about-values { grid-template-columns:1fr; } .pds-u-service-detail { min-height:0; } .pds-u-detail-cta,.pds-u-process-note { align-items:flex-start; flex-direction:column; padding:28px; } .pds-u-process-step { min-height:0; } .pds-u-about-panel { min-height:300px; padding:31px; } }
		/* Home-hero inspired treatment for Contact, Terms, and Privacy. */
		.pds-utility--contact .pds-u-hero,.pds-utility--terms .pds-u-hero,.pds-utility--privacy .pds-u-hero { min-height:465px; display:grid; align-items:center; background:radial-gradient(circle at 76% 18%,rgba(104,187,255,.88) 0 1px,transparent 2px),radial-gradient(circle at 90% 37%,rgba(255,255,255,.65) 0 1px,transparent 2px),radial-gradient(circle at 62% 55%,rgba(94,175,255,.54) 0 1px,transparent 2px),radial-gradient(circle at 78% 26%,#166fdb 0,#0d3c88 27%,transparent 52%),linear-gradient(112deg,#020b1d 0%,#041a3e 43%,#0b55bb 100%); background-size:91px 91px,127px 127px,73px 73px,auto,auto; }
		.pds-utility--contact .pds-u-hero::before,.pds-utility--terms .pds-u-hero::before,.pds-utility--privacy .pds-u-hero::before { width:350px; height:350px; right:-135px; top:-142px; border:0; background:radial-gradient(circle at 34% 39%,rgba(166,208,255,.86),rgba(58,118,255,.94) 19%,rgba(25,67,186,.97) 49%,rgba(5,22,74,.18) 70%,transparent 72%); box-shadow:0 0 55px rgba(78,148,255,.64),inset 16px -16px 30px rgba(4,18,90,.48); }
		.pds-utility--contact .pds-u-hero::after,.pds-utility--terms .pds-u-hero::after,.pds-utility--privacy .pds-u-hero::after { width:226px; height:226px; left:-118px; bottom:-130px; border-radius:50%; background:radial-gradient(circle at 65% 33%,#ffe484 0,#ffbe28 16%,#8f5815 37%,rgba(9,24,57,.16) 61%,transparent 63%); box-shadow:0 0 36px rgba(255,184,46,.45); opacity:1; }
		.pds-utility--contact .pds-u-hero-content,.pds-utility--terms .pds-u-hero-content,.pds-utility--privacy .pds-u-hero-content { max-width:765px; }
		.pds-utility--contact .pds-u-hero h1,.pds-utility--terms .pds-u-hero h1,.pds-utility--privacy .pds-u-hero h1 { max-width:710px; font-size:clamp(43px,5.3vw,68px); }
		.pds-utility--contact .pds-u-hero p:not(.pds-u-eyebrow),.pds-utility--terms .pds-u-hero p:not(.pds-u-eyebrow),.pds-utility--privacy .pds-u-hero p:not(.pds-u-eyebrow) { max-width:660px; color:#d7e8ff; font-size:19px; }
		.pds-utility--contact .pds-u-main,.pds-utility--terms .pds-u-main,.pds-utility--privacy .pds-u-main { background:radial-gradient(circle at 92% 13%,rgba(72,174,255,.2),transparent 22%),radial-gradient(circle at 8% 86%,rgba(255,184,46,.1),transparent 17%),linear-gradient(135deg,#fff 0%,#edf6ff 100%); }
		.pds-utility--contact .pds-u-main::before,.pds-utility--terms .pds-u-main::before,.pds-utility--privacy .pds-u-main::before { opacity:.42; background-image:radial-gradient(circle,rgba(20,110,232,.16) 1px,transparent 1.6px),radial-gradient(circle,rgba(255,184,46,.16) 1px,transparent 1.6px); background-size:35px 35px,91px 91px; }
		.pds-utility--contact .pds-u-card,.pds-utility--contact .pds-u-form-shell,.pds-utility--terms .pds-u-policy-card,.pds-utility--privacy .pds-u-policy-card { border-color:rgba(91,162,244,.28); background:rgba(255,255,255,.88); box-shadow:0 17px 38px rgba(19,66,124,.09); backdrop-filter:blur(8px); }
		.pds-utility--contact .pds-u-card:hover,.pds-utility--terms .pds-u-policy-card:hover,.pds-utility--privacy .pds-u-policy-card:hover { transform:translateY(-7px); border-color:rgba(20,110,232,.47); box-shadow:0 24px 42px rgba(19,66,124,.14); }
		.pds-utility--contact .pds-u-form-shell { position:relative; overflow:hidden; }
		.pds-utility--contact .pds-u-form-shell::before { content:""; position:absolute; inset:0 auto 0 0; width:4px; background:linear-gradient(var(--pds-sky),var(--pds-blue),var(--pds-gold)); }
		.pds-utility--contact .pds-u-form-shell > * { position:relative; z-index:1; }
		.pds-utility--contact .pds-u-aside,.pds-utility--terms .pds-u-aside,.pds-utility--privacy .pds-u-aside { border:1px solid rgba(92,167,246,.22); background:linear-gradient(145deg,#eef7ff,#ddebff); box-shadow:0 14px 28px rgba(19,66,124,.08); }
		.pds-u-motion .pds-utility--contact .pds-u-main::before,.pds-u-motion .pds-utility--terms .pds-u-main::before,.pds-u-motion .pds-utility--privacy .pds-u-main::before { animation:pds-u-soft-dot-drift 24s linear infinite; }
		@keyframes pds-u-soft-dot-drift { from { background-position:0 0,0 0; } to { background-position:35px 35px,91px -91px; } }
		/* Terms-only agreement timeline below the hero. */
		.pds-utility--terms .pds-u-main { padding:100px 0 112px; background:radial-gradient(circle at 92% 12%,rgba(48,158,255,.21),transparent 25%),radial-gradient(circle at 7% 88%,rgba(255,184,46,.14),transparent 19%),linear-gradient(135deg,#fafdff 0%,#eaf4ff 100%); }
		.pds-utility--terms .pds-u-main::before { opacity:.48; background-image:linear-gradient(rgba(20,110,232,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(20,110,232,.06) 1px,transparent 1px),radial-gradient(circle,rgba(255,184,46,.25) 1px,transparent 1.6px); background-size:48px 48px,48px 48px,94px 94px; }
		.pds-utility--terms .pds-u-terms-layout { grid-template-columns:310px minmax(0,1fr); gap:72px; }
		.pds-utility--terms .pds-u-aside:not(.pds-u-terms-summary) { display:none; }
		.pds-utility--terms .pds-u-terms-summary { position:sticky; top:28px; align-self:start; padding:31px 27px; overflow:hidden; border:1px solid rgba(51,143,255,.63); border-radius:22px; background:radial-gradient(circle at 92% 10%,rgba(42,143,255,.4),transparent 29%),linear-gradient(145deg,#031431,#071f4d 68%,#0b4392); box-shadow:0 22px 42px rgba(5,33,81,.2); color:#fff; }
		.pds-utility--terms .pds-u-terms-summary::before { content:""; position:absolute; inset:0; opacity:.19; pointer-events:none; background-image:radial-gradient(circle,rgba(126,201,255,.8) 1px,transparent 1.5px); background-size:23px 23px; }
		.pds-utility--terms .pds-u-terms-summary > * { position:relative; z-index:1; }
		.pds-utility--terms .pds-u-summary-kicker { margin:0 0 15px; color:#ffd05a; font-size:11px; font-weight:850; letter-spacing:.14em; text-transform:uppercase; }
		.pds-utility--terms .pds-u-terms-summary h2 { margin:0 0 15px; color:#fff; font-size:27px; line-height:1.12; letter-spacing:-.04em; }
		.pds-utility--terms .pds-u-terms-summary > p { margin:0 0 21px; color:#d2e6ff; font-size:14px; line-height:1.65; }
		.pds-utility--terms .pds-u-summary-list { display:grid; gap:12px; margin:0 0 24px; padding:0; list-style:none; }
		.pds-utility--terms .pds-u-summary-list li { display:grid; grid-template-columns:27px 1fr; gap:10px; align-items:start; color:#e9f3ff; font-size:13px; line-height:1.5; }
		.pds-utility--terms .pds-u-summary-list span { display:grid; place-items:center; width:27px; height:27px; border-radius:8px; background:rgba(49,169,255,.2); color:#8dd2ff; font-size:10px; font-weight:850; }
		.pds-utility--terms .pds-u-summary-link { display:inline-flex; align-items:center; gap:8px; color:#fff; font-size:13px; font-weight:850; text-decoration:none; }
		.pds-utility--terms .pds-u-summary-link::after { content:"\2192"; color:var(--pds-gold); font-size:17px; transition:transform .2s ease; }
		.pds-utility--terms .pds-u-summary-link:hover::after { transform:translateX(4px); }
		.pds-utility--terms .pds-u-policy { position:relative; gap:21px; padding-left:118px; }
		.pds-utility--terms .pds-u-policy::before { content:""; position:absolute; top:31px; bottom:31px; left:21px; width:2px; background:linear-gradient(var(--pds-blue),#91ceff 82%,transparent); }
		.pds-utility--terms .pds-u-policy-card { position:relative; min-height:150px; padding:28px 32px; border-color:rgba(78,153,240,.3); border-radius:19px; background:rgba(255,255,255,.9); box-shadow:0 15px 35px rgba(19,66,124,.08); }
		.pds-utility--terms .pds-u-policy-card::before { content:""; position:absolute; top:34px; left:-108px; width:24px; height:24px; border:7px solid #edf6ff; border-radius:50%; background:var(--pds-blue); box-shadow:0 0 0 1px rgba(20,110,232,.25),0 8px 18px rgba(20,110,232,.2); }
		.pds-utility--terms .pds-u-policy-card:hover { transform:translateX(8px); border-color:rgba(20,110,232,.53); box-shadow:0 23px 42px rgba(19,66,124,.14); }
		.pds-utility--terms .pds-u-policy-card h2 { position:relative; min-height:40px; padding-right:54px; color:#10203d; font-size:25px; }
		.pds-utility--terms .pds-u-policy-card h2 span { position:absolute; top:0; left:-106px; width:48px; height:48px; border:1px solid rgba(20,110,232,.18); border-radius:14px; background:linear-gradient(145deg,#e9f4ff,#d6eaff); color:var(--pds-blue); box-shadow:0 7px 16px rgba(20,110,232,.1); font-size:13px; }
		.pds-utility--terms .pds-u-policy-card h2::after { content:"+"; position:absolute; top:0; right:0; display:grid; place-items:center; width:38px; height:38px; border-radius:11px; background:#e8f4ff; color:var(--pds-blue); font-size:25px; font-weight:500; }
		.pds-utility--terms .pds-u-policy-card:nth-child(2) h2::after { content:"!"; color:#e69e12; }
		.pds-utility--terms .pds-u-policy-card:nth-child(3) h2::after { content:"C"; color:#4d78c7; font-size:17px; font-weight:850; }
		.pds-utility--terms .pds-u-policy-card:nth-child(4) h2::after { content:"\2662"; color:#397edb; font-size:21px; }
		.pds-utility--terms .pds-u-policy-card:nth-child(5) h2::after { content:"\21BB"; color:#28a777; font-size:20px; }
		.pds-utility--terms .pds-u-policy-card p { margin:9px 0 0; font-size:15px; line-height:1.72; }
		.pds-u-motion .pds-utility--terms .pds-u-policy::before { background-size:100% 190%; animation:pds-u-timeline-flow 5.5s ease-in-out infinite; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card::before { animation:pds-u-timeline-node 2.8s ease-in-out infinite; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(2)::before { animation-delay:.35s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(3)::before { animation-delay:.7s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(4)::before { animation-delay:1.05s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(5)::before { animation-delay:1.4s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card h2 span { animation:pds-u-timeline-badge 3.6s ease-in-out infinite; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(2) h2 span { animation-delay:.2s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(3) h2 span { animation-delay:.4s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(4) h2 span { animation-delay:.6s; }
		.pds-u-motion .pds-utility--terms .pds-u-policy-card:nth-child(5) h2 span { animation-delay:.8s; }
		.pds-u-motion .pds-utility--terms .pds-u-terms-summary::before { animation:pds-u-terms-stars 16s linear infinite; }
		@keyframes pds-u-timeline-flow { 0%,100% { background-position:0 0; opacity:.8; } 50% { background-position:0 100%; opacity:1; } }
		@keyframes pds-u-timeline-node { 0%,100% { transform:scale(1); box-shadow:0 0 0 1px rgba(20,110,232,.25),0 8px 18px rgba(20,110,232,.2); } 50% { transform:scale(1.18); box-shadow:0 0 0 6px rgba(49,169,255,.12),0 10px 23px rgba(20,110,232,.35); } }
		@keyframes pds-u-timeline-badge { 0%,100% { transform:translateY(0); box-shadow:0 7px 16px rgba(20,110,232,.1); } 50% { transform:translateY(-3px); box-shadow:0 12px 22px rgba(20,110,232,.2); } }
		@keyframes pds-u-terms-stars { from { background-position:0 0; } to { background-position:69px -69px; } }
		@media (max-width:850px) { .pds-utility--terms .pds-u-terms-layout { grid-template-columns:1fr; gap:34px; } .pds-utility--terms .pds-u-terms-summary { position:relative; top:auto; } }
		@media (max-width:560px) { .pds-utility--terms .pds-u-main { padding:65px 0 74px; } .pds-utility--terms .pds-u-policy { padding-left:75px; } .pds-utility--terms .pds-u-policy::before { left:14px; } .pds-utility--terms .pds-u-policy-card { min-height:0; padding:24px 22px; } .pds-utility--terms .pds-u-policy-card::before { top:32px; left:-69px; width:18px; height:18px; border-width:5px; } .pds-utility--terms .pds-u-policy-card h2 { padding-right:45px; font-size:22px; } .pds-utility--terms .pds-u-policy-card h2 span { top:-1px; left:-66px; width:38px; height:38px; border-radius:11px; font-size:11px; } .pds-utility--terms .pds-u-policy-card h2::after { width:32px; height:32px; border-radius:9px; } }
		/* Privacy-only left summary and right data-care timeline. */
		.pds-utility--privacy .pds-u-main { padding:100px 0 112px; background:radial-gradient(circle at 91% 13%,rgba(38,185,182,.17),transparent 24%),radial-gradient(circle at 6% 88%,rgba(49,169,255,.13),transparent 20%),linear-gradient(135deg,#fbfeff 0%,#e9f8fb 100%); }
		.pds-utility--privacy .pds-u-main::before { opacity:.46; background-image:linear-gradient(rgba(31,164,173,.06) 1px,transparent 1px),linear-gradient(90deg,rgba(31,164,173,.06) 1px,transparent 1px),radial-gradient(circle,rgba(49,169,255,.22) 1px,transparent 1.6px); background-size:48px 48px,48px 48px,89px 89px; }
		.pds-utility--privacy .pds-u-privacy-layout { grid-template-columns:310px minmax(0,1fr); gap:72px; }
		.pds-utility--privacy .pds-u-aside:not(.pds-u-privacy-summary) { display:none; }
		.pds-utility--privacy .pds-u-privacy-summary { position:sticky; top:28px; align-self:start; padding:31px 27px; overflow:hidden; border:1px solid rgba(40,170,181,.56); border-radius:22px; background:radial-gradient(circle at 91% 8%,rgba(56,207,211,.36),transparent 30%),linear-gradient(145deg,#032f48,#064363 68%,#086387); box-shadow:0 22px 42px rgba(5,68,81,.19); color:#fff; }
		.pds-utility--privacy .pds-u-privacy-summary::before { content:""; position:absolute; inset:0; opacity:.2; pointer-events:none; background-image:radial-gradient(circle,rgba(141,246,233,.86) 1px,transparent 1.6px); background-size:22px 22px; }
		.pds-utility--privacy .pds-u-privacy-summary > * { position:relative; z-index:1; }
		.pds-utility--privacy .pds-u-summary-kicker { margin:0 0 15px; color:#9df5e5; font-size:11px; font-weight:850; letter-spacing:.14em; text-transform:uppercase; }
		.pds-utility--privacy .pds-u-privacy-summary h2 { margin:0 0 15px; color:#fff; font-size:27px; line-height:1.12; letter-spacing:-.04em; }
		.pds-utility--privacy .pds-u-privacy-summary > p { margin:0 0 21px; color:#d4f4f6; font-size:14px; line-height:1.65; }
		.pds-utility--privacy .pds-u-summary-list { display:grid; gap:12px; margin:0 0 24px; padding:0; list-style:none; }
		.pds-utility--privacy .pds-u-summary-list li { display:grid; grid-template-columns:27px 1fr; gap:10px; align-items:start; color:#ebffff; font-size:13px; line-height:1.5; }
		.pds-utility--privacy .pds-u-summary-list span { display:grid; place-items:center; width:27px; height:27px; border-radius:8px; background:rgba(103,231,225,.17); color:#a9fff1; font-size:10px; font-weight:850; }
		.pds-utility--privacy .pds-u-summary-link { display:inline-flex; align-items:center; gap:8px; color:#fff; font-size:13px; font-weight:850; text-decoration:none; }
		.pds-utility--privacy .pds-u-summary-link::after { content:"\2192"; color:#a9fff1; font-size:17px; transition:transform .2s ease; }
		.pds-utility--privacy .pds-u-summary-link:hover::after { transform:translateX(4px); }
		.pds-utility--privacy .pds-u-policy { position:relative; gap:21px; padding-left:118px; }
		.pds-utility--privacy .pds-u-policy::before { content:""; position:absolute; top:31px; bottom:31px; left:21px; width:2px; background:linear-gradient(#1aa6b4,#8de8dc 82%,transparent); }
		.pds-utility--privacy .pds-u-policy-card { position:relative; min-height:150px; padding:28px 32px; border-color:rgba(53,165,184,.28); border-radius:19px; background:rgba(255,255,255,.9); box-shadow:0 15px 35px rgba(18,89,109,.08); }
		.pds-utility--privacy .pds-u-policy-card::before { content:""; position:absolute; top:34px; left:-108px; width:24px; height:24px; border:7px solid #edfbfb; border-radius:50%; background:#16aab4; box-shadow:0 0 0 1px rgba(22,170,180,.24),0 8px 18px rgba(22,170,180,.2); }
		.pds-utility--privacy .pds-u-policy-card:hover { transform:translateX(8px); border-color:rgba(22,170,180,.56); box-shadow:0 23px 42px rgba(18,89,109,.14); }
		.pds-utility--privacy .pds-u-policy-card h2 { position:relative; min-height:40px; padding-right:54px; color:#10203d; font-size:25px; }
		.pds-utility--privacy .pds-u-policy-card h2 span { position:absolute; top:0; left:-106px; width:48px; height:48px; border:1px solid rgba(22,170,180,.18); border-radius:14px; background:linear-gradient(145deg,#e8fbfa,#d2f1f1); color:#12909a; box-shadow:0 7px 16px rgba(22,170,180,.1); font-size:13px; }
		.pds-utility--privacy .pds-u-policy-card h2::after { content:"i"; position:absolute; top:0; right:0; display:grid; place-items:center; width:38px; height:38px; border-radius:11px; background:#e7f8f7; color:#168f98; font-size:22px; font-weight:850; font-family:Georgia,serif; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(2) h2::after { content:"\2192"; color:#247fd0; font-family:inherit; font-size:20px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(3) h2::after { content:"\25C6"; color:#3b72c8; font-family:inherit; font-size:17px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(4) h2::after { content:"\2713"; color:#1c9e73; font-family:inherit; font-size:18px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(5) h2::after { content:"\21BB"; color:#2e90cf; font-family:inherit; font-size:20px; }
		.pds-utility--privacy .pds-u-policy-card p { margin:9px 0 0; font-size:15px; line-height:1.72; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy::before { background-size:100% 190%; animation:pds-u-privacy-flow 5.5s ease-in-out infinite; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card::before { animation:pds-u-privacy-node 2.9s ease-in-out infinite; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(2)::before { animation-delay:.35s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(3)::before { animation-delay:.7s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(4)::before { animation-delay:1.05s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(5)::before { animation-delay:1.4s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card h2 span { animation:pds-u-privacy-badge 3.6s ease-in-out infinite; }
		.pds-u-motion .pds-utility--privacy .pds-u-privacy-summary::before { animation:pds-u-privacy-stars 16s linear infinite; }
		@keyframes pds-u-privacy-flow { 0%,100% { background-position:0 0; opacity:.8; } 50% { background-position:0 100%; opacity:1; } }
		@keyframes pds-u-privacy-node { 0%,100% { transform:scale(1); box-shadow:0 0 0 1px rgba(22,170,180,.24),0 8px 18px rgba(22,170,180,.2); } 50% { transform:scale(1.18); box-shadow:0 0 0 6px rgba(71,215,207,.13),0 10px 23px rgba(22,170,180,.34); } }
		@keyframes pds-u-privacy-badge { 0%,100% { transform:translateY(0); box-shadow:0 7px 16px rgba(22,170,180,.1); } 50% { transform:translateY(-3px); box-shadow:0 12px 22px rgba(22,170,180,.2); } }
		@keyframes pds-u-privacy-stars { from { background-position:0 0; } to { background-position:66px -66px; } }
		@media (max-width:850px) { .pds-utility--privacy .pds-u-privacy-layout { grid-template-columns:1fr; gap:34px; } .pds-utility--privacy .pds-u-privacy-summary { position:relative; top:auto; } }
		@media (max-width:560px) { .pds-utility--privacy .pds-u-main { padding:65px 0 74px; } .pds-utility--privacy .pds-u-policy { padding-left:75px; } .pds-utility--privacy .pds-u-policy::before { left:14px; } .pds-utility--privacy .pds-u-policy-card { min-height:0; padding:24px 22px; } .pds-utility--privacy .pds-u-policy-card::before { top:32px; left:-69px; width:18px; height:18px; border-width:5px; } .pds-utility--privacy .pds-u-policy-card h2 { padding-right:45px; font-size:22px; } .pds-utility--privacy .pds-u-policy-card h2 span { top:-1px; left:-66px; width:38px; height:38px; border-radius:11px; font-size:11px; } .pds-utility--privacy .pds-u-policy-card h2::after { width:32px; height:32px; border-radius:9px; } }
		@media (max-width:560px) { .pds-utility--contact .pds-u-hero,.pds-utility--terms .pds-u-hero,.pds-utility--privacy .pds-u-hero { min-height:0; padding:80px 0 96px; } .pds-utility--contact .pds-u-hero h1,.pds-utility--terms .pds-u-hero h1,.pds-utility--privacy .pds-u-hero h1 { font-size:44px; } .pds-utility--contact .pds-u-hero p:not(.pds-u-eyebrow),.pds-utility--terms .pds-u-hero p:not(.pds-u-eyebrow),.pds-utility--privacy .pds-u-hero p:not(.pds-u-eyebrow) { font-size:16px; } }
		.pds-u-motion .pds-utility--careers .pds-u-career-callout::before { animation:pds-u-career-pulse 4.8s ease-in-out infinite; }
		@keyframes pds-u-career-pulse { 0%,100% { box-shadow:0 0 0 14px rgba(11,85,190,.11),0 0 24px rgba(24,123,255,.26); } 50% { box-shadow:0 0 0 19px rgba(11,85,190,.16),0 0 36px rgba(24,123,255,.48); } }
		@media (max-width:850px) { .pds-utility--careers .pds-u-hero { min-height:auto; } .pds-utility--careers .pds-u-grid { grid-template-columns:1fr; } .pds-utility--careers .pds-u-card { min-height:0; } .pds-utility .pds-u-footer-grid { grid-template-columns:repeat(3,1fr); } .pds-utility .pds-u-footer-brand { grid-column:1/-1; } }
		@media (max-width:560px) { .pds-utility--careers .pds-u-hero { padding:80px 0 98px; } .pds-utility--careers .pds-u-hero h1 { font-size:48px; } .pds-utility--careers .pds-u-main { padding:58px 0 70px; } .pds-utility--careers .pds-u-career-callout { min-height:0; padding:225px 27px 31px; } .pds-utility--careers .pds-u-career-callout::before { top:101px; left:50%; width:132px; height:132px; transform:translateX(-50%); } .pds-utility--careers .pds-u-career-callout::after { top:101px; left:50%; font-size:48px; transform:translate(-50%,-50%) rotate(-26deg); } .pds-utility--careers .pds-u-career-callout h2 { font-size:29px; } .pds-utility .pds-u-footer-grid { grid-template-columns:repeat(2,1fr); gap:27px 18px; } .pds-utility .pds-u-footer-brand { grid-column:1/-1; } .pds-utility .pds-u-footer-bottom { align-items:flex-start; flex-direction:column; } }
		.pds-u-motion .pds-u-reveal { opacity:0; transform:translateY(27px); transition:opacity .68s cubic-bezier(.16,1,.3,1),transform .68s cubic-bezier(.16,1,.3,1); transition-delay:var(--pds-delay,0ms); }
		.pds-u-motion .pds-u-reveal.pds-u-visible { opacity:1; transform:translateY(0); }
		.pds-u-motion .pds-u-card:nth-child(2),.pds-u-motion .pds-u-post:nth-child(2) { --pds-delay:90ms; }
		.pds-u-motion .pds-u-card:nth-child(3),.pds-u-motion .pds-u-post:nth-child(3) { --pds-delay:180ms; }
		.pds-u-motion .pds-u-header-logo { animation:pds-u-header-logo-float 4.8s ease-in-out infinite; transform-origin:left center; }
		.pds-u-motion .pds-u-hero::before { animation:pds-u-orbit 12s ease-in-out infinite; }
		.pds-u-motion .pds-u-hero::after { animation:pds-u-dot-drift 10s ease-in-out infinite; }
		.pds-u-motion .pds-u-main::before { animation:pds-u-grid-drift 26s linear infinite; }
		@keyframes pds-u-orbit { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(-18px,19px) scale(1.05); } }
		@keyframes pds-u-header-logo-float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-2px); } }
		@keyframes pds-u-dot-drift { 0%,100% { transform:translate(0,0); opacity:.66; } 50% { transform:translate(24px,-16px); opacity:1; } }
		@keyframes pds-u-grid-drift { from { background-position:0 0,0 0,0 0; } to { background-position:44px 44px,44px 44px,0 0; } }
		@media (prefers-reduced-motion:reduce) { *,*::before,*::after { scroll-behavior:auto!important; animation-duration:.01ms!important; animation-iteration-count:1!important; transition-duration:.01ms!important; } }
		@media (max-width:850px) { .pds-u-links { display:none; } .pds-u-layout { grid-template-columns:1fr; gap:32px; } .pds-u-aside { position:static; } .pds-u-grid,.pds-u-post-grid { grid-template-columns:repeat(2,1fr); } }
		@media (max-width:560px) { .pds-wrap { width:min(100% - 30px,1120px); } .pds-u-nav { min-height:78px; } .pds-u-brand { font-size:16px; } .pds-u-header-logo { width:178px; max-height:none; } .pds-u-nav .pds-u-button { padding:11px 14px; font-size:12px; } .pds-u-hero { padding:64px 0 70px; } .pds-u-hero h1 { font-size:40px; } .pds-u-hero p:not(.pds-u-eyebrow) { font-size:16px; } .pds-u-main { padding:64px 0 70px; } .pds-u-grid,.pds-u-post-grid,.pds-u-form-grid { grid-template-columns:1fr; } .pds-u-field--full { grid-column:auto; } .pds-u-form-shell,.pds-u-policy-card { padding:24px; } .pds-u-footer-inner { align-items:flex-start; flex-direction:column; } }
		/* Terms overview moves above the timeline; cards alternate around one connected path. */
		.pds-utility--terms .pds-u-terms-layout { display:block; }
		.pds-utility--terms .pds-u-terms-summary { position:relative; top:auto; display:grid; grid-template-columns:1fr; width:100%; padding:38px 44px; }
		.pds-utility--terms .pds-u-summary-kicker { grid-column:1; grid-row:auto; }
		.pds-utility--terms .pds-u-terms-summary h2 { grid-column:1; grid-row:auto; margin-bottom:14px; font-size:31px; }
		.pds-utility--terms .pds-u-terms-summary > p { grid-column:1; grid-row:auto; max-width:660px; margin:0; }
		.pds-utility--terms .pds-u-summary-list { grid-column:1; grid-row:auto; grid-template-columns:repeat(4,minmax(0,1fr)); gap:13px 20px; margin:28px 0 21px; }
		.pds-utility--terms .pds-u-summary-list li { grid-template-columns:27px minmax(0,1fr); }
		.pds-utility--terms .pds-u-summary-link { grid-column:1; grid-row:auto; }
		.pds-utility--terms .pds-u-policy { max-width:1060px; margin:64px auto 0; padding:0; gap:34px; }
		.pds-utility--terms .pds-u-policy::before { top:44px; bottom:44px; left:calc(50% - 1px); width:2px; background:linear-gradient(180deg,transparent,#5ab7ff 8%,var(--pds-blue) 48%,#7ac6ff 92%,transparent); box-shadow:0 0 16px rgba(37,135,246,.27); }
		.pds-utility--terms .pds-u-policy-card { width:calc(50% - 68px); min-height:178px; padding:29px 32px; }
		.pds-utility--terms .pds-u-policy-card:nth-child(odd) { justify-self:start; }
		.pds-utility--terms .pds-u-policy-card:nth-child(even) { justify-self:end; }
		.pds-utility--terms .pds-u-policy-card::before { top:36px; z-index:2; left:auto; width:24px; height:24px; }
		.pds-utility--terms .pds-u-policy-card:nth-child(odd)::before { right:-80px; }
		.pds-utility--terms .pds-u-policy-card:nth-child(even)::before { left:-80px; }
		.pds-utility--terms .pds-u-policy-card::after { content:""; position:absolute; z-index:1; top:47px; width:67px; height:1px; background:linear-gradient(90deg,rgba(36,137,246,.18),rgba(36,137,246,.75)); }
		.pds-utility--terms .pds-u-policy-card:nth-child(odd)::after { right:-68px; }
		.pds-utility--terms .pds-u-policy-card:nth-child(even)::after { left:-68px; transform:scaleX(-1); }
		.pds-utility--terms .pds-u-policy-card h2 { display:flex; align-items:center; gap:12px; min-height:48px; padding-right:52px; }
		.pds-utility--terms .pds-u-policy-card h2 span { position:static; flex:0 0 48px; width:48px; height:48px; border-radius:14px; }
		@media (max-width:850px) { .pds-utility--terms .pds-u-terms-summary { grid-template-columns:1fr; gap:0; padding:34px; } .pds-utility--terms .pds-u-summary-kicker,.pds-utility--terms .pds-u-terms-summary h2,.pds-utility--terms .pds-u-terms-summary > p,.pds-utility--terms .pds-u-summary-list,.pds-utility--terms .pds-u-summary-link { grid-column:1; grid-row:auto; } .pds-utility--terms .pds-u-summary-list { grid-template-columns:repeat(2,minmax(0,1fr)); margin:25px 0 20px; } .pds-utility--terms .pds-u-policy { margin-top:46px; gap:27px; } .pds-utility--terms .pds-u-policy::before { top:43px; bottom:43px; left:21px; } .pds-utility--terms .pds-u-policy-card,.pds-utility--terms .pds-u-policy-card:nth-child(odd),.pds-utility--terms .pds-u-policy-card:nth-child(even) { width:auto; margin-left:94px; justify-self:stretch; } .pds-utility--terms .pds-u-policy-card::before,.pds-utility--terms .pds-u-policy-card:nth-child(odd)::before,.pds-utility--terms .pds-u-policy-card:nth-child(even)::before { top:35px; right:auto; left:-85px; } .pds-utility--terms .pds-u-policy-card::after,.pds-utility--terms .pds-u-policy-card:nth-child(odd)::after,.pds-utility--terms .pds-u-policy-card:nth-child(even)::after { top:46px; right:auto; left:-74px; width:74px; transform:none; } }
		@media (max-width:560px) { .pds-utility--terms .pds-u-terms-summary { padding:28px 25px; } .pds-utility--terms .pds-u-terms-summary h2 { font-size:27px; } .pds-utility--terms .pds-u-summary-list { grid-template-columns:1fr; } .pds-utility--terms .pds-u-policy { margin-top:36px; gap:22px; } .pds-utility--terms .pds-u-policy::before { left:13px; } .pds-utility--terms .pds-u-policy-card,.pds-utility--terms .pds-u-policy-card:nth-child(odd),.pds-utility--terms .pds-u-policy-card:nth-child(even) { margin-left:52px; padding:24px 21px; } .pds-utility--terms .pds-u-policy-card::before,.pds-utility--terms .pds-u-policy-card:nth-child(odd)::before,.pds-utility--terms .pds-u-policy-card:nth-child(even)::before { top:32px; left:-63px; width:18px; height:18px; border-width:5px; } .pds-utility--terms .pds-u-policy-card::after,.pds-utility--terms .pds-u-policy-card:nth-child(odd)::after,.pds-utility--terms .pds-u-policy-card:nth-child(even)::after { top:41px; left:-52px; width:53px; } .pds-utility--terms .pds-u-policy-card h2 { gap:10px; padding-right:42px; } .pds-utility--terms .pds-u-policy-card h2 span { flex-basis:38px; width:38px; height:38px; border-radius:11px; font-size:11px; } }
		/* Privacy uses a separate teal data-flow layout instead of the Terms timeline. */
		.pds-utility--privacy .pds-u-privacy-layout { display:block; }
		.pds-utility--privacy .pds-u-privacy-summary { position:relative; top:auto; display:grid; grid-template-columns:1fr; width:100%; padding:38px 44px; }
		.pds-utility--privacy .pds-u-summary-kicker,.pds-utility--privacy .pds-u-privacy-summary h2,.pds-utility--privacy .pds-u-privacy-summary > p,.pds-utility--privacy .pds-u-summary-list,.pds-utility--privacy .pds-u-summary-link { grid-column:1; grid-row:auto; }
		.pds-utility--privacy .pds-u-privacy-summary h2 { margin-bottom:14px; font-size:31px; }
		.pds-utility--privacy .pds-u-privacy-summary > p { max-width:660px; margin:0; }
		.pds-utility--privacy .pds-u-summary-list { grid-template-columns:repeat(4,minmax(0,1fr)); gap:13px 20px; margin:28px 0 21px; }
		.pds-utility--privacy .pds-u-summary-list li { grid-template-columns:27px minmax(0,1fr); }
		.pds-utility--privacy .pds-u-policy { position:relative; display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); max-width:1120px; margin:64px auto 0; padding:26px 0; gap:24px; }
		.pds-utility--privacy .pds-u-policy::before { top:0; right:0; bottom:0; left:0; width:auto; background-image:radial-gradient(circle,rgba(35,177,185,.46) 1px,transparent 1.7px),linear-gradient(120deg,transparent 15%,rgba(37,153,211,.18) 15.2%,transparent 15.5%,transparent 48%,rgba(35,177,185,.23) 48.2%,transparent 48.5%); background-size:22px 22px,100% 100%; box-shadow:none; opacity:.52; }
		.pds-utility--privacy .pds-u-policy-card { z-index:1; width:auto; min-height:238px; padding:30px 29px; border-color:rgba(37,163,184,.42); background:linear-gradient(145deg,rgba(255,255,255,.97),rgba(241,253,253,.9)); box-shadow:0 16px 34px rgba(13,91,111,.1); }
		.pds-utility--privacy .pds-u-policy-card:nth-child(2) { margin-top:36px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(4) { grid-column:1 / span 2; min-height:205px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(5) { margin-top:36px; }
		.pds-utility--privacy .pds-u-policy-card::before { top:-12px; left:27px; width:20px; height:20px; border:6px solid #edfbfb; border-radius:50%; background:#16aab4; box-shadow:0 0 0 1px rgba(22,170,180,.28),0 8px 18px rgba(22,170,180,.23); }
		.pds-utility--privacy .pds-u-policy-card h2 { display:flex; align-items:center; gap:12px; min-height:48px; padding-right:52px; }
		.pds-utility--privacy .pds-u-policy-card h2 span { position:static; flex:0 0 48px; width:48px; height:48px; border-radius:14px; }
		.pds-utility--privacy .pds-u-policy-card:hover { transform:translateY(-8px); border-color:rgba(22,170,180,.7); box-shadow:0 25px 43px rgba(13,91,111,.17),0 0 24px rgba(46,191,193,.13); }
		.pds-u-motion .pds-utility--privacy .pds-u-policy::before { animation:pds-u-privacy-grid-flow 17s linear infinite; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card::before { animation:pds-u-privacy-flow-node 3.4s ease-in-out infinite; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(2)::before { animation-delay:.35s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(3)::before { animation-delay:.7s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(4)::before { animation-delay:1.05s; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy-card:nth-child(5)::before { animation-delay:1.4s; }
		@keyframes pds-u-privacy-grid-flow { from { background-position:0 0,0 0; } to { background-position:44px -44px,0 0; } }
		@keyframes pds-u-privacy-flow-node { 0%,100% { transform:scale(1); box-shadow:0 0 0 1px rgba(22,170,180,.28),0 8px 18px rgba(22,170,180,.23); } 50% { transform:scale(1.2); box-shadow:0 0 0 7px rgba(71,215,207,.14),0 10px 24px rgba(22,170,180,.35); } }
		@media (max-width:850px) { .pds-utility--privacy .pds-u-privacy-summary { padding:34px; } .pds-utility--privacy .pds-u-summary-list { grid-template-columns:repeat(2,minmax(0,1fr)); } .pds-utility--privacy .pds-u-policy { grid-template-columns:repeat(2,minmax(0,1fr)); margin-top:46px; } .pds-utility--privacy .pds-u-policy-card:nth-child(2),.pds-utility--privacy .pds-u-policy-card:nth-child(5) { margin-top:0; } .pds-utility--privacy .pds-u-policy-card:nth-child(4) { grid-column:auto; min-height:238px; } }
		@media (max-width:560px) { .pds-utility--privacy .pds-u-privacy-summary { padding:28px 25px; } .pds-utility--privacy .pds-u-privacy-summary h2 { font-size:27px; } .pds-utility--privacy .pds-u-summary-list { grid-template-columns:1fr; } .pds-utility--privacy .pds-u-policy { grid-template-columns:1fr; margin-top:36px; padding:16px 0; gap:21px; } .pds-utility--privacy .pds-u-policy-card,.pds-utility--privacy .pds-u-policy-card:nth-child(4) { min-height:0; padding:25px 22px; } .pds-utility--privacy .pds-u-policy-card h2 { gap:10px; padding-right:43px; } .pds-utility--privacy .pds-u-policy-card h2 span { flex-basis:38px; width:38px; height:38px; border-radius:11px; font-size:11px; } }
		/* Final Privacy flow: a compact single rail, intentionally different from the alternating Terms path. */
		.pds-utility--privacy .pds-u-policy { display:grid; grid-template-columns:1fr; max-width:950px; margin:62px auto 0; padding:0 0 0 112px; gap:22px; }
		.pds-utility--privacy .pds-u-policy::before { top:39px; right:auto; bottom:39px; left:27px; width:3px; background:linear-gradient(180deg,transparent,#55ded7 8%,#16aab4 48%,#8aece1 92%,transparent); background-size:100% 190%; box-shadow:0 0 18px rgba(22,170,180,.29); opacity:1; }
		.pds-utility--privacy .pds-u-policy-card,.pds-utility--privacy .pds-u-policy-card:nth-child(2),.pds-utility--privacy .pds-u-policy-card:nth-child(4),.pds-utility--privacy .pds-u-policy-card:nth-child(5) { grid-column:auto; width:100%; min-height:0; height:auto; margin:0; padding:29px 32px; }
		.pds-utility--privacy .pds-u-policy-card:nth-child(even) { margin-left:0; }
		.pds-utility--privacy .pds-u-policy-card::before { top:34px; right:auto; left:-97px; width:24px; height:24px; border:7px solid #edfbfb; background:#16aab4; }
		.pds-utility--privacy .pds-u-policy-card::after { content:""; position:absolute; top:45px; left:-85px; width:85px; height:1px; background:linear-gradient(90deg,rgba(22,170,180,.78),rgba(22,170,180,.16)); }
		.pds-utility--privacy .pds-u-policy-card h2 { min-height:48px; }
		.pds-u-motion .pds-utility--privacy .pds-u-policy::before { animation:pds-u-privacy-flow 5.5s ease-in-out infinite; }
		@media (max-width:850px) { .pds-utility--privacy .pds-u-policy { margin-top:46px; padding-left:96px; gap:21px; } .pds-utility--privacy .pds-u-policy::before { left:21px; } .pds-utility--privacy .pds-u-policy-card:nth-child(even) { margin-left:0; } .pds-utility--privacy .pds-u-policy-card::before { left:-87px; } .pds-utility--privacy .pds-u-policy-card::after { left:-75px; width:75px; } }
		@media (max-width:560px) { .pds-utility--privacy .pds-u-policy { margin-top:36px; padding-left:53px; gap:18px; } .pds-utility--privacy .pds-u-policy::before { left:13px; width:2px; } .pds-utility--privacy .pds-u-policy-card,.pds-utility--privacy .pds-u-policy-card:nth-child(2),.pds-utility--privacy .pds-u-policy-card:nth-child(4),.pds-utility--privacy .pds-u-policy-card:nth-child(5) { min-height:0; padding:25px 21px; } .pds-utility--privacy .pds-u-policy-card::before { top:32px; left:-63px; width:18px; height:18px; border-width:5px; } .pds-utility--privacy .pds-u-policy-card::after { top:41px; left:-52px; width:53px; } }
	</style>
</head>
<body <?php body_class( 'pds-utility-body' ); ?>>
<?php wp_body_open(); ?>
<div class="pds-utility pds-utility--<?php echo esc_attr( $pds_page ); ?>">
	<header class="pds-u-header"><div class="pds-wrap pds-u-nav pds-u-reveal"><a class="pds-u-brand" href="<?php echo esc_url( $pds_home_url ); ?>" aria-label="Progetti Digital Startup home"><img class="pds-u-header-logo" src="<?php echo esc_url( $pds_header_logo_url ); ?>" alt="Progetti Digital"></a><nav class="pds-u-links" aria-label="Primary navigation"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>">Process</a><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></nav><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Start a project</a></div></header>
	<main>
		<section class="pds-u-hero"><div class="pds-wrap pds-u-hero-content pds-u-reveal"><p class="pds-u-eyebrow"><?php echo esc_html( $pds_content['eyebrow'] ); ?></p><h1><?php if ( 'careers' === $pds_page ) : ?>Do work that<br>moves products&mdash;<br>and people&mdash;<br><span>forward.</span><?php else : ?><?php echo esc_html( $pds_content['title'] ); ?><?php endif; ?></h1><p><?php echo esc_html( $pds_content['intro'] ); ?></p></div></section>
		<section class="pds-u-main"><div class="pds-wrap">
			<?php if ( 'terms' === $pds_page ) : ?>
				<div class="pds-u-layout pds-u-terms-layout"><aside class="pds-u-aside pds-u-terms-summary pds-u-reveal"><p class="pds-u-summary-kicker">Terms at a glance</p><h2>Clear expectations. Better work.</h2><p>These five principles keep every project practical, transparent, and moving in the right direction.</p><ul class="pds-u-summary-list"><li><span>01</span>Scope and delivery stay clear.</li><li><span>02</span>Feedback keeps momentum high.</li><li><span>03</span>Work and information are protected.</li><li><span>04</span>Changes are agreed together.</li></ul><a class="pds-u-summary-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Discuss a project</a></aside><div class="pds-u-content pds-u-policy">
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>01</span>Working together</h2><p>Project scope, timelines, deliverables, and fees are confirmed in a written proposal or agreement before work begins. Any changes are discussed and agreed in writing so expectations stay clear for everyone.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>02</span>Client responsibilities</h2><p>Clients provide accurate project information, timely feedback, required approvals, and access to the systems needed to deliver the agreed work. Delays in these inputs may affect delivery dates.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>03</span>Intellectual property</h2><p>Once agreed fees are paid, ownership of the final project deliverables transfers as set out in the applicable proposal. Pre-existing tools, frameworks, and third-party materials remain subject to their original licences.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>04</span>Confidentiality & care</h2><p>Both parties should protect confidential information shared during a project. We use reasonable care in delivering services, while no digital system can be guaranteed to be completely uninterrupted or error-free.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>05</span>Updates to these terms</h2><p>We may update these terms as our services evolve. Continued use of this website after an update means the revised terms apply from their published date.</p></article>
				</div><aside class="pds-u-aside pds-u-reveal"><h3>Questions about terms?</h3><p>For a project-specific agreement or a clarification, contact our team before work begins.</p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Progetti Digital →</a></aside></div>
			<?php elseif ( 'privacy' === $pds_page ) : ?>
				<div class="pds-u-layout pds-u-privacy-layout"><aside class="pds-u-aside pds-u-privacy-summary pds-u-reveal"><p class="pds-u-summary-kicker">Privacy at a glance</p><h2>Your data. Your choices.</h2><p>We handle information with purpose, care, and clear communication at every stage.</p><ul class="pds-u-summary-list"><li><span>01</span>You choose what information to share.</li><li><span>02</span>We use it only for useful communication.</li><li><span>03</span>Access stays limited and protected.</li><li><span>04</span>You can request changes or deletion.</li></ul><a class="pds-u-summary-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Make a privacy request</a></aside><div class="pds-u-content pds-u-policy">
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>01</span>Information we collect</h2><p>When you contact us, we may collect details you choose to share, such as your name, email address, company name, and project requirements. Basic technical data may also be collected through website hosting and analytics tools.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>02</span>How we use it</h2><p>We use information to respond to enquiries, discuss potential work, deliver services, maintain our website, and improve how we communicate. We do not sell personal information.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>03</span>Storage & protection</h2><p>We use reasonable administrative and technical safeguards to protect information. Access is limited to people and service providers who need it for the purposes described here.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>04</span>Your choices</h2><p>You may ask to access, correct, or delete personal information we hold about you, subject to any legal or contractual requirements. You can also opt out of non-essential communications at any time.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>05</span>Policy updates</h2><p>We may update this policy to reflect changes in our practices or applicable requirements. The current version is published here with the latest update date.</p></article>
				</div><aside class="pds-u-aside pds-u-reveal"><h3>Your privacy matters</h3><p>To make a privacy request or ask how your information is handled, contact our team.</p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Make a privacy request →</a></aside></div>
			<?php elseif ( 'contact' === $pds_page ) : ?>
				<div class="pds-u-grid"><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">↗</div><h3>New product</h3><p>Have an idea, a prototype, or an early product you want to shape into a confident release?</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">⌘</div><h3>Existing software</h3><p>Need help improving a platform, automating a process, or untangling a difficult technical problem?</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">✦</div><h3>Partnership</h3><p>Looking for a flexible product and engineering team to support your next stage of growth?</p></article></div>
				<div class="pds-u-form-shell pds-u-reveal" id="contact-form"><h2>Share a little context</h2><p>We will use these details only to respond to your enquiry. Fields marked with * are required.</p>
					<?php if ( 'sent' === $pds_status ) : ?><p class="pds-u-notice pds-u-notice--success">Thanks—your message has been sent. We’ll be in touch soon.</p><?php elseif ( 'invalid' === $pds_status ) : ?><p class="pds-u-notice pds-u-notice--error">Please add your name, a valid email address, and a short message.</p><?php elseif ( 'error' === $pds_status ) : ?><p class="pds-u-notice pds-u-notice--error">Your message could not be sent just now. Please try again shortly.</p><?php endif; ?>
					<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"><input type="hidden" name="action" value="pds_contact"><?php wp_nonce_field( 'pds_contact_form', 'pds_contact_nonce' ); ?><div class="pds-u-honeypot" aria-hidden="true"><label>Website<input type="text" name="company_website" tabindex="-1" autocomplete="off"></label></div><div class="pds-u-form-grid"><div class="pds-u-field"><label for="pds-name">Name *</label><input id="pds-name" name="name" required></div><div class="pds-u-field"><label for="pds-email">Work email *</label><input id="pds-email" name="email" type="email" required></div><div class="pds-u-field pds-u-field--full"><label for="pds-company">Company</label><input id="pds-company" name="company"></div><div class="pds-u-field pds-u-field--full"><label for="pds-message">What are you looking to build? *</label><textarea id="pds-message" name="message" required></textarea></div></div><p style="margin:20px 0 0"><button class="pds-u-button pds-u-button--blue" type="submit">Send enquiry →</button></p></form>
				</div>
			<?php elseif ( 'services' === $pds_page ) : ?>
				<div class="pds-u-detail-lead pds-u-reveal"><h2>One focused product partner for every stage of the journey.</h2><p>From the first useful release to a mature platform, we combine product thinking, experience design, and engineering so your software keeps creating momentum.</p></div>
				<div class="pds-u-service-detail-grid">
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">01</span><div class="pds-u-detail-icon">&lt;/&gt;</div><h2>Custom Software</h2><p>Purpose-built platforms, internal tools, and SaaS products designed around the way your business actually works.</p></article>
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">02</span><div class="pds-u-detail-icon">&#9638;</div><h2>Web Applications</h2><p>Fast, intuitive web experiences that help customers act, teams collaborate, and businesses scale online.</p></article>
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">03</span><div class="pds-u-detail-icon">&#9741;</div><h2>Mobile Products</h2><p>Focused mobile apps and cross-platform experiences that keep your service close to your customers.</p></article>
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">04</span><div class="pds-u-detail-icon">&#10022;</div><h2>UI/UX Design</h2><p>Clear product journeys, useful interfaces, and flexible design systems built for people, not just screens.</p></article>
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">05</span><div class="pds-u-detail-icon">&#9881;</div><h2>Cloud &amp; Automation</h2><p>Connected workflows, integrations, and cloud-ready foundations that remove manual work and reduce friction.</p></article>
					<article class="pds-u-service-detail pds-u-reveal"><span class="pds-u-service-number">06</span><div class="pds-u-detail-icon">&#9678;</div><h2>Product Support</h2><p>Iterative improvements, performance care, and a practical roadmap after launch to keep moving forward.</p></article>
				</div>
				<div class="pds-u-detail-cta pds-u-reveal"><div><h2>Not sure where to start?</h2><p>Bring us the opportunity, challenge, or early idea. We will help turn it into a focused next step.</p></div><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Talk through your idea &rarr;</a></div>
			<?php elseif ( 'process' === $pds_page ) : ?>
				<div class="pds-u-detail-lead pds-u-reveal"><h2>Momentum comes from a clear, shared way of working.</h2><p>Our process gives your team visibility from the first conversation through launch, while leaving room to learn from what the product needs.</p></div>
				<div class="pds-u-process-roadmap">
					<article class="pds-u-process-step pds-u-reveal"><h2>Discover</h2><p>We understand your customers, goals, constraints, and the opportunity worth solving before we recommend a direction.</p></article>
					<article class="pds-u-process-step pds-u-reveal"><h2>Define</h2><p>We shape the roadmap, user flows, and technical plan around the highest-value release, not a list of assumptions.</p></article>
					<article class="pds-u-process-step pds-u-reveal"><h2>Build</h2><p>We design, develop, test, and review in practical cycles with shared visibility and steady feedback.</p></article>
					<article class="pds-u-process-step pds-u-reveal"><h2>Launch &amp; Grow</h2><p>We release with confidence, learn from real use, and improve the product with purpose after it is live.</p></article>
				</div>
				<div class="pds-u-process-note pds-u-reveal"><div><h2>Visible progress at every step.</h2><p>You will always know what is being decided, built, and learned. That is how product work stays focused without becoming rigid.</p></div><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Start a project &rarr;</a></div>
			<?php elseif ( 'about' === $pds_page ) : ?>
				<div class="pds-u-about-split"><div class="pds-u-about-copy pds-u-reveal"><h2>We turn complex ambition into <span>clear software.</span></h2><p>Progetti Digital Startup is a product-minded team for businesses that need more than another development vendor. We work alongside you to make the important decisions visible and the product useful.</p><p>Our work brings strategy, design, and engineering into one practical rhythm, so the next release is clearer, stronger, and ready for what comes after it.</p><a class="pds-u-button pds-u-button--blue" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Work with us &rarr;</a></div><aside class="pds-u-about-panel pds-u-reveal"><p>What guides us</p><h2>Useful work. Honest partnerships.</h2><ul><li>Outcomes before outputs.</li><li>Clear communication over hidden complexity.</li><li>Thoughtful craft in every release.</li><li>Momentum that your team can sustain.</li></ul></aside></div>
				<div class="pds-u-about-values"><article class="pds-u-about-value pds-u-reveal"><span>&#9673;</span><h2>Think in outcomes</h2><p>We stay close to the problem, the people using the product, and the result your organisation needs.</p></article><article class="pds-u-about-value pds-u-reveal"><span>&#8599;</span><h2>Build with clarity</h2><p>We make the trade-offs, progress, and next decisions visible so everyone can move with confidence.</p></article><article class="pds-u-about-value pds-u-reveal"><span>&#10022;</span><h2>Keep learning</h2><p>We treat every release as a chance to learn, improve, and create more value with less friction.</p></article></div>
			<?php elseif ( 'blog' === $pds_page ) : ?>
				<?php $pds_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 9, 'post__not_in' => array( 1 ) ) ); ?>
				<?php if ( $pds_posts->have_posts() ) : ?><div class="pds-u-post-grid"><?php while ( $pds_posts->have_posts() ) : $pds_posts->the_post(); ?><article class="pds-u-post pds-u-reveal"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p><a class="pds-u-read" href="<?php the_permalink(); ?>">Read article →</a></article><?php endwhile; ?></div><?php wp_reset_postdata(); ?><?php else : ?><div class="pds-u-post-grid"><article class="pds-u-post pds-u-reveal"><time>Product Strategy</time><h2>How to scope an MVP without slowing down momentum.</h2><p>A focused MVP solves one meaningful problem well. Learn how to prioritise the first release around what your users actually need.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Talk through your idea →</a></article><article class="pds-u-post pds-u-reveal"><time>Product Planning</time><h2>Should you build a web app, a mobile app, or both?</h2><p>The right first platform depends on your audience, core workflow, and speed-to-market goals—not simply the latest trend.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan your product →</a></article><article class="pds-u-post pds-u-reveal"><time>Operations</time><h2>Five signs your team needs a custom internal tool.</h2><p>Repeated spreadsheets, manual handoffs, and disconnected systems are signals that a tailored workflow could unlock more time.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Improve your workflow →</a></article></div><?php endif; ?>
			<?php elseif ( 'careers' === $pds_page ) : ?>
				<div class="pds-u-grid pds-u-careers-grid">
					<article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="24" cy="24" r="15"></circle><circle cx="24" cy="24" r="8"></circle><circle cx="24" cy="24" r="2.5"></circle><path d="M31 17l11-11"></path><path d="M36 6h6v6"></path></svg></div><h3>Own the outcome</h3><p>We value curiosity, clear thinking, and people who care about the product beyond their individual task.</p></article>
					<article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M7 38h34"></path><path d="M11 33l9-10 7 6 12-15"></path><path d="M32 14h7v7"></path><path d="M12 38V27"></path><path d="M21 38V31"></path><path d="M30 38V25"></path></svg></div><h3>Learn in the work</h3><p>Every project brings a fresh problem to understand, a better way to collaborate, and room to grow your craft.</p></article>
					<article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="17" cy="20" r="6"></circle><circle cx="32" cy="20" r="6"></circle><path d="M7 39c1-7 5-11 10-11s9 4 10 11"></path><path d="M23 39c1-7 5-11 10-11s9 4 10 11"></path><path d="M24 8c3-5 9-1 5 4-2 2-5 4-5 4s-3-2-5-4c-4-5 2-9 5-4z"></path></svg></div><h3>Build with respect</h3><p>We communicate directly, share credit, and make space for the thoughtful work that good software needs.</p></article>
				</div>
				<div class="pds-u-career-callout pds-u-careers-callout pds-u-reveal"><h2>Don&rsquo;t see the right role today?</h2><p>We are always interested in meeting people who care deeply about products, design, and engineering. Send us a short note about what you do best.</p><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Introduce yourself &rarr;</a></div>
				<div class="pds-u-grid"><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">◎</div><h3>Own the outcome</h3><p>We value curiosity, clear thinking, and people who care about the product beyond their individual task.</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">⌁</div><h3>Learn in the work</h3><p>Every project brings a fresh problem to understand, a better way to collaborate, and room to grow your craft.</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">↗</div><h3>Build with respect</h3><p>We communicate directly, share credit, and make space for the thoughtful work that good software needs.</p></article></div><div class="pds-u-career-callout pds-u-reveal"><h2>Don’t see the right role today?</h2><p>We are always interested in meeting people who care deeply about products, design, and engineering. Send us a short note about what you do best.</p><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Introduce yourself →</a></div>
			<?php endif; ?>
		</div></section>
	</main>
	<?php if ( in_array( $pds_page, array( 'terms', 'privacy', 'contact', 'blog', 'careers', 'services', 'process', 'about' ), true ) ) : ?>
		<footer class="pds-u-footer pds-u-footer--showcase"><div class="pds-wrap pds-u-footer-showcase-inner"><div class="pds-u-footer-grid"><div class="pds-u-footer-brand"><img src="<?php echo esc_url( $pds_header_logo_url ); ?>" alt="Progetti Digital"><p>Software built for forward movement.</p></div><div class="pds-u-footer-column"><h2>Company</h2><a href="<?php echo esc_url( $pds_home_url ); ?>#about">About</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div><div class="pds-u-footer-column"><h2>Services</h2><a href="<?php echo esc_url( $pds_home_url ); ?>#services">Custom Software</a><a href="<?php echo esc_url( $pds_home_url ); ?>#services">Web Applications</a><a href="<?php echo esc_url( $pds_home_url ); ?>#services">Mobile Products</a><a href="<?php echo esc_url( $pds_home_url ); ?>#services">UI/UX Design</a><a href="<?php echo esc_url( $pds_home_url ); ?>#services">Cloud &amp; Automation</a></div><div class="pds-u-footer-column"><h2>Resources</h2><a href="<?php echo esc_url( $pds_home_url ); ?>#process">Process</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Case Studies</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></div><div class="pds-u-footer-column"><h2>Let&rsquo;s connect</h2><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Start a project</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">hello@progettidigital.com</a></div></div><div class="pds-u-footer-bottom"><span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Progetti Digital Startup. All rights reserved.</span><nav aria-label="Footer navigation"><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms</a><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></nav></div></div></footer>
	<?php endif; ?>
	<footer class="pds-u-footer"><div class="pds-wrap pds-u-footer-inner"><span><strong>Progetti Digital Startup</strong> — software built for forward movement.</span><span><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms</a> · <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a> · © <?php echo esc_html( gmdate( 'Y' ) ); ?></span></div></footer>
</div>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded',function(){
	if(!document.documentElement.classList.contains('pds-u-motion')){return;}
	var items=document.querySelectorAll('.pds-u-reveal');
	if(!('IntersectionObserver' in window)){items.forEach(function(item){item.classList.add('pds-u-visible');});return;}
	var observer=new IntersectionObserver(function(entries){entries.forEach(function(entry){if(entry.isIntersecting){entry.target.classList.add('pds-u-visible');observer.unobserve(entry.target);}});},{threshold:.12,rootMargin:'0px 0px -35px'});
	items.forEach(function(item){observer.observe(item);});
});
</script>
</body>
</html>
