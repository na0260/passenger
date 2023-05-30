<x-app title="About | Passenger">
    <x-slot name="content">
        <!--- banner-1 ---->
        <div class="banner-1">
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
        <!--- /banner-1 ---->
        <!--- about ---->
        <div class="about">
            <div class="container">
                <div
                    class="about-top wow zoomIn animated animated"
                    data-wow-delay=".5s"
                    style="
            visibility: visible;
            animation-delay: 0.5s;
            animation-name: zoomIn;
          "
                >
                    <h2>Our Story</h2>
                    <p>
                        {{$about->our_story}}
                    </p>
                </div>
                <div class="about-mid">
                    <div
                        class="col-md-6 abt-lft wow fadeInLeft animated"
                        data-wow-delay=".5s"
                    >
                        <h3>Services</h3>
                        <p>
                            {{$about->services}}
                        </p>
                    </div>
                    <div
                        class="col-md-6 abt-lft wow fadeInRight animated"
                        data-wow-delay=".5s"
                    >
                        <h3>Technology</h3>
                        <p>
                            {{$about->technology}}
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--- /about ---->
    </x-slot>
</x-app>
