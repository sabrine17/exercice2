<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-sc
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="caroussel-2">
		<article class ="slide__conteneur">
			<div class ="slide">
				
				<div class ="slide__info">
				<p>582-3W3 - Web-90h</p>
				<a href ="http://localhost/theme4W4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites web dynamiques</a>
				<p> Session : 3 </p>
			</div>
			</div>
	</article>
	<article class="slide__conteneur">
	<div class="slide">
		
		<div class="slide__info">
			<p>582-3W3 - Web-90h</p>
			<a href ="http://localhost/theme4W4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites web dynamiques</a>
			<p> Session : 3 </p>
			</div>
			</div>
	</article>
	<article class="slide__conteneur">
	<div class="slide">
		
		<div class="slide__info">
			<p>582-3W3 - Web-90h</p>
			<a href ="http://localhost/theme4W4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites web dynamiques</a>
			<p> Session : 3 </p>
			</div>
			</div>
	</article>

	</section>

	<section class="ctrl-caroussel">
	<input class="rad-caroussel" type="radio" name="rad-caroussel">
	<input class="rad-caroussel" type="radio" name="rad-caroussel">
	<input class="rad-caroussel" type="radio" name="rad-caroussel">
	</section>

	
	
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<!-- SECTION COURS -->
            <section class="cours"> 
			<?php
			/* Start the Loop */
			$precedent = "XXXXXX";
			//$chaine_bouton_radio = '';
			while ( have_posts() ) :
			the_post();
			
			convertirTableau($tPropriété);

		if($tPropriété['typeCours'] != $precedent):
		if("XXXXXX" != $precedent) :?>
		<!--?php if ($precedent =="Web") : ?>
			<section class ="ctrl-caroussel">-->
				<!--?php echo $chaine_bouton_radio; ?> -->
		</section>
		<?php endif ?>
		<h2><?php echo $tPropriété['typeCours']; ?></h2>

		<section >
		<!--?php echo ($tPropriété['typeCours']=='Web'?'class = "caroussel-2"':'');?>-->
	
		<?php endif ?>
		<?php get_template_part('template-parts/content', 'cours-article'); ?>
		<!--?php if ($tPropriété['typeCours']== "Web"):
			get_template_part('template-parts/content', 'article-caroussel');
		else :
			get_template_part('template-parts/content', 'article-cours');
		endif;-->
		
		<?php $precedent = $tPropriété['typeCours'];
		endwhile; ?>
		</section> <!-- fin de section cours -->
		<?php endif; ?>



  
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


function convertirTableau(&$tPropriété){

	/*
			// 582-1W1- Mise en page Web (75h)
			$titre = get_the_title();
            $sigle = substr($titre, 0, 7);
            $nbHeure = substr($titre, -4, 3);
            $titrePartiel = substr($titre,8, -6);
			$session = substr($titre,4,1);
            $typeCours = get_field('type_de_cours');
	*/


	$tPropriété['titre'] = get_the_title();
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'], -4, 3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8, -6);
	$tPropriété['session'] = substr($tPropriété['titre'],4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}

