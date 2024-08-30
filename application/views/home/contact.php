            <section id="Contact" class="wide-50">
                <div class="container">
                    <div class="row">
                    <!-- Contact FORM -->
                        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                            <div class="form-holder">
                            <h2 class="mb-20 text-center">Contact</h2>
                                <!-- Text -->    
                            <p class="p-xl text-center">
                                Hubungi Kami di <a href="tel:6281234567890">(62) 812-3456-7890</a>
                            </p>
                            <!-- Form -->
                            <form name="bookinkform" class="row booking-form" method="post" action="<?php echo base_url('contact/send_email');?>">
                                <!-- Form Input -->
                                <div class="col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control name" placeholder="Your Name*" required> 
                                </div>
                                <div class="col-lg-6">
                                        <input type="text" id="subject" name="subject" class="form-control name" placeholder="Subject*" required> 
                                </div>
                                <!-- Form Input -->        
                                <div class="col-lg-12">
                                    <input type="email" id="email" name="email" class="form-control email" placeholder="Email Address*" required> 
                                </div>
                                <!-- Form Textarea -->            
                                <div class="col-md-12">
                                    <textarea id="message" name="message" class="form-control message" rows="4" placeholder="Your Message ..."></textarea>
                                </div>                    
                                <!-- Form Button -->
                                <div class="col-md-12 mt-10">  
                                    <button type="submit" class="btn btn-md btn-red tra-red-hover submit">Send</button> 
                                </div>                                     
                                <!-- Form Message -->
                                <div class="col-md-12 booking-form-msg text-center">
                                    <div class="sending-msg"><span class="loading"></span></div>
                                </div>                                                   
                            </form>  <!-- End Form -->    
                            </div>  
                        </div>  <!-- END BOOKING FORM -->    
                </div>  <!-- End row -->
            </div>     <!-- End container -->    
            </section>
