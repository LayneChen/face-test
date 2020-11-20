<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: face.proto

namespace Face;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 1:N验证结果
 *
 * Generated from protobuf message <code>face_recog_package.FaceServ1VSNResult</code>
 */
class FaceServ1VSNResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     */
    private $ret_code = 0;
    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 3;</code>
     */
    private $groupID = '';
    /**
     * 搜索返回的第一名FaceID
     *
     * Generated from protobuf field <code>string top1FaceID = 4;</code>
     */
    private $top1FaceID = '';
    /**
     * Generated from protobuf field <code>float top1_score = 5;</code>
     */
    private $top1_score = 0.0;
    /**
     * 搜索返回前五名FaceID
     *
     * Generated from protobuf field <code>repeated string top5FaceIDs = 6;</code>
     */
    private $top5FaceIDs;
    /**
     * Generated from protobuf field <code>repeated float top5_scores = 7;</code>
     */
    private $top5_scores;
    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 8;</code>
     */
    private $userID = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type int $ret_code
     *           返回码， 成功为0,其他为非0
     *     @type string $groupID
     *            用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *     @type string $top1FaceID
     *           搜索返回的第一名FaceID
     *     @type float $top1_score
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $top5FaceIDs
     *           搜索返回前五名FaceID
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $top5_scores
     *     @type string $userID
     *            用户ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Face::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     * @return int
     */
    public function getRetCode()
    {
        return $this->ret_code;
    }

    /**
     * 返回码， 成功为0,其他为非0
     *
     * Generated from protobuf field <code>int32 ret_code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->ret_code = $var;

        return $this;
    }

    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 3;</code>
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupID($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupID = $var;

        return $this;
    }

    /**
     * 搜索返回的第一名FaceID
     *
     * Generated from protobuf field <code>string top1FaceID = 4;</code>
     * @return string
     */
    public function getTop1FaceID()
    {
        return $this->top1FaceID;
    }

    /**
     * 搜索返回的第一名FaceID
     *
     * Generated from protobuf field <code>string top1FaceID = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTop1FaceID($var)
    {
        GPBUtil::checkString($var, True);
        $this->top1FaceID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float top1_score = 5;</code>
     * @return float
     */
    public function getTop1Score()
    {
        return $this->top1_score;
    }

    /**
     * Generated from protobuf field <code>float top1_score = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setTop1Score($var)
    {
        GPBUtil::checkFloat($var);
        $this->top1_score = $var;

        return $this;
    }

    /**
     * 搜索返回前五名FaceID
     *
     * Generated from protobuf field <code>repeated string top5FaceIDs = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTop5FaceIDs()
    {
        return $this->top5FaceIDs;
    }

    /**
     * 搜索返回前五名FaceID
     *
     * Generated from protobuf field <code>repeated string top5FaceIDs = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTop5FaceIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->top5FaceIDs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float top5_scores = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTop5Scores()
    {
        return $this->top5_scores;
    }

    /**
     * Generated from protobuf field <code>repeated float top5_scores = 7;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTop5Scores($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->top5_scores = $arr;

        return $this;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 8;</code>
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkString($var, True);
        $this->userID = $var;

        return $this;
    }

}

