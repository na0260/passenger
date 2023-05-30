<x-app-backend title="Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="card">
                            <div class="card-header px-4 py-3">
                                <h5 class="mb-0">About Page Content Edit</h5>
                            </div>
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" action="{{route('about.update',1)}}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Our Story</label>
                                        <textarea class="form-control" name="our_story" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" required>{{$about->our_story}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Services</label>
                                        <textarea class="form-control" name="services" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" required>{{$about->services}}</textarea>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Technology</label>
                                        <textarea class="form-control" name="technology" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" required>{{$about->technology}}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Update</button>
                                        </div>
                                        <p class="text-success">{{Session::get('msg')}}</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-backend>
