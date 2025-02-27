<html lang="en">

<head>
    <meta charset="UTF-8">





    <title>Comite académico</title>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://public.codepenassets.com/css/normalize-5.0.0.min.css">



    <style>
        body {
            font-family: "Roboto";
        }

        .back {
            background: linear-gradient(120grad, #643986, #98aed5);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .registration-form {
            width: 400px;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0%);
            top: 15%;
            background: transparent;
        }

        .registration-form header {
            position: relative;
            z-index: 11;
            background: white;
            padding: 20px 40px;
            border-radius: 15px 15px 0 0;
        }

        .registration-form header h1 {
            font-weight: 900;
            letter-spacing: 1.5px;
            color: #333;
            font-size: 23px;
            text-transform: uppercase;
            margin: 0;
        }

        .registration-form header p {
            word-spacing: 0px;
            color: #9facb6;
            font-size: 17px;
            margin: 0;
            margin-top: 5px;
        }

        .registration-form form {
            position: relative;
        }

        .registration-form .input-section {
            width: 100%;
            position: absolute;
            display: flex;
            left: 50%;
            transform: translate(-50%, 0);
            height: 75px;
            border-radius: 0 0 15px 15px;
            overflow: hidden;
            z-index: 10;
            /* box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2); */
            transition: all 0.2s ease-in;
        }

        .registration-form .input-section.folded {
            width: 95%;
            margin-top: 10px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 9;
        }

        .registration-form .input-section.folded input {
            background-color: #e9e2c0;
        }

        .registration-form .input-section.folded span {
            background-color: #e9e2c0;
        }

        .registration-form .input-section.folded+.folded {
            width: 90%;
            margin-top: 20px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 8;
        }

        .registration-form .input-section.folded+.folded input {
            background-color: #e1bcef;
        }

        .registration-form .input-section.folded+.folded span {
            background-color: #e1bcef;
        }

        .registration-form .input-section.folded+.folded+.folded {
            width: 85%;
            margin-top: 30px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 7;
        }

        .registration-form .input-section.folded+.folded+.folded select {
            background-color: #8f8fd6;
            border: none;
        }

        .registration-form .input-section.folded+.folded+.folded span {
            background-color: #8f8fd6;
        }

        .registration-form .input-section.folded+.folded+.folded+.folded input {
            background-color: #bf50e7;
        }

        .registration-form .input-section.folded+.folded+.folded+.folded span {
            background-color: #bf50e7;
        }



        .registration-form .input-section.folded+.folded+.folded+.folded {
            width: 80%;
            margin-top: 40px;
            left: 50%;
            transform: translate(-50%, 0);
            z-index: 6;
        }

        .registration-form .input-section.fold-up {
            margin-top: -75px;
        }

        .registration-form form input {
            background: white;
            color: #8f8fd6;
            width: 80%;
            border: 0;
            padding: 20px 40px;
            margin: 0;
        }

        .registration-form form input:focus {
            outline: none;
        }

        .registration-form form input::-moz-placeholder {
            color: #8f8fd6;
            font-weight: 100;
        }

        .registration-form form input:-ms-input-placeholder {
            color: #8f8fd6;
            font-weight: 100;
        }

        .registration-form form input::placeholder {
            color: #8f8fd6;
            font-weight: 100;
        }

        .animated-button {
            width: 20%;
            background-color: #d4d4ff;
        }

        .animated-button span {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            line-height: 75px;
            text-align: center;
            height: 75px;
            transition: all 0.2s ease-in;
        }

        .animated-button span i {
            font-size: 25px;
            color: #9999f8;
        }

        .animated-button .next-button {
            background: transparent;
            color: #9999f8;
            font-weight: 100;
            width: 100%;
            border: 0;
        }

        .next {
            margin-top: -75px;
        }

        .success {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            left: 50%;
            transform: translate(-50%, 0);
            height: 75px;
            border-radius: 0 0 15px 15px;
            overflow: hidden;
            z-index: 2;
            box-shadow: 0px 0px 100px rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease-in;
            background: limegreen;
            margin-top: -75px;
        }

        .success p {
            color: white;
            font-weight: 900;
            letter-spacing: 2px;
            font-size: 18px;
            width: 100%;
            text-align: center;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



</head>

<body translate="no">
    <div class="back"></div>
    <div class="registration-form">
        <header>
            <h1>Sign Up</h1>
            <p>Fill in all informations</p>
            <!-- <button id="modifyButton">Modificar</button>
            <script>
                $('#modifyButton').click(function () {
                    $('.input-section').each(function () {
                        $(this).removeClass('fold-up').removeClass('folded');
                    });
                });
            </script> -->
        </header>
        <form>
            <div class="input-section email-section">
                <select id="asignatura" class="email form-control" style="color: #8f8fd6; width: 451px;">
                    <option value="" disabled selected>SELECCIONA UNA ASIGNATURA</option>
                    <option>Matemáticas</option>
                    <option>Base de Datos</option>
                    <option>Dispositivos Móviles</option>
                    <option>Expresión Oral y Escrita</option>
                    <option>Programación</option>
                    <option>Redes</option>
                    <option>Inteligencia Artificial</option>
                </select>
                <div class="animated-button">
                    <span class="icon-book"><i class="fa fa-book"></i></span>
                    <span class="next-button email"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section password-section folded">
                <input class="password" type="text" id="profesor" placeholder="PROFESOR ASIGNADO">
                <div class="animated-button"><span class="icon-user"><i class="fa fa-user"></i></span><span
                        class="next-button password"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section duracion-section folded">
                <input class="duracion" type="number" id="duracion" placeholder="DURACIÓN (HORAS)">
                <div class="animated-button"><span class="icon-clock"><i class="fa fa-clock-o"></i></span><span
                        class="next-button duracion"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section familia-carrera-section folded">
                <select id="familiaCarrera" class="familia-carrera form-control" style="color: #8f8fd6; width: 451px;">
                    <option value="" disabled selected>SELECCIONA UNA FAMILIA DE CARRERA</option>
                    <option>TIC</option>
                    <option>Administración Industrial</option>
                    <option>Ingeniería Civil</option>
                    <option>Diseño Gráfico</option>
                    <option>Medicina</option>
                </select>
                <div class="animated-button">
                    <span class="icon-briefcase"><i class="fa fa-briefcase"></i></span>
                    <span class="next-button familia-carrera"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section cuatrimestre-section folded">
                <select id="cuatrimestre" class="cuatrimestre form-control" style="color: #8f8fd6; width: 451px;">
                    <option value="" disabled selected>SELECCIONA UN CUATRIMESTRE</option>
                    <option>Septiembre - Diciembre</option>
                    <option>Enero - Abril</option>
                    <option>Mayo - Agosto</option>
                </select>
                <div class="animated-button"><span class="icon-calendar"><i class="fa fa-calendar"></i></span><span
                        class="next-button cuatrimestre"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section numUnidades-section folded">
                <input class="numUnidades" type="number" id="numUnidades" placeholder="NUMERO DE UNIDADES" min="1" max="3" readonly>
                <div class="animated-button"><span class="icon-list-ol"><i class="fa fa-list-ol"></i></span><span
                        class="next-button numUnidades"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section competencia-section folded">
                <textarea class="competencia" id="competencia" placeholder="NIVEL DE COMPETENCIA"
                    style="color: #8f8fd6; width: 451px; height: 75px;"></textarea>
                <div class="animated-button"><span class="icon-pencil"><i class="fa fa-pencil"></i></span><span
                        class="next-button competencia"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div class="input-section objetivo-section folded">
                <textarea class="objetivo" id="objetivo" placeholder="OBJETIVO GENERAL DE LA ASIGNATURA"
                    style="color: #8f8fd6; width: 451px; height: 75px;"></textarea>
                <div class="animated-button"><span class="icon-bullseye"><i class="fa fa-bullseye"></i></span><span
                        class="next-button objetivo"><i class="fa fa-arrow-up"></i></span></div>
            </div>
            <div id="unidadesSection"></div>
            <div class="success">
                <button id="descargarTabla" style="background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    justify-content: center;
                    border-radius: 12px;">Descargar tabla</button>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script id="rendered-js">
        $('#asignatura').on("change", function() {
            if ($(this).val()) {
                $('.icon-book').addClass("next");
            } else {
                $('.icon-book').removeClass("next");
            }
        });

        $('.next-button').hover(
            function() {
                $(this).css('cursor', 'pointer');
            }
        );

        $('.next-button.email').click(
            function() {
                console.log("Something");
                $('.email-section').addClass("fold-up");
                $('.password-section').removeClass("folded");
            }
        );

        $('.password').on("change keyup paste",
            function() {
                if ($(this).val()) {
                    $('.icon-user').addClass("next");
                } else {
                    $('.icon-user').removeClass("next");
                }
            }
        );

        $('.next-button').hover(
            function() {
                $(this).css('cursor', 'pointer');
            }
        );

        $('.next-button.password').click(
            function() {
                console.log("Something");
                $('.password-section').addClass("fold-up");
                $('.duracion-section').removeClass("folded");
            }
        );

        $('.duracion').on("change keyup paste",
            function() {
                if ($(this).val()) {
                    $('.icon-clock').addClass("next");
                } else {
                    $('.icon-clock').removeClass("next");
                }
            }
        );

        $('.next-button.duracion').click(
            function() {
                console.log("Something");
                $('.duracion-section').addClass("fold-up");
                $('.familia-carrera-section').removeClass("folded");
            }
        );

        $('.familia-carrera').on("change",
            function() {
                if ($(this).val()) {
                    $('.icon-briefcase').addClass("next");
                } else {
                    $('.icon-briefcase').removeClass("next");
                }
            }
        );

        $('.next-button.familia-carrera').click(
            function() {
                console.log("Something");
                $('.familia-carrera-section').addClass("fold-up");
                $('.cuatrimestre-section').removeClass("folded");
            }
        );

        $('.cuatrimestre').on("change",
            function() {
                if ($(this).val()) {
                    $('.icon-calendar').addClass("next");
                } else {
                    $('.icon-calendar').removeClass("next");
                }
            }
        );

        $('.next-button.cuatrimestre').click(
            function() {
                console.log("Something");
                $('.cuatrimestre-section').addClass("fold-up");
                $('.numUnidades-section').removeClass("folded");
            }
        );
        $('.numUnidades').on("change keyup paste",
            function() {
                if ($(this).val()) {
                    $('.icon-list-ol').addClass("next");
                } else {
                    $('.icon-list-ol').removeClass("next");
                }
            }
        );
        $('.next-button.numUnidades').click(
            function() {
                console.log("Something");
                $('.numUnidades-section').addClass("fold-up");
                $('.competencia-section').removeClass("folded");
            }
        );

        $('.competencia').on("change keyup paste",
            function() {
                if ($(this).val()) {
                    $('.icon-pencil').addClass("next");
                } else {
                    $('.icon-pencil').removeClass("next");
                }
            }
        );

        $('.next-button.competencia').click(
            function() {
                console.log("Something");
                $('.competencia-section').addClass("fold-up");
                $('.objetivo-section').removeClass("folded");
            }
        );

        $('.objetivo').on("change keyup paste",
            function() {
                if ($(this).val()) {
                    $('.icon-bullseye').addClass("next");
                } else {
                    $('.icon-bullseye').removeClass("next");
                }
            }
        );

        $('.next-button.objetivo').click(function() {
            console.log("Something");
            $('.objetivo-section').addClass("fold-up");
            $('.unidad-aprendizaje-section').removeClass("folded");
        });
        $('#numUnidades').change(function() {
            var numUnidades = $(this).val();
            var unidadesSection = $('#unidadesSection');
            unidadesSection.empty();

            for (var i = 0; i < numUnidades; i++) {
                var unidadHTML = `
                <div class="input-section unidad-aprendizaje-section folded">
                    <textarea class="unidad-aprendizaje" id="unidadAprendizaje${i}" placeholder="UNIDAD DE APRENDIZAJE ${i + 1}" style="color: #8f8fd6; width: 451px; height: 75px;"></textarea>
                    <div class="animated-button">
                        <span class="icon-book"><i class="fa fa-book"></i></span>
                        <span class="next-button unidad-aprendizaje"><i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
            <div class="input-section competencia-especifica-section folded">
                <textarea class="competencia-especifica" id="competenciaEspecifica${i}" placeholder="COMPETENCIA ESPECÍFICA DE LA UNIDAD ${i + 1}" style="color: #8f8fd6; width: 451px; height: 75px;"></textarea>
                <div class="animated-button">
                    <span class="icon-pencil"><i class="fa fa-pencil"></i></span>
                    <span class="next-button competencia-especifica"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section numero-semanas-section folded">
                <input class="numero-semanas" type="number" id="numeroSemanas${i}" placeholder="NÚMERO DE SEMANAS ${i + 1}">
                <div class="animated-button">
                    <span class="icon-calendar"><i class="fa fa-calendar"></i></span>
                    <span class="next-button numero-semanas"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section resultado-aprendizaje-section folded">
                <textarea class="resultado-aprendizaje" id="resultadoAprendizaje${i}" placeholder="RESULTADO DE APRENDIZAJE ${i + 1}" style="color: #8f8fd6; width: 451px; height: 75px;"></textarea>
                <div class="animated-button">
                    <span class="icon-bullseye"><i class="fa fa-bullseye"></i></span>
                    <span class="next-button resultado-aprendizaje"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section saber-section folded">
                <input class="saber" type="number" id="saber${i}" placeholder="PORCENTAJE DE SABER ${i + 1}" value="0" min="1" max="100">
                <div class="animated-button">
                    <span class="icon-percent1"><i class="fa fa-percent"></i></span>
                    <span class="next-button saber"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
            <div class="input-section hacer-ser-section folded">
                <input class="hacer-ser" type="number" id="hacerSer${i}" placeholder="PORCENTAJE DE HACER-SER ${i + 1}" value="0" min="1" max="100">
                <div class="animated-button">
                    <span class="icon-percent2"><i class="fa fa-percent"></i></span>
                    <span class="next-button hacer-ser"><i class="fa fa-arrow-up"></i></span>
                </div>
            </div>
        `;
                unidadesSection.append(unidadHTML);
            }


            $('.unidad-aprendizaje').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-book').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-book').removeClass("next");
                }
            });

            $('.next-button.unidad-aprendizaje').click(function() {
                console.log("Something");
                $(this).closest('.input-section').addClass("fold-up");
                $(this).closest('.input-section').next('.competencia-especifica-section').removeClass("folded");
            });


            $('.competencia-especifica').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-pencil').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-pencil').removeClass("next");
                }
            });

            $('.next-button.competencia-especifica').click(function() {
                console.log("Something");
                $(this).closest('.input-section').addClass("fold-up");
                $(this).closest('.input-section').next('.numero-semanas-section').removeClass("folded");
            });

            $('.numero-semanas').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-calendar').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-calendar').removeClass("next");
                }
            });

            $('.next-button.numero-semanas').click(function() {
                console.log("Something");
                $(this).closest('.input-section').addClass("fold-up");
                $(this).closest('.input-section').next('.resultado-aprendizaje-section').removeClass("folded");
            });

            $('.resultado-aprendizaje').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-bullseye').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-bullseye').removeClass("next");
                }
            });

            $('.next-button.resultado-aprendizaje').click(function() {
                console.log("Something");
                $(this).closest('.input-section').addClass("fold-up");
                $(this).closest('.input-section').next('.saber-section').removeClass("folded");
            });

            $('.saber').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-percent1').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-percent1').removeClass("next");
                }
            });

            $('.next-button.saber').click(function() {
                console.log("Something");
                $(this).closest('.input-section').addClass("fold-up");
                $(this).closest('.input-section').next('.hacer-ser-section').removeClass("folded");
            });



            $('.hacer-ser').on("change keyup paste", function() {
                if ($(this).val()) {
                    $(this).closest('.input-section').find('.icon-percent2').addClass("next");
                } else {
                    $(this).closest('.input-section').find('.icon-percent2').removeClass("next");
                }
            });

            $('.next-button.hacer-ser').click(function() {

                $(this).closest('.input-section').addClass("fold-up");


                let currentUnidad = $(this).closest('.input-section');
                let nextUnidad = currentUnidad.next('.input-section');


                if (nextUnidad.length === 0) {
                    console.log("Success");
                    $('.success').css("marginTop", 0);
                }
            });


            $(document).on("input", ".saber, .hacer-ser", function() {
                let valor = parseInt($(this).val());
                if (valor > 100) {
                    $(this).val(100);
                } else if (valor < 0 || isNaN(valor)) {
                    $(this).val(0);
                }
            });

            
            
            
            
            
        });
        $('#numUnidades').on("input", function() {
            let valor = parseInt($(this).val());
            if (valor > 3) {
                $(this).val(3);
            } else if (valor < 1 || isNaN(valor)) {
                $(this).val(1);
            }
        });
        // $(document).on(".numUnidades", function() {
        //     let valor = parseInt($(this).val());
        //     if (valor > 3) {
        //         $(this).val(3);
        //     } else if (valor < 0 || isNaN(valor)) {
        //         $(this).val(0);
        //     }
        // })
        $('#descargarTabla').click(function() {

            let cuatrimestre = $('#cuatrimestre').val();
            let asignatura = $('#asignatura').val();
            let objetivoGeneral = $('#objetivo').val();
            let numUnidades = $('#numUnidades').val();
            let competencia = $('#competencia').val();
            let profesor = $('#profesor').val();
            let duracion = $('#duracion').val();
            let familia = $('#familiaCarrera').val();

            let unidades = [];
            for (let i = 0; i < numUnidades; i++) {
                let unidad = {
                    unidadAprendizaje: $(`#unidadAprendizaje${i}`).val(),
                    competenciaEspecifica: $(`#competenciaEspecifica${i}`).val(),
                    numeroSemanas: $(`#numeroSemanas${i}`).val(),
                    resultadoAprendizaje: $(`#resultadoAprendizaje${i}`).val(),
                    saber: $(`#saber${i}`).val(),
                    hacerSer: $(`#hacerSer${i}`).val()
                };
                unidades.push(unidad);
            }


            let informacionCapturada = {
                familia: familia,
                cuatrimestre: cuatrimestre,
                asignatura: asignatura,
                objetivoGeneral: objetivoGeneral,
                numUnidades: numUnidades,
                competencia: competencia,
                profesor: profesor,
                duracion: duracion,
                unidades: unidades
            };


            $.ajax({
                url: 'word.php',
                method: 'POST',
                data: JSON.stringify(informacionCapturada),
                contentType: 'application/json',
                success: function(response) {
                    window.location.href = './PlanEstudiosGenerado.docx';
                },
                error: function(xhr, status, error) {
                    console.log("Error al enviar los datos: " + error);
                }
            });
        });
    </script>





</body>

</html>
