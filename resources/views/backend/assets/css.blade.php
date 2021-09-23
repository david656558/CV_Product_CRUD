<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{asset('Backend/Assets/dist/img/user2-160x160.jpg')}}" type="image/png">

<link rel="stylesheet" href="{{asset('Backend/assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
<!-- iCheck -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- JQVMap -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/jqvmap/jqvmap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('Backend/assets/dist/css/adminlte.min.css')}}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/daterangepicker/daterangepicker.css')}}">
<!-- summernote -->
{{--<link rel="stylesheet" href="{{asset('Backend/assets/plugins/summernote/summernote-bs4.css')}}">--}}
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">

<link rel="stylesheet" href="{{asset('Backend/assets/css/css.css')}}">



<!-- Select2 -->
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('Backend/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">


<style>
    .popik{
        position: absolute;
        right: 27%;
        width: 50%;
        top: -150px;
        margin-top: 20vh;
        z-index: 999999999999999;
    }
    .popik-back{
        display: none;

    }
    .delete-active-pop {
        display: block;
    }
    .delpopup-bacground{
        width: 100%;
        height: 100vh;
        background: #000000a6;
        top: 0;
        left: 0;
        z-index: 999999999;
        position: fixed;
    }
    .modal-title{
        padding-top: 23px;
        justify-content: center;
    }
    .icon-popup-delete{
        zoom: 5;
        color: #910404;
        margin: 0 auto;
        display: table;
    }
    .close-x{
        margin: 30px;
    }
    .modal-content{
        border-radius: 56px;
        height: 100%;
        width: 85%;
        margin: 0 auto;
        background: aliceblue;
    }
    .modal-footer{
        justify-content: center
    }
    .modal-footer button{
        width: 45%;
        border-radius: 69px;
    }
</style>
