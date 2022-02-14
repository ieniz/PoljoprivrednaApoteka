<x-app-layout>  
   
   
 
   

<div class="py-12" style="background-image:url('bg-stars.gif')">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 " style="background-image:url('bg-stars.gif')">
        <a href="\dodaj_proizvod" class="m-2 p-2 w-max text-xl font-serif flex items-center justify-center  rounded-md bg-sky-600 hover:bg-sky-700 text-white">DODAJ PROIZVOD</a>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg bg-cover"  style="background-image:url('/slika2.jpg')">
            <div class="p-2">
                <h1 class="font-xl mb-4 text-left  "><b><i>Lista proizvoda:</i></b></h1>
                <hr />
                @foreach ($proizvods as $proizvod)
                <div class="flex space-x-4 ">
                    <div class="flex-1 "><p class="p-2"><b> {{ $proizvod->naziv }} - {{ $proizvod->proizvodnja }}</b>                             
                    
                    </div>
                     <div lcass="flex-1">
                        <form method="POST" action="{{ route('obrisi_proizvod') }}">
                            @csrf 
                            <input type="hidden" name="id" value="{{$proizvod->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-lime-300  hover:bg-red-700  border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                    {{ __('Obrisi') }}
                                </button>
                            </div>
                        </form>
                    </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_proizvod') }}">
                                @csrf 
                                <input type="hidden" name="id" value="{{$proizvod->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-teal-300 hover:bg-sky-700  border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                      {{__('Uredi') }}
                                    </button>                          
                                </div>
                            </form>
                        </div>
                </div>
           @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>  
