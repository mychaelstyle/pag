<?php
/**
 * output class
 * @package pag
 */
namespace pag;

use output\Destination;

/**
 * pag output class
 * @package pag
 */
class Output {
  /**
   * @var attrs map of attributes
   */
  private $attrs = array();
  /**
   * @var messages map
   */
  private $messages = array();
  /**
   * @var destinations
   */
  private $destinations = array();
  /**
   * constructor
   */
  public function __construct(){
    $this->attrs = array();
  }
 
  /**
   * set and get attribute
   * @param string $key
   * $param mixed $value
   * @return mixed the value set.
   */
  public function attr($key,$value=null){
    if(is_null($value)){
      return isset($this->attrs[$key]) ? $this->attrs[$key] : null;
    }
    $this->attrs[$key] = $value;
    return $value;
  }

  /**
   * set message
   * @param string $key
   * $param mixed $value
   * @return mixed the value set.
   */
  public function message($msg, $code=null, $priority='info'){
    if(!isset($this->messages[$priority]){
      $this->messages[$priority] = array();
    }
    $this->messages[$priority] = array(
      'code'    => $code,
      'message' => $msg
    );
  }

  /**
   * add destinations
   * @param pag\output\Destination $dest
   */
  public function add(output\Destination $dest){
    $this->destinations[] = $dest;
  }

  /**
   * send output
   */
  public function out(){
    foreach($this->destinations as $dest){
      $dest->out($this->attrs,$this->messages);
    }
  }
}
