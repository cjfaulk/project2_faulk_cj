<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'catherinejfaulk.com' // Put your mail domain here
	,
	'CJ Faulk' // Put your site name / form name here
	,
	'cjfaulk97@gmail.com' // Where will the form notification be sent?
	,
	'noreply@catherinejfaulk.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
