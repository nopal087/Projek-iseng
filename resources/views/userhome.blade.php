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

<style>
    .carousel-item img {
        /* max-height: 250px; */
        width: 1208px;
        height: 302px;
        object-fit: contain;
    }

    @media (max-width: 767px) {
        .carousel-item img {
            width: 100%;
            height: auto;
        }
    }
</style>

<body>
    <main class="m-top">
        @include('layouts.navbar')
    </main>

    @include('kategori')
    <div class="mt-5">
        @include('layouts.footer')
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
