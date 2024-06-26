<!DOCTYPE html>
<html>
<head>
	<img src="logo (1).png" width="190px" height="50px">
	<title>YouthInsight</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header>
		<div class="container">
			<nav>
				<ul>
					<li><a href="#">Medu Utama</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="#">Buku</a></li>
					<li><a href="#">Podcast</a></li>
					<li><a href="#">Ruang Obrolan</a></li>
					<div class="search">
					<div class="profile-icon">

					</div>
					<input type="text" id="search-input" class="search-input" placeholder="Search...">
					<i id="search-button" class="fa fa-search" style="cursor:pointer;"></i>
				</div>
				<div class="profile-icon">
					<i class="fa fa-user"></i>
				</div>
				</ul>
			</nav>
		</div>
	</header>

	<section class="hero">
		<div class="container">
			<h1>Best Books to Read on a Rainy Day!</h1>
			<p>Find your next great read from our curated selection.</p>
		</div>
	</section>

	<section class="books-section">
		<div class="container">
			<h2>Featured Books</h2>
			<div class="books-container">
				<div class="book">
					<img src="Buku 1.png" alt="Book Cover 1">
					<h3>The Wheels of Chance</h3>
					<p>By H.G. Weles</p>
					<button class="button"><a href="https://zlibrary.to/filedownload/the-wheels-of-chance-1">Download</a></button>
				</div>
				<div class="book">
					<img src="buku 2.jpg" alt="Book Cover 2">
					<h3>That Liverpool Girl</h3>
					<p>By Ruth Hamilton</p>
					<button class="button"><a href="https://zlibrary.to/filedownload/that-liverpool-girl-0">Download</a><button>
				</div>
				<div class="book">
					<img src="buku 3.jpg" alt="Book Cover 3">
					<h3>Filosofi Teras</h3>
					<p>By DR.A. Setyo Wibowo</p>
					<button class="button"><a href="https://www.scribd.com/document/407689652/Filosofi-teras-pdf">Download</a></button>
				</div>
				<div class="book">
					<img src="buku 4.png" alt="Book Cover 4">
					<h3>Berani Tidak Disukai</h3>
					<p>By Ichiro Kishimi</p>
					<button  class="button"><a href="https://zlibrary.to/filedownload/the-wheels-of-chance-1">Download</a></button>
				</div>
				<div class="book">
					<img src="buku 5.jpeg" alt="Book Cover 5">
					<h3>Kamu Gak Sendiri</h3>
					<p>By Syahid Muhammad</p>
					<button class="button"><a href="https://gilispenpat.org/uploads/File-Buku/bSFkgT0a3jz7y9F0elLJH3SpsJUi9HBsxhequLP3.pdf">Download<a/></button>
				</div>
				<div class="book">
					<img src="Buku 6.jpg" alt="Book Cover 6">
					<h3>Mindset</h3>
					<p>By Carrol S.Dweck, Ph.D.</p>
					<button class="button"><a href="https://zlibrary.to/dl/mindset-4">Download</a></button>
				</div>

				<!-- Add more book items here -->
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="container">
			<div class="profile-icon">
			<div class="logo">YouthInsight</div>
			<p>Adalah sebuah website yang kami rancang untuk kamu yang sedang mencari motivasi dan semangat dalam menjalani hidup</p>
			<div class="social-links">
			<a href="#" class="social-link"><i class="fa fa-istagram"></i><a></a>
			</div>
			<p>&copy; 2024 YouthInsight</p>
			<div class="social-icons">
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
	</footer>
<script>
        document.getElementById('search-button').addEventListener('click', function() {
            var searchInput = document.getElementById('search-input').value.toLowerCase();
            var podcastCards = document.querySelectorAll('.podcast-card');

            podcastCards.forEach(function(card) {
                var title = card.querySelector('.podcast-title').textContent.toLowerCase();
                var description = card.querySelector('.podcast-description').textContent.toLowerCase();

                if (title.includes(searchInput) || description.includes(searchInput)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        document.getElementById('search-input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                document.getElementById('search-button').click();
            }
        });
    </script>
</body>
</html>
