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
           @foreach($proizvods as $proizvod)
               <form method="POST" action="{{route('azuriraj_proizvod')}}">
        @csrf
        <input type="hidden" name ="id" value="{{$proizvod->id}}"/>
        <div>
            <x-jet-label for="naziv" value="{{ __('Naziv')}}"/>
            <x-jet-input id="naziv" class="block mt-1 w-full mb-4" type="text" name="naziv" value="{{$proizvod->naziv}}" required autofocus/>
                 </div>
                 <div>
            <x-jet-label for="kod" value="{{ __('Kod kupovine')}}"/>
            <x-jet-input id="kod" class="block mt-1 w-full mb-4" type="number" name="kod" value="{{$proizvod->kod}}" required autofocus/>
                 </div>
<div>
            <x-jet-label for="proizvodnja" value="{{ __('Godina proizvodnje')}}"/>
            <x-jet-input id="proizvodnja" class="block mt-1 w-full mb-4" type="date" name="proizvodnja" value="{{$proizvod->proizvodnja}}" required autofocus/>
</div>
<div>
            <x-jet-label for="cjena" value="{{ __('Cijena artikla')}}"/>
            <x-jet-input id="cjena" class="block mt-1 w-full mb-4" type="text " name="cjena" value="{{$proizvod->cjena}}" required autofocus/>
</div>
<div>
            <x-jet-label for="brend" value="{{ __('Proizvodjac')}}"/>
            <select id="brend" name="brend" class="form-select block mt-1 w-full mb-4"  required autofocus/>
            <option>Odaberi</option>
            @foreach ($brends as $brend)
            <option value="{{$brend->id}}"
                 @if($proizvod->brend == $brend->id)selected
            @endif>{{$brend->ime}}</option>
            @endforeach
</select>
            
</div>
<div>
            <x-jet-label for="tipproizvoda" value="{{ __('TIP proizvoda')}}"/>
                    <select id="tipproizvoda" name="tipproizvoda" class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm mb-6">
<option value="{{$proizvod->tipproizvoda}}"> {{$proizvod->tipproizvoda}} </option>
@foreach($proizvods as $proizvod)
<option value="Sjeme">Sjeme</option>
<option value="Alati">Alati</option>
<option value="Ostalo">Ostalo</option>
@endforeach
    </select>
        </div>

<div class="ml-4  items-center px-4 py-2 bg-sky-300  hover:bg-green-700 border-transparent rounded-md font-semibold text-xl text-center  text-white uppercase ">
    <x-jet-button class="ml-4">
        {{__('Spremi')}}
</x-jet-button>
</div>
</form>
@endforeach
</div>
</div>
</div>
</x-app-layout> 