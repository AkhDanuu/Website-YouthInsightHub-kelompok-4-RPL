<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouthInsight</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #5BCCFA;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }
        .logo {
            font-weight: bold;
            font-size: 24px;
        }
        .nav-links {
            display: flex;
            gap: 15px;
        }
        .nav-link {
            color: #ffffff;
            text-decoration: none;
        }
        .search {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .search-input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .profile-icon {
            cursor: pointer;
        }
        main {
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }
        .podcast-card {
            width: calc(20% - 10px); /* Mengurangi lebar kartu podcast */
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px; /* Mengurangi padding */
            position: relative;
        }
        .podcast-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .podcast-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        .podcast-description {
            font-size: 14px;
            color: #666;
        }
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .pagination-item {
            background-color: #ccc;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .pagination-item.active {
            background-color: #333;
            color: #fff;
        }
        .call-to-action {
            background-color: #333;
            color: #fff;
            padding: 15px 30px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            margin-top: 20px;
        }
        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }
        .social-link {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#"><img src="logo.png" alt="Featured Podcast" height="25px" width="150px"></a>
            <div class="nav-links">
                <a href="#" class="nav-link">MENU UTAMA</a>
                <a href="#" class="nav-link">VIDEO</a>
                <a href="#" class="nav-link">PODCAST</a>
                <a href="#" class="nav-link">BUKU</a>
                <a href="#" class="nav-link">RUANG OROLAN</a>
            </div>
            <div class="search">
                <input type="text" id="search-input" class="search-input" placeholder="Search...">
                <i id="search-button" class="fa fa-search" style="cursor:pointer;"></i>
            </div>
            <div class="profile-icon">
                <i class="fa fa-user"></i>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
            <div class="podcast-card">
                <a href="https://open.spotify.com/episode/2VvxwzoBG3JfUyAqVhYoEP?si=66f6b5ac024a4e6c"><img src="Screenshot 2024-06-11 165839.png" alt="The Rich Roll Podcast"></a>
                <div class="podcast-title">The Rich Roll Podcast</div>    
                <div class="podcast-description">Rich Roll</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/6NyPQfcSR9nj0DPDr2ixrK?si=7caf4be669764028"><img src="Screenshot 2024-06-12 092534.png" alt="Feel Better, Live More"></a>
                <div class="podcast-title">Feel Better, Live More</div>
                <div class="podcast-description">Dr. Ranger Chatterbox</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/5vHokTsTmdlLBs1uPgDGN6?si=efbc0724131e43c3"><img src="5MTK5XkK_400x400.jpg" alt="Rintik Sedu"></a>
                <div class="podcast-title">Rintik Sedu</div>
                <div class="podcast-description">Nadhifa Allya Tsana</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/4aaPEBPStq54YaWxYsng5g?si=a8e16688216541f4"><img src="ss3.png" alt="Convicted Life"></a>
                <div class="podcast-title">Convicted Life</div>
                <div class="podcast-description">Zach Babcock and Travis Riskey</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/7fY99FB3bNyn7nEdXCoBeB?si=515f126c8fa0407b"><img src="ss4.png" alt="The Daily Stoic"></a>
                <div class="podcast-title">The Daily Stoic</div>
                <div class="podcast-description">Ryan Holiday</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/5qSUyCrk9KR69lEiXbjwXM?si=6d699fcf13224a4b"><img src="ss5.png" alt="The Tim Ferriss Show"></a>
                <div class="podcast-title">The Tim Ferriss Show</div>
                <div class="podcast-description">Tim Ferriss Bestselling Author, Human Guinea Pig</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/7vRGphUOaEtbpc1DhPZWDK?si=e6bf927972164f95"><img src="ss6.png" alt="Pengembangan Diri"></a>
                <div class="podcast-title">Pengembangan Diri</div>
                <div class="podcast-description">Andres Bardes x baxxx</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/0bsNqVK9FN1Y6kKZHvMQqa?si=a93aea38f2a24b63"><img src="ss7.png" alt="Hanan Attaki"></a>
                <div class="podcast-title">Hanan Attaki</div>
                <div class="podcast-description">Hanan Attaki</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/07GQhOZboEZOE1ysnFLipT?si=62e8b3aff4e54e9f"><img src="ss8.png" alt="The School of Greatness"></a>
                <div class="podcast-title">The School of Greatness</div>
                <div class="podcast-description">Lewis Howes</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/79CkJF3UJTHFV8Dse3Oy0P?si=d102b3dc012c4703"><img src="ss9.png" alt="Huberman Lab"></a>
                <div class="podcast-title">Huberman Lab</div>
                <div class="podcast-description">Siciconm Media</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/7BQZHMsYPInemu2GMVSYNH?si=b19ae7ec40f44613"><img src="ss10.png" alt="Kwik Brain with Jim Kwik"></a>
                <div class="podcast-title">Kwik Brain with Jim Kwik</div>
                <div class="podcast-description">Jim Kwik</div>
            </div>
            <div class="podcast-card">
                <a href="https://open.spotify.com/show/1PGN4ilb4aoWKkB7FNSLsx?si=89099885fcb54e83"><img src="ss11.png" alt="The Friday Podcast"></a>
                <div class="podcast-title">The Friday Podcast</div>
                <div class="podcast-description">Makna Talks</div>
            </div>
        </section>
        <div class="pagination">
            <div class="pagination-item active">1</div>
            <div class="pagination-item">2</div>
            <div class="pagination-item">3</div>
        </div>
        <a href="#" class="call-to-action">Explore More Podcasts</a>
    </main>
    <footer>
        <div class="logo">YouthInsight</div>
        <p>Adalah sebuah website yang kami rancang untuk kamu yang sedang mencari motivasi dan semangat dalam menjalani hidup</p>
        <div class="social-links">
            <a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="social-link"><i class="fa fa-twitter"></i></a>
        </div>
        <p>&copy; 2024 YouthInsight</p>
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
