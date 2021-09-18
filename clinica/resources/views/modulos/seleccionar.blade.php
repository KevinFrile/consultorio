@extends('plantilla')
@section ('contenido')

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<style>
    .cuadro-sombra:hover {

        transition: all 0.5s;
        transform: scale(1.02);
        -webkit-box-shadow: 0px 0px 25px -1px #757575;
        box-shadow: 0px 0px 25px -1px #757575;
    }

    .contenedor-atras {

        font-size: 1.4rem;
        padding: 1.6%;
    }

    .paddingx{

        padding-left: 8%;
        padding-right: 8%;
    }
    .atras{
        color: white;
        text-decoration: none;
    }
</style>


<div class="row" style="background-color:#152a41;">
    <div class="col-12 paddingx" >
        <div class="contenedor-atras">
            <a href="{{ url('/') }}" class="atras">ATRAS
            </a>
        </div>

    </div>
</div>

<h1 class="text-center mt-5">Seleccione como desea Ingresar:</h1>

<div class="row paddingx">
    <div class="col-lg-6 p-5 mx-auto">
        <div class="small-box cuadro-sombra" style="background-color:#8C48E3; color:white;">
            <div class="inner">
                <h3>Secretaria</h3>
                <p>Inicie Sesion</p>
            </div>
            <div class="icon">
                <i class="fa fa-female"></i>
            </div>
            <a href="Ingresar" class="small-box-footer">
                <h4>Ingresar <i class="fa fa-arrow-circle-right"></i></h4>
            </a>
        </div>
    </div>

    <div class="col-lg-6 p-5 mx-auto">
        <div class="small-box cuadro-sombra" style="background-color:#BDBDBD; color:white;">
            <div class="inner">
                <h3>Doctor</h3>
                <p>Inicie Sesion</p>
            </div>
            <div class="icon">
                <i class="fa fa-user-md"></i>
            </div>
            <a href="Ingresar" class="small-box-footer">
                <h4>Ingresar <i class="fa fa-arrow-circle-right"></i></h4>
            </a>
        </div>
    </div>

</div>
<div class="row paddingx">
    <div class="col-lg-6 p-5 mx-auto">
        <div class="small-box cuadro-sombra" style="background-color:#4856E3; color:white;">
            <div class="inner">
                <h3>Paciente</h3>
                <p>Inicie Sesion</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="Ingresar" class="small-box-footer">
                <h4>Ingresar <i class="fa fa-arrow-circle-right"></i></h4>
            </a>
        </div>
    </div>
    <div class="col-lg-6 p-5 mx-auto ">
        <div class="small-box cuadro-sombra" style="background-color:#48E3A1; color:white;">
            <div class="inner">
                <h3>Administrador</h3>
                <p>Inicie Sesion</p>
            </div>
            <div class="icon">
                <i class="fa fa-male"></i>
            </div>
            <a href="Ingresar" class="small-box-footer">
                <h4>Ingresar <i class="fa fa-arrow-circle-right"></i></h4>
            </a>
        </div>
    </div>
</div>

@endsection