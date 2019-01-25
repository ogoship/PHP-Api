<?php
// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

// set OAuth token if you have one, otherwise set merchant id and secret token below
$token = null;

if($token == null)
{
    // How to Acquire OAuth token example
    // OAuth config
    $params = array(
        "client_id" => "123456", // demo id
        "client_secret" => "abcdef", // demo secret
        "username" => "c1aca59f-6882-4a0e-a215-f1fd00705120", // insert your merchant ID here
        "password" => "4fad6701-80be-7744-ddf5-1b7b10eeebca", // insert your secret token here
        "scope" => "read:order write:order read:product write:product", // what permissions to get
        "grant_type" => "password",

    );
    // Get OAuth token
    $authclient = new GuzzleHttp\Client();
    $authresponse = $authclient->request('POST', "https://my.ogoship.com/OAuth/Token", ['form_params' => $params] );

    $header = $authresponse->getHeaders();
    $code = $authresponse->getStatusCode();
    $err = $authresponse->getReasonPhrase();

    if($code != "200")
    {
        echo 'Error fetching OAuth token: ', $err, PHP_EOL;
    }

    $oauth = json_decode($authresponse->getBody());
    $token = $oauth->access_token;
}
// Configure OAuth2 access token for authorization: JWT token
$config = OGOship\Configuration::getDefaultConfiguration()->setAccessToken($token);

// Orders get latest changes example
$apiInstance = new OGOship\Api\OrdersApi(
    new GuzzleHttp\Client(),
    $config
);
$reference = null; // product 'code' or SKU
$modifiedAfter = new \DateTime("2018-10-20T11:11:11+01:00");
$limit = 50; // 1-250
$page = 1; // for getting results over $limit

try {
    $result = $apiInstance->ordersGet($reference, $modifiedAfter, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}

// Products Get latest changes example
$apiInstance = new OGOship\Api\ProductsApi(
    new GuzzleHttp\Client(),
    $config
);
$modifiedAfter = new \DateTime("2018-10-20T11:11:11+01:00"); // \DateTime | 
$limit = 50;
$page = 1;

try {
    $result = $apiInstance->productsGet(null, null, $modifiedAfter, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ProductsGet: ', $e->getMessage(), PHP_EOL;
}

// Add a new product example
$apiInstance = new OGOship\Api\ProductsApi(
    new GuzzleHttp\Client(),
    $config
);

// generate a "code"
$code = (new DateTime("now"))->getTimeStamp();
// create product model

$product = new OGOship\Models\Product();
$product->setcode($code);
$product->setlanguageCode("en");
$product->setName("Test product");

try {
    $result = $apiInstance->productsPost($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ProductsPost: ', $e->getMessage(), PHP_EOL;
}

// fetch the product just created

try {
    $result = $apiInstance->productsGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ProductsGet: ', $e->getMessage(), PHP_EOL;
}

if($result == null || count($result) == 0)
{
    echo "Product not found";
}
if(count($result) > 1)
{
    echo "Error: Multiple products with same code found, this should be fixed in myOGO";
}
$newproduct = $result[0];

// editing product details
$newproduct->setName("edited new product");
$newproduct->setDescription("newly added description");

// for changing the code, PUT with the old code has to be used
$oldcode = $newproduct->getCode();
$newproduct->setCode($newproduct->getCode() . "B");
try {
    $result = $apiInstance->productsPut($oldcode, $newproduct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->ProductsPut: ', $e->getMessage(), PHP_EOL;
}

?>