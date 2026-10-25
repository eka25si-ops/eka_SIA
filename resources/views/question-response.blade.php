<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Terima Kasih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body text-center">
                <h2 class="text-primary">Terima Kasih, {{ $nama }}! 🎉</h2>
                <p class="text-muted">Pertanyaan Anda telah berhasil dikirim.</p>

                <div class="border-start border-primary border-4 bg-light p-3 my-3">
                    <strong>Pertanyaan Anda:</strong><br>
                    "{{ $pertanyaan }}"
                </div>

                <p class="fst-italic">
                    Pertanyaan Anda akan kami balas melalui email <strong>{{ $email }}</strong>.
                </p>

                <a href="{{ url('/home') }}" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>
