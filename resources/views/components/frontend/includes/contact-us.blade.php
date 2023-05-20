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
                        <h4>HOW CAN WE HELP YOU</h4>
                        <ul>
                            <li class="na-me">
                                <input
                                    class="name"
                                    onblur="if (this.value == '') {this.value = 'Name';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="text"
                                    value="Name"
                                />
                            </li>
                            <li class="na-me">
                                <input
                                    class="Email"
                                    onblur="if (this.value == '') {this.value = 'Email';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="text"
                                    value="Email"
                                />
                            </li>
                            <li class="na-me">
                                <input
                                    class="number"
                                    onblur="if (this.value == '') {this.value = 'Mobile Number';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="text"
                                    value="Mobile Number"
                                />
                            </li>
                            <li class="na-me">
                                <select
                                    class="frm-field required sect"
                                    id="country"
                                    onchange="change_country(this.value)"
                                >
                                    <option value="null">Select Issue</option>
                                    <option value="null">Booking Issues</option>
                                    <option value="null">Bus Cancellation</option>
                                    <option value="null">Refund</option>
                                    <option value="null">Wallet</option>
                                </select>
                            </li>
                            <li class="descrip">
                                <input
                                    class="special"
                                    onblur="if (this.value == '') {this.value = 'Write Description';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="text"
                                    value="Write Description"
                                />
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="sub-bn">
                            <form>
                                <button class="subbtn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //write us -->
