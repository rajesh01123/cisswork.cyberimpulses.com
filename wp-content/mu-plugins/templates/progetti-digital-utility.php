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
	'blog'    => array( 'eyebrow' => 'Progetti Insights', 'title' => 'Useful thinking for teams building what is next.', 'intro' => 'Practical notes on digital products, software delivery, design, and sustainable growth.' ),
	'careers' => array( 'eyebrow' => 'Careers', 'title' => 'Do work that moves products—and people—forward.', 'intro' => 'We are building a thoughtful team of product-minded designers, developers, and problem solvers.' ),
);
$pds_content  = $pds_pages[ $pds_page ];
$pds_status   = isset( $_GET['pds_contact'] ) ? sanitize_key( wp_unslash( $_GET['pds_contact'] ) ) : '';
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
		body.pds-utility-body { margin:0; background:var(--pds-paper); color:var(--pds-ink); font-family:Inter,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif; }
		.pds-utility, .pds-utility * { box-sizing:border-box; }
		.pds-wrap { width:min(1120px,calc(100% - 40px)); margin:0 auto; }
		.pds-u-header { background:var(--pds-navy); color:#fff; }
		.pds-u-nav { min-height:82px; display:flex; align-items:center; justify-content:space-between; gap:24px; }
		.pds-u-brand { display:flex; align-items:center; gap:10px; color:#fff; font-weight:850; font-size:19px; letter-spacing:-.03em; text-decoration:none; white-space:nowrap; }
		.pds-u-brand span { display:grid; place-items:center; width:32px; height:32px; border-radius:10px; background:linear-gradient(135deg,var(--pds-sky),var(--pds-blue)); box-shadow:0 8px 20px rgba(49,169,255,.28); }
		.pds-u-brand span::after { content:"↗"; font-size:22px; line-height:1; }
		.pds-u-links { display:flex; align-items:center; gap:24px; }
		.pds-u-links a { color:#dfeaff; text-decoration:none; font-size:14px; font-weight:700; }
		.pds-u-links a:hover { color:#fff; }
		.pds-u-button { display:inline-flex; align-items:center; justify-content:center; border:0; border-radius:999px; padding:13px 20px; background:var(--pds-gold); color:#13223f; font-size:14px; font-weight:850; text-decoration:none; cursor:pointer; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-u-button:hover { color:#13223f; transform:translateY(-2px); box-shadow:0 12px 24px rgba(255,184,46,.28); }
		.pds-u-button--blue { background:var(--pds-blue); color:#fff; }
		.pds-u-button--blue:hover { color:#fff; box-shadow:0 13px 26px rgba(20,110,232,.25); }
		.pds-u-hero { position:relative; overflow:hidden; padding:82px 0 88px; background:linear-gradient(125deg,#051630 0%,#0c4fab 66%,#1677ed 100%); color:#fff; }
		.pds-u-hero::before { content:""; position:absolute; width:520px; height:520px; right:-210px; top:-350px; border:58px solid rgba(255,255,255,.1); border-radius:50%; }
		.pds-u-hero::after { content:""; position:absolute; width:250px; height:250px; left:8%; bottom:-165px; border-radius:50%; background:radial-gradient(circle,rgba(255,184,46,.28) 0 3px,transparent 4px); background-size:26px 26px; opacity:.8; }
		.pds-u-hero-content { position:relative; z-index:1; max-width:760px; }
		.pds-u-eyebrow { display:flex; align-items:center; gap:10px; margin:0 0 18px; color:#bdd9ff; font-size:12px; font-weight:850; letter-spacing:.15em; text-transform:uppercase; }
		.pds-u-eyebrow::before { content:""; width:9px; height:9px; border-radius:50%; background:var(--pds-gold); }
		.pds-u-hero h1 { margin:0; color:#fff; font-size:clamp(40px,5.5vw,66px); line-height:1.05; letter-spacing:-.055em; }
		.pds-u-hero p:not(.pds-u-eyebrow) { max-width:665px; margin:23px 0 0; color:#d8e8ff; font-size:18px; line-height:1.65; }
		.pds-u-main { padding:84px 0 94px; }
		.pds-u-layout { display:grid; grid-template-columns:minmax(0,1fr) 286px; gap:64px; align-items:start; }
		.pds-u-content h2 { margin:0 0 14px; color:var(--pds-ink); font-size:28px; letter-spacing:-.035em; }
		.pds-u-content h3 { margin:32px 0 10px; color:var(--pds-ink); font-size:19px; }
		.pds-u-content p,.pds-u-content li { color:var(--pds-muted); font-size:16px; line-height:1.75; }
		.pds-u-content p { margin:0 0 17px; }
		.pds-u-content ul { margin:0; padding-left:21px; }
		.pds-u-policy { display:grid; gap:17px; }
		.pds-u-policy-card { padding:27px 29px; border:1px solid var(--pds-line); border-radius:18px; background:#fff; box-shadow:0 12px 30px rgba(19,66,124,.04); }
		.pds-u-policy-card h2 { display:flex; align-items:center; gap:12px; }
		.pds-u-policy-card h2 span { display:grid; place-items:center; width:31px; height:31px; border-radius:9px; background:#e8f3ff; color:var(--pds-blue); font-size:13px; }
		.pds-u-aside { position:sticky; top:28px; padding:25px; border-radius:18px; background:#eaf4ff; }
		.pds-u-aside h3 { margin:0 0 10px; font-size:19px; }
		.pds-u-aside p { margin:0 0 19px; color:var(--pds-muted); font-size:14px; line-height:1.65; }
		.pds-u-aside a:not(.pds-u-button) { color:var(--pds-blue); font-weight:800; text-decoration:none; }
		.pds-u-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; margin-bottom:54px; }
		.pds-u-card { padding:27px; border:1px solid var(--pds-line); border-radius:18px; background:#fff; }
		.pds-u-card-icon { display:grid; place-items:center; width:45px; height:45px; margin-bottom:21px; border-radius:13px; background:#e8f3ff; color:var(--pds-blue); font-size:22px; font-weight:900; }
		.pds-u-card h3 { margin:0 0 10px; font-size:20px; letter-spacing:-.025em; }
		.pds-u-card p { margin:0; color:var(--pds-muted); font-size:15px; line-height:1.65; }
		.pds-u-form-shell { padding:33px; border:1px solid var(--pds-line); border-radius:21px; background:#fff; box-shadow:0 18px 46px rgba(19,66,124,.07); }
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
		.pds-u-post { display:flex; flex-direction:column; min-height:270px; padding:28px; border:1px solid var(--pds-line); border-radius:18px; background:#fff; transition:transform .2s ease,box-shadow .2s ease; }
		.pds-u-post:hover { transform:translateY(-5px); box-shadow:0 18px 36px rgba(19,66,124,.09); }
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
		.pds-u-motion .pds-u-reveal { opacity:0; transform:translateY(27px); transition:opacity .68s cubic-bezier(.16,1,.3,1),transform .68s cubic-bezier(.16,1,.3,1); transition-delay:var(--pds-delay,0ms); }
		.pds-u-motion .pds-u-reveal.pds-u-visible { opacity:1; transform:translateY(0); }
		.pds-u-motion .pds-u-card:nth-child(2),.pds-u-motion .pds-u-post:nth-child(2) { --pds-delay:90ms; }
		.pds-u-motion .pds-u-card:nth-child(3),.pds-u-motion .pds-u-post:nth-child(3) { --pds-delay:180ms; }
		.pds-u-motion .pds-u-hero::before { animation:pds-u-orbit 12s ease-in-out infinite; }
		@keyframes pds-u-orbit { 0%,100% { transform:translate(0,0) scale(1); } 50% { transform:translate(-18px,19px) scale(1.05); } }
		@media (prefers-reduced-motion:reduce) { *,*::before,*::after { scroll-behavior:auto!important; animation-duration:.01ms!important; animation-iteration-count:1!important; transition-duration:.01ms!important; } }
		@media (max-width:850px) { .pds-u-links { display:none; } .pds-u-layout { grid-template-columns:1fr; gap:32px; } .pds-u-aside { position:static; } .pds-u-grid,.pds-u-post-grid { grid-template-columns:repeat(2,1fr); } }
		@media (max-width:560px) { .pds-wrap { width:min(100% - 30px,1120px); } .pds-u-nav { min-height:73px; } .pds-u-brand { font-size:16px; } .pds-u-nav .pds-u-button { padding:11px 14px; font-size:12px; } .pds-u-hero { padding:64px 0 70px; } .pds-u-hero h1 { font-size:40px; } .pds-u-hero p:not(.pds-u-eyebrow) { font-size:16px; } .pds-u-main { padding:64px 0 70px; } .pds-u-grid,.pds-u-post-grid,.pds-u-form-grid { grid-template-columns:1fr; } .pds-u-field--full { grid-column:auto; } .pds-u-form-shell,.pds-u-policy-card { padding:24px; } .pds-u-footer-inner { align-items:flex-start; flex-direction:column; } }
	</style>
</head>
<body <?php body_class( 'pds-utility-body' ); ?>>
<?php wp_body_open(); ?>
<div class="pds-utility">
	<header class="pds-u-header"><div class="pds-wrap pds-u-nav pds-u-reveal"><a class="pds-u-brand" href="<?php echo esc_url( $pds_home_url ); ?>"><span aria-hidden="true"></span>Progetti Digital</a><nav class="pds-u-links" aria-label="Primary navigation"><a href="<?php echo esc_url( $pds_home_url ); ?>#services">Services</a><a href="<?php echo esc_url( $pds_home_url ); ?>#process">Process</a><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><a href="<?php echo esc_url( home_url( '/careers/' ) ); ?>">Careers</a></nav><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Start a project</a></div></header>
	<main>
		<section class="pds-u-hero"><div class="pds-wrap pds-u-hero-content pds-u-reveal"><p class="pds-u-eyebrow"><?php echo esc_html( $pds_content['eyebrow'] ); ?></p><h1><?php echo esc_html( $pds_content['title'] ); ?></h1><p><?php echo esc_html( $pds_content['intro'] ); ?></p></div></section>
		<section class="pds-u-main"><div class="pds-wrap">
			<?php if ( 'terms' === $pds_page ) : ?>
				<div class="pds-u-layout"><div class="pds-u-content pds-u-policy">
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>01</span>Working together</h2><p>Project scope, timelines, deliverables, and fees are confirmed in a written proposal or agreement before work begins. Any changes are discussed and agreed in writing so expectations stay clear for everyone.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>02</span>Client responsibilities</h2><p>Clients provide accurate project information, timely feedback, required approvals, and access to the systems needed to deliver the agreed work. Delays in these inputs may affect delivery dates.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>03</span>Intellectual property</h2><p>Once agreed fees are paid, ownership of the final project deliverables transfers as set out in the applicable proposal. Pre-existing tools, frameworks, and third-party materials remain subject to their original licences.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>04</span>Confidentiality & care</h2><p>Both parties should protect confidential information shared during a project. We use reasonable care in delivering services, while no digital system can be guaranteed to be completely uninterrupted or error-free.</p></article>
					<article class="pds-u-policy-card pds-u-reveal"><h2><span>05</span>Updates to these terms</h2><p>We may update these terms as our services evolve. Continued use of this website after an update means the revised terms apply from their published date.</p></article>
				</div><aside class="pds-u-aside pds-u-reveal"><h3>Questions about terms?</h3><p>For a project-specific agreement or a clarification, contact our team before work begins.</p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Progetti Digital →</a></aside></div>
			<?php elseif ( 'privacy' === $pds_page ) : ?>
				<div class="pds-u-layout"><div class="pds-u-content pds-u-policy">
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
			<?php elseif ( 'blog' === $pds_page ) : ?>
				<?php $pds_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 9, 'post__not_in' => array( 1 ) ) ); ?>
				<?php if ( $pds_posts->have_posts() ) : ?><div class="pds-u-post-grid"><?php while ( $pds_posts->have_posts() ) : $pds_posts->the_post(); ?><article class="pds-u-post pds-u-reveal"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p><a class="pds-u-read" href="<?php the_permalink(); ?>">Read article →</a></article><?php endwhile; ?></div><?php wp_reset_postdata(); ?><?php else : ?><div class="pds-u-post-grid"><article class="pds-u-post pds-u-reveal"><time>Product Strategy</time><h2>How to scope an MVP without slowing down momentum.</h2><p>A focused MVP solves one meaningful problem well. Learn how to prioritise the first release around what your users actually need.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Talk through your idea →</a></article><article class="pds-u-post pds-u-reveal"><time>Product Planning</time><h2>Should you build a web app, a mobile app, or both?</h2><p>The right first platform depends on your audience, core workflow, and speed-to-market goals—not simply the latest trend.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Plan your product →</a></article><article class="pds-u-post pds-u-reveal"><time>Operations</time><h2>Five signs your team needs a custom internal tool.</h2><p>Repeated spreadsheets, manual handoffs, and disconnected systems are signals that a tailored workflow could unlock more time.</p><a class="pds-u-read" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Improve your workflow →</a></article></div><?php endif; ?>
			<?php elseif ( 'careers' === $pds_page ) : ?>
				<div class="pds-u-grid"><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">◎</div><h3>Own the outcome</h3><p>We value curiosity, clear thinking, and people who care about the product beyond their individual task.</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">⌁</div><h3>Learn in the work</h3><p>Every project brings a fresh problem to understand, a better way to collaborate, and room to grow your craft.</p></article><article class="pds-u-card pds-u-reveal"><div class="pds-u-card-icon">↗</div><h3>Build with respect</h3><p>We communicate directly, share credit, and make space for the thoughtful work that good software needs.</p></article></div><div class="pds-u-career-callout pds-u-reveal"><h2>Don’t see the right role today?</h2><p>We are always interested in meeting people who care deeply about products, design, and engineering. Send us a short note about what you do best.</p><a class="pds-u-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Introduce yourself →</a></div>
			<?php endif; ?>
		</div></section>
	</main>
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
