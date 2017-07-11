<form action="exportar.php" method="GET" name="exp">
	<tr>
		<td>
			<select class="form-control" name="alm" style="width: 250px;"> 
				<option value=''>Seleccione...</option>
				<optgroup label="CARIBE">
					<option>CARIBE BUGA</option>				
					<option>CARIBE CENTRO</option>
					<option>CARIBE GALERIAS</option>
					<option>CARIBE PANAMERICANA</option>
				</optgroup>

				<optgroup label="COMERCIALIZADORA">
					<option>COMERCIALIZADORA FLORALIA</option>
					<option>COMERCIALIZADORA FLORALIA FLORESTA</option>
					<option>COMERCIALIZADORA FLORALIA MERCAMIO</option>
				</optgroup>

				<optgroup label="COMFANDI">
					<option>ANDI AMERICAS</option>
					<option>ANDI BUGA</option>
					<option>ANDI BUGALAGRANDE</option>
					<option>ANDI CALIPSO</option>
					<option>ANDI CANDELARIA</option>
					<option>ANDI CAÑAS GORDAS</option>
					<option>ANDI CHIMINANGOS</option>
					<option>ANDI CIUDADELA</option>
					<option>ANDI DECEPAZ</option>
					<option>ANDI DROGUERIA</option>
					<option>ANDI EL PRADO</option>
					<option>ANDI GINEBRA</option>
					<option>ANDI GUADALUPE</option>
					<option>ANDI JAMUNDI</option>
					<option>ANDI LA MERCED</option>
					<option>ANDI MORICHAL</option>
					<option>ANDI PPL TULUA</option>
					<option>ANDI RAPIT STA LUCIA CARTAGO</option>
					<option>ANDI SAN FERNANDO</option>
					<option>ANDI SAN NICOLAS</option>
					<option>ANDI SANTA ROSA</option>
					<option>ANDI TERMINAL</option>
					<option>ANDI TORRES</option>
					<option>ANDI VICTORIA</option>		
				</optgroup>

				<optgroup label="ALAMACENES LA 14">
					<option>L14 COSMOCENTRO</option>
					<option>L14 AV SEXTA</option>
					<option>L14 BENJAMIN HERRERA</option>
					<option>L14 BOG PALOQUEMAO</option>
					<option>L14 BUE AV SIMON BOLIVAR</option>
					<option>L14 CALIMA</option>
					<option>L14 CENTENARIO</option>
					<option>L14 CENTRO SUR</option>
					<option>L14 CENTRO</option>
					<option>L14 ESTACION</option>
					<option>L14 GIRARDOT</option>
					<option>L14 JAM ALFAGUARA</option>
					<option>L14 LIMONAR</option>
					<option>L14 MAN PARQUE CALDAS</option>
					<option>L14 NEI SAN JUAN PLAZA</option>
					<option>L14 PAL LLANOGRANDE</option>
					<option>L14 PANCE</option>
					<option>L14 PASOANCHO</option>
					<option>L14 PER LA SALLE</option>
					<option>L14 SAMECO</option>
					<option>L14 TUL CC TULUA</option>
					<option>L14 VALLE DEL LILI</option>
					<option>L14 YUM DAPA</option>
				</optgroup>

				<optgroup label="LA GRAN COLOMBIA">
					<option>LGC CIUDAD DE CALI</option>
					<option>LGC GAITAN</option>
					<option>LGC LA 70</option>
					<option>LGC LA CASONA</option>
					<option>LGC LOS MANGOS</option>
					<option>LGC SOLARES</option>
					<option>LGC ZAMORANO</option>
				</optgroup>

				<optgroup label="MERCAMIOS">
					<option>MM CALLE 5</option>
					<option>MM CIUDAD JARDIN</option>
					<option>MM LA 39</option>
					<option>MM PLAZA NORTE</option>
				</optgroup>

				<optgroup label="SURTIFAMILIAR">
					<option>SURTI ALAMEDA</option>
					<option>SURTI ALCAZAREZ</option>
					<option>SURTI BUGA</option>
					<option>SURTI CANEY</option>
					<option>SURTI CERRITO</option>
					<option>SURTI PORVENIR TULUA</option>
					<option>SURTI TULUA</option>
					<option>SURTI VALLE REAL</option>
				</optgroup>

				<optgroup>
					<option>QUICENO CANEY</option>
				</optgroup>	
			</select>
		</td>
		<td><input class="form-control" type="text" name="oc" placeholder="ORDEN DE COMPRA"></td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
	<tr>
		<td><input class="form-control" type="number" name="A" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="A1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte()" value="Siguiente"></td>
	</tr>

	<tr id="1" style="display: none;">
		<td><input class="form-control" type="number" name="B" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="B1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte1()" value="Siguiente"></td>
	</tr>

	<tr id="2" style="display: none;">
		<td><input class="form-control" type="number" name="C" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="C1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte2()" value="Siguiente"></td>
	</tr>

	<tr id="3" style="display: none;">
		<td><input class="form-control" type="number" name="D" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="D1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte3()" value="Siguiente"></td>
	</tr>

	<tr id="4" style="display: none;">
		<td><input class="form-control" type="number" name="E" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="E1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte4()" value="Siguiente"></td>
	</tr>

	<tr id="5" style="display: none;">
		<td><input class="form-control" type="number" name="F" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="F1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte5()" value="Siguiente"></td>
	</tr>

	<tr id="6" style="display: none;">
		<td><input class="form-control" type="number" name="G" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="G1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte6()" value="Siguiente"></td>
	</tr>

	<tr id="7" style="display: none;">
		<td><input class="form-control" type="number" name="H" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="H1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte7()" value="Siguiente"></td>
	</tr>

	<tr id="8" style="display: none;">
		<td><input class="form-control" type="number" name="I" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="I1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte8()" value="Siguiente"></td>
	</tr>

	<tr id="9" style="display: none;">
		<td><input class="form-control" type="number" name="J" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="J1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte9()" value="Siguiente"></td>
	</tr>

	<tr id="10" style="display: none;">
		<td><input class="form-control" type="number" name="K" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="K1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte10()" value="Siguiente"></td>
	</tr>

	<tr id="11" style="display: none;">
		<td><input class="form-control" type="number" name="L" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="L1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte11()" value="Siguiente"></td>
	</tr>

	<tr id="12" style="display: none;">
		<td><input class="form-control" type="number" name="M" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="M1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte12()" value="Siguiente"></td>
	</tr>

	<tr id="13" style="display: none;">
		<td><input class="form-control" type="number" name="N" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="N1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte13()" value="Siguiente"></td>
	</tr>

	<tr id="14" style="display: none;">
		<td><input class="form-control" type="number" name="O" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="O1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte14()" value="Siguiente"></td>
	</tr>

	<tr id="15" style="display: none;">
		<td><input class="form-control" type="number" name="P" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="P1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte15()" value="Siguiente"></td>
	</tr>

	<tr id="16" style="display: none;">
		<td><input class="form-control" type="number" name="Q" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="Q1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte16()" value="Siguiente"></td>
	</tr>

	<tr id="17" style="display: none;">
		<td><input class="form-control" type="number" name="R" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="R1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte17()" value="Siguiente"></td>
	</tr>

	<tr id="18" style="display: none;">
		<td><input class="form-control" type="number" name="S" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="S1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte18()" value="Siguiente"></td>
	</tr>

	<tr id="19" style="display: none;">
		<td><input class="form-control" type="number" name="T" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="T1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte19()" value="Siguiente"></td>
	</tr>

	<tr id="20" style="display: none;">
		<td><input class="form-control" type="number" name="U" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="U1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte20()" value="Siguiente"></td>
	</tr>

	<tr id="21" style="display: none;">
		<td><input class="form-control" type="number" name="V" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="V1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte21()" value="Siguiente"></td>
	</tr>

	<tr id="22" style="display: none;">
		<td><input class="form-control" type="number" name="W" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="W1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte22()" value="Siguiente"></td>
	</tr>

	<tr id="23" style="display: none;">
		<td><input class="form-control" type="number" name="X" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="X1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte23()" value="Siguiente"></td>
	</tr>

	<tr id="24" style="display: none;">
		<td><input class="form-control" type="number" name="Y" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="Y1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" onclick="sgte24()" value="Siguiente"></td>
	</tr>

	<tr id="25" style="display: none;">
		<td><input class="form-control" type="number" name="Z" placeholder="Codigo de Barras" style="width: 250px;"></td>
		<td>
			<select class="form-control" name="Z1">
				<option></option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>12</option>
				<option>18</option>
				<option>24</option>
				<option>30</option>
				<option>36</option>
			</select>
		</td>
		<td><input type="button" class="form-control" value="Siguiente"></td>
	</tr>

	<tr>
		<td><a href="#" onclick="document.exp.submit()" style="color: white; ">EXPORTAR</a></td> 
		<td><a href="#" onclick="window.location.reload()" style="color: white; ">NUEVA ORDEN</a></td>
	</tr>							
</form>
