<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: face_recog(1).proto

namespace Face_recog_package;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 1:N验证请求
 *
 * Generated from protobuf message <code>face_recog_package.FaceServ1VSNRequest</code>
 */
class FaceServ1VSNRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>string image = 2;</code>
     */
    private $image = '';
    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     */
    private $userID = '';
    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 4;</code>
     */
    private $groupID = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type string $image
     *     @type string $userID
     *            用户ID
     *     @type string $groupID
     *            用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FaceRecog1::initOnce();
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
     * Generated from protobuf field <code>string image = 2;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Generated from protobuf field <code>string image = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     *  用户ID
     *
     * Generated from protobuf field <code>string userID = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkString($var, True);
        $this->userID = $var;

        return $this;
    }

    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 4;</code>
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     *  用户的关注组，比如一个用户有多个关注组用于人脸搜索，默认组名字是default
     *
     * Generated from protobuf field <code>string groupID = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupID($var)
    {
        GPBUtil::checkString($var, True);
        $this->groupID = $var;

        return $this;
    }

}

