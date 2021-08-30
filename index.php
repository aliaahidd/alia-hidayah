<?php include ("index.html"); ?>

  <!-- Contact Info-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <div class="section-title">
                        <h2>Contact Info</h2></div>
                    <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                          <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Tanjung Malim, Perak</p>
                          </div>
            
                          <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>aliahidayah00@gmail.com</p>
                          </div>
            
                          <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+60123456789</p>
                          </div>
            
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127406.24344604347!2d101.43188479194554!3d3.7126423337489647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cb86479c8aa525%3A0x949839aa4b94759b!2sTanjong%20Malim%2C%20Perak!5e0!3m2!1sen!2smy!4v1612758998373!5m2!1sen!2smy" width="100%" height="290px" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                        </div>
            
                      </div>

                      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" style="float: right;">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="name">Your Email</label>
                              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                          </div>
                          <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                          </div>
                          <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                      </div>
                    </div>
                </div>
            </section>

