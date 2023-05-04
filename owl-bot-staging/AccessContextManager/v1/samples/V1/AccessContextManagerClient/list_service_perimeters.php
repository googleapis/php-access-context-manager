<?php
/*
 * Copyright 2023 Google LLC
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

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START accesscontextmanager_v1_generated_AccessContextManager_ListServicePerimeters_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Identity\AccessContextManager\V1\Client\AccessContextManagerClient;
use Google\Identity\AccessContextManager\V1\ListServicePerimetersRequest;
use Google\Identity\AccessContextManager\V1\ServicePerimeter;

/**
 * Lists all [service perimeters]
 * [google.identity.accesscontextmanager.v1.ServicePerimeter] for an
 * access policy.
 *
 * @param string $formattedParent Resource name for the access policy to list [Service Perimeters]
 *                                [google.identity.accesscontextmanager.v1.ServicePerimeter] from.
 *
 *                                Format:
 *                                `accessPolicies/{policy_id}`
 *                                Please see {@see AccessContextManagerClient::accessPolicyName()} for help formatting this field.
 */
function list_service_perimeters_sample(string $formattedParent): void
{
    // Create a client.
    $accessContextManagerClient = new AccessContextManagerClient();

    // Prepare the request message.
    $request = (new ListServicePerimetersRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $accessContextManagerClient->listServicePerimeters($request);

        /** @var ServicePerimeter $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = AccessContextManagerClient::accessPolicyName('[ACCESS_POLICY]');

    list_service_perimeters_sample($formattedParent);
}
// [END accesscontextmanager_v1_generated_AccessContextManager_ListServicePerimeters_sync]
