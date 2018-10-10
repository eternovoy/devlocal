<?php
/*
 * Template Name: Home Page
 */
get_header(); ?>
<div class="media-768-menu">
	<div class="h-s-m">
		<div class="header-section-mobile">
			<div class="container">
				<div class="row">
					<div class="col-6 media-logo not-actives">
						<div class="header-logo">
							<img src="/wp-content/themes/devops-days-kazan/images/devops-days-logo.png" alt="logo-menu" />
						</div>
					</div>
					<div class="button-menu col-6 not-actives">
						<img src="<?php echo get_template_directory_uri() ?>/images/menu-icon.png" alt="menu-icon">
					</div>
				</div>
			</div>
			<div class="header-menu hiden-mobile-menu hed-media-m-m">
					<ul class="devops-menu-mobile fl-menu">
					   	<li><a href="#home">Home</a></li>
		          <li><a href="#event">Event</a></li>
		          <li><a href="#agenda">Agenda</a></li>
		          <li><a href="#tickets">Ticket</a></li>
		          <li ><a href="#sponsors">Sponsors</a></li>
		          <li><a href="#partners">Partners</a></li>
		          <li><a href="#contacts">Contact us</a></li>
		          <li><a href="#location">location</a></li>
					</ul>
				<div class="media-mobile-btn">
					<div class="menu-btn"><a href="<?php echo get_field('btn_ticket_link'); ?>" target="_blank" data-toggle="modal" data-target="#pay-popup"><?php echo get_field('btn_ticket_text'); ?></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="media-1500-menu">
	<div class="h-s-m">
		<div class="header-section-mobile">
			<div class="container">
				<div class="row">
					<div class="col-2 media-logo not-actives">
						<div class="header-logo">
							<img src="/wp-content/themes/devops-days-kazan/images/devops-days-logo.png" alt="logo-menu" />
						</div>
					</div>
					<div class="header-menu media-s-m col-12">
						<ul class="devops-menu fl-menu">
					      <li><a href="#home">Home</a></li>
		            <li><a href="#event">Event</a></li>
		           	 <li><a href="#agenda">Agenda</a></li>
		            <li><a href="#tickets">Ticket</a></li>
		            <li><a href="#sponsors">Sponsors</a></li>
		            <li><a href="#partners">Partners</a></li>
		            <li><a href="#contacts">Contact us</a></li>
		            <li><a href="#location">location</a></li>
					    </ul>
					</div>
					<div class="col-2 padding-not not-actives">
						<div class="menu-btn"><a href="<?php echo get_field('btn_ticket_link'); ?>" target="_blank" data-toggle="modal" data-target="#pay-popup"><?php echo get_field('btn_ticket_text'); ?></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="full-page-section">
	<!-- Home Start -->
	<div id="home" class="section home-section">
		<div class="home-blue-bg">
			<div class="home-content-s content-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12">
							<div class="home-white-logo">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-logo-home.png" alt="logo-at-home" />
							</div>
							<div class="home-event-date">
								<p><?php echo get_field('date_event'); ?></p>
							</div>
							<div class="home-ticket-btn">
								<a href="<?php echo get_field('btn_ticket_link'); ?>" target="_blank" data-toggle="modal" data-target="#pay-popup"><?php echo get_field('btn_ticket_text'); ?></a>
							</div>
							<div class="home-btn-rep">
								<a class="btn-h-speaker" href="<?php echo get_field('btn_partner_link'); ?>" target="_blank" >become a speaker</a>
								<a class="btn-h-partner" href="#" data-toggle="modal" data-target="#partner-popup">become a partner </a>
							</div>
							<div class="home-social top-media-network">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Home End -->
	<!-- Event Start -->
	<div id="event" class="section ev-bg-bottom response-class">
			<div class="container cont-m-top">
				<div class="row">
					<div class="col-12">
						<div class="d-flex flex-row ev-two-section">
							<div class="event-section ev-s-1">
								<div class="ev-title">
									<img src="/wp-content/themes/devops-days-kazan/images/devops-days-event-title.png" alt="ev-title" />
								</div>
								<div class="ev-text-left">
									<?php echo get_field('event_left_content'); ?>
								</div>
								<div class="ev-counter-s">
									<?php if(have_rows('event_left_repeater')) : ?>
					                <div class="ev-counter-b d-flex flex-row">
					                    <?php while(have_rows('event_left_repeater')) : the_row(); ?>
					                        <div class="ev-count-block">
					                        	<h2><?php echo get_sub_field('event_number'); ?></h2>
					                        	<p><?php echo get_sub_field('event_text'); ?></p>
					                        </div>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
								</div>
							</div>
							<div class="event-section ev-s-2">
								<div class="ev-content-s">
									<?php if(have_rows('event_right_repeater')) : ?>
					                <div class="ev-contect-b">
					                    <?php while(have_rows('event_right_repeater')) : the_row(); ?>
					                    	<?php
						                     $text_position = get_sub_field('text_position_ev_rep');
						                    ?>
					                        <div class="ev-content-block d-flex flex-row">
						                        <?php if($text_position == "right") { ?>
					                        	<div class="ev-content-img">
					                        		<img src="<?php echo get_sub_field('event_image_rep'); ?>" />
					                        	</div>
					                        	<div class="ev-content-text ev-text-right">
					                        		<p><?php echo get_sub_field('event_text_rep'); ?></p>
					                        	</div>
					                        	<?php } else { ?>
					                        	<div class="ev-content-text ev-text-left-new">
					                        		<p><?php echo get_sub_field('event_text_rep'); ?></p>
					                        	</div>
					                        	<div class="ev-content-img">
					                        		<img src="<?php echo get_sub_field('event_image_rep'); ?>" />
					                        	</div>
					                        	<?php } ?>
					                        </div>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
								</div>
							</div>
						</div>
						<div class="home-social event-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Event End -->
	<!-- Speaker Start -->
	<div id="speakers" class="section ev-bg-bottom response-class hiden-block-all">
			<div class="speaker-cont-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sp-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-speaker-title.png" alt="sp-title" />
							</div>
							<div class="row speaker-slider-block">
									<?php if(have_rows('speakers_repeater')) : ?>
					                    <?php while(have_rows('speakers_repeater')) : the_row(); ?>
					                    	<?php
						                    	$speakers_image_rep = get_sub_field('speakers_image_rep');
						                    	$speakers_title_rep = get_sub_field('speakers_title_rep');
						                    	$company_name_rep = get_sub_field('company_name_rep');
																	$cooperative = get_sub_field('select_quantity_speakers');
																	$subject_one = get_sub_field('subject_one');

																	$speakers_image_first = get_sub_field('speakers_image_first');
																	$speakers_image_second = get_sub_field('speakers_image_second');
																	$speakers_title_first = get_sub_field('speakers_title_first');
																	$speakers_title_second = get_sub_field('speakers_title_second');
																	$company_name_first = get_sub_field('company_name_first');
																	$company_name_second = get_sub_field('company_name_second');
																	$subject_two = get_sub_field('subject_two');

						                    ?>
																<?php if($cooperative == 'two') { ?>
																	<div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
																		<div class="speaker-img popup-active-s" data-toggle="modal" data-target="#speaker-slides-<?php echo get_row_index(); ?>">
																			<img src="<?php echo $speakers_image_first; ?>" alt="speak-img" />
																			<div class="speaker-description">
																				<h2><?php echo $speakers_title_first; ?></h2>
																				<p><?php echo $company_name_first; ?></p>
																				<p class="subject-block"><?php echo $subject_two; ?></p>
																			</div>

																		</div>
																	</div>
																	<div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
																		<div class="speaker-img popup-active-s" data-toggle="modal" data-target="#speaker-slides-<?php echo get_row_index(); ?>">
																			<img src="<?php echo $speakers_image_second; ?>" alt="speak-img" />
																			<div class="speaker-description">
																				<h2><?php echo $speakers_title_second; ?></h2>
																				<p><?php echo $company_name_second; ?></p>
																				<p class="subject-block"><?php echo $subject_two; ?></p>
																			</div>

																		</div>
																	</div>
																<?php } else { ?>
					                        <div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
					                        	<div class="speaker-img popup-active-s" data-toggle="modal" data-target="#speaker-slides-<?php echo get_row_index(); ?>">
					                        		<img src="<?php echo $speakers_image_rep; ?>" alt="speak-img" />
					                        		<div class="speaker-description">
						                        		<h2><?php echo $speakers_title_rep; ?></h2>
						                        		<p><?php echo $company_name_rep; ?></p>
																				<p class="subject-block"><?php echo $subject_one; ?></p>
						                        	</div>

					                        	</div>
					                        </div>
															<?php } ?>
					                    <?php endwhile; ?>
									<?php endif; ?>
							</div>
							<div class="b-speaker-btn">
								<a href="<?php echo get_field('btn_partner_link'); ?>" target="_blank;"><?php echo get_field('btn_partner_text'); ?></a>
								<p>Deadline: August 15</p>
							</div>
							<div class="home-social event-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Speaker End -->
	<!-- Workshop Start -->
	<div id="workshops" class="section ev-bg-bottom response-class hiden-block-all">
			<div class="speaker-cont-section">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sp-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-workshop-title.png" alt="wor-title" />
							</div>
							<div class="row speaker-slider-block">
									<?php if(have_rows('workshop_repeater')) : ?>
					                    <?php while(have_rows('workshop_repeater')) : the_row(); ?>
					                    	<?php
						                    	$workshop_image_rep = get_sub_field('workshop_image_rep');
						                    	$workshop_title_rep = get_sub_field('workshop_title_rep');
						                    	$workshop_name_rep = get_sub_field('workshop_name_rep');
																	$cooperative_workshop = get_sub_field('select_quantity_workshop');
																	$subject_one_workshop = get_sub_field('subject_one_workshop');

																	$workshop_image_first = get_sub_field('workshop_image_first');
																	$workshop_image_second = get_sub_field('workshop_image_second');
																	$workshop_title_first = get_sub_field('workshop_title_first');
																	$workshop_title_second = get_sub_field('workshop_title_second');
																	$company_name_first_workshop = get_sub_field('company_name_first_workshop');
																	$company_name_second_workshop = get_sub_field('company_name_second_workshop');
																	$subject_two_workshop = get_sub_field('subject_two_workshop');

						                    ?>
																<?php if($cooperative_workshop == 'two') { ?>
																	<div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
																		<div class="speaker-img workshop-img popup-active-s" data-toggle="modal" data-target="#workshop-slides-<?php echo get_row_index(); ?>">
																			<img src="<?php echo $workshop_image_first; ?>" alt="speak-img" />
																			<div class="speaker-description">
																				<h2><?php echo $workshop_title_first; ?></h2>
																				<p><?php echo $company_name_first_workshop; ?></p>
																				<p class="subject-block"><?php echo $subject_two_workshop; ?></p>
																			</div>

																		</div>
																	</div>
																	<div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
																		<div class="speaker-img workshop-img popup-active-s" data-toggle="modal" data-target="#workshop-slides-<?php echo get_row_index(); ?>">
																			<img src="<?php echo $workshop_image_second; ?>" alt="speak-img" />
																			<div class="speaker-description">
																				<h2><?php echo $workshop_title_second; ?></h2>
																				<p><?php echo $company_name_second_workshop; ?></p>
																				<p class="subject-block"><?php echo $subject_two_workshop; ?></p>
																			</div>

																		</div>
																	</div>
																<?php } else { ?>
					                        <div class="col-lg-4 col-sm-6 col-xs-12 sp-bottom">
					                        	<div class="speaker-img workshop-img popup-active-s" data-toggle="modal" data-target="#workshop-slides-<?php echo get_row_index(); ?>">
					                        		<img src="<?php echo $workshop_image_rep; ?>" alt="speak-img" />
					                        		<div class="speaker-description">
						                        		<h2><?php echo $workshop_title_rep; ?></h2>
						                        		<p><?php echo $workshop_name_rep; ?></p>
																				<p class="subject-block"><?php echo $subject_one_workshop; ?></p>
						                        	</div>

					                        	</div>
					                        </div>
															<?php } ?>
					                    <?php endwhile; ?>
									<?php endif; ?>
							</div>
							<div class="b-speaker-btn">
								<a href="<?php echo get_field('btn_partner_link'); ?>" target="_blank;"><?php echo get_field('btn_partner_text'); ?></a>
								<p>Deadline: August 15</p>
							</div>
							<div class="home-social event-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Workshop End -->
	<!-- Agenda Start -->
	<div id="agenda" class="section ev-bg-bottom response-class">
			<div class="pr-content-s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="ev-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-agenda-title.png" alt="ag-title" />
							</div>
							<div class="agenda-block">
								<?php if(have_rows('agenda_repeater')) : ?>
									<div class="ag-days-title">
										<h2>Day 1, September 14</h2>
										<hr />
									</div>
									<?php while(have_rows('agenda_repeater')) : the_row(); ?>
										<?php
											$select_section_ag = get_sub_field('select_section_ag');
											$popup_id_ag = get_sub_field('popup_id_ag');
											$start_time_ag = get_sub_field('start_time_ag');
											$end_time_ag = get_sub_field('end_time_ag');
											$text_only_ag = get_sub_field('text_only_ag');
											$name_speaker_ag = get_sub_field('name_speaker_ag');
											$company_name_ag = get_sub_field('company_name_ag');
											$subject_ag = get_sub_field('subject_ag');
											$group_ag = get_sub_field('group_ag');
										?>
										<?php if($select_section_ag == "text") { ?>
											<div class="agenda-t ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time ag-t">
					                        <p><?php echo $start_time_ag; ?></p>
					                        <p><?php echo $end_time_ag; ?></p>
					                    </div>
					                    <div class="d-lg-inline-flex d-md-inline-flex ag-breake">
					                        <p><?php echo $text_only_ag; ?></p>
					                    </div>
					                </div>
					            </div>
										<?php } ?>
										<?php if($select_section_ag == "one") { ?>
											<div class="agenda-b ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time agenda-time-one ag-t">
					                        <p><?php echo $start_time_ag; ?></p>
					                        <p><?php echo $end_time_ag; ?></p>
					                    </div>
					                    <div class="one-bl d-lg-inline-flex d-md-inline-flex">
					                        <div class="agenda-bl one-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $popup_id_ag; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $name_speaker_ag; ?></p>
																					<p class="ag-sp-company"><?php echo $company_name_ag; ?></p>
					                                <p class="ag-sp-theme"><?php echo $subject_ag; ?></p>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
										<?php } ?>
										<?php if($select_section_ag == "three") { ?>
											<?php if ($group_ag['add_title_ag'] == true ) { ?>
												<div class="ag-title-f ag-margin">
													<div class="d-lg-flex d-md-flex flex-row">
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Big Hall</p>
														</div>
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Small Hall</p>
														</div>
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Workshops</p>
														</div>
													</div>
												</div>

											<?php } ?>
											<div class="agenda-b ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time agenda-time-three ag-t">
					                        <p><?php echo $group_ag['group_start_time_ag']; ?></p>
					                        <p><?php echo $group_ag['group_end_time_ag']; ?></p>
					                    </div>
					                    <div class="three-bl d-lg-inline-flex d-md-inline-flex">
					                        <div class="agenda-bl three-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $group_ag['pop-up_id_big_hall']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_big_hall_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['conpany_name_big_hall_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_big_hall_ag']; ?></p>
					                            </div>
					                        </div>
																	<div class="agenda-bl three-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $group_ag['pop-up_id_small_hall']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_small_hall_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['conpany_name_small_hall_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_small_hall_ag']; ?></p>
					                            </div>
					                        </div>
																	<?php if (!$group_ag['name_workshops_ag']) { ?>
																		<div class="agenda-bl agenda-bl-workshop-not three-ag justify-content-center">
																				<div class="ag-sp-content">
																						<p class="ag-sp-name-not">NO workshop</p>
																				</div>
																		</div>
																	<?php } else { ?>
																	<div class="agenda-bl agenda-bl-workshop three-ag" data-toggle="modal" data-target="#workshop-slides-<?php echo $group_ag['pop-up_id_workshops']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_workshops_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['company_name_workshops_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_workshops_ag']; ?></p>
					                            </div>
					                        </div>
																	<?php	} ?>
					                    </div>
					                </div>
					            </div>
										<?php } ?>


									<?php endwhile; ?>
								<?php endif; ?>
							</div>

							<div class="agenda-block">
								<?php if(have_rows('agenda_repeater_2')) : ?>
									<div class="ag-days-title">
										<h2>Day 2, September 15</h2>
										<hr />
									</div>
									<?php while(have_rows('agenda_repeater_2')) : the_row(); ?>
										<?php
											$select_section_ag = get_sub_field('select_section_ag');
											$popup_id_ag = get_sub_field('popup_id_ag');
											$start_time_ag = get_sub_field('start_time_ag');
											$end_time_ag = get_sub_field('end_time_ag');
											$text_only_ag = get_sub_field('text_only_ag');
											$name_speaker_ag = get_sub_field('name_speaker_ag');
											$company_name_ag = get_sub_field('company_name_ag');
											$subject_ag = get_sub_field('subject_ag');
											$group_ag = get_sub_field('group_ag');
										?>
										<?php if($select_section_ag == "text") { ?>
											<div class="agenda-t ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time ag-t">
					                        <p><?php echo $start_time_ag; ?></p>
					                        <p><?php echo $end_time_ag; ?></p>
					                    </div>
					                    <div class="d-lg-inline-flex d-md-inline-flex ag-breake">
					                        <p><?php echo $text_only_ag; ?></p>
					                    </div>
					                </div>
					            </div>
										<?php } ?>
										<?php if($select_section_ag == "one") { ?>
											<div class="agenda-b ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time agenda-time-one ag-t">
					                        <p><?php echo $start_time_ag; ?></p>
					                        <p><?php echo $end_time_ag; ?></p>
					                    </div>
					                    <div class="one-bl d-lg-inline-flex d-md-inline-flex">
					                        <div class="agenda-bl one-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $popup_id_ag; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $name_speaker_ag; ?></p>
																					<p class="ag-sp-company"><?php echo $company_name_ag; ?></p>
					                                <p class="ag-sp-theme"><?php echo $subject_ag; ?></p>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div>
										<?php } ?>
										<?php if($select_section_ag == "three") { ?>
											<?php if ($group_ag['add_title_ag'] == true ) { ?>
												<div class="ag-title-f ag-margin">
													<div class="d-lg-flex d-md-flex flex-row">
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Big Hall</p>
														</div>
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Small Hall</p>
														</div>
														<div class="d-lg-inline-flex d-md-inline-flex ag-t-b">
															<p>Workshops</p>
														</div>
													</div>
												</div>

											<?php } ?>
											<div class="agenda-b ag-margin">
					                <div class="d-lg-flex d-md-flex flex-row">
					                    <div class="agenda-time agenda-time-three ag-t">
					                        <p><?php echo $group_ag['group_start_time_ag']; ?></p>
					                        <p><?php echo $group_ag['group_end_time_ag']; ?></p>
					                    </div>
					                    <div class="three-bl d-lg-inline-flex d-md-inline-flex">
					                        <div class="agenda-bl three-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $group_ag['pop-up_id_big_hall']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_big_hall_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['conpany_name_big_hall_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_big_hall_ag']; ?></p>
					                            </div>
					                        </div>
																	<div class="agenda-bl three-ag" data-toggle="modal" data-target="#speaker-slides-<?php echo $group_ag['pop-up_id_small_hall']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_small_hall_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['conpany_name_small_hall_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_small_hall_ag']; ?></p>
					                            </div>
					                        </div>
																	<?php if (!$group_ag['name_workshops_ag']) { ?>
																		<div class="agenda-bl agenda-bl-workshop-not three-ag justify-content-center">
																				<div class="ag-sp-content">
																						<p class="ag-sp-name-not">NO workshop</p>
																				</div>
																		</div>
																	<?php } else { ?>
																	<div class="agenda-bl agenda-bl-workshop three-ag" data-toggle="modal" data-target="#workshop-slides-<?php echo $group_ag['pop-up_id_workshops']; ?>">
					                            <div class="ag-sp-content">
																					<p class="ag-sp-name"><?php echo $group_ag['name_workshops_ag']; ?></p>
																					<p class="ag-sp-company"><?php echo $group_ag['company_name_workshops_ag']; ?></p>
					                                <p class="ag-sp-theme"><?php echo $group_ag['subject_workshops_ag']; ?></p>
					                            </div>
					                        </div>
																	<?php	} ?>
					                    </div>
					                </div>
					            </div>
										<?php } ?>


									<?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="home-social parnter-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Agenda End -->
	<!-- Ticket Start -->
	<div id="tickets" class="section ticket-bg response-class">
		<div class="ticket-bg-top">
			<div class="ticket-content-s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex flex-row ticket-content-f">
								<?php if(have_rows('ticket_repeater')) : ?>
					                <?php while(have_rows('ticket_repeater')) : the_row(); ?>
					                      <?php
						                      $ticket_active_rep = get_sub_field('ticket_active_rep');
						                      $ticket_title_rep = get_sub_field('ticket_title_rep');
						                      $ticket_price_rep = get_sub_field('ticket_price_rep');
						                  ?>
						                  <?php if($ticket_active_rep == "active") { ?>
						                  	<div class="ticket-b ticket-active">
						                  <?php } else { ?>
						                  	<div class="ticket-b ticket-not-active">
						                  <?php } ?>
					                        	<a class="ticket-click" href="<?php echo get_field('btn_ticket_link'); ?>" target="_blank" data-toggle="modal" data-target="#pay-popup">
						                        	<div class="ticket-bg-s">
						                        		<div class="ticket-b-title">
						                        			<h2><?php echo $ticket_title_rep; ?></h2>
						                        		</div>
						                        		<div class="ticket-b-price">
						                        			<p><?php echo $ticket_price_rep; ?></p>
						                        		</div>
						                        	</div>
					                        	</a>
					                        </div>
					                <?php endwhile; ?>
					            <?php endif; ?>
							</div>
							<div class="home-social ticket-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Ticket End -->
	<!-- Sponsor Start -->
	<div id="sponsors" class="section ev-bg-bottom response-class">
			<div class="sponsor-cont-s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="ev-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-sponsor-title.png" alt="sp-title" />
							</div>
							<div class="sp-content-b">
								<?php if(have_rows('sponsor_gold')) : ?>
										<div class="d-flex flex-row sp-content-f">
											<div class="sp-title-b">
												<h2>Gold</h2>
											</div>
							                <div class="sp-logo-b">
								                <div class="d-flex flex-row sp-content-f">
								                	<?php while(have_rows('sponsor_gold')) : the_row(); ?>
								                        <div class="sp-flex-b">
								                        	<a href="<?php echo get_sub_field('sponsor_gold_link'); ?>" target="_blank">
									                        	<div class="sp-logo-bg" style="background: url(<?php echo get_sub_field('sponsor_gold_logo'); ?>);"></div>
									                        </a>
								                        </div>
								                    <?php endwhile; ?>
								                </div>
						                	</div>
						                </div>
						        <?php endif; ?>
						        <div style="clear: both;"></div>
						        <?php if(have_rows('sponsor_silver')) : ?>
										<div class="d-flex flex-row sp-content-f">
											<div class="sp-title-b">
												<h2>Silver</h2>
											</div>
							                <div class="sp-logo-b">
							                    <div class="d-flex flex-row sp-content-f">
							                    	<?php while(have_rows('sponsor_silver')) : the_row(); ?>
								                        <div class="sp-flex-b">
								                        	<a href="<?php echo get_sub_field('sponsor_silver_link'); ?>" target="_blank">
									                        	<div class="sp-logo-bg" style="background: url(<?php echo get_sub_field('sponsor_silver_logo'); ?>);"></div>
									                        </a>
								                        </div>
								                    <?php endwhile; ?>
							                    </div>
						                	</div>
						                </div>
						        <?php endif; ?>
						        <div style="clear: both;"></div>
						        <?php if(have_rows('sponsor_bronze')) : ?>
										<div class="d-flex flex-row sp-content-f">
											<div class="sp-title-b">
												<h2>Bronze</h2>
											</div>
							                <div class="sp-logo-b">
							                    <div class="d-flex flex-row sp-content-f">
							                    	<?php while(have_rows('sponsor_bronze')) : the_row(); ?>
								                        <div class="sp-flex-b">
								                        	<a href="<?php echo get_sub_field('sponsor_bronze_link'); ?>" target="_blank">
									                        	<div class="sp-logo-bg" style="background: url(<?php echo get_sub_field('sponsor_bronze_logo'); ?>);"></div>
									                        </a>
								                        </div>
								                    <?php endwhile; ?>
							                    </div>
						                	</div>
						                </div>
						        <?php endif; ?>
						        <div style="clear: both;"></div>
							</div>
							<div class="home-social sponsor-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Sponsor End -->
	<!-- Partner Start -->
	<div id="partners" class="section ev-bg-bottom response-class">
			<div class="pr-content-s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="ev-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-partners-title.png" alt="pr-title" />
							</div>
							<div class="pr-content-blok">
								<?php if(have_rows('partners_repeater')) : ?>
					                <div class="row">
					                    <?php while(have_rows('partners_repeater')) : the_row(); ?>
					                        <div class="pr-flex-b col-lg-3 col-md-4 col-sm-6">
								                <a href="<?php echo get_sub_field('partners_link_rep'); ?>" target="_blank">
									               <div class="pr-logo-bg" style="background: url(<?php echo get_sub_field('partners_logo_rep'); ?>);"></div>
									            </a>
								            </div>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
							<div class="home-social parnter-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Partnar End -->
	<!-- Contact Start -->
	<div id="contacts" class="section ev-bg-bottom response-class">
			<div class="co-content-s">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="co-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-contact-title.png" alt="co-title" />
							</div>
							<div class="co-content-b">
								<?php if(have_rows('contact_repeater')) : ?>
					                <div class="row co-s-b">
					                    <?php while(have_rows('contact_repeater')) : the_row(); ?>
					                       	<div class="co-block-f col-lg-4 col-md-4 col-sm-12">
					                       		<img src="<?php echo get_sub_field('contact_image_rep'); ?>" alt="co-img" />
					                       		<div class="co-description">
					                       			<h2><?php echo get_sub_field('contact_title_rep'); ?></h2>
					                       			<p class="co-d-h"><?php echo get_sub_field('contact_position_rep'); ?></p>
					                       			<div class="co-email">
					                       				<p><span>E-mail: </span><a href="mailto:<?php echo get_sub_field('contact_email_rep'); ?>"><?php echo get_sub_field('contact_email_rep'); ?></a></p>
					                       			</div>
					                       			<div class="co-telegram">
					                       				<p><span>Telegram: </span><?php echo get_sub_field('contact_telegram_rep'); ?></p>
					                       			</div>
					                       		</div>
					                       	</div>


					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
							<div class="home-social contact-social">
								<?php if(have_rows('social_repeater')) : ?>
					                <div class="soc-networks">
					                    <?php while(have_rows('social_repeater')) : the_row(); ?>
					                        <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                            <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                        </a>
					                    <?php endwhile; ?>
					                </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Contact End -->
	<!-- Location Start -->
	<div id="location" class="section ev-bg-bottom response-class">
			<div class="container loc-media-m">
				<div class="row">
					<div class="col-12">
						<div class="co-title">
								<img src="/wp-content/themes/devops-days-kazan/images/devops-days-location-title.png" alt="co-title" />
							</div>
						<div class="map-section-b bg-map-location">
							<?php echo do_shortcode('[put_wpgm id=1]'); ?>
						</div>
						<div class="location-adress-info">
							<p><span>Location: </span><?php echo get_field('location_adress'); ?></p>
						</div>
						<div class="location-social home-social">
							<?php if(have_rows('social_repeater')) : ?>
					            <div class="soc-networks">
					                <?php while(have_rows('social_repeater')) : the_row(); ?>
					                    <a class="soc-network-item" href="<?php echo get_sub_field('social_link_rep'); ?>" target="_blank">
					                        <i class="fa <?php echo get_sub_field('social_icon_rep'); ?>"></i>
					                    </a>
					                <?php endwhile; ?>
					            </div>
					        <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- Location End -->


