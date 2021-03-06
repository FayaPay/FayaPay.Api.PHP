<?php
/**
 * RefundsApi
 * PHP version 5
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * FayaPay API
 *
 * FayaPay API
 *
 * OpenAPI spec version: 1
 * Contact: support@fayapay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FayaPay\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FayaPay\ApiException;
use FayaPay\Configuration;
use FayaPay\HeaderSelector;
use FayaPay\ObjectSerializer;

/**
 * RefundsApi Class Doc Comment
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundsApi
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
     * Operation fetchRefund
     *
     * Fetch a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FayaPay\Model\RefundDTO
     */
    public function fetchRefund($refund_id)
    {
        list($response) = $this->fetchRefundWithHttpInfo($refund_id);
        return $response;
    }

    /**
     * Operation fetchRefundWithHttpInfo
     *
     * Fetch a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FayaPay\Model\RefundDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchRefundWithHttpInfo($refund_id)
    {
        $returnType = '\FayaPay\Model\RefundDTO';
        $request = $this->fetchRefundRequest($refund_id);

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
                        '\FayaPay\Model\RefundDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchRefundAsync
     *
     * Fetch a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchRefundAsync($refund_id)
    {
        return $this->fetchRefundAsyncWithHttpInfo($refund_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchRefundAsyncWithHttpInfo
     *
     * Fetch a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchRefundAsyncWithHttpInfo($refund_id)
    {
        $returnType = '\FayaPay\Model\RefundDTO';
        $request = $this->fetchRefundRequest($refund_id);

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
     * Create request for operation 'fetchRefund'
     *
     * @param  string $refund_id The id of the refund (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchRefundRequest($refund_id)
    {
        // verify the required parameter 'refund_id' is set
        if ($refund_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling fetchRefund'
            );
        }

        $resourcePath = '/v1/Refunds/{RefundId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'RefundId' . '}',
                ObjectSerializer::toPathValue($refund_id),
                $resourcePath
            );
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation listRefunds
     *
     * List Refunds
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FayaPay\Model\ListResponseOfRefundDTO
     */
    public function listRefunds($ending_before = null, $starting_after = null, $limit = '10')
    {
        list($response) = $this->listRefundsWithHttpInfo($ending_before, $starting_after, $limit);
        return $response;
    }

    /**
     * Operation listRefundsWithHttpInfo
     *
     * List Refunds
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FayaPay\Model\ListResponseOfRefundDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRefundsWithHttpInfo($ending_before = null, $starting_after = null, $limit = '10')
    {
        $returnType = '\FayaPay\Model\ListResponseOfRefundDTO';
        $request = $this->listRefundsRequest($ending_before, $starting_after, $limit);

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
                        '\FayaPay\Model\ListResponseOfRefundDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FayaPay\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listRefundsAsync
     *
     * List Refunds
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRefundsAsync($ending_before = null, $starting_after = null, $limit = '10')
    {
        return $this->listRefundsAsyncWithHttpInfo($ending_before, $starting_after, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listRefundsAsyncWithHttpInfo
     *
     * List Refunds
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listRefundsAsyncWithHttpInfo($ending_before = null, $starting_after = null, $limit = '10')
    {
        $returnType = '\FayaPay\Model\ListResponseOfRefundDTO';
        $request = $this->listRefundsRequest($ending_before, $starting_after, $limit);

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
     * Create request for operation 'listRefunds'
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listRefundsRequest($ending_before = null, $starting_after = null, $limit = '10')
    {

        $resourcePath = '/v1/Refunds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($ending_before !== null) {
            $queryParams['EndingBefore'] = ObjectSerializer::toQueryValue($ending_before);
        }
        // query params
        if ($starting_after !== null) {
            $queryParams['StartingAfter'] = ObjectSerializer::toQueryValue($starting_after);
        }
        // query params
        if ($limit !== null) {
            $queryParams['Limit'] = ObjectSerializer::toQueryValue($limit);
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation updateRefund
     *
     * Update a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     * @param  \FayaPay\Model\UpdateRefundRequest $update_refund_request The update request (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FayaPay\Model\RefundDTO
     */
    public function updateRefund($refund_id, $update_refund_request)
    {
        list($response) = $this->updateRefundWithHttpInfo($refund_id, $update_refund_request);
        return $response;
    }

    /**
     * Operation updateRefundWithHttpInfo
     *
     * Update a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     * @param  \FayaPay\Model\UpdateRefundRequest $update_refund_request The update request (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FayaPay\Model\RefundDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRefundWithHttpInfo($refund_id, $update_refund_request)
    {
        $returnType = '\FayaPay\Model\RefundDTO';
        $request = $this->updateRefundRequest($refund_id, $update_refund_request);

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
                        '\FayaPay\Model\RefundDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FayaPay\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateRefundAsync
     *
     * Update a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     * @param  \FayaPay\Model\UpdateRefundRequest $update_refund_request The update request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRefundAsync($refund_id, $update_refund_request)
    {
        return $this->updateRefundAsyncWithHttpInfo($refund_id, $update_refund_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateRefundAsyncWithHttpInfo
     *
     * Update a Refund
     *
     * @param  string $refund_id The id of the refund (required)
     * @param  \FayaPay\Model\UpdateRefundRequest $update_refund_request The update request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateRefundAsyncWithHttpInfo($refund_id, $update_refund_request)
    {
        $returnType = '\FayaPay\Model\RefundDTO';
        $request = $this->updateRefundRequest($refund_id, $update_refund_request);

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
     * Create request for operation 'updateRefund'
     *
     * @param  string $refund_id The id of the refund (required)
     * @param  \FayaPay\Model\UpdateRefundRequest $update_refund_request The update request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateRefundRequest($refund_id, $update_refund_request)
    {
        // verify the required parameter 'refund_id' is set
        if ($refund_id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $refund_id when calling updateRefund'
            );
        }
        // verify the required parameter 'update_refund_request' is set
        if ($update_refund_request === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_refund_request when calling updateRefund'
            );
        }

        $resourcePath = '/v1/Refunds/{RefundId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($refund_id !== null) {
            $resourcePath = str_replace(
                '{' . 'refundId' . '}',
                ObjectSerializer::toPathValue($refund_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($update_refund_request)) {
            $_tempBody = $update_refund_request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
