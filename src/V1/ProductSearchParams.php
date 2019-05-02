<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters for a product search request.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ProductSearchParams</code>
 */
class ProductSearchParams extends \Google\Protobuf\Internal\Message
{
    /**
     * The bounding polygon around the area of interest in the image.
     * Optional. If it is not specified, system discretion will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 9;</code>
     */
    private $bounding_poly = null;
    /**
     * The resource name of a [ProductSet][google.cloud.vision.v1.ProductSet] to
     * be searched for similar images.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     *
     * Generated from protobuf field <code>string product_set = 6;</code>
     */
    private $product_set = '';
    /**
     * The list of product categories to search in. Currently, we only consider
     * the first category, and either "homegoods", "apparel", or "toys" should be
     * specified.
     *
     * Generated from protobuf field <code>repeated string product_categories = 7;</code>
     */
    private $product_categories;
    /**
     * The filtering expression. This can be used to restrict search results based
     * on Product labels. We currently support an AND of OR of key-value
     * expressions, where each expression within an OR must have the same key. An
     * '=' should be used to connect the key and value.
     * For example, "(color = red OR color = blue) AND brand = Google" is
     * acceptable, but "(color = red OR brand = Google)" is not acceptable.
     * "color: red" is not acceptable because it uses a ':' instead of an '='.
     *
     * Generated from protobuf field <code>string filter = 8;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\BoundingPoly $bounding_poly
     *           The bounding polygon around the area of interest in the image.
     *           Optional. If it is not specified, system discretion will be applied.
     *     @type string $product_set
     *           The resource name of a [ProductSet][google.cloud.vision.v1.ProductSet] to
     *           be searched for similar images.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $product_categories
     *           The list of product categories to search in. Currently, we only consider
     *           the first category, and either "homegoods", "apparel", or "toys" should be
     *           specified.
     *     @type string $filter
     *           The filtering expression. This can be used to restrict search results based
     *           on Product labels. We currently support an AND of OR of key-value
     *           expressions, where each expression within an OR must have the same key. An
     *           '=' should be used to connect the key and value.
     *           For example, "(color = red OR color = blue) AND brand = Google" is
     *           acceptable, but "(color = red OR brand = Google)" is not acceptable.
     *           "color: red" is not acceptable because it uses a ':' instead of an '='.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearch::initOnce();
        parent::__construct($data);
    }

    /**
     * The bounding polygon around the area of interest in the image.
     * Optional. If it is not specified, system discretion will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 9;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * The bounding polygon around the area of interest in the image.
     * Optional. If it is not specified, system discretion will be applied.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 9;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * The resource name of a [ProductSet][google.cloud.vision.v1.ProductSet] to
     * be searched for similar images.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     *
     * Generated from protobuf field <code>string product_set = 6;</code>
     * @return string
     */
    public function getProductSet()
    {
        return $this->product_set;
    }

    /**
     * The resource name of a [ProductSet][google.cloud.vision.v1.ProductSet] to
     * be searched for similar images.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     *
     * Generated from protobuf field <code>string product_set = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProductSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_set = $var;

        return $this;
    }

    /**
     * The list of product categories to search in. Currently, we only consider
     * the first category, and either "homegoods", "apparel", or "toys" should be
     * specified.
     *
     * Generated from protobuf field <code>repeated string product_categories = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProductCategories()
    {
        return $this->product_categories;
    }

    /**
     * The list of product categories to search in. Currently, we only consider
     * the first category, and either "homegoods", "apparel", or "toys" should be
     * specified.
     *
     * Generated from protobuf field <code>repeated string product_categories = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProductCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->product_categories = $arr;

        return $this;
    }

    /**
     * The filtering expression. This can be used to restrict search results based
     * on Product labels. We currently support an AND of OR of key-value
     * expressions, where each expression within an OR must have the same key. An
     * '=' should be used to connect the key and value.
     * For example, "(color = red OR color = blue) AND brand = Google" is
     * acceptable, but "(color = red OR brand = Google)" is not acceptable.
     * "color: red" is not acceptable because it uses a ':' instead of an '='.
     *
     * Generated from protobuf field <code>string filter = 8;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filtering expression. This can be used to restrict search results based
     * on Product labels. We currently support an AND of OR of key-value
     * expressions, where each expression within an OR must have the same key. An
     * '=' should be used to connect the key and value.
     * For example, "(color = red OR color = blue) AND brand = Google" is
     * acceptable, but "(color = red OR brand = Google)" is not acceptable.
     * "color: red" is not acceptable because it uses a ':' instead of an '='.
     *
     * Generated from protobuf field <code>string filter = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

