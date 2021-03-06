<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/bigtable.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Bigtable.SampleRowKeys.
 *
 * Generated from protobuf message <code>google.bigtable.v2.SampleRowKeysRequest</code>
 */
class SampleRowKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     */
    private $table_name = '';

    public function __construct() {
        \GPBMetadata\Google\Bigtable\V2\Bigtable::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * The unique name of the table from which to sample row keys.
     * Values are of the form
     * `projects/<project>/instances/<instance>/tables/<table>`.
     *
     * Generated from protobuf field <code>string table_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;

        return $this;
    }

}

