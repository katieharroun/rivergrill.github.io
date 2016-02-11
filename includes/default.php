<?php
include('includes/initialize.php');
$is_admin = $user->has_user_type('administrator');
$is_manager = $user->has_user_type('manager');
?><!DOCTYPE html>
<html>
	<head>
		<title>Reservations | River Grill - Tahoe City, Lake Tahoe - Casually Elegant Dining on Tahoe City's Other Waterfront  (530) 581-2644</title>
		<?php include('includes/meta.php'); ?>
		<meta name="keywords" content="<?=$keywords?>">
		<meta name="description" content="<?=$description?>">
		<?php echo $css ?>
	</head>
	<body id="pid-reservations" class="not-front not-logged-in page-node node-type-story no-sidebars full-node layout-main-last sidebars-split font-size-13 grid-type-960 grid-width-16">
		<div id="page" class="page">
			<div id="page-inner" class="page-inner">
				<div id="skip">
					<a href="#main-content-area">Skip to Main Content Area</a>
				</div>
				<?php include('includes/header.php'); ?>
				<!-- preface-top row: width = grid_width -->

				<!-- main row: width = grid_width -->
				<div id="main-wrapper" class="main-wrapper full-width">
					<img src="images/reservationbook.jpg">
					<div id="main" class="main row grid16-16">
						<div id="main-inner" class="main-inner inner clearfix">

							<!-- main group: width = grid_width - sidebar_first_width -->
							<div id="main-group" class="main-group row nested grid16-16">
								<div id="main-group-inner" class="main-group-inner inner">

									<div id="main-content" class="main-content row nested">
										<div id="main-content-inner" class="main-content-inner inner">
											<!-- content group: width = grid_width - (sidebar_first_width + sidebar_last_width) -->
											<div id="content-group" class="content-group row nested grid16-12 <?php if ($is_admin OR $is_manager) echo ' logged_in'; ?>">
												<div id="content-group-inner" class="content-group-inner inner">

													<div id="content-top" class="content-top row nested">
														<div id="content-top-inner" class="content-top-inner inner">


														</div><!-- /content-top-inner -->
													</div><!-- /content-top -->

													<div id="content-region" class="content-region row nested">
														<div id="content-region-inner" class="content-region-inner inner">
															<a name="main-content-area" id="main-content-area"></a>
															<div id="content-inner" class="content-inner block">
																<div id="content-inner-inner" class="content-inner-inner inner">
																	<div id="content-content" class="content-content">

																		<div id="node-65" class="node odd full-node node-type-story fusion-float-imagefield-right">
																			<div class="inner">




																				<div class="content clearfix <?php if ($is_admin OR $is_manager) echo ' adminArea'; ?>">
																					

																					<?php
																					//
																					// Content
																					//
																					?>

																					<?php if ($user->has_user_type('guest')): ?>
																					<div id="main_left">
																						<?php endif; ?>
																						<div class="reservationNav">
																							<?php if ( ! $user->has_user_type('guest')): ?>
																							<a href="<?=site_url('', TRUE)?>" class="first">Reservation Form</a>
																							<?php endif; ?>
																							<?php if ($is_admin): ?>
																							<a href="<?=site_url('office/lookup')?>">Reservation Book</a>
																							<a href="<?=site_url('office/manifest_defaults')?>">Manifest Defaults</a>
																							<?php endif; ?>
																							<?php if ($is_manager): ?>
																							<a href="<?=site_url('office/employees')?>">Employees</a>
																							<a href="<?=site_url('office/config')?>">Configure</a>
																							<?php endif; ?>
																							<?php if ( ! $user->has_user_type('guest')): ?>
																							<a href="<?=site_url('office/logout')?>">Logout</a>
																							<?php endif; ?>
																							<div class="end"></div>
																						</div>
																						<div class="reservationArea">
																							<?php echo $view; ?>
																						</div>
																						<?php if ($user->has_user_type('guest')): ?>
																					</div>
																					<?php endif; ?>
																					<div class="end"></div>
																					<p>&nbsp;</p>



																				</div>

																			
	

																			</div><!-- /inner -->

																		</div><!-- /node-65 -->
																	</div><!-- /content-content -->
																</div><!-- /content-inner-inner -->
															</div><!-- /content-inner -->
														</div><!-- /content-region-inner -->
													</div><!-- /content-region -->

												</div><!-- /content-group-inner -->
											</div><!-- /content-group -->

											<?php
											//
											// Right menu
											//
											?>


										</div><!-- /main-content-inner -->
									</div><!-- /main-content -->

								</div><!-- /main-group-inner -->
							</div><!-- /main-group -->
						</div><!-- /main-inner -->
					</div><!-- /main -->
				</div><!-- /main-wrapper -->

				<?php include('includes/footer.php'); ?>
			</div><!-- /page-inner -->
		</div><!-- /page -->
		<?php include('includes/javascript.php'); ?>
		<script type="text/javascript" src="<?=base_url('js/jquery-1.7.1.min.js', $is_secure)?>"></script>
		<script type="text/javascript" src="<?=base_url('js/ready.js', $is_secure)?>"></script>
		<?php echo $external_js ?>
		<?php echo $inline_js ?>
		<script type="text/javascript">
			<!--//--><![CDATA[//><!--
			da2a.init = function(){
				a2a_config.linkname='Reservations | River Grill - Tahoe City, Lake Tahoe - Casually Elegant Dining on Tahoe City&#039;s Other Waterfront  (530) 581-2644'; a2a_config.linkurl='http://www.rivergrilltahoe.com/reservations'; a2a.init('page', {target: '#da2a_1'});
				da2a.ready = true;
			}
			da2a.html_ready = true;
			if(da2a.script_ready && !da2a.ready)da2a.init();
			//--><!]]>
		</script>
		
	</body>
</html>
