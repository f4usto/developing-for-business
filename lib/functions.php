<?php

/**
 * validate wish list data
 * @param array $data
 * @return bool
 */
function isValidProduct(array $data)
{
    if (!isset($data['name']) || !assert(is_string($data['name']) !== false)) {
        return false;
    }
    if (!isset($data['stock']) || !assert(is_numeric($data['stock']))) {
        return false;
    }
    return true;
}

/**
 * Gets wish list data.
 * @param array $data
 * @return array
 */
function getProduct(array $data)
{
    return array(
        'id' => (isset($data['id']) ? $data['id'] : null),
        'name' => $data['name'],
        'price' => $data['price'],
        'stock' => $data['stock']
    );
}

/**
 * Creates a url to remove product from wish list
 * @param int $id
 * @return string
 */
function removeUrl($uri, $id, array $extraQuery = array())
{
    $query = http_build_query(array_merge(['remove' => $id], $extraQuery));
    return sprintf('<a href="/%s?%s">remove</a>', $uri, $query);
}


/**
 * validate wish list data
 * @param array $data
 * @return bool
 */
function isValidWishList(array $data)
{
    if (!isset($data['product_id']) || !assert(is_numeric($data['product_id']))) {
        return false;
    }
    if (!isset($data['email']) || !assert(filter_var($data['email'], FILTER_VALIDATE_EMAIL) !== false)) {
        return false;
    }
    return true;
}

/**
 * Gets wish list data.
 * @param array $data
 * @return array
 */
function getWishList(array $data)
{
    return array(
        'email' => $data['email'],
        'product_id' => $data['product_id'],
        'status' => 'P',
    );
}