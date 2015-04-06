<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
               
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>          

        <div class="menubar">
             <ul>
                <li><a href="<?php echo($blog_url); ?>">HOME</a></li>
                <li><a href="<?php echo($blog_url); ?>about">ABOUT</a></li>
                <li><a href="<?php echo($blog_url); ?>contact">CONTACT</a></li>
            </ul>
        </div>
        
        <?php $path = explode('/',$_SERVER["REQUEST_URI"]); //the current path
            $polyakov_image = '/templates/polyakov/polyakov.jpg'; //the default
            $polyakov_main_image_exists = file_exists('./posts/polyakov.jpg'); //with the dot, because it has to be an absolute path
            $polyakov_post_image_exists = file_exists($image); //Post image already defaults to profile, so not that
            $polyakov_main_image = '/posts/polyakov.jpg'; //without the dot, because the CSS won't work with it
            if($polyakov_main_image_exists) {
                $polyakov_image = $polyakov_main_image; //if we have a post image, override it with that
            }
            $polyakov_is_home = (count(array_filter($path)) == 0); //if there's nothing in the exploded path
        if($polyakov_is_home) { ?>                        
           
            <div id="background" style="background: url(<?php echo($polyakov_image) ?>) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1></h1>                      
                </div>                
            </div>
        <?php } else if($path[1] == "category") { //if the first directory is category ?>
            <div id="background" style="background: url(<?php echo($polyakov_image) ?>) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($post_category); ?></h1>
                </div>
            </div>
        <?php } else if($polyakov_post_image_exists) { //if it's an image page ?>
            <div id="background" style="background: url(<?php echo($post_image)?>) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($post_title); ?></h1>
                </div>
            </div>
        <?php } else { //if it's a post with no image ?>
            <div id="background" style="background: url(<?php echo($polyakov_image) ?>) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($post_title); ?></h1>
                </div>
            </div>
        <?php } ?>

                
        <div id="main">
            <?php if($is_home) { ?>
                <article id="header">
                    <div class="row">
                        <div id="info">
                            <!--<li><span><?php echo($blog_title); ?></span></li>-->
                            <span><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></span>
                            <div class="thumbnail">
                                <img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" />
                            </div>
                            <span><a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></span>
                        </div>

                        <p class="three-quarters"><?php echo($intro_text); ?></p>
                    </div>
                </article>
            <?php } ?>

            <?php if(count(array_filter($path)) == 0) { ?>


        
            <div class="ribbon">
                <div class="post">
                    <p style="font-family: 'Fredericka the Great', cursive; font-size:300%;"><?php echo($intro_title); ?></p>
                                
                    <p><?php echo($intro_text); ?></p>
                    <img src="<?php echo($template_dir_url); ?>logo.png">
                    <div class="shadow"></div>
                </div>
            </div>

            <?php } ?>

            <?php echo($content); ?>
        
            <?php get_footer(); ?>


<header class="home">
    <div class="profile-mask">
    </div>
    
    <div class="profile">
    </div>
    
    <div class="profile-image">
         <a href="http://ca.linkedin.com/in/frasoamiaramanana"><img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/p/1/005/084/1cc/166c03b.jpg" alt="Fabrice Rasoamiaramanana" /></a>
    </div>
                
     <div class="intro">
        <h2>About this blog</h2>
        <p><?php echo($meta_description); ?></p>
        <a href="<?php echo($blog_url); ?>contact">fabrice@projectify.me</a>
    </div>
</header> 

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
                var headerResize = function() {
                var headerhomeheight = $('header').height()-60;
                var headermaskheight = $('header').height()-75;
                var headerimageheight = $('header').height()-50;
                $("header.home").css({ bottom: '0px' });
                
                setTimeout(function() { 
                    $("header.home").css({ bottom: '-' + headerhomeheight + 'px' });
                }, 500);
                
                
            };
            
            $(document).ready(function () {
                headerResize();
                var target =  $('[id=main]');
                if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 300
                    }, 2500);
                    return false;
                }
            });
            
            $(window).resize(function() {
                headerResize();
            });
                    </script>


        </main>
    </body>
</html>
