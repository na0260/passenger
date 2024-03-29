<x-app-backend title="Terms - Edit | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-xl-6 mx-auto">
                        <div class="card">
                            <div class="card-header px-4 py-3">
                                <h5 class="mb-0">Terms and Condition Page Content Edit</h5>
                            </div>
                            <div class="card-body p-4">
                                <form class="row g-3 needs-validation" action="{{route('terms.update',1)}}" method="POST">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Important Points</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="important" required>{{$terms->important}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Communication Policy</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="policy" required>{{$terms->policy}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Scope of our Service</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="scope" required>{{$terms->scope}}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="bsValidation13" class="form-label">Disclaimer</label>
                                        <textarea class="form-control" id="bsValidation13" placeholder="Please add text here"
                                                  rows="5" name="disclaimer" required>{{$terms->disclaimer}}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Update</button>
                                        <p class="text-success">{{Session::get('msg')}}</p>
                                        </div>
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
