<?php
class Mehdi_hpgrid
{
    public function __construct()
    {
        add_shortcode('mehdi_hpgrid', array($this, 'hpgrid_html'));
    }

    public function hpgrid_html($atts, $content)
    {
        $atts = shortcode_atts(
            array(
                'numberposts' => -1,
                'category' => '33',
                'order' => 'DESC'

            ), $atts);
        $posts = get_posts($atts);

        $html = array();
        $html[] = $content;
        ?>

            <?php
            $cpt = 0;
            foreach ($posts as $post) {
                if( ($cpt )%4 == 0){
                    ?> <div class="row row-no-padding row-no-margin"> <?php
                }
                $html[] = include(locate_template('mehdi/mehdi_templates/hpgrid.php'));
                if( ($cpt )%4 == 3){
                    ?> </div> <?php
                }
                $cpt ++;
            }
        ?>
        </div>
        <?php
    }

}
