<x-app title="Privacy | Passenger">
    <x-slot name="content">
        <!--- banner-1 ---->
        <div class="banner-1 ">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Passengers - Best in Country for Local Bus Information</h1>
            </div>
        </div>
        <!--- /banner-1 ---->
        <!--- privacy ---->
        <div class="privacy">
            <div class="container">
                <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Bus Details</h3>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Bus Information</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Name: {{$bus->name}}</p>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Number: {{$bus->number}}</p>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Organization: {{$bus->organization}}</p>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Driver Information</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Name: {{$driver->name}}</p>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Contact Number: {{$driver->number}}</p>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Route Information</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">From: {{$bus->start_point}}</p>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">To: {{$bus->end_point}}</p>
            </div>
        </div>
        <!--- /privacy ---->
    </x-slot>
</x-app>
