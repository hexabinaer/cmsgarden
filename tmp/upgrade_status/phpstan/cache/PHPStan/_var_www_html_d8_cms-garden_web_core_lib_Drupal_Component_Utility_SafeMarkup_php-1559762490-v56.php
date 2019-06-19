<?php declare(strict_types = 1);

return array (
  'b616529d806eb647931cb2b8b1bb9e4f' => 
  PHPStan\PhpDoc\ResolvedPhpDocBlock::__set_state(array(
     'varTags' => 
    array (
    ),
     'methodTags' => 
    array (
    ),
     'propertyTags' => 
    array (
    ),
     'paramTags' => 
    array (
    ),
     'returnTag' => NULL,
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'Will be removed before Drupal 9.0.0. Use the appropriate',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '9139fa00e578bebd80efc46c978d5fb9' => 
  PHPStan\PhpDoc\ResolvedPhpDocBlock::__set_state(array(
     'varTags' => 
    array (
    ),
     'methodTags' => 
    array (
    ),
     'propertyTags' => 
    array (
    ),
     'paramTags' => 
    array (
      'string' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\UnionType::__set_state(array(
           'types' => 
          array (
            0 => 
            PHPStan\Type\ObjectType::__set_state(array(
               'className' => 'Drupal\\Component\\Render\\MarkupInterface',
               'subtractedType' => NULL,
            )),
            1 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
          ),
        )),
         'isVariadic' => false,
      )),
      'strategy' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
       'type' => 
      PHPStan\Type\BooleanType::__set_state(array(
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.0.x-dev, will be removed before Drupal 9.0.0.
Instead, you should just check if a variable is an instance of
\\Drupal\\Component\\Render\\MarkupInterface.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'fd179469b01c89d52931e2be39eb7c43' => 
  PHPStan\PhpDoc\ResolvedPhpDocBlock::__set_state(array(
     'varTags' => 
    array (
    ),
     'methodTags' => 
    array (
    ),
     'propertyTags' => 
    array (
    ),
     'paramTags' => 
    array (
      'text' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
       'type' => 
      PHPStan\Type\ObjectType::__set_state(array(
         'className' => 'Drupal\\Component\\Render\\HtmlEscapedText',
         'subtractedType' => NULL,
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'Will be removed before Drupal 9.0.0. Rely on Twig\'s
auto-escaping feature, or use the @link theme_render #plain_text @endlink
key when constructing a render array that contains plain text in order to
use the renderer\'s auto-escaping feature. If neither of these are
possible, \\Drupal\\Component\\Utility\\Html::escape() can be used in places
where explicit escaping is needed.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '50312429adbb26b984ef0a1dd9688c3d' => 
  PHPStan\PhpDoc\ResolvedPhpDocBlock::__set_state(array(
     'varTags' => 
    array (
    ),
     'methodTags' => 
    array (
    ),
     'propertyTags' => 
    array (
    ),
     'paramTags' => 
    array (
      'string' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'args' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\ArrayType::__set_state(array(
           'keyType' => 
          PHPStan\Type\MixedType::__set_state(array(
             'isExplicitMixed' => true,
             'subtractedType' => NULL,
          )),
           'itemType' => 
          PHPStan\Type\MixedType::__set_state(array(
             'isExplicitMixed' => true,
             'subtractedType' => NULL,
          )),
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
       'type' => 
      PHPStan\Type\UnionType::__set_state(array(
         'types' => 
        array (
          0 => 
          PHPStan\Type\ObjectType::__set_state(array(
             'className' => 'Drupal\\Component\\Render\\MarkupInterface',
             'subtractedType' => NULL,
          )),
          1 => 
          PHPStan\Type\StringType::__set_state(array(
          )),
        ),
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.0.0, will be removed before Drupal 9.0.0.
Use \\Drupal\\Component\\Render\\FormattableMarkup.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
);