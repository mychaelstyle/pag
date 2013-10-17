<?php
/**
 * Output to standard out
 * @package pag
 * @subpackage output
 */
namespace pag\output;

/**
 * Output to standard out
 * @package pag
 * @subpackage output
 */
class Standard implements Destination {
  /**
   * construct
   */
  public function __construct(){
  }

  /**
   * output standard out as JSON string
   * @param array $attrs
   * @param array $messages
   */
  function out(array $attrs,array $messages){
    $map = array(
      'messages' => $messages,
      'data'     => $attrs
      );
    $out = json_encode($map);
    echo $out;
  }

}
