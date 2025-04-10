<!-- Modal Popup Start -->
<div class="modal fade" id="sign-in" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="login-form">
            <div class="modal-content">
                <div class="tab-content">
                    <div id="user-login-tab" class="tab-pane fade in active">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h5 class="modal-title foodbakery-dev-login-main-title">Login To Your Account</h5>
                        </div>
                        <div class="modal-body">
                            <p class="foodbakery-dev-login-top-msg"></p>
                            <div class="cs-login-pbox">
                                <div class="status status-message"></div>
                                <form method="POST" action="{{ route('login') }}" class="wp-user-form webkit"
                                    id="ControlForm_43687">
                                    @csrf
                                    <div class="input-filed">
                                        <i class="icon-email"></i>
                                        <input type="email" name="email" required placeholder="example@example.com">
                                    </div>
                                    <div class="input-filed">
                                        <i class="icon-unlock-alt"></i>
                                        <input type="password" name="password" required
                                            placeholder="Password">
                                    </div>
                                    <div class="forget-password">
                                        <a data-toggle="tab" href="#user-password"
                                            class="cs-forgot-switch forgot-switch">Forgot Password?</a>
                                    </div>
                                    <div class="input-filed input-field-btn">
                                        <div class="ajax-login-button input-button-loader">
                                            <input type="submit" class="cs-bgcolor" value="Log in">
                                        </div>
                                    </div>
                                </form>
                                <div class="signin-tab-link forget-password">
                                    New Here?
                                    <a data-toggle="tab" href="#user-register"
                                        class="foodbakery-dev-login-box-btn forgot-switch">Signup</a>
                                </div>
                                <div class="footer-element comment-form-social-connect social_login_ui ">
                                    <div class="social-media">
                                        <h6><span>Login with</span></h6>
                                        <ul>
                                            <li><a href="#" title="Facebook" data-original-title="Facebook"
                                                    class="social_login_login_facebook facebook"><span
                                                        class="social-mess-top fb-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-facebook"></i>Sign In With Facebook</a></li>
                                            <li><a href="#" title="Twitter" data-original-title="twitter"
                                                    class="social_login_login_twitter twitter"><span
                                                        class="social-mess-top tw-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-twitter3"></i>Sign In With Twitter</a></li>
                                            <li><a href="#" rel="nofollow" title="google-plus"
                                                    data-original-title="google+"
                                                    class="social_login_login_google gplus"><span
                                                        class="social-mess-top gplus-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-google4"></i>Sign In With Google</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="user-register" class="tab-pane fade">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">×</span> </button>
                            <h5 id="myModalLabel" class="modal-title">Sign Up</h5>
                        </div>
                        <div class="modal-body">
                            <div role="tabpanel" class="tab-pane active">
                                <div id="result_296069" class="status-message"></div>
                                <form method="POST" action="{{ route('register') }}" class="wp-user-form demo_test">
                                    @csrf

                                    <div class="input-filed">
                                        <i class="icon-v-card"></i>
                                        <input type="text" name="name" required placeholder="Display Name">
                                    </div>
                                    <div class="input-filed">
                                        <i class="icon-email"></i>
                                        <input type="email" name="email" required placeholder="example@example.com">
                                    </div>
                                    <div class="input-filed">
                                        <i class="icon-unlock-alt"></i>
                                        <input type="password" name="password" required
                                            placeholder="Password">
                                    </div>
                                    <div class="input-filed">
                                        <i class="icon-unlock-alt"></i>
                                        <input type="password" name="password_confirmation" required
                                            placeholder="Confirm Password">
                                    </div>

                                    <span class="signup-alert">
                                        <b>Note :</b> Please enter your correct email and we will send you a
                                        password
                                        on that email.
                                    </span>
                                    <div class="checkbox-area">
                                        <input type="checkbox" id="terms-head" class="foodbakery-dev-req-field">
                                        <label for="terms-head">
                                            By Registering You Confirm That You Accept theme
                                            <a target="_blank" href="#">
                                                Terms &amp; conditions
                                            </a>
                                            And
                                            <a target="_blank" href="#">
                                                Privacy Policy
                                            </a>
                                        </label>
                                    </div>
                                    <div class="side-by-side select-icon clearfix">
                                        <div class="select-holder"></div>
                                    </div>
                                    <div class="checks-holder">
                                        <div class="input-filed input-field-btn">
                                            <div class="ajax-signup-button input-button-loader">
                                                <input type="submit" value="Sign Up">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="register_content"></div>
                                <div class="create- signin-tab-link ">Already have an account?
                                    <a data-toggle="tab" href="#user-login-tab"
                                        class="foodbakery-dev-signup-box-btn">Login here</a>
                                </div>
                                <div class="footer-element comment-form-social-connect social_login_ui">
                                    <div class="social-media">
                                        <h6><span>Login with</span></h6>
                                        <ul>
                                            <li><a href="javascript:void(0);" title="Facebook"
                                                    data-original-title="Facebook"
                                                    class="social_login_login_facebook facebook"><span
                                                        class="social-mess-top fb-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-facebook"></i>Sign In With
                                                    Facebook</a></li>
                                            <li><a href="javascript:void(0);" title="Twitter"
                                                    data-original-title="twitter"
                                                    class="social_login_login_twitter twitter"><span
                                                        class="social-mess-top tw-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-twitter3"></i>Sign In With
                                                    Twitter</a></li>
                                            <li><a href="javascript:void(0);" rel="nofollow" title="google-plus"
                                                    data-original-title="google+"
                                                    class="social_login_login_google gplus"><span
                                                        class="social-mess-top gplus-social-login"
                                                        style="display:none">Please set API key</span><i
                                                        class="icon-google4"></i>Sign In With
                                                    Google</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="user-password" class="tab-pane fade">
                        <div class="content-style-form cs-forgot-pbox content-style-form-2">
                            <div>
                                <form class="user_form" method="post">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h5 class="modal-title foodbakery-dev-login-main-title">Create Your Food
                                            Bakery Account</h5>
                                    </div>
                                    <div class="modal-body modal-body-loader">
                                        <span class="alert-info">Enter your email address below and we'll send you
                                            an
                                            email with instructions on how to change your password</span>
                                        <div class="input-filed">
                                            <i class="icon-email"></i>
                                            <input type="text" placeholder="Enter email address..."
                                                name="user_input">
                                        </div>
                                        <div class="input-filed input-field-btn">
                                            <div class="ajax-forgot-button input-button-loader">
                                                <input type="submit" class="reset_password cs-bgcolor"
                                                    name="submit" value="Submit">
                                            </div>
                                        </div>
                                        <div class="forget-password">
                                            <a data-toggle="tab" href="#user-login-tab"
                                                class="cs-login-switch forgot-switch triggered-click">Login Here</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Popup End -->
