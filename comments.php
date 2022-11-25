<?php

if ( !defined('ABSPATH')) exit;

/*
	Theme Name:		Floralia
	File theme:		comments.php
	File source:    wp-content/themes/catorce/comments.php
	Author: 		Diego Delbono
	Version: 		1.0
*/

?>

<section class="comments">

    <?php if ( have_comments() ) : ?>
        <div class="comments__list">
            <h3>Comments</h3>
            <!--<h2><?php comments_number('Sin comentarios', 'Un comentario', '%Comentarios' ); // valores para indicar cantidad de comentarios?></h2>-->
            <ul><?php wp_list_comments(); // Listado de comentarios ?></ul>
        </div>
    <?php endif; ?>

    <div class="comments__form">

        <h2>Leave a reply</h2>
        <p>Your email address will not be published. <br /> Required fields are marked *</p>

        <?php if (comments_open()) : ?>

            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

                <fieldset>

                    <?php cancel_comment_reply_link("Borrar comentario"); ?>

                    <div class="form-row">
                        <label for="username"><span class="required">*</span>Name</label>
                        <input type="text" name="author" id="author" class="input-text" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                    </div>

                    <div class="form-row">
                        <label for="email"><span class="required">*</span>Email</label>
                        <input type="text" name="email" id="email" class="input-text" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                    </div>

                    <div class="form-row">
                        <label for="email"><span class="required">*</span>Comment</label>
                        <textarea name="comment" id="comment" cols="10" rows="5" tabindex="4" class="input-text input-textarea"></textarea>
                    </div>

                    <input name="submit" type="submit" id="submit" tabindex="5" value="Leave comment" class="button" />
                    <?php comment_id_fields(); ?>

                    <?php do_action('comment_form', $post->ID); ?>

                </fieldset>

            </form>

        <?php endif; // If registration required and not logged in ?>
    </div>


</section>
