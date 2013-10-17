<?php
/**
 * Output Http Response
 * @package pag
 * @subpackage output
 */
namespace pag\output;

/**
 * Output Http Response
 * @package pag
 * @subpackage output
 */
class HttpResponse extends Standard implements Destination {
  /**
   * @var headers
   */
  protected $headers = array();

  /**
   * constructor
   */
  public function __construct(){
    parent::__construct();
    $this->headers = array();
  }
  /**
   * print http response headers
   */
  public function printHeaders(){
    foreach($this->headers as $key as $value){
      if(is_array($value)){
        foreach($value as $val){
          header($key.': '.$val);
        }
      } else {
        header($key.': '.$value);
      }
    }
  }
  /**
   * output as JSON strings
   */
  public function out(array $attrs,array $messages){
    $this->printHeaders();
    parent::out($attrs,$messages);
  }

}
