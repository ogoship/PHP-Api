<?php
/**
 * ProductsApi
 * PHP version 5
 *
 * @category Class
 * @package  OGOship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OGOship API
 *
 * Description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: tech@ogoship.zendesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace OGOship\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OGOship\ApiException;
use OGOship\Configuration;
use OGOship\HeaderSelector;
use OGOship\ObjectSerializer;

/**
 * ProductsApi Class Doc Comment
 *
 * @category Class
 * @package  OGOship
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation productsGet
     *
     * @param  string $code code (optional)
     * @param  string $eanCode eanCode (optional)
     * @param  \DateTime $modifiedAfter modifiedAfter (optional)
     * @param  int $limit limit (optional, default to 50)
     * @param  int $page page (optional, default to 1)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OGOship\Models\ProductResponse[]
     */
    public function productsGet($code = null, $eanCode = null, $modifiedAfter = null, $limit = '50', $page = '1')
    {
        list($response) = $this->productsGetWithHttpInfo($code, $eanCode, $modifiedAfter, $limit, $page);
        return $response;
    }

    /**
     * Operation productsGetWithHttpInfo
     *
     * @param  string $code (optional)
     * @param  string $eanCode (optional)
     * @param  \DateTime $modifiedAfter (optional)
     * @param  int $limit (optional, default to 50)
     * @param  int $page (optional, default to 1)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OGOship\Models\ProductResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function productsGetWithHttpInfo($code = null, $eanCode = null, $modifiedAfter = null, $limit = '50', $page = '1')
    {
        $returnType = '\OGOship\Models\ProductResponse[]';
        $request = $this->productsGetRequest($code, $eanCode, $modifiedAfter, $limit, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ProductResponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation productsGetAsync
     *
     * 
     *
     * @param  string $code (optional)
     * @param  string $eanCode (optional)
     * @param  \DateTime $modifiedAfter (optional)
     * @param  int $limit (optional, default to 50)
     * @param  int $page (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetAsync($code = null, $eanCode = null, $modifiedAfter = null, $limit = '50', $page = '1')
    {
        return $this->productsGetAsyncWithHttpInfo($code, $eanCode, $modifiedAfter, $limit, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $code (optional)
     * @param  string $eanCode (optional)
     * @param  \DateTime $modifiedAfter (optional)
     * @param  int $limit (optional, default to 50)
     * @param  int $page (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsGetAsyncWithHttpInfo($code = null, $eanCode = null, $modifiedAfter = null, $limit = '50', $page = '1')
    {
        $returnType = '\OGOship\Models\ProductResponse[]';
        $request = $this->productsGetRequest($code, $eanCode, $modifiedAfter, $limit, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'productsGet'
     *
     * @param  string $code (optional)
     * @param  string $eanCode (optional)
     * @param  \DateTime $modifiedAfter (optional)
     * @param  int $limit (optional, default to 50)
     * @param  int $page (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function productsGetRequest($code = null, $eanCode = null, $modifiedAfter = null, $limit = '50', $page = '1')
    {
        if ($limit !== null && $limit > 250) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProductsApi.productsGet, must be smaller than or equal to 250.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProductsApi.productsGet, must be bigger than or equal to 1.');
        }


        $resourcePath = '/api/v1/Products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($code !== null) {
            $queryParams['code'] = ObjectSerializer::toQueryValue($code);
        }
        // query params
        if ($eanCode !== null) {
            $queryParams['eanCode'] = ObjectSerializer::toQueryValue($eanCode);
        }
        // query params
        if ($modifiedAfter !== null) {
            $queryParams['modifiedAfter'] = ObjectSerializer::toQueryValue($modifiedAfter);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation productsPost
     *
     * @param  \OGOship\Models\Product $product product (required)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OGOship\Models\ProductResponse
     */
    public function productsPost($product)
    {
        list($response) = $this->productsPostWithHttpInfo($product);
        return $response;
    }

    /**
     * Operation productsPostWithHttpInfo
     *
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OGOship\Models\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productsPostWithHttpInfo($product)
    {
        $returnType = '\OGOship\Models\ProductResponse';
        $request = $this->productsPostRequest($product);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation productsPostAsync
     *
     * 
     *
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsPostAsync($product)
    {
        return $this->productsPostAsyncWithHttpInfo($product)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productsPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsPostAsyncWithHttpInfo($product)
    {
        $returnType = '\OGOship\Models\ProductResponse';
        $request = $this->productsPostRequest($product);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'productsPost'
     *
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function productsPostRequest($product)
    {
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling productsPost'
            );
        }

        $resourcePath = '/api/v1/Products';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation productsPut
     *
     * @param  string $productCode productCode (required)
     * @param  \OGOship\Models\Product $product product (required)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OGOship\Models\ProductResponse
     */
    public function productsPut($productCode, $product)
    {
        list($response) = $this->productsPutWithHttpInfo($productCode, $product);
        return $response;
    }

    /**
     * Operation productsPutWithHttpInfo
     *
     * @param  string $productCode (required)
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \OGOship\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OGOship\Models\ProductResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function productsPutWithHttpInfo($productCode, $product)
    {
        $returnType = '\OGOship\Models\ProductResponse';
        $request = $this->productsPutRequest($productCode, $product);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ProductResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OGOship\Models\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation productsPutAsync
     *
     * 
     *
     * @param  string $productCode (required)
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsPutAsync($productCode, $product)
    {
        return $this->productsPutAsyncWithHttpInfo($productCode, $product)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation productsPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $productCode (required)
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function productsPutAsyncWithHttpInfo($productCode, $product)
    {
        $returnType = '\OGOship\Models\ProductResponse';
        $request = $this->productsPutRequest($productCode, $product);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'productsPut'
     *
     * @param  string $productCode (required)
     * @param  \OGOship\Models\Product $product (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function productsPutRequest($productCode, $product)
    {
        // verify the required parameter 'productCode' is set
        if ($productCode === null || (is_array($productCode) && count($productCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productCode when calling productsPut'
            );
        }
        // verify the required parameter 'product' is set
        if ($product === null || (is_array($product) && count($product) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $product when calling productsPut'
            );
        }

        $resourcePath = '/api/v1/Products/{productCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($productCode !== null) {
            $resourcePath = str_replace(
                '{' . 'productCode' . '}',
                ObjectSerializer::toPathValue($productCode),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($product)) {
            $_tempBody = $product;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}