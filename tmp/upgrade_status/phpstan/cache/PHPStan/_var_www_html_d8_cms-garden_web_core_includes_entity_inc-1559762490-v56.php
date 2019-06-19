<?php declare(strict_types = 1);

return array (
  '010a8c27045fb014dc3c57c408df9d92' => 
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
       'message' => 'in Drupal 8.7.x and will be removed before Drupal 9.0.0. Instead,
use \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::resetCache() on the
required entity types or invalidate specific cache tags.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'aeb91647b31b5aef6d8d6ce9a28a4379' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\UnionType::__set_state(array(
           'types' => 
          array (
            0 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
            1 => 
            PHPStan\Type\NullType::__set_state(array(
            )),
          ),
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
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
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.x-dev and will be removed before Drupal 9.0.0. Use
\\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getBundleInfo() for a
single bundle, or
\\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface::getAllBundleInfo() for
all bundles.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '4d828fe1f654e8b06a13636698134bde' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'id' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\MixedType::__set_state(array(
           'isExplicitMixed' => true,
           'subtractedType' => NULL,
        )),
         'isVariadic' => false,
      )),
      'reset' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\BooleanType::__set_state(array(
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
             'className' => 'Drupal\\Core\\Entity\\EntityInterface',
             'subtractedType' => NULL,
          )),
          1 => 
          PHPStan\Type\NullType::__set_state(array(
          )),
        ),
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.0.x, will be removed before Drupal 9.0.0. Use the
entity type storage\'s load() method.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '9c41ed6e52bdc0da88103b9dd97b8f94' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'revision_id' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\IntegerType::__set_state(array(
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
             'className' => 'Drupal\\Core\\Entity\\EntityInterface',
             'subtractedType' => NULL,
          )),
          1 => 
          PHPStan\Type\NullType::__set_state(array(
          )),
        ),
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity storage\'s loadRevision() method to load a specific entity
revision:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '320b404874a6a2fcfa0b2ae1879292c5' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => NULL,
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity storage\'s deleteRevision() method to delete a specific entity
revision:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '811ab3f2dbc1beab8f39958e9d0b2a70' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'ids' => 
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
      'reset' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\BooleanType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
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
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.0.0 and will be removed before Drupal 9.0.0. Use the
entity type storage\'s loadMultiple() method.',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '71f8334a5d89d0c2f8ddbbe66b9ad4af' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'values' => 
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
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity storage\'s loadByProperties() method to load an entity by their
property values:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'aecc899cb02f7629653f67a758c5eb63' => 
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
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
       'type' => 
      PHPStan\Type\UnionType::__set_state(array(
         'types' => 
        array (
          0 => 
          PHPStan\Type\ObjectType::__set_state(array(
             'className' => 'Drupal\\Core\\Entity\\EntityInterface',
             'subtractedType' => NULL,
          )),
          1 => 
          PHPStan\Type\NullType::__set_state(array(
          )),
        ),
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity storage\'s loadUnchanged() method to load an unchanged entity:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'e1dc384be499bb52d1c6ae846e518afc' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'ids' => 
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
     'returnTag' => NULL,
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity storage\'s delete() method to delete multiple entities:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'bdb7add3954cdb73d799eee64b3d81c1' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'values' => 
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
      PHPStan\Type\ObjectType::__set_state(array(
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'subtractedType' => NULL,
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'in Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
The method overriding Entity::create() for the entity type, e.g.
\\Drupal\\node\\Entity\\Node::create() if the entity type is known. If the
entity type is variable, use the entity storage\'s create() method to
construct a new entity:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '11e2bfb09cdb7bff3f2fc7d5b249e0c1' => 
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
      'entity' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\ObjectType::__set_state(array(
           'className' => 'Drupal\\Core\\Entity\\EntityInterface',
           'subtractedType' => NULL,
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
          PHPStan\Type\StringType::__set_state(array(
          )),
          1 => 
          PHPStan\Type\NullType::__set_state(array(
          )),
        ),
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0. Use
the entity\'s label() method to get the label of the entity:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'd207bf3e12af44b3a1dd7b82654ffbb4' => 
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
      'entity' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\ObjectType::__set_state(array(
           'className' => 'Drupal\\Core\\Entity\\EntityInterface',
           'subtractedType' => NULL,
        )),
         'isVariadic' => false,
      )),
      'view_mode' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'langcode' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'reset' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\BooleanType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
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
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0.
Use the entity view builder\'s view() method for creating a render array:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  'eeb1a0b12d82134ef2914205e75f9893' => 
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
      'entities' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\ArrayType::__set_state(array(
           'keyType' => 
          PHPStan\Type\MixedType::__set_state(array(
             'isExplicitMixed' => false,
             'subtractedType' => NULL,
          )),
           'itemType' => 
          PHPStan\Type\ObjectType::__set_state(array(
             'className' => 'Drupal\\Core\\Entity\\EntityInterface',
             'subtractedType' => NULL,
          )),
        )),
         'isVariadic' => false,
      )),
      'view_mode' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'langcode' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'reset' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\BooleanType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
    ),
     'returnTag' => 
    PHPStan\PhpDoc\Tag\ReturnTag::__set_state(array(
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
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0.
Use the entity view builder\'s viewMultiple() method for creating a render
array for the provided entities:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '9460620dc020a4b949510d98488a9b94' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'bundle' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'view_mode' => 
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
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
         'subtractedType' => NULL,
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0.
If the display is available in configuration use:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
  '652600a144081a01bc8a419f66e56a6b' => 
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
      'entity_type' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'bundle' => 
      PHPStan\PhpDoc\Tag\ParamTag::__set_state(array(
         'type' => 
        PHPStan\Type\StringType::__set_state(array(
        )),
         'isVariadic' => false,
      )),
      'form_mode' => 
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
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
         'subtractedType' => NULL,
      )),
    )),
     'throwsTag' => NULL,
     'deprecatedTag' => 
    PHPStan\PhpDoc\Tag\DeprecatedTag::__set_state(array(
       'message' => 'as of Drupal 8.0.x, will be removed before Drupal 9.0.0.
If the entity form display is available in configuration use:',
    )),
     'isDeprecated' => true,
     'isInternal' => false,
     'isFinal' => false,
  )),
);