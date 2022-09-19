<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    @if(isset($success))
    <h4>{{$success}}</h4>
    @endif

    <form method="POST" action="{{url('mahasiswa')}}" enctype="multipart/form-data">
        {{csrf_field() }}
        <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control" required>
            <label for="username">Username</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" required>
            <label for="password">Password</label>
        </div>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" required>
            <label for="email">Email</label>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Avatar</label>
            <input name="berkas" class="form-control" type="file" required accept=".jpg,.png">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
        </div>

        @if(isset($error))
        {{ $error }}
        @endif
    </form>
</body>

</html>