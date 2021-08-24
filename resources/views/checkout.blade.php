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


<span class="text-sm text-gray-400 ">
    <i class="fas fa-chevron-right"></i>
</span>

<p class="text-gray-600 font-medium">Checkout</p>



</div>
<!-- end navigation -->


    <!-- check out  -->
  
<div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
      <div class="w-3/4 bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Shopping Cart</h1>
          <h2 class="font-semibold text-2xl">1</h2>
        </div>

        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
       <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>

      
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
         
          <div class="flex w-2/5"> <!-- product -->
            <div class="w-20">
              <img class="h-24" src="{{$product->gallery}}" alt="">
            </div>

      
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm">{{$product->name}}</span>
         </div>
          </div>

          <span class="text-center w-1/5 font-semibold text-sm">{{$product->price}}</span>
          <span class="text-center w-1/5 font-semibold text-sm">{{$product->price}}</span>

        
        </div>

        <a href="/loja" class="flex font-semibold text-indigo-600 text-sm mt-10">
      
          <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
          Continue Shopping
        </a>
      </div>

      <div id="summary" class="w-1/4 px-8 py-10">
        <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Items 1</span>
          <span class="font-semibold text-sm">{{$product->price}} Kz </span>
        </div>
      
        <form action="/orderplace" method="POST">
        @csrf
        <div class="py-5">
          <label for="address" class="font-semibold inline-block mb-3 text-sm uppercase">Endereço</label>
          <input required type="text" id="address" name="address" placeholder="Enter your address" class="p-2 text-sm w-full">
        </div>

        <div class="py-2">
          <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Província</label>
          <input required type="text" id="promo" name="province" placeholder="Enter your code" class="p-2 text-sm w-full">
        </div>
      <!-- Radiogroup button -->

      
      
  <div class="flex items-center mb-4 mt-4">
    <input id="radio1" type="radio" name="radio" value="multicaixa atm" class="hidden" checked />
    <label for="radio1" class="flex items-center cursor-pointer text-sm">
     <span class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink"></span>
     Multicaixa ATM</label>
   </div>

   <div class="flex items-center mb-4">
    <input id="radio2" type="radio" name="radio" value="multicaixa express" class="hidden" />
    <label for="radio2" class="flex items-center cursor-pointer text-sm">
     <span class="w-8 h-8 inline-block mr-2 rounded-full border border-grey flex-no-shrink"></span>
     Multicaixa Express</label>
   </div>
  

      <!-- end radiobutton -->
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total cost</span>
            <span>{{$product->price}} Kz</span>
          </div>
          <button type="submit" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Comprar agora</button>
        </div>
        </form>
      </div>

    </div>
  </div>

    <!-- end check out -->
@endsection