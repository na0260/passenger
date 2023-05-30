<x-app title="Terms & Conditions | Passenger">
    <x-slot name="content">
        <!--- banner-1 ---->
        <div class="banner-1">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Passengers - Best in Country
                    for Local Bus Information</h1>
            </div>
        </div>
        <!--- /banner-1 ---->
        <!--- terms ---->
        <div class="terms">
            <div class="container">
                <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s">Terms and Conditions - Buses</h3>
                <h6 class="wow fadeInDown animated animated" data-wow-delay=".5s">Important Points</h6>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s">{{$terms->important}}</p>
                <h6 class="wow fadeInDown animated animated" data-wow-delay=".5s">Communication Policy</h6>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s">{{$terms->policy}}</p>
                <div class="terms-bottom">
                    <h6>Scope of our Service</h6>
                    <p class="wow fadeInDown animated animated" data-wow-delay=".5s">{{$terms->scope}}</p>
                    <h6 class="wow fadeInDown animated animated" data-wow-delay=".5s">Disclaimer</h6>
                    <p class="wow fadeInDown animated animated" data-wow-delay=".5s">{{$terms->disclaimer}}</p>
                </div>
            </div>
        </div>
        <!--- /terms ---->
    </x-slot>
</x-app>
