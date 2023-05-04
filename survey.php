<?php
// Output messages
$response = '';
// Check if the form was submitted
if (isset($_POST['rating'], $_POST['why_submit'], $_POST['want_response'], $_POST['email'], $_POST['comments'], $_POST['interest'])) {
	// Process form data 
	// Assign POST variables
	$email = $_POST['email'];
	$rating = $_POST['rating'];
	$interest = $_POST['interest'];
	$why_submit = $_POST['why_submit'];
	$want_response = implode(', ', $_POST['want_response']);
	$comments = $_POST['comments'];
	// Where to send the mail? It should be the professor's address
	$to      = 'uxm28@case.edu';
	// Mail from
	$from    = 'noreply@profratings.com';
	// Mail subject
	$subject = 'A student has submitted a survey';
	// Mail headers
	$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'Return-Path: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
	// Capture the email template file as a string
	ob_start();
	include 'email-template.php';
	$email_template = ob_get_clean();
	// Try to send the mail
	if (mail($to, $subject, $email_template, $headers)) {
		// Success
		$response = '<h3>Thank You!</h3><p>Hope you are enjoying the class!</p>';		
	} else {
		// Fail
		$response = '<h3>Thank You!</h3><p>Hope you are enjoying the class!</a>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survey Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form class="survey-form" method="post" action="">		
        <!-- Survey Form Header -->
        <h1><i class="far fa-list-alt"></i>Survey Form</h1>
        <div class="steps">
            <div class="step current"></div>
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>

        <!-- Survey Form Step 1 -->
        <div class="step-content current" data-step="1">
            <div class="fields">
                <p>How did you enjoy today's lecture?</p>
                <div class="rating">
                    <input type="radio" name="rating" id="radio1" value="Very Unsatisfied">
                    <label for="radio1">1</label>
                    <input type="radio" name="rating" id="radio2" value="Unsatisfied">
                    <label for="radio2">2</label>
                    <input type="radio" name="rating" id="radio3" value="Neutral">
                    <label for="radio3">3</label>
                    <input type="radio" name="rating" id="radio4" value="Satisfied">
                    <label for="radio4">4</label>
                    <input type="radio" name="rating" id="radio5" value="Very Satisfied">
                    <label for="radio5">5</label>
                </div>
                <div class="rating-footer">
                    <span>Very Unsatisfied</span>
                    <span>Very Satisfied</span>
                </div>

                <p>Would you be interested in learning more about today's lecture topic?</p>
                <div class="rating">
                    <input type="radio" name="rating" id="radio6" value="Very Disinterested">
                    <label for="radio6">1</label>
                    <input type="radio" name="rating" id="radio7" value="Disinterested">
                    <label for="radio7">2</label>
                    <input type="radio" name="rating" id="radio8" value="Neutral">
                    <label for="radio8">3</label>
                    <input type="radio" name="rating" id="radio9" value="Interested">
                    <label for="radio9">4</label>
                    <input type="radio" name="rating" id="radio10" value="Very Interested">
                    <label for="radio10">5</label>
                </div>
                <div class="rating-footer">
                    <span>Very Uninterested</span>
                    <span>Very Interested</span>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn" data-set-step="2">Next</a>
            </div>
        </div>

        <!-- Survey Form Step 2 -->
        <div class="step-content" data-step="2">
            <div class="fields">
            <p>What made you want to fill out this form?</p>
                <div class="group">
                    <label for="radio11">
                        <input type="radio" name="why_submit" id="radio11" value="Wanted to thank you">
                        Wanted to thank you!
                    </label>
                    <label for="radio12">
                        <input type="radio" name="why_submit" id="radio12" value="Had a question">
                        Had a question.
                    </label>
                    <label for="radio13">
                        <input type="radio" name="why_submit" id="radio13" value="Got some feedback">
                        Got some feedback!
                    </label>		
                    <label for="radio14">
                        <input type="radio" name="why_submit" id="radio14" value="Other">
                        Other
                    </label>		
                </div>
                
                <p>Do you want a response from the instructor?</p>
                <div class="group">
                    <label for="radio15">
                        <input type="radio" name="want_response" id="radio15" value="Yes please">
                        Yes please!
                    </label>
                    <label for="radio16">
                        <input type="radio" name="want_response" id="radio16" value="No thanks">
                        No thanks.
                    </label>
                    <label for="radio17">
                        <input type="radio" name="want_response" id="radio17" value="Professors Choice">
                        Professor's Choice
                    </label>			
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="1">Prev</a>
                <a href="#" class="btn" data-set-step="3">Next</a>
            </div>
        </div>

        <!-- Survey Form Step 3 -->
        <div class="step-content" data-step="3">
            <div class="fields">
                <label for="email">Your Email</label>
                <div class="field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="email" name="email" placeholder="Your Email" required>
                </div>
                <label for="comments">Additional Comments</label>
                <div class="field">
                    <textarea id="comments" name="comments" placeholder="Enter your comments ..."></textarea>
                </div>
            </div>
            <div class="buttons">
                <a href="#" class="btn alt" data-set-step="2">Prev</a>
                <input type="submit" class="btn" name="submit" value="Submit">
            </div>
        </div>

        <!-- Survey Form Step 4 -->
        <div class="step-content" data-step="4">
            <div class="result"><?=$response?></div>
        </div>
		</form>

        <!-- JS Next/Prev Button Functionality -->
        <script>
        const setStep = step => {
            document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
            document.querySelector("[data-step='" + step + "']").style.display = "block";
            document.querySelectorAll(".steps .step").forEach((element, index) => {
                index < step-1 ? element.classList.add("complete") : element.classList.remove("complete");
                index == step-1 ? element.classList.add("current") : element.classList.remove("current");
            });
        };
        document.querySelectorAll("[data-set-step]").forEach(element => {
            element.onclick = event => {
                event.preventDefault();
                setStep(parseInt(element.dataset.setStep));
            };
        });
        <?php if (!empty($_POST)): ?>
        setStep(4);
        <?php endif; ?>
        </script>
	</body>
</html>