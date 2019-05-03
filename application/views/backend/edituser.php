<div class="row">
	<div class="col s12">
		<h4 class="pad-left-15">Edit User</h4>
	</div>
</div>
<div class="row">
	<form class="col s12" method="post" action="<?php echo site_url('site/editusersubmit');?>" enctype="multipart/form-data">
		<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">

		<div class="row">
			<div class="input-field col m6 s12">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo set_value('name',$before->name);?>">
			</div>
		</div>
         <div class="row">
			<div class="input-field col m6 s12">
				<label for="firstname">First name</label>
				<input type="text" id="firstname" name="firstname" value="<?php echo set_value('firstname',$before->firstname);?>">
			</div>
		</div>
         <div class="row">
			<div class="input-field col m6 s12">
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" value="<?php echo set_value('lastname',$before->lastname);?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
				<label for="email">Email</label>
				<input type="email" id="normal-field" class="form-control" name="email" value="<?php echo set_value('email',$before->email);?>">
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
				<input type="text" id="socialid" name="socialid" value="<?php echo set_value('socialid',$before->socialid);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="phone">Phone</label>
				<input type="text" id="phone" name="phone" value="<?php echo set_value('phone',$before->phone);?>">
			</div>
		</div>
		<div class="row">
			<div class="input-field col m6 s12">
			<select id="logintype" name="logintype" placeholder="Login Type" id="" value="<?php echo set_value('logintype',$before->logintype);?>">
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
				<?php echo form_dropdown( 'status',$status,set_value( 'status',$before->status)); ?>
					<label>Status</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'accesslevel',$accesslevel,set_value( 'accesslevel',$before->accesslevel)); ?>
					<label>Access Level</label>
			</div>
		</div>
		<div class="row">
			<div class="file-field input-field col m6 s12">
				<span class="img-center big">
								                    	<?php if($before->image == "") { } else {
									                    ?><img src="<?php echo base_url('uploads')."/".$before->image; ?>">
															<?php } ?>
															</span>
				<div class="btn blue darken-4">
					<span>Image</span>
					<input name="image" type="file" multiple>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files" value="<?php echo set_value('image',$before->image);?>">
				</div>
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<textarea name="billingaddress" class="materialize-textarea" length="120"><?php echo set_value( 'billingaddress',$before->billingaddress);?></textarea>
				<label>Billing Address</label>
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcity">Billing City</label>
				<input type="text" id="billingcity" name="billingcity" value="<?php echo set_value('billingcity',$before->billingcity);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingstate">Billing State</label>
				<input type="text" id="billingstate" name="billingstate" value="<?php echo set_value('billingstate',$before->billingstate);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcountry">Billing Country</label>
				<input type="text" id="billingcountry" name="billingcountry" value="<?php echo set_value('billingcountry',$before->billingcountry);?>">
			</div>
		</div>  
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingcontact">Billing Contact</label>
				<input type="text" id="billingcontact" name="billingcontact" value="<?php echo set_value('billingcontact',$before->billingcontact);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="billingpincode">Billing Pincode</label>
				<input type="text" id="billingpincode" name="billingpincode" value="<?php echo set_value('billingpincode',$before->billingpincode);?>">
			</div>
		</div>
         <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingname">Shipping Name</label>
				<input type="text" id="shippingname" name="shippingname" value="<?php echo set_value('shippingname',$before->shippingname);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<textarea name="shippingaddress" class="materialize-textarea" length="120"><?php echo set_value( 'shippingaddress',$before->shippingaddress);?></textarea>
				<label>Shipping Address</label>
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcity">Shipping City</label>
				<input type="text" id="shippingcity" name="shippingcity" value="<?php echo set_value('shippingcity',$before->shippingcity);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcountry">Shipping Country</label>
				<input type="text" id="shippingcountry" name="shippingcountry" value="<?php echo set_value('shippingcountry',$before->shippingcountry);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingstate">Shipping State</label>
				<input type="text" id="shippingstate" name="shippingstate" value="<?php echo set_value('shippingstate',$before->shippingstate);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingpincode">Shipping Pincode</label>
				<input type="text" id="shippingpincode" name="shippingpincode" value="<?php echo set_value('shippingpincode',$before->shippingpincode);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="shippingcontact">Shipping Contact</label>
				<input type="text" id="shippingcontact" name="shippingcontact" value="<?php echo set_value('shippingcontact',$before->shippingcontact);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="currency">Currency</label>
				<input type="text" id="currency" name="currency" value="<?php echo set_value('currency',$before->currency);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="credit">Credit</label>
				<input type="text" id="credit" name="credit" value="<?php echo set_value('credit',$before->credit);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="companyname">Company Name</label>
				<input type="text" id="companyname" name="companyname" value="<?php echo set_value('companyname',$before->companyname);?>">
			</div>
		</div>
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="registrationno">Registration No</label>
				<input type="text" id="registrationno" name="registrationno" value="<?php echo set_value('registrationno',$before->registrationno);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="vatnumber">VAT Number</label>
				<input type="text" id="vatnumber" name="vatnumber" value="<?php echo set_value('vatnumber',$before->vatnumber);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="country">Country</label>
				<input type="text" id="country" name="country" value="<?php echo set_value('country',$before->country);?>">
			</div>
		</div> 
        <div class="row">
			<div class="input-field col m6 s12">
				<label for="fax">Fax</label>
				<input type="text" id="fax" name="fax" value="<?php echo set_value('fax',$before->fax);?>">
			</div>
		</div> 
	   <div class="row">
			<div class="input-field col m6 s12">
				<?php echo form_dropdown( 'gender',$gender,set_value( 'gender',$before->gender)); ?>
					<label>Gender</label>
			</div>
		</div>

	<div class=" form-group">
															<div class="row">
																<div class="col m12">
																	<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
																	<a href="<?php echo site_url('site/viewUsers'); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
																</div>
															</div>
														</div>



	</form>
</div>