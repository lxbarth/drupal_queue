<?php
// $Id$

/**
 * @file
 * Entry point for worker calls.
 */
include_once './includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
drupal_queue_cron_run();
