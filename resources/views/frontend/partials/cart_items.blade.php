@forelse ($cart as $key => $item)
    <div class="row mb-2 shadow-sm">
        <div class="col-3">
            <img class="img-fluid" src="{{ asset('storage/productimage/' . $item['image']) }}">
        </div>

        <div class="col-7">
            <strong>{{ $item['title'] }}</strong>
            <p class="mb-0">Qty: {{ $item['quantity'] }}</p>
            <p class="mb-0">Price: {{ $item['price'] }} * {{ $item['quantity'] }} = {{ $item['price'] * $item['quantity'] }} tk</p>
        </div>

        <div class="col-2 d-flex justify-content-center align-items-center">
            <a href="#" onclick="deletCart('{{ $key }}'); return false;">
                <iconify-icon icon="emojione-v1:cross-mark" width="28" height="28"></iconify-icon>
            </a>
        </div>
    </div>
@empty
    <p class="text-center">Cart is empty</p>
@endforelse
