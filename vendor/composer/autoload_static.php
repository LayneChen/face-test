<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ad43704fe43165bdb6addb88e66e570
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\' => 12,
        ),
        'F' => 
        array (
            'Face\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\' => 
        array (
            0 => __DIR__ . '/../..' . '/GPBMetadata',
        ),
        'Face\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Face',
        ),
    );

    public static $classMap = array (
        'Face\\DetResult' => __DIR__ . '/../..' . '/Face/DetResult.php',
        'Face\\FaceRecogPackageClient' => __DIR__ . '/../..' . '/Face/FaceRecogPackageClient.php',
        'Face\\FaceServ1VS1Request' => __DIR__ . '/../..' . '/Face/FaceServ1VS1Request.php',
        'Face\\FaceServ1VS1Result' => __DIR__ . '/../..' . '/Face/FaceServ1VS1Result.php',
        'Face\\FaceServ1VSNRequest' => __DIR__ . '/../..' . '/Face/FaceServ1VSNRequest.php',
        'Face\\FaceServ1VSNResult' => __DIR__ . '/../..' . '/Face/FaceServ1VSNResult.php',
        'Face\\FaceServDetectRequest' => __DIR__ . '/../..' . '/Face/FaceServDetectRequest.php',
        'Face\\FaceServDetectResult' => __DIR__ . '/../..' . '/Face/FaceServDetectResult.php',
        'Face\\FaceServMsgType' => __DIR__ . '/../..' . '/Face/FaceServMsgType.php',
        'Face\\FaceServRegisterRequest' => __DIR__ . '/../..' . '/Face/FaceServRegisterRequest.php',
        'Face\\FaceServRegisterResult' => __DIR__ . '/../..' . '/Face/FaceServRegisterResult.php',
        'Face\\FaceServReplyMsg' => __DIR__ . '/../..' . '/Face/FaceServReplyMsg.php',
        'Face\\FaceServRequestMsg' => __DIR__ . '/../..' . '/Face/FaceServRequestMsg.php',
        'Face\\Points' => __DIR__ . '/../..' . '/Face/Points.php',
        'GPBMetadata\\FaceRecog1' => __DIR__ . '/../..' . '/GPBMetadata/FaceRecog1.php',
        'GPBMetadata\\Google\\Protobuf\\Any' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Any.php',
        'GPBMetadata\\Google\\Protobuf\\Api' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Api.php',
        'GPBMetadata\\Google\\Protobuf\\Duration' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Duration.php',
        'GPBMetadata\\Google\\Protobuf\\FieldMask' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/FieldMask.php',
        'GPBMetadata\\Google\\Protobuf\\GPBEmpty' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/GPBEmpty.php',
        'GPBMetadata\\Google\\Protobuf\\Internal\\Descriptor' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Internal/Descriptor.php',
        'GPBMetadata\\Google\\Protobuf\\SourceContext' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/SourceContext.php',
        'GPBMetadata\\Google\\Protobuf\\Struct' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Struct.php',
        'GPBMetadata\\Google\\Protobuf\\Timestamp' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Timestamp.php',
        'GPBMetadata\\Google\\Protobuf\\Type' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Type.php',
        'GPBMetadata\\Google\\Protobuf\\Wrappers' => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf/Wrappers.php',
        'Google\\Protobuf\\Any' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Any.php',
        'Google\\Protobuf\\Api' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Api.php',
        'Google\\Protobuf\\BoolValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/BoolValue.php',
        'Google\\Protobuf\\BytesValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/BytesValue.php',
        'Google\\Protobuf\\Descriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Descriptor.php',
        'Google\\Protobuf\\DescriptorPool' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/DescriptorPool.php',
        'Google\\Protobuf\\DoubleValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/DoubleValue.php',
        'Google\\Protobuf\\Duration' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Duration.php',
        'Google\\Protobuf\\Enum' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Enum.php',
        'Google\\Protobuf\\EnumDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/EnumDescriptor.php',
        'Google\\Protobuf\\EnumValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/EnumValue.php',
        'Google\\Protobuf\\EnumValueDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/EnumValueDescriptor.php',
        'Google\\Protobuf\\Field' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Field.php',
        'Google\\Protobuf\\FieldDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/FieldDescriptor.php',
        'Google\\Protobuf\\FieldMask' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/FieldMask.php',
        'Google\\Protobuf\\Field\\Cardinality' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Field/Cardinality.php',
        'Google\\Protobuf\\Field\\Kind' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Field/Kind.php',
        'Google\\Protobuf\\Field_Cardinality' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Field_Cardinality.php',
        'Google\\Protobuf\\Field_Kind' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Field_Kind.php',
        'Google\\Protobuf\\FloatValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/FloatValue.php',
        'Google\\Protobuf\\GPBEmpty' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/GPBEmpty.php',
        'Google\\Protobuf\\Int32Value' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Int32Value.php',
        'Google\\Protobuf\\Int64Value' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Int64Value.php',
        'Google\\Protobuf\\Internal\\AnyBase' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/AnyBase.php',
        'Google\\Protobuf\\Internal\\CodedInputStream' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/CodedInputStream.php',
        'Google\\Protobuf\\Internal\\CodedOutputStream' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/CodedOutputStream.php',
        'Google\\Protobuf\\Internal\\Descriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/Descriptor.php',
        'Google\\Protobuf\\Internal\\DescriptorPool' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorPool.php',
        'Google\\Protobuf\\Internal\\DescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorProto.php',
        'Google\\Protobuf\\Internal\\DescriptorProto\\ExtensionRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorProto/ExtensionRange.php',
        'Google\\Protobuf\\Internal\\DescriptorProto\\ReservedRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorProto/ReservedRange.php',
        'Google\\Protobuf\\Internal\\DescriptorProto_ExtensionRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorProto_ExtensionRange.php',
        'Google\\Protobuf\\Internal\\DescriptorProto_ReservedRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/DescriptorProto_ReservedRange.php',
        'Google\\Protobuf\\Internal\\EnumBuilderContext' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumBuilderContext.php',
        'Google\\Protobuf\\Internal\\EnumDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumDescriptor.php',
        'Google\\Protobuf\\Internal\\EnumDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumDescriptorProto.php',
        'Google\\Protobuf\\Internal\\EnumDescriptorProto\\EnumReservedRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumDescriptorProto/EnumReservedRange.php',
        'Google\\Protobuf\\Internal\\EnumDescriptorProto_EnumReservedRange' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumDescriptorProto_EnumReservedRange.php',
        'Google\\Protobuf\\Internal\\EnumOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumOptions.php',
        'Google\\Protobuf\\Internal\\EnumValueDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumValueDescriptorProto.php',
        'Google\\Protobuf\\Internal\\EnumValueOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/EnumValueOptions.php',
        'Google\\Protobuf\\Internal\\ExtensionRangeOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/ExtensionRangeOptions.php',
        'Google\\Protobuf\\Internal\\FieldDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptor.php',
        'Google\\Protobuf\\Internal\\FieldDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptorProto.php',
        'Google\\Protobuf\\Internal\\FieldDescriptorProto\\Label' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptorProto/Label.php',
        'Google\\Protobuf\\Internal\\FieldDescriptorProto\\Type' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptorProto/Type.php',
        'Google\\Protobuf\\Internal\\FieldDescriptorProto_Label' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptorProto_Label.php',
        'Google\\Protobuf\\Internal\\FieldDescriptorProto_Type' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldDescriptorProto_Type.php',
        'Google\\Protobuf\\Internal\\FieldOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldOptions.php',
        'Google\\Protobuf\\Internal\\FieldOptions\\CType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldOptions/CType.php',
        'Google\\Protobuf\\Internal\\FieldOptions\\JSType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldOptions/JSType.php',
        'Google\\Protobuf\\Internal\\FieldOptions_CType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldOptions_CType.php',
        'Google\\Protobuf\\Internal\\FieldOptions_JSType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FieldOptions_JSType.php',
        'Google\\Protobuf\\Internal\\FileDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileDescriptor.php',
        'Google\\Protobuf\\Internal\\FileDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileDescriptorProto.php',
        'Google\\Protobuf\\Internal\\FileDescriptorSet' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileDescriptorSet.php',
        'Google\\Protobuf\\Internal\\FileOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileOptions.php',
        'Google\\Protobuf\\Internal\\FileOptions\\OptimizeMode' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileOptions/OptimizeMode.php',
        'Google\\Protobuf\\Internal\\FileOptions_OptimizeMode' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/FileOptions_OptimizeMode.php',
        'Google\\Protobuf\\Internal\\GPBDecodeException' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBDecodeException.php',
        'Google\\Protobuf\\Internal\\GPBJsonWire' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBJsonWire.php',
        'Google\\Protobuf\\Internal\\GPBLabel' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBLabel.php',
        'Google\\Protobuf\\Internal\\GPBType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBType.php',
        'Google\\Protobuf\\Internal\\GPBUtil' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBUtil.php',
        'Google\\Protobuf\\Internal\\GPBWire' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBWire.php',
        'Google\\Protobuf\\Internal\\GPBWireType' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GPBWireType.php',
        'Google\\Protobuf\\Internal\\GeneratedCodeInfo' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GeneratedCodeInfo.php',
        'Google\\Protobuf\\Internal\\GeneratedCodeInfo\\Annotation' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GeneratedCodeInfo/Annotation.php',
        'Google\\Protobuf\\Internal\\GeneratedCodeInfo_Annotation' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GeneratedCodeInfo_Annotation.php',
        'Google\\Protobuf\\Internal\\GetPublicDescriptorTrait' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/GetPublicDescriptorTrait.php',
        'Google\\Protobuf\\Internal\\HasPublicDescriptorTrait' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/HasPublicDescriptorTrait.php',
        'Google\\Protobuf\\Internal\\MapEntry' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MapEntry.php',
        'Google\\Protobuf\\Internal\\MapField' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MapField.php',
        'Google\\Protobuf\\Internal\\MapFieldIter' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MapFieldIter.php',
        'Google\\Protobuf\\Internal\\Message' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/Message.php',
        'Google\\Protobuf\\Internal\\MessageBuilderContext' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MessageBuilderContext.php',
        'Google\\Protobuf\\Internal\\MessageOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MessageOptions.php',
        'Google\\Protobuf\\Internal\\MethodDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MethodDescriptorProto.php',
        'Google\\Protobuf\\Internal\\MethodOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MethodOptions.php',
        'Google\\Protobuf\\Internal\\MethodOptions\\IdempotencyLevel' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MethodOptions/IdempotencyLevel.php',
        'Google\\Protobuf\\Internal\\MethodOptions_IdempotencyLevel' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/MethodOptions_IdempotencyLevel.php',
        'Google\\Protobuf\\Internal\\OneofDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/OneofDescriptor.php',
        'Google\\Protobuf\\Internal\\OneofDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/OneofDescriptorProto.php',
        'Google\\Protobuf\\Internal\\OneofField' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/OneofField.php',
        'Google\\Protobuf\\Internal\\OneofOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/OneofOptions.php',
        'Google\\Protobuf\\Internal\\RawInputStream' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/RawInputStream.php',
        'Google\\Protobuf\\Internal\\RepeatedField' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/RepeatedField.php',
        'Google\\Protobuf\\Internal\\RepeatedFieldIter' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/RepeatedFieldIter.php',
        'Google\\Protobuf\\Internal\\ServiceDescriptorProto' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/ServiceDescriptorProto.php',
        'Google\\Protobuf\\Internal\\ServiceOptions' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/ServiceOptions.php',
        'Google\\Protobuf\\Internal\\SourceCodeInfo' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/SourceCodeInfo.php',
        'Google\\Protobuf\\Internal\\SourceCodeInfo\\Location' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/SourceCodeInfo/Location.php',
        'Google\\Protobuf\\Internal\\SourceCodeInfo_Location' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/SourceCodeInfo_Location.php',
        'Google\\Protobuf\\Internal\\TimestampBase' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/TimestampBase.php',
        'Google\\Protobuf\\Internal\\UninterpretedOption' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/UninterpretedOption.php',
        'Google\\Protobuf\\Internal\\UninterpretedOption\\NamePart' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/UninterpretedOption/NamePart.php',
        'Google\\Protobuf\\Internal\\UninterpretedOption_NamePart' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Internal/UninterpretedOption_NamePart.php',
        'Google\\Protobuf\\ListValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/ListValue.php',
        'Google\\Protobuf\\Method' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Method.php',
        'Google\\Protobuf\\Mixin' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Mixin.php',
        'Google\\Protobuf\\NullValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/NullValue.php',
        'Google\\Protobuf\\OneofDescriptor' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/OneofDescriptor.php',
        'Google\\Protobuf\\Option' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Option.php',
        'Google\\Protobuf\\SourceContext' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/SourceContext.php',
        'Google\\Protobuf\\StringValue' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/StringValue.php',
        'Google\\Protobuf\\Struct' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Struct.php',
        'Google\\Protobuf\\Syntax' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Syntax.php',
        'Google\\Protobuf\\Timestamp' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Timestamp.php',
        'Google\\Protobuf\\Type' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Type.php',
        'Google\\Protobuf\\UInt32Value' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/UInt32Value.php',
        'Google\\Protobuf\\UInt64Value' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/UInt64Value.php',
        'Google\\Protobuf\\Value' => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf/Value.php',
        'Grpc\\AbstractCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/AbstractCall.php',
        'Grpc\\BaseStub' => __DIR__ . '/..' . '/grpc/grpc/src/lib/BaseStub.php',
        'Grpc\\BidiStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/BidiStreamingCall.php',
        'Grpc\\CallInvoker' => __DIR__ . '/..' . '/grpc/grpc/src/lib/CallInvoker.php',
        'Grpc\\ClientStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ClientStreamingCall.php',
        'Grpc\\DefaultCallInvoker' => __DIR__ . '/..' . '/grpc/grpc/src/lib/DefaultCallInvoker.php',
        'Grpc\\Interceptor' => __DIR__ . '/..' . '/grpc/grpc/src/lib/Interceptor.php',
        'Grpc\\Internal\\InterceptorChannel' => __DIR__ . '/..' . '/grpc/grpc/src/lib/Internal/InterceptorChannel.php',
        'Grpc\\RpcServer' => __DIR__ . '/..' . '/grpc/grpc/src/lib/RpcServer.php',
        'Grpc\\ServerStreamingCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/ServerStreamingCall.php',
        'Grpc\\UnaryCall' => __DIR__ . '/..' . '/grpc/grpc/src/lib/UnaryCall.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ad43704fe43165bdb6addb88e66e570::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ad43704fe43165bdb6addb88e66e570::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ad43704fe43165bdb6addb88e66e570::$classMap;

        }, null, ClassLoader::class);
    }
}
