<x-app-backend title="Bus Tracking Information | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card-body p-4">
                    <form action="" method="Post">
                        @csrf
                        <h5 class="mb-4">Bus Tracker</h5>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <label for="InputEmail" class="form-label">Bus Name</label>
                                <input type="text" class="form-control" id="InputEmail"
                                       placeholder="Enter start point" name="name" value="{{$bus->name}}" disabled>
                            </div>
                            @if(Auth::user()->type == 'admin')
                                <div class="col-12 col-lg-6">
                                    <label for="InputEmail" class="form-label">Bus Organization</label>
                                    <input type="text" class="form-control" id="InputEmail"
                                           placeholder="Enter start point" name="organization"
                                           value="{{$bus->organization}}" disabled>
                                </div>
                            @endif
                            <div class="col-12 col-lg-6">
                                <label for="Inputbus" class="form-label">Last Stoppage</label>
                                <select class="form-select" id="Inputbus" aria-label="Default select example"
                                        name="last_stoppage">
                                    <option selected disabled>----- Select station from below -----</option>
                                    @foreach($stations as $station)
                                        @if($station->bus_name == $bus->name & $station->organization == $bus->organization)
                                            <option value="{{$station->station_01}}">{{$station->station_01}}</option>
                                            <option value="{{$station->station_02}}">{{$station->station_02}}</option>
                                            <option value="{{$station->station_03}}">{{$station->station_03}}</option>
                                            <option value="{{$station->station_04}}">{{$station->station_04}}</option>
                                            <option value="{{$station->station_05}}">{{$station->station_05}}</option>
                                            <option value="{{$station->station_06}}">{{$station->station_06}}</option>
                                            <option value="{{$station->station_07}}">{{$station->station_07}}</option>
                                            <option value="{{$station->station_08}}">{{$station->station_08}}</option>
                                            <option value="{{$station->station_09}}">{{$station->station_09}}</option>
                                            <option value="{{$station->station_10}}">{{$station->station_10}}</option>
                                            @break
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="Inputbus" class="form-label">Next Stoppage</label>
                                <select class="form-select" id="Inputbus" aria-label="Default select example"
                                        name="next_stoppage">
                                    <option selected disabled>----- Select station from below -----</option>
                                    @foreach($stations as $station)
                                        @if($station->bus_name == $bus->name & $station->organization == $bus->organization)
                                            <option value="{{$station->station_01}}">{{$station->station_01}}</option>
                                            <option value="{{$station->station_02}}">{{$station->station_02}}</option>
                                            <option value="{{$station->station_03}}">{{$station->station_03}}</option>
                                            <option value="{{$station->station_04}}">{{$station->station_04}}</option>
                                            <option value="{{$station->station_05}}">{{$station->station_05}}</option>
                                            <option value="{{$station->station_06}}">{{$station->station_06}}</option>
                                            <option value="{{$station->station_07}}">{{$station->station_07}}</option>
                                            <option value="{{$station->station_08}}">{{$station->station_08}}</option>
                                            <option value="{{$station->station_09}}">{{$station->station_09}}</option>
                                            <option value="{{$station->station_10}}">{{$station->station_10}}</option>
                                            @break
                                        @endif
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
