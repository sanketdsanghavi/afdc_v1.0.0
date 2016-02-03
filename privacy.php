<?php
// Start the session
session_start();
//$_SESSION["a"]= "Hiii";
//unset($_SESSION["summary"]);
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include('config/css.php'); // Include Bootstrap CSS,
		include('config/js.php');  // JS and Fontawesome
		?>
		<!-- Link custom override CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="config/template.css">
		<title>
			AllFesto!
		</title>
	</head>
	<body>
		<div class="bgimg">
		<div class="container">
		<?php
			include('header_footer/header.php');
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
		?>
			<div class="panel panel-default">		
			    <div class="panel-body" style="color:white;">	  
		
				<h3><u>Privacy Policy</u></h3>

    <p>This privacy policy describes how we handle the information.
      We collect, use, and share personal information to help the Allfesto website
      work and to keep it safe in below manner.</p>

    <p>Collection, Information posted on Allfesto is publicly available. If you choose to provide us with

      personal information, you are consenting to the transfer and storage of that information on our

      servers. We collect and store the following personal information:</p>

    <ul>
      <li>Email address, physical contact information and sometimes financial information;</li>
      <li>Computer sign-on data, statistics on page views, traffic to and from Allfesto and other data (all
        through cookies – you can take steps to disable the cookies on your browser although this is likely to
        affect your ability to use the site);
      </li>
      <li>Other information, including users IP address and standard web log information.</li>
    </ul>

    <ul>
      Use: We use users' personal information to:

      <li>provide our services;</li>
      <li>resolve disputes, collect fees, and troubleshoot problems;</li>
      <li>encourage safe trading and enforce our policies;</li>
      <li>customize users' experience, measure interest in our services,
        and inform users about services and updates;
      </li>
      <li>communicate marketing and promotional offers to you;</li>
      <li>Do other things for users as described when we collect the information.</li>
    </ul>

    <strong>Disclosure:</strong>
    <ul>
      <li>All information contained by Allfesto is treated as strictly confidential and
        Allfesto does not and will not disclose or share such confidential information
        to / with any external organization.
      </li>

      <li>The users’ privacy is very important to us. We do not and shall not at any point in time,
        either sell or rent users’ personal information to third parties without users’ explicit consent.
      </li>

      <li>We may be required from time to time to disclose users’ personal information to
        Governmental or law enforcing agencies or our regulators, but we will only do so under
        proper authority.
      </li>

      <li>Allfesto also reserves the right to make use of the personal information in any investigation
        or judicial process relating to fraud on account of such transactions during the period Allfesto
        retains such information.
      </li>

      <li>We may also disclose personal information to enforce our policies, respond to claims that a
        posting or other content violates other’s rights, or protects anyone’s rights, property or safety.
      </li>

      <li>We may also share personal information with:

        <ul>
          <li>Corporate affiliates who help detect or prevent potentially illegal acts and
            provide joint services (Our corporate affiliates will market only to users who ask them to).
          </li>
          <li>Service providers who help with our business operations.</li>
        </ul>
      </li>

      <li>Third party vendors, including Google, use cookies to serve ads based on a user's
        prior visits to the website.
      </li>

      <li>Google's use of the DoubleClick cookie enables it and its partners to serve ads to
        your users based on their visit to your sites and/or other sites on the Internet.
      </li>

      <li>Users may opt out of the use of the DoubleClick cookie for interest-based advertising
        by visiting Ads Settings.
      </li>
    </ul>

    <p><strong>Using Information from Allfesto:</strong>

      You may use personal information gathered from Allfesto only to follow up with another user
      about a specific posting, not to send spam/ phising or collect personal information from someone
      who hasn't agreed to that.

    <p>Access, Modification, and Deletion:
      You can see, modify or erase your personal information by reviewing your posting or account status
      page. Contact customer support at info@allfesto.com to review any personal information we store
      that is not available on Allfesto. There may be a charge associated with such requests but these
      will not exceed the amounts permitted by law. We delete personal information when we no longer
      need it for the purposes we described earlier. We retain personal information as permitted by law to
      resolve disputes, enforce our policies; and prevent bad guys from coming back.</p>

    <p>Data Security:
      We use a number of mechanisms (encryption, passwords, physical security) to protect the
      security and integrity of your personal information against unauthorized access and disclosure.
      Unfortunately, no data transmission over the internet can be guaranteed to be completely secure.
      So while we strive to protect such information, we cannot ensure or warrant the security of any
      information you transmit to us and you do so at your own risk. Once any personal information
      comes into our possession, we will take reasonable steps to protect that information from misuse
      and loss and from unauthorised access, modification or disclosure.</p>

    <p>Confidentiality of Information:
      Users who use any of the features on Allfesto agree and accept that they have been fully
      informed by Allfesto that the use of features may lead to publication, to all users of Allfesto,
      of any personal information posted by them while using any specific feature on Allfesto. Users
      further agree that the authenticity of, and consequences from the posting by users of any personal
      information of themselves or any other person, are the sole responsibility of the user. Users further
      agree and accept that the terms of the Privacy Policy will be applicable to the use of all features,
      existing and new. However, the Users agree and accept that confidentiality of information posted on
      such features has been waived by the Users of such features themselves.</p>

    <p><strong>General:</strong>
      We may update, upgrade, modify (partially &/or fully) this policy at any time. Send questions about
      this policy to info@allfesto.com</p>
		
				</div>
			</div>
		</div>
		<?php
			for($br=0; $br<10; $br++){
					echo '<br/>';
				}
			include('header_footer/footer.php');
		?>	 
		</div>
	</body>
</html>