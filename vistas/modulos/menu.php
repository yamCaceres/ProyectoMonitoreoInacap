<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>
				<a href="tabla-temp">
					<i class="fa fa-thermometer-empty"></i>
					<span>Lecturas Temperaturas</span>
				</a>
			</li>


			<li>
				<a href="listadoAlertas">
					<i class="fa fa-exclamation-triangle"></i>
					<span>Alertas</span>
				</a>
			</li>

			';

		}

		?>

		</ul>


	 </section>

</aside>
