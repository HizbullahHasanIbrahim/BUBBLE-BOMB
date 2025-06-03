<section id="tokenomics" class="tokenomics">
    <div class="container">
        <h2 class="section-title fade-in">TOKENOMICS $BOMB</h2>
        
        <div class="contract-address fade-in">
            <h3>Contract Address: <span class="coming-soon">COMING SOON!</span></h3>
        </div>
        
        <div class="tokenomics-content">
            <!-- Left Side: Pie Chart -->
            <div class="pie-chart-container fade-in">
                <div class="chart-wrapper">
                    <img src="/images/Pie Chart.png" alt="Tokenomics Chart" class="chart-img">
                </div>
                <div class="supply-info">
                    <div class="info-box">
                        <p class="total-supply">Total Supply:</p>
                        <p class="supply-amount">1,000,000,000 BOMB</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Side: How to Buy & Details -->
            <div class="token-info fade-in">
                <div class="how-to-buy">
                    <div class="buy-steps-wrapper">
                        <img src="/images/How to Buy.png" alt="How to Buy Steps" class="buy-steps">
                    </div>
                </div>
                
                <div class="token-details">
                    <div class="detail-item">
                        <span class="detail-label">Ticker:</span>
                        <span class="detail-value">$BOMB</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Taxes:</span>
                        <span class="detail-value">No Taxes</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">LP Status:</span>
                        <span class="detail-value">LP Tokens Burned</span>
                    </div>
                </div>
                
                <div class="nft-rewards">
                    <p class="reward-text">Top 10 $BOMB holders will receive rare NFTs distributed at $20M market cap</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .tokenomics {
        background: 
            url('/images/TRUK BOM.png') no-repeat center center,
            url('/images/background1.png') no-repeat center center,
            radial-gradient(circle, rgba(5, 5, 5, 0.7) 0%, rgba(88, 88, 88, 0.7) 100%);
        background-size: contain, cover, cover;
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
    
    .section-title {
        font-size: 2.5rem;
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        text-align: left;
    }
    
    .contract-address {
        background: rgba(255, 255, 255, 0.15);
        padding: 12px 25px;
        display: inline-block;
        border-radius: 50px;
        margin-bottom: 40px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
    }
    
    .contract-address:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .contract-address h3 {
        color: #fff;
        text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        margin: 0;
        font-size: 1.2rem;
    }
    
    .coming-soon {
        color: #ff4d4d;
        font-weight: 700;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% { opacity: 0.8; }
        50% { opacity: 1; }
        100% { opacity: 0.8; }
    }
    
    .tokenomics-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: stretch;
        gap: 30px;
        margin: 0 auto;
    }
    
    .pie-chart-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 30px;
        height: 100%;
    }
    
    .chart-wrapper {
        background: rgba(255,255,255,0.1);
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.3s ease;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .chart-wrapper:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
        border-color: rgba(255,255,255,0.3);
    }
    
    .chart-img {
        max-width: 100%;
        max-height: 300px;
        width: auto;
        height: auto;
        display: block;
        border-radius: 8px;
        object-fit: contain;
    }
    
    .supply-info {
        text-align: center;
        width: 100%;
    }

    .info-box {
        background: rgba(255,255,255,0.08);
        padding: 25px;
        border-radius: 12px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        width: 100%;
        transition: all 0.3s ease;
    }

    .info-box:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }

    .total-supply {
        font-size: 1.1rem;
        margin-bottom: 10px;
        color: rgba(255,255,255,0.9);
        font-weight: 500;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
    }

    .supply-amount {
        font-size: 1.5rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
        margin: 0;
    }
    
    .token-info {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 25px;
        height: 100%;
    }
    
    .how-to-buy {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .buy-steps-wrapper {
        background: rgba(255,255,255,0.1);
        padding: 25px;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.3s ease;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .buy-steps-wrapper:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
        border-color: rgba(255,255,255,0.3);
    }
    
    .buy-steps {
        max-width: 100%;
        max-height: 200px;
        width: auto;
        height: auto;
        display: block;
        border-radius: 8px;
        object-fit: contain;
    }
    
    .token-details {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        background: rgba(255, 255, 255, 0.08);
        padding: 25px;
        border-radius: 12px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }
    
    .token-details:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.1);
        transition: all 0.3s ease;
    }
    
    .detail-item:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .detail-label {
        font-size: 1rem;
        font-weight: 600;
        color: #fff;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
    }
    
    .detail-value {
        font-size: 1rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
    }
    
    .nft-rewards {
        background: rgba(255, 255, 255, 0.08);
        padding: 25px;
        border-radius: 12px;
        backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }
    
    .nft-rewards:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-10px);
        box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
    }
    
    .reward-text {
        margin: 0;
        font-size: 1rem;
        line-height: 1.5;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        font-weight: 600;
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
        .tokenomics-content {
            gap: 25px;
        }
        
        .chart-img {
            max-height: 250px;
        }
        
        .buy-steps {
            max-height: 180px;
        }
    }
    
    @media (max-width: 768px) {
        .tokenomics-content {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .section-title {
            font-size: 2rem;
            text-align: center;
        }
        
        .token-details {
            grid-template-columns: 1fr;
        }
        
        .chart-img {
            max-height: 220px;
        }
        
        .buy-steps {
            max-height: 160px;
        }
    }
</style>