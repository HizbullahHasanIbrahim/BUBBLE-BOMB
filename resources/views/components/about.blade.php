<section id="about" class="about">
    <div class="container">
        <h2 class="section-title fade-in">ABOUT BUBBLE BOMB</h2>
        
        <div class="about-content">
            <div class="about-grid">
                <!-- Left side - Feature boxes in 2 columns and 2 rows -->
                <div class="about-features-column">
                    <div class="feature-grid">
                        <!-- Column 1 -->
                        <div class="feature-column">
                            <div class="feature-box fade-in">
                                <h3>OUR COLLECTION</h3>
                                <p>Bubble Bomb NFT's is a collection of 2D art combining bomb characters with various accessories. Our collection features over 800+ basic characters and 200+ epic characters, each with unique traits and designs.</p>
                            </div>
                            
                            <div class="feature-box fade-in">
                                <h3>HELLO</h3>
                                <p>Our NFTs will be distributed on OpenSea using the Polygon network for low gas fees and easy accessibility.</p>
                            </div>
                        </div>
                        
                        <!-- Column 2 -->
                        <div class="feature-column">
                            <div class="feature-box fade-in">
                                <h3>GAME DEVELOPMENT</h3>
                                <p>We are also developing a game website where NFT holders can play and earn rewards. The game will feature our Bubble Bomb characters in an exciting and interactive environment.</p>
                                <div class="logo-container">
                                    <img src="/images/LOGO POLYGON.png" alt="Polygon Logo" class="logo-img">
                                    <img src="/images/LOGO ETH.png" alt="Ethereum Logo" class="logo-img">
                                </div>
                            </div>
                            
                            <div class="feature-box fade-in">
                                <h3>IM $BOMB</h3>
                                <p>Top 10 $BOMB token holders will receive special NFT rewards from our collection, including rare and exclusive designs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right side - Images -->
                <div class="about-image hide-on-mobile">
                    <div class="image-container">
                        <img 
                            src="/images/HELLO.png" 
                            class="character-img drop-shadow-2xl"
                        />
                        <img 
                            src="/images/Logo Pojok.png" 
                            class="character-img drop-shadow-2xl"
                        />
                    </div>

                    <div class="image-container">
                        <img 
                            src="/images/IM BOMB.png" 
                            class="character-img drop-shadow-2xl"
                        />
                        <img 
                            src="/images/BOMB-CHARACTER2.png" 
                            class="character-img drop-shadow-2xl"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .about {
        background: 
            url('/images/backgroundbomb.png') no-repeat center center,
            url('/images/background2.png') no-repeat center center,
            radial-gradient(circle, rgba(5, 5, 5, 0.7) 0%, rgba(88, 88, 88, 0.7) 100%);
        background-size: contain, cover, cover;
        background-blend-mode: normal, multiply, overlay;
        color: var(--white);
        position: relative;
        overflow: hidden;
        padding: 80px 0;
    }
    
    .about .section-title {
        color: var(--white);
        margin-bottom: 40px;
    }
    
    .about .section-title:after {
        background: var(--white);
    }
    
    .about-content {
        position: relative;
        z-index: 2;
    }
    
    /* New grid layout */
    .about-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        align-items: center;
    }
    
    /* Feature grid layout */
    .feature-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
    
    .feature-column {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }
    
    /* Feature box styles */
    .feature-box {
        background: rgba(255, 255, 255, 0.1);
        color: var(--white);
        padding: 30px;
        border-radius: 10px;
        transition: transform 0.3s ease;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        min-height: 200px;
        display: flex;
        flex-direction: column;
    }
    
    .feature-box:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .feature-box h3 {
        margin-bottom: 15px;
        font-size: 1.5rem;
        color: var(--white);
    }
    
    .feature-box p {
        color: rgba(255, 255, 255, 0.8);
        line-height: 1.6;
        flex-grow: 1;
    }
    
    /* Right column - images */
    .about-image {
        display: grid;
        grid-template-columns: fr;
        gap: 20px;
    }
    
    .image-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .character-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }
    
    .character-img:hover {
        transform: scale(1.05);
    }
    
    /* Logo container styles */
    .logo-container {
        display: flex;
        gap: 15px;
        margin-top: 15px;
    }
    
    .logo-img {
        height: 40px;
        width: auto;
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .about-grid {
            grid-template-columns: 1fr;
        }
        
        .feature-grid {
            grid-template-columns: 1fr;
        }
        
        .about-image {
            grid-template-columns: 1fr 1fr;
            margin-top: 30px;
        }
    }
    
    @media (max-width: 768px) {
        .image-container {
            grid-template-columns: 1fr;
        }
        .hide-on-mobile {
        display: none !important;
        }
    }
</style>