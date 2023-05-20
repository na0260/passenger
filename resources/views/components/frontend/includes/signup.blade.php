<!-- sign -->
<div
    aria-labelledby="myModalLabel"
    class="modal fade"
    id="myModal"
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
                    <div class="login-grids">
                        <div class="login">
                            <div class="login-left">
                                <ul>
                                    <li>
                                        <a class="fb" href="#"><i></i>Sign in with Facebook</a>
                                    </li>
                                    <li>
                                        <a class="goog" href="#"><i></i>Sign in with Google</a>
                                    </li>
                                    <li>
                                        <a class="linkin" href="#"
                                        ><i></i>Sign in with Linkedin</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <div class="login-right">
                                <form>
                                    <h3>Create your account</h3>
                                    <input
                                        onblur="if (this.value == '') {this.value = 'Name';}"
                                        onfocus="this.value = '';"
                                        required=""
                                        type="text"
                                        value="Name"
                                    />
                                    <input
                                        onblur="if (this.value == '') {this.value = 'Mobile number';}"
                                        onfocus="this.value = '';"
                                        required=""
                                        type="text"
                                        value="Mobile number"
                                    />
                                    <input
                                        onblur="if (this.value == '') {this.value = 'Email id';}"
                                        onfocus="this.value = '';"
                                        required=""
                                        type="text"
                                        value="Email id"
                                    />
                                    <input
                                        onblur="if (this.value == '') {this.value = 'Password';}"
                                        onfocus="this.value = '';"
                                        required=""
                                        type="password"
                                        value="Password"
                                    />
                                    <input type="submit" value="CREATE ACCOUNT"/>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p>
                            By logging in you agree to our
                            <a href="#">Terms and Conditions</a> and
                            <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //sign -->
