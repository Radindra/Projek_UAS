@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    
    
        <div class="container">
            
            <div class="row">
                <div class="col-2">
                    <center>
                        <h1 >Selamat datang di website Bu Sapto</h1>
                        <h3 >" A little place for those who are far from home" </h3>
                    <a href="/about" class="btn">Pesan Kost &#8594;</a>
                </div>
            </div>
            <center>
                <div class="col-2">
                    <img src="{{ asset('img/kost1.jpg') }}">
                </div> 
        </div>
        <div class="container">
            
                <div class="row">
                    <div class="col-2">
                        <center>
                        <h1>About Us</h1>
                        <small>Kost Bu Sapto<br>
                            kostbusapto@gmail.com<br>
                            0821321312432423<br></small>
                    </div>
                </div>
                <br>
            
        </div>
   

    

    <!-- javascript -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            }
            else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

</body>

</html>
    
    
@endsection