@extends('layouts.app')

@section('content')

    <!-- banner -->

    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('images/banner-bg.jpg');">
        
        <div style="width:60%;" class="ml-12">

            <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
                As melhores coleções para decorações de casa.
            </h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ullam distinctio voluptatum totam iste mollitia. Temporibus similique deleniti voluptatem excepturi qui optio molestias nostrum reprehenderit voluptatibus, ad tempore. 
                Voluptate, dignissimos praesentium.
            </p>

            <div class="mt-12">
                <a href="/loja" class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md 
                hover:bg-transparent hover:text-primary transition">Fazer compras</a>
            </div>
        </div>

    </div>

    <!-- end banner -->


    <!-- features -->

    <div class="container py-16">
        <div class="w-10/12 grid grid-cols-3 gap-6  mx-auto justify-center">

            <!-- single feature -->
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                    <img src="images/icons/delivery-van.svg" class="w-12 h-12 object-contain" alt="">
                    <div>
                        <h4 class="font-medium capitalize text-lg">
                            Entrega grátis
                        </h4>
                        <p class="text-gray-500 text-sm">Pedidos acima de 500.000kz</p>
                    </div>
            </div>

            <!-- single feature -->
            <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                <img src="images/icons/money-back.svg" class="w-12 h-12 object-contain" alt="">
                <div>
                    <h4 class="font-medium capitalize text-lg">
                        Reembolso
                    </h4>
                    <p class="text-gray-500 text-sm">Reembolso disponível no prazo de 30 dias</p>
                </div>
        </div>

        <!-- single feature -->
        <div class="border border-primary rounded-sm px-3 py-6 flex justify-center items-center gap-5">
            <img src="images/icons/service-hours.svg" class="w-12 h-12 object-contain" alt="">
            <div>
                <h4 class="font-medium capitalize text-lg">
                    24/7 online.
                </h4>
                <p class="text-gray-500 text-sm">Atendimento ao cliente</p>
            </div>
    </div>


        </div>
    </div>

    <!-- endfeatures -->


    <!-- product section -->

    <div class="container mx-auto px-4 pb-16">

        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">
            Produtos recentes
        </h2>

        <!-- grid de produtos -->
        <div class="grid grid-cols-4 gap-6">


        @foreach($products as $product)
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
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="block w-full py-1 text-center text-white bg-primary border py-3 text-sm border-primary
    rounded-b hover:bg-transparent hover:text-primary transition" style="hover{color:#FD3057;}">
                <i class="fas fa-shopping-bag"> Adicionar ao carinho</i>
           </button>
         </form>

             </div>
             <!-- end divisao dos produtos -->

             
        @endforeach
                 
        </div>

        <!-- end grid de produtos -->

    </div>

    <!-- end product section -->




@endsection