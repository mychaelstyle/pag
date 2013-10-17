<?php
/**
 * Output Http Response
 * @package pag
 * @subpackage output
 */
namespace pag\output;

/**
 * Output as Http Response
 * @package pag
 * @subpackage output
 */
class HttpTemplate extends \pag\output\HttpResponse implements \pag\Output {
  /**
   * base directory
   */
  protected $baseDir = dirname(__FILE__);
  protected $uri;

  /**
   * constructor
   */
  public function __construct(){
    parent::__construct();
  }

  /**
   * set template file
   */
  public function template($uri){
    $this->uri = $uri;
  }

  /**
   * output as JSON strings
   */
  public function out(array $attrs,array $messages){
    $this->printHeaders();
    require($this->baseDir.$this->uri);
  }

}
