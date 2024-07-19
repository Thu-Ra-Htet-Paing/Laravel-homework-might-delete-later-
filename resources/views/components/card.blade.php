<div class="outerDiv">
    <div class="innerDiv">
        <img class="image" src="{{ $image }}" alt="{{ $name }}">
        <h2 class="name">{{ $name }}</h2>
        <div class="priceNdis">
            <p>Price: ${{ $price }}<img class="icon-price" src="icons/icons8-price-20.png"></p>
            <p>Discount Available?: 
                @if($discount)
                    Yes <img src="icons/icons8-discount-20.png">
                @else
                    No
                @endif
            </p>
        </div>
        <hr>
        <p class="description"><q>{{ $description }}</q></p>
        <div class="btnDiv">
            <button class="buyBtn">
                <span>Buy</span> 
                <img class="icon-buy" src="icons/icons8-buy-30.png">
            </button>
        </div>
    </div>
</div>