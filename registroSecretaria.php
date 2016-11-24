<?php session_start();

	if (isset($_SESSION['usuario'])){
		require 'views/registroSecretaria.view.php';
	} else {
		header('Location: espacioSecretaria.php');
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombres         = $_POST['nombre']; 
		$apellidoPaterno = $_POST['apePaterno'];
		$apellidoMaterno = $_POST['apeMaterno'];
		$sexo              = $_POST['sexo'];
		$carrera        = $_POST['carrera'];
		$cuenta         = filter_var(strtolower($_POST['cuenta']), FILTER_SANITIZE_STRING);
		$pass1            = $_POST['password1'];
		$pass2         = $_POST['password2'];

        $pass1         = hash('sha512', $pass1);
        $pass2         = hash('sha512', $pass2);

		//echo "$nombres - $apellidoPaterno - $apellidoMaterno - $pass1 - $pass2";
		$errores = '';

		if(empty($nombres) or empty($apellidoPaterno) or empty($sexo) or empty($cuenta) or empty($pass1) or empty($pass2) or empty($carrera)){
			$errores .= '<li>por favor rellene los campos obligatorios</li>';

			echo $errores;
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=seg','root','');
			}catch(PDOExeption $e){
				echo "Error: " . $e->getMessage();
			}

			$statement = $conexion->prepare('SELECT * FROM usuario WHERE CUENTA = :usuario LIMIT 1');
            $statement->execute(array(':usuario' => $cuenta));

            $resultado= $statement->fetch();
            //print_r($resultado);

            if($resultado != false){
                $errores .= '<li>el nombre de usuario ya existe</li>';
                echo 'el nombre de usarioya existe';
            }
		}

		if ($errores == ''){
			$statement = $conexion->prepare('INSERT INTO usuario (ID_USUARIO,ID_CARRERA,NOMBRE_USUARIO,APELLPA_USUARIO,
                                            APELLMA_USUARIO,ESTADO_USUARIO,GENERO_USUARIO,CUENTA,CONTRASENIA) 
			                                VALUES (null, :carrera, :nombres, :apellPa, :apellMat, null, :sexo, :cuenta, :contrasenia)');
			$statement->execute(array(
				':carrera'=>$carrera, 
				':nombres'=>$nombres, 
				':apellPa'=>$apellidoPaterno, 
				':apellMat'=>$apellidoMaterno , 
				':sexo'=>$sexo, 
				':cuenta'=>$cuenta, 
				':contrasenia'=>$pass1
			));
			echo 'datos insertados corectamente';
		}
	}
