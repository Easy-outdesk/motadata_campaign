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
    <!-- International telephone input CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/css/intlTelInput.css">
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
            --ease: cubic-bezier(.2, .75, .25, 1);
            --hdr: 108px
        }

        * {
            box-sizing: border-box
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 110px
        }

        body {
            margin: 0;
            color: var(--ink);
            font: 16px/1.65 "DM Sans", sans-serif;
            letter-spacing: -.01em;
            overflow-x: hidden
        }

        a {
            color: inherit;
            text-decoration: none
        }

        button,
        input,
        select,
        textarea {
            font: inherit
        }

        button,
        a,
        input,
        select,
        textarea {
            outline-offset: 4px
        }

        a:focus-visible,
        button:focus-visible,
        input:focus-visible,
        select:focus-visible,
        textarea:focus-visible {
            outline: 3px solid #79c9e8
        }

        .wrap {
            width: min(1220px, calc(100% - 48px));
            margin: auto
        }

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

        h1,
        h2,
        h3 {
            font-family: Manrope, sans-serif;
            letter-spacing: -.04em;
            line-height: 1.15;
            margin-top: 0
        }

        p {
            margin-top: 0
        }

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

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 30px #0002
        }

        .btn:disabled {
            opacity: .75;
            cursor: not-allowed;
            transform: none
        }

        .btn-primary {
            background: linear-gradient(110deg, #ff9a43, #ff7418);
            color: #071a35;
            box-shadow: 0 10px 25px #ff7a1a26
        }

        .btn-secondary {
            border-color: #d3dce8;
            background: #ffffffcc;
            color: var(--navy)
        }

        .btn-lg {
            padding: 17px 30px;
            font-size: 1rem
        }

        /* ---------- HEADER (floating pill) ---------- */
        .site-header {
            position: sticky;
            top: 0;
            z-index: 30;
            height: var(--hdr);
            padding: 16px 0
        }

        .header-inner {
            position: relative;
            height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 0 16px 0 28px;
            background: #fff;
            border: 1px solid #e6ebf2;
            border-radius: 999px;
            box-shadow: 0 10px 30px #071a3514
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .brand-logo-img {
            height: 46px;
            width: auto;
            max-width: 240px;
            object-fit: contain;
            display: block;
            transition: transform .2s ease
        }

        .brand-logo-img:hover {
            transform: scale(1.02)
        }

        .nav {
            flex: 1;
            display: flex;
            align-items: center;
            gap: 38px;
            color: var(--ink);
            font-size: .95rem;
            font-weight: 600
        }

        .nav a:first-child {
            margin-left: auto
        }

        .nav .btn {
            margin-left: auto;
            padding: 16px 26px;
            font-size: .95rem
        }

        .nav a:not(.btn):hover {
            color: var(--orange)
        }

        .menu-toggle {
            display: none;
            border: 1px solid #d9e2ed;
            border-radius: 10px;
            padding: 8px 12px;
            background: #fff;
            color: var(--navy);
            font-size: 1.1rem
        }

        /* ---------- HERO (light) ---------- */
        .hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            background: #fff;
            margin-top: calc(var(--hdr) * -1);
            padding: calc(var(--hdr) + 64px) 0 80px
        }

        .hero:before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: radial-gradient(ellipse 60% 55% at 10% 100%, #ffe2da 0, transparent 70%), radial-gradient(ellipse 45% 40% at 100% 0, #eaf2ff 0, transparent 70%), linear-gradient(#edf1f6 1px, transparent 1px) 0 0/48px 48px, linear-gradient(90deg, #edf1f6 1px, transparent 1px) 0 0/48px 48px
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            gap: 56px;
            align-items: center
        }

        .hero-copy {
            padding: 10px 0
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 9px 20px 9px 12px;
            border: 1.5px solid var(--orange);
            border-radius: 999px;
            background: #fff;
            color: var(--navy);
            font-size: .92rem;
            font-weight: 600
        }

        .hero-badge svg {
            width: 28px;
            height: 28px;
            flex-shrink: 0
        }

        .hero h1 {
            font-size: clamp(2.4rem, 4.2vw, 3.7rem);
            letter-spacing: -.045em;
            line-height: 1.1;
            margin: 28px 0 22px;
            color: var(--navy)
        }

        .hero h1 em {
            font-style: normal;
            color: var(--orange)
        }

        .hero-copy>p {
            max-width: 590px;
            color: #6b7b91;
            font-size: 1.05rem;
            line-height: 1.75
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin: 30px 0
        }

        .hero-partners {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 34px;
            padding-left: 14px
        }

        .hero-partners img {
            height: 52px;
            width: auto;
            object-fit: contain;
            display: block
        }

        .hero-partners .sep {
            width: 1px;
            height: 52px;
            background: #1d2b44
        }

        /* ---------- TRUST STRIP (dark stats band) ---------- */
        .trust-strip {
            background: linear-gradient(100deg, #082a4d, #001c36 45%, #082a4d);
            color: #fff
        }

        .trust-inner {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            align-items: stretch;
            padding: 34px 0
        }

        .trust-item {
            display: block;
            padding: 2px 0
        }

        .trust-item:nth-child(n+2),
        .trust-item:nth-child(n+3) {
            border-left: 1px solid #ffffff3d;
            padding-left: 40px
        }

        .trust-num {
            display: block;
            font: 800 2.8rem/1.15 Manrope, sans-serif;
            letter-spacing: -.04em;
            color: #fff
        }

        .trust-item span {
            display: block;
            font-size: 1.05rem;
            color: #e8f0f9
        }

        .section {
            padding: 50px 0
        }

        .section.alt {
            background: var(--pale)
        }

        .section-head {
            max-width: 800px;
            margin-bottom: 38px
        }

        .section-head h2 {
            font-size: clamp(1.85rem, 2.5vw, 2.35rem);
            letter-spacing: -.045em;
            margin: 14px 0 10px
        }

        .section-head p {
            max-width: 700px;
            color: var(--muted);
            line-height: 1.8
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px
        }

        .benefit {
            min-height: 240px;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: white;
            padding: 24px;
            transition: transform .3s var(--ease), box-shadow .3s, border-color .3s
        }

        .benefit:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: #ffb77f
        }

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

        .benefit h3 {
            font-size: 1.15rem;
            margin: 18px 0 8px
        }

        .benefit p {
            font-size: .85rem;
            color: var(--muted);
            line-height: 1.75;
            margin: 0
        }

        .logo-panel {
            margin-top: 28px;
            border: 1px dashed #bdcbd9;
            border-radius: 20px;
            padding: 26px;
            text-align: center;
            background: #fff
        }

        .logo-panel strong {
            display: block;
            font: 800 .95rem Manrope, sans-serif
        }

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

        .clients-slider.p .clients-track {
            animation-play-state: paused
        }

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

        .client-logo img:hover {
            filter: none;
            opacity: 1;
            transform: scale(1.06)
        }

        .clients-slider.reduced-motion {
            overflow-x: auto;
            -webkit-mask-image: none;
            mask-image: none
        }

        .clients-slider.reduced-motion .clients-track {
            animation: none !important
        }

        @keyframes clientsScroll {
            from {
                transform: translateX(0)
            }

            to {
                transform: translateX(-50%)
            }
        }

        /* ---------- SOLUTIONS (stacked colour cards) ---------- */
        .sol-head {
            max-width: 860px;
            margin: 0 auto 48px;
            text-align: center
        }

        .sol-head .eyebrow {
            justify-content: center
        }

        .sol-head h2 {
            font-size: clamp(2rem, 3.4vw, 2.9rem);
            letter-spacing: -.045em;
            color: var(--navy);
            margin: 16px 0 14px
        }

        .sol-head p {
            max-width: 700px;
            margin: 0 auto;
            color: var(--muted);
            line-height: 1.75;
            font-size: 1.05rem
        }

        .solution-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px
        }

        .solution {
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1.05fr;
            gap: 40px;
            align-items: center;
            min-height: 386px;
            padding: 44px 22px 44px 46px;
            border-radius: 26px;
            transition: transform .3s, box-shadow .3s
        }

        .solution:hover {
            transform: translateY(-4px);
            box-shadow: 0 22px 50px #071a3512
        }

        .solution.blue {
            background: #e0f0ff;
            --c1: #b8d8ff;
            --c2: #1a68d0
        }

        .solution.peach {
            background: #fff0df;
            --c1: #ffcd96;
            --c2: #ffb66e
        }

        .solution .n {
            font-size: .78rem;
            color: var(--orange);
            letter-spacing: .06em;
            font-weight: 800;
            text-transform: uppercase
        }

        .solution h3 {
            font-size: clamp(1.6rem, 2.4vw, 2.1rem);
            line-height: 1.1;
            margin: 14px 0;
            color: var(--navy)
        }

        .solution p {
            color: #667890;
            font-size: 1.05rem;
            line-height: 1.55;
            max-width: 470px;
            margin: 0 0 28px
        }

        .sol-visual {
            position: relative;
            align-self: stretch;
            display: flex;
            align-items: center;
            padding: 20px 0
        }

        /* .sol-visual:before {
            content: "";
            position: absolute;
            top: -64px;
            right: 70px;
            width: 190px;
            height: 190px;
            border-radius: 50%;
            background: var(--c1)
        } */
