<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeFashion</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class="header-ctnr">
            <img src="{{asset('img/logo/logo.svg')}}" alt="">
            <nav>
                <ul>
                    <li><a href="">SOLDE</a></li>
                    <li><a href="">HOMME</a></li>
                    <li><a href="">FEMME</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section>
            <div class="result"><p>4 result</p></div>
            <div class="card-ctnr">
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
                <div class="card">
                    <img src="{{asset('img/hommes/0693445251_1_1_1.jpg')}}" alt="">
                    <p>Nom du produit</p>
                    <p>Prix</p>
                </div>
            </div>

        </section>
    </main>

    <footer>
        <div class="infos-ctnr">
            <ul>
                <li><a href="">Mentions légales</a></li>
                <li><a href="">Presse</a></li>
                <li><a href="">Fabrication</a></li>
            </ul>
        </div>
        <div class="service-ctnr">
            <ul>
                <li><a href="">Contactez nous</a></li>
                <li><a href="">Livraison & Retour</a></li>
                <li><a href="">Conditions de vente</a></li>
            </ul>
        </div>
        <div class="social">
            <div class="facebook">
                <img src="{{asset('img/logo/facebook.svg')}}" alt="">
                <a href="">Facebook</a>
            </div>
            <div class="instagram">
                <img src="{{asset('img/logo/instagram.svg')}}" alt="">
                <a href="">Instagram</a>
            </div>
            <div class="newsletter">
                <img src="{{asset('img/logo/news.svg')}}" alt="">
                <a href="">Newsletter</a>
            </div>
        </div>
    </footer>

    <script src="{{asset('javascript/main.js')}}"></script>
</body>
</html>