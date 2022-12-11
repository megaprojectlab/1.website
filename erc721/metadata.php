<?
    header('Content-Type: application/json; charset=UTF-8');

    if( count($_GET) == 0 ){
        exit;
    }

	$d = '
ORIGINAL BAPTISM GOLD MEDAL 분할소유지분증명NFT
품명: Original B-NFT
발행처 : ㈜위드청춘 ( goldao.co.kr)
	';

    $base = array(
        'id' => $_GET['t'], 
        'description'=>$d, 
        'external_url'=>'https://baptism1626.com',
        "image"=>"https://baptism1626.com/assets/coin_show/type2.gif",
        "name"=>"The Baptism of Jesus,1626 Replica NFT Unit Type #".$_GET['t']
    );


    $r = json_encode($base, JSON_PRETTY_PRINT);

    $r = str_replace('\\/', '/', $r);

    echo $r;
	exit;
?>