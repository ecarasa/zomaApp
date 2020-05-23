<!-- USER STATUS -->
<div class="featured-stat">
  <span class="bold"> Resultados del Grupo</span>
        <div class="grid grid-1 centered" style="margin-top: 20px;">
                    @foreach ($grupos as $grupo)
                                  
                      <div class="earning-stat-box">
                        <div class="earning-stat-box-info">
                          <div class="earning-stat-box-icon-wrap stat-item">
                          <svg class="icon-friend demo-box-icon"><use xlink:href="#svg-friend"></use></svg>                          
                          </div>
                          <div class="earning-stat-box-icon-wrap " style="left:100%" >
                          <img width="100%" src="https://img.icons8.com/clouds/2x/whatsapp.png" onclick="SendWebWths( '{{$grupo->usuarioT}}','{{$grupo->codigo}}','{{$grupo->usuario}}' )"> </img>                         
                          </div>
                          
                           

                          <p class="earning-stat-box-title">{{$grupo->usuarioN}}: {{$grupo->usuario}}</p>
                          <p class="featured-stat-text user-status-tag ">
                            <span class="bold" style="color:#615dfa">AMIGO INVISIBLE: {{$grupo->amigoinvisible}} | {{$grupo->amigoinvisible_email}}  </span>
                          </p>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>    
         </div>
        

</div>