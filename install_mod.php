<?php

/**
************************************************************************
*  Author: kierownik
*  Date: 2013-06-15
*  Description: This mod adds alot of banned words
*  Copyright (C) Daniel Rokven ( rokven@gmail.com )
*  License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
*
************************************************************************
**/

// Some info about your mod.
$mod_title      = 'Censor Words';
$mod_version    = '1.0.0';
$release_date   = '2013-09-DD';
$author         = 'Daniel Rokven';
$author_email   = 'rokven@gmail.com';

// Versions of FluxBB this mod was created for. A warning will be displayed, if versions do not match
$fluxbb_versions= array( '1.5.4', '1.5.3', '1.5.2', '1.5.1', '1.5.0', '1.5-beta', '1.4.11', '1.4.10', '1.4.9', '1.4.8', '1.4.7', '1.4.6', '1.4.5', '1.4.4' );

// Set this to false if you haven't implemented the restore function (see below)
$mod_restore  = true;

$banned_words = array(
  '@$$*',
  'a$$*',
  'as$*',
  'a\$s*',
  '@\$s*',
  '@s$*',
  'amcik',
  'andskota',
  'arschloch',
  'arse*',
  'ass',
  'assho*',
  'assram*',
  'ayir',
  'bi+ch',
  'b!+ch',
  'b!tch',
  'b!7ch',
  'bi7ch',
  'b17ch',
  'b1+ch',
  'b1tch',
  'bitch*',
  'bastard',
  'boiolas',
  'bollock*',
  'breasts',
  'buceta',
  'butt-pirate',
  'cock*',
  'c0ck',
  'cabron',
  'cawk',
  'cazzo',
  'chink',
  'chraa',
  'chuj',
  'cipa',
  'clits',
  'conjo',
  'cum',
  'cunt*',
  '*damn',
  '*d4mn',
  'dago',
  'daygo',
  'dego',
  'dick*',
  'dike*',
  'dildo',
  '*dyke*',
  'dirsa',
  'dupa',
  'dziwka',
  'ejac*',
  'Ekrem*',
  'Ekto',
  'enculer',
  'faen',
  'fag*',
  'fanculo',
  'fanny',
  'fatass',
  'fat@$$',
  'fata$$',
  'fatas$',
  'fata\$s',
  'fat@\$s',
  'fat@s$',
  'fatarse',
  'fcuk',
  'feces',
  'feg',
  'Felcher',
  'ficken',
  'fitt*',
  'Flikker',
  'foreskin',
  'Fotze',
  'Fu(*',
  '*fuck*',
  'fuk*',
  'futkretzn',
  'fux0r',
  'frig',
  'frigin*',
  'friggin*',
  'gay',
  'gaydar',
  'gook',
  'guiena',
  'h0r',
  'hax0r',
  'h4xor',
  'h4x0r',
  'hell',
  'helvete',
  'hoer*',
  'honkey',
  'hore',
  'Huevon',
  'hui',
  'injun',
  'jackass',
  'jism',
  'jizz',
  'kanker*',
  'kawk',
  'kike',
  'klootzak',
  'knulle',
  'kuk',
  'kuksuger',
  'Kurac',
  'kurwa',
  'kusi*',
  'kut*',
  'kyrpa*',
  'l3i+ch',
  'l3itch',
  'l3i7ch',
  'l3!tch',
  'l3!+ch',
  'lesbian',
  'lesbo',
  'leuter',
  'lul*',
  'mamhoon',
  'masturbat*',
  'merd*',
  'mibun',
  'monkleigh',
  'motherfuck*',
  'mofo',
  'mouliewop',
  'muie',
  'mulkku',
  'muschi',
  'nazi*',
  'nepesaurio',
  'nigga*',
  'nigger*',
  'nutsack',
  'orospu',
  'paska*',
  'penis',
  'perse',
  'phuck',
  'picka',
  'pierdol*',
  'pillu*',
  'pimmel',
  'pimpis',
  'piss*',
  'pizda',
  'poenie',
  'poontsee',
  'poop',
  'porn',
  'p0rn',
  'pr0n',
  'preteen',
  'prick',
  'pula',
  'pule',
  'pusse',
  'pussy',
  'puta',
  'puto',
  'qahbeh',
  'queef*',
  'queer*',
  'qweef',
  'rautenberg',
  'schaffer',
  'scheiss*',
  'schlampe',
  'schmuck',
  'screw',
  'scrotum',
  '*shit*',
  'sh!t*',
  'sh1t*',
  'sharmuta',
  'sharmute',
  'shemale',
  'shipal',
  'shiz',
  'skribz',
  'skurwysyn',
  'slong',
  'slut',
  'smut',
  'snikkel',
  'sn1kkel',
  'snikk3l',
  'sn1kk3l',
  'sphencter',
  'spic',
  'spierdalaj',
  'splooge',
  'suka',
  'teets',
  't3ets',
  'te3ts',
  't33ts',
  'b00b*',
  'tampeloeres',
  'tampelo3res',
  'tampeloer3s',
  'tamp3loeres',
  'tampelo3r3s',
  'tamp3lo3r3s',
  't@mpeloeres',
  't@mp3loeres',
  't@mpelo3res',
  't@mpeloer3s',
  't@mp3lo3res',
  't@mp3loer3s',
  't@mpelo3r3s',
  't@mp3lo3r3s',
  'teez',
  't3ez',
  'te3z',
  't33z',
  't3ez',
  'te3z',
  't33z',
  'testicle*',
  't3sticle*',
  'titt*',
  'tits',
  'twat*',
  'tw@t*',
  'vagina',
  'viag*',
  'v1ag*',
  'v14g*',
  'vi4g*',
  'vittu',
  'w00se',
  'wank*',
  'wetback*',
  'whoar',
  'whore',
  'wichser',
  'wop*',
  'wtf',
  'yed',
  'jerk*',
  'dipwad',
  'zabourah',
);

