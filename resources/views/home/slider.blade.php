
<section class="promo-banner">
    <div class="content">
        <img src="images/offer.png" alt="offer">
        <p class="highlight">Trade In & Save Big !!!</p>
        @if (Route::has('login'))
                @auth
                <h1>Welcome to the <span1>"Dushh Royal Galerria"</span1> <br> <span>{{ Auth::user()->name }}</span></h1>
                <p class="subtitle">Save more with coupons & up to <strong style="color: crimson">40%</strong> off !</p>
                @else
                <h1>Welcome to the ... <br> <span>Dushh Royal Galerria</span></h1>
                <p class="subtitle">Save more with coupons & up to <strong style="color: crimson">40%</strong> off !</p>
                <p class="cta">Register & Log-in now to get access to our services... <span class="emoji">👉</span></p>
                @endauth
        @endif
    </div>
    <div class="image-container">
        <img src="images/slideshow-character2.png" alt="Fashion Models">
    </div>
</section>

<section class="brand-logos">
    <img src="images/g1.png" alt="Versace">
    <img src="images/g2.png" alt="Zara">
    <img src="images/g3.png" alt="Gucci">
    <img src="images/g4.png" alt="Prada">
    <img src="images/g5.png" alt="Calvin Klein">
</section>





