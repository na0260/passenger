<x-app-backend title="Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="card">
                            <div class="card-header px-4 py-3">
                                <h5 class="mb-0">Privacy Page Content Edit</h5>
                            </div>
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" action="{{route('privacy.update',1)}}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Privacy Policy</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="privacy" required>{{$privacy->privacy}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Personally Identifiable Information </label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="personally" required>{{$privacy->personally}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Express Check Out</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="check_out" required>{{$privacy->check_out}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Security Precautions</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="security" required>{{$privacy->security}}</textarea>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Your Consent </label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="consent" required>{{$privacy->consent}}</textarea>

                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Sharing of information</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="sharing" required>{{$privacy->sharing}}</textarea>
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
