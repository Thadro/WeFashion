@php
	
	$categories = App\Models\Category::all();

@endphp

<nav>
    <ul>
    		<li><a href="{{ route('welcome') }}">Solde</a></li>
    		@foreach($categories as $category)
        <li><a href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</nav>