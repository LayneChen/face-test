<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user_info.proto

namespace GPBMetadata;

class UserInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad9010a0f757365725f696e666f2e70726f746f120b7270635f7061636b" .
            "616765221c0a0c48656c6c6f52657175657374120c0a046e616d65180120" .
            "012809223c0a0a48656c6c6f5265706c79120f0a076d6573736167651801" .
            "20012809120e0a066e756d626572180220012805120d0a0573636f726518" .
            "032001280232550a1148656c6c6f576f726c645365727669636512400a08" .
            "53617948656c6c6f12192e7270635f7061636b6167652e48656c6c6f5265" .
            "71756573741a172e7270635f7061636b6167652e48656c6c6f5265706c79" .
            "2200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
