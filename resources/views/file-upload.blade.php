<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>File Upload</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form id="uploadForm" action="{{ url('/file-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="filename" class="form-label">Nama File</label>
                <input type="text" class="form-control" id="filename" name="filename" required>
                @error('filename')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="berkas" class="form-label">Gambar Profile</label>
                <input type="file" class="form-control" id="berkas" name="berkas" required>
                @error('berkas')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary my-2">Upload</button>
        </form>
        <div id="uploadResult" class="mt-3" style="display: none;">
            <h3>Uploaded Image:</h3>
            <p>Path: <span id="uploadedImagePath"></span></p>
            <p>URL: <a id="uploadedImageLink" href="#" target="_blank"></a></p>
            <img id="uploadedImage" src="" class="img-fluid mt-2" alt="Uploaded Image">
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#uploadForm').on('submit', function (e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: '{{ url('/file-upload') }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $('#uploadedImagePath').text(response.path);
                        $('#uploadedImageLink').attr('href', response.filePath).text(response.filePath);
                        $('#uploadedImage').attr('src', response.filePath);
                        $('#uploadResult').show();
                    },
                    error: function (xhr) {
                        var errors = xhr.responseJSON.errors;
                        if (errors) {
                            if (errors.filename) {
                                alert(errors.filename[0]);
                            }
                            if (errors.berkas) {
                                alert(errors.berkas[0]);
                            }
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
