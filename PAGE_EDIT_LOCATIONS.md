# Progetti Digital — Page Edit Locations

The new Progetti Digital pages are code-based templates. They are not normal WordPress Pages, so they do not appear in **Dashboard → Pages**.

## Home page

- URL: `/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-home.php`
- Contains: home hero, logo, services, process, company content, and home-page animations.

## Blog page

- URL: `/blog/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-utility.php`
- Find: `elseif ( 'blog' === $pds_page )`
- Behaviour: published WordPress posts display automatically. If there are no posts, three static software-company articles are shown.

## Contact page

- URL: `/contact/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-utility.php`
- Find: `elseif ( 'contact' === $pds_page )`
- Contact form handler: `wp-content/mu-plugins/progetti-digital-homepage.php`
- Form emails the WordPress **Settings → General → Administration Email Address**.

## Careers page

- URL: `/careers/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-utility.php`
- Find: `elseif ( 'careers' === $pds_page )`

## Terms & Conditions page

- URL: `/terms-conditions/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-utility.php`
- Find: `if ( 'terms' === $pds_page )`

## Privacy Policy page

- URL: `/privacy-policy/`
- Edit file: `wp-content/mu-plugins/templates/progetti-digital-utility.php`
- Find: `elseif ( 'privacy' === $pds_page )`

## Page routes and titles

- File: `wp-content/mu-plugins/progetti-digital-homepage.php`
- Contains: page URLs, page titles, home-page template loading, contact-form submission handling, and all custom SEO metadata.

## SEO configuration

- File: `wp-content/mu-plugins/progetti-digital-homepage.php`
- Contains: page-specific titles and meta descriptions, canonical URLs, Open Graph/Twitter tags, JSON-LD schema, robots.txt, and the custom sitemap.
- Custom sitemap URL: `/progetti-pages-sitemap.xml`
- Main SEO plugin sitemap URL: `/sitemap_index.xml`

## Brand logo

- File: `wp-content/mu-plugins/assets/progetti-digital-startup-logo.png`
