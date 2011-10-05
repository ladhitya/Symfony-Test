<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'fieldName' => 'name',
   'type' => 'string',
   'length' => '255',
   'columnName' => 'name',
  ));
$metadata->mapField(array(
   'fieldName' => 'keyword',
   'type' => 'string',
   'length' => '20',
   'columnName' => 'keyword',
  ));
$metadata->mapField(array(
   'fieldName' => 'shortcode',
   'type' => 'string',
   'length' => '50',
   'columnName' => 'shortcode',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);