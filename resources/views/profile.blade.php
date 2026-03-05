<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name ?? 'Faris Musyaffa' }} — Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap"
          rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    </noscript>

    <style>
        /* ─── Variables ─────────────────────────────────────── */
        :root {
            --bg:         #111214;
            --bg-card:    #191b1f;
            --border:     #2c2f36;
            --text:       #e2e0db;
            --muted:      #6b7280;
            --accent:     #7eb8f7;
            --accent-dim: #1e3a5a;
            --font-serif: 'Cormorant Garamond', Georgia, serif;
            --font-sans:  'DM Sans', system-ui, sans-serif;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { height: 100%; }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: var(--font-sans);
            font-weight: 300;
            line-height: 1.7;
            overflow: hidden;
        }

        /* Ambient glow top-right */
        body::after {
            content: '';
            position: fixed;
            top: -15%; right: -5%;
            width: 550px; height: 550px;
            background: radial-gradient(circle, rgba(126,184,247,0.07) 0%, transparent 65%);
            pointer-events: none;
            z-index: 0;
        }

        /* ─── Page shell ─────────────────────────────────────── */
        .page {
            height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 1;
        }

        /* ─── Nav ────────────────────────────────────────────── */
        nav {
            flex-shrink: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 3.5rem;
            border-bottom: 1px solid var(--border);
            background: rgba(17,18,20,0.92);
            backdrop-filter: blur(10px);
        }

        .nav-logo {
            font-family: var(--font-serif);
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: var(--text);
            text-decoration: none;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-badge {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--accent);
            background: var(--accent-dim);
            padding: 0.3rem 0.9rem;
            border: 1px solid rgba(126,184,247,0.2);
        }

        .nav-year {
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            color: var(--muted);
        }

        /* ─── Hero ───────────────────────────────────────────── */
        .hero {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 400px;
            align-items: center;
            gap: 0;
            max-width: 1180px;
            width: 100%;
            margin: 0 auto;
            padding: 0 3.5rem;
        }

        /* ── Left ── */
        .hero-left {
            padding-right: 5rem;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.8rem;
        }

        .eyebrow-line {
            width: 1.5rem;
            height: 1px;
            background: var(--accent);
            flex-shrink: 0;
        }

        .eyebrow-text {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .hero-name {
            font-family: var(--font-serif);
            font-size: clamp(3.8rem, 5.5vw, 5.6rem);
            font-weight: 300;
            line-height: 1.0;
            letter-spacing: -0.01em;
            margin-bottom: 1.4rem;
        }

        .hero-name .first { display: block; color: var(--text); }
        .hero-name .last  { display: block; font-style: italic; color: var(--accent); }

        .hero-tagline {
            font-family: var(--font-serif);
            font-size: 1.12rem;
            font-style: italic;
            color: var(--muted);
            margin-bottom: 1.6rem;
        }

        .hero-bio {
            font-size: 0.88rem;
            color: var(--muted);
            line-height: 1.9;
            max-width: 430px;
            margin-bottom: 2.2rem;
        }

        /* Skill tags */
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 2.4rem;
        }

        .tag {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 0.3rem 0.8rem;
            transition: border-color 0.25s, color 0.25s;
        }

        .tag:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        /* Buttons */
        .actions {
            display: flex;
            gap: 0.9rem;
        }

        .btn-primary {
            padding: 0.82rem 1.9rem;
            background: var(--accent);
            color: #0a1520;
            font-family: var(--font-sans);
            font-size: 0.73rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background 0.25s, transform 0.2s;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #a8d0fa;
            transform: translateY(-2px);
        }

        .btn-ghost {
            padding: 0.82rem 1.9rem;
            background: transparent;
            color: var(--text);
            font-family: var(--font-sans);
            font-size: 0.73rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-decoration: none;
            border: 1px solid var(--border);
            cursor: pointer;
            transition: border-color 0.25s, color 0.25s;
            display: inline-block;
        }

        .btn-ghost:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        /* ── Right: Photo Card ── */
        .hero-right {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .card-wrap {
            position: relative;
            width: 320px;
            height: 410px;
        }

        /* decorative offset border */
        .card-wrap::before {
            content: '';
            position: absolute;
            top: -10px; right: -10px;
            width: 100%; height: 100%;
            border: 1px solid var(--border);
            pointer-events: none;
            z-index: 0;
        }

        .card-img {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .card-placeholder {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            background: linear-gradient(155deg, #191d23 0%, #1b2d40 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-placeholder svg {
            width: 80px;
            height: 80px;
            opacity: 0.18;
        }

        /* Available badge */
        .card-badge {
            position: absolute;
            bottom: -14px;
            left: -14px;
            background: var(--accent);
            color: #0a1520;
            padding: 0.85rem 1.3rem;
            z-index: 3;
        }

        .badge-label {
            font-size: 0.6rem;
            font-weight: 500;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            opacity: 0.75;
            display: block;
            margin-bottom: 0.1rem;
        }

        .badge-value {
            font-family: var(--font-serif);
            font-size: 1.2rem;
            font-weight: 600;
            display: block;
        }

        /* Vertical mini stats */
        .card-stats {
            position: absolute;
            right: -58px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 1.6rem;
        }

        .cstat { text-align: center; }

        .cstat-num {
            font-family: var(--font-serif);
            font-size: 1.5rem;
            font-weight: 300;
            color: var(--text);
            line-height: 1;
        }

        .cstat-lbl {
            font-size: 0.58rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--muted);
            margin-top: 0.2rem;
        }

        /* ─── Bottom bar ─────────────────────────────────────── */
        .bottom-bar {
            flex-shrink: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.9rem 3.5rem;
            border-top: 1px solid var(--border);
        }

        .social-links { display: flex; gap: 1.5rem; }

        .social-link {
            font-size: 0.68rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
            text-decoration: none;
            transition: color 0.25s;
        }

        .social-link:hover { color: var(--accent); }

        .bottom-loc {
            font-size: 0.7rem;
            letter-spacing: 0.08em;
            color: var(--muted);
        }

        /* ─── Responsive ─────────────────────────────────────── */
        @media (max-width: 900px) {
            body { overflow: auto; }
            .hero {
                grid-template-columns: 1fr;
                padding: 3rem 2rem 4rem;
                gap: 3rem;
            }
            .hero-left { padding-right: 0; }
            .card-stats { display: none; }
            nav, .bottom-bar { padding-left: 1.5rem; padding-right: 1.5rem; }
        }
    </style>
</head>
<body>
<div class="page">

    <!-- Nav -->
    <nav>
        <a href="#" class="nav-logo">{{ $initials ?? 'FM' }}</a>
        <div class="nav-right">
            <span class="nav-badge">{{ $status ?? 'Mahasiswa Aktif PENS' }}</span>
            <span class="nav-year">{{ date('Y') }}</span>
        </div>
    </nav>

    <!-- Hero -->
    <main class="hero">

        <div class="hero-left">
            <div class="eyebrow">
                <span class="eyebrow-line"></span>
                <span class="eyebrow-text">{{ $role_short ?? 'Ahli makan dan tidur.' }}</span>
            </div>

            <h1 class="hero-name">
                <span class="first">{{ $first_name ?? 'Faris' }}</span>
                <span class="last">{{ $last_name ?? 'Musyaffa' }}</span>
            </h1>

            <p class="hero-tagline">{{ $tagline ?? 'Crafting digital experiences with purpose' }}</p>

            <p class="hero-bio">{{ $bio ?? 'Mahasiswa yang memiliki ketertarikan pada pengembangan aplikasi dan desain antarmuka digital. Saya senang mengeksplorasi teknologi baru serta membangun proyek yang menggabungkan fungsi dan estetika.' }}</p>

            <div class="tags">
                @foreach($tags ?? ['Laravel', 'Flutter', 'UI/UX', 'Figma', 'Valorant', 'Palia'] as $t)
                    <span class="tag">{{ $t }}</span>
                @endforeach
            </div>

            <div class="actions">
                <a href="{{ $portfolio_url ?? '#' }}" class="btn-primary">Lihat Portofolio</a>
                <a href="mailto:{{ $email ?? '#' }}"  class="btn-ghost">Hubungi Saya</a>
            </div>
        </div>

        <div class="hero-right">
            <div class="card-wrap">
                @if(isset($photo))
                    <img src="{{ asset($photo) }}" alt="{{ $name ?? 'Profile' }}" class="card-img">
                @else
                    <div class="card-placeholder">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#7eb8f7" stroke-width="0.8">
                            <circle cx="12" cy="8" r="4.5"/>
                            <path d="M3 21c0-5 4-8.5 9-8.5s9 3.5 9 8.5"/>
                        </svg>
                    </div>
                @endif

                <div class="card-badge">
                    <span class="badge-label">Tidak</span>
                    <span class="badge-value">{{ $availability ?? 'dijual' }}</span>
                </div>
            </div>
        </div>

    </main>

    <!-- Bottom bar -->
    <div class="bottom-bar">
        <div class="social-links">
            <a href="{{ $github   ?? '#' }}" class="social-link">GitHub</a>
            <a href="{{ $linkedin ?? '#' }}" class="social-link">LinkedIn</a>
            <a href="mailto:{{ $email ?? '#' }}" class="social-link">Email</a>
        </div>
        <span class="bottom-loc">{{ $location ?? 'Surabaya, Indonesia' }}</span>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const els = [
        '.eyebrow', '.hero-name', '.hero-tagline',
        '.hero-bio', '.tags', '.actions', '.hero-right'
    ].map(s => document.querySelector(s)).filter(Boolean);

    els.forEach((el, i) => {
        el.style.cssText += `opacity:0;transform:translateY(16px);transition:opacity .65s ease ${i*0.07}s,transform .65s ease ${i*0.07}s`;
    });

    requestAnimationFrame(() => requestAnimationFrame(() => {
        els.forEach(el => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        });
    }));
});
</script>
</body>
</html>