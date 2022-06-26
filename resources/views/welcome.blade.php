@extends('base')

@section('content')
	<main>
      <section>
          <div class="result">
          	@if(count($products) > 1)
          		<p>{{ count($products) }} results</p>
          	@else
          		<p>{{ count($products) }} result</p>
          	@endif
          </div>
          <div class="card-ctnr">
          		@foreach($products as $product)

              <a href="{{ route('product', ['id' => $product->id]) }}" class="card">
                  <img src="{{ str_replace('img/contrib', 'img/img/contrib', asset($product->image)) }}"  alt="">
                  <p>{{ $product->name }}</p>
                  <p>{{ $product->price }}€</p>
              </a>
              @endforeach
          </div>
      </section>
  </main>
@endsection