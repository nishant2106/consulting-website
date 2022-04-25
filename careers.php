<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Acco - Global Consultancy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Global Consultancy" name="keywords">
    <meta content="Global Consultancy" name="description">

    <?php require("header.php"); ?>
    <style>
        .careeractive{
            color: #0796fe!important;
            transition: none;
        }
    </style>
     <!-- Contact Start -->
     <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <!-- <p>Get In Touch</p> -->
                    <h2>Get In Touch For Any Query</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="mobile" placeholder="Your Mobile No." required="required" data-validation-required-message="Please enter your mobile number" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="file" class="form-control" id="resume"  required="required" data-validation-required-message="Please enter your Resume" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="qualification" placeholder="Your Qualification" required="required" data-validation-required-message="Please enter your qualification" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="experience" placeholder="Description of Experience/Job Position" required="required" data-validation-required-message="Enter Your Experience/Job"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    <?php require("footer.php"); ?>
</body>
</html>