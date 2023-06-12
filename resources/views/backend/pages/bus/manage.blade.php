<x-app-backend title="Bus List | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <h6 class="mb-0 text-uppercase">Bus List</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th width="5%">Sn.</th>
                                    <th>Bus name</th>
                                    @if(auth()->user()->type == 'admin')
                                        <th>Bus organization</th>
                                    @endif
                                    <th>Bus number</th>
                                    <th>Driver Name</th>
                                    <th>Driver Number</th>
                                    <th>Last Stoppage</th>
                                    <th width="5%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buses as $bus)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$bus->name}}</td>
                                        @if(auth()->user()->type == 'admin')
                                            <td>{{$bus->organization}}</td>
                                        @endif
                                        <td>{{$bus->number}}</td>
                                        @php
                                        $count = 0;
                                        $size = $drivers->count();
                                        @endphp
                                        @foreach($drivers as $driver)
                                            @php
                                            $count++;
                                            @endphp
                                            @if($bus->name == $driver->bus_name & $bus->organization == $driver->organization)
                                                <td>{{$driver->name}}</td>
                                                <td>{{$driver->number}}</td>
                                                @break
                                            @endif
                                            @if($count == $size)
                                                <td>---</td>
                                                <td>---</td>
                                            @endif
                                        @endforeach
                                        <td>null</td>
                                        <td>
                                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="">Edit</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{route('bus-route.track',$bus->id)}}">Track</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="5%">Sn.</th>
                                    <th>Bus name</th>
                                    @if(auth()->user()->type == 'admin')
                                        <th>Bus organization</th>
                                    @endif
                                    <th>Bus number</th>
                                    <th>Driver Name</th>
                                    <th>Driver Number</th>
                                    <th>Last Stoppage</th>
                                    <th width="5%">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-backend>
