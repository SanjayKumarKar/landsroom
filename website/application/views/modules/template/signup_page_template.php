<div class="main">
    <section class="login-section">
        <div class="container-fluid ps-0">
            <div class="row">
                <div class="col-md-7">
                    <img src="img/signin-bg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-5">
                    <div class="login-col">
                        <h2><span>Register</span> With Us</h2>
                        <p>Sign up to use your dashboard. It's fast and free.</p>
                        <form id="signupForm" action="<?=site_url('Authenticate/register')?>" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">User Type <span class="req-mark">*</span></label>
                                    <select class="form-select select-user-type" name="user_type[]" multiple required>
                                        <option value="0">Buyer</option>
                                        <option value="1">Owner</option>
                                        <option value="2">Tenant</option>
                                        <option value="3">Agent</option>
                                        <option value="4">Builder</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Name <span class="req-mark">*</span></label>
                                    <input class="form-control" type="text" name="user_name" id="user_name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Email <span class="req-mark">*</span></label>
                                    <input class="form-control" type="email" name="user_email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <label class="form-label">Password <span class="req-mark">*</span></label>
                                    <div class="input-group">
                                        <input id="password" class="form-control" type="password" name="user_password">
                                        <span class="input-group-text" id="togglePassword">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <input id="checkbox" type="checkbox" name="terms" required>
                                    <label for="checkbox"> I agree to the <a href="#">Terms and Conditions</a>.</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="submit w-100" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>