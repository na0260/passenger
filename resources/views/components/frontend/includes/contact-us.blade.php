<!-- write us -->
<div
    aria-labelledby="myModalLabel"
    class="modal fade"
    id="myModal3"
    role="dialog"
    tabindex="-1"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button
                    aria-label="Close"
                    class="close"
                    data-dismiss="modal"
                    type="button"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <section>
                <div class="modal-body modal-spa">
                    <div class="writ">
                        <form name="myForm" onsubmit="return validateForm()" action="{{route('contact-us.store')}}" method="POST">
                            @csrf
                            <h4>HOW CAN WE HELP YOU</h4>
                            <ul>
                                <li class="na-me">
                                    <input
                                        class="name"
                                        onblur="if (this.value == '') {this.value = 'Name';}"
                                        onfocus="this.value = '';"
                                        required
                                        type="text"
                                        value="Name"
                                        name="name"
                                    />
                                </li>
                                <li class="na-me">
                                    <input
                                        class="Email"
                                        onblur="if (this.value == '') {this.value = 'Email';}"
                                        onfocus="this.value = '';"
                                        required
                                        type="text"
                                        value="Email"
                                        name="mail"
                                    />
                                </li>
                                <li class="na-me">
                                    <input
                                        class="number"
                                        onblur="if (this.value == '') {this.value = 'Mobile Number';}"
                                        onfocus="this.value = '';"
                                        required
                                        type="text"
                                        value="Mobile Number"
                                        name="phone"
                                    />
                                </li>
                                <li class="na-me">
                                    <input
                                        class="number"
                                        onblur="if (this.value == '') {this.value = 'Subject';}"
                                        onfocus="this.value = '';"
                                        required
                                        type="text"
                                        value="Subject"
                                        name="subject"
                                    />
                                </li>

                                <li class="descrip">
                                    <input
                                        class="special"
                                        onblur="if (this.value == '') {this.value = 'Write Description';}"
                                        onfocus="this.value = '';"
                                        required
                                        type="text"
                                        value="Write Description"
                                        name="desc"
                                    />
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="sub-bn">
                                <button class="subbtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //write us -->
