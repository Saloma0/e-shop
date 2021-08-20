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

<span class="text-sm text-gray-400 ">
    <i class="fas fa-chevron-right"></i>
</span>

<p class="text-gray-600 font-medium">Produto</p>

</div>
<!-- end navigation -->

<!-- Product View -->

<div class="container mx-auto px-12 grid grid-cols-2 gap-6">

<!-- product image -->
<div>
<img src="{{$product['gallery']}}" class="w-full" alt="">
</div>

<!-- product content -->
<div>
<h2 class="text-3xl font-medium uppercase mb-2">{{$product['name']}}</h2>
<div class="flex items-center mb-4">
    <div class="flex gap-1 text-sm text-yellow-400">
        <span>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </span>
    </div>

    <div class="text-xs text-gray-500 ml-3">
        (150 Reviews)
    </div>
</div>

<div class="space-y-1">
<p class="text-gray-800 font-semibold space-x-2">
    <span>Disponibilidade:</span>
    <span class="text-yellow-600">Últimos em stock</span>
</p>

<p class="space-x-2">
    <span class="text-gray-800 font-semibold">Categoria:</span>
    <span class="text-gray-600">{{$product['category']}}</span>
</p>

</div>

<div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
<p class="text-xl text-primary font-semibold ">{{$product['price']}}</p>
<p class="text-base text-gray-400 line-through">780.000kz</p>
</div>

<p class="mt-4 text-base text-justify text-gray-600">
{{$product['description']}}
</p>


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

        <!-- quantity  -->
        <div class="mt-4">
            <h3 class="text-s text-gray-800 uppercase
            mb-1">Quantidade</h3>

        <div class="flex border border-gray-300
        text-gray-600 divide-x divide-gray-300 w-max">
            <div class="h-8 w-8 text-xl flex items-center
            justify-center cursor-pointer select-none">-
            </div>
            <div class="h-8 w-8 text-base flex items-center
            justify-center cursor-pointer select-none">1
            </div>
            <div class="h-8 w-5 text-xl flex items-center
            justify-center cursor-pointer select-none">+
            </div>
        </div>

        </div>

        <!-- end quantity -->

        <!-- cart button -->

        <div class="flex gap-3 border-b border-gray-200
        pb-5 mt-6">
        <form action="/add-to-cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="border border-primary bg-primary text-white px-8 py-4 
            font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent
            hover:text-primary transition">
                <i class="fas fa-shopping-bag"> Adicionar ao carinho</i>
           </button>
         </form>

            <a class=" border border-gray-300 text-gray-600 px-8 py-2 
            font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent
            hover:text-primary transition" href="/checkout">
               Comprar
            </a>
        </div>

        <!-- end cart button -->
</div>

</div>

<!-- end Product View -->

<!-- product details view -->
<div class="container mx-auto px-12 pt-5 pb-16">
<h3 class="border-b border-gray-200 font-roboto text-gray-800 
pb-3 font-medium text-2xl uppercase">Detalhes do produto</h3>

<div class="w-3/5 pt-6">
    <div class="text-gray-600 space-y-3 text-justify">
       <p>
       {{$product['description']}}
     </p> 
    
    </div>

    <!-- table -->
    <table class="table auto border-collapse w-full text-left
    text-gray-600 text-sm mt-6">
        <tr>
            <th class="py-2 px-4 border border-gray-500 w-40
            font-medium">Disponibilidade</th>
            <td class="py-2 px-4 border border-gray-500 w-40
            ">Ultimos em stock</td>
        </tr>
       
        <tr>
            <th class="py-2 px-4 border border-gray-500 w-40
            font-medium">Categoria</th>
            <td class="py-2 px-4 border border-gray-500 w-40
            ">{{$product['category']}}</td>
        </tr>
    </table>
    <!-- end table -->
</div>
</div>
<!-- end product details view -->


<!-- product section semelhantes-->

<div class="container mx-auto px-12 pb-16">

<h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">
Produtos semelhantes
</h2>

<!-- grid de produtos -->
<div class="grid grid-cols-4 gap-6">



<!-- divisao dos produtos-->
<div class="bg-white shadow rounded overflow-hidden group">
<!-- product image -->
<div class="relative">
    <img src="images/products/product1.jpg" class="w-full" alt="">
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
    <a href="">
        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
            Cadeira Guyer
        </h4>
    </a>
    <div class="flex items-baseline mb-1 space-x-2 font-roboto">
        <p class="text-xl text-primary font-semibold ">550.000KZ</p>
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
<a href="" class="block w-full py-1 text-center text-white bg-primary border border-primary
rounded-b hover:bg-transparent hover:text-primary transition">Adicionar ao carinho</a>

 </div>
 <!-- end divisao dos produtos -->

  <!-- divisao dos produtos-->
<div class="bg-white shadow rounded overflow-hidden group">
    <!-- product image -->
    <div class="relative">
        <img src="images/products/product2.jpg" class="w-full" alt="">
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
        <a href="">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                Cadeira Guyer
            </h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
            <p class="text-xl text-primary font-semibold ">550.000KZ</p>
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
    <a href="" class="block w-full py-1 text-center text-white bg-primary border border-primary
    rounded-b hover:bg-transparent hover:text-primary transition">Adicionar ao carinho</a>

     </div>
     <!-- end divisao dos produtos -->

     
      <!-- divisao dos produtos-->
<div class="bg-white shadow rounded overflow-hidden group">
    <!-- product image -->
    <div class="relative">
        <img src="images/products/product3.jpg" class="w-full" alt="">
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
        <a href="">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                Cadeira Guyer
            </h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
            <p class="text-xl text-primary font-semibold ">550.000KZ</p>
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
    <a href="" class="block w-full py-1 text-center text-white bg-primary border border-primary
    rounded-b hover:bg-transparent hover:text-primary transition">Adicionar ao carinho</a>

     </div>
     <!-- end divisao dos produtos -->

     
      <!-- divisao dos produtos-->
<div class="bg-white shadow rounded overflow-hidden group">
    <!-- product image -->
    <div class="relative">
        <img src="images/products/product4.jpg" class="w-full" alt="">
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
        <a href="">
            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                Cadeira Guyer
            </h4>
        </a>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
            <p class="text-xl text-primary font-semibold ">550.000KZ</p>
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
    <a href="" class="block w-full py-1 text-center text-white bg-primary border border-primary
    rounded-b hover:bg-transparent hover:text-primary transition">Adicionar ao carinho</a>

     </div>
     <!-- end divisao dos produtos -->


</div>

<!-- end grid de produtos -->

</div>

<!-- end product section -->


@endsection