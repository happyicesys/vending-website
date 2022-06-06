@extends('layouts.app')

@section('content')
<div class="flex flex-col gap-0 w-screen h-screen md:flex-row">
    <div class="bg-center bg-auto bg-no-repeat w-full h-full md:w-3/5 h-4/5 bg-contain mx-auto" style="background-image:url('/img/products/ice-cream-vending-machine.png')">
    </div>
    <div class="text-center md:w-2/5 mx-10">
        <div class="text-2xl md:text-4xl font-bold leading-loose md:pt-10">
            ICE CREAM <br>
            VENDING MACHINE
        </div>
        <div class="text-2xl md:text-3xl font-semi-bold">
            Model-E
        </div>
        <div class="text-base text-slate-400 py-5">
            Est Delivery: 4 to 6 weeks
        </div>
        <button class="border border-1 border-gray-400 justify-between px-5 py-3 rounded-full tracking-wide active:border-blue-500 active:border-2 active:transition active:ease-in-out md:text-lg">
            <span class="px-2">
                Model-E
            </span>
            <span class="px-2">
                S$10,000
            </span>
        </button>
    </div>
</div>
@endsection