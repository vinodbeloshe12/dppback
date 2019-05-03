<div class="row">
	<div class="col s12">
		<h4 class="pad-left-15">Create User</h4>
	</div>
	<form class="col s12" method="post" action="<?php echo site_url('site/createusersubmit');?>" enctype="multipart/form-data">
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" value="<?php echo set_value('name');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="firstname">First name</label>
				<input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname');?>">
			</div>
		</div>
         <div class="row">
			<div class="input-field col m6 s12">
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname');?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="email">Email</label>
				<input type="email" id="email" class="form-control" name="email" value="<?php echo set_value('email');?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<input type="password" name="password" value="" id="password">
				<label for="password">Password</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<input type="password" name="confirmpassword" value="" id="confirmpassword">
				<label for="confirmpassword">Confirm Password</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="socialid">Social Id</label>
				<input type="text" id="socialid" name="socialid" value="<?php echo set_value('socialid');?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="phone">Phone</label>
				<input type="text" id="phone" name="phone" value="<?php echo set_value('phone');?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
			<select id="logintype" name="logintype" id="" value="<?php echo set_value('logintype');?>">
			    <option value="Email">Email</option>
			    <option value="Facebook">Facebook</option>
			    <option value="Google">Google</option>
			    <option value="Twitter">Twitter</option>
			    <option value="Instagram">Instagram</option>
			</select>
				<label for="logintype">Login Type</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'status',$status,set_value( 'status')); ?>
					<label>Status</label>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image');?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field col m6 s12">
				<div class="btn blue darken-4">
					<span>Cover Image</span>
					<input name="coverimage" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('coverimage');?>">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'accesslevel',$accesslevel,set_value( 'accesslevel')); ?>
					<label>Access Level</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<textarea name="billingaddress" class="materialize-textarea" length="120"><?php echo set_value( 'billingaddress');?></textarea>
				<label>Billing Address</label>
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcity">Billing City</label>
				<input type="text" id="billingcity" name="billingcity" value="<?php echo set_value('billingcity');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingstate">Billing State</label>
				<input type="text" id="billingstate" name="billingstate" value="<?php echo set_value('billingstate');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcountry">Billing Country</label>
				<input type="text" id="billingcountry" name="billingcountry" value="<?php echo set_value('billingcountry');?>">
			</div>
		</div>  
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcontact">Billing Contact</label>
				<input type="text" id="billingcontact" name="billingcontact" value="<?php echo set_value('billingcontact');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingpincode">Billing Pincode</label>
				<input type="text" id="billingpincode" name="billingpincode" value="<?php echo set_value('billingpincode');?>">
			</div>
		</div>
         <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingname">Shipping Name</label>
				<input type="text" id="shippingname" name="shippingname" value="<?php echo set_value('shippingname');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<textarea name="shippingaddress" class="materialize-textarea" length="120"><?php echo set_value( 'shippingaddress');?></textarea>
				<label>Shipping Address</label>
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcity">Shipping City</label>
				<input type="text" id="shippingcity" name="shippingcity" value="<?php echo set_value('shippingcity');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcountry">Shipping Country</label>
				<input type="text" id="shippingcountry" name="shippingcountry" value="<?php echo set_value('shippingcountry');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingstate">Shipping State</label>
				<input type="text" id="shippingstate" name="shippingstate" value="<?php echo set_value('shippingstate');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingpincode">Shipping Pincode</label>
				<input type="text" id="shippingpincode" name="shippingpincode" value="<?php echo set_value('shippingpincode');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcontact">Shipping Contact</label>
				<input type="text" id="shippingcontact" name="shippingcontact" value="<?php echo set_value('shippingcontact');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="currency">Currency</label>
				<input type="text" id="currency" name="currency" value="<?php echo set_value('currency');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="credit">Credit</label>
				<input type="text" id="credit" name="credit" value="<?php echo set_value('credit');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="companyname">Company Name</label>
				<input type="text" id="companyname" name="companyname" value="<?php echo set_value('companyname');?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="registrationno">Registration No</label>
				<input type="text" id="registrationno" name="registrationno" value="<?php echo set_value('registrationno');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="vatnumber">VAT Number</label>
				<input type="text" id="vatnumber" name="vatnumber" value="<?php echo set_value('vatnumber');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="country">Country</label>
				<input type="text" id="country" name="country" value="<?php echo set_value('country');?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="fax">Fax</label>
				<input type="text" id="fax" name="fax" value="<?php echo set_value('fax');?>">
			</div>
		</div> 
	   <div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'gender',$gender,set_value( 'gender')); ?>
					<label>Gender</label>
			</div>
		</div>

		<div class=" form-group">
			<div class="row">
				<div class="col m6 s12">
					<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
					<a href="<?php echo site_url('site/viewusers'); ?>" class="waves-effect waves-light btn red">Cancel</a>
				</div>
			</div>
		</div>
	</form>
</div>