// This following function will be called when the user presses the "Install" button
function install()
{
  global $db, $db_type, $pun_config, $banned_words;

  // With what should the bad words be replaced
  $replace_with = !empty( $_POST['replace_with'] ) ? pun_htmlspecialchars( $_POST['replace_with'] ) : '***';

  // Loop thru the array
  foreach ( $banned_words as $key )
  {
    $result = $db->query( "SELECT search_for FROM ".$db->prefix."censoring WHERE search_for='".$db->escape( $key )."' " );

    if ( !$db->num_rows( $result ) )
    {
      $db->query( "INSERT INTO ".$db->prefix."censoring (search_for, replace_with) VALUES ( '".$db->escape( $key )."', '".$replace_with."' ) " ) or error( 'Unable to add '.$key.' to censoring table', __FILE__, __LINE__, $db->error() );
    }
  }

  // Regenerate the censoring cache
  require_once PUN_ROOT.'include/cache.php';
  generate_censoring_cache();
}

// This following function will be called when the user presses the "Restore" button (only if $mod_restore is true (see above))
function restore()
{
  global $db, $db_type, $pun_config, $banned_words;

  // Loop thru the array
  foreach ( $banned_words as $key )
  {
    $db->query( "DELETE FROM ".$db->prefix."censoring WHERE search_for='".$db->escape( $key )."' " ) or error( 'Unable to delete '.$key.' from censoring table', __FILE__, __LINE__, $db->error() );
  }

  // Regenerate the censoring cache
  require_once PUN_ROOT.'include/cache.php';
  generate_censoring_cache();
}

/***********************************************************************/

// DO NOT EDIT ANYTHING BELOW THIS LINE!


// Circumvent maintenance mode
define('PUN_TURN_OFF_MAINT', 1);
define('PUN_ROOT', './');
require PUN_ROOT.'include/common.php';

// We want the complete error message if the script fails
if (!defined('PUN_DEBUG'))
  define('PUN_DEBUG', 1);

// Make sure we are running a FluxBB version that this mod works with
$version_warning = !in_array($pun_config['o_cur_version'], $fluxbb_versions);

$style = (isset($pun_user)) ? $pun_user['style'] : $pun_config['o_default_style'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo pun_htmlspecialchars($mod_title) ?> installation</title>
<link rel="stylesheet" type="text/css" href="style/<?php echo $style.'.css' ?>" />
</head>
<body>

<div id="punwrap">
<div id="puninstall" class="pun" style="margin: 10% 20% auto 20%">

<?php

if (isset($_POST['form_sent']))
{
  if (isset($_POST['install']))
  {
    // Run the install function (defined above)
    install();

?>
<div class="block">
  <h2><span>Installation successful</span></h2>
  <div class="box">
    <div class="inbox">
      <p>Your database has been successfully prepared for <?php echo pun_htmlspecialchars($mod_title) ?>. See readme.txt for further instructions.</p>
    </div>
  </div>
</div>
<?php

  }
  else
  {
    // Run the restore function (defined above)
    restore();

?>
<div class="block">
  <h2><span>Restore successful</span></h2>
  <div class="box">
    <div class="inbox">
      <p>Your database has been successfully restored.</p>
    </div>
  </div>
</div>
<?php

  }
}
else
{

?>
<div class="blockform">
  <h2><span>Mod installation</span></h2>
  <div class="box">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?foo=bar">
      <div><input type="hidden" name="form_sent" value="1" /></div>
      <div class="inform">
        <p>This script will update your database to work with the following modification:</p>
        <p><strong>Mod title:</strong> <?php echo pun_htmlspecialchars($mod_title.' '.$mod_version) ?></p>
        <p><strong>Author:</strong> <?php echo pun_htmlspecialchars($author) ?> (<a href="mailto:<?php echo pun_htmlspecialchars($author_email) ?>"><?php echo pun_htmlspecialchars($author_email) ?></a>)</p>
        <p><strong>Disclaimer:</strong> Mods are not officially supported by FluxBB. Mods generally can't be uninstalled without running SQL queries manually against the database. Make backups of all data you deem necessary before installing.</p>
<?php if ($mod_restore): ?>
        <p>If you've previously installed this mod and would like to uninstall it, you can click the Restore button below to restore the database.</p>
<?php endif; ?>
<?php if ($version_warning): ?>
        <p style="color: #a00"><strong>Warning:</strong> The mod you are about to install was not made specifically to support your current version of FluxBB (<?php echo $pun_config['o_cur_version']; ?>). This mod supports FluxBB versions: <?php echo pun_htmlspecialchars(implode(', ', $fluxbb_versions)); ?>. If you are uncertain about installing the mod due to this potential version conflict, contact the mod author.</p>
<?php endif; ?>
      </div>
      <div class="inform">
        <p><h2>With what word should the bad words be replaced?</h2></p>
        <p><input type="text" name="replace_with" maxlength="60" placeholder="Bad word replacement" /><- if empty, everything will be replaced with '***'.</p>
      </div>
      <p class="buttons"><input type="submit" name="install" value="Install" /><?php if ($mod_restore): ?><input type="submit" name="restore" value="Restore" /><?php endif; ?></p>
    </form>
  </div>
</div>
<?php

}

?>

</div>
</div>

</body>
</html>
<?php

// End the transaction
$db->end_transaction();

// Close the db connection (and free up any result data)
$db->close();
