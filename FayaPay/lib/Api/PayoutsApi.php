<?php
/**
 * PayoutsApi
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
 * PayoutsApi Class Doc Comment
 *
 * @category Class
 * @package  FayaPay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayoutsApi
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
     * Operation fetchPayout
     *
     * Fetch a Payout
     *
     * @param  string $id The id of the payout (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FayaPay\Model\PayoutDTO
     */
    public function fetchPayout($id)
    {
        list($response) = $this->fetchPayoutWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation fetchPayoutWithHttpInfo
     *
     * Fetch a Payout
     *
     * @param  string $id The id of the payout (required)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FayaPay\Model\PayoutDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchPayoutWithHttpInfo($id)
    {
        $returnType = '\FayaPay\Model\PayoutDTO';
        $request = $this->fetchPayoutRequest($id);

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
                        '\FayaPay\Model\PayoutDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchPayoutAsync
     *
     * Fetch a Payout
     *
     * @param  string $id The id of the payout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchPayoutAsync($id)
    {
        return $this->fetchPayoutAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchPayoutAsyncWithHttpInfo
     *
     * Fetch a Payout
     *
     * @param  string $id The id of the payout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchPayoutAsyncWithHttpInfo($id)
    {
        $returnType = '\FayaPay\Model\PayoutDTO';
        $request = $this->fetchPayoutRequest($id);

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
     * Create request for operation 'fetchPayout'
     *
     * @param  string $id The id of the payout (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchPayoutRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling fetchPayout'
            );
        }

        $resourcePath = '/v1/Payouts/{Id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'Id' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation listPayouts
     *
     * List Payouts
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FayaPay\Model\ListResponseOfPayoutDTO
     */
    public function listPayouts($ending_before = null, $starting_after = null, $limit = '10')
    {
        list($response) = $this->listPayoutsWithHttpInfo($ending_before, $starting_after, $limit);
        return $response;
    }

    /**
     * Operation listPayoutsWithHttpInfo
     *
     * List Payouts
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \FayaPay\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FayaPay\Model\ListResponseOfPayoutDTO, HTTP status code, HTTP response headers (array of strings)
     */
    public function listPayoutsWithHttpInfo($ending_before = null, $starting_after = null, $limit = '10')
    {
        $returnType = '\FayaPay\Model\ListResponseOfPayoutDTO';
        $request = $this->listPayoutsRequest($ending_before, $starting_after, $limit);

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
                        '\FayaPay\Model\ListResponseOfPayoutDTO',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listPayoutsAsync
     *
     * List Payouts
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPayoutsAsync($ending_before = null, $starting_after = null, $limit = '10')
    {
        return $this->listPayoutsAsyncWithHttpInfo($ending_before, $starting_after, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listPayoutsAsyncWithHttpInfo
     *
     * List Payouts
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPayoutsAsyncWithHttpInfo($ending_before = null, $starting_after = null, $limit = '10')
    {
        $returnType = '\FayaPay\Model\ListResponseOfPayoutDTO';
        $request = $this->listPayoutsRequest($ending_before, $starting_after, $limit);

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
     * Create request for operation 'listPayouts'
     *
     * @param  string $ending_before A cursor for use in pagination. EndingBefore is an object ID that defines your place in the list. Specifying EndingBefore will load all objects that were created before the object you specified. For instance, if you make a list request and receive 50 objects, starting with obj_foo, your subsequent call can include EndingBefore&#x3D;obj_foo in order to fetch the previous page of the list. (optional)
     * @param  string $starting_after A cursor for use in pagination. StartingAfter is an object ID that defines your place in the list. Specifying StartingAfter will load all objects that were created after the object you specified. For instance, if you make a list request and receive 50 objects, ending with obj_foo, your subsequent call can include StartingAfter&#x3D;obj_foo in order to fetch the next page of the list. (optional)
     * @param  int $limit A limit on the number of objects to be returned, between 1 and 50. Defaults to 10. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listPayoutsRequest($ending_before = null, $starting_after = null, $limit = '10')
    {

        $resourcePath = '/v1/Payouts';
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
