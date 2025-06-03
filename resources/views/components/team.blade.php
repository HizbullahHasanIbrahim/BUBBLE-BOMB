<section id="team" class="team">
    <div class="container">
        <div class="team-grid">
            <div class="vision-container fade-in">
                <h2 class="section-title">OUR VISIONS</h2>
                <div class="vision-section">
                    <p>Our vision is to revive the popularity of NFTs by creating unique, high-quality digital art that provides real value to collectors. We believe in building a strong community around our project and offering utility beyond just the artwork.</p>
                    <p>With Bubble Bomb NFT's, we aim to bridge the gap between digital art collection and gaming, creating an ecosystem where owning our NFTs provides both aesthetic pleasure and functional benefits.</p>
                </div>
            </div>
            
            <div class="team-container fade-in">
                <h2 class="section-title">OUR TEAMS</h2>
                <div class="team-section">
                    <div class="team-members">
                        <div class="team-member">
                            <div class="member-avatar"><img src="/images/ZEN.JPG" alt="Zen"></div>
                            <h3>Zen</h3>
                            <p>Project Management & Strategy</p>
                        </div>
                        <div class="team-member">
                            <div class="member-avatar"><img src="/images/ADANIX.JPG" alt="Adanix"></div>
                            <h3>Adanix</h3>
                            <p>Website & Smart Contract Development</p>
                        </div>
                        <div class="team-member">
                            <div class="member-avatar"><img src="/images/JENIFER.JPG" alt="Jenifer"></div>
                            <h3>Jenifer</h3>
                            <p>NFT Art & Visual Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="partners-container fade-in">
            <h2 class="section-title">SUPPORTED BY</h2>
            <div class="partners-section">
                <div class="partners-grid">
                    <div class="partner-logo">
                        <img src="/images/LOGO BLUE.png" alt="Blue Partner Logo">
                    </div>
                    <div class="partner-logo">
                        <img src="/images/LOGO PUMP FUN.png" alt="Pump Fun Logo">
                    </div>
                    <div class="partner-logo">
                        <img src="/images/LOGO ELANG.png" alt="Elang Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .team {
        background: 
            url('/images/background3.png') no-repeat center center,
            radial-gradient(circle, rgba(5, 5, 5, 0.7) 0%, rgba(88, 88, 88, 0.7) 100%);
        background-size: cover;
        background-blend-mode: normal, multiply, overlay;
        color: var(--white);
        position: relative;
        overflow: hidden;
        padding: 80px 0;
    }
    
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    
    .team-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        margin-bottom: 80px;
    }
    
    /* Glass Effect for Content Sections */
    .vision-section, .team-section, .partners-section, .team-member, .partner-logo {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 25px;
        transition: all 0.3s ease;
    }

    /* Hover Effects */
    .vision-section:hover, .team-section:hover, .partners-section:hover, .team-member:hover, .partner-logo:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .vision-container, .team-container, .partners-container {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .vision-section, .team-section, .partners-section {
        margin-top: 15px;
        flex: 1;
    }
    
    .section-title {
        font-size: 2rem;
        margin-bottom: 15px;
        color: var(--white);
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        padding-bottom: 15px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
    }

    .partners-container .section-title {
        text-align: center;
    }

    .partners-container .section-title:after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .team-members {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    .team-member {
        text-align: center;
        padding: 20px;
        height: 100%;
    }
    
    .member-avatar {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto 20px;
        border: 2px solid var(--white);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }
    
    .team-member:hover .member-avatar {
        transform: scale(1.05);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
    }
    
    .member-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .team-member h3 {
        margin-bottom: 10px;
        font-size: 1.2rem;
        color: var(--white);
    }
    
    .team-member p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.9rem;
    }
    
    .partners-container {
        text-align: center;
        margin-top: 60px;
    }
    
    .partners-section {
        max-width: 800px;
        margin: 15px auto 0;
    }
    
    .partners-grid {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 40px;
    }
    
    .partner-logo {
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        padding: 15px 25px;
        background: rgba(255, 255, 255, 0.08);
        min-width: 200px;
    }
    
    .partner-logo img {
        height: 100%;
        width: auto;
        object-fit: contain;
        max-width: 180px;
    }
    
    /* Animation */
    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @media (max-width: 768px) {
        .team-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .team-members {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .partners-grid {
            flex-direction: column;
            gap: 30px;
        }
        
        .partner-logo {
            height: 60px;
        }
        
        .partner-logo img {
            max-width: 120px;
        }
    }
</style>