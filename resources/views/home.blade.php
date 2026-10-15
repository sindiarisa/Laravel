<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link Bootstrap wajib ada agar class "card", "form-control", dan "btn" berfungsi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    {{-- Kode Form Pertanyaan milikmu (TIDAK DIUBAH) --}}
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Form Pertanyaan</h5>

            <form action="{{ route('question.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea class="form-control" rows="4" name="pertanyaan" id="pertanyaan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>

</body>
</html>
