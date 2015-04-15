<title>How to prepare <?= $dish->name;?> | #iCanCook </title>
    
<section class="wood-background recipe-content">
    <div class="container ">
        <div class="background-white margin-top-60 margin-bottom-120">
            <header>
                <figure>
                    <br>
                    <figcaption>
                        <h2 class="entry-title aligncenter margin-top-60"><?= $dish->name;?></h2>
                    </figcaption>
                </figure>
            </header>

            <div class="row no-margin padding-right">
                <div class="col-md-9 no-padding">
                    <div class="entry-content padding padding-double">
                        <h3 class="entry-title">Description</h3>
                        <?= $dish->procedures;?>
                        <header style="color:#78add6;">
                            <div class="header-meta row no-margin">
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <span class="date center-me pre-line aligncenter margin-half-top ">
                                        <?= $views ;?> &nbsp;
                                        View(s)
                                    </span>
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10 left-date">
                                    <h2 class="entry-title" style="color:#78add6;"><?= $dish->fullname;?></h2>
                                    <ul class="clean-list post-meta-list border-top row">
                                        <li class="no-padding">
                                            <a href="#" class="meta-link comments"> &nbsp; <?= $dish->state;?></a> /
                                            <a class="text-red hover-text-dark-red author" href="#"><?= $dish->lga;?></a> 
                                            

                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </header>
                        <div class="clean-list share-links padding-top share-socials border-top clearfix">
                            <ul class="clean-list socials inline">
                                <li>
                                    <a href="#">
                                        <span class="st_facebook_large">
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="st_twitter_large">
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="st_pinterest_large">
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="comments-wrap background-white">
                        <div class="comments-area comments-block">
                            <h4 class="entry-title border-bottom padding-double-top">2 comments</h4>
                            <div id="respond" class="comment-respond">
                                <form class="comment-form" id="commentform" method="post" >
                                <div class="row">
                                    <div class="col-md-4"><input type="text" aria-required="true" value="" placeholder="Enter your name" name="name" id="author" class="comments-line comments-line-1  margin-top"></div>
                                    
                                    <div class="col-md-4"><input type="text" aria-required="true" value="" placeholder="Enter your e-mail adress" id="e-mail" name="email" class="comments-line comments-line-2  margin-top"></div>
                                
                                    <div class="col-md-4">
                                     <div class="input-cover contact-line">
                                        <select name="gender">
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>   
                                    
                                    </div>
                                </div>
                                    
                                    <span class="line-limit"><textarea rows="6" class="comments-textarea margin-top" name="comment"></textarea></span>
                                        
                                    <p class="form-submit margin-top">
                                        <input type="submit" value="Send Comment" id="submit" name="submit">
                                        <input type="hidden" id="comment_post_ID" value="77" name="comment_post_ID">
                                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                    </p>
                                </form>

                                <ul class="comment-list clean-list border-top margin-top-100 padding-top">
                                    <li>
                                        <div class="tt-comment">
                                            <span class="tt-avatar"><img src="<?= base_url(); ?>assets/images/avatar64x64.jpg" alt="Avatar" /></span>
                                            <div class="comment-block">
                                                <div class="comment-meta">
                                                    John Doe
                                                    <span class="comment-info">
                                                        29.08.2014
                                                    </span>
                                                </div>
                                                <div class="comment-text">
                                                    <p>
                                                        A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                    </p>
                                                </div>
                                                <span class="comment-reply">
                                                    <a href="" class="comment-reply-link">Reply</a>
                                                </span>
                                            </div>
                                        </div>
                                        <ul class="children">
                                            <li class="comment comment-author-tesla odd alt depth-2">
                                                <div class="tt-comment">
                                                    <span class="tt-avatar"><img src="<?= base_url(); ?>assets/images/avatar64x64.jpg" alt="Avatar" /></span>
                                                    <div class="comment-block">
                                                        <div class="comment-meta">
                                                            John Doe
                                                            <span class="comment-info">
                                                                29.08.2014
                                                            </span>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>
                                                                A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                                            </p>
                                                        </div>
                                                        <span class="comment-reply">
                                                            <a href="" class="comment-reply-link">Reply</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-3 no-padding">
                    <div class="aside background-white">
                        <div class="recipe-block border padding margin-top-100" >
                            <h3 class="entry-title margin-left padding-bottom" >Ingridients</h3>    
                            <ol class="clean-list recipe-list margin-left" >
                                <?php if (!empty($dish->ingris) ) { 
                                       foreach($dish->ingris as $i => $ingridient){
                                ?>
                                   <li><?= $ingridient; ?></li>
                             <?php }} ?>
                                
                               

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    select {
        margin-top: 20px;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-family: "Montserrat";
        font-size: 14px;
        font-weight: normal;
        height: 45px;
        outline: medium none;
       // padding: 6px;
        width: 100%;
    }
    .no-margin{
        border-top: 1px solid transparent;
        border-left: 1px solid transparent;
        border-right: 1px solid transparent;
        border-color:#d1d1d1;
    }
    .left-date{
        border-left: 1px solid transparent;
        border-left-color:#d1d1d1;
    }
</style>