<?php
/**
 * @defgroup plugins_pubIds_nbn
 */

/**
 * @file plugins/pubIds/nbn/index.php
 *
 * Copyright (c) 2003-2012 John Willinsky
 * Contributed by CILEA
 * Upgraded to OMP3 by Alfredo Cosco (2019)
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_nbn
 *
 * @brief Wrapper for the NBN plugin.
 */


require_once('NBNPubIdPlugin.inc.php');

return new NBNPubIdPlugin();

?>
