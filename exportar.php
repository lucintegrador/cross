<?php
header("Content-type: application/txt");
header("Expires: 0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=ORDEN-".date('d-m-Y').".txt");

$almacen = $_GET['alm'];
$fac = $_GET['oc'];
$fecha = date('Ymd');
$num = "0600";


#Y=año
#m=mes
#d=dia
#h=hora
#i=minutos

$A = $_GET['A']; $A1 = $_GET['A1'];
$B = $_GET['B']; $B1 = $_GET['B1']; 
$C = $_GET['C']; $C1 = $_GET['C1']; 
$D = $_GET['D']; $D1 = $_GET['D1']; 
$E = $_GET['E']; $E1 = $_GET['E1']; 
$F = $_GET['F']; $F1 = $_GET['F1']; 
$G = $_GET['G']; $G1 = $_GET['G1']; 
$H = $_GET['H']; $H1 = $_GET['H1']; 
$I = $_GET['I']; $I1 = $_GET['I1']; 
$J = $_GET['J']; $J1 = $_GET['J1']; 
$K = $_GET['K']; $K1 = $_GET['K1']; 
$L = $_GET['L']; $L1 = $_GET['L1']; 
$M = $_GET['M']; $M1 = $_GET['M1']; 
$N = $_GET['N']; $N1 = $_GET['N1'];
$O = $_GET['O']; $O1 = $_GET['O1'];
$P = $_GET['P']; $P1 = $_GET['P1'];
$Q = $_GET['Q']; $Q1 = $_GET['Q1'];
$R = $_GET['R']; $R1 = $_GET['R1'];
$S = $_GET['S']; $S1 = $_GET['S1'];
$T = $_GET['T']; $T1 = $_GET['T1'];
$U = $_GET['U']; $U1 = $_GET['U1'];
$V = $_GET['V']; $V1 = $_GET['V1'];
$W = $_GET['W']; $W1 = $_GET['W1'];
$X = $_GET['X']; $X1 = $_GET['X1'];
$Y = $_GET['Y']; $Y1 = $_GET['Y1'];
$Z = $_GET['Z']; $Z1 = $_GET['Z1'];

if ($A != "") {	echo "$fac;$fecha$num;$fecha$num;$A;$A1;$almacen; \r\n"; }
if ($B != "") { echo "$fac;$fecha$num;$fecha$num;$B;$B1;$almacen; \r\n"; }
if ($C != "") { echo "$fac;$fecha$num;$fecha$num;$C;$C1;$almacen; \r\n"; }
if ($D != "") { echo "$fac;$fecha$num;$fecha$num;$D;$D1;$almacen; \r\n"; }
if ($E != "") { echo "$fac;$fecha$num;$fecha$num;$E;$E1;$almacen; \r\n"; }
if ($F != "") { echo "$fac;$fecha$num;$fecha$num;$F;$F1;$almacen; \r\n"; }
if ($G != "") { echo "$fac;$fecha$num;$fecha$num;$G;$G1;$almacen; \r\n"; }
if ($H != "") { echo "$fac;$fecha$num;$fecha$num;$H;$H1;$almacen; \r\n"; }
if ($I != "") { echo "$fac;$fecha$num;$fecha$num;$I;$I1;$almacen; \r\n"; }
if ($J != "") { echo "$fac;$fecha$num;$fecha$num;$J;$J1;$almacen; \r\n"; }
if ($K != "") { echo "$fac;$fecha$num;$fecha$num;$K;$K1;$almacen; \r\n"; }
if ($L != "") { echo "$fac;$fecha$num;$fecha$num;$L;$L1;$almacen; \r\n"; }
if ($M != "") { echo "$fac;$fecha$num;$fecha$num;$M;$M1;$almacen; \r\n"; }
if ($N != "") { echo "$fac;$fecha$num;$fecha$num;$N;$N1;$almacen; \r\n"; }
if ($O != "") { echo "$fac;$fecha$num;$fecha$num;$O;$O1;$almacen; \r\n"; }
if ($P != "") { echo "$fac;$fecha$num;$fecha$num;$P;$P1;$almacen; \r\n"; }
if ($Q != "") { echo "$fac;$fecha$num;$fecha$num;$Q;$Q1;$almacen; \r\n"; }
if ($R != "") { echo "$fac;$fecha$num;$fecha$num;$R;$R1;$almacen; \r\n"; }
if ($S != "") { echo "$fac;$fecha$num;$fecha$num;$S;$S1;$almacen; \r\n"; }
if ($T != "") { echo "$fac;$fecha$num;$fecha$num;$T;$T1;$almacen; \r\n"; }
if ($U != "") { echo "$fac;$fecha$num;$fecha$num;$U;$U1;$almacen; \r\n"; }
if ($V != "") { echo "$fac;$fecha$num;$fecha$num;$V;$V1;$almacen; \r\n"; }
if ($W != "") { echo "$fac;$fecha$num;$fecha$num;$W;$W1;$almacen; \r\n"; }
if ($X != "") { echo "$fac;$fecha$num;$fecha$num;$X;$X1;$almacen; \r\n"; }
if ($Y != "") { echo "$fac;$fecha$num;$fecha$num;$Y;$Y1;$almacen; \r\n"; }
if ($Z != "") { echo "$fac;$fecha$num;$fecha$num;$Z;$Z1;$almacen; \r\n"; }

?>