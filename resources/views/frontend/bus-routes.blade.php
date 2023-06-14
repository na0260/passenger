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
        {{--<div class="bus-tp">
            <div class="container">
                <h2 class="text-center">Buses from Mirpur 1 to Banasree</h2>
                <div class="clearfix"></div>
            </div>
        </div>--}}
        <!--- /bus-tp ---->
        <!--- bus-btm ---->
        <div class="bus-btm">
            <div class="container">
                <ul>
                    <li class="trav"><a >Buses</a></li>
                    <li class="dept"><a >Start Time</a></li>
                    <li class="arriv"><a >End Time</a></li>
                    <li class="seat"><a >Routes</a></li>
                    <li class="fare"><a >Action</a></li>
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
                @foreach($buses as $bus)
                    <ul class="first">
                        <li class="trav">
                            <div class="bus-txt">
                                <h4>{{$bus->organization}}</h4>
                                <p>{{$bus->name}}</p>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li class="dept">
                            <div class="bus-txt1">
                                <h4><a href="#">{{$bus->start_time}}</a></h4>
                            </div>

                        </li>
                        <li class="arriv">
                            <div class="bus-txt2">
                                <h4><a href="#">{{$bus->end_time}}</a></h4>
                            </div>
                        </li>
                        <li class="seat">
                            <div class="bus-txt3">
                                <h4>{{$bus->start_point}} to {{$bus->end_point}}</h4>
                                @foreach($routes as $route)
                                    @if($route->bus_name == $bus->name && $route->organization == $bus->organization)
                                        <p>{{$route->station_01}} ⇄ {{$route->station_02}} ⇄ {{$route->station_03}} ⇄ {{$route->station_04}} ⇄ {{$route->station_05}} ⇄ {{$route->station_06}}
                                            ⇄ {{$route->station_07}}
                                            ⇄ {{$route->station_08}} ⇄ {{$route->station_09}} ⇄ {{$route->station_10}}</p>
                                    @endif
                                @endforeach
                            </div>

                        </li>
                        <li class="fare">
                            <div class="bus-txt4">
                                <a class="view" href="{{route('bus-details')}}">Bus Details</a>
                                <a class="view" href="{{route('bus.track',$bus->id)}}">Click to track</a>
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
