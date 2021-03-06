<?php
/******************************************************************************
 * Copyright 2017 Okta, Inc.                                                  *
 *                                                                            *
 * Licensed under the Apache License, Version 2.0 (the "License");            *
 * you may not use this file except in compliance with the License.           *
 * You may obtain a copy of the License at                                    *
 *                                                                            *
 *      http://www.apache.org/licenses/LICENSE-2.0                            *
 *                                                                            *
 * Unless required by applicable law or agreed to in writing, software        *
 * distributed under the License is distributed on an "AS IS" BASIS,          *
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.   *
 * See the License for the specific language governing permissions and        *
 * limitations under the License.                                             *
 ******************************************************************************/

use Okta\Sessions\SessionIdentityProvider;
use PHPUnit\Framework\TestCase;

class SessionIdentityProviderTest extends BaseUnitTestCase
{
    protected $properties;

    /** @var  \Okta\Sessions\SessionIdentityProvider */
    protected $testable;

    protected $model = '{"id": "abc123", "type": "ACTIVE"}';
    protected $modelType = \Okta\Sessions\SessionIdentityProvider::class;

    /** @test */
    public function id_is_accessible()
    {
        $this->assertEquals($this->properties->id, $this->testable->getId());
        $this->assertEquals($this->properties->id, $this->testable->id);
    }

    /** @test */
    public function type_is_accessible()
    {
        $this->assertEquals($this->properties->type, $this->testable->getType());
        $this->assertEquals($this->properties->type, $this->testable->type);
    }


}
