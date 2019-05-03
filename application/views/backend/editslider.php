<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit slider</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editslidersubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<span>1600px X 800px</span>
			<div class="file-field input-field col m6 s12">
				<span class="img-center big image">
                   			<?php if ($before->image == '') {
} else {
    ?><img src="<?php echo base_url('uploads').'/'.$before->image;
    ?>">
						<?php
} ?></span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file">
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate image1" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image', $before->image);?>">
				</div>
			</div>

		</div>

		<div class="row">
		<div class="input-field col s6">
		<label for="link">link</label>
		<input type="text" id="link" name="link" value='<?php echo set_value('link',$before->link);?>'>
		</div>
		</div>
		<div class="row">
		<div class="input-field col s6">
		<label for="order">order</label>
		<input type="text" id="order" name="order" value='<?php echo set_value('order',$before->order);?>'>
		</div>
		</div>

        <div class=" row">
        <div class=" input-field col s12 m6">
        <?php echo form_dropdown("status",$status,set_value('status',$before->status));?>
        <label for="status">status</label>
        </div>
        </div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewslider"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
