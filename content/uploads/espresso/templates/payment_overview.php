<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');	?>

<div class="espresso_payment_overview event-display-boxes ui-widget" >
  <h3 class="section-heading ui-widget-header ui-corner-top"><span class="text-success glyphicon glyphicon-ok"></span> Thank you for registering for <strong><?php echo stripslashes_deep($event_name) ?></strong></h3>
  <p class="lead">We looking forward to seeing you in the studio.</p>
  <hr>
  <h4>Here's your details:</h4>
  <p>First day of class is <strong><?php echo event_espresso_no_format_date($start_date, ('l M jS')); ?></strong> at <strong><?php echo do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_time"]'); ?></strong></p>
  <br>
	<div class="event-data-display ui-widget-content ui-corner-bottom" >
  <table class="table">
		<tr>
			<td><strong><?php _e('Class:', 'event_espresso'); ?></strong></td>
			<td><?php echo stripslashes_deep($event_name) ?></td>
		</tr>
		<tr>
			<td><strong><?php _e('Primary Student:', 'event_espresso'); ?></strong></td>
			<td><?php echo stripslashes_deep($fname . ' ' . $lname) ?></td>
		</tr>
		<!-- <tr>
			<?php echo $txn_type == '' ? '' : '<td>' . __('Payment Type:', 'event_espresso') . '</td> <td>' . stripslashes_deep(espresso_payment_type($txn_type)) . '</td>'; ?> <?php echo ($payment_date == '' || ($payment_status == 'Pending' && (espresso_payment_type($txn_type) == 'Invoice' || espresso_payment_type($txn_type) == 'Offline payment'))) ? '' : '<tr><td>' . __('Payment Date:', 'event_espresso') . '</td> <td>' . event_date_display($payment_date) . '</td></tr>'; ?>
		</tr> -->
		<tr>
			<td><strong>Schedule:</strong></td>
			<td><?php echo event_espresso_no_format_date($start_date, ('M jS')); ?> to <?php echo do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="end_date" format="M jS"]') ?> <br>
				<?php echo event_espresso_no_format_date($start_date, ('l')); ?>s <?php echo do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="start_time"]'); ?> to <?php echo do_shortcode('[EVENT_TIME event_id="'.$event_id.'" type="end_time"]'); ?>
			</td>
		</tr>
		<tr>
			<td><strong><?php _e('Amount Paid:', 'event_espresso'); ?></strong></td>
			<td><?php echo $org_options['currency_symbol'] ?><?php echo $total_cost ?>
				<span class="text-success glyphicon glyphicon-ok"></span>
			</td>
		</tr>
		<tr>
			<td>
				<strong><?php _e('Payment Status:', 'event_espresso'); ?></strong>
			</td>
			<?php // localize all the things!
				switch( $payment_status ) {
					case 'Pending':
						$payment_status_translated = __( 'Pending', 'event_espresso' );
						break;
					case 'Incomplete':
						$payment_status_translated = __( 'Incomplete', 'event_espresso' );
						break;
					case 'Completed':
						$payment_status_translated = __( 'Completed', 'event_espresso' );
						break;
					case 'Payment Declined':
						$payment_status_translated = __( 'Payment Declined', 'event_espresso' );
						break;
					default:
						$payment_status_translated = __("Error", "event_espresso");
				}
			?>
			<td><?php echo $payment_status_translated; ?></td>
    </tr>
		<!-- <tr>
			<td>
				<?php _e('Registration ID:', 'event_espresso'); ?>
			</td>
			<td><?php echo $registration_id ?></td>
		</tr>
		<tr>
			<?php
			echo $txn_id == '' ? '' : '<td>' . __('Transaction ID:', 'event_espresso') . '</td> <td>' . $txn_id . '</td>';
			?>
		</tr> -->
	</table>
	</div>
</div><!-- / .event-display-boxes -->
<form>
	<input  type="hidden" name="allow_leave_page" id="allow_leave_page" value="true"/>
</form>

	<div class="text-right">
		<a href="javascript:window.print()" class="btn btn-lg btn-info hidden-print">Print</a>
	</div>
