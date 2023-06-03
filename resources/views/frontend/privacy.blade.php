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
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Privacy Policy</h3>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->privacy}}</p>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Personally Identifiable
                    Information </h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->personally}}</p>
                <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Express Check Out</h3>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->check_out}}</P>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Security Precautions</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->security}}</p>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Your Consent</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->consent}}</p>
                <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"> Sharing of information</h4>
                <p class="wow fadeInDown animated animated" data-wow-delay=".5s"
                   style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">{{$privacy->sharing}}</p>

            </div>
        </div>
        <!--- /privacy ---->
    </x-slot>
</x-app>
