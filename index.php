<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Privacy Policy Generator</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js'></script>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #f9f9f9;
            padding: 25px;
            font-family: Quicksand;
            font-size: 16px;
        }

        @media screen and (min-width: 960px) {
            body {
                padding: 100px;
            }
        }

        h1 {
            margin: 0 0 25px 0;
            color: #00bcd4;
        }

        h2 {
            margin: 0 0 10px 0;
        }

        h3 {
            margin: 25px 0 10px 0;
        }

        .boxy {
            padding: 25px;
            background: #fff;
            border-radius: 2px;
            box-shadow: 0 0 50px 0 rgba(28, 28, 28, 0.1);
            width: 100%;
            margin: 0 auto;
        }

        @media screen and (min-width: 960px) {
            .boxy {
                padding: 50px;
                width: 500px;
            }
        }

        ul {
            margin: 0;
        }

        li {
            list-style: none;
            margin: 0 0 20px 0;
        }

        ul li {
            font-size: 12px;
        }

        ul li ul {
            margin: 10px 0 10px 10px;
        }

        ul li ul li {
            margin: 4px 0;
        }

        
        input[type=checkbox] {
            width: auto;
            position: relative;
            top: 2px;
        }

        ::-webkit-input-placeholder { /* Edge */
            color: #ccc;
        }

        label {
            display: block;
            text-transform: uppercase;
            font-size: 11px;
            font-weight: bold;
            margin: 0 0 3px 0;
        }

        input {
            border: solid 1px #f1f1f1;
            background: #f9f9f9;
            padding: 10px;
            width: 100%;
            border-radius: 2px;
        }

        input[type=submit] {
            background: #00bcd4;
            font-weight: bold;
            color: #fff;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            cursor: pointer;
            width: 100px;
        }

        .policy p,
        .policy li {
            font-size: 16px;            
        }

        .policy p {
            margin: 20px 0;
        }

        .policy ul {
            margin: 25px;
        }

        .policy li {
            list-style: disc;     
            margin: 0;     
        }

        .copy {
            display: block;
            margin: 0 0 15px 0;
            cursor: pointer;
        }

        .copy img {
            width: 20px;
            height: 20px;
            position: relative;
            top: 4px;
        }

        textarea {
            display: block;
            width: 100%;
            height: 600px;
            padding: 20px;
            font-family: Courier;
            font-size: 13px;
            border: dashed 1px #ccc;
        }

    </style>
</head>
<body>

