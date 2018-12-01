

<div id="fiche">

        <figure>

            <?php the_post_thumbnail() ?>
        </figure>
        <section id="serie-text">

        <div class="" id="top-serie">


        <h3><?php the_title() ?></h3>

            <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>

        </div>
        <p><?php the_content() ?></p>

<div id="info">

        <div class="first">
            <p> Realisateur : <?php the_field ('realisateur'); ?></p>
            <p> Genre : <?php the_field ('genre'); ?></p>
            <p> Année : <?php the_field ('annee'); ?></p>
            <p> Pays : <?php the_field ('pays'); ?></p>

    </div>
</div>
        </section>

</div>


    <div class="comment-form">
<?php comments_template() ?>

    </div>
