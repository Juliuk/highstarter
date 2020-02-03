<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Kickstarter
 * @since 1.0
 * @version 1.0
 * @copyright  Copyright (c) 2020, Atanas Yonkov
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

if (is_active_sidebar('sidebar-1')): ?>
<aside id="secondary" class="sidebar-wrapper sidebar widget-area>" role="complementary"
    aria-label="<?php esc_attr_e('Right Sidebar', 'kickstarter');?>">
    <?php dynamic_sidebar('sidebar-1');?>
</aside><!-- #secondary -->
<?php else: //Starter content in the right sidebar ?>
<aside id="secondary" class="sidebar-wrapper sidebar widget-area>" role="complementary"
    aria-label="<?php esc_attr_e('Right Sidebar', 'kickstarter');?>">
    <section id="search-form-2" class="sidebar-box">
        <?php get_search_form();?>
    </section>
    <section id="recent-posts-2" class="sidebar-box"> 
        <?php the_widget('Recent_Posts_Widget');?>
    </section>
</aside><!-- #secondary -->
<?php endif; // end primary widget area