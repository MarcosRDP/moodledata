<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodledata';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'espectograma';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 
'https://labvirtual.ileel.ufu.br/labvirtual/moodle-latest/moodle';
$CFG->dataroot  = '/home/marcos/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

//=========================================================================
// 7. SETTINGS FOR DEVELOPMENT SERVERS - not intended for production use!!!
//=========================================================================
//
// Force a debugging mode regardless the settings in the site administration
 @error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
 @ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
 $CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION SERVERS!
 $CFG->debugdisplay = 1;              // NOT FOR PRODUCTION SERVERS!
//
// You can specify a comma separated list of user ids that that always see
// debug messages, this overrides the debug flag in $CFG->debug and $CFG->debugdisplay
// for these users only.
 $CFG->debugusers = '2';

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems
