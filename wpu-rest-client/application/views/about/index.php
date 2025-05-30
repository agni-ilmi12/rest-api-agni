<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About My Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #021B34, #053F5E);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px;
        }

        /* Section Title */
        h2 {
            text-align: center;
            color: #00bcd4;
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        /* Portfolio Cards */
        .portfolio {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            margin: 0;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 5px solid #00bcd4;
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-body {
            padding: 20px;
            text-align: center;
            color: #bbb;
        }

        .card-body h5 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 15px;
        }

        .card-body p {
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .card-body .badge {
            background-color: #00bcd4;
            color: white;
            padding: 5px 10px;
            border-radius: 25px;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        /* See Project Link */
        .card-body .see-detail {
            text-decoration: none;
            color: #00bcd4;
            font-weight: bold;
            font-size: 1.1rem;
            position: relative;
            display: inline-block;
            margin-top: 10px;
        }

        .card-body .see-detail::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #00bcd4;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .card-body .see-detail:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .card-body .see-detail:hover {
            color: #00ffcc;
        }

        /* Hover Effects */
        .card:hover .see-detail {
            color: #00bcd4;
        }

        /* Alert for no data */
        .alert-danger {
            background-color: #ff416c;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            font-size: 1rem;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .portfolio {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }

            h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>About My Project</h2>

        <!-- Portfolio Section -->
        <section class="portfolio" id="portfolio">
            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/1.png" alt="JSON">
                <div class="card-body">
                    <h5>JSON</h5>
                    <p>Latihan API menggunakan file JSON.</p>
                    <a href="<?= base_url(); ?>../VIDEO 3/latihan1.php" class="see-detail">See Project</a>
                    <span class="badge">JSON</span>
                </div>
            </div>

            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/2.png" alt="WPU-HUT">
                <div class="card-body">
                    <h5>WPU-HUT</h5>
                    <p>Latihan API menggunakan file JSON berbasis website.</p>
                    <a href="<?= base_url(); ?>../VIDEO 4/wpu-hut/latihan2.html" class="see-detail">See Project</a>
                    <span class="badge">API</span>
                </div>
            </div>

            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/3.png" alt="Agni-MOVIE">
                <div class="card-body">
                    <h5>Agni-MOVIE</h5>
                    <p>Latihan API menggunakan Public API OMDb API berbasis website.</p>
                    <a href="<?= base_url(); ?>../VIDEO 5/index.html" class="see-detail">See Project</a>
                    <span class="badge">API</span>
                </div>
            </div>

            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/4.png" alt="Agni-PORTFOLIO">
                <div class="card-body">
                    <h5>Agni-PORTFOLIO</h5>
                    <p>Latihan API menggunakan Public API Youtube dan Instagram menggunakan cURL berbasis website.</p>
                    <a href="<?= base_url(); ?>../VIDEO 6/index.php" class="see-detail">See Project</a>
                    <span class="badge">cURL</span>
                </div>
            </div>

            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/5.png" alt="Agni-REST-SERVER">
                <div class="card-body">
                    <h5>Agni-REST-SERVER</h5>
                    <p>Membuat Rest Server menggunakan framework CodeIgniter3.</p>
                    <a href="<?= base_url(); ?>../VIDEO7/" class="see-detail">See Project</a>
                    <span class="badge">CI3</span>
                </div>
            </div>

            <div class="card">
                <img src="<?= base_url(); ?>assets/img/thumbs/6.png" alt="Agni-REST-CLIENT">
                <div class="card-body">
                    <h5>Agni-REST-CLIENT</h5>
                    <p>Membuat Rest Client menggunakan framework CodeIgniter3.</p>
                    <a href="<?= base_url(); ?>home" class="see-detail">See Project</a>
                    <span class="badge">CI3</span>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
