@extends('layouts.app')
@section('content')


<!-- navigation -->
<div class="container mx-auto px-12 py-4 flex items-center gap-3 ">

<a href="" class="text-primary text-base ">
    <i class="fas fa-home"></i>
</a>

<span class="text-sm text-gray-400 ">
    <i class="fas fa-chevron-right"></i>
</span>

<p class="text-gray-600 font-medium">Loja</p>

</div>
<!-- end navigation -->

<!-- Loja-->

<div class="container mx-auto px-12 py-4 grid grid-cols-4 gap-6 pt-4 pb-16 items-start">

<!-- sidebar -->
<div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hidden">
    <div class="divide-y divide-gray-200 space-y-5">

        <!-- categorias filtro -->
        <div>
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categorias</h3>
            <div class="space-y-2">
                <!-- single -->
                <div class="flex items-center">
                    <input type="checkbox" name="" id="cat-1" class="text-blue">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Sofa</label>
                    <div class="ml-auto text-gray-600 text-sm">
                        (14)
                    </div>
                </div>

                  <!-- single -->
                  <div class="flex items-center">
                    <input type="checkbox" name="" id="cat-1" class="text-blue">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Cama</label>
                    <div class="ml-auto text-gray-600 text-sm">
                        (15)
                    </div>
                </div>

                  <!-- single -->
                  <div class="flex items-center">
                    <input type="checkbox" name="" id="cat-1" class="text-blue">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Escritório</label>
                    <div class="ml-auto text-gray-600 text-sm">
                        (13)
                    </div>
                </div>

                  <!-- single -->
                  <div class="flex items-center">
                    <input type="checkbox" name="" id="cat-1" class="text-blue">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Varanda</label>
                    <div class="ml-auto text-gray-600 text-sm">
                        (12)
                    </div>
                </div>

                  <!-- single -->
                  <div class="flex items-center">
                    <input type="checkbox" name="" id="cat-1" class="text-blue">
                    <label for="cat-1" class="text-gray-600 ml-3 cursor-pointer">Cozinha</label>
                    <div class="ml-auto text-gray-600 text-sm">
                        (5)
                    </div>
                </div>

                  
            </div>
        </div>

        <!-- pricing -->
        <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Preço</h3>
            <div class="mt-4 flex items-center ">
                <input class="w-full border border-gray-300 focus:border-primary focus:ring-0 px-3 py-1
                text-gray-600 text-sm rounded" placeholder="min" type="text" name="" id="">
                <span class="mx-3 text-gray-400">-</span>
                <input class="w-full border border-gray-300 focus:border-primary focus:ring-0 px-3 py-1
                text-gray-600 text-sm rounded" placeholder="max" type="text" name="" id="">
            </div>
        </div>
        <!-- end pricing -->

        <!-- size filter -->
        <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Tamanho</h3>
            <div class="flex items-center gap-3">
                <!-- single size -->
                <div class="size-selector">
                    <input type="radio" class="hidden" name="size" id="size-xs">
                    <label for="size-xs" class=" cursor-pointer text-xs border border-gray-200 rounded-sm h-6 w-6
                    flex items-center justify-center cursor pointer shadow-sm text-gray-600 ">XS</label>
                </div>

                  <!-- single size -->
                  <div class="size-selector">
                    <input type="radio" class="hidden" name="size" id="size-xs">
                    <label for="size-xs" class=" cursor-pointer text-xs border border-gray-200 rounded-sm h-6 w-6
                    flex items-center justify-center cursor pointer shadow-sm text-gray-600 ">S</label>
                </div>

                  <!-- single size -->
                  <div class="size-selector">
                    <input type="radio" class="hidden" name="size" id="size-xs">
                    <label for="size-xs" class=" cursor-pointer text-xs border border-gray-200 rounded-sm h-6 w-6
                    flex items-center justify-center cursor pointer shadow-sm text-gray-600 ">M</label>
                </div>

                  <!-- single size -->
                  <div class="size-selector">
                    <input type="radio" class="hidden" name="size" id="size-xs">
                    <label for="size-xs" class=" cursor-pointer text-xs border border-gray-200 rounded-sm h-6 w-6
                    flex items-center justify-center cursor pointer shadow-sm text-gray-600 ">XL</label>
                </div>
            </div>
        </div>
        <!-- end size filter -->
    </div>
</div>

<!-- produtos -->

<div class="col-span-3">
    <!-- sorting -->

    <div class="flex items-center mb-4">
        <select class="w-44 text-sm text-gray-600 px-4 py-3 border border-gray-300 shadow-sm rounded focus:ring-primary
        focus:border-primary" name="" id="">
            <option>Ordenar por</option>
            <option>Preço baixo-alto</option>
            <option>Preço alto-baixo</option>
            <option>Produtos recentes</option>
        </select>

        <div class="flex gap-2 ml-auto ">
            <div class="border border-primary w-10 h-9 flex items-center justify-center text-white
            bg-primary rounded cursor-pointer">
            <i class="fas fa-th"></i>
            </div>

            <div class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600
            rounded cursor-pointer hover:border-primary">
            <i class="fas fa-list"></i>
            </div>
        </div>
    </div>

     <!-- lista de produtos-->
     <!-- grid de produtos -->
<div class="grid grid-cols-3 gap-6">


    @foreach( $products as $product)
    <!-- divisao dos produtos-->
    <div class="bg-white shadow rounded overflow-hidden group">
    <!-- product image -->
    <div class="relative">
        <img src="{{$product['gallery']}}" class="w-full" alt="">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2
        opacity-0 group-hover:opacity-100 transition">
            <a href="" class="text-white text-lg w-9 h-8 rounded bg-primary flex items-center justify-center
            hover:bg-gray-800 transition">
                <i class="fas fa-search "></i>
            </a>
            <a href="" class="text-white text-lg w-9 h-8 rounded bg-primary flex items-center justify-center
            hover:bg-gray-800 transition">
                <i class="fas fa-heart"></i>
            </a>
        </div>
    </div>
    <!-- end product image -->

    <!-- product content -->
    <div class="pt-4 pb-3 px-4">
        <a href="details/{{$product['id']}}">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
            {{$product['name']}}
            </h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
            <p class="text-xl text-primary font-semibold ">{{$product['price']}}</p>
            <p class="text-sm text-gray-400 line-through">780.000kz</p>
        </div>
        <div class="flex items-center">
            <div class="flex gap-3 text-sm text-yellow-400 ">
                <span>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
            </div>
            <div class="text-xs text-gray-500 ml-3">
                (150)
            </div>
        </div>
    </div>
    <!-- end product content -->

    <!-- button -->
    <form action="/add-to-cart" method="POST">
    @csrf
    <a href="" class="block w-full py-1 text-center text-white bg-primary border border-primary
    rounded-b hover:bg-transparent hover:text-primary transition">Adicionar ao carinho</a>
    </form>
     </div>
     <!-- end divisao dos produtos -->         
    @endforeach

</div>
    
  
</div>

<!-- END PRODUCTS -->
</div>

<!-- end loja -->


@endsection