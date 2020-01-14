<?
/*
Template Name: О компании
*/
?>

<?
get_header();
?>

<div class="about" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
                        <div class="about__img">
                            <img src="<?the_field('about_img');?>">
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
                        <h1 class="title underlined"><?the_field('adout_title');?></h1>
                        <div class="about__text">
                        <?the_field('Companu_diskr');?>
                        </div>
                        <a href="#" class="button">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>

<?
get_footer();
?>