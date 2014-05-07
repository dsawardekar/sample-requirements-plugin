<?php

namespace SampleRequirementsPlugin;

class Plugin {

  function enable() {
    add_action('init', array($this, 'doInit'));
  }

  function doInit() {
    echo "Sample Requirements Plugin Inited";
  }

}
