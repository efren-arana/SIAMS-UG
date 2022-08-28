@extends('base')

@section('title', 'Administracion Reglas de Asociación SIAMS')
@section('estilo')
<style>
    .mt-100{
    margin-top: 200px;
    }
    .progress {
    width: 150px;
    height: 150px !important;
    float: left; 
    line-height: 150px;
    background: none;
    margin: 20px;
    box-shadow: none;
    position: relative;
    }
    .progress:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
    }
    .progress>span {
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
    }
    .progress .progress-left {
    left: 0;
    }
    .progress .progress-bar {
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
    }
    .progress .progress-left .progress-bar {
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
    }
    .progress .progress-right {
    right: 0;
    }
    .progress .progress-right .progress-bar {
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
    }
    .progress .progress-value {
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #fff;
    font-size: 24px;
    color: black;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
    }
    .progress.blue .progress-bar {
    border-color: #049dff;
    }
    .progress.blue .progress-left .progress-bar {
    animation: loading-2 1.5s linear forwards 1.8s;
    }
    .progress.yellow .progress-bar {
    border-color: #fdba04;
    }
    .progress.yellow .progress-right .progress-bar {
    animation: loading-3 1.8s linear forwards;
    }
    .progress.yellow .progress-left .progress-bar {
    animation: none;
    }
    @keyframes loading-1 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
    }
    @keyframes loading-2 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
    }
    @keyframes loading-3 {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
    }
    }
</style>
@endsection
@section('content')
<div role="main">
    <center> <h3>Instancia SIAMS</h3> </center>
    <div class="container">
        <div class="card card-body">
            <div class="row">
                <div class="col-sm-5 col-12">
                    <div class="row">
                        <div class="col-sm-6 col-5" style="background: #E7E4E4;">
                            <h5>Procesador</h5>
                            <br>
                            <p id="procesador_text" style="color: black;"><b>Intel(R) Core(TM) i7-8550U CPU @1.80GHz</b></p>
                        </div>
                        <div class="col-sm-6 col-7" style="background: #E7E4E4;">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div id="procesador_value" class="progress-value">65%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5 col-12">
                    <div class="row" style="background: #E7E4E4;">
                        <div class="col-sm-6 col-5" style="background: #E7E4E4;">
                            <h5>Memoria</h5>
                            <br>
                            <p id="memoria_text" style="color: black;"><b>Memoria Fisica DDR4</b></p>
                        </div>
                        <div class="col-sm-6 col-7" style="background: #E7E4E4;">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div id="memoria_value" class="progress-value">10/20 GB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 10px;">
                <div class="col-sm-5 col-12">
                    <div class="row">
                        <div class="col-sm-6 col-5" style="background: #E7E4E4;">
                            <h5>Almacenamiento</h5>
                            <br>
                            <p id="storage_text" style="color: black;"><b>NVMe WDC PC SN530 SDB</b></p>
                        </div>
                        <div class="col-sm-6 col-7" style="background: #E7E4E4;">
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div id="storage_value" class="progress-value">20/39 GB</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 10px;">
                <table class="table table-responsive table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>
                            <th>ID</th>
                            <th>Estado</th>
                            <th>Zona</th>
                            <th>DNS</th>
                            <th>IP Elastica</th>
                            <th>Grupo Seguridad</th>
                            <th>Nombre Clave</th>
                            <th>S.O.</th>
                            <th>Tipo de instancia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>New SIAMS</td>
                            <td>i-06ca15a4a7667a850</td>
                            <td>EE.UU. Este (Ohio)</td>
                            <td>us-east-2a</td>
                            <td>ec2-18-119-105-222.us-east-2.compute.amazonaws.com</td>
                            <td>18.119.105.222</td>
                            <td>launch-wizard-10</td>
                            <td>AWS_Portal_SIAMS-UG</td>
                            <td> Red Hat Enterprise Linux (inferido)</td>
                            <td>t2.xlarge</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>

</div>
@endsection
@section('scripts')
<script>
    /* let url = '';
    let body = '';
    fetch(url, {
        method: 'post'
        body: data
    })
    .then(res => res.json())
    .then(res => {



    }) */

    /* let a = document.createElement('b')
    a.textContent = "Procesador celeron";
    document.getElementById('procesador_text').append(a);
    document.getElementById('procesador_value').textContent = "25%"

    let b = document.createElement('b')
    b.textContent = "sss celeron";
    document.getElementById('memoria_text').append(b);
    document.getElementById('memoria_value').textContent = "35%"

    let c = document.createElement('b')
    c.textContent = "storage celeron";
    document.getElementById('storage_text').append(c);
    document.getElementById('storage_value').textContent = "45%" */

</script>
@endsection
