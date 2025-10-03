php get_header(); 
main id=main class=site-main container
  section class=featured-posts
    php get_template_part('template-partscontent', 'featured'); 
  section

  section class=category-blocks
    php get_template_part('template-partscontent', 'category-box'); 
  section

  aside class=sidebar
    php get_sidebar(); 
  aside
main
php get_footer(); 
