<?
/*
Template Name: Наша команда
*/
?>

<?
get_header();
?>

<div class="specialists" id="specialists">
            <div class="container">
                <div class="title"><?the_field('ourteam');?></div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <img class="specialists__img" src="<?the_field('teamphoto');?>" alt="наша команда">
                    </div>
                </div>
            </div>
        </div>

<?
get_footer();
?>