                    <!-- content footer-->
                    <div class="height-emulator"></div>
                    <footer class="content-footer">
                        <!--  container  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Footer logo --> 
                                    <div class="footer-item footer-logo">
                                        <a href="index.html"><img src="<?= base_url()."/assets/".$direction; ?>/images/logo.png" alt=""></a>
                                        <p><?= $this->session->userdata['site_settings']['site_description']; ?></p>
                                    </div>
                                    <!-- Footer logo end --> 
                                </div>
                                <!-- Footer info --> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link"><?= $this->lang->line('call'); ?></h4>
                                        <ul>
                                        	<?php
											$site_phone = $this->session->userdata['site_settings']['site_phone'];
											if (strpos($site_phone, ',') !== false) {
												$array = explode(',', $site_phone);
												foreach($array as $number){
													echo'<li><a href="#">'.$number.'</a></li>';
												}
											} else {
												echo'<li><a href="#">'.$site_phone.'</a></li>';
											}
											?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info end--> 
                                <!-- Footer info --> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link"><?= $this->lang->line('write'); ?></h4>
                                        <ul>
                                        	<?php
											$site_email = $this->session->userdata['site_settings']['site_email'];
											if (strpos($site_email, ',') !== false) {
												$array = explode(',', $site_email);
												foreach($array as $email){
													echo'<li><a href="#">'.$email.'</a></li>';
												}
											} else {
												echo'<li><a href="#">'.$site_email.'</a></li>';
											}
											?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info-->
                                <!-- Footer info end--> 
                                <div class="col-md-2">
                                    <div class="footer-item">
                                        <h4 class="text-link"><?= $this->lang->line('visit'); ?></h4>
                                        <ul>
                                        	<?php
											$site_address = $this->session->userdata['site_settings']['site_address'];
											if (strpos($site_address, ';') !== false) {
												$array = explode(';', $site_address);
												foreach($array as $address){
													echo'<li><span>'.$address.'</span></li>';
												}
											} else {
												echo'<li><span>'.$site_address.'</span></li>';
											}
											?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer info end--> 
                            </div>
                            <!-- Footer copyright -->
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="footer-wrap">
                                        <span class="copyright">  &#169; <a href="http://vertex.com.co" style="color:#fff">VERTEX</a>   2017.  All rights reserved.  
                                        </span>
                                        <span class="to-top"><?= $this->lang->line('top'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer copyright end -->
                        </div>
                        <!--  container  end --> 
                        <!-- Hover animation  -->
                        <canvas class="particular"></canvas>
                        <!-- Hover animation  end -->
                    </footer>
                    <!-- content footer end -->
                    <!-- share  -->
                    <div class="share-inner">
                        <div class="share-container  isShare">
                        <a href="<?= site_url('LanguageSwitcher/switchLang/arabic') ?>" class="pop share-icon"><img src="<?= base_url().FLAGS_IMAGES."sa.png" ?>" />  العربية</a>
                        <a href="<?= site_url('LanguageSwitcher/switchLang/english') ?>" class="pop share-icon"><img src="<?= base_url().FLAGS_IMAGES."us.png" ?>" />  English</a>
                        </div>
                        <div class="close-share"></div>
                    </div>
                    <!-- share end -->
                </div>
                <!-- content-holder  end-->
            </div>
            <!-- wrapper end -->
                      
            <!-- Fixed footer -->
            <footer class="fixed-footer">
                <div class="footer-social">
                    <ul>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_facebook']; ?>" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_instagram']; ?>" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?= $this->session->userdata['site_settings']['site_google']; ?>" target="_blank" ><i class="fa fa-google"></i></a></li>
                    </ul>
                </div>
                <!-- Header  title --> 
                <div class="footer-title">
                    <h2><a  href="#"></a></h2>
                </div>
                <!-- Header  title  end-->
            </footer>
            <!-- Fixed footer end-->
        </div>
        <!-- Main end -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1t_o5mRE1j5m4Z6WjE_53OgfFtNrVeUs" type="text/javascript"></script>
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="<?= base_url()."/assets/".$direction; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url()."/assets/".$direction; ?>/js/plugins.js"></script>
        <script type="text/javascript" src="<?= base_url()."/assets/".$direction; ?>/js/scripts.js"></script>
		<script type="text/javascript" src="<?= base_url()."/assets/".$direction; ?>/js/map.js"></script>

    </body>
</html>