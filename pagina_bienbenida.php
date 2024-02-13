<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IXTLAMACHILIZLI</title>
    <style>
        body{
            background-color: aquamarine;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }

        button {
            background-color: transparent;
            color: white;
            outline: none;
            cursor: pointer;
            /*padding: 10px 40px;*/
            border: none;
            /*font-size: 14px;*/
            transition: all 300ms;
        }

        a {
            color: white;
            cursor: pointer;
            transition: all 300ms;
            text-decoration: none;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
            text-align: left;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #555;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: green;
            color: white;
            padding: 10px;
        }

        .company-name {
            text-align: center;
        }

        .buttons {
            display: flex;
        }

        .buttons button {
            margin-left: 10px;
        }

        /* Estilos para la sección de contenidos */
        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .subject {
            width: calc(25% - 20px);
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
        }

        /* Estilos para la sección "containers" y clases "clase" */
        .containers {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #555;
            color: white;
            width: 100%;
        }

        .clase {
            border: 1px solid whitesmoke;
            padding: 10px;
            margin: 9px;
            width: calc(20% - 30px);
            /* Ajusta el ancho para que haya 4 elementos en una fila */
        }

        .nombre {
            font-weight: bold;
        }

        .profesor {
            font-style: italic;
        }

        .trabajo {
            margin-top: 10px;
            padding: 30px;
            gap: 20px;
            text-align: left;
        }

        .banner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .buttons {
            display: flex;
            gap: 10px;
            /* Espacio entre los botones */
        }

        /* Agrega un estilo para manejar tamaños de pantalla pequeños */
        @media only screen and (max-width: 1003px) {
            .dropdown-content {
                width: 100%;
                /* Ocupar el ancho completo en pantallas pequeñas */
                box-sizing: border-box;
                /* Evita que el ancho se extienda más allá del 100% */
            }

            .subject {
                width: calc(50% - 20px);
                /* Ajusta el ancho de los elementos de la sección de contenidos */
            }

            .clase {
                width: calc(99% - 30px);
                /* Ajusta el ancho de los elementos en la sección "containers" */
            }

            .buttons {
                flex-direction: column;
                align-items: center;
                /* Centra los elementos en dispositivos móviles */
            }

            .header {
                width: 100%;
                box-sizing: border-box;
                flex-direction: column;
            }

            .company-name {
                visibility: hidden;
                display: none;
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="header">
            <div class="menu">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="menu_button"><button>Menu</button></a>
                        <div class="dropdown-content">
                            <a href="pagina_bienbenida.php">Inicio</a>
                            <a href="php/cerrar_sesion.php">Cerrar sesion</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="company-name">
                <h1>IXTLAMACHILIZLI</h1>
            </div>
            <div class="buttons">
                <button>Unirse</button>
                <button>Crear</button>
            </div>
        </div>

        <div class="containers">
            <div id="informatica" class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div class="clase">
                <div class="nombre">
                    <h2>
                        <a href="tablon.html">INFORMATICA</a>
                    </h2>
                </div>
                <div class="profesor">
                    <h3>Fernando</h3>
                </div>
                <div class="trabajo">Trabajo de clase</div>
            </div>
            <div id="crearClaseForm" style="display: none;">
                <label for="nombreClase">Nombre de la clase:</label>
                <input type="text" id="nombreClase" required>
                <label for="nombreProfesor">Nombre del profesor:</label>
                <input type="text" id="nombreProfesor" required>
                <button id="guardarClaseBtn">Guardar</button>
            </div>
    </main>
    <script>
        document.querySelectorAll('.clase-link').forEach(link => {
            link.addEventListener('click', (event) => {
                event.preventDefault();
                const targetId = link.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 50, // Ajusta según sea necesario
                        behavior: 'smooth'
                    });
                }
            });
        });
        document.addEventListener("DOMContentLoaded", function () {
            var dropdowns = document.querySelectorAll(".dropdown");

            dropdowns.forEach(function (dropdown) {
                dropdown.addEventListener("click", function () {
                    this.querySelector(".dropdown-content").classList.toggle("show");
                });
            });

            window.onclick = function (event) {
                if (!event.target.matches('.dropdown')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    for (var i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>