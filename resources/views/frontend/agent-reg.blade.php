<x-app title="Agent Registration | Passenger">
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
        <!--- agent ---->
        <div class="agent">
            <div class="container">
                <div
                    class="col-md-12 agent-left wow fadeInDown animated"
                    data-wow-delay=".5s"
                >
                    <p>Submit details we will call you back</p>
                    <form>
                        <input type="text" placeholder="Name" />
                        <input type="text" placeholder="Email" />
                        <input type="text" placeholder="Organization" />
                        <input type="text" placeholder="Phone" />
                        <input type="text" placeholder="City" />
                        <textarea placeholder="Message"></textarea>
                        <div class="sub">
                            <input type="submit" value="Sign Up" />
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /agent ---->
    </x-slot>
</x-app>
