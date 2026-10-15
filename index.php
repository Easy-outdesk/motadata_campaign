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
            --blue-accent: #005fd6;
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

        /* Reduced Heading Sizes */
        h1, h2, h3 {
            font-family: Manrope, sans-serif;
            letter-spacing: -.04em;
            line-height: 1.15;
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
            padding: 13px 22px;
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
            height: 84px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px
        }

        /* Increased Brand Logo Size */
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo-img {
            height: 50px;
            width: auto;
            max-width: 250px;
            object-fit: contain;
            display: block;
            transition: transform .2s ease;
        }
        .brand-logo-img:hover {
            transform: scale(1.02);
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
            padding: 65px 0 55px
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
            grid-template-columns: 1.05fr .95fr;
            gap: 48px;
            align-items: center
        }

        .hero-copy { padding: 10px 0 }

        /* Reduced H1 font size */
        .hero h1 {
            font-size: clamp(2.35rem, 3.8vw, 3.2rem);
            letter-spacing: -.045em;
            line-height: 1.12;
            margin: 20px 0 18px
        }

        .hero h1 em {
            font-style: normal;
            color: transparent;
            background: linear-gradient(105deg, #ff7a1a, #ffd0a8 52%, #7cc9e8);
            background-clip: text;
            -webkit-background-clip: text
        }

        .hero-copy>p {
            max-width: 560px;
            color: #bdcce0;
            font-size: 1.02rem;
            line-height: 1.75
        }

        .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin: 24px 0 }

        /* Hero partner badges: channel check + logos */
        .hero-trust-box {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 26px;
            padding: 12px 18px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            width: max-content;
            max-width: 100%;
            backdrop-filter: blur(8px);
        }

        .hero-channel-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: .83rem;
            font-weight: 700;
            color: #e3edf8;
            white-space: nowrap;
        }

        .hero-channel-badge b {
            display: grid;
            place-items: center;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #ff7a1a24;
            color: #ffb16f;
            font-size: .75rem
        }

        .hero-divider {
            width: 1px;
            height: 26px;
            background: rgba(255, 255, 255, 0.18);
        }

        .hero-logos-wrap {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .hero-logos-wrap img {
            height: 30px;
            width: auto;
            object-fit: contain;
            filter: brightness(0) invert(1);
            opacity: .88;
            transition: opacity .2s, transform .2s;
        }

        .hero-logos-wrap img:hover {
            opacity: 1;
            transform: scale(1.06);
        }

        .trust-strip { background: #f5f7fa; border-bottom: 1px solid var(--line) }

        .trust-inner {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 24px 0
        }

        .trust-item { display: flex; align-items: center; gap: 12px }

        .trust-num {
            font: 800 1.45rem Manrope, sans-serif;
            letter-spacing: -.06em;
            color: var(--navy)
        }

        .trust-item span:last-child { font-size: .72rem; line-height: 1.4; color: var(--muted) }

        .section { padding: 50px 0 }

        .section.alt { background: var(--pale) }

        .section-head { max-width: 800px; margin-bottom: 38px }

        /* Reduced H2 font size across all sections */
        .section-head h2 {
            font-size: clamp(1.85rem, 2.5vw, 2.35rem);
            letter-spacing: -.045em;
            margin: 14px 0 10px;
        }

        .section-head p { max-width: 700px; color: var(--muted); line-height: 1.8 }

        .benefit-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px }

        .benefit {
            min-height: 240px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white;
            padding: 24px;
            transition: transform .3s var(--ease), box-shadow .3s, border-color .3s
        }

        .benefit:hover { transform: translateY(-5px); box-shadow: var(--shadow); border-color: #ffb77f }

        .benefit-icon {
            display: grid;
            place-items: center;
            width: 44px;
            height: 44px;
            border-radius: 13px;
            background: #fff0e4;
            color: #d85a0d;
            font-size: 1.2rem
        }

        .benefit h3 { font-size: 1.15rem; margin: 18px 0 8px }

        .benefit p { font-size: .85rem; color: var(--muted); line-height: 1.75; margin: 0 }

        .logo-panel {
            margin-top: 28px;
            border: 1px dashed #bdcbd9;
            border-radius: 20px;
            padding: 26px;
            text-align: center;
            background: #fff
        }

        .logo-panel strong { display: block; font: 800 .95rem Manrope, sans-serif }

        /* ---------- CLIENT LOGO AUTO-SCROLL ---------- */
        .clients-slider {
            position: relative;
            overflow: hidden;
            margin-top: 20px;
            -webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
            mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent)
        }

        .clients-track {
            display: flex;
            align-items: center;
            width: max-content
        }

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
            height: 54px;
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

        /* ---------- SOLUTIONS: IMPROVISED DESIGN WITH REAL PRODUCT VISUALS ---------- */
        .solution-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px }

        .solution {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 22px;
            align-items: center;
            min-height: 290px;
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 22px;
            background: white;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s, border-color .3s
        }

        .solution:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 48px rgba(7, 26, 53, 0.08);
            border-color: #bcd4ed;
        }

        .solution .n { font-size: .67rem; color: var(--orange); letter-spacing: .14em; font-weight: 900 }

        .solution h3 { font-size: 1.35rem; margin: 12px 0 10px; color: var(--navy) }

        .solution p { color: var(--muted); font-size: .86rem; line-height: 1.75; margin: 0 }

        /* Improvised Image Container */
        .product-visual-box {
            position: relative;
            min-height: 180px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            /* background: linear-gradient(145deg, #092140, #041427); */
            padding: 10px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 2px rgba(255, 255, 255, 0.15), 0 12px 28px rgba(0, 0, 0, 0.22);
        }

        .product-visual-box img {
  width: 100%;
    height: 100%;
    object-fit: fill;
    object-position: center top;
    border-radius: 10px;
    transition: transform .4s var(--ease);
    display: block;
        }

        .solution:hover .product-visual-box img {
            transform: scale(1.04);
        }

        .inline-cta { margin-top: 22px }

        .usp-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px }

        .usp {
            display: flex;
            gap: 16px;
            padding: 22px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white
        }

        .usp-num {
            flex: 0 0 40px;
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: #fff0e4;
            color: #d85a0d;
            font: 800 .8rem Manrope, sans-serif
        }

        .usp h3 { font-size: 1.08rem; margin: 2px 0 6px }

        .usp p { font-size: .84rem; color: var(--muted); line-height: 1.75; margin: 0 }

        /* ---------- IMPROVISED COMPARISON SECTION ---------- */
        .compare-section {
            padding: 0px 0 95px;
            background: #ffffff;
        }

        .compare-head {
            margin-bottom: 35px;
        }

        .compare-head h2 {
            font-size: clamp(2rem, 2.8vw, 2.7rem);
            letter-spacing: -.05em;
            margin: 6px 0 12px;
            color: var(--navy);
        }

        .compare-head h2 span {
            color: var(--blue-accent);
        }

        .compare-head .compare-eyebrow {
            font-size: 1.15rem;
            font-weight: 800;
            color: #071a35;
            margin: 0 0 6px;
            letter-spacing: -.02em;
        }

        .compare-head p {
            font-size: .95rem;
            color: var(--muted);
            margin: 0;
            max-width: 650px;
        }

        .compare-container {
            position: relative;
            border-radius: 24px;
            /* overflow-x: auto; */
            -webkit-overflow-scrolling: touch;
            padding: 4px;
        }

        .compare-grid {
            display: grid;
            grid-template-columns: 240px 1.25fr 1fr;
            min-width: 860px;
            background: #fff;
            border-radius: 22px;
            border: 1px solid #e2ebf5;
        }

        /* Column 1: Categories */
        .col-categories {
            background: #fbfdff;
            border-right: 1px solid #e8f0f8;
            border-radius: 22px 0 0 22px;
            display: flex;
            flex-direction: column;
        }

        .col-categories-header {
            height: 98px;
            padding: 24px 22px;
            display: flex;
            align-items: flex-end;
            font: 800 1.1rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.03em;
            border-bottom: 1px solid #e8f0f8;
        }

        .cat-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 26px 22px;
            border-bottom: 1px solid #eef4fb;
            min-height: 104px;
        }

        .cat-item:last-child {
            border-bottom: none;
        }

        .cat-icon-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #eaf3fe;
            display: grid;
            place-items: center;
            color: var(--blue-accent);
            flex-shrink: 0;
        }

        .cat-icon-badge svg {
            width: 22px;
            height: 22px;
            stroke-width: 2;
        }

        .cat-name {
            font: 800 .98rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.02em;
        }

        /* Column 2: Featured Motadata with Easy Outdesk */
        .col-featured {
            background: #f3f8fe;
            border-radius: 20px;
            border: 2px solid var(--blue-accent);
            box-shadow: 0 16px 45px rgba(0, 95, 214, 0.12);
            position: relative;
            z-index: 2;
            margin: -6px -2px -6px -2px;
            display: flex;
            flex-direction: column;
        }

        .col-featured-header {
            background: linear-gradient(135deg, #005fd6, #004bbb);
            color: #ffffff;
            padding: 18px 24px;
            border-radius: 17px 17px 0 0;
            text-align: center;
            height: 104px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .featured-brand-strip {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .feat-motadata {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font: 800 1.25rem Manrope, sans-serif;
            letter-spacing: -.04em;
            color: #ffffff;
        }

        .feat-motadata svg {
            width: 24px;
            height: 24px;
        }

        .feat-divider {
            width: 1.5px;
            height: 20px;
            background: rgba(255, 255, 255, 0.4);
        }

        .feat-eod {
            font: 700 1.05rem Manrope, sans-serif;
            letter-spacing: -.03em;
            color: #ffffff;
            opacity: .95;
        }

        .featured-sub {
            font-size: .84rem;
            color: rgba(255, 255, 255, 0.9);
            margin-top: 5px;
            font-weight: 500;
        }

        .feat-row {
            display: grid;
            grid-template-columns: 60px 28px 1fr;
            align-items: center;
            gap: 14px;
            padding: 18px 24px;
            border-bottom: 1px solid #dce8f7;
            min-height: 104px;
        }

        .feat-row:last-child {
            border-bottom: none;
        }

        .feat-illu {
            width: 56px;
            height: 52px;
            display: grid;
            place-items: center;
        }

        .feat-illu svg {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .feat-check {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: var(--blue-accent);
            color: #ffffff;
            display: grid;
            place-items: center;
            font-weight: 900;
            font-size: .78rem;
            box-shadow: 0 4px 10px rgba(0, 95, 214, 0.3);
            flex-shrink: 0;
        }

        .feat-content strong {
            display: block;
            font: 800 .94rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.02em;
            margin-bottom: 3px;
        }

        .feat-content span {
            display: block;
            font-size: .8rem;
            line-height: 1.45;
            color: #556982;
        }

        /* Column 3: Separate Tools */
        .col-separate {
            background: #fff8f6;
            border-radius: 0 22px 22px 0;
            display: flex;
            flex-direction: column;
            border-left: 1px solid #f9e2dc;
        }

        .col-separate-header {
            height: 98px;
            padding: 24px 24px;
            display: flex;
            align-items: flex-end;
            font: 800 1.1rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.03em;
            border-bottom: 1px solid #f9ded8;
        }

        .sep-row {
            display: grid;
            grid-template-columns: 28px 1fr 50px;
            align-items: center;
            gap: 14px;
            padding: 18px 24px;
            border-bottom: 1px solid #fce8e3;
            min-height: 104px;
        }

        .sep-row:last-child {
            border-bottom: none;
        }

        .sep-cross {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #f87171;
            color: #ffffff;
            display: grid;
            place-items: center;
            font-weight: 900;
            font-size: .72rem;
            flex-shrink: 0;
        }

        .sep-content strong {
            display: block;
            font: 800 .92rem Manrope, sans-serif;
            color: #10213a;
            letter-spacing: -.02em;
            margin-bottom: 3px;
        }

        .sep-content span {
            display: block;
            font-size: .8rem;
            line-height: 1.45;
            color: #748496;
        }

        .sep-illu {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            opacity: .65;
        }

        .sep-illu svg {
            width: 100%;
            height: 100%;
        }

        .proof-note { margin-top: 18px; font-size: .74rem; color: var(--muted) }

        /* ---------- FINAL CTA ---------- */
        .final-cta {
            padding: 72px 0;
            background: radial-gradient(ellipse at 90% 0%, #244f7c 0, transparent 35%), linear-gradient(115deg, #06152b, #0e3963);
            color: white
        }

        .cta-inner { display: flex; justify-content: space-between; align-items: center; gap: 40px }

        /* Reduced Final CTA H2 */
        .cta-inner h2 {
            max-width: 780px;
            font-size: clamp(2.1rem, 3.4vw, 2.9rem);
            letter-spacing: -.045em;
            margin: 12px 0
        }

        .cta-inner p { max-width: 680px; color: #b9cadd; line-height: 1.75; margin: 0 }

        /* ---------- FORM ---------- */
        .lead-form {
            padding: 28px;
            border: 1px solid var(--line);
            border-radius: 22px;
            background: white;
            color: var(--ink);
            box-shadow: 0 25px 70px #0000002e
        }

        .form-intro { margin-bottom: 20px }

        .form-intro h3 { font-size: 1.35rem; margin: 0 0 6px }

        .form-intro p { color: var(--muted); font-size: .85rem; margin: 0 }

        .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0 15px }

        .field { margin-bottom: 14px }

        .field label { display: block; margin-bottom: 5px; color: #253750; font-size: .76rem; font-weight: 800 }

        .field label span { color: #d94e15 }

        .field input, .field select, .field textarea {
            width: 100%;
            border: 1px solid #d9e2ed;
            border-radius: 11px;
            padding: 11px 13px;
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

        .field textarea { min-height: 95px; resize: vertical }

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

        .footer { background: #040e1e; color: #c0cede; padding: 45px 0 22px }

        .footer-top {
            display: flex;
            justify-content: space-between;
            gap: 35px;
            padding-bottom: 28px;
            border-bottom: 1px solid #ffffff1b
        }

        .footer-about { max-width: 430px }

        .footer-about p { color: #91a3ba; font-size: .8rem; margin: 12px 0 0 }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
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

        .reveal { opacity: 0; transform: translateY(20px); transition: opacity .65s var(--ease), transform .65s var(--ease) }

        .reveal.visible { opacity: 1; transform: none }

        @media(max-width:1000px) {
            .hero-grid { grid-template-columns: 1fr; gap: 16px }
            .hero-copy { padding-top: 20px }
            .benefit-grid { grid-template-columns: repeat(2, 1fr) }
            .trust-inner { grid-template-columns: repeat(2, 1fr) }
            .solution { grid-template-columns: 1fr .85fr }
            .section { padding: 75px 0 }
        }

        @media(max-width:700px) {
            .wrap { width: calc(100% - 32px) }
            .header-inner { height: 72px }
            .brand-logo-img { height: 38px; }
            .menu-toggle { display: block }
            .nav {
                display: none;
                position: absolute;
                top: 72px;
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
            .hero { padding: 38px 0 24px }
            .hero h1 { font-size: clamp(2.1rem, 9.5vw, 2.8rem) }
            .hero-copy>p { font-size: .94rem }
            .trust-inner { gap: 16px; padding: 18px 0 }
            .trust-num { font-size: 1.25rem }
            .trust-item span:last-child { font-size: .65rem }
            .section { padding: 65px 0 }
            .section-head h2 { font-size: clamp(1.75rem, 7.5vw, 2.2rem) }
            .benefit-grid, .solution-grid, .usp-grid { grid-template-columns: 1fr }
            .benefit { min-height: unset }
            .solution { grid-template-columns: 1fr; padding: 22px }
            .product-visual-box { min-height: 180px; order: -1 }
            .solution h3 { font-size: 1.25rem }
            .client-logo { width: 150px; padding: 0 14px }
            .client-logo img { height: 46px; max-width: 120px }
            .cta-inner { align-items: flex-start; flex-direction: column; gap: 20px }
            .final-cta { padding: 60px 0 }
            .cta-inner h2 { font-size: clamp(1.9rem, 8vw, 2.4rem) }
            .lead-form { padding: 20px }
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
            <a class="brand" href="#top" aria-label="Easy Outdesk and Motadata home">
                <!-- Increased logo size -->
                <img src="assets/images/motadata_eod.png" alt="Easy Outdesk and Motadata" class="brand-logo-img">
            </a>
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
                    
                    <!-- Clean channel badge + MDEC & MD Digital Logos -->
                    <div class="hero-trust-box">
                        <div class="hero-channel-badge">
                            <b>✓</b> Official local distribution channel
                        </div>
                        <div class="hero-divider"></div>
                        <div class="hero-logos-wrap">
                            <img src="assets/images/mdac.png" alt="MDEC Malaysia Digital Economy Corporation" title="MDEC">
                            <img src="assets/images/md_digital.png" alt="Malaysia Digital" title="Malaysia Digital">
                        </div>
                    </div>
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

        <!-- Solutions: Improvised with real Motadata product graphics -->
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
                                better visibility into your IT environment.</p>
                            <!-- <a class="btn btn-primary inline-cta" href="#demo-form">Discuss ObserveOps ↗</a> -->
                        </div>
                        <div class="product-visual-box" aria-label="ObserveOps Network Observability Dashboard">
                            <img src="assets/images/observeops_network_observability.webp"
                                alt="Motadata ObserveOps Network Observability" loading="lazy">
                        </div>
                    </article>

                    <article class="solution reveal">
                        <div><span class="n">02 / SERVICE MANAGEMENT</span>
                            <h3>IT Service Management | ServiceOps</h3>
                            <p>Manage IT service requests, incidents, assets, and service workflows through an ITSM
                                platform designed for IT support teams.</p>
                            <!-- <a class="btn btn-primary inline-cta" href="#demo-form">Discuss ServiceOps ↗</a> -->
                        </div>
                        <div class="product-visual-box" aria-label="ServiceOps ITSM & Patch Deployment">
                            <img src="assets/images/serviceops_patch_deployment.webp"
                                alt="Motadata ServiceOps ITSM & Workflow" loading="lazy">
                        </div>
                    </article>
                </div>
                <div class="inline-cta" style="margin-top:28px;"><a class="btn btn-primary" href="#demo-form">Request a product demo ↗</a></div>
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

        <!-- Improvised Comparison Section matching screenshot design -->
        <section class="compare-section" id="compare">
            <div class="wrap">
                <div class="compare-head reveal">
                    <h2>How We <span>Compare.</span></h2>
                    <p class="compare-eyebrow">A Smarter Approach</p>
                    <p>See how Motadata with Easy Outdesk delivers greater value compared to using separate tools.</p>
                </div>

                <div class="compare-container reveal">
                    <div class="compare-grid">
                        
                        <!-- Col 1: What matters -->
                        <div class="col-categories">
                            <div class="col-categories-header">
                                What matters
                            </div>
                            
                            <!-- IT Operations -->
                            <div class="cat-item">
                                <div class="cat-icon-badge" title="IT operations">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <rect x="2" y="3" width="20" height="14" rx="2" />
                                        <line x1="8" y1="21" x2="16" y2="21" />
                                        <line x1="12" y1="17" x2="12" y2="21" />
                                        <path d="m6 11 3-3 3 3 5-5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="cat-name">IT operations</div>
                            </div>

                            <!-- Integration -->
                            <div class="cat-item">
                                <div class="cat-icon-badge" title="Integration">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <circle cx="12" cy="12" r="3" />
                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="cat-name">Integration</div>
                            </div>

                            <!-- Cost -->
                            <div class="cat-item">
                                <div class="cat-icon-badge" title="Cost">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <ellipse cx="12" cy="5" rx="9" ry="3" />
                                        <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
                                        <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
                                    </svg>
                                </div>
                                <div class="cat-name">Cost</div>
                            </div>

                            <!-- Local access -->
                            <div class="cat-item">
                                <div class="cat-icon-badge" title="Local access">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <div class="cat-name">Local access</div>
                            </div>
                        </div>

                        <!-- Col 2: Featured Motadata with Easy Outdesk -->
                        <div class="col-featured">
                            <div class="col-featured-header">
                                <div class="featured-brand-strip">
                                    <span class="feat-motadata">
                                        <svg viewBox="0 0 26 26" fill="none">
                                            <circle cx="6" cy="16" r="2" fill="#ffffff" />
                                            <circle cx="9" cy="11" r="2.2" fill="#ffffff" />
                                            <circle cx="14" cy="8" r="2.5" fill="#ffffff" />
                                            <circle cx="19" cy="11" r="2.2" fill="#ffffff" />
                                            <circle cx="22" cy="16" r="2" fill="#ffffff" />
                                        </svg>
                                        motadata
                                    </span>
                                    <span class="feat-divider"></span>
                                    <span class="feat-eod">easy outdesk</span>
                                </div>
                                <div class="featured-sub">Motadata with Easy Outdesk</div>
                            </div>

                            <!-- Row 1: Operations -->
                            <div class="feat-row">
                                <div class="feat-illu">
                                    <!-- 3D Cloud + Screens SVG -->
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <path d="M38 18a8 8 0 0 0-15.3-3.2A6 6 0 0 0 14 20a6 6 0 0 0 2 11.7h22A7.3 7.3 0 0 0 38 18z" fill="#005fd6" fill-opacity=".9"/>
                                        <rect x="5" y="19" width="18" height="13" rx="2" fill="#2d87ff" stroke="#ffffff" stroke-width="1.2"/>
                                        <line x1="8" y1="23" x2="16" y2="23" stroke="#fff" stroke-width="1.2"/>
                                        <line x1="8" y1="26" x2="19" y2="26" stroke="#cbe2ff" stroke-width="1.2"/>
                                        <rect x="19" y="15" width="22" height="17" rx="3" fill="#004bbb" stroke="#ffffff" stroke-width="1.5"/>
                                        <rect x="23" y="19" width="4" height="7" fill="#60a5fa" rx="1"/>
                                        <rect x="29" y="21" width="4" height="5" fill="#93c5fd" rx="1"/>
                                        <rect x="35" y="17" width="3" height="9" fill="#38bdf8" rx="1"/>
                                    </svg>
                                </div>
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>Connected monitoring and ITSM</strong>
                                    <span>Single platform for infrastructure, applications and service management.</span>
                                </div>
                            </div>

                            <!-- Row 2: Integration -->
                            <div class="feat-row">
                                <div class="feat-illu">
                                    <!-- 3D Connected Puzzle Pieces SVG -->
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <path d="M12 14h8v2a3 3 0 0 0 6 0v-2h8v8h-2a3 3 0 0 0 0 6h2v8H12z" fill="#005fd6" rx="3"/>
                                        <path d="M26 12h14v8h2a3 3 0 0 1 0 6h-2v8H26v-2a3 3 0 0 0-6 0v2h-2V26h2a3 3 0 0 0 0-6h-2V12h8z" fill="#93c5fd" fill-opacity=".85"/>
                                    </svg>
                                </div>
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>ObserveOps + ServiceOps integration</strong>
                                    <span>Seamless integration for better visibility and faster resolution.</span>
                                </div>
                            </div>

                            <!-- Row 3: Cost -->
                            <div class="feat-row">
                                <div class="feat-illu">
                                    <!-- 3D Growth Trend & Coins SVG -->
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <ellipse cx="14" cy="34" rx="7" ry="2.8" fill="#93c5fd"/>
                                        <ellipse cx="14" cy="30" rx="7" ry="2.8" fill="#60a5fa"/>
                                        <ellipse cx="14" cy="26" rx="7" ry="2.8" fill="#2563eb"/>
                                        <rect x="24" y="22" width="6" height="15" rx="1.5" fill="#3b82f6"/>
                                        <rect x="33" y="15" width="6" height="22" rx="1.5" fill="#1d4ed8"/>
                                        <rect x="42" y="8" width="6" height="29" rx="1.5" fill="#005fd6"/>
                                        <path d="m20 18 8-7 9 4 11-10" stroke="#005fd6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>Pricing tailored to your requirements</strong>
                                    <span>Flexible plans for businesses of all sizes.</span>
                                </div>
                            </div>

                            <!-- Row 4: Local Access -->
                            <div class="feat-row">
                                <div class="feat-illu">
                                    <!-- 3D Location Marker on Map SVG -->
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <path d="m9 27 12-4 12 4 12-4v12l-12 4-12-4-12 4V27z" fill="#dbeafe" stroke="#93c5fd" stroke-width="1.2"/>
                                        <circle cx="27" cy="16" r="8" fill="#005fd6"/>
                                        <path d="M27 28c-4-4.5-8-8.5-8-12a8 8 0 1 1 16 0c0 3.5-4 7.5-8 12z" fill="#005fd6"/>
                                        <circle cx="27" cy="16" r="3" fill="#ffffff"/>
                                    </svg>
                                </div>
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>Sole distributor in Malaysia</strong>
                                    <span>Local support, implementation and training.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Col 3: Separate tools -->
                        <div class="col-separate">
                            <div class="col-separate-header">
                                Separate tools
                            </div>

                            <!-- Row 1: Separate Ops -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Multiple platforms to manage</strong>
                                    <span>Use different tools for monitoring and ITSM.</span>
                                </div>
                                <div class="sep-illu" title="Fragmented tools">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <rect x="4" y="6" width="22" height="15" rx="2" fill="#fff" />
                                        <rect x="14" y="16" width="22" height="15" rx="2" fill="#fff" />
                                        <line x1="8" y1="10" x2="16" y2="10" />
                                        <line x1="18" y1="20" x2="26" y2="20" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Row 2: Integration -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Integration requirements vary</strong>
                                    <span>Complex and time-consuming integrations.</span>
                                </div>
                                <div class="sep-illu" title="Mismatched integrations">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <circle cx="14" cy="18" r="8" stroke-dasharray="2 2" />
                                        <circle cx="30" cy="26" r="8" stroke-dasharray="2 2" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Row 3: Cost -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Costs may span multiple licences</strong>
                                    <span>Higher overall cost with separate tools.</span>
                                </div>
                                <div class="sep-illu" title="Multiple license costs">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <ellipse cx="14" cy="22" rx="8" ry="3" />
                                        <ellipse cx="30" cy="28" rx="8" ry="3" />
                                        <path d="M6 22v6c0 1.6 3.6 3 8 3s8-1.4 8-3v-6" />
                                        <path d="M22 28v6c0 1.6 3.6 3 8 3s8-1.4 8-3v-6" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Row 4: Support -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Depends on the vendor</strong>
                                    <span>Limited local support and longer response time.</span>
                                </div>
                                <div class="sep-illu" title="Remote/unresponsive vendor support">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.6">
                                        <path d="M12 24v-4a10 10 0 0 1 20 0v4" />
                                        <rect x="8" y="22" width="6" height="8" rx="2" />
                                        <rect x="30" y="22" width="6" height="8" rx="2" />
                                        <path d="M33 30v2a5 5 0 0 1-5 5h-4" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- <p class="proof-note">Product fit, integration scope and pricing depend on your requirements and
                    configuration. Confirm details with Easy Outdesk.</p> -->
            </div>
        </section>

        <!-- <section class="final-cta" id="contact">
            <div class="wrap cta-inner">
                <div><span class="eyebrow">Start with a conversation</span>
                    <h2>Find the right Motadata solution for your IT environment.</h2>
                    <p>Looking for network monitoring software or an ITSM platform? Discuss your requirements with Easy
                        Outdesk, the sole distributor of Motadata in Malaysia, and explore the right solution for your
                        organisation.</p>
                </div><a class="btn btn-primary" href="#demo-form">Request a demo ↗</a>
            </div>
        </section> -->
    </main>

    <footer class="footer">
        <div class="wrap">
            <div class="footer-top">
                <div class="footer-about">
                    <a class="brand" href="#top">
                        <img src="assets/images/motadata_eod.png" alt="Easy Outdesk and Motadata" style="height:44px; width:auto; max-width:220px; object-fit:contain;">
                    </a>
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
    // 3. DEMO FORM -> BACKEND API
    // --------------------------------------------------
    const demoForm = document.getElementById('demo-form');

    if (demoForm) {
        const submitButton = demoForm.querySelector('button[type="submit"]');
        const statusBox = document.getElementById('form-status');

        const API_BASE = 'https://campaigns-backend.easyoutdesk.com/api';
        const TOKEN_URL = API_BASE + '/odoo-lead/token';
        const SUBMIT_URL = API_BASE + '/motadata/submit';

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

        const toggleSliderPause = (paused) => clientsSlider.classList.toggle('p', paused);
        clientsSlider.addEventListener('mouseenter', () => toggleSliderPause(true));
        clientsSlider.addEventListener('mouseleave', () => toggleSliderPause(false));
        clientsSlider.addEventListener('touchstart', () => toggleSliderPause(true), { passive: true });
        clientsSlider.addEventListener('touchend', () => toggleSliderPause(false), { passive: true });
        clientsSlider.addEventListener('touchcancel', () => toggleSliderPause(false), { passive: true });
    }

    // --------------------------------------------------
    // 5. THIRD-PARTY SCRIPTS
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