<?
include_once($_SERVER["DOCUMENT_ROOT"]."/new/main/gift_top.htm");


include_once($_SERVER["DOCUMENT_ROOT"]."/new/main/main_incx_test.htm");
include_once($_SERVER["DOCUMENT_ROOT"]."/include/class.imgdir.php");


$free_space1=$db->stripSlash($free_space1);
$free_space2=$db->stripSlash($free_space2);
$free_space3=$db->stripSlash($free_space3);
$free_space4=$db->stripSlash($free_space4);
$free_space5=$db->stripSlash($free_space5);
$free_space6=$db->stripSlash($free_space6);
$free_space7=$db->stripSlash($free_space7);


// 1번째하단 시작
if($free_space1 != NULL || $free_space1 != ""){
	echo "<tr><td>".$free_space1."</td></tr><tr><td height=5></td></tr>";
}

$sitetype_num = "";
$jsite_num = "";

if($site_type=="" || $site_type=="A"){
	$sitetype_num = "2";
	$jsite_num = "";
}else{
	$sitetype_num = "3";
	$jsite_num = "1";
}

if(${b_set}==""){
	${b_set} = "001";
}
if(${c_set}==""){
	${c_set} = "001";
}
if(${d_set}==""){
	${d_set} = "001";
}
if(${e_set}==""){
	${e_set} = "001";
}
if(${f_set}==""){
	${f_set} = "001";
}


if(${"a".$jsite_num."_num"}=="01"){
	if($a_show=="Y"){
		if($a_type=="" || $a_type=="A"){
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="01"){
	if($b_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="01"){
	if($c_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="01"){
	if($d_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="01"){
	if($e_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="01"){
	if($f_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif(${"g".$jsite_num."_num"}=="01"){
	if($g_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 1번째하단 끝

// 2번째하단 시작
if($free_space2 != NULL || $free_space2 != ""){
	echo "<tr><td>".$free_space2."</td></tr><tr><td height=5></td></tr>";
}

if(${"a".$jsite_num."_num"}=="02"){
	if($a_show=="Y"){
		if($a_type=="" || $a_type=="A"){
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="02"){
	if($b_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="02"){
	if($c_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="02"){
	if($d_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="02"){
	if($e_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="02"){
	if($f_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif(${"g".$jsite_num."_num"}=="02"){
	if($g_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 2번째하단 끝

// 3번째하단 시작
if($free_space3 != NULL || $free_space3 != ""){
	echo "<tr><td>".$free_space3."</td></tr><tr><td height=5></td></tr>";
}

if(${"a".$jsite_num."_num"}=="03"){
	if($a_show=="Y"){
		if($a_type=="" || $a_type=="A"){
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="03"){
	if($b_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="03"){

	if($c_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="03"){
	if($d_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="03"){
	if($e_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="03"){
	if($f_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif(${"g".$jsite_num."_num"}=="03"){
	if($g_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 3번째하단 끝

// 4번째하단 시작//-->
if($free_space4 != NULL || $free_space4 != ""){
	echo "<tr><td>".$free_space4."</td></tr><tr><td height=5></td></tr>";
}



if(${"a".$jsite_num."_num"}=="04"){
	if($a_show=="Y"){
		if($a_type=="" || $a_type=="A"){
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="04"){
	if($b_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="04"){
	if($c_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="04"){
	if($d_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="04"){
	if($e_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="04"){
	if($f_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif($g_num=="04"){
	if($g_show=="Y"){
		include $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 4번째하단 끝

// 5번째하단 시작
if($free_space5 != NULL || $free_space5 != ""){
	echo "<tr><td>".$free_space5."</td></tr><tr><td height=5></td></tr>";
}

if(${"a".$jsite_num."_num"}=="05"){
	//if($a_show=="Y" || $a_type=="A"){
	//	include "/new/skin/main".$sitetype_num."/a/a_${a_set}.php";
	//}
	if($a_show=="Y"){
		if($a_type==""){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="05"){
	if($b_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="05"){
	if($c_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="05"){
	if($d_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="05"){
	if($e_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="05"){
	if($f_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif(${"g".$jsite_num."_num"}=="05"){
	if($g_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 5번째하단 끝

// 6번째하단 시작
if($free_space6 != NULL || $free_space6 != ""){
	echo "<tr><td>".$free_space6."</td></tr><tr><td height=5></td></tr>";
}


if(${"a".$jsite_num."_num"}=="06"){
	if($a_show=="Y" || $a_type=="A"){
		if($a_type==""){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
		}else{
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
		}
	}
}elseif(${"b".$jsite_num."_num"}=="06"){
	if($b_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
	}
}elseif(${"c".$jsite_num."_num"}=="06"){
	if($c_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
	}
}elseif(${"d".$jsite_num."_num"}=="06"){
	if($d_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
	}
}elseif(${"e".$jsite_num."_num"}=="06"){
	if($e_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
	}
}elseif(${"f".$jsite_num."_num"}=="06"){
	if($f_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
	}
}elseif(${"g".$jsite_num."_num"}=="06"){
	if($g_show=="Y"){
		include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
	}
}
// 6번째하단 끝





// 7번째하단 시작
if($free_space7 != NULL || $free_space7 != ""){
	echo "<tr><td>".$free_space7."</td></tr><tr><td height=5></td></tr>";
}


if($site_type=="A"){
	if(${"a".$jsite_num."_num"}=="07"){
		if($a_show=="Y" || $a_type=="A"){
			if($a_type==""){
				include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main2/a/a_${a_set}.php";
			}else{
				include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main3/a/a_{$a_type}.php";
			}
		}
	}elseif(${"b".$jsite_num."_num"}=="07"){
		if($b_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/b/b_${b_set}.php";
		}
	}elseif(${"c".$jsite_num."_num"}=="07"){
		if($c_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/c/c_${c_set}.php";
		}
	}elseif(${"d".$jsite_num."_num"}=="07"){
		if($d_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/d/d_${d_set}.php";
		}
	}elseif(${"e".$jsite_num."_num"}=="07"){
		if($e_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/e/e_${e_set}.php";
		}
	}elseif(${"f".$jsite_num."_num"}=="07"){
		if($f_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/f/f_${f_set}.php";
		}
	}elseif(${"g".$jsite_num."_num"}=="07"){
		if($g_show=="Y"){
			include  $_SERVER["DOCUMENT_ROOT"]."/new/skin/main".$sitetype_num."/g/g_${g_set}.php";
		}
	}
}
// 7번째하단 끝




if($site_type=="A"){		
	include_once($_SERVER["DOCUMENT_ROOT"]."/new/main/gift_foot.htm");
}else{
	include_once($_SERVER["DOCUMENT_ROOT"]."/new/main/gift_foot_B.htm");
}
?>



