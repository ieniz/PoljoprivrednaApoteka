<x-app-layout>
  


    <div class="py-12 " style="background-image:url('bg-stars.gif')">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-4 ">
          
            <div class="grid grid-cols-4 gap-4 p-4 justify-items-center ">
            
                <div>
                    <h1>Najčešće kupljeni proizvodi</h1>
                                        <hr/>
                                        @foreach( $most_common_proizvodi as  $most_common_proizvod)
                                        <p>{{$loop->iteration}}. {{ $most_common_proizvod->naziv}}-{{ $most_common_proizvod->brojac}}

                                            </p>
                                        @endforeach
                   
                </div>
                
                <div>
                    <h1>Koji su brendovi najčešći odabir kupaca</h1>
                                        <hr/>
                                        @foreach( $most_common_brendovi as  $most_common_brend)
                                        <p>{{$loop->iteration}}. {{ $most_common_brend->ime}}-{{ $most_common_brend->brojac}}

                                            </p>
                                        @endforeach
                   
                </div>

                <div>
                    <h1>Broj kupovina u određenom vremenu</h1>
                                        <hr/>
                                      
                                        <p>{{$broj_kupovina}}

                                            </p> 
                                      
                   
                </div>
                <div>
                    <h1>Svi proizvodi koji su kupljeni u rangu neke cjene   </h1>
                                        <hr/>
                                        @foreach( $prodaje_ispod_cijene1 as  $prodaje_ispod_cijen1)
                                        <p>{{$loop->iteration}}. {{ $prodaje_ispod_cijen1->proizvod_naziv}}-{{ $prodaje_ispod_cijen1->proizvod_tip}}- (1-7km)

                                            </p>
                                        @endforeach 
                   
                </div>
                <div class="ml-8">
                    <h1>Svi proizvodi iz Bosne kupljeni u određenom periodu</h1>
                                        <hr/>
                                        @foreach( $brendovi_njemacki as  $brendovi_njemack)
                                        <p>{{$loop->iteration}}. {{ $brendovi_njemack->proizvod_naziv}}-{{ $brendovi_njemack->kupovina_datumkupovine}}-{{ $brendovi_njemack->brend_porijeklo}}

                                            </p>
                                        @endforeach
                   
                </div>
                <div>
                    <h1>Svi proizvodi koji su proizvedeni određenog perioda i cijena im je u nekom rangu </h1>
                                        <hr/>
                                        @foreach( $prodaje_ispod_cijene2 as  $prodaje_ispod_cijen2)
                                        <p>{{$loop->iteration}}. {{ $prodaje_ispod_cijen2->proizvod_naziv}},tip proizvoda je:{{ $prodaje_ispod_cijen2->proizvod_tip}}- (1 do 8KM)

                                            </p>
                                        @endforeach
                   
                </div>
                <div>
                    <h1>Najčešće kupljeni tip proizvoda</h1>
                                        <hr/>
                                        @foreach($tip_proizvoda as  $tip_proizvod)
                                        <p>{{$loop->iteration}}. {{ $tip_proizvod->tipproizvoda}}-{{ $tip_proizvod->brojac}}

                                            </p>
                                        @endforeach
                   
                </div>
                <br>
                <div>
                    <h1>Kupci iz grada Cazin</h1>
                                        <hr/>
                                        @foreach($kupci_iz_grada as  $kupci_iz_grad)
                                        <p>{{$loop->iteration}}. {{ $kupci_iz_grad->ime}}-{{ $kupci_iz_grad->prezime}}-{{$kupci_iz_grad->proizvod_naziv}}

                                            </p>
                                        @endforeach
                   
                </div>

                <div>
                    <h1>Kupci iz grada Cazin koji su kupili proizvod po nekoj cjeni </h1>
                                        <hr/>
                                        @foreach($kupci_iz_grada2 as  $kupci_iz_grad2)
                                        <p>{{$loop->iteration}}. {{ $kupci_iz_grad2->ime}}-{{ $kupci_iz_grad2->prezime}}-Cazin-{{$kupci_iz_grad2->proizvod_naziv}}-{{$kupci_iz_grad2->proizvod_cijena}}KM

                                            </p>
                                        @endforeach
                   
                </div>
                <div>
                    <h1>Najjprodavaniji brendovi proizvoda tipa "ostalo", u određenom vremenu a čiji su kupci iz Sarajeva</h1>
                                        <hr/>
                                        @foreach($brendovi_kupaca as  $brendovi_kupac)
                                        <p>{{$loop->iteration}}. {{ $brendovi_kupac->brend_ime}}-{{ $brendovi_kupac->ime}}-{{ $brendovi_kupac->prezime}}

                                            </p>
                                        @endforeach
                   
                </div>
                

        </div>
    </div>
</x-app-layout>