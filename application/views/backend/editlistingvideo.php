<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit listing video</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/editlistingvideosubmit");?>' enctype= 'multipart/form-data'>
  <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">

  <div class="row">
<div class="input-field col s6">
<label for="video">video</label>

<input type="text" id="video" name="video" value='<?php echo set_value('video',$before->video);?>'>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="order">order</label>

<input type="text" id="order" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>

<input type="hidden" id="listing" name="listing" value='<?php echo set_value('listing',$before->lid);?>'>

<div class=" row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("status",$status,set_value('status',$before->status));?>
<label for="status">status</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewlistingvideo?id=").$this->input->get("lid"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>