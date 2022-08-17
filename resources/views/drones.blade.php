@extends('base')

@section('title', 'Administracion Reglas de Asociación SIAMS')
@section('estilo')
<style>
   
   .checkout-wrap {
  color: #444;
  margin: 40px auto;
  max-width: 890px;
  position: relative;
}

ul.checkout-bar {
  margin: 0 20px;
}
ul.checkout-bar li {
  color: #ccc;
  display: block;
  font-size: 13px;
  padding: 14px 20px 14px 80px;
  position: relative;
}
ul.checkout-bar li:before {
  background: #ddd;
  border: 2px solid #fff;
  border-radius: 50%;
  color: #fff;
  font-size: 16px;
  left: 20px;
  line-height: 37px;
  height: 35px;
  position: absolute;
  text-align: center;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  top: 4px;
  width: 35px;
  z-index: 999;
}
ul.checkout-bar li.active {
  color: #8bc53f;
  font-weight: bold;
}
ul.checkout-bar li.active:before {
  background: #8bc53f;
  z-index: 99999;
}
ul.checkout-bar li.visited {
  background: #ececec;
  color: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li.visited:before {
  background: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li:nth-child(1):before {
  content: "1";
}
ul.checkout-bar li:nth-child(2):before {
  content: "2";
}
ul.checkout-bar li:nth-child(3):before {
  content: "3";
}
ul.checkout-bar li:nth-child(4):before {
  content: "4";
}
ul.checkout-bar li:nth-child(5):before {
  content: "5";
}
ul.checkout-bar li:nth-child(6):before {
  content: "6";
}
ul.checkout-bar a {
  color: #57aed1;
  font-size: 13px;
}

@media all and (min-width: 800px) {
  .checkout-bar li.active:after {
    background-color: #8bc53f;
    content: "";
    height: 15px;
    width: 100%;
    left: 50%;
    position: absolute;
    top: -50px;
    z-index: 0;
  }

  .checkout-wrap {
    margin: 80px auto;
  }

  ul.checkout-bar {
    background-color: #ececec;
    border-radius: 15px;
    height: 15px;
    margin: 0 auto;
    padding: 0;
    position: absolute;
    width: 100%;
  }
  ul.checkout-bar:before {
    background-color: #57aed1;
    border-radius: 15px;
    content: " ";
    height: 15px;
    left: 0;
    position: absolute;
    width: 10%;
  }
  ul.checkout-bar li {
    display: inline-block;
    margin: 50px 0 0;
    padding: 0;
    text-align: center;
    width: 19%;
  }
  ul.checkout-bar li:before {
    height: 45px;
    left: 40%;
    line-height: 45px;
    position: absolute;
    top: -65px;
    width: 45px;
    z-index: 99;
  }
  ul.checkout-bar li.visited {
    background: none;
  }
  ul.checkout-bar li.visited:after {
    background-color: #57aed1;
    content: "";
    height: 15px;
    left: 50%;
    position: absolute;
    top: -50px;
    width: 100%;
    z-index: 99;
  }
}

 
</style>
@endsection
@section('content')
<div role="main">
    <center> <h3>Drones</h3> </center>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Descripción</h3>
            </div>
            <div class="card-body">
                <p style="color: black;">Este proyecto se enfoca en Recolección de Datos en Línea y fuera de línea, cuyos datos de georreferenciación e imágenes son analizados por algoritmos creados en Python para el procesamiento de imágenes y capturar fotogramas. Para almacenar la información recolectada bajo los procesos online u offline se hace uso de la plataforma de AWS (Amazon Web Services) alojando la información en una base de datos PostresSQL. Para la recolección de datos en línea se utiliza un servidor con el protocolo RTMP y para la recolección de datos fuera de línea se utiliza un proceso ad-hoc implementado en el servidor. A través de una plataforma web desarrollada en Java se realiza el proceso de recolección y administración de datos. </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Arquitectura Drones</h3>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <img style="width: 90%; height:auto;" src="{{asset('img/arquitectura/arquitectura_drones.png')}}" alt="arquitectura de los drones">
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Lista de verificación de los componentes</h3>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <div class="checkout-wrap">
                        <ul class="checkout-bar">
                      
                          <li class="visited first">
                            <a href="#">Instancia EC2</a>
                          </li>
                          
                          <li class="previous visited">Ngrix</li>
                          
                          <li class="active">protocolo RTMP</li>
                          
                          <li class="next">Base de datos</li>
                          
                          <li class="">Complete</li>
                             
                        </ul>
                    </div>
                </div>
                
                <br><br><br><br>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Datos de la instancia y ejecución de procesos</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-10 col-12">
                  <table class="table table-responsive table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre Instancia</th>
                            <th>Instancia ID</th>
                            <th>Estado</th>
                            <th>Zona</th>
                            <th>DNS</th>
                            <th>IP V4 Publica</th>
                            <th>Grupo Seguridad</th>
                            <th>S.O.</th>
                            <th>Nombre de Clave</th>
                            <th>Tipo de Instancia</th>
                            <th>Estado de la Instancia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SIAMS-Drones</td>
                            <td>i-0e99a42ea8fee6069</td>
                            <td>EE.UU. Este (Ohio)</td>
                            <td>us-east-2b</td>
                            <td>ec2-3-140-64-90.us-east-2.compute.amazonaws.com</td>
                            <td>3.140.64.90</td>
                            <td>launch-wizard-7</td>
                            <td>Debian (inferido)</td>
                            <td>Drones_SIAMS</td>
                            <td>t2.xlarge</td>
                            <td>Running/Stoped</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-sm-2 col-12">
                  <div class="row">
                    <div class="col-12"><button class="btn btn-warning" id="apagar">Apagar Instancia</button></div>
                    <div class="col-12"><button class="btn btn-warning" id="encender">Encender Instancia</button></div>
                  </div>
                </div>
              </div>
              
            </div>
        </div>
        <br>
        <div class="card card-body">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>
<br>

</div>
@endsection
@section('scripts')
    <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1,2,3,4,5,6,7],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        //prueba
        $(document).ready(function () {
    var currentGfgStep, nextGfgStep, previousGfgStep;
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
  
    setProgressBar(current);
  
    $(".next-step").click(function () {
  
        currentGfgStep = $(this).parent();
        nextGfgStep = $(this).parent().next();
  
        $("#progressbar li").eq($("fieldset")
            .index(nextGfgStep)).addClass("active");
  
        nextGfgStep.show();
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                nextGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(++current);
    });
  
    $(".previous-step").click(function () {
  
        currentGfgStep = $(this).parent();
        previousGfgStep = $(this).parent().prev();
  
        $("#progressbar li").eq($("fieldset")
            .index(currentGfgStep)).removeClass("active");
  
        previousGfgStep.show();
  
        currentGfgStep.animate({ opacity: 0 }, {
            step: function (now) {
                opacity = 1 - now;
  
                currentGfgStep.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previousGfgStep.css({ 'opacity': opacity });
            },
            duration: 500
        });
        setProgressBar(--current);
    });
  
    function setProgressBar(currentStep) {
        var percent = parseFloat(100 / steps) * current;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
    }
  
    $(".submit").click(function () {
        return false;
    })
});

    </script>
@endsection
