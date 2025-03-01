<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus-circle"></i>Edit this <?= $title ?>
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                </div>
            </div>
            <div class="portlet-body form">
                <form action="<?= base_url($view_controller . '/editSubmitted'); ?>" role="form" method="post" class="horizontal-form" id="form_sample_1" enctype="multipart/form-data">
                    <?= form_hidden('user_id', $list[0][$default_id_field]) ?>
                    <div class="form-body">
                        <h3 class="form-section">User Info</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="user_name" value="<?= $list[0]['user_name'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control" name="user_contact_number" value="<?= $list[0]['user_contact_number'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="user_email" value="<?= $list[0]['user_email'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>User Type</label>
                                    <select class="form-control" name="user_type" required>
                                        <option value="0" <?= $list[0]['user_type'] == 0 ? 'selected' : '' ?>>Buyer</option>
                                        <option value="1" <?= $list[0]['user_type'] == 1 ? 'selected' : '' ?>>Owner</option>
                                        <option value="2" <?= $list[0]['user_type'] == 2 ? 'selected' : '' ?>>Tenant</option>
                                        <option value="3" <?= $list[0]['user_type'] == 3 ? 'selected' : '' ?>>Agent</option>
                                        <option value="4" <?= $list[0]['user_type'] == 4 ? 'selected' : '' ?>>Builder</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="user_dob" value="<?= $list[0]['user_dob'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" name="user_address"><?= $list[0]['user_address'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-control" name="user_gender" required>
                                        <option value="0" <?= $list[0]['user_gender'] == 0 ? 'selected' : '' ?>>Female</option>
                                        <option value="1" <?= $list[0]['user_gender'] == 1 ? 'selected' : '' ?>>Male</option>
                                        <option value="2" <?= $list[0]['user_gender'] == 2 ? 'selected' : '' ?>>Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="user_state" value="<?= $list[0]['user_state'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" name="user_country" value="<?= $list[0]['user_country'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="user_city" value="<?= $list[0]['user_city'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" name="user_pin" value="<?= $list[0]['user_pin'] ?>">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input type="file" class="form-control" name="user_profile_picture">
                                    <php if (!empty($list[0]['user_profile_picture'])): ?>
                                        <img src="<= base_url('uploads/profile_pictures/' . $list[0]['user_profile_picture']) ?>" width="50" height="50">
                                    <php endif; ?>
                                </div> -->
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn red" type="button" onClick="mediaRemove('user_profile_picture')">
                                                <icon class="fa fa-times"></icon> Remove
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" name="user_profile_picture" id="user_profile_picture" value="<?= $list[0]['user_profile_picture'] ?>" required readonly>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default green" onClick="openMediaModal('user_profile_picture')">
                                                <icon class="fa fa-photo"></icon> Choose
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="IsDel">
                                        <option value="0" <?= $list[0]['IsDel'] == 0 ? 'selected' : '' ?>>Not Deleted</option>
                                        <option value="1" <?= $list[0]['IsDel'] == 1 ? 'selected' : '' ?>>Deleted</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions right">
                        <button type="reset" class="btn dark" onclick="window.history.back()"><i class="fa fa-arrow-left"></i> Back</button>
                        <button type="reset" class="btn blue"><i class="fa fa-refresh"></i> Reset</button>
                        <button type="submit" class="btn yellow" name="submit" value="submit">
                            <i class="fa fa-check"></i> Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>