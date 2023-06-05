<x-app-backend title="Dashboard">
    <x-slot name="content">
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-2 g-3">
                                    <div class="col">
                                        <div class="card radius-10 overflow-hidden mb-0 shadow-none border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary font-14">Total Buses</p>
                                                        <h5 class="my-0">{{$buses->count()}}</h5>
                                                    </div>
                                                    <div class="text-primary ms-auto font-30"><i class='bx bx-bus'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card radius-10 overflow-hidden mb-0 shadow-none border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary font-14">Total Routes</p>
                                                        <h5 class="my-0">{{$routes->count()}}</h5>
                                                    </div>
                                                    <div class="text-danger ms-auto font-30"><i class='bx bx-stats' ></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card radius-10 overflow-hidden mb-0 shadow-none border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary font-14">Total Users</p>
                                                        <h5 class="my-0">{{$users->count()}}</h5>
                                                    </div>
                                                    <div class="text-success ms-auto font-30"><i class='bx bx-group'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card radius-10 overflow-hidden mb-0 shadow-none border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary font-14">Total Agents</p>
                                                        <h5 class="my-0">{{$agents->count()}}</h5>
                                                    </div>
                                                    <div class="text-warning ms-auto font-30"><i class='bx bxs-business'></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card radius-10 overflow-hidden mb-0 shadow-none border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p class="mb-0 text-secondary font-14">Total Visits</p>
                                                        <h5 class="my-0">12M</h5>
                                                    </div>
                                                    <div class="text-info ms-auto font-30"><i class='bx bx-smile'></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card radius-10">
                            <ul class="list-group list-group-flush">
                                @foreach($agents as $agent)
                                    <li class="list-group-item d-flex bg-transparent justify-content-between align-items-center border-top">{{$agent->organization}} <span class="badge bg-danger rounded-pill">
                                            @php
                                            $count = 0;
                                            foreach($buses as $bus){
                                                if($bus->organization == $agent->organization)
                                                    $count++;
                                            }
                                            @endphp
                                            {{$count}}
                                        </span>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
        </div>
        <!--end page wrapper -->
    </x-slot>
</x-app-backend>