<?php if(have_rows('speakers_repeater')) : ?>
<?php while(have_rows('speakers_repeater')) : the_row(); ?>
	<?php
		$speakers_image_rep = get_sub_field('speakers_image_rep');
		$speakers_title_rep = get_sub_field('speakers_title_rep');
		$company_name_rep = get_sub_field('company_name_rep');
		$speaker_content_rep = get_sub_field('speaker_content_rep');

		$cooperative = get_sub_field('select_quantity_speakers');

		$speakers_image_first = get_sub_field('speakers_image_first');
		$speakers_image_second = get_sub_field('speakers_image_second');
		$speakers_title_first = get_sub_field('speakers_title_first');
		$speakers_title_second = get_sub_field('speakers_title_second');
		$company_name_first = get_sub_field('company_name_first');
		$company_name_second = get_sub_field('company_name_second');
		$speaker_content_two = get_sub_field('speaker_content_two');
	?>
	<?php if ($cooperative == "two") { ?>
		<div class="modal" id="speaker-slides-<?php echo get_row_index(); ?>">
			<div class="modal-dialog sp-modal-d-two">
				<div class="modal-content sp-modal-s">
					<div class="modal-body">
						<div class="sp-modal-b">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="sp-modal-left-two">
							<div class="sp-two-img">
									<img src="<?php echo $speakers_image_first; ?>" alt="speak-img" />
							</div>
							<div class="sp-two-content">
								<h2><?php echo $speakers_title_first; ?></h2>
								<p><?php echo $company_name_first; ?></p>
								<div class="rep-network-two">
									<?php if(have_rows('network_repeater_first')) : ?>
										<ul>
										<?php while(have_rows('network_repeater_first')) : the_row(); ?>
											<?php
												$social_network_first = get_sub_field('social_network_first');
												$url_network_first = get_sub_field('url_network_first');
											?>
												<li><a href="<?php echo $url_network_first; ?>" target="_blank;"><div class="<?php echo $social_network_first; ?>"></div></a></li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="sp-modal-right-two">
							<div class="sp-two-img">
									<img src="<?php echo $speakers_image_second; ?>" alt="speak-img" />
							</div>
							<div class="sp-two-content">
								<h2><?php echo $speakers_title_second; ?></h2>
								<p><?php echo $company_name_second; ?></p>
								<div class="rep-network-two">
									<?php if(have_rows('network_repeater_second')) : ?>
										<ul>
										<?php while(have_rows('network_repeater_second')) : the_row(); ?>
											<?php
												$social_network_second = get_sub_field('social_network_second');
												$url_network_second = get_sub_field('url_network_second');
											?>
												<li><a href="<?php echo $url_network_second; ?>" target="_blank;"><div class="<?php echo $social_network_second; ?>"></div></a></li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="sp-modal-content-two">

							<div style="clear:both;"></div>
				            <div id="infinite-scroll" class="popup-midle-content-sp">
				                <?php echo $speaker_content_two; ?>
				            </div>
						</div>
						<div style="clear:both;"></div>
					</div>
					</div>
				</div>
			</div>
	<?php } else { ?>
		<div class="modal" id="speaker-slides-<?php echo get_row_index(); ?>">
			<div class="modal-dialog sp-modal-d">
				<div class="modal-content sp-modal-s">
					<div class="modal-body">
						<div class="sp-modal-b">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="sp-modal-left">
							<img src="<?php echo $speakers_image_rep; ?>" alt="speak-img" />
						</div>
						<div class="sp-modal-right">
							<h2><?php echo $speakers_title_rep; ?></h2>
							<p><?php echo $company_name_rep; ?></p>
							<div style="clear:both;"></div>
				            <div id="infinite-scroll" class="popup-midle-content-sp">
				                <?php echo $speaker_content_rep; ?>
				            </div>
						</div>
						<div style="clear:both;"></div>
						<div class="rep-network">
							<?php if(have_rows('network_repeater_rep')) : ?>
								<ul>
								<?php while(have_rows('network_repeater_rep')) : the_row(); ?>
									<?php
										$social_network_rep = get_sub_field('social_network_rep');
										$url_network_rep = get_sub_field('url_network_rep');
									?>

										<li><a href="<?php echo $url_network_rep; ?>" target="_blank;"><div class="<?php echo $social_network_rep; ?>"></div></a></li>


								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
					</div>
				</div>
			</div>
	<?php	} ?>

