

<article class="intro">

    <div class="<?php echo($post_status); ?>">

    <a class="post-link" href="<?php echo($post_link); ?>" title="<?php echo($post_title); ?>"></a>

    <div class="look" style="background-image: url('<?php echo($post_image); ?>');">
    </div>
            
    <div class="read">
        <div class="post" itemscope itemType="http://schema.org/BlogPosting">
            <h2 itemprop="headline"><?php echo($post_title); ?></h2>
            
            <div class="meta"><?php echo($published_date); ?> by  <div itemprop="author"><div itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo($post_author); ?></span></div></div></div>
            
            <div itemprop="description"><?php echo($post_intro); ?></div>
        </div>
    </div>

    <div class="readmore"></div>
    

    <div class="shadow"></div> 

    </div>

</article>
