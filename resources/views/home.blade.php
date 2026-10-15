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
