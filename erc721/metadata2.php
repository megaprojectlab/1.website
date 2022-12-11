<?
    header('Content-Type: application/json; charset=UTF-8');

    if( count($_GET) == 0 ){
        exit;
    }

	$d = '
품명: the baptism of jesus,1626 Replica NFT
소재: 골드
중량: 9.375g
크기: 26.5mm
	';

    $base = array(
        'id' => $_GET['t'], 
        'description'=>$d, 
        'external_url'=>'https://baptism1626.com',
        "image"=>"https://kornft.org/data/file/300/3661063436_AQ4D1cO7_ad75479227c1114c269b60d92f682286da189372.gif",
        "name"=>"The Baptism of Jesus,1626 Replica NFT Package Type #".$_GET['t']
    );


    $r = json_encode($base, JSON_PRETTY_PRINT);

    $r = str_replace('\\/', '/', $r);

    echo $r;
	exit;
?>