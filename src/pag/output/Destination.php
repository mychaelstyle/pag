<?php
/**
 * Interface output destination
 * @package pag
 * @subpackage output
 */
namespace pag\output;

/**
 * Interface output destination
 * @package pag
 * @subpackage output
 */
interface Destination {
  /**
   * output
   * @param array $attrs
   * @param array $messages
   */
  public function out(array $attrs,array $messages);
}
