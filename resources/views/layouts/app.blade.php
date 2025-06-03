<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Bomb NFT's</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        :root {
            --black: #000;
            --white: #fff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: var(--black);
            color: var(--white);
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            /* Menghapus cursor: none; agar kursor default tetap terlihat */
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        section {
            padding: 80px 0;
            position: relative;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        h1 {
            font-size: 4rem;
            line-height: 1.1;
        }
        
        h2 {
            font-size: 3rem;
            margin-bottom: 40px;
        }
        
        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--white);
            color: var(--black);
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            border: 2px solid var(--white);
            transition: all 0.3s ease;
            margin-right: 15px;
            margin-bottom: 15px;
        }
        
        .btn:hover {
            background: transparent;
            color: var(--white);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--white);
        }
        
        .btn-outline:hover {
            background: var(--white);
            color: var(--black);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 60px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--white);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        /* Kursor Lingkaran Custom */
        .cursor-circle {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid var(--white);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: all 0.4s ease;
            z-index: 9999;
            mix-blend-mode: difference;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            
            h2 {
                font-size: 2rem;
            }
            
            section {
                padding: 60px 0;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Elemen lingkaran kursor -->
    <div class="cursor-circle"></div>
    
    @yield('content')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fade in elements on scroll
            const fadeElements = document.querySelectorAll('.fade-in');
            
            function checkFade() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            }
            
            // Initial check
            checkFade();
            
            // Check on scroll
            window.addEventListener('scroll', checkFade);
            
            // Mobile menu toggle
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            
            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                    menuToggle.classList.toggle('active');
                });
            }
            
            // Kursor lingkaran
            const cursor = document.querySelector('.cursor-circle');
            
            document.addEventListener('mousemove', function(e) {
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
            });
            
            // Efek mengecil saat klik
            document.addEventListener('mousedown', function() {
                cursor.style.transform = 'translate(-50%, -50%) scale(0.8)';
            });
            
            document.addEventListener('mouseup', function() {
                cursor.style.transform = 'translate(-50%, -50%) scale(1)';
            });
            
            // Efek hover pada link dan button
            const links = document.querySelectorAll('a, button, .btn');
            links.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    cursor.style.transform = 'translate(-50%, -50%) scale(1.5)';
                    cursor.style.borderWidth = '1px';
                });
                link.addEventListener('mouseleave', () => {
                    cursor.style.transform = 'translate(-50%, -50%) scale(1)';
                    cursor.style.borderWidth = '2px';
                });
            });
        });
    </script>
</body>
</html>