<?php
/*
    Template Name: Archives
*/

get_header(); ?>

<!-- [start] Content -->
        <section id="main">
		    <div class="inner">

			    <section id="one" class="wrapper style1">

                    <p><strong>By Date</strong></p>
                    <ul class="archive-cat">
                        <?php compact_archive($style='block'); ?>
                    </ul>

                    <p><strong>Categories:</strong></p>
                    <ul class="archive-cat">
                        <?php wp_list_categories('title_li='); ?>
                    </ul>

                    <p><strong>List of Pages:</strong></p>
                    <ul class="archive-cat">
                        <?php wp_list_pages( 'title_li=' ); ?>
                    </ul>

                    <p><strong>List of Authors:</strong></p>
                    <ul class="archive-cat">
                        <?php wp_list_authors( 'exclude_admin=0&optioncount=1' ); ?>
                    </ul>

            <!-- <div class="clear"></div> -->
</section>
            </div>
    </section>

<!-- [end] Content -->

<?php get_footer(); ?>