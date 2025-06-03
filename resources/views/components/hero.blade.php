<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h3 class="pre-heading fade-in">HELLO EVERYONE</h3>
                <h1 class="main-heading fade-in">BUBBLE BOMB NFT'S</h1>

                <div class="logo-container">
                    <img src="/images/LOGO BLUE.png" alt="Blue Logo" class="logo-img">
                    <img src="/images/LOGO ELANG.png" alt="Elang Logo" class="logo-img">
                    <img src="/images/LOGO PUMP FUN.png" alt="Pump Fun Logo" class="logo-img">
                </div>

                <p class="tagline fade-in">A SIMPLE INK STROKE WILL BECOME A MASTERPIECE ON THE RIGHT PERSON.</p>

                <div class="divider-line"></div>

                <h4 class="sub-heading fade-in">WELCOME TO OUR WEBSITE</h4>
                
                <div class="hero-buttons fade-in">
                    <a href="#about" class="btn">SHOW MORE</a>
                    <a href="#" class="btn btn-outline">PLAY THE GAME</a>
                </div>
            </div>

            <!-- Ini akan disembunyikan di mobile -->
            <div class="hero-image">
                <img 
                    src="/images/BOMB-CHARACTER.png" 
                    alt="Bubble Bomb Character" 
                    class="character-img drop-shadow-2xl"
                />
            </div>
        </div>
    </div>
</section>

<style>
    .hero {
        background: 
            url('/images/background1.png')no-repeat center center,
            radial-gradient(circle, rgba(5, 5, 5, 0.7) 0%, rgba(88, 88, 88, 0.7) 100%);
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 40px 0;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .hero-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
        width: 100%;
    }

    .hero-text {
        flex: 1;
        max-width: 600px;
    }

    .hero-image {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .character-img {
        width: 100%;
        max-width: 500px;
        height: auto;
        object-fit: contain;
    }

    .pre-heading {
        font-size: clamp(1rem, 2vw, 1.2rem);
        margin-bottom: 20px;
        letter-spacing: 3px;
    }

    .main-heading {
        font-size: clamp(2.5rem, 6vw, 5rem);
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .tagline {
        font-size: clamp(1rem, 1.2vw, 1.2rem);
        margin-bottom: 30px;
        max-width: 600px;
        font-weight: 600;
    }

    .sub-heading {
        font-size: clamp(1.2rem, 1.5vw, 1.5rem);
        margin-bottom: 40px;
    }

    .hero-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .btn {
        padding: 12px 24px;
        font-size: 1rem;
        white-space: nowrap;
    }

    .logo-container {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
    }

    .logo-img {
        width: clamp(30px, 3vw, 40px);
        height: clamp(30px, 3vw, 40px);
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .logo-img:hover {
        transform: scale(1.1);
    }

    .divider-line {
        width: 100%;
        max-width: 400px;
        height: 2px;
        background: var(--white);
        margin: 25px 0;
        opacity: 0.8;
    }

    /* Responsive Breakpoints */
    @media (max-width: 992px) {
        .hero-content {
            gap: 30px;
        }

        .character-img {
            max-width: 400px;
        }
    }

    @media (max-width: 768px) {
        .hero {
            padding: 60px 0;
            text-align: center;
        }

        .hero-content {
            flex-direction: column;
        }

        .hero-text {
            max-width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero-image {
            display: none; /* Disembunyikan di mobile */
        }

        .logo-container {
            justify-content: center;
        }

        .hero-buttons {
            justify-content: center;
        }

        .tagline {
            margin-left: auto;
            margin-right: auto;
        }

        .divider-line {
            margin: 25px auto;
        }
    }

    @media (max-width: 480px) {
        .main-heading {
            font-size: 2.2rem;
        }

        .hero-buttons {
            flex-direction: column;
            width: 100%;
        }

        .btn {
            width: 100%;
        }

        .character-img {
            max-width: 250px;
        }
    }
</style>
