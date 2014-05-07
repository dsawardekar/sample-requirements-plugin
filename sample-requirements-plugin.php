<?php
/*
Plugin Name: sample-requirements-plugin
Description: A sample plugin to demo requirements
Version: 0.1.0
Author: Darshan Sawardekar
Author URI: http://pressing-matters.io/
License: GPLv2
*/

require_once(__DIR__ . '/lib/SampleRequirementsPlugin/Requirements.php');

use SampleRequirementsPlugin\MinRequirements;
use SampleRequirementsPlugin\FauxPlugin;
use SampleRequirementsPlugin\Plugin;

function sample_requirements_plugin_main() {
  $requirements = new MinRequirements();

  if ($requirements->satisfied()) {
    require_once(__DIR__ . '/lib/SampleRequirementsPlugin/Plugin.php');

    $plugin = new Plugin();
    $plugin->enable();
  } else {
    $plugin = new FauxPlugin('Sample Requirements Plugin', $requirements->getResults());
    $plugin->activate(__FILE__);
  }
}

sample_requirements_plugin_main();
