<div class="outerDiv">
    <div class="innerDiv">
        <img class="image" src="{{ $image }}" alt="{{ $name }}">
        <h2 class="name">{{ $name }}</h2>
        <div class="priceNdis">
            <p>Price: ${{ $price }}</p>
            <p>Discount Available?: {{ $discount ? 'Yes' : 'No' }}</p>
        </div>
        <hr>
        <p class="description"><q>{{ $description }}</q></p>
        <div class="btnDiv">
            <button class="buyBtn">Buy</button>
        </div>
    </div>
</div>