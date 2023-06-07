<x-app title="Search Bus | Passenger">
    <x-slot name="content">
        <!--- banner ---->
        <div class="banner">
            <div class="container">
                <h1
                    class="wow zoomIn animated animated"
                    data-wow-delay=".5s"
                    style="
            visibility: visible;
            animation-delay: 0.5s;
            animation-name: zoomIn;
          "
                >
                    Passengers - Best in Country for Local Bus Information
                </h1>
            </div>
        </div>
        <div class="container">
            <div
                class="col-md-5 bann-info1 wow fadeInLeft animated"
                data-wow-delay=".5s"
            >
                <i class="fa fa-columns"></i>
            </div>
            <div class="col-md-7 bann-info">
                <h2>Find Buses for Your Desire Route</h2>
                <div class="ban-top">
                    <form action="{{route('search')}}" method="Post">
                        @csrf
                        <div class="bnr-left">
                            <label class="Inputstart">From</label><br>
                            <select class="form-select city" id="Inputbus" aria-label="Default select example"
                                    name="start_point" required>
                                <option selected disabled>----- Select any Area from below -----</option>
                                @foreach($buses as $bus)
                                    <option value="{{$bus->start_point}}">{{$bus->start_point}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="bnr-left">
                            <label class="Inputend">To</label> <br>
                            <select class="form-select city" id="Inputbus" aria-label="Default select example"
                                    name="end_point" required>
                                <option selected disabled>----- Select any Area from below -----</option>
                                @foreach($buses as $bus)
                                    <option value="{{$bus->end_point}}">{{$bus->end_point}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="clearfix"></div>
                        <div class="sear">
                            <button type="submit" class="seabtn">Find Buses</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
        <!--- /banner ---->
    </x-slot>
</x-app>
