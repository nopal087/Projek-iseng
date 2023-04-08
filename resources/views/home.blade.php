<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- datatables --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.4/datatables.min.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <!-- datatables script -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <!-- datatables bootstrap script -->
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>

    <!-- datatables style css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">


</head>

<body>
    <main class="m-top">
        @include('layouts.navbar')
    </main>

    <!--Main layout-->
    {{-- <main style="margin-top: 58px"> --}}
    <div class="container p-2 mt-5">
        <div class="container pt-5 p-5 mt-6">
            <div class="mb-2">
                <a href="/tambahdata"><button type="button" class="btn btn-primary" data-mdb-toggle="modal"
                        data-mdb-target="#staticBackdrop"><i class="fas fa-user fa-fw me-3"></i>Tambah</button></a>
            </div>
            <div class="table-responsive">
                <table class="table text-wrap mb-3 hover " id="myTable">
                    <thead>
                        <tr class="bg-light">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No.Telp</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="border">{{ $loop->iteration }}</td>
                                <td class="border">{{ $item->nama }}</td>
                                <td class="border">{{ $item->email }}</td>
                                <td class="border">{{ $item->nohp }}</td>
                                <td class="border">{{ $item->alamat }}</td>
                                @auth
                                    <td class="project-actions border">
                                        <a class="btn btn-info btn-sm" href="/editdata/{{ $item->id }}/edit">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <form action="/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash">
                                                    </i></button>
                                            </form>
                                        </div>

                                    </td>
                                @endauth
                                @guest

                                    <td class="project-actions border">
                                        <a class="btn btn-info btn-sm" href="/login">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                        </a>

                                        <a class="btn btn-danger btn-sm" href="/login">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>

                                    </td>
                                @endguest
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            </thead>
        </div>
        <div class="mt-5">
            @include('layouts.footer')
        </div>
        {{-- </main> --}}
        <!--Main layout-->
    </div>





</body>
<!-- create datatables -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>



</html>
