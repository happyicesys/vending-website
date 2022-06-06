@extends('layouts.app')

@section('content')
    <div class="mx-auto h-screen w-screen bg-contain bg-no-repeat bg-center" style="background-image:url('/img/backgound-index.jpg')">
        <div class="h-full flex flex-col justify-between bg-slate-200 bg-opacity-30">
            <div class="flex items-start justify-center text-center p-10">
                <h1 class="text-2xl md:text-5xl font-bold leading-normal mb-10">
                Ice Cream <br>
                Vending Machine
                </h1>
            </div>
            <div class="flex justify-center text-center p-12">
                <a href="/ice-cream-vending-machine" class="px-5 py-3 mb-10 rounded-full bg-gray-700 text-white">
                    Order Now
                </a>
            </div>
        </div>
    </div>
@endsection