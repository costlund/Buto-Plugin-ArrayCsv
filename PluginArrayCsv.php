<?php
class PluginArrayCsv{
  public function array_to_csv($array){
    $csv = null;
    foreach ($array as $value) {
      foreach ($value as $value2) {
        /**
         * Replace '"'.
         */
        $str = wfPhpfunc::str_replace('"', '""', $value2);
        /**
         * Set ...
         */
        $str = '"'.$str.'"';
        /**
         * Finaly to csv.
         */
        $csv .= $str.';';
      }
      $csv .= "\n";
    }
    return  $csv;
  }
}