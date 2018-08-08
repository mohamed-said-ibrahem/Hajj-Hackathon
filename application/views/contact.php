<div id="wrapper">
    <!-- content-holder  -->
    <div class="content-holder">
        <!-- Page title -->
        <div class="dynamic-title">Contacts</div>
        <!-- Page title  end--> 
        <!-- content  -->
        <div class="content">
            <section class="parallax-section">
                <div class="parallax-inner">
                    <div class="bg" data-bg="<?= base_url().PAGES_IMAGES.$row->page_image ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                    <div class="overlay"></div>
                </div>
                <div class="container">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h2> <strong> <?= $row->page_title ?> </strong></h2>
                            </div>
                            <div class="col-md-6">
                                <ul class="creat-list">
                                    <li><a href="<?= base_url(); ?>"><?= $this->lang->line('home'); ?></a></li>
                                    <li><a href="<?= site_url('contact'); ?>"><?= $row->page_title ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content end -->
        <!-- content  -->
        <div class="content">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="section-title"><strong><?= $row->page_title ?></strong></h2>
                            <p><?= $row->page_text ?></p>
                        </div>
                    </div>
                    <div class="map-box">
                        <div  id="map-canvas"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="contact-details">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3 class="bold-title"><?= $this->lang->line('contact_details'); ?> : </h3>
                                    </div>
                                    <div class="col-md-3">
                                    
                                        	<?php
											$site_phone = $this->session->userdata['site_settings']['site_phone'];
											if (strpos($site_phone, ',') !== false) {
												$numbers = explode(',', $site_phone);
											}
											
											$site_address = $this->session->userdata['site_settings']['site_address'];
											if (strpos($site_address, ';') !== false) {
												$address = explode(';', $site_address);
											} 
											?>
                                    
                                    
                                    
                                    
                                        <h4><?= $this->lang->line('egypt_office'); ?></h4>
                                        <ul>
                                            <li><a href="#"><?= $address[0] ?></a></li>
                                            <li><a href="#"><?= $numbers[0] ?></a></li>
                                            <li><a href="#"><?= $this->session->userdata['site_settings']['site_email']; ?></a></li>
                                        </ul>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><?= $this->lang->line('ksa_office'); ?></h4>
                                        <ul>
                                            <li><a href="#"><?= $address[1] ?></a></li>
                                            <li><a href="#"><?= $numbers[1] ?></a></li>
                                            <li><a href="#"><?= $this->session->userdata['site_settings']['site_email']; ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h4><?= $this->lang->line('follow'); ?></h4>
                                        <ul>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_facebook']; ?>" target="_blank" ><i class="fa fa-facebook"></i> <?= $this->lang->line('facebook'); ?></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i> <?= $this->lang->line('twitter'); ?></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_instagram']; ?>" target="_blank" ><i class="fa fa-instagram"></i> <?= $this->lang->line('instagram'); ?></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_google']; ?>" target="_blank" ><i class="fa fa-google"></i> <?= $this->lang->line('google'); ?></a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- contact form -->
                            <div class="contact-form-holder">
                                <div id="contact-form">
                                    <div id="message"></div>
                                    <form method="post" action="php/contact.php" name="contactform" id="contactform">
                                        <input name="name" type="text" id="name"  onClick="this.select()" value="<?= $this->lang->line('name_form'); ?>" >
                                        <input name="email" type="text" id="email" onClick="this.select()" value="<?= $this->lang->line('email_form'); ?>" >            
                                        <textarea name="comments"  id="comments" onClick="this.select()" ><?= $this->lang->line('message_form'); ?></textarea>  
                                        <button type="submit"  id="submit"  data-top-bottom="transform: translateY(-50px);" data-bottom-top="transform: translateY(50px);"><span><?= $this->lang->line('send_btn'); ?> </span></button>          										           											
                                    </form>
                                </div>
                            </div>
                            <!-- contact form  end-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content end-->      
