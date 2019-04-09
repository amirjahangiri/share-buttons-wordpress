<div class="social">
    <div class="icons">
        <!--Twitter-->
        <a class="twitter" href="https://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a>
        <!--Facebook-->
        <a class="facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank">Facebook</a>
        <!--Google Plus-->
        <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;">Google+</a>
         <!--Linkedin-->
         <a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" rel="external nofollow" rel="nofollow" target="_blank">Share on LinkedIn</a>
         <!--Pinterest-->
         <a class="pinterest" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" title="Pinterest" rel="nofollow" target="_blank">Pinterest</a>
         <!--Telegram-->
        <a class="telegram" href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="share on Telegram" rel="nofollow" target="_blank">Telegram</a>
            <!--whatsapp-->
        <a class="whatsapp" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share">Whatsapp</a>
    </div>
</div>
