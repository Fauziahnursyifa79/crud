<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Module Manager
       </title>
       <script src="https://cdn.tailwindcss.com">
       </script>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href={{asset('bootstrap/css/bootstrap.min.css')}}>
</head>
<body>


   <!-- Main content -->
   <div class="flex-1 flex flex-col">
    <!-- Top bar -->
    <div class="bg-purple-700 p-4 flex justify-between items-center">
     <div class="text-white text-lg">
      CRUD Tambah Data Siswa
     </div>

    </div>

    <!-- Content -->
    <div class="p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
         <div class="flex justify-between items-center mb-4">
          <h2 class="text-xl font-semibold">
           Daftar Data Siswa
          </h2>
          <div class="container mt-4">
            <a href="{{ route('student_create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg mr-2" role="button"><i class="fas fa-plus">
            </i>
            Menambah Data Siswa</a>
            <a href="{{ route('hoby_index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg" role="button">Halaman Hobi</a>

            <div class="container mt-4" >
                <h1>Halaman Student</h1>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>School</th>
                                <th>Classroom</th>
                                <th>Gender</th>
                                <th>Date Of Birth</th>
                                <th>NO. HP</th>
                                <th>Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach($student as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->school }}</td>
                                    <td>{{ $item->classroom }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->date_of_birth }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>
                                        {{-- nah kalau delete lebih aman pakek <form> karena gk tau pokok katanya aman--}}
                                        <form action="{{ route('student_destroy', $item->id) }}" method="POST">
                                            {{-- menurut saya jika edit ini mending menggunakan tag <a> karena langsung ke raoute nya --}}
                                            <a href="{{ route('student_edit', $item->id) }}" class='btn btn-primary'>Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini!')" class='btn btn-danger'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
               </div>

            </div>
          </div>
         </div>











   <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
