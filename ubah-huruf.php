<?php
function ubah_huruf($string){
//kode di sini
$alphabet ="abcdefghijklmnopqrstuvwxyz";
$alphabetCap ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$newString ="";

$arrString = str_split($string);
$arrAlphabet = str_split($alphabet);
$arrAlphabetCap = str_split($alphabetCap);

    for ($i = 0; $i < count ($arrString); $i++){
        if(in_array($arrString[$i], $arrAlphabet)){
            $indexString = (array_search($arrString[$i], $arrAlphabet)+1)%26;
            $newString .= $arrAlphabet[$indexString];
        }else if (in_array($arrString[$i], $arrAlphabetCap)){
            $indexString = (array_search($arrString[$i], $arrAlphabetCap)+1) % 26;
            $newString .= $arrAlphabetCap($indexString);
        }else {
            $newString .= $string[$i];
        }
    }
    return $newString . "\n";
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>