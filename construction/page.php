<?php
/*
Template Name: home

*/

?>
<?php get_header(); ?>
<main>
		<section class="logo">
			<div class="logo__container container">
				<ul class="logo__item">
					<li class="logo__icon"><img src="<?php bloginfo('template_url'); ?>/assets/./img/icon/logos/logo01.svg" alt="logo01.svg"></li>
					<li class="logo__icon"><img src="<?php bloginfo('template_url'); ?>/assets/./img/icon/logos/logo02.svg" alt="logo02.svg"></li>
					<li class="logo__icon"><img src="<?php bloginfo('template_url'); ?>/assets/./img/icon/logos/logo03.svg" alt="logo03.svg"></li>
					<li class="logo__icon"><img src="<?php bloginfo('template_url'); ?>/assets/./img/icon/logos/logo04.svg" alt="logo04.svg"></li>
					<li class="logo__icon"><img src="<?php bloginfo('template_url'); ?>/assets/./img/icon/logos/logo05.svg" alt="logo05.svg"></li>
				</ul>
			</div>
		</section>
		<section class="heading ">
			<div class=" heading__container container ">
				<div class="heading-body body-heading">
					<div class="body-heading__row">
						<div class="body-heading__text text">
							<p>Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance bed
								necessary.</p>
						</div>
						<div class="body-heading__button">
							<button class="body-heading__btn btn">Explore</button>
						</div>
					</div>
					<div class="body-heading__title">
						<h2>Why Choose us for best construction experience</h2>
					</div>
				</div>
				<div class="heading-content">
					<div class="content-body__image">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/heading/image.jpg" alt="image.jpg">
					</div>
					<div class="content-body__items">
						<div class="content-body__item">
							<div class="content-body__number01 number">01</div>
							<div class="content-body__text text">
								<p>And residence for met the estimable disposing. Mean if he they been no hold mr. Is at much
									do made took held help.</p>
							</div>
						</div>
						<div class="content-body__item">
							<div class="content-body__number02 number">02</div>
							<div class="content-body__text text">
								<p>Up maids me an ample stood given. Certainty say suffering his him collected intention
									promotion.</p>
							</div>
						</div>
						<div class="content-body__item">
							<div class="content-body__number03 number">03</div>
							<div class="content-body__text text">
								<p>Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio  ">
			<div class="portfolio-header">
				<div class="portfolio-header__title">
					<h3>Our Best Engineers</h3>
				</div>
				<div class="portfolio-header__text text">
					<p>Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance bed
						necessary.</p>
				</div>
			</div>

			<div class="portfolio-contact__row">


			<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => 4, 
	'category'    => 2  

]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>





		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
		<div class="portfolio-contact">
					<div class="portfolio-contact__icon">
					<?php the_post_thumbnail(         //картинка

array(380, 250),          // размер


); ?>
					</div>
					<div class="portfolio-contact__body">
						<div class="portfolio-contact__name"><?php the_title();?></div>
						<div class="portfolio-contact__adress"><?php the_content();?></div>
						<div class="portfolio-contact__tell"><a href="tel:#!"></a></div>
						<div class="portfolio-contact__maill"><a href="mailto:#!"></a></div>
					</div>
				</div>

			
		<?php }} wp_reset_postdata(); ?>




			<!-- <div class="portfolio-contact">
					<div class="portfolio-contact__icon">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/portfolio/Ellipse01.png" alt="Ellipse01.png">
					</div>
					<div class="portfolio-contact__body">
						<div class="portfolio-contact__name"><?php the_title();?></div>
						<div class="portfolio-contact__adress"><?php the_content();?></div>
						<div class="portfolio-contact__tell"><a href="tel:#!">989-653-2986</a></div>
						<div class="portfolio-contact__maill"><a href="mailto:#!">ChrisEvans@const.com</a></div>
					</div>
				</div>


				 <div class="portfolio-contact">
					<div class="portfolio-contact__icon">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/portfolio/Ellipse02.png" alt="Ellipse02.png">
					</div>
					<div class="portfolio-contact__body">
						<div class="portfolio-contact__name">Alison Kiara</div>
						<div class="portfolio-contact__adress">Michigan, TX</div>
						<div class="portfolio-contact__tell"><a href="tel:#!">989-653-2986</a></div>
						<div class="portfolio-contact__maill"><a href="mailto:#!">alisonkiara@const.com</a></div>
					</div>
				</div>

				<div class="portfolio-contact">
					<div class="portfolio-contact__icon">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/portfolio/Ellipse03.png" alt="Ellipse03.png">
					</div>
					<div class="portfolio-contact__body">
						<div class="portfolio-contact__name">Adam Gates</div>
						<div class="portfolio-contact__adress">Michigan, TX</div>
						<div class="portfolio-contact__tell"><a href="tel:#!">989-653-2986</a></div>
						<div class="portfolio-contact__maill"><a href="mailto:#!">adamgates@const.com</a></div>
					</div>
				</div>  -->

			</div>
			</div>
		</section>
		<section class="message ">
			<div class="message__container container">
				<div class="message__image">
					<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/Message/Rectangle.jpg" alt="Rectangle.jpg">
				</div>
				<div class="message__row">
					<div class="message__title">
						<h3>Message from CEO</h3>
					</div>
					<div class="message__text text">
						<p>Shewing met parties gravity husband sex pleased. On to no kind do next feel held walk. Last own
							loud and knew give gay four. Sentiments motionless or principles preference excellence am.
							Literature surrounded insensible at indulgence or to admiration remarkably. Matter future lovers
							desire marked boy use. Chamber reached do he nothing be.
							<br><br><br>Do in laughter securing smallest sensible no mr hastened. As perhaps proceed in in
							brandon of limited unknown greatly. Distrusts fulfilled happiness unwilling as explained of
							difficult. No landlord of peculiar ladyship attended if contempt ecstatic. Loud wish made on is am
							as hard. Court so avoid in plate hence. Of received mr breeding concerns peculiar securing
							landlord. Spot to many it four bred soon well to. Or am promotion in no departure abilities.
							Whatever landlord yourself at by pleasure of children be.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="contact ">
			<div class="contact__container container">
				<div class="contact-title">
					<h3 class="contact-title__title">Contact Us</h3>
					<p class="contact-title__text text">Blessing welcomed ladyship she met humoured sir breeding her. Six
						curiosity day assurance bed necessary.</p>
				</div>
				<div class="contact-body">
					<from action="" class="contact-body__info body-info">
					
					<?php echo do_shortcode('[contact-form-7 id="25" title="Контактная форма"]')?> 
						
					</from>
					
					<div class="contact-body__image">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/maine/contact/GroupMAP.jpg" alt="MAP.png">
						<div class="braziliya"></div>
						<div class="canada"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="test-blog">
			<div class="test-blog__container container">
				<div class="test-blog__title title">
					<h3>Lattest Blogs</h3>
				</div>
				<div class="test-blog__text text">
					<p>Blessing welcomed ladyship she met humoured sir breeding her. Six curiosity day assurance bed
						necessary.</p>
				</div>
				<div class="test-blog__body test-body">
					<div class="test-body__column column-body">
						<div class="column-body__block">
							<div class="column-body__title">
								<h4>Unleash Your Creativity</h4>
							</div>
							<div class="column-body__text">
								<p>Nine for Mortal Men, doomed to die, One for</p>
							</div>
						</div>
					</div>
					<div class="test-body__columns columns-body">
						<div class="columns-body__block">
							<div class="columns-body__title">
								<h4>Unleash Your Creativity</h4>
							</div>
							<div class="columns-body__text">
								<p>Nine for Mortal Men, doomed to die, One for</p>
							</div>
							<div class="columns-body__button btn">Read more</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="subscribe">
			<div class="subscribe__container container">
				<h3 class="subscribe__title">Subscribe to our
					Newsletter</h3>
				<p class="subscribe__text text">Age sold some full like rich new. Amounted repeated as <br> believed in
					confined
					juvenile.</p>
				<button class="subscribe__button btn">SUBSCRIBE</button>
			</div>
		</section>
	</main>
	<?php get_footer(); ?>