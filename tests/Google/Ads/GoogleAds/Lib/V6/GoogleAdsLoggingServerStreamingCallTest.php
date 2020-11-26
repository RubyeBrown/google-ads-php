<?php

/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Lib\V6;

use Google\Ads\GoogleAds\V6\Services\SearchGoogleAdsStreamRequest;
use Google\ApiCore\Transport\Grpc\ForwardingServerStreamingCall;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Unit tests for `GoogleAdsLoggingServerStreamingCall`.
 *
 * @covers \Google\Ads\GoogleAds\Lib\V6\GoogleAdsLoggingServerStreamingCall
 * @small
 */
class GoogleAdsLoggingServerStreamingCallTest extends TestCase
{

    public function testGetStatus()
    {
        // Prepares the inner call.
        $expectedStatus = new \stdClass();
        $expectedStatus->code = 0;
        $expectedStatus->message = 'success';
        $expectedStatus->metadata = ['request-id' => ['AbCDeF']];
        $forwardingCallMock = $this->getMockBuilder(ForwardingServerStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $forwardingCallMock->method('getStatus')->willReturn($expectedStatus);

        // Instantiate an GoogleAdsLoggingServerStreamingCall.
        $loggerMock =
            $this->getMockBuilder(LoggerInterface::class)->disableOriginalConstructor()->getMock();
        $googleAdsCallLogger = new GoogleAdsCallLogger($loggerMock, LogLevel::INFO, 'example.com');
        $googleAdsLoggingServerStreamingCall = new GoogleAdsLoggingServerStreamingCall(
            $forwardingCallMock,
            [
                'method' => 'GoogleAdsService/SearchStream',
                'argument' => new SearchGoogleAdsStreamRequest()
            ],
            $googleAdsCallLogger
        );

        $serverStreamingCallResponse = $googleAdsLoggingServerStreamingCall->getStatus();

        $this->assertSame($expectedStatus, $serverStreamingCallResponse);
    }

    public function testResponses()
    {
        // Prepares the inner call.
        $forwardingCallMock = $this->getMockBuilder(ForwardingServerStreamingCall::class)
            ->disableOriginalConstructor()
            ->getMock();
        $forwardingCallMock->method('responses')->willReturn(['response 1', 'response 2']);

        // Instantiate an GoogleAdsLoggingServerStreamingCall.
        $loggerMock =
            $this->getMockBuilder(LoggerInterface::class)->disableOriginalConstructor()->getMock();
        $googleAdsCallLogger = new GoogleAdsCallLogger($loggerMock, LogLevel::INFO, 'example.com');
        $googleAdsLoggingServerStreamingCall = new GoogleAdsLoggingServerStreamingCall(
            $forwardingCallMock,
            [
                'method' => 'GoogleAdsService/SearchStream',
                'argument' => new SearchGoogleAdsStreamRequest()
            ],
            $googleAdsCallLogger
        );

        // Checks if the returned results are the same as those in the inner call;
        $actualResponses = [];
        foreach ($googleAdsLoggingServerStreamingCall->responses() as $response) {
            $actualResponses[] = $response;
        }
        $this->assertEquals(['response 1', 'response 2'], $actualResponses);
    }
}