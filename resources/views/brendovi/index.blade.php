<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Proizvođači') }}
        </h2>
    </x-slot>
    
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg bg-cover" style="background-image:url('/slika1.jpg')">

               <div class="p-2">
                   <h1 class="font-x2 bg-fuchsia-200" >Ovdje su izlistane kompanije</h1>
                   @foreach($brends as $brend)
                   <p class='p-2'>{{$loop->iteration}}.{{$brend->ime}}-{{$brend->porijeklo}}</p>
                   @endforeach
</div>
            </div>
        </div>
    </div>
</x-app-layout>