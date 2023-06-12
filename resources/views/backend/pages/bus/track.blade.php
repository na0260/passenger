<x-app-backend title="Bus Information | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card-body p-4">
                        <form action="{{route('bus.store')}}" method="Post">
                            @csrf
                            <h5 class="mb-4">Bus Tracker</h5>
                            <div class="row g-3">
                                <div class="col-12 col-lg-6">
                                    <label for="Inputbus" class="form-label">Bus Name</label>
                                    <select class="form-select" id="Inputbus" aria-label="Default select example" name="bus_name">
                                        <option selected disabled>----- Select bus from below -----</option>
                                        @foreach($buses as $bus)
                                            <option value="{{$bus->name}}">{{$bus->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if(Auth::user()->type == 'admin')
                                    <div class="col-12 col-lg-6">
                                        <label for="orgName" class="form-label">Bus Organization</label>
                                        <select class="form-select" id="orgName" aria-label="Default select example" name="organization" required>
                                            <option selected disabled>----- Select organization from below -----</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->organization}}">{{$user->organization}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                                <div class="col-12 col-lg-6">
                                    <label for="Inputbus" class="form-label">Last Stoppage</label>
                                    <select class="form-select" id="Inputbus" aria-label="Default select example" name="bus_name">
                                        <option selected disabled>----- Select bus station from below -----</option>
                                        @foreach($stations as $s)
                                            <option value="{{$bus->name}}">{{$bus->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <label for="Inputbus" class="form-label">Bus Name</label>
                                    <select class="form-select" id="Inputbus" aria-label="Default select example" name="bus_name">
                                        <option selected disabled>----- Select bus from below -----</option>
                                        @foreach($buses as $bus)
                                            <option value="{{$bus->name}}">{{$bus->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex align-items-center gap-3">
                                        <p class="text-success">{{Session::get('msg')}}</p>
                                    </div>
                                </div>
                            </div><!---end row-->
                        </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-backend>
