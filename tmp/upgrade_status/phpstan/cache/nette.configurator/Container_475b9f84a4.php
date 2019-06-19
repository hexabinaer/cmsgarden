<?php
// source: /var/www/html/d8.cms-garden/vendor/phpstan/phpstan/conf/config.neon
// source: /var/www/html/d8.cms-garden/web/../tmp/upgrade_status/deprecation_testing.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_475b9f84a4 extends Nette\DI\Container
{
	protected $tags = [
		'phpstan.broker.propertiesClassReflectionExtension' => ['035' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'050' => true,
			'051' => true,
			'052' => true,
			'053' => true,
			'054' => true,
			'056' => true,
			'057' => true,
			'058' => true,
			'059' => true,
			'060' => true,
			'061' => true,
			'062' => true,
			'063' => true,
			'064' => true,
			'065' => true,
			'066' => true,
			'067' => true,
			'069' => true,
			'070' => true,
			'071' => true,
			'072' => true,
			'073' => true,
			'074' => true,
			'075' => true,
			'078' => true,
			'079' => true,
			'080' => true,
			'081' => true,
			'082' => true,
			'083' => true,
			'084' => true,
			'085' => true,
			'086' => true,
			'087' => true,
			'088' => true,
			'089' => true,
			'0109' => true,
			'0110' => true,
			'0111' => true,
			'0112' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'055' => true,
			'068' => true,
			'076' => true,
			'077' => true,
			'090' => true,
			'091' => true,
			'092' => true,
			'093' => true,
			'094' => true,
			'095' => true,
			'096' => true,
			'097' => true,
			'098' => true,
			'099' => true,
			'0100' => true,
			'0101' => true,
			'0102' => true,
			'0103' => true,
			'0104' => true,
			'0105' => true,
			'0106' => true,
			'0107' => true,
			'0108' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => ['075' => true, '0114' => true, '0115' => true],
		'phpstan.rules.rule' => [
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.11' => true,
			'rules.12' => true,
			'rules.13' => true,
			'rules.14' => true,
			'rules.2' => true,
			'rules.3' => true,
			'rules.4' => true,
			'rules.5' => true,
			'rules.6' => true,
			'rules.7' => true,
			'rules.8' => true,
			'rules.9' => true,
		],
	];

	protected $types = ['container' => 'Nette\DI\Container', 'relativePathHelper' => 'PHPStan\File\RelativePathHelper'];

	protected $aliases = [];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			2 => [
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
			],
		],
		'PHPStan\Rules\Classes\PluginManagerInspectionRule' => [2 => ['rules.0']],
		'PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule' => [2 => ['rules.1']],
		'PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule' => [2 => ['rules.2']],
		'PHPStan\Rules\Drupal\PluginManager\AbstractPluginManagerRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule' => [2 => ['rules.3']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [2 => ['rules.4']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [2 => ['rules.5']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [2 => ['rules.6']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [2 => ['rules.7']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [2 => ['rules.8']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [2 => ['rules.9']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [2 => ['rules.10']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [2 => ['rules.11']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [2 => ['rules.12']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [2 => ['rules.13']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [2 => ['rules.14']],
		'PhpParser\BuilderFactory' => [['01']],
		'PhpParser\Lexer' => [['02']],
		'PhpParser\NodeTraverserInterface' => [['03']],
		'PhpParser\NodeTraverser' => [['03']],
		'PhpParser\NodeVisitorAbstract' => [['04']],
		'PhpParser\NodeVisitor' => [['04']],
		'PhpParser\NodeVisitor\NameResolver' => [['04']],
		'PhpParser\ParserAbstract' => [['05']],
		'PhpParser\Parser' => [['05']],
		'PhpParser\Parser\Php7' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['06']],
		'PhpParser\PrettyPrinter\Standard' => [['06']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['07']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['08']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['09']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['010']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['011']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['012']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['013']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['014']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['015']],
		'PHPStan\Analyser\Analyser' => [['016']],
		'PHPStan\Analyser\ScopeFactory' => [['017']],
		'PHPStan\Analyser\NodeScopeResolver' => [['018']],
		'PHPStan\Cache\Cache' => [['019']],
		'PHPStan\Command\AnalyseApplication' => [['020']],
		'PHPStan\Dependency\DependencyDumper' => [['021']],
		'PHPStan\Dependency\DependencyResolver' => [['022']],
		'PHPStan\DependencyInjection\Container' => [['023']],
		'PHPStan\File\FileHelper' => [['024']],
		'PHPStan\File\FileExcluder' => [['025']],
		'PHPStan\File\FileFinder' => [['026']],
		'PHPStan\Parser\Parser' => [['027'], 2 => [1 => 'directParser']],
		'PHPStan\Parser\CachedParser' => [['027']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['028']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['029']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [['030', '032']],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['030']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [['031', '032', '033', '035']],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['031']],
		'PHPStan\Reflection\BrokerAwareExtension' => [['032', '035', '073', '0110']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['032']],
		'PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension' => [['033']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['034']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['035']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['036']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['037']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['038']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['039']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['040']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['041']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['042']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['043']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['044']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['045']],
		'PHPStan\Rules\RegistryFactory' => [['046']],
		'PHPStan\Rules\RuleLevelHelper' => [['047']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['048']],
		'PHPStan\Type\FileTypeMapper' => [['049']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'050',
				'051',
				'052',
				'053',
				'054',
				'056',
				'057',
				'058',
				'059',
				'060',
				'061',
				'062',
				'063',
				'064',
				'065',
				'066',
				'067',
				'069',
				'070',
				'071',
				'072',
				'073',
				'074',
				'075',
				'078',
				'079',
				'080',
				'081',
				'082',
				'083',
				'084',
				'085',
				'086',
				'087',
				'088',
				'089',
				'0109',
				'0110',
				'0111',
				'0112',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['050']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['051']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['052']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['053']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['054']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'055',
				'068',
				'076',
				'077',
				'090',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'055',
				'068',
				'076',
				'077',
				'090',
				'091',
				'092',
				'093',
				'094',
				'095',
				'096',
				'097',
				'098',
				'099',
				'0100',
				'0101',
				'0102',
				'0103',
				'0104',
				'0105',
				'0106',
				'0107',
				'0108',
				'0110',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['055']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['056']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['057']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['058']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['059']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['060']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['061']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['062']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['063']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['064']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['065']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['066']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['067']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['068']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['069']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['070']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['071']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['072']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['073']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['074']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [['075', '0114', '0115']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['075']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['076']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['077']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['078']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['079']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['080']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['081']],
		'PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension' => [['082']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['083']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['084']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['085']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['086']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['087']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['088']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['089']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['090']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['091']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['092']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['093']],
		'PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension' => [['094']],
		'PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension' => [['095']],
		'PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension' => [['096']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['097']],
		'PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension' => [['098']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['099']],
		'PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension' => [['0100']],
		'PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension' => [['0101']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0102']],
		'PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension' => [['0103']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0104']],
		'PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension' => [['0105']],
		'PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension' => [['0106']],
		'PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension' => [['0107']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0108']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0109']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0110']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0111']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0112']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [['relativePathHelper'], 2 => [1 => 'simpleRelativePathHelper']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\DirectParser' => [2 => ['directParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\PhpDoc\TypeNodeResolverFactory' => [['typeNodeResolverFactory']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.prettyJson',
			],
		],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Drupal\ServiceMapFactoryInterface' => [['drupal.serviceMapFactory']],
		'PHPStan\Drupal\ServiceMap' => [['0113']],
		'PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension' => [['0114']],
		'PHPStan\Type\ServiceDynamicReturnTypeExtension' => [['0115']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrap' => '/var/www/html/d8.cms-garden/vendor/mglaman/phpstan-drupal/phpstan-bootstrap.php',
			'excludes_analyse' => ['*.api.php', '*/tests/Drupal/Tests/Listeners/Legacy/*', '*/tests/fixtures/*.php'],
			'autoload_directories' => [],
			'autoload_files' => [],
			'level' => null,
			'paths' => [],
			'featureToggles' => ['subtractableTypes' => false, 'validateParameters' => false],
			'fileExtensions' => ['php', 'module', 'theme', 'inc'],
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkClassCaseSensitivity' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => false,
			'checkNullables' => false,
			'checkThisOnly' => true,
			'checkUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportStaticMethodSignatures' => false,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'polluteCatchScopeWithTryAssignments' => false,
			'reportMagicMethods' => false,
			'reportMagicProperties' => false,
			'ignoreErrors' => [
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 512, 'nodesByStringCountMax' => 512],
			'reportUnmatchedIgnoredErrors' => false,
			'scopeClass' => 'PHPStan\Analyser\Scope',
			'universalObjectCratesClasses' => ['stdClass', 'SimpleXMLElement'],
			'earlyTerminatingMethodCalls' => [],
			'memoryLimitFile' => '../tmp/upgrade_status/phpstan/.memory_limit',
			'benchmarkFile' => null,
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
			],
			'customRulesetUsed' => true,
			'tmpDir' => '../tmp/upgrade_status/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '../tmp/upgrade_status/phpstan',
			'rootDir' => '/var/www/html/d8.cms-garden/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/var/www/html/d8.cms-garden/web',
			'cliArgumentsVariablesRegistered' => false,
			'__parametersSchema' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
				"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
					'bootstrap' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'excludes_analyse' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_directories' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'autoload_files' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'level' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\AnyOf', [
						"\x00Nette\\Schema\\Elements\\AnyOf\x00set" => [
							Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							null,
						],
						"\x00Nette\\Schema\\Elements\\AnyOf\x00required" => true,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00default" => null,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00before" => null,
						"\x00Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
					]),
					'paths' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'featureToggles' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'fileExtensions' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueCheckTypeFunctionCall' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueInstanceof' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkAlwaysTrueStrictComparison' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkClassCaseSensitivity' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionArgumentTypes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkFunctionNameCase' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkArgumentsPassedByReference' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkMaybeUndefinedVariables' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkNullables' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkThisOnly' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkUnionTypes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkExplicitMixedMissingReturn' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'checkPhpDocMissingReturn' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybes' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMaybesInMethodSignatures' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportStaticMethodSignatures' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithLoopInitialAssignments' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteScopeWithAlwaysIterableForeach' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'polluteCatchScopeWithTryAssignments' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicMethods' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'reportMagicProperties' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'ignoreErrors' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\AnyOf', [
							"\x00Nette\\Schema\\Elements\\AnyOf\x00set" => [
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
									"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
									"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
								]),
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
									"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'path' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
								Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
									"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
										'message' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
										'paths' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
											"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
											"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
												"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
												"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
												"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
												"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
												"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
												"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
											]),
											"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
											"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
											"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
											"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
											"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
										]),
									],
									"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
									"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
									"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
									"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
									"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
								]),
							],
							"\x00Nette\\Schema\\Elements\\AnyOf\x00required" => true,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00default" => null,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00before" => null,
							"\x00Nette\\Schema\\Elements\\AnyOf\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\AnyOf\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'internalErrorsCountLimit' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cache' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Structure', [
						"\x00Nette\\Schema\\Elements\\Structure\x00items" => [
							'nodesByFileCountMax' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							'nodesByStringCountMax' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'int',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
						],
						"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
					]),
					'reportUnmatchedIgnoredErrors' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'scopeClass' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'universalObjectCratesClasses' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'earlyTerminatingMethodCalls' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'array',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
								"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
								"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
								"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
								"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
								"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
								"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
							]),
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'memoryLimitFile' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'benchmarkFile' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string|null',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'dynamicConstantNames' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'list',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
							"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
							"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
							"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
							"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
							"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
							"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
						]),
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'customRulesetUsed' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'rootDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tmpDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'currentWorkingDirectory' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'cliArgumentsVariablesRegistered' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'debugMode' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'productionMode' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'bool',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'tempDir' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'string',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
					'__parametersSchema' => Nette\PhpGenerator\Helpers::createObject('Nette\Schema\Elements\Type', [
						"\x00Nette\\Schema\\Elements\\Type\x00type" => 'Nette\Schema\Schema',
						"\x00Nette\\Schema\\Elements\\Type\x00items" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00range" => [null, null],
						"\x00Nette\\Schema\\Elements\\Type\x00required" => true,
						"\x00Nette\\Schema\\Elements\\Type\x00default" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00before" => null,
						"\x00Nette\\Schema\\Elements\\Type\x00asserts" => [],
						"\x00Nette\\Schema\\Elements\\Type\x00castTo" => null,
					]),
				],
				"\x00Nette\\Schema\\Elements\\Structure\x00otherItems" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00range" => [null, null],
				"\x00Nette\\Schema\\Elements\\Structure\x00required" => true,
				"\x00Nette\\Schema\\Elements\\Structure\x00default" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00before" => null,
				"\x00Nette\\Schema\\Elements\\Structure\x00asserts" => [],
				"\x00Nette\\Schema\\Elements\\Structure\x00castTo" => 'object',
			]),
			'drupalRoot' => '/var/www/html/d8.cms-garden/web',
			'drupal' => [
				'entityTypeStorageMapping' => [
					'node' => 'Drupal\node\NodeStorage',
					'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
					'user' => 'Drupal\user\UserStorage',
				],
			],
			'drupalServiceMap' => [
				'cache_context.ip' => ['class' => 'Drupal\Core\Cache\Context\IpCacheContext', 'arguments' => ['request_stack']],
				'cache_context.headers' => ['class' => 'Drupal\Core\Cache\Context\HeadersCacheContext', 'arguments' => ['request_stack']],
				'cache_context.cookies' => ['class' => 'Drupal\Core\Cache\Context\CookiesCacheContext', 'arguments' => ['request_stack']],
				'cache_context.session' => ['class' => 'Drupal\Core\Cache\Context\SessionCacheContext', 'arguments' => ['request_stack']],
				'cache_context.session.exists' => [
					'class' => 'Drupal\Core\Cache\Context\SessionExistsCacheContext',
					'arguments' => ['session_configuration', 'request_stack'],
				],
				'cache_context.request_format' => [
					'class' => 'Drupal\Core\Cache\Context\RequestFormatCacheContext',
					'arguments' => ['request_stack'],
				],
				'cache_context.url' => ['class' => 'Drupal\Core\Cache\Context\UrlCacheContext', 'arguments' => ['request_stack']],
				'cache_context.url.site' => ['class' => 'Drupal\Core\Cache\Context\SiteCacheContext', 'arguments' => ['request_stack']],
				'cache_context.url.path' => ['class' => 'Drupal\Core\Cache\Context\PathCacheContext', 'arguments' => ['request_stack']],
				'cache_context.url.path.parent' => [
					'class' => 'Drupal\Core\Cache\Context\PathParentCacheContext',
					'arguments' => ['request_stack'],
				],
				'cache_context.url.path.is_front' => [
					'class' => 'Drupal\Core\Cache\Context\IsFrontPathCacheContext',
					'arguments' => ['path.matcher'],
				],
				'cache_context.url.query_args' => [
					'class' => 'Drupal\Core\Cache\Context\QueryArgsCacheContext',
					'arguments' => ['request_stack'],
				],
				'cache_context.url.query_args.pagers' => ['class' => 'Drupal\Core\Cache\Context\PagersCacheContext', 'arguments' => ['request_stack']],
				'cache_context.route' => [
					'class' => 'Drupal\Core\Cache\Context\RouteCacheContext',
					'arguments' => ['current_route_match'],
				],
				'cache_context.route.name' => [
					'class' => 'Drupal\Core\Cache\Context\RouteNameCacheContext',
					'arguments' => ['current_route_match'],
				],
				'cache_context.route.menu_active_trails' => ['class' => 'Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext'],
				'cache_context.user' => ['class' => 'Drupal\Core\Cache\Context\UserCacheContext', 'arguments' => ['current_user']],
				'cache_context.user.permissions' => [
					'class' => 'Drupal\Core\Cache\Context\AccountPermissionsCacheContext',
					'arguments' => ['current_user', 'user_permissions_hash_generator'],
				],
				'cache_context.user.roles' => [
					'class' => 'Drupal\Core\Cache\Context\UserRolesCacheContext',
					'arguments' => ['current_user'],
				],
				'cache_context.user.is_super_user' => [
					'class' => 'Drupal\Core\Cache\Context\IsSuperUserCacheContext',
					'arguments' => ['current_user'],
				],
				'cache_context.languages' => [
					'class' => 'Drupal\Core\Cache\Context\LanguagesCacheContext',
					'arguments' => ['language_manager'],
				],
				'cache_context.theme' => ['class' => 'Drupal\Core\Cache\Context\ThemeCacheContext', 'arguments' => ['theme.manager']],
				'cache_context.timezone' => ['class' => 'Drupal\Core\Cache\Context\TimeZoneCacheContext'],
				'cache_factory' => [
					'class' => 'Drupal\Core\Cache\CacheFactory',
					'arguments' => ['settings', '%cache_default_bin_backends%'],
				],
				'cache_contexts_manager' => [
					'class' => 'Drupal\Core\Cache\Context\CacheContextsManager',
					'arguments' => ['service_container', '%cache_contexts%'],
				],
				'cache_tags.invalidator' => ['parent' => 'container.trait', 'class' => 'Drupal\Core\Cache\CacheTagsInvalidator'],
				'cache_tags.invalidator.checksum' => ['class' => 'Drupal\Core\Cache\DatabaseCacheTagsChecksum', 'arguments' => ['database']],
				'cache.backend.chainedfast' => ['class' => 'Drupal\Core\Cache\ChainedFastBackendFactory', 'arguments' => ['settings']],
				'cache.backend.database' => [
					'class' => 'Drupal\Core\Cache\DatabaseBackendFactory',
					'arguments' => ['database', 'cache_tags.invalidator.checksum', 'settings'],
				],
				'cache.backend.apcu' => [
					'class' => 'Drupal\Core\Cache\ApcuBackendFactory',
					'arguments' => ['app.root', 'site.path', 'cache_tags.invalidator.checksum'],
				],
				'cache.backend.php' => [
					'class' => 'Drupal\Core\Cache\PhpBackendFactory',
					'arguments' => ['cache_tags.invalidator.checksum'],
				],
				'cache.backend.memory' => ['class' => 'Drupal\Core\Cache\MemoryBackendFactory'],
				'cache.static' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['static']],
				'cache.bootstrap' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['bootstrap']],
				'cache.config' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['config']],
				'cache.default' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['default']],
				'cache.entity' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['entity']],
				'cache.menu' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['menu']],
				'cache.render' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['render']],
				'cache.data' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['data']],
				'cache.discovery' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['discovery']],
				'cache_router_rebuild_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber'],
				'page_cache_request_policy' => [
					'class' => 'Drupal\Core\PageCache\DefaultRequestPolicy',
					'arguments' => ['session_configuration'],
				],
				'page_cache_response_policy' => ['class' => 'Drupal\Core\PageCache\ChainResponsePolicy', 'lazy' => true],
				'page_cache_kill_switch' => ['class' => 'Drupal\Core\PageCache\ResponsePolicy\KillSwitch'],
				'page_cache_no_cache_routes' => [
					'class' => 'Drupal\Core\PageCache\ResponsePolicy\DenyNoCacheRoutes',
					'arguments' => ['current_route_match'],
					'public' => false,
				],
				'page_cache_no_server_error' => ['class' => 'Drupal\Core\PageCache\ResponsePolicy\NoServerError', 'public' => false],
				'config.manager' => [
					'class' => 'Drupal\Core\Config\ConfigManager',
					'arguments' => [
						'entity_type.manager',
						'config.factory',
						'config.typed',
						'string_translation',
						'config.storage',
						'event_dispatcher',
						'entity.repository',
					],
				],
				'config.factory' => [
					'class' => 'Drupal\Core\Config\ConfigFactory',
					'arguments' => ['config.storage', 'event_dispatcher', 'config.typed'],
				],
				'config.importer_subscriber' => ['class' => 'Drupal\Core\Config\Importer\FinalMissingContentSubscriber'],
				'config.installer' => [
					'class' => 'Drupal\Core\Config\ConfigInstaller',
					'arguments' => [
						'config.factory',
						'config.storage',
						'config.typed',
						'config.manager',
						'event_dispatcher',
						'%install_profile%',
					],
					'lazy' => true,
				],
				'config.storage' => [
					'class' => 'Drupal\Core\Config\CachedStorage',
					'arguments' => ['config.storage.active', 'cache.config'],
				],
				'config.storage.active' => [
					'class' => 'Drupal\Core\Config\DatabaseStorage',
					'arguments' => ['database', 'config'],
					'public' => false,
				],
				'config.storage.staging' => ['class' => 'Drupal\Core\Config\FileStorage'],
				'config.storage.sync' => ['alias' => 'config.storage.staging'],
				'config.storage.snapshot' => [
					'class' => 'Drupal\Core\Config\DatabaseStorage',
					'arguments' => ['database', 'config_snapshot'],
				],
				'config.storage.schema' => [
					'class' => 'Drupal\Core\Config\ExtensionInstallStorage',
					'arguments' => ['config.storage', 'config/schema', '', '1', '%install_profile%'],
				],
				'config.typed' => [
					'class' => 'Drupal\Core\Config\TypedConfigManager',
					'arguments' => [
						'config.storage',
						'config.storage.schema',
						'cache.discovery',
						'module_handler',
						'class_resolver',
					],
				],
				'context.handler' => ['class' => 'Drupal\Core\Plugin\Context\ContextHandler'],
				'context.repository' => [
					'class' => 'Drupal\Core\Plugin\Context\LazyContextRepository',
					'arguments' => ['service_container'],
				],
				'cron' => [
					'class' => 'Drupal\Core\Cron',
					'arguments' => [
						'module_handler',
						'lock',
						'queue',
						'state',
						'account_switcher',
						'logger.channel.cron',
						'plugin.manager.queue_worker',
						'datetime.time',
					],
					'lazy' => true,
				],
				'diff.formatter' => ['class' => 'Drupal\Core\Diff\DiffFormatter', 'arguments' => ['config.factory']],
				'database' => ['class' => 'Drupal\Core\Database\Connection', 'arguments' => ['default']],
				'database.replica' => ['class' => 'Drupal\Core\Database\Connection', 'arguments' => ['replica']],
				'database.replica_kill_switch' => [
					'class' => 'Drupal\Core\Database\ReplicaKillSwitch',
					'arguments' => ['settings', 'datetime.time', 'session'],
				],
				'datetime.time' => ['class' => 'Drupal\Component\Datetime\Time', 'arguments' => ['request_stack']],
				'file_system' => [
					'class' => 'Drupal\Core\File\FileSystem',
					'arguments' => ['stream_wrapper_manager', 'settings', 'logger.channel.file'],
				],
				'form_builder' => [
					'class' => 'Drupal\Core\Form\FormBuilder',
					'arguments' => [
						'form_validator',
						'form_submitter',
						'form_cache',
						'module_handler',
						'event_dispatcher',
						'request_stack',
						'class_resolver',
						'element_info',
						'theme.manager',
						'?csrf_token',
					],
				],
				'form_validator' => [
					'class' => 'Drupal\Core\Form\FormValidator',
					'arguments' => [
						'request_stack',
						'string_translation',
						'csrf_token',
						'logger.channel.form',
						'form_error_handler',
					],
				],
				'form_submitter' => [
					'class' => 'Drupal\Core\Form\FormSubmitter',
					'arguments' => ['request_stack', 'url_generator'],
				],
				'form_error_handler' => ['class' => 'Drupal\Core\Form\FormErrorHandler'],
				'form_cache' => [
					'class' => 'Drupal\Core\Form\FormCache',
					'arguments' => [
						'app.root',
						'keyvalue.expirable',
						'module_handler',
						'current_user',
						'csrf_token',
						'logger.channel.form',
						'request_stack',
						'page_cache_request_policy',
					],
					'public' => false,
				],
				'keyvalue' => [
					'class' => 'Drupal\Core\KeyValueStore\KeyValueFactory',
					'arguments' => ['service_container', '%factory.keyvalue%'],
				],
				'keyvalue.database' => [
					'class' => 'Drupal\Core\KeyValueStore\KeyValueDatabaseFactory',
					'arguments' => ['serialization.phpserialize', 'database'],
				],
				'keyvalue.expirable' => [
					'class' => 'Drupal\Core\KeyValueStore\KeyValueExpirableFactory',
					'arguments' => ['service_container', '%factory.keyvalue.expirable%'],
				],
				'keyvalue.expirable.database' => [
					'class' => 'Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory',
					'arguments' => ['serialization.phpserialize', 'database'],
				],
				'logger.factory' => ['class' => 'Drupal\Core\Logger\LoggerChannelFactory', 'parent' => 'container.trait'],
				'logger.channel_base' => ['abstract' => true, 'class' => 'Drupal\Core\Logger\LoggerChannel'],
				'logger.channel.default' => ['parent' => 'logger.channel_base', 'arguments' => ['system']],
				'logger.channel.php' => ['parent' => 'logger.channel_base', 'arguments' => ['php']],
				'logger.channel.image' => ['parent' => 'logger.channel_base', 'arguments' => ['image']],
				'logger.channel.cron' => ['parent' => 'logger.channel_base', 'arguments' => ['cron']],
				'logger.channel.file' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['file']],
				'logger.channel.form' => ['parent' => 'logger.channel_base', 'arguments' => ['form']],
				'logger.log_message_parser' => ['class' => 'Drupal\Core\Logger\LogMessageParser'],
				'serialization.json' => ['class' => 'Drupal\Component\Serialization\Json'],
				'serialization.phpserialize' => ['class' => 'Drupal\Component\Serialization\PhpSerialize'],
				'serialization.yaml' => ['class' => 'Drupal\Component\Serialization\Yaml'],
				'settings' => ['class' => 'Drupal\Core\Site\Settings'],
				'state' => ['class' => 'Drupal\Core\State\State', 'arguments' => ['keyvalue']],
				'queue' => ['class' => 'Drupal\Core\Queue\QueueFactory', 'arguments' => ['settings']],
				'queue.database' => ['class' => 'Drupal\Core\Queue\QueueDatabaseFactory', 'arguments' => ['database']],
				'path.alias_whitelist' => [
					'class' => 'Drupal\Core\Path\AliasWhitelist',
					'arguments' => ['path_alias_whitelist', 'cache.bootstrap', 'lock', 'state', 'path.alias_storage'],
				],
				'path.alias_manager' => [
					'class' => 'Drupal\Core\Path\AliasManager',
					'arguments' => ['path.alias_storage', 'path.alias_whitelist', 'language_manager', 'cache.data'],
				],
				'path.current' => ['class' => 'Drupal\Core\Path\CurrentPathStack', 'arguments' => ['request_stack']],
				'http_handler_stack' => ['class' => 'GuzzleHttp\HandlerStack', 'public' => false],
				'http_handler_stack_configurator' => [
					'class' => 'Drupal\Core\Http\HandlerStackConfigurator',
					'public' => false,
					'arguments' => ['service_container'],
				],
				'http_client' => ['class' => 'GuzzleHttp\Client'],
				'http_client_factory' => ['class' => 'Drupal\Core\Http\ClientFactory', 'arguments' => ['http_handler_stack']],
				'plugin.manager.link_relation_type' => [
					'class' => '\Drupal\Core\Http\LinkRelationTypeManager',
					'arguments' => ['app.root', 'module_handler', 'cache.discovery'],
				],
				'theme.negotiator' => [
					'class' => 'Drupal\Core\Theme\ThemeNegotiator',
					'arguments' => ['access_check.theme', 'class_resolver'],
				],
				'theme.negotiator.default' => ['class' => 'Drupal\Core\Theme\DefaultNegotiator', 'arguments' => ['config.factory']],
				'theme.negotiator.ajax_base_page' => [
					'class' => 'Drupal\Core\Theme\AjaxBasePageNegotiator',
					'arguments' => ['csrf_token', 'config.factory', 'request_stack'],
				],
				'container.namespaces' => ['class' => 'ArrayObject', 'arguments' => ['%container.namespaces%']],
				'container.trait' => ['abstract' => true],
				'default_plugin_manager' => [
					'abstract' => true,
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'module_handler' => [
					'class' => 'Drupal\Core\Extension\ModuleHandler',
					'arguments' => ['app.root', '%container.modules%', 'cache.bootstrap'],
				],
				'module_installer' => [
					'class' => 'Drupal\Core\Extension\ModuleInstaller',
					'arguments' => ['app.root', 'module_handler', 'kernel'],
					'lazy' => true,
				],
				'extension.list.module' => [
					'class' => 'Drupal\Core\Extension\ModuleExtensionList',
					'arguments' => [
						'app.root',
						'module',
						'cache.default',
						'info_parser',
						'module_handler',
						'state',
						'config.factory',
						'extension.list.profile',
						'%install_profile%',
						'%container.modules%',
					],
				],
				'extension.list.profile' => [
					'class' => 'Drupal\Core\Extension\ProfileExtensionList',
					'arguments' => [
						'app.root',
						'profile',
						'cache.default',
						'info_parser',
						'module_handler',
						'state',
						'%install_profile%',
					],
				],
				'extension.list.theme' => [
					'class' => 'Drupal\Core\Extension\ThemeExtensionList',
					'arguments' => [
						'app.root',
						'theme',
						'cache.default',
						'info_parser',
						'module_handler',
						'state',
						'config.factory',
						'extension.list.theme_engine',
						'%install_profile%',
					],
				],
				'extension.list.theme_engine' => [
					'class' => 'Drupal\Core\Extension\ThemeEngineExtensionList',
					'arguments' => [
						'app.root',
						'theme_engine',
						'cache.default',
						'info_parser',
						'module_handler',
						'state',
						'%install_profile%',
					],
				],
				'content_uninstall_validator' => [
					'class' => 'Drupal\Core\Entity\ContentUninstallValidator',
					'arguments' => ['entity_type.manager', 'string_translation'],
					'lazy' => true,
				],
				'required_module_uninstall_validator' => [
					'class' => 'Drupal\Core\Extension\RequiredModuleUninstallValidator',
					'arguments' => ['string_translation'],
					'lazy' => true,
				],
				'theme_handler' => [
					'class' => 'Drupal\Core\Extension\ThemeHandler',
					'arguments' => ['app.root', 'config.factory', 'extension.list.theme'],
				],
				'theme_installer' => [
					'class' => 'Drupal\Core\Extension\ThemeInstaller',
					'arguments' => [
						'theme_handler',
						'config.factory',
						'config.installer',
						'module_handler',
						'config.manager',
						'asset.css.collection_optimizer',
						'router.builder',
						'logger.channel.default',
						'state',
					],
				],
				'entity.manager' => ['class' => 'Drupal\Core\Entity\EntityManager', 'parent' => 'container.trait'],
				'entity.memory_cache' => ['class' => 'Drupal\Core\Cache\MemoryCache\MemoryCache'],
				'entity_type.manager' => [
					'class' => 'Drupal\Core\Entity\EntityTypeManager',
					'arguments' => [
						'container.namespaces',
						'module_handler',
						'cache.discovery',
						'string_translation',
						'class_resolver',
						'entity.last_installed_schema.repository',
					],
					'parent' => 'container.trait',
				],
				'entity_type.repository' => ['class' => 'Drupal\Core\Entity\EntityTypeRepository', 'arguments' => ['entity_type.manager']],
				'entity_type.bundle.info' => [
					'class' => 'Drupal\Core\Entity\EntityTypeBundleInfo',
					'arguments' => [
						'entity_type.manager',
						'language_manager',
						'module_handler',
						'typed_data_manager',
						'cache.discovery',
					],
				],
				'entity.repository' => [
					'class' => 'Drupal\Core\Entity\EntityRepository',
					'arguments' => ['entity_type.manager', 'language_manager', 'context.repository'],
				],
				'entity_display.repository' => [
					'class' => 'Drupal\Core\Entity\EntityDisplayRepository',
					'arguments' => ['entity_type.manager', 'module_handler', 'cache.discovery', 'language_manager'],
				],
				'entity_field.manager' => [
					'class' => 'Drupal\Core\Entity\EntityFieldManager',
					'arguments' => [
						'entity_type.manager',
						'entity_type.bundle.info',
						'entity_display.repository',
						'typed_data_manager',
						'language_manager',
						'keyvalue',
						'module_handler',
						'cache.discovery',
					],
				],
				'entity_type.listener' => [
					'class' => 'Drupal\Core\Entity\EntityTypeListener',
					'arguments' => [
						'entity_type.manager',
						'entity_field.manager',
						'event_dispatcher',
						'entity.last_installed_schema.repository',
					],
				],
				'entity_bundle.listener' => [
					'class' => 'Drupal\Core\Entity\EntityBundleListener',
					'arguments' => [
						'entity_type.manager',
						'entity_type.bundle.info',
						'entity_field.manager',
						'module_handler',
					],
				],
				'entity_route_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber',
					'arguments' => ['entity_type.manager'],
				],
				'entity.definition_update_manager' => [
					'class' => 'Drupal\Core\Entity\EntityDefinitionUpdateManager',
					'arguments' => [
						'entity_type.manager',
						'entity.last_installed_schema.repository',
						'entity_field.manager',
						'entity_type.listener',
						'field_storage_definition.listener',
					],
				],
				'entity.last_installed_schema.repository' => [
					'class' => 'Drupal\Core\Entity\EntityLastInstalledSchemaRepository',
					'arguments' => ['keyvalue'],
				],
				'entity_field.deleted_fields_repository' => ['class' => 'Drupal\Core\Field\DeletedFieldsRepository', 'arguments' => ['state']],
				'field_storage_definition.listener' => [
					'class' => 'Drupal\Core\Field\FieldStorageDefinitionListener',
					'arguments' => [
						'entity_type.manager',
						'event_dispatcher',
						'entity.last_installed_schema.repository',
						'entity_field.manager',
						'entity_field.deleted_fields_repository',
					],
				],
				'field_definition.listener' => [
					'class' => 'Drupal\Core\Field\FieldDefinitionListener',
					'arguments' => ['entity_type.manager', 'entity_field.manager', 'keyvalue', 'cache.discovery'],
				],
				'entity.form_builder' => [
					'class' => 'Drupal\Core\Entity\EntityFormBuilder',
					'arguments' => ['entity_type.manager', 'form_builder'],
				],
				'entity.bundle_config_import_validator' => [
					'class' => 'Drupal\Core\Entity\Event\BundleConfigImportValidate',
					'arguments' => ['config.manager', 'entity_type.manager'],
				],
				'entity.autocomplete_matcher' => [
					'class' => 'Drupal\Core\Entity\EntityAutocompleteMatcher',
					'arguments' => ['plugin.manager.entity_reference_selection'],
				],
				'plugin_form.factory' => ['class' => 'Drupal\Core\Plugin\PluginFormFactory', 'arguments' => ['class_resolver']],
				'plugin.manager.entity_reference_selection' => [
					'class' => 'Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager',
					'parent' => 'default_plugin_manager',
				],
				'plugin.manager.block' => [
					'class' => 'Drupal\Core\Block\BlockManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['logger.channel.default'],
				],
				'plugin.manager.field.field_type' => [
					'class' => 'Drupal\Core\Field\FieldTypePluginManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'typed_data_manager'],
				],
				'plugin.manager.field.widget' => [
					'class' => 'Drupal\Core\Field\WidgetPluginManager',
					'arguments' => [
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'plugin.manager.field.field_type',
					],
				],
				'plugin.manager.field.formatter' => [
					'class' => 'Drupal\Core\Field\FormatterPluginManager',
					'arguments' => [
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'plugin.manager.field.field_type',
					],
				],
				'plugin.manager.archiver' => ['class' => 'Drupal\Core\Archiver\ArchiverManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.action' => [
					'class' => 'Drupal\Core\Action\ActionManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.menu.link' => [
					'class' => 'Drupal\Core\Menu\MenuLinkManager',
					'arguments' => ['menu.tree_storage', 'menu_link.static.overrides', 'module_handler'],
				],
				'menu.link_tree' => [
					'class' => 'Drupal\Core\Menu\MenuLinkTree',
					'arguments' => [
						'menu.tree_storage',
						'plugin.manager.menu.link',
						'router.route_provider',
						'menu.active_trail',
						'controller_resolver',
					],
				],
				'menu.default_tree_manipulators' => [
					'class' => 'Drupal\Core\Menu\DefaultMenuLinkTreeManipulators',
					'arguments' => ['access_manager', 'current_user', 'entity_type.manager'],
				],
				'menu.active_trail' => [
					'class' => 'Drupal\Core\Menu\MenuActiveTrail',
					'arguments' => ['plugin.manager.menu.link', 'current_route_match', 'cache.menu', 'lock'],
				],
				'menu.parent_form_selector' => [
					'class' => 'Drupal\Core\Menu\MenuParentFormSelector',
					'arguments' => ['menu.link_tree', 'entity_type.manager', 'string_translation'],
				],
				'plugin.manager.menu.local_action' => [
					'class' => 'Drupal\Core\Menu\LocalActionManager',
					'arguments' => [
						'http_kernel.controller.argument_resolver',
						'request_stack',
						'current_route_match',
						'router.route_provider',
						'module_handler',
						'cache.discovery',
						'language_manager',
						'access_manager',
						'current_user',
					],
				],
				'plugin.manager.menu.local_task' => [
					'class' => 'Drupal\Core\Menu\LocalTaskManager',
					'arguments' => [
						'http_kernel.controller.argument_resolver',
						'request_stack',
						'current_route_match',
						'router.route_provider',
						'module_handler',
						'cache.discovery',
						'language_manager',
						'access_manager',
						'current_user',
					],
				],
				'plugin.manager.menu.contextual_link' => [
					'class' => 'Drupal\Core\Menu\ContextualLinkManager',
					'arguments' => [
						'controller_resolver',
						'module_handler',
						'cache.discovery',
						'language_manager',
						'access_manager',
						'current_user',
						'request_stack',
					],
				],
				'plugin.manager.display_variant' => ['class' => 'Drupal\Core\Display\VariantManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.queue_worker' => ['class' => 'Drupal\Core\Queue\QueueWorkerManager', 'parent' => 'default_plugin_manager'],
				'plugin.cache_clearer' => ['class' => 'Drupal\Core\Plugin\CachedDiscoveryClearer', 'lazy' => true],
				'paramconverter.menu_link' => [
					'class' => 'Drupal\Core\ParamConverter\MenuLinkPluginConverter',
					'arguments' => ['plugin.manager.menu.link'],
					'lazy' => true,
				],
				'menu.tree_storage' => [
					'class' => 'Drupal\Core\Menu\MenuTreeStorage',
					'arguments' => ['database', 'cache.menu', 'cache_tags.invalidator', 'menu_tree'],
					'public' => false,
				],
				'menu_link.static.overrides' => ['class' => 'Drupal\Core\Menu\StaticMenuLinkOverrides', 'arguments' => ['config.factory']],
				'request_stack' => ['class' => 'Symfony\Component\HttpFoundation\RequestStack'],
				'current_route_match' => ['class' => 'Drupal\Core\Routing\CurrentRouteMatch', 'arguments' => ['request_stack']],
				'event_dispatcher' => [
					'class' => 'Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher',
					'arguments' => ['service_container'],
				],
				'app.root' => ['class' => 'SplString'],
				'app.root.factory' => ['class' => 'Drupal\Core\AppRootFactory', 'arguments' => ['kernel'], 'public' => false],
				'site.path' => ['class' => 'SplString'],
				'site.path.factory' => ['class' => 'Drupal\Core\SitePathFactory', 'arguments' => ['kernel'], 'public' => false],
				'controller_resolver' => [
					'class' => 'Drupal\Core\Controller\ControllerResolver',
					'arguments' => ['psr7.http_message_factory', 'class_resolver'],
				],
				'class_resolver' => ['class' => 'Drupal\Core\DependencyInjection\ClassResolver'],
				'title_resolver' => [
					'class' => 'Drupal\Core\Controller\TitleResolver',
					'arguments' => ['controller_resolver', 'string_translation', 'http_kernel.controller.argument_resolver'],
				],
				'http_kernel' => ['class' => 'Stack\StackedHttpKernel'],
				'http_kernel.basic' => [
					'class' => 'Symfony\Component\HttpKernel\HttpKernel',
					'arguments' => [
						'event_dispatcher',
						'controller_resolver',
						'request_stack',
						'http_kernel.controller.argument_resolver',
					],
				],
				'http_kernel.controller.argument_resolver' => [
					'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver',
					'arguments' => ['http_kernel.controller.argument_metadata_factory', ''],
				],
				'http_kernel.controller.argument_metadata_factory' => [
					'class' => 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory',
					'public' => false,
				],
				'argument_resolver.request_attribute' => [
					'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver',
					'public' => false,
				],
				'argument_resolver.raw_parameter' => [
					'class' => 'Drupal\Core\Controller\ArgumentResolver\RawParameterValueResolver',
					'public' => false,
				],
				'argument_resolver.request' => [
					'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver',
					'public' => false,
				],
				'argument_resolver.psr7_request' => [
					'class' => 'Drupal\Core\Controller\ArgumentResolver\Psr7RequestValueResolver',
					'arguments' => ['psr7.http_message_factory'],
					'public' => false,
				],
				'argument_resolver.route_match' => [
					'class' => 'Drupal\Core\Controller\ArgumentResolver\RouteMatchValueResolver',
					'public' => false,
				],
				'argument_resolver.default' => [
					'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver',
					'public' => false,
				],
				'http_middleware.negotiation' => ['class' => 'Drupal\Core\StackMiddleware\NegotiationMiddleware'],
				'http_middleware.reverse_proxy' => ['class' => 'Drupal\Core\StackMiddleware\ReverseProxyMiddleware', 'arguments' => ['settings']],
				'http_middleware.kernel_pre_handle' => ['class' => 'Drupal\Core\StackMiddleware\KernelPreHandle', 'arguments' => ['kernel']],
				'http_middleware.session' => ['class' => 'Drupal\Core\StackMiddleware\Session'],
				'http_middleware.cors' => ['class' => 'Asm89\Stack\Cors', 'arguments' => ['%cors.config%']],
				'psr7.http_foundation_factory' => ['class' => 'Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory'],
				'psr7.http_message_factory' => ['class' => 'Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory'],
				'language_manager' => ['class' => 'Drupal\Core\Language\LanguageManager', 'arguments' => ['language.default']],
				'language.current_language_context' => [
					'class' => 'Drupal\Core\Language\ContextProvider\CurrentLanguageContext',
					'arguments' => ['language_manager'],
				],
				'language.default' => [
					'class' => 'Drupal\Core\Language\LanguageDefault',
					'arguments' => ['%language.default_values%'],
				],
				'string_translator.custom_strings' => [
					'class' => 'Drupal\Core\StringTranslation\Translator\CustomStrings',
					'arguments' => ['settings'],
				],
				'string_translation' => [
					'class' => 'Drupal\Core\StringTranslation\TranslationManager',
					'arguments' => ['language.default'],
				],
				'typed_data_manager' => [
					'class' => 'Drupal\Core\TypedData\TypedDataManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'class_resolver'],
				],
				'validation.constraint' => ['class' => 'Drupal\Core\Validation\ConstraintManager', 'parent' => 'default_plugin_manager'],
				'lock' => [
					'class' => 'Drupal\Core\Lock\DatabaseLockBackend',
					'arguments' => ['database'],
					'lazy' => true,
				],
				'lock.persistent' => [
					'class' => 'Drupal\Core\Lock\PersistentDatabaseLockBackend',
					'arguments' => ['database'],
					'lazy' => true,
				],
				'router.request_context' => ['class' => 'Drupal\Core\Routing\RequestContext'],
				'router.admin_context' => ['class' => 'Drupal\Core\Routing\AdminContext', 'arguments' => ['current_route_match']],
				'router.route_provider' => [
					'class' => 'Drupal\Core\Routing\RouteProvider',
					'arguments' => [
						'database',
						'state',
						'path.current',
						'cache.data',
						'path_processor_manager',
						'cache_tags.invalidator',
						'router',
						'language_manager',
					],
				],
				'router.route_provider.lazy_builder' => [
					'class' => 'Drupal\Core\Routing\RouteProviderLazyBuilder',
					'arguments' => ['router.route_provider', 'router.builder'],
				],
				'router.route_preloader' => [
					'class' => 'Drupal\Core\Routing\RoutePreloader',
					'arguments' => ['router.route_provider', 'state', 'cache.bootstrap'],
				],
				'router.matcher.final_matcher' => [
					'class' => 'Drupal\Core\Routing\UrlMatcher',
					'arguments' => ['path.current'],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
				],
				'router.matcher' => [
					'class' => 'Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher',
					'arguments' => ['router.route_provider'],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
				],
				'url_generator.non_bubbling' => [
					'class' => 'Drupal\Core\Routing\UrlGenerator',
					'arguments' => [
						'router.route_provider',
						'path_processor_manager',
						'route_processor_manager',
						'request_stack',
						'%filter_protocols%',
					],
					'public' => false,
				],
				'url_generator' => [
					'class' => 'Drupal\Core\Render\MetadataBubblingUrlGenerator',
					'arguments' => ['url_generator.non_bubbling', 'renderer'],
				],
				'redirect.destination' => [
					'class' => 'Drupal\Core\Routing\RedirectDestination',
					'arguments' => ['request_stack', 'url_generator'],
				],
				'unrouted_url_assembler' => [
					'class' => 'Drupal\Core\Utility\UnroutedUrlAssembler',
					'arguments' => ['request_stack', 'path_processor_manager', '%filter_protocols%'],
				],
				'link_generator' => [
					'class' => 'Drupal\Core\Utility\LinkGenerator',
					'arguments' => ['url_generator', 'module_handler', 'renderer'],
				],
				'router' => [
					'class' => 'Drupal\Core\Routing\AccessAwareRouter',
					'arguments' => ['router.no_access_checks', 'access_manager', 'current_user'],
				],
				'router.dynamic' => [
					'class' => 'Symfony\Cmf\Component\Routing\DynamicRouter',
					'arguments' => ['router.request_context', 'router.matcher', 'url_generator'],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
				],
				'router.no_access_checks' => [
					'class' => '\Drupal\Core\Routing\Router',
					'arguments' => ['router.route_provider', 'path.current', 'url_generator'],
				],
				'router.path_roots_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\PathRootsSubscriber', 'arguments' => ['state']],
				'entity.query' => [
					'class' => 'Drupal\Core\Entity\Query\QueryFactory',
					'arguments' => ['entity_type.manager'],
					'deprecated' => 'The "%service_id%" service is deprecated. Use the \'entity_type.manager\' service to get an entity type\'s storage object and then call \Drupal\Core\Entity\EntityStorageInterface::getQuery() or \Drupal\Core\Entity\EntityStorageInterface::getAggregateQuery() instead. See https://www.drupal.org/node/2849874',
				],
				'entity.query.config' => [
					'class' => 'Drupal\Core\Config\Entity\Query\QueryFactory',
					'arguments' => ['config.factory', 'keyvalue', 'config.manager'],
				],
				'entity.query.sql' => ['class' => 'Drupal\Core\Entity\Query\Sql\QueryFactory', 'arguments' => ['database']],
				'pgsql.entity.query.sql' => ['class' => 'Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory', 'arguments' => ['database']],
				'entity.query.null' => ['class' => 'Drupal\Core\Entity\Query\Null\QueryFactory'],
				'entity.query.keyvalue' => [
					'class' => 'Drupal\Core\Entity\KeyValueStore\Query\QueryFactory',
					'arguments' => ['keyvalue'],
				],
				'router.dumper' => [
					'class' => 'Drupal\Core\Routing\MatcherDumper',
					'arguments' => ['database', 'state'],
					'lazy' => true,
				],
				'router.builder' => [
					'class' => 'Drupal\Core\Routing\RouteBuilder',
					'arguments' => [
						'router.dumper',
						'lock',
						'event_dispatcher',
						'module_handler',
						'controller_resolver',
						'access_manager.check_provider',
					],
					'lazy' => true,
				],
				'menu.rebuild_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber',
					'arguments' => ['lock', 'plugin.manager.menu.link', 'database', 'database.replica_kill_switch'],
				],
				'path.alias_storage' => ['class' => 'Drupal\Core\Path\AliasStorage', 'arguments' => ['database', 'module_handler']],
				'path.matcher' => [
					'class' => 'Drupal\Core\Path\PathMatcher',
					'arguments' => ['config.factory', 'current_route_match'],
				],
				'path.validator' => [
					'class' => 'Drupal\Core\Path\PathValidator',
					'arguments' => ['router', 'router.no_access_checks', 'current_user', 'path_processor_manager'],
				],
				'password' => ['class' => 'Drupal\Core\Password\PhpassHashedPassword', 'arguments' => ['19']],
				'request_format_route_filter' => ['class' => 'Drupal\Core\Routing\RequestFormatRouteFilter'],
				'method_filter' => ['class' => 'Drupal\Core\Routing\MethodFilter'],
				'content_type_header_matcher' => ['class' => 'Drupal\Core\Routing\ContentTypeHeaderMatcher'],
				'paramconverter_manager' => ['class' => 'Drupal\Core\ParamConverter\ParamConverterManager'],
				'paramconverter_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\ParamConverterSubscriber',
					'arguments' => ['paramconverter_manager'],
				],
				'paramconverter.entity' => [
					'class' => 'Drupal\Core\ParamConverter\EntityConverter',
					'arguments' => ['entity_type.manager', 'entity.repository'],
				],
				'paramconverter.entity_revision' => [
					'class' => 'Drupal\Core\ParamConverter\EntityRevisionParamConverter',
					'arguments' => ['entity_type.manager', 'entity.repository'],
				],
				'paramconverter.configentity_admin' => [
					'class' => 'Drupal\Core\ParamConverter\AdminPathConfigEntityConverter',
					'arguments' => ['entity_type.manager', 'config.factory', 'router.admin_context', 'entity.repository'],
					'lazy' => true,
				],
				'route_subscriber.module' => [
					'class' => 'Drupal\Core\EventSubscriber\ModuleRouteSubscriber',
					'arguments' => ['module_handler'],
				],
				'resolver_manager.entity' => [
					'class' => 'Drupal\Core\Entity\EntityResolverManager',
					'arguments' => ['entity_type.manager', 'class_resolver'],
				],
				'route_subscriber.entity' => [
					'class' => 'Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber',
					'arguments' => ['resolver_manager.entity'],
				],
				'ajax_response.subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\AjaxResponseSubscriber',
					'arguments' => ['ajax_response.attachments_processor'],
				],
				'form_ajax_subscriber' => [
					'class' => 'Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber',
					'arguments' => ['form_ajax_response_builder', 'string_translation', 'messenger'],
				],
				'route_enhancer.param_conversion' => [
					'class' => 'Drupal\Core\Routing\Enhancer\ParamConversionEnhancer',
					'arguments' => ['paramconverter_manager'],
				],
				'route_enhancer.form' => ['class' => 'Drupal\Core\Routing\Enhancer\FormRouteEnhancer'],
				'route_enhancer.entity' => ['class' => 'Drupal\Core\Entity\Enhancer\EntityRouteEnhancer'],
				'route_enhancer.entity_revision' => ['class' => 'Drupal\Core\Routing\Enhancer\EntityRevisionRouteEnhancer'],
				'route_special_attributes_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber'],
				'route_http_method_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RouteMethodSubscriber'],
				'psr_response_view_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\PsrResponseSubscriber',
					'arguments' => ['psr7.http_foundation_factory'],
				],
				'main_content_view_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\MainContentViewSubscriber',
					'arguments' => ['class_resolver', 'current_route_match', '%main_content_renderers%'],
				],
				'renderer_non_html' => ['class' => 'Drupal\Core\EventSubscriber\RenderArrayNonHtmlSubscriber'],
				'main_content_renderer.html' => [
					'class' => 'Drupal\Core\Render\MainContent\HtmlRenderer',
					'arguments' => [
						'title_resolver',
						'plugin.manager.display_variant',
						'event_dispatcher',
						'module_handler',
						'renderer',
						'render_cache',
						'%renderer.config%',
					],
				],
				'main_content_renderer.ajax' => ['class' => 'Drupal\Core\Render\MainContent\AjaxRenderer', 'arguments' => ['element_info']],
				'main_content_renderer.dialog' => [
					'class' => 'Drupal\Core\Render\MainContent\DialogRenderer',
					'arguments' => ['title_resolver'],
				],
				'main_content_renderer.off_canvas' => [
					'class' => 'Drupal\Core\Render\MainContent\OffCanvasRenderer',
					'arguments' => ['title_resolver', 'renderer'],
				],
				'main_content_renderer.off_canvas_top' => [
					'class' => 'Drupal\Core\Render\MainContent\OffCanvasRenderer',
					'arguments' => ['title_resolver', 'renderer', 'top'],
				],
				'main_content_renderer.modal' => ['class' => 'Drupal\Core\Render\MainContent\ModalRenderer', 'arguments' => ['title_resolver']],
				'controller.form' => [
					'class' => 'Drupal\Core\Controller\HtmlFormController',
					'arguments' => ['http_kernel.controller.argument_resolver', 'form_builder', 'class_resolver'],
				],
				'controller.entity_form' => [
					'class' => 'Drupal\Core\Entity\HtmlEntityFormController',
					'arguments' => ['http_kernel.controller.argument_resolver', 'form_builder', 'entity_type.manager'],
				],
				'form_ajax_response_builder' => [
					'class' => 'Drupal\Core\Form\FormAjaxResponseBuilder',
					'arguments' => ['main_content_renderer.ajax', 'current_route_match'],
				],
				'router_listener' => [
					'class' => 'Symfony\Component\HttpKernel\EventListener\RouterListener',
					'arguments' => ['router', 'request_stack', 'router.request_context', ''],
				],
				'options_request_listener' => [
					'class' => 'Drupal\Core\EventSubscriber\OptionsRequestSubscriber',
					'arguments' => ['router.route_provider'],
				],
				'bare_html_page_renderer' => [
					'class' => 'Drupal\Core\Render\BareHtmlPageRenderer',
					'arguments' => ['renderer', 'html_response.attachments_processor'],
					'lazy' => true,
				],
				'private_key' => ['class' => 'Drupal\Core\PrivateKey', 'arguments' => ['state']],
				'csrf_token' => [
					'class' => 'Drupal\Core\Access\CsrfTokenGenerator',
					'arguments' => ['private_key', 'session_manager.metadata_bag'],
				],
				'access_arguments_resolver_factory' => ['class' => 'Drupal\Core\Access\AccessArgumentsResolverFactory'],
				'access_manager' => [
					'class' => 'Drupal\Core\Access\AccessManager',
					'arguments' => [
						'router.route_provider',
						'paramconverter_manager',
						'access_arguments_resolver_factory',
						'current_user',
						'access_manager.check_provider',
					],
				],
				'access_manager.check_provider' => ['class' => 'Drupal\Core\Access\CheckProvider', 'public' => false],
				'access_check.default' => ['class' => 'Drupal\Core\Access\DefaultAccessCheck'],
				'access_check.entity' => ['class' => 'Drupal\Core\Entity\EntityAccessCheck'],
				'access_check.entity_create' => [
					'class' => 'Drupal\Core\Entity\EntityCreateAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'access_check.entity_create_any' => [
					'class' => 'Drupal\Core\Entity\EntityCreateAnyAccessCheck',
					'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
				],
				'access_check.entity_delete_multiple' => [
					'class' => 'Drupal\Core\Entity\EntityDeleteMultipleAccessCheck',
					'arguments' => ['entity_type.manager', 'tempstore.private', 'request_stack'],
				],
				'access_check.theme' => ['class' => 'Drupal\Core\Theme\ThemeAccessCheck', 'arguments' => ['theme_handler']],
				'access_check.custom' => [
					'class' => 'Drupal\Core\Access\CustomAccessCheck',
					'arguments' => ['controller_resolver', 'access_arguments_resolver_factory'],
				],
				'access_check.csrf' => ['class' => 'Drupal\Core\Access\CsrfAccessCheck', 'arguments' => ['csrf_token']],
				'access_check.header.csrf' => [
					'class' => 'Drupal\Core\Access\CsrfRequestHeaderAccessCheck',
					'arguments' => ['session_configuration', 'csrf_token'],
				],
				'maintenance_mode' => ['class' => 'Drupal\Core\Site\MaintenanceMode', 'arguments' => ['state']],
				'maintenance_mode_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\MaintenanceModeSubscriber',
					'arguments' => [
						'maintenance_mode',
						'config.factory',
						'string_translation',
						'url_generator',
						'current_user',
						'bare_html_page_renderer',
						'messenger',
					],
				],
				'path_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\PathSubscriber',
					'arguments' => ['path.alias_manager', 'path.current'],
				],
				'route_access_response_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber'],
				'client_error_response_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber'],
				'anonymous_user_response_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber',
					'arguments' => ['current_user'],
				],
				'ajax_response.attachments_processor' => [
					'class' => 'Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor',
					'arguments' => [
						'asset.resolver',
						'config.factory',
						'asset.css.collection_renderer',
						'asset.js.collection_renderer',
						'request_stack',
						'renderer',
						'module_handler',
					],
				],
				'html_response.attachments_processor' => [
					'class' => 'Drupal\Core\Render\HtmlResponseAttachmentsProcessor',
					'arguments' => [
						'asset.resolver',
						'config.factory',
						'asset.css.collection_renderer',
						'asset.js.collection_renderer',
						'request_stack',
						'renderer',
						'module_handler',
					],
				],
				'html_response.subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\HtmlResponseSubscriber',
					'arguments' => ['html_response.attachments_processor'],
				],
				'finish_response_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\FinishResponseSubscriber',
					'arguments' => [
						'language_manager',
						'config.factory',
						'page_cache_request_policy',
						'page_cache_response_policy',
						'cache_contexts_manager',
						'%http.response.debug_cacheability_headers%',
					],
				],
				'response_generator_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber'],
				'redirect_response_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\RedirectResponseSubscriber',
					'arguments' => ['unrouted_url_assembler', 'router.request_context'],
				],
				'redirect_leading_slashes_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber'],
				'request_close_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\RequestCloseSubscriber',
					'arguments' => ['module_handler'],
				],
				'config_import_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\ConfigImportSubscriber',
					'arguments' => ['theme_handler'],
				],
				'config_snapshot_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber',
					'arguments' => ['config.manager', 'config.storage', 'config.storage.snapshot'],
				],
				'exception.needs_installer' => [
					'class' => 'Drupal\Core\EventSubscriber\ExceptionDetectNeedsInstallSubscriber',
					'arguments' => ['database'],
				],
				'exception.default_json' => ['class' => 'Drupal\Core\EventSubscriber\ExceptionJsonSubscriber'],
				'exception.default_html' => [
					'class' => 'Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber',
					'arguments' => ['http_kernel', 'logger.channel.php', 'redirect.destination', 'router.no_access_checks'],
				],
				'exception.final' => [
					'class' => 'Drupal\Core\EventSubscriber\FinalExceptionSubscriber',
					'arguments' => ['config.factory'],
				],
				'exception.logger' => [
					'class' => 'Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber',
					'arguments' => ['logger.factory'],
				],
				'exception.custom_page_html' => [
					'class' => 'Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber',
					'arguments' => [
						'config.factory',
						'http_kernel',
						'logger.channel.php',
						'redirect.destination',
						'router.no_access_checks',
						'access_manager',
					],
				],
				'exception.fast_404_html' => [
					'class' => 'Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber',
					'arguments' => ['config.factory', 'http_kernel'],
				],
				'exception.test_site' => ['class' => 'Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber'],
				'exception.enforced_form_response' => ['class' => 'Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber'],
				'route_processor_manager' => ['class' => 'Drupal\Core\RouteProcessor\RouteProcessorManager'],
				'path_processor_manager' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorManager'],
				'path_processor_decode' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorDecode'],
				'path_processor_front' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorFront', 'arguments' => ['config.factory']],
				'route_processor_current' => [
					'class' => 'Drupal\Core\RouteProcessor\RouteProcessorCurrent',
					'arguments' => ['current_route_match'],
				],
				'path_processor_alias' => [
					'class' => 'Drupal\Core\PathProcessor\PathProcessorAlias',
					'arguments' => ['path.alias_manager'],
				],
				'route_processor_csrf' => ['class' => 'Drupal\Core\Access\RouteProcessorCsrf', 'arguments' => ['csrf_token']],
				'transliteration' => [
					'class' => 'Drupal\Core\Transliteration\PhpTransliteration',
					'arguments' => ['', 'module_handler'],
				],
				'flood' => ['class' => 'Drupal\Core\Flood\DatabaseBackend', 'arguments' => ['database', 'request_stack']],
				'plugin.manager.mail' => [
					'class' => 'Drupal\Core\Mail\MailManager',
					'arguments' => [
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'config.factory',
						'logger.factory',
						'string_translation',
						'renderer',
					],
				],
				'plugin.manager.condition' => ['class' => 'Drupal\Core\Condition\ConditionManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.element_info' => [
					'class' => 'Drupal\Core\Render\ElementInfoManager',
					'arguments' => [
						'container.namespaces',
						'cache.discovery',
						'cache_tags.invalidator',
						'module_handler',
						'theme.manager',
					],
				],
				'stream_wrapper_manager' => ['class' => 'Drupal\Core\StreamWrapper\StreamWrapperManager'],
				'stream_wrapper.public' => ['class' => 'Drupal\Core\StreamWrapper\PublicStream'],
				'stream_wrapper.temporary' => ['class' => 'Drupal\Core\StreamWrapper\TemporaryStream'],
				'kernel_destruct_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\KernelDestructionSubscriber'],
				'image.toolkit.manager' => [
					'class' => 'Drupal\Core\ImageToolkit\ImageToolkitManager',
					'arguments' => ['config.factory'],
					'parent' => 'default_plugin_manager',
				],
				'image.toolkit.operation.manager' => [
					'class' => 'Drupal\Core\ImageToolkit\ImageToolkitOperationManager',
					'arguments' => ['logger.channel.image', 'image.toolkit.manager'],
					'parent' => 'default_plugin_manager',
				],
				'image.factory' => ['class' => 'Drupal\Core\Image\ImageFactory', 'arguments' => ['image.toolkit.manager']],
				'breadcrumb' => ['class' => 'Drupal\Core\Breadcrumb\BreadcrumbManager', 'arguments' => ['module_handler']],
				'token' => [
					'class' => 'Drupal\Core\Utility\Token',
					'arguments' => [
						'module_handler',
						'cache.default',
						'language_manager',
						'cache_tags.invalidator',
						'renderer',
					],
				],
				'batch.storage' => [
					'class' => 'Drupal\Core\Batch\BatchStorage',
					'arguments' => ['database', 'session', 'csrf_token'],
					'lazy' => true,
				],
				'country_manager' => ['class' => 'Drupal\Core\Locale\CountryManager', 'arguments' => ['module_handler']],
				'date.formatter' => [
					'class' => 'Drupal\Core\Datetime\DateFormatter',
					'arguments' => [
						'entity_type.manager',
						'language_manager',
						'string_translation',
						'config.factory',
						'request_stack',
					],
				],
				'feed.bridge.reader' => [
					'class' => 'Drupal\Component\Bridge\ZfExtensionManagerSfContainer',
					'arguments' => ['feed.reader.'],
				],
				'feed.bridge.writer' => [
					'class' => 'Drupal\Component\Bridge\ZfExtensionManagerSfContainer',
					'arguments' => ['feed.writer.'],
				],
				'feed.reader.dublincoreentry' => ['class' => 'Zend\Feed\Reader\Extension\DublinCore\Entry', 'shared' => false],
				'feed.reader.dublincorefeed' => ['class' => 'Zend\Feed\Reader\Extension\DublinCore\Feed', 'shared' => false],
				'feed.reader.contententry' => ['class' => 'Zend\Feed\Reader\Extension\Content\Entry', 'shared' => false],
				'feed.reader.atomentry' => ['class' => 'Zend\Feed\Reader\Extension\Atom\Entry', 'shared' => false],
				'feed.reader.atomfeed' => ['class' => 'Zend\Feed\Reader\Extension\Atom\Feed', 'shared' => false],
				'feed.reader.slashentry' => ['class' => 'Zend\Feed\Reader\Extension\Slash\Entry', 'shared' => false],
				'feed.reader.wellformedwebentry' => ['class' => 'Zend\Feed\Reader\Extension\WellFormedWeb\Entry', 'shared' => false],
				'feed.reader.threadentry' => ['class' => 'Zend\Feed\Reader\Extension\Thread\Entry', 'shared' => false],
				'feed.reader.podcastentry' => ['class' => 'Zend\Feed\Reader\Extension\Podcast\Entry', 'shared' => false],
				'feed.reader.podcastfeed' => ['class' => 'Zend\Feed\Reader\Extension\Podcast\Feed', 'shared' => false],
				'feed.writer.atomrendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\Atom\Renderer\Feed', 'shared' => false],
				'feed.writer.contentrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Content\Renderer\Entry', 'shared' => false],
				'feed.writer.dublincorerendererentry' => ['class' => 'Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry', 'shared' => false],
				'feed.writer.dublincorerendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed', 'shared' => false],
				'feed.writer.itunesentry' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Entry', 'shared' => false],
				'feed.writer.itunesfeed' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Feed', 'shared' => false],
				'feed.writer.itunesrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Renderer\Entry', 'shared' => false],
				'feed.writer.itunesrendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Renderer\Feed', 'shared' => false],
				'feed.writer.slashrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Slash\Renderer\Entry', 'shared' => false],
				'feed.writer.threadingrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Threading\Renderer\Entry', 'shared' => false],
				'feed.writer.wellformedwebrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry', 'shared' => false],
				'theme.manager' => [
					'class' => 'Drupal\Core\Theme\ThemeManager',
					'arguments' => ['app.root', 'theme.negotiator', 'theme.initialization', 'module_handler'],
				],
				'theme.initialization' => [
					'class' => 'Drupal\Core\Theme\ThemeInitialization',
					'arguments' => ['app.root', 'theme_handler', 'cache.bootstrap', 'module_handler'],
				],
				'theme.registry' => [
					'class' => 'Drupal\Core\Theme\Registry',
					'arguments' => [
						'app.root',
						'cache.default',
						'lock',
						'module_handler',
						'theme_handler',
						'theme.initialization',
						'',
						'cache.bootstrap',
					],
				],
				'authentication' => [
					'class' => 'Drupal\Core\Authentication\AuthenticationManager',
					'arguments' => ['authentication_collector'],
				],
				'authentication_collector' => ['class' => 'Drupal\Core\Authentication\AuthenticationCollector'],
				'authentication_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\AuthenticationSubscriber',
					'arguments' => ['authentication', 'current_user'],
				],
				'account_switcher' => [
					'class' => 'Drupal\Core\Session\AccountSwitcher',
					'arguments' => ['current_user', 'session_handler.write_safe'],
				],
				'user_permissions_hash_generator' => [
					'class' => 'Drupal\Core\Session\PermissionsHashGenerator',
					'arguments' => ['private_key', 'cache.bootstrap', 'cache.static'],
				],
				'current_user' => ['class' => 'Drupal\Core\Session\AccountProxy'],
				'session_configuration' => [
					'class' => 'Drupal\Core\Session\SessionConfiguration',
					'arguments' => ['%session.storage.options%'],
				],
				'session' => [
					'class' => 'Symfony\Component\HttpFoundation\Session\Session',
					'arguments' => ['session_manager', 'session.attribute_bag', 'session.flash_bag'],
				],
				'session.flash_bag' => ['class' => 'Symfony\Component\HttpFoundation\Session\Flash\FlashBag', 'public' => false],
				'session.attribute_bag' => [
					'class' => 'Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag',
					'public' => false,
				],
				'session_handler' => ['alias' => 'session_handler.storage'],
				'session_handler.storage' => [
					'class' => 'Drupal\Core\Session\SessionHandler',
					'arguments' => ['request_stack', 'database'],
				],
				'session_handler.write_safe' => ['class' => 'Drupal\Core\Session\WriteSafeSessionHandler'],
				'session_manager' => [
					'class' => 'Drupal\Core\Session\SessionManager',
					'arguments' => [
						'request_stack',
						'database',
						'session_manager.metadata_bag',
						'session_configuration',
						'session_handler',
					],
				],
				'session_manager.metadata_bag' => ['class' => 'Drupal\Core\Session\MetadataBag', 'arguments' => ['settings']],
				'asset.css.collection_renderer' => ['class' => 'Drupal\Core\Asset\CssCollectionRenderer', 'arguments' => ['state']],
				'asset.css.collection_optimizer' => [
					'class' => 'Drupal\Core\Asset\CssCollectionOptimizer',
					'arguments' => [
						'asset.css.collection_grouper',
						'asset.css.optimizer',
						'asset.css.dumper',
						'state',
						'file_system',
					],
				],
				'asset.css.optimizer' => ['class' => 'Drupal\Core\Asset\CssOptimizer'],
				'asset.css.collection_grouper' => ['class' => 'Drupal\Core\Asset\CssCollectionGrouper'],
				'asset.css.dumper' => ['class' => 'Drupal\Core\Asset\AssetDumper', 'arguments' => ['file_system']],
				'asset.js.collection_renderer' => ['class' => 'Drupal\Core\Asset\JsCollectionRenderer', 'arguments' => ['state']],
				'asset.js.collection_optimizer' => [
					'class' => 'Drupal\Core\Asset\JsCollectionOptimizer',
					'arguments' => [
						'asset.js.collection_grouper',
						'asset.js.optimizer',
						'asset.js.dumper',
						'state',
						'file_system',
					],
				],
				'asset.js.optimizer' => ['class' => 'Drupal\Core\Asset\JsOptimizer'],
				'asset.js.collection_grouper' => ['class' => 'Drupal\Core\Asset\JsCollectionGrouper'],
				'asset.js.dumper' => ['class' => 'Drupal\Core\Asset\AssetDumper', 'arguments' => ['file_system']],
				'library.discovery' => [
					'class' => 'Drupal\Core\Asset\LibraryDiscovery',
					'arguments' => ['library.discovery.collector'],
				],
				'library.discovery.collector' => [
					'class' => 'Drupal\Core\Asset\LibraryDiscoveryCollector',
					'arguments' => ['cache.discovery', 'lock', 'library.discovery.parser', 'theme.manager'],
				],
				'library.discovery.parser' => [
					'class' => 'Drupal\Core\Asset\LibraryDiscoveryParser',
					'arguments' => ['app.root', 'module_handler', 'theme.manager'],
				],
				'library.dependency_resolver' => [
					'class' => 'Drupal\Core\Asset\LibraryDependencyResolver',
					'arguments' => ['library.discovery'],
				],
				'asset.resolver' => [
					'class' => 'Drupal\Core\Asset\AssetResolver',
					'arguments' => [
						'library.discovery',
						'library.dependency_resolver',
						'module_handler',
						'theme.manager',
						'language_manager',
						'cache.data',
					],
				],
				'info_parser' => ['class' => 'Drupal\Core\Extension\InfoParser'],
				'twig' => [
					'class' => 'Drupal\Core\Template\TwigEnvironment',
					'arguments' => [
						'app.root',
						'cache.default',
						'%twig_extension_hash%',
						'state',
						'twig.loader',
						'%twig.config%',
					],
				],
				'twig.extension' => [
					'class' => 'Drupal\Core\Template\TwigExtension',
					'arguments' => ['renderer', 'url_generator', 'theme.manager', 'date.formatter'],
				],
				'twig.extension.debug' => ['class' => 'Twig_Extension_Debug'],
				'twig.loader' => ['class' => 'Twig_Loader_Chain', 'public' => false],
				'twig.loader.filesystem' => [
					'class' => 'Drupal\Core\Template\Loader\FilesystemLoader',
					'arguments' => ['.', 'module_handler', 'theme_handler'],
				],
				'twig.loader.theme_registry' => [
					'class' => 'Drupal\Core\Template\Loader\ThemeRegistryLoader',
					'arguments' => ['theme.registry'],
				],
				'twig.loader.string' => ['class' => 'Drupal\Core\Template\Loader\StringLoader'],
				'element_info' => ['alias' => 'plugin.manager.element_info'],
				'file.mime_type.guesser' => [
					'class' => 'Drupal\Core\File\MimeType\MimeTypeGuesser',
					'arguments' => ['stream_wrapper_manager'],
					'lazy' => true,
				],
				'file.mime_type.guesser.extension' => [
					'class' => 'Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser',
					'arguments' => ['module_handler'],
					'lazy' => true,
				],
				'render_placeholder_generator' => ['class' => 'Drupal\Core\Render\PlaceholderGenerator', 'arguments' => ['%renderer.config%']],
				'render_cache' => [
					'class' => 'Drupal\Core\Render\PlaceholderingRenderCache',
					'arguments' => [
						'request_stack',
						'cache_factory',
						'cache_contexts_manager',
						'render_placeholder_generator',
					],
				],
				'renderer' => [
					'class' => 'Drupal\Core\Render\Renderer',
					'arguments' => [
						'controller_resolver',
						'theme.manager',
						'plugin.manager.element_info',
						'render_placeholder_generator',
						'render_cache',
						'request_stack',
						'%renderer.config%',
					],
				],
				'early_rendering_controller_wrapper_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber',
					'arguments' => ['http_kernel.controller.argument_resolver', 'renderer'],
				],
				'html_response.placeholder_strategy_subscriber' => [
					'class' => 'Drupal\Core\EventSubscriber\HtmlResponsePlaceholderStrategySubscriber',
					'arguments' => ['placeholder_strategy'],
				],
				'placeholder_strategy' => ['class' => 'Drupal\Core\Render\Placeholder\ChainedPlaceholderStrategy'],
				'placeholder_strategy.single_flush' => ['class' => 'Drupal\Core\Render\Placeholder\SingleFlushStrategy'],
				'email.validator' => ['class' => 'Drupal\Component\Utility\EmailValidator'],
				'update.post_update_registry' => ['class' => 'Drupal\Core\Update\UpdateRegistry'],
				'update.post_update_registry_factory' => ['class' => 'Drupal\Core\Update\UpdateRegistryFactory', 'parent' => 'container.trait'],
				'uuid' => ['class' => 'Drupal\Component\Uuid\Php'],
				'response_filter.active_link' => [
					'class' => 'Drupal\Core\EventSubscriber\ActiveLinkResponseFilter',
					'arguments' => ['current_user', 'path.current', 'path.matcher', 'language_manager'],
				],
				'response_filter.rss.relative_url' => ['class' => 'Drupal\Core\EventSubscriber\RssResponseRelativeUrlFilter'],
				'messenger' => [
					'class' => 'Drupal\Core\Messenger\Messenger',
					'arguments' => ['session.flash_bag', 'page_cache_kill_switch'],
				],
				'tempstore.private' => [
					'class' => 'Drupal\Core\TempStore\PrivateTempStoreFactory',
					'arguments' => ['keyvalue.expirable', 'lock', 'current_user', 'request_stack', '%tempstore.expire%'],
				],
				'tempstore.shared' => [
					'class' => 'Drupal\Core\TempStore\SharedTempStoreFactory',
					'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%'],
				],
				'plugin.manager.aggregator.fetcher' => [
					'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
					'arguments' => ['fetcher', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.aggregator.parser' => [
					'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
					'arguments' => ['parser', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.aggregator.processor' => [
					'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
					'arguments' => ['processor', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'aggregator.items.importer' => [
					'class' => 'Drupal\aggregator\ItemsImporter',
					'arguments' => [
						'config.factory',
						'plugin.manager.aggregator.fetcher',
						'plugin.manager.aggregator.parser',
						'plugin.manager.aggregator.processor',
						'logger.channel.aggregator',
					],
				],
				'logger.channel.aggregator' => ['parent' => 'logger.channel_base', 'arguments' => ['aggregator']],
				'automated_cron.subscriber' => [
					'class' => 'Drupal\automated_cron\EventSubscriber\AutomatedCron',
					'arguments' => ['cron', 'config.factory', 'state'],
				],
				'ban.ip_manager' => ['class' => 'Drupal\ban\BanIpManager', 'arguments' => ['database']],
				'ban.middleware' => ['class' => 'Drupal\ban\BanMiddleware', 'arguments' => ['ban.ip_manager']],
				'basic_auth.authentication.basic_auth' => [
					'class' => 'Drupal\basic_auth\Authentication\Provider\BasicAuth',
					'arguments' => ['config.factory', 'user.auth', 'flood', 'entity_type.manager'],
				],
				'basic_auth.page_cache_request_policy.disallow_basic_auth_requests' => ['class' => 'Drupal\basic_auth\PageCache\DisallowBasicAuthRequests', 'public' => false],
				'html_response.big_pipe_subscriber' => [
					'class' => 'Drupal\big_pipe\EventSubscriber\HtmlResponseBigPipeSubscriber',
					'arguments' => ['big_pipe'],
				],
				'placeholder_strategy.big_pipe' => [
					'class' => 'Drupal\big_pipe\Render\Placeholder\BigPipeStrategy',
					'arguments' => ['session_configuration', 'request_stack', 'current_route_match'],
				],
				'big_pipe' => [
					'class' => 'Drupal\big_pipe\Render\BigPipe',
					'arguments' => [
						'renderer',
						'session',
						'request_stack',
						'http_kernel',
						'event_dispatcher',
						'config.factory',
					],
				],
				'html_response.attachments_processor.big_pipe' => [
					'public' => false,
					'class' => '\Drupal\big_pipe\Render\BigPipeResponseAttachmentsProcessor',
					'decorates' => 'html_response.attachments_processor',
					'arguments' => [
						'html_response.attachments_processor.big_pipe.inner',
						'asset.resolver',
						'config.factory',
						'asset.css.collection_renderer',
						'asset.js.collection_renderer',
						'request_stack',
						'renderer',
						'module_handler',
					],
				],
				'route_subscriber.no_big_pipe' => ['class' => 'Drupal\big_pipe\EventSubscriber\NoBigPipeRouteAlterSubscriber'],
				'big_pipe_test_subscriber' => ['class' => 'Drupal\big_pipe_test\EventSubscriber\BigPipeTestSubscriber'],
				'theme.negotiator.block.admin_demo' => ['class' => 'Drupal\block\Theme\AdminDemoNegotiator'],
				'block.page_display_variant_subscriber' => ['class' => 'Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber'],
				'block.repository' => [
					'class' => 'Drupal\block\BlockRepository',
					'arguments' => ['entity_type.manager', 'theme.manager', 'context.handler'],
				],
				'block_test.multiple_static_context' => [
					'class' => 'Drupal\block_test\ContextProvider\MultipleStaticContext',
					'arguments' => ['current_user', 'entity_type.manager'],
				],
				'block_content.uuid_lookup' => [
					'class' => '\Drupal\block_content\BlockContentUuidLookup',
					'arguments' => ['cache.bootstrap', 'lock', 'entity_type.manager'],
				],
				'block_place.page_display_variant_subscriber.block' => [
					'class' => 'Drupal\block_place\EventSubscriber\BlockPlaceEventSubscriber',
					'arguments' => ['request_stack', 'current_user'],
				],
				'book.breadcrumb' => [
					'class' => 'Drupal\book\BookBreadcrumbBuilder',
					'arguments' => ['entity_type.manager', 'current_user'],
				],
				'book.manager' => [
					'class' => 'Drupal\book\BookManager',
					'arguments' => [
						'entity_type.manager',
						'string_translation',
						'config.factory',
						'book.outline_storage',
						'renderer',
					],
				],
				'book.outline' => ['class' => 'Drupal\book\BookOutline', 'arguments' => ['book.manager']],
				'book.export' => ['class' => 'Drupal\book\BookExport', 'arguments' => ['entity_type.manager', 'book.manager']],
				'book.outline_storage' => ['class' => 'Drupal\book\BookOutlineStorage', 'arguments' => ['database']],
				'access_check.book.removable' => [
					'class' => 'Drupal\book\Access\BookNodeIsRemovableAccessCheck',
					'arguments' => ['book.manager'],
				],
				'cache_context.route.book_navigation' => ['class' => 'Drupal\book\Cache\BookNavigationCacheContext', 'arguments' => ['request_stack']],
				'book.uninstall_validator' => [
					'class' => 'Drupal\book\BookUninstallValidator',
					'arguments' => ['book.outline_storage', 'entity_type.manager', 'string_translation'],
					'lazy' => true,
				],
				'breakpoint.manager' => [
					'class' => 'Drupal\breakpoint\BreakpointManager',
					'arguments' => ['module_handler', 'theme_handler', 'cache.discovery', 'string_translation'],
				],
				'plugin.manager.ckeditor.plugin' => ['class' => 'Drupal\ckeditor\CKEditorPluginManager', 'parent' => 'default_plugin_manager'],
				'color.config_cache_invalidator' => [
					'class' => 'Drupal\color\EventSubscriber\ColorConfigCacheInvalidator',
					'arguments' => ['cache_tags.invalidator'],
				],
				'comment.breadcrumb' => ['class' => 'Drupal\comment\CommentBreadcrumbBuilder', 'arguments' => ['entity_type.manager']],
				'comment.manager' => [
					'class' => 'Drupal\comment\CommentManager',
					'arguments' => [
						'entity_type.manager',
						'config.factory',
						'string_translation',
						'module_handler',
						'current_user',
						'entity_field.manager',
					],
				],
				'comment.statistics' => [
					'class' => 'Drupal\comment\CommentStatistics',
					'arguments' => ['database', 'current_user', 'entity_type.manager', 'state', 'database.replica'],
				],
				'comment.lazy_builders' => [
					'class' => 'Drupal\comment\CommentLazyBuilders',
					'arguments' => [
						'entity_type.manager',
						'entity.form_builder',
						'current_user',
						'comment.manager',
						'module_handler',
						'renderer',
					],
				],
				'comment.link_builder' => [
					'class' => 'Drupal\comment\CommentLinkBuilder',
					'arguments' => [
						'current_user',
						'comment.manager',
						'module_handler',
						'string_translation',
						'entity_type.manager',
					],
				],
				'config.config_subscriber' => ['class' => 'Drupal\config\ConfigSubscriber'],
				'config_events_test.event_subscriber' => ['class' => 'Drupal\config_events_test\EventSubscriber', 'arguments' => ['state']],
				'config_import_test.event_subscriber' => ['class' => 'Drupal\config_import_test\EventSubscriber', 'arguments' => ['state']],
				'cache_context.config_override_integration_test' => [
					'class' => 'Drupal\config_override_integration_test\Cache\ConfigOverrideIntegrationTestCacheContext',
				],
				'config_override_integration_test.config_override' => ['class' => 'Drupal\config_override_integration_test\CacheabilityMetadataConfigOverride'],
				'cache_context.pirate_day' => ['class' => 'Drupal\config_override_test\Cache\PirateDayCacheContext'],
				'config_override_test.overrider' => ['class' => 'Drupal\config_override_test\ConfigOverrider'],
				'config_override_test.low_priority_overrider' => ['class' => 'Drupal\config_override_test\ConfigOverriderLowPriority'],
				'config_override_test.pirate_day_cacheability_metadata_override' => ['class' => 'Drupal\config_override_test\PirateDayCacheabilityMetadataConfigOverride'],
				'config_translation.route_subscriber' => [
					'class' => 'Drupal\config_translation\Routing\RouteSubscriber',
					'arguments' => ['plugin.manager.config_translation.mapper'],
				],
				'config_translation.access.overview' => [
					'class' => 'Drupal\config_translation\Access\ConfigTranslationOverviewAccess',
					'arguments' => ['plugin.manager.config_translation.mapper', 'language_manager'],
				],
				'config_translation.access.form' => [
					'class' => 'Drupal\config_translation\Access\ConfigTranslationFormAccess',
					'arguments' => ['plugin.manager.config_translation.mapper', 'language_manager'],
				],
				'plugin.manager.config_translation.mapper' => [
					'class' => 'Drupal\config_translation\ConfigMapperManager',
					'arguments' => ['cache.discovery', 'language_manager', 'module_handler', 'config.typed', 'theme_handler'],
				],
				'config_translation_test_event_subscriber' => ['class' => 'Drupal\config_translation_test\EventSubscriber\ConfigTranslationTestSubscriber'],
				'access_check.contact_personal' => [
					'class' => 'Drupal\contact\Access\ContactPageAccess',
					'arguments' => ['config.factory', 'user.data'],
				],
				'contact.mail_handler' => [
					'class' => 'Drupal\contact\MailHandler',
					'arguments' => [
						'plugin.manager.mail',
						'language_manager',
						'logger.channel.contact',
						'string_translation',
						'entity_type.manager',
					],
				],
				'logger.channel.contact' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['contact']],
				'paramconverter.latest_revision' => [
					'class' => 'Drupal\content_moderation\ParamConverter\EntityRevisionConverter',
					'parent' => 'paramconverter.entity',
				],
				'content_moderation.state_transition_validation' => [
					'class' => '\Drupal\content_moderation\StateTransitionValidation',
					'arguments' => ['content_moderation.moderation_information'],
				],
				'content_moderation.moderation_information' => [
					'class' => 'Drupal\content_moderation\ModerationInformation',
					'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
				],
				'access_check.latest_revision' => [
					'class' => 'Drupal\content_moderation\Access\LatestRevisionCheck',
					'arguments' => ['content_moderation.moderation_information'],
				],
				'content_moderation.config_import_subscriber' => [
					'class' => 'Drupal\content_moderation\EventSubscriber\ConfigImportSubscriber',
					'arguments' => ['config.manager', 'entity_type.manager'],
				],
				'content_moderation.route_subscriber' => [
					'class' => 'Drupal\content_moderation\Routing\ContentModerationRouteSubscriber',
					'arguments' => ['entity_type.manager'],
				],
				'content_translation.synchronizer' => [
					'class' => 'Drupal\content_translation\FieldTranslationSynchronizer',
					'arguments' => ['entity_type.manager', 'plugin.manager.field.field_type'],
				],
				'content_translation.subscriber' => [
					'class' => 'Drupal\content_translation\Routing\ContentTranslationRouteSubscriber',
					'arguments' => ['content_translation.manager'],
				],
				'content_translation.delete_access' => [
					'class' => 'Drupal\content_translation\Access\ContentTranslationDeleteAccess',
					'arguments' => ['entity_type.manager', 'content_translation.manager'],
				],
				'content_translation.overview_access' => [
					'class' => 'Drupal\content_translation\Access\ContentTranslationOverviewAccess',
					'arguments' => ['entity_type.manager'],
				],
				'content_translation.manage_access' => [
					'class' => 'Drupal\content_translation\Access\ContentTranslationManageAccessCheck',
					'arguments' => ['entity_type.manager', 'language_manager'],
				],
				'content_translation.manager' => [
					'class' => 'Drupal\content_translation\ContentTranslationManager',
					'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
				],
				'content_translation.updates_manager' => [
					'class' => 'Drupal\content_translation\ContentTranslationUpdatesManager',
					'arguments' => [
						'entity_type.manager',
						'entity.definition_update_manager',
						'entity_field.manager',
						'entity.last_installed_schema.repository',
					],
					'deprecated' => 'The "%service_id%" service is deprecated. Definitions are updated automatically now so no replacement is needed. See https://www.drupal.org/node/2973222.',
				],
				'logger.dblog' => [
					'class' => 'Drupal\dblog\Logger\DbLog',
					'arguments' => ['database', 'logger.log_message_parser'],
				],
				'cache.dynamic_page_cache' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['dynamic_page_cache']],
				'dynamic_page_cache_subscriber' => [
					'class' => 'Drupal\dynamic_page_cache\EventSubscriber\DynamicPageCacheSubscriber',
					'arguments' => [
						'dynamic_page_cache_request_policy',
						'dynamic_page_cache_response_policy',
						'render_cache',
						'%renderer.config%',
					],
				],
				'dynamic_page_cache_request_policy' => ['class' => 'Drupal\dynamic_page_cache\PageCache\RequestPolicy\DefaultRequestPolicy'],
				'dynamic_page_cache_response_policy' => ['class' => 'Drupal\Core\PageCache\ChainResponsePolicy', 'lazy' => true],
				'dynamic_page_cache_deny_admin_routes' => [
					'class' => 'Drupal\dynamic_page_cache\PageCache\ResponsePolicy\DenyAdminRoutes',
					'arguments' => ['current_route_match'],
					'public' => false,
				],
				'plugin.manager.editor' => ['class' => 'Drupal\editor\Plugin\EditorManager', 'parent' => 'default_plugin_manager'],
				'element.editor' => ['class' => 'Drupal\editor\Element', 'arguments' => ['plugin.manager.editor']],
				'field.uninstall_validator' => [
					'class' => 'Drupal\field\FieldUninstallValidator',
					'arguments' => ['entity_type.manager', 'string_translation', 'plugin.manager.field.field_type'],
					'lazy' => true,
				],
				'field_ui.subscriber' => ['class' => 'Drupal\field_ui\Routing\RouteSubscriber', 'arguments' => ['entity_type.manager']],
				'field_ui.route_enhancer' => [
					'class' => 'Drupal\field_ui\Routing\FieldUiRouteEnhancer',
					'arguments' => ['entity_type.manager'],
				],
				'access_check.field_ui.view_mode' => [
					'class' => 'Drupal\field_ui\Access\ViewModeAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'access_check.field_ui.form_mode' => [
					'class' => 'Drupal\field_ui\Access\FormModeAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'file.usage' => [
					'class' => 'Drupal\file\FileUsage\DatabaseFileUsageBackend',
					'arguments' => ['database', 'file_usage', 'config.factory'],
				],
				'stream_wrapper.dummy_readonly' => ['class' => 'Drupal\file_test\StreamWrapper\DummyReadOnlyStreamWrapper'],
				'stream_wrapper.dummy_remote' => ['class' => 'Drupal\file_test\StreamWrapper\DummyRemoteStreamWrapper'],
				'stream_wrapper.dummy' => ['class' => 'Drupal\file_test\StreamWrapper\DummyStreamWrapper'],
				'plugin.manager.filter' => ['class' => 'Drupal\filter\FilterPluginManager', 'parent' => 'default_plugin_manager'],
				'filter.uninstall_validator' => [
					'class' => 'Drupal\filter\FilterUninstallValidator',
					'arguments' => ['plugin.manager.filter', 'entity_type.manager', 'string_translation'],
					'lazy' => true,
				],
				'forum_manager' => [
					'class' => 'Drupal\forum\ForumManager',
					'arguments' => [
						'config.factory',
						'entity_type.manager',
						'database',
						'string_translation',
						'comment.manager',
						'entity_field.manager',
					],
				],
				'forum.breadcrumb.node' => [
					'class' => 'Drupal\forum\Breadcrumb\ForumNodeBreadcrumbBuilder',
					'arguments' => ['entity_type.manager', 'config.factory', 'forum_manager', 'string_translation'],
				],
				'forum.breadcrumb.listing' => [
					'class' => 'Drupal\forum\Breadcrumb\ForumListingBreadcrumbBuilder',
					'arguments' => ['entity_type.manager', 'config.factory', 'forum_manager', 'string_translation'],
				],
				'forum.index_storage' => ['class' => 'Drupal\forum\ForumIndexStorage', 'arguments' => ['database']],
				'forum.uninstall_validator' => [
					'class' => 'Drupal\forum\ForumUninstallValidator',
					'arguments' => ['entity_type.manager', 'config.factory', 'string_translation'],
					'lazy' => true,
				],
				'serializer.normalizer.entity_reference_item.hal' => [
					'class' => 'Drupal\hal\Normalizer\EntityReferenceItemNormalizer',
					'arguments' => ['hal.link_manager', 'serializer.entity_resolver', 'entity_type.manager'],
				],
				'serializer.normalizer.field_item.hal' => ['class' => 'Drupal\hal\Normalizer\FieldItemNormalizer'],
				'serializer.normalizer.field.hal' => ['class' => 'Drupal\hal\Normalizer\FieldNormalizer'],
				'serializer.normalizer.file_entity.hal' => [
					'class' => 'Drupal\hal\Normalizer\FileEntityNormalizer',
					'deprecated' => 'The "%service_id%" normalizer service is deprecated: it is obsolete, it only remains available for backwards compatibility.',
					'arguments' => [
						'entity_type.manager',
						'hal.link_manager',
						'module_handler',
						'config.factory',
						'entity_type.repository',
						'entity_field.manager',
					],
				],
				'serializer.normalizer.timestamp_item.hal' => ['class' => 'Drupal\hal\Normalizer\TimestampItemNormalizer'],
				'serializer.normalizer.entity.hal' => [
					'class' => 'Drupal\hal\Normalizer\ContentEntityNormalizer',
					'arguments' => [
						'hal.link_manager',
						'entity_type.manager',
						'module_handler',
						'entity_type.repository',
						'entity_field.manager',
					],
				],
				'serializer.encoder.hal' => ['class' => 'Drupal\hal\Encoder\JsonEncoder'],
				'hal.link_manager' => [
					'class' => 'Drupal\hal\LinkManager\LinkManager',
					'arguments' => ['hal.link_manager.type', 'hal.link_manager.relation'],
				],
				'hal.link_manager.type' => [
					'class' => 'Drupal\hal\LinkManager\TypeLinkManager',
					'arguments' => [
						'cache.default',
						'module_handler',
						'config.factory',
						'request_stack',
						'entity_type.bundle.info',
						'entity_type.manager',
					],
				],
				'hal.link_manager.relation' => [
					'class' => 'Drupal\hal\LinkManager\RelationLinkManager',
					'arguments' => [
						'cache.default',
						'entity_type.manager',
						'module_handler',
						'config.factory',
						'request_stack',
						'entity_type.bundle.info',
						'entity_field.manager',
					],
				],
				'plugin.manager.help_section' => ['class' => 'Drupal\help\HelpSectionManager', 'parent' => 'default_plugin_manager'],
				'path_processor.image_styles' => [
					'class' => 'Drupal\image\PathProcessor\PathProcessorImageStyles',
					'arguments' => ['stream_wrapper_manager'],
				],
				'plugin.manager.image.effect' => ['class' => 'Drupal\image\ImageEffectManager', 'parent' => 'default_plugin_manager'],
				'image.page_cache_response_policy.deny_private_image_style_download' => [
					'class' => 'Drupal\image\PageCache\DenyPrivateImageStyleDownload',
					'arguments' => ['current_route_match'],
					'public' => false,
				],
				'jsonapi.serializer' => ['class' => 'Drupal\jsonapi\Serializer\Serializer', 'arguments' => ['', '']],
				'serializer.normalizer.http_exception.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\HttpExceptionNormalizer',
					'arguments' => ['current_user'],
				],
				'serializer.normalizer.unprocessable_entity_exception.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\UnprocessableHttpEntityExceptionNormalizer',
					'arguments' => ['current_user'],
				],
				'serializer.normalizer.entity_access_exception.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\EntityAccessDeniedHttpExceptionNormalizer',
					'arguments' => ['current_user'],
				],
				'serializer.normalizer.field_item.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\FieldItemNormalizer',
					'arguments' => ['entity_type.manager'],
				],
				'serializer.normalizer.field.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\FieldNormalizer'],
				'serializer.normalizer.resource_identifier.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\ResourceIdentifierNormalizer',
					'arguments' => ['entity_field.manager'],
				],
				'serializer.normalizer.data.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\DataNormalizer'],
				'serializer.normalizer.resource_object.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\ResourceObjectNormalizer'],
				'serializer.normalizer.content_entity.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\ContentEntityDenormalizer',
					'arguments' => ['entity_type.manager', 'entity_field.manager', 'plugin.manager.field.field_type'],
				],
				'serializer.normalizer.config_entity.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\ConfigEntityDenormalizer',
					'arguments' => ['entity_type.manager', 'entity_field.manager', 'plugin.manager.field.field_type'],
				],
				'serializer.normalizer.jsonapi_document_toplevel.jsonapi' => [
					'class' => 'Drupal\jsonapi\Normalizer\JsonApiDocumentTopLevelNormalizer',
					'arguments' => ['entity_type.manager', 'jsonapi.resource_type.repository'],
				],
				'serializer.normalizer.link_collection.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\LinkCollectionNormalizer'],
				'serializer.normalizer.entity_reference_field.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\EntityReferenceFieldNormalizer'],
				'serializer.encoder.jsonapi' => ['class' => 'Drupal\jsonapi\Encoder\JsonEncoder'],
				'jsonapi.resource_type.repository' => [
					'class' => 'Drupal\jsonapi\ResourceType\ResourceTypeRepository',
					'arguments' => [
						'entity_type.manager',
						'entity_type.bundle.info',
						'entity_field.manager',
						'cache.jsonapi_resource_types',
					],
				],
				'jsonapi.route_enhancer' => ['class' => 'Drupal\jsonapi\Routing\RouteEnhancer'],
				'jsonapi.field_resolver' => [
					'class' => 'Drupal\jsonapi\Context\FieldResolver',
					'arguments' => [
						'entity_type.manager',
						'entity_field.manager',
						'entity_type.bundle.info',
						'jsonapi.resource_type.repository',
						'module_handler',
					],
				],
				'jsonapi.include_resolver' => [
					'class' => 'Drupal\jsonapi\IncludeResolver',
					'arguments' => ['entity_type.manager', 'jsonapi.entity_access_checker'],
				],
				'paramconverter.jsonapi.entity_uuid' => [
					'parent' => 'paramconverter.entity',
					'class' => 'Drupal\jsonapi\ParamConverter\EntityUuidConverter',
				],
				'paramconverter.jsonapi.resource_type' => [
					'class' => 'Drupal\jsonapi\ParamConverter\ResourceTypeConverter',
					'arguments' => ['jsonapi.resource_type.repository'],
				],
				'jsonapi.exception_subscriber' => [
					'class' => 'Drupal\jsonapi\EventSubscriber\DefaultExceptionSubscriber',
					'arguments' => ['jsonapi.serializer', '%serializer.formats%'],
				],
				'logger.channel.jsonapi' => ['parent' => 'logger.channel_base', 'arguments' => ['jsonapi']],
				'cache.jsonapi_resource_types' => ['class' => 'Drupal\Core\Cache\MemoryCache\MemoryCache'],
				'jsonapi.route_filter.format_setter' => ['class' => 'Drupal\jsonapi\Routing\EarlyFormatSetter'],
				'jsonapi.entity_access_checker' => [
					'class' => 'Drupal\jsonapi\Access\EntityAccessChecker',
					'public' => false,
					'arguments' => [
						'jsonapi.resource_type.repository',
						'router.no_access_checks',
						'current_user',
						'entity.repository',
					],
				],
				'access_check.jsonapi.relationship_field_access' => [
					'class' => 'Drupal\jsonapi\Access\RelationshipFieldAccess',
					'arguments' => ['jsonapi.entity_access_checker'],
				],
				'method_filter.jsonapi' => [
					'public' => false,
					'class' => 'Drupal\jsonapi\Routing\ReadOnlyModeMethodFilter',
					'decorates' => 'method_filter',
					'arguments' => ['method_filter.jsonapi.inner', 'config.factory'],
				],
				'jsonapi.entity_resource' => [
					'class' => 'Drupal\jsonapi\Controller\EntityResource',
					'arguments' => [
						'entity_type.manager',
						'entity_field.manager',
						'jsonapi.resource_type.repository',
						'renderer',
						'entity.repository',
						'jsonapi.include_resolver',
						'jsonapi.entity_access_checker',
						'jsonapi.field_resolver',
						'jsonapi.serializer',
						'datetime.time',
						'current_user',
					],
				],
				'jsonapi.file_upload' => [
					'class' => 'Drupal\jsonapi\Controller\FileUpload',
					'arguments' => ['current_user', 'entity_field.manager', 'jsonapi.file.uploader.field', 'http_kernel'],
				],
				'jsonapi.custom_query_parameter_names_validator.subscriber' => ['class' => 'Drupal\jsonapi\EventSubscriber\JsonApiRequestValidator'],
				'jsonapi.resource_response.subscriber' => [
					'class' => 'Drupal\jsonapi\EventSubscriber\ResourceResponseSubscriber',
					'arguments' => ['jsonapi.serializer'],
				],
				'jsonapi.resource_response_validator.subscriber' => [
					'class' => 'Drupal\jsonapi\EventSubscriber\ResourceResponseValidator',
					'arguments' => ['jsonapi.serializer', 'logger.channel.jsonapi', 'module_handler', 'app.root'],
				],
				'jsonapi.version_negotiator' => ['class' => 'Drupal\jsonapi\Revisions\VersionNegotiator', 'public' => false],
				'jsonapi.version_negotiator.default' => ['arguments' => ['entity_type.manager'], 'public' => false, 'abstract' => true],
				'jsonapi.version_negotiator.id' => [
					'class' => 'Drupal\jsonapi\Revisions\VersionById',
					'parent' => 'jsonapi.version_negotiator.default',
				],
				'jsonapi.version_negotiator.rel' => [
					'class' => 'Drupal\jsonapi\Revisions\VersionByRel',
					'parent' => 'jsonapi.version_negotiator.default',
				],
				'jsonapi.resource_version.route_enhancer' => [
					'class' => 'Drupal\jsonapi\Revisions\ResourceVersionRouteEnhancer',
					'public' => false,
					'arguments' => ['jsonapi.version_negotiator'],
				],
				'serializer.normalizer.htt_exception.jsonapi' => [
					'alias' => 'serializer.normalizer.http_exception.jsonapi',
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'serializer.normalizer.http_exception.jsonapi\' service instead.',
				],
				'jsonapi.file.uploader.field' => [
					'class' => 'Drupal\jsonapi\Controller\TemporaryJsonapiFileFieldUploader',
					'public' => false,
					'arguments' => [
						'logger.channel.file',
						'file_system',
						'file.mime_type.guesser',
						'token',
						'lock',
						'config.factory',
					],
				],
				'count.jsonapi.resource_type.repository' => [
					'class' => 'Drupal\jsonapi_test_collection_count\ResourceType\CountableResourceTypeRepository',
					'public' => false,
					'decorates' => 'jsonapi.resource_type.repository',
					'parent' => 'jsonapi.resource_type.repository',
				],
				'serializer.normalizer.string.jsonapi_test_data_type' => ['class' => 'Drupal\jsonapi_test_data_type\Normalizer\StringNormalizer'],
				'serializer.normalizer.traversable_object.jsonapi_test_data_type' => ['class' => 'Drupal\jsonapi_test_data_type\Normalizer\TraversableObjectNormalizer'],
				'jsonapi.resource_type.repository.jsonapi_test_field_aliasing' => [
					'class' => 'Drupal\jsonapi_test_field_aliasing\ResourceType\AliasingResourceTypeRepository',
					'public' => false,
					'decorates' => 'jsonapi.resource_type.repository',
					'parent' => 'jsonapi.resource_type.repository',
				],
				'serializer.normalizer.string.jsonapi_test_field_type' => ['class' => 'Drupal\jsonapi_test_field_type\Normalizer\StringNormalizer'],
				'jsonapi_test_normalizers_kernel.jsonapi_document_toplevel' => ['alias' => 'serializer.normalizer.jsonapi_document_toplevel.jsonapi', 'public' => true],
				'plugin.manager.language_negotiation_method' => [
					'class' => 'Drupal\language\LanguageNegotiationMethodManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'language_negotiator' => [
					'class' => 'Drupal\language\LanguageNegotiator',
					'arguments' => [
						'language_manager',
						'plugin.manager.language_negotiation_method',
						'config.factory',
						'settings',
						'request_stack',
					],
				],
				'language.config_subscriber' => [
					'class' => 'Drupal\language\EventSubscriber\ConfigSubscriber',
					'arguments' => ['language_manager', 'language.default', 'config.factory', 'language_negotiator'],
				],
				'language.config_factory_override' => [
					'class' => 'Drupal\language\Config\LanguageConfigFactoryOverride',
					'arguments' => ['config.storage', 'event_dispatcher', 'config.typed', 'language.default'],
				],
				'language_converter' => [
					'class' => 'Drupal\language\LanguageConverter',
					'arguments' => ['language_manager'],
					'lazy' => true,
				],
				'layout_builder.tempstore_repository' => [
					'class' => 'Drupal\layout_builder\LayoutTempstoreRepository',
					'arguments' => ['tempstore.shared'],
				],
				'access_check.entity.layout_builder_access' => ['class' => 'Drupal\layout_builder\Access\LayoutBuilderAccessCheck'],
				'access_check.entity.layout' => ['class' => 'Drupal\layout_builder\Access\LayoutSectionAccessCheck'],
				'plugin.manager.layout_builder.section_storage' => [
					'class' => 'Drupal\layout_builder\SectionStorage\SectionStorageManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['context.handler'],
				],
				'layout_builder.routes' => [
					'class' => 'Drupal\layout_builder\Routing\LayoutBuilderRoutes',
					'arguments' => ['plugin.manager.layout_builder.section_storage'],
				],
				'layout_builder.param_converter' => [
					'class' => 'Drupal\layout_builder\Routing\LayoutTempstoreParamConverter',
					'arguments' => ['layout_builder.tempstore_repository', 'plugin.manager.layout_builder.section_storage'],
				],
				'cache_context.layout_builder_is_active' => [
					'class' => 'Drupal\layout_builder\Cache\LayoutBuilderIsActiveCacheContext',
					'arguments' => ['current_route_match'],
				],
				'cache_context.route.name.is_layout_builder_ui' => [
					'class' => 'Drupal\layout_builder\Cache\LayoutBuilderUiCacheContext',
					'arguments' => ['current_route_match'],
				],
				'layout_builder.sample_entity_generator' => [
					'class' => 'Drupal\layout_builder\Entity\LayoutBuilderSampleEntityGenerator',
					'arguments' => ['tempstore.shared', 'entity_type.manager'],
				],
				'layout_builder.render_block_component_subscriber' => [
					'class' => 'Drupal\layout_builder\EventSubscriber\BlockComponentRenderArray',
					'arguments' => ['current_user'],
				],
				'logger.channel.layout_builder' => ['parent' => 'logger.channel_base', 'arguments' => ['layout_builder']],
				'inline_block.usage' => ['class' => 'Drupal\layout_builder\InlineBlockUsage', 'arguments' => ['database']],
				'plugin.manager.core.layout' => [
					'class' => 'Drupal\Core\Layout\LayoutPluginManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'theme_handler'],
				],
				'layout.icon_builder' => ['class' => 'Drupal\Core\Layout\Icon\SvgIconBuilder', 'shared' => false],
				'locale.default.config.storage' => [
					'class' => 'Drupal\locale\LocaleDefaultConfigStorage',
					'arguments' => ['config.storage', 'language_manager', '%install_profile%'],
					'public' => false,
				],
				'locale.config_manager' => [
					'class' => 'Drupal\locale\LocaleConfigManager',
					'arguments' => [
						'config.storage',
						'locale.storage',
						'config.factory',
						'config.typed',
						'language_manager',
						'locale.default.config.storage',
						'config.manager',
					],
				],
				'locale.storage' => ['class' => 'Drupal\locale\StringDatabaseStorage', 'arguments' => ['database']],
				'locale.project' => ['class' => 'Drupal\locale\LocaleProjectStorage', 'arguments' => ['keyvalue']],
				'locale.plural.formula' => ['class' => 'Drupal\locale\PluralFormula', 'arguments' => ['language_manager', 'state']],
				'string_translator.locale.lookup' => [
					'class' => 'Drupal\locale\LocaleTranslation',
					'arguments' => [
						'locale.storage',
						'cache.default',
						'lock',
						'config.factory',
						'language_manager',
						'request_stack',
					],
				],
				'stream_wrapper.translations' => ['class' => 'Drupal\locale\StreamWrapper\TranslationsStream'],
				'locale.config_subscriber' => [
					'class' => 'Drupal\locale\LocaleConfigSubscriber',
					'arguments' => ['config.factory', 'locale.config_manager'],
				],
				'locale.locale_translation_cache_tag' => [
					'class' => 'Drupal\locale\EventSubscriber\LocaleTranslationCacheTag',
					'arguments' => ['cache_tags.invalidator'],
				],
				'early_translation_test.authentication.early_translation_test' => ['class' => 'Drupal\early_translation_test\Auth', 'arguments' => ['entity_type.manager']],
				'plugin.manager.media.source' => ['class' => 'Drupal\media\MediaSourceManager', 'parent' => 'default_plugin_manager'],
				'access_check.media.revision' => [
					'class' => 'Drupal\media\Access\MediaRevisionAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'media.oembed.url_resolver' => [
					'class' => 'Drupal\media\OEmbed\UrlResolver',
					'arguments' => [
						'media.oembed.provider_repository',
						'media.oembed.resource_fetcher',
						'http_client',
						'module_handler',
						'cache.default',
					],
				],
				'media.oembed.provider_repository' => [
					'class' => 'Drupal\media\OEmbed\ProviderRepository',
					'arguments' => ['http_client', 'config.factory', 'datetime.time', 'cache.default'],
				],
				'media.oembed.resource_fetcher' => [
					'class' => 'Drupal\media\OEmbed\ResourceFetcher',
					'arguments' => ['http_client', 'media.oembed.provider_repository', 'cache.default'],
				],
				'media.oembed.iframe_url_helper' => [
					'class' => 'Drupal\media\IFrameUrlHelper',
					'arguments' => ['router.request_context', 'private_key'],
				],
				'media.config_subscriber' => [
					'class' => 'Drupal\media\EventSubscriber\MediaConfigSubscriber',
					'arguments' => ['router.builder', 'cache_tags.invalidator', 'entity_type.manager'],
				],
				'media_library.ui_builder' => [
					'class' => 'Drupal\media_library\MediaLibraryUiBuilder',
					'arguments' => ['entity_type.manager', 'request_stack', 'views.executable', 'form_builder'],
				],
				'migrate.plugin_event_subscriber' => ['class' => 'Drupal\migrate\Plugin\PluginEventSubscriber'],
				'cache.migrate' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['migrate']],
				'plugin.manager.migrate.source' => [
					'class' => 'Drupal\migrate\Plugin\MigrateSourcePluginManager',
					'arguments' => ['source', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.migrate.process' => [
					'class' => 'Drupal\migrate\Plugin\MigratePluginManager',
					'arguments' => [
						'process',
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'Drupal\migrate\Annotation\MigrateProcessPlugin',
					],
				],
				'plugin.manager.migrate.destination' => [
					'class' => 'Drupal\migrate\Plugin\MigrateDestinationPluginManager',
					'arguments' => [
						'destination',
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'entity_type.manager',
					],
				],
				'plugin.manager.migrate.id_map' => [
					'class' => 'Drupal\migrate\Plugin\MigratePluginManager',
					'arguments' => ['id_map', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'cache.discovery_migration' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['discovery_migration']],
				'plugin.manager.migration' => [
					'class' => 'Drupal\migrate\Plugin\MigrationPluginManager',
					'arguments' => ['module_handler', 'cache.discovery_migration', 'language_manager'],
				],
				'plugin.manager.migrate.field' => [
					'class' => 'Drupal\migrate_drupal\Plugin\MigrateFieldPluginManager',
					'arguments' => [
						'field',
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'\Drupal\migrate_drupal\Annotation\MigrateField',
					],
				],
				'plugin.manager.migrate.cckfield' => [
					'class' => 'Drupal\migrate_drupal\Plugin\MigrateCckFieldPluginManager',
					'arguments' => [
						'cckfield',
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'\Drupal\migrate_drupal\Annotation\MigrateCckField',
					],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'plugin.manager.migrate.field\' service instead. See https://www.drupal.org/node/2751897',
				],
				'logger.channel.migrate_drupal' => ['parent' => 'logger.channel_base', 'arguments' => ['migrate_drupal']],
				'migrate_drupal.field_discovery' => [
					'class' => 'Drupal\migrate_drupal\FieldDiscovery',
					'arguments' => [
						'plugin.manager.migrate.field',
						'plugin.manager.migration',
						'logger.channel.migrate_drupal',
					],
				],
				'node.route_subscriber' => ['class' => 'Drupal\node\Routing\RouteSubscriber'],
				'node.grant_storage' => [
					'class' => 'Drupal\node\NodeGrantDatabaseStorage',
					'arguments' => ['database', 'module_handler', 'language_manager'],
				],
				'access_check.node.revision' => [
					'class' => 'Drupal\node\Access\NodeRevisionAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'access_check.node.add' => ['class' => 'Drupal\node\Access\NodeAddAccessCheck', 'arguments' => ['entity_type.manager']],
				'access_check.node.preview' => [
					'class' => 'Drupal\node\Access\NodePreviewAccessCheck',
					'arguments' => ['entity_type.manager'],
				],
				'node.admin_path.route_subscriber' => [
					'class' => 'Drupal\node\EventSubscriber\NodeAdminRouteSubscriber',
					'arguments' => ['config.factory', 'router.builder'],
				],
				'node_preview' => [
					'class' => 'Drupal\node\ParamConverter\NodePreviewConverter',
					'arguments' => ['tempstore.private'],
					'lazy' => true,
				],
				'node.page_cache_response_policy.deny_node_preview' => [
					'class' => 'Drupal\node\PageCache\DenyNodePreview',
					'arguments' => ['current_route_match'],
					'public' => false,
				],
				'cache_context.user.node_grants' => ['class' => 'Drupal\node\Cache\NodeAccessGrantsCacheContext', 'arguments' => ['current_user']],
				'node.node_route_context' => [
					'class' => 'Drupal\node\ContextProvider\NodeRouteContext',
					'arguments' => ['current_route_match'],
				],
				'http_middleware.page_cache' => [
					'class' => 'Drupal\page_cache\StackMiddleware\PageCache',
					'arguments' => ['cache.page', 'page_cache_request_policy', 'page_cache_response_policy'],
				],
				'cache.page' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['page']],
				'plugin.manager.quickedit.editor' => [
					'class' => 'Drupal\quickedit\Plugin\InPlaceEditorManager',
					'parent' => 'default_plugin_manager',
				],
				'access_check.quickedit.entity_field' => ['class' => 'Drupal\quickedit\Access\QuickEditEntityFieldAccessCheck'],
				'quickedit.editor.selector' => [
					'class' => 'Drupal\quickedit\EditorSelector',
					'arguments' => ['plugin.manager.quickedit.editor', 'plugin.manager.field.formatter'],
				],
				'quickedit.metadata.generator' => [
					'class' => 'Drupal\quickedit\MetadataGenerator',
					'arguments' => [
						'access_check.quickedit.entity_field',
						'quickedit.editor.selector',
						'plugin.manager.quickedit.editor',
					],
				],
				'plugin.manager.rest' => [
					'class' => 'Drupal\rest\Plugin\Type\ResourcePluginManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'cache.rest' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['rest']],
				'access_check.rest.csrf' => ['alias' => 'access_check.header.csrf'],
				'rest.resource_routes' => [
					'class' => 'Drupal\rest\Routing\ResourceRoutes',
					'arguments' => ['plugin.manager.rest', 'entity_type.manager', 'logger.channel.rest'],
				],
				'logger.channel.rest' => ['parent' => 'logger.channel_base', 'arguments' => ['rest']],
				'rest.resource_response.subscriber' => [
					'class' => 'Drupal\rest\EventSubscriber\ResourceResponseSubscriber',
					'arguments' => ['serializer', 'renderer', 'current_route_match'],
				],
				'rest.config_subscriber' => [
					'class' => 'Drupal\rest\EventSubscriber\RestConfigSubscriber',
					'arguments' => ['router.builder'],
				],
				'rest.resource.entity.post_route.subscriber' => [
					'class' => '\Drupal\rest\EventSubscriber\EntityResourcePostRouteSubscriber',
					'arguments' => ['entity_type.manager'],
				],
				'rest.path_processor_entity_resource_bc' => [
					'class' => '\Drupal\rest\PathProcessor\PathProcessorEntityResourceBC',
					'arguments' => ['entity_type.manager'],
				],
				'rest.route_processor_get_bc' => [
					'class' => '\Drupal\rest\RouteProcessor\RestResourceGetRouteProcessorBC',
					'arguments' => ['%serializer.formats%', 'router.route_provider'],
				],
				'rest_test.authentication.test_auth' => ['class' => 'Drupal\rest_test\Authentication\Provider\TestAuth'],
				'rest_test.authentication.test_auth_global' => ['class' => 'Drupal\rest_test\Authentication\Provider\TestAuthGlobal'],
				'rest_test.page_cache_request_policy.deny_test_auth_requests' => [
					'class' => 'Drupal\rest_test\PageCache\RequestPolicy\DenyTestAuthRequests',
					'public' => false,
				],
				'rest_test.encoder.foobar' => ['class' => 'Drupal\serialization\Encoder\JsonEncoder'],
				'plugin.manager.search' => ['class' => 'Drupal\search\SearchPluginManager', 'parent' => 'default_plugin_manager'],
				'search.search_page_repository' => [
					'class' => 'Drupal\search\SearchPageRepository',
					'arguments' => ['config.factory', 'entity_type.manager'],
				],
				'serializer' => ['class' => 'Symfony\Component\Serializer\Serializer', 'arguments' => ['', '']],
				'serializer.normalizer.config_entity' => [
					'class' => 'Drupal\serialization\Normalizer\ConfigEntityNormalizer',
					'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
				],
				'serializer.normalizer.content_entity' => [
					'class' => 'Drupal\serialization\Normalizer\ContentEntityNormalizer',
					'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
				],
				'serializer.normalizer.entity' => [
					'class' => 'Drupal\serialization\Normalizer\EntityNormalizer',
					'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
				],
				'serializer.normalizer.primitive_data' => ['class' => 'Drupal\serialization\Normalizer\PrimitiveDataNormalizer'],
				'serializer.normalizer.complex_data' => ['class' => 'Drupal\serialization\Normalizer\ComplexDataNormalizer'],
				'serializer.normalizer.entity_reference_field_item' => [
					'class' => 'Drupal\serialization\Normalizer\EntityReferenceFieldItemNormalizer',
					'arguments' => ['entity.repository'],
				],
				'serialization.normalizer.field_item' => ['class' => 'Drupal\serialization\Normalizer\FieldItemNormalizer'],
				'serialization.normalizer.field' => ['class' => 'Drupal\serialization\Normalizer\FieldNormalizer'],
				'serializer.normalizer.list' => ['class' => 'Drupal\serialization\Normalizer\ListNormalizer'],
				'serializer.normalizer.timestamp_item' => ['class' => 'Drupal\serialization\Normalizer\TimestampItemNormalizer'],
				'serializer.normalizer.timestamp' => [
					'class' => 'Drupal\serialization\Normalizer\TimestampNormalizer',
					'arguments' => ['config.factory'],
				],
				'serializer.normalizer.datetimeiso8601' => [
					'class' => '\Drupal\serialization\Normalizer\DateTimeIso8601Normalizer',
					'arguments' => ['config.factory'],
				],
				'serializer.normalizer.password_field_item' => [
					'class' => 'Drupal\serialization\Normalizer\NullNormalizer',
					'arguments' => ['Drupal\Core\Field\Plugin\Field\FieldType\PasswordItem'],
				],
				'serializer.normalizer.safe_string' => ['class' => 'Drupal\serialization\Normalizer\MarkupNormalizer'],
				'serializer.normalizer.typed_data' => ['class' => 'Drupal\serialization\Normalizer\TypedDataNormalizer'],
				'serializer.encoder.json' => ['class' => 'Drupal\serialization\Encoder\JsonEncoder'],
				'serializer.encoder.xml' => ['class' => 'Drupal\serialization\Encoder\XmlEncoder'],
				'serializer.entity_resolver' => ['class' => 'Drupal\serialization\EntityResolver\ChainEntityResolver'],
				'serializer.entity_resolver.uuid' => [
					'class' => 'Drupal\serialization\EntityResolver\UuidResolver',
					'arguments' => ['entity.repository'],
				],
				'serialization.entity_resolver.target_id' => ['class' => 'Drupal\serialization\EntityResolver\TargetIdResolver'],
				'serialization.exception.default' => [
					'class' => 'Drupal\serialization\EventSubscriber\DefaultExceptionSubscriber',
					'arguments' => ['serializer', '%serializer.formats%'],
				],
				'serialization.user_route_alter_subscriber' => [
					'class' => 'Drupal\serialization\EventSubscriber\UserRouteAlterSubscriber',
					'arguments' => ['%serializer.formats%'],
				],
				'serialization.bc_config_subscriber' => [
					'class' => 'Drupal\serialization\EventSubscriber\BcConfigSubscriber',
					'arguments' => ['kernel'],
				],
				'serializer.normalizer.silly_fielditem' => ['class' => 'Drupal\field_normalization_test\Normalization\TextItemSillyNormalizer'],
				'serializer.normalizer.boolean.datatype.emoji' => ['class' => 'Drupal\test_datatype_boolean_emoji_normalizer\Normalizer\BooleanNormalizer'],
				'serializer.normalizer.boolean.fieldtype.emoji' => ['class' => 'Drupal\test_fieldtype_boolean_emoji_normalizer\Normalizer\BooleanItemNormalizer'],
				'serializer.normalizer.serialization_test' => ['class' => 'Drupal\serialization_test\SerializationTestNormalizer'],
				'serializer.encoder.serialization_test' => ['class' => 'Drupal\serialization_test\SerializationTestEncoder'],
				'access_check.settings_tray.block.has_overrides' => ['class' => 'Drupal\settings_tray\Access\BlockHasOverridesAccessCheck'],
				'access_check.settings_tray.block.settings_tray_form' => ['class' => 'Drupal\settings_tray\Access\BlockPluginHasSettingsTrayFormAccessCheck'],
				'settings_tray.route_processor_off_canvas_form_bc' => [
					'class' => '\Drupal\settings_tray\RouteProcessor\BlockEntityOffCanvasFormRouteProcessorBC',
					'arguments' => ['router.route_provider'],
					'public' => false,
				],
				'settings_tray_override_test.overrider' => ['class' => 'Drupal\settings_tray_override_test\ConfigOverrider'],
				'test_discovery' => [
					'class' => 'Drupal\simpletest\TestDiscovery',
					'arguments' => ['app.root', 'class_loader', 'module_handler'],
				],
				'cache_context.test_discovery' => [
					'class' => 'Drupal\simpletest\Cache\Context\TestDiscoveryCacheContext',
					'arguments' => ['test_discovery', 'private_key'],
				],
				'statistics.storage.node' => [
					'class' => 'Drupal\statistics\NodeStatisticsDatabaseStorage',
					'arguments' => ['database', 'state', 'request_stack'],
				],
				'logger.syslog' => [
					'class' => 'Drupal\syslog\Logger\SysLog',
					'arguments' => ['config.factory', 'logger.log_message_parser'],
				],
				'logger.syslog_test' => [
					'parent' => 'logger.syslog',
					'class' => 'Drupal\syslog_test\Logger\SysLogTest',
					'arguments' => ['config.factory', 'logger.log_message_parser'],
				],
				'access_check.cron' => ['class' => 'Drupal\system\Access\CronAccessCheck'],
				'access_check.db_update' => ['class' => 'Drupal\system\Access\DbUpdateAccessCheck'],
				'system.manager' => [
					'class' => 'Drupal\system\SystemManager',
					'arguments' => [
						'module_handler',
						'entity.manager',
						'request_stack',
						'menu.link_tree',
						'menu.active_trail',
					],
				],
				'system.breadcrumb.default' => [
					'class' => 'Drupal\system\PathBasedBreadcrumbBuilder',
					'arguments' => [
						'router.request_context',
						'access_manager',
						'router',
						'path_processor_manager',
						'config.factory',
						'title_resolver',
						'current_user',
						'path.current',
						'path.matcher',
					],
				],
				'path_processor.files' => ['class' => 'Drupal\system\PathProcessor\PathProcessorFiles'],
				'system.admin_path.route_subscriber' => ['class' => 'Drupal\system\EventSubscriber\AdminRouteSubscriber'],
				'theme.negotiator.system.batch' => [
					'class' => 'Drupal\system\Theme\BatchNegotiator',
					'arguments' => ['batch.storage', 'request_stack'],
				],
				'theme.negotiator.system.db_update' => ['class' => 'Drupal\system\Theme\DbUpdateNegotiator', 'arguments' => ['config.factory']],
				'system.config_subscriber' => ['class' => 'Drupal\system\SystemConfigSubscriber', 'arguments' => ['router.builder']],
				'system.config_cache_tag' => [
					'class' => 'Drupal\system\EventSubscriber\ConfigCacheTag',
					'arguments' => ['theme_handler', 'cache_tags.invalidator'],
				],
				'accept_header_matcher' => ['class' => 'Drupal\accept_header_routing_test\Routing\AcceptHeaderMatcher'],
				'main_content_renderer.json' => [
					'class' => 'Drupal\common_test\Render\MainContent\JsonRenderer',
					'arguments' => ['title_resolver', 'renderer'],
				],
				'main_content_renderer.wide_modal' => [
					'class' => 'Drupal\dialog_renderer_test\Render\MainContent\WideModalRenderer',
					'arguments' => ['title_resolver', 'wide'],
				],
				'main_content_renderer.extra_wide_modal' => [
					'class' => 'Drupal\dialog_renderer_test\Render\MainContent\WideModalRenderer',
					'arguments' => ['title_resolver', 'extra_wide'],
				],
				'display_variant_test.page_display_variant_subscriber' => ['class' => 'Drupal\display_variant_test\EventSubscriber\TestPageDisplayVariantSubscriber'],
				'test_domain_object.view_subscriber' => ['class' => 'Drupal\early_rendering_controller_test\TestDomainObjectViewSubscriber'],
				'entity_test.definition.subscriber' => ['class' => 'Drupal\entity_test\EntityTestDefinitionSubscriber', 'arguments' => ['state']],
				'cache_context.entity_test_view_grants' => ['class' => 'Drupal\entity_test\Cache\EntityTestViewGrantsCacheContext'],
				'http_middleware.monkeys' => ['class' => 'Drupal\error_service_test\MonkeysInTheControlRoom', 'arguments' => ['settings']],
				'broken_class_with_missing_dependency' => ['class' => 'Drupal\error_service_test\LonelyMonkeyClass'],
				'logger.broken' => ['class' => 'Drupal\error_service_test\Logger\TestLog'],
				'form_test.form.serviceform' => ['class' => 'Drupal\form_test\FormTestServiceObject', 'arguments' => ['config.factory']],
				'form_test.event_subscriber' => ['class' => 'Drupal\form_test\EventSubscriber\FormTestEventSubscriber'],
				'form_test.http_middleware' => ['class' => 'Drupal\form_test\StackMiddleware\FormTestMiddleware'],
				'hold_test.response' => ['class' => 'Drupal\hold_test\EventSubscriber\HoldTestSubscriber'],
				'httpkernel_test.test_middleware' => ['class' => 'Drupal\httpkernel_test\HttpKernel\TestMiddleware'],
				'httpkernel_test.test_middleware2' => [
					'class' => 'Drupal\httpkernel_test\HttpKernel\TestMiddleware',
					'arguments' => ['test_argument'],
				],
				'plugin.manager.lazy_route_provider_install_test' => [
					'class' => '\Drupal\lazy_route_provider_install_test\PluginManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['url_generator'],
				],
				'theme.negotiator.test_theme' => ['class' => 'Drupal\menu_test\Theme\TestThemeNegotiator'],
				'access_check.menu_test_session' => ['class' => 'Drupal\menu_test\Access\AccessCheck'],
				'module_cachebin.cache_bin' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['module_cachebin']],
				'module_install_class_loader_test1.event_subscriber' => ['class' => 'Drupal\module_install_class_loader_test2\EventSubscriber'],
				'service_provider_test_class' => [
					'class' => 'Drupal\service_provider_test\TestClass',
					'parent' => 'container.trait',
					'arguments' => ['state'],
				],
				'session_test.subscriber' => ['class' => 'Drupal\session_test\EventSubscriber\SessionTestSubscriber'],
				'session_test.session_handler.test_proxy' => ['class' => 'Drupal\session_test\Session\TestSessionHandlerProxy'],
				'session_test.session_handler.test_proxy2' => [
					'class' => 'Drupal\session_test\Session\TestSessionHandlerProxy',
					'arguments' => ['test_argument'],
				],
				'session_test.session_handler_proxy_trace' => ['class' => 'ArrayObject'],
				'theme_test.subscriber' => [
					'class' => 'Drupal\theme_test\EventSubscriber\ThemeTestSubscriber',
					'arguments' => ['current_route_match', 'renderer'],
				],
				'theme.negotiator.test_custom_theme' => ['class' => 'Drupal\theme_test\Theme\CustomThemeNegotiator'],
				'theme.negotiator.high_priority' => ['class' => 'Drupal\theme_test\Theme\HighPriorityThemeNegotiator'],
				'twig_extension_test.twig.test_extension' => ['class' => 'Drupal\twig_extension_test\TwigExtension\TestExtension'],
				'twig_loader_test.twig.test_loader' => ['class' => 'Drupal\twig_loader_test\Loader\TestLoader'],
				'update_script_test.broken_path_processor' => [
					'class' => 'Drupal\update_script_test\PathProcessor\BrokenInboundPathProcessor',
					'arguments' => ['state'],
				],
				'url_alter_test.path_processor' => ['class' => 'Drupal\url_alter_test\PathProcessorTest'],
				'taxonomy_term.breadcrumb' => [
					'class' => 'Drupal\taxonomy\TermBreadcrumbBuilder',
					'arguments' => ['entity_type.manager', 'entity.repository'],
				],
				'cache.toolbar' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['toolbar']],
				'toolbar.page_cache_request_policy.allow_toolbar_path' => ['class' => 'Drupal\toolbar\PageCache\AllowToolbarPath'],
				'toolbar.menu_tree' => [
					'class' => 'Drupal\toolbar\Menu\ToolbarMenuLinkTree',
					'arguments' => [
						'menu.tree_storage',
						'plugin.manager.menu.link',
						'router.route_provider',
						'menu.active_trail',
						'controller_resolver',
					],
				],
				'plugin.manager.tour.tip' => ['class' => 'Drupal\tour\TipPluginManager', 'parent' => 'default_plugin_manager'],
				'access_check.update.manager_access' => ['class' => 'Drupal\update\Access\UpdateManagerAccessCheck', 'arguments' => ['settings']],
				'update.manager' => [
					'class' => 'Drupal\update\UpdateManager',
					'arguments' => [
						'config.factory',
						'module_handler',
						'update.processor',
						'string_translation',
						'keyvalue.expirable',
						'theme_handler',
					],
				],
				'update.processor' => [
					'class' => 'Drupal\update\UpdateProcessor',
					'arguments' => [
						'config.factory',
						'queue',
						'update.fetcher',
						'state',
						'private_key',
						'keyvalue',
						'keyvalue.expirable',
					],
				],
				'update.fetcher' => ['class' => 'Drupal\update\UpdateFetcher', 'arguments' => ['config.factory', 'http_client']],
				'update.root' => ['class' => 'SplString'],
				'update.root.factory' => [
					'class' => 'Drupal\update\UpdateRootFactory',
					'arguments' => ['kernel', 'request_stack'],
					'public' => false,
				],
				'access_check.permission' => ['class' => 'Drupal\user\Access\PermissionAccessCheck'],
				'access_check.user.register' => ['class' => 'Drupal\user\Access\RegisterAccessCheck'],
				'access_check.user.role' => ['class' => 'Drupal\user\Access\RoleAccessCheck'],
				'access_check.user.login_status' => ['class' => 'Drupal\user\Access\LoginStatusCheck'],
				'user.authentication.cookie' => [
					'class' => 'Drupal\user\Authentication\Provider\Cookie',
					'arguments' => ['session_configuration', 'database'],
				],
				'user.data' => ['class' => 'Drupal\user\UserData', 'arguments' => ['database']],
				'user_maintenance_mode_subscriber' => [
					'class' => 'Drupal\user\EventSubscriber\MaintenanceModeSubscriber',
					'arguments' => ['maintenance_mode', 'current_user'],
				],
				'user_access_denied_subscriber' => [
					'class' => 'Drupal\user\EventSubscriber\AccessDeniedSubscriber',
					'arguments' => ['current_user'],
				],
				'user_last_access_subscriber' => [
					'class' => 'Drupal\user\EventSubscriber\UserRequestSubscriber',
					'arguments' => ['current_user', 'entity_type.manager'],
				],
				'theme.negotiator.admin_theme' => [
					'class' => 'Drupal\user\Theme\AdminNegotiator',
					'arguments' => ['current_user', 'config.factory', 'entity_type.manager', 'router.admin_context'],
				],
				'user.auth' => ['class' => 'Drupal\user\UserAuth', 'arguments' => ['entity_type.manager', 'password']],
				'user.private_tempstore' => [
					'class' => 'Drupal\user\PrivateTempStoreFactory',
					'arguments' => ['keyvalue.expirable', 'lock', 'current_user', 'request_stack', '%tempstore.expire%'],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'tempstore.private\' service instead. See https://www.drupal.org/node/2935639.',
				],
				'user.shared_tempstore' => [
					'class' => 'Drupal\user\SharedTempStoreFactory',
					'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%'],
					'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'tempstore.shared\' service instead. See https://www.drupal.org/node/2935639.',
				],
				'user.permissions' => [
					'class' => 'Drupal\user\PermissionHandler',
					'arguments' => ['module_handler', 'string_translation', 'controller_resolver'],
				],
				'user.current_user_context' => [
					'class' => 'Drupal\user\ContextProvider\CurrentUserContext',
					'arguments' => ['current_user', 'entity_type.manager'],
				],
				'user.toolbar_link_builder' => ['class' => 'Drupal\user\ToolbarLinkBuilder', 'arguments' => ['current_user']],
				'cache_context.views_test_cache_context' => ['class' => 'Drupal\views_test_data\Cache\ViewsTestCacheContext'],
				'plugin.manager.views.access' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['access', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.area' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => ['area', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.argument' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => [
						'argument',
						'container.namespaces',
						'views.views_data',
						'cache.discovery',
						'module_handler',
					],
				],
				'plugin.manager.views.argument_default' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['argument_default', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.argument_validator' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['argument_validator', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.cache' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['cache', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.display_extender' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['display_extender', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.display' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['display', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.exposed_form' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['exposed_form', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.field' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => ['field', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.filter' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => [
						'filter',
						'container.namespaces',
						'views.views_data',
						'cache.discovery',
						'module_handler',
					],
				],
				'plugin.manager.views.join' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => ['join', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.pager' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['pager', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.query' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['query', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.relationship' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => [
						'relationship',
						'container.namespaces',
						'views.views_data',
						'cache.discovery',
						'module_handler',
					],
				],
				'plugin.manager.views.row' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['row', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.sort' => [
					'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
					'arguments' => ['sort', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.style' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['style', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'plugin.manager.views.wizard' => [
					'class' => 'Drupal\views\Plugin\ViewsPluginManager',
					'arguments' => ['wizard', 'container.namespaces', 'cache.discovery', 'module_handler'],
				],
				'views.views_data' => [
					'class' => 'Drupal\views\ViewsData',
					'arguments' => ['cache.default', 'config.factory', 'module_handler', 'language_manager'],
				],
				'views.views_data_helper' => ['class' => 'Drupal\views\ViewsDataHelper', 'arguments' => ['views.views_data']],
				'views.executable' => [
					'class' => 'Drupal\views\ViewExecutableFactory',
					'arguments' => ['current_user', 'request_stack', 'views.views_data', 'router.route_provider'],
				],
				'views.analyzer' => ['class' => 'Drupal\views\Analyzer', 'arguments' => ['module_handler']],
				'views.route_subscriber' => [
					'class' => 'Drupal\views\EventSubscriber\RouteSubscriber',
					'arguments' => ['entity_type.manager', 'state'],
				],
				'views.exposed_form_cache' => ['class' => 'Drupal\views\ExposedFormCache'],
				'views.entity_schema_subscriber' => [
					'class' => 'Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber',
					'arguments' => ['entity_type.manager', 'logger.channel.default'],
				],
				'views.date_sql' => ['class' => 'Drupal\views\Plugin\views\query\MysqlDateSql', 'arguments' => ['database']],
				'pgsql.views.date_sql' => [
					'class' => 'Drupal\views\Plugin\views\query\PostgresqlDateSql',
					'arguments' => ['database'],
					'public' => false,
				],
				'sqlite.views.date_sql' => [
					'class' => 'Drupal\views\Plugin\views\query\SqliteDateSql',
					'arguments' => ['database'],
					'public' => false,
				],
				'paramconverter.views_ui' => [
					'class' => 'Drupal\views_ui\ParamConverter\ViewUIConverter',
					'arguments' => [
						'entity_type.manager',
						'tempstore.shared',
						'config.factory',
						'router.admin_context',
						'entity.repository',
					],
					'lazy' => true,
				],
				'plugin.manager.workflows.type' => ['class' => 'Drupal\workflows\WorkflowTypeManager', 'parent' => 'default_plugin_manager'],
				'workflows.access_check.extended_permissions' => ['class' => '\Drupal\workflows\WorkflowStateTransitionOperationsAccessCheck'],
				'workflows.access_check.delete_state' => ['class' => '\Drupal\workflows\WorkflowDeleteAccessCheck'],
				'workspaces.manager' => [
					'class' => 'Drupal\workspaces\WorkspaceManager',
					'arguments' => [
						'request_stack',
						'entity_type.manager',
						'entity.memory_cache',
						'current_user',
						'state',
						'logger.channel.workspaces',
						'class_resolver',
					],
				],
				'workspaces.operation_factory' => [
					'class' => 'Drupal\workspaces\WorkspaceOperationFactory',
					'arguments' => ['entity_type.manager', 'database', 'workspaces.manager'],
				],
				'workspaces.negotiator.default' => [
					'class' => 'Drupal\workspaces\Negotiator\DefaultWorkspaceNegotiator',
					'arguments' => ['entity_type.manager'],
				],
				'workspaces.negotiator.session' => [
					'class' => 'Drupal\workspaces\Negotiator\SessionWorkspaceNegotiator',
					'arguments' => ['current_user', 'session', 'entity_type.manager'],
				],
				'workspaces.negotiator.query_parameter' => [
					'class' => 'Drupal\workspaces\Negotiator\QueryParameterWorkspaceNegotiator',
					'parent' => 'workspaces.negotiator.session',
				],
				'cache_context.workspace' => ['class' => 'Drupal\workspaces\WorkspaceCacheContext', 'arguments' => ['workspaces.manager']],
				'logger.channel.workspaces' => ['parent' => 'logger.channel_base', 'arguments' => ['workspaces']],
				'workspaces.entity.query.sql' => [
					'decorates' => 'entity.query.sql',
					'class' => 'Drupal\workspaces\EntityQuery\QueryFactory',
					'arguments' => ['database', 'workspaces.manager'],
					'public' => false,
					'decoration_priority' => 50,
				],
				'pgsql.workspaces.entity.query.sql' => [
					'decorates' => 'pgsql.entity.query.sql',
					'class' => 'Drupal\workspaces\EntityQuery\PgsqlQueryFactory',
					'arguments' => ['database', 'workspaces.manager'],
					'public' => false,
					'decoration_priority' => 50,
				],
				'address.address_format_repository' => [
					'class' => 'Drupal\address\Repository\AddressFormatRepository',
					'arguments' => ['event_dispatcher'],
				],
				'address.country_repository' => [
					'class' => 'Drupal\address\Repository\CountryRepository',
					'arguments' => ['cache.data', 'language_manager'],
				],
				'address.subdivision_repository' => [
					'class' => 'Drupal\address\Repository\SubdivisionRepository',
					'arguments' => ['address.address_format_repository', 'event_dispatcher', 'cache.data'],
				],
				'address.postal_label_formatter' => [
					'class' => 'CommerceGuys\Addressing\Formatter\PostalLabelFormatter',
					'arguments' => [
						'address.address_format_repository',
						'address.country_repository',
						'address.subdivision_repository',
					],
				],
				'address_test.event_subscriber' => ['class' => 'Drupal\address_test\EventSubscriber\AddressTestEventSubscriber'],
				'address_test.great_britain_subscriber' => ['class' => 'Drupal\address_test\EventSubscriber\GreatBritainEventSubscriber'],
				'auto_entitylabel.route_subscriber' => [
					'class' => 'Drupal\auto_entitylabel\Routing\RouteSubscriber',
					'arguments' => ['entity.manager'],
				],
				'auto_entitylabel.route_enhancer' => [
					'class' => 'Drupal\auto_entitylabel\Routing\RouteEnhancer',
					'arguments' => ['entity.manager'],
				],
				'auto_entitylabel.manager' => [
					'class' => 'Drupal\auto_entitylabel\AutoEntityLabelManager',
					'arguments' => ['entity.manager', 'config.factory', 'entity_type.manager', 'token'],
				],
				'auto_entitylabel.entity_decorator' => [
					'class' => 'Drupal\auto_entitylabel\EntityDecorator',
					'arguments' => ['config.factory', 'entity_type.manager', 'token'],
				],
				'cer.cer_subscriber' => ['class' => 'Drupal\cer\EventSubscriber\CerSubscriber'],
				'ctools.wizard.form' => [
					'class' => 'Drupal\ctools\Controller\WizardFormController',
					'arguments' => ['controller_resolver', 'form_builder', 'ctools.wizard.factory'],
				],
				'ctools.wizard.entity.form' => [
					'class' => 'Drupal\ctools\Controller\WizardEntityFormController',
					'arguments' => ['controller_resolver', 'form_builder', 'ctools.wizard.factory', 'entity_type.manager'],
				],
				'ctools.wizard_enhancer' => ['class' => 'Drupal\ctools\Routing\Enhancer\WizardEnhancer'],
				'ctools.wizard.factory' => [
					'class' => 'Drupal\ctools\Wizard\WizardFactory',
					'arguments' => ['form_builder', 'event_dispatcher', 'renderer'],
				],
				'ctools.paramconverter.tempstore' => [
					'class' => 'Drupal\ctools\ParamConverter\TempstoreConverter',
					'arguments' => ['tempstore.shared', 'entity_type.manager'],
				],
				'ctools.typed_data.resolver' => [
					'class' => 'Drupal\ctools\TypedDataResolver',
					'arguments' => ['typed_data_manager', 'string_translation'],
				],
				'ctools.access' => ['class' => 'Drupal\ctools\Access\TempstoreAccess', 'arguments' => ['tempstore.shared']],
				'plugin.manager.ctools.relationship' => ['class' => 'Drupal\ctools\Plugin\RelationshipManager', 'parent' => 'default_plugin_manager'],
				'ctools.context_mapper' => ['class' => 'Drupal\ctools\ContextMapper', 'arguments' => ['entity.repository']],
				'ctools.serializable.tempstore.factory' => [
					'class' => 'Drupal\ctools\SerializableTempstoreFactory',
					'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%', 'current_user'],
				],
				'diff.route_subscriber' => ['class' => 'Drupal\diff\Routing\RouteSubscriber'],
				'diff.diff.formatter' => ['class' => 'Drupal\diff\DiffFormatter', 'arguments' => ['config.factory']],
				'plugin.manager.diff.builder' => [
					'class' => 'Drupal\diff\DiffBuilderManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['entity_type.manager', 'config.factory'],
				],
				'plugin.manager.diff.layout' => [
					'class' => 'Drupal\diff\DiffLayoutManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['entity_type.manager', 'config.factory'],
				],
				'diff.entity_parser' => [
					'class' => 'Drupal\diff\DiffEntityParser',
					'arguments' => ['plugin.manager.diff.builder', 'config.factory'],
				],
				'diff.entity_comparison' => [
					'class' => 'Drupal\diff\DiffEntityComparison',
					'arguments' => [
						'config.factory',
						'diff.diff.formatter',
						'plugin.manager.field.field_type',
						'diff.entity_parser',
						'plugin.manager.diff.builder',
					],
				],
				'diff.html_diff' => ['class' => 'HtmlDiffAdvanced'],
				'theme.negotiator.visual_diff' => ['class' => 'Drupal\diff\VisualDiffThemeNegotiator', 'arguments' => ['config.factory']],
				'plugin.manager.ds' => ['class' => 'Drupal\ds\Plugin\DsPluginManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.ds.field.layout' => [
					'class' => 'Drupal\ds\Plugin\DsFieldTemplatePluginManager',
					'parent' => 'default_plugin_manager',
				],
				'ds.route_subscriber' => ['class' => 'Drupal\ds\Routing\RouteSubscriber', 'arguments' => ['entity_type.manager']],
				'ds_devel.route_subscriber' => ['class' => 'Drupal\ds_devel\Routing\RouteSubscriber', 'arguments' => ['entity.manager']],
				'ds_extras.route_subscriber' => ['class' => 'Drupal\ds_extras\EventSubscriber\RouteSubscriber'],
				'plugin.manager.entity_browser.display' => ['class' => 'Drupal\entity_browser\DisplayManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.entity_browser.selection_display' => [
					'class' => 'Drupal\entity_browser\SelectionDisplayManager',
					'parent' => 'default_plugin_manager',
				],
				'plugin.manager.entity_browser.widget' => ['class' => 'Drupal\entity_browser\WidgetManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.entity_browser.widget_selector' => [
					'class' => 'Drupal\entity_browser\WidgetSelectorManager',
					'parent' => 'default_plugin_manager',
				],
				'plugin.manager.entity_browser.field_widget_display' => [
					'class' => 'Drupal\entity_browser\FieldWidgetDisplayManager',
					'parent' => 'default_plugin_manager',
				],
				'plugin.manager.entity_browser.widget_validation' => [
					'class' => 'Drupal\entity_browser\WidgetValidationManager',
					'parent' => 'default_plugin_manager',
				],
				'entity_browser.route_subscriber' => [
					'class' => 'Drupal\entity_browser\RouteSubscriber',
					'arguments' => ['entity.manager', 'plugin.manager.entity_browser.display'],
				],
				'entity_browser.selection_storage' => [
					'class' => 'Drupal\Core\KeyValueStore\KeyValueStoreExpirableInterface',
					'arguments' => ['entity_browser'],
				],
				'cache_context.eb_dummy' => ['class' => 'Drupal\entity_browser_test\Cache\Context\DummyCacheContext'],
				'plugin.manager.entity_limit' => [
					'class' => 'Drupal\entity_limit\EntityLimitPluginManager',
					'parent' => 'default_plugin_manager',
				],
				'entity_limit.inspector' => [
					'class' => 'Drupal\entity_limit\EntityLimitInspector',
					'arguments' => ['entity.manager', 'plugin.manager.entity_limit'],
				],
				'plugin.manager.entity_usage.track' => [
					'class' => 'Drupal\entity_usage\EntityUsageTrackManager',
					'parent' => 'default_plugin_manager',
				],
				'entity_usage.usage' => [
					'class' => 'Drupal\entity_usage\EntityUsage',
					'arguments' => ['database', 'event_dispatcher', 'config.factory', 'module_handler'],
				],
				'entity_usage.entity_update_manager' => [
					'class' => 'Drupal\entity_usage\EntityUpdateManager',
					'arguments' => ['entity_usage.usage', 'plugin.manager.entity_usage.track', 'config.factory'],
				],
				'entity_usage.route_subscriber' => [
					'class' => 'Drupal\entity_usage\Routing\RouteSubscriber',
					'arguments' => ['entity_type.manager', 'config.factory'],
				],
				'plugin.manager.field_group.formatters' => [
					'class' => 'Drupal\field_group\FieldGroupFormatterPluginManager',
					'parent' => 'default_plugin_manager',
				],
				'field_group.subscriber' => ['class' => 'Drupal\field_group\Routing\RouteSubscriber', 'arguments' => ['entity.manager']],
				'field_group.param_converter' => ['class' => 'Drupal\field_group\Routing\FieldGroupConverter'],
				'field_permissions.permissions_service' => [
					'class' => 'Drupal\field_permissions\FieldPermissionsService',
					'arguments' => ['entity_type.manager', 'plugin.field_permissions.types.manager'],
				],
				'plugin.field_permissions.types.manager' => [
					'class' => 'Drupal\field_permissions\Plugin\FieldPermissionType\Manager',
					'parent' => 'default_plugin_manager',
				],
				'geolocation.ajax_subscriber' => ['class' => 'Drupal\geolocation\EventSubscriber\AjaxResponseSubscriber'],
				'plugin.manager.geolocation.geocoder' => ['class' => 'Drupal\geolocation\GeocoderManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.dataprovider' => ['class' => 'Drupal\geolocation\DataProviderManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.mapprovider' => ['class' => 'Drupal\geolocation\MapProviderManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.mapcenter' => ['class' => 'Drupal\geolocation\MapCenterManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.location' => ['class' => 'Drupal\geolocation\LocationManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.mapfeature' => ['class' => 'Drupal\geolocation\MapFeatureManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.locationinput' => ['class' => 'Drupal\geolocation\LocationInputManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.geolocation.geocoder_country_formatting' => [
					'class' => 'Drupal\geolocation\GeocoderCountryFormattingManager',
					'parent' => 'default_plugin_manager',
				],
				'plugin.manager.metatag.tag' => ['class' => 'Drupal\metatag\MetatagTagPluginManager', 'parent' => 'default_plugin_manager'],
				'plugin.manager.metatag.group' => ['class' => 'Drupal\metatag\MetatagGroupPluginManager', 'parent' => 'default_plugin_manager'],
				'metatag.token' => ['class' => 'Drupal\metatag\MetatagToken', 'arguments' => ['token']],
				'metatag.manager' => [
					'class' => 'Drupal\metatag\MetatagManager',
					'arguments' => [
						'plugin.manager.metatag.group',
						'plugin.manager.metatag.tag',
						'metatag.token',
						'logger.factory',
						'entity_type.manager',
					],
				],
				'plugin.manager.paragraphs.behavior' => [
					'class' => 'Drupal\paragraphs\ParagraphsBehaviorManager',
					'parent' => 'default_plugin_manager',
					'arguments' => ['entity_type.manager', 'config.factory'],
				],
				'paragraphs_type.uuid_lookup' => [
					'class' => '\Drupal\paragraphs\ParagraphsTypeIconUuidLookup',
					'arguments' => ['cache.bootstrap', 'lock', 'entity_type.manager'],
				],
				'paragraphs_collection.style_discovery' => [
					'class' => '\Drupal\paragraphs_collection\StyleDiscovery',
					'arguments' => [
						'module_handler',
						'string_translation',
						'controller_resolver',
						'cache.discovery',
						'theme_handler',
						'config.factory',
						'current_user',
					],
				],
				'paragraphs_collection.grid_layout_discovery' => [
					'class' => '\Drupal\paragraphs_collection\GridLayoutDiscovery',
					'arguments' => ['module_handler', 'cache.discovery', 'theme_handler'],
				],
				'paragraphs_collection.style_config_cache_tag_invalidator' => [
					'class' => 'Drupal\paragraphs_collection\EventSubscriber\ParagraphsCollectionStyleConfigCacheTag',
					'arguments' => ['cache_tags.invalidator'],
				],
				'pathauto.generator' => [
					'class' => 'Drupal\pathauto\PathautoGenerator',
					'arguments' => [
						'config.factory',
						'module_handler',
						'token',
						'pathauto.alias_cleaner',
						'pathauto.alias_storage_helper',
						'pathauto.alias_uniquifier',
						'pathauto.verbose_messenger',
						'string_translation',
						'token.entity_mapper',
						'entity_type.manager',
						'plugin.manager.alias_type',
					],
				],
				'pathauto.alias_cleaner' => [
					'class' => 'Drupal\pathauto\AliasCleaner',
					'arguments' => [
						'config.factory',
						'pathauto.alias_storage_helper',
						'language_manager',
						'cache.discovery',
						'transliteration',
						'module_handler',
					],
				],
				'pathauto.alias_storage_helper' => [
					'class' => 'Drupal\pathauto\AliasStorageHelper',
					'arguments' => [
						'config.factory',
						'path.alias_storage',
						'database',
						'pathauto.verbose_messenger',
						'string_translation',
					],
				],
				'pathauto.alias_uniquifier' => [
					'class' => 'Drupal\pathauto\AliasUniquifier',
					'arguments' => [
						'config.factory',
						'pathauto.alias_storage_helper',
						'module_handler',
						'router.route_provider',
						'path.alias_manager',
					],
				],
				'pathauto.verbose_messenger' => [
					'class' => 'Drupal\pathauto\VerboseMessenger',
					'arguments' => ['config.factory', 'current_user', 'messenger'],
				],
				'plugin.manager.alias_type' => ['class' => 'Drupal\pathauto\AliasTypeManager', 'parent' => 'default_plugin_manager'],
				'pathauto.settings_cache_tag' => [
					'class' => 'Drupal\pathauto\EventSubscriber\PathautoSettingsCacheTag',
					'arguments' => ['entity_field.manager', 'plugin.manager.alias_type'],
				],
				'redirect.404_subscriber' => [
					'class' => 'Drupal\redirect_404\EventSubscriber\Redirect404Subscriber',
					'arguments' => [
						'path.current',
						'path.matcher',
						'request_stack',
						'language_manager',
						'redirect.not_found_storage',
						'config.factory',
					],
				],
				'redirect.not_found_storage' => [
					'class' => 'Drupal\redirect_404\SqlRedirectNotFoundStorage',
					'arguments' => ['database', 'config.factory'],
				],
				'logger.redirect_404' => [
					'public' => false,
					'class' => '\Drupal\redirect_404\Render\Redirect404LogSuppressor',
					'decorates' => 'logger.factory',
					'arguments' => ['logger.redirect_404.inner', 'config.factory'],
				],
				'redirect_domain.request_subscriber' => [
					'class' => 'Drupal\redirect_domain\EventSubscriber\DomainRedirectRequestSubscriber',
					'arguments' => ['config.factory', 'redirect.checker', 'path.matcher'],
				],
				'redirect.repository' => [
					'class' => 'Drupal\redirect\RedirectRepository',
					'arguments' => ['entity.manager', 'database', 'config.factory'],
				],
				'redirect.checker' => [
					'class' => 'Drupal\redirect\RedirectChecker',
					'arguments' => ['config.factory', 'state', 'access_manager', 'current_user', 'router.route_provider'],
				],
				'redirect.request_subscriber' => [
					'class' => 'Drupal\redirect\EventSubscriber\RedirectRequestSubscriber',
					'arguments' => [
						'redirect.repository',
						'language_manager',
						'config.factory',
						'path.alias_manager',
						'module_handler',
						'entity.manager',
						'redirect.checker',
						'router.request_context',
						'path_processor_manager',
					],
				],
				'redirect.settings_cache_tag' => [
					'class' => 'Drupal\redirect\EventSubscriber\RedirectSettingsCacheTag',
					'arguments' => ['cache_tags.invalidator'],
				],
				'redirect.route_normalizer_request_subscriber' => [
					'class' => 'Drupal\redirect\EventSubscriber\RouteNormalizerRequestSubscriber',
					'arguments' => ['url_generator', 'path.matcher', 'config.factory', 'redirect.checker'],
				],
				'redirect.route_subscriber' => ['class' => 'Drupal\redirect\Routing\RouteSubscriber'],
				'token.entity_mapper' => [
					'class' => 'Drupal\token\TokenEntityMapper',
					'arguments' => ['entity_type.manager', 'module_handler'],
				],
				'token.tree_builder' => [
					'class' => 'Drupal\token\TreeBuilder',
					'arguments' => ['token', 'token.entity_mapper', 'cache.data', 'language_manager'],
				],
				'token.route_subscriber' => [
					'class' => 'Drupal\token\Routing\RouteSubscriber',
					'arguments' => ['entity_type.manager', 'module_handler'],
				],
				'upgrade_status.string_input' => ['class' => 'Symfony\Component\Console\Input\StringInput', 'arguments' => ['analyse']],
				'upgrade_status.buffered_output' => ['class' => 'Symfony\Component\Console\Output\BufferedOutput'],
				'upgrade_status.deprecation_analyser' => [
					'class' => 'Drupal\upgrade_status\DeprecationAnalyser',
					'arguments' => [
						'keyvalue',
						'logger.channel.upgrade_status',
						'upgrade_status.string_input',
						'upgrade_status.buffered_output',
						'config.factory',
						'state',
					],
				],
				'upgrade_status.project_collector' => [
					'class' => 'Drupal\upgrade_status\ProjectCollector',
					'arguments' => ['extension.list.module', 'theme_handler', 'extension.list.profile'],
				],
				'logger.channel.upgrade_status' => ['parent' => 'logger.channel_base', 'arguments' => ['upgrade_status']],
				'queue.inspectable' => [
					'class' => 'Drupal\upgrade_status\Queue\InspectableQueueFactory',
					'arguments' => ['database'],
				],
				'actions_permissions.views_bulk_operations_actions' => ['class' => 'Drupal\actions_permissions\EventSubscriber\ActionsPermissionsEventSubscriber'],
				'views_bulk_operations.data' => [
					'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsViewData',
					'arguments' => ['event_dispatcher'],
				],
				'views_bulk_operations.processor' => [
					'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsActionProcessor',
					'arguments' => [
						'views_bulk_operations.data',
						'plugin.manager.views_bulk_operations_action',
						'current_user',
						'module_handler',
					],
				],
				'plugin.manager.views_bulk_operations_action' => [
					'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsActionManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'event_dispatcher'],
				],
				'views_bulk_operations.access' => [
					'class' => 'Drupal\views_bulk_operations\Access\ViewsBulkOperationsAccess',
					'arguments' => ['tempstore.private'],
				],
				'views_bulk_operations.view_data_provider' => [
					'class' => 'Drupal\views_bulk_operations\EventSubscriber\ViewsBulkOperationsEventSubscriber',
					'arguments' => ['views_bulk_operations.data'],
				],
				'webform_access.breadcrumb' => [
					'class' => 'Drupal\webform_access\Breadcrumb\WebformAccessBreadcrumbBuilder',
					'arguments' => ['string_translation'],
				],
				'webform_devel.schema' => [
					'class' => 'Drupal\webform_devel\WebformDevelSchema',
					'arguments' => ['plugin.manager.element_info', 'plugin.manager.webform.element'],
				],
				'webform_node.uninstall_validator' => [
					'class' => 'Drupal\webform_node\WebformNodeUninstallValidator',
					'arguments' => ['entity_type.manager', 'string_translation'],
					'lazy' => true,
				],
				'webform_scheduled_email.manager' => [
					'class' => 'Drupal\webform_scheduled_email\WebformScheduledEmailManager',
					'arguments' => [
						'datetime.time',
						'database',
						'language_manager',
						'config.factory',
						'logger.factory',
						'entity_type.manager',
						'webform.token_manager',
					],
				],
				'webform_submission_export_import.importer' => [
					'class' => 'Drupal\webform_submission_export_import\WebformSubmissionExportImportImporter',
					'arguments' => [
						'config.factory',
						'logger.factory',
						'entity_type.manager',
						'plugin.manager.webform.element',
					],
				],
				'webform_submission_export_import.route_subscriber' => [
					'class' => 'Drupal\webform_submission_export_import\Routing\WebformSubmissionExportImportRouteSubscriber',
					'arguments' => ['module_handler'],
				],
				'logger.channel.webform_submission_export_import' => [
					'class' => 'Drupal\Core\Logger\LoggerChannel',
					'arguments' => ['webform_submission_export_import'],
				],
				'webform_submission_log.manager' => [
					'class' => 'Drupal\webform_submission_log\WebformSubmissionLogManager',
					'arguments' => ['database'],
				],
				'logger.webform_submission_log' => [
					'class' => 'Drupal\webform_submission_log\WebformSubmissionLogLogger',
					'arguments' => ['logger.log_message_parser', 'webform_submission_log.manager'],
				],
				'webform_submission_log.route_subscriber' => [
					'class' => 'Drupal\webform_submission_log\Routing\WebformSubmissionLogRouteSubscriber',
					'arguments' => ['module_handler'],
				],
				'webform_ui.path_processor' => ['class' => 'Drupal\webform_ui\PathProcessor\WebformUiPathProcessor'],
				'plugin.manager.webform.element' => [
					'class' => 'Drupal\webform\Plugin\WebformElementManager',
					'arguments' => [
						'container.namespaces',
						'cache.discovery',
						'module_handler',
						'theme_handler',
						'config.factory',
						'plugin.manager.element_info',
					],
				],
				'plugin.manager.webform.handler' => [
					'class' => 'Drupal\webform\Plugin\WebformHandlerManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
				],
				'plugin.manager.webform.exporter' => [
					'class' => 'Drupal\webform\Plugin\WebformExporterManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
				],
				'plugin.manager.webform.source_entity' => [
					'class' => 'Drupal\webform\Plugin\WebformSourceEntityManager',
					'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
				],
				'logger.channel.webform' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['webform']],
				'logger.channel.webform_submission' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['webform_submission']],
				'webform.addons_manager' => ['class' => 'Drupal\webform\WebformAddonsManager'],
				'webform.cli_service' => ['class' => 'Drupal\webform\Commands\WebformCliService'],
				'webform.contribute_manager' => [
					'class' => 'Drupal\webform\WebformContributeManager',
					'arguments' => ['cache.default', 'http_client', 'date.formatter', 'config.factory'],
				],
				'webform.elements_validator' => [
					'class' => 'Drupal\webform\WebformEntityElementsValidator',
					'arguments' => ['renderer', 'plugin.manager.webform.element', 'entity_type.manager', 'form_builder'],
				],
				'webform.email_provider' => [
					'class' => 'Drupal\webform\WebformEmailProvider',
					'arguments' => ['config.factory', 'module_handler', 'plugin.manager.mail'],
				],
				'webform.entity_reference_manager' => [
					'class' => 'Drupal\webform\WebformEntityReferenceManager',
					'arguments' => ['current_route_match', 'current_user', 'user.data'],
				],
				'webform.help_manager' => [
					'class' => 'Drupal\webform\WebformHelpManager',
					'arguments' => [
						'current_user',
						'config.factory',
						'module_handler',
						'state',
						'path.matcher',
						'webform.addons_manager',
						'webform.libraries_manager',
						'plugin.manager.webform.element',
					],
				],
				'webform.libraries_manager' => [
					'class' => 'Drupal\webform\WebformLibrariesManager',
					'arguments' => ['library.discovery', 'config.factory', 'module_handler', 'renderer'],
				],
				'webform.message_manager' => [
					'class' => 'Drupal\webform\WebformMessageManager',
					'arguments' => [
						'current_user',
						'config.factory',
						'entity_type.manager',
						'logger.channel.webform',
						'renderer',
						'messenger',
						'webform.request',
						'webform.token_manager',
					],
				],
				'webform.translation_manager' => [
					'class' => 'Drupal\webform\WebformTranslationManager',
					'arguments' => [
						'current_route_match',
						'language_manager',
						'config.factory',
						'messenger',
						'plugin.manager.webform.element',
					],
				],
				'webform.request' => [
					'class' => 'Drupal\webform\WebformRequest',
					'arguments' => [
						'router.route_provider',
						'request_stack',
						'router.admin_context',
						'current_route_match',
						'entity_type.manager',
						'entity_type.repository',
						'webform.entity_reference_manager',
						'plugin.manager.webform.source_entity',
					],
				],
				'webform_submission.generate' => [
					'class' => 'Drupal\webform\WebformSubmissionGenerate',
					'arguments' => ['config.factory', 'webform.token_manager', 'plugin.manager.webform.element'],
				],
				'webform_submission.exporter' => [
					'class' => 'Drupal\webform\WebformSubmissionExporter',
					'arguments' => [
						'config.factory',
						'file_system',
						'entity_type.manager',
						'stream_wrapper_manager',
						'plugin.manager.archiver',
						'plugin.manager.webform.element',
						'plugin.manager.webform.exporter',
					],
				],
				'webform.third_party_settings_manager' => [
					'class' => 'Drupal\webform\WebformThirdPartySettingsManager',
					'arguments' => ['config.factory', 'module_handler', 'path.validator', 'webform.addons_manager'],
				],
				'webform.token_manager' => [
					'class' => 'Drupal\webform\WebformTokenManager',
					'arguments' => ['current_user', 'language_manager', 'config.factory', 'module_handler', 'token'],
				],
				'webform.theme_manager' => [
					'class' => 'Drupal\webform\WebformThemeManager',
					'arguments' => ['config.factory', 'renderer', 'theme.manager', 'theme_handler', 'theme.initialization'],
				],
				'webform.access_rules_manager' => ['class' => 'Drupal\webform\WebformAccessRulesManager', 'arguments' => ['module_handler']],
				'webform_submission.conditions_validator' => [
					'class' => 'Drupal\webform\WebformSubmissionConditionsValidator',
					'arguments' => ['plugin.manager.webform.element'],
				],
				'webform.breadcrumb' => [
					'class' => 'Drupal\webform\Breadcrumb\WebformBreadcrumbBuilder',
					'arguments' => ['module_handler', 'webform.request', 'string_translation'],
				],
				'webform.exception_html_subscriber' => [
					'class' => 'Drupal\webform\EventSubscriber\WebformExceptionHtmlSubscriber',
					'arguments' => [
						'http_kernel',
						'logger.channel.php',
						'redirect.destination',
						'router.no_access_checks',
						'current_user',
						'config.factory',
						'renderer',
						'messenger',
						'webform.token_manager',
					],
				],
				'webform.route_subscriber' => ['class' => 'Drupal\webform\Routing\WebformRouteSubscriber'],
				'webform.webform_route_context' => [
					'class' => 'Drupal\webform\ContextProvider\WebformRouteContext',
					'arguments' => ['current_route_match'],
				],
				'webform.webform_submission_route_context' => [
					'class' => 'Drupal\webform\ContextProvider\WebformSubmissionRouteContext',
					'arguments' => ['current_route_match'],
				],
				'webform.theme_negotiator' => [
					'class' => 'Drupal\webform\Theme\WebformThemeNegotiator',
					'arguments' => ['current_user', 'config.factory'],
				],
				'webform.twig_extension' => ['class' => 'Drupal\webform\Twig\TwigExtension'],
			],
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		$service = new PhpParser\BuilderFactory;
		return $service;
	}


	public function createService02(): PhpParser\Lexer
	{
		$service = new PhpParser\Lexer;
		return $service;
	}


	public function createService03(): PhpParser\NodeTraverser
	{
		$service = new PhpParser\NodeTraverser;
		$service->addVisitor($this->getService('04'));
		return $service;
	}


	public function createService04(): PhpParser\NodeVisitor\NameResolver
	{
		$service = new PhpParser\NodeVisitor\NameResolver;
		return $service;
	}


	public function createService05(): PhpParser\Parser\Php7
	{
		$service = new PhpParser\Parser\Php7($this->getService('02'));
		return $service;
	}


	public function createService06(): PhpParser\PrettyPrinter\Standard
	{
		$service = new PhpParser\PrettyPrinter\Standard;
		return $service;
	}


	public function createService07(): PHPStan\Broker\AnonymousClassNameHelper
	{
		$service = new PHPStan\Broker\AnonymousClassNameHelper($this->getService('024'), $this->getService('simpleRelativePathHelper'));
		return $service;
	}


	public function createService08(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		$service = new PHPStan\PhpDocParser\Lexer\Lexer;
		return $service;
	}


	public function createService09(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		$service = new PHPStan\PhpDocParser\Parser\TypeParser;
		return $service;
	}


	public function createService010(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		$service = new PHPStan\PhpDocParser\Parser\ConstExprParser;
		return $service;
	}


	public function createService011(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		$service = new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('09'), $this->getService('010'));
		return $service;
	}


	public function createService012(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		$service = new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('014'));
		return $service;
	}


	public function createService013(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		$service = new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('08'), $this->getService('011'), $this->getService('012'));
		return $service;
	}


	public function createService014(): PHPStan\PhpDoc\TypeNodeResolver
	{
		$service = $this->getService('typeNodeResolverFactory')->create();
		return $service;
	}


	public function createService015(): PHPStan\PhpDoc\TypeStringResolver
	{
		$service = new PHPStan\PhpDoc\TypeStringResolver($this->getService('08'), $this->getService('09'), $this->getService('014'));
		return $service;
	}


	public function createService016(): PHPStan\Analyser\Analyser
	{
		$service = new PHPStan\Analyser\Analyser(
			$this->getService('017'),
			$this->getService('027'),
			$this->getService('registry'),
			$this->getService('018'),
			$this->getService('024'),
			[
				'#\Drupal calls should be avoided in classes, use dependency injection instead#',
				'#Plugin definitions cannot be altered.#',
				'#Missing cache backend declaration for performance.#',
				'#Plugin manager has cache backend specified but does not declare cache tags.#',
			],
			false,
			50,
			null
		);
		return $service;
	}


	public function createService017(): PHPStan\Analyser\ScopeFactory
	{
		$service = new PHPStan\Analyser\ScopeFactory(
			'PHPStan\Analyser\Scope',
			$this->getService('broker'),
			$this->getService('06'),
			$this->getService('typeSpecifier'),
			$this->getService('023')
		);
		return $service;
	}


	public function createService018(): PHPStan\Analyser\NodeScopeResolver
	{
		$service = new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('broker'),
			$this->getService('027'),
			$this->getService('049'),
			$this->getService('024'),
			$this->getService('typeSpecifier'),
			true,
			false,
			true,
			[]
		);
		return $service;
	}


	public function createService019(): PHPStan\Cache\Cache
	{
		$service = new PHPStan\Cache\Cache($this->getService('cacheStorage'));
		return $service;
	}


	public function createService020(): PHPStan\Command\AnalyseApplication
	{
		$service = new PHPStan\Command\AnalyseApplication(
			$this->getService('016'),
			'../tmp/upgrade_status/phpstan/.memory_limit',
			$this->getService('024'),
			'/var/www/html/d8.cms-garden/web'
		);
		return $service;
	}


	public function createService021(): PHPStan\Dependency\DependencyDumper
	{
		$service = new PHPStan\Dependency\DependencyDumper(
			$this->getService('022'),
			$this->getService('018'),
			$this->getService('024'),
			$this->getService('027'),
			$this->getService('017'),
			$this->getService('026')
		);
		return $service;
	}


	public function createService022(): PHPStan\Dependency\DependencyResolver
	{
		$service = new PHPStan\Dependency\DependencyResolver($this->getService('broker'));
		return $service;
	}


	public function createService023(): PHPStan\DependencyInjection\Container
	{
		$service = new PHPStan\DependencyInjection\Nette\NetteContainer($this);
		return $service;
	}


	public function createService024(): PHPStan\File\FileHelper
	{
		$service = new PHPStan\File\FileHelper('/var/www/html/d8.cms-garden/web');
		return $service;
	}


	public function createService025(): PHPStan\File\FileExcluder
	{
		$service = new PHPStan\File\FileExcluder(
			$this->getService('024'),
			['*.api.php', '*/tests/Drupal/Tests/Listeners/Legacy/*', '*/tests/fixtures/*.php']
		);
		return $service;
	}


	public function createService026(): PHPStan\File\FileFinder
	{
		$service = new PHPStan\File\FileFinder($this->getService('025'), $this->getService('024'), ['php', 'module', 'theme', 'inc']);
		return $service;
	}


	public function createService027(): PHPStan\Parser\CachedParser
	{
		$service = new PHPStan\Parser\CachedParser($this->getService('directParser'), 512, 512);
		return $service;
	}


	public function createService028(): PHPStan\Parser\FunctionCallStatementFinder
	{
		$service = new PHPStan\Parser\FunctionCallStatementFinder;
		return $service;
	}


	public function createService029(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_475b9f84a4 $container)
			{
				$this->container = $container;
			}


			public function create(
				ReflectionFunction $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				$filename
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				$service = new PHPStan\Reflection\Php\PhpFunctionReflection(
					$reflection,
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('019'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename
				);
				return $service;
			}
		};
	}


	public function createService030(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension($this->getService('049'));
		return $service;
	}


	public function createService031(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension($this->getService('049'));
		return $service;
	}


	public function createService032(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('034'),
			$this->getService('049'),
			$this->getService('030'),
			$this->getService('031'),
			$this->getService('037')
		);
		return $service;
	}


	public function createService033(): PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension
	{
		$service = new PHPStan\Reflection\PhpDefect\PhpDefectClassReflectionExtension($this->getService('015'), $this->getService('031'));
		return $service;
	}


	public function createService034(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_475b9f84a4 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal
			): PHPStan\Reflection\Php\PhpMethodReflection {
				$service = new PHPStan\Reflection\Php\PhpMethodReflection(
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('broker'),
					$this->container->getService('027'),
					$this->container->getService('028'),
					$this->container->getService('019'),
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal
				);
				return $service;
			}
		};
	}


	public function createService035(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		$service = new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(['stdClass', 'SimpleXMLElement']);
		return $service;
	}


	public function createService036(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		$service = new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('015'));
		return $service;
	}


	public function createService037(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		$service = new PHPStan\Reflection\SignatureMap\SignatureMapProvider($this->getService('036'));
		return $service;
	}


	public function createService038(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		$service = new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('broker'));
		return $service;
	}


	public function createService039(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		$service = new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('040'));
		return $service;
	}


	public function createService040(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		$service = new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper($this->getService('broker'), $this->getService('typeSpecifier'));
		return $service;
	}


	public function createService041(): PHPStan\Rules\FunctionCallParametersCheck
	{
		$service = new PHPStan\Rules\FunctionCallParametersCheck($this->getService('047'), false, false);
		return $service;
	}


	public function createService042(): PHPStan\Rules\FunctionDefinitionCheck
	{
		$service = new PHPStan\Rules\FunctionDefinitionCheck($this->getService('broker'), $this->getService('038'), false, true);
		return $service;
	}


	public function createService043(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		$service = new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('047'));
		return $service;
	}


	public function createService044(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		$service = new PHPStan\Rules\Properties\PropertyDescriptor;
		return $service;
	}


	public function createService045(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		$service = new PHPStan\Rules\Properties\PropertyReflectionFinder;
		return $service;
	}


	public function createService046(): PHPStan\Rules\RegistryFactory
	{
		$service = new PHPStan\Rules\RegistryFactory($this->getService('023'));
		return $service;
	}


	public function createService047(): PHPStan\Rules\RuleLevelHelper
	{
		$service = new PHPStan\Rules\RuleLevelHelper($this->getService('broker'), false, true, false);
		return $service;
	}


	public function createService048(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		$service = new PHPStan\Rules\UnusedFunctionParametersCheck;
		return $service;
	}


	public function createService049(): PHPStan\Type\FileTypeMapper
	{
		$service = new PHPStan\Type\FileTypeMapper(
			$this->getService('027'),
			$this->getService('013'),
			$this->getService('019'),
			$this->getService('07'),
			$this->getService('014')
		);
		return $service;
	}


	public function createService050(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
		return $service;
	}


	public function createService051(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension;
		return $service;
	}


	public function createService052(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension;
		return $service;
	}


	public function createService053(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
		return $service;
	}


	public function createService054(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
		return $service;
	}


	public function createService055(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService056(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
		return $service;
	}


	public function createService057(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
		return $service;
	}


	public function createService058(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService059(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
		return $service;
	}


	public function createService060(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService061(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
		return $service;
	}


	public function createService062(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
		return $service;
	}


	public function createService063(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
		return $service;
	}


	public function createService064(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
		return $service;
	}


	public function createService065(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService066(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService067(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
		return $service;
	}


	public function createService068(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService069(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\CurlInitReturnTypeExtension;
		return $service;
	}


	public function createService070(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService071(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService072(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension;
		return $service;
	}


	public function createService073(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService074(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
		return $service;
	}


	public function createService075(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
		return $service;
	}


	public function createService076(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
		return $service;
	}


	public function createService077(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension;
		return $service;
	}


	public function createService078(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension;
		return $service;
	}


	public function createService079(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService080(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService081(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService082(): PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\VarExportFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService083(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MbFunctionsReturnTypeExtension;
		return $service;
	}


	public function createService084(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService085(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService086(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService087(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService088(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService089(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
		return $service;
	}


	public function createService090(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService091(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
		return $service;
	}


	public function createService092(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension;
		return $service;
	}


	public function createService093(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService094(): PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsIntFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService095(): PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsFloatFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService096(): PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsNullFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService097(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService098(): PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsBoolFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService099(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0100(): PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsCountableFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0101(): PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsResourceFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0102(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0103(): PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsStringFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0104(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0105(): PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsObjectFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0106(): PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsNumericFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0107(): PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsScalarFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0108(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		$service = new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension;
		return $service;
	}


	public function createService0109(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension;
		return $service;
	}


	public function createService0110(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension;
		return $service;
	}


	public function createService0111(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension;
		return $service;
	}


	public function createService0112(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
		return $service;
	}


	public function createService0113(): PHPStan\Drupal\ServiceMap
	{
		$service = $this->getService('drupal.serviceMapFactory')->create();
		return $service;
	}


	public function createService0114(): PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\EntityTypeManagerGetStorageDynamicReturnTypeExtension([
			'node' => 'Drupal\node\NodeStorage',
			'taxonomy_term' => 'Drupal\taxonomy\TermStorage',
			'user' => 'Drupal\user\UserStorage',
		]);
		return $service;
	}


	public function createService0115(): PHPStan\Type\ServiceDynamicReturnTypeExtension
	{
		$service = new PHPStan\Type\ServiceDynamicReturnTypeExtension($this->getService('0113'));
		return $service;
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		$service = $this->getService('brokerFactory')->create();
		return $service;
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		$service = new PHPStan\Broker\BrokerFactory($this->getService('023'));
		return $service;
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		$service = new PHPStan\Cache\FileCacheStorage('../tmp/upgrade_status/phpstan/cache/PHPStan');
		return $service;
	}


	public function createServiceContainer(): Container_475b9f84a4
	{
		return $this;
	}


	public function createServiceDirectParser(): PHPStan\Parser\DirectParser
	{
		$service = new PHPStan\Parser\DirectParser($this->getService('05'), $this->getService('03'));
		return $service;
	}


	public function createServiceDrupal__serviceMapFactory(): PHPStan\Drupal\ServiceMapFactoryInterface
	{
		$service = new PHPStan\Drupal\ServiceMapFactory([
			'cache_context.ip' => ['class' => 'Drupal\Core\Cache\Context\IpCacheContext', 'arguments' => ['request_stack']],
			'cache_context.headers' => ['class' => 'Drupal\Core\Cache\Context\HeadersCacheContext', 'arguments' => ['request_stack']],
			'cache_context.cookies' => ['class' => 'Drupal\Core\Cache\Context\CookiesCacheContext', 'arguments' => ['request_stack']],
			'cache_context.session' => ['class' => 'Drupal\Core\Cache\Context\SessionCacheContext', 'arguments' => ['request_stack']],
			'cache_context.session.exists' => [
				'class' => 'Drupal\Core\Cache\Context\SessionExistsCacheContext',
				'arguments' => ['session_configuration', 'request_stack'],
			],
			'cache_context.request_format' => [
				'class' => 'Drupal\Core\Cache\Context\RequestFormatCacheContext',
				'arguments' => ['request_stack'],
			],
			'cache_context.url' => ['class' => 'Drupal\Core\Cache\Context\UrlCacheContext', 'arguments' => ['request_stack']],
			'cache_context.url.site' => ['class' => 'Drupal\Core\Cache\Context\SiteCacheContext', 'arguments' => ['request_stack']],
			'cache_context.url.path' => ['class' => 'Drupal\Core\Cache\Context\PathCacheContext', 'arguments' => ['request_stack']],
			'cache_context.url.path.parent' => ['class' => 'Drupal\Core\Cache\Context\PathParentCacheContext', 'arguments' => ['request_stack']],
			'cache_context.url.path.is_front' => ['class' => 'Drupal\Core\Cache\Context\IsFrontPathCacheContext', 'arguments' => ['path.matcher']],
			'cache_context.url.query_args' => ['class' => 'Drupal\Core\Cache\Context\QueryArgsCacheContext', 'arguments' => ['request_stack']],
			'cache_context.url.query_args.pagers' => ['class' => 'Drupal\Core\Cache\Context\PagersCacheContext', 'arguments' => ['request_stack']],
			'cache_context.route' => ['class' => 'Drupal\Core\Cache\Context\RouteCacheContext', 'arguments' => ['current_route_match']],
			'cache_context.route.name' => [
				'class' => 'Drupal\Core\Cache\Context\RouteNameCacheContext',
				'arguments' => ['current_route_match'],
			],
			'cache_context.route.menu_active_trails' => ['class' => 'Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext'],
			'cache_context.user' => ['class' => 'Drupal\Core\Cache\Context\UserCacheContext', 'arguments' => ['current_user']],
			'cache_context.user.permissions' => [
				'class' => 'Drupal\Core\Cache\Context\AccountPermissionsCacheContext',
				'arguments' => ['current_user', 'user_permissions_hash_generator'],
			],
			'cache_context.user.roles' => ['class' => 'Drupal\Core\Cache\Context\UserRolesCacheContext', 'arguments' => ['current_user']],
			'cache_context.user.is_super_user' => ['class' => 'Drupal\Core\Cache\Context\IsSuperUserCacheContext', 'arguments' => ['current_user']],
			'cache_context.languages' => [
				'class' => 'Drupal\Core\Cache\Context\LanguagesCacheContext',
				'arguments' => ['language_manager'],
			],
			'cache_context.theme' => ['class' => 'Drupal\Core\Cache\Context\ThemeCacheContext', 'arguments' => ['theme.manager']],
			'cache_context.timezone' => ['class' => 'Drupal\Core\Cache\Context\TimeZoneCacheContext'],
			'cache_factory' => [
				'class' => 'Drupal\Core\Cache\CacheFactory',
				'arguments' => ['settings', '%cache_default_bin_backends%'],
			],
			'cache_contexts_manager' => [
				'class' => 'Drupal\Core\Cache\Context\CacheContextsManager',
				'arguments' => ['service_container', '%cache_contexts%'],
			],
			'cache_tags.invalidator' => ['parent' => 'container.trait', 'class' => 'Drupal\Core\Cache\CacheTagsInvalidator'],
			'cache_tags.invalidator.checksum' => ['class' => 'Drupal\Core\Cache\DatabaseCacheTagsChecksum', 'arguments' => ['database']],
			'cache.backend.chainedfast' => ['class' => 'Drupal\Core\Cache\ChainedFastBackendFactory', 'arguments' => ['settings']],
			'cache.backend.database' => [
				'class' => 'Drupal\Core\Cache\DatabaseBackendFactory',
				'arguments' => ['database', 'cache_tags.invalidator.checksum', 'settings'],
			],
			'cache.backend.apcu' => [
				'class' => 'Drupal\Core\Cache\ApcuBackendFactory',
				'arguments' => ['app.root', 'site.path', 'cache_tags.invalidator.checksum'],
			],
			'cache.backend.php' => [
				'class' => 'Drupal\Core\Cache\PhpBackendFactory',
				'arguments' => ['cache_tags.invalidator.checksum'],
			],
			'cache.backend.memory' => ['class' => 'Drupal\Core\Cache\MemoryBackendFactory'],
			'cache.static' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['static']],
			'cache.bootstrap' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['bootstrap']],
			'cache.config' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['config']],
			'cache.default' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['default']],
			'cache.entity' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['entity']],
			'cache.menu' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['menu']],
			'cache.render' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['render']],
			'cache.data' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['data']],
			'cache.discovery' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['discovery']],
			'cache_router_rebuild_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber'],
			'page_cache_request_policy' => [
				'class' => 'Drupal\Core\PageCache\DefaultRequestPolicy',
				'arguments' => ['session_configuration'],
			],
			'page_cache_response_policy' => ['class' => 'Drupal\Core\PageCache\ChainResponsePolicy', 'lazy' => true],
			'page_cache_kill_switch' => ['class' => 'Drupal\Core\PageCache\ResponsePolicy\KillSwitch'],
			'page_cache_no_cache_routes' => [
				'class' => 'Drupal\Core\PageCache\ResponsePolicy\DenyNoCacheRoutes',
				'arguments' => ['current_route_match'],
				'public' => false,
			],
			'page_cache_no_server_error' => ['class' => 'Drupal\Core\PageCache\ResponsePolicy\NoServerError', 'public' => false],
			'config.manager' => [
				'class' => 'Drupal\Core\Config\ConfigManager',
				'arguments' => [
					'entity_type.manager',
					'config.factory',
					'config.typed',
					'string_translation',
					'config.storage',
					'event_dispatcher',
					'entity.repository',
				],
			],
			'config.factory' => [
				'class' => 'Drupal\Core\Config\ConfigFactory',
				'arguments' => ['config.storage', 'event_dispatcher', 'config.typed'],
			],
			'config.importer_subscriber' => ['class' => 'Drupal\Core\Config\Importer\FinalMissingContentSubscriber'],
			'config.installer' => [
				'class' => 'Drupal\Core\Config\ConfigInstaller',
				'arguments' => [
					'config.factory',
					'config.storage',
					'config.typed',
					'config.manager',
					'event_dispatcher',
					'%install_profile%',
				],
				'lazy' => true,
			],
			'config.storage' => [
				'class' => 'Drupal\Core\Config\CachedStorage',
				'arguments' => ['config.storage.active', 'cache.config'],
			],
			'config.storage.active' => [
				'class' => 'Drupal\Core\Config\DatabaseStorage',
				'arguments' => ['database', 'config'],
				'public' => false,
			],
			'config.storage.staging' => ['class' => 'Drupal\Core\Config\FileStorage'],
			'config.storage.sync' => ['alias' => 'config.storage.staging'],
			'config.storage.snapshot' => ['class' => 'Drupal\Core\Config\DatabaseStorage', 'arguments' => ['database', 'config_snapshot']],
			'config.storage.schema' => [
				'class' => 'Drupal\Core\Config\ExtensionInstallStorage',
				'arguments' => ['config.storage', 'config/schema', '', '1', '%install_profile%'],
			],
			'config.typed' => [
				'class' => 'Drupal\Core\Config\TypedConfigManager',
				'arguments' => [
					'config.storage',
					'config.storage.schema',
					'cache.discovery',
					'module_handler',
					'class_resolver',
				],
			],
			'context.handler' => ['class' => 'Drupal\Core\Plugin\Context\ContextHandler'],
			'context.repository' => [
				'class' => 'Drupal\Core\Plugin\Context\LazyContextRepository',
				'arguments' => ['service_container'],
			],
			'cron' => [
				'class' => 'Drupal\Core\Cron',
				'arguments' => [
					'module_handler',
					'lock',
					'queue',
					'state',
					'account_switcher',
					'logger.channel.cron',
					'plugin.manager.queue_worker',
					'datetime.time',
				],
				'lazy' => true,
			],
			'diff.formatter' => ['class' => 'Drupal\Core\Diff\DiffFormatter', 'arguments' => ['config.factory']],
			'database' => ['class' => 'Drupal\Core\Database\Connection', 'arguments' => ['default']],
			'database.replica' => ['class' => 'Drupal\Core\Database\Connection', 'arguments' => ['replica']],
			'database.replica_kill_switch' => [
				'class' => 'Drupal\Core\Database\ReplicaKillSwitch',
				'arguments' => ['settings', 'datetime.time', 'session'],
			],
			'datetime.time' => ['class' => 'Drupal\Component\Datetime\Time', 'arguments' => ['request_stack']],
			'file_system' => [
				'class' => 'Drupal\Core\File\FileSystem',
				'arguments' => ['stream_wrapper_manager', 'settings', 'logger.channel.file'],
			],
			'form_builder' => [
				'class' => 'Drupal\Core\Form\FormBuilder',
				'arguments' => [
					'form_validator',
					'form_submitter',
					'form_cache',
					'module_handler',
					'event_dispatcher',
					'request_stack',
					'class_resolver',
					'element_info',
					'theme.manager',
					'?csrf_token',
				],
			],
			'form_validator' => [
				'class' => 'Drupal\Core\Form\FormValidator',
				'arguments' => [
					'request_stack',
					'string_translation',
					'csrf_token',
					'logger.channel.form',
					'form_error_handler',
				],
			],
			'form_submitter' => ['class' => 'Drupal\Core\Form\FormSubmitter', 'arguments' => ['request_stack', 'url_generator']],
			'form_error_handler' => ['class' => 'Drupal\Core\Form\FormErrorHandler'],
			'form_cache' => [
				'class' => 'Drupal\Core\Form\FormCache',
				'arguments' => [
					'app.root',
					'keyvalue.expirable',
					'module_handler',
					'current_user',
					'csrf_token',
					'logger.channel.form',
					'request_stack',
					'page_cache_request_policy',
				],
				'public' => false,
			],
			'keyvalue' => [
				'class' => 'Drupal\Core\KeyValueStore\KeyValueFactory',
				'arguments' => ['service_container', '%factory.keyvalue%'],
			],
			'keyvalue.database' => [
				'class' => 'Drupal\Core\KeyValueStore\KeyValueDatabaseFactory',
				'arguments' => ['serialization.phpserialize', 'database'],
			],
			'keyvalue.expirable' => [
				'class' => 'Drupal\Core\KeyValueStore\KeyValueExpirableFactory',
				'arguments' => ['service_container', '%factory.keyvalue.expirable%'],
			],
			'keyvalue.expirable.database' => [
				'class' => 'Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory',
				'arguments' => ['serialization.phpserialize', 'database'],
			],
			'logger.factory' => ['class' => 'Drupal\Core\Logger\LoggerChannelFactory', 'parent' => 'container.trait'],
			'logger.channel_base' => ['abstract' => true, 'class' => 'Drupal\Core\Logger\LoggerChannel'],
			'logger.channel.default' => ['parent' => 'logger.channel_base', 'arguments' => ['system']],
			'logger.channel.php' => ['parent' => 'logger.channel_base', 'arguments' => ['php']],
			'logger.channel.image' => ['parent' => 'logger.channel_base', 'arguments' => ['image']],
			'logger.channel.cron' => ['parent' => 'logger.channel_base', 'arguments' => ['cron']],
			'logger.channel.file' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['file']],
			'logger.channel.form' => ['parent' => 'logger.channel_base', 'arguments' => ['form']],
			'logger.log_message_parser' => ['class' => 'Drupal\Core\Logger\LogMessageParser'],
			'serialization.json' => ['class' => 'Drupal\Component\Serialization\Json'],
			'serialization.phpserialize' => ['class' => 'Drupal\Component\Serialization\PhpSerialize'],
			'serialization.yaml' => ['class' => 'Drupal\Component\Serialization\Yaml'],
			'settings' => ['class' => 'Drupal\Core\Site\Settings'],
			'state' => ['class' => 'Drupal\Core\State\State', 'arguments' => ['keyvalue']],
			'queue' => ['class' => 'Drupal\Core\Queue\QueueFactory', 'arguments' => ['settings']],
			'queue.database' => ['class' => 'Drupal\Core\Queue\QueueDatabaseFactory', 'arguments' => ['database']],
			'path.alias_whitelist' => [
				'class' => 'Drupal\Core\Path\AliasWhitelist',
				'arguments' => ['path_alias_whitelist', 'cache.bootstrap', 'lock', 'state', 'path.alias_storage'],
			],
			'path.alias_manager' => [
				'class' => 'Drupal\Core\Path\AliasManager',
				'arguments' => ['path.alias_storage', 'path.alias_whitelist', 'language_manager', 'cache.data'],
			],
			'path.current' => ['class' => 'Drupal\Core\Path\CurrentPathStack', 'arguments' => ['request_stack']],
			'http_handler_stack' => ['class' => 'GuzzleHttp\HandlerStack', 'public' => false],
			'http_handler_stack_configurator' => [
				'class' => 'Drupal\Core\Http\HandlerStackConfigurator',
				'public' => false,
				'arguments' => ['service_container'],
			],
			'http_client' => ['class' => 'GuzzleHttp\Client'],
			'http_client_factory' => ['class' => 'Drupal\Core\Http\ClientFactory', 'arguments' => ['http_handler_stack']],
			'plugin.manager.link_relation_type' => [
				'class' => '\Drupal\Core\Http\LinkRelationTypeManager',
				'arguments' => ['app.root', 'module_handler', 'cache.discovery'],
			],
			'theme.negotiator' => [
				'class' => 'Drupal\Core\Theme\ThemeNegotiator',
				'arguments' => ['access_check.theme', 'class_resolver'],
			],
			'theme.negotiator.default' => ['class' => 'Drupal\Core\Theme\DefaultNegotiator', 'arguments' => ['config.factory']],
			'theme.negotiator.ajax_base_page' => [
				'class' => 'Drupal\Core\Theme\AjaxBasePageNegotiator',
				'arguments' => ['csrf_token', 'config.factory', 'request_stack'],
			],
			'container.namespaces' => ['class' => 'ArrayObject', 'arguments' => ['%container.namespaces%']],
			'container.trait' => ['abstract' => true],
			'default_plugin_manager' => ['abstract' => true, 'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler']],
			'module_handler' => [
				'class' => 'Drupal\Core\Extension\ModuleHandler',
				'arguments' => ['app.root', '%container.modules%', 'cache.bootstrap'],
			],
			'module_installer' => [
				'class' => 'Drupal\Core\Extension\ModuleInstaller',
				'arguments' => ['app.root', 'module_handler', 'kernel'],
				'lazy' => true,
			],
			'extension.list.module' => [
				'class' => 'Drupal\Core\Extension\ModuleExtensionList',
				'arguments' => [
					'app.root',
					'module',
					'cache.default',
					'info_parser',
					'module_handler',
					'state',
					'config.factory',
					'extension.list.profile',
					'%install_profile%',
					'%container.modules%',
				],
			],
			'extension.list.profile' => [
				'class' => 'Drupal\Core\Extension\ProfileExtensionList',
				'arguments' => [
					'app.root',
					'profile',
					'cache.default',
					'info_parser',
					'module_handler',
					'state',
					'%install_profile%',
				],
			],
			'extension.list.theme' => [
				'class' => 'Drupal\Core\Extension\ThemeExtensionList',
				'arguments' => [
					'app.root',
					'theme',
					'cache.default',
					'info_parser',
					'module_handler',
					'state',
					'config.factory',
					'extension.list.theme_engine',
					'%install_profile%',
				],
			],
			'extension.list.theme_engine' => [
				'class' => 'Drupal\Core\Extension\ThemeEngineExtensionList',
				'arguments' => [
					'app.root',
					'theme_engine',
					'cache.default',
					'info_parser',
					'module_handler',
					'state',
					'%install_profile%',
				],
			],
			'content_uninstall_validator' => [
				'class' => 'Drupal\Core\Entity\ContentUninstallValidator',
				'arguments' => ['entity_type.manager', 'string_translation'],
				'lazy' => true,
			],
			'required_module_uninstall_validator' => [
				'class' => 'Drupal\Core\Extension\RequiredModuleUninstallValidator',
				'arguments' => ['string_translation'],
				'lazy' => true,
			],
			'theme_handler' => [
				'class' => 'Drupal\Core\Extension\ThemeHandler',
				'arguments' => ['app.root', 'config.factory', 'extension.list.theme'],
			],
			'theme_installer' => [
				'class' => 'Drupal\Core\Extension\ThemeInstaller',
				'arguments' => [
					'theme_handler',
					'config.factory',
					'config.installer',
					'module_handler',
					'config.manager',
					'asset.css.collection_optimizer',
					'router.builder',
					'logger.channel.default',
					'state',
				],
			],
			'entity.manager' => ['class' => 'Drupal\Core\Entity\EntityManager', 'parent' => 'container.trait'],
			'entity.memory_cache' => ['class' => 'Drupal\Core\Cache\MemoryCache\MemoryCache'],
			'entity_type.manager' => [
				'class' => 'Drupal\Core\Entity\EntityTypeManager',
				'arguments' => [
					'container.namespaces',
					'module_handler',
					'cache.discovery',
					'string_translation',
					'class_resolver',
					'entity.last_installed_schema.repository',
				],
				'parent' => 'container.trait',
			],
			'entity_type.repository' => ['class' => 'Drupal\Core\Entity\EntityTypeRepository', 'arguments' => ['entity_type.manager']],
			'entity_type.bundle.info' => [
				'class' => 'Drupal\Core\Entity\EntityTypeBundleInfo',
				'arguments' => [
					'entity_type.manager',
					'language_manager',
					'module_handler',
					'typed_data_manager',
					'cache.discovery',
				],
			],
			'entity.repository' => [
				'class' => 'Drupal\Core\Entity\EntityRepository',
				'arguments' => ['entity_type.manager', 'language_manager', 'context.repository'],
			],
			'entity_display.repository' => [
				'class' => 'Drupal\Core\Entity\EntityDisplayRepository',
				'arguments' => ['entity_type.manager', 'module_handler', 'cache.discovery', 'language_manager'],
			],
			'entity_field.manager' => [
				'class' => 'Drupal\Core\Entity\EntityFieldManager',
				'arguments' => [
					'entity_type.manager',
					'entity_type.bundle.info',
					'entity_display.repository',
					'typed_data_manager',
					'language_manager',
					'keyvalue',
					'module_handler',
					'cache.discovery',
				],
			],
			'entity_type.listener' => [
				'class' => 'Drupal\Core\Entity\EntityTypeListener',
				'arguments' => [
					'entity_type.manager',
					'entity_field.manager',
					'event_dispatcher',
					'entity.last_installed_schema.repository',
				],
			],
			'entity_bundle.listener' => [
				'class' => 'Drupal\Core\Entity\EntityBundleListener',
				'arguments' => ['entity_type.manager', 'entity_type.bundle.info', 'entity_field.manager', 'module_handler'],
			],
			'entity_route_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber',
				'arguments' => ['entity_type.manager'],
			],
			'entity.definition_update_manager' => [
				'class' => 'Drupal\Core\Entity\EntityDefinitionUpdateManager',
				'arguments' => [
					'entity_type.manager',
					'entity.last_installed_schema.repository',
					'entity_field.manager',
					'entity_type.listener',
					'field_storage_definition.listener',
				],
			],
			'entity.last_installed_schema.repository' => ['class' => 'Drupal\Core\Entity\EntityLastInstalledSchemaRepository', 'arguments' => ['keyvalue']],
			'entity_field.deleted_fields_repository' => ['class' => 'Drupal\Core\Field\DeletedFieldsRepository', 'arguments' => ['state']],
			'field_storage_definition.listener' => [
				'class' => 'Drupal\Core\Field\FieldStorageDefinitionListener',
				'arguments' => [
					'entity_type.manager',
					'event_dispatcher',
					'entity.last_installed_schema.repository',
					'entity_field.manager',
					'entity_field.deleted_fields_repository',
				],
			],
			'field_definition.listener' => [
				'class' => 'Drupal\Core\Field\FieldDefinitionListener',
				'arguments' => ['entity_type.manager', 'entity_field.manager', 'keyvalue', 'cache.discovery'],
			],
			'entity.form_builder' => [
				'class' => 'Drupal\Core\Entity\EntityFormBuilder',
				'arguments' => ['entity_type.manager', 'form_builder'],
			],
			'entity.bundle_config_import_validator' => [
				'class' => 'Drupal\Core\Entity\Event\BundleConfigImportValidate',
				'arguments' => ['config.manager', 'entity_type.manager'],
			],
			'entity.autocomplete_matcher' => [
				'class' => 'Drupal\Core\Entity\EntityAutocompleteMatcher',
				'arguments' => ['plugin.manager.entity_reference_selection'],
			],
			'plugin_form.factory' => ['class' => 'Drupal\Core\Plugin\PluginFormFactory', 'arguments' => ['class_resolver']],
			'plugin.manager.entity_reference_selection' => [
				'class' => 'Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager',
				'parent' => 'default_plugin_manager',
			],
			'plugin.manager.block' => [
				'class' => 'Drupal\Core\Block\BlockManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['logger.channel.default'],
			],
			'plugin.manager.field.field_type' => [
				'class' => 'Drupal\Core\Field\FieldTypePluginManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'typed_data_manager'],
			],
			'plugin.manager.field.widget' => [
				'class' => 'Drupal\Core\Field\WidgetPluginManager',
				'arguments' => [
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'plugin.manager.field.field_type',
				],
			],
			'plugin.manager.field.formatter' => [
				'class' => 'Drupal\Core\Field\FormatterPluginManager',
				'arguments' => [
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'plugin.manager.field.field_type',
				],
			],
			'plugin.manager.archiver' => ['class' => 'Drupal\Core\Archiver\ArchiverManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.action' => [
				'class' => 'Drupal\Core\Action\ActionManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.menu.link' => [
				'class' => 'Drupal\Core\Menu\MenuLinkManager',
				'arguments' => ['menu.tree_storage', 'menu_link.static.overrides', 'module_handler'],
			],
			'menu.link_tree' => [
				'class' => 'Drupal\Core\Menu\MenuLinkTree',
				'arguments' => [
					'menu.tree_storage',
					'plugin.manager.menu.link',
					'router.route_provider',
					'menu.active_trail',
					'controller_resolver',
				],
			],
			'menu.default_tree_manipulators' => [
				'class' => 'Drupal\Core\Menu\DefaultMenuLinkTreeManipulators',
				'arguments' => ['access_manager', 'current_user', 'entity_type.manager'],
			],
			'menu.active_trail' => [
				'class' => 'Drupal\Core\Menu\MenuActiveTrail',
				'arguments' => ['plugin.manager.menu.link', 'current_route_match', 'cache.menu', 'lock'],
			],
			'menu.parent_form_selector' => [
				'class' => 'Drupal\Core\Menu\MenuParentFormSelector',
				'arguments' => ['menu.link_tree', 'entity_type.manager', 'string_translation'],
			],
			'plugin.manager.menu.local_action' => [
				'class' => 'Drupal\Core\Menu\LocalActionManager',
				'arguments' => [
					'http_kernel.controller.argument_resolver',
					'request_stack',
					'current_route_match',
					'router.route_provider',
					'module_handler',
					'cache.discovery',
					'language_manager',
					'access_manager',
					'current_user',
				],
			],
			'plugin.manager.menu.local_task' => [
				'class' => 'Drupal\Core\Menu\LocalTaskManager',
				'arguments' => [
					'http_kernel.controller.argument_resolver',
					'request_stack',
					'current_route_match',
					'router.route_provider',
					'module_handler',
					'cache.discovery',
					'language_manager',
					'access_manager',
					'current_user',
				],
			],
			'plugin.manager.menu.contextual_link' => [
				'class' => 'Drupal\Core\Menu\ContextualLinkManager',
				'arguments' => [
					'controller_resolver',
					'module_handler',
					'cache.discovery',
					'language_manager',
					'access_manager',
					'current_user',
					'request_stack',
				],
			],
			'plugin.manager.display_variant' => ['class' => 'Drupal\Core\Display\VariantManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.queue_worker' => ['class' => 'Drupal\Core\Queue\QueueWorkerManager', 'parent' => 'default_plugin_manager'],
			'plugin.cache_clearer' => ['class' => 'Drupal\Core\Plugin\CachedDiscoveryClearer', 'lazy' => true],
			'paramconverter.menu_link' => [
				'class' => 'Drupal\Core\ParamConverter\MenuLinkPluginConverter',
				'arguments' => ['plugin.manager.menu.link'],
				'lazy' => true,
			],
			'menu.tree_storage' => [
				'class' => 'Drupal\Core\Menu\MenuTreeStorage',
				'arguments' => ['database', 'cache.menu', 'cache_tags.invalidator', 'menu_tree'],
				'public' => false,
			],
			'menu_link.static.overrides' => ['class' => 'Drupal\Core\Menu\StaticMenuLinkOverrides', 'arguments' => ['config.factory']],
			'request_stack' => ['class' => 'Symfony\Component\HttpFoundation\RequestStack'],
			'current_route_match' => ['class' => 'Drupal\Core\Routing\CurrentRouteMatch', 'arguments' => ['request_stack']],
			'event_dispatcher' => [
				'class' => 'Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher',
				'arguments' => ['service_container'],
			],
			'app.root' => ['class' => 'SplString'],
			'app.root.factory' => ['class' => 'Drupal\Core\AppRootFactory', 'arguments' => ['kernel'], 'public' => false],
			'site.path' => ['class' => 'SplString'],
			'site.path.factory' => ['class' => 'Drupal\Core\SitePathFactory', 'arguments' => ['kernel'], 'public' => false],
			'controller_resolver' => [
				'class' => 'Drupal\Core\Controller\ControllerResolver',
				'arguments' => ['psr7.http_message_factory', 'class_resolver'],
			],
			'class_resolver' => ['class' => 'Drupal\Core\DependencyInjection\ClassResolver'],
			'title_resolver' => [
				'class' => 'Drupal\Core\Controller\TitleResolver',
				'arguments' => ['controller_resolver', 'string_translation', 'http_kernel.controller.argument_resolver'],
			],
			'http_kernel' => ['class' => 'Stack\StackedHttpKernel'],
			'http_kernel.basic' => [
				'class' => 'Symfony\Component\HttpKernel\HttpKernel',
				'arguments' => [
					'event_dispatcher',
					'controller_resolver',
					'request_stack',
					'http_kernel.controller.argument_resolver',
				],
			],
			'http_kernel.controller.argument_resolver' => [
				'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver',
				'arguments' => ['http_kernel.controller.argument_metadata_factory', ''],
			],
			'http_kernel.controller.argument_metadata_factory' => [
				'class' => 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory',
				'public' => false,
			],
			'argument_resolver.request_attribute' => [
				'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver',
				'public' => false,
			],
			'argument_resolver.raw_parameter' => [
				'class' => 'Drupal\Core\Controller\ArgumentResolver\RawParameterValueResolver',
				'public' => false,
			],
			'argument_resolver.request' => [
				'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver',
				'public' => false,
			],
			'argument_resolver.psr7_request' => [
				'class' => 'Drupal\Core\Controller\ArgumentResolver\Psr7RequestValueResolver',
				'arguments' => ['psr7.http_message_factory'],
				'public' => false,
			],
			'argument_resolver.route_match' => ['class' => 'Drupal\Core\Controller\ArgumentResolver\RouteMatchValueResolver', 'public' => false],
			'argument_resolver.default' => [
				'class' => 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver',
				'public' => false,
			],
			'http_middleware.negotiation' => ['class' => 'Drupal\Core\StackMiddleware\NegotiationMiddleware'],
			'http_middleware.reverse_proxy' => ['class' => 'Drupal\Core\StackMiddleware\ReverseProxyMiddleware', 'arguments' => ['settings']],
			'http_middleware.kernel_pre_handle' => ['class' => 'Drupal\Core\StackMiddleware\KernelPreHandle', 'arguments' => ['kernel']],
			'http_middleware.session' => ['class' => 'Drupal\Core\StackMiddleware\Session'],
			'http_middleware.cors' => ['class' => 'Asm89\Stack\Cors', 'arguments' => ['%cors.config%']],
			'psr7.http_foundation_factory' => ['class' => 'Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory'],
			'psr7.http_message_factory' => ['class' => 'Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory'],
			'language_manager' => ['class' => 'Drupal\Core\Language\LanguageManager', 'arguments' => ['language.default']],
			'language.current_language_context' => [
				'class' => 'Drupal\Core\Language\ContextProvider\CurrentLanguageContext',
				'arguments' => ['language_manager'],
			],
			'language.default' => ['class' => 'Drupal\Core\Language\LanguageDefault', 'arguments' => ['%language.default_values%']],
			'string_translator.custom_strings' => ['class' => 'Drupal\Core\StringTranslation\Translator\CustomStrings', 'arguments' => ['settings']],
			'string_translation' => [
				'class' => 'Drupal\Core\StringTranslation\TranslationManager',
				'arguments' => ['language.default'],
			],
			'typed_data_manager' => [
				'class' => 'Drupal\Core\TypedData\TypedDataManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'class_resolver'],
			],
			'validation.constraint' => ['class' => 'Drupal\Core\Validation\ConstraintManager', 'parent' => 'default_plugin_manager'],
			'lock' => ['class' => 'Drupal\Core\Lock\DatabaseLockBackend', 'arguments' => ['database'], 'lazy' => true],
			'lock.persistent' => [
				'class' => 'Drupal\Core\Lock\PersistentDatabaseLockBackend',
				'arguments' => ['database'],
				'lazy' => true,
			],
			'router.request_context' => ['class' => 'Drupal\Core\Routing\RequestContext'],
			'router.admin_context' => ['class' => 'Drupal\Core\Routing\AdminContext', 'arguments' => ['current_route_match']],
			'router.route_provider' => [
				'class' => 'Drupal\Core\Routing\RouteProvider',
				'arguments' => [
					'database',
					'state',
					'path.current',
					'cache.data',
					'path_processor_manager',
					'cache_tags.invalidator',
					'router',
					'language_manager',
				],
			],
			'router.route_provider.lazy_builder' => [
				'class' => 'Drupal\Core\Routing\RouteProviderLazyBuilder',
				'arguments' => ['router.route_provider', 'router.builder'],
			],
			'router.route_preloader' => [
				'class' => 'Drupal\Core\Routing\RoutePreloader',
				'arguments' => ['router.route_provider', 'state', 'cache.bootstrap'],
			],
			'router.matcher.final_matcher' => [
				'class' => 'Drupal\Core\Routing\UrlMatcher',
				'arguments' => ['path.current'],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
			],
			'router.matcher' => [
				'class' => 'Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher',
				'arguments' => ['router.route_provider'],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
			],
			'url_generator.non_bubbling' => [
				'class' => 'Drupal\Core\Routing\UrlGenerator',
				'arguments' => [
					'router.route_provider',
					'path_processor_manager',
					'route_processor_manager',
					'request_stack',
					'%filter_protocols%',
				],
				'public' => false,
			],
			'url_generator' => [
				'class' => 'Drupal\Core\Render\MetadataBubblingUrlGenerator',
				'arguments' => ['url_generator.non_bubbling', 'renderer'],
			],
			'redirect.destination' => [
				'class' => 'Drupal\Core\Routing\RedirectDestination',
				'arguments' => ['request_stack', 'url_generator'],
			],
			'unrouted_url_assembler' => [
				'class' => 'Drupal\Core\Utility\UnroutedUrlAssembler',
				'arguments' => ['request_stack', 'path_processor_manager', '%filter_protocols%'],
			],
			'link_generator' => [
				'class' => 'Drupal\Core\Utility\LinkGenerator',
				'arguments' => ['url_generator', 'module_handler', 'renderer'],
			],
			'router' => [
				'class' => 'Drupal\Core\Routing\AccessAwareRouter',
				'arguments' => ['router.no_access_checks', 'access_manager', 'current_user'],
			],
			'router.dynamic' => [
				'class' => 'Symfony\Cmf\Component\Routing\DynamicRouter',
				'arguments' => ['router.request_context', 'router.matcher', 'url_generator'],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'router.no_access_checks\' service instead.',
			],
			'router.no_access_checks' => [
				'class' => '\Drupal\Core\Routing\Router',
				'arguments' => ['router.route_provider', 'path.current', 'url_generator'],
			],
			'router.path_roots_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\PathRootsSubscriber', 'arguments' => ['state']],
			'entity.query' => [
				'class' => 'Drupal\Core\Entity\Query\QueryFactory',
				'arguments' => ['entity_type.manager'],
				'deprecated' => 'The "%service_id%" service is deprecated. Use the \'entity_type.manager\' service to get an entity type\'s storage object and then call \Drupal\Core\Entity\EntityStorageInterface::getQuery() or \Drupal\Core\Entity\EntityStorageInterface::getAggregateQuery() instead. See https://www.drupal.org/node/2849874',
			],
			'entity.query.config' => [
				'class' => 'Drupal\Core\Config\Entity\Query\QueryFactory',
				'arguments' => ['config.factory', 'keyvalue', 'config.manager'],
			],
			'entity.query.sql' => ['class' => 'Drupal\Core\Entity\Query\Sql\QueryFactory', 'arguments' => ['database']],
			'pgsql.entity.query.sql' => ['class' => 'Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory', 'arguments' => ['database']],
			'entity.query.null' => ['class' => 'Drupal\Core\Entity\Query\Null\QueryFactory'],
			'entity.query.keyvalue' => ['class' => 'Drupal\Core\Entity\KeyValueStore\Query\QueryFactory', 'arguments' => ['keyvalue']],
			'router.dumper' => [
				'class' => 'Drupal\Core\Routing\MatcherDumper',
				'arguments' => ['database', 'state'],
				'lazy' => true,
			],
			'router.builder' => [
				'class' => 'Drupal\Core\Routing\RouteBuilder',
				'arguments' => [
					'router.dumper',
					'lock',
					'event_dispatcher',
					'module_handler',
					'controller_resolver',
					'access_manager.check_provider',
				],
				'lazy' => true,
			],
			'menu.rebuild_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber',
				'arguments' => ['lock', 'plugin.manager.menu.link', 'database', 'database.replica_kill_switch'],
			],
			'path.alias_storage' => ['class' => 'Drupal\Core\Path\AliasStorage', 'arguments' => ['database', 'module_handler']],
			'path.matcher' => [
				'class' => 'Drupal\Core\Path\PathMatcher',
				'arguments' => ['config.factory', 'current_route_match'],
			],
			'path.validator' => [
				'class' => 'Drupal\Core\Path\PathValidator',
				'arguments' => ['router', 'router.no_access_checks', 'current_user', 'path_processor_manager'],
			],
			'password' => ['class' => 'Drupal\Core\Password\PhpassHashedPassword', 'arguments' => ['19']],
			'request_format_route_filter' => ['class' => 'Drupal\Core\Routing\RequestFormatRouteFilter'],
			'method_filter' => ['class' => 'Drupal\Core\Routing\MethodFilter'],
			'content_type_header_matcher' => ['class' => 'Drupal\Core\Routing\ContentTypeHeaderMatcher'],
			'paramconverter_manager' => ['class' => 'Drupal\Core\ParamConverter\ParamConverterManager'],
			'paramconverter_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\ParamConverterSubscriber',
				'arguments' => ['paramconverter_manager'],
			],
			'paramconverter.entity' => [
				'class' => 'Drupal\Core\ParamConverter\EntityConverter',
				'arguments' => ['entity_type.manager', 'entity.repository'],
			],
			'paramconverter.entity_revision' => [
				'class' => 'Drupal\Core\ParamConverter\EntityRevisionParamConverter',
				'arguments' => ['entity_type.manager', 'entity.repository'],
			],
			'paramconverter.configentity_admin' => [
				'class' => 'Drupal\Core\ParamConverter\AdminPathConfigEntityConverter',
				'arguments' => ['entity_type.manager', 'config.factory', 'router.admin_context', 'entity.repository'],
				'lazy' => true,
			],
			'route_subscriber.module' => [
				'class' => 'Drupal\Core\EventSubscriber\ModuleRouteSubscriber',
				'arguments' => ['module_handler'],
			],
			'resolver_manager.entity' => [
				'class' => 'Drupal\Core\Entity\EntityResolverManager',
				'arguments' => ['entity_type.manager', 'class_resolver'],
			],
			'route_subscriber.entity' => [
				'class' => 'Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber',
				'arguments' => ['resolver_manager.entity'],
			],
			'ajax_response.subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\AjaxResponseSubscriber',
				'arguments' => ['ajax_response.attachments_processor'],
			],
			'form_ajax_subscriber' => [
				'class' => 'Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber',
				'arguments' => ['form_ajax_response_builder', 'string_translation', 'messenger'],
			],
			'route_enhancer.param_conversion' => [
				'class' => 'Drupal\Core\Routing\Enhancer\ParamConversionEnhancer',
				'arguments' => ['paramconverter_manager'],
			],
			'route_enhancer.form' => ['class' => 'Drupal\Core\Routing\Enhancer\FormRouteEnhancer'],
			'route_enhancer.entity' => ['class' => 'Drupal\Core\Entity\Enhancer\EntityRouteEnhancer'],
			'route_enhancer.entity_revision' => ['class' => 'Drupal\Core\Routing\Enhancer\EntityRevisionRouteEnhancer'],
			'route_special_attributes_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber'],
			'route_http_method_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RouteMethodSubscriber'],
			'psr_response_view_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\PsrResponseSubscriber',
				'arguments' => ['psr7.http_foundation_factory'],
			],
			'main_content_view_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\MainContentViewSubscriber',
				'arguments' => ['class_resolver', 'current_route_match', '%main_content_renderers%'],
			],
			'renderer_non_html' => ['class' => 'Drupal\Core\EventSubscriber\RenderArrayNonHtmlSubscriber'],
			'main_content_renderer.html' => [
				'class' => 'Drupal\Core\Render\MainContent\HtmlRenderer',
				'arguments' => [
					'title_resolver',
					'plugin.manager.display_variant',
					'event_dispatcher',
					'module_handler',
					'renderer',
					'render_cache',
					'%renderer.config%',
				],
			],
			'main_content_renderer.ajax' => ['class' => 'Drupal\Core\Render\MainContent\AjaxRenderer', 'arguments' => ['element_info']],
			'main_content_renderer.dialog' => ['class' => 'Drupal\Core\Render\MainContent\DialogRenderer', 'arguments' => ['title_resolver']],
			'main_content_renderer.off_canvas' => [
				'class' => 'Drupal\Core\Render\MainContent\OffCanvasRenderer',
				'arguments' => ['title_resolver', 'renderer'],
			],
			'main_content_renderer.off_canvas_top' => [
				'class' => 'Drupal\Core\Render\MainContent\OffCanvasRenderer',
				'arguments' => ['title_resolver', 'renderer', 'top'],
			],
			'main_content_renderer.modal' => ['class' => 'Drupal\Core\Render\MainContent\ModalRenderer', 'arguments' => ['title_resolver']],
			'controller.form' => [
				'class' => 'Drupal\Core\Controller\HtmlFormController',
				'arguments' => ['http_kernel.controller.argument_resolver', 'form_builder', 'class_resolver'],
			],
			'controller.entity_form' => [
				'class' => 'Drupal\Core\Entity\HtmlEntityFormController',
				'arguments' => ['http_kernel.controller.argument_resolver', 'form_builder', 'entity_type.manager'],
			],
			'form_ajax_response_builder' => [
				'class' => 'Drupal\Core\Form\FormAjaxResponseBuilder',
				'arguments' => ['main_content_renderer.ajax', 'current_route_match'],
			],
			'router_listener' => [
				'class' => 'Symfony\Component\HttpKernel\EventListener\RouterListener',
				'arguments' => ['router', 'request_stack', 'router.request_context', ''],
			],
			'options_request_listener' => [
				'class' => 'Drupal\Core\EventSubscriber\OptionsRequestSubscriber',
				'arguments' => ['router.route_provider'],
			],
			'bare_html_page_renderer' => [
				'class' => 'Drupal\Core\Render\BareHtmlPageRenderer',
				'arguments' => ['renderer', 'html_response.attachments_processor'],
				'lazy' => true,
			],
			'private_key' => ['class' => 'Drupal\Core\PrivateKey', 'arguments' => ['state']],
			'csrf_token' => [
				'class' => 'Drupal\Core\Access\CsrfTokenGenerator',
				'arguments' => ['private_key', 'session_manager.metadata_bag'],
			],
			'access_arguments_resolver_factory' => ['class' => 'Drupal\Core\Access\AccessArgumentsResolverFactory'],
			'access_manager' => [
				'class' => 'Drupal\Core\Access\AccessManager',
				'arguments' => [
					'router.route_provider',
					'paramconverter_manager',
					'access_arguments_resolver_factory',
					'current_user',
					'access_manager.check_provider',
				],
			],
			'access_manager.check_provider' => ['class' => 'Drupal\Core\Access\CheckProvider', 'public' => false],
			'access_check.default' => ['class' => 'Drupal\Core\Access\DefaultAccessCheck'],
			'access_check.entity' => ['class' => 'Drupal\Core\Entity\EntityAccessCheck'],
			'access_check.entity_create' => ['class' => 'Drupal\Core\Entity\EntityCreateAccessCheck', 'arguments' => ['entity_type.manager']],
			'access_check.entity_create_any' => [
				'class' => 'Drupal\Core\Entity\EntityCreateAnyAccessCheck',
				'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
			],
			'access_check.entity_delete_multiple' => [
				'class' => 'Drupal\Core\Entity\EntityDeleteMultipleAccessCheck',
				'arguments' => ['entity_type.manager', 'tempstore.private', 'request_stack'],
			],
			'access_check.theme' => ['class' => 'Drupal\Core\Theme\ThemeAccessCheck', 'arguments' => ['theme_handler']],
			'access_check.custom' => [
				'class' => 'Drupal\Core\Access\CustomAccessCheck',
				'arguments' => ['controller_resolver', 'access_arguments_resolver_factory'],
			],
			'access_check.csrf' => ['class' => 'Drupal\Core\Access\CsrfAccessCheck', 'arguments' => ['csrf_token']],
			'access_check.header.csrf' => [
				'class' => 'Drupal\Core\Access\CsrfRequestHeaderAccessCheck',
				'arguments' => ['session_configuration', 'csrf_token'],
			],
			'maintenance_mode' => ['class' => 'Drupal\Core\Site\MaintenanceMode', 'arguments' => ['state']],
			'maintenance_mode_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\MaintenanceModeSubscriber',
				'arguments' => [
					'maintenance_mode',
					'config.factory',
					'string_translation',
					'url_generator',
					'current_user',
					'bare_html_page_renderer',
					'messenger',
				],
			],
			'path_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\PathSubscriber',
				'arguments' => ['path.alias_manager', 'path.current'],
			],
			'route_access_response_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber'],
			'client_error_response_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber'],
			'anonymous_user_response_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber',
				'arguments' => ['current_user'],
			],
			'ajax_response.attachments_processor' => [
				'class' => 'Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor',
				'arguments' => [
					'asset.resolver',
					'config.factory',
					'asset.css.collection_renderer',
					'asset.js.collection_renderer',
					'request_stack',
					'renderer',
					'module_handler',
				],
			],
			'html_response.attachments_processor' => [
				'class' => 'Drupal\Core\Render\HtmlResponseAttachmentsProcessor',
				'arguments' => [
					'asset.resolver',
					'config.factory',
					'asset.css.collection_renderer',
					'asset.js.collection_renderer',
					'request_stack',
					'renderer',
					'module_handler',
				],
			],
			'html_response.subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\HtmlResponseSubscriber',
				'arguments' => ['html_response.attachments_processor'],
			],
			'finish_response_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\FinishResponseSubscriber',
				'arguments' => [
					'language_manager',
					'config.factory',
					'page_cache_request_policy',
					'page_cache_response_policy',
					'cache_contexts_manager',
					'%http.response.debug_cacheability_headers%',
				],
			],
			'response_generator_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber'],
			'redirect_response_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\RedirectResponseSubscriber',
				'arguments' => ['unrouted_url_assembler', 'router.request_context'],
			],
			'redirect_leading_slashes_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\RedirectLeadingSlashesSubscriber'],
			'request_close_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\RequestCloseSubscriber',
				'arguments' => ['module_handler'],
			],
			'config_import_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\ConfigImportSubscriber',
				'arguments' => ['theme_handler'],
			],
			'config_snapshot_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber',
				'arguments' => ['config.manager', 'config.storage', 'config.storage.snapshot'],
			],
			'exception.needs_installer' => [
				'class' => 'Drupal\Core\EventSubscriber\ExceptionDetectNeedsInstallSubscriber',
				'arguments' => ['database'],
			],
			'exception.default_json' => ['class' => 'Drupal\Core\EventSubscriber\ExceptionJsonSubscriber'],
			'exception.default_html' => [
				'class' => 'Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber',
				'arguments' => ['http_kernel', 'logger.channel.php', 'redirect.destination', 'router.no_access_checks'],
			],
			'exception.final' => [
				'class' => 'Drupal\Core\EventSubscriber\FinalExceptionSubscriber',
				'arguments' => ['config.factory'],
			],
			'exception.logger' => [
				'class' => 'Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber',
				'arguments' => ['logger.factory'],
			],
			'exception.custom_page_html' => [
				'class' => 'Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber',
				'arguments' => [
					'config.factory',
					'http_kernel',
					'logger.channel.php',
					'redirect.destination',
					'router.no_access_checks',
					'access_manager',
				],
			],
			'exception.fast_404_html' => [
				'class' => 'Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber',
				'arguments' => ['config.factory', 'http_kernel'],
			],
			'exception.test_site' => ['class' => 'Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber'],
			'exception.enforced_form_response' => ['class' => 'Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber'],
			'route_processor_manager' => ['class' => 'Drupal\Core\RouteProcessor\RouteProcessorManager'],
			'path_processor_manager' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorManager'],
			'path_processor_decode' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorDecode'],
			'path_processor_front' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorFront', 'arguments' => ['config.factory']],
			'route_processor_current' => [
				'class' => 'Drupal\Core\RouteProcessor\RouteProcessorCurrent',
				'arguments' => ['current_route_match'],
			],
			'path_processor_alias' => ['class' => 'Drupal\Core\PathProcessor\PathProcessorAlias', 'arguments' => ['path.alias_manager']],
			'route_processor_csrf' => ['class' => 'Drupal\Core\Access\RouteProcessorCsrf', 'arguments' => ['csrf_token']],
			'transliteration' => [
				'class' => 'Drupal\Core\Transliteration\PhpTransliteration',
				'arguments' => ['', 'module_handler'],
			],
			'flood' => ['class' => 'Drupal\Core\Flood\DatabaseBackend', 'arguments' => ['database', 'request_stack']],
			'plugin.manager.mail' => [
				'class' => 'Drupal\Core\Mail\MailManager',
				'arguments' => [
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'config.factory',
					'logger.factory',
					'string_translation',
					'renderer',
				],
			],
			'plugin.manager.condition' => ['class' => 'Drupal\Core\Condition\ConditionManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.element_info' => [
				'class' => 'Drupal\Core\Render\ElementInfoManager',
				'arguments' => [
					'container.namespaces',
					'cache.discovery',
					'cache_tags.invalidator',
					'module_handler',
					'theme.manager',
				],
			],
			'stream_wrapper_manager' => ['class' => 'Drupal\Core\StreamWrapper\StreamWrapperManager'],
			'stream_wrapper.public' => ['class' => 'Drupal\Core\StreamWrapper\PublicStream'],
			'stream_wrapper.temporary' => ['class' => 'Drupal\Core\StreamWrapper\TemporaryStream'],
			'kernel_destruct_subscriber' => ['class' => 'Drupal\Core\EventSubscriber\KernelDestructionSubscriber'],
			'image.toolkit.manager' => [
				'class' => 'Drupal\Core\ImageToolkit\ImageToolkitManager',
				'arguments' => ['config.factory'],
				'parent' => 'default_plugin_manager',
			],
			'image.toolkit.operation.manager' => [
				'class' => 'Drupal\Core\ImageToolkit\ImageToolkitOperationManager',
				'arguments' => ['logger.channel.image', 'image.toolkit.manager'],
				'parent' => 'default_plugin_manager',
			],
			'image.factory' => ['class' => 'Drupal\Core\Image\ImageFactory', 'arguments' => ['image.toolkit.manager']],
			'breadcrumb' => ['class' => 'Drupal\Core\Breadcrumb\BreadcrumbManager', 'arguments' => ['module_handler']],
			'token' => [
				'class' => 'Drupal\Core\Utility\Token',
				'arguments' => ['module_handler', 'cache.default', 'language_manager', 'cache_tags.invalidator', 'renderer'],
			],
			'batch.storage' => [
				'class' => 'Drupal\Core\Batch\BatchStorage',
				'arguments' => ['database', 'session', 'csrf_token'],
				'lazy' => true,
			],
			'country_manager' => ['class' => 'Drupal\Core\Locale\CountryManager', 'arguments' => ['module_handler']],
			'date.formatter' => [
				'class' => 'Drupal\Core\Datetime\DateFormatter',
				'arguments' => [
					'entity_type.manager',
					'language_manager',
					'string_translation',
					'config.factory',
					'request_stack',
				],
			],
			'feed.bridge.reader' => [
				'class' => 'Drupal\Component\Bridge\ZfExtensionManagerSfContainer',
				'arguments' => ['feed.reader.'],
			],
			'feed.bridge.writer' => [
				'class' => 'Drupal\Component\Bridge\ZfExtensionManagerSfContainer',
				'arguments' => ['feed.writer.'],
			],
			'feed.reader.dublincoreentry' => ['class' => 'Zend\Feed\Reader\Extension\DublinCore\Entry', 'shared' => false],
			'feed.reader.dublincorefeed' => ['class' => 'Zend\Feed\Reader\Extension\DublinCore\Feed', 'shared' => false],
			'feed.reader.contententry' => ['class' => 'Zend\Feed\Reader\Extension\Content\Entry', 'shared' => false],
			'feed.reader.atomentry' => ['class' => 'Zend\Feed\Reader\Extension\Atom\Entry', 'shared' => false],
			'feed.reader.atomfeed' => ['class' => 'Zend\Feed\Reader\Extension\Atom\Feed', 'shared' => false],
			'feed.reader.slashentry' => ['class' => 'Zend\Feed\Reader\Extension\Slash\Entry', 'shared' => false],
			'feed.reader.wellformedwebentry' => ['class' => 'Zend\Feed\Reader\Extension\WellFormedWeb\Entry', 'shared' => false],
			'feed.reader.threadentry' => ['class' => 'Zend\Feed\Reader\Extension\Thread\Entry', 'shared' => false],
			'feed.reader.podcastentry' => ['class' => 'Zend\Feed\Reader\Extension\Podcast\Entry', 'shared' => false],
			'feed.reader.podcastfeed' => ['class' => 'Zend\Feed\Reader\Extension\Podcast\Feed', 'shared' => false],
			'feed.writer.atomrendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\Atom\Renderer\Feed', 'shared' => false],
			'feed.writer.contentrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Content\Renderer\Entry', 'shared' => false],
			'feed.writer.dublincorerendererentry' => ['class' => 'Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry', 'shared' => false],
			'feed.writer.dublincorerendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed', 'shared' => false],
			'feed.writer.itunesentry' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Entry', 'shared' => false],
			'feed.writer.itunesfeed' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Feed', 'shared' => false],
			'feed.writer.itunesrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Renderer\Entry', 'shared' => false],
			'feed.writer.itunesrendererfeed' => ['class' => 'Zend\Feed\Writer\Extension\ITunes\Renderer\Feed', 'shared' => false],
			'feed.writer.slashrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Slash\Renderer\Entry', 'shared' => false],
			'feed.writer.threadingrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\Threading\Renderer\Entry', 'shared' => false],
			'feed.writer.wellformedwebrendererentry' => ['class' => 'Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry', 'shared' => false],
			'theme.manager' => [
				'class' => 'Drupal\Core\Theme\ThemeManager',
				'arguments' => ['app.root', 'theme.negotiator', 'theme.initialization', 'module_handler'],
			],
			'theme.initialization' => [
				'class' => 'Drupal\Core\Theme\ThemeInitialization',
				'arguments' => ['app.root', 'theme_handler', 'cache.bootstrap', 'module_handler'],
			],
			'theme.registry' => [
				'class' => 'Drupal\Core\Theme\Registry',
				'arguments' => [
					'app.root',
					'cache.default',
					'lock',
					'module_handler',
					'theme_handler',
					'theme.initialization',
					'',
					'cache.bootstrap',
				],
			],
			'authentication' => [
				'class' => 'Drupal\Core\Authentication\AuthenticationManager',
				'arguments' => ['authentication_collector'],
			],
			'authentication_collector' => ['class' => 'Drupal\Core\Authentication\AuthenticationCollector'],
			'authentication_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\AuthenticationSubscriber',
				'arguments' => ['authentication', 'current_user'],
			],
			'account_switcher' => [
				'class' => 'Drupal\Core\Session\AccountSwitcher',
				'arguments' => ['current_user', 'session_handler.write_safe'],
			],
			'user_permissions_hash_generator' => [
				'class' => 'Drupal\Core\Session\PermissionsHashGenerator',
				'arguments' => ['private_key', 'cache.bootstrap', 'cache.static'],
			],
			'current_user' => ['class' => 'Drupal\Core\Session\AccountProxy'],
			'session_configuration' => [
				'class' => 'Drupal\Core\Session\SessionConfiguration',
				'arguments' => ['%session.storage.options%'],
			],
			'session' => [
				'class' => 'Symfony\Component\HttpFoundation\Session\Session',
				'arguments' => ['session_manager', 'session.attribute_bag', 'session.flash_bag'],
			],
			'session.flash_bag' => ['class' => 'Symfony\Component\HttpFoundation\Session\Flash\FlashBag', 'public' => false],
			'session.attribute_bag' => ['class' => 'Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag', 'public' => false],
			'session_handler' => ['alias' => 'session_handler.storage'],
			'session_handler.storage' => ['class' => 'Drupal\Core\Session\SessionHandler', 'arguments' => ['request_stack', 'database']],
			'session_handler.write_safe' => ['class' => 'Drupal\Core\Session\WriteSafeSessionHandler'],
			'session_manager' => [
				'class' => 'Drupal\Core\Session\SessionManager',
				'arguments' => [
					'request_stack',
					'database',
					'session_manager.metadata_bag',
					'session_configuration',
					'session_handler',
				],
			],
			'session_manager.metadata_bag' => ['class' => 'Drupal\Core\Session\MetadataBag', 'arguments' => ['settings']],
			'asset.css.collection_renderer' => ['class' => 'Drupal\Core\Asset\CssCollectionRenderer', 'arguments' => ['state']],
			'asset.css.collection_optimizer' => [
				'class' => 'Drupal\Core\Asset\CssCollectionOptimizer',
				'arguments' => [
					'asset.css.collection_grouper',
					'asset.css.optimizer',
					'asset.css.dumper',
					'state',
					'file_system',
				],
			],
			'asset.css.optimizer' => ['class' => 'Drupal\Core\Asset\CssOptimizer'],
			'asset.css.collection_grouper' => ['class' => 'Drupal\Core\Asset\CssCollectionGrouper'],
			'asset.css.dumper' => ['class' => 'Drupal\Core\Asset\AssetDumper', 'arguments' => ['file_system']],
			'asset.js.collection_renderer' => ['class' => 'Drupal\Core\Asset\JsCollectionRenderer', 'arguments' => ['state']],
			'asset.js.collection_optimizer' => [
				'class' => 'Drupal\Core\Asset\JsCollectionOptimizer',
				'arguments' => [
					'asset.js.collection_grouper',
					'asset.js.optimizer',
					'asset.js.dumper',
					'state',
					'file_system',
				],
			],
			'asset.js.optimizer' => ['class' => 'Drupal\Core\Asset\JsOptimizer'],
			'asset.js.collection_grouper' => ['class' => 'Drupal\Core\Asset\JsCollectionGrouper'],
			'asset.js.dumper' => ['class' => 'Drupal\Core\Asset\AssetDumper', 'arguments' => ['file_system']],
			'library.discovery' => ['class' => 'Drupal\Core\Asset\LibraryDiscovery', 'arguments' => ['library.discovery.collector']],
			'library.discovery.collector' => [
				'class' => 'Drupal\Core\Asset\LibraryDiscoveryCollector',
				'arguments' => ['cache.discovery', 'lock', 'library.discovery.parser', 'theme.manager'],
			],
			'library.discovery.parser' => [
				'class' => 'Drupal\Core\Asset\LibraryDiscoveryParser',
				'arguments' => ['app.root', 'module_handler', 'theme.manager'],
			],
			'library.dependency_resolver' => ['class' => 'Drupal\Core\Asset\LibraryDependencyResolver', 'arguments' => ['library.discovery']],
			'asset.resolver' => [
				'class' => 'Drupal\Core\Asset\AssetResolver',
				'arguments' => [
					'library.discovery',
					'library.dependency_resolver',
					'module_handler',
					'theme.manager',
					'language_manager',
					'cache.data',
				],
			],
			'info_parser' => ['class' => 'Drupal\Core\Extension\InfoParser'],
			'twig' => [
				'class' => 'Drupal\Core\Template\TwigEnvironment',
				'arguments' => [
					'app.root',
					'cache.default',
					'%twig_extension_hash%',
					'state',
					'twig.loader',
					'%twig.config%',
				],
			],
			'twig.extension' => [
				'class' => 'Drupal\Core\Template\TwigExtension',
				'arguments' => ['renderer', 'url_generator', 'theme.manager', 'date.formatter'],
			],
			'twig.extension.debug' => ['class' => 'Twig_Extension_Debug'],
			'twig.loader' => ['class' => 'Twig_Loader_Chain', 'public' => false],
			'twig.loader.filesystem' => [
				'class' => 'Drupal\Core\Template\Loader\FilesystemLoader',
				'arguments' => ['.', 'module_handler', 'theme_handler'],
			],
			'twig.loader.theme_registry' => ['class' => 'Drupal\Core\Template\Loader\ThemeRegistryLoader', 'arguments' => ['theme.registry']],
			'twig.loader.string' => ['class' => 'Drupal\Core\Template\Loader\StringLoader'],
			'element_info' => ['alias' => 'plugin.manager.element_info'],
			'file.mime_type.guesser' => [
				'class' => 'Drupal\Core\File\MimeType\MimeTypeGuesser',
				'arguments' => ['stream_wrapper_manager'],
				'lazy' => true,
			],
			'file.mime_type.guesser.extension' => [
				'class' => 'Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser',
				'arguments' => ['module_handler'],
				'lazy' => true,
			],
			'render_placeholder_generator' => ['class' => 'Drupal\Core\Render\PlaceholderGenerator', 'arguments' => ['%renderer.config%']],
			'render_cache' => [
				'class' => 'Drupal\Core\Render\PlaceholderingRenderCache',
				'arguments' => ['request_stack', 'cache_factory', 'cache_contexts_manager', 'render_placeholder_generator'],
			],
			'renderer' => [
				'class' => 'Drupal\Core\Render\Renderer',
				'arguments' => [
					'controller_resolver',
					'theme.manager',
					'plugin.manager.element_info',
					'render_placeholder_generator',
					'render_cache',
					'request_stack',
					'%renderer.config%',
				],
			],
			'early_rendering_controller_wrapper_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\EarlyRenderingControllerWrapperSubscriber',
				'arguments' => ['http_kernel.controller.argument_resolver', 'renderer'],
			],
			'html_response.placeholder_strategy_subscriber' => [
				'class' => 'Drupal\Core\EventSubscriber\HtmlResponsePlaceholderStrategySubscriber',
				'arguments' => ['placeholder_strategy'],
			],
			'placeholder_strategy' => ['class' => 'Drupal\Core\Render\Placeholder\ChainedPlaceholderStrategy'],
			'placeholder_strategy.single_flush' => ['class' => 'Drupal\Core\Render\Placeholder\SingleFlushStrategy'],
			'email.validator' => ['class' => 'Drupal\Component\Utility\EmailValidator'],
			'update.post_update_registry' => ['class' => 'Drupal\Core\Update\UpdateRegistry'],
			'update.post_update_registry_factory' => ['class' => 'Drupal\Core\Update\UpdateRegistryFactory', 'parent' => 'container.trait'],
			'uuid' => ['class' => 'Drupal\Component\Uuid\Php'],
			'response_filter.active_link' => [
				'class' => 'Drupal\Core\EventSubscriber\ActiveLinkResponseFilter',
				'arguments' => ['current_user', 'path.current', 'path.matcher', 'language_manager'],
			],
			'response_filter.rss.relative_url' => ['class' => 'Drupal\Core\EventSubscriber\RssResponseRelativeUrlFilter'],
			'messenger' => [
				'class' => 'Drupal\Core\Messenger\Messenger',
				'arguments' => ['session.flash_bag', 'page_cache_kill_switch'],
			],
			'tempstore.private' => [
				'class' => 'Drupal\Core\TempStore\PrivateTempStoreFactory',
				'arguments' => ['keyvalue.expirable', 'lock', 'current_user', 'request_stack', '%tempstore.expire%'],
			],
			'tempstore.shared' => [
				'class' => 'Drupal\Core\TempStore\SharedTempStoreFactory',
				'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%'],
			],
			'plugin.manager.aggregator.fetcher' => [
				'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
				'arguments' => ['fetcher', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.aggregator.parser' => [
				'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
				'arguments' => ['parser', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.aggregator.processor' => [
				'class' => 'Drupal\aggregator\Plugin\AggregatorPluginManager',
				'arguments' => ['processor', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'aggregator.items.importer' => [
				'class' => 'Drupal\aggregator\ItemsImporter',
				'arguments' => [
					'config.factory',
					'plugin.manager.aggregator.fetcher',
					'plugin.manager.aggregator.parser',
					'plugin.manager.aggregator.processor',
					'logger.channel.aggregator',
				],
			],
			'logger.channel.aggregator' => ['parent' => 'logger.channel_base', 'arguments' => ['aggregator']],
			'automated_cron.subscriber' => [
				'class' => 'Drupal\automated_cron\EventSubscriber\AutomatedCron',
				'arguments' => ['cron', 'config.factory', 'state'],
			],
			'ban.ip_manager' => ['class' => 'Drupal\ban\BanIpManager', 'arguments' => ['database']],
			'ban.middleware' => ['class' => 'Drupal\ban\BanMiddleware', 'arguments' => ['ban.ip_manager']],
			'basic_auth.authentication.basic_auth' => [
				'class' => 'Drupal\basic_auth\Authentication\Provider\BasicAuth',
				'arguments' => ['config.factory', 'user.auth', 'flood', 'entity_type.manager'],
			],
			'basic_auth.page_cache_request_policy.disallow_basic_auth_requests' => ['class' => 'Drupal\basic_auth\PageCache\DisallowBasicAuthRequests', 'public' => false],
			'html_response.big_pipe_subscriber' => [
				'class' => 'Drupal\big_pipe\EventSubscriber\HtmlResponseBigPipeSubscriber',
				'arguments' => ['big_pipe'],
			],
			'placeholder_strategy.big_pipe' => [
				'class' => 'Drupal\big_pipe\Render\Placeholder\BigPipeStrategy',
				'arguments' => ['session_configuration', 'request_stack', 'current_route_match'],
			],
			'big_pipe' => [
				'class' => 'Drupal\big_pipe\Render\BigPipe',
				'arguments' => ['renderer', 'session', 'request_stack', 'http_kernel', 'event_dispatcher', 'config.factory'],
			],
			'html_response.attachments_processor.big_pipe' => [
				'public' => false,
				'class' => '\Drupal\big_pipe\Render\BigPipeResponseAttachmentsProcessor',
				'decorates' => 'html_response.attachments_processor',
				'arguments' => [
					'html_response.attachments_processor.big_pipe.inner',
					'asset.resolver',
					'config.factory',
					'asset.css.collection_renderer',
					'asset.js.collection_renderer',
					'request_stack',
					'renderer',
					'module_handler',
				],
			],
			'route_subscriber.no_big_pipe' => ['class' => 'Drupal\big_pipe\EventSubscriber\NoBigPipeRouteAlterSubscriber'],
			'big_pipe_test_subscriber' => ['class' => 'Drupal\big_pipe_test\EventSubscriber\BigPipeTestSubscriber'],
			'theme.negotiator.block.admin_demo' => ['class' => 'Drupal\block\Theme\AdminDemoNegotiator'],
			'block.page_display_variant_subscriber' => ['class' => 'Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber'],
			'block.repository' => [
				'class' => 'Drupal\block\BlockRepository',
				'arguments' => ['entity_type.manager', 'theme.manager', 'context.handler'],
			],
			'block_test.multiple_static_context' => [
				'class' => 'Drupal\block_test\ContextProvider\MultipleStaticContext',
				'arguments' => ['current_user', 'entity_type.manager'],
			],
			'block_content.uuid_lookup' => [
				'class' => '\Drupal\block_content\BlockContentUuidLookup',
				'arguments' => ['cache.bootstrap', 'lock', 'entity_type.manager'],
			],
			'block_place.page_display_variant_subscriber.block' => [
				'class' => 'Drupal\block_place\EventSubscriber\BlockPlaceEventSubscriber',
				'arguments' => ['request_stack', 'current_user'],
			],
			'book.breadcrumb' => [
				'class' => 'Drupal\book\BookBreadcrumbBuilder',
				'arguments' => ['entity_type.manager', 'current_user'],
			],
			'book.manager' => [
				'class' => 'Drupal\book\BookManager',
				'arguments' => [
					'entity_type.manager',
					'string_translation',
					'config.factory',
					'book.outline_storage',
					'renderer',
				],
			],
			'book.outline' => ['class' => 'Drupal\book\BookOutline', 'arguments' => ['book.manager']],
			'book.export' => ['class' => 'Drupal\book\BookExport', 'arguments' => ['entity_type.manager', 'book.manager']],
			'book.outline_storage' => ['class' => 'Drupal\book\BookOutlineStorage', 'arguments' => ['database']],
			'access_check.book.removable' => ['class' => 'Drupal\book\Access\BookNodeIsRemovableAccessCheck', 'arguments' => ['book.manager']],
			'cache_context.route.book_navigation' => ['class' => 'Drupal\book\Cache\BookNavigationCacheContext', 'arguments' => ['request_stack']],
			'book.uninstall_validator' => [
				'class' => 'Drupal\book\BookUninstallValidator',
				'arguments' => ['book.outline_storage', 'entity_type.manager', 'string_translation'],
				'lazy' => true,
			],
			'breakpoint.manager' => [
				'class' => 'Drupal\breakpoint\BreakpointManager',
				'arguments' => ['module_handler', 'theme_handler', 'cache.discovery', 'string_translation'],
			],
			'plugin.manager.ckeditor.plugin' => ['class' => 'Drupal\ckeditor\CKEditorPluginManager', 'parent' => 'default_plugin_manager'],
			'color.config_cache_invalidator' => [
				'class' => 'Drupal\color\EventSubscriber\ColorConfigCacheInvalidator',
				'arguments' => ['cache_tags.invalidator'],
			],
			'comment.breadcrumb' => ['class' => 'Drupal\comment\CommentBreadcrumbBuilder', 'arguments' => ['entity_type.manager']],
			'comment.manager' => [
				'class' => 'Drupal\comment\CommentManager',
				'arguments' => [
					'entity_type.manager',
					'config.factory',
					'string_translation',
					'module_handler',
					'current_user',
					'entity_field.manager',
				],
			],
			'comment.statistics' => [
				'class' => 'Drupal\comment\CommentStatistics',
				'arguments' => ['database', 'current_user', 'entity_type.manager', 'state', 'database.replica'],
			],
			'comment.lazy_builders' => [
				'class' => 'Drupal\comment\CommentLazyBuilders',
				'arguments' => [
					'entity_type.manager',
					'entity.form_builder',
					'current_user',
					'comment.manager',
					'module_handler',
					'renderer',
				],
			],
			'comment.link_builder' => [
				'class' => 'Drupal\comment\CommentLinkBuilder',
				'arguments' => [
					'current_user',
					'comment.manager',
					'module_handler',
					'string_translation',
					'entity_type.manager',
				],
			],
			'config.config_subscriber' => ['class' => 'Drupal\config\ConfigSubscriber'],
			'config_events_test.event_subscriber' => ['class' => 'Drupal\config_events_test\EventSubscriber', 'arguments' => ['state']],
			'config_import_test.event_subscriber' => ['class' => 'Drupal\config_import_test\EventSubscriber', 'arguments' => ['state']],
			'cache_context.config_override_integration_test' => [
				'class' => 'Drupal\config_override_integration_test\Cache\ConfigOverrideIntegrationTestCacheContext',
			],
			'config_override_integration_test.config_override' => ['class' => 'Drupal\config_override_integration_test\CacheabilityMetadataConfigOverride'],
			'cache_context.pirate_day' => ['class' => 'Drupal\config_override_test\Cache\PirateDayCacheContext'],
			'config_override_test.overrider' => ['class' => 'Drupal\config_override_test\ConfigOverrider'],
			'config_override_test.low_priority_overrider' => ['class' => 'Drupal\config_override_test\ConfigOverriderLowPriority'],
			'config_override_test.pirate_day_cacheability_metadata_override' => ['class' => 'Drupal\config_override_test\PirateDayCacheabilityMetadataConfigOverride'],
			'config_translation.route_subscriber' => [
				'class' => 'Drupal\config_translation\Routing\RouteSubscriber',
				'arguments' => ['plugin.manager.config_translation.mapper'],
			],
			'config_translation.access.overview' => [
				'class' => 'Drupal\config_translation\Access\ConfigTranslationOverviewAccess',
				'arguments' => ['plugin.manager.config_translation.mapper', 'language_manager'],
			],
			'config_translation.access.form' => [
				'class' => 'Drupal\config_translation\Access\ConfigTranslationFormAccess',
				'arguments' => ['plugin.manager.config_translation.mapper', 'language_manager'],
			],
			'plugin.manager.config_translation.mapper' => [
				'class' => 'Drupal\config_translation\ConfigMapperManager',
				'arguments' => ['cache.discovery', 'language_manager', 'module_handler', 'config.typed', 'theme_handler'],
			],
			'config_translation_test_event_subscriber' => ['class' => 'Drupal\config_translation_test\EventSubscriber\ConfigTranslationTestSubscriber'],
			'access_check.contact_personal' => [
				'class' => 'Drupal\contact\Access\ContactPageAccess',
				'arguments' => ['config.factory', 'user.data'],
			],
			'contact.mail_handler' => [
				'class' => 'Drupal\contact\MailHandler',
				'arguments' => [
					'plugin.manager.mail',
					'language_manager',
					'logger.channel.contact',
					'string_translation',
					'entity_type.manager',
				],
			],
			'logger.channel.contact' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['contact']],
			'paramconverter.latest_revision' => [
				'class' => 'Drupal\content_moderation\ParamConverter\EntityRevisionConverter',
				'parent' => 'paramconverter.entity',
			],
			'content_moderation.state_transition_validation' => [
				'class' => '\Drupal\content_moderation\StateTransitionValidation',
				'arguments' => ['content_moderation.moderation_information'],
			],
			'content_moderation.moderation_information' => [
				'class' => 'Drupal\content_moderation\ModerationInformation',
				'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
			],
			'access_check.latest_revision' => [
				'class' => 'Drupal\content_moderation\Access\LatestRevisionCheck',
				'arguments' => ['content_moderation.moderation_information'],
			],
			'content_moderation.config_import_subscriber' => [
				'class' => 'Drupal\content_moderation\EventSubscriber\ConfigImportSubscriber',
				'arguments' => ['config.manager', 'entity_type.manager'],
			],
			'content_moderation.route_subscriber' => [
				'class' => 'Drupal\content_moderation\Routing\ContentModerationRouteSubscriber',
				'arguments' => ['entity_type.manager'],
			],
			'content_translation.synchronizer' => [
				'class' => 'Drupal\content_translation\FieldTranslationSynchronizer',
				'arguments' => ['entity_type.manager', 'plugin.manager.field.field_type'],
			],
			'content_translation.subscriber' => [
				'class' => 'Drupal\content_translation\Routing\ContentTranslationRouteSubscriber',
				'arguments' => ['content_translation.manager'],
			],
			'content_translation.delete_access' => [
				'class' => 'Drupal\content_translation\Access\ContentTranslationDeleteAccess',
				'arguments' => ['entity_type.manager', 'content_translation.manager'],
			],
			'content_translation.overview_access' => [
				'class' => 'Drupal\content_translation\Access\ContentTranslationOverviewAccess',
				'arguments' => ['entity_type.manager'],
			],
			'content_translation.manage_access' => [
				'class' => 'Drupal\content_translation\Access\ContentTranslationManageAccessCheck',
				'arguments' => ['entity_type.manager', 'language_manager'],
			],
			'content_translation.manager' => [
				'class' => 'Drupal\content_translation\ContentTranslationManager',
				'arguments' => ['entity_type.manager', 'entity_type.bundle.info'],
			],
			'content_translation.updates_manager' => [
				'class' => 'Drupal\content_translation\ContentTranslationUpdatesManager',
				'arguments' => [
					'entity_type.manager',
					'entity.definition_update_manager',
					'entity_field.manager',
					'entity.last_installed_schema.repository',
				],
				'deprecated' => 'The "%service_id%" service is deprecated. Definitions are updated automatically now so no replacement is needed. See https://www.drupal.org/node/2973222.',
			],
			'logger.dblog' => ['class' => 'Drupal\dblog\Logger\DbLog', 'arguments' => ['database', 'logger.log_message_parser']],
			'cache.dynamic_page_cache' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['dynamic_page_cache']],
			'dynamic_page_cache_subscriber' => [
				'class' => 'Drupal\dynamic_page_cache\EventSubscriber\DynamicPageCacheSubscriber',
				'arguments' => [
					'dynamic_page_cache_request_policy',
					'dynamic_page_cache_response_policy',
					'render_cache',
					'%renderer.config%',
				],
			],
			'dynamic_page_cache_request_policy' => ['class' => 'Drupal\dynamic_page_cache\PageCache\RequestPolicy\DefaultRequestPolicy'],
			'dynamic_page_cache_response_policy' => ['class' => 'Drupal\Core\PageCache\ChainResponsePolicy', 'lazy' => true],
			'dynamic_page_cache_deny_admin_routes' => [
				'class' => 'Drupal\dynamic_page_cache\PageCache\ResponsePolicy\DenyAdminRoutes',
				'arguments' => ['current_route_match'],
				'public' => false,
			],
			'plugin.manager.editor' => ['class' => 'Drupal\editor\Plugin\EditorManager', 'parent' => 'default_plugin_manager'],
			'element.editor' => ['class' => 'Drupal\editor\Element', 'arguments' => ['plugin.manager.editor']],
			'field.uninstall_validator' => [
				'class' => 'Drupal\field\FieldUninstallValidator',
				'arguments' => ['entity_type.manager', 'string_translation', 'plugin.manager.field.field_type'],
				'lazy' => true,
			],
			'field_ui.subscriber' => ['class' => 'Drupal\field_ui\Routing\RouteSubscriber', 'arguments' => ['entity_type.manager']],
			'field_ui.route_enhancer' => [
				'class' => 'Drupal\field_ui\Routing\FieldUiRouteEnhancer',
				'arguments' => ['entity_type.manager'],
			],
			'access_check.field_ui.view_mode' => ['class' => 'Drupal\field_ui\Access\ViewModeAccessCheck', 'arguments' => ['entity_type.manager']],
			'access_check.field_ui.form_mode' => ['class' => 'Drupal\field_ui\Access\FormModeAccessCheck', 'arguments' => ['entity_type.manager']],
			'file.usage' => [
				'class' => 'Drupal\file\FileUsage\DatabaseFileUsageBackend',
				'arguments' => ['database', 'file_usage', 'config.factory'],
			],
			'stream_wrapper.dummy_readonly' => ['class' => 'Drupal\file_test\StreamWrapper\DummyReadOnlyStreamWrapper'],
			'stream_wrapper.dummy_remote' => ['class' => 'Drupal\file_test\StreamWrapper\DummyRemoteStreamWrapper'],
			'stream_wrapper.dummy' => ['class' => 'Drupal\file_test\StreamWrapper\DummyStreamWrapper'],
			'plugin.manager.filter' => ['class' => 'Drupal\filter\FilterPluginManager', 'parent' => 'default_plugin_manager'],
			'filter.uninstall_validator' => [
				'class' => 'Drupal\filter\FilterUninstallValidator',
				'arguments' => ['plugin.manager.filter', 'entity_type.manager', 'string_translation'],
				'lazy' => true,
			],
			'forum_manager' => [
				'class' => 'Drupal\forum\ForumManager',
				'arguments' => [
					'config.factory',
					'entity_type.manager',
					'database',
					'string_translation',
					'comment.manager',
					'entity_field.manager',
				],
			],
			'forum.breadcrumb.node' => [
				'class' => 'Drupal\forum\Breadcrumb\ForumNodeBreadcrumbBuilder',
				'arguments' => ['entity_type.manager', 'config.factory', 'forum_manager', 'string_translation'],
			],
			'forum.breadcrumb.listing' => [
				'class' => 'Drupal\forum\Breadcrumb\ForumListingBreadcrumbBuilder',
				'arguments' => ['entity_type.manager', 'config.factory', 'forum_manager', 'string_translation'],
			],
			'forum.index_storage' => ['class' => 'Drupal\forum\ForumIndexStorage', 'arguments' => ['database']],
			'forum.uninstall_validator' => [
				'class' => 'Drupal\forum\ForumUninstallValidator',
				'arguments' => ['entity_type.manager', 'config.factory', 'string_translation'],
				'lazy' => true,
			],
			'serializer.normalizer.entity_reference_item.hal' => [
				'class' => 'Drupal\hal\Normalizer\EntityReferenceItemNormalizer',
				'arguments' => ['hal.link_manager', 'serializer.entity_resolver', 'entity_type.manager'],
			],
			'serializer.normalizer.field_item.hal' => ['class' => 'Drupal\hal\Normalizer\FieldItemNormalizer'],
			'serializer.normalizer.field.hal' => ['class' => 'Drupal\hal\Normalizer\FieldNormalizer'],
			'serializer.normalizer.file_entity.hal' => [
				'class' => 'Drupal\hal\Normalizer\FileEntityNormalizer',
				'deprecated' => 'The "%service_id%" normalizer service is deprecated: it is obsolete, it only remains available for backwards compatibility.',
				'arguments' => [
					'entity_type.manager',
					'hal.link_manager',
					'module_handler',
					'config.factory',
					'entity_type.repository',
					'entity_field.manager',
				],
			],
			'serializer.normalizer.timestamp_item.hal' => ['class' => 'Drupal\hal\Normalizer\TimestampItemNormalizer'],
			'serializer.normalizer.entity.hal' => [
				'class' => 'Drupal\hal\Normalizer\ContentEntityNormalizer',
				'arguments' => [
					'hal.link_manager',
					'entity_type.manager',
					'module_handler',
					'entity_type.repository',
					'entity_field.manager',
				],
			],
			'serializer.encoder.hal' => ['class' => 'Drupal\hal\Encoder\JsonEncoder'],
			'hal.link_manager' => [
				'class' => 'Drupal\hal\LinkManager\LinkManager',
				'arguments' => ['hal.link_manager.type', 'hal.link_manager.relation'],
			],
			'hal.link_manager.type' => [
				'class' => 'Drupal\hal\LinkManager\TypeLinkManager',
				'arguments' => [
					'cache.default',
					'module_handler',
					'config.factory',
					'request_stack',
					'entity_type.bundle.info',
					'entity_type.manager',
				],
			],
			'hal.link_manager.relation' => [
				'class' => 'Drupal\hal\LinkManager\RelationLinkManager',
				'arguments' => [
					'cache.default',
					'entity_type.manager',
					'module_handler',
					'config.factory',
					'request_stack',
					'entity_type.bundle.info',
					'entity_field.manager',
				],
			],
			'plugin.manager.help_section' => ['class' => 'Drupal\help\HelpSectionManager', 'parent' => 'default_plugin_manager'],
			'path_processor.image_styles' => [
				'class' => 'Drupal\image\PathProcessor\PathProcessorImageStyles',
				'arguments' => ['stream_wrapper_manager'],
			],
			'plugin.manager.image.effect' => ['class' => 'Drupal\image\ImageEffectManager', 'parent' => 'default_plugin_manager'],
			'image.page_cache_response_policy.deny_private_image_style_download' => [
				'class' => 'Drupal\image\PageCache\DenyPrivateImageStyleDownload',
				'arguments' => ['current_route_match'],
				'public' => false,
			],
			'jsonapi.serializer' => ['class' => 'Drupal\jsonapi\Serializer\Serializer', 'arguments' => ['', '']],
			'serializer.normalizer.http_exception.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\HttpExceptionNormalizer', 'arguments' => ['current_user']],
			'serializer.normalizer.unprocessable_entity_exception.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\UnprocessableHttpEntityExceptionNormalizer',
				'arguments' => ['current_user'],
			],
			'serializer.normalizer.entity_access_exception.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\EntityAccessDeniedHttpExceptionNormalizer',
				'arguments' => ['current_user'],
			],
			'serializer.normalizer.field_item.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\FieldItemNormalizer',
				'arguments' => ['entity_type.manager'],
			],
			'serializer.normalizer.field.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\FieldNormalizer'],
			'serializer.normalizer.resource_identifier.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\ResourceIdentifierNormalizer',
				'arguments' => ['entity_field.manager'],
			],
			'serializer.normalizer.data.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\DataNormalizer'],
			'serializer.normalizer.resource_object.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\ResourceObjectNormalizer'],
			'serializer.normalizer.content_entity.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\ContentEntityDenormalizer',
				'arguments' => ['entity_type.manager', 'entity_field.manager', 'plugin.manager.field.field_type'],
			],
			'serializer.normalizer.config_entity.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\ConfigEntityDenormalizer',
				'arguments' => ['entity_type.manager', 'entity_field.manager', 'plugin.manager.field.field_type'],
			],
			'serializer.normalizer.jsonapi_document_toplevel.jsonapi' => [
				'class' => 'Drupal\jsonapi\Normalizer\JsonApiDocumentTopLevelNormalizer',
				'arguments' => ['entity_type.manager', 'jsonapi.resource_type.repository'],
			],
			'serializer.normalizer.link_collection.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\LinkCollectionNormalizer'],
			'serializer.normalizer.entity_reference_field.jsonapi' => ['class' => 'Drupal\jsonapi\Normalizer\EntityReferenceFieldNormalizer'],
			'serializer.encoder.jsonapi' => ['class' => 'Drupal\jsonapi\Encoder\JsonEncoder'],
			'jsonapi.resource_type.repository' => [
				'class' => 'Drupal\jsonapi\ResourceType\ResourceTypeRepository',
				'arguments' => [
					'entity_type.manager',
					'entity_type.bundle.info',
					'entity_field.manager',
					'cache.jsonapi_resource_types',
				],
			],
			'jsonapi.route_enhancer' => ['class' => 'Drupal\jsonapi\Routing\RouteEnhancer'],
			'jsonapi.field_resolver' => [
				'class' => 'Drupal\jsonapi\Context\FieldResolver',
				'arguments' => [
					'entity_type.manager',
					'entity_field.manager',
					'entity_type.bundle.info',
					'jsonapi.resource_type.repository',
					'module_handler',
				],
			],
			'jsonapi.include_resolver' => [
				'class' => 'Drupal\jsonapi\IncludeResolver',
				'arguments' => ['entity_type.manager', 'jsonapi.entity_access_checker'],
			],
			'paramconverter.jsonapi.entity_uuid' => [
				'parent' => 'paramconverter.entity',
				'class' => 'Drupal\jsonapi\ParamConverter\EntityUuidConverter',
			],
			'paramconverter.jsonapi.resource_type' => [
				'class' => 'Drupal\jsonapi\ParamConverter\ResourceTypeConverter',
				'arguments' => ['jsonapi.resource_type.repository'],
			],
			'jsonapi.exception_subscriber' => [
				'class' => 'Drupal\jsonapi\EventSubscriber\DefaultExceptionSubscriber',
				'arguments' => ['jsonapi.serializer', '%serializer.formats%'],
			],
			'logger.channel.jsonapi' => ['parent' => 'logger.channel_base', 'arguments' => ['jsonapi']],
			'cache.jsonapi_resource_types' => ['class' => 'Drupal\Core\Cache\MemoryCache\MemoryCache'],
			'jsonapi.route_filter.format_setter' => ['class' => 'Drupal\jsonapi\Routing\EarlyFormatSetter'],
			'jsonapi.entity_access_checker' => [
				'class' => 'Drupal\jsonapi\Access\EntityAccessChecker',
				'public' => false,
				'arguments' => [
					'jsonapi.resource_type.repository',
					'router.no_access_checks',
					'current_user',
					'entity.repository',
				],
			],
			'access_check.jsonapi.relationship_field_access' => [
				'class' => 'Drupal\jsonapi\Access\RelationshipFieldAccess',
				'arguments' => ['jsonapi.entity_access_checker'],
			],
			'method_filter.jsonapi' => [
				'public' => false,
				'class' => 'Drupal\jsonapi\Routing\ReadOnlyModeMethodFilter',
				'decorates' => 'method_filter',
				'arguments' => ['method_filter.jsonapi.inner', 'config.factory'],
			],
			'jsonapi.entity_resource' => [
				'class' => 'Drupal\jsonapi\Controller\EntityResource',
				'arguments' => [
					'entity_type.manager',
					'entity_field.manager',
					'jsonapi.resource_type.repository',
					'renderer',
					'entity.repository',
					'jsonapi.include_resolver',
					'jsonapi.entity_access_checker',
					'jsonapi.field_resolver',
					'jsonapi.serializer',
					'datetime.time',
					'current_user',
				],
			],
			'jsonapi.file_upload' => [
				'class' => 'Drupal\jsonapi\Controller\FileUpload',
				'arguments' => ['current_user', 'entity_field.manager', 'jsonapi.file.uploader.field', 'http_kernel'],
			],
			'jsonapi.custom_query_parameter_names_validator.subscriber' => ['class' => 'Drupal\jsonapi\EventSubscriber\JsonApiRequestValidator'],
			'jsonapi.resource_response.subscriber' => [
				'class' => 'Drupal\jsonapi\EventSubscriber\ResourceResponseSubscriber',
				'arguments' => ['jsonapi.serializer'],
			],
			'jsonapi.resource_response_validator.subscriber' => [
				'class' => 'Drupal\jsonapi\EventSubscriber\ResourceResponseValidator',
				'arguments' => ['jsonapi.serializer', 'logger.channel.jsonapi', 'module_handler', 'app.root'],
			],
			'jsonapi.version_negotiator' => ['class' => 'Drupal\jsonapi\Revisions\VersionNegotiator', 'public' => false],
			'jsonapi.version_negotiator.default' => ['arguments' => ['entity_type.manager'], 'public' => false, 'abstract' => true],
			'jsonapi.version_negotiator.id' => [
				'class' => 'Drupal\jsonapi\Revisions\VersionById',
				'parent' => 'jsonapi.version_negotiator.default',
			],
			'jsonapi.version_negotiator.rel' => [
				'class' => 'Drupal\jsonapi\Revisions\VersionByRel',
				'parent' => 'jsonapi.version_negotiator.default',
			],
			'jsonapi.resource_version.route_enhancer' => [
				'class' => 'Drupal\jsonapi\Revisions\ResourceVersionRouteEnhancer',
				'public' => false,
				'arguments' => ['jsonapi.version_negotiator'],
			],
			'serializer.normalizer.htt_exception.jsonapi' => [
				'alias' => 'serializer.normalizer.http_exception.jsonapi',
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'serializer.normalizer.http_exception.jsonapi\' service instead.',
			],
			'jsonapi.file.uploader.field' => [
				'class' => 'Drupal\jsonapi\Controller\TemporaryJsonapiFileFieldUploader',
				'public' => false,
				'arguments' => [
					'logger.channel.file',
					'file_system',
					'file.mime_type.guesser',
					'token',
					'lock',
					'config.factory',
				],
			],
			'count.jsonapi.resource_type.repository' => [
				'class' => 'Drupal\jsonapi_test_collection_count\ResourceType\CountableResourceTypeRepository',
				'public' => false,
				'decorates' => 'jsonapi.resource_type.repository',
				'parent' => 'jsonapi.resource_type.repository',
			],
			'serializer.normalizer.string.jsonapi_test_data_type' => ['class' => 'Drupal\jsonapi_test_data_type\Normalizer\StringNormalizer'],
			'serializer.normalizer.traversable_object.jsonapi_test_data_type' => ['class' => 'Drupal\jsonapi_test_data_type\Normalizer\TraversableObjectNormalizer'],
			'jsonapi.resource_type.repository.jsonapi_test_field_aliasing' => [
				'class' => 'Drupal\jsonapi_test_field_aliasing\ResourceType\AliasingResourceTypeRepository',
				'public' => false,
				'decorates' => 'jsonapi.resource_type.repository',
				'parent' => 'jsonapi.resource_type.repository',
			],
			'serializer.normalizer.string.jsonapi_test_field_type' => ['class' => 'Drupal\jsonapi_test_field_type\Normalizer\StringNormalizer'],
			'jsonapi_test_normalizers_kernel.jsonapi_document_toplevel' => ['alias' => 'serializer.normalizer.jsonapi_document_toplevel.jsonapi', 'public' => true],
			'plugin.manager.language_negotiation_method' => [
				'class' => 'Drupal\language\LanguageNegotiationMethodManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'language_negotiator' => [
				'class' => 'Drupal\language\LanguageNegotiator',
				'arguments' => [
					'language_manager',
					'plugin.manager.language_negotiation_method',
					'config.factory',
					'settings',
					'request_stack',
				],
			],
			'language.config_subscriber' => [
				'class' => 'Drupal\language\EventSubscriber\ConfigSubscriber',
				'arguments' => ['language_manager', 'language.default', 'config.factory', 'language_negotiator'],
			],
			'language.config_factory_override' => [
				'class' => 'Drupal\language\Config\LanguageConfigFactoryOverride',
				'arguments' => ['config.storage', 'event_dispatcher', 'config.typed', 'language.default'],
			],
			'language_converter' => [
				'class' => 'Drupal\language\LanguageConverter',
				'arguments' => ['language_manager'],
				'lazy' => true,
			],
			'layout_builder.tempstore_repository' => [
				'class' => 'Drupal\layout_builder\LayoutTempstoreRepository',
				'arguments' => ['tempstore.shared'],
			],
			'access_check.entity.layout_builder_access' => ['class' => 'Drupal\layout_builder\Access\LayoutBuilderAccessCheck'],
			'access_check.entity.layout' => ['class' => 'Drupal\layout_builder\Access\LayoutSectionAccessCheck'],
			'plugin.manager.layout_builder.section_storage' => [
				'class' => 'Drupal\layout_builder\SectionStorage\SectionStorageManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['context.handler'],
			],
			'layout_builder.routes' => [
				'class' => 'Drupal\layout_builder\Routing\LayoutBuilderRoutes',
				'arguments' => ['plugin.manager.layout_builder.section_storage'],
			],
			'layout_builder.param_converter' => [
				'class' => 'Drupal\layout_builder\Routing\LayoutTempstoreParamConverter',
				'arguments' => ['layout_builder.tempstore_repository', 'plugin.manager.layout_builder.section_storage'],
			],
			'cache_context.layout_builder_is_active' => [
				'class' => 'Drupal\layout_builder\Cache\LayoutBuilderIsActiveCacheContext',
				'arguments' => ['current_route_match'],
			],
			'cache_context.route.name.is_layout_builder_ui' => [
				'class' => 'Drupal\layout_builder\Cache\LayoutBuilderUiCacheContext',
				'arguments' => ['current_route_match'],
			],
			'layout_builder.sample_entity_generator' => [
				'class' => 'Drupal\layout_builder\Entity\LayoutBuilderSampleEntityGenerator',
				'arguments' => ['tempstore.shared', 'entity_type.manager'],
			],
			'layout_builder.render_block_component_subscriber' => [
				'class' => 'Drupal\layout_builder\EventSubscriber\BlockComponentRenderArray',
				'arguments' => ['current_user'],
			],
			'logger.channel.layout_builder' => ['parent' => 'logger.channel_base', 'arguments' => ['layout_builder']],
			'inline_block.usage' => ['class' => 'Drupal\layout_builder\InlineBlockUsage', 'arguments' => ['database']],
			'plugin.manager.core.layout' => [
				'class' => 'Drupal\Core\Layout\LayoutPluginManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'theme_handler'],
			],
			'layout.icon_builder' => ['class' => 'Drupal\Core\Layout\Icon\SvgIconBuilder', 'shared' => false],
			'locale.default.config.storage' => [
				'class' => 'Drupal\locale\LocaleDefaultConfigStorage',
				'arguments' => ['config.storage', 'language_manager', '%install_profile%'],
				'public' => false,
			],
			'locale.config_manager' => [
				'class' => 'Drupal\locale\LocaleConfigManager',
				'arguments' => [
					'config.storage',
					'locale.storage',
					'config.factory',
					'config.typed',
					'language_manager',
					'locale.default.config.storage',
					'config.manager',
				],
			],
			'locale.storage' => ['class' => 'Drupal\locale\StringDatabaseStorage', 'arguments' => ['database']],
			'locale.project' => ['class' => 'Drupal\locale\LocaleProjectStorage', 'arguments' => ['keyvalue']],
			'locale.plural.formula' => ['class' => 'Drupal\locale\PluralFormula', 'arguments' => ['language_manager', 'state']],
			'string_translator.locale.lookup' => [
				'class' => 'Drupal\locale\LocaleTranslation',
				'arguments' => [
					'locale.storage',
					'cache.default',
					'lock',
					'config.factory',
					'language_manager',
					'request_stack',
				],
			],
			'stream_wrapper.translations' => ['class' => 'Drupal\locale\StreamWrapper\TranslationsStream'],
			'locale.config_subscriber' => [
				'class' => 'Drupal\locale\LocaleConfigSubscriber',
				'arguments' => ['config.factory', 'locale.config_manager'],
			],
			'locale.locale_translation_cache_tag' => [
				'class' => 'Drupal\locale\EventSubscriber\LocaleTranslationCacheTag',
				'arguments' => ['cache_tags.invalidator'],
			],
			'early_translation_test.authentication.early_translation_test' => ['class' => 'Drupal\early_translation_test\Auth', 'arguments' => ['entity_type.manager']],
			'plugin.manager.media.source' => ['class' => 'Drupal\media\MediaSourceManager', 'parent' => 'default_plugin_manager'],
			'access_check.media.revision' => [
				'class' => 'Drupal\media\Access\MediaRevisionAccessCheck',
				'arguments' => ['entity_type.manager'],
			],
			'media.oembed.url_resolver' => [
				'class' => 'Drupal\media\OEmbed\UrlResolver',
				'arguments' => [
					'media.oembed.provider_repository',
					'media.oembed.resource_fetcher',
					'http_client',
					'module_handler',
					'cache.default',
				],
			],
			'media.oembed.provider_repository' => [
				'class' => 'Drupal\media\OEmbed\ProviderRepository',
				'arguments' => ['http_client', 'config.factory', 'datetime.time', 'cache.default'],
			],
			'media.oembed.resource_fetcher' => [
				'class' => 'Drupal\media\OEmbed\ResourceFetcher',
				'arguments' => ['http_client', 'media.oembed.provider_repository', 'cache.default'],
			],
			'media.oembed.iframe_url_helper' => [
				'class' => 'Drupal\media\IFrameUrlHelper',
				'arguments' => ['router.request_context', 'private_key'],
			],
			'media.config_subscriber' => [
				'class' => 'Drupal\media\EventSubscriber\MediaConfigSubscriber',
				'arguments' => ['router.builder', 'cache_tags.invalidator', 'entity_type.manager'],
			],
			'media_library.ui_builder' => [
				'class' => 'Drupal\media_library\MediaLibraryUiBuilder',
				'arguments' => ['entity_type.manager', 'request_stack', 'views.executable', 'form_builder'],
			],
			'migrate.plugin_event_subscriber' => ['class' => 'Drupal\migrate\Plugin\PluginEventSubscriber'],
			'cache.migrate' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['migrate']],
			'plugin.manager.migrate.source' => [
				'class' => 'Drupal\migrate\Plugin\MigrateSourcePluginManager',
				'arguments' => ['source', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.migrate.process' => [
				'class' => 'Drupal\migrate\Plugin\MigratePluginManager',
				'arguments' => [
					'process',
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'Drupal\migrate\Annotation\MigrateProcessPlugin',
				],
			],
			'plugin.manager.migrate.destination' => [
				'class' => 'Drupal\migrate\Plugin\MigrateDestinationPluginManager',
				'arguments' => [
					'destination',
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'entity_type.manager',
				],
			],
			'plugin.manager.migrate.id_map' => [
				'class' => 'Drupal\migrate\Plugin\MigratePluginManager',
				'arguments' => ['id_map', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'cache.discovery_migration' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['discovery_migration']],
			'plugin.manager.migration' => [
				'class' => 'Drupal\migrate\Plugin\MigrationPluginManager',
				'arguments' => ['module_handler', 'cache.discovery_migration', 'language_manager'],
			],
			'plugin.manager.migrate.field' => [
				'class' => 'Drupal\migrate_drupal\Plugin\MigrateFieldPluginManager',
				'arguments' => [
					'field',
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'\Drupal\migrate_drupal\Annotation\MigrateField',
				],
			],
			'plugin.manager.migrate.cckfield' => [
				'class' => 'Drupal\migrate_drupal\Plugin\MigrateCckFieldPluginManager',
				'arguments' => [
					'cckfield',
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'\Drupal\migrate_drupal\Annotation\MigrateCckField',
				],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'plugin.manager.migrate.field\' service instead. See https://www.drupal.org/node/2751897',
			],
			'logger.channel.migrate_drupal' => ['parent' => 'logger.channel_base', 'arguments' => ['migrate_drupal']],
			'migrate_drupal.field_discovery' => [
				'class' => 'Drupal\migrate_drupal\FieldDiscovery',
				'arguments' => ['plugin.manager.migrate.field', 'plugin.manager.migration', 'logger.channel.migrate_drupal'],
			],
			'node.route_subscriber' => ['class' => 'Drupal\node\Routing\RouteSubscriber'],
			'node.grant_storage' => [
				'class' => 'Drupal\node\NodeGrantDatabaseStorage',
				'arguments' => ['database', 'module_handler', 'language_manager'],
			],
			'access_check.node.revision' => ['class' => 'Drupal\node\Access\NodeRevisionAccessCheck', 'arguments' => ['entity_type.manager']],
			'access_check.node.add' => ['class' => 'Drupal\node\Access\NodeAddAccessCheck', 'arguments' => ['entity_type.manager']],
			'access_check.node.preview' => ['class' => 'Drupal\node\Access\NodePreviewAccessCheck', 'arguments' => ['entity_type.manager']],
			'node.admin_path.route_subscriber' => [
				'class' => 'Drupal\node\EventSubscriber\NodeAdminRouteSubscriber',
				'arguments' => ['config.factory', 'router.builder'],
			],
			'node_preview' => [
				'class' => 'Drupal\node\ParamConverter\NodePreviewConverter',
				'arguments' => ['tempstore.private'],
				'lazy' => true,
			],
			'node.page_cache_response_policy.deny_node_preview' => [
				'class' => 'Drupal\node\PageCache\DenyNodePreview',
				'arguments' => ['current_route_match'],
				'public' => false,
			],
			'cache_context.user.node_grants' => ['class' => 'Drupal\node\Cache\NodeAccessGrantsCacheContext', 'arguments' => ['current_user']],
			'node.node_route_context' => [
				'class' => 'Drupal\node\ContextProvider\NodeRouteContext',
				'arguments' => ['current_route_match'],
			],
			'http_middleware.page_cache' => [
				'class' => 'Drupal\page_cache\StackMiddleware\PageCache',
				'arguments' => ['cache.page', 'page_cache_request_policy', 'page_cache_response_policy'],
			],
			'cache.page' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['page']],
			'plugin.manager.quickedit.editor' => ['class' => 'Drupal\quickedit\Plugin\InPlaceEditorManager', 'parent' => 'default_plugin_manager'],
			'access_check.quickedit.entity_field' => ['class' => 'Drupal\quickedit\Access\QuickEditEntityFieldAccessCheck'],
			'quickedit.editor.selector' => [
				'class' => 'Drupal\quickedit\EditorSelector',
				'arguments' => ['plugin.manager.quickedit.editor', 'plugin.manager.field.formatter'],
			],
			'quickedit.metadata.generator' => [
				'class' => 'Drupal\quickedit\MetadataGenerator',
				'arguments' => [
					'access_check.quickedit.entity_field',
					'quickedit.editor.selector',
					'plugin.manager.quickedit.editor',
				],
			],
			'plugin.manager.rest' => [
				'class' => 'Drupal\rest\Plugin\Type\ResourcePluginManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'cache.rest' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['rest']],
			'access_check.rest.csrf' => ['alias' => 'access_check.header.csrf'],
			'rest.resource_routes' => [
				'class' => 'Drupal\rest\Routing\ResourceRoutes',
				'arguments' => ['plugin.manager.rest', 'entity_type.manager', 'logger.channel.rest'],
			],
			'logger.channel.rest' => ['parent' => 'logger.channel_base', 'arguments' => ['rest']],
			'rest.resource_response.subscriber' => [
				'class' => 'Drupal\rest\EventSubscriber\ResourceResponseSubscriber',
				'arguments' => ['serializer', 'renderer', 'current_route_match'],
			],
			'rest.config_subscriber' => ['class' => 'Drupal\rest\EventSubscriber\RestConfigSubscriber', 'arguments' => ['router.builder']],
			'rest.resource.entity.post_route.subscriber' => [
				'class' => '\Drupal\rest\EventSubscriber\EntityResourcePostRouteSubscriber',
				'arguments' => ['entity_type.manager'],
			],
			'rest.path_processor_entity_resource_bc' => [
				'class' => '\Drupal\rest\PathProcessor\PathProcessorEntityResourceBC',
				'arguments' => ['entity_type.manager'],
			],
			'rest.route_processor_get_bc' => [
				'class' => '\Drupal\rest\RouteProcessor\RestResourceGetRouteProcessorBC',
				'arguments' => ['%serializer.formats%', 'router.route_provider'],
			],
			'rest_test.authentication.test_auth' => ['class' => 'Drupal\rest_test\Authentication\Provider\TestAuth'],
			'rest_test.authentication.test_auth_global' => ['class' => 'Drupal\rest_test\Authentication\Provider\TestAuthGlobal'],
			'rest_test.page_cache_request_policy.deny_test_auth_requests' => ['class' => 'Drupal\rest_test\PageCache\RequestPolicy\DenyTestAuthRequests', 'public' => false],
			'rest_test.encoder.foobar' => ['class' => 'Drupal\serialization\Encoder\JsonEncoder'],
			'plugin.manager.search' => ['class' => 'Drupal\search\SearchPluginManager', 'parent' => 'default_plugin_manager'],
			'search.search_page_repository' => [
				'class' => 'Drupal\search\SearchPageRepository',
				'arguments' => ['config.factory', 'entity_type.manager'],
			],
			'serializer' => ['class' => 'Symfony\Component\Serializer\Serializer', 'arguments' => ['', '']],
			'serializer.normalizer.config_entity' => [
				'class' => 'Drupal\serialization\Normalizer\ConfigEntityNormalizer',
				'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
			],
			'serializer.normalizer.content_entity' => [
				'class' => 'Drupal\serialization\Normalizer\ContentEntityNormalizer',
				'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
			],
			'serializer.normalizer.entity' => [
				'class' => 'Drupal\serialization\Normalizer\EntityNormalizer',
				'arguments' => ['entity_type.manager', 'entity_type.repository', 'entity_field.manager'],
			],
			'serializer.normalizer.primitive_data' => ['class' => 'Drupal\serialization\Normalizer\PrimitiveDataNormalizer'],
			'serializer.normalizer.complex_data' => ['class' => 'Drupal\serialization\Normalizer\ComplexDataNormalizer'],
			'serializer.normalizer.entity_reference_field_item' => [
				'class' => 'Drupal\serialization\Normalizer\EntityReferenceFieldItemNormalizer',
				'arguments' => ['entity.repository'],
			],
			'serialization.normalizer.field_item' => ['class' => 'Drupal\serialization\Normalizer\FieldItemNormalizer'],
			'serialization.normalizer.field' => ['class' => 'Drupal\serialization\Normalizer\FieldNormalizer'],
			'serializer.normalizer.list' => ['class' => 'Drupal\serialization\Normalizer\ListNormalizer'],
			'serializer.normalizer.timestamp_item' => ['class' => 'Drupal\serialization\Normalizer\TimestampItemNormalizer'],
			'serializer.normalizer.timestamp' => [
				'class' => 'Drupal\serialization\Normalizer\TimestampNormalizer',
				'arguments' => ['config.factory'],
			],
			'serializer.normalizer.datetimeiso8601' => [
				'class' => '\Drupal\serialization\Normalizer\DateTimeIso8601Normalizer',
				'arguments' => ['config.factory'],
			],
			'serializer.normalizer.password_field_item' => [
				'class' => 'Drupal\serialization\Normalizer\NullNormalizer',
				'arguments' => ['Drupal\Core\Field\Plugin\Field\FieldType\PasswordItem'],
			],
			'serializer.normalizer.safe_string' => ['class' => 'Drupal\serialization\Normalizer\MarkupNormalizer'],
			'serializer.normalizer.typed_data' => ['class' => 'Drupal\serialization\Normalizer\TypedDataNormalizer'],
			'serializer.encoder.json' => ['class' => 'Drupal\serialization\Encoder\JsonEncoder'],
			'serializer.encoder.xml' => ['class' => 'Drupal\serialization\Encoder\XmlEncoder'],
			'serializer.entity_resolver' => ['class' => 'Drupal\serialization\EntityResolver\ChainEntityResolver'],
			'serializer.entity_resolver.uuid' => [
				'class' => 'Drupal\serialization\EntityResolver\UuidResolver',
				'arguments' => ['entity.repository'],
			],
			'serialization.entity_resolver.target_id' => ['class' => 'Drupal\serialization\EntityResolver\TargetIdResolver'],
			'serialization.exception.default' => [
				'class' => 'Drupal\serialization\EventSubscriber\DefaultExceptionSubscriber',
				'arguments' => ['serializer', '%serializer.formats%'],
			],
			'serialization.user_route_alter_subscriber' => [
				'class' => 'Drupal\serialization\EventSubscriber\UserRouteAlterSubscriber',
				'arguments' => ['%serializer.formats%'],
			],
			'serialization.bc_config_subscriber' => ['class' => 'Drupal\serialization\EventSubscriber\BcConfigSubscriber', 'arguments' => ['kernel']],
			'serializer.normalizer.silly_fielditem' => ['class' => 'Drupal\field_normalization_test\Normalization\TextItemSillyNormalizer'],
			'serializer.normalizer.boolean.datatype.emoji' => ['class' => 'Drupal\test_datatype_boolean_emoji_normalizer\Normalizer\BooleanNormalizer'],
			'serializer.normalizer.boolean.fieldtype.emoji' => ['class' => 'Drupal\test_fieldtype_boolean_emoji_normalizer\Normalizer\BooleanItemNormalizer'],
			'serializer.normalizer.serialization_test' => ['class' => 'Drupal\serialization_test\SerializationTestNormalizer'],
			'serializer.encoder.serialization_test' => ['class' => 'Drupal\serialization_test\SerializationTestEncoder'],
			'access_check.settings_tray.block.has_overrides' => ['class' => 'Drupal\settings_tray\Access\BlockHasOverridesAccessCheck'],
			'access_check.settings_tray.block.settings_tray_form' => ['class' => 'Drupal\settings_tray\Access\BlockPluginHasSettingsTrayFormAccessCheck'],
			'settings_tray.route_processor_off_canvas_form_bc' => [
				'class' => '\Drupal\settings_tray\RouteProcessor\BlockEntityOffCanvasFormRouteProcessorBC',
				'arguments' => ['router.route_provider'],
				'public' => false,
			],
			'settings_tray_override_test.overrider' => ['class' => 'Drupal\settings_tray_override_test\ConfigOverrider'],
			'test_discovery' => [
				'class' => 'Drupal\simpletest\TestDiscovery',
				'arguments' => ['app.root', 'class_loader', 'module_handler'],
			],
			'cache_context.test_discovery' => [
				'class' => 'Drupal\simpletest\Cache\Context\TestDiscoveryCacheContext',
				'arguments' => ['test_discovery', 'private_key'],
			],
			'statistics.storage.node' => [
				'class' => 'Drupal\statistics\NodeStatisticsDatabaseStorage',
				'arguments' => ['database', 'state', 'request_stack'],
			],
			'logger.syslog' => [
				'class' => 'Drupal\syslog\Logger\SysLog',
				'arguments' => ['config.factory', 'logger.log_message_parser'],
			],
			'logger.syslog_test' => [
				'parent' => 'logger.syslog',
				'class' => 'Drupal\syslog_test\Logger\SysLogTest',
				'arguments' => ['config.factory', 'logger.log_message_parser'],
			],
			'access_check.cron' => ['class' => 'Drupal\system\Access\CronAccessCheck'],
			'access_check.db_update' => ['class' => 'Drupal\system\Access\DbUpdateAccessCheck'],
			'system.manager' => [
				'class' => 'Drupal\system\SystemManager',
				'arguments' => ['module_handler', 'entity.manager', 'request_stack', 'menu.link_tree', 'menu.active_trail'],
			],
			'system.breadcrumb.default' => [
				'class' => 'Drupal\system\PathBasedBreadcrumbBuilder',
				'arguments' => [
					'router.request_context',
					'access_manager',
					'router',
					'path_processor_manager',
					'config.factory',
					'title_resolver',
					'current_user',
					'path.current',
					'path.matcher',
				],
			],
			'path_processor.files' => ['class' => 'Drupal\system\PathProcessor\PathProcessorFiles'],
			'system.admin_path.route_subscriber' => ['class' => 'Drupal\system\EventSubscriber\AdminRouteSubscriber'],
			'theme.negotiator.system.batch' => [
				'class' => 'Drupal\system\Theme\BatchNegotiator',
				'arguments' => ['batch.storage', 'request_stack'],
			],
			'theme.negotiator.system.db_update' => ['class' => 'Drupal\system\Theme\DbUpdateNegotiator', 'arguments' => ['config.factory']],
			'system.config_subscriber' => ['class' => 'Drupal\system\SystemConfigSubscriber', 'arguments' => ['router.builder']],
			'system.config_cache_tag' => [
				'class' => 'Drupal\system\EventSubscriber\ConfigCacheTag',
				'arguments' => ['theme_handler', 'cache_tags.invalidator'],
			],
			'accept_header_matcher' => ['class' => 'Drupal\accept_header_routing_test\Routing\AcceptHeaderMatcher'],
			'main_content_renderer.json' => [
				'class' => 'Drupal\common_test\Render\MainContent\JsonRenderer',
				'arguments' => ['title_resolver', 'renderer'],
			],
			'main_content_renderer.wide_modal' => [
				'class' => 'Drupal\dialog_renderer_test\Render\MainContent\WideModalRenderer',
				'arguments' => ['title_resolver', 'wide'],
			],
			'main_content_renderer.extra_wide_modal' => [
				'class' => 'Drupal\dialog_renderer_test\Render\MainContent\WideModalRenderer',
				'arguments' => ['title_resolver', 'extra_wide'],
			],
			'display_variant_test.page_display_variant_subscriber' => ['class' => 'Drupal\display_variant_test\EventSubscriber\TestPageDisplayVariantSubscriber'],
			'test_domain_object.view_subscriber' => ['class' => 'Drupal\early_rendering_controller_test\TestDomainObjectViewSubscriber'],
			'entity_test.definition.subscriber' => ['class' => 'Drupal\entity_test\EntityTestDefinitionSubscriber', 'arguments' => ['state']],
			'cache_context.entity_test_view_grants' => ['class' => 'Drupal\entity_test\Cache\EntityTestViewGrantsCacheContext'],
			'http_middleware.monkeys' => ['class' => 'Drupal\error_service_test\MonkeysInTheControlRoom', 'arguments' => ['settings']],
			'broken_class_with_missing_dependency' => ['class' => 'Drupal\error_service_test\LonelyMonkeyClass'],
			'logger.broken' => ['class' => 'Drupal\error_service_test\Logger\TestLog'],
			'form_test.form.serviceform' => ['class' => 'Drupal\form_test\FormTestServiceObject', 'arguments' => ['config.factory']],
			'form_test.event_subscriber' => ['class' => 'Drupal\form_test\EventSubscriber\FormTestEventSubscriber'],
			'form_test.http_middleware' => ['class' => 'Drupal\form_test\StackMiddleware\FormTestMiddleware'],
			'hold_test.response' => ['class' => 'Drupal\hold_test\EventSubscriber\HoldTestSubscriber'],
			'httpkernel_test.test_middleware' => ['class' => 'Drupal\httpkernel_test\HttpKernel\TestMiddleware'],
			'httpkernel_test.test_middleware2' => ['class' => 'Drupal\httpkernel_test\HttpKernel\TestMiddleware', 'arguments' => ['test_argument']],
			'plugin.manager.lazy_route_provider_install_test' => [
				'class' => '\Drupal\lazy_route_provider_install_test\PluginManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['url_generator'],
			],
			'theme.negotiator.test_theme' => ['class' => 'Drupal\menu_test\Theme\TestThemeNegotiator'],
			'access_check.menu_test_session' => ['class' => 'Drupal\menu_test\Access\AccessCheck'],
			'module_cachebin.cache_bin' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['module_cachebin']],
			'module_install_class_loader_test1.event_subscriber' => ['class' => 'Drupal\module_install_class_loader_test2\EventSubscriber'],
			'service_provider_test_class' => [
				'class' => 'Drupal\service_provider_test\TestClass',
				'parent' => 'container.trait',
				'arguments' => ['state'],
			],
			'session_test.subscriber' => ['class' => 'Drupal\session_test\EventSubscriber\SessionTestSubscriber'],
			'session_test.session_handler.test_proxy' => ['class' => 'Drupal\session_test\Session\TestSessionHandlerProxy'],
			'session_test.session_handler.test_proxy2' => [
				'class' => 'Drupal\session_test\Session\TestSessionHandlerProxy',
				'arguments' => ['test_argument'],
			],
			'session_test.session_handler_proxy_trace' => ['class' => 'ArrayObject'],
			'theme_test.subscriber' => [
				'class' => 'Drupal\theme_test\EventSubscriber\ThemeTestSubscriber',
				'arguments' => ['current_route_match', 'renderer'],
			],
			'theme.negotiator.test_custom_theme' => ['class' => 'Drupal\theme_test\Theme\CustomThemeNegotiator'],
			'theme.negotiator.high_priority' => ['class' => 'Drupal\theme_test\Theme\HighPriorityThemeNegotiator'],
			'twig_extension_test.twig.test_extension' => ['class' => 'Drupal\twig_extension_test\TwigExtension\TestExtension'],
			'twig_loader_test.twig.test_loader' => ['class' => 'Drupal\twig_loader_test\Loader\TestLoader'],
			'update_script_test.broken_path_processor' => [
				'class' => 'Drupal\update_script_test\PathProcessor\BrokenInboundPathProcessor',
				'arguments' => ['state'],
			],
			'url_alter_test.path_processor' => ['class' => 'Drupal\url_alter_test\PathProcessorTest'],
			'taxonomy_term.breadcrumb' => [
				'class' => 'Drupal\taxonomy\TermBreadcrumbBuilder',
				'arguments' => ['entity_type.manager', 'entity.repository'],
			],
			'cache.toolbar' => ['class' => 'Drupal\Core\Cache\CacheBackendInterface', 'arguments' => ['toolbar']],
			'toolbar.page_cache_request_policy.allow_toolbar_path' => ['class' => 'Drupal\toolbar\PageCache\AllowToolbarPath'],
			'toolbar.menu_tree' => [
				'class' => 'Drupal\toolbar\Menu\ToolbarMenuLinkTree',
				'arguments' => [
					'menu.tree_storage',
					'plugin.manager.menu.link',
					'router.route_provider',
					'menu.active_trail',
					'controller_resolver',
				],
			],
			'plugin.manager.tour.tip' => ['class' => 'Drupal\tour\TipPluginManager', 'parent' => 'default_plugin_manager'],
			'access_check.update.manager_access' => ['class' => 'Drupal\update\Access\UpdateManagerAccessCheck', 'arguments' => ['settings']],
			'update.manager' => [
				'class' => 'Drupal\update\UpdateManager',
				'arguments' => [
					'config.factory',
					'module_handler',
					'update.processor',
					'string_translation',
					'keyvalue.expirable',
					'theme_handler',
				],
			],
			'update.processor' => [
				'class' => 'Drupal\update\UpdateProcessor',
				'arguments' => [
					'config.factory',
					'queue',
					'update.fetcher',
					'state',
					'private_key',
					'keyvalue',
					'keyvalue.expirable',
				],
			],
			'update.fetcher' => ['class' => 'Drupal\update\UpdateFetcher', 'arguments' => ['config.factory', 'http_client']],
			'update.root' => ['class' => 'SplString'],
			'update.root.factory' => [
				'class' => 'Drupal\update\UpdateRootFactory',
				'arguments' => ['kernel', 'request_stack'],
				'public' => false,
			],
			'access_check.permission' => ['class' => 'Drupal\user\Access\PermissionAccessCheck'],
			'access_check.user.register' => ['class' => 'Drupal\user\Access\RegisterAccessCheck'],
			'access_check.user.role' => ['class' => 'Drupal\user\Access\RoleAccessCheck'],
			'access_check.user.login_status' => ['class' => 'Drupal\user\Access\LoginStatusCheck'],
			'user.authentication.cookie' => [
				'class' => 'Drupal\user\Authentication\Provider\Cookie',
				'arguments' => ['session_configuration', 'database'],
			],
			'user.data' => ['class' => 'Drupal\user\UserData', 'arguments' => ['database']],
			'user_maintenance_mode_subscriber' => [
				'class' => 'Drupal\user\EventSubscriber\MaintenanceModeSubscriber',
				'arguments' => ['maintenance_mode', 'current_user'],
			],
			'user_access_denied_subscriber' => ['class' => 'Drupal\user\EventSubscriber\AccessDeniedSubscriber', 'arguments' => ['current_user']],
			'user_last_access_subscriber' => [
				'class' => 'Drupal\user\EventSubscriber\UserRequestSubscriber',
				'arguments' => ['current_user', 'entity_type.manager'],
			],
			'theme.negotiator.admin_theme' => [
				'class' => 'Drupal\user\Theme\AdminNegotiator',
				'arguments' => ['current_user', 'config.factory', 'entity_type.manager', 'router.admin_context'],
			],
			'user.auth' => ['class' => 'Drupal\user\UserAuth', 'arguments' => ['entity_type.manager', 'password']],
			'user.private_tempstore' => [
				'class' => 'Drupal\user\PrivateTempStoreFactory',
				'arguments' => ['keyvalue.expirable', 'lock', 'current_user', 'request_stack', '%tempstore.expire%'],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'tempstore.private\' service instead. See https://www.drupal.org/node/2935639.',
			],
			'user.shared_tempstore' => [
				'class' => 'Drupal\user\SharedTempStoreFactory',
				'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%'],
				'deprecated' => 'The "%service_id%" service is deprecated. You should use the \'tempstore.shared\' service instead. See https://www.drupal.org/node/2935639.',
			],
			'user.permissions' => [
				'class' => 'Drupal\user\PermissionHandler',
				'arguments' => ['module_handler', 'string_translation', 'controller_resolver'],
			],
			'user.current_user_context' => [
				'class' => 'Drupal\user\ContextProvider\CurrentUserContext',
				'arguments' => ['current_user', 'entity_type.manager'],
			],
			'user.toolbar_link_builder' => ['class' => 'Drupal\user\ToolbarLinkBuilder', 'arguments' => ['current_user']],
			'cache_context.views_test_cache_context' => ['class' => 'Drupal\views_test_data\Cache\ViewsTestCacheContext'],
			'plugin.manager.views.access' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['access', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.area' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['area', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.argument' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['argument', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.argument_default' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['argument_default', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.argument_validator' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['argument_validator', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.cache' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['cache', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.display_extender' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['display_extender', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.display' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['display', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.exposed_form' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['exposed_form', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.field' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['field', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.filter' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['filter', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.join' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['join', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.pager' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['pager', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.query' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['query', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.relationship' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => [
					'relationship',
					'container.namespaces',
					'views.views_data',
					'cache.discovery',
					'module_handler',
				],
			],
			'plugin.manager.views.row' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['row', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.sort' => [
				'class' => 'Drupal\views\Plugin\ViewsHandlerManager',
				'arguments' => ['sort', 'container.namespaces', 'views.views_data', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.style' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['style', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'plugin.manager.views.wizard' => [
				'class' => 'Drupal\views\Plugin\ViewsPluginManager',
				'arguments' => ['wizard', 'container.namespaces', 'cache.discovery', 'module_handler'],
			],
			'views.views_data' => [
				'class' => 'Drupal\views\ViewsData',
				'arguments' => ['cache.default', 'config.factory', 'module_handler', 'language_manager'],
			],
			'views.views_data_helper' => ['class' => 'Drupal\views\ViewsDataHelper', 'arguments' => ['views.views_data']],
			'views.executable' => [
				'class' => 'Drupal\views\ViewExecutableFactory',
				'arguments' => ['current_user', 'request_stack', 'views.views_data', 'router.route_provider'],
			],
			'views.analyzer' => ['class' => 'Drupal\views\Analyzer', 'arguments' => ['module_handler']],
			'views.route_subscriber' => [
				'class' => 'Drupal\views\EventSubscriber\RouteSubscriber',
				'arguments' => ['entity_type.manager', 'state'],
			],
			'views.exposed_form_cache' => ['class' => 'Drupal\views\ExposedFormCache'],
			'views.entity_schema_subscriber' => [
				'class' => 'Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber',
				'arguments' => ['entity_type.manager', 'logger.channel.default'],
			],
			'views.date_sql' => ['class' => 'Drupal\views\Plugin\views\query\MysqlDateSql', 'arguments' => ['database']],
			'pgsql.views.date_sql' => [
				'class' => 'Drupal\views\Plugin\views\query\PostgresqlDateSql',
				'arguments' => ['database'],
				'public' => false,
			],
			'sqlite.views.date_sql' => [
				'class' => 'Drupal\views\Plugin\views\query\SqliteDateSql',
				'arguments' => ['database'],
				'public' => false,
			],
			'paramconverter.views_ui' => [
				'class' => 'Drupal\views_ui\ParamConverter\ViewUIConverter',
				'arguments' => [
					'entity_type.manager',
					'tempstore.shared',
					'config.factory',
					'router.admin_context',
					'entity.repository',
				],
				'lazy' => true,
			],
			'plugin.manager.workflows.type' => ['class' => 'Drupal\workflows\WorkflowTypeManager', 'parent' => 'default_plugin_manager'],
			'workflows.access_check.extended_permissions' => ['class' => '\Drupal\workflows\WorkflowStateTransitionOperationsAccessCheck'],
			'workflows.access_check.delete_state' => ['class' => '\Drupal\workflows\WorkflowDeleteAccessCheck'],
			'workspaces.manager' => [
				'class' => 'Drupal\workspaces\WorkspaceManager',
				'arguments' => [
					'request_stack',
					'entity_type.manager',
					'entity.memory_cache',
					'current_user',
					'state',
					'logger.channel.workspaces',
					'class_resolver',
				],
			],
			'workspaces.operation_factory' => [
				'class' => 'Drupal\workspaces\WorkspaceOperationFactory',
				'arguments' => ['entity_type.manager', 'database', 'workspaces.manager'],
			],
			'workspaces.negotiator.default' => [
				'class' => 'Drupal\workspaces\Negotiator\DefaultWorkspaceNegotiator',
				'arguments' => ['entity_type.manager'],
			],
			'workspaces.negotiator.session' => [
				'class' => 'Drupal\workspaces\Negotiator\SessionWorkspaceNegotiator',
				'arguments' => ['current_user', 'session', 'entity_type.manager'],
			],
			'workspaces.negotiator.query_parameter' => [
				'class' => 'Drupal\workspaces\Negotiator\QueryParameterWorkspaceNegotiator',
				'parent' => 'workspaces.negotiator.session',
			],
			'cache_context.workspace' => ['class' => 'Drupal\workspaces\WorkspaceCacheContext', 'arguments' => ['workspaces.manager']],
			'logger.channel.workspaces' => ['parent' => 'logger.channel_base', 'arguments' => ['workspaces']],
			'workspaces.entity.query.sql' => [
				'decorates' => 'entity.query.sql',
				'class' => 'Drupal\workspaces\EntityQuery\QueryFactory',
				'arguments' => ['database', 'workspaces.manager'],
				'public' => false,
				'decoration_priority' => 50,
			],
			'pgsql.workspaces.entity.query.sql' => [
				'decorates' => 'pgsql.entity.query.sql',
				'class' => 'Drupal\workspaces\EntityQuery\PgsqlQueryFactory',
				'arguments' => ['database', 'workspaces.manager'],
				'public' => false,
				'decoration_priority' => 50,
			],
			'address.address_format_repository' => [
				'class' => 'Drupal\address\Repository\AddressFormatRepository',
				'arguments' => ['event_dispatcher'],
			],
			'address.country_repository' => [
				'class' => 'Drupal\address\Repository\CountryRepository',
				'arguments' => ['cache.data', 'language_manager'],
			],
			'address.subdivision_repository' => [
				'class' => 'Drupal\address\Repository\SubdivisionRepository',
				'arguments' => ['address.address_format_repository', 'event_dispatcher', 'cache.data'],
			],
			'address.postal_label_formatter' => [
				'class' => 'CommerceGuys\Addressing\Formatter\PostalLabelFormatter',
				'arguments' => [
					'address.address_format_repository',
					'address.country_repository',
					'address.subdivision_repository',
				],
			],
			'address_test.event_subscriber' => ['class' => 'Drupal\address_test\EventSubscriber\AddressTestEventSubscriber'],
			'address_test.great_britain_subscriber' => ['class' => 'Drupal\address_test\EventSubscriber\GreatBritainEventSubscriber'],
			'auto_entitylabel.route_subscriber' => ['class' => 'Drupal\auto_entitylabel\Routing\RouteSubscriber', 'arguments' => ['entity.manager']],
			'auto_entitylabel.route_enhancer' => ['class' => 'Drupal\auto_entitylabel\Routing\RouteEnhancer', 'arguments' => ['entity.manager']],
			'auto_entitylabel.manager' => [
				'class' => 'Drupal\auto_entitylabel\AutoEntityLabelManager',
				'arguments' => ['entity.manager', 'config.factory', 'entity_type.manager', 'token'],
			],
			'auto_entitylabel.entity_decorator' => [
				'class' => 'Drupal\auto_entitylabel\EntityDecorator',
				'arguments' => ['config.factory', 'entity_type.manager', 'token'],
			],
			'cer.cer_subscriber' => ['class' => 'Drupal\cer\EventSubscriber\CerSubscriber'],
			'ctools.wizard.form' => [
				'class' => 'Drupal\ctools\Controller\WizardFormController',
				'arguments' => ['controller_resolver', 'form_builder', 'ctools.wizard.factory'],
			],
			'ctools.wizard.entity.form' => [
				'class' => 'Drupal\ctools\Controller\WizardEntityFormController',
				'arguments' => ['controller_resolver', 'form_builder', 'ctools.wizard.factory', 'entity_type.manager'],
			],
			'ctools.wizard_enhancer' => ['class' => 'Drupal\ctools\Routing\Enhancer\WizardEnhancer'],
			'ctools.wizard.factory' => [
				'class' => 'Drupal\ctools\Wizard\WizardFactory',
				'arguments' => ['form_builder', 'event_dispatcher', 'renderer'],
			],
			'ctools.paramconverter.tempstore' => [
				'class' => 'Drupal\ctools\ParamConverter\TempstoreConverter',
				'arguments' => ['tempstore.shared', 'entity_type.manager'],
			],
			'ctools.typed_data.resolver' => [
				'class' => 'Drupal\ctools\TypedDataResolver',
				'arguments' => ['typed_data_manager', 'string_translation'],
			],
			'ctools.access' => ['class' => 'Drupal\ctools\Access\TempstoreAccess', 'arguments' => ['tempstore.shared']],
			'plugin.manager.ctools.relationship' => ['class' => 'Drupal\ctools\Plugin\RelationshipManager', 'parent' => 'default_plugin_manager'],
			'ctools.context_mapper' => ['class' => 'Drupal\ctools\ContextMapper', 'arguments' => ['entity.repository']],
			'ctools.serializable.tempstore.factory' => [
				'class' => 'Drupal\ctools\SerializableTempstoreFactory',
				'arguments' => ['keyvalue.expirable', 'lock', 'request_stack', '%tempstore.expire%', 'current_user'],
			],
			'diff.route_subscriber' => ['class' => 'Drupal\diff\Routing\RouteSubscriber'],
			'diff.diff.formatter' => ['class' => 'Drupal\diff\DiffFormatter', 'arguments' => ['config.factory']],
			'plugin.manager.diff.builder' => [
				'class' => 'Drupal\diff\DiffBuilderManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['entity_type.manager', 'config.factory'],
			],
			'plugin.manager.diff.layout' => [
				'class' => 'Drupal\diff\DiffLayoutManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['entity_type.manager', 'config.factory'],
			],
			'diff.entity_parser' => [
				'class' => 'Drupal\diff\DiffEntityParser',
				'arguments' => ['plugin.manager.diff.builder', 'config.factory'],
			],
			'diff.entity_comparison' => [
				'class' => 'Drupal\diff\DiffEntityComparison',
				'arguments' => [
					'config.factory',
					'diff.diff.formatter',
					'plugin.manager.field.field_type',
					'diff.entity_parser',
					'plugin.manager.diff.builder',
				],
			],
			'diff.html_diff' => ['class' => 'HtmlDiffAdvanced'],
			'theme.negotiator.visual_diff' => ['class' => 'Drupal\diff\VisualDiffThemeNegotiator', 'arguments' => ['config.factory']],
			'plugin.manager.ds' => ['class' => 'Drupal\ds\Plugin\DsPluginManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.ds.field.layout' => ['class' => 'Drupal\ds\Plugin\DsFieldTemplatePluginManager', 'parent' => 'default_plugin_manager'],
			'ds.route_subscriber' => ['class' => 'Drupal\ds\Routing\RouteSubscriber', 'arguments' => ['entity_type.manager']],
			'ds_devel.route_subscriber' => ['class' => 'Drupal\ds_devel\Routing\RouteSubscriber', 'arguments' => ['entity.manager']],
			'ds_extras.route_subscriber' => ['class' => 'Drupal\ds_extras\EventSubscriber\RouteSubscriber'],
			'plugin.manager.entity_browser.display' => ['class' => 'Drupal\entity_browser\DisplayManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.entity_browser.selection_display' => ['class' => 'Drupal\entity_browser\SelectionDisplayManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.entity_browser.widget' => ['class' => 'Drupal\entity_browser\WidgetManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.entity_browser.widget_selector' => ['class' => 'Drupal\entity_browser\WidgetSelectorManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.entity_browser.field_widget_display' => [
				'class' => 'Drupal\entity_browser\FieldWidgetDisplayManager',
				'parent' => 'default_plugin_manager',
			],
			'plugin.manager.entity_browser.widget_validation' => ['class' => 'Drupal\entity_browser\WidgetValidationManager', 'parent' => 'default_plugin_manager'],
			'entity_browser.route_subscriber' => [
				'class' => 'Drupal\entity_browser\RouteSubscriber',
				'arguments' => ['entity.manager', 'plugin.manager.entity_browser.display'],
			],
			'entity_browser.selection_storage' => [
				'class' => 'Drupal\Core\KeyValueStore\KeyValueStoreExpirableInterface',
				'arguments' => ['entity_browser'],
			],
			'cache_context.eb_dummy' => ['class' => 'Drupal\entity_browser_test\Cache\Context\DummyCacheContext'],
			'plugin.manager.entity_limit' => ['class' => 'Drupal\entity_limit\EntityLimitPluginManager', 'parent' => 'default_plugin_manager'],
			'entity_limit.inspector' => [
				'class' => 'Drupal\entity_limit\EntityLimitInspector',
				'arguments' => ['entity.manager', 'plugin.manager.entity_limit'],
			],
			'plugin.manager.entity_usage.track' => ['class' => 'Drupal\entity_usage\EntityUsageTrackManager', 'parent' => 'default_plugin_manager'],
			'entity_usage.usage' => [
				'class' => 'Drupal\entity_usage\EntityUsage',
				'arguments' => ['database', 'event_dispatcher', 'config.factory', 'module_handler'],
			],
			'entity_usage.entity_update_manager' => [
				'class' => 'Drupal\entity_usage\EntityUpdateManager',
				'arguments' => ['entity_usage.usage', 'plugin.manager.entity_usage.track', 'config.factory'],
			],
			'entity_usage.route_subscriber' => [
				'class' => 'Drupal\entity_usage\Routing\RouteSubscriber',
				'arguments' => ['entity_type.manager', 'config.factory'],
			],
			'plugin.manager.field_group.formatters' => [
				'class' => 'Drupal\field_group\FieldGroupFormatterPluginManager',
				'parent' => 'default_plugin_manager',
			],
			'field_group.subscriber' => ['class' => 'Drupal\field_group\Routing\RouteSubscriber', 'arguments' => ['entity.manager']],
			'field_group.param_converter' => ['class' => 'Drupal\field_group\Routing\FieldGroupConverter'],
			'field_permissions.permissions_service' => [
				'class' => 'Drupal\field_permissions\FieldPermissionsService',
				'arguments' => ['entity_type.manager', 'plugin.field_permissions.types.manager'],
			],
			'plugin.field_permissions.types.manager' => [
				'class' => 'Drupal\field_permissions\Plugin\FieldPermissionType\Manager',
				'parent' => 'default_plugin_manager',
			],
			'geolocation.ajax_subscriber' => ['class' => 'Drupal\geolocation\EventSubscriber\AjaxResponseSubscriber'],
			'plugin.manager.geolocation.geocoder' => ['class' => 'Drupal\geolocation\GeocoderManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.dataprovider' => ['class' => 'Drupal\geolocation\DataProviderManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.mapprovider' => ['class' => 'Drupal\geolocation\MapProviderManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.mapcenter' => ['class' => 'Drupal\geolocation\MapCenterManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.location' => ['class' => 'Drupal\geolocation\LocationManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.mapfeature' => ['class' => 'Drupal\geolocation\MapFeatureManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.locationinput' => ['class' => 'Drupal\geolocation\LocationInputManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.geolocation.geocoder_country_formatting' => [
				'class' => 'Drupal\geolocation\GeocoderCountryFormattingManager',
				'parent' => 'default_plugin_manager',
			],
			'plugin.manager.metatag.tag' => ['class' => 'Drupal\metatag\MetatagTagPluginManager', 'parent' => 'default_plugin_manager'],
			'plugin.manager.metatag.group' => ['class' => 'Drupal\metatag\MetatagGroupPluginManager', 'parent' => 'default_plugin_manager'],
			'metatag.token' => ['class' => 'Drupal\metatag\MetatagToken', 'arguments' => ['token']],
			'metatag.manager' => [
				'class' => 'Drupal\metatag\MetatagManager',
				'arguments' => [
					'plugin.manager.metatag.group',
					'plugin.manager.metatag.tag',
					'metatag.token',
					'logger.factory',
					'entity_type.manager',
				],
			],
			'plugin.manager.paragraphs.behavior' => [
				'class' => 'Drupal\paragraphs\ParagraphsBehaviorManager',
				'parent' => 'default_plugin_manager',
				'arguments' => ['entity_type.manager', 'config.factory'],
			],
			'paragraphs_type.uuid_lookup' => [
				'class' => '\Drupal\paragraphs\ParagraphsTypeIconUuidLookup',
				'arguments' => ['cache.bootstrap', 'lock', 'entity_type.manager'],
			],
			'paragraphs_collection.style_discovery' => [
				'class' => '\Drupal\paragraphs_collection\StyleDiscovery',
				'arguments' => [
					'module_handler',
					'string_translation',
					'controller_resolver',
					'cache.discovery',
					'theme_handler',
					'config.factory',
					'current_user',
				],
			],
			'paragraphs_collection.grid_layout_discovery' => [
				'class' => '\Drupal\paragraphs_collection\GridLayoutDiscovery',
				'arguments' => ['module_handler', 'cache.discovery', 'theme_handler'],
			],
			'paragraphs_collection.style_config_cache_tag_invalidator' => [
				'class' => 'Drupal\paragraphs_collection\EventSubscriber\ParagraphsCollectionStyleConfigCacheTag',
				'arguments' => ['cache_tags.invalidator'],
			],
			'pathauto.generator' => [
				'class' => 'Drupal\pathauto\PathautoGenerator',
				'arguments' => [
					'config.factory',
					'module_handler',
					'token',
					'pathauto.alias_cleaner',
					'pathauto.alias_storage_helper',
					'pathauto.alias_uniquifier',
					'pathauto.verbose_messenger',
					'string_translation',
					'token.entity_mapper',
					'entity_type.manager',
					'plugin.manager.alias_type',
				],
			],
			'pathauto.alias_cleaner' => [
				'class' => 'Drupal\pathauto\AliasCleaner',
				'arguments' => [
					'config.factory',
					'pathauto.alias_storage_helper',
					'language_manager',
					'cache.discovery',
					'transliteration',
					'module_handler',
				],
			],
			'pathauto.alias_storage_helper' => [
				'class' => 'Drupal\pathauto\AliasStorageHelper',
				'arguments' => [
					'config.factory',
					'path.alias_storage',
					'database',
					'pathauto.verbose_messenger',
					'string_translation',
				],
			],
			'pathauto.alias_uniquifier' => [
				'class' => 'Drupal\pathauto\AliasUniquifier',
				'arguments' => [
					'config.factory',
					'pathauto.alias_storage_helper',
					'module_handler',
					'router.route_provider',
					'path.alias_manager',
				],
			],
			'pathauto.verbose_messenger' => [
				'class' => 'Drupal\pathauto\VerboseMessenger',
				'arguments' => ['config.factory', 'current_user', 'messenger'],
			],
			'plugin.manager.alias_type' => ['class' => 'Drupal\pathauto\AliasTypeManager', 'parent' => 'default_plugin_manager'],
			'pathauto.settings_cache_tag' => [
				'class' => 'Drupal\pathauto\EventSubscriber\PathautoSettingsCacheTag',
				'arguments' => ['entity_field.manager', 'plugin.manager.alias_type'],
			],
			'redirect.404_subscriber' => [
				'class' => 'Drupal\redirect_404\EventSubscriber\Redirect404Subscriber',
				'arguments' => [
					'path.current',
					'path.matcher',
					'request_stack',
					'language_manager',
					'redirect.not_found_storage',
					'config.factory',
				],
			],
			'redirect.not_found_storage' => [
				'class' => 'Drupal\redirect_404\SqlRedirectNotFoundStorage',
				'arguments' => ['database', 'config.factory'],
			],
			'logger.redirect_404' => [
				'public' => false,
				'class' => '\Drupal\redirect_404\Render\Redirect404LogSuppressor',
				'decorates' => 'logger.factory',
				'arguments' => ['logger.redirect_404.inner', 'config.factory'],
			],
			'redirect_domain.request_subscriber' => [
				'class' => 'Drupal\redirect_domain\EventSubscriber\DomainRedirectRequestSubscriber',
				'arguments' => ['config.factory', 'redirect.checker', 'path.matcher'],
			],
			'redirect.repository' => [
				'class' => 'Drupal\redirect\RedirectRepository',
				'arguments' => ['entity.manager', 'database', 'config.factory'],
			],
			'redirect.checker' => [
				'class' => 'Drupal\redirect\RedirectChecker',
				'arguments' => ['config.factory', 'state', 'access_manager', 'current_user', 'router.route_provider'],
			],
			'redirect.request_subscriber' => [
				'class' => 'Drupal\redirect\EventSubscriber\RedirectRequestSubscriber',
				'arguments' => [
					'redirect.repository',
					'language_manager',
					'config.factory',
					'path.alias_manager',
					'module_handler',
					'entity.manager',
					'redirect.checker',
					'router.request_context',
					'path_processor_manager',
				],
			],
			'redirect.settings_cache_tag' => [
				'class' => 'Drupal\redirect\EventSubscriber\RedirectSettingsCacheTag',
				'arguments' => ['cache_tags.invalidator'],
			],
			'redirect.route_normalizer_request_subscriber' => [
				'class' => 'Drupal\redirect\EventSubscriber\RouteNormalizerRequestSubscriber',
				'arguments' => ['url_generator', 'path.matcher', 'config.factory', 'redirect.checker'],
			],
			'redirect.route_subscriber' => ['class' => 'Drupal\redirect\Routing\RouteSubscriber'],
			'token.entity_mapper' => [
				'class' => 'Drupal\token\TokenEntityMapper',
				'arguments' => ['entity_type.manager', 'module_handler'],
			],
			'token.tree_builder' => [
				'class' => 'Drupal\token\TreeBuilder',
				'arguments' => ['token', 'token.entity_mapper', 'cache.data', 'language_manager'],
			],
			'token.route_subscriber' => [
				'class' => 'Drupal\token\Routing\RouteSubscriber',
				'arguments' => ['entity_type.manager', 'module_handler'],
			],
			'upgrade_status.string_input' => ['class' => 'Symfony\Component\Console\Input\StringInput', 'arguments' => ['analyse']],
			'upgrade_status.buffered_output' => ['class' => 'Symfony\Component\Console\Output\BufferedOutput'],
			'upgrade_status.deprecation_analyser' => [
				'class' => 'Drupal\upgrade_status\DeprecationAnalyser',
				'arguments' => [
					'keyvalue',
					'logger.channel.upgrade_status',
					'upgrade_status.string_input',
					'upgrade_status.buffered_output',
					'config.factory',
					'state',
				],
			],
			'upgrade_status.project_collector' => [
				'class' => 'Drupal\upgrade_status\ProjectCollector',
				'arguments' => ['extension.list.module', 'theme_handler', 'extension.list.profile'],
			],
			'logger.channel.upgrade_status' => ['parent' => 'logger.channel_base', 'arguments' => ['upgrade_status']],
			'queue.inspectable' => ['class' => 'Drupal\upgrade_status\Queue\InspectableQueueFactory', 'arguments' => ['database']],
			'actions_permissions.views_bulk_operations_actions' => ['class' => 'Drupal\actions_permissions\EventSubscriber\ActionsPermissionsEventSubscriber'],
			'views_bulk_operations.data' => [
				'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsViewData',
				'arguments' => ['event_dispatcher'],
			],
			'views_bulk_operations.processor' => [
				'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsActionProcessor',
				'arguments' => [
					'views_bulk_operations.data',
					'plugin.manager.views_bulk_operations_action',
					'current_user',
					'module_handler',
				],
			],
			'plugin.manager.views_bulk_operations_action' => [
				'class' => 'Drupal\views_bulk_operations\Service\ViewsBulkOperationsActionManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'event_dispatcher'],
			],
			'views_bulk_operations.access' => [
				'class' => 'Drupal\views_bulk_operations\Access\ViewsBulkOperationsAccess',
				'arguments' => ['tempstore.private'],
			],
			'views_bulk_operations.view_data_provider' => [
				'class' => 'Drupal\views_bulk_operations\EventSubscriber\ViewsBulkOperationsEventSubscriber',
				'arguments' => ['views_bulk_operations.data'],
			],
			'webform_access.breadcrumb' => [
				'class' => 'Drupal\webform_access\Breadcrumb\WebformAccessBreadcrumbBuilder',
				'arguments' => ['string_translation'],
			],
			'webform_devel.schema' => [
				'class' => 'Drupal\webform_devel\WebformDevelSchema',
				'arguments' => ['plugin.manager.element_info', 'plugin.manager.webform.element'],
			],
			'webform_node.uninstall_validator' => [
				'class' => 'Drupal\webform_node\WebformNodeUninstallValidator',
				'arguments' => ['entity_type.manager', 'string_translation'],
				'lazy' => true,
			],
			'webform_scheduled_email.manager' => [
				'class' => 'Drupal\webform_scheduled_email\WebformScheduledEmailManager',
				'arguments' => [
					'datetime.time',
					'database',
					'language_manager',
					'config.factory',
					'logger.factory',
					'entity_type.manager',
					'webform.token_manager',
				],
			],
			'webform_submission_export_import.importer' => [
				'class' => 'Drupal\webform_submission_export_import\WebformSubmissionExportImportImporter',
				'arguments' => ['config.factory', 'logger.factory', 'entity_type.manager', 'plugin.manager.webform.element'],
			],
			'webform_submission_export_import.route_subscriber' => [
				'class' => 'Drupal\webform_submission_export_import\Routing\WebformSubmissionExportImportRouteSubscriber',
				'arguments' => ['module_handler'],
			],
			'logger.channel.webform_submission_export_import' => [
				'class' => 'Drupal\Core\Logger\LoggerChannel',
				'arguments' => ['webform_submission_export_import'],
			],
			'webform_submission_log.manager' => [
				'class' => 'Drupal\webform_submission_log\WebformSubmissionLogManager',
				'arguments' => ['database'],
			],
			'logger.webform_submission_log' => [
				'class' => 'Drupal\webform_submission_log\WebformSubmissionLogLogger',
				'arguments' => ['logger.log_message_parser', 'webform_submission_log.manager'],
			],
			'webform_submission_log.route_subscriber' => [
				'class' => 'Drupal\webform_submission_log\Routing\WebformSubmissionLogRouteSubscriber',
				'arguments' => ['module_handler'],
			],
			'webform_ui.path_processor' => ['class' => 'Drupal\webform_ui\PathProcessor\WebformUiPathProcessor'],
			'plugin.manager.webform.element' => [
				'class' => 'Drupal\webform\Plugin\WebformElementManager',
				'arguments' => [
					'container.namespaces',
					'cache.discovery',
					'module_handler',
					'theme_handler',
					'config.factory',
					'plugin.manager.element_info',
				],
			],
			'plugin.manager.webform.handler' => [
				'class' => 'Drupal\webform\Plugin\WebformHandlerManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
			],
			'plugin.manager.webform.exporter' => [
				'class' => 'Drupal\webform\Plugin\WebformExporterManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
			],
			'plugin.manager.webform.source_entity' => [
				'class' => 'Drupal\webform\Plugin\WebformSourceEntityManager',
				'arguments' => ['container.namespaces', 'cache.discovery', 'module_handler', 'config.factory'],
			],
			'logger.channel.webform' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['webform']],
			'logger.channel.webform_submission' => ['class' => 'Drupal\Core\Logger\LoggerChannel', 'arguments' => ['webform_submission']],
			'webform.addons_manager' => ['class' => 'Drupal\webform\WebformAddonsManager'],
			'webform.cli_service' => ['class' => 'Drupal\webform\Commands\WebformCliService'],
			'webform.contribute_manager' => [
				'class' => 'Drupal\webform\WebformContributeManager',
				'arguments' => ['cache.default', 'http_client', 'date.formatter', 'config.factory'],
			],
			'webform.elements_validator' => [
				'class' => 'Drupal\webform\WebformEntityElementsValidator',
				'arguments' => ['renderer', 'plugin.manager.webform.element', 'entity_type.manager', 'form_builder'],
			],
			'webform.email_provider' => [
				'class' => 'Drupal\webform\WebformEmailProvider',
				'arguments' => ['config.factory', 'module_handler', 'plugin.manager.mail'],
			],
			'webform.entity_reference_manager' => [
				'class' => 'Drupal\webform\WebformEntityReferenceManager',
				'arguments' => ['current_route_match', 'current_user', 'user.data'],
			],
			'webform.help_manager' => [
				'class' => 'Drupal\webform\WebformHelpManager',
				'arguments' => [
					'current_user',
					'config.factory',
					'module_handler',
					'state',
					'path.matcher',
					'webform.addons_manager',
					'webform.libraries_manager',
					'plugin.manager.webform.element',
				],
			],
			'webform.libraries_manager' => [
				'class' => 'Drupal\webform\WebformLibrariesManager',
				'arguments' => ['library.discovery', 'config.factory', 'module_handler', 'renderer'],
			],
			'webform.message_manager' => [
				'class' => 'Drupal\webform\WebformMessageManager',
				'arguments' => [
					'current_user',
					'config.factory',
					'entity_type.manager',
					'logger.channel.webform',
					'renderer',
					'messenger',
					'webform.request',
					'webform.token_manager',
				],
			],
			'webform.translation_manager' => [
				'class' => 'Drupal\webform\WebformTranslationManager',
				'arguments' => [
					'current_route_match',
					'language_manager',
					'config.factory',
					'messenger',
					'plugin.manager.webform.element',
				],
			],
			'webform.request' => [
				'class' => 'Drupal\webform\WebformRequest',
				'arguments' => [
					'router.route_provider',
					'request_stack',
					'router.admin_context',
					'current_route_match',
					'entity_type.manager',
					'entity_type.repository',
					'webform.entity_reference_manager',
					'plugin.manager.webform.source_entity',
				],
			],
			'webform_submission.generate' => [
				'class' => 'Drupal\webform\WebformSubmissionGenerate',
				'arguments' => ['config.factory', 'webform.token_manager', 'plugin.manager.webform.element'],
			],
			'webform_submission.exporter' => [
				'class' => 'Drupal\webform\WebformSubmissionExporter',
				'arguments' => [
					'config.factory',
					'file_system',
					'entity_type.manager',
					'stream_wrapper_manager',
					'plugin.manager.archiver',
					'plugin.manager.webform.element',
					'plugin.manager.webform.exporter',
				],
			],
			'webform.third_party_settings_manager' => [
				'class' => 'Drupal\webform\WebformThirdPartySettingsManager',
				'arguments' => ['config.factory', 'module_handler', 'path.validator', 'webform.addons_manager'],
			],
			'webform.token_manager' => [
				'class' => 'Drupal\webform\WebformTokenManager',
				'arguments' => ['current_user', 'language_manager', 'config.factory', 'module_handler', 'token'],
			],
			'webform.theme_manager' => [
				'class' => 'Drupal\webform\WebformThemeManager',
				'arguments' => ['config.factory', 'renderer', 'theme.manager', 'theme_handler', 'theme.initialization'],
			],
			'webform.access_rules_manager' => ['class' => 'Drupal\webform\WebformAccessRulesManager', 'arguments' => ['module_handler']],
			'webform_submission.conditions_validator' => [
				'class' => 'Drupal\webform\WebformSubmissionConditionsValidator',
				'arguments' => ['plugin.manager.webform.element'],
			],
			'webform.breadcrumb' => [
				'class' => 'Drupal\webform\Breadcrumb\WebformBreadcrumbBuilder',
				'arguments' => ['module_handler', 'webform.request', 'string_translation'],
			],
			'webform.exception_html_subscriber' => [
				'class' => 'Drupal\webform\EventSubscriber\WebformExceptionHtmlSubscriber',
				'arguments' => [
					'http_kernel',
					'logger.channel.php',
					'redirect.destination',
					'router.no_access_checks',
					'current_user',
					'config.factory',
					'renderer',
					'messenger',
					'webform.token_manager',
				],
			],
			'webform.route_subscriber' => ['class' => 'Drupal\webform\Routing\WebformRouteSubscriber'],
			'webform.webform_route_context' => [
				'class' => 'Drupal\webform\ContextProvider\WebformRouteContext',
				'arguments' => ['current_route_match'],
			],
			'webform.webform_submission_route_context' => [
				'class' => 'Drupal\webform\ContextProvider\WebformSubmissionRouteContext',
				'arguments' => ['current_route_match'],
			],
			'webform.theme_negotiator' => [
				'class' => 'Drupal\webform\Theme\WebformThemeNegotiator',
				'arguments' => ['current_user', 'config.factory'],
			],
			'webform.twig_extension' => ['class' => 'Drupal\webform\Twig\TwigExtension'],
		]);
		return $service;
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
		return $service;
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
		return $service;
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
		return $service;
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
		return $service;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		$service = new PHPStan\Command\ErrorFormatter\TableErrorFormatter($this->getService('relativePathHelper'));
		return $service;
	}


	public function createServiceRegistry(): PHPStan\Rules\Registry
	{
		$service = $this->getService('046')->create();
		return $service;
	}


	public function createServiceRelativePathHelper(): void
	{
		throw new Nette\DI\ServiceCreationException('Unable to create imported service \'relativePathHelper\', it must be added using addService()');
	}


	public function createServiceRules__0(): PHPStan\Rules\Classes\PluginManagerInspectionRule
	{
		$service = new PHPStan\Rules\Classes\PluginManagerInspectionRule;
		return $service;
	}


	public function createServiceRules__1(): PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule
	{
		$service = new PHPStan\Rules\Drupal\Coder\DiscouragedFunctionsRule;
		return $service;
	}


	public function createServiceRules__10(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		$service = new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__11(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		$service = new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__12(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		$service = new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__13(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		$service = new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule($this->getService('broker'), $this->getService('047'));
		return $service;
	}


	public function createServiceRules__14(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		$service = new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__2(): PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule
	{
		$service = new PHPStan\Rules\Drupal\GlobalDrupalDependencyInjectionRule;
		return $service;
	}


	public function createServiceRules__3(): PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule
	{
		$service = new PHPStan\Rules\Drupal\PluginManager\PluginManagerSetsCacheBackendRule;
		return $service;
	}


	public function createServiceRules__4(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		$service = new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__5(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		$service = new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule($this->getService('broker'), $this->getService('047'));
		return $service;
	}


	public function createServiceRules__6(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		$service = new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__7(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		$service = new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule($this->getService('broker'));
		return $service;
	}


	public function createServiceRules__8(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		$service = new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule($this->getService('broker'), $this->getService('047'));
		return $service;
	}


	public function createServiceRules__9(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		$service = new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule($this->getService('broker'), $this->getService('047'));
		return $service;
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		$service = new PHPStan\File\SimpleRelativePathHelper('/var/www/html/d8.cms-garden/web');
		return $service;
	}


	public function createServiceTypeNodeResolverFactory(): PHPStan\PhpDoc\TypeNodeResolverFactory
	{
		$service = new PHPStan\PhpDoc\TypeNodeResolverFactory($this->getService('023'));
		return $service;
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		$service = $this->getService('typeSpecifierFactory')->create();
		return $service;
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		$service = new PHPStan\Analyser\TypeSpecifierFactory($this->getService('023'));
		return $service;
	}


	public function initialize()
	{
		$GLOBALS["drupalRoot"] = '/var/www/html/d8.cms-garden/web';
		$GLOBALS["drupalVendorDir"] = '/var/www/html/d8.cms-garden/vendor';

		if (!defined("DRUPAL_TEST_IN_CHILD_SITE")) {
		  define("DRUPAL_TEST_IN_CHILD_SITE", false);
		}
	}
}
