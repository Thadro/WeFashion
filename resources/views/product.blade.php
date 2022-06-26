@extends('base')

@section('content')
	<main class="main-product">
        <section class="info-product">
            <div class="produit-ctnr">
                <div class="img-info">
                    <div class="img-ctnr">
                        <img src="{{ str_replace('img/contrib', 'img/img/contrib', asset($product->image)) }}" alt="">
                    </div>
                    <div class="infos-produit">
                        <p>Catégorie : {{ $product->category->name }}</p>
                        <p>Nom : {{ $product->name }}</p>
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
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </section>
    </main>
@endsection