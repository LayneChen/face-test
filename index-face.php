<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Face_recog_package\FaceRecogPackageClient('127.0.0.1:8787', [
    'credentials' => \Grpc\ChannelCredentials::createInsecure()
]);


$request = new \Face_recog_package\FaceServ1VS1Request();
$request->setUserID(2);
$request->setMessage('test');
$request->setImage1('2341234');
$request->setImage2('2341234');
var_dump($request);
$get = $client->FaceServ1VS1($request)->wait();
print_r($get);
list($reply, $status) = $get;
$data[] = $reply->getMessage();
$data[] = $reply->getRetCode();
$data[] = $reply->getScore();
$data[] = $reply->getUserID();
var_dump($data);die;



