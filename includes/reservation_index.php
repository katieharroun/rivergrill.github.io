<?php
// set some date parameters
$days = time() > strtotime($body->cutoff) ? '+1' : '+0';

$min_date = $user->has_user_type('administrator') ? '+0d' : $days . 'd';
$start_date = $user->has_user_type('administrator') ? '+0 days' : $days . 'days';

$in_advance_ts = strtotime($body->in_advance['in_advance']);
$max_date = date('m/d/Y', $in_advance_ts);

// prep style
css(base_url('css/redmond/jquery-ui-1.8.18.custom.css', $is_secure));
$calendar_img  = image_url('images/calendar.png', $is_secure);

// load javascript
external_javascript(base_url('js/jquery.validate.js', $is_secure));
external_javascript(base_url('js/jquery.validate-additional.js', $is_secure));
external_javascript(base_url('js/form_validation.js', $is_secure));
external_javascript(base_url('js/jquery-ui-1.8.18.custom.min.js', $is_secure));
external_javascript(base_url('js/functions.js', $is_secure));
external_javascript(base_url('js/reservation.js', $is_secure));

$js = <<< JAVASCRIPT
	<script type=text/javascript>
		$(document).ready(function() {

			// init datepicker
			$.datepicker.setDefaults({
				showOn: 'both',
				buttonImageOnly: true,
				buttonImage: '$calendar_img',
				changeMonth: false,
				changeYear: false,
				dateFormat: 'mm/dd/yy',
				minDate: '$min_date',
				maxDate: '$max_date',
				showAnim: 'fadeIn',
				hideIfNoPrevNext: true,
				gotoCurrent: true
			});
			$(function() {
				$("#datepicker").datepicker();
			});

		});
	</script>
JAVASCRIPT;
inline_javascript($js);
?>
<div id="greybg">
<h1>River Grill Reservations</h1>
<form name="reservation" id="reservation_form" method="post" action="<?=site_url('reservation', TRUE)?>">
	<div class="styled_form">

		<h4>For parties greater than 15 people, please call <?=$this->config->item('phone_number')?> for reservations.</h4>
		<h4>Please provide information about you and your group:</p>
		<div class="errorNotice" id="js_notice"></div>

		<?php
		if (message_stack_has_errors()):
			echo message_stack_messages('error','<div class="error">','</div>');
		endif;
		if (message_stack_has_notices()):
			echo message_stack_messages('notice','<div class="errorNotice">','</div>');
		endif;
		if (message_stack_has_success()):
			echo message_stack_messages('success','<div class="success">','</div>');
		endif;
		?>

		<div class="formBox">
			<h4>About yourself</h4>
			<div class="inputRow">
				<div class="input">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name" value="<?=set_value('first_name')?>" autofocus="autofocus">
				</div>
				<div class="input">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" value="<?=set_value('last_name')?>">
				</div>
				<div class="end"></div>
			</div>
			<div class="inputRow">
				<div class="input">
					<label for="phone">Phone:</label>
					<input type="tel" name="phone" value="<?=set_value('phone')?>">
				</div>
				<div class="input">
					<label for="email">Email:</label>
					<input type="email" name="email" value="<?=set_value('email')?>">
				</div>
				<div class="end"></div>
			</div>
			<div class="inputRow">
				<div class="checkbox" id="opt_in">
					<label for="opt_in">Yes! Send me special offers</label>
					<input type="checkbox" name="opt_in" id="opt_in" value="1" <?=set_checkbox('opt_in', '1')?>>
				</div>
				<div class="end"></div>
			</div>
		</div>
	
		<div class="formBox">
			<h4>About your reservation</h4>

			<div class="inputRow">
				<div class="input">
					<label for="time">Time:</label>
					<select name="time">
						<?php foreach ($body->times as $time): ?>
						<option value="<?=$time?>" <?=set_select('time', $time)?>><?=meridiem_time($time)?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="input">
					<label for="date">Date:</label>
					<input type="text" name="date" id="datepicker" value="<?=date('m/d/Y', strtotime(set_value('date', $start_date)))?>">
				</div>
				<div class="end"></div>
			</div>

			<div class="inputRow">
				<div class="input">
					<label for="persons"># in Party:</label>
					<input type="number" name="persons" value="<?=set_value('persons', 1)?>" class="numSelector" min="0" max="15">
				</div>
				<div class="input">
					<label for="areas_id">Area:</label>
					<select name="areas_id">
						<?php if ( ! empty($body->areas)):
							foreach ($body->areas as $area): ?>
								<option value="<?=$area->id?>" <?=set_select('areas_id', $area->id)?>><?=computer_to_human($area->name,'words')?></option>
							<?php endforeach;
						endif; ?>
					</select>
					<span class="subscript" id="area_subscript">We cannot guarantee outside seating.</span>
				</div>
				<div class="end"></div>
			</div>

		</div>

</div>		

		<?php if ($user->has_user_type('administrator')): ?>
		<div class="formBox">
			<h4>Other Information</h4>
			<div class="inputRow centerBox">
				<textarea name="comments" cols="50" rows="4"><?=set_value('comments')?></textarea>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="input">
			<input type="submit" value="Continue" name="submit_reservation">
		</div>
		<div class="end"></div>
	</div>
</form>
