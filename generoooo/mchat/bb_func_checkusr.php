<?php
/*
This file is part of miniBB. miniBB is free discussion forums/message board software, without any warranty. See COPYING file for more details.
Copyright (C) 2013 Paul Puzyrev. www.minibb.com
Latest File Update: 2013-Sep-16
*/
if (!defined('INCLUDED776')) die ('Fatal error.');

if(isset($uname_minlength)) $umin=$uname_minlength; else $umin=3;
if(isset($uname_maxlength)) $umax=$uname_maxlength; else $umax=40;

$userRegExp="#^[".$userRegName."]{".$umin.",".$umax."}\$#";

if(!isset($correct)) $correct=0;

if($user_id==0){

foreach($disallowNamesIndex as $dn) {
if(substr_count(strtolower(${$dbUserSheme['username'][1]}),strtolower($dn))>0) { $correct=1; break; }
}

if(isset($disallowNames)){
foreach($disallowNames as $dn) {
if(strtolower(${$dbUserSheme['username'][1]})==strtolower($dn)) { $correct=1; break; }
}
}

}//id=0

if(!function_exists('verifyUsername')){
function verifyUsername($uname){
//should contain only pre-defined symbols
if(!preg_match("#^[".$GLOBALS['userRegName']."]{".$GLOBALS['umin'].",".$GLOBALS['umax']."}\$#", $uname)) return FALSE;
//should not consist of digits only
elseif(preg_match("#^[0-9]+$#", $uname)) return FALSE;
//should be sensful alphanumerical
elseif(preg_match("#^([0-9]+)(.*)$#", $uname)) return FALSE;
//should not consist of repeated character only (like '______' etc.)
elseif(strlen(count_chars($uname, 3))<$GLOBALS['umin']) return FALSE;
//should start only with a Unicode character, and not with '_'
elseif(!preg_match("#\w#", substr($uname,0,1)) or preg_match("#[_]#", substr($uname,0,1))) return FALSE;
elseif(!preg_match("#\w#", substr($uname,-1)) or preg_match("#[_]#", substr($uname,-1))) return FALSE;
else return TRUE;
}
}

if(!function_exists('verifyForLinks')){
function verifyForLinks($txt){
$ret=TRUE;
if(substr_count(strtolower($txt), 'http')>0 or substr_count(strtolower($txt), 'www')>0 or preg_match("#\.[a-z]{2,4}#is", $txt)) $ret=FALSE;
return $ret;
}
}

if($action=='register' and !verifyUsername(${$dbUserSheme['username'][1]})) $correct=1;
elseif($act=='reg' and !preg_match("#^[A-Za-z0-9_]{5,32}$#i", ${$dbUserSheme['user_password'][1]})) $correct=2;
elseif($act=='upd' and ${$dbUserSheme['user_password'][1]}!='' and !preg_match("#^[A-Za-z0-9_]{5,32}$#i", ${$dbUserSheme['user_password'][1]})) $correct=2;
elseif(${$dbUserSheme['user_password'][1]}!=$passwd2) $correct=3;
elseif(!preg_match("#^[0-9a-z]+([._-][0-9a-z_]+)*_?@[0-9a-z]+([._-][0-9a-z]+)*[.][0-9a-z]{2}[0-9A-Z]?[0-9A-Z]?$#i", ${$dbUserSheme['user_email'][1]})) $correct=4;
elseif($act=='reg' and isset($dbUserSheme['user_website']) and isset(${$dbUserSheme['user_website'][1]}) and ${$dbUserSheme['user_website'][1]}!='') $correct=6;
elseif($act=='upd' and $adminUser==0 and $user_num_posts<$allowHyperlinks and isset($dbUserSheme['user_website']) and isset(${$dbUserSheme['user_website'][1]}) and ${$dbUserSheme['user_website'][1]}!='') $correct=6;
elseif(isset($dbUserSheme['user_website']) and isset(${$dbUserSheme['user_website'][1]}) and ${$dbUserSheme['user_website'][1]}!='' and !preg_match("#^(f|ht)tp[s]?:\/\/[^<>]+$#i", ${$dbUserSheme['user_website'][1]})) $correct=6;

foreach(array('user_icq', 'user_occ', 'user_from', 'user_interest') as $chkField){
if(isset($dbUserSheme[$chkField]) and isset(${$dbUserSheme[$chkField][1]}) and ${$dbUserSheme[$chkField][1]}!='' and !verifyForLinks(${$dbUserSheme[$chkField][1]})) {
$correct=111;
break;
}
}

?>