<?php

  #declare(strict_types=1);

  $contato = 1;
  $mensagem = "Olá";
  $versao = array('1.1','2','3.4');
  print_r($versao);
  echo '<hr />';

  echo '<br />';
  $primeiro_nome = "Luan";
  echo $primeiro_nome;
  echo '<br />';
  $ultimo_nome = "Lucas";
  echo $ultimo_nome;
  echo '<hr />';
 

  $time = array('Maria','Joao','Ana');
  echo $time[2];
  echo '<br />';
  print_r($time);
  echo '<hr />';

  echo 'a: ['. TRUE .']<br />';
  echo 'a: ['. FALSE .']<br />';
  echo 'a: ['. (20 > 9) .']<br />';
  echo 'b: ['. (5 == 6) .']<br />';
  echo 'c: ['. (1 == 0) .']<br />';
  echo 'd: ['. (1 === '1') .']<br />';
  echo '<hr />';

  $idade = 30;
  echo 'e: ['. "$idade" .'] <br />';

  echo '<hr />';

  $saldo = 10;
  if ($saldo<100)(
    $deposito = 1000;
    $saldo += $deposito;
  )

  echo $saldo;
?>