/* 
        .sol-visual:after {
            content: "";
            position: absolute;
            top: 8%;
            bottom: 8%;
            right: -22px;
            width: 45%;
            border-radius: 30px;
            background: var(--c2)
        } */

        .sol-visual img {
            position: relative;
            z-index: 1;
            display: block;
            width: 92%;
            height: auto;
            border-radius: 14px;
            box-shadow: 0 22px 50px #071a3530
        }

        .inline-cta {
            margin-top: 22px
        }

        .usp-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px
        }

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

        .usp h3 {
            font-size: 1.08rem;
            margin: 2px 0 6px
        }

        .usp p {
            font-size: .84rem;
            color: var(--muted);
            line-height: 1.75;
            margin: 0
        }

        /* ---------- COMPARISON SECTION ---------- */
        .compare-section {
            padding: 0 0 95px;
            background: #ffffff
        }

        .compare-head {
            margin-bottom: 35px
        }

        .compare-head h2 {
            font-size: clamp(2rem, 2.8vw, 2.7rem);
            letter-spacing: -.05em;
            margin: 6px 0 12px;
            color: var(--navy)
        }

        .compare-head h2 span {
            color: var(--blue-accent)
        }

        .compare-head .compare-eyebrow {
            font-size: 1.15rem;
            font-weight: 800;
            color: #071a35;
            margin: 0 0 6px;
            letter-spacing: -.02em
        }

        .compare-head p {
            font-size: .95rem;
            color: var(--muted);
            margin: 0;
            max-width: 650px
        }

        .compare-container {
            position: relative;
            border-radius: 24px;
            -webkit-overflow-scrolling: touch;
            padding: 4px
        }

        .compare-grid {
            display: grid;
            grid-template-columns: 240px 1.25fr 1fr;
            min-width: 860px;
            background: #fff;
            border-radius: 22px;
            border: 1px solid #e2ebf5
        }

        .col-categories {
            background: #fbfdff;
            border-right: 1px solid #e8f0f8;
            border-radius: 22px 0 0 22px;
            display: flex;
            flex-direction: column
        }

        .col-categories-header {
 height: 98px;
    padding: 24px 22px;
    display: flex;
    align-items: flex-end;
    font: 800 1.1rem Manrope, sans-serif;
    color: white;
    letter-spacing: -.03em;
    border-bottom: 1px solid #e8f0f8;
    background: #173A62;
        }

        .cat-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 26px 22px;
            border-bottom: 1px solid #eef4fb;
            min-height: 104px
        }

        .cat-item:last-child {
            border-bottom: none
        }

        .cat-icon-badge {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #eaf3fe;
            display: grid;
            place-items: center;
            color: var(--blue-accent);
            flex-shrink: 0
        }

        .cat-icon-badge svg {
            width: 22px;
            height: 22px;
            stroke-width: 2
        }

        .cat-name {
            font: 800 .98rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.02em
        }

        .col-featured {
    background: #f3f8fe;
    /* border-radius: 20px; */
    border: 1px solid #4E8DE4;
    box-shadow: 0 16px 45px rgba(0, 95, 214, 0.12);
    position: relative;
    z-index: 2;
    margin: 0px -2px;
    display: flex;
    flex-direction: column;
        }

        .col-featured-header {
            background: linear-gradient(135deg, #005fd6, #004bbb);
            color: #ffffff;
            padding: 18px 24px;
            /* border-radius: 17px 17px 0 0; */
            text-align: center;
            height: 96px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center
        }

        .featured-brand-strip {
            display: flex;
            align-items: center;
            gap: 12px;
            height:65px;
        }

        .feat-motadata {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font: 800 1.25rem Manrope, sans-serif;
            letter-spacing: -.04em;
            color: #ffffff
        }

        .feat-motadata svg {
            width: 24px;
            height: 24px
        }

        .feat-divider {
            width: 1.5px;
            height: 20px;
            background: rgba(255, 255, 255, 0.4)
        }

        .feat-eod {
            font: 700 1.05rem Manrope, sans-serif;
            letter-spacing: -.03em;
            color: #ffffff;
            opacity: .95
        }

        .featured-sub {
            font-size: .84rem;
            color: rgba(255, 255, 255, 0.9);
            margin-top: 5px;
            font-weight: 500
        }

        .feat-row {
            display: grid;
            grid-template-columns: 28px 1fr;
            align-items: center;
            gap: 14px;
            padding: 18px 24px;
            border-bottom: 1px solid #dce8f7;
            min-height: 104px
        }

        .feat-row:last-child {
            border-bottom: none
        }

        .feat-illu {
            width: 56px;
            height: 52px;
            display: grid;
            place-items: center
        }

        .feat-illu svg {
            width: 100%;
            height: 100%;
            object-fit: contain
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
            flex-shrink: 0
        }

        .feat-content strong {
            display: block;
            font: 800 .94rem Manrope, sans-serif;
            color: #071a35;
            letter-spacing: -.02em;
            margin-bottom: 3px
        }

        .feat-content span {
            display: block;
            font-size: .8rem;
            line-height: 1.45;
            color: #556982
        }

        .col-separate {
            background: #fff8f6;
            border-radius: 0 22px 22px 0;
            display: flex;
            flex-direction: column;
            border-left: 1px solid #f9e2dc
        }

        .col-separate-header {
            height: 98px;
            padding: 24px;
            display: flex;
            align-items: flex-end;
            font: 800 1.1rem Manrope, sans-serif;
            color: white;
            letter-spacing: -.03em;
            border-bottom: 1px solid #f9ded8;
            background-color:#173b62
        }

        .sep-row {
            display: grid;
            grid-template-columns: 28px 1fr 50px;
            align-items: center;
            gap: 14px;
            padding: 18px 24px;
            border-bottom: 1px solid #fce8e3;
            min-height: 104px
        }

        .sep-row:last-child {
            border-bottom: none
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
            flex-shrink: 0
        }

        .sep-content strong {
            display: block;
            font: 800 .92rem Manrope, sans-serif;
            color: #10213a;
            letter-spacing: -.02em;
            margin-bottom: 3px
        }

        .sep-content span {
            display: block;
            font-size: .8rem;
            line-height: 1.45;
            color: #748496
        }

        .sep-illu {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            opacity: .65
        }

        .sep-illu svg {
            width: 100%;
            height: 100%
        }

        .proof-note {
            margin-top: 18px;
            font-size: .74rem;
            color: var(--muted)
        }

        /* ---------- FINAL CTA ---------- */
        .final-cta {
            padding: 72px 0;
            background: radial-gradient(ellipse at 90% 0%, #244f7c 0, transparent 35%), linear-gradient(115deg, #06152b, #0e3963);
            color: white
        }

        .cta-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px
        }

        .cta-inner h2 {
            max-width: 780px;
            font-size: clamp(2.1rem, 3.4vw, 2.9rem);
            letter-spacing: -.045em;
            margin: 12px 0
        }

        .cta-inner p {
            max-width: 680px;
            color: #b9cadd;
            line-height: 1.75;
            margin: 0
        }

        /* ---------- FORM (dark card) ---------- */
        .lead-form {
            padding: 30px;
            border: 1px solid #ffffff1f;
            border-radius: 26px;
            background: linear-gradient(170deg, #06376a, #03203f 60%, #021428);
            color: #fff;
            box-shadow: 0 30px 70px #071a3540
        }

        .form-intro {
            margin-bottom: 20px
        }

        .form-intro h3 {
            font-size: 1.75rem;
            margin: 0 0 6px;
            color: #fff
        }

        .form-intro p {
            color: #bcd0e6;
            font-size: .92rem;
            margin: 0
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0 16px
        }

        .field {
            margin-bottom: 16px
        }

        .field label {
            display: block;
            margin-bottom: 7px;
            color: #fff;
            font-size: .88rem;
            font-weight: 700
        }

        .field label span {
            color: var(--orange)
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            border: 1px solid transparent;
            border-radius: 14px;
            padding: 14px 16px;
            background: #fff;
            color: var(--ink);
            font-size: .92rem;
            transition: border-color .2s, box-shadow .2s
        }

        .field input::placeholder,
        .field textarea::placeholder {
            color: #94a3b8
        }

        .field select {
            appearance: none;
            -webkit-appearance: none;
            padding-right: 40px;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='9' fill='none' stroke='%2362748a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='m1 1.5 6 6 6-6'/%3E%3C/svg%3E") no-repeat right 16px center
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            outline: 0;
            border-color: var(--orange);
            box-shadow: 0 0 0 3px #ff7a1a33
        }

        .field textarea {
            min-height: 100px;
            resize: vertical
        }

        .lead-form .btn-primary {
            padding: 17px 24px;
            font-size: 1.05rem
        }

        .form-status {
            font-size: .84rem;
            font-weight: 700;
            min-height: 22px;
            margin: 12px 0 0;
            color: #bcd0e6
        }

        .form-status.error {
            color: #ffb4b4
        }

        .form-status.success {
            color: #7ee2b0
        }

        .form-loading {
            pointer-events: none
        }

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

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        /* ---------- INTL TEL INPUT overrides ---------- */
        .iti {
            display: block;
            width: 100%
        }

        .iti input,
        .iti input[type=tel] {
            width: 100%
        }

        .iti__selected-dial-code {
            color: var(--ink);
            font-size: .92rem
        }

        .iti__country-list {
            color: var(--ink);
            text-align: left;
            border-radius: 12px;
            border: 1px solid #d9e2ed;
            box-shadow: 0 18px 40px #071a3524
        }

        .iti__country {
            font-size: .85rem
        }

        .iti__selected-country-primary {
            border-radius: 14px 0 0 14px
        }

             /* ---------- FOOTER ---------- */
        .footer {
            background: #040e1e;
            color: #c0cede;
            padding: 45px 0 22px;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            padding-bottom: 28px;
            border-bottom: 1px solid #ffffff1b;
        }

        .footer-about {
            max-width: 380px;
            flex: 0 1 380px;
        }

        .footer-about p {
            color: #91a3ba;
            font-size: .8rem;
            line-height: 1.6;
            margin: 12px 0 0;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
            font-size: .82rem;
            flex: 0 0 auto;
            margin-right: auto;   /* Pushes Address block fully into the red box area */
            padding-left: 20px;
        }

        .footer-links a:hover {
            color: var(--orange2);
        }

        .footer-contact {
            flex: 0 1 420px;      /* Keeps the content strictly inside the red box */
            max-width: 420px;
        }

        .footer-contact h4,
        .footer-contact .no-head-margin {
            color: #fff;
            font-size: .82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .06em;
            margin: 0 0 6px;
        }

        .footer-para {
            color: #91a3ba;
            font-size: .8rem;
            line-height: 1.6;
            margin: 0 0 16px;
        }

        .footer-para:last-child {
            margin-bottom: 0;
        }

        .footer-para a {
            color: #c0cede;
            transition: color .2s var(--ease);
        }

        .footer-para a:hover {
            color: var(--orange2);
        }

        .footer-contact-methods {
            display: flex;
            gap: 32px;
            align-items: flex-start;
        }

        .footer-contact-methods > div {
            flex: 1 1 auto;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            padding-top: 18px;
            color: #7f92aa;
            font-size: .72rem;
        }

        .footer-bottom a:hover {
            color: var(--orange2);
        }

        .mobile-cta {
            display: none
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity .65s var(--ease), transform .65s var(--ease)
        }

        .reveal.visible {
            opacity: 1;
            transform: none
        }

        @media(max-width:1000px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 36px
            }

            .hero-copy {
                padding-top: 20px
            }

            .benefit-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .nav {
                gap: 22px
            }

            .solution {
                grid-template-columns: 1fr 1fr;
                gap: 28px;
                padding-left: 32px
            }

            .section {
                padding: 75px 0
            }
        }

        @media(max-width:700px) {
            :root {
                --hdr: 88px
            }

            .wrap {
                width: calc(100% - 32px)
            }

            .site-header {
                padding: 12px 0
            }

            .header-inner {
                height: 64px;
                padding: 0 12px 0 20px
            }

            .brand-logo-img {
                height: 36px
            }

            .menu-toggle {
                display: block
            }

            .nav {
                display: none;
                position: absolute;
                top: calc(100% + 8px);
                left: 0;
                right: 0;
                align-items: stretch;
                flex-direction: column;
                gap: 0;
                padding: 12px;
                background: #fff;
                border: 1px solid #e6ebf2;
                border-radius: 18px;
                box-shadow: var(--shadow)
            }

            .nav.open {
                display: flex
            }

            .nav a:first-child,
            .nav .btn {
                margin-left: 0
            }

            .nav a:not(.btn) {
                padding: 12px 8px
            }

            .nav .btn {
                margin-top: 8px
            }

            .hero {
                padding: calc(var(--hdr) + 28px) 0 40px
            }

            .hero h1 {
                font-size: clamp(2.1rem, 9.5vw, 2.8rem);
                margin-top: 22px
            }

            .hero-copy>p {
                font-size: .96rem
            }

            .hero-badge {
                font-size: .82rem
            }

            .hero-partners {
                padding-left: 0
            }

            .hero-partners img,
            .hero-partners .sep {
                height: 40px
            }

            .trust-inner {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px 16px;
                padding: 26px 0
            }

            .trust-item:nth-child(n+3) {
                border-left: 0;
                padding-left: 0
            }

            .trust-item:nth-child(even) {
                border-left: 1px solid #ffffff3d;
                padding-left: 20px
            }

            .trust-num {
                font-size: 2rem
            }

            .trust-item span {
                font-size: .85rem
            }

            .section {
                padding: 65px 0
            }

            .section-head h2 {
                font-size: clamp(1.75rem, 7.5vw, 2.2rem)
            }

            .benefit-grid,
            .usp-grid {
                grid-template-columns: 1fr
            }

            .benefit {
                min-height: unset
            }

            .sol-head {
                margin-bottom: 32px
            }

            .solution {
                grid-template-columns: 1fr;
                gap: 28px;
                padding: 30px 22px 34px;
                min-height: unset
            }

            .solution p {
                font-size: .96rem
            }

            .sol-visual:before {
                width: 140px;
                height: 140px;
                top: -40px;
                right: 30px
            }

            .sol-visual:after {
                width: 40%;
                right: -22px
            }

            .client-logo {
                width: 150px;
                padding: 0 14px
            }

            .client-logo img {
                height: 46px;
                max-width: 120px
            }

            .cta-inner {
                align-items: flex-start;
                flex-direction: column;
                gap: 20px
            }

            .final-cta {
                padding: 60px 0
            }

            .cta-inner h2 {
                font-size: clamp(1.9rem, 8vw, 2.4rem)
            }

            .lead-form {
                padding: 22px 18px
            }

            .form-grid {
                grid-template-columns: 1fr
            }

                      .footer-top {
                flex-direction: column;
                gap: 28px;
            }

            .footer-links {
                gap: 15px;
                padding-left: 0;
                margin-right: 0;
            }

            .footer-contact {
                max-width: 100%;
            }

            .footer-contact-methods {
                gap: 24px;
            }

            .footer-bottom {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            .footer-bottom span {
                display: block;
            }

            .mobile-cta {
                display: block;
                position: fixed;
                z-index: 25;
                bottom: 10px;
                left: 12px;
                right: 12px
            }

            .mobile-cta .btn {
                width: 100%;
                box-shadow: 0 10px 30px #0004
            }

            body {
                padding-bottom: 68px
            }
        }

        @media(prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }

            *,
            *:before,
            *:after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important
            }

            .clients-track[data-cloned="true"] {
                animation: none !important
            }

            .reveal {
                opacity: 1;
                transform: none
            }
        }

        /* =====================================================================
   RESPONSIVE — paste this at the END of your <style> block, just before
   the @media(prefers-reduced-motion) block. Delete your two existing
   @media(max-width:1000px) and @media(max-width:700px) blocks first.
   No HTML changes needed.
   ===================================================================== */

        /* ---------- Large screens ---------- */
        @media(min-width:1600px) {
            .wrap {
                width: min(1360px, calc(100% - 96px))
            }

            .hero h1 {
                font-size: 4rem
            }
        }

        /* ---------- Small laptops (1025–1180px) ---------- */
        @media(min-width:1025px) and (max-width:1180px) {
            .hero-grid {
                gap: 36px
            }

            .lead-form {
                padding: 26px
            }

            .form-grid {
                grid-template-columns: 1fr
            }

            .nav {
                gap: 26px
            }

            .solution {
                gap: 28px;
                padding-left: 36px
            }
        }

        /* ---------- Tablet & below (≤1024px) ---------- */
        @media(max-width:1024px) {
            .hero {
                padding: calc(var(--hdr) + 40px) 0 56px
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 40px
            }

            .hero-copy {
                padding: 0
            }

            .hero-copy>p {
                max-width: 680px
            }

            .hero h1 {
                font-size: clamp(2.2rem, 6vw, 3.1rem)
            }

            .trust-inner {
                padding: 28px 0
            }

            .trust-num {
                font-size: 2.3rem
            }

            .trust-item:nth-child(n+2) {
                padding-left: 28px
            }

            .trust-item span {
                font-size: .95rem
            }

            .section {
                padding: 56px 0
            }

            .benefit-grid {
                grid-template-columns: repeat(2, 1fr)
            }

            .solution {
                grid-template-columns: 1fr 1fr;
                gap: 28px;
                min-height: 0;
                padding: 36px 20px 36px 32px
            }

            .solution p {
                font-size: 1rem
            }

            .sol-visual:before {
                width: 150px;
                height: 150px;
                top: -50px;
                right: 40px
            }

            .compare-section {
                padding-bottom: 64px
            }
        }

        /* ---------- Collapse navigation (≤900px) ---------- */
        @media(max-width:900px) {
            .menu-toggle {
                display: block
            }

            .nav {
                display: none;
                position: absolute;
                top: calc(100% + 8px);
                left: 0;
                right: 0;
                flex: none;
                align-items: stretch;
                flex-direction: column;
                gap: 0;
                padding: 12px;
                background: #fff;
                border: 1px solid #e6ebf2;
                border-radius: 20px;
                box-shadow: var(--shadow)
            }

            .nav.open {
                display: flex
            }

            .nav a:first-child,
            .nav .btn {
                margin-left: 0
            }

            .nav a:not(.btn) {
                padding: 13px 10px;
                border-radius: 10px
            }

            .nav a:not(.btn):hover {
                background: #f4f7fb
            }

            .nav .btn {
                margin-top: 8px
            }
        }

        /* ---------- Comparison table: stack into two cards (≤860px) ---------- */
        @media(max-width:860px) {
            .compare-section .wrap {
                padding-top: 24px !important
            }

            .compare-container {
                padding: 0
            }

            .compare-grid {
                min-width: 0;
                grid-template-columns: 1fr;
                gap: 20px;
                background: none;
                border: 0;
                border-radius: 0
            }

            .col-categories {
                display: none
            }

            .col-featured {
                margin: 0
            }

            .col-featured-header {
                height: auto;
                padding: 22px 20px
            }

            .feat-row,
            .sep-row {
                min-height: 0;
                padding: 18px 20px
            }

            .col-separate {
                border: 1px solid #f9e2dc;
                border-radius: 22px
            }

            .col-separate-header {
                height: auto;
                align-items: center;
                padding: 20px 20px 16px
            }
        }

        /* ---------- Solutions: stack cards (≤820px) ---------- */
        @media(max-width:820px) {
            .solution {
                grid-template-columns: 1fr;
                gap: 30px;
                padding: 34px 24px 36px
            }

            .solution>div:first-child {
                position: relative;
                z-index: 2
            }

            .solution p {
                max-width: none
            }

            .sol-visual {
                padding: 14px 0 0
            }

            .sol-visual img {
                width: 94%
            }

            .sol-visual:before {
                width: 120px;
                height: 120px;
                top: -6px;
                right: 24px
            }

            .sol-visual:after {
                top: 12%;
                bottom: 0;
                width: 42%;
                right: -24px
            }
        }

        /* ---------- Mobile (≤700px) ---------- */
        @media(max-width:700px) {
            :root {
                --hdr: 88px
            }

            .wrap {
                width: calc(100% - 32px)
            }

            .site-header {
                padding: 12px 0
            }

            .header-inner {
                height: 64px;
                padding: 0 10px 0 18px
            }

            .brand-logo-img {
                height: 36px;
                max-width: 170px
            }

            .hero {
                padding: calc(var(--hdr) + 24px) 0 40px
            }

            .hero-grid {
                gap: 32px
            }

            .hero-badge {
                font-size: .8rem;
                padding: 7px 14px 7px 9px;
                gap: 8px
            }

            .hero-badge svg {
                width: 24px;
                height: 24px
            }

            .hero h1 {
                font-size: clamp(2rem, 9vw, 2.6rem);
                margin: 20px 0 16px
            }

            .hero-copy>p {
                font-size: .96rem;
                line-height: 1.7
            }

            .hero-actions {
                gap: 10px;
                margin: 22px 0
            }

            .hero-actions .btn {
                flex: 1 1 100%
            }

            .btn-lg {
                padding: 15px 24px;
                font-size: .95rem
            }

            .hero-partners {
                margin-top: 24px;
                padding-left: 0;
                gap: 14px
            }

            .hero-partners img,
            .hero-partners .sep {
                height: 38px
            }

            .lead-form {
                padding: 22px 18px;
                border-radius: 22px
            }

            .form-intro h3 {
                font-size: 1.45rem
            }

            .form-grid {
                grid-template-columns: 1fr
            }

            .field {
                margin-bottom: 14px
            }

            .field input,
            .field select,
            .field textarea {
                font-size: 16px
            }

            /* stops iOS zoom on focus */

            .trust-inner {
                grid-template-columns: repeat(2, 1fr);
                gap: 22px 14px;
                padding: 24px 0
            }

            .trust-item:nth-child(n+2) {
                border-left: 0;
                padding-left: 0
            }

            .trust-item:nth-child(even) {
                border-left: 1px solid #ffffff3d;
                padding-left: 18px
            }

            .trust-num {
                font-size: 2rem
            }

            .trust-item span {
                font-size: .85rem
            }

            .section {
                padding: 44px 0
            }

            .section-head {
                margin-bottom: 28px
            }

            .section-head h2 {
                font-size: clamp(1.65rem, 7vw, 2.1rem)
            }

            .benefit-grid,
            .usp-grid {
                grid-template-columns: 1fr
            }

            .benefit {
                min-height: 0;
                padding: 20px
            }

            .logo-panel {
                padding: 20px 12px
            }

            .client-logo {
                width: 140px;
                padding: 0 12px
            }

            .client-logo img {
                height: 44px;
                max-width: 110px
            }

            .sol-head {
                margin-bottom: 28px
            }

            .sol-head h2 {
                font-size: clamp(1.65rem, 7.4vw, 2.1rem)
            }

            .sol-head p {
                font-size: .96rem
            }

            .solution {
                padding: 28px 18px 30px;
                border-radius: 22px
            }

            .solution h3 {
                font-size: 1.45rem
            }

            .solution p {
                font-size: .95rem;
                margin-bottom: 22px
            }

            .solution .btn {
                width: 100%
            }

            .usp {
                padding: 18px
            }

            .inline-cta .btn {
                width: 100%
            }

            .compare-head h2 {
                font-size: clamp(1.7rem, 7.5vw, 2.2rem)
            }

            .compare-section {
                padding-bottom: 48px
            }

            .cta-inner {
                align-items: flex-start;
                flex-direction: column;
                gap: 20px
            }

            .final-cta {
                padding: 56px 0
            }

            .cta-inner h2 {
                font-size: clamp(1.9rem, 8vw, 2.4rem)
            }

            .footer {
                padding: 36px 0 18px
            }

            .footer-top {
                flex-direction: column;
                gap: 22px
            }

            .footer-links {
                gap: 12px 18px
            }

            .footer-bottom {
                display: block
            }

            .footer-bottom span {
                display: block;
                margin-top: 8px
            }

            .mobile-cta {
                display: block;
                position: fixed;
                z-index: 25;
                bottom: 10px;
                left: 12px;
                right: 12px
            }

            .mobile-cta .btn {
                width: 100%;
                box-shadow: 0 10px 30px #0004
            }

            body {
                padding-bottom: 68px
            }
        }

        /* ---------- Small phones (≤480px) ---------- */
        @media(max-width:480px) {
            .brand-logo-img {
                height: 32px;
                max-width: 150px
            }

            .hero-badge {
                font-size: .74rem
            }

            .trust-num {
                font-size: 1.75rem
            }

            .trust-item span {
                font-size: .8rem
            }

            .feat-row {
                gap: 12px;
                padding: 16px
            }

            .sep-row {
                grid-template-columns: 28px 1fr;
                padding: 16px
            }

            .sep-illu {
                display: none
            }
        }

        .no-head-margin {
            margin: unset;
        }
        .footer-para
        {
            font-size: 0.8rem;
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
                <img src="assets/images/mainlogo.webp" alt="Easy Outdesk and Motadata" class="brand-logo-img">
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav"
                aria-label="Open navigation">☰</button>
            <nav class="nav" id="primary-nav" aria-label="Main navigation"><a href="#why">Why Motadata</a><a
                    href="#solutions">Solutions</a><a href="#usps">Key Benefits</a><a href="#compare">Compare</a><a
                    class="btn btn-primary" href="#demo-form">Request a demo <span>→</span></a></nav>
        </div>
    </header>
    <main id="top-main">
        <section class="hero">
            <div class="wrap hero-grid">
                <div class="hero-copy">
                    <span class="hero-badge">
                        <!-- Malaysia flag (inline SVG, circular) -->
                        <svg viewBox="4 0 28 28" aria-hidden="true">
                            <defs>
                                <clipPath id="flagClip">
                                    <circle cx="18" cy="14" r="14" />
                                </clipPath>
                                <pattern id="myStripes" width="56" height="4" patternUnits="userSpaceOnUse">
                                    <rect width="56" height="2" fill="#cc0001" />
                                    <rect y="2" width="56" height="2" fill="#fff" />
                                </pattern>
                            </defs>
                            <g clip-path="url(#flagClip)">
                                <rect width="56" height="28" fill="url(#myStripes)" />
                                <rect width="28" height="16" fill="#010066" />
                                <circle cx="10" cy="8" r="5" fill="#ffcc00" />
                                <circle cx="11.6" cy="8" r="4" fill="#010066" />
                                <polygon fill="#ffcc00"
                                    points="17,5 17.71,7.03 19.85,7.07 18.14,8.37 18.76,10.43 17,9.2 15.24,10.43 15.86,8.37 14.15,7.07 16.29,7.03" />
                            </g>
                        </svg>
                        Certified Sole Distributor in Malaysia
                    </span>
                    <h1>Network monitoring and <em>ITSM</em> solutions in Malaysia.</h1>
                    <p>Discover Motadata's IT monitoring and ITSM solutions through Easy Outdesk, the sole distributor
                        of Motadata in Malaysia. Explore network monitoring, IT infrastructure visibility, and IT
                        service management solutions tailored to your organisation's requirements.</p>
                    <div class="hero-actions"><a class="btn btn-primary btn-lg" href="#demo-form">Request a product demo
                            <span>→</span></a><a class="btn btn-secondary btn-lg" href="#solutions">Explore solutions
                            <span>→</span></a>
                    </div>

                    <div class="hero-partners">
                        <img src="assets/images/mdac.png" alt="MDEC Malaysia Digital Economy Corporation" title="MDEC">
                        <span class="sep" aria-hidden="true"></span>
                        <img src="assets/images/md_digital.png" alt="Malaysia Digital" title="Malaysia Digital">
                    </div>
                </div>

                <form class="lead-form reveal" id="demo-form" novalidate>
                    <div class="form-intro">
                        <h3>Request a Product Demo</h3>
                        <p>Fields marked with * are required.</p>
                    </div>
                    <div class="form-grid">
                        <div class="field"><label for="full-name">Full name <span>*</span></label><input id="full-name"
                                name="full_name" type="text" autocomplete="name" required placeholder="Your full name">
                        </div>
                        <div class="field"><label for="business-email">Business email <span>*</span></label><input
                                id="business-email" name="business_email" type="email" autocomplete="email" required
                                placeholder="you@company.com"></div>
                        <div class="field"><label for="company-name">Company name <span>*</span></label><input
                                id="company-name" name="company_name" type="text" autocomplete="organization" required
                                placeholder="Your company"></div>
                        <div class="field"><label for="phone">Phone number <span>*</span></label><input id="phone"
                                name="phone" type="tel" autocomplete="tel" required placeholder="12 345 6789">
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
                <div class="trust-item"><strong class="trust-num">1000+</strong><span>Enterprise customers</span></div>
                <div class="trust-item"><strong class="trust-num">50+</strong><span>Countries</span></div>
                <div class="trust-item"><strong class="trust-num">15+</strong><span>Years of experience</span></div>
                <div class="trust-item"><strong class="trust-num">99%</strong><span>Customer satisfaction</span></div>
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
                                    alt="Central Bank of India Logo" width="150" height="70" loading="lazy"
                                    decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Crisil.webp" alt="CRISIL Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/DP_World.webp" alt="DP World Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/emirats_healthcare.webp"
                                    alt="Emirates Healthcare Logo" width="150" height="70" loading="lazy"
                                    decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/HDFC_Life.webp"
                                    alt="HDFC Life Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Indian_Oil.webp"
                                    alt="Indian Oil Logo" width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/kotak_securities.webp"
                                    alt="Kotak Securities Logo" width="150" height="70" loading="lazy" decoding="async">
                            </div>
                            <div class="client-logo"><img src="assets/images/clients/LIC.webp" alt="LIC Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/MB_Bank.webp" alt="MB Bank Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/NTPC.webp" alt="NTPC Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Nuvoco.webp" alt="Nuvoco Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Oriental_Insurance.webp"
                                    alt="Oriental Insurance Logo" width="150" height="70" loading="lazy"
                                    decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/RADWIN.webp" alt="RADWIN Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/Suzuki.webp" alt="Suzuki Logo"
                                    width="150" height="70" loading="lazy" decoding="async"></div>
                            <div class="client-logo"><img src="assets/images/clients/University_of_johansberg.webp"
                                    alt="University of Johannesburg Logo" width="150" height="70" loading="lazy"
                                    decoding="async"></div>
                            <div class="client-logo"><img
                                    src="assets/images/clients/Zydus_Wellness_Product_Limited.webp"
                                    alt="Zydus Wellness Products Limited Logo" width="150" height="70" loading="lazy"
                                    decoding="async"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions: stacked colour cards with existing product dashboards -->
        <section class="section" id="solutions">
            <div class="wrap">
                <div class="sol-head reveal"><span class="eyebrow">Explore Motadata solutions</span>
                    <h2>Two solution areas. One conversation to get started.</h2>
                    <p>Motadata offers software to help IT teams monitor infrastructure, improve service management, and
                        manage operational issues through more connected workflows.</p>
                </div>
                <div class="solution-grid">
                    <article class="solution blue reveal">
                        <div><span class="n">01 / Monitoring</span>
                            <h3>IT Infrastructure Monitoring<br>ObserveOps</h3>
                            <p>Monitor network performance, servers, infrastructure, applications, and logs to gain
                                faster visibility into your IT environment.</p>
                            <a class="btn btn-primary btn-lg" href="#demo-form">Discuss ObserveOps <span>→</span></a>
                        </div>
                        <div class="sol-visual" aria-label="ObserveOps Network Observability Dashboard">
                            <img src="assets/images/observeops_network_observability.webp"
                                alt="Motadata ObserveOps Network Observability" loading="lazy">
                        </div>
                    </article>

                    <article class="solution peach reveal">
                        <div><span class="n">02 / Service Management</span>
                            <h3>IT Service Management<br>ServiceOps</h3>
                            <p>Manage IT service requests, incidents, assets, and service workflows through an ITSM
                                platform designed for IT and business teams.</p>
                            <a class="btn btn-primary btn-lg" href="#demo-form">Discuss ServiceOps <span>→</span></a>
                        </div>
                        <div class="sol-visual" aria-label="ServiceOps ITSM & Patch Deployment">
                            <img src="assets/images/serviceops_patch_deployment.webp"
                                alt="Motadata ServiceOps ITSM & Workflow" loading="lazy">
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section alt" id="usps">
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

        <!-- Comparison Section -->
        <section class="compare-section" id="compare">
            <div class="wrap" style="padding-top:60px">
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
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 1 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"
                                            stroke-linecap="round" stroke-linejoin="round" />
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
      <svg width="327" height="88" viewBox="0 0 327 88" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2934_57463)">
