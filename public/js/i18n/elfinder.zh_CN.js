/**
 * Simplified Chinese translation
 * @author ç¿»è¯‘è€… <deerchao@gmail.com>
 * @version 2011-09-08
 */
if (elFinder && elFinder.prototype && typeof(elFinder.prototype.i18) == 'object') {
	elFinder.prototype.i18.zh_CN = {
		translator : 'ç¿»è¯‘è€… &lt;deerchao@gmail.com&gt;',
		language   : 'ç®€ä½“ä¸­æ–‡',
		direction  : 'ltr',
		messages   : {
			
			/********************************** errors **********************************/
			'error'                : 'é”™è¯¯',
			'errUnknown'           : 'æœªçŸ¥çš„é”™è¯¯.',
			'errUnknownCmd'        : 'æœªçŸ¥çš„å‘½ä»¤.',
			'errJqui'              : 'æ— æ•ˆçš„ jQuery UI é…ç½®. å¿…é¡»åŒ…å« Selectable, draggable ä»¥åŠ droppable ç»„ä»¶.',
			'errNode'              : 'elFinder éœ€è¦èƒ½åˆ›å»º DOM å…ƒç´ .',
			'errURL'               : 'æ— æ•ˆçš„ elFinder é…ç½®! URL é€‰é¡¹æœªé…ç½®.',
			'errAccess'            : 'è®¿é—®è¢«æ‹’ç».',
			'errConnect'           : 'ä¸èƒ½è¿žæŽ¥åˆ°åŽç«¯.',
			'errAbort'             : 'è¿žæŽ¥ä¸­æ­¢.',
			'errTimeout'           : 'è¿žæŽ¥è¶…æ—¶.',
			'errNotFound'          : 'æœªæ‰¾åˆ°åŽç«¯.',
			'errResponse'          : 'æ— æ•ˆçš„åŽç«¯å“åº”.',
			'errConf'              : 'æ— æ•ˆçš„åŽç«¯é…ç½®.',
			'errJSON'              : 'PHP JSON æ¨¡å—æœªå®‰è£….',
			'errNoVolumes'         : 'æ— å¯è¯»çš„å·.',
			'errCmdParams'         : 'æ— æ•ˆçš„å‚æ•°, å‘½ä»¤: "$1".',
			'errDataNotJSON'       : 'å“åº”ä¸ç¬¦åˆ JSON æ ¼å¼.',
			'errDataEmpty'         : 'å“åº”ä¸ºç©º.',
			'errCmdReq'            : 'åŽç«¯è¯·æ±‚éœ€è¦å‘½ä»¤åç§°.',
			'errOpen'              : 'æ— æ³•æ‰“å¼€ "$1".',
			'errNotFolder'         : 'å¯¹è±¡ä¸æ˜¯æ–‡ä»¶å¤¹.',
			'errNotFile'           : 'å¯¹è±¡ä¸æ˜¯æ–‡ä»¶.',
			'errRead'              : 'æ— æ³•è¯»å– "$1".',
			'errWrite'             : 'æ— æ³•å†™å…¥ "$1".',
			'errPerm'              : 'æ— æƒé™.',
			'errLocked'            : '"$1" è¢«é”å®š,ä¸èƒ½é‡å‘½å, ç§»åŠ¨æˆ–åˆ é™¤.',
			'errExists'            : 'æ–‡ä»¶ "$1" å·²ç»å­˜åœ¨äº†.',
			'errInvName'           : 'æ— æ•ˆçš„æ–‡ä»¶å.',
			'errFolderNotFound'    : 'æœªæ‰¾åˆ°æ–‡ä»¶å¤¹.',
			'errFileNotFound'      : 'æœªæ‰¾åˆ°æ–‡ä»¶.',
			'errTrgFolderNotFound' : 'æœªæ‰¾åˆ°ç›®æ ‡æ–‡ä»¶å¤¹ "$1".',
			'errPopup'             : 'æµè§ˆå™¨æ‹¦æˆªäº†å¼¹å‡ºçª—å£. è¯·åœ¨é€‰é¡¹ä¸­å…è®¸å¼¹å‡ºçª—å£.',
			'errMkdir'             : 'ä¸èƒ½åˆ›å»ºæ–‡ä»¶å¤¹ "$1".',
			'errMkfile'            : 'ä¸èƒ½åˆ›å»ºæ–‡ä»¶ "$1".',
			'errRename'            : 'ä¸èƒ½é‡å‘½å "$1".',
			'errCopyFrom'          : 'ä¸å…è®¸ä»Žå· "$1" å¤åˆ¶.',
			'errCopyTo'            : 'ä¸å…è®¸å‘å· "$1" å¤åˆ¶.',
			'errUploadCommon'      : 'ä¸Šä¼ å‡ºé”™.',
			'errUpload'            : 'æ— æ³•ä¸Šä¼  "$1".',
			'errUploadNoFiles'     : 'æœªæ‰¾åˆ°è¦ä¸Šä¼ çš„æ–‡ä»¶.',
			'errMaxSize'           : 'æ•°æ®è¶…è¿‡äº†å…è®¸çš„æœ€å¤§å¤§å°.',
			'errFileMaxSize'       : 'æ–‡ä»¶è¶…è¿‡äº†å…è®¸çš„æœ€å¤§å¤§å°.',
			'errUploadMime'        : 'ä¸å…è®¸çš„æ–‡ä»¶ç±»åž‹.',
			'errUploadTransfer'    : '"$1" ä¼ è¾“é”™è¯¯.', 
			'errSave'              : 'æ— æ³•ä¿å­˜ "$1".',
			'errCopy'              : 'æ— æ³•å¤åˆ¶ "$1".',
			'errMove'              : 'æ— æ³•ç§»åŠ¨ "$1".',
			'errCopyInItself'      : 'ä¸èƒ½ç§»åŠ¨ "$1" åˆ°åŽŸæœ‰ä½ç½®.',
			'errRm'                : 'æ— æ³•åˆ é™¤ "$1".',
			'errExtract'           : 'æ— æ³•ä»Ž "$1" æå–æ–‡ä»¶.',
			'errArchive'           : 'æ— æ³•åˆ›å»ºåŽ‹ç¼©åŒ….',
			'errArcType'           : 'ä¸æ”¯æŒçš„åŽ‹ç¼©æ ¼å¼.',
			'errNoArchive'         : 'æ–‡ä»¶ä¸æ˜¯åŽ‹ç¼©åŒ…, æˆ–è€…ä¸æ”¯æŒè¯¥åŽ‹ç¼©æ ¼å¼.',
			'errCmdNoSupport'      : 'åŽç«¯ä¸æ”¯æŒè¯¥å‘½ä»¤.',
			
			/******************************* commands names ********************************/
			'cmdarchive'   : 'åˆ›å»ºåŽ‹ç¼©åŒ…',
			'cmdback'      : 'åŽé€€',
			'cmdcopy'      : 'å¤åˆ¶',
			'cmdcut'       : 'å‰ªåˆ‡',
			'cmddownload'  : 'ä¸‹è½½',
			'cmdduplicate' : 'åˆ›å»ºå¤æœ¬',
			'cmdedit'      : 'ç¼–è¾‘æ–‡ä»¶',
			'cmdextract'   : 'ä»ŽåŽ‹ç¼©åŒ…æå–æ–‡ä»¶',
			'cmdforward'   : 'å‰è¿›',
			'cmdgetfile'   : 'é€‰æ‹©æ–‡ä»¶',
			'cmdhelp'      : 'å…³äºŽæœ¬è½¯ä»¶',
			'cmdhome'      : 'é¦–é¡µ',
			'cmdinfo'      : 'æŸ¥çœ‹ä¿¡æ¯',
			'cmdmkdir'     : 'æ–°å»ºæ–‡ä»¶å¤¹',
			'cmdmkfile'    : 'æ–°å»ºæ–‡æœ¬æ–‡ä»¶',
			'cmdopen'      : 'æ‰“å¼€',
			'cmdpaste'     : 'ç²˜è´´',
			'cmdquicklook' : 'é¢„è§ˆ',
			'cmdreload'    : 'åˆ·æ–°',
			'cmdrename'    : 'é‡å‘½å',
			'cmdrm'        : 'åˆ é™¤',
			'cmdsearch'    : 'æŸ¥æ‰¾æ–‡ä»¶',
			'cmdup'        : 'è½¬åˆ°ä¸Šä¸€çº§æ–‡ä»¶å¤¹',
			'cmdupload'    : 'ä¸Šä¼ æ–‡ä»¶',
			'cmdview'      : 'æŸ¥çœ‹',
			
			/*********************************** buttons ***********************************/ 
			'btnClose'  : 'å…³é—­',
			'btnSave'   : 'ä¿å­˜',
			'btnRm'     : 'åˆ é™¤',
			'btnCancel' : 'å–æ¶ˆ',
			'btnNo'     : 'å¦',
			'btnYes'    : 'æ˜¯',
			
			/******************************** notifications ********************************/
			'ntfopen'     : 'æ‰“å¼€æ–‡ä»¶å¤¹',
			'ntffile'     : 'æ‰“å¼€æ–‡ä»¶',
			'ntfreload'   : 'åˆ·æ–°æ–‡ä»¶å¤¹å†…å®¹',
			'ntfmkdir'    : 'åˆ›å»ºæ–‡ä»¶å¤¹',
			'ntfmkfile'   : 'åˆ›å»ºæ–‡ä»¶',
			'ntfrm'       : 'åˆ é™¤æ–‡ä»¶',
			'ntfcopy'     : 'å¤åˆ¶æ–‡ä»¶',
			'ntfmove'     : 'ç§»åŠ¨æ–‡ä»¶',
			'ntfprepare'  : 'å‡†å¤‡å¤åˆ¶æ–‡ä»¶',
			'ntfrename'   : 'é‡å‘½åæ–‡ä»¶',
			'ntfupload'   : 'ä¸Šä¼ æ–‡ä»¶',
			'ntfdownload' : 'ä¸‹è½½æ–‡ä»¶',
			'ntfsave'     : 'ä¿å­˜æ–‡ä»¶',
			'ntfarchive'  : 'åˆ›å»ºåŽ‹ç¼©åŒ…',
			'ntfextract'  : 'ä»ŽåŽ‹ç¼©åŒ…æå–æ–‡ä»¶',
			'ntfsearch'   : 'æœç´¢æ–‡ä»¶',
			'ntfsmth'     : 'æ­£åœ¨å¿™ >_<',
			
			/************************************ dates **********************************/
			'dateUnknown' : 'æœªçŸ¥',
			'Today'       : 'ä»Šå¤©',
			'Yesterday'   : 'æ˜¨å¤©',
			'Jan'         : 'ä¸€æœˆ',
			'Feb'         : 'äºŒæœˆ',
			'Mar'         : 'ä¸‰æœˆ',
			'Apr'         : 'å››æœˆ',
			'May'         : 'äº”æœˆ',
			'Jun'         : 'å…­æœˆ',
			'Jul'         : 'ä¸ƒæœˆ',
			'Aug'         : 'å…«æœˆ',
			'Sep'         : 'ä¹æœˆ',
			'Oct'         : 'åæœˆ',
			'Nov'         : 'åä¸€æœˆ',
			'Dec'         : 'åäºŒæœˆ',

			/********************************** messages **********************************/
			'confirmReq'      : 'è¯·ç¡®è®¤',
			'confirmRm'       : 'ç¡®å®šè¦åˆ é™¤æ–‡ä»¶å—?<br/>è¯¥æ“ä½œä¸å¯æ’¤é”€!',
			'confirmRepl'     : 'ç”¨æ–°çš„æ–‡ä»¶æ›¿æ¢åŽŸæœ‰æ–‡ä»¶?',
			'apllyAll'        : 'å…¨éƒ¨åº”ç”¨',
			'name'            : 'åç§°',
			'size'            : 'å¤§å°',
			'perms'           : 'æƒé™',
			'modify'          : 'ä¿®æ”¹äºŽ',
			'kind'            : 'ç±»åˆ«',
			'read'            : 'è¯»å–',
			'write'           : 'å†™å…¥',
			'noaccess'        : 'æ— æƒé™',
			'and'             : 'å’Œ',
			'unknown'         : 'æœªçŸ¥',
			'selectall'       : 'é€‰æ‹©æ‰€æœ‰æ–‡ä»¶',
			'selectfiles'     : 'é€‰æ‹©æ–‡ä»¶',
			'selectffile'     : 'é€‰æ‹©ç¬¬ä¸€ä¸ªæ–‡ä»¶',
			'selectlfile'     : 'é€‰æ‹©æœ€åŽä¸€ä¸ªæ–‡ä»¶',
			'viewlist'        : 'åˆ—è¡¨è§†å›¾',
			'viewicons'       : 'å›¾æ ‡è§†å›¾',
			'places'          : 'ä½ç½®',
			'calc'            : 'è®¡ç®—', 
			'path'            : 'è·¯å¾„',
			'aliasfor'        : 'åˆ«å',
			'locked'          : 'é”å®š',
			'dim'             : 'å°ºå¯¸',
			'files'           : 'æ–‡ä»¶',
			'folders'         : 'æ–‡ä»¶å¤¹',
			'items'           : 'é¡¹ç›®',
			'yes'             : 'æ˜¯',
			'no'              : 'å¦',
			'link'            : 'é“¾æŽ¥',
			'searcresult'     : 'æœç´¢ç»“æžœ',  
			'selected'        : 'é€‰ä¸­çš„é¡¹ç›®',
			'about'           : 'å…³äºŽ',
			'shortcuts'       : 'å¿«æ·é”®',
			'help'            : 'å¸®åŠ©',
			'webfm'           : 'ç½‘ç»œæ–‡ä»¶ç®¡ç†å™¨',
			'ver'             : 'ç‰ˆæœ¬',
			'protocol'        : 'åè®®ç‰ˆæœ¬',
			'homepage'        : 'é¡¹ç›®ä¸»é¡µ',
			'docs'            : 'æ–‡æ¡£',
			'github'          : 'Fork us on Github',
			'twitter'         : 'Follow us on twitter',
			'facebook'        : 'Join us on facebook',
			'team'            : 'å›¢é˜Ÿ',
			'chiefdev'        : 'é¦–å¸­å¼€å‘',
			'developer'       : 'å¼€å‘',
			'contributor'     : 'è´¡çŒ®',
			'maintainer'      : 'ç»´æŠ¤',
			'translator'      : 'ç¿»è¯‘',
			'icons'           : 'å›¾æ ‡',
			'dontforget'      : 'åˆ«å¿˜äº†å¸¦ä¸Šä½ çš„æ¯›å·¾',
			'shortcutsof'     : 'å¿«æ·é”®å·²ç¦ç”¨',
			'dropFiles'       : 'æŠŠæ–‡ä»¶æ‹–åˆ°è¿™é‡Œ',
			'or'              : 'æˆ–è€…',
			'selectForUpload' : 'é€‰æ‹©è¦ä¸Šä¼ çš„æ–‡ä»¶',
			'moveFiles'       : 'ç§»åŠ¨æ–‡ä»¶',
			'copyFiles'       : 'å¤åˆ¶æ–‡ä»¶',
			
			/********************************** mimetypes **********************************/
			'kindUnknown'     : 'æœªçŸ¥',
			'kindFolder'      : 'æ–‡ä»¶å¤¹',
			'kindAlias'       : 'åˆ«å',
			'kindAliasBroken' : 'é”™è¯¯çš„åˆ«å',
			// applications
			'kindApp'         : 'ç¨‹åº',
			'kindPostscript'  : 'Postscript æ–‡æ¡£',
			'kindMsOffice'    : 'Microsoft Office æ–‡æ¡£',
			'kindMsWord'      : 'Microsoft Word æ–‡æ¡£',
			'kindMsExcel'     : 'Microsoft Excel æ–‡æ¡£',
			'kindMsPP'        : 'Microsoft Powerpoint æ¼”ç¤º',
			'kindOO'          : 'Open Office æ–‡æ¡£',
			'kindAppFlash'    : 'Flash ç¨‹åº',
			'kindPDF'         : 'Portable Document Format (PDF)',
			'kindTorrent'     : 'Bittorrent æ–‡ä»¶',
			'kind7z'          : '7z åŽ‹ç¼©åŒ…',
			'kindTAR'         : 'TAR åŽ‹ç¼©åŒ…',
			'kindGZIP'        : 'GZIP åŽ‹ç¼©åŒ…',
			'kindBZIP'        : 'BZIP åŽ‹ç¼©åŒ…',
			'kindZIP'         : 'ZIP åŽ‹ç¼©åŒ…',
			'kindRAR'         : 'RAR åŽ‹ç¼©åŒ…',
			'kindJAR'         : 'Java JAR æ–‡ä»¶',
			'kindTTF'         : 'True Type å­—ä½“',
			'kindOTF'         : 'Open Type å­—ä½“',
			'kindRPM'         : 'RPM åŒ…',
			// texts
			'kindText'        : 'æ–‡æœ¬æ–‡ä»¶',
			'kindTextPlain'   : 'çº¯æ–‡æœ¬',
			'kindPHP'         : 'PHP æºä»£ç ',
			'kindCSS'         : 'å±‚å æ ·å¼è¡¨(CSS)',
			'kindHTML'        : 'HTML æ–‡æ¡£',
			'kindJS'          : 'Javascript æºä»£ç ',
			'kindRTF'         : 'å¯Œæ–‡æœ¬æ ¼å¼(RTF)',
			'kindC'           : 'C æºä»£ç ',
			'kindCHeader'     : 'C å¤´æ–‡ä»¶',
			'kindCPP'         : 'C++ æºä»£ç ',
			'kindCPPHeader'   : 'C++ å¤´æ–‡ä»¶',
			'kindShell'       : 'Unix å¤–å£³è„šæœ¬',
			'kindPython'      : 'Python æºä»£ç ',
			'kindJava'        : 'Java æºä»£ç ',
			'kindRuby'        : 'Ruby æºä»£ç ',
			'kindPerl'        : 'Perl æºä»£ç ',
			'kindSQL'         : 'SQL è„šæœ¬',
			'kindXML'         : 'XML æ–‡æ¡£',
			'kindAWK'         : 'AWK æºä»£ç ',
			'kindCSV'         : 'é€—å·åˆ†éš”å€¼æ–‡ä»¶(CSV)',
			'kindDOCBOOK'     : 'Docbook XML æ–‡æ¡£',
			// images
			'kindImage'       : 'å›¾ç‰‡',
			'kindBMP'         : 'BMP å›¾ç‰‡',
			'kindJPEG'        : 'JPEG å›¾ç‰‡',
			'kindGIF'         : 'GIF å›¾ç‰‡',
			'kindPNG'         : 'PNG å›¾ç‰‡',
			'kindTIFF'        : 'TIFF å›¾ç‰‡',
			'kindTGA'         : 'TGA å›¾ç‰‡',
			'kindPSD'         : 'Adobe Photoshop å›¾ç‰‡',
			'kindXBITMAP'     : 'X bitmap å›¾ç‰‡',
			'kindPXM'         : 'Pixelmator å›¾ç‰‡',
			// media
			'kindAudio'       : 'éŸ³é¢‘',
			'kindAudioMPEG'   : 'MPEG éŸ³é¢‘',
			'kindAudioMPEG4'  : 'MPEG-4 éŸ³é¢‘',
			'kindAudioMIDI'   : 'MIDI éŸ³é¢‘',
			'kindAudioOGG'    : 'Ogg Vorbis éŸ³é¢‘',
			'kindAudioWAV'    : 'WAV éŸ³é¢‘',
			'AudioPlaylist'   : 'MP3 æ’­æ”¾åˆ—è¡¨',
			'kindVideo'       : 'è§†é¢‘',
			'kindVideoDV'     : 'DV è§†é¢‘',
			'kindVideoMPEG'   : 'MPEG è§†é¢‘',
			'kindVideoMPEG4'  : 'MPEG-4 è§†é¢‘',
			'kindVideoAVI'    : 'AVI è§†é¢‘',
			'kindVideoMOV'    : 'Quick Time è§†é¢‘',
			'kindVideoWM'     : 'Windows Media è§†é¢‘',
			'kindVideoFlash'  : 'Flash è§†é¢‘',
			'kindVideoMKV'    : 'Matroska è§†é¢‘',
			'kindVideoOGG'    : 'Ogg è§†é¢‘'
		}
	};
}