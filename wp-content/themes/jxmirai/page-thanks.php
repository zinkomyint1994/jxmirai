<?php

/**
 * Template Name: thanks
 */
get_header(); ?>
<div class="thanks_wrap">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logoFinal_.png" alt="Example Image">
<div class="inner_wrap">
<div>
    <?php
            global $title;
            global $bgColor;
            $bgColor ="#000000";
            $title = "CONTACT";
            include get_template_directory() . '/custom/subTitle.php';
            ?>
                    <p>お問い合わせフォーム
        </div>

   <p>
        この度は、お問い合わせいただきありがとうございました。
        お問い合わせが完了いたしました。
    </p>
   <p>
        お問い合わせ内容につきましては、内容を確認の上、担当者よりご連絡いたします。
        恐れ入りますが、今しばらくお待ちください。
    </p>
   <p>
        なお、ご入力いただいたメールアドレスへ、お問い合わせ完了メールをお送りいたしました。
        完了メールが届かない場合、処理が正常に行われていない可能性があります。
        大変お手数ですが、再度お問い合わせの手続きをお願いいたします
   </p>
   <a href="<?php echo home_url(); ?>">
				<?php
				include get_template_directory() . '/custom/homeBtn.php';
				?>
			</a>
</div>
</div>
<?php get_footer(); ?>

<!-- この度は、お問い合わせいただきありがとうございました。
お問い合わせが完了いたしました。

お問い合わせ内容につきましては、内容を確認の上、担当者よりご連絡いたします。
恐れ入りますが、今しばらくお待ちください。

なお、ご入力いただいたメールアドレスへ、お問い合わせ完了メールをお送りいたしました。
完了メールが届かない場合、処理が正常に行われていない可能性があります。
大変お手数ですが、再度お問い合わせの手続きをお願いいたします。 -->