<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        .table-striped tbody tr.baris-baru {
            background-color: #000000 !important;
        }
        .baris-baru td {
            background-color: #000000 !important;
            color: #ffffff !important;
            border-color: #333333 !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="https://uinsu.ac.id/wp-content/uploads/2022/08/Logo-UIN-SU-Medan-PNG-1.png" alt="Logo UIN" height="40" class="me-2">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mahasiswa</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="mb-4">Halaman Mahasiswa</h1>
        
        <div class="row">
            <!-- Tabel di kiri -->
            <div class="col-md-6">
                <h3>Data Mahasiswa</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tabelMahasiswa">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Alamat</th>
                                <th>Prodi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data akan muncul di sini -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form di kanan -->
            <div class="col-md-6">
                <h3>Tambah Mahasiswa</h3>
                <form id="formMahasiswa">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <input type="text" class="form-control" id="prodi" placeholder="Masukkan program studi" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Tambah Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let nomor = 1;

        document.getElementById('formMahasiswa').addEventListener('submit', function(e){
            e.preventDefault(); // Supaya ga reload page

            // Ambil value dari form
            const nama = document.getElementById('nama').value;
            const nim = document.getElementById('nim').value;
            const alamat = document.getElementById('alamat').value;
            const prodi = document.getElementById('prodi').value;

            // Masukkan data ke tabel
            const tabel = document.querySelector('#tabelMahasiswa tbody');
            const baris = document.createElement('tr');
            baris.className = 'baris-baru'; // Tambahkan class untuk styling
            baris.innerHTML = `
                <td>${nomor++}</td>
                <td>${nama}</td>
                <td>${nim}</td>
                <td>${alamat}</td>
                <td>${prodi}</td>
            `;
            tabel.appendChild(baris);

            // Reset form
            this.reset();
            
            // Focus ke input nama untuk input berikutnya
            document.getElementById('nama').focus();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz4YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>