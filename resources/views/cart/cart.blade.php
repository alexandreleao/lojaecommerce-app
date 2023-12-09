<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Shop') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
                <div class=card style="width: 18rem;">
                    <img src="https://via.placeholder.com/400x350" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-title" style="font-size: 20px;">
                        This is a test product
                        </h1>
                        <p class="card-text">Some quick example text to build on the card title and make 
                            up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-danger mt-3">Adicionar ao carrinho</a> 
                    </div>
                </div>
            </div>
            @endforeach 
        </div>

    </div>
</div>


</x-app-layout>