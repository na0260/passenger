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
                                    <th>Bus Name</th>
                                    <th>Bus Number</th>
                                    <th>Driver Name</th>
                                    <th>Driver Number</th>
                                    <th>Last Stoppage</th>
                                    <th width="5%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->organization}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td><div class="form-check form-switch"><a class="text-decoration-none" href="{{route('agent.status.update',$user->id)}}">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                                                        {{$user->status == 'active' ? 'checked' : ''}}>
                                                </a>
                                            </div>
                                        </td>
                                        {{--                                        <td><a href="{{route('agent.delete',$agent->id)}}" class="btn btn-outline-danger px-2 rounded-0">&#10005;</a></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th width="5%">Sn.</th>
                                    <th>Bus Name</th>
                                    <th>Bus Number</th>
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
