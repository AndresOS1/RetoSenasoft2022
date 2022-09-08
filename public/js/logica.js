$(document).ready(function () {

    var elementoArrastrado;
    var competencia;
    $('.jugadorIni').on('change', function () {
        // $('#jugadores').val(this.value);
        // forma más larga
        $('.jugadores').val(this.value);


        var op1 = parseInt(document.getElementById('jugador1').options[document.getElementById('jugador1').selectedIndex].text);
        var op2 = parseInt(document.getElementById('jugador2').options[document.getElementById('jugador2').selectedIndex].text);
        var op3 = parseInt(document.getElementById('jugador3').options[document.getElementById('jugador3').selectedIndex].text);
        var op4 = parseInt(document.getElementById('jugador4').options[document.getElementById('jugador4').selectedIndex].text);

        var selectJugador1 = document.getElementById("jugador1");
        var selectJugador2 = document.getElementById("jugador2");
        var selectJugador3 = document.getElementById("jugador3");
        var selectJugador4 = document.getElementById("jugador4");



        if (op1 > op2) {
            if (op1 > op3) {
                if (op1 > op4) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Andres Gana la ronda',
                        showConfirmButton: false,
                        timer: 1500
                    })

                    // selectJugador2.setAttribute("hidden", "");
                    // selectJugador3.setAttribute("hidden", "");
                    // selectJugador4.setAttribute("hidden", "");
                    setTimeout(function(){
                        location.reload();
                    }, 3000);


                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Camilo Gana la ronda',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    // selectJugador1.setAttribute("hidden", "")
                    // selectJugador2.setAttribute("hidden", "");
                    // selectJugador3.setAttribute("hidden", "");
                    setTimeout(function(){
                        location.reload();
                    }, 3000);
                }
            } else if (op3 > op4) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Juan Gana la ronda',
                    showConfirmButton: false,
                    timer: 1500
                })

                // selectJugador1.setAttribute("hidden", "")
                // selectJugador2.setAttribute("hidden", "");
                // selectJugador4.setAttribute("hidden", "");
                setTimeout(function(){
                    location.reload();
                }, 3000);
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Camilo Gana la ronda',
                    showConfirmButton: false,
                    timer: 1500
                })
                // selectJugador1.setAttribute("hidden", "")
                // selectJugador2.setAttribute("hidden", "");
                // selectJugador3.setAttribute("hidden", "");


                setTimeout(function(){
                    location.reload();
                }, 3000);
            }
        } else if (op2 > op3) {

            if (op2 > op4) {

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Pepito Gana la ronda',
                    showConfirmButton: false,
                    timer: 1500
                })
                // selectJugador1.setAttribute("hidden", "")
                // selectJugador3.setAttribute("hidden", "");

                // selectJugador4.setAttribute("hidden", "");
                setTimeout(function(){
                    location.reload();
                }, 3000);
            }
        } else if (op3 > op4) {

            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Juan Gana la ronda',
                showConfirmButton: false,
                timer: 1500
            })
            // selectJugador1.setAttribute("hidden", "")
            // selectJugador2.setAttribute("hidden", "");

            // selectJugador4.setAttribute("hidden", "");
            setTimeout(function(){
                location.reload();
            }, 3000);
        } else {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Camilo Gana la ronda',
                showConfirmButton: false,
                timer: 1500
            })
            // selectJugador1.setAttribute("hidden", "")
            //     selectJugador2.setAttribute("hidden", "");
            //     selectJugador3.setAttribute("hidden", "");

            setTimeout(function(){
                location.reload();
            }, 3000);
        }










        // if(op1 > op2 && op1 > op3 && op2 > op4){
        //     Swal.fire({
        //         position: 'center',
        //         icon: 'success',
        //         title: 'Ganaste la ronda',
        //         showConfirmButton: false,
        //         timer: 1500
        //       })
        //       setTimeout(function(){
        //         location.reload();
        //     }, 3000);


        // }else{
        //     Swal.fire({
        //         position: 'center',
        //         icon: 'error',
        //         title: 'Perdiste la ronda',
        //         showConfirmButton: false,
        //         timer: 1500
        //       })
        //       setTimeout(function(){
        //         location.reload();
        //     }, 3000);
        // }
    })

    // var op1_jug1;
    // $("jugador2").addEventListener
    // document.getElementById("jugador2").addEventListener("change",ganador);
    // document.getElementById("jugador1").addEventListener("click", myFunction);


    // var select1 = document.getElementById('jugador1');
    // select1.addEventListener('change',
    //   function(){
    //     var selectedOption = this.options[select1.selectedIndex].value;
    //     alert(selectedOption);
    //   });



    //   var select2 = document.getElementById('jugador2');
    // select2.addEventListener('change',
    //   function(){
    //     var selectedOption = this.options[select2.selectedIndex];
    //     alert(selectedOption.value);
    //   });


    //   var select3 = document.getElementById('jugador3');
    // select3.addEventListener('change',
    //   function(){
    //     var selectedOption = this.options[select3.selectedIndex];
    //     alert(selectedOption.value);
    //   });



    //   var select4 = document.getElementById('jugador4');
    // select4.addEventListener('change',
    //   function(){
    //     var selectedOption = this.options[select4.selectedIndex];
    //     alert(selectedOption.value);
    //   });




    // function ganador(){
    // //   location.reload();

    // }
    // function myFunction() {
    //   competencia= document.getElementById("jugador1").value;
    //   alert(competencia);
    // //   if(competencia >document.getElementById("jugador2").value)
    // //   {
    // //     alert("jugador1 gana")
    // //   }
    // //   else
    // //   {
    // //     alert("jugador2 gana")
    // //   }
    // }
    document.addEventListener("drag", function (event) {

    }, false);


    document.addEventListener("dragstart", function (event) {
        // guarda información acerca del objeto arrastrado
        event.dataTransfer.setData('text/plain', null)
        // guarda una referéncia del elemento arrastrado
        elementoArrastrado = event.target;
        // cambia la opacidad del elemento a medio transparente
        event.target.style.opacity = .5;
    }, false);


    document.addEventListener("dragend", function (event) {
        // reestablece el valor de la opacidad
        event.target.style.opacity = 1;
    }, false);


    document.addEventListener("dragover", function (event) {
        // previene el comportamiento por defecto del elemento arrastrado
        event.preventDefault();
    }, false);

    document.addEventListener("dragenter", function (event) {
        // comprueba si el event.target es una zona de soltar  
        if (event.target.className == "zona-de-soltar") {
            // y di lo és cambia el color de fondo
            event.target.style.background = "purple";
        }

    }, false);

    document.addEventListener("dragleave", function (event) {
        // comprueba si el event.target es una zona de soltar  
        if (event.target.className == "zona-de-soltar") {
            // y si lo és, reestablece el valor inicial
            event.target.style.background = "";
        }
    }, false);

    document.addEventListener("drop", function (event) {
        // Si el elemento arrastrado es un link, este se abre en una nueve página.
        // Para que esto no pase hay que utilizar: 
        event.preventDefault();
        // comprueba si el event.target es una zona de soltar
        if (event.target.className == "zona-de-soltar") {
            // reestablece el valor inicial para el background
            event.target.style.background = "";
            // elimina el elemento arrastrado del del elemento padre
            elementoArrastrado.parentNode.removeChild(elementoArrastrado);
            // y lo agrega al elemento de destino
            event.target.appendChild(elementoArrastrado);
        }

    }, false);
});





