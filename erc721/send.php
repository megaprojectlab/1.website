<?php


header('Access-Control-Allow-Origin: *');
header('Access-Control-Max-Age: 86400');
header('Access-Control-Allow-Headers: x-requested-with');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
echo json_encode(array('code' => '0', 'msg'=>'s', 'result'=>array(' 관리자에서 전송을 막았습니다.', ' 관리자에서 전송을 막았습니다.') ));
		exit;
	$option = $_GET['option'];

	$url = "";

	if($option == 'type1'){

		$config = array(
			"server"=>"bsc_main",
			"contract"=>"0x91871C33b2c8DF55c664510ba82e8D70dC360973",
			"gas"=>"0xA9817C8001",
			"func"=>"addArti",
			"data[0]"=>$_GET['to'],
			"data[1]"=>"text",
		);

		$url = "https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['data']}&f={$config['data[0]']}&g={$config['data[1]']}";

		$json = file_get_contents( $url );
		$obj = json_decode($json, true);
		//print_r($obj);

		$r = $obj['result'];


		echo json_encode(array('code' => '0', 'msg'=>'s', 'result'=>$r ));
		exit;

	}
	else if($option == 'type2'){

		$config = array(
			"server"=>"bsc_main",
			"contract"=>"0x91871C33b2c8DF55c664510ba82e8D70dC360973",
			"gas"=>"0xA9817C8001",
			"func"=>"addArtiDiv",
			"data[0]"=>$_GET['to'],
			"data[1]"=>"10",
			"data[2]"=>"text",
		);

		$url = "https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['data']}&f={$config['data[0]']}&g={$config['data[1]']}&h={$config['data[2]']}";

		$json = file_get_contents( $url );
		$obj = json_decode($json, true);
		//print_r($obj);

		$r = array($obj['result']);


		$config = array(
			"server"=>"bsc_main",
			"contract"=>"0x5bd5b4c859a9a825bd23df1f2d7cf8afbd04422a",
			"gas"=>"0xA9817C8001",
			"func"=>"addArti",
			"data[0]"=>$_GET['to'],
			"data[1]"=>"text",
		);

		$url = "https://artixnft.com/proc/contractApi.html?a={$config['server']}&b={$config['contract']}&c={$config['gas']}&d={$config['func']}&e={$config['data']}&f={$config['data[0]']}&g={$config['data[1]']}";

		$json = file_get_contents( $url );
		$obj = json_decode($json, true);

		$r2 = $obj['result'];

		echo json_encode(array('code' => '0', 'msg'=>'s', 'result'=>$r, 'result2'=>$r2 ));
		exit;
	}
	else{
		exit;
	}

?>