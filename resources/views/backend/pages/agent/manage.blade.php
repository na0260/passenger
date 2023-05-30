<x-app-backend title="Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <h6 class="mb-0 text-uppercase">Agent Request List</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Organization</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Message</th>
                                    <th>Sent at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($agents as $agent)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{$agent->name}}</td>
                                    <td>{{$agent->mail}}</td>
                                    <td>{{$agent->organization}}</td>
                                    <td>{{$agent->phone}}</td>
                                    <td>{{$agent->city}}</td>
                                    <td>{{$agent->message}}</td>
                                    <td>{{$agent->created_at}}</td>
                                    <td><a href="{{route('agent-request.delete',$agent->id)}}" class="btn btn-outline-danger px-2 rounded-0">&#10005;</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Organization</th>
                                    <th>Phone</th>
                                    <th>City</th>
                                    <th>Message</th>
                                    <th>Sent at</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <p class="text-success">{{Session::get('msg')}}</p>
            </div>
        </div>
    </x-slot>
</x-app-backend>
