<?php include('header.php') ?>
<div class="innerPage ContactPage">
    <div class="breadCrums">
        <div class="area-lines">
            <div class="line-1"></div>
            <div class="line-2"></div>
            <div class="line-3"></div>
            <div class="line-4"></div>
            <div class="line-5"></div>
            <div class="line-6"></div>
            <div class="line-7"></div>
            <div class="line-8"></div>
        </div>
        <div class="container">
            <div class="breadCrumsContent">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="ContactDetailsSec CustomPending bgLighGrey">
        <div class="container">
            <div class="ContactDetailsTopWrapper">
                <div class="ContactAddressItem">
                    <div class="Icon">
                        <img src="assets/images/icon/office.png" alt="">
                    </div>
                    <h5>Head Office</h5>
                    <p>Shed NO-59/1, Block No-574, Tp-110, Nr.Shradhha Estate Hathijan, Ta. Ahmedabad, Dist. Ahmedabad-382445</p>
                </div>
                <div class="ContactAddressItem">
                    <div class="Icon">
                        <img src="assets/images/icon/phone.png" alt="">
                    </div>
                    <h5>Call us</h5>
                    <ul>
                        <li><a href="tel:+919974698010">+91 99746 98010</a></li>
                        <li><a href="tel:+918238093522">+91 82380 93522</a></li>
                    </ul>
                </div>
                <div class="ContactAddressItem">
                    <div class="Icon">
                        <img src="assets/images/icon/email.png" alt="">
                    </div>
                    <h5>Email Now</h5>
                    <ul>
                        <li><a href="mailto:info@avalonseparaion.com">info@avalonseparation.com</a></li>
                        <li><a href="mailto:avalonseparation@gmail.com">avalonseparation@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ContactUsFormSec CustomPending ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="MapSec">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14694.17139692414!2d72.65138579888918!3d22.9670573531092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e885434cf8e61%3A0x5e6e1139d9636a4e!2sAvalon%20Separation!5e0!3m2!1sen!2sin!4v1768991389159!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="secTitle">
                        <div class="secBigTitle mb-0">
                            <h5>Feel Free To Contact Us</h5>
                        </div>
                        <div class="desc">
                            <p>We will keep the information you send on file. Should a need arise we will reach out to you. We value your time and our time greatly.</p>
                        </div>
                    </div>
                    <form class="form-horizontal form3" action="inquiry-action.php" method="post" novalidate="novalidate">
                        <div class="inputGrid">
                            <div class="form-group has-feedback">
                                <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group has-feedback">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address" class="form-control">
                            </div>
                        </div>
                        <div class="inputGrid">
                            <div class="form-group has-feedback class-feedback">
                                <input name="city" id="city" type="text" placeholder="City" class="form-control">
                            </div>
                            <div class="form-group has-feedback">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15" minlength="10" class="form-control number21">
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <textarea class="form-control" name="message" id="message" placeholder="Requirement"></textarea>
                        </div>
                        <div class="inputCaptchaGrid">
                            <div class="form-group has-feedback">
                                <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control" type="text">
                            </div>
                            <img src="captcha.php" class="capside">
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12 col-sm-3 col-xs-12">
                                <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>