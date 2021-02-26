//IMPORTANTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Para deshabiltar por defecto el boton de añadir al carrito
//en la linea 249 de jQueryDoSomethingAJAX() se habilita nuevamente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(document.getElementById('rotulo') !== null){
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
}

function deshabiltarBotonCart(){
    //console.log('deshabilita el boton');
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';       
}

function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    var rotulo = document.getElementById('rotulo').value
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var fuenteLetrasText = y[x].text;
    var fuenteLetras = y[x].value;

    var x = document.getElementById("tiempos").selectedIndex;
    var y = document.getElementById("tiempos").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var tiemposEntregaText = y[x].text;
    var tiemposEntrega = y[x].value;

    var contornos = document.getElementsByName("contornos");
    var txt = "";
    var i;
    for (i = 0; i < contornos.length; i++) {
        if (contornos[i].checked) {
          txt = contornos[i].value;
        }
    }

    var contorno = txt;

    var traseraneon = document.getElementsByName("traseraneon");
    var txt = "";
    var i;
    for (i = 0; i < traseraneon.length; i++) {
        if (traseraneon[i].checked) {
          txt = traseraneon[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoTrasera").value) {
      case 'maderadepino':
        textoCorrecto = "madera de pino";
        break;

        default:
            textoCorrecto = document.getElementById("tipoTrasera").value;
        break;
    }

    var tipoTrasera = textoCorrecto;
    var trasera = txt;

    var sujecion = document.getElementsByName("sujecion");
    var txt = "";
    var i;
    for (i = 0; i < sujecion.length; i++) {
        if (sujecion[i].checked) {
          txt = sujecion[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoSujecion").value) {
      case 'ancladoalapared':
        textoCorrecto = "anclado a la pared";
        break;

      case 'colgadoaltecho':
        textoCorrecto = "colgado al techo";
        break;

      case 'colgadocomouncuadro':
        textoCorrecto = "colgado como un cuadro";
        break;

      case 'sinsujecion':
        textoCorrecto = "sin sujeción";
        break;                          

        default:
            textoCorrecto = document.getElementById("tipoSujecion").value;
        break;
    }

    var tipoSujecion = textoCorrecto;
    var sujecionNeon = txt;

    var dimmer = document.getElementsByName("dimmer");
    var txt = "";
    var i;
    for (i = 0; i < dimmer.length; i++) {
        if (dimmer[i].checked) {
          txt = dimmer[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoDimmer").value) {
      case 'condimmer':
        textoCorrecto = "con dimmer";
        break;

      case 'sindimmer':
        textoCorrecto = "sin dimmer";
        break;

        default:
            textoCorrecto = document.getElementById("tipoDimmer").value;
        break;
    }

    var tipoDimmer = textoCorrecto;
    var dimmerNeon = txt;       

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;

    //Texto
    var cadena = rotulo;
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var posInicial = { x: 10, y: 50 };
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    //calculamos el alto en píxeles (el alto viene en cm):
    var altopx = alto * 300 * 0.393701;

    ctx.font = altopx+"px "+fuenteLetras;
    ctx.fillText(cadena, posInicial.x, posInicial.y);

    //Obtenemos el acho en píxeles:
    var ancho = ctx.measureText(cadena).width;

    //calculamos el alto en centímetros:
    //var anchocm = 45.8488;//ancho/300/0.393701;
    var anchocm = ancho/300/0.393701;
    //console.log('Alto:', altopx, 'píxeles.');
    //console.log('Ancho:', ancho, 'píxeles.');
    //console.log('Ancho:', anchocm, 'centímetros.');

    //Seteamos el ancho:
    document.getElementById("ancho").value = anchocm.toFixed(3);    

    //ancho del SVG:
    var anchoSVG = document.getElementById('anchoSVG').value;
    //Calculo el precio del rótulo y lo envío al campo oculto en el formulario del carrito:

    console.log("Ancho SVG en cm: " + anchoSVG);
    console.log("Ancho en cm: " + anchocm.toFixed(3));
    console.log("Alto en cm: " + alto);
    console.log("Trasera Neon: " +trasera);
    console.log("Sujecion Neon: " + sujecionNeon);
    console.log("dimmerNeon: "+ dimmerNeon);
    console.log("Tiempo entrega: "+ tiemposEntrega);

    console.log("-----------------------------------------------");

    traseraNeon     = Number(anchocm) * Number(alto) * Number(trasera);
    sujecionNeon    = Number(sujecionNeon);
    dimmerNeon      = Number(dimmerNeon);
    tiemposEntrega  = Number(tiemposEntrega);
    tipoLetra       = (Number(anchoSVG) / 100) * 7;
    
    console.log("Total Trasera: " +anchocm.toFixed(3) +" x "+alto +" x "+ trasera +" = "+ traseraNeon.toFixed(3));
    console.log("Total sujecion Neon: " + sujecionNeon);
    console.log("Total dimmer Neon: " + dimmerNeon);
    console.log("Total tiempos de entrega: " + tiemposEntrega);
    console.log("Tipo de letra: ("+anchoSVG +"/100) x 7 = "+ tipoLetra.toFixed(3));

    //((Tipo de letra + trasera de neón + sujeción del neón + dimmer ) * 3) + tiempo de entrega

    precioFinal     = ((tipoLetra + traseraNeon + sujecionNeon + dimmerNeon) * 3) + tiemposEntrega;

    console.log("Precio: (("+tipoLetra.toFixed(3)+" + "+traseraNeon.toFixed(3)+" + "+sujecionNeon+" + "+dimmerNeon+") x 3 ) + "+tiemposEntrega+" = "+precioFinal.toFixed(2));

    var data = {
        'action': 'jnjtest',
        'rotulo': rotulo,
        'alto': alto,
        'ancho': ancho,    
        'fuenteLetras': fuenteLetras,
        'tiemposEntrega': tiemposEntrega,
        'contorno': contorno,
        'trasera': trasera,
        'tipoTrasera': tipoTrasera,
        'sujecionNeon': sujecionNeon,
        'tipoSujecion': tipoSujecion,
        'dimmerNeon': dimmerNeon,
        'color': color,
        'anchocm': anchocm.toFixed(3),
        'fuenteLetrasText': fuenteLetrasText,
        'tiemposEntregaText': tiemposEntregaText,
        'precioFinal': precioFinal.toFixed(2),
    };

    var protocolo = window.location.protocol;
    var hostname = window.location.hostname;
    var carpeta = window.location.pathname;
    //console.log(carpeta);
    var str = carpeta;
    var res = str.split("/");
    //console.log(res[1]);

    var url = protocolo +'//'+ hostname;

    if(hostname == 'localhost'){

        var ruta = url + "/"+res[1]+"/wp-admin/admin-ajax.php";

    }else{

        var ruta = url + "/wp-admin/admin-ajax.php";
    }

     //document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myDIV").style.visibility = 'visible';

     document.getElementById("myButton").style.visibility = 'hidden';

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){
            //document.getElementById("myDIV").style.display = "none";
            document.getElementById("myDIV").style.visibility = "hidden";
            
            document.getElementById("myButton").style.visibility = "visible";
        }
       
        document.getElementById('response').innerHTML = response;

        document.getElementById('precio_final_rotulo').value     = precioFinal.toFixed(2);
        document.getElementById('texto_rotulo').value            = rotulo;
        document.getElementById('fuenteLetrasText').value        = fuenteLetrasText;
        document.getElementById('anchocm').value                 = anchocm;
        document.getElementById('altocm').value                  = alto;
        document.getElementById('tipoTraseraSumario').value      = tipoTrasera;
        document.getElementById('tipoSujecionSumario').value     = tipoSujecion;
        document.getElementById('tipoDimmerSumario').value       = tipoDimmer;
        document.getElementById('tiempoEntregaSumario').value    = tiemposEntregaText;
        document.getElementById('tipoContornoSumario').value     = contorno;
        document.getElementById('colorSumario').value            = color;

        document.getElementsByName("add-to-cart")[0].style.visibility = 'visible';
    });

}

/*
window.addEventListener("load", function() {
  //Texto
  var cadena = prompt('Dibuja aquí lo que desees', '');
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var posInicial = { x: 10, y: 50 };

  ctx.font = "30px Arial";
  ctx.fillText(cadena, posInicial.x, posInicial.y);

  //Obtenemos el acho:
  var ancho = ctx.measureText(cadena).width;
  console.log('Ancho:', ancho, 'píxeles.');

});
*/

function textoRadio(input,name){

    document.getElementById(input).value = name;
}


function fuente(fuente){



   


}