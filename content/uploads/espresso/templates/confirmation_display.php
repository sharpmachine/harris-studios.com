<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');		

/* WARNING MODIFYING THIS AT YOUR OWN RISK  */
/* Payments template page. Currently this just shows the registration data block.*/
//This page gets all of the varaibles from includes/process-registration/payment_page.php
//Payment confirmation block
$attendee_num = apply_filters('action_hook_espresso_confirmation_page_primary_attendee_count',1);

?>
<div class="row">
	<form id="form1" name="form1" method="post" action="<?php echo get_permalink($org_options['event_page_id']);?>">
		<div class="event-conf-block event-display-boxes ui-widget" >
		<div class="event-data-display ui-widget-content ui-corner-bottom col-xs-6">
			<h3 class="event_title ui-widget-header ui-corner-top">
			<?php _e('Class Details','event_espresso'); ?>
		</h3>
			<table class="event-display-tables grid table"  id="event_espresso_attendee_verify">
				<tr>
					<th scope="row" class="header">
						<?php _e('Class:','event_espresso'); ?>
					</th>
					<td>
						<span class="event_espresso_value"><?php echo stripslashes_deep($event_name)?></span>
					</td>
				</tr>
	<?php
				// Added for seating chart addon
				$display_price = true;
				if ( defined('ESPRESSO_SEATING_CHART')) {
					$seating_chart_id = seating_chart::check_event_has_seating_chart($event_id);
					if ( $seating_chart_id !== false ) {
						$display_price = false;
					}
				}
	
				if ( $display_price ) {
	?>	
					<tr>
						<th scope="row" class="header" valign="top">
							<?php echo sprintf( _n( 'Attendee Price', 'Attendee Prices', $total_attendees, 'event_espresso' ), $total_attendees ); ?>
						</th>
						<td>
							<span class="event_espresso_value">
								<?php 
									if ( ! empty( $attendee_prices )) {
										foreach ( $attendee_prices as $nmbr => $attendee_price ) {
											// turn generic array key into counter
											$nmbr++;
											echo ($total_attendees > 1 ? $nmbr . ') ' : '') . $attendee_price['option'] . ' ' . $org_options['currency_symbol'] . number_format( $attendee_price['price'], 2 );
											echo $attendee_price['qty'] > 1 ? ' x ' . $attendee_price['qty'] . '<br/>' : '<br/>';
										}
									}
								?>								
							</span>
						</td>
					</tr>
	<?php
				} else {
				
					// Added for seating chart addon
					$price_range = seating_chart::get_price_range($event_id);
					$price = "";
					if ( $price_range['min'] != $price_range['max'] ) {
						$price = $org_options['currency_symbol']. number_format($price_range['min'], 2) . ' - ' . $org_options['currency_symbol']. number_format($price_range['max'], 2);
					} else {
						$price = $org_options['currency_symbol']. number_format($price_range['min'], 2);
					}
	?>
					<tr>
						<th scope="row" class="header"><?php _e('Price:', 'event_espresso'); ?></th>
						<td><span class="event_espresso_value"><?php echo $price; ?></span></td>
					</tr>
	<?php
				}
	?>

				<?php if ($attendee_num > 1) { ?>
				<tr>
					<th scope="row" class="header">
						<?php _e('Total Registrants:','event_espresso'); ?>
					</th>
					<td>
						<span class="event_espresso_value"><?php echo (int)$attendee_num; ?></span>
					</td>
				</tr>
				<?php } ?>
				<tr valign="top">
					<th scope="row" class="header">
						<?php _e('Total Price:','event_espresso'); ?>
					</th>
					<td>
						<span class="event_espresso_value"><?php echo $display_cost; ?></span>
					</td>
				</tr>
			</table>
	</div>
		
		<?php if ($display_questions != '') { ?>
		
		<div  id="additional-conf-info" class="additional-conf-info event-display-boxes col-xs-6">
				<h3 class="event_title ui-widget-header ui-corner-top">Student &amp; Contact Details</h3>
				<div id="additional-conf-info" class="additional-conf-info-inner event-data-display ui-widget-content ui-corner-bottom">
					<table id="event_espresso_attendee_verify_questions" class="event-display-tables grid table">
					<?php foreach ($questions as $question) { ?>
						<tr>
							<th scope="row" class="header">
								<?php echo stripslashes( html_entity_decode( $question->question, ENT_QUOTES, 'UTF-8' )); ?>
							</th>
							<td>
								<span class="event_espresso_value"><?php echo stripslashes( html_entity_decode( $question->answer, ENT_QUOTES, 'UTF-8' )); ?></span>
							</td>
						</tr>
					<?php } ?>
					</table>              
				</div>
				<!-- / .event-data-display -->   
			</div>
			<!-- / .event-display-boxes -->   
			
			<p class="espresso_confirm_registration text-right">
				<input class="btn_event_form_submit ui-priority-primary ui-widget-content ui-corner-all btn btn-lg btn-success" type="submit" name="confirm2" id="confirm2" value="<?php _e('Next', 'event_espresso'); ?>&nbsp;&raquo;" />
			</p>
			
		<?php	} ?>
								
		<?php /* This form builds the confirmation buttons */?>
		<input name="confirm_registration" id="confirm_registration" type="hidden" value="true" />
		<input type="hidden" name="attendee_id" id="attendee_id" value="<?php echo $attendee_id ?>" />
		<input type="hidden" name="registration_id" id="registration_id" value="<?php echo $registration_id ?>" />
		<input type="hidden" name="regevent_action" id="regevent_action-<?php echo $event_id;?>" value="confirm_registration">
		<input type="hidden" name="event_id" id="event_id-<?php echo $event_id;?>" value="<?php echo $event_id;?>">
		<?php wp_nonce_field('reg_nonce', 'reg_form_nonce'); ?>
		
	</div>
	</form>
</div>