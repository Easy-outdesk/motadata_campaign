<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Explore Motadata network monitoring and IT service management solutions through Easy Outdesk, the sole distributor of Motadata in Malaysia.">
    <meta name="theme-color" content="#071a35">
    <title>Motadata Network Monitoring & ITSM | Easy Outdesk Malaysia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="//campaigns-backend.easyoutdesk.com">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --navy: #071a35;
            --navy2: #0d2c4d;
            --blue: #174d83;
            --orange: #ff7a1a;
            --orange2: #ffb16f;
            --ink: #10213a;
            --muted: #62748a;
            --line: #dce5ee;
            --pale: #f4f7fb;
            --white: #fff;
            --radius: 24px;
            --shadow: 0 24px 65px #071a3514;
            --ease: cubic-bezier(.2, .75, .25, 1)
        }

        * { box-sizing: border-box }

        html { scroll-behavior: smooth; scroll-padding-top: 90px }

        body {
            margin: 0;
            color: var(--ink);
            font: 16px/1.65 "DM Sans", sans-serif;
            letter-spacing: -.01em;
            overflow-x: hidden
        }

        a { color: inherit; text-decoration: none }

        button, input, select, textarea { font: inherit }

        button, a, input, select, textarea { outline-offset: 4px }

        a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible, textarea:focus-visible {
            outline: 3px solid #79c9e8
        }

        .wrap { width: min(1220px, calc(100% - 48px)); margin: auto }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            letter-spacing: .15em;
            font-size: .72rem;
            font-weight: 800;
            color: var(--orange)
        }

        .eyebrow:before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: currentColor;
            box-shadow: 0 0 0 5px #ff7a1a1c
        }

        h1, h2, h3 {
            font-family: Manrope, sans-serif;
            letter-spacing: -.055em;
            line-height: 1.08;
            margin-top: 0
        }

        p { margin-top: 0 }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            border: 1px solid transparent;
            border-radius: 999px;
            padding: 14px 21px;
            font-size: .86rem;
            font-weight: 800;
            cursor: pointer;
            transition: transform .25s var(--ease), box-shadow .25s, background .25s
        }

        .btn:hover { transform: translateY(-3px); box-shadow: 0 14px 30px #0002 }

        .btn:disabled { opacity: .75; cursor: not-allowed; transform: none }

        .btn-primary {
            background: linear-gradient(110deg, #ff9a43, #ff7418);
            color: #071a35;
            box-shadow: 0 10px 25px #ff7a1a26
        }

        .btn-secondary { border-color: #ffffff55; background: #ffffff08; color: white }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 30;
            background: #06152bee;
            border-bottom: 1px solid #ffffff1c;
            backdrop-filter: blur(18px);
            color: white
        }

        .header-inner {
            height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font: 800 1.05rem Manrope, sans-serif;
            letter-spacing: -.04em
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 11px;
            background: linear-gradient(135deg, var(--orange), #ffd0a8);
            color: var(--navy);
            font-size: 1.1rem
        }

        .brand small {
            display: block;
            color: #9aafc5;
            font: 700 .55rem "DM Sans", sans-serif;
            letter-spacing: .11em;
            margin-top: 1px
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 25px;
            color: #d0dceb;
            font-size: .82rem;
            font-weight: 700
        }

        .nav a:not(.btn):hover { color: var(--orange2) }

        .menu-toggle {
            display: none;
            border: 1px solid #ffffff30;
            border-radius: 10px;
            padding: 8px 12px;
            background: #102a46;
            color: white;
            font-size: 1.1rem
        }

        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            background: radial-gradient(ellipse at 78% 35%, #16446a99 0, transparent 33%), radial-gradient(ellipse at 92% 12%, #ff7a1a20 0, transparent 28%), linear-gradient(120deg, #061326, #071c35 55%, #0b2b4b);
            color: white;
            padding: 74px 0 62px
        }

        .hero:before {
            content: "";
            position: absolute;
            z-index: -1;
            width: 760px;
            height: 760px;
            right: -250px;
            top: -200px;
            border: 1px solid #ffffff13;
            border-radius: 50%;
            box-shadow: 0 0 0 70px #ffffff04, 0 0 0 140px #ffffff03
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.02fr .98fr;
            gap: 52px;
            align-items: center
        }

        .hero-copy { padding: 18px 0 }

        .hero h1 {
            font-size: clamp(3.4rem, 6.5vw, 6.25rem);
            letter-spacing: -.085em;
            line-height: .98;
            margin: 23px 0
        }

        .hero h1 em {
            font-style: normal;
            color: transparent;
            background: linear-gradient(105deg, #ff7a1a, #ffd0a8 52%, #7cc9e8);
            background-clip: text;
            -webkit-background-clip: text
        }

        .hero-copy>p {
            max-width: 570px;
            color: #bdcce0;
            font-size: 1.04rem;
            line-height: 1.8
        }

        .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin: 26px 0 }

        .hero-points {
            display: grid;
            gap: 11px;
            margin-top: 28px;
            color: #d5e0ed;
            font-size: .84rem
        }

        .hero-points span { display: flex; align-items: center; gap: 11px }

        .hero-points b {
            display: grid;
            place-items: center;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #ff7a1a22;
            color: #ffb16f;
            font-size: .75rem
        }

        .hero-foot {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            margin-top: 22px;
            padding-top: 17px;
            border-top: 1px solid #ffffff20;
            color: #88a2bc;
            font-size: .62rem;
            font-weight: 800;
            letter-spacing: .12em
        }

        .trust-strip { background: #f5f7fa; border-bottom: 1px solid var(--line) }

        .trust-inner {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 25px 0
        }

        .trust-item { display: flex; align-items: center; gap: 12px }

        .trust-num {
            font: 800 1.45rem Manrope, sans-serif;
            letter-spacing: -.06em;
            color: var(--navy)
        }

        .trust-item span:last-child { font-size: .72rem; line-height: 1.4; color: var(--muted) }

        .section { padding: 105px 0 }

        .section.alt { background: var(--pale) }

        .section-head { max-width: 800px; margin-bottom: 45px }

        .section-head h2 {
            font-size: clamp(2.5rem, 4.8vw, 4.7rem);
            letter-spacing: -.08em;
            margin: 16px 0
        }

        .section-head p { max-width: 700px; color: var(--muted); line-height: 1.85 }

        .benefit-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px }

        .benefit {
            min-height: 265px;
            border: 1px solid var(--line);
            border-radius: 22px;
            background: white;
            padding: 26px;
            transition: transform .3s var(--ease), box-shadow .3s, border-color .3s
        }

        .benefit:hover { transform: translateY(-7px); box-shadow: var(--shadow); border-color: #ffb77f }

        .benefit-icon {
            display: grid;
            place-items: center;
            width: 48px;
            height: 48px;
            border-radius: 15px;
            background: #fff0e4;
            color: #d85a0d;
            font-size: 1.3rem
        }

        .benefit h3 { font-size: 1.23rem; margin: 24px 0 10px }

        .benefit p { font-size: .86rem; color: var(--muted); line-height: 1.8; margin: 0 }

        .logo-panel {
            margin-top: 28px;
            border: 1px dashed #bdcbd9;
            border-radius: 20px;
            padding: 28px;
            text-align: center;
            background: #fff
        }

        .logo-panel strong { display: block; font: 800 1rem Manrope, sans-serif }

        /* ---------- CLIENT LOGO AUTO-SCROLL ---------- */
        .clients-slider {
            position: relative;
            overflow: hidden;
            margin-top: 22px;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent)
        }

        .clients-track {
            display: flex;
            align-items: center;
            width: max-content
        }

        /* animation starts only after the logos are cloned, so the loop is seamless */
        .clients-track[data-cloned="true"] {
            animation: clientsScroll 45s linear infinite;
            will-change: transform
        }

        .clients-slider.p .clients-track { animation-play-state: paused }

        .client-logo {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 190px;
            padding: 0 20px
        }

        .client-logo img {
            width: auto;
            max-width: 150px;
            height: 56px;
            object-fit: contain;
            filter: grayscale(1);
            opacity: .75;
            transition: filter .3s, opacity .3s, transform .3s
        }

        .client-logo img:hover { filter: none; opacity: 1; transform: scale(1.06) }

        .clients-slider.reduced-motion { overflow-x: auto; -webkit-mask-image: none; mask-image: none }

        .clients-slider.reduced-motion .clients-track { animation: none !important }

        @keyframes clientsScroll {
            from { transform: translateX(0) }
            to { transform: translateX(-50%) }
        }

        .solution-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px }

        .solution {
            display: grid;
            grid-template-columns: 1fr .75fr;
            gap: 20px;
            align-items: center;
            min-height: 290px;
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 24px;
            background: white;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s
        }

        .solution:hover { transform: translateY(-5px); box-shadow: var(--shadow) }

        .solution .n { font-size: .67rem; color: var(--orange); letter-spacing: .14em; font-weight: 900 }

        .solution h3 { font-size: 1.8rem; margin: 15px 0 10px }

        .solution p { color: var(--muted); font-size: .86rem; line-height: 1.8; margin: 0 }

        .product-visual {
            min-height: 175px;
            display: grid;
            place-items: center;
            border-radius: 18px;
            background: radial-gradient(circle at 50% 40%, #194c72, #06172b);
            padding: 15px;
            position: relative;
            overflow: hidden
        }

        .product-visual:before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: linear-gradient(#8bc8e817 1px, transparent 1px), linear-gradient(90deg, #8bc8e817 1px, transparent 1px);
            background-size: 19px 19px;
            mask-image: radial-gradient(ellipse, #000, transparent 80%)
        }

        .mini-dashboard {
            position: relative;
            z-index: 1;
            width: 100%;
            padding: 11px;
            border: 1px solid #ffffff2c;
            border-radius: 10px;
            background: #061326d9
        }

        .mini-top { height: 6px; width: 44%; background: #ff8b37; border-radius: 9px; margin-bottom: 10px }

        .bars { display: grid; gap: 6px }

        .bars i { height: 7px; border-radius: 3px; background: #36a6cf }

        .bars i:nth-child(2) { width: 76% }

        .bars i:nth-child(3) { width: 55% }

        .bars i:nth-child(4) { width: 86% }

        .service-visual { display: grid; gap: 8px; position: relative; z-index: 1; width: 100% }

        .service-visual i {
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #ffffff28;
            border-radius: 8px;
            background: #071b31e8;
            padding: 9px;
            color: #cfe1ef;
            font-size: .56rem;
            font-style: normal
        }

        .service-visual i:before {
            content: "✓";
            display: grid;
            place-items: center;
            width: 17px;
            height: 17px;
            border-radius: 5px;
            background: #ff7a1a;
            color: #071a35;
            font-weight: 900
        }

        .inline-cta { margin-top: 26px }

        .usp-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px }

        .usp {
            display: flex;
            gap: 17px;
            padding: 24px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white
        }

        .usp-num {
            flex: 0 0 42px;
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            background: #fff0e4;
            color: #d85a0d;
            font: 800 .8rem Manrope, sans-serif
        }

        .usp h3 { font-size: 1.12rem; margin: 2px 0 8px }

        .usp p { font-size: .84rem; color: var(--muted); line-height: 1.8; margin: 0 }

        .compare-wrap {
            overflow-x: auto;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white;
            box-shadow: 0 12px 40px #071a3509
        }

        .compare { width: 100%; border-collapse: collapse; min-width: 650px }

        .compare th, .compare td {
            padding: 21px 24px;
            text-align: left;
            border-bottom: 1px solid var(--line);
            font-size: .86rem
        }

        .compare th {
            background: #0b2a49;
            color: white;
            font: 800 .78rem Manrope, sans-serif;
            letter-spacing: .04em
        }

        .compare th:nth-child(2) { background: #174d83 }

        .compare td:first-child { font-weight: 800; color: var(--navy); width: 22% }

        .compare td:nth-child(2) { font-weight: 700; color: #174d83; background: #f5f8fc }

        .compare tr:last-child td { border-bottom: 0 }

        .proof-note { margin-top: 14px; font-size: .74rem; color: var(--muted) }

        .final-cta {
            padding: 85px 0;
            background: radial-gradient(ellipse at 90% 0%, #244f7c 0, transparent 35%), linear-gradient(115deg, #06152b, #0e3963);
            color: white
        }

        .cta-inner { display: flex; justify-content: space-between; align-items: center; gap: 45px }

        .cta-inner h2 {
            max-width: 800px;
            font-size: clamp(2.7rem, 5.4vw, 5rem);
            letter-spacing: -.08em;
            margin: 15px 0
        }

        .cta-inner p { max-width: 690px; color: #b9cadd; line-height: 1.8; margin: 0 }

        /* ---------- FORM ---------- */
        .lead-form {
            padding: 30px;
            border: 1px solid var(--line);
            border-radius: 24px;
            background: white;
            color: var(--ink);
            box-shadow: 0 25px 70px #0000002e
        }

        .form-intro { margin-bottom: 22px }

        .form-intro h3 { font-size: 1.45rem; margin: 0 0 7px }

        .form-intro p { color: var(--muted); font-size: .85rem; margin: 0 }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 15px }

        .field { margin-bottom: 15px }

        .field label { display: block; margin-bottom: 6px; color: #253750; font-size: .77rem; font-weight: 800 }

        .field label span { color: #d94e15 }

        .field input, .field select, .field textarea {
            width: 100%;
            border: 1px solid #d9e2ed;
            border-radius: 11px;
            padding: 12px 13px;
            background: #fbfcfe;
            color: var(--ink);
            font-size: .84rem;
            transition: border-color .2s, box-shadow .2s
        }

        .field input:focus, .field select:focus, .field textarea:focus {
            outline: 0;
            border-color: var(--orange);
            box-shadow: 0 0 0 3px #ff7a1a1c
        }

        .field textarea { min-height: 100px; resize: vertical }

        .form-status {
            font-size: .82rem;
            font-weight: 700;
            min-height: 22px;
            margin: 12px 0 0;
            color: #315b7b
        }

        .form-status.error { color: #c23f3f }

        .form-status.success { color: #299565 }

        .form-loading { pointer-events: none }

        .form-loading:after {
            content: "";
            width: 15px;
            height: 15px;
            border: 2px solid #071a3550;
            border-top-color: #071a35;
            border-radius: 50%;
            animation: spin .7s linear infinite;
            display: inline-block
        }

        @keyframes spin { to { transform: rotate(360deg) } }

        .footer { background: #040e1e; color: #c0cede; padding: 48px 0 22px }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 35px;
            padding-bottom: 30px;
            border-bottom: 1px solid #ffffff1b
        }

        .footer-about { max-width: 430px }

        .footer-about p { color: #91a3ba; font-size: .8rem; margin: 14px 0 0 }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
            align-content: flex-start;
            font-size: .8rem
        }

        .footer-links a:hover { color: var(--orange2) }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            padding-top: 18px;
            color: #7f92aa;
            font-size: .7rem
        }

        .footer-bottom a:hover { color: var(--orange2) }

        .mobile-cta { display: none }

        .reveal { opacity: 0; transform: translateY(22px); transition: opacity .7s var(--ease), transform .7s var(--ease) }

        .reveal.visible { opacity: 1; transform: none }

        @media(max-width:1000px) {
            .hero-grid { grid-template-columns: 1fr; gap: 10px }
            .hero-copy { padding-top: 30px }
            .benefit-grid { grid-template-columns: repeat(2, 1fr) }
            .trust-inner { grid-template-columns: repeat(2, 1fr) }
            .solution { grid-template-columns: 1fr .65fr }
            .section { padding: 85px 0 }
        }

        @media(max-width:700px) {
            .wrap { width: calc(100% - 32px) }
            .header-inner { height: 70px }
            .menu-toggle { display: block }
            .nav {
                display: none;
                position: absolute;
                top: 70px;
                left: 16px;
                right: 16px;
                align-items: stretch;
                flex-direction: column;
                gap: 0;
                padding: 13px;
                background: #081b32;
                border: 1px solid #ffffff20;
                border-radius: 15px;
                box-shadow: var(--shadow)
            }
            .nav.open { display: flex }
            .nav a:not(.btn) { padding: 12px 8px }
            .nav .btn { margin-top: 8px }
            .brand { font-size: .92rem }
            .brand small { font-size: .48rem }
            .hero { padding: 42px 0 26px }
            .hero h1 { font-size: clamp(3.1rem, 14vw, 4.6rem) }
            .hero-copy>p { font-size: .94rem }
            .hero-foot { font-size: .49rem; letter-spacing: .06em }
            .trust-inner { gap: 17px; padding: 20px 0 }
            .trust-num { font-size: 1.2rem }
            .trust-item span:last-child { font-size: .65rem }
            .section { padding: 72px 0 }
            .section-head h2 { font-size: clamp(2.4rem, 11vw, 3.5rem) }
            .benefit-grid, .solution-grid, .usp-grid { grid-template-columns: 1fr }
            .benefit { min-height: unset }
            .solution { grid-template-columns: 1fr; padding: 22px }
            .product-visual { min-height: 150px; order: -1 }
            .solution h3 { font-size: 1.6rem }
            .client-logo { width: 150px; padding: 0 14px }
            .client-logo img { height: 46px; max-width: 120px }
            .cta-inner { align-items: flex-start; flex-direction: column; gap: 25px }
            .final-cta { padding: 68px 0 }
            .cta-inner h2 { font-size: clamp(2.7rem, 12vw, 4rem) }
            .lead-form { padding: 21px }
            .form-grid { grid-template-columns: 1fr }
            .footer-top { flex-direction: column }
            .footer-links { gap: 15px }
            .footer-bottom { display: block }
            .footer-bottom span { display: block; margin-top: 8px }
            .mobile-cta { display: block; position: fixed; z-index: 25; bottom: 10px; left: 12px; right: 12px }
            .mobile-cta .btn { width: 100%; box-shadow: 0 10px 30px #0004 }
            body { padding-bottom: 68px }
        }

        @media(prefers-reduced-motion:reduce) {
            html { scroll-behavior: auto }
            *, *:before, *:after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important
            }
            .clients-track[data-cloned="true"] { animation: none !important }
            .reveal { opacity: 1; transform: none }
        }
    </style>
</head>

<body id="top">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9GHVW4C" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <header class="site-header">
        <div class="wrap header-inner">
            <a class="brand" href="#top" aria-label="Easy Outdesk and Motadata home"><img src="assets/images/motadata_eod.png" alt="Easy Outdesk and Motadata"></a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav"
                aria-label="Open navigation">☰</button>
            <nav class="nav" id="primary-nav" aria-label="Main navigation"><a href="#why">Why Motadata</a><a
                    href="#solutions">Solutions</a><a href="#usps">Key benefits</a><a href="#compare">Compare</a><a
                    class="btn btn-primary" href="#demo-form">Request a demo ↗</a></nav>
        </div>
    </header>
    <main id="top-main">
        <section class="hero">
            <div class="wrap hero-grid">
                <div class="hero-copy"><span class="eyebrow">Motadata × Easy Outdesk</span>
                    <h1>Network monitoring and <em>ITSM solutions</em> in Malaysia.</h1>
                    <p>Discover Motadata's IT monitoring and ITSM solutions through Easy Outdesk, the sole distributor
                        of Motadata in Malaysia. Explore network monitoring, IT infrastructure visibility, and IT
                        service management solutions tailored to your organisation's requirements.</p>
                    <div class="hero-actions"><a class="btn btn-primary" href="#demo-form">Request a product demo
                            <span>↗</span></a><a class="btn btn-secondary" href="#solutions">Explore solutions ↓</a>
                    </div>
                    <div class="hero-points"><span><b>✓</b> Official local distribution channel</span><span><b>✓</b>
                            Solutions for IT operations and service management</span><span><b>✓</b> Product demo and
                            business requirements discussion</span></div>
                </div>

                <form class="lead-form reveal" id="demo-form" novalidate>
                    <div class="form-intro">
                        <h3>Request a Product Demo</h3>
                        <p>Fields marked with * are required.</p>
                    </div>
                    <div class="form-grid">
                        <div class="field"><label for="full-name">Full name <span>*</span></label><input id="full-name"
                                name="full_name" type="text" autocomplete="name" required placeholder="Your full name"></div>
                        <div class="field"><label for="business-email">Business email <span>*</span></label><input
                                id="business-email" name="business_email" type="email" autocomplete="email" required
                                placeholder="you@company.com"></div>
                        <div class="field"><label for="company-name">Company name <span>*</span></label><input
                                id="company-name" name="company_name" type="text" autocomplete="organization" required
                                placeholder="Your company"></div>
                        <div class="field"><label for="phone">Phone number <span>*</span></label><input id="phone"
                                name="phone" type="tel" autocomplete="tel" required placeholder="+60 12 345 6789">
                        </div>
                        <div class="field"><label for="solution">What solution are you interested in?
                                <span>*</span></label><select id="solution" name="solution" required>
                                <option value="">Choose a solution</option>
                                <option>IT infrastructure / Network monitoring</option>
                                <option>ITSM / service desk</option>
                                <option>Both solutions</option>
                                <option>Not sure yet</option>
                            </select></div>
                        <div class="field"><label for="company-size">Company size <span>*</span></label><select
                                id="company-size" name="company_size" required>
                                <option value="">Select company size</option>
                                <option>1–50 employees</option>
                                <option>51–100 employees</option>
                                <option>101–500 employees</option>
                                <option>501+ employees</option>
                            </select></div>
                    </div>
                    <div class="field"><label for="message">Write your message</label><textarea id="message"
                            name="message" placeholder="Share your goals or IT challenges (optional)"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit" style="width:100%">Request a product demo
                        <span>→</span></button>
                    <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
                </form>
            </div>
            <div class="wrap hero-foot"><span>01 — VISIBILITY</span><span>02 — SERVICE MANAGEMENT</span><span>03 — LOCAL
                    ACCESS</span><span>SCROLL TO EXPLORE ↓</span></div>
        </section>

        <section class="trust-strip" aria-label="Motadata company statistics">
            <div class="wrap trust-inner">
                <div class="trust-item"><strong class="trust-num">1000+</strong><span>Enterprise<br>customers</span>
                </div>
                <div class="trust-item"><strong class="trust-num">50+</strong><span>Countries</span></div>
                <div class="trust-item"><strong class="trust-num">15+</strong><span>Years of<br>experience</span></div>
                <div class="trust-item"><strong class="trust-num">99.9%</strong><span>Customer<br>retention</span></div>
            </div>
        </section>

        <section class="section" id="why">
            <div class="wrap">
                <div class="section-head reveal"><span class="eyebrow">Why choose Motadata through Easy Outdesk?</span>
                    <h2>Clearer visibility. More connected IT operations.</h2>
                    <p>Explore monitoring and service-management capabilities with a local distribution partner for
                        product enquiries and commercial discussions.</p>
                </div>
                <div class="benefit-grid">
                    <article class="benefit reveal">
                        <div class="benefit-icon">↗</div>
                        <h3>Sole Distributor in Malaysia</h3>
                        <p>Access Motadata through Easy Outdesk, your local distribution partner for product enquiries
                            and commercial discussions.</p>
                    </article>
                    <article class="benefit reveal">
                        <div class="benefit-icon">◉</div>
                        <h3>Visibility Across IT Operations</h3>
                        <p>Explore monitoring capabilities that help IT teams understand infrastructure performance and
                            identify operational issues.</p>
                    </article>
                    <article class="benefit reveal">
                        <div class="benefit-icon">⌁</div>
                        <h3>Streamlined IT Service Management</h3>
                        <p>Explore service desk, incident management, and IT asset management capabilities based on your
                            business requirements.</p>
                    </article>
                    <article class="benefit reveal">
                        <div class="benefit-icon">✦</div>
                        <h3>Trusted by Enterprise Organisations</h3>
                        <p>Discuss product fit and requirements with Easy Outdesk, and explore the relevant Motadata
                            solution areas for your organisation.</p>
                    </article>
                </div>

                <div class="logo-panel reveal"><strong>Trusted by enterprise organisations</strong>
                    <div class="clients-slider" id="clientsSlider" aria-label="Client logos">
                        <div class="clients-track" id="clientsTrack">
                            <div class="client-logo"><img src="assets/images/clients/Central_Bank_of_India_Logo.webp"
                                    alt="Central Bank of India Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Crisil.webp" alt="CRISIL Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/DP_World.webp" alt="DP World Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/emirats_healthcare.webp"
                                    alt="Emirates Healthcare Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/HDFC_Life.webp" alt="HDFC Life Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Indian_Oil.webp" alt="Indian Oil Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/kotak_securities.webp"
                                    alt="Kotak Securities Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/LIC.webp" alt="LIC Logo" width="150"
                                    height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/MB_Bank.webp" alt="MB Bank Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/NTPC.webp" alt="NTPC Logo" width="150"
                                    height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Nuvoco.webp" alt="Nuvoco Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Oriental_Insurance.webp"
                                    alt="Oriental Insurance Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/RADWIN.webp" alt="RADWIN Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Suzuki.webp" alt="Suzuki Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/University_of_johansberg.webp"
                                    alt="University of Johannesburg Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Zydus_Wellness_Product_Limited.webp"
                                    alt="Zydus Wellness Products Limited Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section alt" id="solutions">
            <div class="wrap">
                <div class="section-head reveal"><span class="eyebrow">Explore Motadata solutions</span>
                    <h2>Two solution areas. One conversation to get started.</h2>
                    <p>Motadata offers software to help IT teams monitor infrastructure, improve service management, and
                        manage operational issues through more connected workflows.</p>
                </div>
                <div class="solution-grid">
                    <article class="solution reveal">
                        <div><span class="n">01 / MONITORING</span>
                            <h3>IT Infrastructure Monitoring | ObserveOps</h3>
                            <p>Monitor network performance, servers, infrastructure, applications, and logs to gain
                                better visibility into your IT environment.</p><a class="btn btn-primary inline-cta"
                                href="#demo-form">Discuss ObserveOps ↗</a>
                        </div>
                        <div class="product-visual" aria-label="Illustrative infrastructure monitoring dashboard">
                            <div class="mini-dashboard">
                                <div class="mini-top"></div>
                                <div class="bars"><i></i><i></i><i></i><i></i></div>
                            </div>
                        </div>
                    </article>
                    <article class="solution reveal">
                        <div><span class="n">02 / SERVICE MANAGEMENT</span>
                            <h3>IT Service Management | ServiceOps</h3>
                            <p>Manage IT service requests, incidents, assets, and service workflows through an ITSM
                                platform designed for IT support teams.</p><a class="btn btn-primary inline-cta"
                                href="#demo-form">Discuss ServiceOps ↗</a>
                        </div>
                        <div class="product-visual" aria-label="Illustrative IT service workflow">
                            <div class="service-visual"><i>Service request received</i><i>Incident
                                    assigned</i><i>Workflow updated</i></div>
                        </div>
                    </article>
                </div>
                <div class="inline-cta"><a class="btn btn-primary" href="#demo-form">Request a product demo ↗</a></div>
            </div>
        </section>

        <section class="section" id="usps">
            <div class="wrap">
                <div class="section-head reveal"><span class="eyebrow">Why Motadata?</span>
                    <h2>Key product capabilities to explore.</h2>
                    <p>Discuss your environment and requirements with Easy Outdesk to understand which capabilities may
                        be relevant to your organisation.</p>
                </div>
                <div class="usp-grid">
                    <article class="usp reveal">
                        <div class="usp-num">01</div>
                        <div>
                            <h3>One Platform for Greater IT Visibility</h3>
                            <p>Monitor supported networks, infrastructure, applications, and logs through ObserveOps to
                                help IT teams identify performance issues and investigate operational problems.</p>
                        </div>
                    </article>
                    <article class="usp reveal">
                        <div class="usp-num">02</div>
                        <div>
                            <h3>Connect Monitoring with IT Service Management</h3>
                            <p>Where the relevant products and integrations are configured, monitoring alerts can
                                trigger service workflows. This helps teams connect technical issues with their
                                incident-handling processes.</p>
                        </div>
                    </article>
                    <article class="usp reveal">
                        <div class="usp-num">03</div>
                        <div>
                            <h3>AI-Driven Monitoring and Automation</h3>
                            <p>Explore capabilities such as anomaly detection, event correlation, and workflow
                                automation to support IT teams in identifying and investigating issues.</p>
                        </div>
                    </article>
                    <article class="usp reveal">
                        <div class="usp-num">04</div>
                        <div>
                            <h3>IT Service Workflows for Better Control</h3>
                            <p>Use ServiceOps to manage IT service requests, incidents, and assets through structured
                                service workflows that support day-to-day IT operations.</p>
                        </div>
                    </article>
                </div>
                <div class="inline-cta"><a class="btn btn-primary" href="#demo-form">Request a Motadata demo ↗</a></div>
            </div>
        </section>

        <section class="section alt" id="compare">
            <div class="wrap">
                <div class="section-head reveal"><span class="eyebrow">A smarter approach</span>
                    <h2>IT monitoring and service management, considered together.</h2>
                    <p>Compare how Motadata can help simplify IT operations, connect workflows, and give your team
                        greater visibility.</p>
                </div>
                <div class="compare-wrap reveal">
                    <table class="compare">
                        <thead>
                            <tr>
                                <th>What matters</th>
                                <th>Motadata</th>
                                <th>Separate tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IT operations</td>
                                <td>Connected monitoring and ITSM</td>
                                <td>Multiple platforms to manage</td>
                            </tr>
                            <tr>
                                <td>Integration</td>
                                <td>ObserveOps + ServiceOps integration</td>
                                <td>Integration requirements vary</td>
                            </tr>
                            <tr>
                                <td>Cost</td>
                                <td>Pricing tailored to your requirements</td>
                                <td>Costs may span multiple licences</td>
                            </tr>
                            <tr>
                                <td>Local access</td>
                                <td>Sole distributor in Malaysia</td>
                                <td>Depends on the vendor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="proof-note">Product fit, integration scope and pricing depend on your requirements and
                    configuration. Confirm details with Easy Outdesk.</p>
            </div>
        </section>

        <section class="final-cta" id="contact">
            <div class="wrap cta-inner">
                <div><span class="eyebrow">Start with a conversation</span>
                    <h2>Find the right Motadata solution for your IT environment.</h2>
                    <p>Looking for network monitoring software or an ITSM platform? Discuss your requirements with Easy
                        Outdesk, the sole distributor of Motadata in Malaysia, and explore the right solution for your
                        organisation.</p>
                </div><a class="btn btn-primary" href="#demo-form">Request a demo ↗</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="wrap">
            <div class="footer-top">
                <div class="footer-about"><a class="brand" href="#top"><img src="assets/images/motadata_eod.png" alt="Easy Outdesk and Motadata"></a>
                    <p>Explore Motadata network monitoring and IT service management solutions through Easy Outdesk, the
                        sole distributor of Motadata in Malaysia.</p>
                </div>
                <nav class="footer-links" aria-label="Footer navigation"><a href="#why">Why Motadata</a><a
                        href="#solutions">Solutions</a><a href="#usps">Key benefits</a><a href="#compare">Compare</a><a
                        href="#demo-form">Request a demo</a></nav>
            </div>
            <div class="footer-bottom"><span>© 2026 Easy Outdesk. All rights reserved.</span><span><a
                        href="privacy.php">Privacy Policy</a> · <a href="terms.php">Terms of Service</a></span></div>
        </div>
    </footer>
    <div class="mobile-cta"><a class="btn btn-primary" href="#demo-form">Request a Motadata demo ↗</a></div>

    <!-- SweetAlert2 is lazy-loaded only when an error dialog is needed -->
    <script>function loadSweetAlert(){if(window.Swal)return Promise.resolve(window.Swal);if(window.__sweetAlertPromise)return window.__sweetAlertPromise;window.__sweetAlertPromise=new Promise(function(resolve,reject){var script=document.createElement('script');script.src='https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.all.min.js';script.integrity='sha256-Tobw4i5HcbW4qsJMYTxmGAameLGvooTQPPatA9PiGgo=';script.crossOrigin='anonymous';script.onload=function(){resolve(window.Swal)};script.onerror=reject;document.head.appendChild(script)});return window.__sweetAlertPromise}</script>

    <script>
(() => {
    'use strict';

    // --------------------------------------------------
    // 1. MOBILE NAVIGATION
    // --------------------------------------------------
    const button = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    if (button && nav) {
        const closeNavigation = () => {
            nav.classList.remove('open');
            button.setAttribute('aria-expanded', 'false');
            button.setAttribute('aria-label', 'Open navigation');
            button.textContent = '☰';
        };

        button.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('open');
            button.setAttribute('aria-expanded', String(isOpen));
            button.setAttribute('aria-label', isOpen ? 'Close navigation' : 'Open navigation');
            button.textContent = isOpen ? '×' : '☰';
        });

        nav.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeNavigation));

        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape' && nav.classList.contains('open')) {
                closeNavigation();
                button.focus();
            }
        });
    }

    // --------------------------------------------------
    // 2. REVEAL ANIMATIONS
    // --------------------------------------------------
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealItems = document.querySelectorAll('.reveal');

    if (!reduceMotion && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -25px 0px' });

        revealItems.forEach((element, index) => {
            element.style.transitionDelay = `${(index % 4) * 60}ms`;
            revealObserver.observe(element);
        });
    } else {
        revealItems.forEach((element) => element.classList.add('visible'));
    }

    // --------------------------------------------------
    // 3. DEMO FORM -> BACKEND API (same flow as Odoo form)
    // --------------------------------------------------
    const demoForm = document.getElementById('demo-form');

    if (demoForm) {
        const submitButton = demoForm.querySelector('button[type="submit"]');
        const statusBox = document.getElementById('form-status');

        // ---- API CONFIG (confirm SUBMIT_URL with your backend team) ----
         const API_BASE = 'https://campaigns-backend.easyoutdesk.com/api';
        //const API_BASE = 'http://localhost/campaigns/api';
        const TOKEN_URL = API_BASE + '/odoo-lead/token';
        const SUBMIT_URL = API_BASE + '/motadata/submit';
        const THANK_YOU_URL = 'thank-you.php';

        const setStatus = (message, type) => {
            if (!statusBox) return;
            statusBox.textContent = message || '';
            statusBox.className = 'form-status' + (type ? ' ' + type : '');
        };
        const clearStatus = () => setStatus('', '');
        const getField = (name) => demoForm.querySelector('[name="' + name + '"]');
        const getValue = (name) => {
            const field = getField(name);
            return field ? field.value.trim() : '';
        };

        const clearFieldError = (field) => {
            if (!field) return;
            field.removeAttribute('aria-invalid');
            field.style.borderColor = '';
            field.style.boxShadow = '';
        };
        const showFieldError = (field, message) => {
            if (!field) return;
            field.setAttribute('aria-invalid', 'true');
            field.style.borderColor = '#c23f3f';
            field.style.boxShadow = '0 0 0 3px rgba(194,63,63,.10)';
            if (message) setStatus(message, 'error');
        };
        const clearAllErrors = () => {
            demoForm.querySelectorAll('input, select, textarea').forEach(clearFieldError);
        };

        const NAME_REGEX = /^\p{L}+(?:[\s'\-]\p{L}+)*$/u;
        const COMPANY_REGEX = /^\p{L}[\p{L}\p{N}\s&.,'\-]*$/u;
        const MESSAGE_REGEX = /^[\p{L}\p{N}\s.,!?'"\-\/():;&]+$/u;

        const validateForm = () => {
            clearAllErrors();
            clearStatus();
            let valid = true;

            const name = getValue('full_name');
            const email = getValue('business_email');
            const phone = getValue('phone');
            const company = getValue('company_name');
            const solution = getValue('solution');
            const size = getValue('company_size');
            const message = getValue('message');

            if (!name) {
                showFieldError(getField('full_name'), 'Please enter your name.'); valid = false;
            } else if (name.length < 2 || name.length > 100) {
                showFieldError(getField('full_name'), 'Name must be between 2 and 100 characters.'); valid = false;
            } else if (!NAME_REGEX.test(name)) {
                showFieldError(getField('full_name'), 'Name can only contain letters, spaces, hyphens and apostrophes.'); valid = false;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                showFieldError(getField('business_email'), 'Please enter a valid email address.'); valid = false;
            }

            if (!phone) {
                showFieldError(getField('phone'), 'Please enter your phone number.'); valid = false;
            } else if (!/^[0-9]{10,12}$/.test(phone.replace(/\D/g, ''))) {
                showFieldError(getField('phone'), 'Please enter a valid mobile number (10 to 12 digits).'); valid = false;
            }

            if (!company) {
                showFieldError(getField('company_name'), 'Please enter your company name.'); valid = false;
            } else if (company.length < 2 || company.length > 150) {
                showFieldError(getField('company_name'), 'Company name must be between 2 and 150 characters.'); valid = false;
            } else if (!COMPANY_REGEX.test(company)) {
                showFieldError(getField('company_name'), 'Company name can only contain letters and basic punctuation.'); valid = false;
            }

            if (!solution) {
                showFieldError(getField('solution'), 'Please select a solution.'); valid = false;
            }

            if (!size) {
                showFieldError(getField('company_size'), 'Please select your company size.'); valid = false;
            }

            

            return valid;
        };

        demoForm.querySelectorAll('input, select, textarea').forEach((field) => {
            field.addEventListener('input', () => {
                clearFieldError(field);
                if (statusBox && statusBox.classList.contains('error')) clearStatus();
            });
            field.addEventListener('change', () => clearFieldError(field));
        });

        const fetchApiToken = () =>
            fetch(TOKEN_URL, { method: 'GET' })
                .then((response) => {
                    if (!response.ok) throw new Error('Unable to obtain a request token.');
                    return response.json();
                })
                .then((data) => {
                    if (!data || !data.token) throw new Error('Unable to obtain a request token.');
                    return data.token;
                });

        const setLoading = (isLoading) => {
            if (!submitButton) return;
            submitButton.disabled = isLoading;
            submitButton.classList.toggle('form-loading', isLoading);
            if (isLoading) {
                submitButton.dataset.originalText = submitButton.innerHTML;
                submitButton.innerHTML = 'Sending ';
            } else if (submitButton.dataset.originalText) {
                submitButton.innerHTML = submitButton.dataset.originalText;
            }
        };
const showSwalSuccess = (text) =>
    loadSweetAlert()
        .then((Swal) => Swal.fire({
            icon: 'success',
            title: 'Request Submitted',
            text: text,
            confirmButtonText: 'OK',
            confirmButtonColor: '#ff7a1a'
        }))
        .catch(() => setStatus(text, 'success'));

        const showSwalError = (title, text) =>
            loadSweetAlert()
                .then((Swal) => Swal.fire({ icon: 'error', title: title, text: text, confirmButtonColor: '#ff7a1a' }))
                .catch(() => console.error(text));

        demoForm.addEventListener('submit', (event) => {
            event.preventDefault();
            clearStatus();
            if (!validateForm()) return;

            const formData = new URLSearchParams();
            formData.append('name', getValue('full_name'));
            formData.append('email', getValue('business_email').toLowerCase());
            formData.append('phone', getValue('phone').replace(/\D/g, ''));
            formData.append('company', getValue('company_name'));
            formData.append('solution', getValue('solution'));
            formData.append('company_size', getValue('company_size'));
            formData.append('message', getValue('message'));

            setLoading(true);

            fetchApiToken()
                .then((token) => fetch(SUBMIT_URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'X-Api-Token': token
                    },
                    body: formData.toString()
                }))
                .then((response) => response.text().then((text) => {
                    let data = {};
                    try {
                        data = text ? JSON.parse(text) : {};
                    } catch (jsonError) {
                        data = { success: false, message: 'Invalid response received from the server.' };
                    }
                    return { ok: response.ok, status: response.status, data: data };
                }))
                .then((result) => {
                    setLoading(false);
                    const data = result.data || {};

                    if (result.ok && data.success === true) {
    demoForm.reset();
    clearAllErrors();
    clearStatus();
    showSwalSuccess(data.message || 'Thank you! Your enquiry has been submitted successfully.');
    return;
}

                    // Map backend field names to this form's field names
                    const errors = data.errors || {};
                    const fieldMap = {
                        name: 'full_name',
                        full_name: 'full_name',
                        email: 'business_email',
                        work_email: 'business_email',
                        business_email: 'business_email',
                        phone_number: 'phone',
                        company: 'company_name',
                        company_name: 'company_name',
                        solution_type: 'solution',
                        company_size: 'company_size'
                    };

                    let firstError = '';
                    Object.keys(errors).forEach((key) => {
                        const field = getField(fieldMap[key] || key);
                        let errorMessage = errors[key];
                        if (typeof errorMessage !== 'string') errorMessage = String(errorMessage);
                        if (!firstError) firstError = errorMessage;
                        showFieldError(field, errorMessage);
                    });

                    const errorMessage = data.message || firstError || 'Please check the highlighted fields and try again.';
                    showSwalError('Something went wrong', errorMessage);
                })
                .catch((error) => {
                    console.error('Motadata Campaign API Error:', error);
                    setLoading(false);
                    showSwalError('Submission failed', 'We could not reach the server. Please check your connection and try again.');
                });
        });
    }

    // --------------------------------------------------
    // 4. CLIENT LOGO AUTO-SCROLL
    // --------------------------------------------------
    const clientsSlider = document.getElementById('clientsSlider');
    const clientsTrack = document.getElementById('clientsTrack');

    if (clientsSlider && clientsTrack) {
        const cloneClientLogos = () => {
            if (clientsTrack.dataset.cloned === 'true') return;

            Array.from(clientsTrack.children).forEach((item) => {
                const clone = item.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                clone.querySelectorAll('img').forEach((img) => {
                    img.setAttribute('alt', '');
                    img.setAttribute('loading', 'eager');
                });
                clientsTrack.appendChild(clone);
            });

            // Setting this attribute starts the CSS animation (translateX 0 -> -50%)
            clientsTrack.dataset.cloned = 'true';
        };

        if (reduceMotion) {
            clientsSlider.classList.add('reduced-motion');
        } else if ('IntersectionObserver' in window) {
            const sliderObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        cloneClientLogos();
                        observer.disconnect();
                    }
                });
            }, { rootMargin: '300px' });
            sliderObserver.observe(clientsSlider);
        } else {
            cloneClientLogos();
        }

        // Pause on hover / touch
        const toggleSliderPause = (paused) => clientsSlider.classList.toggle('p', paused);
        clientsSlider.addEventListener('mouseenter', () => toggleSliderPause(true));
        clientsSlider.addEventListener('mouseleave', () => toggleSliderPause(false));
        clientsSlider.addEventListener('touchstart', () => toggleSliderPause(true), { passive: true });
        clientsSlider.addEventListener('touchend', () => toggleSliderPause(false), { passive: true });
        clientsSlider.addEventListener('touchcancel', () => toggleSliderPause(false), { passive: true });
    }

    // --------------------------------------------------
    // 5. THIRD-PARTY SCRIPTS (loaded on first interaction, or 5s after load)
    // --------------------------------------------------
    const d = document, w = window;
    let tpDone = false;
    const evs = ['scroll', 'pointerdown', 'keydown', 'touchstart', 'mousemove'];

    const loadThirdParty = () => {
        if (tpDone) return;
        tpDone = true;
        evs.forEach((ev) => w.removeEventListener(ev, loadThirdParty));

        w.dataLayer = w.dataLayer || [];
        w.dataLayer.push({ 'gtm.start': Date.now(), event: 'gtm.js' });
        const g = d.createElement('script');
        g.async = true;
        g.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-W9GHVW4C';
        d.head.appendChild(g);

        w.clarity = w.clarity || function () { (w.clarity.q = w.clarity.q || []).push(arguments); };
        const c = d.createElement('script');
        c.async = true;
        c.src = 'https://www.clarity.ms/tag/yn63igb4ql';
        d.head.appendChild(c);
    };

    evs.forEach((ev) => w.addEventListener(ev, loadThirdParty, { passive: true, once: true }));
    const fallback = () => setTimeout(loadThirdParty, 5000);
    if (d.readyState === 'complete') fallback(); else w.addEventListener('load', fallback);
})();
    </script>
</body>

</html>