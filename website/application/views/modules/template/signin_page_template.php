<div class="main">
    <section class="login-section">
        <div class="container-fluid ps-0">
            <div class="row">
                <div class="col-md-7">
                    <img src="img/signin-bg.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-5 my-auto">
                    <div class="login-col">
                        <?php if ($this->session->flashdata('successContactMSG')) { ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('successContactMSG'); ?>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->flashdata('errorContactMSG')) { ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('errorContactMSG'); ?>
                            </div>
                        <?php } ?>
                        <h2><span>Sign In & Access </span> Your Account</h2>
                        <p>Sign up to use your dashboard. It's fast and free. Showcase your brand, enhance your listings, and more.</p>
                        <form id="loginForm" action="<?= front_base_url('Authenticate/index') ?>" method="post">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Email <span class="req-mark">*</span></label>
                                    <input class="form-control" type="email" name="user_email" required>
                                    <span class="text-danger"><?= form_error('user_email') ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label">Password <span class="req-mark">*</span></label>
                                    <div class="input-group">
                                        <input id="password" class="form-control" type="password" name="user_password" required>
                                        <span class="input-group-text" id="togglePasswordlogin">
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                    <span id="password-error" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <a href="<?= site_url('authenticate') ?>">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <label>Don't have an account? <a href="<?= site_url('signup-page'); ?>">Sign up now!</a></label>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>