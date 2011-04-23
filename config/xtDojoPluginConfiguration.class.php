<?php
/**
 * Plugin configuration file. You can customize folders and
 * some other optons here.
 *
 * @package xtDojoPlugin
 * @subpackage config
 * 
 * @author Sadikov Vladimir aka DMC <sadikoff@gmail.com>
 * @author Patrick Knut Leberecht <patrick.knut.leberecht@gmail.com>
 * 
 * @version 2.0 DEV
 */

class xtDojoPluginConfiguration extends sfPluginConfiguration
{
  /**
   * Configures the plugin.
   *
   * This method is called before the plugin's classes have been added to sfAutoload.
   */
  public function configure()
  {
    $sf_web_dir = sfConfig::get('sf_web_dir');

    $parameters = array(
        
        'dojo_path'  => '/js/src/dojo',
        'dojo_prod'  => '/js/apps',
        
        'dojo_cdn'   => array (
            'aol'    => 'http://o.aolcdn.com/dojo/',
            'google' => 'http://ajax.googleapis.com/ajax/libs/dojo/'
        ),
        
        'dj_sdk_url' => 'http://download.dojotoolkit.org/release-{ver}/dojo-release-{ver}-src.tar.gz',
        
    );

    sfConfig::add($parameters);
  }
}