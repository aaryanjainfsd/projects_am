<?php include_once 'header.php'; ?>


<header class="header">
	<a href="#" class="logo"><img src="assets/images/logo.png" alt="Logo"></a>

	<nav class="navbar">
		<div id="nav-close" class="fas fa-times"></div>
		<a href="#home">Home</a>
		<a href="#about">About</a>
		<a href="#packages">Products</a>
		<a href="#reviews">Reviews</a>
		<a href="#blogs">Contact</a>
	</nav>

	<div class="icons">
		<div id="menu-btn" class="fas fa-bars"></div>
		<!-- <a href="#" class="fas fa-shopping-cart"></a>
		<div id="search-btn" class="fas fa-search"></div> -->
	</div>
</header>


<!-- SLIDER -->
<section class="slider mt-5" style="background-color: white;">
	<div class="swiper-container main-slider loading">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Shaun Matthews</p>
					<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the
						1500s, when an unknown printer took a galley of type and scrambled it to make a type
						specimen book.</span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Alexis Berry</p>
					<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the
						1500s, when an unknown printer took a galley of type and scrambled it to make a type
						specimen book.</span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Billie Pierce</p>
					<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the
						1500s, when an unknown printer took a galley of type and scrambled it to make a type
						specimen book.</span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Trevor Copeland</p>
					<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the
						1500s, when an unknown printer took a galley of type and scrambled it to make a type
						specimen book.</span>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Bernadette Newman</p>
					<span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the
						1500s, when an unknown printer took a galley of type and scrambled it to make a type
						specimen book.</span>
				</div>
			</div>
		</div>
		<!-- If we need navigation buttons -->
		<div class="swiper-button-prev swiper-button-white"></div>
		<div class="swiper-button-next swiper-button-white"></div>
	</div>
	<!-- Thumbnail navigation -->
	<div class="swiper-container nav-slider loading">
		<div class="swiper-wrapper" role="navigation">
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Shaun Matthews</p>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Alexis Berry</p>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Billie Pierce</p>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Trevor Copeland</p>
				</div>
			</div>
			<div class="swiper-slide">
				<figure class="slide-bgimg"
					style="background-image:url(https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85)">
					<img src="https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85"
						class="entity-img" />
				</figure>
				<div class="content">
					<p class="title">Bernadette Newman</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products_cards">
	<p>The Perfect Look</p>
	<h3>Our Product Category</h3>
	<div class="cards_productsCont">
		<div>
			<img class="" src="assets/images/c7d0df07-4138-42be-9d65-87e10eb4b975.jpeg">
		</div>
		<div>
			<img class="" src="assets/images/close-up-hand-holding-nail-file_23-2149171331.jpg">
		</div>
		<div>
			<img class=""
				src="assets/images/woman-visiting-cosmetologist-making-rejuvenation-procedures_1303-26055.jpg">
		</div>
		<div>
			<img class="" src="assets/images/vbvbbv.jpg">
		</div>
		<div>
			<img class="" src="assets/images/young-woman-doing-her-morning-routine_23-2148837463.jpg">
		</div>
		<div>
			<img class="" src="assets/images/close-up-hand-holding-nail-file_23-2149171331.jpg">
		</div>
	</div>
</section>

