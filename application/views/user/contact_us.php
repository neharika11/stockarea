<div class="contact-wrap-1">
    <div class="container">

        <div class="row">

            <div class="col-lg-12 d-flex justify-content-center ">

                <form id="contact-form" method="post" action="" role="form">

                    <div class="controls">

                        <img src="<?= base_url()?>assets/user/images/support.png" alt="support">
                        <p>Tell us about your warehousing requirement and let us find the correct place for your inventory</p>
                        <p class="para1">We understand your busy schedule. Searching for the right space requires time.</p>

                        <div class="form-box1">
                            <div class="form-group">
                                <label for="form_name">Firstname*</label>
                                <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                            </div>

                            <div class="form-group">
                                <label for="form_email">Email*</label>
                                <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">

                            </div>
                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control">

                            </div>

                            <div class="form-group">
                                <label for="form_phone">Company</label>
                                <input id="form_company" type="tel" name="company" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="form_phone">Requirement type*</label>

                                <select name='subject' id="form_Requirement" class='form-control'>
                                    <option></option>
                                    <option>Leasable space</option>
                                    <option>Warehouse services</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <label for="form_phone"> Project duration*</label>

                                <select name='subject' id="form_Requirement" class='form-control'>
                                    <option></option>
                                    <option>0-3 months</option>
                                    <option>3-6 months</option>
                                    <option>6-12 months</option>
                                    <option>12-24 months</option>
                                    <option>More than 24 months</option>
                                    <option>I am not sure</option>

                                </select>

                            </div>

                            <div class="form-group">
                                <label for="form_phone"> Where you are looking for warehouse?*</label>
                                <input id="form_warehouse" type="tel" name="duration" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="form_message">Tell us more about your requirement</label>
                                <textarea id="form_message" name="message" rows="6" required data-error="Please,leave us a message." style="width: 100%"></textarea>
                                <div class="checkbox">

                                    <label class="checkbox1">
                                        <input type="checkbox" class="cheker1"> <span>By submitting this form, you agree to Stockarea's <a href="#">privacy policy</a></span></label>
                                </div>

                            </div>
                            <div class="form-group w-50 mx-auto position-relative d-flex gt-btn ">
                                <a href="" class="def-1btn justify-content-center">Send it to us</a>
                                <!--   <input type="submit" class="sdef-1btn justify-content-center" value="Send it to us"> -->
                            </div>
                        </div>
                        <div class="touch-us">
                            <h4>You can also get in touch with us on</h4>
                            <a href="#" class="contact-mail">admin@stockarea.io </a> <a href="#" class="contact-phone contact-mail">+91 96139 77777 </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>