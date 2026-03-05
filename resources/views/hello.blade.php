<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --cream: #f5f0e8;
            --ink: #1a1612;
            --rust: #c0392b;
            --rust-dark: #96281b;
        }

        body {
            background-color: var(--cream);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Grain texture overlay */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 10;
            opacity: 0.4;
        }

        /* Decorative horizontal lines */
        body::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--rust);
        }

        .container {
            text-align: center;
            padding: 3rem;
            animation: fadeUp 0.9s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .label {
            font-family: 'DM Sans', sans-serif;
            font-weight: 300;
            font-size: 0.75rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: var(--rust);
            margin-bottom: 1.2rem;
            animation: fadeUp 0.9s 0.1s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(4rem, 12vw, 8rem);
            line-height: 1;
            letter-spacing: -0.02em;
            color: var(--ink);
            margin-bottom: 3rem;
            animation: fadeUp 0.9s 0.2s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        h1 span {
            display: block;
            color: var(--rust);
        }

        .divider {
            width: 60px;
            height: 2px;
            background: var(--ink);
            margin: 0 auto 3rem;
            animation: expand 0.8s 0.4s ease both;
        }

        .btn {
            display: inline-block;
            font-family: 'DM Sans', sans-serif;
            font-weight: 400;
            font-size: 0.85rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            text-decoration: none;
            color: var(--cream);
            background: var(--ink);
            padding: 1.1rem 3rem;
            border: 2px solid var(--ink);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: color 0.35s ease;
            animation: fadeUp 0.9s 0.5s cubic-bezier(0.16, 1, 0.3, 1) both;
        }

        .btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--rust);
            transform: translateX(-101%);
            transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .btn:hover::before {
            transform: translateX(0);
        }

        .btn:hover {
            color: var(--cream);
            border-color: var(--rust);
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        /* Corner decorations */
        .corner {
            position: fixed;
            width: 60px;
            height: 60px;
            border-color: var(--ink);
            border-style: solid;
            opacity: 0.15;
        }

        .corner--tl { top: 24px; left: 24px; border-width: 2px 0 0 2px; }
        .corner--tr { top: 24px; right: 24px; border-width: 2px 2px 0 0; }
        .corner--bl { bottom: 24px; left: 24px; border-width: 0 0 2px 2px; }
        .corner--br { bottom: 24px; right: 24px; border-width: 0 2px 2px 0; }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes expand {
            from { width: 0; opacity: 0; }
            to   { width: 60px; opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="corner corner--tl"></div>
    <div class="corner corner--tr"></div>
    <div class="corner corner--bl"></div>
    <div class="corner corner--br"></div>

    <div class="container">
        <p class="label">Selamat Datang</p>
        <h1>Hello<span>World.</span></h1>
        <div class="divider"></div>
        <a href="{{ route('profile') }}" class="btn">
            <span>Lihat Saya</span>
        </a>
    </div>

</body>
</html>