<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - IXTLAMACHILIZLI</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins',sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url(images/bg4.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        section{
            position: relative;
            max-width: 400px;
            background-color: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 3rem;
        }
        .inputbox ion-icon{
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2rem;
            top: 20px;
        }
        .forget{
            margin: 35px 0px;
            font-size: 0.85rem;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }
        .forget label{
            display: flex;
            align-items: center;
        }
        .forget label input{
            margin-right: 3px;
        }
        .forget a{
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
        .forget a:hover{
            text-decoration: underline;
        }
        h1{
            font-size: 2rem;
            color: #fff;
            text-align: center;
        }
        h2{
            color: #fff;
            text-align: center;
            margin: 5px;
        }
        .inputbox{
            position: relative;
            margin: 30px 0;
            max-width: 310px;
            border-bottom: 2px solid #fff;
        }
        .inputbox label{
            /*position: absolute;*/
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1rem;
            pointer-events: none;
            transition: all 0.5s ease-in-out;
        }
        input:focus ~ label,
        input:focus ~ label{
            top: -5px;
        }
        .inputbox input{
            width: 100%;
            height: 60px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1rem;
            padding: 0 35px 0 5px;
            color: #fff;
        }
        button{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background-color: rgba(255,255,255,1);
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.4s ease;
        }
        button:hover{
            background-color: rgba(255,255,255,0.5);
        }
        .register{
            font-size: 0.9rem;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }
        .register p a{
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        .register p a:hover{
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <section>
        <form action="php/login.php" method="POST">
            <h1>IXTLAMACHILIZLI</h1>
            <h2>Iniciar sesion</h2>
            <div class="inputbox">
                <label for="">Usuario</label>
                <input type="text" name="usuario" required>
            </div>
            <div class="inputbox">
                <label for="">Contraseña</label>
                <input type="password" name="contra" required>
            </div>
            <div class="register">
                <p>No tienes cuenta <a href="register.php">Registrate</a></p>
            </div>
            <button>Iniciar sesion</button>
        </form>
    </section>
</body>

</html>