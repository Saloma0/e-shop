<?php
use App\Http\Controllers\LojaController;

$total = LojaController::cartItem();
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        .bg-primary{
            background-color:#FD3057;
        }

        .border-primary{
            border-color:#FD3057;
        }
        .text-primary{
            color:#FD3057;
        }

        #summary {
      background-color: #f6f6f6;
    }

    ody{
 margin:0;
 padding: 0;
 font-family: sans-serif;
 
}

input[type="radio"] + label span {
    transition: background .2s,
      transform .2s;
}

input[type="radio"] + label span:hover,
input[type="radio"] + label:hover span{
  transform: scale(1.2);
} 

input[type="radio"]:checked + label span {
  background-color: #3490DC; //bg-blue
  box-shadow: 0px 0px 0px 2px white inset;
}

input[type="radio"]:checked + label{
   color: #3490DC; //text-blue
}


        .dropdown:focus-within .dropdown-menu {
  opacity:1;
  transform: translate(0) scale(1);
  visibility: visible;
}
    </style>
</head>
<body>
    <div>
        
    <!-- Header -->


<header class="py-4 shadow-sm bg-white">

<div class="container mx-auto px-10 flex items-center justify-between">
        <!-- logo -->
        <a href="/">
            <img src="images/logo.png" 
         style="padding-left:5px; width:80px;" alt="">
        </a>

        <!-- search -->
        <div class="w-full max-w-xl relative flex">
           
            <span class="absolute left-4 top-2 text-lg text-gray-400">
                <i class="fas fa-search"></i>
            </span>
            <input type="text" class="w-full border border-primary border-r-0 pl-12 py-2 pr-3 rounded-l-md
            focus:outline-none" placeholder="Pesquisar">
            
            <button class="bg-primary border border-primary text-white px-8 rounded-r-md  hover:text-primary hover:bg-transparent
            transition">
                Search
            </button>
        </div>

        <!-- icons for actions -->
        <div class="flex items-center space-x-7">
           
            <!-- Cart -->
            <a href="/cartlist" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-xl">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <div class="text-xs leading-3">Cart</div>
                <span class="absolute right-2 top-0 w-5 h-5 roudend-full flex items-center justify-center
                bg-primary text-white text-xs">
                <?php
               echo  $total;
                ?>
                </span>

            </a>

            <!-- User
            <a href="" class="text-center text-gray-700 hover:text-primary transition relative">
                <div class="text-xl">
                    <i class="far fa-user"></i>
                </div>

                <div class="text-xs leading-3">Account</div>
                
            </a>-->



        </div>
</div>

</header>

<!-- end header -->

<!-- navbar -->

<nav class="bg-gray-800">
<div class="container mx-auto px-4 flex items-center">
<div class="container flex">
    <!-- all categories -->

    <div class="px-8 py-4 flex items-center  cursor-pointer relative group ">
        <span class="text-white text-lg hover:text-white transition">
            <i class="fas fa-bars"></i>
        </span>
        <span class="capitalize ml-2  text-white text-lg hover:text-white transition">
            Categoria
        </span>

        <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-solid 
        opacity-0 group-hover:opacity-100 transition duration-500 invisible group-hover:visible">

            <a href="" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="images/icons/sofa.svg" class="w-5 h-5 object-contain" alt="">
                <span class="ml-6 text-gray-500 text-sm">
                    Sofa
                </span>
            </a>

            <a href="" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="images/icons/bed.svg" class="w-5 h-5 object-contain" alt="">
                <span class="ml-6 text-gray-500 text-sm">
                    Cama
                </span>
            </a>

            <a href="" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="images/icons/office.svg" class="w-5 h-5 object-contain" alt="">
                <span class="ml-6 text-gray-500 text-sm">
                    Escritório
                </span>
            </a>

            <a href="" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="images/icons/terrace.svg" class="w-5 h-5 object-contain" alt="">
                <span class="ml-6 text-gray-500 text-sm">
                    Varanda
                </span>
            </a>

            <a href="" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <img src="images/icons/restaurant.svg" class="w-5 h-5 object-contain" alt="">
                <span class="ml-6 text-gray-500 text-sm">
                    Cozinha
                </span>
            </a>


        </div>

    </div>

    <!-- navbar links -->
 

</div>

   

<div class="flex items-center justify-between space-x-8 block capitalize">
    <a href="/" class="text-gray-200 hover:text-white transition">Home</a>
    <a href="/loja" class="text-gray-200 hover:text-white transition">Loja</a>
    <a href="" class="text-gray-200 hover:text-white transition">Sobre</a>
    <a href="/afiliados" class="text-gray-200 hover:text-white transition">Afiliados</a>
   
    @if(Session::has('user'))
<!-- start dropdown -->
  <div class="bg-gray-800 relative inline-block text-left dropdown text-center">
    <span class=" bg-gray-800 text-white rounded-md shadow-sm">
    <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-gray-800 border border-gray-800 rounded-md hover:text-white focus:outline-none focus:border-gray-300 active:bg-gray-50 active:text-gray-800" 
       type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
        <span>{{Session::get('user')['name']}}</span>
        <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button
    ></span>
    <div class="opacity-0 invisible dropdown-menu transition-all duration-300 transform origin-top-right -translate-y-2 scale-95">
      <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
       
        <div class="py-3">
        
        <div class="py-3">
          <a href="/logout" tabindex="3" class="text-gray-700 text-center flex justify-between w-full px-4 py-2 text-sm leading-5 text-left"  role="menuitem" >Terminar sessão</a></div>
      </div>
    </div>
  </div>
@else
<div>
    <a href="/login" class="text-gray-200 hover:text-white transition">Login</a>
    </div>
@endif
<!-- enddropdown -->
 </div>  

</div>

</nav>

<!-- end navbar -->


    <div style="">
    @yield('content')
    </div>



    <div>
        @include('layouts.footer')
    </div>
</body>
</html>
