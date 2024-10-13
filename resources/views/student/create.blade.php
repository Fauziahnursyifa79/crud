<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENT</title>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>

    <!-- Main content -->
   <div class="flex-1 flex flex-col">
    <!-- Top bar -->
    <div class="bg-purple-700 p-4 flex justify-between items-center">
     <div class="text-white text-lg">
      Form Tambah Data Siswa
     </div>

    </div>

    <div class="flex-1 p-6">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-4">Tambah Data Akta</h2>
            <div class="flex items-center mb-4">
                <div class="container mt-4"><a href="{{ route('student_index') }}" class="bg-red-500 text-white px-4 py-2 rounded mr-2"  role="button">Kembali</a></div>
            </div>

            <div class="grid grid-cols-1 gap-4">
            <div class="container mt-4">
                <h1>Form Tambah Data Siswa</h1>
                <form action="" method="post"></form>
                    <div >
                        <form class="responsive" action="{{ route('student_store') }}" method="POST">
                            @csrf
                            <div class="mt-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endif

                                {{-- name pada form sifatnya wajib --}}
                                <label for=""  class="form-label">Nama siswa</label>
                                <input type="text" class="form-control" id="name" name="name" >
                                <label for=""  class="form-label">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" >
                                <label for=""  class="form-label">Sekolah</label>
                                <input type="text" class="form-control" id="school" name="school" >
                                <label for=""  class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="classroom" name="classroom" >
                                <label for=""  class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="gender" name="gender" >
                                <label for=""  class="form-label">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" >
                                <label for=""  class="form-label">No. HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" >
                            <div class="mt-4">
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>









   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
