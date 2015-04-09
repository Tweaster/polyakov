<article class="single">
    <div class="row" itemscope itemType="http://schema.org/BlogPosting">
        <p>&nbsp;</p>
        <div class="three-quarters post">
            <h2 itemprop="headline"><a href="<?php echo($post_link); ?>"><?php echo($post_title); ?></a></h2>

            <span itemprop="articleBody">
            <?php echo($post_content); ?>
            </span>

             <p>&nbsp;</p>

            <hr>

            <ul class="horizontal">
                <li>Written by <div itemprop="author"><div itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo($post_author); ?></span></div></div></li>
                <li><?php echo($published_date); ?></li>
                <li>About <a href="<?php echo($post_category_link); ?>"><span itemprop="about"><?php echo($post_category); ?></span></a></li>
                <li>
            </ul>
            <ul class="horizontal">
                <li><a href="https://twitter.com/intent/tweet?screen_name=<?php echo($post_author_twitter); ?>&text=Re:%20<?php echo($post_link); ?>%20" data-dnt="true">Comment</a> or <a href="https://twitter.com/intent/tweet?text=&quot;<?php echo($post_title); ?>&quot;%20<?php echo($post_link); ?>%20via%20&#64;<?php echo($post_author_twitter); ?>" data-dnt="true">Share</a> on Twitter</li>
                <li><a href="<?php echo($blog_url); ?>">More Articles</a></li>
            </ul>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</article>
