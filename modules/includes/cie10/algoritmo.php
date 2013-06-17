<?php 
//search optimizator1

$diagnostico=strtoupper($diagnostico);
$diagnostico=trim($diagnostico);



// 'X' eliminator
// Addition of new synonims
if ($diagnostico=="A09X") ($diagnostico="A09");
if ($diagnostico=="A33X") ($diagnostico="A33");
if ($diagnostico=="A34X") ($diagnostico="A34");
if ($diagnostico=="A35X") ($diagnostico="A35");
if ($diagnostico=="A38X") ($diagnostico="A38");
if ($diagnostico=="A46X") ($diagnostico="A46");
if ($diagnostico=="A55X") ($diagnostico="A55");
if ($diagnostico=="A57X") ($diagnostico="A57");
if ($diagnostico=="A58X") ($diagnostico="A58");
if ($diagnostico=="A64X") ($diagnostico="A64");
if ($diagnostico=="A65X") ($diagnostico="A65");
if ($diagnostico=="A70X") ($diagnostico="A70");
if ($diagnostico=="A78X") ($diagnostico="A78");
if ($diagnostico=="A86X") ($diagnostico="A86");
if ($diagnostico=="A89X") ($diagnostico="A89");
if ($diagnostico=="A90X") ($diagnostico="A90");
if ($diagnostico=="A91X") ($diagnostico="A91");
if ($diagnostico=="A94X") ($diagnostico="A94");
if ($diagnostico=="A99X") ($diagnostico="A99");
if ($diagnostico=="B03X") ($diagnostico="B03");
if ($diagnostico=="B04X") ($diagnostico="B04");
if ($diagnostico=="B07X") ($diagnostico="B07");
if ($diagnostico=="B09X") ($diagnostico="B09");
if ($diagnostico=="B24X") ($diagnostico="B24");
if ($diagnostico=="B49X") ($diagnostico="B49");
if ($diagnostico=="B54X") ($diagnostico="B54");
if ($diagnostico=="B59X") ($diagnostico="B59");
if ($diagnostico=="B64X") ($diagnostico="B64");
if ($diagnostico=="B72X") ($diagnostico="B72");
if ($diagnostico=="B73X") ($diagnostico="B73");
if ($diagnostico=="B75X") ($diagnostico="B75");
if ($diagnostico=="B79X") ($diagnostico="B79");
if ($diagnostico=="B80X") ($diagnostico="B80");
if ($diagnostico=="B86X") ($diagnostico="B86");
if ($diagnostico=="B89X") ($diagnostico="B89");
if ($diagnostico=="B91X") ($diagnostico="B91");
if ($diagnostico=="B92X") ($diagnostico="B92");
if ($diagnostico=="B99X") ($diagnostico="B99");
if ($diagnostico=="C01X") ($diagnostico="C01");
if ($diagnostico=="C07X") ($diagnostico="C07");
if ($diagnostico=="C12X") ($diagnostico="C12");
if ($diagnostico=="C19X") ($diagnostico="C19");
if ($diagnostico=="C20X") ($diagnostico="C20");
if ($diagnostico=="C23X") ($diagnostico="C23");
if ($diagnostico=="C33X") ($diagnostico="C33");
if ($diagnostico=="C37X") ($diagnostico="C37");
if ($diagnostico=="C52X") ($diagnostico="C52");
if ($diagnostico=="C55X") ($diagnostico="C55");
if ($diagnostico=="C56X") ($diagnostico="C56");
if ($diagnostico=="C58X") ($diagnostico="C58");
if ($diagnostico=="C61X") ($diagnostico="C61");
if ($diagnostico=="C64X") ($diagnostico="C64");
if ($diagnostico=="C65X") ($diagnostico="C65");
if ($diagnostico=="C66X") ($diagnostico="C66");
if ($diagnostico=="C73X") ($diagnostico="C73");
if ($diagnostico=="C80X") ($diagnostico="C80");
if ($diagnostico=="C97X") ($diagnostico="C97");
if ($diagnostico=="D24X") ($diagnostico="D24");
if ($diagnostico=="D27X") ($diagnostico="D27");
if ($diagnostico=="D34X") ($diagnostico="D34");
if ($diagnostico=="D45X") ($diagnostico="D45");
if ($diagnostico=="D62X") ($diagnostico="D62");
if ($diagnostico=="D65X") ($diagnostico="D65");
if ($diagnostico=="D66X") ($diagnostico="D66");
if ($diagnostico=="D67X") ($diagnostico="D67");
if ($diagnostico=="D70X") ($diagnostico="D70");
if ($diagnostico=="D71X") ($diagnostico="D71");
if ($diagnostico=="E02X") ($diagnostico="E02");
if ($diagnostico=="E15X") ($diagnostico="E15");
if ($diagnostico=="E40X") ($diagnostico="E40");
if ($diagnostico=="E41X") ($diagnostico="E41");
if ($diagnostico=="E42X") ($diagnostico="E42");
if ($diagnostico=="E43X") ($diagnostico="E43");
if ($diagnostico=="E45X") ($diagnostico="E45");
if ($diagnostico=="E46X") ($diagnostico="E46");
if ($diagnostico=="E52X") ($diagnostico="E52");
if ($diagnostico=="E54X") ($diagnostico="E54");
if ($diagnostico=="E58X") ($diagnostico="E58");
if ($diagnostico=="E59X") ($diagnostico="E59");
if ($diagnostico=="E60X") ($diagnostico="E60");
if ($diagnostico=="E65X") ($diagnostico="E65");
if ($diagnostico=="E68X") ($diagnostico="E68");
if ($diagnostico=="E86X") ($diagnostico="E86");
if ($diagnostico=="F03X") ($diagnostico="F03");
if ($diagnostico=="F04X") ($diagnostico="F04");
if ($diagnostico=="F09X") ($diagnostico="F09");
if ($diagnostico=="F21X") ($diagnostico="F21");
if ($diagnostico=="F24X") ($diagnostico="F24");
if ($diagnostico=="F28X") ($diagnostico="F28");
if ($diagnostico=="F29X") ($diagnostico="F29");
if ($diagnostico=="F39X") ($diagnostico="F39");
if ($diagnostico=="F54X") ($diagnostico="F54");
if ($diagnostico=="F55X") ($diagnostico="F55");
if ($diagnostico=="F59X") ($diagnostico="F59");
if ($diagnostico=="F61X") ($diagnostico="F61");
if ($diagnostico=="F69X") ($diagnostico="F69");
if ($diagnostico=="F82X") ($diagnostico="F82");
if ($diagnostico=="F83X") ($diagnostico="F83");
if ($diagnostico=="F88X") ($diagnostico="F88");
if ($diagnostico=="F89X") ($diagnostico="F89");
if ($diagnostico=="F99X") ($diagnostico="F99");
if ($diagnostico=="G08X") ($diagnostico="G08");
if ($diagnostico=="G09X") ($diagnostico="G09");
if ($diagnostico=="G10X") ($diagnostico="G10");
if ($diagnostico=="G20X") ($diagnostico="G20");
if ($diagnostico=="G35X") ($diagnostico="G35");
if ($diagnostico=="G64X") ($diagnostico="G64");
if ($diagnostico=="G92X") ($diagnostico="G92");
if ($diagnostico=="G98X") ($diagnostico="G98");
if ($diagnostico=="H46X") ($diagnostico="H46");
if ($diagnostico=="H55X") ($diagnostico="H55");
if ($diagnostico=="H71X") ($diagnostico="H71");
if ($diagnostico=="I00X") ($diagnostico="I00");
if ($diagnostico=="I10X") ($diagnostico="I10");
if ($diagnostico=="I38X") ($diagnostico="I38");
if ($diagnostico=="I48X") ($diagnostico="I48");
if ($diagnostico=="I64X") ($diagnostico="I64");
if ($diagnostico=="I81X") ($diagnostico="I81");
if ($diagnostico=="I99X") ($diagnostico="I99");
if ($diagnostico=="J00X") ($diagnostico="J00");
if ($diagnostico=="J13X") ($diagnostico="J13");
if ($diagnostico=="J14X") ($diagnostico="J14");
if ($diagnostico=="J22X") ($diagnostico="J22");
if ($diagnostico=="J36X") ($diagnostico="J36");
if ($diagnostico=="J40X") ($diagnostico="J40");
if ($diagnostico=="J42X") ($diagnostico="J42");
if ($diagnostico=="J46X") ($diagnostico="J46");
if ($diagnostico=="J47X") ($diagnostico="J47");
if ($diagnostico=="J60X") ($diagnostico="J60");
if ($diagnostico=="J61X") ($diagnostico="J61");
if ($diagnostico=="J64X") ($diagnostico="J64");
if ($diagnostico=="J65X") ($diagnostico="J65");
if ($diagnostico=="J80X") ($diagnostico="J80");
if ($diagnostico=="J81X") ($diagnostico="J81");
if ($diagnostico=="J82X") ($diagnostico="J82");
if ($diagnostico=="J90X") ($diagnostico="J90");
if ($diagnostico=="K20X") ($diagnostico="K20");
if ($diagnostico=="K30X") ($diagnostico="K30");
if ($diagnostico=="K36X") ($diagnostico="K36");
if ($diagnostico=="K37X") ($diagnostico="K37");
if ($diagnostico=="K85X") ($diagnostico="K85");
if ($diagnostico=="L00X") ($diagnostico="L00");
if ($diagnostico=="L22X") ($diagnostico="L22");
if ($diagnostico=="L26X") ($diagnostico="L26");
if ($diagnostico=="L42X") ($diagnostico="L42");
if ($diagnostico=="L52X") ($diagnostico="L52");
if ($diagnostico=="L80X") ($diagnostico="L80");
if ($diagnostico=="L82X") ($diagnostico="L82");
if ($diagnostico=="L83X") ($diagnostico="L83");
if ($diagnostico=="L84X") ($diagnostico="L84");
if ($diagnostico=="L88X") ($diagnostico="L88");
if ($diagnostico=="L89X") ($diagnostico="L89");
if ($diagnostico=="L97X") ($diagnostico="L97");
if ($diagnostico=="M45X") ($diagnostico="M45");
if ($diagnostico=="N10X") ($diagnostico="N10");
if ($diagnostico=="N12X") ($diagnostico="N12");
if ($diagnostico=="N19X") ($diagnostico="N19");
if ($diagnostico=="N23X") ($diagnostico="N23");
if ($diagnostico=="N26X") ($diagnostico="N26");
if ($diagnostico=="N40X") ($diagnostico="N40");
if ($diagnostico=="N44X") ($diagnostico="N44");
if ($diagnostico=="N46X") ($diagnostico="N46");
if ($diagnostico=="N47X") ($diagnostico="N47");
if ($diagnostico=="N61X") ($diagnostico="N61");
if ($diagnostico=="N62X") ($diagnostico="N62");
if ($diagnostico=="N63X") ($diagnostico="N63");
if ($diagnostico=="N72X") ($diagnostico="N72");
if ($diagnostico=="N86X") ($diagnostico="N86");
if ($diagnostico=="N96X") ($diagnostico="N96");
if ($diagnostico=="O11X") ($diagnostico="O11");
if ($diagnostico=="O13X") ($diagnostico="O13");
if ($diagnostico=="O16X") ($diagnostico="O16");
if ($diagnostico=="O25X") ($diagnostico="O25");
if ($diagnostico=="O40X") ($diagnostico="O40");
if ($diagnostico=="O48X") ($diagnostico="O48");
if ($diagnostico=="O60X") ($diagnostico="O60");
if ($diagnostico=="O85X") ($diagnostico="O85");
if ($diagnostico=="O93X") ($diagnostico="O93");
if ($diagnostico=="O95X") ($diagnostico="O95");
if ($diagnostico=="O96X") ($diagnostico="O96");
if ($diagnostico=="O97X") ($diagnostico="O97");
if ($diagnostico=="P38X") ($diagnostico="P38");
if ($diagnostico=="P53X") ($diagnostico="P53");
if ($diagnostico=="P60X") ($diagnostico="P60");
if ($diagnostico=="P77X") ($diagnostico="P77");
if ($diagnostico=="P90X") ($diagnostico="P90");
if ($diagnostico=="P93X") ($diagnostico="P93");
if ($diagnostico=="P95X") ($diagnostico="P95");
if ($diagnostico=="Q02X") ($diagnostico="Q02");
if ($diagnostico=="R02X") ($diagnostico="R02");
if ($diagnostico=="R05X") ($diagnostico="R05");
if ($diagnostico=="R11X") ($diagnostico="R11");
if ($diagnostico=="R12X") ($diagnostico="R12");
if ($diagnostico=="R13X") ($diagnostico="R13");
if ($diagnostico=="R14X") ($diagnostico="R14");
if ($diagnostico=="R15X") ($diagnostico="R15");
if ($diagnostico=="R17X") ($diagnostico="R17");
if ($diagnostico=="R18X") ($diagnostico="R18");
if ($diagnostico=="R21X") ($diagnostico="R21");
if ($diagnostico=="R31X") ($diagnostico="R31");
if ($diagnostico=="R32X") ($diagnostico="R32");
if ($diagnostico=="R33X") ($diagnostico="R33");
if ($diagnostico=="R34X") ($diagnostico="R34");
if ($diagnostico=="R35X") ($diagnostico="R35");
if ($diagnostico=="R36X") ($diagnostico="R36");
if ($diagnostico=="R42X") ($diagnostico="R42");
if ($diagnostico=="R51X") ($diagnostico="R51");
if ($diagnostico=="R53X") ($diagnostico="R53");
if ($diagnostico=="R54X") ($diagnostico="R54");
if ($diagnostico=="R55X") ($diagnostico="R55");
if ($diagnostico=="R58X") ($diagnostico="R58");
if ($diagnostico=="R64X") ($diagnostico="R64");
if ($diagnostico=="R69X") ($diagnostico="R69");
if ($diagnostico=="R71X") ($diagnostico="R71");
if ($diagnostico=="R72X") ($diagnostico="R72");
if ($diagnostico=="R75X") ($diagnostico="R75");
if ($diagnostico=="R80X") ($diagnostico="R80");
if ($diagnostico=="R81X") ($diagnostico="R81");
if ($diagnostico=="R91X") ($diagnostico="R91");
if ($diagnostico=="R92X") ($diagnostico="R92");
if ($diagnostico=="R95X") ($diagnostico="R95");
if ($diagnostico=="R98X") ($diagnostico="R98");
if ($diagnostico=="R99X") ($diagnostico="R99");
if ($diagnostico=="S16X") ($diagnostico="S16");
if ($diagnostico=="S18X") ($diagnostico="S18");
if ($diagnostico=="S47X") ($diagnostico="S47");
if ($diagnostico=="T07X") ($diagnostico="T07");
if ($diagnostico=="T08X") ($diagnostico="T08");
if ($diagnostico=="T10X") ($diagnostico="T10");
if ($diagnostico=="T12X") ($diagnostico="T12");
if ($diagnostico=="T16X") ($diagnostico="T16");
if ($diagnostico=="T55X") ($diagnostico="T55");
if ($diagnostico=="T58X") ($diagnostico="T58");
if ($diagnostico=="T64X") ($diagnostico="T64");
if ($diagnostico=="T66X") ($diagnostico="T66");
if ($diagnostico=="T68X") ($diagnostico="T68");
if ($diagnostico=="T71X") ($diagnostico="T71");
if ($diagnostico=="T96X") ($diagnostico="T96");
if ($diagnostico=="T97X") ($diagnostico="T97");
if ($diagnostico=="V98X") ($diagnostico="V98");
if ($diagnostico=="V99X") ($diagnostico="V99");
if ($diagnostico=="Y66X") ($diagnostico="Y66");
if ($diagnostico=="Y69X") ($diagnostico="Y69");
if ($diagnostico=="Y86X") ($diagnostico="Y86");
if ($diagnostico=="Y95X") ($diagnostico="Y95");
if ($diagnostico=="Y96X") ($diagnostico="Y96");
if ($diagnostico=="Y97X") ($diagnostico="Y97");
if ($diagnostico=="Y98X") ($diagnostico="Y98");
if ($diagnostico=="Z21X") ($diagnostico="Z21");
if ($diagnostico=="Z33X") ($diagnostico="Z33");
if ($diagnostico=="TROMPAS") ($diagnostico="TROMPA");


