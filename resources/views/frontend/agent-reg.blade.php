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
                    <form action="{{route('agent-request.store')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Name" name="name" required/>
                        <input type="text" placeholder="Email" name="mail" required/>
                        @error('mail')
                        <br><span class="text-danger">{{$message}}</span><br>
                        @enderror
                        <input type="text" placeholder="Organization" name="organization" required/>
                        <input type="text" placeholder="Phone" name="phone" required/>
                        @error('phone')
                        <br><span class="text-danger">{{$message}}</span><br>
                        @enderror
                        <input type="text" placeholder="City" name="city" required/>
                        <textarea placeholder="Message" name="message"></textarea>
                        <div class="sub">
                            <input type="submit" value="Submit" />
                        </div>
                    </form>
                    <p>{{Session::get('msg')}}</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--- /agent ---->
    </x-slot>
</x-app>
