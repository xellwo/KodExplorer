<?php define('���', 'Ű�');���͝�������;$_SERVER[���] = explode('|(|<|&', 'KOD_GROUP_PATH|(|<|&{groupPath}|(|<|&KOD_GROUP_SHARE|(|<|&{groupShare}|(|<|&KOD_USER_SELF|(|<|&{userSelf}|(|<|&KOD_USER_SHARE|(|<|&{userShare}|(|<|&KOD_USER_RECYCLE|(|<|&{userRecycle}|(|<|&KOD_USER_FAV|(|<|&{userFav}|(|<|&KOD_GROUP_ROOT_SELF|(|<|&{treeGroupSelf}|(|<|&KOD_GROUP_ROOT_ALL|(|<|&{treeGroupAll}|(|<|&\\|(|<|&/|(|<|&/\\/+/|(|<|&isRoot|(|<|&/../|(|<|&kodPathType|(|<|&|(|<|&kodPathPre|(|<|&kodPathId|(|<|&kodPathIdShare|(|<|&:|(|<|&share/|(|<|&kodUser|(|<|&userID|(|<|&config|(|<|&pathRoleGroupDefault|(|<|&1|(|<|&actions|(|<|&kodShareInfo|(|<|&path|(|<|&role|(|<|&type|(|<|&file|(|<|&fileList|(|<|&folderList|(|<|&share|(|<|&//|(|<|&.cache_data|(|<|&group_not_exist|(|<|&kodPathAuthCheck|(|<|&no_permission_group|(|<|&pathRoleGroup|(|<|&kodPathRoleGroupAuth|(|<|&.|(|<|&no_permission_action|(|<|&pathRoleDefine|(|<|&editor.fileSave|(|<|&auth|(|<|&kodBeforePathId|(|<|&in|(|<|&user|(|<|&size|(|<|&beforePathType|(|<|&uploadFileBefore|(|<|&space_size_use_check|(|<|&uploadFileAfter|(|<|&spaceSizeChange|(|<|&explorer.serverDownloadBefore|(|<|&explorer.unzipBefore|(|<|&explorer.zipBefore|(|<|&explorer.pathCopy|(|<|&explorer.mkfileBefore|(|<|&explorer.mkdirBefore|(|<|&explorer.pathMove|(|<|&explorer.mkfileAfter|(|<|&explorer.pathCopyAfter|(|<|&explorer.unzipAfter|(|<|&explorer.serverDownloadAfter|(|<|&explorer.pathMoveBefore|(|<|&explorer.pathMoveBfter|(|<|&spaceSizeChange_move|(|<|&explorer.pathRemoveAfter|(|<|&space_size_use_reset|(|<|&accessToken|(|<|&access_token|(|<|&SaeStorage|(|<|&SAE_APPNAME|(|<|&SESSION_PATH_DEFAULT|(|<|&session.save_handler|(|<|&files|(|<|&HTTP_APPNAME|(|<|&kod|(|<|&服务器session写入失败! (session write error)<br/>|(|<|&请检查php.ini相关配置,查看磁盘是否已满,或咨询服务商。<br/><br/>|(|<|&session.save_path=|(|<|&<br/>|(|<|&session.save_handler=|(|<|&settingSystem|(|<|&systemPassword|(|<|&kodExplorer_|(|<|&accessToken error!');��έ���ܓ�ŷ����;
 define($_SERVER{���}[0],$_SERVER{���}{0x001});define($_SERVER{���}[0x0002],$_SERVER{���}{0x00003});define($_SERVER{���}[0x000004],$_SERVER{���}{0x05});define($_SERVER{���}[0x006],$_SERVER{���}{0x0007});define($_SERVER{���}[0x00008],$_SERVER{���}{0x000009});define($_SERVER{���}[0x0a],$_SERVER{���}{0x00b});define($_SERVER{���}[0x000c],$_SERVER{���}{0x0000d});define($_SERVER{���}[0x00000e],$_SERVER{���}{0x0f});function _DIR_CLEAR($�){$��=&$_SERVER{���};$�=str_replace($��[0x0010],$��{0x00011},trim($�));$�=preg_replace($��[0x000012],$��{0x00011},$�);if(isset($GLOBALS[$��{0x0000013}])&& $GLOBALS[$��{0x0000013}]){return $�;}while(strstr($�,$��[0x014])){$�=str_replace($��[0x014],$��{0x00011},$�);}$�=preg_replace($��[0x000012],$��{0x00011},$�);return $�;}function _DIR($����){$�=&$_SERVER{���};$���=_DIR_CLEAR($����);���������;$���=iconv_system($���);$����=array(KOD_GROUP_PATH,KOD_GROUP_SHARE,KOD_USER_SELF,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL,KOD_USER_SHARE,KOD_USER_RECYCLE,KOD_USER_FAV,);$GLOBALS[$�{0x0015}]=$�[0x00016];����ʢƖ����;$GLOBALS[$�{0x000017}]=HOME;���;$GLOBALS[$�[0x0000018]]=$�[0x00016];��߽������;unset($GLOBALS[$�{0x019}]);foreach($���� as $����){if(substr($���,0,strlen($����))==$����){$GLOBALS[$�{0x0015}]=$����;$����=explode($�{0x00011},$���);$�=$����[0];unset($����[0]);$�Ͼ=implode($�{0x00011},$����);$����=explode($�[0x001a],$�);if(count($����)>0x001){$GLOBALS[$�[0x0000018]]=trim($����[0x001]);}else{$GLOBALS[$�[0x0000018]]=$�[0x00016];}break;}}switch($GLOBALS[$�{0x0015}]){case $�[0x00016]:$���=iconv_system(HOME).$���;break;case KOD_USER_RECYCLE:$GLOBALS[$�{0x000017}]=trim(USER_RECYCLE,$�{0x00011});���Åǜ�����˹���;$GLOBALS[$�[0x0000018]]=$�[0x00016];�̴��խ���û�փ���я�ẜ�����ל��ܟ�����ԗ����ۃ��������ϧ��玖����;return iconv_system(USER_RECYCLE).$�{0x00011}.str_replace(KOD_USER_RECYCLE,$�[0x00016],$���);�¶Ո�ؖї��ʿ����Ā鬎�����䛣��;case KOD_USER_SELF:$GLOBALS[$�{0x000017}]=trim(HOME_PATH,$�{0x00011});��������������֐����������;$GLOBALS[$�[0x0000018]]=$�[0x00016];������ˆ��ߢ�������������Ҟ����Š������݋��؍�Ղ�Փ�����՗�ϱ��ф�ѯ�Ŏ���;return iconv_system(HOME_PATH).$�{0x00011}.str_replace(KOD_USER_SELF,$�[0x00016],$���);�ΓҤ�����;case KOD_USER_FAV:$GLOBALS[$�{0x000017}]=trim(KOD_USER_FAV,$�{0x00011});$GLOBALS[$�[0x0000018]]=$�[0x00016];���ɽ������ۭ���ꁵ��੸;return KOD_USER_FAV;case KOD_GROUP_ROOT_SELF:$GLOBALS[$�{0x000017}]=trim(KOD_GROUP_ROOT_SELF,$�{0x00011});��ѪϜ莍�������;$GLOBALS[$�[0x0000018]]=$�[0x00016];return KOD_GROUP_ROOT_SELF;����;case KOD_GROUP_ROOT_ALL:$GLOBALS[$�{0x000017}]=trim(KOD_GROUP_ROOT_ALL,$�{0x00011});����Ϝ��퐵��Ę�«;$GLOBALS[$�[0x0000018]]=$�[0x00016];��淏��������������������ͨ�������؅����;return KOD_GROUP_ROOT_ALL;case KOD_GROUP_PATH:$�ι�=systemGroup::getInfo($GLOBALS[$�[0x0000018]]);�ԙ����ģ�������;if(!$GLOBALS[$�[0x0000018]]|| !$�ι�)return !1;owner_group_check($GLOBALS[$�[0x0000018]]);����ӿ�������;$GLOBALS[$�{0x000017}]=group_home_path($�ι�);$���=iconv_system($GLOBALS[$�{0x000017}]).$�Ͼ;break;case KOD_GROUP_SHARE:$�ι�=systemGroup::getInfo($GLOBALS[$�[0x0000018]]);���Տ��ֽ�������҈ŘȃӅ���ʇ�������֦������Ц�����ۣ����ֹ���ߠߝ�޼��㚚Ӆ�;if(!$GLOBALS[$�[0x0000018]]|| !$�ι�)return !1;owner_group_check($GLOBALS[$�[0x0000018]]);���Ɋ�Ɇ�����ڠ�����;$GLOBALS[$�{0x000017}]=group_home_path($�ι�).$�{0x0001b};���톚���;$���=iconv_system($GLOBALS[$�{0x000017}]).$�Ͼ;����ܟ�؞����������؎�ި������豚׎����Λ;break;case KOD_USER_SHARE:$�ι�=systemMember::getInfo($GLOBALS[$�[0x0000018]]);����;if(!$GLOBALS[$�[0x0000018]]|| !$�ι�)return !1;if($GLOBALS[$�[0x0000018]]!=$_SESSION[$�[0x00001c]][$�{0x000001d}]){$�����=$GLOBALS[$�[0x01e]][$�{0x001f}][$�[0x00020]][$�{0x000021}];path_role_check($�����);}$GLOBALS[$�{0x000017}]=$�[0x00016];$GLOBALS[$�{0x019}]=$����;�Ԡ������������詠����ɍ�崉���������;if($�Ͼ==$�[0x00016]){return $���;}else{$�=explode($�{0x00011},$�Ͼ);$�[0]=iconv_app($�[0]);$�=systemMember::userShareGet($GLOBALS[$�[0x0000018]],$�[0]);$GLOBALS[$�[0x0000022]]=$�;$GLOBALS[$�{0x019}]=KOD_USER_SHARE.$�[0x001a].$GLOBALS[$�[0x0000018]].$�{0x00011}.$�[0].$�{0x00011};unset($�[0]);if(!$�)return !1;$�=rtrim($�[$�{0x023}],$�{0x00011}).$�{0x00011}.iconv_app(implode($�{0x00011},$�));if($�ι�[$�[0x0024]]!=$�[0x00020]){$��=user_home_path($�ι�);$GLOBALS[$�{0x000017}]=$��.rtrim($�[$�{0x023}],$�{0x00011}).$�{0x00011};$���=$��.$�;}else{$GLOBALS[$�{0x000017}]=$�[$�{0x023}];$���=$�;}if($�[$�{0x00025}]==$�[0x000026]){$GLOBALS[$�{0x019}]=rtrim($GLOBALS[$�{0x019}],$�{0x00011});$GLOBALS[$�{0x000017}]=rtrim($GLOBALS[$�{0x000017}],$�{0x00011});}$���=iconv_system($���);}break;�Թ�Ƕ������;default:break;������������������������������ب����ݦ���܌�����Л��Ѕ�ś㼈ӕ��;}if($���!=$�{0x00011}){$���=rtrim($���,$�{0x00011});if(is_dir($���))$���=$���.$�{0x00011};}return $���;}function _DIR_OUT($�){$��=&$_SERVER{���};if(is_array($�)){foreach($�[$��{0x0000027}] as $����=>&$���){$���[$��{0x023}]=preClear($���[$��{0x023}]);}foreach($�[$��[0x028]] as $����=>&$���){$���[$��{0x023}]=preClear(rtrim($���[$��{0x023}],$��{0x00011}).$��{0x00011});}}else{$�=preClear($�);}return $�;}function preClear($�){$�Ę=&$_SERVER{���};$��=$GLOBALS[$�Ę{0x0015}];��萛�椾;$ފ�=rtrim($GLOBALS[$�Ę{0x000017}],$�Ę{0x00011});$����=array(KOD_USER_FAV,KOD_GROUP_ROOT_SELF,KOD_GROUP_ROOT_ALL);if(isset($GLOBALS[$�Ę{0x0015}])&& in_array($GLOBALS[$�Ę{0x0015}],$����)){return $�;}if(ST==$�Ę{0x0029}){return str_replace($ފ�,$�Ę[0x00016],$�);}if($GLOBALS[$�Ę[0x0000018]]!=$�Ę[0x00016]){$��.=$�Ę[0x001a].$GLOBALS[$�Ę[0x0000018]].$�Ę{0x00011};}if(isset($GLOBALS[$�Ę{0x019}])){$��=$GLOBALS[$�Ę{0x019}];}$=$��.str_replace($ފ�,$�Ę[0x00016],$�);$=str_replace($�Ę[0x0002a],$�Ę{0x00011},$);return $;}include(CLASS_DIR.$_SERVER{���}{0x00002b});function owner_group_check($؈��){$�=&$_SERVER{���};if(!$؈��)show_json(LNG($�[0x000002c]).$؈��,!1);if($GLOBALS[$�{0x0000013}]||(isset($GLOBALS[$�{0x02d}])&& $GLOBALS[$�{0x02d}]===!0)){return;}$�ȓ�=systemMember::userAuthGroup($؈��);if($�ȓ�==!1){if($GLOBALS[$�{0x0015}]==KOD_GROUP_PATH){show_json(LNG($�[0x002e]),!1);}else if($GLOBALS[$�{0x0015}]==KOD_GROUP_SHARE){$��=$GLOBALS[$�[0x01e]][$�{0x001f}][$�[0x00020]];}}else{$��=$GLOBALS[$�[0x01e]][$�{0x0002f}][$�ȓ�];�͸������ŧ�����ą�����򝛛��鱶�鉯��В���������ע�֖�򲅹���ա����բ�͘Ⲍ�܅�;}path_role_check($��[$�{0x000021}]);}function path_role_check($��칏){$����=&$_SERVER{���};if($GLOBALS[$����{0x0000013}]||(isset($GLOBALS[$����{0x02d}])&& $GLOBALS[$����{0x02d}]===!0)){return;}$��=role_permission_arr($��칏);$GLOBALS[$����[0x000030]]=$��;����Ȏ���������ˋߋ���ߚ������ڠ;if(!isset($��[ST.$����{0x0000031}.ACT])&& ST!=$����{0x0029}){show_json(LNG($����[0x032]),!1);}}function role_permission_arr($��){$��=&$_SERVER{���};$΋�=array();$�ǿ�=$GLOBALS[$��[0x01e]][$��{0x0033}];foreach($�� as $��=>$͞�){if(!$͞�)continue;$��=explode($��[0x001a],$��);if(count($��)==0x0002&& is_array($�ǿ�[$��[0]])&& is_array($�ǿ�[$��[0]][$��[0x001]])){$΋�=array_merge($΋�,$�ǿ�[$��[0]][$��[0x001]]);}}$����=array();���كѹ����Ӛ��Տ��������������ф䫇��;foreach($΋� as $͞�){$����[$͞�]=$��[0x00020];�ä���є����̒�쳑����������ε�򱺅�Ϥ�����˦���ݠ;}return $����;}function check_file_writable_user($�){$��=&$_SERVER{���};if(!isset($GLOBALS[$��{0x0015}])){_DIR($�);}$�孙=$��[0x00034];if($GLOBALS[$��{0x0000013}])return @is_writable($�);if($GLOBALS[$��{0x000035}][$�孙]!=$��[0x00020]){return !1;}if($GLOBALS[$��{0x0015}]==KOD_GROUP_PATH&& is_array($GLOBALS[$��[0x000030]])&& $GLOBALS[$��[0x000030]][$�孙]==$��[0x00020]){return !0;}if($GLOBALS[$��{0x0015}]==$��[0x00016] || $GLOBALS[$��{0x0015}]==KOD_USER_SELF){return !0;}return !1;}function space_size_use_check(){$؅���=&$_SERVER{���};if(!system_space())return;if($GLOBALS[$؅���{0x0000013}]==0x001)return;if(isset($GLOBALS[$؅���[0x0000036]])&& isset($GLOBALS[$؅���[0x0000018]])&& $GLOBALS[$؅���[0x0000036]]==$GLOBALS[$؅���[0x0000018]]){return;}if($GLOBALS[$؅���{0x0015}]==KOD_GROUP_SHARE|| $GLOBALS[$؅���{0x0015}]==KOD_GROUP_PATH){systemGroup::spaceCheck($GLOBALS[$؅���[0x0000018]]);}else{if(ST==$؅���{0x0029}){$�ͦ�=$GLOBALS[$؅���{0x037}][$؅���[0x0038]];}else{$�ͦ�=$_SESSION[$؅���[0x00001c]][$؅���{0x000001d}];}systemMember::spaceCheck($�ͦ�);}}function spaceSizeChange($���,$�=true,$���=false,$յ=false){$�����=&$_SERVER{���};if(!system_space())return;if($���===!1){$���=$GLOBALS[$�����{0x0015}];$յ=$GLOBALS[$�����[0x0000018]];}$�=$�?0x001:-0x001;if(is_file($���)){$����=get_filesize($���);}else if(is_dir($���)){$讙�=_path_info_more($���);$����=$讙�[$�����{0x00039}];}else{return;}if($���==KOD_GROUP_SHARE|| $���==KOD_GROUP_PATH){systemGroup::spaceChange($յ,$����*$�);}else{if(ST==$�����{0x0029}){$�=$GLOBALS[$�����{0x037}][$�����[0x0038]];}else{$�=$_SESSION[$�����[0x00001c]][$�����{0x000001d}];}systemMember::spaceChange($�,$����*$�);}}function spaceSizeChange_move($˶�){$�㟟�=&$_SERVER{���};if(isset($GLOBALS[$�㟟�[0x0000036]])&& isset($GLOBALS[$�㟟�[0x0000018]])){if($GLOBALS[$�㟟�[0x0000036]]==$GLOBALS[$�㟟�[0x0000018]]){return;}else{spaceSizeChange($˶�);spaceSizeChange($˶�,!1,$GLOBALS[$�㟟�[0x00003a]],$GLOBALS[$�㟟�[0x0000036]]);}}else{spaceSizeChange($˶�);}}function space_size_use_reset(){$�=&$_SERVER{���};if(!system_space())return;$���=isset($GLOBALS[$�{0x0015}])?$GLOBALS[$�{0x0015}]:$�[0x00016];��웱ѣ�Є�;$�=isset($GLOBALS[$�[0x0000018]])?$GLOBALS[$�[0x0000018]]:$�[0x00016];�����͋�������ԓ;if($���==KOD_GROUP_SHARE|| $���==KOD_GROUP_PATH){systemGroup::spaceChange($�);}else{$�Ŵ�=$_SESSION[$�[0x00001c]][$�{0x000001d}];systemMember::spaceChange($�Ŵ�);}}function init_space_size_hook(){$�����=&$_SERVER{���};Hook::bind($�����{0x000003b},$�����[0x03c]);Hook::bind($�����{0x003d},$�����[0x0003e]);��輟������������;Hook::bind($�����{0x00003f},$�����[0x03c]);Hook::bind($�����[0x0000040],$�����[0x03c]);Hook::bind($�����{0x041},$�����[0x03c]);�ˇ;Hook::bind($�����[0x0042],$�����[0x03c]);Hook::bind($�����{0x00043},$�����[0x03c]);���ּ����Ϳ����ȭ;Hook::bind($�����[0x000044],$�����[0x03c]);Hook::bind($�����{0x0000045},$�����[0x03c]);��������;Hook::bind($�����[0x046],$�����[0x0003e]);Hook::bind($�����{0x0047},$�����[0x0003e]);Hook::bind($�����[0x00048],$�����[0x0003e]);Hook::bind($�����{0x000049},$�����[0x0003e]);���;Hook::bind($�����[0x000004a],$�����[0x03c]);��ـ���碜;Hook::bind($�����{0x04b},$�����[0x004c]);������ф�ے��������ت��ƻ�;Hook::bind($�����{0x0004d},$�����[0x00004e]);���߻������Ќ�̀���»�쒩�͠������ٜ��ۜЬ����ͩ������;}function init_session(){$�=&$_SERVER{���};if(isset($_GET[$�{0x000004f}])){access_token_check($_GET[$�{0x000004f}]);}else if(isset($_GET[$�[0x050]])){access_token_check($_GET[$�[0x050]]);}else{@session_name(SESSION_ID);}$͏=@session_save_path();if(class_exists($�{0x0051})|| defined($�[0x00052])|| defined($�{0x000053})|| @ini_get($�[0x0000054])!=$�{0x055} || isset($_SERVER[$�[0x0056]])){}else{chmod_path(KOD_SESSION,0777);@session_save_path(KOD_SESSION);}@session_start();$_SESSION[$�{0x00057}]=0x001;@session_write_close();unset($_SESSION);@session_start();if(!$_SESSION[$�{0x00057}]){@session_save_path($͏);@session_start();$_SESSION[$�{0x00057}]=0x001;@session_write_close();unset($_SESSION);@session_start();}if(!$_SESSION[$�{0x00057}]){show_tips($�[0x000058].$�{0x0000059}.$�[0x05a].$͏.$�{0x005b}.$�[0x0005c].@ini_get($�[0x0000054]).$�{0x005b});}}function access_token_check($�){$я�=&$_SERVER{���};$����=$GLOBALS[$я�[0x01e]][$я�{0x00005d}][$я�[0x000005e]];�Ũ��퀭��ݮȬ�������Ũ����������Ȗ��;$����=substr(md5($я�{0x05f}.$����),0,0x0f);������ۄ��;$��=Mcrypt::decode($�,$����);if(!$��){show_tips($я�[0x0060]);}session_id($��);}function access_token_get(){$�ğ=&$_SERVER{���};$�����=session_id();$֗�=$GLOBALS[$�ğ[0x01e]][$�ğ{0x00005d}][$�ğ[0x000005e]];�ʼ������⫤�������ƶ����񡕽����Г��������;$֗�=substr(md5($�ğ{0x05f}.$֗�),0,0x0f);$���=Mcrypt::encode($�����,$֗�,0x0e10*0x0000018);return $���;}function init_config(){init_setting();init_session();�����Ⱥ�܊��돼���;init_space_size_hook();������礫�;}