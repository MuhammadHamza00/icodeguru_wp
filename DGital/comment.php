<?php
/**
 * The template for displaying comments.
 * @package Comment.php
 * @subpackage DGital
 * @since 1.0
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h5 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( esc_html__( 'Thought on &ldquo;%s&rdquo;', 'your-theme-text-domain' ), esc_html( get_the_title() ) );
            } else {
                printf(
                    esc_html(
                        _nx(
                            '%1$s thought on &ldquo;%2$s&rdquo;',
                            '%1$s thoughts on &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'your-theme-text-domain'
                        )
                    ),
                    number_format_i18n( $comments_number ),
                    esc_html( get_the_title() )
                );
            }
            ?>
        </h5><!-- .comments-title -->

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 60,
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php
        the_comments_pagination(
            array(
                'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Previous', 'your-theme-text-domain' ) . '</span>',
                'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Next', 'your-theme-text-domain' ) . '</span>',
            )
        );
        ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'your-theme-text-domain' ); ?></p>
    <?php endif; ?>

    <?php
    comment_form(
        array(
            'class_submit' => 'btn btn-primary mt-4', // Adding Bootstrap class to the submit button.
            'title_reply_before' => '<h5 id="reply-title" class="comment-reply-title">', // Customizing reply title.
            'title_reply_after' => '</h5>', // Closing tag for custom reply title.
            'comment_field' => '<div class="form-group"><label for="comment" class="sr-only">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>', // Customizing comment field.
            'logged_in_as' => '', // Removing the "Logged in as" message.
            'comment_notes_before' => '', // Removing additional notes before the comment form.
            'comment_notes_after' => '', // Removing additional notes after the comment form.
        )
    );
    ?>

</div><!-- #comments -->

