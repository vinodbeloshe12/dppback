<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit listing</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editlistingsubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="buisnessname">buisness id</label>
<input type="text" id="bid" name="bid" value='<?php echo set_value('bid',$before->bid);?>'>
</div>
</div>

<div class="row">
<div class="input-field col s6">
<label for="buisnessname">buisnessname</label>
<input type="text" id="buisnessname" name="buisnessname" value='<?php echo set_value('buisnessname',$before->buisnessname);?>'>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("category",$category,set_value('category',$before->category));?>
<label>category</label>
</div>
</div>
<div class=" row">
<div class=" input-field col s6">
<?php echo form_dropdown("subcategory",$subcategory,set_value('subcategory',$before->subcategory));?>
<label>subcategory</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="cperson">cperson</label>
<input type="text" id="cperson" name="cperson" value='<?php echo set_value('cperson',$before->cperson);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="contact">contact</label>
<input type="text" id="contact" name="contact" value='<?php echo set_value('contact',$before->contact);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="addline1">addline1</label>
<input type="text" id="addline1" name="addline1" value='<?php echo set_value('addline1',$before->addline1);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="addline2">addline2</label>
<input type="text" id="addline2" name="addline2" value='<?php echo set_value('addline2',$before->addline2);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="city">city</label>
<input type="text" id="city" name="city" value='<?php echo set_value('city',$before->city);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="state">state</label>
<input type="text" id="state" name="state" value='<?php echo set_value('state',$before->state);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="pin">pin</label>
<input type="text" id="pin" name="pin" value='<?php echo set_value('pin',$before->pin);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="country">country</label>
<input type="text" id="country" name="country" value='<?php echo set_value('country',$before->country);?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>keywords</label>
<textarea name="keywords" placeholder="Enter text ..."><?php echo set_value( 'keywords',$before->keywords);?></textarea>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>services</label>
<textarea name="services" placeholder="Enter text ..."><?php echo set_value( 'services',$before->services);?></textarea>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>about</label>
<textarea id="some-textarea" name="about" placeholder="Enter text ...">
                   <?php echo set_value('about',$before->about);?>
               </textarea>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="email">email</label>
<input type="text" id="email" name="email" value='<?php echo set_value('email',$before->email);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="facebook">facebook</label>
<input type="text" id="facebook" name="facebook" value='<?php echo set_value('facebook',$before->facebook);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="twitter">twitter</label>
<input type="text" id="twitter" name="twitter" value='<?php echo set_value('twitter',$before->twitter);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="google">google</label>
<input type="text" id="google" name="google" value='<?php echo set_value('google',$before->google);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="linkedin">linkedin</label>
<input type="text" id="linkedin" name="linkedin" value='<?php echo set_value('linkedin',$before->linkedin);?>'>
</div>
</div>
<div class=" row">
<div class=" input-field col s12 m6">
<?php echo form_dropdown("status",$status,set_value('status',$before->status));?>
<label for="status">status</label>
</div>
</div>
<div class="row">
<div class="input-field col s12 m6">
<?php echo form_dropdown("type",$type,set_value('type',$before->type));?>
<label for="type">type</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="user">user</label>
<input type="text" id="user" name="user" value='<?php echo set_value('user',$before->user);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="date">date</label>
<input type="text" id="date" name="date" value='<?php echo set_value('date',$before->date);?>'>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewlisting"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
