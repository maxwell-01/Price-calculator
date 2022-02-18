<?php

?>

<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>Pricing Calculator</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>

<body>
    <nav class="nav-bar">

        <div class="nav-menu">
            <div class="nav-menu-item">
                <a href="#projects-section">Projects</a>
            </div>

            <div class="nav-menu-item">
                <a href="https://www.instagram.com/thehopefulhitchhikers/?hl=en" target="_blank">Instagram</a>
            </div>
        </div>

        <div class="nav-title">
            <p class=site-title>Maxwell Newton</p>
        </div>

        <div class="nav-menu">

            <div class="nav-menu-item">
                <a href="https://www.linkedin.com/in/maxwellnewton/" target="_blank">LinkedIn</a>
            </div>

            <div class="nav-menu-item">
                <a href="https://github.com/maxwell-01" target="_blank">GitHub</a>
            </div>

        </div>

    </nav>

    <header>

        <h1>Simple, traffic-based pricing</h1>
        <p>Sign-up for our 30-day trial. No credit card required.</p>

    </header>

    <main>
        <section class="price-calculator-section">
            <div class="price-calculator">
                <div class="calculator-headings">
                    <div class="page-views-counter">
                        <p id="page-views-counter">100k</p>
                        <p>page-views</p>
                    </div>
                    <div class="price-counter">
                        <p class="price-counter-text">$</p>
                        <p class="price-counter-text" id="price-counter">16.00</p>
                        <p class="price-month-text">/month</p>
                    </div>
                </div>
                <div class="slider-container">
                    <input type="range" min="0" max="4" value="2" class="slider" id="slider-input">
                </div>
                <div class="month-yearly-toggle-div">
                    <p>Monthly Billing</p>
                    <input type="checkbox" id="monthly-yearly-switch">
                    <p>Yearly Billing</p>
                    <p class="discount-text">25% discount</p>
                </div>
                <div class="benefits-parent">
                    <div class="benefits-div">
                        <div>
                            <img src="check.png" alt="check-mark" class="benefits-check">
                            <p class="benefits-text">Unlimited websites</p>
                        </div>
                        <div>
                            <img src="check.png" alt="check-mark" class="benefits-check">
                            <p class="benefits-text">100% data ownership</p>
                        </div>
                        <div>
                            <img src="check.png" alt="check-mark" class="benefits-check">
                            <p class="benefits-text">Email reports</p>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Start my trial" class="trial-start-button">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div>
            <div class="footer-item">
                <a href="https://www.instagram.com/thehopefulhitchhikers/?hl=en" target="_blank">Instagram</a>
            </div>

            <div class="footer-item">
                <a href="https://www.linkedin.com/in/maxwellnewton/" target="_blank">LinkedIn</a>
            </div>

            <div class="footer-item">
                <a href="https://github.com/maxwell-01" target="_blank">GitHub</a>
            </div>
        </div>

    </footer>
</body>