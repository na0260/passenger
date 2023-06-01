<x-app-backend title="Bus Register | Dashboard">
    <x-slot name="content">
        <div class="page-wrapper">
            <div class="page-content">
                <!--start stepper two-->
                <h6 class="text-uppercase">Bus register</h6>
                <hr>
                <div id="stepper2" class="bs-stepper">
                    <div class="card">

                        <div class="card-header">
                            <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between" role="tablist">
                                <div class="step" data-target="#test-nl-1">
                                    <div class="step-trigger" role="tab" id="stepper2trigger1" aria-controls="test-nl-1" >
                                        <div class="bs-stepper-circle"><i class='bx bx-bus fs-4'></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Bus Information</h5>
                                            <p class="mb-0 steper-sub-title">Enter Bus Details</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-nl-2">
                                    <div class="step-trigger" role="tab" id="stepper2trigger2" aria-controls="test-nl-2">
                                        <div class="bs-stepper-circle"><i class='bx bx-user-circle fs-4'></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Driver Information</h5>
                                            <p class="mb-0 steper-sub-title">Enter Bus-Driver Details</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-nl-3">
                                    <div class="step-trigger" role="tab" id="stepper2trigger3" aria-controls="test-nl-3">
                                        <div class="bs-stepper-circle"><i class='bx bxs-graduation fs-4'></i></div>
                                        <div class="">
                                            <h5 class="mb-0 steper-title">Route</h5>
                                            <p class="mb-0 steper-sub-title">Route Details</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="bs-stepper-content">
                                <form onSubmit="return false">
                                    <div id="test-nl-1" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger1">

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label for="FisrtName" class="form-label">Bus Name</label>
                                                <input type="text" class="form-control" id="FisrtName" placeholder="Bus name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="PhoneNumber" class="form-label">Bus Number</label>
                                                <input type="text" class="form-control" id="PhoneNumber" placeholder="Bus number">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputEmail" class="form-label">Total stoppage</label>
                                                <input type="text" class="form-control" id="InputEmail" placeholder="Enter total stoppage">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputEmail" class="form-label">Start Point</label>
                                                <input type="text" class="form-control" id="InputEmail" placeholder="Enter start point">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="InputEmail" class="form-label">End Point</label>
                                                <input type="text" class="form-control" id="InputEmail" placeholder="Enter end point">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Start Time:</label>
                                                <input type="time" class="form-control">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">End Time:</label>
                                                <input type="time" class="form-control">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <button class="btn btn-primary px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                                            </div>
                                        </div><!---end row-->

                                    </div>

                                    <div id="test-nl-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger2">

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Driver Name</label>
                                                <input type="text" class="form-control" placeholder="Enter driver name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Driver Address</label>
                                                <input type="text" class="form-control" placeholder="Enter driver address">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Driver NID</label>
                                                <input type="text" class="form-control" placeholder="Enter driver NID number">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Driving Licence no.</label>
                                                <input type="text" class="form-control" placeholder="Enter driving licence no.">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label for="" class="form-label">Driver Contact</label>
                                                <input type="text" class="form-control" value="01XXXXXXXXX">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-outline-secondary px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                    <button class="btn btn-primary px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                                                </div>
                                            </div>
                                        </div><!---end row-->

                                    </div>

                                    <div id="test-nl-3" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper2trigger3">

                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 1</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 2</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 3</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 4</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 5</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 6</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 7</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 8</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 9</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Station - 10</label>
                                                <input type="text" class="form-control" placeholder="Station name">
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center gap-3">
                                                    <button class="btn btn-outline-secondary px-4" onclick="stepper2.previous()"><i class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                    <button class="btn btn-primary px-4" onclick="stepper2.next()">Next<i class='bx bx-right-arrow-alt ms-2'></i></button>
                                                </div>
                                            </div>
                                        </div><!---end row-->

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end stepper two-->
            </div>
        </div>
    </x-slot>
</x-app-backend>
