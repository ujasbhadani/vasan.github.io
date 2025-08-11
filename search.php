<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package IT Security
 */

get_header(); ?>

<div class="box-image">
   <div class="single-page-img"></div>
   <div class="page-header">
      <?php echo '<h2 class="mb-0">' . esc_html__('You searched: ', 'it-security') . get_search_query() . '</h2>'; ?>
      <span><?php it_security_the_breadcrumb(); ?></span>  
   </div>
</div>

<div class="container">
   <div id="content" class="contentsecwrap">
      <?php
      $it_security_sidebar_layout = get_theme_mod( 'it_security_sidebar_post_layout','right');
      if($it_security_sidebar_layout == 'left'){ ?>
      <div class="row m-0">
         <div class="col-xl-4 col-lg-5 col-md-5" id="sidebar"><?php get_sidebar();?></div>
         <div class="col-xl-8 col-lg-7 col-md-7">
            <div class="postsec-list">
               <?php if ( have_posts() ) : ?>                            
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                  <?php endwhile; ?>
                  <?php the_posts_pagination(); ?>
               <?php else : ?>
                  <?php get_template_part( 'no-results', 'search' ); ?>
               <?php endif; ?>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
      <?php }else if($it_security_sidebar_layout == 'right'){ ?>
      <div class="row m-0">
         <div class="col-xl-8 col-lg-7 col-md-7">
            <div class="postsec-list">
               <?php if ( have_posts() ) : ?>                            
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                  <?php endwhile; ?>
                  <?php the_posts_pagination(); ?>
               <?php else : ?>
                  <?php get_template_part( 'no-results', 'search' ); ?>
               <?php endif; ?>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-xl-4 col-lg-5 col-md-5" id="sidebar"><?php get_sidebar();?></div>
      </div>
      <?php }else if($it_security_sidebar_layout == 'full'){ ?>
      <div class="full">
         <div class="postsec-list">
            <?php if ( have_posts() ) : ?>                            
               <?php while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
               <?php endwhile; ?>
               <?php the_posts_pagination(); ?>
            <?php else : ?>
               <?php get_template_part( 'no-results', 'search' ); ?>
            <?php endif; ?>
         </div>
         <div class="clearfix"></div>
      </div>
      <?php }else if($it_security_sidebar_layout == 'three-column'){ ?>
      <div class="row m-0">
         <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
         <div class="col-lg-6 col-md-6">
            <div class="postsec-list">
               <?php if ( have_posts() ) : ?>                            
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                  <?php endwhile; ?>
                  <?php the_posts_pagination(); ?>
               <?php else : ?>
                  <?php get_template_part( 'no-results', 'search' ); ?>
               <?php endif; ?>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
      <?php }else if($it_security_sidebar_layout == 'four-column'){ ?>
      <div class="row m-0">
         <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
         <div class="col-lg-3 col-md-3">
            <div class="postsec-list four-col">
               <?php if ( have_posts() ) : ?>                            
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                  <?php endwhile; ?>
                  <?php the_posts_pagination(); ?>
               <?php else : ?>
                  <?php get_template_part( 'no-results', 'search' ); ?>
               <?php endif; ?>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
         <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
      <?php }else if($it_security_sidebar_layout == 'grid'){ ?>
      <div class="row m-0">
               <div class="col-lg-9 col-md-9">
                  <div class="row">
                      <?php if ( have_posts() ) : ?>    
                        <?php /* Start the Loop */ ?>
                          <?php while ( have_posts() ) : the_post(); ?>
                              <?php get_template_part( 'template-parts/post/content-grid', 'search' ); ?>
                          <?php endwhile; ?>
                          <?php the_posts_pagination(); ?>
                            <?php else : ?>
                            <?php get_template_part( 'no-results', 'search' ); ?>
                      <?php endif; ?>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3" id="sidebar"><?php get_sidebar();?></div>
            </div>
         <?php }else {?>
         <div class="row m-0">
            <div class="col-lg-8 col-md-8">
               <div class="postsec-list">
                  <?php if ( have_posts() ) : ?>                            
                     <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                     <?php endwhile; ?>
                     <?php the_posts_pagination(); ?>
                  <?php else : ?>
                     <?php get_template_part( 'no-results', 'search' ); ?>
                  <?php endif; ?>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php get_footer();