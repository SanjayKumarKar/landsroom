<?php
$DATA=json_decode($list[0]['page_data'],true);


?>


<h3 class="form-section">Features Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
			<label>Block 1 Content</label>
			<textarea class="form-control" name="page_data[feature_section_content_1]" rows="4"><?=empty($DATA['feature_section_content_1'])?"":$DATA['feature_section_content_1'];?></textarea>
		</div>
		<div class="form-group">
			<label>Block 1 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('feature_section_image_1')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[feature_section_image_1]" id="feature_section_image_1" value="<?=empty($DATA['feature_section_image_1'])?"":$DATA['feature_section_image_1'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('feature_section_image_1')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label>Block 2 Content</label>
			<textarea class="form-control" name="page_data[feature_section_content_2]" rows="4"><?=empty($DATA['feature_section_content_2'])?"":$DATA['feature_section_content_2'];?></textarea>
		</div>
		<div class="form-group">
			<label>Block 2 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('feature_section_image_2')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[feature_section_image_2]" id="feature_section_image_2" value="<?=empty($DATA['feature_section_image_2'])?"":$DATA['feature_section_image_2'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('feature_section_image_2')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label>Block 3 Content</label>
			<textarea class="form-control" name="page_data[feature_section_content_3]" rows="4"><?=empty($DATA['feature_section_content_3'])?"":$DATA['feature_section_content_3'];?></textarea>
		</div>
		<div class="form-group">
			<label>Block 3 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('feature_section_image_3')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[feature_section_image_3]" id="feature_section_image_3" value="<?=empty($DATA['feature_section_image_3'])?"":$DATA['feature_section_image_3'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('feature_section_image_3')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
		<div class="form-group">
			<label>Block 4 Content</label>
			<textarea class="form-control" name="page_data[feature_section_content_4]" rows="4"><?=empty($DATA['feature_section_content_4'])?"":$DATA['feature_section_content_4'];?></textarea>
		</div>
		<div class="form-group">
			<label>Block 4 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('feature_section_image_4')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[feature_section_image_4]" id="feature_section_image_4" value="<?=empty($DATA['feature_section_image_4'])?"":$DATA['feature_section_image_4'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('feature_section_image_4')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
	</div>
</div>



<h3 class="form-section">Hospital Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[hospital_section_title]" id="hospital_section_title" value="<?=empty($DATA['hospital_section_title'])?"":$DATA['hospital_section_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Button Text</label>
            <input type="text" class="form-control" name="page_data[hospital_section_button_text]" id="hospital_section_button_text" value="<?=empty($DATA['hospital_section_button_text'])?"":$DATA['hospital_section_button_text'];?>"> 
        </div>
		<div class="form-group">
            <label>Button URL</label>
            <input type="text" class="form-control" name="page_data[hospital_section_button_url]" id="hospital_section_button_url" value="<?=empty($DATA['hospital_section_button_url'])?"":$DATA['hospital_section_button_url'];?>"> 
        </div>
	</div>
</div>



<h3 class="form-section">Treatment Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[treatment_section_title]" id="treatment_section_title" value="<?=empty($DATA['treatment_section_title'])?"":$DATA['treatment_section_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Button Text</label>
            <input type="text" class="form-control" name="page_data[treatment_section_button_text]" id="treatment_section_button_text" value="<?=empty($DATA['treatment_section_button_text'])?"":$DATA['treatment_section_button_text'];?>"> 
        </div>
		<div class="form-group">
            <label>Button URL</label>
            <input type="text" class="form-control" name="page_data[treatment_section_button_url]" id="treatment_section_button_url" value="<?=empty($DATA['treatment_section_button_url'])?"":$DATA['treatment_section_button_url'];?>"> 
        </div>
	</div>
</div>



<h3 class="form-section">Speciality Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[speciality_section_title]" id="speciality_section_title" value="<?=empty($DATA['speciality_section_title'])?"":$DATA['speciality_section_title'];?>"> 
        </div>
	</div>
</div>



<h3 class="form-section">Doctor Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[doctor_section_title]" id="doctor_section_title" value="<?=empty($DATA['doctor_section_title'])?"":$DATA['doctor_section_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Button Text</label>
            <input type="text" class="form-control" name="page_data[doctor_section_button_text]" id="doctor_section_button_text" value="<?=empty($DATA['doctor_section_button_text'])?"":$DATA['doctor_section_button_text'];?>"> 
        </div>
		<div class="form-group">
            <label>Button URL</label>
            <input type="text" class="form-control" name="page_data[doctor_section_button_url]" id="doctor_section_button_url" value="<?=empty($DATA['doctor_section_button_url'])?"":$DATA['doctor_section_button_url'];?>"> 
        </div>
	</div>
</div>



<h3 class="form-section">USP Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>USP 1 Title</label>
            <input type="text" class="form-control" name="page_data[usp_section_title_1]" id="usp_section_title_1" value="<?=empty($DATA['usp_section_title_1'])?"":$DATA['usp_section_title_1'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 1 Count</label>
            <input type="text" class="form-control" name="page_data[usp_section_count_1]" id="usp_section_count_1" value="<?=empty($DATA['usp_section_count_1'])?"":$DATA['usp_section_count_1'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 1 Suffix</label>
            <input type="text" class="form-control" name="page_data[usp_section_suffix_1]" id="usp_section_suffix_1" value="<?=empty($DATA['usp_section_suffix_1'])?"":$DATA['usp_section_suffix_1'];?>"> 
        </div>
		<div class="form-group">
			<label>USP 1 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('usp_section_image_1')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[usp_section_image_1]" id="usp_section_image_1" value="<?=empty($DATA['usp_section_image_1'])?"":$DATA['usp_section_image_1'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('usp_section_image_1')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
		<div class="form-group">
            <label>USP 2 Title</label>
            <input type="text" class="form-control" name="page_data[usp_section_title_2]" id="usp_section_title_2" value="<?=empty($DATA['usp_section_title_2'])?"":$DATA['usp_section_title_2'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 2 Count</label>
            <input type="text" class="form-control" name="page_data[usp_section_count_2]" id="usp_section_count_2" value="<?=empty($DATA['usp_section_count_2'])?"":$DATA['usp_section_count_2'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 2 Suffix</label>
            <input type="text" class="form-control" name="page_data[usp_section_suffix_2]" id="usp_section_suffix_2" value="<?=empty($DATA['usp_section_suffix_2'])?"":$DATA['usp_section_suffix_2'];?>"> 
        </div>
		<div class="form-group">
			<label>USP 2 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('usp_section_image_2')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[usp_section_image_2]" id="usp_section_image_2" value="<?=empty($DATA['usp_section_image_2'])?"":$DATA['usp_section_image_2'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('usp_section_image_2')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
		<div class="form-group">
            <label>USP 3 Title</label>
            <input type="text" class="form-control" name="page_data[usp_section_title_3]" id="usp_section_title_3" value="<?=empty($DATA['usp_section_title_3'])?"":$DATA['usp_section_title_3'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 3 Count</label>
            <input type="text" class="form-control" name="page_data[usp_section_count_3]" id="usp_section_count_3" value="<?=empty($DATA['usp_section_count_3'])?"":$DATA['usp_section_count_3'];?>"> 
        </div>
		<div class="form-group">
            <label>USP 3 Suffix</label>
            <input type="text" class="form-control" name="page_data[usp_section_suffix_3]" id="usp_section_suffix_3" value="<?=empty($DATA['usp_section_suffix_3'])?"":$DATA['usp_section_suffix_3'];?>"> 
        </div>
		<div class="form-group">
			<label>USP 3 Image</label>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn red" type="button" onClick="mediaRemove('usp_section_image_3')"><icon class="fa fa-times"></icon> Remove</button>
				</span>
				<input type="text" class="form-control" name="page_data[usp_section_image_3]" id="usp_section_image_3" value="<?=empty($DATA['usp_section_image_3'])?"":$DATA['usp_section_image_3'];?>" readonly> 
				<span class="input-group-btn">
					<button type="button" class="btn btn-default green" onClick="openMediaModal('usp_section_image_3')"><icon class="fa fa-photo"></icon> Choose
					</button>
				</span>
			</div>
		</div>
	</div>
</div>



<h3 class="form-section">Review Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[review_section_title]" id="review_section_title" value="<?=empty($DATA['review_section_title'])?"":$DATA['review_section_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[review_section_sub_title]" id="review_section_sub_title" value="<?=empty($DATA['review_section_sub_title'])?"":$DATA['review_section_sub_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Button Text</label>
            <input type="text" class="form-control" name="page_data[review_section_button_text]" id="review_section_button_text" value="<?=empty($DATA['review_section_button_text'])?"":$DATA['review_section_button_text'];?>"> 
        </div>
		<div class="form-group">
            <label>Button URL</label>
            <input type="text" class="form-control" name="page_data[review_section_button_url]" id="review_section_button_url" value="<?=empty($DATA['review_section_button_url'])?"":$DATA['review_section_button_url'];?>"> 
        </div>
	</div>
</div>



<h3 class="form-section">Blog Section</h3>
<div class="row">
	<div class="col-md-12" style="border-bottom: 2px dashed #b2b7bb;">
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[blog_section_title]" id="blog_section_title" value="<?=empty($DATA['blog_section_title'])?"":$DATA['blog_section_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="page_data[blog_section_sub_title]" id="blog_section_sub_title" value="<?=empty($DATA['blog_section_sub_title'])?"":$DATA['blog_section_sub_title'];?>"> 
        </div>
		<div class="form-group">
            <label>Button Text</label>
            <input type="text" class="form-control" name="page_data[blog_section_button_text]" id="blog_section_button_text" value="<?=empty($DATA['blog_section_button_text'])?"":$DATA['blog_section_button_text'];?>"> 
        </div>
		<div class="form-group">
            <label>Button URL</label>
            <input type="text" class="form-control" name="page_data[blog_section_button_url]" id="blog_section_button_url" value="<?=empty($DATA['blog_section_button_url'])?"":$DATA['blog_section_button_url'];?>"> 
        </div>
	</div>
</div>