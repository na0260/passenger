<!--- footer-top ---->
<div class="footer-top">
    <div class="container">
        <div
            class="col-md-6 footer-left wow fadeInLeft animated"
            data-wow-delay=".5s"
        >
            <h3>Bus Operators</h3>
            <ul>
                @php
                    $count = 0;
                    foreach($agents as $agent){
                        $count++;
                @endphp
                <li><a href="bus.html">{{$agent}} </a></li>@php
                    if($count == 15){
                        break;
                    }
                }
                @endphp
                <div class="clearfix"></div>
            </ul>
        </div>
        <div
            class="col-md-6 footer-left wow fadeInRight animated"
            data-wow-delay=".5s"
        >
            <h3>Bus Routes</h3>
            <ul>
                @php
                    $count = 0;

                    foreach($start as $index => $start_p){

                            $count++;
                @endphp
                <li><a>{{$start[$index]->start_point}}-{{$end[$index]->end_point}}</a></li>@php
                    if($count == 15){
                        break;
                    }
                }
                @endphp
                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /footer-top ---->