<div class="what_containeredd">
	<section class="what_we_do">
		<div class="images_what">
			<img src="https://plus.unsplash.com/premium_photo-1726783222818-48f7588177d5?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				class="mainIMg" alt="">
			<div>
				<img src="assets/images/vector 1.png" class="vectorOne" />
				<img src="assets/images/vector 2.png" class="vectorTwo" />
				<img src="assets/images/vector 3.png" class="vectorThree" />
				<img src="assets/images/vector 4.png" class="vectorFour" />
			</div>
		</div>
		<div class="what_container">
			<h1>What We do</h1>

			<div class="main_cards_who">
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="phone_mobilewhat">
	<section class="mobile_produuct">
		<h1>What We do</h1>
		<div class="images_what">
			<img src="https://plus.unsplash.com/premium_photo-1726783222818-48f7588177d5?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				class="mainIMg" alt="">
			<div>
				<img src="assets/images/vector 1.png" class="vectorOne" />
				<img src="assets/images/vector 2.png" class="vectorTwo" />
				<img src="assets/images/vector 3.png" class="vectorThree" />
				<img src="assets/images/vector 4.png" class="vectorFour" />
			</div>
		</div>
		<div class="what_container">
			<div class="main_cards_who">
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
				<div class="cards_whatDo">
					<h3>Kurti Cotton</h3>
					<span>Choosing Ideal Coffee Machines, assembled in India, over imported ones has given us more
						control and peace of mind. The technology is world-class, and having a locally assembled brand
						means faster service and better value for money.</span>
				</div>
			</div>
		</div>
	</section>
</div>

<section class="galleryContainer">

</section>

<div class="what_containeredd">
	<section class="what_we_do">
		<div class="what_container">
			<h1>About Us</h1>

			
		</div>
		<div class="images_what">
			<img src="https://plus.unsplash.com/premium_photo-1726783222818-48f7588177d5?q=80&w=1888&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
				class="mainIMg" alt="">
			<div>
				<img src="assets/images/vector 1.png" class="vectorOne" />
				<img src="assets/images/vector 2.png" class="vectorTwo" />
				<img src="assets/images/vector 3.png" class="vectorThree" />
				<img src="assets/images/vector 4.png" class="vectorFour" />
			</div>
		</div>
	</section>
</div>

<section class="contact_us">
</section>

<footer class="footer">
	<div class="footer-container">
		<div class="footer-top">
			<div class="logo">
				<img src="assets/images/RitaDesign.png" alt="IDEAL Logo">
			</div>
			<p class="company-description">A brief description about the company</p>
		</div>

		<div class="footer-middle">
			<div class="footer-section">
				<h3>Design House</h3>
				<p>11/28, Kaveri Path<br>Mansarover, Jaipur <br> 302020 (Rajasthan)</p><br>
				<h4>Join Us</h4>
				<div class="social-icons">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
				</div>
			</div>

			<div class="footer-section">
				<h3>Products</h3>
				<ul>
					<li><a href="#">Kurti</a></li>
					<li><a href="#">Bags</a></li>
					<li><a href="#">Slippers</a></li>
					<li><a href="#">Stalks</a></li>
					<li><a href="#">Socks</a></li>
					<li><a href="#">Cotton Handky</a></li>
				</ul>
			</div>

			<div class="footer-section">
				<h3>Contacts</h3>
				<p>+91-9314507053</p>
				<p><a href="mailto:hello@idealcoffeemachines.com">ritadas3@gmail.com</a></p>
			</div>
			<div class="footer-section">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28470.181748654326!2d75.79729734969017!3d26.878961236126358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db68623609c65%3A0xf0f9266708c8a134!2sJhalana%20Doongri%2C%20Jaipur%2C%20Rajasthan%20302004!5e0!3m2!1sen!2sin!4v1738693910921!5m2!1sen!2sin"
					width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>

		<div class="footer-bottom">
			<p>RitaDesign © 2025. All rights reserved. Powered by TheFreelancerGroup</p>
			<div class="footer-links">
				<a href="#">Privacy Policies</a>
				<a href="#">Refund Policies</a>
				<a href="#">Shipping Policies</a>
				<a href="#">Terms & Conditions</a>
			</div>
		</div>
	</div>
</footer>

<script>
	let menu = document.querySelector('.navbar');
	let menuBtn = document.querySelector('#menu-btn');
	let closeBtn = document.querySelector('#nav-close');

	menuBtn.onclick = () => {
		menu.classList.add('active');
	}

	closeBtn.onclick = () => {
		menu.classList.remove('active');
	}
</script>

<?php include_once 'footer.php'; ?>