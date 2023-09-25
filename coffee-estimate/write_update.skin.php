<!-- DB 최대 126개 필요 -->
<!-- subject, comment 제외 124개 -->

<?



$wr_11_chk = sql_fetch("SHOW COLUMNS FROM `$write_table`  WHERE `Field` = 'wr_11'");
if($wr_11_chk['Field'] == "")		sql_query("ALTER TABLE `$write_table` ADD `wr_11` VARCHAR( 255 ) NOT NULL AFTER `wr_10` ");

$wr_12_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_12'");
if($wr_12_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_12` VARCHAR( 255 ) NOT NULL AFTER `wr_11` ");

$wr_13_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_13'");
if($wr_13_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_13` VARCHAR( 255 ) NOT NULL AFTER `wr_12` ");

$wr_14_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_14'");
if($wr_14_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_14` VARCHAR( 255 ) NOT NULL AFTER `wr_13` ");

$wr_15_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_15'");
if($wr_15_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_15` VARCHAR( 255 ) NOT NULL AFTER `wr_14` ");

$wr_16_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_16'");
if($wr_16_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_16` VARCHAR( 255 ) NOT NULL AFTER `wr_15` ");

$wr_17_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_17'");
if($wr_17_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_17` VARCHAR( 255 ) NOT NULL AFTER `wr_16` ");

$wr_18_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_18'");
if($wr_18_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_18` VARCHAR( 255 ) NOT NULL AFTER `wr_17` ");

$wr_19_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_19'");
if($wr_19_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_19` VARCHAR( 255 ) NOT NULL AFTER `wr_18` ");

$wr_20_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_20'");
if($wr_20_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_20` VARCHAR( 255 ) NOT NULL AFTER `wr_19` ");

$wr_21_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_21'");
if($wr_21_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_21` VARCHAR( 255 ) NOT NULL AFTER `wr_20` ");

$wr_22_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_22'");
if($wr_22_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_22` VARCHAR( 255 ) NOT NULL AFTER `wr_21` ");

$wr_23_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_23'");
if($wr_23_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_23` VARCHAR( 255 ) NOT NULL AFTER `wr_22` ");

$wr_24_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_24'");
if($wr_24_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_24` VARCHAR( 255 ) NOT NULL AFTER `wr_23` ");

$wr_25_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_25'");
if($wr_25_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_25` VARCHAR( 255 ) NOT NULL AFTER `wr_24` ");

$wr_26_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_26'");
if($wr_26_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_26` VARCHAR( 255 ) NOT NULL AFTER `wr_25` ");

$wr_27_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_27'");
if($wr_27_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_27` VARCHAR( 255 ) NOT NULL AFTER `wr_26` ");

$wr_28_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_28'");
if($wr_28_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_28` VARCHAR( 255 ) NOT NULL AFTER `wr_27` ");

$wr_29_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_29'");
if($wr_29_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_29` VARCHAR( 255 ) NOT NULL AFTER `wr_28` ");

$wr_30_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_30'");
if($wr_30_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_30` VARCHAR( 255 ) NOT NULL AFTER `wr_29` ");

$wr_31_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_31'");
if($wr_31_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_31` VARCHAR( 255 ) NOT NULL AFTER `wr_30` ");

$wr_32_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_32'");
if($wr_32_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_32` VARCHAR( 255 ) NOT NULL AFTER `wr_31` ");

$wr_33_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_33'");
if($wr_33_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_33` VARCHAR( 255 ) NOT NULL AFTER `wr_32` ");

$wr_34_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_34'");
if($wr_34_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_34` VARCHAR( 255 ) NOT NULL AFTER `wr_33` ");

$wr_35_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_35'");
if($wr_35_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_35` VARCHAR( 255 ) NOT NULL AFTER `wr_34` ");

$wr_36_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_36'");
if($wr_36_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_36` VARCHAR( 255 ) NOT NULL AFTER `wr_35` ");

$wr_37_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_37'");
if($wr_37_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_37` VARCHAR( 255 ) NOT NULL AFTER `wr_36` ");

$wr_38_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_38'");
if($wr_38_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_38` VARCHAR( 255 ) NOT NULL AFTER `wr_37` ");

$wr_39_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_39'");
if($wr_39_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_39` VARCHAR( 255 ) NOT NULL AFTER `wr_38` ");

$wr_40_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_40'");
if($wr_40_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_40` VARCHAR( 255 ) NOT NULL AFTER `wr_39` ");

$wr_41_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_41'");
if($wr_41_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_41` VARCHAR( 255 ) NOT NULL AFTER `wr_40` ");

$wr_42_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_42'");
if($wr_42_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_42` VARCHAR( 255 ) NOT NULL AFTER `wr_41` ");

$wr_43_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_43'");
if($wr_43_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_43` VARCHAR( 255 ) NOT NULL AFTER `wr_42` ");

$wr_44_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_44'");
if($wr_44_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_44` VARCHAR( 255 ) NOT NULL AFTER `wr_43` ");

$wr_45_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_45'");
if($wr_45_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_45` VARCHAR( 255 ) NOT NULL AFTER `wr_44` ");

$wr_46_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_46'");
if($wr_46_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_46` VARCHAR( 255 ) NOT NULL AFTER `wr_45` ");

$wr_47_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_47'");
if($wr_47_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_47` VARCHAR( 255 ) NOT NULL AFTER `wr_46` ");

$wr_48_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_48'");
if($wr_48_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_48` VARCHAR( 255 ) NOT NULL AFTER `wr_47` ");

$wr_49_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_49'");
if($wr_49_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_49` VARCHAR( 255 ) NOT NULL AFTER `wr_48` ");

$wr_50_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_50'");
if($wr_50_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_50` VARCHAR( 255 ) NOT NULL AFTER `wr_49` ");

$wr_51_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_51'");
if($wr_51_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_51` VARCHAR( 255 ) NOT NULL AFTER `wr_50` ");

$wr_52_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_52'");
if($wr_52_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_52` VARCHAR( 255 ) NOT NULL AFTER `wr_51` ");

$wr_53_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_53'");
if($wr_53_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_53` VARCHAR( 255 ) NOT NULL AFTER `wr_52` ");

$wr_54_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_54'");
if($wr_54_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_54` VARCHAR( 255 ) NOT NULL AFTER `wr_53` ");

$wr_55_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_55'");
if($wr_55_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_55` VARCHAR( 255 ) NOT NULL AFTER `wr_54` ");

$wr_56_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_56'");
if($wr_56_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_56` VARCHAR( 255 ) NOT NULL AFTER `wr_55` ");

$wr_57_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_57'");
if($wr_57_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_57` VARCHAR( 255 ) NOT NULL AFTER `wr_56` ");

$wr_58_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_58'");
if($wr_58_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_58` VARCHAR( 255 ) NOT NULL AFTER `wr_57` ");

$wr_59_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_59'");
if($wr_59_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_59` VARCHAR( 255 ) NOT NULL AFTER `wr_58` ");

$wr_60_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_60'");
if($wr_60_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_60` VARCHAR( 255 ) NOT NULL AFTER `wr_59` ");

$wr_61_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_61'");
if($wr_61_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_61` VARCHAR( 255 ) NOT NULL AFTER `wr_60` ");

$wr_62_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_62'");
if($wr_62_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_62` VARCHAR( 255 ) NOT NULL AFTER `wr_61` ");

$wr_63_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_63'");
if($wr_63_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_63` VARCHAR( 255 ) NOT NULL AFTER `wr_62` ");

$wr_64_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_64'");
if($wr_64_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_64` VARCHAR( 255 ) NOT NULL AFTER `wr_63` ");

$wr_65_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_65'");
if($wr_65_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_65` VARCHAR( 255 ) NOT NULL AFTER `wr_64` ");

$wr_66_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_66'");
if($wr_66_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_66` VARCHAR( 255 ) NOT NULL AFTER `wr_65` ");

$wr_67_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_67'");
if($wr_67_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_67` VARCHAR( 255 ) NOT NULL AFTER `wr_66` ");

$wr_68_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_68'");
if($wr_68_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_68` VARCHAR( 255 ) NOT NULL AFTER `wr_67` ");

$wr_69_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_69'");
if($wr_69_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_69` VARCHAR( 255 ) NOT NULL AFTER `wr_68` ");

$wr_70_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_70'");
if($wr_70_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_70` VARCHAR( 255 ) NOT NULL AFTER `wr_69` ");

$wr_71_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_71'");
if($wr_71_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_71` VARCHAR( 255 ) NOT NULL AFTER `wr_70` ");

$wr_72_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_72'");
if($wr_72_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_72` VARCHAR( 255 ) NOT NULL AFTER `wr_71` ");

$wr_73_chk = sql_fetch("SHOW COLUMNS FROM $write_table  WHERE `Field` = 'wr_73'");
if($wr_73_chk['Field'] == "")		sql_query("ALTER TABLE $write_table ADD `wr_73` VARCHAR( 255 ) NOT NULL AFTER `wr_72` ");




// $wr_1 = $wr_1_0;
// $wr_2 = $wr_2_0;
// $wr_3 = $wr_3_0;
// $wr_4 = $wr_4_0;
// $wr_5 = $wr_5_0;
// $wr_6 = $wr_6_0;
// $wr_7 = $wr_7_0;
// $wr_8 = $wr_8_0;
// $wr_9 = $wr_9_0;
// $wr_10 = $wr_10_0;
// $wr_10 = $wr_10_0.",".$wr_10_1.",".$wr_10_2.",".$wr_10_3.",".$wr_10_4;


$sql =" update $write_table 
			set 


				wr_11 = '$wr_11',
				wr_12 = '$wr_12',
				wr_13 = '$wr_13',
				wr_14 = '$wr_14',
				wr_15 = '$wr_15',
				wr_16 = '$wr_16',
				wr_17 = '$wr_17',
				wr_18 = '$wr_18',
				wr_19 = '$wr_19',
				wr_20 = '$wr_20',
				wr_21 = '$wr_21',
				wr_22 = '$wr_22',
				wr_23 = '$wr_23',
				wr_24 = '$wr_24',
				wr_25 = '$wr_25',
				wr_26 = '$wr_26',
				wr_27 = '$wr_27',
				wr_28 = '$wr_28',
				wr_29 = '$wr_29',
				wr_30 = '$wr_30',
				wr_31 = '$wr_31',
				wr_32 = '$wr_32',
				wr_33 = '$wr_33',
				wr_34 = '$wr_34',
				wr_35 = '$wr_35',
				wr_36 = '$wr_36',
				wr_37 = '$wr_37',
				wr_38 = '$wr_38',
				wr_39 = '$wr_39',
				wr_40 = '$wr_40',
				wr_41 = '$wr_41',
				wr_42 = '$wr_42',
				wr_43 = '$wr_43',
				wr_44 = '$wr_44',
				wr_45 = '$wr_45',
				wr_46 = '$wr_46',
				wr_47 = '$wr_47',
				wr_48 = '$wr_48',
				wr_49 = '$wr_49',
				wr_50 = '$wr_50',
				wr_51 = '$wr_51',
				wr_52 = '$wr_52',
				wr_53 = '$wr_53',
				wr_54 = '$wr_54',
				wr_55 = '$wr_55',
				wr_56 = '$wr_56',
				wr_57 = '$wr_57',
				wr_58 = '$wr_58',
				wr_59 = '$wr_59',
				wr_60 = '$wr_60',
				wr_61 = '$wr_61',
				wr_62 = '$wr_62',
				wr_63 = '$wr_63',
				wr_64 = '$wr_64',
				wr_65 = '$wr_65',
				wr_66 = '$wr_66',
				wr_67 = '$wr_67',
				wr_68 = '$wr_68',
				wr_69 = '$wr_69',
				wr_70 = '$wr_70',
				wr_71 = '$wr_71',
				wr_72 = '$wr_72',
				wr_73 = '$wr_73'



			where wr_id = '$wr_id' 
";

sql_query($sql);

$wr_1 = "$wr_1_1|$wr_1_2|$wr_1_3|$wr_1_4|$wr_1_5|$wr_1_6|$wr_1_7|$wr_1_8|$wr_1_9|$wr_1_0|"; 

$wr_2 = "$wr_2_1|$wr_2_2|$wr_2_3|$wr_2_4|$wr_2_5|$wr_2_6|$wr_2_7|$wr_2_8|$wr_2_9|$wr_2_0|"; 

$wr_3 = "$wr_3_1|$wr_3_2|$wr_3_3|$wr_3_4|$wr_3_5|$wr_3_6|$wr_3_7|$wr_3_8|$wr_3_9|$wr_3_0|"; 

$wr_4 = "$wr_4_1|$wr_4_2|$wr_4_3|$wr_4_4|$wr_4_5|$wr_4_6|$wr_4_7|$wr_4_8|$wr_4_9|$wr_4_0|"; 

$wr_5 = "$wr_5_1|$wr_2_2|$wr_5_3|$wr_5_4|$wr_5_5|$wr_5_6|$wr_5_7|$wr_5_8|$wr_5_9|$wr_5_0|"; 

$wr_6 = "$wr_6_1|$wr_6_2|$wr_6_3|$wr_6_4|$wr_6_5|$wr_6_6|$wr_6_7|$wr_6_8|$wr_6_9|$wr_6_0|"; 

$wr_7 = "$wr_7_1|$wr_7_2|$wr_7_3|$wr_7_4|$wr_7_5|$wr_7_6|$wr_7_7|$wr_7_8|$wr_7_9|$wr_7_0|"; 

$wr_8 = "$wr_8_1|$wr_8_2|$wr_8_3|$wr_8_4|$wr_8_5|$wr_8_6|$wr_8_7|$wr_8_8|$wr_8_9|$wr_8_0|"; 

$wr_9 = "$wr_9_1|$wr_9_2|$wr_9_3|$wr_9_4|$wr_9_5|$wr_9_6|$wr_9_7|$wr_9_8|$wr_9_9|$wr_9_0|"; 

$wr_10 = "$wr_10_1|$wr_10_2|$wr_10_3|$wr_10_4|$wr_10_5|$wr_10_6|$wr_10_7|$wr_10_8|$wr_10_9|$wr_10_0|"; 

$wr_11 = "$wr_11_1|$wr_11_2|$wr_11_3|$wr_11_4|$wr_11_5|$wr_11_6|$wr_11_7|$wr_11_8|$wr_11_9|$wr_11_0|"; 

$wr_12 = "$wr_12_1|$wr_12_2|$wr_12_3|$wr_12_4|$wr_12_5|$wr_12_6|$wr_12_7|$wr_12_8|$wr_12_9|$wr_12_0|";

$wr_13 = "$wr_13_1|$wr_13_2|$wr_13_3|$wr_13_4|$wr_13_5|$wr_13_6|$wr_13_7|$wr_13_8|$wr_13_9|$wr_13_0|";

$wr_14 = "$wr_14_1|$wr_14_2|$wr_14_3|$wr_14_4|$wr_14_5|$wr_14_6|$wr_14_7|$wr_14_8|$wr_14_9|$wr_14_0|";

$wr_15 = "$wr_15_1|$wr_15_2|$wr_15_3|$wr_15_4|$wr_15_5|$wr_15_6|$wr_15_7|$wr_15_8|$wr_15_9|$wr_15_0|";

$wr_16 = "$wr_16_1|$wr_16_2|$wr_16_3|$wr_16_4|$wr_16_5|$wr_16_6|$wr_16_7|$wr_16_8|$wr_16_9|$wr_16_0|";

$wr_17 = "$wr_17_1|$wr_17_2|$wr_17_3|$wr_17_4|$wr_17_5|$wr_17_6|$wr_17_7|$wr_17_8|$wr_17_9|$wr_17_0|";
$wr_18 = "$wr_18_1|$wr_18_2|$wr_18_3|$wr_18_4|$wr_18_5|$wr_18_6|$wr_18_7|$wr_18_8|$wr_18_9|$wr_18_0|";
$wr_19 = "$wr_19_1|$wr_19_2|$wr_19_3|$wr_19_4|$wr_19_5|$wr_19_6|$wr_19_7|$wr_19_8|$wr_19_9|$wr_19_0|";
$wr_20 = "$wr_20_1|$wr_20_2|$wr_20_3|$wr_20_4|$wr_20_5|$wr_20_6|$wr_20_7|$wr_20_8|$wr_20_9|$wr_20_0|";
$wr_21 = "$wr_21_1|$wr_21_2|$wr_21_3|$wr_21_4|$wr_21_5|$wr_21_6|$wr_21_7|$wr_21_8|$wr_21_9|$wr_21_0|";
$wr_22 = "$wr_22_1|$wr_22_2|$wr_22_3|$wr_22_4|$wr_22_5|$wr_22_6|$wr_22_7|$wr_22_8|$wr_22_9|$wr_22_0|";
$wr_23 = "$wr_23_1|$wr_23_2|$wr_23_3|$wr_23_4|$wr_23_5|$wr_23_6|$wr_23_7|$wr_23_8|$wr_23_9|$wr_23_0|";
$wr_24 = "$wr_24_1|$wr_24_2|$wr_24_3|$wr_24_4|$wr_24_5|$wr_24_6|$wr_24_7|$wr_24_8|$wr_24_9|$wr_24_0|";
$wr_25 = "$wr_25_1|$wr_25_2|$wr_25_3|$wr_25_4|$wr_25_5|$wr_25_6|$wr_25_7|$wr_25_8|$wr_25_9|$wr_25_0|";
$wr_26 = "$wr_26_1|$wr_26_2|$wr_26_3|$wr_26_4|$wr_26_5|$wr_26_6|$wr_26_7|$wr_26_8|$wr_26_9|$wr_26_0|";
$wr_27 = "$wr_27_1|$wr_27_2|$wr_27_3|$wr_27_4|$wr_27_5|$wr_27_6|$wr_27_7|$wr_27_8|$wr_27_9|$wr_27_0|";
$wr_28 = "$wr_28_1|$wr_28_2|$wr_28_3|$wr_28_4|$wr_28_5|$wr_28_6|$wr_28_7|$wr_28_8|$wr_28_9|$wr_28_0|";
$wr_29 = "$wr_29_1|$wr_29_2|$wr_29_3|$wr_29_4|$wr_29_5|$wr_29_6|$wr_29_7|$wr_29_8|$wr_29_9|$wr_29_0|";
$wr_30 = "$wr_30_1|$wr_30_2|$wr_30_3|$wr_30_4|$wr_30_5|$wr_30_6|$wr_30_7|$wr_30_8|$wr_30_9|$wr_30_0|";

$wr_70 = "$wr_70_1|$wr_70_2|$wr_70_3|$wr_70_4|$wr_70_5|$wr_70_6|$wr_70_7|$wr_70_8|$wr_70_9|$wr_70_0|";
$wr_71 = "$wr_71_1|$wr_71_2|$wr_71_3|$wr_71_4|$wr_71_5|$wr_71_6|$wr_71_7|$wr_71_8|$wr_71_9|$wr_71_0|";
$wr_72 = "$wr_72_1|$wr_72_2|$wr_72_3|$wr_72_4|$wr_72_5|$wr_72_6|$wr_72_7|$wr_72_8|$wr_72_9|$wr_72_0|";
$wr_73 = "$wr_73_1|$wr_73_2|$wr_73_3|$wr_73_4|$wr_73_5|$wr_73_6|$wr_73_7|$wr_73_8|$wr_73_9|$wr_73_0|";


$sql1 = " update $write_table set wr_1 = '$wr_1' where wr_id = '$wr_id' ";
$sql2 = " update $write_table set wr_2 = '$wr_2' where wr_id = '$wr_id' ";
$sql3 = " update $write_table set wr_3 = '$wr_3' where wr_id = '$wr_id' ";
$sql4 = " update $write_table set wr_4 = '$wr_4' where wr_id = '$wr_id' ";
$sql5 = " update $write_table set wr_5 = '$wr_5' where wr_id = '$wr_id' ";
$sql6 = " update $write_table set wr_6 = '$wr_6' where wr_id = '$wr_id' ";
$sql7 = " update $write_table set wr_7 = '$wr_7' where wr_id = '$wr_id' ";
$sql8 = " update $write_table set wr_8 = '$wr_8' where wr_id = '$wr_id' ";
$sql9 = " update $write_table set wr_9 = '$wr_9' where wr_id = '$wr_id' ";
$sql10 = " update $write_table set wr_10 = '$wr_10' where wr_id = '$wr_id' ";
$sql11 = " update $write_table set wr_11 = '$wr_11' where wr_id = '$wr_id' ";
$sql12 = " update $write_table set wr_12 = '$wr_12' where wr_id = '$wr_id' ";
$sql13 = " update $write_table set wr_13 = '$wr_13' where wr_id = '$wr_id' ";
$sql14 = " update $write_table set wr_14 = '$wr_14' where wr_id = '$wr_id' ";
$sql15 = " update $write_table set wr_15 = '$wr_15' where wr_id = '$wr_id' ";
$sql16 = " update $write_table set wr_16 = '$wr_16' where wr_id = '$wr_id' ";
$sql17 = " update $write_table set wr_17 = '$wr_17' where wr_id = '$wr_id' ";
$sql18 = " update $write_table set wr_18 = '$wr_18' where wr_id = '$wr_id' ";
$sql19 = " update $write_table set wr_19 = '$wr_19' where wr_id = '$wr_id' ";
$sql20 = " update $write_table set wr_20 = '$wr_20' where wr_id = '$wr_id' ";
$sql21 = " update $write_table set wr_21 = '$wr_21' where wr_id = '$wr_id' ";
$sql22 = " update $write_table set wr_22 = '$wr_22' where wr_id = '$wr_id' ";
$sql23 = " update $write_table set wr_23 = '$wr_23' where wr_id = '$wr_id' ";
$sql24 = " update $write_table set wr_24 = '$wr_24' where wr_id = '$wr_id' ";
$sql25 = " update $write_table set wr_25 = '$wr_25' where wr_id = '$wr_id' ";
$sql26 = " update $write_table set wr_26 = '$wr_26' where wr_id = '$wr_id' ";
$sql27 = " update $write_table set wr_27 = '$wr_27' where wr_id = '$wr_id' ";
$sql28 = " update $write_table set wr_28 = '$wr_28' where wr_id = '$wr_id' ";
$sql29 = " update $write_table set wr_29 = '$wr_29' where wr_id = '$wr_id' ";
$sql30 = " update $write_table set wr_30 = '$wr_30' where wr_id = '$wr_id' ";

$sql70 = " update $write_table set wr_70 = '$wr_70' where wr_id = '$wr_id' ";
$sql71 = " update $write_table set wr_71 = '$wr_71' where wr_id = '$wr_id' ";
$sql72 = " update $write_table set wr_72 = '$wr_72' where wr_id = '$wr_id' ";
$sql73 = " update $write_table set wr_73 = '$wr_73' where wr_id = '$wr_id' ";

sql_query($sql1);
sql_query($sql2);
sql_query($sql3);
sql_query($sql4);
sql_query($sql5);
sql_query($sql6);
sql_query($sql7);
sql_query($sql8);
sql_query($sql9);
sql_query($sql10);
sql_query($sql11);
sql_query($sql12);
sql_query($sql13);
sql_query($sql14);
sql_query($sql15);
sql_query($sql16);
sql_query($sql17);
sql_query($sql18);
sql_query($sql19);
sql_query($sql20);
sql_query($sql21);
sql_query($sql22);
sql_query($sql23);
sql_query($sql24);
sql_query($sql25);
sql_query($sql26);
sql_query($sql27);
sql_query($sql28);
sql_query($sql29);
sql_query($sql30);

sql_query($sql70);
sql_query($sql71);
sql_query($sql72);
sql_query($sql73);


?>
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
alert('접수되었습니다.', G5_URL);

?>
