<?php
use Essential_Addons_Elementor\Pro\Classes\Helper;
use Essential_Addons_Elementor\Classes\Helper as HelperClass;
?>
<div class="eael-learn-dash-course eael-course-layout-1 <?php echo !empty($tags_as_string) ? esc_attr($tags_as_string) : ' '; ?>  <?php echo !empty($cats_as_string) ? esc_attr($cats_as_string) : ' '; ?> <?php echo esc_attr( $pagination_class ) ?> ">
    <div class="eael-learn-dash-course-inner">
        <?php $this->_generate_tags($tags); ?>

<!--        --><?php //if($image && $settings['show_thumbnail'] === 'true') : ?>
        <?php if($settings['show_thumbnail'] === 'true') : ?>
            <?php if ( ! empty( $ribbon_atts['ribbon_text'] ) ) : ?>
                <div class="<?php echo !empty( $ribbon_atts['class'] ) ? esc_attr( $ribbon_atts['class'] ) : ''; ?>">
                    <?php echo wp_kses_post( $ribbon_atts['ribbon_text'] ); ?>
                </div>
            <?php endif; ?>
            
            <a href="<?php echo esc_url(get_permalink($course->ID)); ?>" class="eael-learn-dash-course-thumbnail">
                <?php if( 1 == $ld_course_grid_enable_video_preview && ! empty( $ld_course_grid_video_embed_code ) ) : ?>
                    <!-- .ld_course_grid_video_embed helps to load default css and js from learndash -->
                    <div class="ld_course_grid_video_embed">
                        <?php echo HelperClass::eael_wp_kses( $ld_course_grid_video_embed_code ); ?>
                    </div>
                <?php elseif( $image ) :?>
                    <img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" />
                <?php else : ?>
                    <img alt="" src="<?php echo esc_url( \Elementor\Utils::get_placeholder_image_src() ); ?>"/>
                <?php endif; ?>

                <?php if($price && $settings['show_price'] === 'true' && $image): ?><div class="price-ticker-tag"><?php echo esc_attr($price); ?></div><?php endif; ?>
            </a>
        <?php endif; ?>

        <div class="eael-learn-deash-course-content-card">
            <<?php echo Helper::eael_pro_validate_html_tag($settings['title_tag']); ?> class="course-card-title">
            <a href="<?php echo esc_url(get_permalink($course->ID)); ?>"><?php echo HelperClass::eael_wp_kses( $course->post_title ); ?></a>
            </<?php echo Helper::eael_pro_validate_html_tag($settings['title_tag']); ?>>

            <?php if($settings['show_course_duration'] === 'true') : ?>
                <?php if( !empty( $duration_hours ) || !empty( $duration_minutes ) ) : ?>
                <div class="course-author-meta-inline course-duration-meta-inline">
                    <span><?php esc_html_e($duration_hours . 'Hrs ' . $duration_minutes . 'Mins', 'essential-addons-elementor'); ?></span>
                </div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if($settings['show_content'] === 'true' && !empty($short_desc)) : ?> 
            <div class="eael-learn-dash-course-short-desc">
                <?php echo wpautop($this->get_controlled_short_desc($short_desc, $excerpt_length)); ?>
            </div><?php endif; ?>

            <?php
                if($settings['show_progress_bar'] === 'true') {
                    echo do_shortcode( '[learndash_course_progress course_id="' . $course->ID . '" user_id="' . get_current_user_id() . '"]' );
                }
            ?>

            <?php
                if($settings['show_author_meta'] === 'true') : 
            ?>

            <div class="eael-learn-dash-author-meta">
                <a class="author-image" href="<?php echo esc_url($author_courses); ?>">
                    <img src="<?php echo esc_url( get_avatar_url( $course->post_author ) ); ?>" alt="<?php echo esc_attr(get_the_author_meta('display_name', $course->post_author)); ?>-image" />
                </a>
                <div class="author-desc">
                    <div class="course-author-meta-inline">
                        <span><?php _e('By', 'essential-addons-elementor'); ?></span> 
                        <a href="<?php echo esc_url($author_courses); ?>">
                        <?php echo esc_attr(get_the_author_meta('display_name', $course->post_author)); ?></a>
                        <span><?php _e('in', 'essential-addons-elementor'); ?></span>

                        <?php if (!empty($cats) && !is_wp_error($cats)) : ?>
                        <a href="<?php echo esc_url_raw( $author_courses_from_cat ); ?>"><?php echo esc_attr(ucfirst($cats[0]->name)); ?></a>
                        <?php endif; ?>
                    </div>
                    <p class="author-designation"><?php echo get_the_date('j M y', $course->ID); ?></p>
                </div>
            </div>
            <?php endif; // end of if($settings['show_author_meta'] === 'true') ?>

            <?php if($settings['show_button'] === 'true') : ?>
            <div class="course-button-wrap">
                <a href="<?php echo esc_url(get_permalink($course->ID)); ?>" class="eael-course-button">
	                <?php
	                if($settings['change_button_text'] === 'true' && !empty($settings['button_text'])) {
		                echo HelperClass::eael_wp_kses( $settings['button_text'] );
	                } else {
		                echo empty($button_text) ? __( 'See More', 'essential-addons-elementor' ) : HelperClass::eael_wp_kses( $button_text );
	                }
	                ?>
                </a>
            </div>
            <?php endif; ?>

        </div>

    </div>
</div>
