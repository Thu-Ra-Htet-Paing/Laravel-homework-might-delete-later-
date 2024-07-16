<x-layout>
    <div>
        <h1 id="title">The Best Shopping Website</h1>
        <div class="content">
            @foreach($products as $product)
                <x-card 
                        :image="$product->image" 
                        :name="$product->name" 
                        :price="$product->price" 
                        :discount="$product->discount" 
                        :description="$product->description" 
                />
            @endforeach
        </div>
    </div>
</x-layout>