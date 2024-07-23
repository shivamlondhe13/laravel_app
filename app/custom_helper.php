<?php
function Numberformat($num)
{
  if ($num == "") {
    return "0.00";
  }
  $num = str_replace(",", "", $num);
  $num = number_format($num, 2) ?? "00.0";
  $num = str_replace(",", "", $num);
  $num2 = $num;
  if ($num < 0) { //>
    $num2 = str_replace("-", "", $num);
  }
  $n = explode(".", $num2);
  $a = str_split($n[0]);
  $output = '';
  foreach (array_reverse($a) as $key => $value) {
    if ($key == 2) {
      $output .= $value . ",";
    } else if ($key > 3 && ($key + 1) % 2 == 1) {
      $output .= $value . ",";
    } else
      $output .= $value;
  }
  $c = str_split($output);
  $d = array_reverse($c);
  if ($d[0] == ",") {
    array_shift($d);
  }
  $output = implode("", $d);
  if ($num < 0) { //>
    return "-" . $output . "." . $n[1];
  }
  return $output . "." . $n[1];
}
