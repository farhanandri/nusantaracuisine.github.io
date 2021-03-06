<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nusantara Cuisine</title>
    <!--Ini adalah Menu Sesudah Login-->
</head>
<body>
    <header>
        <a href="indexLogin.php" class="logo">Nusantara<br>Cuisine<span>.</span></a>
        <ul class="navigation">
            <li><a href="#home">Utama</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#recipe">Resep</a></li>
            <li><a href="#creators">Pembuat</a></li>
            <li><a href="index.html">Logout</a></li>
        </ul>
    </header>

    <menu class="home" id="home">
        <div class="content">
            <h2>Mudah dan Enak</h2>
            <P>Silakan buat makanan nusantara kesukaan anda, berbagai macam resep tersedia. Mari bergabung dan bagikan resep masakan anda dengan yang lainnya.</P>
        </div>
    </menu>

    <menu class="about" id="about">
        <div class="row">
            <div class="aboutText">
                <h2 class="titleText"><span>T</span>entang Kami</h2>
                <p>
                    Indonesia mempunyai banyak kekayaan alam yang berlimpah untuk kehidupan manusia, termasuk banyaknya rempah-rempah, bahan makanan dari tumbuhan dan hewani. Maka, dengan kreatif terciptalah bervariasi masakan. Enak, bermanfaat bagi tubuh, dan sesuai selera. 
                    <br>
                    <br>
                    Masakan Indonesia merupakan salah satu tradisi kuliner yang paling kaya di dunia, dan penuh dengan cita rasa yang kuat. Kekayaan jenis masakannya merupakan cermin keberagaman budaya dan tradisi Nusantara. Kebanyakan seluruh masakan Indonesia kaya dengan bumbu berasal dari rempah-rempah seperti kemiri, cabai, temu kunci, lengkuas, jahe, kencur, kunyit, kelapa dan gula aren dengan diikuti penggunaan teknik-teknik memasak menurut bahan. Untuk memporoleh masakan itu, dibutuhkan keahlian dan bahan yang cocok.
                    <br>
                    <br>
                    Nusantara Cuisine, disini kita bisa membagikan rasa, resep masakan, keahlian anda untuk teman-teman yang lainnya, dan melihat resep yang telah dibagikan dari rekan kita.
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </p>
            </div>
            <div class="aboutText">
                <div class="imgBx">
                    <img src="img/aboutUs.jpg" alt="">
                </div>
            </div>
        </div>
    </menu>

    <menu class="recipe" id="recipe">
        <div class="title">
            <h2 class="titleText">Macam-Macam <span>R</span>esep</h2>
            <p>Jelajahi masakan khas nusantara disini...</p>
        </div>

        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a href="detailNasiGoreng.html">
                    <img src="img/recipe1.jpg" alt="Foto Nasi Goreng"></a>
                </div>
                <div class="text">
                    <h3>Nasi Goreng</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <a href="detailGudeg.html">
                    <img src="img/recipe2.jpg" alt="Foto Gudeg"></a>
                </div>
                <div class="text">
                    <h3>Gudeg</h3>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <a href="detailSotoBanjar.html">
                    <img src="img/recipe3.png" alt="Soto Banjar"></a>
                </div>
                <div class="text">
                    <h3>Soto Banjar</h3>
                </div>
            </div>

            <div class="title">
                <a href="listResepLogin.html" class="btn">Lihat Semua</a>
            </div>
        </div>
    </menu>

        <menu class="creators" id="creators">
        <div class="title black">
            <h2 class="titleText">Pembuat <span>N</span>usantara Cuisine</h2>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="img/profilePicture.png">
            </div>
            <div class="text">
                <h3>Achmad Rafiq</h3>
            </div>
        </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/profilePicture.png">
            </div>
            <div class="text">
                <h3>Farhan Andrianca Sany</h3>
            </div>
        </div>
            <div class="box">
                <div class="imgBx">
                    <img src="img/profilePicture.png">
            </div>
            <div class="text">
                <h3>Habib Saputra</h3>
            </div>
        </div>
        </div>
    </menu>

    <div class="madeByText">
        <p>Made By <span>C6</span> Team.</p>
    </div>

    <script type="text/javascript" src="scroll.js"></script>

</body>
</html>