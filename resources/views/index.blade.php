<html>

<body>
    @if(isset($success))
    <h4>{{$success}}</h4>
    @endif

    <form method="POST" action="{{url('mahasiswa')}}" enctype="multipart/form-data">
        @csrf
        Username <input type="text" name="username" required><br>
        Password <input type="password" name="password" required><br>
        Email <input type="email" name="email" required><br>
        File <input type="file" name="berkas" required accept=".jpg,.png">
        <button type="submit">Simpan</button>

        @if(isset($error))
        {{ $error }}
        @endif

    </form>
</body>

</html>