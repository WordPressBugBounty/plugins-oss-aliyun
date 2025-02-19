<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5cbec1ff585afa31244d1acbf25a5001
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'e69f7f6ee287b969198c3c9d6777bd38' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/bootstrap.php',
        '023d27dca8066ef29e6739335ea73bad' => __DIR__ . '/..' . '/symfony/polyfill-php70/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        'd767e4fc2dc52fe66584ab8c6684783e' => __DIR__ . '/..' . '/adbario/php-dot-notation/src/helpers.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Php70\\' => 23,
            'Symfony\\Polyfill\\Intl\\Normalizer\\' => 33,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'AlibabaCloud\\Tea\\' => 17,
            'AlibabaCloud\\Credentials\\' => 25,
            'Adbar\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Php70\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php70',
        ),
        'Symfony\\Polyfill\\Intl\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'AlibabaCloud\\Tea\\' => 
        array (
            0 => __DIR__ . '/..' . '/alibabacloud/tea/src',
        ),
        'AlibabaCloud\\Credentials\\' => 
        array (
            0 => __DIR__ . '/..' . '/alibabacloud/credentials/src',
        ),
        'Adbar\\' => 
        array (
            0 => __DIR__ . '/..' . '/adbario/php-dot-notation/src',
        ),
    );

    public static $classMap = array (
        'Adbar\\Dot' => __DIR__ . '/..' . '/adbario/php-dot-notation/src/Dot.php',
        'AlibabaCloud\\Credentials\\AccessKeyCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/AccessKeyCredential.php',
        'AlibabaCloud\\Credentials\\BearerTokenCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/BearerTokenCredential.php',
        'AlibabaCloud\\Credentials\\Credential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Credential.php',
        'AlibabaCloud\\Credentials\\Credential\\Config' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Credential/Config.php',
        'AlibabaCloud\\Credentials\\Credential\\CredentialModel' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Credential/CredentialModel.php',
        'AlibabaCloud\\Credentials\\Credentials' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Credentials.php',
        'AlibabaCloud\\Credentials\\CredentialsInterface' => __DIR__ . '/..' . '/alibabacloud/credentials/src/CredentialsInterface.php',
        'AlibabaCloud\\Credentials\\CredentialsProviderWrap' => __DIR__ . '/..' . '/alibabacloud/credentials/src/CredentialsProviderWrap.php',
        'AlibabaCloud\\Credentials\\EcsRamRoleCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/EcsRamRoleCredential.php',
        'AlibabaCloud\\Credentials\\Providers\\CLIProfileCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/CLIProfileCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\ChainProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/ChainProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\Credentials' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/Credentials.php',
        'AlibabaCloud\\Credentials\\Providers\\CredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/CredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\DefaultCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/DefaultCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\EcsRamRoleCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/EcsRamRoleCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\EnvironmentVariableCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/EnvironmentVariableCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\OIDCRoleArnCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/OIDCRoleArnCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\ProfileCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/ProfileCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\RamRoleArnCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/RamRoleArnCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\RsaKeyPairCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/RsaKeyPairCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\SessionCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/SessionCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\StaticAKCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/StaticAKCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\StaticSTSCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/StaticSTSCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\Providers\\URLCredentialsProvider' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Providers/URLCredentialsProvider.php',
        'AlibabaCloud\\Credentials\\RamRoleArnCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/RamRoleArnCredential.php',
        'AlibabaCloud\\Credentials\\Request\\Request' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Request/Request.php',
        'AlibabaCloud\\Credentials\\RsaKeyPairCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/RsaKeyPairCredential.php',
        'AlibabaCloud\\Credentials\\Signature\\BearerTokenSignature' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Signature/BearerTokenSignature.php',
        'AlibabaCloud\\Credentials\\Signature\\ShaHmac1Signature' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Signature/ShaHmac1Signature.php',
        'AlibabaCloud\\Credentials\\Signature\\ShaHmac256Signature' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Signature/ShaHmac256Signature.php',
        'AlibabaCloud\\Credentials\\Signature\\ShaHmac256WithRsaSignature' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Signature/ShaHmac256WithRsaSignature.php',
        'AlibabaCloud\\Credentials\\Signature\\SignatureInterface' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Signature/SignatureInterface.php',
        'AlibabaCloud\\Credentials\\StsCredential' => __DIR__ . '/..' . '/alibabacloud/credentials/src/StsCredential.php',
        'AlibabaCloud\\Credentials\\Utils\\Filter' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Utils/Filter.php',
        'AlibabaCloud\\Credentials\\Utils\\Helper' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Utils/Helper.php',
        'AlibabaCloud\\Credentials\\Utils\\MockTrait' => __DIR__ . '/..' . '/alibabacloud/credentials/src/Utils/MockTrait.php',
        'AlibabaCloud\\Tea\\Exception\\TeaError' => __DIR__ . '/..' . '/alibabacloud/tea/src/Exception/TeaError.php',
        'AlibabaCloud\\Tea\\Exception\\TeaRetryError' => __DIR__ . '/..' . '/alibabacloud/tea/src/Exception/TeaRetryError.php',
        'AlibabaCloud\\Tea\\Exception\\TeaUnableRetryError' => __DIR__ . '/..' . '/alibabacloud/tea/src/Exception/TeaUnableRetryError.php',
        'AlibabaCloud\\Tea\\Helper' => __DIR__ . '/..' . '/alibabacloud/tea/src/Helper.php',
        'AlibabaCloud\\Tea\\Model' => __DIR__ . '/..' . '/alibabacloud/tea/src/Model.php',
        'AlibabaCloud\\Tea\\Parameter' => __DIR__ . '/..' . '/alibabacloud/tea/src/Parameter.php',
        'AlibabaCloud\\Tea\\Request' => __DIR__ . '/..' . '/alibabacloud/tea/src/Request.php',
        'AlibabaCloud\\Tea\\Response' => __DIR__ . '/..' . '/alibabacloud/tea/src/Response.php',
        'AlibabaCloud\\Tea\\Tea' => __DIR__ . '/..' . '/alibabacloud/tea/src/Tea.php',
        'ArithmeticError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ArithmeticError.php',
        'AssertionError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/AssertionError.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DivisionByZeroError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/DivisionByZeroError.php',
        'Error' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/Error.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\Create' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Create.php',
        'GuzzleHttp\\Promise\\Each' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Each.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Is' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Is.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Promise\\Utils' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Utils.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
        'OSS\\Core\\MimeTypes' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/MimeTypes.php',
        'OSS\\Core\\OssException' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssException.php',
        'OSS\\Core\\OssUtil' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssUtil.php',
        'OSS\\Credentials\\Credentials' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Credentials/Credentials.php',
        'OSS\\Credentials\\CredentialsProvider' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Credentials/CredentialsProvider.php',
        'OSS\\Credentials\\EnvironmentVariableCredentialsProvider' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Credentials/EnvironmentVariableCredentialsProvider.php',
        'OSS\\Credentials\\StaticCredentialsProvider' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Credentials/StaticCredentialsProvider.php',
        'OSS\\Http\\RequestCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore.php',
        'OSS\\Http\\RequestCore_Exception' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore_Exception.php',
        'OSS\\Http\\ResponseCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/ResponseCore.php',
        'OSS\\Model\\BucketInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketInfo.php',
        'OSS\\Model\\BucketListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketListInfo.php',
        'OSS\\Model\\BucketStat' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketStat.php',
        'OSS\\Model\\CnameConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CnameConfig.php',
        'OSS\\Model\\CnameTokenInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CnameTokenInfo.php',
        'OSS\\Model\\CorsConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsConfig.php',
        'OSS\\Model\\CorsRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsRule.php',
        'OSS\\Model\\DeleteMarkerInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/DeleteMarkerInfo.php',
        'OSS\\Model\\DeleteObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/DeleteObjectInfo.php',
        'OSS\\Model\\DeletedObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/DeletedObjectInfo.php',
        'OSS\\Model\\ExtendWormConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ExtendWormConfig.php',
        'OSS\\Model\\GetLiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelHistory.php',
        'OSS\\Model\\GetLiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelInfo.php',
        'OSS\\Model\\GetLiveChannelStatus' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelStatus.php',
        'OSS\\Model\\InitiateWormConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/InitiateWormConfig.php',
        'OSS\\Model\\LifecycleAction' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleAction.php',
        'OSS\\Model\\LifecycleConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleConfig.php',
        'OSS\\Model\\LifecycleRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleRule.php',
        'OSS\\Model\\ListMultipartUploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListMultipartUploadInfo.php',
        'OSS\\Model\\ListPartsInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListPartsInfo.php',
        'OSS\\Model\\LiveChannelConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelConfig.php',
        'OSS\\Model\\LiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelHistory.php',
        'OSS\\Model\\LiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelInfo.php',
        'OSS\\Model\\LiveChannelListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelListInfo.php',
        'OSS\\Model\\LoggingConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LoggingConfig.php',
        'OSS\\Model\\ObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectInfo.php',
        'OSS\\Model\\ObjectListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectListInfo.php',
        'OSS\\Model\\ObjectListInfoV2' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectListInfoV2.php',
        'OSS\\Model\\ObjectVersionInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectVersionInfo.php',
        'OSS\\Model\\ObjectVersionListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectVersionListInfo.php',
        'OSS\\Model\\Owner' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/Owner.php',
        'OSS\\Model\\PartInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PartInfo.php',
        'OSS\\Model\\PrefixInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PrefixInfo.php',
        'OSS\\Model\\RefererConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RefererConfig.php',
        'OSS\\Model\\RequestPaymentConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RequestPaymentConfig.php',
        'OSS\\Model\\RestoreConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RestoreConfig.php',
        'OSS\\Model\\ServerSideEncryptionConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ServerSideEncryptionConfig.php',
        'OSS\\Model\\StorageCapacityConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/StorageCapacityConfig.php',
        'OSS\\Model\\Tag' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/Tag.php',
        'OSS\\Model\\TaggingConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/TaggingConfig.php',
        'OSS\\Model\\TransferAccelerationConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/TransferAccelerationConfig.php',
        'OSS\\Model\\UploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/UploadInfo.php',
        'OSS\\Model\\VersioningConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/VersioningConfig.php',
        'OSS\\Model\\WebsiteConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/WebsiteConfig.php',
        'OSS\\Model\\WormConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/WormConfig.php',
        'OSS\\Model\\XmlConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/XmlConfig.php',
        'OSS\\OssClient' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/OssClient.php',
        'OSS\\Result\\AclResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AclResult.php',
        'OSS\\Result\\AppendResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AppendResult.php',
        'OSS\\Result\\BodyResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/BodyResult.php',
        'OSS\\Result\\CallbackResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CallbackResult.php',
        'OSS\\Result\\CopyObjectResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CopyObjectResult.php',
        'OSS\\Result\\CreateBucketCnameTokenResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CreateBucketCnameTokenResult.php',
        'OSS\\Result\\DeleteObjectVersionsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/DeleteObjectVersionsResult.php',
        'OSS\\Result\\DeleteObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/DeleteObjectsResult.php',
        'OSS\\Result\\ExistResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ExistResult.php',
        'OSS\\Result\\GetBucketCnameTokenResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketCnameTokenResult.php',
        'OSS\\Result\\GetBucketEncryptionResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketEncryptionResult.php',
        'OSS\\Result\\GetBucketInfoResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketInfoResult.php',
        'OSS\\Result\\GetBucketRequestPaymentResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketRequestPaymentResult.php',
        'OSS\\Result\\GetBucketStatResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketStatResult.php',
        'OSS\\Result\\GetBucketTagsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketTagsResult.php',
        'OSS\\Result\\GetBucketTransferAccelerationResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketTransferAccelerationResult.php',
        'OSS\\Result\\GetBucketVersioningResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketVersioningResult.php',
        'OSS\\Result\\GetBucketWormResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetBucketWormResult.php',
        'OSS\\Result\\GetCnameResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCnameResult.php',
        'OSS\\Result\\GetCorsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCorsResult.php',
        'OSS\\Result\\GetLifecycleResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLifecycleResult.php',
        'OSS\\Result\\GetLiveChannelHistoryResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelHistoryResult.php',
        'OSS\\Result\\GetLiveChannelInfoResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelInfoResult.php',
        'OSS\\Result\\GetLiveChannelStatusResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelStatusResult.php',
        'OSS\\Result\\GetLocationResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLocationResult.php',
        'OSS\\Result\\GetLoggingResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLoggingResult.php',
        'OSS\\Result\\GetRefererResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetRefererResult.php',
        'OSS\\Result\\GetStorageCapacityResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetStorageCapacityResult.php',
        'OSS\\Result\\GetWebsiteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetWebsiteResult.php',
        'OSS\\Result\\HeaderResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/HeaderResult.php',
        'OSS\\Result\\InitiateBucketWormResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/InitiateBucketWormResult.php',
        'OSS\\Result\\InitiateMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/InitiateMultipartUploadResult.php',
        'OSS\\Result\\ListBucketsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListBucketsResult.php',
        'OSS\\Result\\ListLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListLiveChannelResult.php',
        'OSS\\Result\\ListMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListMultipartUploadResult.php',
        'OSS\\Result\\ListObjectVersionsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectVersionsResult.php',
        'OSS\\Result\\ListObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectsResult.php',
        'OSS\\Result\\ListObjectsV2Result' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectsV2Result.php',
        'OSS\\Result\\ListPartsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListPartsResult.php',
        'OSS\\Result\\PutLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutLiveChannelResult.php',
        'OSS\\Result\\PutSetDeleteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutSetDeleteResult.php',
        'OSS\\Result\\Result' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/Result.php',
        'OSS\\Result\\SymlinkResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/SymlinkResult.php',
        'OSS\\Result\\UploadPartResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/UploadPartResult.php',
        'OSS\\Signer\\SignerInterface' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Signer/SignerInterface.php',
        'OSS\\Signer\\SignerV1' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Signer/SignerV1.php',
        'OSS\\Signer\\SignerV4' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Signer/SignerV4.php',
        'ParseError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/ParseError.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'SessionUpdateTimestampHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/SessionUpdateTimestampHandlerInterface.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Idn' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Idn.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Info' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Info.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
        'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
        'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => __DIR__ . '/..' . '/symfony/polyfill-intl-normalizer/Normalizer.php',
        'Symfony\\Polyfill\\Php70\\Php70' => __DIR__ . '/..' . '/symfony/polyfill-php70/Php70.php',
        'Symfony\\Polyfill\\Php72\\Php72' => __DIR__ . '/..' . '/symfony/polyfill-php72/Php72.php',
        'TypeError' => __DIR__ . '/..' . '/symfony/polyfill-php70/Resources/stubs/TypeError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5cbec1ff585afa31244d1acbf25a5001::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5cbec1ff585afa31244d1acbf25a5001::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5cbec1ff585afa31244d1acbf25a5001::$classMap;

        }, null, ClassLoader::class);
    }
}
