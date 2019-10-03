<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) {
        ?>
        <h2 class="comments-title">
            Kolom Komentar
        </h2>

        <ol class="comment-list">
            <?php
                wp_list_comments(
                    array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                    )
                );
                ?>
        </ol>

    <?php
        
    } else {
        ?>
        <span>Belum Terdapat Komentar</span>
    <?php
    } // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>

        <p class="no-comments"><?php _e('Comments are closed.'); ?></p>
    <?php
    endif;

    comment_form();
    ?>

</div><!-- #comments -->