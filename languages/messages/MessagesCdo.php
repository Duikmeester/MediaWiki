<?php
/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'nan, zh-hant';

$namespaceNames = array(
	NS_MEDIA            => '媒體',
	NS_SPECIAL          => '特殊',
	NS_TALK             => '討論',
	NS_USER             => '用戶',
	NS_USER_TALK        => '用戶討論',
	NS_PROJECT_TALK     => '$1討論',
	NS_FILE             => '文件',
	NS_FILE_TALK        => '文件討論',
	NS_MEDIAWIKI        => '媒體維基',
	NS_MEDIAWIKI_TALK   => '媒體維基討論',
	NS_TEMPLATE         => '模板',
	NS_TEMPLATE_TALK    => '模板討論',
	NS_HELP             => '幫助',
	NS_HELP_TALK        => '幫助討論',
	NS_CATEGORY         => '分類',
	NS_CATEGORY_TALK    => '分類討論',
);

$specialPageAliases = array(
	'Activeusers'               => array( '活動用戶' ),
	'Allmessages'               => array( '全部信息' ),
	'Allpages'                  => array( '全部頁面' ),
	'Ancientpages'              => array( '舊其頁面' ),
	'Badtitle'                  => array( '呆其標題' ),
	'Blankpage'                 => array( '空白頁面' ),
	'Block'                     => array( '封鎖', '封鎖IP', '封鎖用戶' ),
	'Booksources'               => array( '圖書源' ),
	'BrokenRedirects'           => array( '呆其重定向' ),
	'Categories'                => array( '分類' ),
	'ChangeEmail'               => array( '改變電子郵件' ),
	'ChangePassword'            => array( '改變密碼', '重置密碼' ),
	'ComparePages'              => array( '比較頁面' ),
	'Confirmemail'              => array( '確認電子郵件' ),
	'Contributions'             => array( '貢獻' ),
	'CreateAccount'             => array( '開賬戶' ),
	'DeletedContributions'      => array( '刪掉其貢獻' ),
	'DoubleRedirects'           => array( '雙重重定向' ),
	'EditWatchlist'             => array( '修改監視單' ),
	'Emailuser'                 => array( '共用戶發送電子郵件' ),
	'Export'                    => array( '導出' ),
	'Fewestrevisions'           => array( '最少其修訂' ),
	'FileDuplicateSearch'       => array( '文件重複尋討' ),
	'Filepath'                  => array( '文件路徑' ),
	'Import'                    => array( '導底' ),
	'Invalidateemail'           => array( '無效電子郵件' ),
	'JavaScriptTest'            => array( 'JavaScript測試' ),
	'BlockList'                 => array( '封鎖單' ),
	'LinkSearch'                => array( '鏈接尋討' ),
	'Listadmins'                => array( '管理員單單' ),
	'Listbots'                  => array( '機器人單單' ),
	'Listfiles'                 => array( '文件單', '圖片單' ),
	'Listgrouprights'           => array( '小組權限單', '用戶組單單' ),
	'Listredirects'             => array( '重定向單單' ),
	'Listusers'                 => array( '用戶單' ),
	'Lockdb'                    => array( '鎖定數據庫' ),
	'Log'                       => array( '日誌' ),
	'Lonelypages'               => array( '單獨其頁面' ),
	'Longpages'                 => array( '長長其頁面' ),
	'MergeHistory'              => array( '合併其歷史' ),
	'MIMEsearch'                => array( 'MIME尋討' ),
	'Mostcategories'            => array( '最価其分類' ),
	'Mostimages'                => array( '最価鏈接其文件' ),
	'Mostinterwikis'            => array( '最稠其跨維基' ),
	'Mostlinked'                => array( '最価鏈接其頁面' ),
	'Mostlinkedcategories'      => array( '最価鏈接其分類' ),
	'Mostlinkedtemplates'       => array( '最価鏈接其模板' ),
	'Mostrevisions'             => array( '最稠其版本' ),
	'Movepage'                  => array( '移動其頁面' ),
	'Mycontributions'           => array( '我其貢獻' ),
	'Mypage'                    => array( '我其頁面' ),
	'Mytalk'                    => array( '我其討論' ),
	'Myuploads'                 => array( '我其上傳' ),
	'Newimages'                 => array( '新其文件', '新其圖片' ),
	'Newpages'                  => array( '新其頁面' ),
	'PasswordReset'             => array( '密碼重置' ),
	'PermanentLink'             => array( '永久鏈接' ),
	'Popularpages'              => array( '受歡迎其頁面' ),
	'Preferences'               => array( '喜好' ),
	'Prefixindex'               => array( '前綴索引' ),
	'Protectedpages'            => array( '受保護其頁面' ),
	'Protectedtitles'           => array( '受保護其標題' ),
	'Randompage'                => array( '隨便其頁面' ),
	'Randomredirect'            => array( '隨便其重定向' ),
	'Recentchanges'             => array( '最近其改變' ),
	'Recentchangeslinked'       => array( '最近改變其鏈接' ),
	'Redirect'                  => array( '重定向' ),
	'ResetTokens'               => array( '重置令牌' ),
	'Search'                    => array( '尋討' ),
	'Shortpages'                => array( '短短其頁面' ),
	'Specialpages'              => array( '特殊頁' ),
	'Statistics'                => array( '統計' ),
	'Tags'                      => array( '標籤' ),
	'Unblock'                   => array( '取消封鎖' ),
	'Uncategorizedcategories'   => array( '未分類其分類' ),
	'Uncategorizedimages'       => array( '未分類其文件', '未分類其圖片' ),
	'Uncategorizedpages'        => array( '未分類其頁面' ),
	'Uncategorizedtemplates'    => array( '未分類其模板' ),
	'Undelete'                  => array( '伓使刪除' ),
	'Unlockdb'                  => array( '解鎖數據庫' ),
	'Unusedcategories'          => array( '無乇使其分類' ),
	'Unusedimages'              => array( '無乇使其文件', '無乇使其圖片' ),
	'Unusedtemplates'           => array( '無乇使其模板' ),
	'Unwatchedpages'            => array( '未監視其頁面' ),
	'Upload'                    => array( '上傳' ),
	'Userlogin'                 => array( '用戶躒底', '躒底' ),
	'Userlogout'                => array( '用戶躒出', '躒出' ),
	'Userrights'                => array( '用戶權限' ),
	'Version'                   => array( '版本' ),
	'Wantedcategories'          => array( '卜挃其分類' ),
	'Wantedfiles'               => array( '卜挃其文件' ),
	'Wantedpages'               => array( '卜挃其頁面' ),
	'Wantedtemplates'           => array( '卜挃其模板' ),
	'Watchlist'                 => array( '監視單' ),
	'Whatlinkshere'             => array( '什乇鏈遘嚽塊' ),
	'Withoutinterwiki'          => array( '無跨維基' ),
);

$datePreferences = array(
	'default',
	'ISO 8601',
);
$defaultDateFormat = 'cdo';
$dateFormats = array(
	'cdo time' => 'H:i',
	'cdo date' => 'Y "nièng" n "nguŏk" j "hô̤" (l)',
	'cdo both' => 'Y "nièng" n "nguŏk" j "hô̤" (D) H:i',
);

