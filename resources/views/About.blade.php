@extends('layouts.main')
@section('container')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="{{ url('sbadmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('sbadmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row"> 
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900">Pesan Kost</h1>
                                        <p>Isi form dengan sesuai</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="name" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Nama">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan E-mail">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Nomor Telepon">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Pilih jenjang pemesanan kost</label>
                                            <br>
                                            <select>
                                                <option value = "" >--Pilih--</option>
                                                <option value = "" >1 Bulan</option>
                                                <option value = "" >3 Bulan</option>
                                                <option value = "" >6 Bulan</option>
                                                <option value = "" >12 Bulan</option>
                                            </select>
                                        </div>
                                        <br>
                                        <center><a href="{{ url('/')}}" onclick="alert('Pesanan Sukses')" class="btn btn-primary btn-user btn-block">
                                            Pesan
                                        </a>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('sbadmin/js/sb-admin-2.min.js')}}"></script>

</body>

@endsection