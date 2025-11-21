<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM BUKU</b>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" id="formBuku" action="proses_tambah.php" method="POST" enctype="multipart/form-data" novalidate>

    <div class="mb-3">
        <label class="form-label">Judul Buku</label>
        <input name="judul_buku" type="text" class="form-control" required>
        <div class="invalid-feedback">
            Maaf, Judul Buku tidak boleh kosong!
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Pengarang</label>
        <input name="pengarang" type="text" class="form-control" required>
        <div class="invalid-feedback">
            Maaf, Pengarang tidak boleh kosong!
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Tahun Terbit</label>
        <input name="tahun_terbit" type="text" class="form-control" maxlength="4" required pattern="^[0-9]{1,4}$">
        <div class="invalid-feedback">
            Tahun terbit harus berupa angka dan maksimal 4 digit!
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input name="kategori" type="text" class="form-control" required>
        <div class="invalid-feedback">
            Maaf, Kategori tidak boleh kosong!
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    const judul = document.getElementsByName("judul_buku")[0];
    const pengarang = document.getElementsByName("pengarang")[0];
    const tahun = document.getElementsByName("tahun_terbit")[0];
    const kategori = document.getElementsByName("kategori")[0];

    // --- Validasi saat fokus ke field Pengarang ---
    pengarang.addEventListener("focus", function () {
        if (judul.value.trim() === "") {
            pengarang.blur();
            judul.focus();
            judul.classList.add("is-invalid");
        }
    });

    // --- Validasi saat fokus ke field Tahun Terbit ---
    tahun.addEventListener("focus", function () {
        if (pengarang.value.trim() === "") {
            tahun.blur();
            pengarang.focus();
            pengarang.classList.add("is-invalid");
        }
    });

    // --- Validasi saat fokus ke field Kategori ---
    kategori.addEventListener("focus", function () {
        if (!/^\d{1,4}$/.test(tahun.value.trim())) {
            kategori.blur();
            tahun.focus();
            tahun.classList.add("is-invalid");
        }
    });

    // --- Hilangkan error kalau input valid ---
    document.querySelectorAll("input").forEach(input => {
        input.addEventListener("input", function () {
            if (input.value.trim() !== "") {
                input.classList.remove("is-invalid");
            }
        });
    });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
