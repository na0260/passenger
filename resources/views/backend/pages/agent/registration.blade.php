<x-app-backend title="Agent Registration | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <form action="{{route('agent.store')}}" method="Post">
                                @csrf
                                <div class="card-body p-4">
                                    <h5 class="mb-4">Agent Registration</h5>
                                    <div class="row mb-3">
                                        <label for="input49" class="col-sm-3 col-form-label">Enter Agent Name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-user'></i></span>
                                                <input type="text" class="form-control" id="input49"
                                                       placeholder="Agent Name" name="name" required>
                                            </div>
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span><br>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="input50" class="col-sm-3 col-form-label">Phone No</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-microphone'></i></span>
                                                <input type="text" class="form-control" id="input50" placeholder="Phone No" name="phone" required>
                                            </div>
                                            @error('phone')
                                            <span class="text-danger">{{$message}}</span><br>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="input51" class="col-sm-3 col-form-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bx-envelope'></i></span>
                                                <input type="text" class="form-control" id="input51" placeholder="Email" name="email" required>
                                            </div>
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span><br>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="input51" class="col-sm-3 col-form-label">Organization name</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class='bx bxs-business'></i></span>
                                                <input type="text" class="form-control" id="input51" placeholder="Organization" name="organization" required>
                                            </div>
                                            @error('organization')
                                            <span class="text-danger">{{$message}}</span><br>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <input type="submit" class="btn btn-primary px-4" value="Register">
                                                <input type="reset" class="btn btn-light px-4">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-success">{{Session::get('msg')}}</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-backend>
