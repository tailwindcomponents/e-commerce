@extends('_layouts.master')

@section('body')
<div class="container mx-auto px-6">
    <h3 class="text-gray-700 text-2xl font-medium">Checkout</h3>
    <div class="md:flex mt-8">
        <div class="w-full md:w-1/2">
            <div class="flex items-center">
                <button class="flex text-sm text-blue-500"><span class="flex items-center justify-center text-white bg-blue-500 rounded-full h-5 w-5 mr-2">1</span> Contacts</button>
                <button class="flex text-sm text-gray-700 ml-8"><span class="flex items-center justify-center border-2 border-blue-500 rounded-full h-5 w-5 mr-2">2</span> Shipping</button>
                <button class="flex text-sm text-gray-500 ml-8"><span class="flex items-center justify-center border-2 border-gray-500 rounded-full h-5 w-5 mr-2">3</span> Payments</button>
            </div>
        </div>
        <div class="w-full md:w-1/2">

        </div>
    </div>
</div>
@endsection