<?php endwhile; ?>
<?php endif; ?>

<?php if(have_rows('workshop_repeater')) : ?>
<?php while(have_rows('workshop_repeater')) : the_row(); ?>
	<?php
		$workshop_image_rep = get_sub_field('workshop_image_rep');
		$workshop_title_rep = get_sub_field('workshop_title_rep');
		$workshop_name_rep = get_sub_field('workshop_name_rep');
		$workshop_content_rep = get_sub_field('workshop_content_rep');

		$cooperative_workshop = get_sub_field('select_quantity_workshop');

		$workshop_image_first = get_sub_field('workshop_image_first');
		$workshop_image_second = get_sub_field('workshop_image_second');
		$workshop_title_first = get_sub_field('workshop_title_first');
		$workshop_title_second = get_sub_field('workshop_title_second');
		$company_name_first_workshop = get_sub_field('company_name_first_workshop');
		$company_name_second_workshop = get_sub_field('company_name_second_workshop');
		$workshop_content_two = get_sub_field('workshop_content_two');
	?>
	<?php if ($cooperative_workshop == "two") { ?>
		<div class="modal" id="workshop-slides-<?php echo get_row_index(); ?>">
			<div class="modal-dialog sp-modal-d-two">
				<div class="modal-content sp-modal-s">
					<div class="modal-body">
						<div class="sp-modal-b">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="sp-modal-left-two">
							<div class="sp-two-img">
									<img src="<?php echo $workshop_image_first; ?>" alt="speak-img" />
							</div>
							<div class="sp-two-content">
								<h2><?php echo $workshop_title_first; ?></h2>
								<p><?php echo $company_name_first_workshop; ?></p>
								<div class="rep-network-two">
									<?php if(have_rows('network_repeater_first_workshop')) : ?>
										<ul>
										<?php while(have_rows('network_repeater_first_workshop')) : the_row(); ?>
											<?php
												$social_network_first_workshop = get_sub_field('social_network_first_workshop');
												$url_network_first_workshop = get_sub_field('url_network_first_workshop');
											?>
												<li><a href="<?php echo $url_network_first_workshop; ?>" target="_blank;"><div class="<?php echo $social_network_first_workshop; ?>"></div></a></li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="sp-modal-right-two">
							<div class="sp-two-img">
									<img src="<?php echo $workshop_image_second; ?>" alt="speak-img" />
							</div>
							<div class="sp-two-content">
								<h2><?php echo $workshop_title_second; ?></h2>
								<p><?php echo $company_name_second_workshop; ?></p>
								<div class="rep-network-two">
									<?php if(have_rows('network_repeater_second_workshop')) : ?>
										<ul>
										<?php while(have_rows('network_repeater_second_workshop')) : the_row(); ?>
											<?php
												$social_network_second_workshop = get_sub_field('social_network_second_workshop');
												$url_network_second_workshop = get_sub_field('url_network_second_workshop');
											?>
												<li><a href="<?php echo $url_network_second_workshop; ?>" target="_blank;"><div class="<?php echo $social_network_second_workshop; ?>"></div></a></li>
										<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="sp-modal-content-two">

							<div style="clear:both;"></div>
				            <div id="infinite-scroll" class="popup-midle-content-sp">
				                <?php echo $workshop_content_two; ?>
				            </div>
						</div>
						<div style="clear:both;"></div>
					</div>
					</div>
				</div>
			</div>
	<?php } else { ?>
		<div class="modal" id="workshop-slides-<?php echo get_row_index(); ?>">
			<div class="modal-dialog sp-modal-d">
				<div class="modal-content sp-modal-s">
					<div class="modal-body">
						<div class="sp-modal-b">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="sp-modal-left">
							<img src="<?php echo $workshop_image_rep; ?>" alt="speak-img" />
						</div>
						<div class="sp-modal-right">
							<h2><?php echo $workshop_title_rep; ?></h2>
							<p><?php echo $cworkshop_name_rep; ?></p>
							<div style="clear:both;"></div>
				            <div id="infinite-scroll" class="popup-midle-content-sp">
				                <?php echo $workshop_content_rep; ?>
				            </div>
						</div>
						<div style="clear:both;"></div>
						<div class="rep-network">
							<?php if(have_rows('network_repeater_rep_workshop')) : ?>
								<ul>
								<?php while(have_rows('network_repeater_rep_workshop')) : the_row(); ?>
									<?php
										$social_network_rep_workshop = get_sub_field('social_network_rep_workshop');
										$url_network_rep_workshop = get_sub_field('url_network_rep_workshop');
									?>

										<li><a href="<?php echo $url_network_rep_workshop; ?>" target="_blank;"><div class="<?php echo $social_network_rep_workshop; ?>"></div></a></li>


								<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
					</div>
				</div>
			</div>
	<?php	} ?>

