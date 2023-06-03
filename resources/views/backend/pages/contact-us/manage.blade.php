<x-app-backend title="Feedbacks | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <h6 class="mb-0 text-uppercase">Customer Feedbacks</h6>
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
                                    <th>Subject</th>
                                    <th width="20%">Description</th>
                                    <th>Sent at</th>
                                    <th width="5%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->mail}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->subject}}</td>
                                    <td>{{$contact->desc}}</td>
                                    <td>{{$contact->created_at}}</td>
                                    <td><a href="{{route('feedbacks.delete',$contact->id)}}" class="btn btn-outline-danger px-2 rounded-0">&#10005;</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>Mail</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Sent at</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
{{--                <p class="text-success">{{Session::get('msg')}}</p>--}}
            </div>
        </div>
    </x-slot>
</x-app-backend>
