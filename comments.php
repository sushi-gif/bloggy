<?php cancel_comment_reply_link(); ?>
<hr style="width:60%;">
<?php
    if(!have_comments()){
        echo '<div class="title-center"><h2>Nessun commento</h2></div>';
    }else{
        echo '<div class="title-center"><h2>'.get_comments_number().' Commenti </h2></div>';
    }
?>

<?php
    wp_list_comments();
?>

<?php 
    //form per i commenti
    if(comments_open()){
        comment_form(
            array(
                'class_form' => '',
                'avatar_size' => '0'
                )
        );
    }
?>