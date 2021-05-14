<?php
require_once './weapi/MusicAPI.php';


$keywords = '可惜没如果';
$demo = new MusicAPI();
$result = $demo->search($keywords);
print_r($result);
exit;

// $res = $demo->url('29814898');
// $res = $demo->url('399354373');
// print_r($res);
// exit;
// $result = json_decode($result,true);
// if($result['code'] == 200){
// 	// echo "<pre>";
// 	// print_r($result['result']['songs']);
// 	$songs = $result['result']['songs'];

// 	$str = '<table>';
// 	$str .= '<tr>
// 			<td>曲名</td>
// 			<td>歌手</td>
// 			<td>图片</td>
// 			<td>时间</td>
// 			<td>播放</td>
// 		</tr>';
// 	foreach($songs as $song){
// 		$str .= '<tr>
// 			<td></td>
// 			<td></td>
// 			<td></td>
// 			<td></td>
// 			<td></td>
// 		</tr>';
// 	}
// 	$str .= '</table>';
// }