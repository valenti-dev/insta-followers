<?php
$answer = [
    'success' => false,
];
$_POST = json_decode(file_get_contents('php://input'), true);
$response = json_decode(file_get_contents('https://www.instagram.com/'.$_POST['username'].'/?__a=1'), true);
if($response && isset($response['graphql']) && isset($response['graphql']['user'])) {
    $data = [
        'username' => $response['graphql']['user']['username'],
    ];
    if($response['graphql']['user']['profile_pic_url']) {
        $photo_dir = $_SERVER['DOCUMENT_ROOT'].'/cache/photo';
        if(!file_exists($photo_dir)) mkdir($photo_dir);
        if(file_put_contents($photo_dir.'/'.$data['username'].'.jpg', file_get_contents($response['graphql']['user']['profile_pic_url']))) {
            $data['thumb'] = '/cache/photo/'.$data['username'].'.jpg';
        }
    }
    $answer['success'] = true;
    $answer['data'] = $data;
}
echo json_encode($answer);