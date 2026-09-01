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
		body.pds-body { margin:0; background:var(--pds-paper); color:var(--pds-ink); font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif; }
		.pds-site, .pds-site * { box-sizing:border-box; }
		.pds-site { overflow:hidden; }
		.pds-shell { width:min(1160px,calc(100% - 40px)); margin:0 auto; }
		.pds-header { position:relative; z-index:3; background:var(--pds-navy); color:#fff; }
		.pds-nav { min-height:84px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
		.pds-brand { display:flex; align-items:center; gap:11px; color:#fff; font-weight:800; font-size:19px; letter-spacing:-.03em; text-decoration:none; white-space:nowrap; }
		.pds-brand-mark { display:grid; place-items:center; width:33px; height:33px; border-radius:10px; background:linear-gradient(135deg,var(--pds-sky),var(--pds-blue)); color:#fff; box-shadow:0 8px 20px rgba(49,169,255,.28); }
		.pds-brand-mark::before { content:"↗"; font-size:22px; line-height:1; transform:translateY(-1px); }
		.pds-nav-links { display:flex; align-items:center; gap:28px; }
		.pds-nav-links a { color:#dfeaff; text-decoration:none; font-size:14px; font-weight:650; }
		.pds-nav-links a:hover { color:#fff; }
		.pds-button { display:inline-flex; align-items:center; justify-content:center; gap:9px; border:0; border-radius:999px; padding:14px 22px; background:var(--pds-gold); color:#13223f; font-size:14px; font-weight:800; text-decoration:none; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-button:hover { color:#13223f; transform:translateY(-2px); box-shadow:0 12px 22px rgba(255,184,46,.25); }
		.pds-button--light { background:#fff; color:var(--pds-navy); }
		.pds-button--ghost { border:1px solid rgba(255,255,255,.42); background:transparent; color:#fff; }
		.pds-hero { position:relative; background:radial-gradient(circle at 82% 24%,#1879ec 0,#0d55bc 28%,var(--pds-navy) 70%); color:#fff; padding:86px 0 94px; }
		.pds-hero::before { content:""; position:absolute; width:600px; height:600px; border:1px solid rgba(255,255,255,.12); border-radius:50%; right:-235px; top:-355px; }
		.pds-hero::after { content:""; position:absolute; width:430px; height:430px; border:58px solid rgba(49,169,255,.19); border-radius:50%; left:-210px; bottom:-270px; }
		.pds-hero-grid { position:relative; z-index:1; display:grid; grid-template-columns:1.05fr .95fr; align-items:center; gap:68px; }
		.pds-eyebrow { display:flex; align-items:center; gap:10px; margin:0 0 19px; color:#b8d5ff; font-size:12px; font-weight:800; letter-spacing:.15em; text-transform:uppercase; }
		.pds-eyebrow::before { content:""; width:10px; height:10px; border-radius:50%; background:var(--pds-gold); box-shadow:0 0 0 6px rgba(255,184,46,.12); }
		.pds-hero h1 { max-width:650px; margin:0; font-size:clamp(42px,5vw,68px); line-height:1.04; letter-spacing:-.055em; color:#fff; }
		.pds-hero p { max-width:580px; margin:25px 0 32px; color:#d5e6ff; font-size:18px; line-height:1.65; }
		.pds-actions { display:flex; flex-wrap:wrap; gap:13px; }
		.pds-logo-card { position:relative; padding:18px; border-radius:28px; background:rgba(255,255,255,.96); box-shadow:0 28px 70px rgba(0,9,35,.32); transform:rotate(2deg); }
		.pds-logo-card::after { content:""; position:absolute; inset:13px; border:1px solid rgba(20,110,232,.15); border-radius:20px; pointer-events:none; }
		.pds-logo-card img { display:block; width:100%; height:auto; border-radius:17px; }
		.pds-logo-caption { position:absolute; left:-31px; bottom:32px; padding:12px 16px; border-radius:12px; background:var(--pds-gold); color:var(--pds-navy); font-size:12px; font-weight:850; box-shadow:0 14px 30px rgba(0,0,0,.2); transform:rotate(-4deg); }
		.pds-section { padding:98px 0; }
		.pds-section--white { background:#fff; }
		.pds-section-heading { max-width:670px; margin-bottom:44px; }
		.pds-section-heading h2 { margin:0 0 15px; color:var(--pds-ink); font-size:clamp(32px,4vw,47px); line-height:1.1; letter-spacing:-.045em; }
		.pds-section-heading p { margin:0; color:var(--pds-muted); font-size:17px; line-height:1.7; }
		.pds-service-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
		.pds-service { min-height:245px; padding:29px; border:1px solid #deebfa; border-radius:20px; background:#fff; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-service:hover { transform:translateY(-5px); box-shadow:0 20px 36px rgba(21,68,129,.1); }
		.pds-service-icon { display:grid; place-items:center; width:46px; height:46px; margin-bottom:25px; border-radius:13px; background:#e8f3ff; color:var(--pds-blue); font-size:22px; font-weight:900; }
		.pds-service h3 { margin:0 0 11px; font-size:21px; letter-spacing:-.025em; color:var(--pds-ink); }
		.pds-service p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.65; }
		.pds-band { background:var(--pds-navy); color:#fff; }
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
		.pds-contact { padding:76px 0; background:linear-gradient(120deg,#0c4fae,var(--pds-blue)); color:#fff; }
		.pds-contact-grid { display:flex; align-items:center; justify-content:space-between; gap:28px; }
		.pds-contact h2 { max-width:650px; margin:0 0 11px; color:#fff; font-size:clamp(32px,4vw,48px); letter-spacing:-.05em; line-height:1.08; }
		.pds-contact p { margin:0; color:#dcebff; font-size:16px; line-height:1.6; }
		.pds-footer { padding:29px 0; background:#031126; color:#a9beda; font-size:13px; }
		.pds-footer-content { display:flex; align-items:center; justify-content:space-between; gap:15px; }
		.pds-footer strong { color:#fff; }
		.pds-footer a { color:#d9e9ff; text-decoration:none; }
		.pds-footer a:hover { color:#fff; }
		.pds-motion .pds-reveal { opacity:0; transform:translateY(30px); transition:opacity .72s cubic-bezier(.16,1,.3,1),transform .72s cubic-bezier(.16,1,.3,1); transition-delay:var(--pds-delay,0ms); }
		.pds-motion .pds-reveal.pds-visible { opacity:1; transform:translateY(0); }
		.pds-motion .pds-logo-card.pds-reveal { transform:translateY(34px) rotate(2deg); }
		.pds-motion .pds-logo-card.pds-reveal.pds-visible { transform:translateY(0) rotate(2deg); animation:pds-logo-float 5.5s 1s ease-in-out infinite; }
		.pds-motion .pds-service:nth-child(2),.pds-motion .pds-step:nth-child(2) { --pds-delay:80ms; }
		.pds-motion .pds-service:nth-child(3),.pds-motion .pds-step:nth-child(3) { --pds-delay:160ms; }
		.pds-motion .pds-service:nth-child(4),.pds-motion .pds-step:nth-child(4) { --pds-delay:240ms; }
		.pds-motion .pds-service:nth-child(5) { --pds-delay:320ms; }
		.pds-motion .pds-service:nth-child(6) { --pds-delay:400ms; }
		.pds-motion .pds-hero::before { animation:pds-orbit 14s ease-in-out infinite; }
		.pds-motion .pds-hero::after { animation:pds-drift 10s ease-in-out infinite; }
		.pds-motion .pds-brand-mark { animation:pds-mark-glow 2.8s ease-in-out infinite; }
		.pds-motion .pds-typewriter.is-typing::after { content:"|"; display:inline-block; margin-left:7px; color:var(--pds-gold); font-weight:400; animation:pds-cursor-blink .8s steps(1,end) infinite; }
		@keyframes pds-logo-float { 0%,100% { transform:translateY(0) rotate(2deg); } 50% { transform:translateY(-12px) rotate(1deg); } }
		@keyframes pds-orbit { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(-16px,22px) scale(1.05); } }
		@keyframes pds-drift { 0%,100% { transform:translate(0,0) rotate(0); } 50% { transform:translate(26px,-18px) rotate(8deg); } }
		@keyframes pds-mark-glow { 0%,100% { box-shadow:0 8px 20px rgba(49,169,255,.28); } 50% { box-shadow:0 8px 30px rgba(49,169,255,.62); } }
		@keyframes pds-cursor-blink { 50% { opacity:0; } }
		@media (prefers-reduced-motion:reduce) { *,*::before,*::after { scroll-behavior:auto!important; animation-duration:.01ms!important; animation-iteration-count:1!important; transition-duration:.01ms!important; } }
		@media (max-width:900px) { .pds-nav-links { display:none; } .pds-hero-grid,.pds-band-grid { grid-template-columns:1fr; gap:45px; } .pds-logo-card { max-width:480px; margin:0 auto; } .pds-service-grid { grid-template-columns:repeat(2,1fr); } .pds-process { grid-template-columns:repeat(2,1fr); row-gap:36px; } .pds-step:nth-child(2)::after { display:none; } }
		@media (max-width:590px) { .pds-shell { width:min(100% - 30px,1160px); } .pds-nav { min-height:73px; } .pds-nav .pds-button { padding:11px 15px; font-size:12px; } .pds-brand { font-size:16px; } .pds-hero { padding:64px 0 72px; } .pds-hero h1 { font-size:42px; } .pds-hero p { font-size:16px; } .pds-section { padding:70px 0; } .pds-service-grid,.pds-process { grid-template-columns:1fr; } .pds-step { padding-right:0; } .pds-step::after { display:none; } .pds-contact-grid,.pds-footer-content { align-items:flex-start; flex-direction:column; } .pds-logo-caption { left:8px; bottom:-18px; } }
	</style>
</head>
<body <?php body_class( 'pds-body' ); ?>>
<?php wp_body_open(); ?>
<div class="pds-site">
	<header class="pds-header">
		<div class="pds-shell pds-nav pds-reveal">
			<a class="pds-brand" href="#top" aria-label="Progetti Digital Startup home"><span class="pds-brand-mark" aria-hidden="true"></span>Progetti Digital</a>
			<nav class="pds-nav-links" aria-label="Primary navigation">
				<a href="#services">Services</a><a href="#process">Process</a><a href="#about">About</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a><a href="#contact">Contact</a>
			</nav>
			<a class="pds-button" href="#contact">Start a project <span aria-hidden="true">→</span></a>
		</div>
	</header>

	<main id="top">
		<section class="pds-hero">
			<div class="pds-shell pds-hero-grid">
				<div class="pds-reveal">
					<p class="pds-eyebrow">Digital product studio</p>
					<h1 aria-label="Software that turns bold ideas into real momentum."><span class="pds-typewriter" data-pds-typewriter="Software that turns bold ideas into real momentum." aria-hidden="true">Software that turns bold ideas into real momentum.</span></h1>
					<p>Progetti Digital Startup designs and builds reliable web, mobile, and custom software products for teams ready to grow.</p>
					<div class="pds-actions"><a class="pds-button" href="#contact">Build with us <span aria-hidden="true">→</span></a><a class="pds-button pds-button--ghost" href="#services">Explore services</a></div>
				</div>
				<div class="pds-logo-card pds-reveal" style="--pds-delay:140ms"><img src="<?php echo esc_url( $pds_logo_url ); ?>" alt="Progetti Digital Startup logo" width="1456" height="1088"><span class="pds-logo-caption">Imagine. Build. Grow.</span></div>
			</div>
		</section>

		<section class="pds-section pds-section--white" id="services">
			<div class="pds-shell">
				<div class="pds-section-heading pds-reveal"><p class="pds-eyebrow" style="color:#146ee8">What we do</p><h2>One product partner from first sketch to confident launch.</h2><p>We bring strategy, experience design, and engineering together so your product is useful, scalable, and ready for the next stage.</p></div>
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
				<div class="pds-reveal"><p class="pds-eyebrow">Why Progetti Digital</p><h2>Startup speed. Engineering discipline.</h2><p>Great software starts with listening. We work alongside your team, make the hard decisions visible, and deliver in small, valuable steps.</p></div>
				<ul class="pds-list pds-reveal" style="--pds-delay:140ms"><li>A focused team that speaks in outcomes, not buzzwords.</li><li>Transparent delivery from scope and architecture through launch.</li><li>Flexible engagement for a new idea, a product rebuild, or an ambitious next release.</li></ul>
			</div>
		</section>

		<section class="pds-section" id="process">
			<div class="pds-shell">
				<div class="pds-section-heading pds-reveal"><p class="pds-eyebrow" style="color:#146ee8">How we work</p><h2>A clear path from opportunity to working software.</h2></div>
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

	<footer class="pds-footer"><div class="pds-shell pds-footer-content"><span><strong>Progetti Digital Startup</strong> — software built for forward movement.</span><span><a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms</a> · <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy</a> · © <?php echo esc_html( gmdate( 'Y' ) ); ?> Progetti Digital Startup</span></div></footer>
</div>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded',function(){
	if(!document.documentElement.classList.contains('pds-motion')){return;}
	var typewriter=document.querySelector('[data-pds-typewriter]');
	if(typewriter){
		var text=typewriter.getAttribute('data-pds-typewriter');
		var position=0;
		typewriter.textContent='';
		typewriter.classList.add('is-typing');
		window.setTimeout(function writeNextCharacter(){
			typewriter.textContent+=text.charAt(position++);
			if(position<text.length){window.setTimeout(writeNextCharacter,text.charAt(position-1)===' '?85:42);}
			else{window.setTimeout(function(){typewriter.classList.remove('is-typing');},1200);}
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