<?php endwhile; ?>
<?php endif; ?>

<div class="modal" id="pay-popup">
	<div class="modal-dialog sp-modal-d">
		<div class="modal-content sp-modal-s">
			<div class="modal-body">
				<div class="sp-modal-b">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<script type="text/javascript" async="async" defer="defer" charset="UTF-8" src="https://timepad.ru/js/tpwf/loader/min/loader.js" data-timepad-customized="38870" data-twf2s-event--id="758943" data-timepad-widget-v2="event_register"></script>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="partner-popup">
	<div class="modal-dialog partner-modal-d">
		<div class="modal-content sp-modal-s">
			<div class="modal-body p-m-p">
				<div class="sp-modal-b">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="partner-modal-left">
					<img src="/wp-content/themes/devops-days-kazan/images/contacts-img-1-popup.png" alt="popup-img" />
				</div>
				<div class="partner-modal-right">
					<div class="partner-b-popup">
					<?php $partner_popup = get_field('settings_partner_btn'); ?>
						<div class="p-popup-cont">
							<h2>write me:</h2>
							<p>E-mail: <a href="mailto:<?php echo $partner_popup['email_popup']; ?>" target="_blank;"><?php echo $partner_popup['email_popup']; ?></a></p>
							<p>Telegram: <span><?php echo $partner_popup['telegram_popup']; ?></span></p>
							<p>Skype: <span><?php echo $partner_popup['skype_popup']; ?></span></p>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>

			</div>
			</div>
		</div>
	</div>
</div>

<script>
    (function ($) {
        $(window).on("load", function () {

            $(".popup-midle-content-sp").mCustomScrollbar({
                theme: "light-2",
                scrollButtons: {
                    enable: true
                },
                callbacks: {}
            });

        });
    })(jQuery);
</script>

<?php get_footer(); ?>
