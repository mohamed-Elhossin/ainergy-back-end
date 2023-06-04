<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ain-Admin-Panel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('dassets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/boxicons/css/boxicons.min.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/quill/quill.snow.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/quill/quill.bubble.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/remixicon/remixicon.css') }} " rel="stylesheet">
    <link href="{{ asset('dassets/vendor/simple-datatables/style.css') }} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('dassets/css/style.css') }} " rel="stylesheet">


</head>

<body>
