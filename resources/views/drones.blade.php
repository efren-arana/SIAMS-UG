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

ul.checkout-bar li.error {
  background: #ececec;
  color: #f4030f;
  z-index: 99999;
}
ul.checkout-bar li.error:before {
  background: #f4030f;
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
/* ul.checkout-bar li:nth-child(5):before {
  content: "5";
} */
/* ul.checkout-bar li:nth-child(6):before {
  content: "6";
} */
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
    left: 66%;
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
    margin: 50px 40px 0 0;
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
    left: 66%;
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
                <h3 id="descripcion">Descripción</h3>
            </div>
            <div class="card-body">
                <p style="color: black;">Este proyecto se enfoca en Recolección de Datos en Línea y fuera de línea, cuyos datos de georreferenciación e imágenes son analizados por algoritmos creados en Python para el procesamiento de imágenes y capturar fotogramas. Para almacenar la información recolectada bajo los procesos online u offline se hace uso de la plataforma de AWS (Amazon Web Services) alojando la información en una base de datos PostresSQL. Para la recolección de datos en línea se utiliza un servidor con el protocolo RTMP y para la recolección de datos fuera de línea se utiliza un proceso ad-hoc implementado en el servidor. A través de una plataforma web desarrollada en Java se realiza el proceso de recolección y administración de datos. </p>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3 id="arquitectura">Arquitectura Drones</h3>
            </div>
            <div class="card-body">
                <div class="col-12">
                  <img style="width: 90%; height:auto;" src="{{asset('img/arquitectura/arquitectura_drones.png')}}" alt="arquitectura de los drones" title="Arquitectura drones" data-toggle="tooltip" usemap="#workmap">
                  <map name="workmap">
                    <area shape="circle" coords="701,210,430,80" alt="Computer" title="Computer" onclick="alert('click en instancia')">
                    <area shape="rect" coords="290,172,333,250" alt="Phone" onclick="alert('click en el teléfono')">
                    <area shape="circle" coords="337,300,44" alt="Cup of coffee" onclick="alert('click en el café')">
                  </map>
                  </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3 id="lista">Lista de verificación de los componentes</h3>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <div class="checkout-wrap">
                        <ul class="checkout-bar">
                      
                          {{-- <li class="visited first">
                            <a href="#">Instancia EC2</a>
                          </li> --}}

                          {{-- <li class="previous visited">Ngrix</li> --}}

                          <li class="next">Instancia EC2</li>
                          
                          <li class="">Ngrix</li>

                          <li class="">protocolo RTMP</li>
                          
                          <li class="">Base de datos</li>
                             
                        </ul>
                    </div>
                </div>
                <br><br><br><br><br>
                <button id="verificar_componente" class="btn btn-primary">Verificar</button>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3 id="datos">Datos de la instancia y ejecución de procesos</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="">
                  <table class="table table-responsive table-bordered">
                    <thead>
                      <tr>
                        <th colspan="2">Detalles de la Instancia</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nombre Instancia</td>
                        <td>SIAMS-Drones</td>
                      </tr>
                      <tr>
                        <td>Instancia_ID</td>
                        <td><a href="https://us-east-2.console.aws.amazon.com/ec2/v2/home?region=us-east-2#InstanceDetails:instanceId=i-0e99a42ea8fee6069">i-0e99a42ea8fee6069</a></td>
                      </tr>
                      <tr>
                        <td>Estado</td>
                        <td><a href="https://us-east-2.console.aws.amazon.com/ec2/v2/home?region=us-east-2#Instances:sort=keyName">EE.UU. Este (Ohio)</a></td>
                      </tr>
                      <tr>
                        <td>Zona</td>
                        <td>us-east-2b</td>
                      </tr>
                      <tr>
                        <td>DNS</td>
                        <td>ec2-3-140-64-90.us-east-2.compute.amazonaws.com</td>
                      </tr>
                      <tr>
                        <td>IP V4 Publica</td>
                        <td>3.140.64.90</td>
                      </tr>
                      <tr>
                        <td>Grupo Seguridad</td>
                        <td>launch-wizard-7</td>
                      </tr>
                      <tr>
                        <td>S.O.</td>
                        <td>Debian (inferido)</td>
                      </tr>
                      <tr>
                        <td>Nombre de Clave</td>
                        <td>Drones_SIAMS</td>
                      </tr>
                      <tr>
                        <td>Tipo de Instancia</td>
                        <td>t2.xlarge</td>
                      </tr>
                      <tr>
                        <td>Estado de la Instancia</td>
                        <td>Running/Stoped</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="">
                  <div class="row">
                    <div class="col-12"><br></div>
                    <div class="col-12"><br></div>
                    <div class="col-12"><br></div>
                    <div class="col-12"><br></div>
                    <div class="col-12"><button class="btn btn-warning" id="apagar_instancia">Apagar Instancia</button></div>
                    <div class="col-12"><button class="btn btn-warning" id="encender_instancia">Encender Instancia</button></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <h3 id="monitoreo">Monitoreo de la instancia SIAMS-DRONES</h3>
          </div>
          <div class="card-body">
            <canvas id="myChart" width="400" height="100"></canvas>
            <br>
            <canvas id="myChart2" width="400" height="100"></canvas>
            <br>
            <canvas id="myChart3" width="400" height="100"></canvas>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header">
            <h3 id="monitoreo">Pasos</h3>
          </div>
          <div class="card-body">
            <!-- SmartWizard html -->
            <div id="smartwizard">
              <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#step-1">
                      <div class="num">1</div>
                      Step Title
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#step-2">
                      <span class="num">2</span>
                      Step Title
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#step-3">
                      <span class="num">3</span>
                      Step Title
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#step-4">
                      <span class="num">4</span>
                      Step Title
                    </a>
                  </li>
              </ul>

              <div class="tab-content">
                  <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                      Step content 1
                  </div>
                  <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                      Step content 2
                  </div>
                  <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                      Step content 3
                  </div>
                  <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                      Step content 4
                  </div>
              </div>
            </div>  
          </div>
        </div>
    </div>
</div>
<br>

</div>
@endsection
@section('scripts')
    <script>
        const ctx = document.getElementById('myChart');
        const ctx2 = document.getElementById('myChart2');
        const ctx3 = document.getElementById('myChart3');

        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
        "2022-08-17T02:16:00",
        "2022-08-17T01:16:00",
        "2022-08-16T21:16:00",
        "2022-08-16T20:16:00",
        "2022-08-16T19:16:00",
        "2022-08-16T18:16:00",
        "2022-08-16T17:16:00",
        "2022-08-16T16:16:00",
        "2022-08-16T15:16:00",
        "2022-08-16T14:16:00",
        "2022-08-16T13:16:00",
        "2022-08-16T12:16:00",
        "2022-08-16T11:16:00",
        "2022-08-16T10:16:00",
        "2022-08-16T09:16:00",
        "2022-08-16T08:16:00",
        "2022-08-16T07:16:00",
        "2022-08-16T06:16:00",
        "2022-08-16T05:16:00",
        "2022-08-16T04:16:00",
        "2022-08-16T03:16:00"
      ],
                datasets: [{
                    label: 'CPUUtilization (Percent)',
                    data: [
                            0.21440025427938733,
                            0.3221907823979821,
                            0.09172779475780313,
                            0.10006579759809815,
                            0.093755788644994,
                            0.09653318051310575,
                            0.1242999598653946,
                            0.09648609953382102,
                            0.09376601525115005,
                            0.12986651384643924,
                            0.10482174832515186,
                            0.09377817140563739,
                            0.12918731283381207,
                            0.09098978111203708,
                            0.09235667314994916,
                            0.09170660831712509,
                            0.13193614738662002,
                            0.09447415948874661,
                            0.10001640116081653,
                            0.1243125019295482,
                            0.09793306782748314
                          ],
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

        const myChart2 = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: [
        "2022-08-17T02:16:00",
        "2022-08-17T01:16:00",
        "2022-08-16T21:16:00",
        "2022-08-16T20:16:00",
        "2022-08-16T19:16:00",
        "2022-08-16T18:16:00",
        "2022-08-16T17:16:00",
        "2022-08-16T16:16:00",
        "2022-08-16T15:16:00",
        "2022-08-16T14:16:00",
        "2022-08-16T13:16:00",
        "2022-08-16T12:16:00",
        "2022-08-16T11:16:00",
        "2022-08-16T10:16:00",
        "2022-08-16T09:16:00",
        "2022-08-16T08:16:00",
        "2022-08-16T07:16:00",
        "2022-08-16T06:16:00",
        "2022-08-16T05:16:00",
        "2022-08-16T04:16:00",
        "2022-08-16T03:16:00"
      ],
                datasets: [{
                    label: 'NetworkIn (Bytes)',
                    data: [
                            911876.0909090909,
                            3754.5102040816328,
                            876.12,
                            1492.55,
                            1054.6666666666667,
                            1035.4,
                            3281.016666666667,
                            1020.9833333333333,
                            817.7333333333333,
                            21293.316666666666,
                            1488.65,
                            677.25,
                            43175.65,
                            661.0333333333333,
                            780.45,
                            807.7833333333333,
                            61822.933333333334,
                            814.05,
                            2143.95,
                            2799.85,
                            595.5666666666667
                          ],
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

        const myChart3 = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: [
        "2022-08-17T02:16:00",
        "2022-08-17T01:16:00",
        "2022-08-16T21:16:00",
        "2022-08-16T20:16:00",
        "2022-08-16T19:16:00",
        "2022-08-16T18:16:00",
        "2022-08-16T17:16:00",
        "2022-08-16T16:16:00",
        "2022-08-16T15:16:00",
        "2022-08-16T14:16:00",
        "2022-08-16T13:16:00",
        "2022-08-16T12:16:00",
        "2022-08-16T11:16:00",
        "2022-08-16T10:16:00",
        "2022-08-16T09:16:00",
        "2022-08-16T08:16:00",
        "2022-08-16T07:16:00",
        "2022-08-16T06:16:00",
        "2022-08-16T05:16:00",
        "2022-08-16T04:16:00",
        "2022-08-16T03:16:00"
      ],
                datasets: [{
                    label: 'NetworkOut (Bytes)',
                    data: [
                            15510.527272727273,
                            27253.95918367347,
                            1687.44,
                            30840.233333333334,
                            20291.9,
                            10984.066666666668,
                            21829.016666666666,
                            11307.766666666666,
                            10730.683333333332,
                            21358.516666666666,
                            21013.883333333335,
                            10244.683333333332,
                            21747.866666666665,
                            10115.083333333334,
                            10232.8,
                            19905.6,
                            12179.966666666667,
                            10157.35,
                            11642.183333333332,
                            11878.05,
                            883.5
                          ],
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

  /* document.getElementById('verificar_componente').addEventListener('click', async function()
  {
    let iteracion = 0;
    document.getElementById('verificar_componente').setAttribute('disabled', 'disabled');
    let intervalo = setInterval(async function(){
      let elemento = document.querySelector('.next');
      if(elemento === null)
      {
        clearInterval(intervalo)
      }
      else
      {
        console.log('ejecutandose');

        if(iteracion == 0)
        {
          let res_instancia = await describir_instancia();
          console.log(res_instancia)
          if(res_instancia == 'stopped')
          {
            if(elemento.previousElementSibling != null)
            {
              elemento.previousElementSibling.classList.add('error');
              elemento.previousElementSibling.classList.remove('active');
            }
            clearInterval(intervalo);
          }
        }

        (elemento.textContent != null) ? elemento.textContent = 'Ejecutandose' : '';
        await new Promise(r => setTimeout(r, 2000));
        if(elemento.previousElementSibling != null)
        {
          elemento.previousElementSibling.classList.add('visited');
          elemento.previousElementSibling.classList.remove('active');
        }
        elemento.classList.add('active');
        elemento.classList.remove('next');
        if(elemento.nextElementSibling != null)
        {
          elemento.nextElementSibling.classList.add('next');
        }
        (elemento.textContent != null) ? elemento.textContent ='Ejecutado' : '';
        iteracion++;
      }
    }, 20000);
    
  }) */

  //prueba componentes
  document.getElementById('verificar_componente').addEventListener('click', async function()
  {
    let iteracion = 0;
    document.getElementById('verificar_componente').setAttribute('disabled', 'disabled');
    while (true)
    {
      let elemento = document.querySelector('.next');
      if(elemento === null)
      {
        return;
      }
      else
      {
        console.log('ejecutandose');

        let res_instancia = await describir_instancia();
        console.log(res_instancia)
        if(res_instancia == 'stopped')
        {
          if(elemento.previousElementSibling != null)
          {
            elemento.previousElementSibling.classList.add('error');
            elemento.previousElementSibling.classList.remove('active');
          }
          elemento.classList.add('error');
          elemento.classList.remove('next');
          return;
        }

        (elemento.textContent != null) ? elemento.textContent = 'Ejecutandose' : '';
        if(elemento.previousElementSibling != null)
        {
          elemento.previousElementSibling.classList.add('visited');
          elemento.previousElementSibling.classList.remove('active');
        }
        elemento.classList.add('active');
        elemento.classList.remove('next');
        if(elemento.nextElementSibling != null)
        {
          elemento.nextElementSibling.classList.add('next');
        }
        (elemento.textContent != null) ? elemento.textContent ='Ejecutado' : '';
        iteracion++;
      }
    }
    
  })
  //fin prueba componentes

  document.getElementById('encender_instancia').addEventListener('click', ()=>{

    fetch('https://xqv4b5pdi8.execute-api.us-east-2.amazonaws.com/Develop/startinstance', {
      method: 'POST', 
      body: JSON.stringify({
        region: "us-east-2",
        instanceId: "i-0e99a42ea8fee6069"
      }),
      headers: {
        'Content-Type': 'application/json'
      }
    }).then(res => res.json())
    .then(res => console.log(res))
    .catch(function(error) {
      console.log('Hubo un problema con la petición Fetch:' + error.message)})

    })    

  document.getElementById('apagar_instancia').addEventListener('click', ()=>{

  fetch('https://xqv4b5pdi8.execute-api.us-east-2.amazonaws.com/Develop/stopinstance', {
    method: 'POST', 
    body: JSON.stringify({
      region: "us-east-2",
      instanceId: "i-0e99a42ea8fee6069"
    }),
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json'

    }
  }).then(res => res.json())
  .then(res => console.log(res))
  .catch(function(error) {
    console.log('Hubo un problema con la petición Fetch:' + error.message)})

  })


  addEventListener('click', (e)=>{

    console.log(e.target)

    console.log(e)

    /* if(e.target.nodeName == 'IMG' && e.target.currentSrc == '{{asset('img/arquitectura/arquitectura_drones.png')}}')
    {
      console.log('adis')
    } */

  })

  //solicitar info de la instancia

  async function describir_instancia(){
    let resp;
    await fetch('describirinstancia')
    .then(res => res.json())
    .then(res => {
      //console.log('state:', res.state)
      resp = res.state
      return resp;
    })
    return resp;
  }
  
  //fin de solicitar info de la instancia

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(function() {
    // SmartWizard initialize
    $('#smartwizard').smartWizard({theme: 'arrows'});
});

    </script>
@endsection
