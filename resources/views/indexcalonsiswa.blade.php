<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row mb-4 mt-4">
            <h2>Tabel Data Calon Siswa</h2>
        </div>
        @if(session()->has('pesanSuccess'))
            <div class="alert alert-success">{{ session()->get('pesanSuccess') }}</div>
        @endif
        @if(session()->has('pesanDanger'))
            <div class="alert alert-danger">{{ session()->get('pesanDanger') }}</div>
        @endif
        <table class="table table-bordered table-striped">
            <tr>
                <td>No</td>
                <td>No PPDB</td>
                <td>Nama Siswa</td>
                <td>Asal Sekolah</td>
                <td>Pilihan 1</td>
                <td>Pilihan 2</td>
                <td>Action</td>
            </tr>
            <tr>
                @forelse ($calonsiswa as $itemSiswa)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemSiswa->noppdb }}</td>
                <td>{{ $itemSiswa->nama }}</td>
                <td>{{ $itemSiswa->asal_sekolah }}</td>
                <td>{{ $itemSiswa->pilihan1 }}</td>
                <td>{{ $itemSiswa->pilihan2 }}</td>
                <td style="width:180px;">
                    <a href="/calonsiswa/{{ $itemSiswa -> id }}" class="btn btn-success" style="padding:5px;">Lihat</a>
                    <a href="/editsiswa/{{ $itemSiswa -> id }}" class="btn btn-warning" style="padding:5px;">Edit</a>
                    <a href="/hapussiswa/{{ $itemSiswa -> id }}"  class="btn btn-danger" style="padding:5px;">Hapus</a>
                </td>
            </tr>
            @empty

            @endforelse

        </table>
        <form action="{{ url('/calonsiswa/create') }}">
            <button class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>