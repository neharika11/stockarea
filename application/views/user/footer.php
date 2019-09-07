<footer>
    <div class="Footers px-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3 col-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                    <div class="Foots">
                        <h3>Contact</h3>
                        <ol>
                            <li> <a href="mailto:admin@stockarea.io">admin@stockarea.io</a>
                            </li>

                            <li> +91 96139 77777</li>

                        </ol>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                    <div class="Foots">
                        <h3>About</h3>
                        <ul>
                            <li><a href="<?=base_url()?>user/warehouse_provider">Warehouse Provider</a></li>
                            <li><a href="<?=base_url()?>user/warehouse_network">Warehouse Network</a></li>
                            <li><a href="javascript:void(0)">Our provider</a></li>
                            <li><a href="<?=base_url()?>user/blog">Blog</a></li>
                            <li><a href="<?=base_url()?>user/faq">FAQs</a></li>
                            <li><a href="<?=base_url()?>user/about_us">About us</a></li>

                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                    <div class="Foots">
                        <h3>Networks</h3>
                        <ul>
                            <li><a href="javascript:void(0)">Warehouse in Chennai </a></li>
                            <li><a href="javascript:void(0)">Warehouse in Mumbai</a></li>
                            <li><a href="javascript:void(0)">Warehouse in Delhi</a></li>
                            <li><a href="javascript:void(0)">Warehouse in Noida</a></li>
                            <li><a href="javascript:void(0)">Warehouse in Bengaluru</a></li>
                            <li><a href="javascript:void(0)">Warehouse in Hyderabad</a></li>
                            <li><a href="javascript:void(0)">Warehouse in Pune</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                    <div class="Foots">

                        <p>Subscribe to our newsletter for latest updates on on-demand warehousing.</p>
                        <form>
                            <input type="" name="" placeholder="Your email address" class="form-control">
                            <button class="btnsubmit">submit</button>
                        </form>

                        <ul class="p-0 m-0 d-flex align-items-center justify-content-end flex-fill">
                            <li class="px-2"><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li class="px-2"><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li class="px-2"><a href=""><i class="fa fa-facebook"></i></a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>
        <div class="Copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <p class="m-0">© 2019 Meinigar Technologies Private Limited. All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 d-flex justify-content-center flex-fill">
                        <ul class="d-flex flex-row m-0 p-0 justify-content-lg-end justify-content-md-end justify-content-sm-between justify-content-between flex-fill">
                            <li class="ml-lg-5 ml-md-5 ml-sm-0 ml-0"><a href="<?=base_url()?>user/terms_of_service">Terms of service</a></li>
                            <li class="ml-lg-5 ml-md-5 ml-sm-0 ml-0"><a href="javascript:void(0)">Privacy policy</a></li>
                            <li class="ml-lg-5 ml-md-5 ml-sm-0 ml-0"><a href="javascript:void(0)">Sitemap</a></li>

                        </ul>
                    </div>
                </div>

            </div>

        </div>
</footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js'></script>
<!--<script src="<?php echo base_url()?>assets/user/js/script.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php echo base_url()?>assets/user/js/owl.carousel.js"></script>
<script src="<?php echo base_url()?>assets/user/js/scrolla.jquery.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js'></script>


    <script type="text/javascript">
        $('.filter2').click(function(){

            console.log('anurag');
             $.ajax({
              type:'post',
              url:'<?php echo base_url('search') ?>',
              data:$('#filter').serialize(),
              success:function(data){
            

              }
            });        

        })
    </script>

</body>

</html>