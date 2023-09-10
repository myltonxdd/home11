<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Practica 11 Image Upload</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div>
        <h1>Practica 11</h1>
        <div>
            <h3>Milton Procel</h3>
        </div>
        <div style="border: 5px">
            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Imagen </label>
                    <input type="file" name="image[]" class="form-control @error('image.*') is-invalid @enderror" multiple>
 
                    @error('image.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
            <hr>
            @if($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @foreach(\Session::get('image') as $imgs)
                    <img src="images/{{ $imgs }}">
                @endforeach
            @endif
        </div>
    </div>
</div>
</body>
</html>