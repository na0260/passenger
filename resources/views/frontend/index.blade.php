<x-app title="Home | Passenger">
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
            <div class="track">
                <div
                    class="col-md-6 track-right wow fadeInLeft animated"
                    data-wow-delay=".5s"
                >
                    <a href="track.html"
                    >
                        <i class="fa fa-columns img-responsive"></i></a>
                </div>
                <div
                    class="col-md-6 track-left wow fadeInRight animated"
                    data-wow-delay=".5s"
                >
                    <h3>FIND MY BUS</h3>
                    <p>All buses route information in one click</p>
                    <a class="learn" href="#">Find Bus</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /banner ---->
        <!---track---->
        <div class="container">
            <div class="track">
                <div
                    class="col-md-6 track-right wow fadeInLeft animated"
                    data-wow-delay=".5s"
                >
                    <a href="track.html"
                    ><img alt="" class="img-responsive" src="{{asset('assets/frontend/images/map1.png')}}"
                        /></a>
                </div>
                <div
                    class="col-md-6 track-left wow fadeInRight animated"
                    data-wow-delay=".5s"
                >
                    <h3>TRACK MY BUS</h3>
                    <p>First of its own kind,bus tracking feature on bus</p>
                    <a class="learn" href="#">Learn More</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /track ---->
        <!--- routes ---->
        <div class="routes">
            <div class="container">
                <div
                    class="col-md-4 routes-left wow fadeInRight animated"
                    data-wow-delay=".5s"
                >
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-truck"></i></a>
                    </div>
                    <div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                        <h3>80000</h3>
                        <p>ROUTES</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 routes-left">
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-ticket"></i></a>
                    </div>
                    <div class="rou-rgt">
                        <h3>1900</h3>
                        <p>BUSES</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div
                    class="col-md-4 routes-left wow fadeInRight animated"
                    data-wow-delay=".5s"
                >
                    <div class="rou-left">
                        <a href="#"><i class="fa fa-user"></i></a>
                    </div>
                    <div class="rou-rgt">
                        <h3>{{$agent_count}}</h3>
                        <p>Total Agent</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /routes ---->
    </x-slot>
</x-app>
