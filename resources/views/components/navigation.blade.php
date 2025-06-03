<nav class="main-nav">
    <div class="container">
        <div class="nav-container">
            <div class="logo">
                <img src="/images/Logo Pojok.png" alt="Bubble Bomb Icon" style="height: 30px; vertical-align: middle; margin-right: 8px;">
                <a href="/">BUBBLE BOMB</a>
            </div>
            
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-links">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT US</a></li>
                <li><a href="#tokenomics">TOKENOMICS</a></li>
                <li><a href="#collections">COLLECTIONS</a></li>
                <li><a href="#team">TEAM</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
    :root {
        --white: #ffffff;
        --black: #000000;
        --glass-bg: rgba(255, 255, 255, 0.1);
        --glass-border: rgba(255, 255, 255, 0.18);
    }
    
    .main-nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        padding: 20px 0;
        transition: all 0.3s ease;
        
        /* Glass Effect Styles */
        background: var(--glass-bg);
        backdrop-filter: blur(40px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--glass-border);
    }
    
    .nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo a {
        color: var(--white);
        text-decoration: none;
        font-weight: 800;
        font-size: 1.5rem;
        letter-spacing: 2px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .nav-links {
        display: flex;
        list-style: none;
    }
    
    .nav-links li {
        margin-left: 30px;
    }
    
    .nav-links a {
        color: var(--white);
        text-decoration: none;
        font-weight: 600;
        letter-spacing: 1px;
        position: relative;
        padding: 5px 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .nav-links a:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--white);
        transition: width 0.3s ease;
    }
    
    .nav-links a:hover:after {
        width: 100%;
    }
    
    .menu-toggle {
        display: none;
        flex-direction: column;
        cursor: pointer;
    }
    
    .menu-toggle span {
        display: block;
        width: 25px;
        height: 3px;
        background: var(--white);
        margin-bottom: 5px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    @media (max-width: 768px) {
        .menu-toggle {
            display: flex;
        }
        
        .nav-links {
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            /* Glass Effect for Mobile */
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
            clip-path: circle(0 at top right);
            transition: clip-path 0.5s ease;
        }
        
        .nav-links.active {
            clip-path: circle(150% at top right);
        }
        
        .nav-links li {
            margin: 15px 0;
        }
        
        .menu-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .menu-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }
    }
</style>