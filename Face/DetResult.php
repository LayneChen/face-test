<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: face_recog(1).proto

namespace Face;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>face_recog_package.DetResult</code>
 */
class DetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 矩形框左上角
     *
     * Generated from protobuf field <code>.face_recog_package.Points tl = 1;</code>
     */
    private $tl = null;
    /**
     * 矩形框右下角
     *
     * Generated from protobuf field <code>.face_recog_package.Points br = 2;</code>
     */
    private $br = null;
    /**
     * 连续5个人脸关键点，左眼，右眼，鼻子，左嘴角，右嘴角。
     *
     * Generated from protobuf field <code>repeated .face_recog_package.Points keypoints = 3;</code>
     */
    private $keypoints;
    /**
     * 原始图像的 url
     *
     * Generated from protobuf field <code>string rawImageUrl = 4;</code>
     */
    private $rawImageUrl = '';
    /**
     * 对齐人脸的 url [2020.11.10　预留不填]
     *
     * Generated from protobuf field <code>string alignedFaceUrl = 5;</code>
     */
    private $alignedFaceUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Face\Points $tl
     *           矩形框左上角
     *     @type \Face\Points $br
     *           矩形框右下角
     *     @type \Face\Points[]|\Google\Protobuf\Internal\RepeatedField $keypoints
     *           连续5个人脸关键点，左眼，右眼，鼻子，左嘴角，右嘴角。
     *     @type string $rawImageUrl
     *           原始图像的 url
     *     @type string $alignedFaceUrl
     *           对齐人脸的 url [2020.11.10　预留不填]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FaceRecog1::initOnce();
        parent::__construct($data);
    }

    /**
     * 矩形框左上角
     *
     * Generated from protobuf field <code>.face_recog_package.Points tl = 1;</code>
     * @return \Face\Points
     */
    public function getTl()
    {
        return $this->tl;
    }

    /**
     * 矩形框左上角
     *
     * Generated from protobuf field <code>.face_recog_package.Points tl = 1;</code>
     * @param \Face\Points $var
     * @return $this
     */
    public function setTl($var)
    {
        GPBUtil::checkMessage($var, \Face\Points::class);
        $this->tl = $var;

        return $this;
    }

    /**
     * 矩形框右下角
     *
     * Generated from protobuf field <code>.face_recog_package.Points br = 2;</code>
     * @return \Face\Points
     */
    public function getBr()
    {
        return $this->br;
    }

    /**
     * 矩形框右下角
     *
     * Generated from protobuf field <code>.face_recog_package.Points br = 2;</code>
     * @param \Face\Points $var
     * @return $this
     */
    public function setBr($var)
    {
        GPBUtil::checkMessage($var, \Face\Points::class);
        $this->br = $var;

        return $this;
    }

    /**
     * 连续5个人脸关键点，左眼，右眼，鼻子，左嘴角，右嘴角。
     *
     * Generated from protobuf field <code>repeated .face_recog_package.Points keypoints = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeypoints()
    {
        return $this->keypoints;
    }

    /**
     * 连续5个人脸关键点，左眼，右眼，鼻子，左嘴角，右嘴角。
     *
     * Generated from protobuf field <code>repeated .face_recog_package.Points keypoints = 3;</code>
     * @param \Face\Points[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeypoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Face\Points::class);
        $this->keypoints = $arr;

        return $this;
    }

    /**
     * 原始图像的 url
     *
     * Generated from protobuf field <code>string rawImageUrl = 4;</code>
     * @return string
     */
    public function getRawImageUrl()
    {
        return $this->rawImageUrl;
    }

    /**
     * 原始图像的 url
     *
     * Generated from protobuf field <code>string rawImageUrl = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRawImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->rawImageUrl = $var;

        return $this;
    }

    /**
     * 对齐人脸的 url [2020.11.10　预留不填]
     *
     * Generated from protobuf field <code>string alignedFaceUrl = 5;</code>
     * @return string
     */
    public function getAlignedFaceUrl()
    {
        return $this->alignedFaceUrl;
    }

    /**
     * 对齐人脸的 url [2020.11.10　预留不填]
     *
     * Generated from protobuf field <code>string alignedFaceUrl = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAlignedFaceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->alignedFaceUrl = $var;

        return $this;
    }

}