$diagnostico=str_replace("á","A",$diagnostico);
$diagnostico=str_replace("é","E",$diagnostico);
$diagnostico=str_replace("í","I",$diagnostico);
$diagnostico=str_replace("ó","O",$diagnostico);
$diagnostico=str_replace("ú","U",$diagnostico);
$diagnostico=str_replace("Á","A",$diagnostico);
$diagnostico=str_replace("É","E",$diagnostico);
$diagnostico=str_replace("Í","I",$diagnostico);
$diagnostico=str_replace("Ó","O",$diagnostico);
$diagnostico=str_replace("Ú","U",$diagnostico);
$diagnostico=str_replace("ñ","N",$diagnostico);
$diagnostico=str_replace("Ñ","N",$diagnostico);
$diagnostico=str_replace("Ü","U",$diagnostico);
$diagnostico=str_replace("ü","U",$diagnostico);
$diagnostico=str_replace("ö","O",$diagnostico);
$diagnostico=str_replace("Ö","O",$diagnostico);
$diagnostico=str_replace(" EN "," ",$diagnostico);
$diagnostico=str_replace(" DE "," ",$diagnostico);



if ($diagnostico=="SINTOMATICO RESPIRATORIO") {$one_c=3;$diagnostico="%A162%"; $diagnostico2="%A167%"; $diagnostico3="%A168%"; $adv=$advice;}
if ($diagnostico=="HIPERBILIRRUBINEMIA") {$one_c=3;$diagnostico="%E806%"; $diagnostico2="%E807%"; $diagnostico3="%ICTERICIA%"; $adv=$advice;}


$advice="La palabra o frase buscada no tiene coincidencia exacta en los c&oacutedigos CIE10. El buscador internamente ha hecho una 
conversi&oacuten a sin&oacutenimo equivalente.";
//onecriteriasearch
$one_c=1;
$resultado=$diagnostico;


//SPELLING CORRECTIONS
$spellcorrect="Tal vez quizo decir ";

if (substr_count($diagnostico,"INFECION")) { $diagnostico=str_replace("INFECION","INFECCION",$diagnostico);$adv=$spellcorrect." INFECCION";}
if (substr_count($diagnostico,"ALIMENARIA")) {$diagnostico=str_replace("ALIMENARIA","ALIMENTARIA",$diagnostico);$adv=$spellcorrect." ALIMENTARIA";}
if (substr_count($diagnostico,"HIPERPLACIA")) {$diagnostico=str_replace("HIPERPLACIA","HIPERPLASIA",$diagnostico);$adv=$spellcorrect." HIPERPLASIA";}
if (substr_count($diagnostico,"HERPEZ")) {$diagnostico=str_replace("HERPEZ","HERPES",$diagnostico);$adv=$spellcorrect." HERPES";}
if (substr_count($diagnostico,"INFECION")) { $diagnostico=str_replace("INFECION","INFECCION",$diagnostico);$adv=$spellcorrect." INFECCION";}
if (substr_count($diagnostico,"RUTURA")) { $diagnostico=str_replace("RUTURA","RUPTURA",$diagnostico);$adv=$spellcorrect." RUPTURA";}
if (substr_count($diagnostico,"MALASIA")) { $diagnostico=str_replace("MALASIA","MALACIA",$diagnostico);$adv=$spellcorrect." MALACIA";}
if (substr_count($diagnostico,"CHALACION")) { $diagnostico=str_replace("CHALACION","CHALAZION",$diagnostico);$adv=$spellcorrect." CHALAZION";}
if (substr_count($diagnostico,"BRONCOMALASIA")) { $diagnostico=str_replace("BRONCOMALASIA","BRONCOMALACIA",$diagnostico);$adv=$spellcorrect." BRONCOMALACIA";}
if (substr_count($diagnostico,"TORAXICO")) { $diagnostico=str_replace("TORAXICO","TORACICO",$diagnostico);$adv=$spellcorrect." TORACICO";}
if (substr_count($diagnostico,"TENCIONAL")) { $diagnostico=str_replace("TENCIONAL","TENSIONAL",$diagnostico);$adv=$spellcorrect." TENSIONAL";}
if (substr_count($diagnostico,"HIV")) { $diagnostico=str_replace("HIV","VIH",$diagnostico);$adv=$spellcorrect." VIH";}
if (substr_count($diagnostico,"OLIGOAMNIOS")) { $diagnostico=str_replace("OLIGOAMNIOS","OLIGOHIDRAMNIOS",$diagnostico);$adv=$spellcorrect." OLIGOHIDRAMNIOS";}
if (substr_count($diagnostico,"CEREBRO VASCULAR")) { $diagnostico=str_replace("CEREBRO VASCULAR","CEREBROVASCULAR",$diagnostico);$adv=$spellcorrect." CEREBROVASCULAR";}
if (substr_count($diagnostico,"NEOPLASMA")) { $diagnostico=str_replace("NEOPLASMA","NEOPLASIA",$diagnostico);$adv=$spellcorrect." NEOPLASIA";}
if (substr_count($diagnostico,"HEMIPLEGIA")) { $diagnostico=str_replace("HEMIPLEGIA","HEMIPLEJIA",$diagnostico);$adv=$spellcorrect." HEMIPLEJIA";}
if (substr_count($diagnostico,"COLECISITITIS")) { $diagnostico=str_replace("COLECISITITIS","COLECISTITIS",$diagnostico);$adv=$spellcorrect." COLECISTITIS";}
if (substr_count($diagnostico,"SINDROME DE MARCAN")) { $diagnostico=str_replace("SINDROME DE MARCAN","SINDROME DE MARFAN",$diagnostico);$adv=$spellcorrect." SINDROME DE MARFAN";}
if (substr_count($diagnostico,"INTOXICATION")) { $diagnostico=str_replace("INTOXICATION","INTOXICACION",$diagnostico);$adv=$spellcorrect." INTOXICACION";}
if (substr_count($diagnostico,"ECCEMA")) { $diagnostico=str_replace("ECCEMA","ECZEMA",$diagnostico);$adv=$spellcorrect." ECZEMA";}
if (substr_count($diagnostico,"PREECLAMSIA")) { $diagnostico=str_replace("PREECLAMSIA","PREECLAPMSIA",$diagnostico);$adv=$spellcorrect." PREECLAPMSIA";}
if (substr_count($diagnostico,"PARACITOSIS")) { $diagnostico=str_replace("PARACITOSIS","PARASITOSIS",$diagnostico);$adv=$spellcorrect." PARASITOSIS";}
if (substr_count($diagnostico,"DIABETES")) { $diagnostico=str_replace("DIABETES","DIABETES",$diagnostico);$adv=$spellcorrect." DIABETES";}
if (substr_count($diagnostico,"ABCESO")) { $diagnostico=str_replace("ABCESO","ABSCESO",$diagnostico);$adv=$spellcorrect." ABSCESO";}
if (substr_count($diagnostico,"ABSESO")) { $diagnostico=str_replace("ABSESO","ABSCESO",$diagnostico);$adv=$spellcorrect." ABSCESO";}
if (substr_count($diagnostico,"ABCESO")) { $diagnostico=str_replace("ABCESO","ABSCESO",$diagnostico);$adv=$spellcorrect." ABSCESO";}
if (substr_count($diagnostico,"CONVULCION")) { $diagnostico=str_replace("CONVULCION","CONVULSION",$diagnostico);$adv=$spellcorrect." CONVULSION";}
if (substr_count($diagnostico,"COMVULSION")) { $diagnostico=str_replace("COMVULSION","CONVULSION",$diagnostico);$adv=$spellcorrect." CONVULSION";}
if (substr_count($diagnostico,"COMBULSION")) { $diagnostico=str_replace("COMBULSION","CONVULSION",$diagnostico);$adv=$spellcorrect." CONVULSION";}
if (substr_count($diagnostico,"CONVULCIONES")) { $diagnostico=str_replace("CONVULCIONES","CONVULSIONES",$diagnostico);$adv=$spellcorrect." CONVULSIONES";}
if (substr_count($diagnostico,"CONTUCION")) { $diagnostico=str_replace("CONTUCION","CONTUSION",$diagnostico);$adv=$spellcorrect." CONTUSION";}
if (substr_count($diagnostico,"RETENSION")) { $diagnostico=str_replace("RETENSION","RETENCION",$diagnostico);$adv=$spellcorrect." RETENCION";}
if (substr_count($diagnostico,"COMBULCIONES")) { $diagnostico=str_replace("COMBULCIONES","CONVULSIONES",$diagnostico);$adv=$spellcorrect." CONVULSIONES";}
if (substr_count($diagnostico,"MENBRANA")) { $diagnostico=str_replace("MENBRANA","MEMBRANA",$diagnostico);$adv=$spellcorrect." MEMBRANA";}
if (substr_count($diagnostico,"DEPARTO")) { $diagnostico=str_replace("DEPARTO","DE PARTO",$diagnostico);$adv=$spellcorrect." DE PARTO";}



//one term replace
if ($diagnostico=="SIDA") {$diagnostico="VIH";$adv=$advice;}
if ($diagnostico=="MIGRAñA") {$diagnostico="MIGRAÑA";$adv=$advice;}
if ($diagnostico=="I10X") {$diagnostico="I10";$adv=$advice;}
if ($diagnostico=="HTA") {$diagnostico="HIPERTENSION";$adv=$advice;}
if ($diagnostico=="EXTRAÑO") {$diagnostico="EXTRANO";$adv=$advice;}
if ($diagnostico=="TOS") {$diagnostico=" TOS";$adv=$advice;}
if ($diagnostico=="ENCIA") {$diagnostico=" ENCIA";$adv=$advice;}
if ($diagnostico=="GRIPA"||$diagnostico=="GRIPE") {$diagnostico=" LA INFLUENZA ";$adv=$advice;}
if ($diagnostico=="GRIPE") {$diagnostico=" LA INFLUENZA ";$adv=$advice;}
if ($diagnostico=="GONORREA") {$diagnostico="GONOCOCICA";$adv=$advice;}
if ($diagnostico=="MUÑECA") {$diagnostico="MUNECA";$adv=$advice;}
if ($diagnostico=="CISTITIS") {$diagnostico=" CISTITIS";$adv=$advice;}
if ($diagnostico=="PELUDAS") {$diagnostico="VELLOSAS";$adv=$advice;}
if ($diagnostico=="CELULAS PELUDAS") {$diagnostico="CELULAS VELLOSAS";$adv=$advice;}
if ($diagnostico=="CÉLULAS PELUDAS") {$diagnostico="CELULAS VELLOSAS";$adv=$advice;}
if ($diagnostico=="LEUCEMIA DE CÉLULAS PELUDAS") {$diagnostico="LEUCEMIA DE CELULAS VELLOSAS";$adv=$advice;}
if ($diagnostico=="LEUCEMIA DE CELULAS PELUDAS") {$diagnostico="LEUCEMIA DE CELULAS VELLOSAS";$adv=$advice;}
if ($diagnostico=="FABRY"||$diagnostico=="ENFERMEDAD DE FABRY") {$diagnostico="ESFINGOLIPIDOSIS";$adv=$advice;}
if ($diagnostico=="GAUCHER"||$diagnostico=="ENFERMEDAD DE GAUCHER") {$diagnostico="ESFINGOLIPIDOSIS";$adv=$advice;}
if ($diagnostico=="LUMBALGIA"||$diagnostico=="DOLOR LUMBAR"||$diagnostico=="LUMBALGIA AGUDA") 
	{$diagnostico="LUMBAGO";$adv=$advice;}
