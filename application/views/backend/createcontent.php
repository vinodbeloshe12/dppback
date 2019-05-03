<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create content</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createcontentsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<span>1600px X 300px</span>
<div class="file-field input-field col s12 m6">
<div class="btn blue darken-4">
<span>Image</span>
<input type="file" name="image">
</div>
<div class="file-path-wrapper">
<input class="file-path validate" type="text" placeholder="Upload one or more files" value='<?php echo set_value('image');?>'>
</div>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="title">title</label>
<input type="text" id="title" name="title" value='<?php echo set_value('title');?>'>
</div>
</div>

<div class="row">
           <div class="col s12 m6">
               <label>Description</label>
               <textarea id="some-textarea" name="description" placeholder="Enter text ...">
                   <?php echo set_value('description');?>
               </textarea>
           </div>
       </div>
       
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("status",$status,set_value('status'));?>
<label>status</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewcontent"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
