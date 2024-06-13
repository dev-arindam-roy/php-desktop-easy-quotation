<div class="form-group">
	<label>Select Application Type :<em>*</em></label>
	<span><small><i>Which type of system you want from us.</i></small></span>
	<select id="application" name="application[]" class="form-control multi" multiple="multiple" required="required">
   <?php foreach($application_type as $v=>$k) { ?>
   	<option value="application_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
   <?php } ?>
	</select>
</div>


<div class="form-group">
	<label>Select Project Type :<em>*</em></label>
	<span><small><i>Select any project type which similar to your requirement</i></small></span>
	<select id="project_type" name="project_type" class="form-control select2" required="required">
		<option></option>
		<?php foreach($project_type as $v=>$k) { ?>
		<option value="project_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
		<?php } ?>
	</select>
</div>


<div class="form-group">
	<label>Select Integration :</label>
	<span><small><i>Select features for your system/project</i></small></span>
	<select id="integration" name="integration[]" multiple="multiple" class="form-control multi">
   <?php foreach($integration as $v=>$k) { ?>
   	<option value="integration_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
   <?php } ?>
	</select>
</div>


<div class="form-group">
	<label>SEO and Digital Marketing :</label>
	<span><small><i>If your want to boost your business or dream</i></small></span>
	<select id="seo" name="seo[]" class="form-control multi" multiple="multiple">
		<?php foreach($seo as $v=>$k) { ?>
		<option value="seo_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
		<?php } ?>
	</select>
</div>


<div class="form-group">
	<label>Design & UI/UX :</label>
	<span><small><i>Choose your design related requirement</i></small></span>
	<select id="uiux" name="uiux[]" class="form-control multi" multiple="multiple">
		<?php foreach($design as $v=>$k) { ?>
		<option value="uiux_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
		<?php } ?>
	</select>
</div>


<div class="form-group">
	<label>Maintaince :</label>
	<span><small><i>If you interested in maintaince</i></small></span>
	<select id="maintaince" name="maintaince" class="form-control select2">
		<option></option>
		<?php foreach($maintaince as $v=>$k) { ?>
		<option value="maintaince_<?php echo $v; ?>_<?php echo $k; ?>"><?php echo ucfirst($v); ?></option>
		<?php } ?>
	</select>
</div>


<div class="form-group">
	<label>Any Extra Requirements :</label>
	<span><small><i>If you have any addition/other requirements, tell us</i></small></span>
	<textarea name="extra" id="extra" class="form-control" style="height: 120px;" placeholder="Tell us your other requirements"></textarea>
</div>

