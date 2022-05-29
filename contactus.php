<?php /* Template Name: contactus */ ?>
<?php get_header() ?>
<div class="container">
    <div class="container-about">
        <div class="row">
            <div class="col-md-12">
                <h1>Love to Hear From You</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <p>Founded in 2022, Kuro is headquartered in Denmark with regional headquarters in Hamburg, Shanghai and
                    Singapore.
                    Kuro has 18 offices worldwide and is recognized as the leading brand for hardware in the USA, Europe
                    and China.</p>

                <div>
                    Company: <a href="<?php echo get_site_url(); ?>">Kuro</a>
                </div>
                <div>
                    Address: <a href="#">Spangsbjerg Kirkevej 103, 6700 Esbjerg</a>
                </div>
                <div>
                    Phone: <a href="#">+45 76 13 32 00</a>
                </div>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Spangsbjerg%20Kirkevej%20103,%206700%20Esbjerg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net">google maps html widget</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}</style></div></div>
            </div>
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                    data-toggle="validator">
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required
                            data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required
                            data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required
                            data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Message</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required
                            data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-submit mt-5">
                        <button class="btn btn-lg btn-primary" type="submit"><i
                                class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Added to cart</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Item has been successfully added to cart!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>