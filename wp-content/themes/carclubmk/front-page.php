<?php

get_header();

?>
    <main class="main">
        <?php
        get_template_part('sections/beginner','v1')
        ?>

        <?php

            $people = array (
                array(
                    "first_name" => "Nikola"
                    "fast_name" => "Marinkovikj"
                    array(
                    "Age" => 19,
                    "Height" => 175,
                    "Weight" => 80,
                    )
                ),
                array(
                    "first_name" => "Ruzhica"
                    "fast_name" => "Zhekoska"
                    array(
                    "Age" => 19,
                    "Height" => 175,
                    "Weight" => 80,
                    )
                ),
            );
        ?>

            <div>
            Ruzhica e postara od Nikola
            </div>

    </main>
<?php

get_footer();