<?php if (isset($_POST['generate'])) {

    $company            = $_POST['company'];
    $email              = $_POST['email'];
    $domain             = $_POST['domain'];
    $google_analytics   = $_POST['google_analytics'];
    $forms              = $_POST['forms'];
    $cookies            = $_POST['cookies'];
    $ip                 = $_POST['ip'];
    $social             = $_POST['social'];
    $campaign_monitor   = $_POST['campaign_monitor'];
    $mailchimp          = $_POST['mailchimp'];
    $date               = date('F dS, Y')

?>
    
    <div class="boxy policy">
        <span class="copy"><img src="copy.svg" /> Copy to clipboard</span>
<textarea id="the_code" spellcheck="false">
<h2>Privacy Policy</h2>
<p>This privacy policy outlines how <?php echo $company; ?> uses and protects any information that you provide us when you use this website.</p>
<p>We are committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement. We (<?php echo $company; ?>) may change this policy occasionally by updating this page. You should check this policy from time to time to ensure that you are happy with any changes.</p>
<p>This policy is effective from <?php echo $date; ?>.</p>
<h3>Collection</h3>
<p>We collect and store personal and anonymous information through the following means:</p>
<ul>
<?php if($google_analytics) { echo '<li>Google Analytics statistics on page views, traffic etc.</li>'; } ?>
<?php if($forms) { echo '<li>Fields submitted through enquiry forms.</li>'; } ?>
<?php if($cookies) { echo '<li>Cookies.</li>'; } ?>
<?php if($ip) { echo '<li>Your IP address.</li>'; } ?>
<?php if($social) { echo '<li>Social media tracking.</li>'; } ?>
<?php if($campaign_monitor) { echo '<li>Fields submitted through the newsletter subscription form (data is stored on <a href="https://www.campaignmonitor.com/policies/" target="_blank" rel="noopener">Campaign Monitor</a> servers).</li>'; } ?>
<?php if($mailchimp) { echo '<li>Fields entered into the newsletter subscription form (data is stored on <a href="https://mailchimp.com/legal/privacy/" target="_blank" rel="noopener">MailChimp</a> servers).</li>'; } ?>
</ul>
<h3>Use</h3>
<p>We may use your personal information to:</p>
<ul>
<li>Provide our services.</li>
<li>Customise the user experience, measure interest in our services, improve our services and inform users about services and updates.</li>
<li>Communicate and customise marketing and promotional offers to you according to your preferences.</li>
<li>Encourage safe trading and enforce our policies.</li>
</ul>
<h3>Disclosure</h3>
<p>We don’t sell or rent your personal information to third parties. Ever. However, we may disclose personal information to respond to legal requirements, enforce our policies or protect anyone’s rights, property, or safety (for example, if you submit false contact details or impersonate another person, we may pass your personal information to any aggrieved third party, their agent or to any law enforcement agency).</p>
<h3>Security</h3>
<p>We use lots of tools (encryption, passwords, physical security) to protect your personal information against unauthorised access and disclosure, but as you probably know, nothing’s perfect, so we make no guarantees.</p>
<h3>Cookies</h3>
<p>We or our service providers may place "cookies" (a "cookie" is a small files placed on your device) and "web beacons" (a "web beacon" is an electronic image, called a single-pixel or clear GIF placed in the web page code) on your device when you visit portions of <?php echo $domain; ?>. Most cookies are "session cookies," meaning that they are automatically deleted from your device at the end of a session, for example, when you close your browser. We may use permanent or session cookies to help analyse our web page flow, customise our services, content, measure promotional effectiveness, and promote trust and safety. You can block our cookies by changing the settings on your browser but doing so may prevent us from delivering certain services to you.</p>
<p>You may encounter cookies from third parties on certain pages of <?php echo $domain; ?> that we do not control.</p>
<h3>Links to other websites</h3>
<p>Our website may contain links to external websites. However, if you use these links to leave our site, it should be noted that we do not have any control over the destination website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and they are not governed by this privacy policy. You should look at the privacy statement applicable to the website in question.</p>
<p>Should you have any questions about our privacy policy, please email <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
</textarea>
    </div>

    <script>
        $('.copy').click(function() {
            $('#the_code').select();
            $(this).html('<img src="check.svg" /> Copied!');
            $(this).addClass('copied');
            document.execCommand('copy');
        });
        
        var textBox = document.getElementById('the_code');
        textBox.onfocus = function() {
            textBox.select();

            // Work around Chrome's little problem
            textBox.onmouseup = function() {
                // Prevent further mouseup intervention
                textBox.onmouseup = null;
                return false;
            };
        };
    </script>

<?php } else { 
?>

    <div class="boxy">
        <h1>Privacy Policy Generator</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label>Company name</label>
                    <input type="text" name="company" placeholder="Hyper Global Meganet" required />
                </li>
                <li>
                    <label>Website domain without the protocol</label>
                    <input type="text" name="domain" placeholder="hyperglobalmeganet.com.au" required />
                </li>
                <li>
                    <label>Email address</label>
                    <input type="text" name="email" placeholder="privacy@hyperglobalmeganet.com.au" required />
                </li>
                <li>
                    <label>Data that is collected</label>
                    <ul>
                        <li><input type="checkbox" name="google_analytics" /> Google analytics </li>
                        <li><input type="checkbox" name="forms" /> Enquiry form(s) </li>
                        <li><input type="checkbox" name="cookies" /> Cookies </li>
                        <li><input type="checkbox" name="ip" /> IP address </li>
                        <li><input type="checkbox" name="social" /> Social media </li>
                        <li><input type="checkbox" name="campaign_monitor" /> Newsletter subscription Form (Campaign Monitor)</li>
                        <li><input type="checkbox" name="mailchimp" /> Newsletter subscription Form (MailChimp)</li>
                    </ul>
                </li>
            </ul>
            <input type="submit" name="generate" value="Generate" />
        </form>
    </div>
<?php } ?>
</body>
</html>