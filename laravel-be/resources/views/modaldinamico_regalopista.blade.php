@foreach ($datosEmp as $regalo)
                        
                              <div class="modal-body">
                              <p>Empresa: {{$regalo->empresa}} </p>
                              <p>Tel: {{$regalo->telefono}} </p>
                              <p>Precio $: {{$regalo->importe}} </p>
                              <p class="bold">Código: CH/{{$regalo->created_at}}/{{$regalo->id}}</p>
                              <p>Descripcion de lo que compraste :{{$regalo->descripcion}}</p>
                              <p>Podés ver esta info nuevamente en el menu "CheAmigo Invisible - Regalos Enviados"</p>
                              </div>
                            
                              
                       
  @endforeach            
                