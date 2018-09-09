<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite802f67b6ee25a77a3e76f5a417b5777
{
    public static $files = array (
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Patchwork\\' => 10,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Patchwork\\' => 
        array (
            0 => __DIR__ . '/..' . '/patchwork/jsqueeze/src',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'Less' => 
            array (
                0 => __DIR__ . '/..' . '/oyejorge/less.php/lib',
            ),
        ),
        'C' => 
        array (
            'CssEmbed' => 
            array (
                0 => __DIR__ . '/..' . '/ptachoire/cssembed/src',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'CSSmin' => __DIR__ . '/..' . '/mrclay/minify/min/lib/CSSmin.php',
        'CssAtCharsetParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtCharsetToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtFontFaceDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtFontFaceEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtFontFaceParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtFontFaceStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtImportParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtImportToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesRulesetDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesRulesetEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesRulesetStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtKeyframesStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtMediaEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtMediaParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtMediaStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtPageDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtPageEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtPageParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtPageStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtVariablesDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtVariablesEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtVariablesParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssAtVariablesStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssCommentParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssCommentToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssCompressColorValuesMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssCompressExpressionValuesMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssCompressUnitValuesMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertFontWeightMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertHslColorsMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertLevel3AtKeyframesMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertLevel3PropertiesMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertNamedColorsMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssConvertRgbColorsMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssError' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssExpressionParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssImportImportsMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssMin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssMinifier' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssNullToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssOtbsFormatter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssParser' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRemoveCommentsMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRemoveEmptyAtBlocksMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRemoveEmptyRulesetsMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRemoveLastDelarationSemiColonMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRulesetDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRulesetEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRulesetParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssRulesetStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssSortRulesetPropertiesMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssStringParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssUrlParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssVariablesMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssVariablesMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'CssWhitesmithsFormatter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'DooDigestAuth' => __DIR__ . '/..' . '/mrclay/minify/min/lib/DooDigestAuth.php',
        'FirePHP' => __DIR__ . '/..' . '/mrclay/minify/min/lib/FirePHP.php',
        'HTTP_ConditionalGet' => __DIR__ . '/..' . '/mrclay/minify/min/lib/HTTP/ConditionalGet.php',
        'HTTP_Encoder' => __DIR__ . '/..' . '/mrclay/minify/min/lib/HTTP/Encoder.php',
        'JSCompilerContext' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JSMin' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMin.php',
        'JSMinPlus' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JSMin_UnterminatedCommentException' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMin.php',
        'JSMin_UnterminatedRegExpException' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMin.php',
        'JSMin_UnterminatedStringException' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMin.php',
        'JSNode' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JSParser' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JSToken' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JSTokenizer' => __DIR__ . '/..' . '/mrclay/minify/min/lib/JSMinPlus.php',
        'JavaScriptPacker' => __DIR__ . '/..' . '/joliclic/javascript-packer/class.JavaScriptPacker.php',
        'Minify' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify.php',
        'Minify_Build' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Build.php',
        'Minify_CSS' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/CSS.php',
        'Minify_CSS_Compressor' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/CSS/Compressor.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/CSS/UriRewriter.php',
        'Minify_CSSmin' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/CSSmin.php',
        'Minify_Cache_APC' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/APC.php',
        'Minify_Cache_File' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/File.php',
        'Minify_Cache_Memcache' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/Memcache.php',
        'Minify_Cache_WinCache' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/WinCache.php',
        'Minify_Cache_XCache' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/XCache.php',
        'Minify_Cache_ZendPlatform' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Cache/ZendPlatform.php',
        'Minify_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/ClosureCompiler.php',
        'Minify_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/ClosureCompiler.php',
        'Minify_CommentPreserver' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/CommentPreserver.php',
        'Minify_Controller_Base' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/Base.php',
        'Minify_Controller_Files' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/Files.php',
        'Minify_Controller_Groups' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/Groups.php',
        'Minify_Controller_MinApp' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/MinApp.php',
        'Minify_Controller_Page' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/Page.php',
        'Minify_Controller_Version1' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Controller/Version1.php',
        'Minify_DebugDetector' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/DebugDetector.php',
        'Minify_HTML' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/HTML.php',
        'Minify_HTML_Helper' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/HTML/Helper.php',
        'Minify_ImportProcessor' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/ImportProcessor.php',
        'Minify_JS_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/JS/ClosureCompiler.php',
        'Minify_JS_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/JS/ClosureCompiler.php',
        'Minify_Lines' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Lines.php',
        'Minify_Loader' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Loader.php',
        'Minify_Logger' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Logger.php',
        'Minify_Packer' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Packer.php',
        'Minify_Source' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/Source.php',
        'Minify_YUICompressor' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/YUICompressor.php',
        'Minify_YUI_CssCompressor' => __DIR__ . '/..' . '/mrclay/minify/min/lib/Minify/YUI/CssCompressor.php',
        'MrClay\\Cli' => __DIR__ . '/..' . '/mrclay/minify/min/lib/MrClay/Cli.php',
        'MrClay\\Cli\\Arg' => __DIR__ . '/..' . '/mrclay/minify/min/lib/MrClay/Cli/Arg.php',
        'Packager' => __DIR__ . '/..' . '/kamicane/packager/packager.php',
        'ParseMaster' => __DIR__ . '/..' . '/joliclic/javascript-packer/class.JavaScriptPacker.php',
        'Spyc' => __DIR__ . '/..' . '/kamicane/packager/libs/spyc.php',
        'YAML' => __DIR__ . '/..' . '/kamicane/packager/helpers/yaml.php',
        'aCssAtBlockEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssAtBlockStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssDeclarationToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssFormatter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssMinifierFilter' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssMinifierPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssParserPlugin' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssRulesetEndToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssRulesetStartToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'aCssToken' => __DIR__ . '/..' . '/cssmin/cssmin/cssmin-v3.0.1.php',
        'lessc' => __DIR__ . '/..' . '/oyejorge/less.php/lessc.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite802f67b6ee25a77a3e76f5a417b5777::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite802f67b6ee25a77a3e76f5a417b5777::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite802f67b6ee25a77a3e76f5a417b5777::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite802f67b6ee25a77a3e76f5a417b5777::$classMap;

        }, null, ClassLoader::class);
    }
}