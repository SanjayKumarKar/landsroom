<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus-circle"></i>Add New <?= $title ?>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="<?= base_url($view_controller . '/addSubmitted'); ?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
                    <div class="form-body">
                        <h3 class="form-section">User Info</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="user_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="user_contact_number" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="user_email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="user_password" required>
                                </div>
                                <div class="form-group">
                                    <label>User Type</label>
                                    <select class="form-control" name="user_type" required>
                                        <option value="0">Buyer</option>
                                        <option value="1">Owner</option>
                                        <option value="2">Tenant</option>
                                        <option value="3">Agent</option>
                                        <option value="4">Builder</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="user_dob">
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="user_gender" required>
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>
                                        <option value="2">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="user_state">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="user_country">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="user_city">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="user_address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" name="user_pin">
                                </div>
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input type="file" class="form-control" name="user_profile_picture">
                                </div>
                                <div class="form-group">
                                    <label>IsDel</label>
                                    <select class="form-control" name="IsDel">
                                        <option value="0">Not Deleted</option>
                                        <option value="1">Deleted</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions right">
                        <button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                        <button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
                        <button type="submit" class="btn green" name="submit" value="submit">
                            <i class="fa fa-check"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>