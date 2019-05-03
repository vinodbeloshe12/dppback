<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create Event</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createeventsubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="buisnessname">Name in Marathi</label>
<input type="text" id="name_marathi" name="name_marathi" value='<?php echo set_value('name_marathi');?>'>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="name_english">Name in English</label>
<input type="text" id="name_english" name="name_english" value='<?php echo set_value('name_english');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="event_date">Event Date</label>
<input type="date" id="event_date" name="event_date" value='<?php echo set_value('event_date');?>'>
</div>
</div>



<div class="row">
<div class="input-field col s12">
<label>Description in Marathi</label>
               <textarea id="some-textarea" name="description_marathi" placeholder="Enter text ...">
                   <?php echo set_value('description_marathi');?>
               </textarea>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<label>Description in English</label>
               <textarea id="some-textarea" name="description_english" placeholder="Enter text ...">
                   <?php echo set_value('description_english');?>
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
<a href="<?php echo site_url("site/viewevent"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
