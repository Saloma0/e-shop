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
    <div class="container mx-auto px-12  gap-2 grid grid-cols-12 items-start pb-16 pt-4">

        <!-- check out form -->
        <div class="col-span-8 border border-gray-200 p-4 rounded">
                <h3 class="text-lg font-medium capitalize mb-4">
                    Checkout
                </h3>
                <div class="space-y-4 ">
                   
                    <div>
                        <label for="apelido" class="text-gray-600 mb-2 block
                        "> Endereço  <span class="text-primary">*</span></label>
                        <input class="block w-full border border-gray-300
                        px-4 py-3 text-grat-600 text-sm rounded placeholder-gray-400
                        focus:ring-0 " type="text" name="apelido" id="">
                    </div>

                    <div>
                        <label for="apelido" class="text-gray-600 mb-2 block
                        ">Província  <span class="text-primary">*</span></label>
                        <input class="block w-full border border-gray-300
                        px-4 py-3 text-grat-600 text-sm rounded placeholder-gray-400
                        focus:ring-0 " type="text" name="apelido" id="">
                    </div>

                   
                </div>
        </div>
        <!-- checkout form -->

        <!-- sidebar -->
        <div class="col-span-4 border border-gray-200 p-4 rounded">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">Resumo de compra</h4>
  
            <div class="space-y-2 uppercase">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-gray-800 font-medium">Sofa Italiano</h5>
                        <p class="text-sm text-gray-600">Size:M</p>
                    </div>

                    <p class="text-gray-600">x1</p>

                    <p class="text-gray-800 font-medium">
                        500.000kz
                    </p>
                </div>

            </div>

            
            <div class="flex justify-between border-b border-gray-200 
            text-gray-800 my-3 font-medium uppercase">
                <p>Entrega</p>
                <p>0kz</p>
            </div>

            <div class="flex justify-between border-b border-gray-200 
            text-gray-800 my-3 font-medium uppercase">
                <p class="font-semibold">Total</p>
                <p>500.000kz</p>
            </div>

            <div class="flex items-center mb-4 mt-2">
                <input type="checkbox" name="agreeemt" class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                <label for="agreeemt" class="text-gray-600 ml-3 cursor-pointer text-sm " >Aceito os <a href="" class="text-primary">termos e condições</a> </label>
            </div>

            <div class="mt-2">
                <a href="thanks.html" class="w-full text-center block bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md 
                hover:bg-transparent hover:text-primary transition">Comprar</a>
            </div>
           
        </div>
        <!-- end sidebar -->

    </div>

    <!-- end check out -->
@endsection