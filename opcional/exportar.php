<?php
header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Pragma: no-cache");
header("content-disposition: attachment;filename=Orden-".date('d-m-Y').".xls");

$almacen = $_GET['alm'];
$oc = $_GET['oc'];
$barras = "Codigo de Barras";
$cantidad = "Cantidad";

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

echo "$almacen \t \t $barras \t $cantidad \n $oc";
echo "\t \t $A \t $A1 \n";
echo "\t \t $B \t $B1 \n";
echo "\t \t $C \t $C1 \n";
echo "\t \t $D \t $D1 \n";
echo "\t \t $E \t $E1 \n";
echo "\t \t $F \t $F1 \n";
echo "\t \t $G \t $G1 \n";
echo "\t \t $H \t $H1 \n";
echo "\t \t $I \t $I1 \n";
echo "\t \t $J \t $J1 \n";
echo "\t \t $K \t $K1 \n";
echo "\t \t $L \t $L1 \n";
echo "\t \t $M \t $M1 \n";
echo "\t \t $N \t $N1 \n";
echo "\t \t $O \t $O1 \n";
echo "\t \t $P \t $P1 \n";
echo "\t \t $R \t $R1 \n";
echo "\t \t $S \t $S1 \n";
echo "\t \t $T \t $T1 \n";
echo "\t \t $U \t $U1 \n";
echo "\t \t $V \t $V1 \n";
echo "\t \t $W \t $W1 \n";
echo "\t \t $X \t $X1 \n";
echo "\t \t $Y \t $Y1 \n";
echo "\t \t $Z \t $Z1 \n";



?>