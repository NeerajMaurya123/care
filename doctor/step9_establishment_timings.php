<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Healthcare At Your Service - Bonanza Care</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../slick-theme.css?v2022">
<link type="text/css" rel="stylesheet" href="../style.css" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>

<?php
include 'dbConn.php';
global $connect;

$name = $_SESSION['name'];
$mobile = $_SESSION['mobile'];
$email = $_SESSION['email'];
$otp = $_SESSION['otp'];


if(!isset($_SESSION["mobile"])){
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.html\">";
}

$stmt = $connect->prepare('select * from doctors_data where mobile=? and otp=?');
$stmt->bind_param('ss', $mobile,$otp); 
$stmt->execute();
$result = $stmt->get_result();
if ($row = $result->fetch_assoc()) 
{
?>

</head>
<body>

    <div class="header_main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 left_head_menu">
                    <div class="site_logo">
                        <a href="index.html" class="site_url">
                            <img src="../images/logo-dark.png" />
                        </a>
                    </div>
                </div>
                <div class="col-md-6 right_hand_menu">
                    <div class="header_right_menu_wrap">
                        <ul class="header_right_menu">
                            <li>
                                <a href="about-us.html">About us</a>
                            </li>
                            <li>
                                <a href="#">Locate Us</a>
                            </li>
                                <li>
                                <a href="#">Language</a>
                            </li>
                            
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="menu_btn"><img src="../images/mob-menubar.svg"></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mobile_menu">
        <div class="mobile_menu_wrap">
                    <div class="menu_close"><img src="../images/menu-close-icon.svg"></div>
            <ul class="header_right_menu">
                <li>
                    <a href="about-us.html">About us</a>
                </li>
                    <li>
                                <a href="#">Locate Us</a>
                            </li>
                                <li>
                                <a href="#">Language</a>
                            </li>
                
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>

<div class="terms">
    <div class="overview-bg">
        <div class="content card-view-lg">
            <div class="xlTxt m-t-10 m-b-20 light-bold">Welcome,<br>Dr. <?php echo $name; ?></div>
            <div  class="text-light light-white-color lgTxt">To Bonanza Care</div>
        </div>
    </div>
    <div class="container">
        <section class="clearfix">
            <div class="row">
                <div class="col-md-9">
					
					
					
                </div>
                <div class="col-md-3">
                    <?php
                    $active_page="step9";
                    include 'links.php';
                    ?>
                </div>


            </div>
        </section>
       
    </div>
</div>


<footer name="footer" ui-view="footer">
    <div id="footerView" class="background">
        <dom-manipulation></dom-manipulation>
        <div ng-if="hideHeaderFooterForMobile &amp;&amp; displayFooter" class="footer container-full">
            <div class="container wrap">
                <div class="row display-flex foot">
                    <div class="pd col-xs-3 col-sm-3">
                        <div class="m-b-10 light-bold smdTxt">Bonanza Care Services</div>
                        <a href="#" title="About MediBuddy Gold"><span >Ashvins e-Pass</span></a>
						
						<a href="/online-doctor-consultation" title="Book Consultation Appointments with trusted Doctors"><span >Doctor Consultation</span></a>
						<a href="/online-doctor-consultation" title="Book Consultation Appointments with trusted Doctors"><span >Bonanza Hope (For Critical Cases)</span></a>
						<a href="/labs/" title="Book online Lab Tests with Home Sample Collection"><span >Book a Lab test</span></a>
						<a href="/labs/" title="Book online Lab Tests with Home Sample Collection"><span >Instant Doctor Opinion</span></a>
							<a href="/labs/" title="Book online Lab Tests with Home Sample Collection"><span >Corporate Wellness Plan</span></a>
								<a href="/labs/" title="Book online Lab Tests with Home Sample Collection"><span >View Your Health Records</span></a>
						
                    </div>
                    <div class="si col-xs-3 col-sm-3">
                        <div class="m-b-10 light-bold smdTxt">Hospitalization</div>
                        <a href="/about-hospitalization" title="Plan your Hospitalization with MediBuddy"><span >Plan hospitalization</span></a><a href="/networkHospitals" title="Network Hospitals covered by each Insurer"><span > Locate hospital</span></a>
                     
                        <a href="https://m.medibuddy.in/intimatereimbursement.aspx" title="Intimate Claim" target="_blank" rel="noopener nofollow"><span >Plan Surgery </span></a><a href="/claim" ng-if="user | isEmpty" title="Track Claim Status"><span > Intimate Claim</span></a><a href="/claim" ng-if="user | isEmpty" title="Track Claim Status"><span > Track claim</span></a><a href="/faq/" title="Frequently Asked Questions"><span > FAQs</span></a>
                    </div>
                    <div class="at col-xs-3 col-sm-3">
                        <div class="m-b-10 light-bold smdTxt">ABOUT BONANZA CARE</div>
                        <a href="/aboutus/" title="hey"><span >Overview</span></a><a href="/testimonials" title="Testimonials"><span > Testimonials</span></a><!-- ngIf: notHideContactus --><a ng-if="notHideContactus" href="/contactus/" title="Contact us - Send your Queries"><span > Contact</span></a><!-- end ngIf: notHideContactus --><a href="#" target="_blank" title="Blog Articles" rel="noopener"><span > Blog</span></a><a href="#" target="_blank" title="Join us" rel="noopener"><span > Careers</span></a><a href="terms.html" target="_blank" title="security"><span > Terms of use</span></a>
                    </div>
                    <div class="si col-xs-3 col-sm-3">
                        <div class="m-b-10 light-bold smdTxt">Bonanza Care Registration</div>
                        <a href="/aboutus/" title="hey"><span >For Doctors</span></a><a href="/testimonials" title="Testimonials"><span > For Patients</span></a><!-- ngIf: notHideContactus --><a ng-if="notHideContactus" href="/contactus/" title="Contact us - Send your Queries"><span > For clinics</span></a><a ng-if="notHideContactus" href="/contactus/" title="Contact us - Send your Queries"><span > For Hospitals</span></a><!-- end ngIf: notHideContactus -->
                    </div>
                    <div ng-class="{'p-l-0 p-r-0 m-t-0':isMobileView}" class="links col-xs-12 col-sm-2 d-flex">
                        
                       <!-- <div class="social d-flex col-3">
                            <span class="label">Download app</span>
                            <a ng-click="appRedirect('FirstFold')" target="_blank" rel="noopener" uib-tooltip="Android" aria-label="Android">
                                <svg version="1.1" id="footer_Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <polygon style="fill:#5CDADD" points="29.53,0 29.53,251.509 29.53,512 299.004,251.509 "></polygon>
                                    <polygon style="fill:#BDECC4" points="369.067,180.547 262.175,119.467 29.53,0 299.004,251.509 "></polygon>
                                    <polygon style="fill:#DC68A1" points="29.53,512 29.53,512 262.175,383.551 369.067,322.47 299.004,251.509 "></polygon>
                                    <path style="fill:#FFCA96" d="M369.067,180.547l-70.063,70.961l70.063,70.961l108.688-62.877c6.288-3.593,6.288-11.677,0-15.27 L369.067,180.547z"></path>
                                </svg>
                            </a>
                            <a ng-click="appRedirect('FirstFold',true)" rel="noopener" uib-tooltip="IOS" aria-label="IOS">
                                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.538 291.538" style="enable-background:new 0 0 291.538 291.538" xml:space="preserve">
                                    <g>
                                        <path style="fill:#fff" d="M188.373,44.308c10.97-11.744,18.39-28.049,16.359-44.308c-15.804,0.564-34.958,9.277-46.302,21.02 c-10.169,10.396-19.072,27.011-16.696,42.951C159.369,65.164,177.385,56.033,188.373,44.308z M222.03,156.593 c-0.337-36.451,28.859-53.958,30.152-54.804c-16.414-24.753-41.977-28.14-51.081-28.522c-21.767-2.285-42.442,13.182-53.493,13.182 c-11.006,0-28.03-12.882-46.083-12.536c-23.733,0.391-45.601,14.211-57.79,36.114C19.081,154.09,37.416,219.363,61.44,255.104 c11.744,17.497,25.727,37.125,44.089,36.415c17.725-0.71,24.407-11.789,45.792-11.789c21.394,0,27.384,11.789,46.101,11.434 c19.045-0.355,31.098-17.834,42.742-35.386c13.473-20.292,19.027-39.938,19.345-40.93 C259.1,214.611,222.421,200.182,222.03,156.593z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div> -->
                      <!--  <div class="  d-flex col-3 "></div> -->
                        <div class="social col-12 text-center ">
                            <span class="label">FOLLOW US</span>
                            <a href=" https://www.facebook.com/BonanzaCare" target="_blank" rel="noopener" uib-tooltip="Facebook" aria-label="Facebook" class="facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="1759 -421 16.1 32">
                                    <defs>
                                        <style>.facebook{fill:#385c8e;}</style>
                                    </defs>
                                    <path class="facebook" d="M.5,17H4V31.4a.562.562,0,0,0,.5.6h5.9a.472.472,0,0,0,.5-.5V17.1h4a.472.472,0,0,0,.5-.5l.6-5.3a.6.6,0,0,0-.1-.4.52.52,0,0,0-.4-.2H11V7.4c0-1,.5-1.5,1.6-1.5h3a.472.472,0,0,0,.5-.5V.5a.472.472,0,0,0-.5-.5H11.2A7.681,7.681,0,0,0,6,2,5.351,5.351,0,0,0,4.2,6.9v3.9H.5a.472.472,0,0,0-.5.5v5.2A.472.472,0,0,0,.5,17Z" transform="translate(1759 -421)"></path>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/bonanza-care/" target="_blank" rel="noopener" uib-tooltip="LinkedIn" aria-label="LinkedIn" class="linkedin">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="1826 -424 31.906 31.9">
                                    <defs>
                                        <style>.linkedin{fill:#5082f6;}</style>
                                    </defs>
                                    <g transform="translate(1826 -424)">
                                        <path class="a" d="M7.4,10.3H1a.472.472,0,0,0-.5.5V31.4a.472.472,0,0,0,.5.5H7.4a.472.472,0,0,0,.5-.5V10.8C8,10.5,7.7,10.3,7.4,10.3Z"></path>
                                        <path class="linkedin" d="M4.2,0A4.225,4.225,0,0,0,0,4.2,4.225,4.225,0,0,0,4.2,8.4,4.225,4.225,0,0,0,8.4,4.2,4.1,4.1,0,0,0,4.2,0Z"></path>
                                        <path class="linkedin" d="M23.8,9.7a7.192,7.192,0,0,0-5.6,2.4V10.8a.472.472,0,0,0-.5-.5H11.5a.472.472,0,0,0-.5.5V31.4a.472.472,0,0,0,.5.5h6.4a.472.472,0,0,0,.5-.5V21.2c0-3.4.9-4.8,3.3-4.8,2.6,0,2.8,2.1,2.8,5v10a.472.472,0,0,0,.5.5h6.4a.472.472,0,0,0,.5-.5V20.1C32,15,31,9.7,23.8,9.7Z"></path>
                                    </g>
                                </svg>
                            </a>
                            <a href=" https://twitter.com/bonanzacare" target="_blank" rel="noopener" uib-tooltip="Twitter" aria-label="Twitter" class="twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="1909 -418 32.014 26.2">
                                    <defs>
                                        <style>.twitter{fill:#73a1fb;}</style>
                                    </defs>
                                    <path class="twitter" d="M31.3,3l-1.5.6a7.217,7.217,0,0,0,1.4-2.4c.1-.2,0-.4-.2-.6a.638.638,0,0,0-.6,0A17.832,17.832,0,0,1,26.8,2,7.177,7.177,0,0,0,22,0a6.914,6.914,0,0,0-6.9,6.9,2.769,2.769,0,0,0,.1.9A18.107,18.107,0,0,1,3.1,1.4c-.1-.2-.3-.2-.5-.2s-.3.1-.4.3A6.756,6.756,0,0,0,1.3,5,7.266,7.266,0,0,0,2.9,9.5,4.7,4.7,0,0,0,2,8.9a.446.446,0,0,0-.5,0,.55.55,0,0,0-.3.5v.1a6.724,6.724,0,0,0,3.4,5.9.9.9,0,0,1-.5-.1c-.2,0-.4,0-.5.2a.44.44,0,0,0-.1.5,7.013,7.013,0,0,0,5,4.6A12.33,12.33,0,0,1,2,22.5a7.569,7.569,0,0,1-1.5-.1c-.2,0-.5.1-.5.3a.481.481,0,0,0,.2.6,18.767,18.767,0,0,0,10,2.9A17.631,17.631,0,0,0,24,20.1,19.3,19.3,0,0,0,28.8,7.6V7a13.964,13.964,0,0,0,3.1-3.3.637.637,0,0,0,0-.6A.661.661,0,0,0,31.3,3Z" transform="translate(1909.039 -418)"></path>
                                </svg>
                            </a>
                            <a href="#" target="_blank" rel="noopener" uib-tooltip="Blog" aria-label="Blog">
                                <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <defs>
                                        <style>.blog1{fill:#010002;}</style>
                                    </defs>
                                    <title>blog</title>
                                    <path class="blog1" d="M227.21,227.2v6.13A25.88,25.88,0,0,1,253,259.2h6.16A32,32,0,0,0,227.21,227.2Z" transform="translate(-227.2 -227.2)"></path>
                                    <path class="blog1" d="M227.2,238.07v6.13a15,15,0,0,1,15,15h6.16A21.15,21.15,0,0,0,227.2,238.07Z" transform="translate(-227.2 -227.2)"></path>
                                    <path class="blog1" d="M231.46,250.66a4.25,4.25,0,1,0,4.26,4.25A4.26,4.26,0,0,0,231.46,250.66Z" transform="translate(-227.2 -227.2)"></path>
                                </svg>
                            </a>
                          <a href="https://www.youtube.com/channel/UCSrr1PAxg-yPbFlC7Ly8KNQ" target="_blank" rel="noopener" uib-tooltip="Blog" aria-label="youtube" style="width: 35px;">  <img  src="../images/youtube.png" ></a>
                           <a href="https://www.instagram.com/bonanzacare/" target="_blank" rel="noopener" uib-tooltip="Blog" aria-label="insta" style="width: 30px;">  <img  src="../images/insta.png" ></a>
                        </div>
                        <!-- ngIf: !isMobileView -->
                        
                        <!-- end ngIf: !isMobileView -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end ngIf: hideHeaderFooterForMobile && displayFooter -->
    </div>
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js" type="text/javascript" charset="utf-8"></script>

<?php
}
else{
    header("Location: login.html");
}
$stmt->close();
mysqli_close($connect);
?>

</body>
</html>