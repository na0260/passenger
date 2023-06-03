<x-app-backend title="Agent Requests | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <h6 class="mb-0 text-uppercase">Agent List</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th width="5%">Sn.</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Organization</th>
                                    <th>Created at</th>
                                    <th width="5%">Status</th>
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
                                        <td><div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Organization</th>
                                    <th>Created at</th>
                                    <th>Status</th>
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