<path d="M135.873 75.0043H30.1034C13.4716 75.0043 0 62.3831 0 46.8353V42.2472C0 26.6841 13.4716 14.0781 30.1034 14.0781H135.873C152.504 14.0781 165.976 26.6841 165.976 42.2472V46.8353C165.976 62.3984 152.488 75.0043 135.873 75.0043Z" stroke="url(#paint0_linear_2934_57463)" stroke-width="0.4" stroke-miterlimit="10"/>
<path d="M182.494 14.0781H288.263C304.895 14.0781 318.367 26.6841 318.367 42.2472V46.8353C318.367 62.3984 304.895 75.0043 288.263 75.0043H182.494C165.862 75.0043 152.391 62.3984 152.391 46.8353V42.2472C152.391 26.6841 165.862 14.0781 182.494 14.0781Z" stroke="url(#paint1_linear_2934_57463)" stroke-width="0.4" stroke-miterlimit="10"/>
<path d="M177.361 53.9685C171.741 63.1752 159.166 66.3915 149.327 61.1479C139.488 55.9043 136.051 44.1215 141.654 34.9147C147.274 25.708 159.85 22.4917 169.689 27.7353C179.528 32.9941 182.965 44.7617 177.361 53.9685Z" fill="url(#paint2_linear_2934_57463)"/>
<path d="M159.507 25.8611C170.454 25.8611 179.365 34.199 179.365 44.4423C179.365 54.6856 170.454 63.0235 159.507 63.0235C148.561 63.0235 139.65 54.6856 139.65 44.4423C139.65 34.199 148.561 25.8611 159.507 25.8611ZM159.507 24.5654C147.779 24.5654 138.266 33.4673 138.266 44.4423C138.266 55.4172 147.779 64.3191 159.507 64.3191C171.236 64.3191 180.749 55.4172 180.749 44.4423C180.749 33.4673 171.236 24.5654 159.507 24.5654Z" fill="white"/>
<path d="M186.094 36.8509C190.867 34.4578 195.623 32.0494 200.38 29.6562C200.429 31.5007 200.429 33.3603 200.413 35.2047C197.529 36.6071 194.63 37.9789 191.746 39.366C191.746 42.3232 191.746 45.2803 191.714 48.2222C194.597 49.6246 197.464 51.0726 200.364 52.4445C200.445 54.2889 200.396 56.1181 200.364 57.9625C195.574 55.5236 190.785 53.0695 185.996 50.6154C186.029 46.012 186.061 41.4238 186.094 36.8205V36.8509Z" fill="white"/>
<path d="M193.75 39.3506C195.965 40.5243 198.181 41.698 200.412 42.8717V48.4659C198.23 47.3074 195.933 46.1185 193.766 44.9295V39.3506H193.75Z" fill="white"/>
<path d="M200.38 29.6559C204.827 32.049 209.274 34.4269 213.721 36.8201C213.753 38.2834 213.802 39.7467 213.835 41.21C209.323 43.6337 204.908 46.0116 200.396 48.4505V42.8563C202.742 41.5759 205.087 40.3107 207.433 39.0303C205.087 37.7499 202.742 36.4847 200.396 35.1891C200.396 33.3447 200.396 31.485 200.363 29.6406L200.38 29.6559Z" fill="white"/>
<path d="M200.38 52.4744C204.794 49.9898 209.29 47.6424 213.737 45.2188V50.7215C209.29 53.1451 204.81 55.5535 200.363 57.9924C200.428 56.148 200.461 54.3188 200.396 52.4744H200.38Z" fill="white"/>
<path d="M200.395 49.5478C204.825 47.1394 209.321 44.8225 213.752 42.4141L213.801 44.2889C209.37 46.6516 204.842 49.0752 200.411 51.4227C200.378 50.7825 200.411 50.188 200.411 49.5478H200.395Z" fill="white"/>
<path d="M200.395 49.5481V51.423C198.114 50.356 195.932 49.1213 193.684 47.9781V46.0117C195.915 47.2007 198.147 48.3744 200.395 49.5481Z" fill="white"/>
<path d="M279.922 38.6641H282.04V50.6603C281.535 50.6603 281.014 50.706 280.509 50.6146C280.085 50.4012 280.167 49.8524 280.036 49.4866C279.401 50.0811 278.636 50.6146 277.723 50.706C276.632 50.8737 275.443 50.4621 274.807 49.6085C274.042 48.6025 273.879 47.2916 273.96 46.0874C274.058 44.9442 274.547 43.7552 275.524 43.0388C276.762 42.0937 278.733 42.0937 279.922 43.115V38.6641ZM276.713 44.4716C276.045 45.3557 276.062 46.5142 276.208 47.5507C276.306 48.2976 276.811 49.136 277.707 49.1512C278.587 49.2732 279.369 48.8159 279.922 48.2214V44.5631C279.157 43.6638 277.479 43.5266 276.697 44.4716H276.713Z" fill="white"/>
<path d="M300.84 38.6647H302.941V45.5088C303.267 45.4478 303.674 45.5697 303.902 45.2649C304.749 44.3808 305.482 43.39 306.362 42.5364C307.128 42.2468 307.991 42.4602 308.806 42.3992C307.682 43.5729 306.672 44.8533 305.482 45.966C306.753 47.4599 307.796 49.1061 308.968 50.6609C308.219 50.6456 307.486 50.7219 306.737 50.6152C306.492 50.5694 306.378 50.356 306.248 50.1883C305.515 49.1518 304.782 48.1001 304.033 47.0788C303.821 46.713 303.3 46.8654 302.941 46.8197V50.6609H300.84V38.6494V38.6647Z" fill="white"/>
<path d="M249.282 39.015C251.205 38.7102 253.322 39.1065 254.805 40.3412C256.808 41.9874 257.297 44.8379 256.401 47.1091C255.831 48.6181 254.511 49.8528 252.899 50.3711C250.618 51.118 247.849 50.7521 246.09 49.1516C243.907 47.1548 243.662 43.6641 245.357 41.3167C246.252 40.082 247.719 39.2589 249.282 39.015ZM249.787 40.7985C248.777 40.9357 247.816 41.4844 247.295 42.3075C246.562 43.4355 246.481 44.8379 246.741 46.103C246.986 47.2615 247.849 48.3437 249.087 48.7096C250.423 49.1211 252.052 48.9839 253.143 48.0846C254.104 47.292 254.479 46.0573 254.463 44.8988C254.495 43.6946 254.12 42.3837 253.127 41.5606C252.231 40.8137 250.944 40.6308 249.787 40.7832V40.7985Z" fill="white"/>
<path d="M269.252 39.9754C269.627 39.6096 270.278 39.8534 270.751 39.7925V42.399H273.096V43.8166H270.751V48.0542C270.751 48.42 270.751 48.862 271.142 49.0602C271.614 49.2736 272.103 48.9687 272.543 48.8316C272.803 49.2279 273.08 49.609 273.341 50.0205C272.363 50.6607 271.044 50.9351 269.92 50.5235C269.089 50.2187 268.666 49.3651 268.649 48.5724C268.617 46.9872 268.649 45.4019 268.649 43.8166C268.258 43.7861 267.786 43.9081 267.444 43.6947C267.265 43.3746 267.379 42.9783 267.346 42.6277C267.819 42.5514 268.291 42.4752 268.763 42.399C268.943 41.5911 269.024 40.7528 269.285 39.9601H269.252V39.9754Z" fill="white"/>
<path d="M215.577 43.5882C216.783 42.6127 218.428 42.1401 220.008 42.3993C220.92 42.5517 221.767 43.1004 222.158 43.8931C222.5 44.518 222.533 45.2345 222.533 45.9204V50.6762C222.061 50.6762 221.572 50.7219 221.116 50.6C220.822 50.3713 220.806 49.975 220.66 49.6549C219.584 50.6152 217.939 51.0573 216.522 50.539C215.023 50.0207 214.714 47.8715 215.968 46.9722C217.222 46.0118 218.933 45.9051 220.497 45.8442C220.464 45.3259 220.529 44.7467 220.138 44.3351C219.715 43.8778 218.998 43.8931 218.412 43.9693C217.776 44.0607 217.271 44.5028 216.652 44.579C216.066 44.579 215.887 43.9693 215.61 43.6035H215.577V43.5882ZM217.679 47.5971C217.011 47.9477 217.011 49.0452 217.76 49.3043C218.737 49.6244 219.78 49.1976 220.448 48.5117V47.0636C219.503 47.0941 218.493 47.1093 217.679 47.5819V47.5971Z" fill="white"/>
<path d="M225.288 42.8713C226.851 41.9719 229.051 42.2006 230.386 43.3743C230.191 43.6791 230.012 43.984 229.751 44.2584C229.442 44.4718 229.132 44.2126 228.839 44.1364C228.138 43.8316 227.242 43.6791 226.542 44.0602C226.053 44.3193 226.004 45.051 226.542 45.3101C227.617 45.9199 229.034 45.9046 229.946 46.7735C230.973 47.8252 230.419 49.6696 229.116 50.2793C227.47 51.0872 225.337 50.8129 223.887 49.7458C224.115 49.3953 224.294 48.9989 224.636 48.7398C225.043 48.5874 225.402 48.877 225.76 49.0294C226.444 49.38 227.34 49.4715 228.041 49.1056C228.546 48.8465 228.676 48.0844 228.171 47.7643C227.112 47.1088 225.679 47.1545 224.75 46.2857C223.74 45.3254 224.066 43.5419 225.288 42.8713Z" fill="white"/>
<path d="M230.824 42.4139C231.492 42.4139 232.16 42.3682 232.812 42.4292C233.251 42.4749 233.333 42.9627 233.496 43.2675C234.131 44.8376 234.929 46.3466 235.45 47.9624C236.037 46.3466 236.754 44.7766 237.389 43.1761C237.519 42.8865 237.617 42.4901 238.008 42.4292C238.611 42.3682 239.23 42.4292 239.832 42.4139C238.301 45.7674 236.754 49.1208 235.222 52.4895C235.06 52.7792 234.978 53.206 234.587 53.2974C233.968 53.3736 233.349 53.3127 232.746 53.3279C233.3 52.2304 233.854 51.1482 234.392 50.0507C233.203 47.5051 232.013 44.9595 230.824 42.4139Z" fill="white"/>
<path d="M258.273 42.4141H260.391V47.7643C260.391 48.3436 260.684 49.0143 261.336 49.1819C262.264 49.4411 263.193 48.999 263.845 48.4046V42.4141H265.962V50.6605C265.49 50.6605 265.001 50.691 264.529 50.6453C264.04 50.5691 264.105 50.0051 263.991 49.6697C262.851 50.7367 260.929 51.1483 259.528 50.2794C258.648 49.7154 258.306 48.6942 258.29 47.7491V42.4141H258.273Z" fill="white"/>
<path d="M285.805 42.8255C287.108 42.17 288.786 42.1548 290.073 42.8407C291.36 43.5419 291.93 45.0662 291.735 46.4076C291.735 46.7277 291.344 46.7429 291.083 46.7429H285.805C285.903 47.5203 286.115 48.3739 286.848 48.8617C287.711 49.4104 288.916 49.3342 289.796 48.8617C290.138 48.7245 290.48 48.4349 290.888 48.5416C291.197 48.8007 291.425 49.1361 291.686 49.4409C290.578 50.5384 288.851 50.8738 287.304 50.6756C286.261 50.5384 285.268 50.0506 284.632 49.2428C283.834 48.252 283.606 46.9411 283.753 45.7216C283.915 44.5174 284.649 43.3742 285.805 42.8102V42.8255ZM286.978 43.9382C286.278 44.2278 285.984 44.929 285.838 45.5845H289.91C289.829 45.1424 289.764 44.6546 289.421 44.304C288.835 43.6638 287.776 43.6181 286.978 43.9382Z" fill="white"/>
<path d="M293.638 43.1608C295.169 41.9261 297.677 42.1091 299.127 43.3742C298.915 43.6791 298.736 43.9839 298.492 44.2583C298.182 44.4565 297.873 44.2126 297.58 44.1211C296.879 43.8163 295.983 43.6638 295.299 44.0449C294.81 44.3041 294.762 45.0357 295.299 45.2948C296.407 45.9198 297.905 45.8893 298.801 46.8649C299.697 47.9319 299.143 49.6696 297.889 50.2793C296.244 51.0872 294.094 50.8281 292.66 49.7458C292.97 49.3342 293.214 48.4959 293.914 48.7398C294.745 49.1818 295.771 49.5781 296.7 49.1666C297.27 48.9532 297.482 48.1148 296.928 47.7642C295.902 47.1392 294.55 47.1545 293.605 46.3771C292.628 45.554 292.725 43.9687 293.654 43.1608H293.638Z" fill="white"/>
<path d="M307.762 40.6918C307.127 40.6918 306.605 40.2041 306.605 39.6096C306.605 39.0151 307.127 38.5273 307.762 38.5273C308.397 38.5273 308.919 39.0151 308.919 39.6096C308.919 40.2041 308.397 40.6918 307.762 40.6918ZM307.762 38.6493C307.192 38.6493 306.736 39.0761 306.736 39.6096C306.736 40.1431 307.192 40.5699 307.762 40.5699C308.332 40.5699 308.788 40.1431 308.788 39.6096C308.788 39.0761 308.332 38.6493 307.762 38.6493Z" fill="white"/>
<path d="M308.005 40.1125L307.728 39.6705H307.549V40.1125H307.402V39.0303H307.777C307.858 39.0303 307.94 39.0303 308.005 39.076C308.07 39.1065 308.103 39.137 308.135 39.1979C308.168 39.2589 308.184 39.3046 308.184 39.3656C308.184 39.4418 308.184 39.5028 308.119 39.5638C308.054 39.6247 308.005 39.6552 307.907 39.6857L308.201 40.143H308.021V40.1125H308.005ZM307.549 39.5638H307.777C307.858 39.5638 307.924 39.5485 307.956 39.5028C307.989 39.4571 308.021 39.4113 308.021 39.3504C308.021 39.2894 308.021 39.2284 307.956 39.1979C307.891 39.1675 307.858 39.137 307.777 39.137H307.549V39.5485V39.5638Z" fill="white"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M169.187 37.3843L172.184 36.7441L175.002 48.2831L170.832 49.1824L168.274 38.741C168.128 38.1465 168.535 37.5368 169.17 37.3996L169.187 37.3843ZM149.851 37.3843L146.853 36.7441L144.035 48.2831L148.205 49.1824L150.763 38.741C150.909 38.1465 150.502 37.5368 149.867 37.3996L149.851 37.3843ZM168.291 48.5727L169.659 48.0087L167.737 40.1281L166.922 40.4634C166.417 40.6616 165.847 40.6463 165.358 40.4025C164.56 40.0061 163.876 39.6251 163.273 39.2897C161.433 38.2837 160.537 37.7959 159.315 38.2227C158.517 38.4971 157.539 39.5946 156.448 40.7988C155.65 41.6981 154.77 42.6432 153.842 43.4511C154.542 44.0913 155.242 44.2589 155.959 44.1522C157.083 43.9846 158.289 43.1462 159.478 42.3536C160.211 41.8658 161.205 41.942 161.856 42.5365L168.291 48.5574V48.5727ZM155.764 40.2653C154.884 41.2408 153.923 42.2926 152.913 43.0852C152.718 43.2376 152.701 43.5273 152.88 43.6949C153.907 44.8382 154.982 45.1278 156.09 44.9601C157.409 44.7619 158.712 43.8779 159.983 43.0243C160.357 42.7651 160.879 42.8108 161.221 43.1157L167.639 49.1214C168.111 49.5635 168.046 50.158 167.623 50.6153C167.183 50.9963 166.499 50.9963 166.075 50.6L161.677 46.4844C161.498 46.3167 161.221 46.3167 161.042 46.4844C160.862 46.6521 160.862 46.9112 161.042 47.0789C162.573 48.5117 164.104 49.9446 165.635 51.3774C166.059 51.7737 166.059 52.4444 165.635 52.8407C165.212 53.237 164.495 53.237 164.072 52.8407C162.491 51.3622 160.911 49.8836 159.331 48.405C159.152 48.2373 158.875 48.2373 158.696 48.405C158.517 48.5727 158.517 48.8318 158.696 48.9995L162.215 52.292C162.622 52.7035 162.622 53.3437 162.198 53.7401C161.775 54.1364 161.058 54.1364 160.634 53.7401L156.79 50.1427C156.611 49.975 156.334 49.975 156.155 50.1427C155.976 50.3104 155.976 50.5695 156.155 50.7372L157.947 52.4139C158.37 52.8255 158.354 53.4809 157.947 53.8773C157.523 54.2736 156.806 54.2736 156.383 53.8773L149.541 47.5514L151.577 39.2287H156.774C156.464 39.5641 156.138 39.9299 155.813 40.2958L155.764 40.2653Z" fill="white"/>
<path d="M31.2268 45.2805V52.8258H28.0992V45.5092C28.0992 43.4514 27.0892 42.2929 25.2322 42.2929C23.1634 42.2929 21.7951 43.6495 21.7951 45.6616V52.8106H18.6675V45.4939C18.6675 43.4361 17.6412 42.2777 15.7679 42.2777C13.7317 42.2777 12.3308 43.6343 12.3308 45.6464V52.7953H9.20312V39.8998H11.9887L12.0212 41.4088C13.0312 40.2046 14.367 39.6406 16.0937 39.6406C18.0484 39.6406 19.6937 40.4942 20.5571 41.9118C21.6485 40.4028 23.3263 39.6406 25.4603 39.6406C29.0114 39.6406 31.2105 41.7594 31.2105 45.25V45.2805H31.2268Z" fill="white"/>
<path d="M50.3991 36.5467L53.4942 36.2266V39.9154H57.4526V42.4H53.4942V48.3752C53.4942 49.6861 54.1295 50.4178 55.4163 50.4178C55.9702 50.4178 56.6218 50.2654 57.1431 50.0215L58.0064 52.3689C56.9476 52.8109 56.0516 52.9938 54.9114 52.9938C52.0607 52.9938 50.3828 51.4543 50.3828 48.3752V36.5467H50.3991Z" fill="white"/>
<path d="M73.5169 39.9146V52.8102H70.7313L70.6988 51.0877C69.6399 52.3376 67.7992 53.0998 65.6815 53.0998C61.6417 53.0998 58.8398 50.3256 58.8398 46.3624C58.8398 42.3992 61.6254 39.625 65.6815 39.625C67.8318 39.625 69.6399 40.3871 70.6988 41.6371L70.7313 39.9146H73.5169ZM70.3893 46.3776C70.3893 43.9692 68.6625 42.3078 66.1702 42.3078C63.6779 42.3078 61.9512 43.9845 61.9512 46.3776C61.9512 48.7708 63.6779 50.4475 66.1702 50.4475C68.6625 50.4475 70.3893 48.7708 70.3893 46.3776Z" fill="white"/>
<path d="M90.4739 34.5342V52.8105H87.6884L87.6558 51.0881C86.597 52.338 84.7562 53.1001 82.5734 53.1001C78.6639 53.1001 75.7969 50.4326 75.7969 46.3627C75.7969 42.2929 78.6639 39.6253 82.5734 39.6253C84.5607 39.6253 86.2549 40.2503 87.3463 41.3021V34.5342H90.4739ZM87.3463 46.378C87.3463 43.9696 85.6196 42.3081 83.1273 42.3081C80.6349 42.3081 78.9082 43.9848 78.9082 46.378C78.9082 48.7711 80.6349 50.4479 83.1273 50.4479C85.6196 50.4479 87.3463 48.7711 87.3463 46.378Z" fill="white"/>
<path d="M107.431 39.9146V52.8102H104.645L104.613 51.0877C103.554 52.3376 101.713 53.0998 99.5956 53.0998C95.5557 53.0998 92.7539 50.3256 92.7539 46.3624C92.7539 42.3992 95.5395 39.625 99.5956 39.625C101.746 39.625 103.554 40.3871 104.613 41.6371L104.645 39.9146H107.431ZM104.303 46.3776C104.303 43.9692 102.577 42.3078 100.084 42.3078C97.592 42.3078 95.8652 43.9845 95.8652 46.3776C95.8652 48.7708 97.592 50.4475 100.084 50.4475C102.577 50.4475 104.303 48.7708 104.303 46.3776Z" fill="white"/>
<path d="M109.938 36.5467L113.033 36.2266V39.9154H116.992V42.4H113.033V48.3752C113.033 49.6861 113.669 50.4178 114.955 50.4178C115.509 50.4178 116.161 50.2654 116.682 50.0215L117.545 52.3689C116.487 52.8109 115.591 52.9938 114.45 52.9938C111.6 52.9938 109.922 51.4543 109.922 48.3752V36.5467H109.938Z" fill="white"/>
<path d="M133.036 39.9146V52.8102H130.251L130.218 51.0877C129.159 52.3376 127.319 53.0998 125.201 53.0998C121.161 53.0998 118.359 50.3256 118.359 46.3624C118.359 42.3992 121.145 39.625 125.201 39.625C127.351 39.625 129.159 40.3871 130.218 41.6371L130.251 39.9146H133.036ZM129.925 46.3776C129.925 43.9692 128.198 42.3078 125.706 42.3078C123.214 42.3078 121.487 43.9845 121.487 46.3776C121.487 48.7708 123.214 50.4475 125.706 50.4475C128.198 50.4475 129.925 48.7708 129.925 46.3776Z" fill="white"/>
<path d="M41.9297 45.2504V39.7324C44.9433 40.205 47.3216 42.4304 47.8266 45.2504H41.9297Z" fill="white"/>
<path d="M47.9236 46.5152C47.8421 50.1735 44.6493 53.1154 40.7235 53.1154C36.7977 53.1154 33.5234 50.0973 33.5234 46.378C33.5234 45.9969 33.556 45.6159 33.6212 45.25C34.175 42.11 37.0746 39.7016 40.5606 39.6406V42.4301C38.7199 42.4911 37.1886 43.6648 36.6836 45.25C36.5696 45.6006 36.5045 45.9817 36.5045 46.378C36.5045 48.5578 38.3941 50.326 40.7072 50.326C41.1307 50.326 41.5217 50.265 41.9126 50.1583C43.6068 49.6857 44.8448 48.2377 44.91 46.5152H47.9236Z" fill="white"/>
</g>
<defs>
<linearGradient id="paint0_linear_2934_57463" x1="-0.325795" y1="44.5336" x2="166.302" y2="44.5336" gradientUnits="userSpaceOnUse">
<stop offset="0.32" stop-color="white" stop-opacity="0"/>
<stop offset="1" stop-color="white"/>
</linearGradient>
<linearGradient id="paint1_linear_2934_57463" x1="318.686" y1="44.5395" x2="152.059" y2="44.5395" gradientUnits="userSpaceOnUse">
<stop offset="0.32" stop-color="white" stop-opacity="0"/>
<stop offset="1" stop-color="white"/>
</linearGradient>
<linearGradient id="paint2_linear_2934_57463" x1="138.905" y1="45.1217" x2="179.951" y2="43.5719" gradientUnits="userSpaceOnUse">
<stop stop-color="#1777BD"/>
<stop offset="0.43" stop-color="#1F70B5"/>
<stop offset="1" stop-color="#EE7565"/>
</linearGradient>
<clipPath id="clip0_2934_57463">
<rect width="327" height="101" fill="white" transform="translate(0 -6.5)"/>
</clipPath>
</defs>
</svg>

                                    
                                </div>
                                <div class="featured-sub">Motadata with Easy Outdesk</div>
                            </div>

                            <!-- Row 1: Operations -->
                            <div class="feat-row">
                                <!-- <div class="feat-illu">
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
                                </div> -->
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>Connected monitoring and ITSM</strong>
                                    <span>Single platform for infrastructure, applications and service
                                        management.</span>
                                </div>
                            </div>

                            <!-- Row 2: Integration -->
                            <div class="feat-row">
                                <!-- <div class="feat-illu">
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <path d="M12 14h8v2a3 3 0 0 0 6 0v-2h8v8h-2a3 3 0 0 0 0 6h2v8H12z" fill="#005fd6" rx="3"/>
                                        <path d="M26 12h14v8h2a3 3 0 0 1 0 6h-2v8H26v-2a3 3 0 0 0-6 0v2h-2V26h2a3 3 0 0 0 0-6h-2V12h8z" fill="#93c5fd" fill-opacity=".85"/>
                                    </svg>
                                </div> -->
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>ObserveOps + ServiceOps integration</strong>
                                    <span>Seamless integration for better visibility and faster resolution.</span>
                                </div>
                            </div>

                            <!-- Row 3: Cost -->
                            <div class="feat-row">
                                <!-- <div class="feat-illu">
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <ellipse cx="14" cy="34" rx="7" ry="2.8" fill="#93c5fd"/>
                                        <ellipse cx="14" cy="30" rx="7" ry="2.8" fill="#60a5fa"/>
                                        <ellipse cx="14" cy="26" rx="7" ry="2.8" fill="#2563eb"/>
                                        <rect x="24" y="22" width="6" height="15" rx="1.5" fill="#3b82f6"/>
                                        <rect x="33" y="15" width="6" height="22" rx="1.5" fill="#1d4ed8"/>
                                        <rect x="42" y="8" width="6" height="29" rx="1.5" fill="#005fd6"/>
                                        <path d="m20 18 8-7 9 4 11-10" stroke="#005fd6" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div> -->
                                <div class="feat-check">✓</div>
                                <div class="feat-content">
                                    <strong>Pricing tailored to your requirements</strong>
                                    <span>Flexible plans for businesses of all sizes.</span>
                                </div>
                            </div>

                            <!-- Row 4: Local Access -->
                            <div class="feat-row">
                                <!-- <div class="feat-illu">
                                    <svg viewBox="0 0 54 44" fill="none">
                                        <path d="m9 27 12-4 12 4 12-4v12l-12 4-12-4-12 4V27z" fill="#dbeafe" stroke="#93c5fd" stroke-width="1.2"/>
                                        <circle cx="27" cy="16" r="8" fill="#005fd6"/>
                                        <path d="M27 28c-4-4.5-8-8.5-8-12a8 8 0 1 1 16 0c0 3.5-4 7.5-8 12z" fill="#005fd6"/>
                                        <circle cx="27" cy="16" r="3" fill="#ffffff"/>
                                    </svg>
                                </div> -->
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
                                <!-- <div class="sep-illu" title="Fragmented tools">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <rect x="4" y="6" width="22" height="15" rx="2" fill="#fff" />
                                        <rect x="14" y="16" width="22" height="15" rx="2" fill="#fff" />
                                        <line x1="8" y1="10" x2="16" y2="10" />
                                        <line x1="18" y1="20" x2="26" y2="20" />
                                    </svg>
                                </div> -->
                            </div>

                            <!-- Row 2: Integration -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Integration requirements vary</strong>
                                    <span>Complex and time-consuming integrations.</span>
                                </div>
                                <!-- <div class="sep-illu" title="Mismatched integrations">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <circle cx="14" cy="18" r="8" stroke-dasharray="2 2" />
                                        <circle cx="30" cy="26" r="8" stroke-dasharray="2 2" />
                                    </svg>
                                </div> -->
                            </div>

                            <!-- Row 3: Cost -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Costs may span multiple licences</strong>
                                    <span>Higher overall cost with separate tools.</span>
                                </div>
                                <!-- <div class="sep-illu" title="Multiple license costs">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                        <ellipse cx="14" cy="22" rx="8" ry="3" />
                                        <ellipse cx="30" cy="28" rx="8" ry="3" />
                                        <path d="M6 22v6c0 1.6 3.6 3 8 3s8-1.4 8-3v-6" />
                                        <path d="M22 28v6c0 1.6 3.6 3 8 3s8-1.4 8-3v-6" />
                                    </svg>
                                </div> -->
                            </div>

                            <!-- Row 4: Support -->
                            <div class="sep-row">
                                <div class="sep-cross">✕</div>
                                <div class="sep-content">
                                    <strong>Depends on the vendor</strong>
                                    <span>Limited local support and longer response time.</span>
                                </div>
                                <!-- <div class="sep-illu" title="Remote/unresponsive vendor support">
                                    <svg viewBox="0 0 44 44" fill="none" stroke="#94a3b8" stroke-width="1.6">
                                        <path d="M12 24v-4a10 10 0 0 1 20 0v4" />
                                        <rect x="8" y="22" width="6" height="8" rx="2" />
                                        <rect x="30" y="22" width="6" height="8" rx="2" />
                                        <path d="M33 30v2a5 5 0 0 1-5 5h-4" />
                                    </svg>
                                </div> -->
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
                        <img src="assets/images/eodlogo_white.svg" alt="Easy Outdesk and Motadata"
                            style="height:44px; width:auto; max-width:220px; object-fit:contain;">
                    </a>
                    <p>Explore Motadata network monitoring and IT service management solutions through Easy Outdesk, the
                        sole distributor of Motadata in Malaysia.</p>
                </div>
                <nav class="footer-links" aria-label="Footer navigation">
                    <a href="#why">Why Motadata</a>
                    <a href="#solutions">Solutions</a>
                    <a href="#usps">Key benefits</a>
                    <a href="#compare">Compare</a>
                    <a href="#demo-form">Request a demo</a>
                </nav>
                <div class="footer-contact">
                    <h4 class="no-head-margin">Address</h4>
                    <p class="footer-para">IKON CONNAUGHT, L5-17, 160, Jalan Cerdas, Taman Connaught, 56000 Cheras, Kuala Lumpur, Malaysia.
                    </p>

                    <div class="footer-contact-methods">
                        <div>
                            <h4 class="no-head-margin">Email</h4>
                            <p class="footer-para"><a href="mailto:sales@easyoutdesk.com">sales@easyoutdesk.com</a></p>
                        </div>
                        <div>
                            <h4 class="no-head-margin">PHONE</h4>
                            <p class="footer-para"><a href="tel:+60102775642">(+60) 10-277 5642</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2026 Easy Outdesk. All rights reserved.</span>
                <span><a href="privacy.php">Privacy Policy</a> · <a href="terms.php">Terms of Service</a></span>
            </div>
        </div>
    </footer>
    <!-- <div class="mobile-cta"><a class="btn btn-primary" href="#demo-form">Request a Motadata demo ↗</a></div> -->

    <!-- SweetAlert2 is lazy-loaded only when an error dialog is needed -->
    <script>function loadSweetAlert() { if (window.Swal) return Promise.resolve(window.Swal); if (window.__sweetAlertPromise) return window.__sweetAlertPromise; window.__sweetAlertPromise = new Promise(function (resolve, reject) { var script = document.createElement('script'); script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11.26.25/dist/sweetalert2.all.min.js'; script.integrity = 'sha256-Tobw4i5HcbW4qsJMYTxmGAameLGvooTQPPatA9PiGgo='; script.crossOrigin = 'anonymous'; script.onload = function () { resolve(window.Swal) }; script.onerror = reject; document.head.appendChild(script) }); return window.__sweetAlertPromise }</script>

    <!-- International telephone input JS -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/js/intlTelInput.min.js"></script>

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
                //  const API_BASE = 'http://localhost/campaigns/api';
                const TOKEN_URL = API_BASE + '/odoo-lead/token';
                const SUBMIT_URL = API_BASE + '/motadata/submit';

                // ---- International telephone input (Malaysia default) ----
                const phoneInput = document.getElementById('phone');
                let iti = null;
                if (phoneInput && window.intlTelInput) {
                    iti = window.intlTelInput(phoneInput, {
                        initialCountry: 'my',
                        preferredCountries: ['my', 'sg', 'id', 'th', 'in', 'au'],
                        separateDialCode: true,
                        autoPlaceholder: 'aggressive',
                        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.8.1/build/js/utils.js'
                    });
                }

                // Full international number as digits only, e.g. 60123456789
                const getPhoneDigits = () => {
                    const national = phoneInput ? phoneInput.value.replace(/\D/g, '') : '';
                    if (!iti) return national;
                    const full = iti.getNumber();
                    if (full) return full.replace(/\D/g, '');
                    const country = iti.getSelectedCountryData();
                    return (country && country.dialCode ? country.dialCode : '') + national.replace(/^0+/, '');
                };

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
                    field.style.borderColor = '#e5484d';
                    field.style.boxShadow = '0 0 0 3px rgba(229,72,77,.25)';
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
                    } else if (iti && iti.isValidNumber() === false) {
                        showFieldError(getField('phone'), 'Please enter a valid phone number for the selected country.'); valid = false;
                    } else if (!/^[0-9]{7,15}$/.test(getPhoneDigits())) {
                        showFieldError(getField('phone'), 'Please enter a valid phone number.'); valid = false;
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
                if (phoneInput) {
                    phoneInput.addEventListener('countrychange', () => {
                        clearFieldError(phoneInput);
                        clearStatus();
                    });
                }

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
                    formData.append('phone', getPhoneDigits());
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
                                if (iti) iti.setCountry('my');
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