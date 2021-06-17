<?php 

  if(isset($_POST)){
    
    $to = get_option('admin_email');
    $mailer = $_POST['email'];
    $subject = $_POST['email']." : " .$mailer;
    $body = $_POST['email-message'];

    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 2;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "turturro.vincenzot@gmail.com";
    $mail ->Password = "Cheballe2002!";
    $mail ->SetFrom($mailer);
    $mail ->Subject = $subject;
    $mail ->Body = $body;
    $mail ->AddAddress($to);
    if($mail ->send()){
        $string = '<script type="text/javascript">';
        $string .= 'window.location = "' . home_url() . '"';
        $string .= '</script>';
    
        echo $string;    }}else{
        get_header();
        ?>


            <div class="wrapper" style="padding: 150px;margin:auto;">
                            <div class="row">
                                <div style="margin:auto;text-align:center;">
                                    <h1 style="margin:auto;"> Nessun risultato trovato :( </h1>
                                    <a class="button" style="margin:auto;margin-top:30px" href="<?php echo home_url();?>"> Torna indietro </a>
                                </div>
                            </div>
                        </div>
                <?php 
                    get_search_form();
                ?>

        <?php
        get_footer();
    }

?>


