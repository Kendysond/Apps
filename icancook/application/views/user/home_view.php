
<title> Home of different ways to prepare a meal | #iCanCook </title>

<section class="section section-services">
    <div class="container">
        <header class="entry-header aligncenter section-header section-services-header margin-top-60">
            <h2 class="entry-title">
                Today's Dishes
            </h2>
            <h3 class="entry-title-desc">
                Get all the procedures to make your favorite Dishes
            </h3>   
        </header>
    
        <ul class="clean-list services-list featured-items row">
            <?php
                if(!empty($dishes)){
               foreach($dishes as $i => $dish){
            ?>
                <li class="col-md-4 col-sm-4">
                    <div>
                        <div class="content-block background-white border-top-orange best-cousine-icon service-icon">
                            <h4 class="entry-title pre-line padding"><a href="<?=  base_url('dish').'/'.$dish->id;?>"><?= $dish->name;?></a></h4><hr />
                            <div class="content padding">
                                <p><?= $dish->state ." | $dish->lga" ;?></p>
                            </div>
                            <div class="svg-container">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 628 726" preserveAspectRatio="xMidYMid meet">
                                    <polygon points="723,314 543,625.769145 183,625.769145 3,314 183,2.230855 543,2.230855 723,314" stroke-width="4"/></svg>
                            </div>
                        </div>
                    </div>
                </li>
            <?php }} ?>
                                    
        </ul>
        
    </div>
</section>

