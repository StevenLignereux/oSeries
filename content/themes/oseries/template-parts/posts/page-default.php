

<div class="container-chat">
    <p>Avec o'series,ne ratez plus aucun épisode de vos séries préférées grâce au planning de diffusion personnalisé...</p>
    <img src="images/Planning.png" alt="">

</div>
        <div class="presentation">
            <img src="images/chat.jpg" alt="">
            <p>Echangez avec vos amis sur les derniers épisodes de vos séries favorites
                </p>
        </div>

        <div class="inscription">
            <a href="<?php echo get_permalink(43); ?>">Inscription</a>
       </div>







        <div class="slider">

            <?php  global $post;
                    $args = array( 'post_type' =>'serie', 'numberposts' => 3, 'orderby' => 'rand' );
                    $slider = get_posts($args);
                    if($slider) { ?>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="img carousel-inner">
                            <?php
            $i = 1;
            foreach($slider as $post) :
            $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'slider'); ?>
                        <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
 <!-- <img src="<?php echo $thumbnail[0]; ?>" width="688" height="140" alt="" title="<?php the_title();?>"/> -->
<?php get_template_part('template-parts/posts/serie', 'thumbnail');?>
                        </div>

                        <!-- <div class="carousel-item">
                            <img class="d-block w-100" src="../images/5.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/7.jpg" alt="Third slide">
                        </div> -->
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
                <?php  $i++;
            endforeach; ?>
        <?php wp_reset_postdata(); ?>
         </div>
     </div>
        <?php } ?>
        </div>








    <!-- <div class="dropdown-container">



          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Aventure</a>
            <a class="dropdown-item" href="#">Comédie</a>
          </div>
        </div>

        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuYear" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rechercher par année
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">2010</a>
            <a class="dropdown-item" href="#">2011</a>
            <a class="dropdown-item" href="#">2012</a>
          </div>
        </div>

        <div class="dropdown show">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuCountry" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Rechercher par pays
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">France</a>
            <a class="dropdown-item" href="#">Royaume-Uni</a>
            <a class="dropdown-item" href="#">Etats-Unis</a>
          </div>
        </div>
    </div> -->
    <div class="genre-selection">


    <div class="menu">
        <h2>Genre</h2>
        <div class="menu-container">

            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=Action' ) ); ?>">Action</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=Aventure' ) ); ?>">Aventure</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=comedie' ) ); ?>">Comédie</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=drame' ) ); ?>">Drame</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=horreur' ) ); ?>">Horreur</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=policier' ) ); ?>">Policier</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=science+fiction' ) ); ?>">Science Fiction</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=moyen+age' ) ); ?>">Moyen Age</a>
            <a class="type-button" href="<?php echo esc_url( home_url( '/?s=ados' ) ); ?>">Ados</a>
        </div>


    </div>
  <div class="selection">
      <h2>Sélection</h2>

        <div class="selection-thumbnail">

            <!-- <?php echo wp_rest_api_selection();?> -->

        <?php
              $args_query_serie = [
                'post_type' => 'serie',
                'posts_per_page' => 8,
                'orderby' =>'rand'
              ];
              $query_serie = new WP_Query($args_query_serie);
              if ($query_serie->have_posts()):
                while($query_serie->have_posts()):
                  $query_serie->the_post();
                  get_template_part('template-parts/posts/serie', 'thumbnail');
                endwhile;
              endif;
              wp_reset_postdata();


            ?>
        </div>
</div>
</div>
