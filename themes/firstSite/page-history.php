<?
/*
Template Name: История компании
*/
?>

<?
get_header();
?>

<div class="aboutus" id="aboutus">
            <div class="container">
                <h1 class="title">Наша история</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?the_field('zagolovok_1')?>
                        </div>
                        <div class="aboutus__text">
                        <?the_field('history_text_1')?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?the_field('Photo_1');?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?the_field('Photo_2');?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?the_field('zagolovok_2')?>
                        </div>
                        <div class="aboutus__text">
                        <?the_field('history_text_2')?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?the_field('zagolovok_3')?>
                        </div>
                        <div class="aboutus__text">
                        <?the_field('history_text_3')?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?the_field('Photo_3');?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>

<?
get_footer();
?>