<style type="text/css">
	html{
		overflow-x:hidden;
	}
</style>

<?php 
$usuario ="capptus";
$pass ="Encuentro1";
$servidor ="SERVER-PC";
$basedatos ="lucembarques";
$info = array('Database'=>$basedatos, 'UID'=>$usuario, 'PWD'=>$pass); 
$conexion = sqlsrv_connect($servidor, $info); 

if(!$conexion){
	die( print_r( sqlsrv_errors(), true));
}

$query2 = "SELECT cm_name, cm_id FROM cm_mstr ORDER BY cm_name";
$registros2 = sqlsrv_query($conexion, $query2);
?>

<form action="exportar.php" method="GET" name="exp">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-7 col-lg-7">
				<table style="border-collapse: separate; border-spacing:  5px 7px;">
					<tr>
						<td>
							<select id="cli" class="form-control" name="alm" onkeyup="saltar(event,'nf')" style="width: 400px; margin-right: 10px;">
							<?php
							header('Content-Type: text/html; charset=ISO-8859-1');
							echo "<option>Seleccione...</option>";
						    
							while ($fila = sqlsrv_fetch_object($registros2)) {
								echo "<option value='".$fila->cm_id."'>".$fila->cm_name."</option>";
							}
							echo "</select>";
							?>
						</td>
						<td colspan="2">
							<input id="nf" class="form-control" type="number" name="oc" placeholder="NUMERO FACTURA" style="width: 190px;">
						</td>		
					</tr>

					<tr></tr><tr></tr>
					
					<tr>
						<td><input class="form-control" type="number" name="A" placeholder="Codigo de Barras" onkeyup="saltar(event,'a1')" style="width: 400px;"></td>
						<td><input id="a1" class="form-control" type="number" name="A1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('1');foco('b')" value="Siguiente"></td>
					</tr>

					<tr id="1" style="display: none;">
						<td><input id="b" class="form-control" type="number" name="B" placeholder="Codigo de Barras" onkeyup="saltar(event,'b1')" style="width: 400px;"></td>
						<td><input id="b1" class="form-control" type="number" name="B1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('2');foco('c')" value="Siguiente"></td>
					</tr>

					<tr id="2" style="display: none;">
						<td><input id="c" class="form-control" type="number" name="C" placeholder="Codigo de Barras" onkeyup="saltar(event,'c1')" style="width: 400px;"></td>
						<td><input id="c1" class="form-control" type="number" name="C1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('3');foco('d')" value="Siguiente"></td>
					</tr>

					<tr id="3" style="display: none;">
						<td><input id="d" class="form-control" type="number" name="D" placeholder="Codigo de Barras" onkeyup="saltar(event,'d1')" style="width: 400px;"></td>
						<td><input id="d1" class="form-control" type="number" name="D1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('4');foco('e')" value="Siguiente"></td>
					</tr>

					<tr id="4" style="display: none;">
						<td><input id="e" class="form-control" type="number" name="E" placeholder="Codigo de Barras" onkeyup="saltar(event,'e1')" style="width: 400px;"></td>
						<td><input id="e1" class="form-control" type="number" name="E1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('5');foco('f')" value="Siguiente"></td>
					</tr>

					<tr id="5" style="display: none;">
						<td><input id="f" class="form-control" type="number" name="F" placeholder="Codigo de Barras" onkeyup="saltar(event,'f1')" style="width: 400px;"></td>
						<td><input id="f1" class="form-control" type="number" name="F1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('6');foco('g')" value="Siguiente"></td>
					</tr>

					<tr id="6" style="display: none;">
						<td><input id="g" class="form-control" type="number" name="G" placeholder="Codigo de Barras" onkeyup="saltar(event,'g1')" style="width: 400px;"></td>
						<td><input id="g1" class="form-control" type="number" name="G1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('7');foco('h')" value="Siguiente"></td>
					</tr>

					<tr id="7" style="display: none;">
						<td><input id="h" class="form-control" type="number" name="H" placeholder="Codigo de Barras" onkeyup="saltar(event,'h1')" style="width: 400px;"></td>
						<td><input id="h1" class="form-control" type="number" name="H1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('8');foco('i')" value="Siguiente"></td>
					</tr>

					<tr id="8" style="display: none;">
						<td><input id="i" class="form-control" type="number" name="I" placeholder="Codigo de Barras" onkeyup="saltar(event,'i1')" style="width: 400px;"></td>
						<td><input id="i1" class="form-control" type="number" name="I1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('9');foco('j')" value="Siguiente"></td>
					</tr>

					<tr id="9" style="display: none;">
						<td><input id="j" class="form-control" type="number" name="J" placeholder="Codigo de Barras" onkeyup="saltar(event,'j1')" style="width: 400px;"></td>
						<td><input id="j1" class="form-control" type="number" name="J1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('10');foco('k')" value="Siguiente"></td>
					</tr>

					<tr id="10" style="display: none;">
						<td><input id="k" class="form-control" type="number" name="K" placeholder="Codigo de Barras" onkeyup="saltar(event,'k1')" style="width: 400px;"></td>
						<td><input id="k1" class="form-control" type="number" name="K1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('11');foco('l')" value="Siguiente"></td>
					</tr>

					<tr id="11" style="display: none;">
						<td><input id="l" class="form-control" type="number" name="L" placeholder="Codigo de Barras" onkeyup="saltar(event,'l1')" style="width: 400px;"></td>
						<td><input id="l1" class="form-control" type="number" name="L1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('12');foco('m')" value="Siguiente"></td>
					</tr>

					<tr id="12" style="display: none;">
						<td><input id="m" class="form-control" type="number" name="M" placeholder="Codigo de Barras" onkeyup="saltar(event,'m1')" style="width: 400px;"></td>
						<td><input id="m1" class="form-control" type="number" name="M1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('13');foco('n')" value="Siguiente"></td>
					</tr>

					<tr id="13" style="display: none;">
						<td><input id="n" class="form-control" type="number" name="N" placeholder="Codigo de Barras" onkeyup="saltar(event,'n1')" style="width: 400px;"></td>
						<td><input id="n1" class="form-control" type="number" name="N1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('14');foco('o')" value="Siguiente"></td>
					</tr>

					<tr id="14" style="display: none;">
						<td><input id="o" class="form-control" type="number" name="O" placeholder="Codigo de Barras" onkeyup="saltar(event,'o1')" style="width: 400px;"></td>
						<td><input id="o1" class="form-control" type="number" name="O1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('15');foco('p')" value="Siguiente"></td>
					</tr>

					<tr id="15" style="display: none;">
						<td><input id="p" class="form-control" type="number" name="P" placeholder="Codigo de Barras" onkeyup="saltar(event,'p1')" style="width: 400px;"></td>
						<td><input id="p1" class="form-control" type="number" name="P1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('16');foco('q')" value="Siguiente"></td>
					</tr>

					<tr id="16" style="display: none;">
						<td><input id="q" class="form-control" type="number" name="Q" placeholder="Codigo de Barras" onkeyup="saltar(event,'q1')" style="width: 400px;"></td>
						<td><input id="q1" class="form-control" type="number" name="Q1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('17');foco('r')" value="Siguiente"></td>
					</tr>

					<tr id="17" style="display: none;">
						<td><input id="r" class="form-control" type="number" name="R" placeholder="Codigo de Barras" onkeyup="saltar(event,'r1')" style="width: 400px;"></td>
						<td><input id="r1" class="form-control" type="number" name="R1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('18');foco('s')" value="Siguiente"></td>
					</tr>

					<tr id="18" style="display: none;">
						<td><input id="s" class="form-control" type="number" name="S" placeholder="Codigo de Barras" onkeyup="saltar(event,'s1')" style="width: 400px;"></td>
						<td><input id="s1" class="form-control" type="number" name="S1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('19');foco('t')" value="Siguiente"></td>
					</tr>

					<tr id="19" style="display: none;">
						<td><input id="t" class="form-control" type="number" name="T" placeholder="Codigo de Barras" onkeyup="saltar(event,'t1')" style="width: 400px;"></td>
						<td><input id="t1" class="form-control" type="number" name="T1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('20');foco('u')" value="Siguiente"></td>
					</tr>

					<tr id="20" style="display: none;">
						<td><input id="u" class="form-control" type="number" name="U" placeholder="Codigo de Barras" onkeyup="saltar(event,'u1')" style="width: 400px;"></td>
						<td><input id="u1" class="form-control" type="number" name="U1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('21');foco('v')" value="Siguiente"></td>
					</tr>

					<tr id="21" style="display: none;">
						<td><input id="v" class="form-control" type="number" name="V" placeholder="Codigo de Barras" onkeyup="saltar(event,'v1')" style="width: 400px;"></td>
						<td><input id="v1" class="form-control" type="number" name="V1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('22');foco('w')" value="Siguiente"></td>
					</tr>

					<tr id="22" style="display: none;">
						<td><input id="w" class="form-control" type="number" name="W" placeholder="Codigo de Barras" onkeyup="saltar(event,'w1')" style="width: 400px;"></td>
						<td><input id="w1" class="form-control" type="number" name="W1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('23');foco('x')" value="Siguiente"></td>
					</tr>

					<tr id="23" style="display: none;">
						<td><input id="x" class="form-control" type="number" name="X" placeholder="Codigo de Barras" onkeyup="saltar(event,'x1')" style="width: 400px;"></td>
						<td><input id="x1" class="form-control" type="number" name="X1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('24');foco('y')" value="Siguiente"></td>
					</tr>

					<tr id="24" style="display: none;">
						<td><input id="y" class="form-control" type="number" name="Y" placeholder="Codigo de Barras" onkeyup="saltar(event,'y1')" style="width: 400px;"></td>
						<td><input id="y1" class="form-control" type="number" name="Y1" placeholder="Cantidad" style="width: 100px;"></td>
						<td><input class="form-control" type="button" onclick="sgte('25');foco('z')" value="Siguiente"></td>
					</tr>

					<tr id="25" style="display: none;">
						<td><input id="z" class="form-control" type="number" name="Z" placeholder="Codigo de Barras" onkeyup="saltar(event,'z1')" style="width: 400px;"></td>
						<td><input id="z1" class="form-control" type="number" name="Z1" placeholder="Cantidad" style="width: 100px;"></td>
					</tr>
				</table>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-5" style="float: right; margin-right: -100">
				<button class="btn btn-default" style="margin-top: 10px;"><a href="#" onclick="document.exp.submit()" >GUARDAR </a><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
				<button class="btn btn-default" style="margin-top: 10px;"><a href="#" onclick="window.location.reload()">NUEVA FACTURA </a><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
			</div>
		</div>
	</div>
</form>