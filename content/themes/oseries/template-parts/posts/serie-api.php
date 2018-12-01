



    <?php
    require_once(__DIR__.'/allocine.class.php');
    define('ALLOCINE_PARTNER_KEY', '100043982026');
    define('ALLOCINE_SECRET_KEY', '29d185d98c984a359e6e6f26a0474269');
    $allocine = new Allocine(ALLOCINE_PARTNER_KEY, ALLOCINE_SECRET_KEY);
    $result = $allocine->search('Friends');

    $datas = json_decode($result, true);
    return ($datas);

    //
    echo'<div class="article">';
    echo'<div class="nom">';
    echo'<p>'.$datas['feed']['tvseries']['0']['originalTitle'].'</p></div>';
    echo'<img src="'.$datas['feed']['tvseries']['0']['poster']['href'].'" height="180" width="180">','</div>';
    ?>
