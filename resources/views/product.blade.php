<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeFashion</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>
<body>
    <header>
        <div class="header-ctnr">
            <a href="{{ route('welcome') }}" class="accueil">
                <img src="{{asset('img/logo/logo.svg')}}" alt="">
            </a>
            <nav>
                <ul>
                    <li><a href="">SOLDE</a></li>
                    <li><a href="">HOMME</a></li>
                    <li><a href="">FEMME</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-product">
        <section class="info-product">
            <div class="produit-ctnr">
                <div class="img-info">
                    <div class="img-ctnr">
                        <img src="{{asset('img/femmes/Wxl-_Port_Jackson-031.jpg')}}" alt="">
                    </div>
                    <div class="infos-produit">
                        <p>Catégorie : Femme</p>
                        <p>Nom : Manteau</p>
                        <form action="">
                            <select name="taille" id="taille">
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                            <button type="submit">ACHETER</button>
                        </form>
                    </div>
                </div>
                <div class="description-product">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos suscipit vitae similique cum beatae cupiditate. Eius, molestiae. Ratione laudantium a magni quis ut odio quos perferendis, esse exercitationem, repudiandae laboriosam?</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-ctnr footer-product" >
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
        </div>
    </footer>

    <script src="{{asset('javascript/main.js')}}"></script>
</body>
</html>