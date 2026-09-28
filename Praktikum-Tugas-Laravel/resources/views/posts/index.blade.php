{{-- <div>
    <p>Hello</p>
    @foreach ($posts as $post)
        <h2>{{ $post -> title}}</h2>
        @if($post -> publised)
            <span>publised</span>
        @else
            <span>drat</span>
        @endif
    @endforeach
{{--
    <p>Selamat datang, {{ auth()->user()->name }}</p>

    @if ($product->stock < 10)
    <span class="text-yellow-600">Stok menipis</span>
    @endif

    @foreach ($products as $product)
    <p>{{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}</p>
@endforeach --}}



    @datetime($post->created_at)
</div> --}}
