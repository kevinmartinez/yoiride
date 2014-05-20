<?php

    $response; 

    function my_contact_form_generate_response($type, $message){

        global $response;

        if($type == "success") 
		$response = "<button type=\"button\" class=\"btn btn-block disabled btn-success\">$message</button>";
        else $response = "<button type=\"button\" class=\"btn btn-block disabled btn-danger\">$message</button>";
    }

if(isset($_POST['submitted'])) {

	//response messages
	$not_human       = "";
	$missing_content = "Innehåll saknas.";
	$email_invalid   = "Felaktig e-mail.";
	$message_unsent  = "Meddelandet kunde inte skickas, prova igen!";
	$message_sent    = "Tack för ditt mail, vi återkommer till dig!";
 
	//user posted variables
	$name = isset($_POST['yoiride_name']) ? $_POST['yoiride_name'] : NULL;
	$email = isset($_POST['yoiride_email']) ? $_POST['yoiride_email'] : NULL; ;
	$message = isset($_POST['yoiride_message']) ? $_POST['yoiride_message'] : NULL;
	$human = isset($_POST['human']) ? $_POST['human'] : NULL;
	$phone = isset($_POST['yoiride_phone']) ? $_POST['yoiride_phone'] : NULL;
	
	//php mailer variables
	$to = "kontakt@yoiride.se";
	$subject = "Förfrågan yoiride.se";
	$headers = "From: formular@yoiride.se\r\n" .
  	"Reply-To: formular@yoiride.se\r\n";

	if(!$human == 0){
  		if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  		else {
			//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  				my_contact_form_generate_response("error", $email_invalid);
			} else {

				//validate presence of name and message
				if(empty($name) || empty($message)){
  					my_contact_form_generate_response("error", $missing_content);
				}
				else {

					try {
						$message .= "\n\nSkickat av: ".$email."\r\nNamn: ".$name."\r\nTfn:".$phone."\r\n"; 
    						$sent = @wp_mail( $to, $subject, strip_tags($message), $headers );
					} catch (Exception $e) {
    						error_log('oops: ' . $e->getMessage()); // this line is for testing only!
					}

					#$sent = wp_mail($to, $subject, strip_tags($message), $headers);
	
					if($sent) 
						my_contact_form_generate_response("success", $message_sent); //message sent!
					else 
						my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
				}
			}
  		}
	}
	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
}

get_header();
?>
		<!-- INTRO SECTION kommer vara återkommande i flera undersidor -->
		<section class="yellow-section margin-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4 pull-left">
						<div>
							<h2>KONTAKT</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 pull-left">
						<div>
							<h3>
							<?php while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</section><!-- INTRO SECTION /.SLUT-->

		<section class="white-section">
			<div class="container">
				<div class="row">
					<article class="col-sm-7 contact-content">
						<form action="<?php the_permalink(); ?>" method="post">
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="yoiride_name" type="text" placeholder="Namn">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="yoiride_email" type="text" placeholder="E-post">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="yoiride_phone" type="text" placeholder="Telefon">
								</div>
							</div>
							<br>
							<br>
							<div class="row">
								<div class="col-sm-10">
									<textarea placeholder="Skriv ditt meddelande här..." name="yoiride_message" class="form-control" rows="12"></textarea>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-2 col-sm-4"><label>Vad blir 1+1</label></div>
								<div class="col-md-4 col-sm-6">
									<input class="form-control sum" name="human" value="0" type="text" placeholder="Summa">
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-6 text-left pull-left">
									<input class="btn btn-action" type="submit" value="Skicka">
								</div>
							</div>
							<br>

                                                        <? if (isset($response)) if ($response != ''){ ?>
                                                        <div class="row">
                                                                <div class="col-md-8">
                                                                        <? echo $response; ?>
                                                                </div>
                                                        </div>
                                                        <? } ?>
							
							<input type="hidden" name="submitted" value="1">
						</form>
					</article>
					<aside class="col-sm-5 sidebar sidebar-right">
						<div>
							<h4>Adress</h4>
							<address>
								YOIRIDE EVENT AB (556850-8351)<br>
								ÖLANDSGATAN 42<br>
								116 63 Stockholm
							</address>
							<hr>
							<h4>Nils Horn</h4>
							<address>
								<h5>E-POST:</h5> <a href="mailto:nils@yoiride.se">nils@yoiride.se</a>
								<h5>MOBIL:</h5><a href="tel:+46709346901">0709-346 901</a>
							</address>
							<hr>
							<h4>Samuel Lindergård</h4>
							<address>
								<h5>E-POST:</h5><a href="mailto:samuel@yoiride.se">samuel@yoiride.se</a>
								<h5>MOBIL:</h5><a href="tel:+46736636314">0736-636 314</a>
							</address>
						</div>
					</aside>
				</div>
			</div>
		</section>

<?
get_footer();
?>
