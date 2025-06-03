<footer class="footer">
    <div class="marquee-container">
        <div class="marquee-text">BUBBLE BOMB NFT'S • BUBBLE BOMB NFT'S • BUBBLE BOMB NFT'S •</div>
    </div>
    
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h3>BUBBLE BOMB NFT'S</h3>
                <p>A SIMPLE INK STROKE WILL BECOME A MASTERPIECE ON THE RIGHT PERSON.</p>
            </div>
            
            <div class="footer-links">
                <div class="footer-nav">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#tokenomics">Tokenomics</a></li>
                        <li><a href="#collections">Collections</a></li>
                        <li><a href="#team">Team</a></li>
                    </ul>
                </div>
                
                <div class="footer-social">
                    <h4>Connect With Us</h4>
                    <div class="social-icons">
                        <a href="#" class="social-icon">TG</a>
                        <a href="#" class="social-icon">TW</a>
                        <a href="#" class="social-icon">DC</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 Bubble Bomb NFT's. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: #111;
        padding: 0 0 20px;
        position: relative;
        overflow: hidden;
    }
    
    .marquee-container {
        height: 80px;
        overflow: hidden;
        position: relative;
        margin-bottom: 40px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    
    .marquee-text {
        font-size: 5rem;
        font-weight: 800;
        color: rgba(255,255,255,0.05);
        white-space: nowrap;
        position: absolute;
        width: 200%;
        animation: marquee 20s linear infinite;
        line-height: 80px;
        text-transform: uppercase;
    }
    
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-bottom: 40px;
    }
    
    .footer-logo h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    
    .footer-links {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
    
    .footer-nav h4, .footer-social h4 {
        margin-bottom: 20px;
        font-size: 1.2rem;
    }
    
    .footer-nav ul {
        list-style: none;
        padding: 0;
    }
    
    .footer-nav li {
        margin-bottom: 10px;
    }
    
    .footer-nav a {
        color: #fff;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }
    
    .footer-nav a:hover {
        opacity: 0.7;
    }
    
    .social-icons {
        display: flex;
        gap: 15px;
    }
    
    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #fff;
        color: #000;
        text-decoration: none;
        font-weight: bold;
        transition: transform 0.3s ease;
    }
    
    .social-icon:hover {
        transform: translateY(-5px);
    }
    
    .footer-bottom {
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
        font-size: 0.8rem;
        opacity: 0.7;
    }
    
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
        }
        
        .marquee-text {
            font-size: 3rem;
            line-height: 60px;
        }
        
        .marquee-container {
            height: 60px;
        }
    }
</style>