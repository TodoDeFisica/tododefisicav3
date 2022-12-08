<header class="header">
    <a href="https://cecyt3.ipn.mx" class="logo">
        <img src="imagenes/cecyt3.png" alt="logo">
        <h2 class="CECyT3">CECyT 3</h2>
    </a>
        <nav>
            <ul class ="menu-horizontal">
                <li><a href="index.php" class="nav link">&nbsp;Inicio&nbsp;</a></li>
                <li>
                    <a href="usuario/perfil.php" class="nav link">&nbsp;<?php echo"$nombre";?>&nbsp;</a>
                    <ul class="menu-vertical">
                        <li><img src="imagenes/cecyt3.png" style="width: 120px; height: 120px;"></li>
                        <li><a href="usuario/perfil.php">Administra tu cuenta</a></li>
                        <li><a href="salir_.php">Cerrar sesión</a></li>
                    </ul>
                </li>
                <li><a href="contacto.html" class="nav link">&nbsp;Contacto&nbsp;</a></li>
                <div class="navegacion">
				<input type="search" placeholder="Buscar . . ." id="inputBusqueda">
			</div>
		</div>
		<div class="search" id="search">
			<table class="search-table" id="searchTable">
				<thead>
					<tr>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="mecanica/mecanica.php">Mecanica</a></td>
					</tr>
					<tr>
						<td><a href="moderna/fisica-moderna.php">Fisica Moderna</a></td></a>
					</tr>
					<tr>
						<td><a href="calor/calor.php">Calor</a></td>
					</tr>
					<tr>
						<td><a href="electromagnetismo/electromagnetismo.php">Electromagnetismo</a></td>
					</tr>
					<tr>
						<td><a href="contacto.html">Contacto</a></td>
					</tr>
					<tr>
						<td><a href="#">Reporte de error</a></td>
					</tr>
				</tbody>
			</table>
		</div>
            </ul>
        </nav>
</header>