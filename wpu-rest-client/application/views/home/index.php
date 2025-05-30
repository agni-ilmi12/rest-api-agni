<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agni Ilmi Anaya - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #021B34, #053F5E);
            color: white;
            overflow-x: hidden;
        }

        /* Jumbotron (Hero Section) */
        .jumbotron {
            background: url('https://via.placeholder.com/1600x900.png?text=Tech+Background') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            color: white;
            z-index: 0;
            background-size: cover;
        }

        .jumbotron h1 {
            font-size: 4rem;
            font-weight: 500;
            letter-spacing: 2px;
            margin: 0;
        }

        .jumbotron h3 {
            font-size: 1.5rem;
            margin-top: 10px;
            letter-spacing: 1px;
        }

        .jumbotron .btn {
            padding: 12px 30px;
            margin-top: 30px;
            font-size: 16px;
            border: none;
            background-color: #00bcd4;
            color: white;
            cursor: pointer;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .jumbotron .btn:hover {
            background-color: #0097a7;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        /* Portfolio Section */
        .portfolio {
            padding: 50px 0;
        }

        .portfolio h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
            color: #00bcd4;
        }

        .portfolio .card {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
            margin: 20px 0;
        }

        .portfolio .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .portfolio .card-body {
            padding: 20px;
        }

        .portfolio .card img {
            border-radius: 15px 15px 0 0;
            width: 100%;
            object-fit: cover;
        }

        .portfolio .card-text {
            font-size: 1rem;
            color: #bbb;
        }

        /* Contact Section */
        .contact {
            padding: 50px 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .contact h2 {
            margin-bottom: 40px;
            text-align: center;
            color: #00bcd4;
        }

        .contact .card {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background-color: rgb(255, 255, 255);
            border: none;
            border-radius: 10px;
            color: #fff;
            font-size: 1rem;
        }

        .contact-form button {
            padding: 15px 30px;
            font-size: 1.2rem;
            background-color: #00bcd4;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #0097a7;
            transition: 0.3s;
        }

        /* Footer */
        footer {
            background-color: #021B34;
            color: #bbb;
            text-align: center;
            padding: 20px;
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <!-- Hero Section (Jumbotron) -->
    <div class="jumbotron" id="home">
        <div class="container">
            <div class="text-center">
                <img src="<?= base_url(); ?>assets/img/agni.jpeg" class="rounded-circle img-thumbnail" style="max-width: 200px;">
                <h1 class="display-4">Agni Ilmi Anaya</h1>
                <h3 class="lead">Mahasiswa | Traveller | Gamer</h3>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2>About Me</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/solok.jpg" alt="Solok">
                        <div class="card-body">
                            <p class="card-text">Lahir pada tanggal 17 Desember 2003 di Kota Solok.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/mts.jpg" alt="MTs">
                        <div class="card-body">
                            <p class="card-text">Pernah menempuh pendidikan di SDN 01 Talang dan MTsN 2 Solok.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/man.jpg" alt="MAN Bukittinggi">
                        <div class="card-body">
                            <p class="card-text">Selanjutnya menempuh pendidikan di MAN 1 Kota Bukittinggi jurusan IPA.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/4.jpg" alt="UIN Imam Bonjol">
                        <div class="card-body">
                            <p class="card-text">Saat ini sedang menempuh pendidikan di UIN Imam Bonjol Padang pada tahun 2022.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/saintek.jpeg" alt="Sains dan Teknologi">
                        <div class="card-body">
                            <p class="card-text">Fakultas Sains dan Teknologi jurusan Sistem Informasi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/basket1.jpeg" alt="Basketball">
                        <div class="card-body">
                            <p class="card-text">Juara 1 Basketball Tim Putri pada PKMU tahun 2024 dan meraih Juara 2 pada tahun ini.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <h5 class="card-title">Contact Me</h5>
                        <p class="card-text">Feel free to reach out to me for any queries or just to chat!</p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact-form">
                        <form>
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Your Email" required>
                            <input type="text" placeholder="Phone Number" required>
                            <textarea placeholder="Your Message" rows="4" required></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Agni Ilmi Anaya. All rights reserved.</p>
    </footer>

</body>
</html>
