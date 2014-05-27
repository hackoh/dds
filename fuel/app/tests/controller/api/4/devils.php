<?php

/**
 * @group 4
 */
class Test_Controller_Api_4_Devils extends TestCase
{
	public function test_combine()
	{
		$json = file_get_contents('http://dds.impv.net/api/4/devils/ナパイア/ケンタウロス.json');
		$data = json_decode($json, true);
		$this->assertEquals('エンジェル', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/ネビロス/スフィンクス.json');
		$data = json_decode($json, true);
		$this->assertEquals('アーマーン', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/ムールムール/フェンリル.json');
		$data = json_decode($json, true);
		$this->assertEquals('フレスベルグ', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/トウコツ/アバドン.json');
		$data = json_decode($json, true);
		$this->assertEquals('ヤム', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/スフィンクス/オシリス.json');
		$data = json_decode($json, true);
		$this->assertEquals('バロン', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/トラソルテオトル/スフィンクス.json');
		$data = json_decode($json, true);
		$this->assertEquals('ガルーダ', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/ムールムール/オシリス.json');
		$data = json_decode($json, true);
		$this->assertEquals('ホクトセイクン', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/ネビロス/ヘカトンケイル.json');
		$data = json_decode($json, true);
		$this->assertEquals('ニーズホッグ', $data['name']);

		$json = file_get_contents('http://dds.impv.net/api/4/devils/ライラ/スフィンクス.json');
		$data = json_decode($json, true);
		$this->assertEquals('ヤタガラス', $data['name']);
	}
}