if ($diagnostico=="EFECTO SECUNDARIO") {$diagnostico="EFECTOS ADVERSOS";$adv=$advice;}
if ($diagnostico=="VARICOCELE") {$diagnostico="VARICES ESCROTALES";$adv=$advice;}
if ($diagnostico=="INFECCION URINARIA"||$diagnostico=="INFECCION DEL TRACTO URINARIO") {$diagnostico="INFECCION DE VIAS URINARIAS";$adv=$advice;}
if ($diagnostico=="FORUNCULO") {$diagnostico="FURUNCULO";$adv=$advice;}
if ($diagnostico=="AGMIDALITIS") {$diagnostico="AMIGDALITIS";$adv=$advice;}
if ($diagnostico=="COSTOCONDRITIS") {$diagnostico="CONDROCOSTAL";$adv=$advice;}
if ($diagnostico=="UñA") {$diagnostico="UÑA";$adv=$advice;}
if ($diagnostico=="MUCOSITIS") {$diagnostico=" ESTOMATITIS";$adv=$advice;}
if ($diagnostico=="SINDROME DE LISIS TUMORAL") {$diagnostico="OTROS TRASTORNOS DEL EQUILIBRIO DE LOS ELECTROLITOS";$adv=$advice;}
if ($diagnostico=="COLANGIOCARCINOMA") {$diagnostico="TUMOR MALIGNO DE LAS VIAS BILIARES";$adv=$advice;}
if ($diagnostico=="HERNIA LUMBAR") {$diagnostico="M51";$adv=$advice;}
if ($diagnostico=="AFTA"||$diagnostico=="AFTAS") {$diagnostico="K120";$adv=$advice;}
if ($diagnostico=="FASCITIS PLANTAR") {$diagnostico="FIBROMATOSIS DE LA APONEUROSIS PLANTAR";$adv=$advice;}
if ($diagnostico=="PRóSTATA") {$diagnostico="PROSTATA";$adv=$advice;}
if ($diagnostico=="PRÓSTATA") {$diagnostico="PROSTATA";$adv=$advice;}
if ($diagnostico=="TORTICOLIS") {$diagnostico="CERVICALGIA";$adv=$advice;}
if ($diagnostico=="CóLERA"||$diagnostico=="CoLERA") {$diagnostico="COLERA";$adv=$advice;}
if ($diagnostico=="COLéDOCO") {$diagnostico="COLEDOCO";$adv=$advice;}
if ($diagnostico=="VAGINOSIS") {$diagnostico="N768";$adv=$advice;}
if ($diagnostico=="COSTOCONDRAL") {$diagnostico="CONDROCOSTAL";$adv=$advice;}
if ($diagnostico=="ADENOMA PROSTATA") {$diagnostico="D291";$adv=$advice;}
if ($diagnostico=="DIVERTICULOSIS") {$diagnostico="K57";$adv=$advice;}
if ($diagnostico=="QUEMADOS") {$diagnostico="QUEMAD";$adv=$advice;}
if ($diagnostico=="CEFALEA TENSIONAL"||$diagnostico=="CEFALEA TE") {$diagnostico="CEFALEA DEBIDA A TENSION";$adv=$advice;}
if ($diagnostico=="PROCESO FEBRIL") {$diagnostico="FIEBRE";$adv=$advice;}
if ($diagnostico=="PRESUNCION") {$diagnostico="PRESUNT";$adv=$advice;}
if ($diagnostico=="MENINGIOMA") {$diagnostico="TUMOR BENIGNO DE LAS MENINGES";$adv=$advice;}
if ($diagnostico=="AMENAZA DE PARTO PREMATURO"||$diagnostico=="AMENAZA DE PARTO PRETERMINO"
||$diagnostico=="AMENAZA PARTO" ) {$diagnostico="O600";$adv=$advice;}
if ($diagnostico=="RUPTURA PREMATURA DE MEMBRANAS"||$diagnostico=="ROTURA PREMATURA DE MEMBRANAS") 
{$diagnostico="RUPTURA PREMATURA DE LAS MEMBRANAS";$adv=$advice;}
if ($diagnostico=="PARTO EUTOCICO") {$diagnostico="O800";$adv=$advice;}
if ($diagnostico=="GESTANTE") {$diagnostico="GESTA ";$adv=$advice;}
if ($diagnostico=="ATENCION DE PARTO") {$diagnostico="PARTO UNICO ASISTIDO";$adv=$advice;}
if ($diagnostico=="ABORTO INCOMPLETO") {$diagnostico="ABORTO%INCOMPLETO";$adv=$advice;}
if ($diagnostico=="MIOMATOSIS") {$diagnostico="LEIOMIOMA";$adv=$advice;}
if ($diagnostico=="CANCER DE ENDOMETRIO") {$diagnostico="C541";$adv=$advice;}
if ($diagnostico=="PARTO VERTICE ESPONTANEO") {$diagnostico="O800";$adv=$advice;}
if ($diagnostico=="VALVULOPATIA") {$diagnostico="VALVULA";$adv=$advice;}
if ($diagnostico=="NIC 1") {$diagnostico="N870";$adv=$advice;}
if ($diagnostico=="NIC 2") {$diagnostico="N871";$adv=$advice;}
if ($diagnostico=="NIC 3") {$diagnostico="N872";$adv=$advice;}
if ($diagnostico=="NIC I") {$diagnostico="N870";$adv=$advice;}
if ($diagnostico=="NIC II") {$diagnostico="N871";$adv=$advice;}
if ($diagnostico=="NIC III") {$diagnostico="N872";$adv=$advice;}
if ($diagnostico=="CANCER DE CUELLO UTERINO") {$diagnostico="OCERVIX";$adv=$advice;}
if ($diagnostico=="CANCER DE CERVIX") {$diagnostico="OCERVIX";$adv=$advice;}
if ($diagnostico=="PLACENTA ACRETA") {$diagnostico="O73";$adv=$advice;}
if ($diagnostico=="RECIEN NACIDO SANO") {$diagnostico="NACIDO% VIVO%";$adv=$advice;}
if ($diagnostico=="RETRASO MENSTRUAL") {$diagnostico="AMENORREA";$adv=$advice;}
if ($diagnostico=="RESFRIO") {$diagnostico="RESFRIADO";$adv=$advice;}
if ($diagnostico=="RCIU"||$diagnostico=="RETARDO DEL CRECIMIENTO INTRAUTERINO"
||$diagnostico=="RETRASO DE CRECIMIENTO INTRAUTERO" 
||$diagnostico=="RETARDO EN EL CRECIMIENTO INTRAUTERINO") {$diagnostico="P059";$adv=$advice;}
if ($diagnostico=="SUFRIMIENTO FETAL"||$diagnostico=="SUFRIMIENTO FETAL AGUDO"
||$diagnostico=="SFA") {$diagnostico="O68";$adv=$advice;}
if ($diagnostico=="ENDOMETRITIS") {$diagnostico="N71";$adv=$advice;}
if ($diagnostico=="METRORRAGIA"||$diagnostico=="MENOMETRORRAGIA") {$diagnostico="N921";$adv=$advice;}
if ($diagnostico=="TRONCO CEREBRAL") {$diagnostico=" ENCEFALO";$adv=$advice;}
if ($diagnostico=="DESHIDRATACION"||$diagnostico=="DESHIDRATACION GRADO 1"||
$diagnostico=="DESHIDRATACION GRADO 2"||$diagnostico=="DESHIDRATACION GRADO 3"
||$diagnostico=="DESHIDRATACION GRADO I"||
$diagnostico=="DESHIDRATACION GRADO II"||$diagnostico=="DESHIDRATACION GRADO III"||
$diagnostico=="DESHIDRATACION LEVE"||$diagnostico=="DESHIDRATACION MODERADA"||
$diagnostico=="DESHIDRATACION SEVERA"
) {$diagnostico="E86";$adv=$advice;}
if ($diagnostico=="HEMORRAGIA UTERINA DISFUNCIONAL") {$diagnostico="N939";$adv=$advice;}
if ($diagnostico=="NEVUS") {$diagnostico="NEVO";$adv=$advice;}
if ($diagnostico=="DECIDUITIS") {$diagnostico="N71";$adv=$advice;}
if ($diagnostico=="FURUNCULO ABDOMINAL") {$diagnostico="L024";$adv=$advice;}
if ($diagnostico=="COLIBACILOSIS") {$diagnostico="ESCHERICHIA COLI";$adv=$advice;}
if ($diagnostico=="INFARTO HEPATICO") {$diagnostico="K763";$adv=$advice;}
if ($diagnostico=="LEUCEMIA MIELOGENA") {$diagnostico="C92";$adv=$advice;}
if ($diagnostico=="QUEILOSIS"||$diagnostico=="QUEILITIS") {$diagnostico="K130";$adv=$advice;}
if ($diagnostico=="BOCIO ADENOMATOSO") {$diagnostico="BOCIO MULTINODULAR";$adv=$advice;}
if ($diagnostico=="EPENDIMOBLASTOMA"||$diagnostico=="EPENDIMOMA") {$diagnostico="C729";$adv=$advice;}
if ($diagnostico=="FIBROMIOMA") {$diagnostico="LEIOMIOMA";$adv=$advice;}
if ($diagnostico=="DESACONDICIONAMIENTO FISICO") {$diagnostico="Z740";$adv=$advice;}
if ($diagnostico=="DIEBETES MELLITUS TIPO"||$diagnostico=="DIABETES TIPO") {$diagnostico="DIABETES MELLITUS";$adv=$advice;}
if ($diagnostico=="DIEBETES MELLITUS TIPO II"||$diagnostico=="DIABETES TIPO II") 
{$diagnostico="DIABETES MELLITUS NO INSULINODEPENDIENTE";$adv=$advice;}
if ($diagnostico=="DIEBETES MELLITUS TIPO I"||$diagnostico=="DIABETES TIPO I") 
{$diagnostico="E10%DIABETES";$adv=$advice;}
if ($diagnostico=="DIEBETES MELLITUS DESCOMPENSADA"||$diagnostico=="DIABETES DESCOMPENSADA") 
{$diagnostico="DIABETES OTRAS COMPLICACIONES";$adv=$advice;}
if ($diagnostico=="TUMOR MALIGNO DESCONOCIDO") {$diagnostico="C80";$adv=$advice;}
if ($diagnostico=="HIPERTROFIA PROSTATA"||$diagnostico=="HIPERTROFIA PROSTATICA"||$diagnostico=="HIPERPLASIA PROSTATICA") 
{$diagnostico="N40";$adv=$advice;}
if ($diagnostico=="ESTRECHEZ PELVICA") {$diagnostico="O33";$adv=$advice;}
if ($diagnostico=="POSPARTO") {$diagnostico="POSTPARTO";}
if ($diagnostico=="ANASARCA") {$diagnostico="R601";$adv=$advice;}
if ($diagnostico=="RIESGO OBSTETRICO") {$diagnostico="Z352";$adv=$advice;}
if ($diagnostico=="PODALICO") {$diagnostico="PODALICA";}
if ($diagnostico=="PRECLAMPSIA") {$diagnostico="PREECLAMPSIA";$adv="Tal vez quizo decir 'Preeclampsia'";}
if ($diagnostico=="ENFERMEDAD HIPETENSIVA DEL EMBARAZO") {$diagnostico="O1%M%";$adv=$advice;}
if ($diagnostico=="ODINOFAGIA") {$diagnostico="R070";$adv=$advice;}
if ($diagnostico=="HIPERTENCION") {$diagnostico="HIPERTENSION";$adv="Tal vez quizo decir 'hipertensi&oacuten'";}
if ($diagnostico=="NEONATO INFECTADO") {$diagnostico="p3 infec";$adv=$advice;}
if ($diagnostico=="CANSANCIO") {$diagnostico="FATIGA";$adv=$advice;}
if ($diagnostico=="SINDROME COLEDOCIANO") {$diagnostico="K820";$adv=$advice;}
if ($diagnostico=="ARANA") {$diagnostico=" ARANA";}
if ($diagnostico=="NINO") {$diagnostico=" NINO";}
if ($diagnostico=="UNA") {$diagnostico=" UNA";}
if ($diagnostico=="CATARATAS") {$diagnostico="CATARATA";}
if ($diagnostico=="ENFERMEDAD DE HODGKIN") {$diagnostico="LINFOMA DE HODGKIN";$adv=$advice;}
if ($diagnostico=="CARCINOMATOSIS PERITONEAL") {$diagnostico="TUMOR MALIGNO PERITONEO";$adv=$advice;}
if ($diagnostico=="ISQUEMIA MESENTERICA"||$diagnostico=="ISQUEMIA AGUDA MESENTERICA") {$diagnostico="K550";$adv=$advice;}
if ($diagnostico=="ADENOCARCINOMA ANGULO HEPATICO") {$diagnostico="C183";$adv=$advice;}
if ($diagnostico=="ARTERIOESCLEROSIS CORONARIA") {$diagnostico="I251";$adv=$advice;}
if ($diagnostico=="ARTRITIS INFECCIOSA") {$diagnostico="M00";$adv=$advice;}
if ($diagnostico=="LEUCEMIA LINFOIDE CRONICA") {$diagnostico="C911";$adv=$advice;}
if ($diagnostico=="J460") {$diagnostico="J46";/*$adv=$advice;*/}
if ($diagnostico=="PULMONIA") {$diagnostico="NEUMONIA";$adv=$advice;}
if ($diagnostico=="EDEMA AGUDO DE PULMON") {$diagnostico="EDEMA PULMON";$adv=$advice;}
if ($diagnostico=="COLEDOCOLITIASIS") {$diagnostico="CALCULO DE CONDUCTO BILIAR";$adv=$advice;}
if ($diagnostico=="ICTUS"||$diagnostico=="ACV"||$diagnostico=="ECV"||$diagnostico=="ACCIDENTE CEREBROVASCULAR"
||$diagnostico=="ACCIDENTE CEREBRO VASCULAR"
) {$diagnostico="I6";$adv=$advice;}
if ($diagnostico=="CARDIOPATIA DILATADA") {$diagnostico="I420";$adv=$advice;}
if ($diagnostico=="CARDIOPATIA ISQUEMICA") {$diagnostico="I255";$adv=$advice;}
if ($diagnostico=="ATONIA UTERINA POST PARTO"||$diagnostico=="ATONIA UTERINA"
) {$diagnostico="INERCIA UTERINA";$adv=$advice;}
if ($diagnostico=="GLIOBLASTOMA CEREBRAL") {$diagnostico="C71";$adv=$advice;}
if ($diagnostico=="ABSCESO HEPATICO") {$diagnostico="ABSCESO HIGADO";$adv=$advice;}
if ($diagnostico=="SINDROME DE RESPUESTA INFLAMATORIA SISTEMICA"
||$diagnostico=="SRIS"
) {$diagnostico="R508";$adv=$advice;}
if ($diagnostico=="ISQUEMIA ARTERIAL CRONICA EXTREMIDADES INFERIORES") {$diagnostico="I738";$adv=$advice;}
if ($diagnostico=="FALLO MULTIORGANICO"||$diagnostico=="FALLA MULTIORGANICO"||$diagnostico=="FALLA MULTIORGANICA"
||$diagnostico=="FALLA ORGANICA MULTISISTEMICA") {$diagnostico="R578";$adv=$advice;}
if ($diagnostico=="CARCINOMA ESPINO CELULAR"||$diagnostico=="CARCINOMA ESPINOCELULAR"
) {$diagnostico="CANCER PIEL";$adv=$advice;}
if ($diagnostico=="COREA DE SYDENHAM"||$diagnostico=="COREA SYDENHAM")
 {$diagnostico="I02";$adv=$advice;}
if ($diagnostico=="AFECTACION NERVIOSA ORGANICA") {$diagnostico="G13";$adv=$advice;}
if ($diagnostico=="ICTUS CARDIOEMBOLICO"||$diagnostico=="ICTUS CARDIO EMBOLICO"
) {$diagnostico="I6 EMBOLIA";$adv=$advice;}
if ($diagnostico=="ISQUEMIA MIEMBROS INFERIORES") {$diagnostico="I738";$adv=$advice;}
if ($diagnostico=="CHARLES BONNET"||$diagnostico=="SINDROME CHARLES BONNET"||
$diagnostico=="SINDROME DE CHARLES BONNET"
) {$diagnostico="R441";$adv=$advice;}
if ($diagnostico=="LINFANGITIS CARCINOMATOSA") {$diagnostico="I898";$adv=$advice;}
if ($diagnostico=="TUMOR MALIGNO EXTRAPULMONAR"||$diagnostico=="TUMOR MALIGNO EXTRAPULMON"
) {$diagnostico="C38";$adv=$advice;}
if ($diagnostico=="CARCINOMA HEPATICO") {$diagnostico="C22";$adv=$advice;}
if ($diagnostico=="NEUMONIA BILATERAL") {$diagnostico="NEUMONIA";$adv=$advice;}
if ($diagnostico=="ATRAGANTAMIENTO") {$diagnostico="OBSTRUCCION VIAS RESPIRATORIAS";$adv=$advice;}
if ($diagnostico=="CONSCIENCIA") {$diagnostico="CONCIENCIA";}
if ($diagnostico=="INCENDIO") {$diagnostico="HUMO FUEGO LLAMA";$adv=$advice;}
if ($diagnostico=="CISTOSARCOMA"||$diagnostico=="CISTOSARCOMA FILOIDES") {$diagnostico="D486";$adv=$advice;}
if ($diagnostico=="ANEMIA PERNICIOSA"||$diagnostico=="ANEMIA HIPERCROMICA") {$diagnostico="D510";$adv=$advice;}
if ($diagnostico=="CONSTIPACION CRONICA") {$diagnostico="CONSTIPACION";$adv=$advice;}
if ($diagnostico=="MAMAS") {$diagnostico="MAMA";}
if ($diagnostico=="HIPOTIROIDISMO GESTACIONAL") {$diagnostico="E038";$adv=$advice;}
if ($diagnostico=="COMUNICACION INTERATRIAL"||$diagnostico=="COMUNICACION INTERAURICULAR")
 {$diagnostico="Q211";$adv=$advice;}
if ($diagnostico=="SARCOMA PLEOMORFICO") {$diagnostico="C49";$adv=$advice;}
if ($diagnostico=="CARDIOMIOPATIA VALVULAR"||$diagnostico=="MIOCARDIOPATIA VALVULAR") {$diagnostico="I428";$adv=$advice;}
if ($diagnostico=="TUMOR MALIGNO TUBO DIGESTIVO ALTO") {$diagnostico="C17";$adv=$advice;}
if ($diagnostico=="EXANTEMA VIRAL") {$diagnostico="EXANTEMA";}
if ($diagnostico=="ENCEFALOPATIA NEONATAL") {$diagnostico="P91";}
if ($diagnostico=="FISTULA UMBILICAL"||$diagnostico=="FISTULA OMBLIGO") {$diagnostico="K632";$adv=$advice;}
if ($diagnostico=="QUISTE HEPATICO") {$diagnostico="Q446";$adv=$advice;}
if ($diagnostico=="CONDILOMA ACUMINADO"
  ||$diagnostico=="CONDILOMA"
  ||$diagnostico=="CONDILOMATOSIS") {$diagnostico="A630"; $adv=$advice;}
