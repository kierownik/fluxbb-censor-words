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
  'amcik',
  '@mcik',
  'andskota',
  '@ndskota',
  'andsk0ta',
  'andskot@',
  '@ndsk0ta',
  '@ndskot@',
  '@ndsk0t@',
  'arschloch',
  '@rschloch',
  'arschl0ch',
  '@rschl0ch',
  'arse*',
  'ars3*',
  '@rse*',
  '@rs3*',
  'ass',
  '@ss',
  '@$$*',
  'a$$*',
  'as$*',
  'a\$s*',
  '@\$s*',
  '@s$*',
  'assho*',
  '@ssho*',
  'a$sho*',
  'as$ho*',
  'assh0*',
  '@$sho*',
  '@s$ho*',
  '@ssh0*',
  'a$$ho*',
  'a$$h0*',
  'a$sh0*',
  'as$h0*',
  '@$$h0*',
  'assram*',
  '@ssram*',
  'a$sram*',
  'as$ram*',
  'assr@m*',
  '@$sram*',
  '@s$ram*',
  '@ssr@m*',
  'a$$ram*',
  'a$sr@m*',
  'as$r@m*',
  'ayir',
  '@yir',
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
  'b@stard',
  'bast@rd',
  'b@st@rd',
  'boiolas',
  'b0iolas',
  'boi0las',
  'boiol@s',
  'b0iol@s',
  'boi0l@s',
  'b0i0l@s',
  'bollock*',
  'b0llock*',
  'boll0ck*',
  'b0ll0ck*',
  'breasts',
  'br3asts',
  'bre@sts',
  'br3@sts',
  'buceta',
  'bucet@',
  'buc3ta',
  'buc3t@',
  'butt-pirate',
  'butt-pir@te',
  'butt-pirat3',
  'butt-pir@t3',
  'cock*',
  'c0ck',
  'cabron',
  'c@bron',
  'cabr0n',
  'c@br0n',
  'cawk',
  'c@wk',
  'cazzo',
  'c@zzo',
  'cazz0',
  'c@zz0',
  'chink',
  'chraa',
  'chr@a',
  'chra@',
  'chr@@',
  'chuj',
  'cipa',
  'cip@',
  'clits',
  'conjo',
  'c0njo',
  'conj0',
  'c0nj0',
  'cum',
  'cunt*',
  '*damn',
  '*d@mn',
  '*d4mn',
  'dago',
  'd@go',
  'dag0',
  'd@g0',
  'daygo',
  'd@ygo',
  'dayg0',
  'dego',
  'd3go',
  'deg0',
  'd3g0',
  'dick*',
  'dike*',
  'dik3*',
  'dildo',
  'dild0',
  'dipwad',
  'dipw@d',
  '*dyke*',
  '*dyk3*',
  'dirsa',
  'dirs@',
  'dupa',
  'dup@',
  'dziwka',
  'dziwk@',
  'ejac*',
  '3jac*',
  'Ekrem*',
  '3krem*',
  'Ekr3m*',
  '3kr3m*',
  'Ekto',
  '3kto',
  'Ekt0',
  '3kt0',
  'enculer',
  '3nculer',
  'encul3r',
  '3ncul3r',
  'faen',
  'f@en',
  'fa3n',
  'f@3n',
  'fag*',
  'f@g*',
  'fanculo',
  'f@nculo',
  'fancul0',
  'f@ncul0',
  'fanny',
  'f@nny',
  'fatass',
  'fat@$$',
  'fata$$',
  'fatas$',
  'fata\$s',
  'fat@\$s',
  'fat@s$',
  'fatarse',
  'f@tarse',
  'fat@rse',
  'f@t@rse',
  'fatars3',
  'f@tars3',
  'fat@rs3',
  'f@t@rs3',
  'fcuk',
  'feces',
  'f3ces',
  'fec3s',
  'f3c3s',
  'feg',
  'f3g',
  'Felcher',
  'F3lcher',
  'Felch3r',
  'F3lch3r',
  'ficken',
  'fick3n',
  'fitt*',
  'Flikker',
  'Flikk3r',
  'foreskin',
  'for3skin',
  'Fotze',
  'F0tze',
  'Fotz3',
  'F0tz3',
  'Fu(*',
  '*fuck*',
  'fuk*',
  'futkretzn',
  'futkr3tzn',
  'fuxor',
  'fux0r',
  'frig',
  'frigin*',
  'friggin*',
  'gay',
  'g@y',
  'gaydar',
  'g@ydar',
  'gayd@r',
  'g@yd@r',
  'gook',
  'g0ok',
  'go0k',
  'g00k',
  'guiena',
  'gui3na',
  'guien@',
  'gui3n@',
  'hor',
  'h0r',
  'hax0r',
  'h@x0r',
  'h4xor',
  'h4x0r',
  'hell',
  'h3ll',
  'helvete',
  'h3lvete',
  'helv3te',
  'helvet3',
  'h3lvet3',
  'helv3t3',
  'h3lv3t3',
  'hoer*',
  'h0er*',
  'ho3r*',
  'h03r*',
  'honkey',
  'h0nkey',
  'honk3y',
  'h0nk3y',
  'hore',
  'h0re',
  'hor3',
  'h0r3',
  'Huevon',
  'Hu3von',
  'Huev0n',
  'Hu3v0n',
  'hui',
  'injun',
  'jerk*',
  'j3rk*',
  'jackass',
  'j@ckass',
  'j@cka$s',
  'j@ckas$',
  'j@cka$$',
  'jack@ss',
  'jack@$s',
  'jack@s$',
  'jack@$$',
  'j@ck@ss',
  'j@ck@$s',
  'j@ck@s$',
  'j@ck@$$',
  'jism',
  'jizz',
  'kanker*',
  'k@nker*',
  'kank3r*',
  'k@nk3r*',
  'kawk',
  'k@wk',
  'kike',
  'kik3',
  'klootzak',
  'kl0otzak',
  'klo0tzak',
  'klootz@k',
  'kl0otz@k',
  'klo0tz@k',
  'kl00tz@k',
  'knulle',
  'knull3',
  'kuk',
  'kuksuger',
  'Kurac',
  'Kur@c',
  'kurwa',
  'kurw@',
  'kusi*',
  'kut*',
  'kyrpa*',
  'kyrp@*',
  'l3i+ch',
  'l3itch',
  'l3i7ch',
  'l3!tch',
  'l3!+ch',
  'lesbian',
  'lesbi@n',
  'lesbo',
  'l3sbo',
  'lesb0',
  'l3sb0',
  'leuter',
  'l3uter',
  'leut3r',
  'l3ut3r',
  'lul*',
  'mamhoon',
  'm@mhoon',
  'mamh0on',
  'mamho0n',
  'm@mh0on',
  'm@mho0n',
  'mamh00n',
  'm@mh00n',
  'masturbat*',
  'm@sturbat*',
  'masturb@t*',
  'm@sturb@t*',
  'merd*',
  'm3rd*',
  'mibun',
  'monkleigh',
  'm0nkleigh',
  'monkl3igh',
  'm0nkl3igh',
  'motherfuck*',
  'm0therfuck*',
  'moth3rfuck*',
  'm0th3rfuck*',
  'mofo',
  'm0fo',
  'mof0',
  'm0f0',
  'mouliewop',
  'm0uliewop',
  'mouli3wop',
  'mouliew0p',
  'm0uli3wop',
  'mouli3w0p',
  'm0uli3w0p',
  'muie',
  'mui3',
  'mulkku',
  'muschi',
  'nazi*',
  'n@zi*',
  'nepesaurio',
  'n3pesaurio',
  'n3p3saurio',
  'n3pe$aurio',
  'n3pes@urio',
  'n3pesauri0',
  'nep3saurio',
  'nep3$aurio',
  'nep3s@urio',
  'nep3sauri0',
  'nepe$aurio',
  'nepe$@urio',
  'nepe$auri0',
  'nepes@urio',
  'nepes@uri0',
  'nepesauri0',
  'n3p3$aurio',
  'n3p3s@urio',
  'n3p3sauri0',
  'nep3$@urio',
  'nep3$auri0',
  'nepe$@uri0',
  'nigga*',
  'nigg@*',
  'nigger*',
  'nigg3r*',
  'nutsack',
  'nut$ack',
  'nuts@ck',
  'nut$@ck',
  'orospu',
  '0rospu',
  'or0spu',
  'oro$pu',
  '0ro$pu',
  '0r0spu',
  '0r0$pu',
  'paska*',
  'p@ska*',
  'pa$ka*',
  'pask@*',
  'p@$ka*',
  'p@sk@*',
  'pa$k@*',
  'p@$k@*',
  'penis',
  'p3nis',
  'perse',
  'p3rse',
  'pers3',
  'p3rs3',
  'phuck',
  'picka',
  'pick@',
  'pierdol*',
  'pi3rdol*',
  'pierd0l*',
  'pi3rd0l*',
  'pillu*',
  'pimmel',
  'pimm3l',
  'pimpis',
  'piss*',
  'pizda',
  'pizd@',
  'poenie',
  'p0enie',
  'po3nie',
  'poeni3',
  'p03nie',
  'p0eni3',
  'po3ni3',
  'p03ni3',
  'poontsee',
  'p0ontsee',
  'po0ntsee',
  'poont$ee',
  'poonts3e',
  'poontse3',
  'p00ntsee',
  'p0ont$ee',
  'p0onts3e',
  'p0ontse3',
  'p00nt$ee',
  'p00nts3e',
  'p00ntse3',
  'p00nt$3e',
  'p00nts33',
  'po0nt$ee',
  'po0nt$3e',
  'po0nt$e3',
  'po0nt$33',
  'poont$3e',
  'poont$33',
  'poonts33',
  'p00nt$33',
  'poop',
  'p0op',
  'po0p',
  'p00p',
  'porn',
  'p0rn',
  'pron',
  'pr0n',
  'preteen',
  'pr3teen',
  'pret3en',
  'prete3n',
  'pr3t3en',
  'pr3te3n',
  'pret33n',
  'pr3t33n',
  'prick',
  'pula',
  'pul@',
  'pule',
  'pul3',
  'pusse',
  'pu$se',
  'pus$e',
  'puss3',
  'pu$s3',
  'pus$3',
  'pu$$3',
  'pussy',
  'pu$sy',
  'pus$y',
  'pu$$y',
  'puta',
  'put@',
  'puto',
  'put0',
  'qahbeh',
  'q@hbeh',
  'qahb3h',
  'q@hb3h',
  'queef*',
  'qu3ef*',
  'que3f*',
  'qu33f*',
  'queer*',
  'qu3er*',
  'que3r*',
  'qu33r*',
  'qweef',
  'qw3ef',
  'qwe3f',
  'qw33f',
  'rautenberg',
  'r@utenberg',
  'rautenb3rg',
  'r@ut3nberg',
  'r@utenb3rg',
  'raut3nb3rg',
  'r@ut3nb3rg',
  'schaffer',
  '$chaffer',
  'sch@ff3r',
  '$ch@ffer',
  '$chaff3r',
  '$ch@ff3r',
  'scheiss*',
  '$cheiss*',
  'sch3iss*',
  'schei$s*',
  'scheis$*',
  '$ch3iss*',
  '$chei$s*',
  '$cheis$*',
  '$ch3i$s*',
  '$chei$$*',
  'sch3i$s*',
  'sch3is$*',
  'sch3i$$*',
  'schlampe',
  '$chlampe',
  'schl@mpe',
  'schlamp3',
  '$chl@mpe',
  '$chlamp3',
  'schl@mp3',
  '$chl@mp3',
  'schmuck',
  '$chmuck',
  'screw',
  '$crew',
  'scr3w',
  '$cr3w',
  'scrotum',
  '$crotum',
  'scr0tum',
  '$cr0tum',
  '*shit*',
  '*$hit*',
  'sh!t*',
  '$h!t*',
  'sh1t*',
  '$h1t*',
  'sharmuta',
  '$harmuta',
  'sh@rmuta',
  'sharmut@',
  '$harmut@',
  'sh@rmut@',
  '$h@rmut@',
  'sharmute',
  '$harmute',
  'sh@rmute',
  'sharmut3',
  '$harmut3',
  'sh@rmut3',
  '$h@rmut3',
  'shemale',
  '$hemale',
  'sh3male',
  'shem@le',
  'shemal3',
  '$h3male',
  '$hem@le',
  '$hemal3',
  'sh3m@le',
  'sh3mal3',
  'shem@l3',
  'sh3m@l3',
  'shipal',
  '$hipal',
  'ship@l',
  '$hip@l',
  'shiz',
  '$hiz',
  'skribz',
  '$kribz',
  'skurwysyn',
  '$kurwysyn',
  'skurwy$yn',
  '$kurwy$yn',
  'slong',
  '$long',
  'sl0ng',
  '$l0ng',
  'slut',
  '$lut',
  'smut',
  '$mut',
  'snikkel',
  '$nikkel',
  'sn1kkel',
  '$n1kkel',
  'snikk3l',
  '$nikk3l',
  'sn1kk3l',
  '$n1kk3l',
  'sphencter',
  '$phencter',
  'sph3ncter',
  '$ph3ncter',
  'sphenct3r',
  '$phenct3r',
  'sph3nct3r',
  '$ph3nct3r',
  'spic',
  '$pic',
  'spierdalaj',
  '$pierdalaj',
  'spi3rdalaj',
  'spierd@laj',
  'spierdal@j',
  '$pi3rdalaj',
  '$pi3rd@laj',
  '$pi3rd@l@j',
  'splooge',
  '$plooge',
  'spl0oge',
  '$pl0oge',
  'splo0ge',
  '$plo0ge',
  'sploog3',
  '$ploog3',
  'spl0og3',
  '$pl0og3',
  'spl00ge',
  '$pl00ge',
  'spl00g3',
  '$pl00g3',
  'suka',
  '$uka',
  'suk@',
  '$uk@',
  'teets',
  't3ets',
  'te3ts',
  'teet$',
  't33ts',
  't33t$',
  'boob*',
  'b0ob*',
  'bo0b*',
  'b00b*',
  'tampeloeres',
  't@mpeloeres',
  'tamp3loeres',
  'tampel0eres',
  'tampelo3res',
  'tampeloer3s',
  'tampeloere$',
  't@mp3loeres',
  't@mp3loere$',
  't@mpel0eres',
  't@mpel0ere$',
  't@mpelo3res',
  't@mpelo3re$',
  't@mpeloer3s',
  't@mpeloer3$',
  't@mp3l0eres',
  't@mp3l0ere$',
  't@mp3lo3res',
  't@mp3lo3re$',
  't@mp3loer3s',
  't@mp3loer3$',
  't@mp3l03res',
  't@mp3l03re$',
  't@mp3l0er3s',
  't@mp3l0er3$',
  't@mp3l03r3s',
  't@mp3l03r3$',
  'tampelo3r3s',
  'tampelo3r3$',
  'tamp3lo3r3s',
  'tamp3lo3r3$',
  't@mpelo3r3s',
  't@mpelo3r3$',
  't@mp3lo3r3s',
  't@mp3lo3r3$',
  'teez',
  't3ez',
  'te3z',
  't33z',
  'testicle*',
  't3sticle*',
  'testicl3*',
  't3sticl3*',
  'titt*',
  'tits',
  'tit$',
  'twat*',
  'tw@t*',
  'vagina',
  'v@gina',
  'vagin@',
  'v@gin@',
  'viag*',
  'vi@g*',
  'v1ag*',
  'v14g*',
  'vi4g*',
  'vittu',
  'w00se',
  'wank*',
  'w@nk*',
  'wetback*',
  'w3tback*',
  'wetb@ck*',
  'w3tb@ck*',
  'whoar',
  'wh0ar',
  'who@r',
  'wh0@r',
  'whore',
  'wh0re',
  'whor3',
  'wh0r3',
  'wichser',
  'wich$er',
  'wichs3r',
  'wich$3r',
  'wop*',
  'w0p*',
  'wtf',
  'yed',
  'y3d',
  'zabourah',
  'z@bourah',
  'zab0urah',
  'zabour@h',
  'z@b0urah',
  'z@bour@h',
  'z@b0ur@h',
);
//print_r(array_count_values($banned_words));
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
        <h2>With what word should the bad words be replaced?</h2>
        <p>You are about to add <?php echo count( $banned_words ) ?> banned words and variations of them.</p>
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
