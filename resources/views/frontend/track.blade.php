<x-app title="Bus Routes | Passenger">
    <x-slot name="content">
        <!--- banner-1 ---->
        <div class="banner-1 ">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Passengers - Best in
                    Country
                    for Local Bus Information</h1>
            </div>
        </div>
        <!--- /banner-1 ---->
        <!--- bus-tp ---->
        <div class="bus-tp">
            <div class="container">
                <h2 class="text-center">Bus tracking Information</h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /bus-tp ---->
        <!--- bus-btm ---->
        <div class="bus-btm">
            <div class="container">
                <ul>
                    <li class="trav" style="width: 20%;"><a href="#">Bus Name</a></li>
                    <li class="dept" style="width: 20%;"><a href="#">Bus Number</a></li>
                    <li class="arriv" style="width: 20%;"><a href="#">Last Stoppage</a></li>
                    <li class="seat" style="width: 20%;"><a href="#">Next Stoppage</a></li>
                    <li class="fare" style="width: 20%;"><a href="#">Left last stoppage at</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
        <!--- /bus-btm ---->
        <!--- bus-midd ---->
        <div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s"
             style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
            <div class="container">
                <!--- ul-first  ---->
                @foreach($tracks as $track)
                    <ul class="first">
                        <li class="trav" style="width: 20%;">
                            <div class="bus-txt">
                                <h4>{{$track->organization}}</h4>
                                <p>{{$track->bus_name}}</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="dept" style="width: 20%;">
                            @foreach($buses as $bus)
                                @if($bus->name == $track->bus_name & $bus->organization == $track->organization)
                                    <div class="bus-txt1">
                                        <h4><a href="#">{{$bus->number}}</a></h4>
                                    </div>
                                    @break
                                @endif
                            @endforeach
                        </li>
                        <li class="arriv" style="width: 20%;">
                            <div class="bus-txt2">
                                <h4>{{$track->last_stoppage}}</h4>
                            </div>
                        </li>
                        <li class="seat" style="width: 20%;">
                            <div class="bus-txt3">
                                <h4>{{$track->next_stoppage}}</h4>
                            </div>

                        </li>
                        <li class="fare" style="width: 20%;">
                            <div class="bus-txt4">
                                <h4>{{$track->updated_at}}</h4>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                @endforeach
                <!--- /ul-first  ---->
            </div>
        </div>
        <!--- /bus-midd ---->
    </x-slot>
</x-app>
