<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #021B34;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            padding: 50px;
        }

        /* Flash message */
        .flash-data {
            display: none;
        }

        /* Heading */
        h3 {
            font-size: 2rem;
            color: #00bcd4;
            margin-bottom: 20px;
        }

        /* Add Button */
        .btn-primary {
            background-color: #00bcd4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0097a7;
        }

        /* List Group (Mahasiswa List) */
        .list-group {
            list-style-type: none;
            padding: 0;
        }

        .list-group-item {
            background-color: #1e2a38;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .list-group-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        /* Badge Buttons */
        .badge {
            padding: 10px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .badge-danger {
            background-color: #ff416c;
            color: white;
        }

        .badge-success {
            background-color: #4caf50;
            color: white;
        }

        .badge-primary {
            background-color: #00bcd4;
            color: white;
        }

        .badge:hover {
            transform: scale(1.05);
        }

        .badge-danger:hover {
            background-color: #ff2a50;
        }

        .badge-success:hover {
            background-color: #45a049;
        }

        .badge-primary:hover {
            background-color: #0097a7;
        }

        /* Alert for no data */
        .alert-danger {
            background-color: #ffeb3b;
            color: #000;
            padding: 20px;
            border-radius: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Toast Notification (Flash Message) */
        .alert-toast {
            display: none;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #00bcd4;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.5s ease, top 0.5s ease;
        }

        .alert-toast.show {
            display: block;
            opacity: 1;
            top: 40px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Flash message -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

        <!-- Toast Notification for Flash Message -->
        <div class="alert-toast" id="toast-message">
            <?= $this->session->flashdata('flash'); ?>
        </div>

        <!-- Button to Add Data -->
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
            </div>
        </div>

        <!-- Daftar Mahasiswa -->
        <div class="row">
            <div class="col-md-12">
                <h3>Daftar Mahasiswa</h3>

                <?php if (empty($mahasiswa)) : ?>
                    <div class="alert-danger">
                        Data mahasiswa tidak ditemukan.
                    </div>
                <?php endif; ?>

                <ul class="list-group">
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <li class="list-group-item">
                            <div>
                                <?= $mhs['nama']; ?>
                            </div>
                            <div>
                                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>"
                                    class="badge badge-danger float-right tombol-hapus">Hapus</a>
                                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>"
                                    class="badge badge-success float-right">Ubah</a>
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>"
                                    class="badge badge-primary float-right">Detail</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Show toast notification for flash message
        document.addEventListener('DOMContentLoaded', function () {
            const flashMessage = document.querySelector('.flash-data').dataset.flashdata;
            const toastMessage = document.getElementById('toast-message');

            if (flashMessage) {
                toastMessage.classList.add('show');
                setTimeout(function () {
                    toastMessage.classList.remove('show');
                }, 3000);
            }
        });
    </script>

</body>

</html>
