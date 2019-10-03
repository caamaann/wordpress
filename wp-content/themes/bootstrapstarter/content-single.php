<article class="container-fluid">
    <div class="container">
        <?php
        if (have_posts()) {
            while (have_posts()) :
                the_post();
        ?>
        <div class="pv_artikel">
            <p class="tgl_artikel"><?php the_date(); ?></p>
            <p> Author : <?php the_author(); ?></p>
            <a href="<?php esc_url(the_permalink()); ?>"><p class="judul_artikel"> <?php the_title(); ?> </p></a>
            <?php
                
                the_content();
            ?>
        </div>

        <?php
            endwhile;
            comments_template();
        }   
        else{
            echo "<p>Sorry, no posts matched your criteria.</p>";
        }
        

        ?>
    </div>
</article>