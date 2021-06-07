<?php if ( post_password_required() ) : return; endif ?>

<div class="px-5">
    <div class="card border-0">
        <div class="card-body">
            <h4 class="card-title">Comments (<?php comments_number( '0', '1', '%' ) ?>)</h4>

            <ol class="comments-list">
                <?php
                    wp_list_comments( array(
                        'style' => 'ol',
                        'max_depth'  => 4,
                        'short_ping' => true,
                        'avatar_size' => 50,
                    ) );
                ?>
            </ol>
        </div>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <?php
                comment_form( array(
                    'title_reply' => '<h4 class="card-title">Leave a comment</h4>',
                    'title_reply_before' => '',
                    'logged_in_as' => '',
                    'comment_notes_before' => '',
                    'comment_field' => '<div class="form-group mb-2"><label>Comment <span>*</span></label><textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Your comment" required="required"></textarea></div>',
                    'fields' =>  array(
                        'author'  => '<div class="form-group mb-2"><label>Name <span>*</span></label><input class="form-control" name="name" type="text" placeholder="Your name" required="required"/></div>',
                        'email'  => '<div class="form-group mb-2"><label>Email <span>*</span></label><input class="form-control" name="email" type="email" placeholder="Your email" required="required"/></div>'
                    ),
                    'class_submit' => 'btn btn-dark-blue mt-2',
                    'label_submit' => 'Submit'
                ) );
            ?>
        </div>
    </div>
</div>