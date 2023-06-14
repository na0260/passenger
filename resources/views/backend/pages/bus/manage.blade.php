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
                                    <th>Driver NID</th>
                                    <th>Driver License</th>
                                    <th>Last Stoppage</th>
                                    <th>left at.</th>
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
                                        $count_t = 0;
                                        $size = $drivers->count();
                                        $size_t = $tracks->count();
                                        @endphp
                                        @foreach($drivers as $driver)
                                            @php
                                            $count++;
                                            @endphp
                                            @if($bus->name == $driver->bus_name & $bus->organization == $driver->organization)
                                                <td>{{$driver->name}}</td>
                                                <td>{{$driver->number}}</td>
                                                <td>{{$driver->nid}}</td>
                                                <td>{{$driver->driving_license}}</td>
                                                @break
                                            @endif
                                            @if($count == $size)
                                                <td>---</td>
                                                <td>---</td>
                                                <td>---</td>
                                                <td>---</td>
                                            @endif
                                        @endforeach
                                        @foreach($tracks as $track)
                                            @php
                                                $count_t++;
                                            @endphp
                                            @if($bus->name == $track->bus_name & $bus->organization == $track->organization)
                                                <td>{{$track->last_stoppage}}</td>
                                                <td>{{$track->updated_at}}</td>
                                                @break
                                            @endif
                                            @if($count_t == $size_t)
                                                <td>---</td>
                                                <td>---</td>
                                            @endif
                                        @endforeach
                                        <td>
                                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </a>
                                                <ul class="dropdown-menu">
                                                    {{--<li><a class="dropdown-item" href="">Edit</a>
                                                    </li>--}}
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
                                    <th>Driver NID</th>
                                    <th>Driver License</th>
                                    <th>Last Stoppage</th>
                                    <th>left at.</th>
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
