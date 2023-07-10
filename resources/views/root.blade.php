<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
    
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <!-- Core CSS -->
        <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    
        <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
        <script src="../assets/vendor/js/helpers.js"></script>
        <script src="../assets/js/config.js"></script>
       
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        @spladeHead
        
        <style>
            #loading {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #3498DB;
     }
        .loading-text {
            font-size: 30px;
            color: white;
            }
        </style>
        
    </head>
    <body >
        <div id="loading">
            <img src="{{ asset('assets/svg-loaders/three-dots.svg')}}" class="loading-text" >
            <br>

         
            <span class="loading-text" ">กำลังโหลด...</span>
        </div>

        <div id="content" style="display: none;">
        <style>
            * {
                font-family: 'Prompt', sans-serif;
                font-weight: 500;
            }
            
        </style>
        @splade
    </div>
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                document.getElementById('content').style.display = 'block';
                document.getElementById('loading').style.display = 'none';
            }, 2000); // หน่วงเวลา 3 วินาที (3000 มิลลิวินาที)
        });
    </script>
    </body>
</html>
