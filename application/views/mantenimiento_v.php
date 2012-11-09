<html>
 <head>
	 <title><?=$page_title?></title>
 </head>
 <body>
	 <form name="tabla" action="" method="POST">
		 <table border="solid">
			 <thead>
				 <tr>
					 <th></th>
					 <th>idRecurso</th>
					 <th>Recurso</th>

				 </tr>
			 </thead>
			 <tbody>
				 <?php foreach ($usuarios as $u):?>
				
				 <tr>
					 <td><input type="radio" name="editar" value="<?=$u->idrecursos?>"/></td>
					 <td><?=$u->idrecursos?></td>
					 <td><?=$u->recurso?></td>

				 </tr>
				
				 <?php endforeach;?>
			 </tbody>
		 </table>
		 <input type="submit" value="Editar" />
	 </form>
	 
	 <p></p>

	<form name="alta" action="http://localhost/crud/index.php/mantenimiento/alta" method="POST">
		 <table>
			 <tr>
				 <td>Recurso</td>
				 <td><input type="text" name="txtTelefono" /></td>
			 </tr>
		 </table>
		 <input type="submit" value="Alta"/>
	 </form>


 </body>
</html>

