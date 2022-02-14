<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight bg-lime-50  ">
            {{__('Unesi podatke o proizvodu' ) }}    
        </h2>  
    </x-slot>

<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
<div class="bg-lime-100 overflow-hidden shadow-xl sm:rounded-lg">
               <div class="p-2">
           <form method="POST" action="{{route('spremi_proizvod')}}">
        @csrf
        <div>
            <x-jet-label for="naziv" value="{{ __('Naziv')}}"/>
            <x-jet-input id="naziv" class="block mt-1 w-full mb-4" type="text" name="naziv" :value="old('naziv')" required autofocus/>
                 </div>
                 <div>
            <x-jet-label for="kod" value="{{ __('Kod kupovine')}}"/>
            <x-jet-input id="kod" class="block mt-1 w-full mb-4" type="number" name="kod" :value="old('kod')" required autofocus/>
                 </div>
                 <div>
            <x-jet-label for="proizvodnja" value="{{ __('Godina proizvodnje')}}"/>
            <x-jet-input is_dir="proizvodnja" class="block mt-1 w-full mb-4" type="date" name="proizvodnja" :value="old('proizvodnja')" required autofocus/>
</div>
<div>
            <x-jet-label for="cjena" value="{{ __('Cijena artikla')}}"/>
            <x-jet-input id="cjena" class="block mt-1 w-full mb-4" type="text " name="cjena" :value="old('cjena')" required autofocus/>
</div>
<div>
            <x-jet-label for="brend" value="{{ __('Proizvođač')}}"/>
            <select id="brend" name="brend" class="block mt-1 w-full mb-4"  required autofocus/>
            <option selected="true" disabled="disabled">Odaberi</option>
            @foreach ($brends as $brend)
            <option value="{{$brend->id}}">{{$brend->ime}}</option>
            @endforeach
</select>
</div>
<div>
            <x-jet-label for="tipproizvoda" value="{{ __('TIP proizvoda')}}"/>
                    <select id="tipproizvoda" name="tipproizvoda" class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm">
<option selected="true">Odaberi...</option>
<option value="Sjeme">Sjeme</option>
<option value="Alati">Alati</option>
<option value="Ostalo">Ostalo</option>

    </select>
        </div>

<div class="flex items-center justify-end mt-4">
    <x-jet-button class="ml-4 inline-flex items-center px-4 py-2 bg-sky-300  hover:bg-green-700 border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
        {{__('Spremi')}}
</x-jet-button>
</div>
</form>
</div>
</div>
</div>
</x-app-layout>  