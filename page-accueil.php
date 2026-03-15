<?php
/*
 * Template Name: Accueil Géomembrane
 * Description: Page d'accueil pour spécialiste en étanchéité géomembrane
 */
load_textdomain( 'boite-gestion-eau', get_template_directory() . '/languages/boite-gestion-eau-' . get_locale() . '.mo' );
?>
<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php esc_html_e( '[Nom Entreprise] — Spécialiste Géomembrane & Étanchéité', 'boite-gestion-eau' ); ?></title>
    <meta name="description" content="<?php esc_attr_e( 'Spécialiste de l\'étanchéité par géomembrane PEHD et PP. Bassins, citernes souples, chaudronnerie plastique, détection de fuites et curage de lagunes.', 'boite-gestion-eau' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500;600;700;800;900&family=Source+Serif+4:wght@400;600;700&display=swap" rel="stylesheet">
    <!--
    ╔══════════════════════════════════════════════════════════════╗
    ║  INSTRUCTIONS POUR PERSONNALISER CE SITE                    ║
    ║                                                              ║
    ║  1. Rechercher-remplacer tous les [NOM ENTREPRISE]           ║
    ║  2. Rechercher-remplacer [VILLE], [ADRESSE], [CODE POSTAL]   ║
    ║  3. Rechercher-remplacer 05 00 00 00 00 par le vrai numéro   ║
    ║  4. Rechercher-remplacer contact@entreprise.fr                ║
    ║  5. Rechercher-remplacer [ANNÉE] par l'année de création     ║
    ║  6. Remplacer les images : chercher "PHOTO_" dans le code    ║
    ║     → Remplacer src="..." par le chemin de vos photos        ║
    ║     → Format recommandé : JPG, 1200px de large minimum      ║
    ║  7. Uploader le tout via FTP dans le dossier du thème actif  ║
    ╚══════════════════════════════════════════════════════════════╝
    -->
    <style>
        :root {
            --navy: #0B1D3A;
            --navy-light: #132B52;
            --blue-accent: #1B6EC2;
            --orange: #D97706;
            --orange-light: #F59E0B;
            --white: #FFFFFF;
            --off-white: #F4F6F8;
            --gray-100: #E8ECF0;
            --gray-200: #D1D5DB;
            --gray-400: #9CA3AF;
            --gray-600: #6B7280;
            --text: #1F2937;
            --font-display: 'Source Serif 4', Georgia, serif;
            --font-body: 'Libre Franklin', system-ui, sans-serif;
            --shadow-sm: 0 1px 3px rgba(11,29,58,0.08);
            --shadow-md: 0 4px 16px rgba(11,29,58,0.10);
            --shadow-lg: 0 12px 40px rgba(11,29,58,0.14);
            --radius: 6px;
            --max-width: 1200px;
            --transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); color: var(--text); line-height: 1.65; background: var(--white); -webkit-font-smoothing: antialiased; }
        img { max-width: 100%; height: auto; display: block; }
        a { text-decoration: none; color: inherit; transition: color var(--transition); }
        .container { max-width: var(--max-width); margin: 0 auto; padding: 0 24px; }
        .section-pad { padding: 80px 0; }
        .text-center { text-align: center; }

        /* BUTTONS */
        .btn {
            display: inline-flex; align-items: center; gap: 8px;
            padding: 14px 32px; border-radius: var(--radius);
            font-family: var(--font-body); font-weight: 600; font-size: 0.95rem;
            letter-spacing: 0.02em; cursor: pointer; border: none;
            transition: all var(--transition);
        }
        .btn-primary { background: var(--orange); color: var(--white); box-shadow: 0 2px 8px rgba(217,119,6,0.3); }
        .btn-primary:hover { background: var(--orange-light); box-shadow: 0 4px 16px rgba(217,119,6,0.4); transform: translateY(-1px); }
        .btn-outline { background: transparent; color: var(--white); border: 2px solid rgba(255,255,255,0.5); }
        .btn-outline:hover { border-color: var(--white); background: rgba(255,255,255,0.1); }
        .btn-navy { background: var(--navy); color: var(--white); }
        .btn-navy:hover { background: var(--navy-light); transform: translateY(-1px); }
        .btn-nav-cta {
            background: var(--white); color: var(--navy);
            border: 2px solid var(--navy);
            font-weight: 700;
            box-shadow: none;
        }
        .btn-nav-cta:hover {
            background: var(--navy); color: var(--white);
            box-shadow: 0 2px 12px rgba(11,29,58,0.2);
        }

        .section-label {
            display: inline-block; font-size: 0.75rem; font-weight: 700;
            letter-spacing: 0.15em; text-transform: uppercase;
            color: var(--blue-accent); margin-bottom: 12px;
        }
        .section-title {
            font-family: var(--font-display); font-weight: 700;
            font-size: clamp(1.8rem, 4vw, 2.6rem);
            line-height: 1.2; color: var(--navy); margin-bottom: 16px;
        }
        .section-subtitle { font-size: 1.1rem; color: var(--gray-600); max-width: 640px; line-height: 1.7; }
        .section-subtitle.centered { margin: 0 auto; }

        /* TOPBAR */
        .topbar { background: var(--navy); color: rgba(255,255,255,0.7); font-size: 0.82rem; padding: 8px 0; }
        .topbar .container { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px; }
        .topbar a { color: rgba(255,255,255,0.85); }
        .topbar a:hover { color: var(--orange-light); }
        .topbar-left, .topbar-right { display: flex; align-items: center; gap: 20px; }
        .topbar-divider { width: 1px; height: 14px; background: rgba(255,255,255,0.2); }

        /* HEADER */
        .header { background: var(--white); position: sticky; top: 0; z-index: 100; box-shadow: var(--shadow-sm); }
        .header .container { display: flex; justify-content: space-between; align-items: center; height: 80px; }
        .logo { font-family: var(--font-display); font-size: 1.5rem; font-weight: 700; color: var(--navy); display: flex; align-items: center; gap: 10px; }
        .logo-icon { width: 42px; height: 42px; background: var(--navy); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; }
        .logo-icon svg { width: 24px; height: 24px; }
        .logo span { color: var(--orange); }
        .nav { display: flex; align-items: center; gap: 4px; }
        .nav a { padding: 8px 16px; font-size: 0.9rem; font-weight: 500; color: var(--gray-600); border-radius: var(--radius); transition: all var(--transition); }
        .nav a:hover, .nav a.active { color: var(--navy); background: var(--off-white); }
        .nav .dropdown { position: relative; }
        .nav .dropdown-menu {
            position: absolute; top: 100%; left: 0; background: var(--white); min-width: 240px;
            border-radius: var(--radius); box-shadow: var(--shadow-lg); padding: 8px 0;
            opacity: 0; visibility: hidden; transform: translateY(8px); transition: all var(--transition);
        }
        .nav .dropdown:hover .dropdown-menu { opacity: 1; visibility: visible; transform: translateY(0); }
        .dropdown-menu a { display: block; padding: 10px 20px; font-size: 0.88rem; border-radius: 0; }
        .dropdown-menu a:hover { background: var(--off-white); }
        .nav-cta { margin-left: 12px; }
        .mobile-toggle { display: none; background: none; border: none; cursor: pointer; width: 40px; height: 40px; position: relative; }
        .mobile-toggle span { display: block; width: 24px; height: 2px; background: var(--navy); position: absolute; left: 8px; transition: all var(--transition); }
        .mobile-toggle span:nth-child(1) { top: 12px; }
        .mobile-toggle span:nth-child(2) { top: 19px; }
        .mobile-toggle span:nth-child(3) { top: 26px; }

        /* HERO */
        .hero {
            position: relative; color: var(--white); overflow: hidden;
            min-height: 620px; display: flex; align-items: center;
        }
        .hero-bg {
            position: absolute; inset: 0; z-index: 0;
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%);
        }
        .hero-bg img {
            width: 100%; height: 100%; object-fit: cover;
            opacity: 0.25; mix-blend-mode: luminosity;
        }
        .hero::after {
            content: ''; position: absolute; inset: 0; z-index: 1;
            background:
                linear-gradient(135deg, rgba(11,29,58,0.92) 0%, rgba(19,43,82,0.85) 100%),
                radial-gradient(ellipse at 20% 80%, rgba(27,110,194,0.12) 0%, transparent 60%);
        }
        .hero-grid-overlay {
            position: absolute; inset: 0; z-index: 1;
            background-image:
                linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
            background-size: 60px 60px;
        }
        .hero .container {
            position: relative; z-index: 2;
            display: grid; grid-template-columns: 1fr 1fr;
            gap: 60px; align-items: center;
            padding-top: 60px; padding-bottom: 60px;
        }
        .hero-content { max-width: 560px; }
        .hero-badge {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.12);
            border-radius: 100px; padding: 6px 16px 6px 8px;
            font-size: 0.8rem; font-weight: 500; margin-bottom: 28px;
            backdrop-filter: blur(8px);
        }
        .hero-badge-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--orange-light); animation: pulse 2s ease-in-out infinite; }
        @keyframes pulse { 0%, 100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.6; transform: scale(1.3); } }
        .hero h1 { font-family: var(--font-display); font-size: clamp(2.2rem, 5vw, 3.2rem); font-weight: 800; line-height: 1.1; margin-bottom: 20px; }
        .hero h1 .highlight { color: var(--orange-light); }
        .hero-text { font-size: 1.1rem; line-height: 1.7; color: rgba(255,255,255,0.75); margin-bottom: 36px; max-width: 480px; }
        .hero-buttons { display: flex; gap: 14px; flex-wrap: wrap; }
        .hero-visual { display: flex; flex-direction: column; gap: 16px; }
        .hero-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }
        .stat-card {
            background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.08);
            border-radius: var(--radius); padding: 20px; text-align: center;
            backdrop-filter: blur(8px); transition: all var(--transition);
        }
        .stat-card:hover { background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.15); transform: translateY(-2px); }
        .stat-number { font-family: var(--font-display); font-size: 2rem; font-weight: 700; color: var(--orange-light); line-height: 1; }
        .stat-label { font-size: 0.78rem; color: rgba(255,255,255,0.6); margin-top: 6px; line-height: 1.3; }
        .hero-image-box {
            position: relative; border-radius: var(--radius); overflow: hidden;
            height: 280px; border: 1px solid rgba(255,255,255,0.1);
        }
        .hero-image-box img { width: 100%; height: 100%; object-fit: cover; }
        .hero-image-box .placeholder {
            width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, rgba(27,110,194,0.2), rgba(255,255,255,0.05));
            color: rgba(255,255,255,0.35); font-size: 0.85rem; text-align: center; padding: 20px;
        }

        /* TRUST BAR */
        .trust-bar { background: var(--off-white); border-top: 1px solid var(--gray-100); border-bottom: 1px solid var(--gray-100); padding: 24px 0; }
        .trust-items { display: flex; justify-content: center; align-items: center; gap: 48px; flex-wrap: wrap; }
        .trust-item { display: flex; align-items: center; gap: 10px; font-size: 0.88rem; font-weight: 500; color: var(--gray-600); }
        .trust-icon { width: 36px; height: 36px; border-radius: 50%; background: var(--white); box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }

        /* SERVICES */
        .services { background: var(--white); }
        .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 48px; }
        .service-card {
            background: var(--white); border: 1px solid var(--gray-100);
            border-radius: var(--radius); padding: 32px 28px;
            transition: all var(--transition); position: relative; overflow: hidden;
        }
        .service-card::before {
            content: ''; position: absolute; top: 0; left: 0; right: 0;
            height: 3px; background: var(--blue-accent);
            transform: scaleX(0); transform-origin: left; transition: transform var(--transition);
        }
        .service-card:hover { box-shadow: var(--shadow-md); border-color: transparent; transform: translateY(-3px); }
        .service-card:hover::before { transform: scaleX(1); }
        .service-card.featured { border-color: var(--orange); background: linear-gradient(to bottom, rgba(217,119,6,0.02), var(--white)); }
        .service-card.featured::before { background: var(--orange); transform: scaleX(1); }
        .service-badge { display: inline-block; background: var(--orange); color: var(--white); font-size: 0.7rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; padding: 3px 10px; border-radius: 100px; margin-bottom: 12px; }
        .service-icon { width: 48px; height: 48px; border-radius: var(--radius); background: var(--off-white); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 18px; }
        .service-card h3 { font-family: var(--font-display); font-size: 1.2rem; font-weight: 700; color: var(--navy); margin-bottom: 10px; }
        .service-card p { font-size: 0.9rem; color: var(--gray-600); line-height: 1.6; }
        .service-link { display: inline-flex; align-items: center; gap: 6px; font-size: 0.85rem; font-weight: 600; color: var(--blue-accent); margin-top: 16px; transition: gap var(--transition); }
        .service-link:hover { gap: 10px; }

        /* ABOUT */
        .about { background: var(--off-white); }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-top: 48px; }
        .about-image { border-radius: var(--radius); height: 400px; overflow: hidden; position: relative; }
        .about-image img { width: 100%; height: 100%; object-fit: cover; }
        .about-image .placeholder {
            width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
            color: rgba(255,255,255,0.35); font-size: 0.85rem;
        }
        .about-content h3 { font-family: var(--font-display); font-size: 1.1rem; font-weight: 600; color: var(--navy); margin-bottom: 12px; margin-top: 24px; }
        .about-content h3:first-of-type { margin-top: 0; }
        .about-content p { font-size: 0.95rem; color: var(--gray-600); line-height: 1.7; }
        .values-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 28px; }
        .value-item { background: var(--white); border-radius: var(--radius); padding: 20px; text-align: center; box-shadow: var(--shadow-sm); }
        .value-icon { font-size: 1.5rem; margin-bottom: 8px; }
        .value-label { font-size: 0.82rem; font-weight: 600; color: var(--navy); text-transform: uppercase; letter-spacing: 0.05em; }

        /* REALISATIONS */
        .realisations { background: var(--white); }
        .gallery-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 48px; }
        .gallery-item {
            position: relative; border-radius: var(--radius); overflow: hidden; cursor: pointer;
            aspect-ratio: 4/3; transition: all var(--transition);
        }
        .gallery-item:nth-child(1) { grid-column: span 2; grid-row: span 2; aspect-ratio: auto; }
        .gallery-item img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .gallery-item:hover img { transform: scale(1.05); }
        .gallery-item::after {
            content: attr(data-label);
            position: absolute; bottom: 0; left: 0; right: 0; padding: 16px;
            background: linear-gradient(transparent, rgba(11,29,58,0.85));
            color: var(--white); font-size: 0.82rem; font-weight: 500;
            opacity: 0; transform: translateY(8px); transition: all var(--transition);
        }
        .gallery-item:hover::after { opacity: 1; transform: translateY(0); }
        .gallery-item .placeholder {
            width: 100%; height: 100%; display: flex; align-items: center; justify-content: center;
            background: linear-gradient(135deg, var(--gray-100), var(--gray-200));
            color: var(--gray-400); font-size: 0.8rem;
        }

        /* CTA */
        .cta-section { background: linear-gradient(135deg, var(--navy) 0%, var(--navy-light) 100%); color: var(--white); position: relative; overflow: hidden; }
        .cta-section::before { content: ''; position: absolute; top: -50%; right: -20%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(217,119,6,0.1), transparent 70%); border-radius: 50%; }
        .cta-inner { position: relative; z-index: 2; text-align: center; max-width: 640px; margin: 0 auto; }
        .cta-inner h2 { font-family: var(--font-display); font-size: clamp(1.8rem, 4vw, 2.4rem); font-weight: 700; margin-bottom: 16px; }
        .cta-inner p { color: rgba(255,255,255,0.7); font-size: 1.05rem; line-height: 1.7; margin-bottom: 32px; }
        .cta-buttons { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

        /* CONTACT */
        .contact { background: var(--off-white); }
        .contact-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 48px; margin-top: 48px; }
        .contact-info-card { background: var(--navy); color: var(--white); border-radius: var(--radius); padding: 40px; }
        .contact-info-card h3 { font-family: var(--font-display); font-size: 1.4rem; font-weight: 700; margin-bottom: 24px; }
        .contact-line { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 20px; }
        .contact-line-icon { width: 40px; height: 40px; flex-shrink: 0; background: rgba(255,255,255,0.08); border-radius: var(--radius); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
        .contact-line-text { font-size: 0.9rem; color: rgba(255,255,255,0.8); line-height: 1.5; }
        .contact-line-text strong { display: block; color: var(--white); font-size: 0.95rem; margin-bottom: 2px; }
        .contact-hours { margin-top: 28px; padding-top: 24px; border-top: 1px solid rgba(255,255,255,0.1); }
        .contact-hours h4 { font-size: 0.85rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; color: var(--orange-light); margin-bottom: 12px; }
        .hours-line { display: flex; justify-content: space-between; font-size: 0.85rem; color: rgba(255,255,255,0.7); margin-bottom: 6px; }
        .contact-form { background: var(--white); border-radius: var(--radius); padding: 40px; box-shadow: var(--shadow-sm); }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-group { margin-bottom: 16px; }
        .form-group label { display: block; font-size: 0.82rem; font-weight: 600; color: var(--navy); margin-bottom: 6px; }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%; padding: 12px 16px; border: 1px solid var(--gray-200); border-radius: var(--radius);
            font-family: var(--font-body); font-size: 0.9rem; color: var(--text); background: var(--white);
            transition: border-color var(--transition);
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus { outline: none; border-color: var(--blue-accent); box-shadow: 0 0 0 3px rgba(27,110,194,0.1); }
        .form-group textarea { resize: vertical; min-height: 120px; }

        /* FOOTER */
        .footer { background: var(--navy); color: rgba(255,255,255,0.6); padding: 60px 0 24px; }
        .footer-grid { display: grid; grid-template-columns: 1.5fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 40px; }
        .footer-brand .logo { color: var(--white); margin-bottom: 16px; }
        .footer-brand p { font-size: 0.88rem; line-height: 1.7; max-width: 300px; }
        .footer h4 { color: var(--white); font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 16px; }
        .footer ul { list-style: none; }
        .footer li { margin-bottom: 8px; }
        .footer li a { font-size: 0.88rem; color: rgba(255,255,255,0.6); transition: color var(--transition); }
        .footer li a:hover { color: var(--orange-light); }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.08); padding-top: 24px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; font-size: 0.8rem; }

        /* ANIMATIONS */
        .fade-in { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .fade-in.visible { opacity: 1; transform: translateY(0); }
        .stagger-1 { transition-delay: 0.1s; } .stagger-2 { transition-delay: 0.2s; }
        .stagger-3 { transition-delay: 0.3s; } .stagger-4 { transition-delay: 0.4s; }
        .stagger-5 { transition-delay: 0.5s; } .stagger-6 { transition-delay: 0.6s; }

        /* RESPONSIVE */
        @media (max-width: 1024px) {
            .hero .container { grid-template-columns: 1fr; }
            .hero-visual { display: none; }
            .hero { min-height: 480px; }
            .about-grid { grid-template-columns: 1fr; }
            .about-image { height: 300px; }
            .services-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-grid { grid-template-columns: repeat(2, 1fr); }
            .gallery-item:nth-child(1) { grid-column: span 2; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 768px) {
            .topbar { display: none; }
            .nav { display: none; }
            .mobile-toggle { display: block; }
            .nav.open { display: flex; flex-direction: column; position: absolute; top: 80px; left: 0; right: 0; background: var(--white); padding: 16px 24px; box-shadow: var(--shadow-lg); }
            .nav.open .dropdown-menu { position: static; opacity: 1; visibility: visible; transform: none; box-shadow: none; padding-left: 16px; }
            .nav.open .btn-nav-cta { background: var(--navy); color: var(--white); border-color: var(--navy); text-align: center; justify-content: center; }
            .services-grid { grid-template-columns: 1fr; }
            .gallery-grid { grid-template-columns: 1fr 1fr; }
            .gallery-item:nth-child(1) { grid-column: span 1; grid-row: span 1; }
            .contact-grid { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
            .footer-grid { grid-template-columns: 1fr; }
            .section-pad { padding: 48px 0; }
            .hero-buttons { flex-direction: column; }
            .values-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- TOPBAR -->
    <div class="topbar">
        <div class="container">
            <div class="topbar-left">
                <span>📞 <a href="tel:+33500000000">05 00 00 00 00</a></span>
                <span class="topbar-divider"></span>
                <span>✉️ <a href="mailto:contact@entreprise.fr">contact@entreprise.fr</a></span>
            </div>
            <div class="topbar-right">
                <span><?php esc_html_e( 'Lun–Ven : 8h–12h / 13h30–17h30', 'boite-gestion-eau' ); ?></span>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"><path d="M3 21h18M4 18l3-12h10l3 12M9 6V3h6v3"/></svg>
                </div>
                [NOM<span>ENTREPRISE</span>]
            </a>
            <nav class="nav" id="mainNav">
                <a href="#accueil" class="active"><?php esc_html_e( 'Accueil', 'boite-gestion-eau' ); ?></a>
                <div class="dropdown">
                    <a href="#prestations"><?php esc_html_e( 'Prestations ▾', 'boite-gestion-eau' ); ?></a>
                    <div class="dropdown-menu">
                        <a href="#prestations"><?php esc_html_e( 'Bassins en géomembrane', 'boite-gestion-eau' ); ?></a>
                        <a href="#prestations"><?php esc_html_e( 'Citernes souples', 'boite-gestion-eau' ); ?></a>
                        <a href="#prestations"><?php esc_html_e( 'Chaudronnerie plastique', 'boite-gestion-eau' ); ?></a>
                        <a href="#prestations"><?php esc_html_e( 'Détection de fuites', 'boite-gestion-eau' ); ?></a>
                        <a href="#prestations"><?php esc_html_e( 'Curage de lagunes', 'boite-gestion-eau' ); ?></a>
                    </div>
                </div>
                <a href="#realisations"><?php esc_html_e( 'Réalisations', 'boite-gestion-eau' ); ?></a>
                <a href="#entreprise"><?php esc_html_e( 'L\'Entreprise', 'boite-gestion-eau' ); ?></a>
                <a href="#contact" class="nav-cta btn btn-nav-cta" style="padding:10px 24px;"><?php esc_html_e( 'Contactez-nous', 'boite-gestion-eau' ); ?></a>
            </nav>
            <button class="mobile-toggle" id="mobileToggle" aria-label="<?php esc_attr_e( 'Menu', 'boite-gestion-eau' ); ?>"><span></span><span></span><span></span></button>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero" id="accueil">
        <div class="hero-bg">
            <!-- PHOTO_HERO -->
            <img src="images/hero-bg.jpg" alt="<?php esc_attr_e( 'Chantier géomembrane', 'boite-gestion-eau' ); ?>">
        </div>
        <div class="hero-grid-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge"><span class="hero-badge-dot"></span> <?php esc_html_e( 'Spécialiste géomembrane depuis [ANNÉE]', 'boite-gestion-eau' ); ?></div>
                <h1><?php esc_html_e( 'L\'étanchéité par géomembrane,', 'boite-gestion-eau' ); ?> <span class="highlight"><?php esc_html_e( 'la solution technique', 'boite-gestion-eau' ); ?></span> <?php esc_html_e( 'pour vos projets', 'boite-gestion-eau' ); ?></h1>
                <p class="hero-text"><?php esc_html_e( 'Vente, pose et entretien de géomembranes PEHD et PP. Bassins agricoles, citernes incendie, chaudronnerie plastique, détection de fuites et curage de lagunes.', 'boite-gestion-eau' ); ?></p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Demander un devis gratuit →', 'boite-gestion-eau' ); ?></a>
                    <a href="#prestations" class="btn btn-outline"><?php esc_html_e( 'Nos prestations', 'boite-gestion-eau' ); ?></a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image-box">
                    <!-- PHOTO_HERO_SIDE -->
                    <img src="images/hero-side.jpg" alt="<?php esc_attr_e( 'Pose de géomembrane sur chantier', 'boite-gestion-eau' ); ?>">
                </div>
                <div class="hero-stats">
                    <div class="stat-card"><div class="stat-number">+[XX]</div><div class="stat-label"><?php esc_html_e( 'Années d\'expérience', 'boite-gestion-eau' ); ?></div></div>
                    <div class="stat-card"><div class="stat-number">+300</div><div class="stat-label"><?php esc_html_e( 'Bassins réalisés / an', 'boite-gestion-eau' ); ?></div></div>
                    <div class="stat-card"><div class="stat-number">100%</div><div class="stat-label"><?php esc_html_e( 'Conformité réglementaire', 'boite-gestion-eau' ); ?></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust-bar">
        <div class="container">
            <div class="trust-items">
                <div class="trust-item"><div class="trust-icon">✓</div> <?php esc_html_e( 'Devis gratuit sous 48h', 'boite-gestion-eau' ); ?></div>
                <div class="trust-item"><div class="trust-icon">🛡️</div> <?php esc_html_e( 'Garantie décennale', 'boite-gestion-eau' ); ?></div>
                <div class="trust-item"><div class="trust-icon">🏭</div> <?php esc_html_e( 'Atelier de préfabrication', 'boite-gestion-eau' ); ?></div>
                <div class="trust-item"><div class="trust-icon">📋</div> <?php esc_html_e( 'Certifié Qualibat', 'boite-gestion-eau' ); ?></div>
                <div class="trust-item"><div class="trust-icon">🇫🇷</div> <?php esc_html_e( 'Intervention nationale', 'boite-gestion-eau' ); ?></div>
            </div>
        </div>
    </div>

    <!-- PRESTATIONS -->
    <section class="services section-pad" id="prestations">
        <div class="container">
            <div class="text-center">
                <span class="section-label"><?php esc_html_e( 'Nos prestations', 'boite-gestion-eau' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Des solutions complètes d\'étanchéité', 'boite-gestion-eau' ); ?></h2>
                <p class="section-subtitle centered"><?php esc_html_e( 'De la conception à la mise en œuvre, nous intervenons sur tous types de projets d\'étanchéité par géomembrane, pour l\'industrie, l\'agriculture et les collectivités.', 'boite-gestion-eau' ); ?></p>
            </div>
            <div class="services-grid">
                <div class="service-card fade-in stagger-1">
                    <div class="service-icon">🔷</div>
                    <h3><?php esc_html_e( 'Bassins en géomembrane', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Étanchéité de bassins agricoles, bassins d\'irrigation, bassins tampon, bassins incendie, fosses à lisier et bassins d\'agrément en géomembrane PEHD et PP.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
                <div class="service-card fade-in stagger-2">
                    <div class="service-icon">💧</div>
                    <h3><?php esc_html_e( 'Citernes souples', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Citernes souples auto-portantes pour le stockage d\'eau, la réserve incendie (DECI), le stockage vinicole ou le stockage de lisier. Livraison et installation sur site.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
                <div class="service-card fade-in stagger-3">
                    <div class="service-icon">🔧</div>
                    <h3><?php esc_html_e( 'Chaudronnerie plastique', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Fabrication sur mesure de pièces en PEHD et PP : cuves, bacs de rétention, goulottes, regards, pièces spéciales. Soudure par extrusion et polyfusion.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
                <div class="service-card fade-in stagger-4">
                    <div class="service-icon">🔍</div>
                    <h3><?php esc_html_e( 'Détection de fuites', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Contrôle d\'étanchéité de vos ouvrages par des méthodes certifiées : test sous vide, détection électrique, test de pression. Rapports de conformité.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
                <div class="service-card featured fade-in stagger-5">
                    <span class="service-badge"><?php esc_html_e( 'Nouveau', 'boite-gestion-eau' ); ?></span>
                    <div class="service-icon">🌊</div>
                    <h3><?php esc_html_e( 'Curage de lagunes', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Curage et entretien de lagunes d\'épuration, bassins de décantation et lagunes industrielles. Pompage des boues, évacuation et remise en état de l\'ouvrage.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
                <div class="service-card fade-in stagger-6">
                    <div class="service-icon">🤝</div>
                    <h3><?php esc_html_e( 'Assistance à la pose', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Vous posez votre géomembrane vous-même ? Notre technicien vous accompagne sur le chantier avec des conseils de mise en œuvre personnalisés.', 'boite-gestion-eau' ); ?></p>
                    <a href="#contact" class="service-link"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- L'ENTREPRISE -->
    <section class="about section-pad" id="entreprise">
        <div class="container">
            <span class="section-label"><?php esc_html_e( 'L\'entreprise', 'boite-gestion-eau' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'Savoir-faire, rigueur et réactivité', 'boite-gestion-eau' ); ?></h2>
            <div class="about-grid">
                <div class="about-image fade-in">
                    <!-- PHOTO_EQUIPE -->
                    <img src="images/equipe.jpg" alt="<?php esc_attr_e( 'Réalisation bassin géomembrane', 'boite-gestion-eau' ); ?>">
                </div>
                <div class="about-content fade-in stagger-2">
                    <h3><?php esc_html_e( 'Notre expertise', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Spécialiste de l\'étanchéité par géomembrane, [NOM ENTREPRISE] intervient auprès des professionnels de l\'agriculture, de l\'industrie, du BTP et des collectivités. Notre atelier de préfabrication nous permet d\'assurer une production tout au long de l\'année et une intervention rapide sur chantier.', 'boite-gestion-eau' ); ?></p>
                    <h3><?php esc_html_e( 'Notre engagement', 'boite-gestion-eau' ); ?></h3>
                    <p><?php esc_html_e( 'Chaque projet est étudié par notre bureau d\'études pour garantir une solution optimale, conforme aux réglementations en vigueur. Nous nous engageons sur la qualité de nos matériaux, le respect des délais et la satisfaction de nos clients.', 'boite-gestion-eau' ); ?></p>
                    <div class="values-grid">
                        <div class="value-item"><div class="value-icon">🏆</div><div class="value-label"><?php esc_html_e( 'Qualité', 'boite-gestion-eau' ); ?></div></div>
                        <div class="value-item"><div class="value-icon">⏱️</div><div class="value-label"><?php esc_html_e( 'Ponctualité', 'boite-gestion-eau' ); ?></div></div>
                        <div class="value-item"><div class="value-icon">🤝</div><div class="value-label"><?php esc_html_e( 'Confiance', 'boite-gestion-eau' ); ?></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RÉALISATIONS -->
    <section class="realisations section-pad" id="realisations">
        <div class="container">
            <div class="text-center">
                <span class="section-label"><?php esc_html_e( 'Nos réalisations', 'boite-gestion-eau' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Des chantiers partout en France', 'boite-gestion-eau' ); ?></h2>
                <p class="section-subtitle centered"><?php esc_html_e( 'Découvrez quelques-uns de nos projets récents en étanchéité par géomembrane, curage de lagunes et chaudronnerie plastique.', 'boite-gestion-eau' ); ?></p>
            </div>
            <div class="gallery-grid">
                <!-- PHOTO_GALERIE_1 à 6 -->
                <div class="gallery-item fade-in" data-label="<?php esc_attr_e( 'Terrassement de bassin agricole', 'boite-gestion-eau' ); ?>"><img src="images/realisation-1.jpg" alt="<?php esc_attr_e( 'Terrassement bassin', 'boite-gestion-eau' ); ?>"></div>
                <div class="gallery-item fade-in stagger-1" data-label="<?php esc_attr_e( 'Bassin géomembrane PEHD – exploitation agricole', 'boite-gestion-eau' ); ?>"><img src="images/realisation-2.jpg" alt="<?php esc_attr_e( 'Bassin géomembrane PEHD', 'boite-gestion-eau' ); ?>"></div>
                <div class="gallery-item fade-in stagger-2" data-label="<?php esc_attr_e( 'Citerne souple – réserve incendie', 'boite-gestion-eau' ); ?>"><img src="images/realisation-3.jpg" alt="<?php esc_attr_e( 'Citerne souple incendie', 'boite-gestion-eau' ); ?>"></div>
                <div class="gallery-item fade-in stagger-3" data-label="<?php esc_attr_e( 'Préparation de fouille et pose de géotextile', 'boite-gestion-eau' ); ?>"><img src="images/realisation-4.jpg" alt="<?php esc_attr_e( 'Préparation bassin', 'boite-gestion-eau' ); ?>"></div>
                <div class="gallery-item fade-in stagger-4" data-label="<?php esc_attr_e( 'Bassin PEHD finalisé – fosse à lisier', 'boite-gestion-eau' ); ?>"><img src="images/realisation-5.jpg" alt="<?php esc_attr_e( 'Bassin étanche finalisé', 'boite-gestion-eau' ); ?>"></div>
                <div class="gallery-item fade-in stagger-5" data-label="<?php esc_attr_e( 'Citerne souple avec clôture de sécurité', 'boite-gestion-eau' ); ?>"><img src="images/realisation-6.jpg" alt="<?php esc_attr_e( 'Citerne souple clôturée', 'boite-gestion-eau' ); ?>"></div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section section-pad">
        <div class="container">
            <div class="cta-inner fade-in">
                <span class="section-label" style="color: var(--orange-light);"><?php esc_html_e( 'Un projet ?', 'boite-gestion-eau' ); ?></span>
                <h2><?php esc_html_e( 'Parlons de votre projet d\'étanchéité', 'boite-gestion-eau' ); ?></h2>
                <p><?php esc_html_e( 'Contactez-nous pour une étude gratuite et un devis personnalisé. Notre équipe vous répond sous 48 heures.', 'boite-gestion-eau' ); ?></p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary"><?php esc_html_e( 'Demander un devis →', 'boite-gestion-eau' ); ?></a>
                    <a href="tel:+33500000000" class="btn btn-outline">📞 05 00 00 00 00</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact section-pad" id="contact">
        <div class="container">
            <div class="text-center">
                <span class="section-label"><?php esc_html_e( 'Contact', 'boite-gestion-eau' ); ?></span>
                <h2 class="section-title"><?php esc_html_e( 'Contactez-nous', 'boite-gestion-eau' ); ?></h2>
                <p class="section-subtitle centered"><?php esc_html_e( 'Pour tout renseignement ou demande de devis, n\'hésitez pas à nous écrire ou nous appeler.', 'boite-gestion-eau' ); ?></p>
            </div>
            <div class="contact-grid">
                <div class="contact-info-card fade-in">
                    <h3><?php esc_html_e( 'Nos coordonnées', 'boite-gestion-eau' ); ?></h3>
                    <div class="contact-line"><div class="contact-line-icon">📍</div><div class="contact-line-text"><strong><?php esc_html_e( 'Adresse', 'boite-gestion-eau' ); ?></strong>[ADRESSE]<br>[CODE POSTAL] [VILLE]</div></div>
                    <div class="contact-line"><div class="contact-line-icon">📞</div><div class="contact-line-text"><strong><?php esc_html_e( 'Téléphone', 'boite-gestion-eau' ); ?></strong><a href="tel:+33500000000" style="color:var(--orange-light);">05 00 00 00 00</a></div></div>
                    <div class="contact-line"><div class="contact-line-icon">✉️</div><div class="contact-line-text"><strong><?php esc_html_e( 'E-mail', 'boite-gestion-eau' ); ?></strong><a href="mailto:contact@entreprise.fr" style="color:var(--orange-light);">contact@entreprise.fr</a></div></div>
                    <div class="contact-hours">
                        <h4><?php esc_html_e( 'Horaires d\'ouverture', 'boite-gestion-eau' ); ?></h4>
                        <div class="hours-line"><span><?php esc_html_e( 'Lundi – Jeudi', 'boite-gestion-eau' ); ?></span><span><?php esc_html_e( '8h – 12h / 13h30 – 17h30', 'boite-gestion-eau' ); ?></span></div>
                        <div class="hours-line"><span><?php esc_html_e( 'Vendredi', 'boite-gestion-eau' ); ?></span><span><?php esc_html_e( '8h – 12h / 13h30 – 16h', 'boite-gestion-eau' ); ?></span></div>
                        <div class="hours-line"><span><?php esc_html_e( 'Sam – Dim', 'boite-gestion-eau' ); ?></span><span style="color:rgba(255,255,255,0.4);"><?php esc_html_e( 'Fermé', 'boite-gestion-eau' ); ?></span></div>
                    </div>
                </div>
                <div class="contact-form fade-in stagger-2">
                    <div class="form-row">
                        <div class="form-group"><label for="nom"><?php esc_html_e( 'Nom *', 'boite-gestion-eau' ); ?></label><input type="text" id="nom" name="nom" placeholder="<?php esc_attr_e( 'Votre nom', 'boite-gestion-eau' ); ?>" required></div>
                        <div class="form-group"><label for="prenom"><?php esc_html_e( 'Prénom *', 'boite-gestion-eau' ); ?></label><input type="text" id="prenom" name="prenom" placeholder="<?php esc_attr_e( 'Votre prénom', 'boite-gestion-eau' ); ?>" required></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group"><label for="email"><?php esc_html_e( 'E-mail *', 'boite-gestion-eau' ); ?></label><input type="email" id="email" name="email" placeholder="<?php esc_attr_e( 'votre@email.com', 'boite-gestion-eau' ); ?>" required></div>
                        <div class="form-group"><label for="tel"><?php esc_html_e( 'Téléphone', 'boite-gestion-eau' ); ?></label><input type="tel" id="tel" name="tel" placeholder="<?php esc_attr_e( '06 00 00 00 00', 'boite-gestion-eau' ); ?>"></div>
                    </div>
                    <div class="form-group">
                        <label for="sujet"><?php esc_html_e( 'Sujet', 'boite-gestion-eau' ); ?></label>
                        <select id="sujet" name="sujet">
                            <option value=""><?php esc_html_e( 'Choisir un sujet...', 'boite-gestion-eau' ); ?></option>
                            <option value="bassin"><?php esc_html_e( 'Bassin en géomembrane', 'boite-gestion-eau' ); ?></option>
                            <option value="citerne"><?php esc_html_e( 'Citerne souple', 'boite-gestion-eau' ); ?></option>
                            <option value="chaudronnerie"><?php esc_html_e( 'Chaudronnerie plastique', 'boite-gestion-eau' ); ?></option>
                            <option value="fuite"><?php esc_html_e( 'Détection de fuites', 'boite-gestion-eau' ); ?></option>
                            <option value="curage"><?php esc_html_e( 'Curage de lagune', 'boite-gestion-eau' ); ?></option>
                            <option value="assistance"><?php esc_html_e( 'Assistance à la pose', 'boite-gestion-eau' ); ?></option>
                            <option value="autre"><?php esc_html_e( 'Autre', 'boite-gestion-eau' ); ?></option>
                        </select>
                    </div>
                    <div class="form-group"><label for="message"><?php esc_html_e( 'Message *', 'boite-gestion-eau' ); ?></label><textarea id="message" name="message" placeholder="<?php esc_attr_e( 'Décrivez votre projet...', 'boite-gestion-eau' ); ?>" required></textarea></div>
                    <button type="button" class="btn btn-navy" style="width:100%; justify-content:center;" onclick="alert('<?php echo esc_js( __( 'Merci ! Votre message a bien été envoyé. (À connecter côté serveur)', 'boite-gestion-eau' ) ); ?>')"><?php esc_html_e( 'Envoyer le message →', 'boite-gestion-eau' ); ?></button>
                    <p style="font-size:0.75rem; color:var(--gray-400); margin-top:10px; text-align:center;"><?php esc_html_e( '* Champs obligatoires. Réponse sous 48h.', 'boite-gestion-eau' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo">
                        <div class="logo-icon"><svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"><path d="M3 21h18M4 18l3-12h10l3 12M9 6V3h6v3"/></svg></div>
                        [NOM<span>ENTREPRISE</span>]
                    </div>
                    <p><?php esc_html_e( 'Spécialiste de l\'étanchéité par géomembrane PEHD et PP pour l\'industrie, l\'agriculture et les collectivités.', 'boite-gestion-eau' ); ?></p>
                </div>
                <div>
                    <h4><?php esc_html_e( 'Prestations', 'boite-gestion-eau' ); ?></h4>
                    <ul>
                        <li><a href="#prestations"><?php esc_html_e( 'Bassins en géomembrane', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#prestations"><?php esc_html_e( 'Citernes souples', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#prestations"><?php esc_html_e( 'Chaudronnerie plastique', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#prestations"><?php esc_html_e( 'Détection de fuites', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#prestations"><?php esc_html_e( 'Curage de lagunes', 'boite-gestion-eau' ); ?></a></li>
                    </ul>
                </div>
                <div>
                    <h4><?php esc_html_e( 'Entreprise', 'boite-gestion-eau' ); ?></h4>
                    <ul>
                        <li><a href="#entreprise"><?php esc_html_e( 'Qui sommes-nous', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#realisations"><?php esc_html_e( 'Nos réalisations', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#contact"><?php esc_html_e( 'Contactez-nous', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Mentions légales', 'boite-gestion-eau' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Politique de confidentialité', 'boite-gestion-eau' ); ?></a></li>
                    </ul>
                </div>
                <div>
                    <h4><?php esc_html_e( 'Contact', 'boite-gestion-eau' ); ?></h4>
                    <ul>
                        <li>📞 05 00 00 00 00</li>
                        <li>✉️ contact@entreprise.fr</li>
                        <li>📍 [VILLE]</li>
                        <li style="margin-top:16px;"><strong style="color:var(--white); font-size:0.82rem;"><?php esc_html_e( 'Zone d\'intervention', 'boite-gestion-eau' ); ?></strong><br><?php esc_html_e( 'France entière', 'boite-gestion-eau' ); ?></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span><?php esc_html_e( '© 2026 [NOM ENTREPRISE] — Tous droits réservés', 'boite-gestion-eau' ); ?></span>
                <span><a href="#"><?php esc_html_e( 'Mentions légales', 'boite-gestion-eau' ); ?></a> · <a href="#"><?php esc_html_e( 'Confidentialité', 'boite-gestion-eau' ); ?></a></span>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobileToggle').addEventListener('click', function() { document.getElementById('mainNav').classList.toggle('open'); });
        document.querySelectorAll('.nav a').forEach(function(l) { l.addEventListener('click', function() { document.getElementById('mainNav').classList.remove('open'); }); });
        var obs = new IntersectionObserver(function(e) { e.forEach(function(en) { if (en.isIntersecting) en.target.classList.add('visible'); }); }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.fade-in').forEach(function(el) { obs.observe(el); });
        document.querySelectorAll('a[href^="#"]').forEach(function(a) {
            a.addEventListener('click', function(e) {
                var t = document.querySelector(this.getAttribute('href'));
                if (t) { e.preventDefault(); window.scrollTo({ top: t.getBoundingClientRect().top + window.pageYOffset - document.querySelector('.header').offsetHeight, behavior: 'smooth' }); }
            });
        });
        window.addEventListener('scroll', function() { document.querySelector('.header').style.boxShadow = window.scrollY > 10 ? '0 4px 20px rgba(11,29,58,0.1)' : '0 1px 3px rgba(11,29,58,0.08)'; });
    </script>
</body>
</html>
