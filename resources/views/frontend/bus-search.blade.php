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
                    <form>
                        <div class="bnr-left">
                            <label class="inputLabel">From</label>
                            <input class="city" type="text" value="Enter a city"
                                   onfocus="this.value = '';" onblur="if (this.value == '')
              {this.value = 'Enter a city';}" required=>
                        </div>
                        <div class="bnr-left">
                            <label class="inputLabel">To</label>
                            <input class="city" type="text" value="Enter a city"
                                   onfocus="this.value = '';" onblur="if (this.value == '')
              {this.value = 'Enter a city';}" required=>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="sear">
                    <form action="bus.html">
                        <button class="seabtn">Find Buses</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--- /banner ---->
    </x-slot>
</x-app>