if ($diagnostico=="CONDILOMA LATA") {$diagnostico="A513";$adv=$advice;}
if ($diagnostico=="ATEROMATOSIS") {$diagnostico="ATEROSCLER";$adv=$advice;}
if ($diagnostico=="LESION SENO CAVERNOSO") {$diagnostico="I678";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD DE NIEMANN PICK"||$diagnostico=="ENFERMEDAD DE NIEMANN-PICK"
||$diagnostico=="ENFERMEDAD NIEMANN PICK"||$diagnostico=="NIEMANN PICK") {$diagnostico="E752";$adv=$advice;}
if ($diagnostico=="HERIDA EN BRAZO") {$diagnostico="HERIDA BRAZO";}
if ($diagnostico=="HERIDA EN HOMBRO") {$diagnostico="HERIDA HOMBRO";}
if ($diagnostico=="HERIDA EN MIEMBRO SUPERIOR"
||$diagnostico=="HERIDAS EN MIEMBROS SUPERIORES") {$diagnostico="S41";}
if ($diagnostico=="APNEA CENTRAL"
||$diagnostico=="APNEA OBSTRUCTIVA") {$diagnostico="G473";$adv=$advice;}
if ($diagnostico=="CERVICOARTROSIS") {$diagnostico="M19";$adv=$advice;}
if ($diagnostico=="EPOC") {$diagnostico="J44";$adv=$advice;}
if ($diagnostico=="ESTRENIMIENTO") {$diagnostico="K590";$adv=$advice;}
if ($diagnostico=="COLECISTECTOMIA LAPAROSCOPICA") {$diagnostico="Z904";$adv=$advice;}
if ($diagnostico=="BOCHDALEK"||$diagnostico=="HERNIA BOCHDALEK"||$diagnostico=="HERNIA DE BOCHDALEK") 
{$diagnostico="Q790";$adv=$advice;}
if ($diagnostico=="SINDROME RIGIDO") {$diagnostico="G903";$adv=$advice;}
if ($diagnostico=="CARCINOMA OVARIO") {$diagnostico="D073";$adv=$advice;}
if ($diagnostico=="TRUNCUS ARTERIOSO") {$diagnostico="Q200";$adv=$advice;}
if ($diagnostico=="ENVEJECIMIENTO"||$diagnostico=="VEJEZ"||$diagnostico=="ANCIANIDAD") 
{$diagnostico="R54X";$adv=$advice;}
if ($diagnostico=="LIPOMAS") {$diagnostico="LIPOMA";}
if ($diagnostico=="COLECISTITIS ALITIASICA") {$diagnostico="K81";$adv=$advice;}
if ($diagnostico=="EMBRIAGUEZ") {$diagnostico="%TOX ALCOHOL";$adv=$advice;}
if ($diagnostico=="TUMOR MALIGNO REGION SACRA") {$diagnostico="C414";$adv=$advice;}
if ($diagnostico=="NEUMOPERITONEO") {$diagnostico="K668";$adv=$advice;}
if ($diagnostico=="CONSUMO ALCOHOL") {$diagnostico="F101";$adv=$advice;}
if ($diagnostico=="HERNIA NUCLEO PULPO"||$diagnostico=="HERNIA NUCLEO PULPOSO"||$diagnostico=="HERNIA DISCO"
||$diagnostico=="HERNIA DISCAL"
) {$diagnostico="M512";$adv=$advice;}
if ($diagnostico=="ABCESO MAMARIO"||$diagnostico=="ABSCESO MAMARIO") {$diagnostico="O911";$adv=$advice;}
if ($diagnostico=="ULCERA BULBAR") {$diagnostico="K26";$adv=$advice;}
if ($diagnostico=="CRANEOENCEFALICO") {$diagnostico="INTRACRANEAL";$adv=$advice;}
if ($diagnostico=="TRAUMA CRANEOENCEFALICO"||$diagnostico=="TRAUMA CRANEO ENCEFALICO"||$diagnostico=="TRAUMA ENCEFALOCRANEAL"
||$diagnostico=="TRAUMATISMO ENCEFALO CRANEANO"||$diagnostico=="TRAUMA CRANEOCEFALICO"||$diagnostico=="TRAUMA CRANEOCEFALICO LEVE"
||$diagnostico=="TRAUMATISMO CRANEOENCEFALICO"||$diagnostico=="TRAUMA CRANEOENCEFALICO SEVERO"
) 
{$diagnostico="TRAUMA INTRACRANEAL";$adv=$advice;}
if ($diagnostico=="DISTOCIA FUNICULAR") {$diagnostico="O69";$adv=$advice;}
if ($diagnostico=="INFECCION GLANDULA PAROTIDEA") {$diagnostico="B26";$adv=$advice;}
if ($diagnostico=="TRISOMIA 19") {$diagnostico="Q928";$adv=$advice;}
if ($diagnostico=="OBESIDAD MORBIDA") {$diagnostico="OBESIDAD";$adv=$advice;}
if ($diagnostico=="HIDROCEFALIA") {$diagnostico="HIDROCEFAL";$adv=$advice;}
if ($diagnostico=="MASA ABDOMEN"||$diagnostico=="MASA ABDOMINAL") {$diagnostico="R190";$adv=$advice;}
if ($diagnostico=="HIPERGLUCEMIA") {$diagnostico="R73";$adv=$advice;}
if ($diagnostico=="NEURALGIA CIATICO") {$diagnostico="CIATICA";$adv=$advice;}
if ($diagnostico=="HERIDA EN CARA") {$diagnostico="S01";$adv=$advice;}
if ($diagnostico=="PREDIABETES"||$diagnostico=="PRE-DIABETES") {$diagnostico="R73";$adv=$advice;}
if ($diagnostico=="FRACTURA SUPRACONDILEA DE FEMUR"||$diagnostico=="FRACTURA SUPRACONDILEA FEMUR"
) {$diagnostico="S724";$adv=$advice;}
if ($diagnostico=="GOTA HIPERURICEMICA"||$diagnostico=="GOTA TOFACEA") {$diagnostico="M104";$adv=$advice;}
if ($diagnostico=="COMA HIPERCAPNICO") {$diagnostico="R402";$adv=$advice;}
if ($diagnostico=="PARTO DISTOCICO") {$diagnostico="O66";$adv=$advice;}
if ($diagnostico=="CONTROL PRENATAL") {$diagnostico="Z34";$adv=$advice;}
if ($diagnostico=="SINDROME HIPERVISCOSIDAD"||$diagnostico=="SINDROME DE HIPERVISCOSIDAD"
||$diagnostico=="HIPERVISCOSIDAD") {$diagnostico="R701";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD CORONARIA 3 VASOS"||$diagnostico=="ENFERMEDAD CORONARIA") {$diagnostico="I251";$adv=$advice;}
if ($diagnostico=="X850"||$diagnostico=="X851"||$diagnostico=="X852"||$diagnostico=="X853"||$diagnostico=="X854"||
$diagnostico=="X855"||$diagnostico=="X856"||$diagnostico=="X857"||$diagnostico=="X858"||$diagnostico=="X859"
) {$diagnostico="X85";$adv=$advice;}
if ($diagnostico=="POLITRAUMA POR ACCIDENTE EN MOTO") {$diagnostico="MOTOCICLISTA LESIONADO ACCIDENTE";$adv=$advice;}
if ($diagnostico=="FRACTURA DENTAL"||$diagnostico=="FRACTURA ODONTOLOGICA") 
{$diagnostico="S025";$adv=$advice;}
if ($diagnostico=="TRAUMATISMO EN LA CARA") {$diagnostico="S008";$adv=$advice;}
if ($diagnostico=="HIDROPS FETALIS"||$diagnostico=="HYDROPS FETALIS") {$diagnostico="HIDROPESIA FETAL";$adv=$advice;}
if ($diagnostico=="RABDOMIOSARCOMA FUSOCELULAR"||$diagnostico=="MIOSARCOMA FUSOCELULAR") {$diagnostico="C49";$adv=$advice;}
if ($diagnostico=="AGIRIA"||$diagnostico=="LISENCEFALIA") {$diagnostico="Q043";$adv=$advice;}
if ($diagnostico=="HIPOPROTEINEMIA") {$diagnostico="R778";$adv=$advice;}
if ($diagnostico=="SARNA") {$diagnostico="B86X";$adv=$advice;}
if ($diagnostico=="TRAUMA VESICAL") {$diagnostico="S372";$adv=$advice;}
if ($diagnostico=="MENINGOVENTRICULITIS") {$diagnostico="G042";$adv=$advice;}
if ($diagnostico=="INTUSUSCEPCION") {$diagnostico="K561";$adv=$advice;}
if ($diagnostico=="NEUMONIA UTERO"||$diagnostico=="NEUMONIA INTRAUTERINA") {$diagnostico="P23";$adv=$advice;}
if ($diagnostico=="PLASTRON"||$diagnostico=="PLASTRON APENDICULAR") {$diagnostico="K353";$adv=$advice;}
if ($diagnostico=="CRISIS ASMA"||$diagnostico=="CRISIS ASMATICA") {$diagnostico="J46";$adv=$advice;}
if ($diagnostico=="URETERITIS") {$diagnostico="N390";$adv=$advice;}
if ($diagnostico=="NEUMONIA POR STAPHILOCOCUS EPIDERMIDIS") {$diagnostico="NEUMONIA ESTAFILOCOCO";$adv=$advice;}
if ($diagnostico=="PARTO PRETERMINO") {$diagnostico="O60";$adv=$advice;}
if ($diagnostico=="CRISIS HIPERTENSIVA"||$diagnostico=="URGENCIA HIPERTENSIVA"||$diagnostico=="EMERGENCIA HIPERTENSIVA") 
{$diagnostico="I10X";
$adv="No existe codigo especifico para terminos relacionados con CRISIS HIPERTENSIVA.  Debe asociar un segundo diagnostico
 que haga referencia a sintoma(s) asociado(s) u organo(s) blanco(s) afectado(s)";}
if ($diagnostico=="PANCREATITIS ENFISEMATOSA") {$diagnostico="K861";$adv=$advice;}
if ($diagnostico=="AMPULOMA"||$diagnostico=="AMPULOMA PANCREATICO"
||$diagnostico=="AMPULOMA DE PANCREAS") {$diagnostico="C241";$adv=$advice;}
if ($diagnostico=="TUMOR OSEO") {$diagnostico="TUMOR HUESOS";$adv=$advice;}
if ($diagnostico=="HEMATOMA SUBDURAL") {$diagnostico="HEMORRAGIA SUBDURAL";$adv=$advice;}
if ($diagnostico=="RUPTURA TENDON DE AQUILES"||$diagnostico=="RUPTURA DE TENDON DE AQUILES"
||$diagnostico=="RUPTURA DEL TENDON DE AQUILES") {$diagnostico="S860";$adv=$advice;}
if ($diagnostico=="TUMOR OSEO") {$diagnostico="TUMOR HUESOS";$adv=$advice;}
if ($diagnostico=="HEMORRAGIA DIGESTIVA ALTA"||$diagnostico=="SANGRADO DIGESTIVO ALTO"||
$diagnostico=="SANGRADO DE TRACTO DIGESTIVO SUPERIOR"
) {$diagnostico="K2 CON HEMORRAGIA";$adv=$advice;}
if ($diagnostico=="PRECORDALGIA"||$diagnostico=="PRECORDIALGIA") {$diagnostico="R072";$adv=$advice;}
if ($diagnostico=="ELECTROCUCION"||$diagnostico=="ELECTRIZACION"
) {$diagnostico="T754";$adv=$advice;}
if ($diagnostico=="NEUMONIA COMUNITARIA") {$diagnostico="J189";$adv=$advice;}
if ($diagnostico=="MELANOMA DE RECTO") {$diagnostico="C439";$adv=$advice;}
if ($diagnostico=="HIPERTENSION ARTERIAL"||$diagnostico=="ENFERMEDAD ARTERIAL HIPERTENSIVA"||
$diagnostico=="HIPERTENSION ARTERIAL SISTEMICA"||$diagnostico=="HIPERTENSION SISTEMICA")
 {$diagnostico="HIPERTENSION ESENCIAL";$adv=$advice;}
if ($diagnostico=="OSTEOARTROSIS") {$diagnostico="OSTEO)ARTROSIS";$adv=$advice;}
if ($diagnostico=="FRENILLO LINGUAL"||$diagnostico=="LENGUA CON FRENILLO CORTO") {$diagnostico="K148";$adv=$advice;}
if ($diagnostico=="DISLIPEMIA") {$diagnostico="E78";$adv=$advice;}
if ($diagnostico=="OSTEOPENIA") {$diagnostico="M858";$adv=$advice;}
if ($diagnostico=="LIPOMA RENAL") {$diagnostico="D175";$adv=$advice;}
if ($diagnostico=="TUMOR CAROTIDA") {$diagnostico="TUMOR CAROTIDEO";$adv=$advice;}
if ($diagnostico=="HEMIPLEJIA RESIDUAL") {$diagnostico="G819";$adv=$advice;}
if ($diagnostico=="CLIMATERIO") {$diagnostico="N951";$adv=$advice;}
if ($diagnostico=="CRISIS DE AUSENCIA"||$diagnostico=="EPILEPSIA AUSENCIA") {$diagnostico="G411";$adv=$advice;}
if ($diagnostico=="ABORTO DIFERIDO") {$diagnostico="O039";$adv=$advice;}
if ($diagnostico=="PRUEBA DE VIH") {$diagnostico="Z114";$adv=$advice;}
if ($diagnostico=="TENDINOPATIA") {$diagnostico="M67";$adv=$advice;}
if ($diagnostico=="RETENCION URINARIA"||$diagnostico=="RETENCION AGUDA DE ORINA") {$diagnostico="R33X";$adv=$advice;}
if ($diagnostico=="LITIASIS URETER") {$diagnostico="N201";$adv=$advice;}
if ($diagnostico=="UROLITIASIS") {$diagnostico="N209";$adv=$advice;}
if ($diagnostico=="INFECCION GENITOURINARIA EMBARAZO") {$diagnostico="O23";$adv=$advice;}
if ($diagnostico=="ANGIOEDEMA") {$diagnostico="T783";$adv=$advice;}
if ($diagnostico=="ACIDOPEPTICA"||$diagnostico=="ENFERMEDAD ACIDOPEPTICA") {$diagnostico="K27";$adv=$advice;}
if ($diagnostico=="PAQUIGIRIA") {$diagnostico="Q043";$adv=$advice;}
if ($diagnostico=="FRACTURA DE AQUILES"||$diagnostico=="FRACTURA DEL TENDON DE AQUILES") {$diagnostico="S860";$adv=$advice;}
if ($diagnostico=="PUERPERIO FISIOLOGICO"||$diagnostico=="CONTROL PUERPERAL"
) {$diagnostico="Z392";$adv=$advice;}
if ($diagnostico=="ESTRES FETAL") {$diagnostico="SUFRIMIENTO FETAL";$adv=$advice;}
if ($diagnostico=="FRACTURA EXPUESTA DE PIERNA"||$diagnostico=="FRACTURA ABIERTA DE PIERNA")
 {$diagnostico="S82";$adv=$advice;}
if ($diagnostico=="FRACTURA DE TOBILLO"||$diagnostico=="FRACTURA DEL TOBILLO") {$diagnostico="FRACTURA MALEOLO";$adv=$advice;}
if ($diagnostico=="LACERACION DE CARA"||$diagnostico=="LACERACION EN CARA"||$diagnostico=="LACERACION CARA")
 {$diagnostico="S00";$adv=$advice;}
if ($diagnostico=="HERIDA DE CARA"||$diagnostico=="HERIDA EN CARA"||$diagnostico=="HERIDA CARA") {$diagnostico="S01";$adv=$advice;}
if ($diagnostico=="DOLOR ANAL") {$diagnostico="R102";$adv=$advice;}
if ($diagnostico=="POLIARTRITIS REUMATOIDEA AGUDA"||$diagnostico=="ARTRITIS REUMATOIDEA AGUDA") 
{$diagnostico="ARTRITIS REUMATOIDEA";$adv=$unrelated;}
if ($diagnostico=="TUMOR DE FEMUR") {$diagnostico="C402";$adv=$advice;}
if ($diagnostico=="SIBILANCIA"||$diagnostico=="SIBILANCIAS") {$diagnostico="R062";$adv=$advice;}
if ($diagnostico=="ONICOMICOSIS") {$diagnostico="B351";$adv=$advice;}
if ($diagnostico=="INTESTINO IRRITABLE"||$diagnostico=="SINDROME INTESTINO IRRITABLE"||
$diagnostico=="SINDROME DE INTESTINO IRRITABLE"||$diagnostico=="SINDROME DEL INTESTINO IRRITABLE")
 {$diagnostico="K58";$adv=$advice;}
if ($diagnostico=="OCLUSION DEL INTESTINO"||$diagnostico=="OCLUSION INTESTINAL") {$diagnostico="K56";$adv=$advice;}
if ($diagnostico=="TRAUMATISMO DE ROTULA"||$diagnostico=="TRAUMATISMO ROTULA")
 {$diagnostico="TRAUMATISMO RODILLA";$adv=$advice;}
 if ($diagnostico=="SACROILEITIS") {$diagnostico="SACROILIiTIS";$adv="";}
if ($diagnostico=="ATETOSIS") {$diagnostico="R258";$adv=$advice;}
if ($diagnostico=="CONDROBLASTOMA") {$diagnostico="D169";$adv=$advice;}
if ($diagnostico=="CONTROL NINO") {$diagnostico="Z001";$adv=$advice;}
if ($diagnostico=="DERMATOMICOSIS") {$diagnostico="B35";$adv=$advice;}
if ($diagnostico=="HIPERSENSIBILIDAD CUTANEA") {$diagnostico="L23";$adv=$advice;}
if ($diagnostico=="NEUMONIA NOSOCOMIAL"||$diagnostico=="NEUMONIA ADQUIRIDA EN LA COMUNIDAD") 
{$diagnostico="J1 NEUMONIA";$adv=$advice;}
if ($diagnostico=="HERIDA EN PIERNA") {$diagnostico="HERIDA DE PIERNA";$adv=$advice;}
if ($diagnostico=="QUEMADURA EN MANO") {$diagnostico="T23 QUEMA";$adv=$advice;}
if ($diagnostico=="PARO CARDIO RESPIRATORIO"||$diagnostico=="PARO CARDIORESPIRATORIO") {$diagnostico="I46";$adv=$advice;}
if ($diagnostico=="LEUCOPENIA") {$diagnostico="LEUCOCITO";$adv=$advice;}
if ($diagnostico=="HERIDA EN PIEL") {$diagnostico="HERIDA";$adv="Debe especificar sitio anatomico.  
Por definicion todas las heridas son el piel.";}
if ($diagnostico=="INFECCION EN PIEL"||$diagnostico=="INFECCION PIEL"||$diagnostico=="INFECCIONES EN PIEL") {$diagnostico="L0";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD MENINGOCOCCICA") {$diagnostico="MENINGO";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD TRASMITIDA POR ALIMENTOS") {$diagnostico="INTOX ALIMENT";$adv=$advice;}
if ($diagnostico=="SINDROME RESPIRATORIO AGUDO SEVERO"||$diagnostico=="SARS") {$diagnostico="U049";$adv=$advice;}
if ($diagnostico=="HANTAVIROSIS") {$diagnostico="HANTAVIRUS";$adv=$advice;}
if ($diagnostico=="DESPROPORCION FETO PELVICA"||$diagnostico=="DESPROPORCION CEFALOPELVICA"||
$diagnostico=="DESPROPORCION CEFALO PELVICA") {$diagnostico="O654";$adv=$advice;}
if ($diagnostico=="OFIDISMO"||$diagnostico=="ACCIDENTE OFIDICO"||$diagnostico=="MORDEDURA DE SERPIENTE"
||$diagnostico=="MORDEDURA DE CULEBRA") {$diagnostico="X20"; $adv=$advice;}
if ($diagnostico=="PICADURA DE ARANA"||$diagnostico=="ARANEISMO") {$diagnostico="ARANA";$adv=$advice;}
if ($diagnostico=="ARTRALGIA"||$diagnostico=="DOLOR ARTICULAR") {$diagnostico="M255"; $adv=$advice;}
if ($diagnostico=="RABIA ANIMAL"||$diagnostico=="RABIA HUMANA") {$diagnostico="RABIA";$adv=$advice;}
if ($diagnostico=="SIFILIS CONNATAL") {$diagnostico="SIFILIS CONGENITA";$adv=$advice;}
if ($diagnostico=="TUNEL DEL CARPO"||$diagnostico=="TUNEL CARPIANO"||$diagnostico=="SINDROME DE TUNEL DEL CARPO"
||$diagnostico=="SINDROME DEL TUNEL DEL CARPO") 
{$diagnostico="G560";$adv=$advice;}
if ($diagnostico=="BRUCELOSIS HUMANA") {$diagnostico="A23";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD DE CREUTZFELDT JAKOB") {$diagnostico="A81";$adv=$advice;}
if ($diagnostico=="CONTAMINACION PLOMO") {$diagnostico="T560";$adv=$advice;}
if ($diagnostico=="CONTAMINACION MERCURIO") {$diagnostico="T561";$adv=$advice;}
if ($diagnostico=="PLAGUICIDAS ORGANOFOSFORADOS ") {$diagnostico="T600";$adv=$advice;}
if ($diagnostico=="HEPATITIS B,C,Y OTRAS") {$diagnostico="HEPATITIS";$adv=$advice;}
if ($diagnostico=="HIDATIDOSIS") {$diagnostico="B67";$adv=$advice;}
if ($diagnostico=="PAPERA") {$diagnostico="PAROTIDITIS";$adv=$advice;}
if ($diagnostico=="TOS CONVULSA") {$diagnostico="A37";$adv=$advice;}
if ($diagnostico=="DERMAATROSIS LIPOIDE") {$diagnostico="C967";$adv=$advice;}
if ($diagnostico=="DERMOATROSIS") {$diagnostico="C967";$adv=$advice;}
if ($diagnostico=="DERMOARTROSIS LIPOIDE") {$diagnostico="C967";$adv=$advice;}
if ($diagnostico=="DERMOARTRIS LIPOIDE") {$diagnostico="C967";$adv=$advice;}
if ($diagnostico=="DERMOARTRITIS LIPOIDE") {$diagnostico="C967";$adv=$advice;}
if ($diagnostico=="ESTRIDOR LARINGEO CONGENITO") {$diagnostico="Q315";$adv=$advice;}
if ($diagnostico=="SINDROME AGUDO RESPIRATORIO SEVERO") {$diagnostico="U04";$adv=$advice;}
if ($diagnostico=="SUICIDIO") {$diagnostico="LESION AUTOINFLIGIDA";$adv=$advice;}
if ($diagnostico=="LEUCEMIA LINFATICA CRONICA") {$diagnostico="C911";$adv=$advice;}
if ($diagnostico=="ONICOCRIPTOSIS") {$diagnostico="L600";$adv=$advice;}
if ($diagnostico=="DEGENERACION MACULAR") {$diagnostico="H353"; $adv=$advice;}
if ($diagnostico=="ENVENENAMIENTO POR ESCORPION") {$diagnostico="T632";$adv=$advice;}
if ($diagnostico=="CERVICOVAGINITIS") {$diagnostico="VAGINITIS";$adv=$advice;}
if ($diagnostico=="DOLOR MUSCULAR") {$diagnostico="M791";$adv=$advice;}
if ($diagnostico=="ABCESO EN CARA") {$diagnostico="L020";$adv=$advice;}
if ($diagnostico=="ABSCESO ABDOMINAL") {$diagnostico="L022";$adv=$advice;}
if ($diagnostico=="AMENAZA DE PARTO PREMATURA"||$diagnostico=="AMENAZA DE PARTO PRETERMINO") {$diagnostico="O600";$adv=$advice;}
if ($diagnostico=="ASMA BRONQUIAL") {$diagnostico="J45";$adv=$advice;}
if ($diagnostico=="EXAMEN FISICO NORMAL"||$diagnostico=="ATENCION ADULTO SANO"||$diagnostico=="ADULTO SANO"
||$diagnostico=="ATENCION CONTROL DEL ADULTO"||$diagnostico=="EVALUACION MEDICA") {$one_c=2;$diagnostico="z000"; $diagnostico2="z008%";$adv=$advice;}
if ($diagnostico=="PARAPARESIA") {$diagnostico="PARAPLEJIA";$adv=$advice;}
if ($diagnostico=="RIESGO NUTRICIONAL") {$diagnostico="e46";$adv=$advice;}
if ($diagnostico=="PATA DE GANSO") {$diagnostico="M768";$adv=$advice;}
if ($diagnostico=="TENSIONAL") {$diagnostico="G442";$adv=$advice;}
if ($diagnostico=="SIN DIAGNOSTICONINFORMADO") {$diagnostico="Z711";$adv=$advice;}
if ($diagnostico=="HEMOPTOICO"||$diagnostico=="HEMOPTOICOS"||
$diagnostico=="ESPUTOS HEMOPTOICOS") {$diagnostico="R042";$adv=$advice;}
if ($diagnostico=="FRACTURA CADERA"||$diagnostico=="FRACTURA DE CADERA"
||$diagnostico=="FRACTURA DE LA CADERA") {$diagnostico="S324";$adv=$advice;}
if ($diagnostico=="TOS CRONI"||$diagnostico=="TOS CRONICA") {$diagnostico="R05X";$adv=$advice;}
if ($diagnostico=="MOTOCICLISTA LESIONADO POR COLICION CON VEHICULO") {$diagnostico="V239";$adv=$advice;}
if ($diagnostico=="BARTHOLINITIS") {$diagnostico="N75";$adv=$advice;}
if ($diagnostico=="CITOLOGIA") {$diagnostico="R876";$adv=$advice;}
if ($diagnostico=="COXIS") {$diagnostico="COXA";$adv=$advice;}
if ($diagnostico=="DISCROMATOPSIA"||$diagnostico=="DALTONISMO") {$diagnostico="H535";$adv=$advice;}
if ($diagnostico=="DISMINUCION AGUDEZA VISUAL"
    ||$diagnostico=="DISMINUCION DE AGUDEZA VISUAL"
    ||$diagnostico=="DISMINUCION DE LA AGUDEZA VISUAL"
    ||$diagnostico=="DISMINUCION LA AGUDEZA VISUAL") {$diagnostico="H52"; $adv=$advice;}
if ($diagnostico=="SINDROME OBSTRUCTIVO") {$diagnostico="W849";$adv=$advice;}
if ($diagnostico=="MENISCOPATIA") {$diagnostico="MENISCO";$adv=$advice;}
if ($diagnostico=="PARESIA") {$diagnostico="R268";$adv=$advice;}
if ($diagnostico=="SHOCK SEPTICO") {$diagnostico="R572";$adv=$advice;}
if ($diagnostico=="EPIGASTRALGIA") {$diagnostico="R101";$adv=$advice;}
if ($diagnostico=="COMUNICACION INTERVENTRICULAR") {$diagnostico="Q210";$adv=$advice;}
if ($diagnostico=="ESCARA"||$diagnostico=="ESCARAS") {$diagnostico="L89";$adv=$advice;}
if ($diagnostico=="FRACTURA DE CODO") {$one_c=2;$diagnostico="S424"; $diagnostico2="S520%";$adv=$advice;}
if ($diagnostico=="MANGUITO ROTADOR") {$diagnostico="MANGUITO ROTATORIO";$adv=$advice;}
if ($diagnostico=="MASTALGIA") {$diagnostico="N644";$adv=$advice;}
if ($diagnostico=="PERIOSTIO") {$diagnostico="M901";$adv=$advice;}
if ($diagnostico=="SALMONELOSIS") {$diagnostico="SALMONEL";$adv=$advice;}
if ($diagnostico=="CERVICITIS") {$diagnostico="N72";$adv=$advice;}
if ($diagnostico=="PROSTATISMO") {$diagnostico="N40";$adv=$advice;}
if ($diagnostico=="CEGUERA DE AMBOS OJOS") {$diagnostico="H540";$adv=$advice;}
if ($diagnostico=="COLECISTOLITIASIS"||$diagnostico=="LITIASIS BILIAR") {$diagnostico="CALCULO DE LA VESICULA BILIAR";$adv=$advice;}
if ($diagnostico=="LINFOMA LINFOPROLIFERATIVO") {$diagnostico="LINFOMA ";$adv=$advice;}
if ($diagnostico=="SINDROME DE WEST") {$diagnostico="G40";$adv=$advice;}
if ($diagnostico=="TUMORACION") {$diagnostico="TUMEFACCION";$adv=$advice;}
if ($diagnostico=="ARTERIOESCLEROTICA"||$diagnostico=="ARTERIOESCLEROSIS") {$diagnostico="ATEROS"; $adv=$advice;}
if ($diagnostico=="CRIPTORQUI") {$diagnostico="Q53"; $adv=$advice;}
if ($diagnostico=="CRIPTORQUIDIA") {$diagnostico="Q53";}
if ($diagnostico=="FISURA PALATINA") {$diagnostico="FISURA DEL PALADAR"; $adv=$advice;}
if ($diagnostico=="DISPLASIA CADERA") {$diagnostico="Q65"; $adv=$advice;}
if ($diagnostico=="HIPERCALEMIA"||$diagnostico=="HIPERKALEMIA") {$diagnostico="E875"; $adv=$advice;}
if ($diagnostico=="LABOR PARTO") {$diagnostico="TRABAJO DE PARTO"; $adv=$advice;}
if ($diagnostico=="HERNIA DISCAL") {$diagnostico="M512"; $adv=$advice;}
if ($diagnostico=="MENINGOCELE"||$diagnostico=="MIELOMENINGOCELE") {$diagnostico="Q068"; $adv=$advice;}
if ($diagnostico=="MIOMA UTERINO"||$diagnostico=="MIOMATOSIS UTERINA") {$diagnostico="D25"; $adv=$advice;}
if ($diagnostico=="DISTRES"||$diagnostico=="DISTRESS") {$diagnostico="DIFICULTAD RESPIRATORIA"; $adv=$advice;}
if ($diagnostico=="FASE LATENTE") {$diagnostico="O630"; $adv=$advice;}
if ($diagnostico=="LUMBOCIATALGIA"||$diagnostico=="LUMBOCIATICA") {$diagnostico="M544"; $adv=$advice;}
if ($diagnostico=="MAREOS") {$diagnostico="R42X"; $adv=$advice;}
if ($diagnostico=="OSTEOSARCOMA") {$diagnostico="C41"; $adv=$advice;}
if ($diagnostico=="INSUFICIENCIA VENOSA CRONICA") {$diagnostico="I872"; $adv=$advice;}
if ($diagnostico=="PIODERMITIS") {$diagnostico="PIODERMA"; $adv=$advice;}
if ($diagnostico=="ENDOMETRIAL") {$diagnostico="ENDOMETRIO"; $adv=$advice;}
if ($diagnostico=="FIBROADENOMA") {$diagnostico="D24"; $adv=$advice;}
if ($diagnostico=="POLICONTUSO") {$diagnostico="CONTUSION DE"; $adv=$advice;}
if ($diagnostico=="HEPATOPATIA") {$diagnostico="K7"; $adv=$advice;}
if ($diagnostico=="POLIGLOBULIA") {$diagnostico="POLICITEMIA"; $adv=$advice;}
if ($diagnostico=="RECTORRAGIA") {$diagnostico="K625"; $adv=$advice;}
if ($diagnostico=="SINOSITIS") {$diagnostico="SINUSITIS"; $adv=$advice;}
if ($diagnostico=="DISCOPATIA") {$diagnostico="DISCO INTERVERTEBRAL"; $adv=$advice;}
if ($diagnostico=="NEFROPATIA DIABETICA") {$diagnostico="DIABETES RENAL"; $adv=$advice;}
if ($diagnostico=="RETRASO MADURATIVO") {$diagnostico="F81"; $adv=$advice;}
if ($diagnostico=="SEPSIS NEONATAL") {$diagnostico="P36"; $adv=$advice;}
if ($diagnostico=="ARTRITIS SEPTICA") {$diagnostico="M00"; $adv=$advice;}


if ($diagnostico=="TUMOR MALIGNO INTESTINAL") {$diagnostico="TUMOR MALIGNO INTESTINO"; $adv=$advice;}
if ($diagnostico=="HIPERPLASIA PROSTATICA BENIGNA"||$diagnostico=="HIPERTROFIA PROSTATICA BENIGNA") {$diagnostico="N40X"; $adv=$advice;}
if ($diagnostico=="HERPES GENITAL") {$diagnostico="A60"; $adv=$advice;}
if ($diagnostico=="HIPERPLASIA ENDOMETRIAL") {$diagnostico="N850"; $adv=$advice;}
if ($diagnostico=="HIPERTROFIA PROSTATICA BENIGNA") {$diagnostico="N40X"; $adv=$advice;}
if ($diagnostico=="LITIASIS VESICULAR") {$diagnostico="CALCULO DE LA VESICULA BILIAR"; $adv=$advice;}
if ($diagnostico=="LUNAR") {$diagnostico="NEVO"; $adv=$advice;}
if ($diagnostico=="MARCAPASOS") {$diagnostico="Z950"; $adv=$advice;}
if ($diagnostico=="MORDEDURA CAN") {$diagnostico="MORDEDURA PERRO"; $adv=$advice;}
if ($diagnostico=="MUELA") {$diagnostico="K DIENTES"; $adv=$advice;}
if ($diagnostico=="NEUROCISTICERCOSIS") {$diagnostico="B690"; $adv=$advice;}
if ($diagnostico=="OXIURIASIS") {$diagnostico="B80X"; $adv=$advice;}
if ($diagnostico=="PANALITIS") {$diagnostico="L22X"; $adv=$advice;}
if ($diagnostico=="REANIMACION") {$diagnostico="I46"; $adv=$advice;}
if ($diagnostico=="SINDROME CONVULSIVO") {$diagnostico="CONVULSIONES"; $adv=$advice;}
if ($diagnostico=="TRANSGRESION") {$diagnostico="AGRESION"; $adv=$advice;}
if ($diagnostico=="UNERO") {$diagnostico="L600"; $adv=$advice;}
if ($diagnostico=="X990") {$diagnostico="X99"; $adv=$advice;}
if ($diagnostico=="ALALIA"||$diagnostico=="DISLALIA") {$diagnostico="R47"; $adv=$advice;}
if ($diagnostico=="ARTROSIS CADERA") {$diagnostico="M16"; $adv=$advice;}
if ($diagnostico=="CEREBELOSO") {$diagnostico="CEREBEL"; $adv=$advice;}
if ($diagnostico=="CONTUSIONES") {$diagnostico="CONTUSION"; $adv=$advice;}
if ($diagnostico=="CONVULSIVO") {$diagnostico="CONVULSION"; $adv=$advice;}
if ($diagnostico=="CRANEO ENCEFALICO"||$diagnostico=="ENCEFALOCRANEAL") {$diagnostico="INTRACRANEAL"; $adv=$advice;}
if ($diagnostico=="CRISIS CONVULSIVAS") {$diagnostico="CONVULSIONES"; $adv=$advice;}
if ($diagnostico=="DANO HEPATICO") {$diagnostico="K HEPATIC"; $adv=$advice;}
if ($diagnostico=="DELIRIUM") {$diagnostico="DELIR"; $adv=$advice;}
if ($diagnostico=="EMPIEMA") {$diagnostico="PIOTORAX"; $adv=$advice;}
if ($diagnostico=="ESTEATOSIS HEPATICA") {$diagnostico="K760"; $adv=$advice;}
if ($diagnostico=="ETILICA") {$diagnostico="T510"; $adv=$advice;}
if ($diagnostico=="GALACTOSEMIA") {$diagnostico="E742"; $adv=$advice;}
if ($diagnostico=="HERNIA EPIGASTRICA") {$diagnostico="K43"; $adv=$advice;}
if ($diagnostico=="HIPERTRIGLICERIDEMIA") {$diagnostico="E781"; $adv=$advice;}
if ($diagnostico=="HOFFA") {$diagnostico="E888"; $adv=$advice;}
if ($diagnostico=="METATARSIANO") {$diagnostico="METATARS"; $adv=$advice;}
if ($diagnostico=="TRAUMA RAQUIMEDULAR"||$diagnostico=="LESION MEDULAR") {$diagnostico="TRAUMATISMO MEDULA ESPINAL"; $adv=$advice;}
if ($diagnostico=="ABSCESO TORAX") {$diagnostico="L022"; $adv=$advice;}
if ($diagnostico=="ANGUSTIA") {$diagnostico="F418"; $adv=$advice;}
if ($diagnostico=="ARDOR") {$diagnostico="R529"; $adv=$advice;}
if ($diagnostico=="BARTOLINITIS") {$diagnostico="N75"; $adv=$advice;}
if ($diagnostico=="COGNITIVO") {$diagnostico="COGNOSC"; $adv=$advice;}
if ($diagnostico=="CONTUSION CARA") {$diagnostico="S00"; $adv=$advice;}
if ($diagnostico=="CRISIS ANSIEDAD") {$diagnostico="F410"; $adv=$advice;}
if ($diagnostico=="DIARREA VIRAL") {$diagnostico="A08"; $adv=$advice;}
if ($diagnostico=="DOLOR CABEZA") {$diagnostico="CEFALEA"; $adv=$advice;}
if ($diagnostico=="INFECCION RESPIRATORIA AGUDA") {$diagnostico="INFECCION AGUDA RESPIRATORIA"; $adv=$advice;}
if ($diagnostico=="MEDULOBLASTOMA") {$diagnostico="C716"; $adv=$advice;}
if ($diagnostico=="MIALGIAS") {$diagnostico="M791"; $adv=$advice;}
if ($diagnostico=="NAUSEAS") {$diagnostico="NAUSEA"; $adv=$advice;}
if ($diagnostico=="QUEMADURA PIERNA") {$diagnostico="T24 QUEMADURA"; $adv=$advice;}
if ($diagnostico=="TRAUMATISMO SIN DETERMINAR") {$diagnostico="TRAUMATISMO NO ESPECIFICADO"; $adv=$advice;}
if ($diagnostico=="GINECOMASTIA") {$diagnostico="N62"; $adv=$advice;}
if ($diagnostico=="CESAREA ANTERIOR") {$diagnostico="O757"; $adv=$advice;}


// 
//COPY AND PASTE FOLLOWING CODE   
//if ($diagnostico=="COLOCAR ACA EL DX") {$diagnostico="COLOCAR ACA CONVERSION";$adv=$advice;}
//


//TWO CRITERIA SEARCH with unrelated words
$unrelated="EL TERMINO BUSCADO HACE REFERENCIA A PALABRA QUE NO EXISTE INDIVIDUALMENTE EL EL CIE10.
  INTERNAMENTE SE HIZO UNA CONVERSION A DOS O MAS TERMINOS A QUE PUEDE ESTAR HACIENDO REFERENCIA SU BUSQUEDA";
if ($diagnostico=="COLECISTOPANCREATITIS") {$one_c=2;$diagnostico="PANCREATITIS"; $diagnostico2="%COLECISTITIS%";
$adv=$unrelated;}
if ($diagnostico=="CELULITIS DE MAMA") {$one_c=2;$diagnostico="L038"; $diagnostico2="N61%";$adv=$unrelated;}
if ($diagnostico=="QUEMADURA POR CORRIENTE ELECTRICA") {$one_c=2;$diagnostico="T% QUEMADURA TERCER";
 $diagnostico2="%T754%";$adv=$unrelated;}
if ($diagnostico=="CHOQUE POR CORRIENTE ELECTRICA") {$one_c=2;$diagnostico="T754"; $diagnostico2="%R578%";$adv=$unrelated;}
if ($diagnostico=="POSTOPERATORIO") {$one_c=2;$diagnostico="POSTOPERAT"; $diagnostico2="%POSTQUIRURG%";$adv=$unrelated;}
if ($diagnostico=="GONALGIA") {$one_c=2;$diagnostico="M238"; $diagnostico2="M255%";$adv=$unrelated;}
if ($diagnostico=="FRACTURA DE TIBIA Y PERONE") {$one_c=2;$diagnostico="FRACTURA TIBIA";
 $diagnostico2="%FRACTURA %MALEOLO%";$adv=$unrelated;}
if ($diagnostico=="REUMATISMO CON POLIARTRITIS") {$one_c=2;$diagnostico="M130"; $diagnostico2="%REUMATISMO%";$adv=$unrelated;}
 if ($diagnostico=="AEROESPACIAL") {$one_c=2;$diagnostico="AERONAVE"; $diagnostico2="V954%";$adv=$unrelated;}
if ($diagnostico=="COREOATETOSIS") {$one_c=2;$diagnostico="G255"; $diagnostico2="R258%";$adv=$unrelated;}
if ($diagnostico=="DOLOR RODILLA") {$one_c=2; $diagnostico="M239"; $diagnostico2="M255%";$adv=$unrelated;}
if ($diagnostico=="CELULITIS PIERNA") {$one_c=2; $diagnostico="L031"; $diagnostico2="R224%";$adv=$unrelated;}
if ($diagnostico=="ESPONDILOARTROSIS") {$one_c=2;$diagnostico="M488"; $diagnostico2="M198%"; $adv=$unrelated;}
if ($diagnostico=="HEMANGIOMA HEPATICO"||$diagnostico=="ANGIOMA HEPATICO"||$diagnostico=="ANGIOMA DE HIGADO"
||$diagnostico=="HEMANGIOMA DE HIGADO") 
{$one_c=2;$diagnostico="D180"; $diagnostico2="D134%";$adv=$unrelated;}
if ($diagnostico=="CONTROL RECIEN NACIDO"||$diagnostico=="CONTROL SALUD RECIEN NACIDO") 
{$one_c=2;$diagnostico="Z37"; $diagnostico2="Z001%";$adv=$unrelated;}
if ($diagnostico=="GONALGIA") {$one_c=2;$diagnostico="M238"; $diagnostico2="M255%";$adv=$unrelated;}
if ($diagnostico=="COLICO VESICULAR"||$diagnostico=="COLICO BILIAR") {$one_c=2;$diagnostico="R101"; $diagnostico2="K839%";$adv=$unrelated;}
if ($diagnostico=="FATIGA CRONICA"||$diagnostico=="SINDROME FATIGA CRONICA"||$diagnostico=="SINDROME DE FATIGA CRONICA"
||$diagnostico=="FATIGA GENERAL"
) {$one_c=2;$diagnostico="G933"; $diagnostico2="R53%";$adv=$advice;}
if ($diagnostico=="DEMENCIA SENIL") {$one_c=2;$diagnostico="F03X"; $diagnostico2="G311%";$adv=$unrelated;}

if ($diagnostico=="ASMA") {$one_c=2;$diagnostico="J45"; $diagnostico2="J46%";$adv=$advice;}
if ($diagnostico=="RODILLAS") {$one_c=2;$diagnostico="RODILLA"; $diagnostico2="ROTULA%";$adv=$advice;}
if ($diagnostico=="OSTEOARTRITIS") {$one_c=2;$diagnostico="(OSTEO)ARTROSIS"; $diagnostico2="M159%";$adv=$unrelated;}
if ($diagnostico=="CIATALGIA") 
{$one_c=2;$diagnostico="M543"; $diagnostico2="M544%";$adv=$unrelated;}
if ($diagnostico=="SEROMA") {$one_c=2;$diagnostico="L989"; $diagnostico2="M799%";$adv=$unrelated;}
if ($diagnostico=="SINDROME FEBRIL") {$one_c=2;$diagnostico="R508"; $diagnostico2="R509%";$adv=$advice;}
if ($diagnostico=="INSUFICIENCIA RENAL CRONICA"||$diagnostico=="FALLA RENAL CRONICA") 


{$one_c=2;$diagnostico="N18"; $diagnostico2="N19%";$adv=$unrelated;}
if ($diagnostico=="TRAQUEOBRONQUITIS") {$one_c=2;$diagnostico="J041"; $diagnostico2="J209%"; $adv=$unrelated;}


if ($diagnostico=="FRACTURA EXPUESTA"||$diagnostico=="FRACTURA ABIERTA") 
{$diagnostico="z583";$adv="BUSCAR <b>POR SITIO ANATOMICO </b>EL CODIGO DE FRACTURA Y ADICIONAR CODIGO DESCRITO";}


//TWO CRITERIA SEARCH with related words 
if ($diagnostico=="INMADURO") {$one_c=2;$diagnostico="P072"; $diagnostico2="P073%";$adv=$advice;}
if ($diagnostico=="RASH"||$diagnostico=="RASH CUTANEO"||$diagnostico=="BROTE EN PIEL"||$diagnostico=="BROTE") 
{$one_c=2;$diagnostico="L27"; $diagnostico2="R21%";$adv=$advice;}
if ($diagnostico=="COR PULMONALE") {$one_c=2;$diagnostico="I260"; 
$diagnostico2="% HIPERTENSION% PULMONAR%";$adv=$advice;}
if ($diagnostico=="CLAUDICACION") {$one_c=2;$diagnostico="I738"; $diagnostico2="I739%";$adv=$advice;}
if ($diagnostico=="INFECCION DE SITIO QUIRURGICO"
||$diagnostico=="INFECCION DE HERIDAS"
||$diagnostico=="INFECCION DE HERIDAS EN EL SITIO QUIRURGICO"
||$diagnostico=="HERIDA INFECTADA"
||$diagnostico=="INFECCION OPERATORIA"
||$diagnostico=="INFECCION CIRUGIA") 
{$one_c=2;$diagnostico="L088"; $diagnostico2="T793%";$adv=$advice;}
if ($diagnostico=="PETEQUIA"
||$diagnostico=="PETEQUIAS") {$one_c=2;$diagnostico="R233"; $diagnostico2="R238%";$adv=$advice;}
if ($diagnostico=="EXCORIACION"||$diagnostico=="EXCORIACIONES") {$one_c=2;$diagnostico="L981"; $diagnostico2="T140%";$adv=$advice;}
if ($diagnostico=="OJO SECO") {$one_c=2;$diagnostico="H193"; $diagnostico2="M350%";$adv=$advice;}
if ($diagnostico=="PIE DIABETICO") {$one_c=2;$diagnostico="E105%"; $diagnostico2="G590%";$adv=$advice;}
if ($diagnostico=="CARDIOMIOPATIA ARRITMOGENICA") {$one_c=2;$diagnostico="I428"; $diagnostico2="% ARRITM%";$adv=$advice;}
if ($diagnostico=="DUELO") {$one_c=2;$diagnostico="R457"; $diagnostico2="R458%";$adv=$advice;}
if ($diagnostico=="TUMOR GERMINAL") {$one_c=2;$diagnostico="TUMOR OVARIO"; $diagnostico2="%TUMOR %TESTICULO%";$adv=$advice;}
if ($diagnostico=="POLITRAUMATIZADO"||$diagnostico=="POLITRAUMATISMO"||$diagnostico=="POLITRAUMA") 
{$one_c=2;$diagnostico="T068"; $diagnostico2="T07X%";$adv=$advice;}
if ($diagnostico=="RADIO DISTAL") {$one_c=2;$diagnostico="S525"; $diagnostico2="S526%";$adv=$advice;}
if ($diagnostico=="INFECCION UTERINA") {$one_c=2;$diagnostico="O411"; $diagnostico2="P027%";$adv=$advice;}
if ($diagnostico=="TUMOR EN PIEL"||$diagnostico=="CANCER DE PIEL"||$diagnostico=="CARCINOMA EPIDERMOIDE"||
$diagnostico=="CáNCER DE PIEL"||$diagnostico=="EPITELIOMA"||$diagnostico=="CARCINOMA BASOCELULAR") 
{$one_c=2;$diagnostico="TUMOR MALIGNO DE LA PIEL"; $diagnostico2="%CARCINOMA% PIEL%";$adv=$advice;}
if ($diagnostico=="VULVOVAGINITIS") {$one_c=2;$diagnostico="N76"; $diagnostico2="B373%";$adv=$advice;}
if ($diagnostico=="HIPERMENORREA"||$diagnostico=="MENORRAGIA") 
  {$one_c=2;$diagnostico="N920"; $diagnostico2="N938%"; $adv=$advice;}
if ($diagnostico=="FRACTURA SUPRACONDILEA") {$one_c=2;$diagnostico="S424"; $diagnostico2="S724%";$adv=$advice;}
if ($diagnostico=="MASTOPATIA FIBROQUISTICA") {$one_c=2;$diagnostico="N601"; $diagnostico2="N602%";$adv=$advice;}
if ($diagnostico=="INFECCION PUERPERAL") {$one_c=2;$diagnostico="O85X"; $diagnostico2="O86%";$adv=$advice;}
if ($diagnostico=="OBITO"||$diagnostico=="OBITO FETAL"
) {$one_c=2;$diagnostico="MUERTE INTRAUTERINA"; $diagnostico2="%MUERTE FETAL%";$adv=$advice;}
if ($diagnostico=="CISTOADENOMA DE OVARIO") {$one_c=2;$diagnostico="D27X"; $diagnostico2="D391%";$adv=$advice;}
if ($diagnostico=="TRAUMA DENTAL") {$one_c=2;$diagnostico="S008";$diagnostico2="S005%";$adv=$advice;}
if ($diagnostico=="HEMORRAGIA ARTERIA CAROTIDA") {$one_c=2;$diagnostico="I772"; $diagnostico2="S150%";
$adv=$advice;}
if ($diagnostico=="CALCULO RENAL"||$diagnostico=="LITIASIS RENAL") 
{$one_c=2;$diagnostico="N200"; $diagnostico2="N202%";$adv=$advice;}
if ($diagnostico=="TAKOTSUBO"||$diagnostico=="SINDROME TAKOTSUBO"||$diagnostico=="SINDROME DE TAKOTSUBO"
||$diagnostico=="ENFERMEDAD DE TAKOTSUBO"||$diagnostico=="CARDIOPATIA DE TAKOTSUBO"||
$diagnostico=="MIOCARDIOPATIA DE TAKOTSUBO"||
$diagnostico=="TAKO-TSUBO"||$diagnostico=="SINDROME TAKO-TSUBO"||$diagnostico=="SINDROME DE TAKO-TSUBO"
||$diagnostico=="ENFERMEDAD DE TAKO-TSUBO"||$diagnostico=="CARDIOPATIA DE TAKO-TSUBO"||
$diagnostico=="MIOCARDIOPATIA DE TAKO-TSUBO"
) {$one_c=2;$diagnostico="I428";$diagnostico2="I429%";$adv=$advice;}
if ($diagnostico=="CONTROL DEL NINO SANO"||$diagnostico=="CONTROL NINO SANO"||$diagnostico=="ATENCION DEL NINO SANO"
) {$one_c=2;$diagnostico="Z001";$diagnostico2="Z762%";$adv=$advice;}
if ($diagnostico=="FUMADOR") {$one_c=2;$diagnostico="F171"; $diagnostico2="Z587%";$adv=$advice;}
if ($diagnostico=="GERMINOMA") {$one_c=2;$diagnostico="C629"; $diagnostico2="C56%";$adv=$advice;}
if ($diagnostico=="HIPERTENSION ENDOCRANEANA"||
$diagnostico=="HIPERTENSION INTRACRANEANA") {$one_c=2;$diagnostico="G932"; $diagnostico2="G938%";$adv=$advice;}
if ($diagnostico=="TUMOR DE COLON DERECHO") {$one_c=2;$diagnostico="C182"; $diagnostico2="D122%";$adv=$advice;}
if ($diagnostico=="NODULO MAMARIO"||$diagnostico=="NODULO DE MAMA"
||$diagnostico=="NODULO EN MAMA") {$one_c=2;$diagnostico="N600";$diagnostico2="D24%";$adv=$advice;}
if ($diagnostico=="GASTROENTEROCOLITIS") {$one_c=2;$diagnostico="A09"; $diagnostico2="K52%";$adv=$advice;}
if ($diagnostico=="EDEMA VULVAR") {$one_c=2;$diagnostico="N768"; $diagnostico2="%DE LA VULVA Y DEL PERINEO%";$adv=$advice;}
if ($diagnostico=="MACROSOMIA"||$diagnostico=="MACROSOMIA FETAL")
 {$one_c=2;$diagnostico="P080"; $diagnostico2="P081%";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD DIARREICA AGUDA"||$diagnostico=="ENFERMEDAD DIARREICA"||$diagnostico=="DIARREA AGUDA"
||$diagnostico=="GASTROENTERITIS AGUDA") 
 {$one_c=2;$diagnostico="INFECCION INTESTIN"; $diagnostico2="%ENTERITIS%";$adv=$advice;}
if ($diagnostico=="ANEURISMA ARTERIA PANCREATICO DUODENAL") {$one_c=2;$diagnostico="I728";
 $diagnostico2="%I778%";$adv=$advice;}
if ($diagnostico=="DISTOCIA DE PRESENTACION") {$one_c=2;$diagnostico="O64"; $diagnostico2="%PRESENTACION%";$adv=$advice;}
if ($diagnostico=="DISLIPIDEMIA") {$one_c=2;$diagnostico="E782"; $diagnostico2="E784%";$adv=$advice;}
if ($diagnostico=="LINFOCITOSIS") 
{$one_c=2;$diagnostico="D758"; $diagnostico2="D759%";$adv=$advice;}
if ($diagnostico=="INTOXICACIONES AGUDAS"||$diagnostico=="INTOXICACION AGUDA") 
{$one_c=2;$diagnostico="ENVENENAMIENTO"; $diagnostico2="%INTOXICACION %AGUDA%";$adv=$advice;}
if ($diagnostico=="EXPOSICION A CONTAMINANTES AMBIENTALES") {$one_c=2;$diagnostico="Y97X"; $diagnostico2="Z585%";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD TRASMISION SEXUAL") {$one_c=2;$diagnostico="A638"; $diagnostico2="A64X%";$adv=$advice;}
if ($diagnostico=="CONSULTA MEDICA DE PRIMERA VEZ") {$one_c=2;$diagnostico="z718"; $diagnostico2="z719%";$adv=$advice;}
if ($diagnostico=="HEMIPARESIA") {$one_c=2;$diagnostico="G549"; $diagnostico2="HEMIPLEJIA%";$adv=$advice;}
if ($diagnostico=="LIGAMENTO CRUZADO") {$one_c=2;$diagnostico="S835"; $diagnostico2="M236%";$adv=$advice;}
if ($diagnostico=="HEMOFILIA") {$one_c=2;$diagnostico="DEFICIENCIA HEREDITARIA DEL FACTOR"; $diagnostico2="D682%";$adv=$advice;}
if ($diagnostico=="ULCERA VENOSA") {$one_c=2;$diagnostico="I830"; $diagnostico2="I832%";$adv=$advice;}
if ($diagnostico=="LIPOTIMIA")     {$one_c=2;$diagnostico="R42";  $diagnostico2="R55%";$adv=$advice;}
if ($diagnostico=="DEFECTO CRANEAL") {$one_c=2;$diagnostico="Q75"; $diagnostico2="Q674%"; $adv=$advice;}
if ($diagnostico=="BACTEREMIA") {$one_c=2;$diagnostico="A40"; $diagnostico2="A41%"; $adv=$advice;}
if ($diagnostico=="CARDIOMIOPATIA CHAGASICA") {$one_c=2;$diagnostico="B570"; $diagnostico2="B572%"; $adv=$advice;}
if ($diagnostico=="HERIDA ANO"||$diagnostico=="HERIDA GLUTEO") 
  {$one_c=2;$diagnostico="S310"; $diagnostico2="S317%"; $adv=$advice;}
if ($diagnostico=="ENFERMEDAD PELVICA INFLAMATORIA") 
{$one_c=2;$diagnostico="ENFERMEDAD INFLAMATORIA PELVICA"; $diagnostico2="SALPINGITIS Y OOFORITIS%"; $adv=$advice;}
if ($diagnostico=="FRACTURA TOBILLO") {$one_c=2;$diagnostico="FRACTURA DEL MALEOLO"; $diagnostico2="S823%"; $adv=$advice;}
if ($diagnostico=="QUISTE SEBACEO") {$one_c=2;$diagnostico="L720"; $diagnostico2="L728%"; $adv=$advice;}
if ($diagnostico=="PLANIFICACION"
  ||$diagnostico=="PLANIFICACION FAMILIAR"
  ||$diagnostico=="PF") {$one_c=2;$diagnostico="Z300"; $diagnostico2="Z304%"; $adv=$advice;}
if ($diagnostico=="TERATOMA") {$one_c=2;$diagnostico="D289"; $diagnostico2="D299%"; $adv=$advice;}
if ($diagnostico=="ESPASTICIDAD") {$one_c=2;$diagnostico="JIA ESPASTICA"; $diagnostico2="BRAL ESPASTICA%"; $adv=$advice;}
if ($diagnostico=="SINDROME DEPRESIVO") {$one_c=2;$diagnostico="F32"; $diagnostico2="F33%"; $adv=$advice;}
if ($diagnostico=="ANGINA VIRAL") {$one_c=2;$diagnostico="J029"; $diagnostico2="J039%"; $adv=$advice;}
if ($diagnostico=="AGUDEZA VISUAL") {$one_c=2;$diagnostico="H526"; $diagnostico2="H527%"; $adv=$advice;}
if ($diagnostico=="ARTRITIS PSORIASICA") {$one_c=2;$diagnostico="L405"; $diagnostico2="M138%"; $adv=$advice;}
if ($diagnostico=="ARTROSIS COLUMNA") {$one_c=2;$diagnostico="M198"; $diagnostico2="M538%"; $adv=$advice;}
if ($diagnostico=="ARTROSIS RODILLA") {$one_c=2;$diagnostico="M198"; $diagnostico2="M238%"; $adv=$advice;}
if ($diagnostico=="DUCTUS") {$one_c=2;$diagnostico="Q250"; $diagnostico2="Q273%"; $adv=$advice;}
if ($diagnostico=="MEMORIA") {$one_c=2;$diagnostico="F067"; $diagnostico2="AMNESIA%"; $adv=$advice;}
if ($diagnostico=="HERIDA CORTANTE") {$one_c=2;$diagnostico="HERIDA "; $diagnostico2="HERIDAS %"; $adv=$advice;}
if ($diagnostico=="HOMBRO DOLOROSO") {$one_c=2;$diagnostico="M75"; $diagnostico2="M255%"; $adv=$advice;}
if ($diagnostico=="PARIDAD SATISFECHA") {$one_c=2;$diagnostico="Z300"; $diagnostico2="Z309%"; $adv=$advice;}
if ($diagnostico=="DOLOR TORAX"||$diagnostico=="DOLOR TORACICO") 
	{$one_c=2;$diagnostico="R072"; $diagnostico2="DOLOR% PECHO%"; $adv=$advice;}

if ($diagnostico=="EMBARAZO A TERMINO") {$one_c=2;$diagnostico="Z321"; $diagnostico2="Z349%"; $adv=$advice;}
if ($diagnostico=="HERNIA INCISIONAL") {$one_c=2;$diagnostico="K43"; $diagnostico2="K46%"; $adv=$advice;}
if ($diagnostico=="HERNIACION") {$one_c=2;$diagnostico="M51"; $diagnostico2="HERNIA%"; $adv=$advice;}
if ($diagnostico=="TALLA BAJA") {$one_c=2;$diagnostico="E343"; $diagnostico2="P05%"; $adv=$advice;}
if ($diagnostico=="VARICE TABIQUE") {$one_c=2;$diagnostico="I868"; $diagnostico2="R040%"; $adv=$advice;}
if ($diagnostico=="VHC") {$one_c=2;$diagnostico="B171"; $diagnostico2="B182%"; $adv=$advice;}
if ($diagnostico=="ASTROCITOMA") {$one_c=2;$diagnostico="C719"; $diagnostico2="D432%"; $adv=$advice;}
if ($diagnostico=="COLICO ABDOMINAL") {$one_c=2;$diagnostico="R103"; $diagnostico2="R104%"; $adv=$advice;}
if ($diagnostico=="COQUELUCHE") {$one_c=2;$diagnostico="A37"; $diagnostico2="R05X%"; $adv=$advice;}
if ($diagnostico=="ESTEATOSIS") {$one_c=2;$diagnostico="K760"; $diagnostico2="K700%"; $adv=$advice;}
if ($diagnostico=="FRACTURA COSTAL") {$one_c=2;$diagnostico="S223"; $diagnostico2="S224%"; $adv=$advice;}
if ($diagnostico=="GLENOHUMERAL") {$one_c=2;$diagnostico="M75 HOMBRO"; $diagnostico2="S42 HOMBRO%"; $adv=$advice;}
if ($diagnostico=="HEMORRAGIA DIGESTIVA BAJA") {$one_c=2;$diagnostico="K625"; $diagnostico2="K922%"; $adv=$advice;}
if ($diagnostico=="ADENOIDITIS") {$one_c=2;$diagnostico="J358"; $diagnostico2="J359%"; $adv=$advice;}
if ($diagnostico=="BRONCOGENICO") {$one_c=2;$diagnostico="C34"; $diagnostico2="C780%"; $adv=$advice;}
if ($diagnostico=="DEPRESION MAYOR") {$one_c=2;$diagnostico="F322"; $diagnostico2="F323%"; $adv=$advice;}
if ($diagnostico=="ODONTALGIA"||$diagnostico=="DOLOR DENTAL") {$one_c=2;$diagnostico="K088"; $diagnostico2="R520%"; $adv=$advice;}
if ($diagnostico=="VULVO VAGINITIS") {$one_c=2;$diagnostico="B373"; $diagnostico2="N76%"; $adv=$advice;}


//if ($diagnostico=="something	") {$one_c=2;$diagnostico="change1"; $diagnostico2="%change 2%";$adv=$advice;}


//THREE CRITERIA SEARCH
//if ($diagnostico==" ") {$one_c=3;$diagnostico="ONE"; $diagnostico2="% TWO%"; $diagnostico3="% THREE%"; $adv=$advice;}
$advice3="La palabra o frase buscada no tiene coincidencia exacta en los c&oacutedigos CIE10; Internamente se ha hecho una 
homologacion que puede incluir mas de un diagnostico para la condicion buscada";
if ($diagnostico=="MIELOSUPRESION") {$one_c=3;
	$diagnostico="%D611%"; $diagnostico2="%D70X%"; $diagnostico3="%D695%"; $adv=$advice3;}
if ($diagnostico=="OBSTRUCCION DIGESTIVA") {$one_c=3;
	$diagnostico="%OBSTRUCCION% INTESTINAL%"; $diagnostico2="%K222%"; $diagnostico3="%K315%"; $adv=$advice;}
if ($diagnostico=="PIELONEFRITIS AGUDA") {$one_c=3;
	$diagnostico="N12X"; $diagnostico2="%N158%"; $diagnostico3="%N390%"; $adv=$advice;}
if ($diagnostico=="AMPUTACION EN AREA HIPOTENAR") {$one_c=3;
	$diagnostico="S683"; $diagnostico2="S684%"; $diagnostico3="S688%"; $adv=$advice;}
if ($diagnostico=="AMPUTACION EN PIE") {$one_c=3;$diagnostico="S98"; $diagnostico2="T053%";$diagnostico3="T054%";$adv=$advice;}
if ($diagnostico=="QUISTE ANEXIAL") {$one_c=3;$diagnostico="N830"; $diagnostico2="N831%";$diagnostico3="N832%";$adv=$advice;}
if ($diagnostico=="ESTADO DEL EMBARAZO") {$one_c=3;$diagnostico="O30"; $diagnostico2="Z32%";$diagnostico3="Z33%";$adv=$advice;}
if ($diagnostico=="PERFORACION ARTERIAL") {$one_c=3;$diagnostico="I772"; $diagnostico2="%TRAUMATISMO % 
ARTERIA%";$diagnostico3="%TRAUMATISMO% VASO% SANGUINEO%";$adv=$advice;}
if ($diagnostico=="HEMATOMA NUCLEO CAUDADO"||$diagnostico=="HEMORRAGIA NUCLEO CAUDADO") 
{$one_c=3;$diagnostico="I618"; $diagnostico2="I619%";$diagnostico3="I691%";$adv=$advice;}
if ($diagnostico=="INFLAMACION DEL TOBILLO"||$diagnostico=="BURSITIS DEL TOBILLO"||$diagnostico=="ARTRITIS DEL TOBILLO"
) {$one_c=3;$diagnostico="M715"; $diagnostico2="M131%";$diagnostico3="M138%";$adv=$advice;}
if ($diagnostico=="DISGENESIA CEREBRAL") {$one_c=3;$diagnostico="Q043"; $diagnostico2="Q048%";$diagnostico3="Q049%";$adv=$advice;}
if ($diagnostico=="INSUFICIENCIA ARTERIAL") 
{$one_c=3;$diagnostico="I771"; $diagnostico2="I738%";$diagnostico3="I739%";$adv=$advice;}
if ($diagnostico=="DOLOR TORACICO"||$diagnostico=="DOLOR TORAXICO"||$diagnostico=="DOLOR RETROESTERNAL"
||$diagnostico=="DOLOR ESTERNAL"||$diagnostico=="DOLOR HEMITORAX") 
{$one_c=3;$diagnostico="R072"; $diagnostico2="R073%";$diagnostico3="R074%";$adv=$advice;}
if ($diagnostico=="POLISEROSITIS") {$one_c=3;$diagnostico="I308"; $diagnostico2="R091%";$diagnostico3="K658%";$adv=$unrelated;}
if ($diagnostico=="FRACTURA DE RODILLA") 
{$one_c=3;$diagnostico="S724"; $diagnostico2="S820%";$diagnostico3="S821%";$adv=$unrelated;}
if ($diagnostico=="REACCION DE HIPERSENSIBILIDAD"||$diagnostico=="REACCION ALERGICA") 
{$one_c=3;$diagnostico="ANAFILA"; $diagnostico2="T783%";$diagnostico3="T784%";$adv=$advice;}
if ($diagnostico=="ENFERMEDAD ERUPTIVA FEBRIL") 
{$one_c=3;$diagnostico="CARACTERIZ. POR LESIONES DE PIEL Y MUCOSAS"; $diagnostico2="B082%";$diagnostico3="B083%";$adv=$advice;}
if ($diagnostico=="PARALISIS FLACIDA"||$diagnostico=="PARALISIS FLACIDA AGUDA"||$diagnostico=="PARALISIS 
FLACCIDA"||$diagnostico=="PARALISIS FLACCIDA AGUDA"||$diagnostico=="PARALISIS FLàCIDA AGUDA") 
{$one_c=3;$diagnostico="G810"; $diagnostico2="G820%";$diagnostico3="G823%";$adv=$advice;}
if ($diagnostico=="ESTRIDOR LARINGEO") {$one_c=3;$diagnostico="%J042%"; $diagnostico2="%J371%"; $diagnostico3="%Q315%"; $adv=$advice;}
if ($diagnostico=="SEROSITIS") {$one_c=3;$diagnostico="%R091%"; $diagnostico2="%I30%"; $diagnostico3="%K658%"; $adv=$advice;}
if ($diagnostico=="DIABETES MELLITUS DESCOMPENSADA") {$one_c=3;$diagnostico="%DIABETES% MELLITUS% CON% COMA%"; 
$diagnostico2="%DIABETES% MELLITUS% CON% CETOACIDOSIS%"; $diagnostico3="%DIABETES% MELLITUS% CON% OTRAS% COMPLICACIONES%"; $adv=$advice;}
if ($diagnostico=="CERVICOBRAQUIALGIA") {$one_c=3;$diagnostico="%M255%"; $diagnostico2="%M796%"; $diagnostico3="%M436%"; $adv=$advice;}
if ($diagnostico=="TRIGLICERIDOS") {$one_c=3;$diagnostico="%E781%"; $diagnostico2="%E782%"; $diagnostico3="%E784%"; $adv=$advice;}
if ($diagnostico=="DIARREA CRONICA") {$one_c=3;$diagnostico="%K580%"; $diagnostico2="%K523%"; $diagnostico3="%K591%"; $adv=$advice;}
if ($diagnostico=="ESCLERODERMIA") {$one_c=3;$diagnostico="%L940%"; $diagnostico2="%L941%"; $diagnostico3="%M34%"; $adv=$advice;}
if ($diagnostico=="SHOCK") {$one_c=3;$diagnostico="%R57%"; $diagnostico2="%A483%"; $diagnostico3="% CHOQUE ANAFILACT%"; $adv=$advice;}
if ($diagnostico=="OBSTRUCCION BRONQUIAL") {$one_c=3;$diagnostico="%T175%"; $diagnostico2="%Q323%"; $diagnostico3="%D381%"; $adv=$advice;}
if ($diagnostico=="HEMORRAGIA OJO") {$one_c=3;$diagnostico="%H113%"; $diagnostico2="%H210%"; $diagnostico3="%H431%"; $adv=$advice;}
if ($diagnostico=="PANCITOPENIA") {$one_c=3;$diagnostico="%D649%"; $diagnostico2="%D728%"; $diagnostico3="%D696%"; $adv=$advice;}
if ($diagnostico=="HEMORRAGIA DIGESTIVA"||$diagnostico=="HEMORRAGIA VIAS DIGESTIVAS") 
	{$one_c=3;$diagnostico="%K920%"; $diagnostico2="%K921%"; $diagnostico3="%K922%"; $adv=$advice;}
if ($diagnostico=="PACIENTE SANO"||$diagnostico=="CLINICAMENTE SANO") {$one_c=3;$diagnostico="%Z711%"; $diagnostico2="%Z027%"; $diagnostico3="%Z000%"; $adv=$advice;}
if ($diagnostico=="VIROSIS") {$one_c=3;$diagnostico="%B338%"; $diagnostico2="%B348%"; $diagnostico3="%B349%"; $adv=$advice;}
if ($diagnostico=="COLICO"||$diagnostico=="COLICOS") 
{$one_c=3;$diagnostico="%R104%"; $diagnostico2="%R103%"; $diagnostico3="%N23%"; $adv=$advice;}
if ($diagnostico=="DETERIORO COGNITIVO") {$one_c=3;$diagnostico="%F067%"; $diagnostico2="%F068%"; $diagnostico3="%F069%"; $adv=$advice;}
if ($diagnostico=="ANEMIA FERROPENICA") {$one_c=3;$diagnostico="%D500%"; $diagnostico2="%D508%"; $diagnostico3="%D509%"; $adv=$advice;}
if ($diagnostico=="PATELO") {$one_c=2;$diagnostico="ROTUL"; $diagnostico2="RODILLA%"; $adv=$advice;}
if ($diagnostico=="BRONCOESPASMO") {$one_c=3;$diagnostico="%J209%"; $diagnostico2="%J219%"; $diagnostico3="%J980%"; $adv=$advice;}
if ($diagnostico=="POLIARTRALGIA") {$one_c=3;$diagnostico="%M255%"; $diagnostico2="%M258%"; $diagnostico3="%M130%"; $adv=$advice;}
if ($diagnostico=="FIEBRE PERSISTENTE") {$one_c=3;$diagnostico="%A689%"; $diagnostico2="%R508%"; $diagnostico3="%R509%"; $adv=$advice;}
if ($diagnostico=="FRACTURA CODO") {$one_c=3;$diagnostico="%S424%"; $diagnostico2="%S520%"; $diagnostico3="%S521%"; $adv=$advice;}
if ($diagnostico=="HERPES LABIAL") {$one_c=3;$diagnostico="%B000%"; $diagnostico2="%B001%"; $diagnostico3="%B002%"; $adv=$advice;}
if ($diagnostico=="SINTOMATICO RESPIRATORIO") {$one_c=3;$diagnostico="%A162%"; $diagnostico2="%A167%"; $diagnostico3="%A168%"; $adv=$advice;}
if ($diagnostico=="HIPERBILIRRUBINEMIA") {$one_c=3;$diagnostico="%E806%"; $diagnostico2="%E807%"; $diagnostico3="%ICTERICIA%"; $adv=$advice;}
if ($diagnostico=="OJO ROJO") {$one_c=3;$diagnostico="%H10%"; $diagnostico2="%H113%"; $diagnostico3="%H114%"; $adv=$advice;}
if ($diagnostico=="SINDROME METABOLICO") {$one_c=3;$diagnostico="%I10X%"; $diagnostico2="%R730%"; $diagnostico3="%E782%"; $adv=$advice;}
if ($diagnostico=="APLASIA MEDULAR") {$one_c=3;$diagnostico="%D61%"; $diagnostico2="%D694%"; $diagnostico3="%D728%"; $adv=$advice;}


//no in last version 
$nlv="CODIGO NO VALIDO: El codigo ingresado no se encuentra en la revision del 2010 de la C.I.E. 10";

if ($diagnostico=="H547") {$adv=$nlv;}
if ($diagnostico=="R97") {$adv=$nlv;}
if ($diagnostico=="Q449") {$adv=$nlv;}
if ($diagnostico=="H547") {$adv=$nlv;}
if ($diagnostico=="J468") {$adv=$nlv;}
if ($diagnostico=="N933") {$adv=$nlv;}
if ($diagnostico=="N97") {$adv=$nlv;}
if ($diagnostico=="Z777") {$adv=$nlv;}
if ($diagnostico=="D209") {$adv=$nlv;}
if ($diagnostico=="B042") {$adv=$nlv;}
if ($diagnostico=="AU9X") {$adv=$nlv;}
if ($diagnostico=="N771") {$adv=$nlv;}

if ($diagnostico=="R97X"
	||$diagnostico=="R97"
	||$diagnostico=="K359"
	||$diagnostico=="N51"
	||$diagnostico=="N511"
	||$diagnostico=="H547"
	||$diagnostico=="N180"
	||$diagnostico=="V00"
	
	) {$adv=$nlv;}
//

$extensivo="Para ampliar la busqueda se reemplazo la palabra buscada por palabra originaria.  Ejemplo: pulmonar -> pulmon";
$replacedmetastasisword=substr_count($diagnostico,"URETERAL");if ($replacedmetastasisword>=1) {$adv=$extensivo;}
$metastasis_replacement=str_replace("URETERAL","URETER",$diagnostico);$diagnostico=$metastasis_replacement;

$replacedmetastasisword=substr_count($diagnostico,"PULMONAR");if ($replacedmetastasisword>=1) {$adv=$extensivo;}
$metastasis_replacement=str_replace("PULMONAR","PULMO",$diagnostico);$diagnostico=$metastasis_replacement;


$histol="EL TERMINO BUSCADO HACE REFERENCIA A UN TIPO HISTOLOGICO DE CANCER, QUE NO HACE PARTE
DEL METODO DE CODIFICACION DIAGNOSTICA DE LA C.I.E. 10,  
DEBE ESPECIFICAR POR SITIO ANATOMICO";

$replacedword=substr_count($diagnostico,"NEUROECTODERMICO");
if ($replacedword>=1) {$adv=$histol;}

$replacedword=substr_count($diagnostico,"BASOCELULAR");
if ($replacedword>=1) {$adv=$histol;}


//$replacedword=substr_count($diagnostico,"TERATOMA");
//if ($replacedword>=1) {$adv=$histol;}

$replacement=str_replace("PULMONES","PULMON",$diagnostico);
$diagnostico=$replacement;

$replacement=str_replace("NEOPLASMA","NEOPLASIA",$diagnostico);
$diagnostico=$replacement;

$replacement=str_replace("STAPHILOCOCUS","ESTAFILOCOCO",$diagnostico);
$diagnostico=$replacement;

$replacement=str_replace("STAPHILOCOCUS EPIDERMIDIS","ESTAFILOCOCO",$diagnostico);
$diagnostico=$replacement;
// 


$replacement=str_replace("YUGAL","MUCOSA DE LA MEJILLA",$diagnostico);
$diagnostico=$replacement;

$replacement=str_replace("HOMICIDIO","AGRESION",$diagnostico);
$diagnostico=$replacement;

$replacement=str_replace("RESFRIO","RESFRIADO",$diagnostico);
$diagnostico=$replacement;


$replacedword=substr_count($diagnostico,"ADENOCARCINOMA");
if ($replacedword>=1) {$adv=$histol;}
$replacement=str_replace("ADENOCARCINOMA","TUMOR MALIGNO",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"TAQUIARRITMIA");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("TAQUIARRITMIA","TAQUICARDIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"HEMANGIOEPITELIOMA");
if ($replacedword>=1) {$adv=$histol;}
$replacement=str_replace("HEMANGIOEPITELIOMA","TUMOR",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"MIOCARDIOPATIA");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("MIOCARDIOPATIA","CARDIOMIOPATIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"COLON DERECHO");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("COLON DERECHO","COLON ASCENDENTE",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"CARDIOPATIA");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("CARDIOPATIA","CARDIOMIOPATIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"TROMBOEMBOLISMO");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("TROMBOEMBOLISMO","EMBOLIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"TROMBOEMBOLIA");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("TROMBOEMBOLIA","EMBOLIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"EMBOLISMO");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("EMBOLISMO","EMBOLIA",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"GLIOBLASTOMA");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("GLIOBLASTOMA","C71",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"SYDENHAM");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("SYDENHAM","I02",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"SOBREDOSIS");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("SOBREDOSIS","ENVENENAMIENTO",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"OPIOIDE");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("OPIOIDE","OPIACEO",$diagnostico);
$diagnostico=$replacement;

$replacedword=substr_count($diagnostico,"SANGRADO");
if ($replacedword>=1) {$adv=$advice;}
$replacement=str_replace("SANGRADO","HEMORRAGIA",$diagnostico);
$diagnostico=$replacement;

if ($diagnostico=="NEONATO") {$adv=$advice;}
$newborn_replacement=str_replace("NEONATO","RECIEN NACIDO",$diagnostico);
$diagnostico=$newborn_replacement;

$replacedmetastasisword=substr_count($diagnostico,"METASTASIS");
if ($replacedmetastasisword>=1) {$adv=$advice;}
$metastasis_replacement=str_replace("METASTASIS","TUMOR MALIGNO SECUNDARIO",$diagnostico);
$diagnostico=$metastasis_replacement;

$replacedmetastasisword=substr_count($diagnostico,"METASTASICO");
if ($replacedmetastasisword>=1) {$adv=$advice;}
$metastasis_replacement=str_replace("METASTASICO","TUMOR MALIGNO SECUNDARIO",$diagnostico);
$diagnostico=$metastasis_replacement;

$replacedmetastasisword=substr_count($diagnostico,"METASTASICA");
if ($replacedmetastasisword>=1) {$adv=$advice;}
$metastasis_replacement=str_replace("METASTASICA","TUMOR MALIGNO SECUNDARIO",$diagnostico);
$diagnostico=$metastasis_replacement;

$replacedword=substr_count($diagnostico,"CANCER");
if ($replacedword>=1) {$adv=$advice;}
$cancer_replacement=str_replace("CANCER","TUMOR MALIGNO",$diagnostico);
$diagnostico=$cancer_replacement;

$replacedword=substr_count($diagnostico,"NEOPLASIA");
if ($replacedword>=1) {$adv=$advice;}
$cancer_replacement=str_replace("NEOPLASIA","TUMOR MALIGNO",$diagnostico);
$diagnostico=$cancer_replacement;

$replacedword=substr_count($diagnostico,"RETROESTERNAL");
if ($replacedword>=1) {$adv=$advice;}
$cancer_replacement=str_replace("RETROESTERNAL","PRECORDIAL",$diagnostico);
$diagnostico=$cancer_replacement;

//
$unrated='EL T&Eacute;RMINO BUSCADO NO TIENE HOMOLOGACI&Oacute;N POR LA CIE 10 EN CUANTO A SEVERIDAD';
if ($diagnostico=="ANEMIA LEVE"||$diagnostico=="ANEMIA MODERADA"||$diagnostico=="ANEMIA SEVERA") {
	$diagnostico="ANEMIA"; $adv=$unrated;}

//
$unrated='EL T&Eacute;RMINO BUSCADO NO TIENE HOMOLOGACI&Oacute;N POR LA CIE 10 EN CUANTO A SEVERIDAD';
if ($diagnostico=="ANEMIA LEVE"||$diagnostico=="ANEMIA MODERADA"||$diagnostico=="ANEMIA SEVERA") {
	$diagnostico="ANEMIA"; $adv=$unrated;}


$dotreplacement=str_replace(".","",$diagnostico);
$diagnostico=$dotreplacement;

$whitespacereplacement=str_replace(" ","% ",$diagnostico);
$diagnostico=$whitespacereplacement;

?>