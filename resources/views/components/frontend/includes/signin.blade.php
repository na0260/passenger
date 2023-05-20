<!-- signin -->
<div
    aria-labelledby="myModalLabel"
    class="modal fade"
    id="myModal4"
    role="dialog"
    tabindex="-1"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button
                    aria-label="Close"
                    class="close"
                    data-dismiss="modal"
                    type="button"
                >
                    <span aria-hidden="true">×</span>
                </button>
            </div>
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
                                <h3>Signin with your account</h3>
                                <input
                                    onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="text"
                                    value="Enter your mobile number or Email"
                                />
                                <input
                                    onblur="if (this.value == '') {this.value = 'Password';}"
                                    onfocus="this.value = '';"
                                    required=""
                                    type="password"
                                    value="Password"
                                />
                                <h4><a href="#">Forgot password</a></h4>
                                <div class="single-bottom">
                                    <input id="brand" type="checkbox" value=""/>
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <input type="submit" value="SIGNIN"/>
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
        </div>
    </div>
</div>
<!-- //signin -->
