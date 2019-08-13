<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Common;

class AdTypeInfos
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdAsset::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\CallConversionReportingState::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\DisplayAdFormatSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\DisplayUploadProductType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\LegacyAppInstallAdAppStore::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\MimeType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd420a32676f6f676c652f6164732f676f6f676c656164732f76322f63" .
            "6f6d6d6f6e2f61645f747970655f696e666f732e70726f746f121e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e1a4367" .
            "6f6f676c652f6164732f676f6f676c656164732f76322f656e756d732f63" .
            "616c6c5f636f6e76657273696f6e5f7265706f7274696e675f7374617465" .
            "2e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76" .
            "322f656e756d732f646973706c61795f61645f666f726d61745f73657474" .
            "696e672e70726f746f1a3f676f6f676c652f6164732f676f6f676c656164" .
            "732f76322f656e756d732f646973706c61795f75706c6f61645f70726f64" .
            "7563745f747970652e70726f746f1a43676f6f676c652f6164732f676f6f" .
            "676c656164732f76322f656e756d732f6c65676163795f6170705f696e73" .
            "74616c6c5f61645f6170705f73746f72652e70726f746f1a2d676f6f676c" .
            "652f6164732f676f6f676c656164732f76322f656e756d732f6d696d655f" .
            "747970652e70726f746f1a1e676f6f676c652f70726f746f6275662f7772" .
            "6170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f74" .
            "6174696f6e732e70726f746f22a4010a0a546578744164496e666f122e0a" .
            "08686561646c696e6518012001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512320a0c6465736372697074696f6e" .
            "3118022001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512320a0c6465736372697074696f6e3218032001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522" .
            "f7020a12457870616e646564546578744164496e666f12340a0e68656164" .
            "6c696e655f706172743118012001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512340a0e686561646c696e655f70" .
            "6172743218022001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756512340a0e686561646c696e655f70617274331806" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512310a0b6465736372697074696f6e18032001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512320a0c64" .
            "65736372697074696f6e3218072001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c7565122b0a05706174683118042001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "7565122b0a05706174683218052001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756522e7050a0e43616c6c4f6e6c79" .
            "4164496e666f12320a0c636f756e7472795f636f646518012001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651232" .
            "0a0c70686f6e655f6e756d62657218022001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512330a0d627573696e65" .
            "73735f6e616d6518032001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c7565122f0a09686561646c696e6531180b2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "7565122f0a09686561646c696e6532180c2001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512320a0c6465736372" .
            "697074696f6e3118042001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512320a0c6465736372697074696f6e3218" .
            "052001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512300a0c63616c6c5f747261636b656418062001280b321a2e" .
            "676f6f676c652e70726f746f6275662e426f6f6c56616c7565123b0a1764" .
            "697361626c655f63616c6c5f636f6e76657273696f6e18072001280b321a" .
            "2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512430a1d" .
            "70686f6e655f6e756d6265725f766572696669636174696f6e5f75726c18" .
            "082001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512370a11636f6e76657273696f6e5f616374696f6e18092001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "75651280010a1a636f6e76657273696f6e5f7265706f7274696e675f7374" .
            "617465180a2001280e325c2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e656e756d732e43616c6c436f6e76657273696f6e5265706f" .
            "7274696e675374617465456e756d2e43616c6c436f6e76657273696f6e52" .
            "65706f7274696e6753746174652284010a1b457870616e64656444796e61" .
            "6d69635365617263684164496e666f12310a0b6465736372697074696f6e" .
            "18012001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512320a0c6465736372697074696f6e3218022001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565220d" .
            "0a0b486f74656c4164496e666f22150a1353686f7070696e67536d617274" .
            "4164496e666f22170a1553686f7070696e6750726f647563744164496e66" .
            "6f22510a1f53686f7070696e67436f6d70617269736f6e4c697374696e67" .
            "4164496e666f122e0a08686561646c696e6518012001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756522a9040a0b47" .
            "6d61696c4164496e666f123b0a0674656173657218012001280b322b2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e" .
            "476d61696c54656173657212320a0c6865616465725f696d616765180220" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c756512350a0f6d61726b6574696e675f696d61676518032001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123e" .
            "0a186d61726b6574696e675f696d6167655f686561646c696e6518042001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512410a1b6d61726b6574696e675f696d6167655f6465736372697074" .
            "696f6e18052001280b321c2e676f6f676c652e70726f746f6275662e5374" .
            "72696e6756616c756512630a266d61726b6574696e675f696d6167655f64" .
            "6973706c61795f63616c6c5f746f5f616374696f6e18062001280b32332e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e" .
            "2e446973706c617943616c6c546f416374696f6e12440a0e70726f647563" .
            "745f696d6167657318072003280b322c2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e636f6d6d6f6e2e50726f64756374496d616765" .
            "12440a0e70726f647563745f766964656f7318082003280b322c2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e5072" .
            "6f64756374566964656f22d7010a0b476d61696c546561736572122e0a08" .
            "686561646c696e6518012001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756512310a0b6465736372697074696f6e18" .
            "022001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512330a0d627573696e6573735f6e616d6518032001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651230" .
            "0a0a6c6f676f5f696d61676518042001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756522ac010a13446973706c6179" .
            "43616c6c546f416374696f6e122a0a047465787418012001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512300a0a" .
            "746578745f636f6c6f7218022001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512370a1175726c5f636f6c6c6563" .
            "74696f6e5f696418032001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756522cb010a0c50726f64756374496d616765" .
            "12330a0d70726f647563745f696d61676518012001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512310a0b646573" .
            "6372697074696f6e18022001280b321c2e676f6f676c652e70726f746f62" .
            "75662e537472696e6756616c756512530a16646973706c61795f63616c6c" .
            "5f746f5f616374696f6e18032001280b32332e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e636f6d6d6f6e2e446973706c617943616c" .
            "6c546f416374696f6e22430a0c50726f64756374566964656f12330a0d70" .
            "726f647563745f766964656f18012001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756522f1040a0b496d6167654164" .
            "496e666f12300a0b706978656c5f776964746818042001280b321b2e676f" .
            "6f676c652e70726f746f6275662e496e74363456616c756512310a0c7069" .
            "78656c5f68656967687418052001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c7565122f0a09696d6167655f75726c1806" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512380a13707265766965775f706978656c5f7769647468180720" .
            "01280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c" .
            "756512390a14707265766965775f706978656c5f68656967687418082001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "6512370a11707265766965775f696d6167655f75726c18092001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651247" .
            "0a096d696d655f74797065180a2001280e32342e676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e656e756d732e4d696d6554797065456e" .
            "756d2e4d696d6554797065122a0a046e616d65180b2001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512320a0a6d" .
            "656469615f66696c6518012001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c75654800122b0a04646174611802200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e427974657356616c7565" .
            "4800123f0a1861645f69645f746f5f636f70795f696d6167655f66726f6d" .
            "18032001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c7565480042070a05696d61676522530a19566964656f42756d7065" .
            "72496e53747265616d4164496e666f12360a10636f6d70616e696f6e5f62" .
            "616e6e657218012001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756522590a1f566964656f4e6f6e536b6970706162" .
            "6c65496e53747265616d4164496e666f12360a10636f6d70616e696f6e5f" .
            "62616e6e657218012001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c756522c7010a1b566964656f5472756556696577" .
            "496e53747265616d4164496e666f12390a13616374696f6e5f627574746f" .
            "6e5f6c6162656c18012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512350a0f616374696f6e5f686561646c69" .
            "6e6518022001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512360a10636f6d70616e696f6e5f62616e6e65721803" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756522790a14566964656f4f757473747265616d4164496e666f122e" .
            "0a08686561646c696e6518012001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512310a0b6465736372697074696f" .
            "6e18022001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c7565228e030a0b566964656f4164496e666f12300a0a6d6564" .
            "69615f66696c6518012001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512500a09696e5f73747265616d18022001" .
            "280b323b2e676f6f676c652e6164732e676f6f676c656164732e76322e63" .
            "6f6d6d6f6e2e566964656f5472756556696577496e53747265616d416449" .
            "6e666f4800124b0a0662756d70657218032001280b32392e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e566964656f" .
            "42756d706572496e53747265616d4164496e666f4800124a0a0a6f75745f" .
            "73747265616d18042001280b32342e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e636f6d6d6f6e2e566964656f4f757473747265616d" .
            "4164496e666f480012580a0d6e6f6e5f736b69707061626c651805200128" .
            "0b323f2e676f6f676c652e6164732e676f6f676c656164732e76322e636f" .
            "6d6d6f6e2e566964656f4e6f6e536b69707061626c65496e53747265616d" .
            "4164496e666f480042080a06666f726d617422f5010a16526573706f6e73" .
            "6976655365617263684164496e666f123e0a09686561646c696e65731801" .
            "2003280b322b2e676f6f676c652e6164732e676f6f676c656164732e7632" .
            "2e636f6d6d6f6e2e416454657874417373657412410a0c64657363726970" .
            "74696f6e7318022003280b322b2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e636f6d6d6f6e2e4164546578744173736574122b0a05" .
            "706174683118032001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c7565122b0a05706174683218042001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756522fd060a" .
            "1d4c6567616379526573706f6e73697665446973706c61794164496e666f" .
            "12340a0e73686f72745f686561646c696e6518012001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512330a0d6c6f" .
            "6e675f686561646c696e6518022001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756512310a0b646573637269707469" .
            "6f6e18032001280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512330a0d627573696e6573735f6e616d651804200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512380a14616c6c6f775f666c657869626c655f636f6c6f721805200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c756512" .
            "320a0c616363656e745f636f6c6f7218062001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512300a0a6d61696e5f" .
            "636f6c6f7218072001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c756512390a1363616c6c5f746f5f616374696f6e5f" .
            "7465787418082001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756512300a0a6c6f676f5f696d61676518092001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12370a117371756172655f6c6f676f5f696d616765180a2001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512350a" .
            "0f6d61726b6574696e675f696d616765180b2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565123c0a1673717561" .
            "72655f6d61726b6574696e675f696d616765180c2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512680a0e666f" .
            "726d61745f73657474696e67180d2001280e32502e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e656e756d732e446973706c61794164" .
            "466f726d617453657474696e67456e756d2e446973706c61794164466f72" .
            "6d617453657474696e6712320a0c70726963655f707265666978180e2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512300a0a70726f6d6f5f74657874180f2001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756522ab030a09417070" .
            "4164496e666f12460a116d616e6461746f72795f61645f74657874180120" .
            "01280b322b2e676f6f676c652e6164732e676f6f676c656164732e76322e" .
            "636f6d6d6f6e2e4164546578744173736574123e0a09686561646c696e65" .
            "7318022003280b322b2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e636f6d6d6f6e2e416454657874417373657412410a0c64657363" .
            "72697074696f6e7318032003280b322b2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e636f6d6d6f6e2e416454657874417373657412" .
            "3c0a06696d6167657318042003280b322c2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76322e636f6d6d6f6e2e4164496d61676541737365" .
            "7412440a0e796f75747562655f766964656f7318052003280b322c2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e41" .
            "64566964656f4173736574124f0a1368746d6c355f6d656469615f62756e" .
            "646c657318062003280b32322e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e636f6d6d6f6e2e41644d6564696142756e646c65417373" .
            "65742294020a13417070456e676167656d656e744164496e666f123e0a09" .
            "686561646c696e657318012003280b322b2e676f6f676c652e6164732e67" .
            "6f6f676c656164732e76322e636f6d6d6f6e2e4164546578744173736574" .
            "12410a0c6465736372697074696f6e7318022003280b322b2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e41645465" .
            "78744173736574123c0a06696d6167657318032003280b322c2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e416449" .
            "6d6167654173736574123c0a06766964656f7318042003280b322c2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e41" .
            "64566964656f417373657422cb020a164c6567616379417070496e737461" .
            "6c6c4164496e666f122c0a066170705f696418012001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c7565126b0a096170" .
            "705f73746f726518022001280e32582e676f6f676c652e6164732e676f6f" .
            "676c656164732e76322e656e756d732e4c6567616379417070496e737461" .
            "6c6c416441707053746f7265456e756d2e4c6567616379417070496e7374" .
            "616c6c416441707053746f7265122e0a08686561646c696e651803200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512320a0c6465736372697074696f6e3118042001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512320a0c646573" .
            "6372697074696f6e3218052001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756522aa080a17526573706f6e73697665" .
            "446973706c61794164496e666f12460a106d61726b6574696e675f696d61" .
            "67657318012003280b322c2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e636f6d6d6f6e2e4164496d6167654173736574124d0a1773" .
            "71756172655f6d61726b6574696e675f696d6167657318022003280b322c" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f" .
            "6e2e4164496d616765417373657412410a0b6c6f676f5f696d6167657318" .
            "032003280b322c2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e636f6d6d6f6e2e4164496d616765417373657412480a127371756172" .
            "655f6c6f676f5f696d6167657318042003280b322c2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e636f6d6d6f6e2e4164496d616765" .
            "4173736574123e0a09686561646c696e657318052003280b322b2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e4164" .
            "54657874417373657412420a0d6c6f6e675f686561646c696e6518062001" .
            "280b322b2e676f6f676c652e6164732e676f6f676c656164732e76322e63" .
            "6f6d6d6f6e2e416454657874417373657412410a0c646573637269707469" .
            "6f6e7318072003280b322b2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e636f6d6d6f6e2e416454657874417373657412440a0e796f" .
            "75747562655f766964656f7318082003280b322c2e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e636f6d6d6f6e2e4164566964656f41" .
            "7373657412330a0d627573696e6573735f6e616d6518092001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512300a" .
            "0a6d61696e5f636f6c6f72180a2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e537472696e6756616c756512320a0c616363656e745f636f" .
            "6c6f72180b2001280b321c2e676f6f676c652e70726f746f6275662e5374" .
            "72696e6756616c756512380a14616c6c6f775f666c657869626c655f636f" .
            "6c6f72180c2001280b321a2e676f6f676c652e70726f746f6275662e426f" .
            "6f6c56616c756512390a1363616c6c5f746f5f616374696f6e5f74657874" .
            "180d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512320a0c70726963655f707265666978180e2001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651230" .
            "0a0a70726f6d6f5f74657874180f2001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756512680a0e666f726d61745f73" .
            "657474696e6718102001280e32502e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e656e756d732e446973706c61794164466f726d6174" .
            "53657474696e67456e756d2e446973706c61794164466f726d6174536574" .
            "74696e6722eb010a13446973706c617955706c6f61644164496e666f1279" .
            "0a1b646973706c61795f75706c6f61645f70726f647563745f7479706518" .
            "012001280e32542e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e656e756d732e446973706c617955706c6f616450726f647563745479" .
            "7065456e756d2e446973706c617955706c6f616450726f64756374547970" .
            "65124a0a0c6d656469615f62756e646c6518022001280b32322e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e41644d" .
            "6564696142756e646c6541737365744800420d0a0b6d656469615f617373" .
            "657442eb010a22636f6d2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76322e636f6d6d6f6e4210416454797065496e666f7350726f746f50" .
            "015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f" .
            "676f6f676c65617069732f6164732f676f6f676c656164732f76322f636f" .
            "6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e416473" .
            "2e476f6f676c654164732e56322e436f6d6d6f6eca021e476f6f676c655c" .
            "4164735c476f6f676c654164735c56325c436f6d6d6f6eea0222476f6f67" .
            "6c653a3a4164733a3a476f6f676c654164733a3a56323a3a436f6d6d6f6e" .
            "620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

