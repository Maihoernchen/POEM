<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://gcm.schule/public/css/markdeep.css">
<script src="https://gcm.schule/public/js/markdeep.min.js"></script>
<?php

// succ contents

//$li = file_get_contents('http://loripsum.net/api');

$li = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commoda autem et incommoda in eo genere sunt, quae praeposita et reiecta diximus; Hic ambiguo ludimur. Ne amores quidem sanctos a sapiente alienos esse arbitrantur. Roges enim Aristonem, bonane ei videantur haec: vacuitas doloris, divitiae, valitudo; Mihi, inquam, qui te id ipsum rogavi? Expectoque quid ad id, quod quaerebam, respondeas. Nec enim, dum metuit, iustus est, et certe, si metuere destiterit, non erit; Quae diligentissime contra Aristonem dicuntur a Chryippo. Duo Reges: constructio interrete. Ex rebus enim timiditas, non ex vocabulis nascitur. Restinguet citius, si ardentem acceperit. Hoc Hieronymus summum bonum esse dixit.';

// split contents into word list

$li = explode(' ',$li);

$size = 1;

// define how often a heading appears

$header_commonness = 50;

// loop through words

for ($i=0; $i < count($li); $i++) {
    // every header_commonnessth word is a heading
    if ($i%$header_commonness==0) {
        // reset headingsize if it gets too big
        if ($size + 1 > 6) {
            $size = 1;
        }
        // define heading size
        $ht = random_int($size,$size+1);
        // render heading
        echo '<h'.$ht.'>'.$li[$i].'</h'.$ht.'>';
        // set sizerange new
        $size = $ht;
    } else {
        // render normal text
        echo $li[$i].' ';
    }
};