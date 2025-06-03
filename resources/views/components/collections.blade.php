<section id="collections" class="collections">
    <div class="container">
        <h2 class="section-title fade-in">COLLECTIONS BUBBLE BOMBNFT'S</h2>

        <div class="collection-tiers fade-in">
            <div class="tier">
                <h3>800+</h3>
                <p>Basic Characters</p>
            </div>
            <div class="tier">
                <h3>200+</h3>
                <p>Epic Characters</p>
            </div>
            <div class="tier">
                <h3>10</h3>
                <p>Mythical Characters<br><small>(for top 20 $BOMB holders)</small></p>
            </div>
        </div>
        
        <div class="collection-showcase">
            <div class="showcase-section fade-in">
                <h3>BASIC COLLECTION</h3>
                <div class="nft-grid">
                    <div class="nft-card">
                        <div class="nft-placeholder"></div>
                        <h4>BUBBLE BOMB #001</h4>
                    </div>
                    <div class="nft-card">
                        <div class="nft-placeholder"></div>
                        <h4>BUBBLE BOMB #002</h4>
                    </div>
                    <div class="nft-card">
                        <div class="nft-placeholder"></div>
                        <h4>BUBBLE BOMB #003</h4>
                    </div>
                    <div class="nft-card">
                        <div class="nft-placeholder"></div>
                        <h4>BUBBLE BOMB #004</h4>
                    </div>
                </div>
            </div>
            
            <div class="showcase-section fade-in">
                <h3>EPIC COLLECTION</h3>
                <div class="nft-grid">
                    <div class="nft-card epic">
                        <div class="nft-placeholder"></div>
                        <h4>EPIC BOMB #001</h4>
                    </div>
                    <div class="nft-card epic">
                        <div class="nft-placeholder"></div>
                        <h4>EPIC BOMB #002</h4>
                    </div>
                    <div class="nft-card epic">
                        <div class="nft-placeholder"></div>
                        <h4>EPIC BOMB #003</h4>
                    </div>
                    <div class="nft-card epic">
                        <div class="nft-placeholder"></div>
                        <h4>EPIC BOMB #004</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .collections {
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
    
    .collections .section-title:after {
        background: var(--white);
    }
    
    .collection-tiers {
        display: flex;
        justify-content: space-around;
        margin-bottom: 60px;
        text-align: center;
    }
    
    .tier {
        padding: 20px;
        border: 2px solid var(--black);
        width: 200px;
    }
    
    .tier h3 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .showcase-section {
        margin-bottom: 60px;
    }
    
    .showcase-section h3 {
        margin-bottom: 30px;
        text-align: center;
    }
    
    .nft-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 30px;
    }
    
    .nft-card {
        background: var(--black);
        color: var(--white);
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    
    .nft-card:hover {
        transform: translateY(-10px);
    }
    
    .nft-placeholder {
        height: 220px;
        background: #333;
        position: relative;
    }
    
    .nft-placeholder:before {
        content: 'NFT';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2rem;
        font-weight: bold;
        opacity: 0.5;
    }
    
    .nft-card h4 {
        padding: 15px;
        text-align: center;
        font-size: 0.9rem;
    }
    
    .nft-card.epic .nft-placeholder {
        background: #222;
    }
    
    .nft-card.epic .nft-placeholder:before {
        content: 'EPIC';
    }
    
    @media (max-width: 768px) {
        .collection-tiers {
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
    }
</style>

