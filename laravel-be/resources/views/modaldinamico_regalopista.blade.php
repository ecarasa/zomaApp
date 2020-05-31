@foreach ($datosEmp as $regalo)
                        
                              <div class="modal-body">
                              <h2> Acordá ahora por whatsapp medio de pago y envío para que tu amigo pueda recibir y disfrutar su regalo!. </h2>
                              <p>Empresa: {{$regalo->empresa}} </p>
                              <p>Tel: {{$regalo->telefono}}
                              <img width="18%" style="cursor: pointer;" src="https://img.icons8.com/clouds/2x/whatsapp.png" onclick="SendWebWthsVendedor('{{$regalo->telefono}}','{{ $regalo->empresa }}','{{$regalo->nombre}} ${{$regalo->importe}}','<?php echo 'CH-'. str_replace(':','', substr($regalo->created_at,14,6)).'-'.$regalo->id ?>')"> </img>    
                              </p>
                              <p>Precio $: {{$regalo->importe}} </p>
                              <p class="bold">Código: <?php echo 'CH-'. str_replace(":","", substr($regalo->created_at,14,6)).'-'.$regalo->id ?></p>
                              <p>Descripcion de lo que compraste :{{$regalo->nombre}} || {{$regalo->descripcion}}</p>
                              <p>Podés ver esta info nuevamente en el menu "CheAmigo Invisible - Regalos Enviados"</p>
                              </div>
                            
                              
                       
  @endforeach            
                