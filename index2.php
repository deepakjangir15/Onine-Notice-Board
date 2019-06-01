<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>newsletters</title> 
<link rel="stylesheet" href="css/newsletter.css">

</head>
<body>

    <div id="newsletterform">
    <div class="wrap">
        <h3>News Letter Subscription.</h3>
        <p>Subscribe to our newsletter and never miss a single update from us.  </p>
        <form action="subscribe.php" method="post" id="newsletter" name="newsletter">
        <input type="email" name="signup-email" id="signup-email" value="" placeholder="Insert email here" />
        <input type="submit" value="Subscribe" name="signup-button" id="signup-button">
        <span class="arrow"></span>
        </form>
        <div id="response"></div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="js/lib.js"></script>


</body>
</html>