<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Diskusi - YouthInsight</title>
    <link rel="stylesheet" href="RDCSS.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>YouthInsight</h1>
            <nav class="nav">
                <ul>
                    <li><a href="#">Menu Utama</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Podcast</a></li>
                    <li><a href="#">Buku</a></li>
                    <li><a href="#">Ruang Obrolan</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <aside class="sidebar">
                <div class="search-box">
                    <input type="text" id="search-input" placeholder="Cari atau mulai chat baru">
                    <button id="search-button"><img src="iconscr.png" alt="Search"></button>
                    <button id="add-group-button">+</button>
                </div>
                <div class="chat-list" id="chat-list">
                    <div class="chat-item" data-group="Pendengar Podcast" onclick="openChat('Pendengar Podcast')">
                        <p class="chat-name">Pendengar Podcast</p>
                        <p>Punya waktu seb...</p>
                    </div>
                    <div class="chat-item" data-group="Pencinta Buku" onclick="openChat('Pencinta Buku')">
                        <p class="chat-name">Pencinta Buku</p>
                        <p>Besok ada rapat...</p>
                    </div>
                    <div class="chat-item" data-group="Vidio" onclick="openChat('Vidio')">
                        <p class="chat-name">Vidio</p>
                        <p>Kapan kita bertemu...</p>
                    </div>                    
                </div>
            </aside>
            <section class="chat-section">
                <div class="chat-header">
                    <h2>Pendengar Podcast</h2>
                </div>
                <div class="chat-box" id="chat-box">
                    <div class="message received">
                        <p>Tugas kita udah apa belum?</p>
                        <span>Kemarin</span>
                    </div>
                    <div class="message sent">
                        <p>Belum, ini lagi edit Figma...</p>
                        <span>Kemarin</span>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" id="message-input" placeholder="Ketik pesan...">
                    <button id="send-button">Kirim</button>
                </div>
            </section>
        </main>
        <footer class="footer">
            <p>Adalah sebuah website yang kami rancang untuk kamu yang sedang mencari motivasi dan semangat dalam menjalani hidup.</p>
            <p>&copy; 2024 YouthInsight. All rights reserved.</p>
        </footer>
    </div>
    <script src="RDJAVA.js"></script>
</body>
</html>
