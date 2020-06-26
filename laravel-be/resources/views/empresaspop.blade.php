<style> 
.popup-event {

    width: 90%;
    max-width: 584px;
    border-radius: 12px;
    background-color: #fff;
    
   

}

@media screen and (max-width:480px) { .popup-event { display:none; } .botoneraup { margin-top:30px;margin-left: 12%; } .btnempresa { margin-left:60px;  margin-top:4px; } }

.popup-close-button {
-webkit-tap-highlight-color: transparent;
--blue: #007bff;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: #343a40;
--primary: #007bff;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
font-size: 16px;
visibility: visible;
margin: 0;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
display: flex;
justify-content: center;
align-items: center;
width: 40px;
height: 40px;
border-radius: 10px;
background-color: #45437f;
cursor: pointer;
position: absolute;
top: -20px;
right: -20px;
z-index: 2;
transition: background-color .2s ease-in-out;

}

.icon-cross {

    fill: #fff;
    width: 12px;
    height: 12px;
    overflow: hidden;
    vertical-align: middle;
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizing: border-box;
}


.popup-event .popup-event-cover {

    -webkit-tap-highlight-color: transparent;
--blue: #007bff;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: #343a40;
--primary: #007bff;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
font-size: 16px;
visibility: visible;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
display: block;
margin: 0;
width: 100%;
height: 204px;
border-top-left-radius: 12px;
border-top-right-radius: 12px;
background: url("img/cover/33.jpg") center center / cover no-repeat;

}

.popup-event-info {
    -webkit-tap-highlight-color: transparent;
--blue: #007bff;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: #343a40;
--primary: #007bff;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
font-weight: 400;
line-height: 1.5;
color: #212529;
text-align: left;
font-size: 16px;
visibility: visible;
margin: 0;
border: none;
outline: none;
box-sizing: border-box;
padding: 32px 28px;
position: relative;

}
.popup-event .popup-event-title
{

    -webkit-tap-highlight-color: transparent;
--blue: #007bff;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: #343a40;
--primary: #007bff;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
text-align: left;
visibility: visible;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
margin: 0;
color: #3e3f5e;
font-family: Rajdhani,sans-serif;
line-height: 1em;
font-size: 1.5rem;
font-weight: 700;

}
.popup-event .popup-event-text
{

    margin-top: 16px;
    font-size: .875rem;
    line-height: 1.7142857143em;
    font-weight: 600;
    color: #3e3f5e;
}

.popup-event .popup-event-subtitle
{
    margin-top: 32px;
    font-size: 1rem;
    font-weight: 700;
    color: #3e3f5e;
    font-family: Rajdhani,sans-serif;
    line-height: 1em;
}

.popup-event .popup-event-button
{
    
    width: 200px;
    position: absolute;
    top: -30px;
    right: 28px;

}



</style>



  <!-- POPUP EVENT -->
  <div class="popup-event popup-event-information" id="divpop" >
    <!-- POPUP CLOSE BUTTON -->
    <div class="popup-close-button popup-event-information-trigger" id="cruxpop">
      <!-- POPUP CLOSE BUTTON ICON -->
      <svg class="popup-close-button-icon icon-cross">
        <use xlink:href="#svg-cross"></use>
      </svg>
      <!-- /POPUP CLOSE BUTTON ICON -->
    </div>
    <!-- /POPUP CLOSE BUTTON -->

    <!-- POPUP EVENT COVER -->
    <figure class="popup-event-cover liquid">
      <img src="https://cheamigo.com.ar/public/img/landing/empresas_captura_panelpistas.jpg" alt="captura panel amigo invisible">
    </figure>
    <!-- /POPUP EVENT COVER -->

    <!-- POPUP EVENT INFO -->
    <div class="popup-event-info">
      <!-- POPUP EVENT TITLE -->
      <p class="popup-event-title">Jugá al amigo invisible en la oficina</p>
      <!-- /POPUP EVENT TITLE -->     

      <!-- POPUP EVENT SUBTITLE -->
      <p class="popup-event-subtitle">Fidelizá tus empleados.</p>
      <!-- /POPUP EVENT SUBTITLE -->

      <!-- POPUP EVENT TEXT -->
      <p class="popup-event-text">Proponé jugar en tu empresa, nosotros te ayudamos y nos encargamos del resto. En dos clicks organizamos la actividad para vos y tus compañeros. Esta Actividad se trata de algo que puede ayudar a establecer vínculos y a reforzar los equipos de trabajo. De hecho, puede considerarse un ejercicio de teambuilding. Para más info contactanos vía <a href="javascript:ContactWh();" style="font-weight:700;color:blue"> whatsapp </a> o por email a <a href="mail:ventas@cheamigo.com.ar;" style="font-weight:800;font-size:'initial'"> ventas@cheamigo.com.ar </a></p>
      <!-- /POPUP EVENT TEXT -->

      <!-- POPUP EVENT SUBTITLE -->
      <p class="popup-event-subtitle"></p>
      <!-- /POPUP EVENT SUBTITLE -->      

      <!-- POPUP EVENT BUTTON -->
      <p class="popup-event-button button tertiary popup-event-information-trigger" onclick="javascript:ContactWh();">Contacto</p>
      <!-- /POPUP EVENT BUTTON -->
    </div>
    <!-- /POPUP EVENT INFO -->

  </div>
  <!-- /POPUP EVENT -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#cruxpop').click(function(){
        if ($(window).width() <= 480) {                  
                $('#divpop').css('display',"none");
            }
        });
    });
    var observer = new MutationObserver(function(mutations) {
    if ($(window).width() <= 480) {  
        mutations.forEach(function(mutationRecord) {
           
            if($('#divpop').css('visibility')=="hidden") {
                $('#divpop').css('display',"none");
                //alert(1);
            }
            else
                if($('#divpop').css('visibility')=="visible")  {
                    $('#divpop').css('display',"block");
                    $('#divpop').css('left','3%');
                    $('#divpop').css('top','20px');
                    $('#divpop').css('margin-left','1px');
                }
        });    
    }
    });
    var target = document.getElementById('divpop');
    observer.observe(target, { attributes : true, attributeFilter : ['style'] }); 
    
    
</script>