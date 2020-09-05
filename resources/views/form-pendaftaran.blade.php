<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Siswa</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8">
                <h1>Form Pendaftaran</h1>
                <h2>SMK Taruna Bhakti Depok</h2>
                <form action="{{ url('/calonsiswa') }}" method="post" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="nis">Nomor PPDB</label>
                        <input class="form-control @error('noppdb') is-invalid @enderror" type="text" name="noppdb" id="noppdb" value="{{ old('noppdb') }}">
                        @error('noppdb')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Calon Siswa</label>
                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input class="form-control @error('asal_sekolah') is-invalid @enderror" type="text" name="asal_sekolah" id="asal_sekolah" value="{{ old('asal_sekolah') }}">
                        @error('asal_sekolah')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    <div class="form-group">
                        <label for="pilihan1">Pilihan Jurusan 1</label>
                        <select class="form-control @error('pilihan1') is-invalid @enderror" type="text" name="pilihan1" id="pilihan1">
                            <option value="{{ old('pilihan1') }}">{{ old('pilihan1') }}</option>
                            <option value="RPL">Rekayasa perangkat Lunak</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="MM">Multimedia</option>
                            <option value="TEI">Tekmik Elektronika Industri</option>
                            <option value="BC">Broadcasting</option>
                        </select>
                        @error('pilihan1')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pilihan2">Pilihan Jurusan 2</label>
                        <select class="form-control @error('pilihan2') is-invalid @enderror" type="text" name="pilihan2" id="pilihan2">
                            <option value="{{ old('pilihan2') }}">{{ old('pilihan2') }}</option>
                            <option value="RPL">Rekayasa perangkat Lunak</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="MM">Multimedia</option>
                            <option value="TEI">Tekmik Elektronika Industri</option>
                            <option value="BC">Broadcasting</option>
                        </select>
                        @error('pilihan2')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control @error('alamat') is-invalid @enderror" type="text" name="alamat" id="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nohp">No HP</label>
                        <input class="form-control @error('nohp') is-invalid @enderror" type="text" name="nohp" id="nohp" value="{{ old('nohp') }}">
                        @error('nohp')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit" class="mb-4">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>