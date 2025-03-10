<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf643fffde4574d8e0af902be517c1940
{
    public static $files = array (
        '3109cb1a231dcd04bee1f9f620d46975' => __DIR__ . '/..' . '/paragonie/sodium_compat/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'P' => 
        array (
            'Pusher\\' => 7,
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Mehedi\\ProductWatcher\\' => 22,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'Pusher\\' => 
        array (
            0 => __DIR__ . '/..' . '/pusher/pusher-php-server/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Mehedi\\ProductWatcher\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mehedi\\ProductWatcher\\Broadcaster\\Broadcaster' => __DIR__ . '/../..' . '/includes/Broadcaster/Broadcaster.php',
        'Mehedi\\ProductWatcher\\Broadcaster\\BroadcasterInterface' => __DIR__ . '/../..' . '/includes/Broadcaster/BroadcasterInterface.php',
        'Mehedi\\ProductWatcher\\Broadcaster\\Pusher' => __DIR__ . '/../..' . '/includes/Broadcaster/Pusher.php',
        'Mehedi\\ProductWatcher\\Core\\Admin' => __DIR__ . '/../..' . '/includes/Core/Admin.php',
        'Mehedi\\ProductWatcher\\Core\\FrontEnd' => __DIR__ . '/../..' . '/includes/Core/FrontEnd.php',
        'Mehedi\\ProductWatcher\\Core\\Settings' => __DIR__ . '/../..' . '/includes/Core/Settings.php',
        'Mehedi\\ProductWatcher\\Gateway\\Fake' => __DIR__ . '/../..' . '/includes/Gateway/Fake.php',
        'Mehedi\\ProductWatcher\\Gateway\\Gateway' => __DIR__ . '/../..' . '/includes/Gateway/Gateway.php',
        'Mehedi\\ProductWatcher\\Gateway\\GatewayInterface' => __DIR__ . '/../..' . '/includes/Gateway/GatewayInterface.php',
        'Mehedi\\ProductWatcher\\Gateway\\Pusher' => __DIR__ . '/../..' . '/includes/Gateway/Pusher.php',
        'Mehedi\\ProductWatcher\\ProductWatcher' => __DIR__ . '/../..' . '/includes/ProductWatcher.php',
        'Mehedi\\ProductWatcher\\Rest\\Auth' => __DIR__ . '/../..' . '/includes/Rest/Auth.php',
        'Mehedi\\ProductWatcher\\Rest\\Gateway' => __DIR__ . '/../..' . '/includes/Rest/Gateway.php',
        'Mehedi\\ProductWatcher\\Rest\\Integrations' => __DIR__ . '/../..' . '/includes/Rest/Integrations.php',
        'Mehedi\\ProductWatcher\\Rest\\Rest' => __DIR__ . '/../..' . '/includes/Rest/Rest.php',
        'Mehedi\\ProductWatcher\\Rest\\RestController' => __DIR__ . '/../..' . '/includes/Rest/RestController.php',
        'Mehedi\\ProductWatcher\\Rest\\Settings' => __DIR__ . '/../..' . '/includes/Rest/Settings.php',
        'Mehedi\\ProductWatcher\\Settings\\Gateway' => __DIR__ . '/../..' . '/includes/Settings/Gateway.php',
        'Mehedi\\ProductWatcher\\Settings\\Integration' => __DIR__ . '/../..' . '/includes/Settings/Integration.php',
        'Mehedi\\ProductWatcher\\Traits\\Singleton' => __DIR__ . '/../..' . '/includes/Traits/Singleton.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/DummyTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'Pusher\\Pusher' => __DIR__ . '/..' . '/pusher/pusher-php-server/src/Pusher.php',
        'Pusher\\PusherCrypto' => __DIR__ . '/..' . '/pusher/pusher-php-server/src/PusherCrypto.php',
        'Pusher\\PusherException' => __DIR__ . '/..' . '/pusher/pusher-php-server/src/PusherException.php',
        'Pusher\\PusherInstance' => __DIR__ . '/..' . '/pusher/pusher-php-server/src/PusherInstance.php',
        'Pusher\\Webhook' => __DIR__ . '/..' . '/pusher/pusher-php-server/src/Webhook.php',
        'Rakit\\Validation\\Attribute' => __DIR__ . '/..' . '/rakit/validation/src/Attribute.php',
        'Rakit\\Validation\\ErrorBag' => __DIR__ . '/..' . '/rakit/validation/src/ErrorBag.php',
        'Rakit\\Validation\\Helper' => __DIR__ . '/..' . '/rakit/validation/src/Helper.php',
        'Rakit\\Validation\\MimeTypeGuesser' => __DIR__ . '/..' . '/rakit/validation/src/MimeTypeGuesser.php',
        'Rakit\\Validation\\MissingRequiredParameterException' => __DIR__ . '/..' . '/rakit/validation/src/MissingRequiredParameterException.php',
        'Rakit\\Validation\\Rule' => __DIR__ . '/..' . '/rakit/validation/src/Rule.php',
        'Rakit\\Validation\\RuleNotFoundException' => __DIR__ . '/..' . '/rakit/validation/src/RuleNotFoundException.php',
        'Rakit\\Validation\\RuleQuashException' => __DIR__ . '/..' . '/rakit/validation/src/RuleQuashException.php',
        'Rakit\\Validation\\Rules\\Accepted' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Accepted.php',
        'Rakit\\Validation\\Rules\\After' => __DIR__ . '/..' . '/rakit/validation/src/Rules/After.php',
        'Rakit\\Validation\\Rules\\Alpha' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Alpha.php',
        'Rakit\\Validation\\Rules\\AlphaDash' => __DIR__ . '/..' . '/rakit/validation/src/Rules/AlphaDash.php',
        'Rakit\\Validation\\Rules\\AlphaNum' => __DIR__ . '/..' . '/rakit/validation/src/Rules/AlphaNum.php',
        'Rakit\\Validation\\Rules\\AlphaSpaces' => __DIR__ . '/..' . '/rakit/validation/src/Rules/AlphaSpaces.php',
        'Rakit\\Validation\\Rules\\Before' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Before.php',
        'Rakit\\Validation\\Rules\\Between' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Between.php',
        'Rakit\\Validation\\Rules\\Boolean' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Boolean.php',
        'Rakit\\Validation\\Rules\\Callback' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Callback.php',
        'Rakit\\Validation\\Rules\\Date' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Date.php',
        'Rakit\\Validation\\Rules\\Defaults' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Defaults.php',
        'Rakit\\Validation\\Rules\\Different' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Different.php',
        'Rakit\\Validation\\Rules\\Digits' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Digits.php',
        'Rakit\\Validation\\Rules\\DigitsBetween' => __DIR__ . '/..' . '/rakit/validation/src/Rules/DigitsBetween.php',
        'Rakit\\Validation\\Rules\\Email' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Email.php',
        'Rakit\\Validation\\Rules\\Extension' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Extension.php',
        'Rakit\\Validation\\Rules\\In' => __DIR__ . '/..' . '/rakit/validation/src/Rules/In.php',
        'Rakit\\Validation\\Rules\\Integer' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Integer.php',
        'Rakit\\Validation\\Rules\\Interfaces\\BeforeValidate' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Interfaces/BeforeValidate.php',
        'Rakit\\Validation\\Rules\\Interfaces\\ModifyValue' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Interfaces/ModifyValue.php',
        'Rakit\\Validation\\Rules\\Ip' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Ip.php',
        'Rakit\\Validation\\Rules\\Ipv4' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Ipv4.php',
        'Rakit\\Validation\\Rules\\Ipv6' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Ipv6.php',
        'Rakit\\Validation\\Rules\\Json' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Json.php',
        'Rakit\\Validation\\Rules\\Lowercase' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Lowercase.php',
        'Rakit\\Validation\\Rules\\Max' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Max.php',
        'Rakit\\Validation\\Rules\\Mimes' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Mimes.php',
        'Rakit\\Validation\\Rules\\Min' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Min.php',
        'Rakit\\Validation\\Rules\\NotIn' => __DIR__ . '/..' . '/rakit/validation/src/Rules/NotIn.php',
        'Rakit\\Validation\\Rules\\Nullable' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Nullable.php',
        'Rakit\\Validation\\Rules\\Numeric' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Numeric.php',
        'Rakit\\Validation\\Rules\\Present' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Present.php',
        'Rakit\\Validation\\Rules\\Regex' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Regex.php',
        'Rakit\\Validation\\Rules\\Required' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Required.php',
        'Rakit\\Validation\\Rules\\RequiredIf' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredIf.php',
        'Rakit\\Validation\\Rules\\RequiredUnless' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredUnless.php',
        'Rakit\\Validation\\Rules\\RequiredWith' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredWith.php',
        'Rakit\\Validation\\Rules\\RequiredWithAll' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredWithAll.php',
        'Rakit\\Validation\\Rules\\RequiredWithout' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredWithout.php',
        'Rakit\\Validation\\Rules\\RequiredWithoutAll' => __DIR__ . '/..' . '/rakit/validation/src/Rules/RequiredWithoutAll.php',
        'Rakit\\Validation\\Rules\\Same' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Same.php',
        'Rakit\\Validation\\Rules\\Traits\\DateUtilsTrait' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Traits/DateUtilsTrait.php',
        'Rakit\\Validation\\Rules\\Traits\\FileTrait' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Traits/FileTrait.php',
        'Rakit\\Validation\\Rules\\Traits\\SizeTrait' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Traits/SizeTrait.php',
        'Rakit\\Validation\\Rules\\TypeArray' => __DIR__ . '/..' . '/rakit/validation/src/Rules/TypeArray.php',
        'Rakit\\Validation\\Rules\\UploadedFile' => __DIR__ . '/..' . '/rakit/validation/src/Rules/UploadedFile.php',
        'Rakit\\Validation\\Rules\\Uppercase' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Uppercase.php',
        'Rakit\\Validation\\Rules\\Url' => __DIR__ . '/..' . '/rakit/validation/src/Rules/Url.php',
        'Rakit\\Validation\\Traits\\MessagesTrait' => __DIR__ . '/..' . '/rakit/validation/src/Traits/MessagesTrait.php',
        'Rakit\\Validation\\Traits\\TranslationsTrait' => __DIR__ . '/..' . '/rakit/validation/src/Traits/TranslationsTrait.php',
        'Rakit\\Validation\\Validation' => __DIR__ . '/..' . '/rakit/validation/src/Validation.php',
        'Rakit\\Validation\\Validator' => __DIR__ . '/..' . '/rakit/validation/src/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf643fffde4574d8e0af902be517c1940::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf643fffde4574d8e0af902be517c1940::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf643fffde4574d8e0af902be517c1940::$classMap;

        }, null, ClassLoader::class);
    }
}
